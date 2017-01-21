<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_loan($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "loan";
	$xt->eventsObject = getEventObject($tName);
	
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["pageType"] = PAGE_PRINT;
	$mParams["tName"] = $tName;
	$masterPage = new PrintPage($mParams);
	
	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT, $masterPage);
	
	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "schedule" )
	{
		$keysAssoc["LoanID"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("LoanID", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("LoanID", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("LoanID", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("loan","LoanID").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}
	
	if( !$where )
		return;
	
	$str = SecuritySQL("Export", $tName );
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	$xt->assign("LoanID_mastervalue", $viewControls->showDBValue("LoanID", $data, $keylink));
	$format = $settings->getViewFormat("LoanID");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("LoanID")))
		$class = ' rnr-field-number';
		
	$xt->assign("LoanID_class", $class); // add class for field header as field value
	$xt->assign("AccountName_mastervalue", $viewControls->showDBValue("AccountName", $data, $keylink));
	$format = $settings->getViewFormat("AccountName");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("AccountName")))
		$class = ' rnr-field-number';
		
	$xt->assign("AccountName_class", $class); // add class for field header as field value
	$xt->assign("ClientNo_mastervalue", $viewControls->showDBValue("ClientNo", $data, $keylink));
	$format = $settings->getViewFormat("ClientNo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ClientNo")))
		$class = ' rnr-field-number';
		
	$xt->assign("ClientNo_class", $class); // add class for field header as field value
	$xt->assign("AccountNumber_mastervalue", $viewControls->showDBValue("AccountNumber", $data, $keylink));
	$format = $settings->getViewFormat("AccountNumber");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("AccountNumber")))
		$class = ' rnr-field-number';
		
	$xt->assign("AccountNumber_class", $class); // add class for field header as field value
	$xt->assign("TelephoneNo_mastervalue", $viewControls->showDBValue("TelephoneNo", $data, $keylink));
	$format = $settings->getViewFormat("TelephoneNo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TelephoneNo")))
		$class = ' rnr-field-number';
		
	$xt->assign("TelephoneNo_class", $class); // add class for field header as field value
	$xt->assign("DateLoanApproved_mastervalue", $viewControls->showDBValue("DateLoanApproved", $data, $keylink));
	$format = $settings->getViewFormat("DateLoanApproved");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("DateLoanApproved")))
		$class = ' rnr-field-number';
		
	$xt->assign("DateLoanApproved_class", $class); // add class for field header as field value
	$xt->assign("LoanAmount_mastervalue", $viewControls->showDBValue("LoanAmount", $data, $keylink));
	$format = $settings->getViewFormat("LoanAmount");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("LoanAmount")))
		$class = ' rnr-field-number';
		
	$xt->assign("LoanAmount_class", $class); // add class for field header as field value
	$xt->assign("LoanInterest_mastervalue", $viewControls->showDBValue("LoanInterest", $data, $keylink));
	$format = $settings->getViewFormat("LoanInterest");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("LoanInterest")))
		$class = ' rnr-field-number';
		
	$xt->assign("LoanInterest_class", $class); // add class for field header as field value
	$xt->assign("LoanPeriod_mastervalue", $viewControls->showDBValue("LoanPeriod", $data, $keylink));
	$format = $settings->getViewFormat("LoanPeriod");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("LoanPeriod")))
		$class = ' rnr-field-number';
		
	$xt->assign("LoanPeriod_class", $class); // add class for field header as field value
	$xt->assign("FirstPaymentDate_mastervalue", $viewControls->showDBValue("FirstPaymentDate", $data, $keylink));
	$format = $settings->getViewFormat("FirstPaymentDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FirstPaymentDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("FirstPaymentDate_class", $class); // add class for field header as field value

	$layout = GetPageLayout("loan", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("loan", "masterprint"));
}

?>