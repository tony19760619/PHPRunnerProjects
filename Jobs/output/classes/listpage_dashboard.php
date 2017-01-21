<?php

class ListPage_Dashboard extends ListPage_Embed
{
	/**
	 *	name of the dashboard the List is displayed on
	 */
	public $dashElementName;
	
	/**
	 * The corresponding dashboard name
	 * @type String
	 */
	public $dashTName;
	
	/**
	 * @type ProjectSettings
	 */
	protected $dashSet;
	
	/**
	 * @type Array
	 */
	protected $dashElementData = array();
	
	
	/**
     * @constructor
     * @param array params
     */
	function ListPage_Dashboard(&$params)
	{
		parent::ListPage_Embed($params);

		$this->dashSet = new ProjectSettings( $this->dashTName );
		$this->dashElementData = $this->dashSet->getDashboardElementData( $this->dashElementName );
		
		$this->showAddInPopup = $this->dashElementData["popupAdd"];
		$this->showEditInPopup = $this->dashElementData["popupEdit"];
		$this->showViewInPopup = $this->dashElementData["popupView"];		
		
		$this->formBricks["header"] = array( array( "name" => "details_block", "align" => "right" ),
			array( "name" => "newrecord_controls_block", "align" => "right" ), 
			array( "name" => "record_controls_block", "align" => "right" ) 
			 );	
		$this->formBricks["footer"] = array( "pagination_block" );	
	}

	/**
	 * Assign seesion prefix
	 */
	protected function assignSessionPrefix() 
	{
		$this->sessionPrefix = $this->dashTName."_".$this->tName;
	}

	/**
	 * Fill table settings
	 * @intellisense
	 */
	protected function fillTableSettings()
	{
		parent::fillTableSettings();
		
		if( $this->dashElementData["popupAdd"] )
			$this->jsSettings["tableSettings"][ $this->tName ]["showAddInPopup"] = true;

		if( $this->dashElementData["popupEdit"] )
			$this->jsSettings["tableSettings"][ $this->tName ]["showEditInPopup"] = true;
			
		if( $this->dashElementData["popupView"] )
			$this->jsSettings["tableSettings"][ $this->tName ]["showViewInPopup"] = true;			
	}
	
