<?php
require_once(getabspath('classes/orderclause.php'));
require_once(getabspath('classes/runnerpage.php'));
require_once(getabspath("classes/sql.php"));
require_once(getabspath("classes/projectsettings.php"));

class ListPage extends RunnerPage 
{	
	var $gsqlHead = "";
	var $gsqlFrom = "";
	var $gsqlWhereExpr = "";
	var $gsqlGroupBy = "";
	var $gsqlHaving = ""; 	
	
	var $querySQL = "";
	/**
	 * OrderClause object. For order clause building
	 *
	 * @var object
	 */
	var $orderClause = null;
	/**
	 * Do export or not
	 *
	 * @var bool
	 */
	var $exportTo = false;
	/**
	 * Delete records enabled
	 *
	 * @var bool
	 */
	var $deleteRecs = false;
	/**
	 * Array of fields that is shown on list
	 *
	 * @var array()
	 * @var array['listFields']= array('fName'=>"@f.strName s", 'viewFormat'=>'@f.strViewFormat');
	 */
	var $listFields = array();
	/**
	 * Array of field names that used for totals
	 *
	 * @var array
	 * @var array['totalsFields']= array('fName'=>"@f.strName s", 'totalsType'=>'@f.strTotalsType', 'viewFormat'=>"@f.strViewFormat");
	 */
	var $totalsFields = array();
	/**
	 * Record set, that retrieved from DB
	 *
	 * @var link
	 */
	var $recSet = null;
	/**
	 * If use group scurity or not
	 *
	 * @var integer
	 */
	var $nSecOptions = 0;
	/**
	 * grid layout - gltHORIZONTAL, gltVERTICAL or gltCOLUMNS
	 *
	 * @var bool
	 */
	var $listGridLayout = false;
	/**
	 * If use body scroll for grid
	 *
	 * @var bool
	 */
	 var $isScrollGridBody = false;
	
	/**
	 * Detail keys by detail table
	 *
	 * @var array
	 */
	var $detailKeysByD = array();
	/**
	 * String of OrderBy for query
	 *
	 * @var string
	 */
	var $strOrderBy = "";
	/**
	 * Number of record
	 *
	 * @var integer
	 */
	var $recNo = 1;
	/**
	 * Number of maximum records
	 *
	 * @var integer
	 */
	var $maxRecs = 0;
	/**
	 * Id of row
	 *
	 * @var integer
	 */
	var $rowId = 0;
	/**
	 * Array of selected records for delete
	 *
	 * @var array
	 */
	var $selectedRecs = array();
	/**
	 * Number of record for delete
	 *
	 * @var integer
	 */
	var $recordsDeleted = 0;
	/**
	 * String of part query Where for make sql "select" string
	 *
	 * @var string
	 */
	var $strWhereClause = "";
	var $strHavingClause = "";
	/**
	 * Shows which crireia used for search (all/any)
	 * 
	 * @var string
	 */
	var $strSearchCriteria = "";
	/**
	 * Original table name
	 *
	 * @var string
	 */
	var $origTName = "";
	/**
	 * If use Inline Edit js file or not
	 *
	 * @var bool
	 */
	var $isUseInlineJs = false;
	/**
	 * If use Inline Add on page or not
	 *
	 * @var bool
	 */
	var $isUseInlineAdd = false;
	/**
	 * If use Inline Edit on page or not
	 *
	 * @var bool
	 */
	var $isUseInlineEdit = false;
	/**
	 * If use Custom Labels js file or not
	 *
	 * @var bool
	 */
	var $useCustomLabels = false;
	/**
	 * Fields that used for search on panel, and should be open on every page load
	 *
	 * @var array
	 */
	var $panelSearchFields = array();
	/**
	 * Array of key's fields
	 *
	 * @var array
	 */
	var $arrKeyFields = array();

	
	var $audit = null;
	/**
	 * Are there records on first page or not
	 *
	 * @var bool
	 */
	var $noRecordsFirstPage = false;
	/**
	 * Database type
	 *
	 * @var integer
	 */
	var $dbType = null;
	/**
	 * Add style or not for row highlite
	 *
	 * @var bool
	 */
	var $rowHighlite = false;
	/**
	 * String ?? main table owner's Id
	 *
	 * @var string
	 */
	var $mainTableOwnerID = "";
	/**
	 * Use move next buttons or not
	 *
	 * @var bool
	 */
	var $moveNext = 0;
	/**
	 * There's edit link if use list of icons or not
	 *
	 * @var bool
	 */
	var $edit = false;
	/**
	 * There's inlineEdit link if use list of icons or not
	 *
	 * @var bool
	 */
	var $inlineEdit = false;
	/**
	 * There's copy link if use list of icons or not
	 *
	 * @var bool
	 */
	var $iCopy = false;
	/**
	 * There's view link if use list of icons or not
	 *
	 * @var bool
	 */
	var $iView = false;
	/**
	 * Use print friendly or not
	 *
	 * @var bool
	 */
	var $printFriendly = false;
	/**
	 * Create login page or not
	 *
	 * @var bool
	 */
	var $createLoginPage = false;
		
	var $searchControlBuilder = null;
	/**
	 * Searchpanel class builder
	 *
	 * @var object
	 */
	var $searchPanel = null;
	/**
	 * Fields for which span val should be added
	 *
	 * @var array
	 */
	var $arrFieldSpanVal = array();
	/**
	 * records weren't deleted due locking
	 *
	 * @var lockDelRec
	 */
	var $lockDelRec;
	//	used 
	
	var $firstTime = 0;
	
	var $gMapFields = array();
	
	var $nLoginMethod;
	
	/*
	 * Types of all fields in a list row
	 */
	var $recordFieldTypes = array();
	
	/**
	 * Cells' custom css rules
	 * @var string
	 */
	var $cell_css_rules = "";
	
	/**
	 * Rows' custom css rules
	 * @var string
	 */
	var $row_css_rules = "";

	/**
	 * css rules to hide fields on mobile devices columns
	 * It could be also applied to the desktop version	 
	 * @var string
	 */
	var $mobile_css_rules = "";

	/**
	 *	class names for the fields that were chosen to hide mobile devices
	 *	@var array
	 */
	var $hiddenColumnClasses = array();
	
	/**
	 * An array that keys are different field's css rules
	 *
	 * @var array
	 */
	var $fieldCssRules = array();
		
	/**
	 * The page's where clause without the filters' where applied
	 * @var string
	 */
	var $whereForFilters = '';	
	
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */
	function ListPage(&$params) 
	{
		// call parent constructor
		parent::RunnerPage($params);
		
		$this->pSet->setPage(PAGE_SEARCH);
		
		//	Before Process event
		$this->beforeProcessEvent();
		
		// process master key value
		$this->processMasterKeyValue();
		
		// Set language params, if have more than one language
		$this->setLangParams();
		
		$this->jsSettings['tableSettings'][$this->tName]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;
		
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			// get perm for det tables
			$this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]= $this->getPermissions($this->allDetailsTablesArr[$i]['dDataSourceTable']);
			
