<?php
class ReportPage extends RunnerPage
{
	public $masterkey;
	public $pagestart;
	public $masterKeysReq;
	public $crosstable_refresh;
	public $arrReport;
	
	
	function ReportPage(&$params) 
	{
		parent::RunnerPage($params);
		
		$this->jsSettings['tableSettings'][$this->tName]['simpleSearchActive'] = $this->searchClauseObj->simpleSearchActive;
	}

	/**
	 *	Copy master keys to sesstion
	 */
	function copyMasterKeysToSession()
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
	}
	
	/**
	 * Get data for crosstab and assign with xt
	 * @param &Array _options	 
	 */
	function setCrosstabData(&$_options)
	{
		if( $_options["crosstable_refresh"] )
		{
			if( !$_SESSION[$this->sessionPrefix."_rname"] )
				$reportFilename = GetTableLink($this->shortTableName, "report");
			else
				$reportFilename = GetTableLink("dreport");
		}
				
		$cross_array = array();
		$cross_array["fromWizard"] = true;
		$cross_array["table_type"] = "project";
		$cross_array["tables"][] = $this->tName;
		
		foreach($_options["repGroupFields"] as $ind => $value)
		{
			$cross_array["group_fields"][$ind]["name"] = $value["strGroupField"];
			$cross_array["group_fields"][$ind]["int_type"] = $value["groupInterval"];
			
			if( $value["crossTabAxis"] == 0 )
				$t_axis = "x";
			elseif( $value["crossTabAxis"] == 1 )
				$t_axis = "y";
			else
				$t_axis = "all";
				
			$cross_array["group_fields"][$ind]["group_type"] = $t_axis;
		}
		
		$sum_x = $_options['bReportHorizontalSummary'];
		$sum_y = $_options['bReportVerticalSummary'];

		$lastPos = count($cross_array["group_fields"]);
		
		if($sum_x || $sum_y)
			$cross_array["group_fields"][$lastPos]["sum_total"] = true;
		else
			$cross_array["group_fields"][$lastPos]["sum_total"] = false;
			
		if($sum_x)
			$cross_array["group_fields"][$lastPos]["sum_x"] = true;
		else
			$cross_array["group_fields"][$lastPos]["sum_x"] = false;
		
		if($sum_y)
			$cross_array["group_fields"][$lastPos]["sum_y"] = true;
		else
			$cross_array["group_fields"][$lastPos]["sum_y"] = false;
		
		foreach($_options["fieldsArr"] as $ind => $value)
		{
			$cross_array["totals"][ $value["name"] ]["name"] = $value["name"];
			$cross_array["totals"][ $value["name"] ]["label"]=$value["label"];
			
			if( $value["totalMax"] )
				$cross_array["totals"][ $value["name"] ]["max"] = true;
			else
				$cross_array["totals"][ $value["name"] ]["max"] = false;
			
			if( $value["totalMin"] )
				$cross_array["totals"][ $value["name"] ]["min"] = true;
			else
				$cross_array["totals"][ $value["name"] ]["min"] = false;
			
			if( $value["totalSum"] )
				$cross_array["totals"][ $value["name"] ]["sum"] = true;
			else
				$cross_array["totals"][ $value["name"] ]["sum"] = false;
			
			if( $value["totalAvg"] )
				$cross_array["totals"][ $value["name"] ]["avg"] = true;
			else
				$cross_array["totals"][ $value["name"] ]["avg"] = false;
		}
		
		$strSQL = $this->getBasicCrossTableSQL();
		$crosstableObj = new CrossTableReport($cross_array, $strSQL);
		
		if($this->crosstable_refresh)
		{
			$crosstableObj->ajax_refresh_crosstable();
			exit();
		}
		
		$this->xt->assign("select_group_x","<select id=select_group_x onchange=\"refresh_group('".$_SESSION[$this->sessionPrefix."_rname"]."', '".$reportFilename."');\">".$crosstableObj->getGroupFields("x")."</select>");
		$this->xt->assign("select_group_y","<select id=select_group_y onchange=\"refresh_group('".$_SESSION[$this->sessionPrefix."_rname"]."', '".$reportFilename."');\">".$crosstableObj->getGroupFields("y")."</select>");
		$grid_row["data"] = $crosstableObj->getCrossTableData();
		$arr_res=$crosstableObj->getValuesControl();
		$res = $arr_res[0];
		$first_field_index = $arr_res[1];
		$arr_value=$crosstableObj->getSelectedValue();
		$first_field=$arr_value[$first_field_index];
		if($res)
		{
			$this->xt->assign("select_data", "<select id=select_data onchange='refresh_crosstable(true);return false;'>".$res."</select>");
			$this->xt->assign("group_func", $crosstableObj->getRadioGroupFunctions());
			$group_func = $crosstableObj->getTotalsName( $crosstableObj->getCurrentGroupFunction() );
			$this->xt->assign("totals", $group_func);
		}
		if(count($grid_row["data"]) > 0)
		{
			$this->xt->assign("grid_row", $grid_row);
			$this->xt->assignbyref("group_header", $crosstableObj->getCrossTableHeader());
			$this->xt->assignbyref("col_summary", $crosstableObj->getCrossTableSummary());	
			$this->xt->assignbyref("total_summary", $crosstableObj->getTotalSummary());
			if($sum_x || $sum_y)
				$this->xt->assign("cross_totals", true);
		}
		else
		{
			$this->xt->assign("message_block", true);
			$this->xt->assign("container_grid", false);
			$this->xt->assign("message", "No records found");
		}
		$this->xt->assign("crosstable_attrs", "rname=".$_SESSION[$this->sessionPrefix."_rname"]."&axis_x=".$_SESSION[$this->sessionPrefix."_gr_x"]
			."&axis_y=".$_SESSION[$this->sessionPrefix."_gr_y"]."&field=".$_SESSION[$this->sessionPrefix."_field"]."&group_func=".$_SESSION[$this->sessionPrefix."_group_func"]);
	}
	
	/**
	 * Get the basic SQL query for a crosstable report
	 * @return String
	 */
	protected  function getBasicCrossTableSQL() 
	{
		$_gQuery = $this->pSet->getSQLQuery();	
		$whereComponents = $this->getWhereComponents();
					
		$gsqlWhereExpr = "";
		if( $this->pSet->noRecordsOnFirstPage() && ! count($_GET) && ! count($_POST) )
			$gsqlWhereExpr = "1=0";
		$gsqlWhereExpr = combineSQLCriteria( array($gsqlWhereExpr, SecuritySQL("Search",  $this->tName), $this->getFiltersWhere(), $whereComponents["commonWhere"]) );
	
		$searchHavingClause = combineSQLCriteria( array($whereComponents["searchHaving"], $this->getFiltersHaving()) );
			
		return $_gQuery->gSQLWhere_having_fromQuery($gsqlWhereExpr, $whereComponents["searchWhere"], $searchHavingClause, $this->searchClauseObj->getCriteriaCombineType());	
	}
	
	/**
	 * Get data for standart report and assign with xt
	 * @param &Array _options	 
	 */
	function setStandartData(&$_options)
	{
		global $conn;
		
		$_gQuery = $this->pSet->getSQLQuery();
		
		$whereComponents = $this->getWhereComponents();
		$gsqlWhereExpr = "";
		if($this->pSet->noRecordsOnFirstPage() && ! count($_GET) && ! count($_POST))
			$gsqlWhereExpr = "1=0";
		$gsqlWhereExpr = combineSQLCriteria( array($gsqlWhereExpr, $whereComponents["commonWhere"], $this->getFiltersWhere()) );
		$gsqlHavingExpr = combineSQLCriteria( array($whereComponents["commonHaving"], $this->getFiltersHaving()) );
		
		$_options['tKeyFields'] = $this->pSet->getTableKeys();
		
		$sqlArray = array($_gQuery->HeadToSql(), $_gQuery->FromToSql(), $gsqlWhereExpr, $_gQuery->GroupByToSql(), $gsqlHavingExpr);
		$rb = new Report($sqlArray, $this->pSet->GetTableData(".orderindexes"), $conn, $this->pageSize, -1, $_options, $whereComponents["searchWhere"], $whereComponents["searchHaving"], $this); 

		$_SESSION[$this->sessionPrefix.'_advsearch'] = serialize($this->searchClauseObj);
		$_SESSION[$this->sessionPrefix."_where"] = $gsqlWhereExpr;
			
		$this->arrReport = $rb->getReport($this->pagestart);

		foreach($this->arrReport['page'] as $key => $value)
			$this->xt->assign($key, $value);

		foreach($this->arrReport['global'] as $key => $value)
			$this->xt->assign($key, $value);

		// set detail links
		global $bSubqueriesSupported;
		$this->subQueriesSupp = $bSubqueriesSupported;
		$this->subQueriesSupAccess = $this->pSet->tableSupportsSubqueries();
		$this->theSameFieldsType = $this->checkDetailAndMasterFieldTypes();
		$this->xt->assign(GoodFieldName($this->tName)."_dtable_column", true);
	
		foreach( $this->allDetailsTablesArr as $detailTableData )
		{
			// get perm for det tables
			$this->permis[ $detailTableData['dDataSourceTable'] ]= $this->getPermissions( $detailTableData['dDataSourceTable'] );
			// field names of detail keys of passed detail table, when current is master
			$this->detailKeysByD[$i] = $this->pSet->getDetailKeysByDetailTable( $detailTableData['dDataSourceTable'] );			
		}

		$this->controlsMap['gridRows'] = array();
		$arrReportList = array();
		foreach ($this->arrReport['list'] as $key => $data) 
		{
			if (!isset($data['row_data']))
				continue;
			$record = array();
			$this->genId();
			
			$gridRowInd = count($this->controlsMap['gridRows']);
			$this->controlsMap['gridRows'][$gridRowInd] = array();
			$this->controlsMap['gridRows'][$gridRowInd]['id'] = $this->recId;
			$this->controlsMap['gridRows'][$gridRowInd]['rowInd'] = $gridRowInd;
			//Add the connection with containing row. It's important for vertical layout's multiple records per row mode
			$this->controlsMap['gridRows'][$gridRowInd]['keyFields'] = array();
			$this->controlsMap['gridRows'][$gridRowInd]['keys'] = array();
			for($i = 0; $i < count($tKeys); $i ++) {
				$this->controlsMap['gridRows'][$gridRowInd]['keyFields'][$i] = $tKeys[$i];
				$this->controlsMap['gridRows'][$gridRowInd]['keys'][$i] = $data[$tKeys[$i].'_value'];
			}
			
			$this->proccessDetailGridInfo($record, $data, $gridRowInd);
			$record["recordattrs"] = "data-record-id=\"".$this->recId."\"";
			$record["rowattrs"] = " id=\"gridRow".$this->recId."\"";
			$arrReportList[$key] = array_merge_assoc($data, $record);
			$this->recIds[] = $this->recId;
		}
		
		foreach($arrReportList as $key => $data)
		{
			$this->arrReport['list'][$key] = $data;
		}
			
		// end set detail links

		if( count($this->arrReport['list']) > 0)
		{
			$this->xt->assign('grid_row', array('data' => $this->arrReport['list']));
		}
		else
		{
			$this->xt->assign("message_block", true);
			$this->xt->assign("container_grid", false);
			$this->xt->assign("message", "No records found");
		}

		$this->myPage = $_SESSION[$this->sessionPrefix.$this->masterkey."_pagenumber"];
		$this->maxPages = $this->arrReport['maxpages'];

		//	prepare for create pagination
		if($this->maxPages > 1)
		{		
			$this->xt->assign("pagination_block", true);
			$pagination = '';
			$counterstart = $this->myPage - 9;
			if($this->myPage % 10 != 0)
				$counterstart = $this->myPage -($this->myPage % 10) + 1;
			$counterend = $counterstart + 9;
			if($counterend > $this->maxPages)
				$counterend = $this->maxPages;
			if($counterstart != 1) 
			{
				$pagination.= $this->getPaginationLink(1,"First")."&nbsp;:&nbsp;";
				$pagination.= $this->getPaginationLink($counterstart - 1,"Previous")."&nbsp;";
			}
			$pagination.= "<b>[</b>";
			for($counter = $counterstart; $counter <= $counterend; $counter ++) 
			{
				if($counter != $this->myPage)
					$pagination.= "&nbsp;".$this->getPaginationLink($counter,$counter,true);
				else
					$pagination.= "&nbsp;<b>".$counter."</b>";
			}
			$pagination.= "&nbsp;<b>]</b>";
			if($counterend != $this->maxPages) 
			{
				$pagination.= "&nbsp;".$this->getPaginationLink($counterend + 1,"Next")."&nbsp;:&nbsp;";
				$pagination.= "&nbsp;".$this->getPaginationLink($this->maxPages,"Last");
			}

			$this->xt->assign("pagination", $pagination);
		}
	}
	
	/**
	 * Prepare detail for edit and view
	 * @param Array pageparams
	 */
	function prepareDetailForEditViewPage($pageparams) 
	{
		$this->copyMasterKeysToSession();
	
		$this->addButtonHandlers();
		$this->commonAssign();
	
		$_options = $pageparams;
		$cross_table = $pageparams['bReportCrossTab'];		
				
		if($cross_table)
		{	
			include_once(getabspath("classes/crosstable_report.php"));
			// cross report
			$this->xt->assign("cross_controls", false);
			$this->setCrosstabData($_options);
		}
		else
		{	
			global $report_classfields;
			include_once(getabspath('classes/reportlib.php'));
			// standart report
			if(!$_SESSION[$this->sessionPrefix.$this->masterkey."_pagenumber"])
				$_SESSION[$this->sessionPrefix.$this->masterkey."_pagenumber"]=1;
			if(isset($_REQUEST["goto"]))
				$_SESSION[$this->tName.$this->masterkey."_pagenumber"]=intval($_REQUEST["goto"]);
			$this->pagestart = ($_SESSION[$this->sessionPrefix.$this->masterkey."_pagenumber"]-1)*$_SESSION[$this->sessionPrefix."_pagesize"];

			if (!$this->pageSize)
				$this->pageSize = -1;
			
			$_options['tName'] = $this->tName;
			$_options['sessionPrefix'] = $this->tName;
			$_options['shortTableName'] = GetTableURL($this->tName);
			
			$this->setStandartData($_options);
		}
		
		$this->xt->assign("grid_block", true);
		$this->xt->assign("recordspp_block",true);
		$this->createPerPage();
		$this->xt->assign("style_block",true);
		$this->xt->assign("shiftstyle_block", true);
		$this->xt->assign("id",$options['id']);
		$this->body["begin"] = '';
		$this->body["end"] = '';
		$this->xt->assign("body",$this->body);	
		$this->xt->assign("style_block",true);
		$this->xt->assign("guestlink_block", false);
		$this->xt->assign("container_toplinks", false);
		$this->xt->assign("container_search", false);
		$this->xt->assign("container_left", false);
	}
}
?>