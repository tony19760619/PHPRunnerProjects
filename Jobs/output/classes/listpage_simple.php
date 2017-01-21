<?php
/**
 * Class for list page with mode simple
 *
 */
class ListPage_Simple extends ListPage 
{
	/**
	 * Constructor, set initial params
	 *
	 * @param array $params
	 */	
	function ListPage_Simple(&$params) 
	{
		// call parent constructor
		parent::ListPage ($params);	
		$this->pSetEdit = new ProjectSettings($this->tName, PAGE_SEARCH);
	}
	/**
	 * Add common assign for simple mode on list page
	 */	
	function commonAssign() 
	{
		parent::commonAssign();
		
		//search permissions
		$searchPermis = $this->permis[$this->tName]['search'];
		//export permissions
		$exportPermis = $this->permis[$this->tName]['export'];

		$allowRecordControls = false;
		if( $this->permis[$this->tName]['export'] && ($this->pSet->hasExportPage() || $this->pSet->hasPrintPage()) 
			|| $this->permis[$this->tName]['delete'] && $this->pSet->hasDelete()			
			|| $this->permis[$this->tName]['edit'] && ($this->pSet->hasInlineEdit() || $this->pSet->hasEditPage()) 
			|| $this->permis[$this->tName]['add'] && $this->pSet->hasInlineAdd())
		{
			$allowRecordControls = true;	
		}

		//add edit delete print export links 
		$this->xt->assign("record_controls_block", $allowRecordControls);
		
		// adds style display none to hiderecord controls, edit selected, delete selected, export selected and print selected if found 0 recs
		$this->xt->assign("details_block", $searchPermis );
		if( !$this->rowsFound )
		{
			$this->xt->displayBrickHidden("details_found");
			$this->xt->displayBrickHidden("vdetails_found");
		}
		
		if( $searchPermis && count($this->arrRecsPerPage))
		{
			$this->xt->assign("recordspp_block", true);
			$this->createPerPage();
			if( !$this->rowsFound )
			{
				$this->xt->displayBrickHidden("recsperpage");
				$this->xt->displayBrickHidden("vrecsperpage");
			}
		}
		
		$this->xt->assign("pages_block", $searchPermis);
		if( !$this->rowsFound )
		{
			$this->xt->displayBrickHidden("page_of");
			$this->xt->displayBrickHidden("vpage_of");
		}
		$this->xt->assign("pages_attrs","id=\"pageOf".$this->id."\" name=\"pageOf".$this->id."\"");
		
		$this->xt->assign("left_block", true);
		//$this->xt->assign("toplinks_block", true);
		
		$advSearchPargeFields = $this->pSetEdit->getAdvSearchFields();		
		$this->xt->assign("moreButtons", $exportPermis && ($this->pSet->hasExportPage() || $this->pSet->hasPrintPage()) || $this->permis[$this->tName]['import'] && $this->pSet->hasImportPage() 
			|| $searchPermis && count($advSearchPargeFields) > 0 );
		$this->xt->assign("widhtSelected", $exportPermis || $this->permis[$this->tName]['edit'] || $this->permis[$this->tName]['delete']);
		
		//export selected link and attr
		$this->xt->assign("exportselected_link", $exportPermis);
		$this->xt->assign("exportselectedlink_span", $this->buttonShowHideStyle());
		$this->xt->assign("exportselectedlink_attrs", $this->getPrintExportLinkAttrs('export'));
		
		//print selected link and attr
		$this->xt->assign("printselected_link", $exportPermis && $this->rowsFound);
		$this->xt->assign("printselectedlink_attrs", $this->getPrintExportLinkAttrs('print'));
		$this->xt->assign("printselectedlink_span", $this->buttonShowHideStyle());
		
		// print links and attrs
		$this->xt->assign("prints_block", $exportPermis);
		$this->xt->assign("print_link", $exportPermis);
		$this->xt->assign("printlink_attrs", "id='print_".$this->id."' name='print_".$this->id."'");
		if( !$this->rowsFound )
			$this->xt->displayBrickHidden("toplinks_print");
						
		//print all link and attr
		$this->xt->assign("printall_link", $exportPermis && $this->numRowsFromSQL > $this->pageSize && $this->pageSize > 0);
		$this->xt->assign("printalllink_attrs","id='printAll_".$this->id."' name='printAll_".$this->id."'");
				
		//export link and attr
		$this->xt->assign("export_link", $exportPermis);
		$this->xt->assign("exportlink_attrs", 
						  "id = 'export_".$this->id."'
						   name = 'export_".$this->id."'
						   onclick=\"window.open(this.href,'wExport');return false;\"");
		
		//add link and attr
		$this->xt->assign("add_link", $this->permis[$this->tName]['add']);
		$this->xt->assign("addlink_attrs", "href='".GetTableLink($this->shortTableName, "add")."' id=\"addButton".$this->id."\"");
		
		//advanced search and attr
		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");
		
		//select all link and attr
		$this->selectAllLinkAttrs();	
		
		//edit selected link and attr	
		$this->editSelectedLinkAttrs();		
		
		//save all link, attr, span	
		$this->saveAllLinkAttrs();
		
		//cansel all link, attr, span	
		$this->cancelAllLinkAttrs();
		
		if( $this->numRowsFromSQL == 0 ) 
			$this->xt->displayBrickHidden("recordcontrol");
		
		$this->xt->assign("grid_block", true);
		
		$this->xt->assign('menu_block', $this->isShowMenu() || $this->isAdminTable());
		$this->xt->assign("languages_block",true);
		
		if( isMobile() )
		{
			$this->xt->assign('morelinkmobile_block', true);
			$this->xt->assign('tableinfomobile_block', true);
			$this->xt->displayBrickHidden("vmsearch2");
		}
		
	}
	/**
	 * Simple assign for grid block
	 */
	function addAssignForGrid()
	{
		parent::addAssignForGrid();
		
		//edit permissions
		$editPermis = $this->permis[$this->tName]['edit'];
		//add permissions
		$addPermis = $this->permis[$this->tName]['add'];
		//search permissions
		$searchPermis = $this->permis[$this->tName]['search'];
		
		//checkbox column				
		$this->checkboxColumnAttrs();
		
		//edit column
		$this->xt->assign("edit_column", $editPermis);
		$this->xt->assign("edit_headercolumn", $editPermis);
		$this->xt->assign("edit_footercolumn", $editPermis);
		
		//inline edit column	
		$this->xt->assign("inlineedit_column", $editPermis);
		$this->xt->assign("inlineedit_headercolumn", $editPermis);
		$this->xt->assign("inlineedit_footercolumn", $editPermis);
		
		//copy link
		$this->xt->assign("copy_column", $addPermis);
				
		//view column	
		$this->xt->assign("view_column", $searchPermis);
		
		//for list icons instead of list links
		$this->assignListIconsColumn($editPermis, $addPermis, $searchPermis);
		for($i = 0; $i < count($this->allDetailsTablesArr); $i ++) 
		{
			$permis =($this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]['add'] || $this->permis[$this->allDetailsTablesArr[$i]['dDataSourceTable']]['search']);
			if($permis)
			{
				$this->xt->assign(GoodFieldName($this->tName)."_dtable_column", $permis);
				break;
			}
		}
			
		//delete link and attr
		$this->deleteSelectedLink();
	}	
		
	/**
	 * Add common html code for simple mode on list page
	 */	
	function addCommonHtml() 
	{
		$this->body ["begin"] .= GetBaseScriptsForPage($this->isDisplayLoading); 
				
		//add parent common html code
		parent::addCommonHtml();
		
		// assign body end
		$this->body['end'] = array();
		AssignMethod($this->body['end'], "assignBodyEnd", $this);
	}
	
	function buildSearchPanel() 
	{
		if(!$this->permis[$this->tName]["search"])
		{
			return;
		}
		$this->xt->enable_section("searchPanel");
		$params = array();
		$params['pageObj'] = &$this;
		$params['panelSearchFields'] = $this->panelSearchFields;
		$panelSearchFields = array();
		$allSearchFields = $this->pSet->getAllSearchFields();
		
		for($i=0; $i<count($allSearchFields); $i++)
		{
			if( !$this->matchWithDetailKeys($allSearchFields[$i]) )
				$panelSearchFields[] = $allSearchFields[$i];
		}
				
		$params['allSearchFields'] = $panelSearchFields;
		
		$this->searchPanel = new SearchPanelSimple($params);
		$this->searchPanel->buildSearchPanel();
	}	
}

?>