			// field names of detail keys of passed detail table, when current is master
			$this->detailKeysByD[$i] = $this->pSet->getDetailKeysByDetailTable($this->allDetailsTablesArr[$i]['dDataSourceTable']);
		}
		
		$this->theSameFieldsType = $this->checkDetailAndMasterFieldTypes();
		
		$this->genId();
		
		// fill span val indicator for totals
		$this->jsSettings['tableSettings'][$this->tName]['totalFields'] = array();
		foreach ($this->totalsFields as $tField)
		{
			$this->jsSettings['tableSettings'][$this->tName]['totalFields'][] = array('type'=>$tField['totalsType'], 'fName'=>$tField['fName'], 'format'=>$tField['viewFormat']);
			
			if ($tField['totalsType'] == 'COUNT')
			{
				$this->outputFieldValue($tField['fName'], 1);
			}
			else
			{
				$this->outputFieldValue($tField['fName'], 2);
			}
		}
		
		//if scroll body of grid
		$this->jsSettings['tableSettings'][$this->tName]['scrollGridBody'] = ($this->listGridLayout == gltHORIZONTAL && $this->isScrollGridBody);
		
		$this->jsSettings['tableSettings'][$this->tName]['permissions'] = $this->permis[$this->tName];
		if($this->pSet->getAdvancedSecurityType() == ADVSECURITY_EDIT_OWN)
			$this->jsSettings['tableSettings'][$this->tName]['isEditOwn'] = $this->permis[$this->tName];
		
		$this->settingsMap["tableSettings"]['inlineEdit'] = array("default"=>false,"jsName"=>"isInlineEdit");
		$this->settingsMap["tableSettings"]['inlineAdd'] = array("default"=>false,"jsName"=>"isInlineAdd");
		$this->settingsMap["tableSettings"]['copy'] = array("default"=>false,"jsName"=>"copy");
		$this->settingsMap["tableSettings"]['view'] = array("default"=>false,"jsName"=>"view");
		
		$this->jsSettings['tableSettings'][$this->tName]['listFields'] = array();
		for($i=0;$i<count($this->listFields);$i++) 
		{
			$this->jsSettings['tableSettings'][$this->tName]['listFields'][] = $this->listFields[$i]['fName'];
			// call addGoogleMapData before call proccessRecordValue!!!
			if ($this->listFields[$i]['viewFormat'] == FORMAT_MAP)
				$this->gMapFields[] = $i;
		}
		
		$this->addPopupLayoutNamesToSettings();
		
		$this->orderClause = new OrderClause($this);
		$this->orderClause->moveNext = $this->moveNext;
	}
	
	/**
	 * Add to the current table settings array popupPagesLayoutNames data
	 * if it makes sense
	 */
	protected function addPopupLayoutNamesToSettings()
	{
		$layoutNames = $this->pSet->getPopupPagesLayoutNames();
		if( count( $layoutNames ) )
			$this->jsSettings['tableSettings'][$this->tName]['popupPagesLayoutNames'] = $this->pSet->getPopupPagesLayoutNames();
	}
	
	/**
	 * Add common html code for all modes on list page
	 */	
	function addCommonHtml() 
	{
		if (!isMobile())
			$this->body["begin"].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";
		
		if($this->is508) {
			$this->body["begin"].= "<a href=\"#skipdata\" title=\""."Skip to table data"."\" class=\"".$this->makeClassName("s508")."\">"."Skip to table data"."</a>";
			$this->body["begin"].= "<a href=\"#skipmenu\" title=\""."Skip to menu"."\" class=\"".$this->makeClassName("s508")."\">"."Skip to menu"."</a>";
			$this->body["begin"].= "<a href=\"#skipsearch\" title=\""."Skip to search"."\" class=\"".$this->makeClassName("s508")."\">"."Skip to search"."</a>";
			$this->body["begin"].= "<a href=\"templates/helpshortcut.htm\" title=\""."Hotkeys reference"."\" class=\"".$this->makeClassName("s508")."\">"."Hotkeys reference"."</a>";
		}
		
		//prepare for dispaly master table info on details table
		$this->displayMasterTableInfo();
	}
	
	/**
	 * Add common javascript files and code
	 */
	function addCommonJs() 
	{
		parent::addCommonJs();
		
		$this->addJsForGrid();
		
		// add button events if exist
		$this->addButtonHandlers();
		
		}
	/**
	 * Add javascript code for grid
	 */
	function addJsForGrid()
	{ 
		if($this->isResizeColumns)
			$this->prepareForResizeColumns();
		
		$this->jsSettings['tableSettings'][$this->tName]['showRows'] = ($this->numRowsFromSQL ? true : false);
		
		$this->initGmaps();	
	}
	
	/**
	 * If use resizable columns
	 * Prepare for resize main table
	 */
	function prepareForResizeColumns()
	{
		if($this->mode!=LIST_AJAX)
		{
			if($this->debugJSMode === true)
				$this->AddJSFile("include/runnerJS/RunnerResizeGrid.js");
		}
	}

	/**
	 * Process master key value from request params
	 * For DPInline mode and use this mode on edit or add page
	 */
	function processMasterKeyValue() 
	{
		if(count($this->masterKeysReq))
		{
			//	copy keys to session
			for($i = 1;$i<=count($this->masterKeysReq);$i++)
				$_SESSION[$this->sessionPrefix."_masterkey".$i]= $this->masterKeysReq[$i];
			
			if(isset($_SESSION[$this->sessionPrefix."_masterkey".$i]))
				unset($_SESSION[$this->sessionPrefix."_masterkey".$i]);
		}
		elseif(count($this->detailKeysByM))
		{
			for($i=0;$i<count($this->detailKeysByM);$i++) 
				if(isset($_SESSION[$this->sessionPrefix."_masterkey".($i + 1)]))
					$this->masterKeysReq[$i+1] = $_SESSION[$this->sessionPrefix."_masterkey".($i + 1)];
				
		}
		//	reset search and page number
		$_SESSION[$this->sessionPrefix."_search"] = 0;
		if($this->firstTime)
			$_SESSION[$this->sessionPrefix."_pagenumber"] = 1;
	}
	/**
	 * Add event before process list
	 */
	function beforeProcessEvent() 
	{
		if($this->eventExists("BeforeProcessList"))
			$this->eventsObject->BeforeProcessList($this->conn, $this);
	}
	/**
	 * Set session variables
	 */
	function setSessionVariables() 
	{
		parent::setSessionVariables();
		
		$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);	
		
		//set session order by
		if(@$_REQUEST["orderby"])
			$_SESSION[$this->sessionPrefix."_orderby"]= @$_REQUEST["orderby"];
		
		//set session goto
		if(@$_REQUEST["goto"])
			$_SESSION[$this->sessionPrefix."_pagenumber"]= @$_REQUEST["goto"];
				
		//	page number
		$this->myPage =(integer) $_SESSION[$this->sessionPrefix."_pagenumber"];
		if(! $this->myPage)
			$this->myPage = 1;
			
		//set page size 
		if(!$this->pageSize)
			$this->pageSize = $this->gPageSize;	
	}
	/**
	 * Order links attribute for order on list page
	 */
	function orderLinksAttr() 
	{
		for($i = 0; $i < count($this->listFields); $i ++) 
		{
			$field = $this->listFields[$i]['fName'];
			$goodName = GoodFieldname($field);
			$this->xt->assign($goodName."_orderlinkattrs", $this->setLinksAttr(GoodFieldName($this->listFields[$i]['fName'])));
			$this->xt->assign($goodName."_fieldheader", true);			
			// add class for field header as field value
			$fieldClassStr = $this->fieldClass($field);
			// add class for mobile columns hiding
			if( isset( $this->hiddenColumnClasses[$field] ) )
				$fieldClassStr .= " ".$this->hiddenColumnClasses[$field];
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_class", $fieldClassStr); 
		}
	}
	/**
	 * Set order links attribute for order on list page
	 *
	 * @param String field	- name field, which is ordering
	 * @param String sort	- how is filed ordering, "a" - asc or "d" - desc, default is "a"
	 * @param String setIcon
	 * @return String
	 */
	function setLinksAttr($field, $sort = "", $setIcon = false) 
	{
		$href = GetTableLink($this->shortTableName, "list", "orderby=".($sort == "a" ? "d" : "a").$field);
		$orderlinkattrs = 'id="order_'.$field.'_'.$this->id.'" name="order_'.$field.'_'.$this->id.'" data-href="'.$href.'" class="rnr-orderlink"';
		
		return $orderlinkattrs;
	}
	
	/**
	 * Delete selected records
	 */
	function deleteRecords() 
	{	
		global $globalEvents; 
		$this->deleteMessage="";
		if(@$_REQUEST["mdelete"]) 
		{
			foreach(@$_REQUEST["mdelete"]as $ind) 
			{
				$selectedKeys = array();
				for($i = 0; $i < count($this->arrKeyFields); $i ++)
					$selectedKeys[$this->arrKeyFields[$i]]= refine($_REQUEST["mdelete".($i + 1)][mdeleteIndex($ind)]);
				$this->selectedRecs[] = $selectedKeys;
			}
		} 
		elseif(@$_REQUEST["selection"]) 
		{
			foreach(@$_REQUEST["selection"]as $keyblock) 
			{
				$arr = explode("&", refine($keyblock));
				if(count($arr) < count($this->arrKeyFields))
					continue;
				$selectedKeys = array();
				for($i = 0; $i < count($this->arrKeyFields); $i ++)
					$selectedKeys[$this->arrKeyFields[$i]]= urldecode(@$arr[$i]);
				$this->selectedRecs[] = $selectedKeys;
			}
		}
		
		$this->recordsDeleted = 0;
		$this->lockDelRec = array();
		foreach($this->selectedRecs as $keys) 
		{
			$where = KeyWhere($keys);
			//	delete only owned records
			if($this->nSecOptions != ADVSECURITY_ALL && $this->nLoginMethod == SECURITY_TABLE && $this->createLoginPage)
				$where = whereAdd($where, SecuritySQL("Delete"));
			
			$strSQl = "delete from ".AddTableWrappers($this->origTName)." where ".$where;
			$retval = true;
			$deletedrs = db_query(SQLQuery::gSQLWhere_having($this->gsqlHead,$this->gsqlFrom,$this->gsqlWhereExpr,$this->gsqlGroupBy, $this->gsqlHaving, $where), $this->conn);
			$deleted_values = $this->cipherer->DecryptFetchedArray($deletedrs);
			if($globalEvents->exists("IsRecordEditable", $this->tName)) 
			{
				if(!$globalEvents->IsRecordEditable($deleted_values, true, $this->tName))
					continue;
			}
			if($this->eventExists("BeforeDelete"))
			{
				$tdeleteMessage = $this->deleteMessage;
				$retval = $this->eventsObject->BeforeDelete($where, $deleted_values, $tdeleteMessage, $this);
				$this->deleteMessage = $tdeleteMessage;
			}
				
			$lockRecord = false;
			
			if($this->lockingObj)
			{
				$lockWhere = "";
				foreach($keys as $keysvalue)
					$lockWhere.=rawurlencode($keysvalue)."&";
					
				$lockWhere = substr($lockWhere,0,-1);
				$lockSQL = "select * from ".AddTableWrappers("tbs_locking")." where ".AddFieldWrappers("keys")."=".db_prepare_string($lockWhere)." and ".AddFieldWrappers("table")."=".db_prepare_string($this->origTName)." and ".AddFieldWrappers("action")."=1";
				$lockSet = db_query($lockSQL, $this->conn);
				
				if($data = db_fetch_array($lockSet)) 
				{	
					$lockRecord = true;
					$this->lockDelRec[] = $keys;
				}
				if($this->mode == LIST_SIMPLE)
					$_SESSION[$this->sessionPrefix."_lockDelRec"] = $this->lockDelRec;
			}
			
			if(!$lockRecord && @$_REQUEST["a"] == "delete" && $retval) 
			{
				$this->recordsDeleted ++;
				// delete associated uploaded files if any
				DeleteUploadedFiles($this->pSet, $deleted_values);
			
				LogInfo($strSQl);
				db_exec($strSQl, $this->conn);
				
				if($this->audit && $deleted_values)
				{
					$fieldsList = $this->pSet->getFieldsList();
					$i=0;
					foreach($deleted_values as $key=>$value)
					{
						if(IsBinaryType($this->pSet->getFieldType($fieldsList[$i])))
							$deleted_audit_values[$fieldsList[$i]] = $value;
						else
							$deleted_audit_values[$key] = $value;
						$i++;
					}
					$this->audit->LogDelete($this->tName, $deleted_audit_values, $keys);
				}
				
				if($this->eventExists("AfterDelete"))
				{
					$tdeleteMessage = $this->deleteMessage;
					$this->eventsObject->AfterDelete($where, $deleted_values,$tdeleteMessage, $this);
					$this->deleteMessage = $tdeleteMessage;
				}
			}
			
			if (strlen($this->deleteMessage)){
				$this->xt->assignbyref("message", $this->deleteMessage);
				$this->xt->assign("message_block",true);
			}
		}
		if(count($this->selectedRecs) && $this->eventExists("AfterMassDelete")) 
			$this->eventsObject->AfterMassDelete($this->recordsDeleted, $this);
	}
	
	/**
	 * PRG rule, to avoid POSTDATA resend
	 */
	function rulePRG() 
	{		
		if(no_output_done() && count($this->selectedRecs) && !strlen($this->deleteMessage)) 
		{	
			// redirect, add a=return param for saving SESSION
			HeaderRedirect($this->shortTableName, $this->getPageType(), "a=return");
			// turned on output buffering, so we need to stop script
			exit();
		}
	}
		
	/**
	 * Add code from program before show list
	 */
	function BeforeShowList() 
	{
		if($this->eventExists("BeforeShowList"))
		{
			$templatefile = $this->templatefile;
			$this->eventsObject->BeforeShowList($this->xt, $templatefile, $this);
			$this->templatefile = $templatefile;
		}
	}
		
	/**
	 * Makes assigns for admin
	 */
	function assignAdmin() 
	{
		if($this->isAdminTable()) 
		{
			$this->xt->assign("exitadminarea_link", true);
			$this->xt->assign("exitaalink_attrs", "id=\"exitAdminArea".$this->id."\"");
		}
		
		if($this->isDynamicPerm && IsAdmin()) 
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$this->id."\"");
		}
	}
	
	/**
	 * Common assign for diferent mode on list page
	 * Branch classes add to this method its individualy code
	 */
	function commonAssign() 
	{
		parent::commonAssign();
		$this->xt->assign("id", $this->id);
		$this->xt->assignbyref("body", $this->body);
		
		$this->xt->enable_section("style_block");
		$this->xt->enable_section("iestyle_block");
		
		$this->xt->assign("newrecord_controls_block", $this->permis[$this->tName]['add']);
		$this->xt->assign("record_controls_block", $this->permis[$this->tName]['add'] || $this->isDispGrid());
		//$this->xt->assign("grid_controls", $this->isDispGrid());	
		
		$this->importLinksAttrs();
		
		$this->xt->assign("changepwd_link", $_SESSION["AccessLevel"]!= ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
		$this->xt->assign("changepwdlink_attrs", "href=\"".GetTableLink("changepwd")."\" onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");
		
		if($this->isShowMenu() || $this->isAdminTable()) 
			$this->xt->assign("quickjump_attrs", 'class="'.$this->makeClassName("quickjump").'"');
		
		$this->xt->assign("more_list", true);
		
		foreach ($this->googleMapCfg['mainMapIds'] as $mapId)
			$this->xt->assign_event($mapId, $this, 'createMapDiv', array('mapId'=>$mapId, 'width'=>$this->googleMapCfg['mapsData'][$mapId]['width'], 'height'=>$this->googleMapCfg['mapsData'][$mapId]['height']));
		
		//add assign for grid block
		$this->addAssignForGrid();
	}
	
	/**
	 * Common assign for grid block in diferent mode on list page
	 */
	function addAssignForGrid()
	{
		if($this->is508)
			$this->xt->assign_section("grid_header", "<caption style=\"display:none\">Table data</caption>", "");
		
		$this->xt->assign("endrecordblock_attrs", "colid=\"endrecord\"");
		
		$this->inlineAddLinksAttrs();
		
		for($i = 0; $i < count($this->listFields); $i ++) 
		{
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldheadercolumn", true);
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldcolumn", true);
			$this->xt->assign(GoodFieldName($this->listFields[$i]['fName'])."_fieldfootercolumn", true);
		}
		
		if($this->isDispGrid()) 
		{
			$colsonpage = $this->recsPerRowList;
			
			$record_header = array("data" => array());
			$record_footer = array("data" => array());
			if ($colsonpage > $this->recordsOnPage && $this->recordsOnPage && $this->listGridLayout != gltVERTICAL){
				$colsonpage = $this->recordsOnPage;
			}
			for($i = 0; $i < $colsonpage; $i ++) 
			{
				$rheader = array();
				$rfooter = array();
				if($i < $colsonpage - 1) 
				{
					$rheader["endrecordheader_block"] = true;
					$rfooter["endrecordfooter_block"] = true;
				}
				$record_header["data"][] = $rheader;
				$record_footer["data"][] = $rfooter;
			}
			$this->xt->assignbyref("record_header", $record_header);
			$this->xt->assignbyref("record_footer", $record_footer);
			$this->xt->assign("grid_header", true);
			$this->xt->assign("grid_footer", true);
			
			// hiding header, if no rows
			if(!$this->numRowsFromSQL){
				$this->xt->assign("gridHeader_class", " ".$this->makeClassName("hiddenelem"));
				$this->xt->assign("gridFooter_class", " ".$this->makeClassName("hiddenelem"));
			}
			
			//$this->xt->assign("grid_footer", true);
			
			// moved from search panel
			$gridTableStyle = "";
			$gridTableStyle = 'style="';
			$gridTableStyle .= $this->recordsOnPage>0 ? '"' : 'width: 50%;"'; 
			$this->xt->assign('gridTable_attrs', $gridTableStyle);
		}
	}
	
	function createMapDiv(&$params) 
	{
		$div = '<div id="'.$params['mapId'].'" style="width: '.$params['width'].'px; height: '.$params['height'].'px;"></div>';
		echo $div;
		return $div; // .net compatibility
	}
	/**
	 * Show import link
	 * Add import link attributes
	 */
	function importLinksAttrs() 
	{
		$this->xt->assign("import_link", $this->permis[$this->tName]['import']);
		$this->xt->assign("importlink_attrs", "id=\"import_".$this->id."\" name=\"import_".$this->id."\"");
	}
	
	/**
	 * Show inline add link
	 * Add inline add attributes
	 */
	function inlineAddLinksAttrs()
	{
		//inline add link and attr
		$this->xt->assign("inlineadd_link", $this->permis[$this->tName]['add']);
		$this->xt->assign("inlineaddlink_attrs", "name=\"inlineAdd_".$this->id."\" href='".GetTableLink($this->shortTableName, "add")."' id=\"inlineAdd".$this->id."\"");
	}
	
	/**
	 * Assign selectAll link and attrs
	 */
	function selectAllLinkAttrs()
	{
		$this->xt->assign("selectall_link", $this->permis[$this->tName]['delete']|| $this->permis[$this->tName]['export']|| $this->permis[$this->tName]['edit']);
		$this->xt->assign("selectalllink_span", $this->buttonShowHideStyle());
		$this->xt->assign("selectalllink_attrs", 
			"name=\"select_all".$this->id."\" 
			id=\"select_all".$this->id."\" 
			href=\"#\"");
	}
	
	/**
	 * Assign checkbox column, header and header attrs
	 */
	function checkboxColumnAttrs()
	{
		$this->xt->assign("checkbox_column", $this->permis[$this->tName]['delete']|| $this->permis[$this->tName]['export']|| $this->permis[$this->tName]['edit']);
		$this->xt->assign("checkbox_header", true);
		$this->xt->assign("checkboxheader_attrs", "id=\"chooseAll_".$this->id."\" class=\"chooseAll".$this->id."\"");
	}
	
	/**
	 * Get common attrs for Print and Export links
	 */
	function getPrintExportLinkAttrs($page)
	{
		if(!$page)
			return '';
		return "name=\"".$page."_selected".$this->id."\" 
				id=\"".$page."_selected".$this->id."\"
				href = '".GetTableLink($this->shortTableName, $page)."'";
	}
	
	/**
	 * Show or hide current button 
	 */
	function buttonShowHideStyle($link="")
	{
		if($link == 'saveall' || $link == 'cancelall')
			return ' style="display:none;" ';

		return $this->numRowsFromSQL > 0 ? '' : ' style="display:none;" ';
	}
	
	/**
	 * Assign editSelected link and attrs 
	 */
	function editSelectedLinkAttrs()
	{
		$this->xt->assign("editselected_link", $this->permis[$this->tName]['edit']);
		$this->xt->assign("editselectedlink_span", $this->buttonShowHideStyle());
		$this->xt->assign("editselectedlink_attrs","
					href='".GetTableLink($this->shortTableName, "edit")."' 
					name=\"edit_selected".$this->id."\" 
					id=\"edit_selected".$this->id."\"");
	}
	
	/**
	 * Assign saveAll link and attrs
	 */
	function saveAllLinkAttrs()
	{
		$this->xt->assign("saveall_link",$this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['add']);
		$this->xt->assign("savealllink_span",$this->buttonShowHideStyle('saveall'));	
		$this->xt->assign("savealllink_attrs","name=\"saveall_edited".$this->id."\" id=\"saveall_edited".$this->id."\"");
	}
	
	/**
	 * Assign cancelAll link and attrs 
	 */
	function cancelAllLinkAttrs()
	{
		$this->xt->assign("cancelall_link",$this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['add']);
		$this->xt->assign("cancelalllink_span",$this->buttonShowHideStyle('cancelall'));
		$this->xt->assign("cancelalllink_attrs","name=\"revertall_edited".$this->id."\" id=\"revertall_edited".$this->id."\"");
	}
	
	/**
	 * Assign delete selected link 
	 */
	function deleteSelectedLink()
	{	
		//delete link and attr
		$this->xt->assign("deleteselected_link", $this->permis[$this->tName]['delete']);
		$this->xt->assign("deleteselectedlink_span", $this->buttonShowHideStyle());
		$this->deleteSelectedAttrs();
	}
	
	/**
	 * Assign delete selected attrs 
	 */
	function deleteSelectedAttrs()
	{
		$this->xt->assign("deleteselectedlink_attrs", "id=\"delete_selected".$this->id."\" name=\"delete_selected".$this->id."\" ");
	}
	
	function getFormInputsHTML() 
	{
		return '';
	}
	
	function getFormTargetHTML() 
	{
		return '';
	}
	
	/**
	 * Seeks recs, depending on page number etc.
	 *
	 * @param string $strSQL
	 */
	function seekPageInRecSet($strSQL) {
		$listarray=false;
		if($this->eventExists("ListQuery"))
		{
			$arrFieldForSort = array();
			$arrHowFieldSort = array();
			for($i = 0; $i < count($this->orderClause->fieldsList); $i++)
			{
				$arrFieldForSort[] = $this->orderClause->fieldsList[$i]->fieldIndex; 
				$arrHowFieldSort[] = $this->orderClause->fieldsList[$i]->orderDirection; 
			}
			$listarray = $this->eventsObject->ListQuery($this->searchClauseObj, $arrFieldForSort, $arrHowFieldSort, 
				$this->masterTable, $this->masterKeysReq, null, $this->pageSize, $this->myPage, $this);
		}
		if($listarray!==false)
			$this->recSet = $listarray;
		else
		{
			if($this->dbType == nDATABASE_MySQL) {
				if($this->maxPages > 1) {
					$strSQL.= " limit ".(($this->myPage - 1) * $this->pageSize).",".$this->pageSize;
				}
				$this->recSet = db_query($strSQL, $this->conn);
			} elseif($this->dbType == nDATABASE_MSSQLServer) {
				if($this->maxPages > 1) {
					$strSQL = AddTop($strSQL, $this->myPage * $this->pageSize);
				}
				$this->recSet = db_query($strSQL, $this->conn);
				db_pageseek($this->recSet, $this->pageSize, $this->myPage);
			} 
			elseif($this->dbType == nDATABASE_Access) 
			{
				if($this->maxPages > 1) 
				{
					$strSQL = AddTop($strSQL, $this->myPage * $this->pageSize);
				}
				$this->recSet = db_query($strSQL, $this->conn);
				db_pageseek($this->recSet, $this->pageSize, $this->myPage);
			} elseif($this->dbType == nDATABASE_Oracle) {
				if($this->maxPages > 1) {
					$strSQL = AddRowNumber($strSQL, $this->myPage * $this->pageSize);
				}
				$this->recSet = db_query($strSQL, $this->conn);
				db_pageseek($this->recSet, $this->pageSize, $this->myPage);
			} elseif($this->dbType == nDATABASE_PostgreSQL) {
				if($this->maxPages > 1) {
					$maxrecs = $this->pageSize;
					$strSQL.= " limit ".$this->pageSize." offset ".(($this->myPage - 1) * $this->pageSize);
				}
				$this->recSet = db_query($strSQL, $this->conn);
			} elseif($this->dbType == nDATABASE_DB2) {
				if($this->maxPages > 1) 
				{
					$strSQL = "with DB2_QUERY as (".$strSQL.") select * from DB2_QUERY where DB2_ROW_NUMBER between ".
					(($this->myPage-1) * $this->pageSize + 1)." and ".($this->myPage * $this->pageSize);
				}
				$this->recSet = db_query($strSQL, $this->conn);
			} elseif($this->dbType == nDATABASE_Informix) {
				if($this->maxPages > 1) {
					$strSQL= AddTopIfx($strSQL,$this->myPage * $this->pageSize);
				}
				$this->recSet = db_query($strSQL, $this->conn);
				db_pageseek($this->recSet, $this->pageSize, $this->myPage);
			} elseif($this->dbType == nDATABASE_SQLite3) {
				if($this->maxPages > 1) {
					$strSQL.= " limit ".(($this->myPage - 1) * $this->pageSize).",".$this->pageSize;
				}
				$this->recSet = db_query($strSQL, $this->conn);
			} else {
				$this->recSet = db_query($strSQL, $this->conn);
				db_pageseek($this->recSet, $this->pageSize, $this->myPage);
			}
		}
	}
	
	/**
	 * Builds SQL query, for retrieve data from DB
	 */
	function buildSQL() 
	{
		$this->gstrOrderBy = $this->gQuery->OrderByToSql();
		$this->gsqlHead = $this->gQuery->HeadToSql();
		if($this->dbType == nDATABASE_DB2) 
			$this->gsqlHead.=", ROW_NUMBER() over () as DB2_ROW_NUMBER ";
		
		$this->gsqlFrom = $this->gQuery->FromToSql();
		$this->gsqlWhereExpr = $this->gQuery->WhereToSql();
		$this->gsqlGroupBy = $this->gQuery->GroupByToSql();
		$this->gsqlHaving = $this->gQuery->Having()->toSql($this->gQuery);

		$whereComponents = $this->getWhereComponents();
		$searchWhere = $whereComponents["searchWhere"];
		$searchHaving = $whereComponents["searchHaving"];
		$joinFromPart = $whereComponents["joinFromPart"];
		
		$filterWhere = $this->getFiltersWhere();
		$filterHaving = $this->getFiltersHaving();
		
		//$this->strWhereClause could contain some conditions for a lookup list page so It needs combining with commonWhere
		$sqlWhere = combineSQLCriteria( array($whereComponents["commonWhere"], $filterWhere, $this->strWhereClause) ); 		
		$sqlHaving = combineSQLCriteria( array($whereComponents["commonHaving"], $filterHaving) );
		$sqlFrom = $this->gsqlFrom.$joinFromPart;
		
		$strSecuritySql = $this->SecuritySQL("Search", $this->tName);
		// where clause with foreign keys of current table and it's master table master keys		
		$masterWhere = $this->getMasterTableSQLClause();
		$this->strWhereClause = combineSQLCriteria( array($searchWhere, $strSecuritySql, $masterWhere, $filterWhere) );
		$this->strHavingClause = combineSQLCriteria( array($searchHaving, $filterHaving) );
		
		
		if( $this->mode != LIST_DETAILS && $this->noRecordsFirstPage && !$this->isRequiredSearchRunning() )
		{
			$this->strWhereClause = whereAdd($this->strWhereClause, "1=0");
			$sqlWhere = combineSQLCriteria( array($sqlWhere, "1=0") );
		}
		
		$searchCombineType = $whereComponents["searchUnionRequired"] ? "or" : "and";	
		
		$strSQL = SQLQuery::gSQLWhere_having($this->gsqlHead, $sqlFrom, $sqlWhere, $this->gsqlGroupBy, $sqlHaving, $searchWhere, $searchHaving, $searchCombineType);	
		$strSQL.= " ".trim( $this->strOrderBy );
		
		//	save SQL parts to use in "Export" and "Printer-friendly" pages and to get prev\next records
		$_SESSION[$this->sessionPrefix."_sql"] = $strSQL;
		$_SESSION[$this->sessionPrefix."_where"] = $this->strWhereClause;
		$_SESSION[$this->sessionPrefix."_having"] = $this->strHavingClause;
		$_SESSION[$this->sessionPrefix."_criteria"] = $searchCombineType;
		$_SESSION[$this->sessionPrefix."_order"] = $this->strOrderBy;
		$_SESSION[$this->sessionPrefix."_joinFromPart"] = $joinFromPart;
		
		//	select and display records
		$this->addMasterDetailSubQuery();
		
		$strSQLbak = $strSQL;
		$whereModifiedInEvent = false;
		if( $this->eventExists("BeforeQueryList") )
		{
			$tstrWhereClause = $this->strWhereClause;
			$tstrOrderBy = $this->strOrderBy;
			
			$this->eventsObject->BeforeQueryList($strSQL, $tstrWhereClause, $tstrOrderBy, $this);
			
			$whereModifiedInEvent = $tstrWhereClause != $this->strWhereClause;
			$this->strWhereClause = $tstrWhereClause;
			$this->strOrderBy = $tstrOrderBy;
		
			//	Rebuild SQL if needed
			if($strSQL != $strSQLbak) 
			{
				//	changed $strSQL - old style	
				$this->numRowsFromSQL = GetRowCount($strSQL);
			}
			else if( $whereModifiedInEvent || $this->strOrderBy != $tstrOrderBy )
			{
				$strSQL = SQLQuery::gSQLWhere_having($this->gsqlHead, $sqlFrom, $this->gsqlWhereExpr, $this->gsqlGroupBy, $this->gsqlHaving
					, $this->strWhereClause, $this->strHavingClause, $searchCombineType);
				$strSQL.= " ".trim( $this->strOrderBy );
			}
		}
		$rowcount=false;
		if($this->eventExists("ListGetRowCount"))
			$rowcount=$this->eventsObject->ListGetRowCount($this->searchClauseObj, $this->masterTable, $this->masterKeysReq, null, $this);
		if($rowcount!==false)
			$this->numRowsFromSQL = $rowcount;
		else
		{
			if( $whereModifiedInEvent ) 
			{
				$this->numRowsFromSQL = SQLQuery::gSQLRowCount_int($this->gsqlHead, $sqlFrom, $this->gsqlWhereExpr, $this->gsqlGroupBy
					, $this->gsqlHaving, $this->strWhereClause, $this->strHavingClause, $searchCombineType);
			} 
			else 
			{
				$this->numRowsFromSQL = SQLQuery::gSQLRowCount_int($this->gsqlHead, $sqlFrom, $sqlWhere, $this->gsqlGroupBy
					, $sqlHaving, $searchWhere, $searchHaving, $searchCombineType);
			}
		}

		LogInfo($strSQL);
		$this->querySQL = $strSQL;
 	}
	
	/**
	 * Adds sub query for counting details recs number
	 */
	function addMasterDetailSubQuery() 
	{
		// add count of child records to SQL
		if($this->subQueriesSupp && $this->subQueriesSupAccess && ! $this->theSameFieldsType) 
		{
			for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
			{
				if($this->allDetailsTablesArr[$i]['dispChildCount']|| $this->allDetailsTablesArr[$i]['hideChild']) 
				{
					$origTName = $this->allDetailsTablesArr[$i]['dOriginalTable'];
					$dataSourceTName = $this->allDetailsTablesArr[$i]['dDataSourceTable'];
					$shortTName = $this->allDetailsTablesArr[$i]['dShortTable'];
					$detailsSettings = $this->pSet->getTable($dataSourceTName);
					$detailsQuery = $detailsSettings->getSQLQuery();
					$detailsSqlWhere = $detailsQuery->WhereToSql();
					
					$masterWhere = "";
					foreach($this->masterKeysByD[$i] as $idx => $val) {
						if($masterWhere)
							$masterWhere.= " and ";
						
						$masterWhere.= $this->cipherer->GetFieldName(AddTableWrappers("subQuery_cnt")."."
								.AddFieldWrappers($this->detailKeysByD[$i][$idx]), $this->masterKeysByD[$i][$idx])
							."=".$this->cipherer->GetFieldName(AddTableWrappers($this->origTName)."."
								.AddFieldWrappers($this->masterKeysByD[$i][$idx]), $this->masterKeysByD[$i][$idx]);
					}
					
					//	add a key field to the select list
					$subQ = "";
					foreach($this->detailKeysByD[$i] as $k) 
					{
						if(strlen($subQ))
							$subQ.= ",";
						$subQ.= GetFullFieldNameForInsert($this->pSet, $k);
					}
					$subQ = "SELECT ".$subQ." ".$detailsQuery->FromToSql();
					//	add security where clause for sub query	
					$securityClause = SecuritySQL("Search", $dataSourceTName);
					if(strlen($securityClause))
						$subQ.= " WHERE ".whereAdd($detailsSqlWhere, $securityClause);
					elseif(strlen($detailsSqlWhere))
						$subQ.= " WHERE ".whereAdd("", $detailsSqlWhere);
					
					// add detail table query tail	
					$subQ.= " ".$detailsQuery->TailToSql();	
					
					$countsql = "SELECT count(*) FROM (".$subQ.") ".AddTableWrappers("subQuery_cnt")." WHERE ".$masterWhere;
					$this->gsqlHead.= ",(".$countsql.") as ".AddFieldWrappers($dataSourceTName."_cnt")." ";
				}
			}
		}
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
		if(($this->isUseInlineAdd || $this->showAddInPopup) && $this->permis[$this->tName]['add']) 
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
				$record[$dShortTable."_dtablelink_attrs"] = " href=\"".GetTableLink($dShortTable, "list")."?\" id=\"master_".$dShortTable."_add".$this->id."\" ";
				if($this->allDetailsTablesArr[$i]['previewOnList'] == DP_INLINE) 
				{
					$record[$dShortTable."_dtablelink_attrs"] = 
						"id = \"".$dShortTable."_preview".$this->id."\"
						caption = \"".GetTableCaption(GoodFieldName($dDataSourceTable))."\" 
						href = \"".GetTableLink($dShortTable, "list")."?\"
						style = \"display:none;\"
						data-pagetype = \"".$this->allDetailsTablesArr[$i]['dType']."\"";
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
					{
						$span = "<span id=\"inlineEdit_add".$this->id."\"></span>";
						$record[ $gFieldName."_value" ] = $span . $record[ $gFieldName."_value" ] ;
					}
				}
				
				$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );

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
	 * Incapsulates beforeProccessRow event
	 *
	 * @return array
	 */
	function beforeProccessRow() 
	{
		if($this->eventExists("ListFetchArray"))
			$data = $this->eventsObject->ListFetchArray($this->recSet, $this);
		else
			$data = $this->cipherer->DecryptFetchedArray($this->recSet);	
			
		while($data) 
		{
			if($this->eventExists("BeforeProcessRowList")) 
			{
				if(! $this->eventsObject->BeforeProcessRowList($data, $this))
				{
					if($this->eventExists("ListFetchArray"))
						$data = $this->eventsObject->ListFetchArray($this->recSet, $this);
					else
						$data = $this->cipherer->DecryptFetchedArray($this->recSet);
					continue;
				}
			}
			return $data;
		}
	}
	
	/**
	 * If use list icons instead list of links
	 * Then continue count width for td, which contains icons
	 * And depends of this width assign or not list icons column
	 *
	 * @param {integer} $editPermis - edit permissions
	 * @param {integer} $addPermis - add permissions
	 * @param {integer} $searchPermis - search permissions
	 */
	function assignListIconsColumn($editPermis = 1, $addPermis = 1, $searchPermis = 1)
	{	
		$this->xt->assign("listIcons_column", true);
	}
	
	/**
	 * Fills list grid.This method use many other methods
	 */
	function fillGridData() 
	{
		global $globalEvents;
		$totals=array();
		//	fill $rowinfo array
		$rowinfo = array();
		$this->fillGridShowInfo($rowinfo);
		
		//	add grid data
		$data = $this->beforeProccessRow();
		$lockRecIds = array();
		
		$tKeys = $this->pSet->getTableKeys();
		
		$this->controlsMap['gridRows'] = array();
		
		for($i = 0; $i < count($this->listFields); $i ++) 
			$this->recordFieldTypes[$this->listFields[$i]['fName']] = $this->pSet->getFieldType($this->listFields[$i]["fName"]);
		
		while($data && ($this->recNo <= $this->pageSize || $this->pageSize == -1)) 
		{
			$row = array();
			
			$row["grid_record"]= array();
			$row["grid_record"]["data"]= array();
			$this->rowId ++;
			
			for($col = 1; $data && ($this->recNo <= $this->pageSize || $this->pageSize == -1) && $col <= $this->colsOnPage; $col ++) 
			{
				$this->countTotals($totals, $data);
				$record = array();
				$this->genId();
				
				$row["rowattrs"] = " id=\"gridRow".$this->recId."\"";
				$gridRowInd = count($this->controlsMap['gridRows']);
				$this->controlsMap['gridRows'][$gridRowInd] = array();
				$this->controlsMap['gridRows'][$gridRowInd]['id'] = $this->recId;
				$this->controlsMap['gridRows'][$gridRowInd]['rowInd'] = $gridRowInd;
				//Add the connection with containing row. It's important for vertical layout's multiple records per row mode
				$this->controlsMap['gridRows'][$gridRowInd]['contextRowId'] = $this->recId + $this->colsOnPage - $col;
				$isEditable = $this->permis[$this->tName]['edit'] && CheckSecurity($data[$this->mainTableOwnerID], "Edit") 
					|| $this->permis[$this->tName]['delete'] && CheckSecurity($data[$this->mainTableOwnerID], "Delete");
				if($globalEvents->exists("IsRecordEditable", $this->tName))
					$isEditable = $globalEvents->IsRecordEditable($data, $isEditable, $this->tName);
				$this->controlsMap['gridRows'][$gridRowInd]['isEditOwnRow'] = $isEditable;
				$this->controlsMap['gridRows'][$gridRowInd]['keyFields'] = array();
				$this->controlsMap['gridRows'][$gridRowInd]['keys'] = array();
				for($i = 0; $i < count($tKeys); $i ++) {
					$this->controlsMap['gridRows'][$gridRowInd]['keyFields'][$i] = $tKeys[$i];
					$this->controlsMap['gridRows'][$gridRowInd]['keys'][$i] = $data[$tKeys[$i]];
				}
				$record["edit_link"] = $isEditable;
				$record["inlineedit_link"] = $isEditable;
				$record["view_link"] = $this->permis[$this->tName]['search'];
				$record["copy_link"] = $this->permis[$this->tName]['add'];
				
				
				//get record id for locking record
				if($this->lockingObj)
				{	
					if($this->mode == LIST_SIMPLE && !count($this->lockDelRec) && isset($_SESSION[$this->sessionPrefix."_lockDelRec"]))
					{
						$this->lockDelRec = $_SESSION[$this->sessionPrefix."_lockDelRec"];
						unset($_SESSION[$this->sessionPrefix."_lockDelRec"]);
					}
					for($i=0;$i<count($this->lockDelRec);$i++)
					{
						$lockDelRec = true;
						foreach($this->lockDelRec[$i] as $key => $val)
						{
							if($data[$key]!=$val)
							{
								$lockDelRec = false;
								break;
							}
						}
						if($lockDelRec)
						{
							$lockRecIds[] = $this->recId;
							break;
						}
					}
				}
				//	detail tables
				$this->proccessDetailGridInfo($record, $data, $gridRowInd);
				
				//	key fields
				$keyblock = "";
				$editlink = "";
				$copylink = "";
				$keylink = "";
				$keys = array(); //to open view pages in popup clicking on markers
				
				for($i = 0; $i < count($tKeys); $i ++) {
					if($i != 0) {
						$keyblock.= "&";
						$editlink.= "&";
						$copylink.= "&";
					}
					$keyblock.= rawurlencode($data[$tKeys[$i]]);
					$editlink.= "editid".($i + 1)."=".runner_htmlspecialchars(rawurlencode($data[$tKeys[$i]]));
					$copylink.= "copyid".($i + 1)."=".runner_htmlspecialchars(rawurlencode($data[$tKeys[$i]]));
					$keylink.= "&key".($i + 1)."=".runner_htmlspecialchars(rawurlencode(@$data[$tKeys[$i]]));
					$keys[$i] = $data[$tKeys[$i]];
					
				}
				$record["editlink_attrs"]= "id=\"editLink".$this->recId."\" name=\"editLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "edit", $editlink)."'";
				$record["inlineeditlink_attrs"]= "id=\"iEditLink".$this->recId."\" name=\"iEditLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "edit", $editlink)."'";
				$record["copylink_attrs"]= "id=\"copyLink".$this->recId."\" name=\"copyLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "add", $copylink)."'";
				$record["viewlink_attrs"]= "id=\"viewLink".$this->recId."\" name=\"viewLink".$this->recId."\" href='".GetTableLink($this->shortTableName, "view", $editlink)."'";
					
				$this->fillCheckAttr($record, $data, $keyblock);
				
				if ($this->googleMapCfg['isUseMainMaps'])
				{
					$this->addBigGoogleMapMarkers($data, $keys, $editlink);
				}
				
				for($i = 0; $i < count($this->listFields); $i ++) 
				{
					// call addGoogleMapData before call proccessRecordValue!!!
					if (in_array($i, $this->gMapFields))
					{
						$this->addGoogleMapData($this->listFields[$i]['fName'], $data, $keys, $editlink); 
					}
					$record[$this->listFields[$i]['valueFieldName']] = $this->proccessRecordValue($data, $keylink, $this->listFields[$i]);
				}
				
				if($this->eventExists("BeforeMoveNextList"))
					$this->eventsObject->BeforeMoveNextList($data, $row, $record, $this);
				$this->spreadRowStyle($data, $row, $record);
				$this->spreadRowCssStyle($data, $row, $record);
				$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";
				$this->recIds[] = $this->recId;
				
				if( $record["css"] )
					$this->setRowCssRule( $record["css"] );
				
				$this->addSpansForGridCells('edit', $record, $data);
				for($i = 0; $i < count($this->listFields); $i ++) 
				{
					$field = $this->listFields[$i]['fName'];
					$gFieldName = GoodFieldName( $field );
					$record[ $gFieldName."_class" ] .= $this->fieldClass( $field );
					
					if( $record[ $gFieldName."_css" ] ) 
					{
						$className = $this->setFieldCssRule( $record[ $gFieldName."_css" ], $gFieldName );
						$record[ $gFieldName."_class" ] .= " ".$className;
					}
					
					if( isset( $this->hiddenColumnClasses[$field] ) )
					{
						$record[ $gFieldName."_class" ] .= " " . $this->hiddenColumnClasses[$field];
						
						if( $this->listGridLayout != gltHORIZONTAL )
							$record[ $gFieldName."_label_class" ] = $this->hiddenColumnClasses[$field];
					}
				}
				
				if($col < $this->colsOnPage)
					$record["endrecord_block"]= true;
				$record["grid_recordheader"]= true;
				$record["grid_vrecord"]= true;
				//set the $row["grid_record"] value
				$this->setRowsGridRecord($row, $record);
				
				$data = $this->beforeProccessRow();
				
				$this->recNo ++;
			}
			if($col <= $this->colsOnPage)	
			{
				for($gInd = 0; $gInd < $col - 1; $gInd++)
				{
					$this->controlsMap['gridRows'][$gridRowInd - $gInd]['contextRowId'] = $this->recId;
				}
			}
			while($col <= $this->colsOnPage) 
			{
				$record = array();
				if($col < $this->colsOnPage)
					$record["endrecord_block"]= true;
				if($row["grid_record"]["data"])
				{				
					$row["grid_record"]["data"][]= $record;
				}
				$col ++;
			}
			//	assign row spacings for vertical layout
			$row["grid_rowspace"]= true;
			$row["grid_recordspace"]= array("data" => array());
			for($i = 0; $i < $this->colsOnPage * 2 - 1; $i ++)
				$row["grid_recordspace"]["data"][]= true;
			
			$rowinfo["data"][]= $row;
		}
		if($this->lockingObj)
			$this->jsSettings['tableSettings'][$this->tName]['lockRecIds'] = $lockRecIds;
		
		if(count($rowinfo["data"])) 
		{
			$rowinfo["data"][count($rowinfo["data"]) - 1]["grid_rowspace"]= false;
			
			if($this->listGridLayout == gltVERTICAL && $this->is508)
				$rowinfo["begin"]= "<caption style=\"display:none\">Table data</caption>";
			
			$this->xt->assignbyref("grid_row", $rowinfo);
		}
		
		$this->buildTotals($totals);
	}
	
	/**
	 * Get the field's class name to align the field's value 
	 * basing on its edti and view formats
	 * @param String f
	 * @return String
	 */
	function fieldClass($f)
	{
		if( $this->pSet->getEditFormat($f) == FORMAT_LOOKUP_WIZARD )
			return '';
		
		$format = $this->pSet->getViewFormat($f);
		
		if( $format == FORMAT_FILE ) 
			return ' rnr-field-file'; 
		
		if( $this->listGridLayout == gltVERTICAL || $this->listGridLayout == gltCOLUMNS )
			return '';
			
		if( $format == FORMAT_AUDIO )
			return ' rnr-field-audio';
		if( $format == FORMAT_CHECKBOX )
			return ' rnr-field-checkbox';
		if( $format == FORMAT_NUMBER || IsNumberType( $this->pSet->getFieldType($f) ) )
			return ' rnr-field-number';
			
		return 'rnr-field-text';
	}
	
	/**
	 * Form a cell's custom css rule string	 	
	 * @param String unprocessedCss
	 * @return String
	 */	
	function getCustomCSSRule($unprocessedCss)
	{
		$cssRules = array();
		$rules = explode(";", $unprocessedCss);
		
		for($i = 0; $i < count($rules); $i++) 
		{
			if(trim($rules[$i]) != "") 
				$cssRules[] = $rules[$i] . " !important" ;
			}
		
		return implode(";", $cssRules);
		}
	
	/**
	 * Check whether such a css rule exists. If It does get the existing class's name.
	 * If It doesn't form a new class name, add a rule to the "fieldCssRules" array and 
	 * add a prepared css rule to the "cell_css_rules" string property
	 *
	 * @param String fieldCssRule
	 * @param String fieldName
	 * @return String
	 */	
	function setFieldCssRule($fieldCssRule, $fieldName)
	{
		if( isset($this->fieldCssRules[ $fieldCssRule ]) )
			return $this->fieldCssRules[ $fieldCssRule ];
		
		$className = 'rnr-style'.$this->recId.'-'.$fieldName;
		$this->fieldCssRules[ $fieldCssRule ] = $className;
		
		if( $this->listGridLayout == gltVERTICAL )	
			$selectors = ' td[data-record-id] td.'.$className.', .'.$className;
		else
			$selectors = ' td[data-record-id].'.$className.', .'.$className;
			
		$this->cell_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $fieldCssRule ).'}';

		return $className;
	}
	
	/**
	 * Set the custom css rules for the current record in process adding 
	 * corresponding css rules to the "row_css_rules" string property 
	 * @param String rowCssRule
	 */
	function setRowCssRule($rowCssRule)
	{
		$selectors = ' td[data-record-id="'.$this->recId.'"]';
		if( $this->listGridLayout == gltVERTICAL ) 	
			$selectors.= ' td'; 
			
		$this->row_css_rules.= $selectors.'{'.$this->getCustomCSSRule( $rowCssRule ).'}';
	}
	
	/**
	 * Add a cells' custom style block at the beginning of grid_block
	 */	
	function addCustomCSS() 
	{
		if( !$this->cell_css_rules && !$this->row_css_rules && !$this->mobile_css_rules )
			return;
		
		$gbl = $this->xt->getVar("grid_block");
		if( $gbl ) 
		{
			$rules = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
			
			if( !is_array($gbl) ) 
				$gbl = array("begin" => '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>');
			else 
				$gbl["begin"] = $gbl["begin"]. '<style class="rnr-cells-css" type="text/css"> '.$rules.' </style>';
			
			$this->xt->assign("grid_block", $gbl);
		}
	}
	
	/**
	 * Counts totals, depending on theirs type
	 *
	 * @param array $totals
	 * @param array $data
	 */
	function countTotals(&$totals, &$data) 
	{
		for($i = 0; $i < count($this->totalsFields); $i ++)
		{
			if($this->totalsFields[$i]['totalsType'] == 'COUNT')
			{
				if(0 != strlen($data[$this->totalsFields[$i]['fName']]))
					$totals[$this->totalsFields[$i]['fName']]++;
			}
			else if($this->totalsFields[$i]['viewFormat'] == "Time") 
			{
				$time = GetTotalsForTime($data[$this->totalsFields[$i]['fName']]);
				$totals[$this->totalsFields[$i]['fName']] += $time[2]+$time[1]*60 + $time[0]*3600;
			}
			else
				$totals[$this->totalsFields[$i]['fName']]+=($data[$this->totalsFields[$i]['fName']]+ 0);
		
			if($this->totalsFields[$i]['totalsType'] == 'AVERAGE')
			{
				if(!is_null($data[$this->totalsFields[$i]['fName']]) && $data[$this->totalsFields[$i]['fName']]!=="")
					$this->totalsFields[$i]['numRows']++;
			}
		}
	}
	
	/**
	 * Build and shows totals info on page
	 *
	 * @param array $totals info abount totals
	 */
	function buildTotals(&$totals) 
	{
		if(count($this->totalsFields)) 
		{
			//	process totals
			$this->xt->assign("totals_row", true);
			$totals_records = array("data" => array());
			for($j = 0; $j < $this->colsOnPage; $j++) 
			{
				$record = array();
				if($j == 0) 
				{
					for($i = 0; $i < count($this->totalsFields); $i ++) 
					{
						//	show totals
						$total = GetTotals($this->totalsFields[$i]['fName'], $totals[$this->totalsFields[$i]['fName']], $this->totalsFields[$i]['totalsType'], $this->totalsFields[$i]['numRows'], $this->totalsFields[$i]['viewFormat'], PAGE_LIST);
							$total = "<span id=\"total".$this->id."_".GoodFieldName($this->totalsFields[$i]['fName'])."\">".$total."</span>";
						
						$this->xt->assign(GoodFieldName($this->totalsFields[$i]['fName'])."_total", $total);
						
						$record[GoodFieldName($this->totalsFields[$i]['fName'])."_showtotal"]= true;
						$record[GoodFieldName($this->totalsFields[$i]['fName'])."_class"].= $this->fieldClass($this->totalsFields[$i]['fName']);
					}
				}
				if($j < $this->colsOnPage - 1){
					$record["endrecordtotals_block"]= true;
				}
				$totals_records["data"][]= $record;
			}
			$this->xt->assignbyref("totals_record", $totals_records);
			if(!$this->rowsFound)
				$this->xt->assign("totals_attr", "style='display:none;'");
		}
	}
	
	/** 
	 * @param string $field
	 * @param int $state 0 value not need, 1 need for count, 2 need real value
	 */
	function outputFieldValue($field, $state)
	{
		$this->arrFieldSpanVal[$field] = $state;
	}
	
	function addSpanVal($fName, &$data) 
	{
		// add span val for lookup fields, and average|total|count totals
		global $strTableName;
		$pSet = new ProjectSettings($strTableName, PAGE_LIST);
		$type = $pSet->getFieldType($fName);
		if((@$this->arrFieldSpanVal[$fName] == 2 || @$this->arrFieldSpanVal[$fName] == 1) && !IsBinaryType($type))
		{
			return "val=\"".runner_htmlspecialchars($data[$fName])."\" ";
		}
	}
	
	/**
	 * Proccess grid cells, also add spans if need them
	 *
	 * @param String type
	 * @param Array &record
	 * @param Array data (optional)
	 */
	function addSpansForGridCells($type, &$record, $data = null) 
	{
		for($i=0;$i<count($this->listFields);$i++) 
		{
			$span = "<span id=\"".$type.($type == 'edit' ? $this->recId : $this->id)."_".$this->listFields[$i]['goodFieldName']."\" ";
			
			if($type == 'edit')
			{
				$span.= $this->addSpanVal($this->listFields[$i]['fName'], $data).">";
				$span.=	$record[$this->listFields[$i]['valueFieldName']];
			}
			else
				$span.= ">";
				
			$span.="</span>";
			
			$record[$this->listFields[$i]['valueFieldName']]= $span;
		}
	}
	
	/**
	 * Proccess record values
	 *
	 * @param array $record
	 * @param array $data
	 * @param string $keylink
	 */
	function proccessRecordValue(&$data, &$keylink, $listFieldInfo)
	{
		$dbVal = $this->showDBValue($listFieldInfo['fName'], $data, $keylink);
		return $this->addCenterLink($dbVal, $listFieldInfo['fName']);;
	}
	
	/**
	 * Checks if need to display grid
	 */
	function isDispGrid() 
	{
		if(!$this->isUseInlineAdd && !$this->showAddInPopup)
			return $this->permis[$this->tName]['search'] && $this->rowsFound;
		else
			return $this->permis[$this->tName]['add'] || $this->permis[$this->tName]['search']&& $this->rowsFound;
	}
	
	// stroit checkbox, esli eto vozmogno
	function fillCheckAttr(&$record, $data, $keyblock)
	{
		$record["checkbox"]= $this->permis[$this->tName]['edit'];
		if($this->exportTo || $this->printFriendly || $this->deleteRecs) 
		{
			if($this->permis[$this->tName]['export'] || $this->permis[$this->tName]['delete'])
				$record["checkbox"]= true;
		}
		$record["checkbox_attrs"]= "name=\"selection[]\" value=\"".runner_htmlspecialchars($keyblock)."\" id=\"check".$this->id."_".$this->recId."\"";
	}
	
	function addDivSearchWin()
	{
		return '<div id="searchWin'.$this->id.'" class="searchWin"></div>';
	}
	
	/**
	 * Main function, call to build page
	 * Do not change methods call oreder!!
	 */
	function prepareForBuildPage() 
	{
		// build column hiding CSS
		$this->buildMobileCssRules();

		//Sorting fields
		$this->orderClause->buildOrderParams();
		
		// delete record
		$this->deleteRecords();
		
		// PRG rule, to avoid POSTDATA resend
		$this->rulePRG();
		
		// build sql query
		$this->buildSQL();
		
		// build pagination block
		$this->buildPagination();
		
		// seek page must be executed after build pagination
		$this->seekPageInRecSet($this->querySQL);
		
		$this->setGoogleMapsParams($this->listFields);

		// fill grid data
		$this->fillGridData();
		
		// add common js code
		$this->addCommonJs();
		
		// add common html code
		$this->addCommonHtml();
		
		// Set common assign
		$this->commonAssign();
		
		// Add cells' custom css
		$this->addCustomCss();
		
		// build admin block
		$this->assignAdmin();
	}
	
	/**
	 * show page at the end of its proccess, depending on mode
	 */
	function showPage() 
	{
		$this->BeforeShowList();
		$this->display($this->templatefile);
	}
	
	/**
	 * Static function for create list page
	 * Read params from setting 
	 * Create object of class in accordance with mode displaying page 
	 */
	function & createListPage($table,$options)
	{
		global $bSubqueriesSupported, $strTableName, $conn, $locale_info, $isGroupSecurity;
		
		$gSettings = new ProjectSettings($strTableName, $options['pageType']);
		
		$gQuery = $gSettings->getSQLQuery();
		$params = $options;
		$params['origTName'] = $gSettings->getOriginalTableName();
		$params['sessionPrefix'] = $strTableName;
		$params['tName'] = $table;
		$params['conn'] = &$conn;
		$params['gPageSize'] = $gSettings->getInitialPageSize();
		$params['gOrderIndexes'] = $gSettings->getOrderIndexes();
		$params['gstrOrderBy'] = $gQuery->OrderByToSql();
		$params['gsqlHead'] = $gQuery->HeadToSql();
		$params['gsqlFrom'] = $gQuery->FromToSql();
		$params['gsqlWhereExpr'] = $gQuery->WhereToSql();
		$params['gsqlGroupBy'] = $gQuery->GroupByToSql();
		$params['gsqlHaving'] = $gQuery->Having()->toSql($gQuery);
		
		$params['locale_info']=&$locale_info;
		$params["subQueriesSupp"] = $bSubqueriesSupported; 
		$params['nSecOptions'] = $gSettings->getAdvancedSecurityType();
		$params['nLoginMethod'] = GetGlobalData("nLoginMethod",0);
		$params['recsPerRowList'] = $gSettings->getRecordsPerRowList();
		$params['dbType'] = GetGlobalData("dbType",0);
		$params['mainTableOwnerID'] = $gSettings->getTableOwnerIdField();
		$params['moveNext'] = $gSettings->useMoveNext();
		$params['exportTo'] = $gSettings->hasExportPage();
		$params['printFriendly'] = $gSettings->hasPrintPage();
		$params['deleteRecs'] = $gSettings->hasDelete();
		$params['rowHighlite'] = $gSettings->highlightRows();
		$params["isGroupSecurity"] = $isGroupSecurity;
		$params['arrKeyFields'] = $gSettings->getTableKeys();
		$params["isUseInlineAdd"] = $gSettings->hasInlineAdd();
		$params["isUseInlineEdit"] = $gSettings->hasInlineEdit();
		$params["isUseInlineJs"] = $params["isUseInlineAdd"] || $params["isUseInlineEdit"];
		$params["panelSearchFields"] = $gSettings->getPanelSearchFields();
		$params['listGridLayout'] = $gSettings->getListGridLayout();
		$params['isDisplayLoading'] = $gSettings->displayLoading();
		$params['createLoginPage'] = GetGlobalData("createLoginPage",false);
		$params['subQueriesSupAccess'] = $gSettings->tableSupportsSubqueries();	 
		$params['noRecordsFirstPage'] = $gSettings->noRecordsOnFirstPage();
		$params['totalsFields'] = $gSettings->getTotalsFields();
		$params['edit'] = $gSettings->hasEditPage();
		$params['inlineEdit'] = $gSettings->hasInlineEdit();
		$params['iCopy'] = $gSettings->hasCopyPage();
		$params['iView'] = $gSettings->hasViewPage();
		$params['listAjax'] = $gSettings->ajaxBasedListPage();
		$params['arrRecsPerPage'] = $gSettings->getRecordsPerPageArray();
		$params['isScrollGridBody'] = $gSettings->getScrollGridBody();
		
		
				
		$params['audit'] = GetAuditObject($table);
		
		$params['listFields'] = array();
		$allfields = $gSettings->getListFields();
		
		foreach($allfields as $f)
		{
			if(!$gSettings->appearOnListPage($f))
				continue;
			$params['listFields'][]= array(
				"fName"=>$f,
				"goodFieldName"=>GoodFieldName($f),
				"valueFieldName" => GoodFieldName($f)."_value",
				"viewFormat"=>$gSettings->getViewFormat($f),
				"editFormat"=>$gSettings->getEditFormat($f)
			);
		}
		
		// choose class by mode
		if ($params["mode"]==LIST_SIMPLE)
			$pageObject = new ListPage_Simple($params);	
		else if($params["mode"]==LIST_AJAX)
			$pageObject = new ListPage_Ajax($params);
		else if($params["mode"]==LIST_LOOKUP)
			$pageObject = new ListPage_Lookup($params);
		else if($params["mode"]==LIST_DETAILS)
			$pageObject = new ListPage_DPInline($params);
		else if($params["mode"]==RIGHTS_PAGE)
		{
						$pageObject = new RightsPage($params);
		}
		else if($params["mode"]==MEMBERS_PAGE)
		{
						$pageObject = new MembersPage($params);
		}
		$pageObject->init();
		
		return $pageObject;
	}
	function spreadRowStyle(&$data,&$row, &$record)
	{
		if(!array_key_exists("rowstyle",$row))
			return;
		$style = extractStyle($row["rowstyle"]);
		if($style=="")
			return;
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_style"] = injectStyle($record[GoodFieldName($field)."_style"], $style);
		}
	}
	
	/**
	 * Add css rules to the record fields' "_css" elements if the row's "style" attribute is set 
	 */	
	function spreadRowCssStyle(&$data, &$row, &$record)
	{
		if( !isset($row["style"]) ) 
			return;	
			
		$style = $row["style"];
		if( trim($style) == "" )
		{
			return;
		}
		foreach(array_keys($data) as $field)
		{
			$record[GoodFieldName($field)."_css"] = $style."; ".$record[GoodFieldName($field)."_css"];
		}			
	}
	
	/**
	 * If the page's layout is horizontal and the number of records per row equals 1
	 * It assigns all $record's content to 'grid_row' (to show all rows added to a grid row in 'Visual Editor')
	 * otherwise It assigns the content to 'grid_record' directly.
	 */	
	function setRowsGridRecord(&$row, $record)
	{
		if($this->listGridLayout == gltVERTICAL || $this->recsPerRowList != 1)
		{
			$row["grid_record"]["data"][]= $record;
			return;
		}	
		foreach($record as $index=>$value)
		{
			$row[$index] = $value;
		}
		$row["grid_record"] = true;			
	}		

	/**
	 * Build CSS rules to hide particular columnns on specific screen sizes
	 */	
	function buildMobileCssRules()
	{
		$devices = array( TABLET_7_IN, SMARTPHONE_PORTRAIT, SMARTPHONE_LANDSCAPE, TABLET_10_IN, DESKTOP );
		$cssBlocks = array();
		$columnsToHide = array();
		foreach( $devices as $d )
		{
			$columnsToHide[ $d ] = $this->pSet->getHiddenFields( $d );
		}
		
		//	build CSS code
		foreach( $this->listFields as $f )
		{
			$fieldMentioned = false;
			$field = $f['fName'];
			foreach( $devices as $d )
			{
				if( isset($columnsToHide[ $d ][ $field ]) )
				{
					$this->hiddenColumnClasses[$field] = "column".GoodFieldName( $field );
					$cssBlocks[$d] .= "." . $this->hiddenColumnClasses[$field] . " { display: none; }\n";
					$fieldMentioned = true;
				}
				else if( isset( $this->hiddenColumnClasses[$field] ) )
				{
					$cssBlocks[$d] .= "." . $this->hiddenColumnClasses[$field] . " { display: table-cell; }\n";
				}
			}
		}
		
		$this->mobile_css_rules = "";
		foreach( $devices as $d )
		{
			if($cssBlocks[$d])
			{
				$this->mobile_css_rules .= ProjectSettings::getDeviceMediaClause($d)."\n{\n".$cssBlocks[$d]."\n}\n";
			}
		}
	}		
}
?>
