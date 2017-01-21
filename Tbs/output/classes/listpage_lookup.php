<?php

class ListPage_Lookup extends ListPage_Embed
{
	/**
      * String where for query
      *
      * @var string
      */
	var $strLookupWhere = "";
	/**
      * Field of category
      *
      * @var string
      */
	var $categoryField = "";
	/**
      * Field of link
      *
      * @var string
      */
	var $linkField = "";
	/**
      * Parent id
      *
      * @var integer
      */
	var $parId = 0;
	/**
      * Field of lookup
      *
      * @var string
      */
	var $lookupField = "";
	/**
      * Control of lookup
      *
      * @var string
      */
	var $lookupControl = "";
	/**
      * Category of lookup
      *
      * @var array
      */
	var $lookupCategory = array();
	/**
      * Table of lookup
      *
      * @var string
      */
	var $lookupTable = "";
	/**
      * Params of lookup
      *
      * @var string
      */
	var $lookupParams = "";
	/**
      * Select field of lookup
      *
      * @var string
      */
	var $lookupSelectField = "";
	/**
      * Field customed
      *
      * @var string
      */
	var $customField = "";
	/**
      * Field displayed
      *
      * @var string
      */
	var $dispField = "";
	var $mainTable = "";
	var $mainField = "";
	
	var $dispFieldAlias = "";
	
	var $lookupValuesArr = array();
	
	/**
      * Constructor, set initial params
      *
      * @param array $params
      */
	function ListPage_Lookup(&$params)
	{
		// call parent constructor. always at the first line!!!
		parent::ListPage_Embed($params);
		// init params
		$this->initLookupParams();	
		
		$this->permis[$this->tName]["search"] = 1;		
		$this->isUseAjaxSuggest = false;	
	}

	protected function assingSessionPrefix() 
	{
		$mainTable = postvalue("table");
		$mainField = postvalue("field");
		$this->sessionPrefix = $this->tName."_lookup_".$this->mainTable.'_'.$this->mainField;	
	}
	
	function initLookupParams()
	{
		$this->parId = postvalue("parId");
		$this->firstTime = postvalue("firsttime");
		$this->mainField = postvalue("field");
		$this->lookupControl = postvalue("control");
		$this->lookupCategory = postvalue("category");
		$this->mainTable = postvalue("table");
				
		// convert into an array as parent ctrl can have multiple values
		if (!is_array($this->lookupCategory))
			$this->lookupCategory = (strlen($this->lookupCategory)!=0) ? splitvalues($this->lookupCategory) : array();
				
		$arrCategory = array();
		foreach($this->lookupCategory as $categValue)
			$arrCategory[] = "category[]=".$categValue;
		
		$lookCategory = implode("&",$arrCategory);
		if($lookCategory)
			$lookCategory = "&".$lookCategory;

		$this->lookupParams = "mode=lookup&id=".$this->id."&parId=".$this->parId."&field=".rawurlencode($this->mainField)
			."&control=".rawurlencode($this->lookupControl).$lookCategory
			."&table=".rawurlencode($this->mainTable)."&editMode=".postvalue('editMode');
		
		$pageType = postvalue("pageType");
		if($pageType != PAGE_ADD && $pageType != PAGE_EDIT)
			$pageType = PAGE_SEARCH;
			
		$lookupPSet = new ProjectSettings($this->mainTable, $pageType);

		$this->linkField = $lookupPSet->getLWLinkField($this->mainField, false);
		$this->dispField = $lookupPSet->getLWDisplayField($this->mainField, false);
		if ($lookupPSet->getCustomDisplay($this->mainField))
		{
			$this->dispFieldAlias = GetGlobalData("dispFieldAlias", "rrdf1");
			$this->pSet->getSQLQuery()->AddCustomExpression($lookupPSet->getDisplayField($this->mainField), $this->pSet, 
				$this->mainTable, $this->mainField, $this->dispFieldAlias);
			$this->customField = $this->linkField;
		}
		$this->outputFieldValue($this->linkField, 2);
		$this->outputFieldValue($this->dispField, 2);
		
		if ($lookupPSet->useCategory($this->mainField))
			$this->categoryField = $lookupPSet->getCategoryFilter($this->mainField);
		
		$this->strLookupWhere = GetLWWhere($this->mainField, $pageType, $this->mainTable);
		
		if ($this->dispFieldAlias && $this->pSet->appearOnListPage($this->dispField))
			$this->lookupSelectField=$this->dispField;	
		elseif ($this->pSet->appearOnListPage($this->dispField))
			$this->lookupSelectField=$this->dispField;
		else
			$this->lookupSelectField = $this->listFields[0]['fName'];
		
		if($this->categoryField)
		{
			if(!strlen(GetFullFieldName($this->categoryField)))
				$this->categoryField="";
		}
		
		if(!$this->categoryField)
			$this->lookupCategory=array();
	}
	
