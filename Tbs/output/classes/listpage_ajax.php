<?php
/**
 * Class for list page with mode ajax
 *
 */
class ListPage_Ajax extends ListPage_Simple 
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */	
	function ListPage_Ajax(&$params) 
	{
		// call parent constructor
		parent::ListPage ($params);	
	}
	/**
	 * Add common assign for ajax mode on list page
	 */	
	function commonAssign() 
	{
		$this->xt->assign("id", $this->id);
		//search permissions
		$searchPermis = $this->permis[$this->tName]['search'];
		$exportPermis = $this->permis[$this->tName]['export'];
		
		$this->xt->assign("details_block", $searchPermis && $this->rowsFound);
		$this->xt->assign("pages_block", $searchPermis && $this->rowsFound);
	
		$this->xt->assign("record_controls_block", true);
		if( !($this->rowsFound && ($exportPermis || $this->permis[$this->tName]['add'] || $this->permis[$this->tName]['delete'] || $this->permis[$this->tName]['edit']) ) )
			$this->xt->displayBrickHidden("recordcontrol");
	
		$advSearchPargeFields = $this->pSetEdit->getAdvSearchFields();
		$this->xt->assign("moreButtons", $exportPermis || $this->permis[$this->tName]['import'] || $searchPermis && count($advSearchPargeFields) > 0 );
		$this->xt->assign("widhtSelected", $exportPermis || $this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['delete']);
	
		//export selected link and attr	
		$this->xt->assign("exportselected_link", $exportPermis);
		$this->xt->assign("exportselectedlink_attrs", $this->getPrintExportLinkAttrs('export'));
		
		//print selected link and attr
		$this->xt->assign("printselected_link", $exportPermis);
		$this->xt->assign("printselectedlink_attrs", $this->getPrintExportLinkAttrs('print'));
		
		$this->editSelectedLinkAttrs();
		$this->cancelAllLinkAttrs();
		$this->saveAllLinkAttrs();
		$this->selectAllLinkAttrs();	
		
		//$this->xt->assign("recordspp_block", $searchPermis && count($this->arrRecsPerPage) && $this->rowsFound );
		if($searchPermis && count($this->arrRecsPerPage) && $this->rowsFound)
		{
			$this->xt->assign("recordspp_block", true );
			$this->createPerPage();
		}
		
		$this->xt->assignbyref("body", $this->body);
			
		$this->addAssignForGrid();
						
		if ($this->isDispGrid())
			$this->xt->assign_section("grid_block", '', '');
			
		$this->xt->assign("filterPanelStateClass", "filter-ajaxReloaded");	
	}
	
	/**
	 * Add common html code for ajax mode on list page
	 */	
	function addCommonHtml() 
	{
		return true;
	}
	
	/**
	 * Add common javascript code for ajax mode on list page
	 */	
	function addCommonJs()
	{
		$this->addJsForGrid();
	}
		
	/**
      * Final build page
      *
	  */
	function prepareForBuildPage() 
	{		 
		// build column hiding CSS
		$this->buildMobileCssRules();
		
		//orderlinkattrs for fields
		$this->orderLinksAttr();
		
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
	}
	
	/**
	 * Show page method
	 */
	function showPage()
	{
		$this->BeforeShowList();
		$bricksExcept = array("details_found", "page_of", "recsperpage", "vrecsperpage", "vdetails_found", "vpage_of", "grid", "pagination", "message", "filterpanel", "search_saving_buttons", "recordcontrol");
		
		$this->xt->hideAllBricksExcept($bricksExcept);
		$this->xt->prepare_template($this->templatefile);
		
		$returnJSON = array("success"=>true, 'idStartFrom'=>$this->flyId);
		$this->addControlsJSAndCSS();
		$this->fillSetCntrlMaps();
		$returnJSON['controlsMap'] = $this->controlsHTMLMap;
		$returnJSON['viewControlsMap'] = $this->viewControlsMap;
		$returnJSON['settings'] = $this->jsSettings;
		$this->xt->assign("header","");
		$this->xt->assign("footer","");
		$returnJSON["html"] = $this->xt->fetch_loaded("body");
		$returnJSON['cellStyles'] = $this->row_css_rules.$this->cell_css_rules."\n".$this->mobile_css_rules;
		$returnJSON['numberOfRecs'] = $this->numRowsFromSQL;
		$returnJSON['recPerPage'] = $this->pageSize;
		
		if ($this->deleteMessage!='')
			$returnJSON["usermessage"] = true;
		
		echo printJSON($returnJSON);
		exit();
	}

}
?>