<?php
class ChartPage extends RunnerPage
{
	/**
	 * The name of the dashboard the List is displayed on
	 * It's set up correctly in dash mode only
	 */
	public $dashElementName = "";
	
	/**
	 * The corresponding dashboard name
	 * It's set up correctly in dash mode only	 
	 */
	public $dashTName = "";
	
	/**
	 * show message block
	 */
	public $show_message_block = false;

	/**
	 * @constructor
	 */
	function ChartPage(&$params = "")
	{
		parent::RunnerPage($params);
		
		$this->jsSettings['tableSettings'][ $this->tName ]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;
	}

	/**
	 * Set the page's session prefix
	 */
	protected function assignSessionPrefix()
	{
		if( $this->mode == CHART_DASHBOARD )
			$this->sessionPrefix = $this->dashTName."_".$this->tName;
		else
			$this->sessionPrefix = $this->tName;
	}	

	/**
	 * Set session variables
	 */
	public function setSessionVariables()
	{
		parent::setSessionVariables();
		
		// SearchClause class stuff
		$agregateFields = $this->pSet->getListOfFieldsByExprType(true);
		$this->searchClauseObj->haveAgregateFields = count($agregateFields) > 0;
		$_SESSION[ $this->sessionPrefix.'_advsearch' ] = serialize( $this->searchClauseObj );		
	}

	/**
	 * Build the activated Search panel
	 */
	public function buildSearchPanel()
	{
		if( $this->mode == CHART_DASHBOARD )
			return;
		
		parent::buildSearchPanel();
	}	
	
	/**
	 * Process the page 
	 */
	public function process()
	{
		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessChart") )
			$this->eventsObject->BeforeProcessChart( $this );
			
		$this->doCommonAssignments();
		$this->addButtonHandlers();
		$this->addCommonJs();
		$this->commonAssign();

		// display the 'Back to Master' link and master table info
		$this->displayMasterTableInfo();

		$this->showPage();		
	}
	
	/**
	 * Get where clause for an active master-detail relationship
	 * @return string
	 */
	public function getMasterTableSQLClause() 
	{
		if( $this->mode == CHART_DASHBOARD )
			return "";		
		return parent::getMasterTableSQLClause(); 
	}	
	
	/**
	 *
	 */
	public function doCommonAssignments() // TODO: make it protected
	{
		$this->xt->assign("id", $this->id);		
		
		//set the Search panel
		$this->xt->assign("searchPanel", true);

		if( $this->isShowMenu() )
			$this->xt->assign("menu_block", true);		

			
		$this->xt->assign("chart_block", true);
		$this->xt->assign("asearch_link", true);
		$this->xt->assign("exportpdflink_attrs", "onclick='chart.saveAsPDF();'");
		$this->xt->assign("advsearchlink_attrs", "id=\"advButton".$this->id."\"");

		if( !GetChartXML( $this->shortTableName ) )
			$this->xt->assign("chart_block", false);			
		
		if( ($this->mode == CHART_SIMPLE || $this->mode == CHART_DASHBOARD) && $this->pSet->noRecordsOnFirstPage() && !$this->searchClauseObj->isSearchFunctionalityActivated() )
		{
			$this->show_message_block = true;
			$this->xt->displayBrickHidden("chart");
			$this->xt->assign("chart_block", false);
			$this->xt->assign("message_block", true);
			$this->xt->assign("message", "No records found");
		}		
		
		$this->assignChartElement();
		
		if( $this->isDynamicPerm && IsAdmin() ) 
		{
			$this->xt->assign("adminarea_link", true);
			$this->xt->assign("adminarealink_attrs", "id=\"adminArea".$id."\"");
		}

		$this->xt->assign("changepwd_link", $_SESSION["AccessLevel"] != ACCESS_LEVEL_GUEST && $_SESSION["fromFacebook"] == false);
		$this->xt->assign("changepwdlink_attrs", "onclick=\"window.location.href='".GetTableLink("changepwd")."';return false;\"");
		
		$this->body['begin'].= GetBaseScriptsForPage( $this->isDisplayLoading );
		if( !isMobile() )
			$this->body['begin'].= "<div id=\"search_suggest\" class=\"search_suggest\"></div>";

		// assign body end
		$this->body['end'] = array();
		AssignMethod($this->body['end'], "assignBodyEnd", $this);

		$this->xt->assignbyref('body', $this->body);	
	}	
	
	/**
	 * Set the chart xt variable
	 */
	public function assignChartElement()
	{
		//set params for the 'xt_showchart' method showing the chart
		$chartXtParams = array(
			"id" => $this->id,
			"table" => $this->tName, 
			"ctype" => $this->pSet->getChartType(), 
			"resize" => $this->mode !== CHART_SIMPLE && $this->mode != CHART_DASHBOARD,
			"chartname" => $this->shortTableName,
			"chartPreview" => $this->mode !== CHART_SIMPLE && $this->mode != CHART_DASHBOARD
		);

		if( $this->mode == CHART_DASHBOARD || $this->mode == CHART_DASHDETAILS)
		{
			$dashSet = new ProjectSettings( $this->dashTName );
			$dashElementData = $dashSet->getDashboardElementData( $this->dashElementName );
			
			if( isset($dashElementData["width"]) || isset($dashElementData["height"]) ) //#10119
			{
				$chartXtParams["dashResize"] = true;
				$chartXtParams["dashWidth"] = $dashElementData["width"];
				$chartXtParams["dashHeight"] = $dashElementData["height"];			
			}

			if( $this->mode == CHART_DASHBOARD )
			{
				$chartXtParams["dash"] = true;
				$chartXtParams["dashTName"] = $this->dashTName;
				$chartXtParams["dashElementName"] = $this->dashElementName;
			}
		}
		
		$this->xt->assign_function( $this->shortTableName."_chart", "xt_showchart", $chartXtParams );
	}
	
	
	public function showPage()
	{
		if( $this->eventsObject->exists("BeforeShowChart") )
			$this->eventsObject->BeforeShowChart($this->xt, $this->templatefile, $this);
	
		if( $this->mode == CHART_DETAILS || $this->mode == CHART_DASHBOARD || $this->mode == CHART_DASHDETAILS )
		{
			$this->addControlsJSAndCSS();
			$this->fillSetCntrlMaps();
			
			$this->xt->unassign("header");
			$this->xt->unassign("footer");
			
			$this->body["begin"] = "";
			$this->body["end"] = "";
			$this->xt->assign("body", $this->body);	

			$bricksExcept = array("chart");
			$this->xt->hideAllBricksExcept($bricksExcept);
			
			if( $this->show_message_block )
				$this->xt->assign("message_block", true);
			
			$this->displayAJAX($this->templatefile, $this->id + 1);
			exit();
		}

		if( $this->mode == CHART_POPUPDETAILS ) //currently unused
		{
			$bricksExcept = array("grid","pagination");
			$this->xt->unassign('header');
			$this->xt->unassign('footer');
			$this->body["begin"] = '';
			$this->body["end"] = '';
			
			$this->xt->hideAllBricksExcept($bricksExcept);
			$this->xt->prepare_template($this->templatefile);
			$respArr = array();
			$respArr['success'] = true;	
			$respArr['body'] = $this->xt->fetch_loaded("body");
			$respArr['counter'] = postvalue('counter');
			$this->xt->assign("container_master", false);
			
			echo printJSON($respArr);
			exit();
		}
			
		$this->display( $this->templatefile );			
	}	
}
?>