	/**
	 * Checks if need to display grid
	 */
	function isDispGrid() 
	{
		return $this->permis[$this->tName]['search'];
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
			//$record["copy_link"]= true;
			$record["checkbox"]= true;
			$record["editlink_attrs"]= "id=\"editLink_add".$this->id."\"";
						
			//$record["copylink_attrs"]= "id=\"copyLink_add".$this->id."\" name=\"copyLink_add".$this->id."\"";
			$record["viewlink_attrs"]= "id=\"viewLink_add".$this->id."\" name=\"viewLink_add".$this->id."\"";
			$record["checkbox_attrs"]= "id=\"check_add".$this->id."\" name=\"selection[]\"";
			
			//	add container for inline add controls
			$addedInlineAddContainer = false;
			if($this->permis[$this->tName]['edit']&& $this->isUseInlineEdit)
			{
				$record["inlineeditlink_attrs"]= "id=\"inlineEdit_add".$this->id."\" ";
				$addedInlineAddContainer = true;
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
	
	
	function addCommonJs()
	{
		$this->addControlsJSAndCSS();
		$this->addButtonHandlers();
	}
	
	
	function buildSearchPanel() 
	{
	}
	
	/**
	 *
	 */
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
		
		// add common js code
		$this->addCommonJs();
		
		// add common html code
		$this->addCommonHtml();
		
		// Set common assign
		$this->commonAssign();
		
		// Add cells' custom css
		$this->addCustomCss();
	}
	
	/**
	 *
	 */
	function commonAssign()
	{
		parent::commonAssign();
		
		//add link and attr
		$this->xt->assign("add_link", $this->permis[$this->tName]['add'] && $this->dashElementData["popupAdd"] );
		$this->xt->assign("addlink_attrs", "href='".GetTableLink($this->shortTableName, "add")."' id=\"addButton".$this->id."\"");
		
		$this->xt->assign("newrecord_controls_block", $this->permis[$this->tName]['add'] && ($this->dashElementData["inlineAdd"] || $this->dashElementData["popupAdd"]));
		$this->xt->assign("record_controls_block", false);
		
		if( $this->permis[$this->tName]['delete'] && $this->pSet->hasDelete() && $this->dashElementData["deleteRecord"] 
			|| $this->permis[$this->tName]['edit'] && $this->isUseInlineEdit && $this->dashElementData["inlineEdit"] )
		{
			$this->xt->assign("record_controls_block", true);
			$this->xt->assign("widhtSelected", true);
			if( $this->numRowsFromSQL == 0 ) 
				$this->xt->displayBrickHidden("recordcontrol");		
			
			$this->editSelectedLinkAttrs();	
		}
		$this->xt->assign("details_block", true );
		
	}

	
	/**
	 * Assign editSelected link and attrs 
	 */
	function editSelectedLinkAttrs()
	{
		if( !$this->isUseInlineEdit || !$this->dashElementData["inlineEdit"] ) 
			return;
			
		parent::editSelectedLinkAttrs();
	}
	
	/**
	 *
	 */
	function addAssignForGrid()
	{
		parent::addAssignForGrid();
			
		$this->checkboxColumnAttrs();
		
		//edit permissions
		$editPermis = $this->permis[$this->tName]['edit'];
		$addPermis = $this->permis[$this->tName]['add'];
		$searchPermis = $this->permis[$this->tName]['search'];
		
		$allowInlineEdit = $editPermis && $this->isUseInlineEdit && $this->dashElementData["inlineEdit"];
		//inline edit column	
		$this->xt->assign("inlineedit_column", $allowInlineEdit);
		$this->xt->assign("inlineedit_headercolumn", $allowInlineEdit);
		$this->xt->assign("inlineedit_footercolumn", $allowInlineEdit);
		
		//edit column
		$this->xt->assign("edit_column", $editPermis && $this->dashElementData["popupEdit"]);
		//view column	
		$this->xt->assign("view_column", $searchPermis && $this->dashElementData["popupView"]);
		
		$this->assignListIconsColumn( $editPermis, $addPermis, $searchPermis );

		$this->deleteSelectedLink();		
	}

	/**
	 * Show inline add link
	 * Add inline add attributes
	 */
	function inlineAddLinksAttrs()
	{
		if( !$this->dashElementData["inlineAdd"] )
			return;
			
		parent::inlineAddLinksAttrs();	
	}	

	/**
	 * Assign delete selected link 
	 */
	function deleteSelectedLink()
	{	
		if( !$this->dashElementData["deleteRecord"] )
			return;
			
		parent::deleteSelectedLink();	
	}
	
	/**
	 * Assign checkbox column, header and header attrs
	 */
	function checkboxColumnAttrs()
	{
		if( !($this->permis[$this->tName]['delete'] && $this->pSet->hasDelete() && $this->dashElementData["deleteRecord"] 
			|| $this->permis[$this->tName]['edit'] && $this->isUseInlineEdit && $this->dashElementData["inlineEdit"]) )
			return;	
		
		$this->xt->assign("checkbox_column", true);
		$this->xt->assign("checkbox_header", true);
		$this->xt->assign("checkboxheader_attrs", "id=\"chooseAll_".$this->id."\" class=\"chooseAll".$this->id."\"");
	}
	
	/**
	 *
	 */
	function showPage() 
	{
		$this->BeforeShowList();
		
		if( isMobile() )
			$bricksExcept = array("grid_mobile", "pagination", "details_found");
		else 
			$bricksExcept = array("grid", "pagination", "message", "recordcontrols_new", "recordcontrol", "details_found");
		
		$this->xt->hideAllBricksExcept( $bricksExcept );
		$this->xt->prepare_template($this->templatefile);
		$this->showPageAjax();
	}

	
	/**
	 * Display blocks after loaded template of page
	 */
	function showPageAjax() 
	{
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		$returnJSON = array();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsHTMLMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header",false);
		$this->xt->assign("footer",false);

		if( $this->formBricks["header"] )
			$returnJSON['headerCont'] = $this->fetchBlocksList( $this->formBricks["header"], true );					
		
		//	prepend headerCont with the page title
		$returnJSON['headerCont'] = '<span class="rnr-dbebrick">' 
			. $this->getPageTitle( $this->pageType, GoodFieldName($this->tName) ) 
			. "</span>"
			. $returnJSON['headerCont'];

		if( $this->formBricks["footer"] )
			$returnJSON["footerCont"] = $this->fetchBlocksList( $this->formBricks["footer"], true );
			
		$this->assignFormFooterAndHeaderBricks(false);
		$this->xt->prepareContainers();
		$returnJSON["html"] = $this->xt->fetch_loaded("body");
		
		$returnJSON['idStartFrom'] = $this->flyId;
		$returnJSON['success'] = true;
		
		$returnJSON["additionalJS"] = $this->grabAllJsFiles();
		$returnJSON["CSSFiles"] = $this->grabAllCSSFiles();

		echo printJSON($returnJSON);
	}
	
	/**
	 * Returns where clause for active master-detail relationship
	 * @return string
	 */
	function getMasterTableSQLClause()
	{
		return "";
	}
	
	/**
	 *
	 */
	function assignListIconsColumn($editPermis = 1, $addPermis = 1, $searchPermis = 1)
	{	
		if( $editPermis && ( $this->isUseInlineEdit && $this->dashElementData["inlineEdit"] || $this->dashElementData["popupEdit"] ) 
			|| $this->dashElementData["popupView"] )
		{
			$this->xt->assign("listIcons_column", true);
		}
	}

	function fillSetCntrlMaps()
	{
		parent::fillSetCntrlMaps();
		
		$this->controlsHTMLMap[$this->tName][$this->pageType][$this->id]["pageNumber"] = $this->myPage;
	}
	
}
?>