	/**
	 * clear lookup session data, while loading at first time
	 */
	function clearLookupSessionData()
	{
		if($this->firstTime)
		{
			$sessLookUpUnset = array();
			foreach($_SESSION as $key=>$value)
				if(strpos($key, "_lookup_")!== false)
					$sessLookUpUnset[] = $key;
					
			foreach($sessLookUpUnset as $key)
				unset($_SESSION[$key]);
		}
	}
	
	/**
	 * Checks if need to display grid
	 */
	function isDispGrid() 
	{
		return $this->permis[$this->tName]['add'] || $this->permis[$this->tName]['search'];
	}
	
	/**
	 * Fills info in array about grid.
	 * For new add row
	 * @param array $rowInfoArr array with total info, that assignes grid
	 */
	function fillGridShowInfo(&$rowInfoArr)
	{
		$rowInfoArr["data"]= array();
		$editlink = "";
		$copylink = "";
		//	add inline add row
		$mainPSet = $this->pSet->getTable($this->mainTable);
		if($mainPSet->isAllowToAdd($this->mainField) && $this->permis[$this->tName]['add']) 
		{
			$row = array();
			$row["rowclass"] = "gridRowAdd ".$this->makeClassName("hiddenelem");
			$row["rsclass"] = "gridRowSepAdd ".$this->makeClassName("hiddenelem");
			if($this->listGridLayout == gltVERTICAL)
				$row["rowattrs"] .= "vertical=\"1\"";
			
			$record = array();
			$record["edit_link"]= true;
			$record["inlineedit_link"]= true;
			$record["view_link"]= true;
			$record["copy_link"]= true;
			$record["checkbox"]= true;
			$record["checkbox"]= true;
			$record["editlink_attrs"]= "id=\"editLink_add".$this->id."\"";
			
			
			$record["copylink_attrs"]= "id=\"copyLink_add".$this->id."\" name=\"copyLink_add".$this->id."\"";
			$record["viewlink_attrs"]= "id=\"viewLink_add".$this->id."\" name=\"viewLink_add".$this->id."\"";
			$record["checkbox_attrs"]= "id=\"check_add".$this->id."\" name=\"selection[]\"";
			
			//	add container for inline add controls
			$addedInlineAddContainer = false;
			if($this->permis[$this->tName]['edit']&& $this->isUseInlineEdit)
			{
				$record["inlineeditlink_attrs"]= "id=\"inlineEdit_add".$this->id."\" ";
				$addedInlineAddContainer = true;
			}
			
			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				//detail tables
				$dDataSourceTable = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
				$dShortTable = $this->allDetailsTablesArr[$i]['dShortTable'];
			
				$record[$dShortTable."_dtable_link"]=($this->permis[$dDataSourceTable]['add'] || $this->permis[$dDataSourceTable]['search']);
				$record[$dShortTable."_dtablelink_attrs"] = " href=\"".GetTableLink($dShortTable, "list")."\" id=\"master_".$dShortTable
					."_add".$this->id."\" ";
				if($this->allDetailsTablesArr[$i]['previewOnList'] == DP_INLINE) 
				{
					$record[$dShortTable."_dtablelink_attrs"] = 
						"id = \"".$dShortTable."_preview".$this->id."\"
						caption = \"".GetTableCaption(GoodFieldName($dDataSourceTable))."\" 
						href = \"".GetTableLink($dShortTable, "list")."\"
						style = \"display:none;\"";
				}
			}
			
			$this->addSpansForGridCells('add', $record);
			for($i = 0; $i < count($this->listFields); $i ++) 
			{
				$field = $this->listFields[$i]['fName'];
				$gFieldName = GoodFieldName( $field );				
				if(!$addedInlineAddContainer)
				{
					if($i==0 && !($this->permis[$this->tName]['edit'] && $this->isUseInlineEdit))
						$record[$gFieldName."_value"].= "<span id=\"inlineEdit_add".$this->id."\"></span>";
				}
				$record[$gFieldName."_class"].= $this->fieldClass($field);
				
				if( isset( $this->hiddenColumnClasses[$field] ) )
				{
					$record[ $gFieldName."_class" ] .= " " . $this->hiddenColumnClasses[$field];
					
					if( $this->listGridLayout != gltHORIZONTAL )
						$record[ $gFieldName."_label_class" ] = $this->hiddenColumnClasses[$field];
				}				
			}
			
			if($this->colsOnPage > 1)
				$record["endrecord_block"]= true;
			
			$record["grid_recordheader"]= true;
			$record["grid_vrecord"]= true;
			$row["grid_record"]= array("data" => array());
			//set the $row["grid_record"] value
			$this->setRowsGridRecord($row, $record);
			
			for($i = 1; $i < $this->colsOnPage; $i ++) 
			{
				$rec = array();
				if($i < $this->colsOnPage - 1)
					$rec["endrecord_block"]= true;
				if($row["grid_record"]["data"])
				{				
					$row["grid_record"]["data"][]= $rec;
				}
			}
			
			$row["grid_rowspace"]= true;
			$row["grid_recordspace"]= array("data" => array());
			for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
				$row["grid_recordspace"]["data"][]= true;
			$rowInfoArr["data"][]= $row;
			
		}
	}
	
	/**
	 * Add common html code for simple mode on list page
	 */	
	function addCommonHtml() 
	{
		//add parent common html code
		parent::addCommonHtml();
	}
	
	function addCommonJs()
	{
		$fieldAsDisplay = $this->dispField;
		if ($this->customField)
		{
			$fieldAsDisplay = $this->lookupSelectField;
		}
		
		$this->controlsMap['lookupSelectField'] = $this->lookupSelectField;
		$this->controlsMap['dispFieldAlias'] = $this->dispFieldAlias;
		$this->controlsMap['linkField'] = $this->linkField;
		$this->controlsMap['dispField'] = $this->dispField;
		
		$this->addControlsJSAndCSS();
		$this->addButtonHandlers();
	}
	
	/**
	 * Set order links attribute for order on list page
	 *
	 * @param {string} $field - name field, which is ordering
	 * @param {string} $sort - how is filed ordering, "a" - asc or "d" - desc, default is "a"
	 * @param String $setIcon
	 * @return String		 
	 */
	function setLinksAttr($field, $sort = "", $setIcon = false)
	{
		$href = GetTableLink($this->shortTableName, "list", "orderby=".($sort == "a" ? "d" : "a").$field."&".$this->lookupParams);
		$orderlinkattrs = 'id="order_'.$field.'_'.$this->id.'" name="order_'.$field.'_'.$this->id.'" data-href="'.$href.'" class="rnr-orderlink"';
		
		return $orderlinkattrs;
	}
	
	function addSpanVal($fName, &$data) 
	{
		if ($this->dispFieldAlias && @$this->arrFieldSpanVal[$fName] == 2)
			return "val=\"".runner_htmlspecialchars($data[$this->dispFieldAlias])."\" ";
		else
			return parent::addSpanVal($fName, $data);
	}
	
	function buildLookupWhereClause()
	{
		$arWhereClause = array();
		foreach($this->lookupCategory as $arLookupCategory)
		{
			if($this->cipherer != null)
				$lookupValue = $this->cipherer->MakeDBValue($this->categoryField, $arLookupCategory);
			else 
				$lookupValue = make_db_value($this->categoryField, $arLookupCategory);
			$arWhereClause[] = whereAdd($this->strWhereClause, GetFullFieldName($this->categoryField)."=".$lookupValue);
		}
		
		if(count($arWhereClause) > 1)
			$this->strWhereClause = "(".implode(" OR ", $arWhereClause).")";
		elseif(count($arWhereClause) == 1)
			$this->strWhereClause = $arWhereClause[0];
		
		if(strlen($this->strLookupWhere))
			$this->strWhereClause = whereAdd($this->strWhereClause,$this->strLookupWhere);
		
		// add 1=0 if parent control contain empty value and no search used	
		$mainPSet = $this->pSet->getTable($this->mainTable);
		if($mainPSet->useCategory($this->mainField) && postvalue('editMode') != MODE_SEARCH && !count($this->lookupCategory)/* && !$this->searchClauseObj->isUsedSrch()*/)
			$this->strWhereClause = whereAdd($this->strWhereClause, "1=0");
	}
	
	function buildSQL()
	{
		$this->buildLookupWhereClause();
		if ($this->dispFieldAlias)
		{
			$this->gsqlHead.=", ".$this->dispField." ";
			$this->gsqlHead .= "as ".AddFieldWrappers($this->dispFieldAlias)." ";
		}
		parent::buildSQL();
	}
	
	function buildSearchPanel() 
	{
		if(!$this->permis[$this->tName]["search"])
		{
			return;
		}
		$params = array();
		$params['pageObj'] = &$this;
		$params['panelSearchFields'] = $this->panelSearchFields;
		$this->searchPanel = new SearchPanelLookup($params);
		$this->searchPanel->buildSearchPanel();
	}
	
	/**
	 * Display blocks after loaded template of page
	 *
	 */
	function displayAfterLoadTempl() 
	{
		$lookupSearchControls = $this->xt->fetch_loaded('searchform_text').$this->xt->fetch_loaded('searchform_search').$this->xt->fetch_loaded('searchform_showall');
		$this->xt->assign("lookupSearchControls", $lookupSearchControls);
		
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);
		
		$returnJSON["html"] = parent::displayAfterLoadTempl().$this->xt->fetch_loaded("body");
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}
	
	function addLookupVals()
	{
		$this->controlsMap['lookupVals'] = $this->lookupValuesArr;
	}
	
	function prepareForBuildPage()
	{	
		// build column hiding CSS
		$this->buildMobileCssRules();
		
		//Sorting fields
		$this->orderClause->buildOrderParams();
		
		// delete record
		$this->deleteRecords();
		
		// build sql query
		$this->buildSQL();
		
		// build pagination block
		$this->buildPagination();
		
		// seek page must be executed after build pagination
		$this->seekPageInRecSet($this->querySQL);
		
		$this->setGoogleMapsParams($this->listFields);
		
		// fill grid data
		$this->fillGridData();
		
		$this->addLookupVals();
		
		// add common js code
		$this->addCommonJs();
		
		// add common html code
		$this->addCommonHtml();
		
		// Set common assign
		$this->commonAssign();
		
		// Add cells' custom css
		$this->addCustomCss();
	}
	
	// stroit checkbox, esli eto vozmogno
	function fillCheckAttr(&$record,$data,$keyblock)
	{
		$checkbox_attrs="name=\"selection[]\" value=\"".runner_htmlspecialchars(@$data[$this->linkField])."\" id=\"check".$this->recId."\"";
		$record["checkbox"]=array("begin"=>"<input type='checkbox' ".$checkbox_attrs.">", "data"=>array());
	}
	
	/**
	 * Name of function came from listpage class, but on listpage_lookup it used for collection link and display field data
	 *
	 * @param String type
	 * @param Array &record
	 * @param Array data (optional)
	 */
	function addSpansForGridCells($type, &$record, $data = null) 
	{
		if($type == 'add')
		{
			parent::addSpansForGridCells($type, $record, $data);
			return;
		}
		
		if(!is_null($data))
		{
			if ($this->dispFieldAlias)
				$dispVal = $data[$this->dispFieldAlias];
			else 
				$dispVal = $data[$this->dispField];
			
			$this->lookupValuesArr[] = array('linkVal' => $data[$this->linkField], 'dispVal' => $dispVal);
		}
	}
	
	function proccessRecordValue(&$data, &$keylink, $listFieldInfo)
	{
		$value = parent::proccessRecordValue($data, $keylink, $listFieldInfo);
		
		if ($this->lookupSelectField == $listFieldInfo['fName'])
			$value = '<a href="#" type="lookupSelect'.$this->id.'">'.$value."</a>";
		
		return $value;
	}
	
	function showPage() 
	{
		$this->BeforeShowList();
		
		if (isMobile())
		{
			$this->xt->assign("cancelbutton_block",true);
			$this->xt->assign("searchform_block", true);
			$this->xt->assign("searchform_showall", true);
			$bricksExcept = array("grid_mobile", "pagination", "vmsearch2", "cancelbutton_mobile");
		}
		else 
		{
			$bricksExcept = array("grid", "pagination", "vsearch1", "vsearch2", "search");
			$mainPSet = $this->pSet->getTable($this->mainTable);
			if($mainPSet->isAllowToAdd($this->mainField))
				$bricksExcept[] = "recordcontrols_new";
		}
		
		$this->xt->hideAllBricksExcept($bricksExcept);
		$this->xt->prepare_template($this->templatefile);
		$this->displayAfterLoadTempl();
	}
	
	function buildTotals(&$totals)
	{
	}
	
	function SecuritySQL($strAction, $table="")
	{
		global $strTableName;
		
		if( !strlen($table) )	
			$table = $strTableName;
		
		$strPerm = GetUserPermissions($table);
		$strPerm = !strlen($strPerm) ? "S" : $strPerm;
		
		return SecuritySQL($strAction, $table, $strPerm);
	}
	
	/**
	 * Returns where clause for active master-detail relationship
	 * @return string
	 */
	function getMasterTableSQLClause()
	{
		return "";
	}	
}
?>