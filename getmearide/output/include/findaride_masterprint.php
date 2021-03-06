<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_findaride($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "findaride";
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

	if( $detailtable == "findaridemessages" )
	{
		$keysAssoc["id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("findaride","id").": ".$keyValue;
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
	
	$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));
	$format = $settings->getViewFormat("id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("id")))
		$class = ' rnr-field-number';
		
	$xt->assign("id_class", $class); // add class for field header as field value
	$xt->assign("Username_mastervalue", $viewControls->showDBValue("Username", $data, $keylink));
	$format = $settings->getViewFormat("Username");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Username")))
		$class = ' rnr-field-number';
		
	$xt->assign("Username_class", $class); // add class for field header as field value
	$xt->assign("FromLocation_mastervalue", $viewControls->showDBValue("FromLocation", $data, $keylink));
	$format = $settings->getViewFormat("FromLocation");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FromLocation")))
		$class = ' rnr-field-number';
		
	$xt->assign("FromLocation_class", $class); // add class for field header as field value
	$xt->assign("ToLocation_mastervalue", $viewControls->showDBValue("ToLocation", $data, $keylink));
	$format = $settings->getViewFormat("ToLocation");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ToLocation")))
		$class = ' rnr-field-number';
		
	$xt->assign("ToLocation_class", $class); // add class for field header as field value
	$xt->assign("FromDate_mastervalue", $viewControls->showDBValue("FromDate", $data, $keylink));
	$format = $settings->getViewFormat("FromDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("FromDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("FromDate_class", $class); // add class for field header as field value
	$xt->assign("ToDate_mastervalue", $viewControls->showDBValue("ToDate", $data, $keylink));
	$format = $settings->getViewFormat("ToDate");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ToDate")))
		$class = ' rnr-field-number';
		
	$xt->assign("ToDate_class", $class); // add class for field header as field value
	$xt->assign("TransportWhat_mastervalue", $viewControls->showDBValue("TransportWhat", $data, $keylink));
	$format = $settings->getViewFormat("TransportWhat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TransportWhat")))
		$class = ' rnr-field-number';
		
	$xt->assign("TransportWhat_class", $class); // add class for field header as field value
	$xt->assign("TransportOfWhatPicture_mastervalue", $viewControls->showDBValue("TransportOfWhatPicture", $data, $keylink));
	$format = $settings->getViewFormat("TransportOfWhatPicture");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TransportOfWhatPicture")))
		$class = ' rnr-field-number';
		
	$xt->assign("TransportOfWhatPicture_class", $class); // add class for field header as field value
	$xt->assign("TypeOfTransport_mastervalue", $viewControls->showDBValue("TypeOfTransport", $data, $keylink));
	$format = $settings->getViewFormat("TypeOfTransport");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TypeOfTransport")))
		$class = ' rnr-field-number';
		
	$xt->assign("TypeOfTransport_class", $class); // add class for field header as field value
	$xt->assign("WillingToPayPerDay_mastervalue", $viewControls->showDBValue("WillingToPayPerDay", $data, $keylink));
	$format = $settings->getViewFormat("WillingToPayPerDay");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("WillingToPayPerDay")))
		$class = ' rnr-field-number';
		
	$xt->assign("WillingToPayPerDay_class", $class); // add class for field header as field value
	$xt->assign("WillingToPayPerHalfDay_mastervalue", $viewControls->showDBValue("WillingToPayPerHalfDay", $data, $keylink));
	$format = $settings->getViewFormat("WillingToPayPerHalfDay");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("WillingToPayPerHalfDay")))
		$class = ' rnr-field-number';
		
	$xt->assign("WillingToPayPerHalfDay_class", $class); // add class for field header as field value
	$xt->assign("WillingToPayPerTon_mastervalue", $viewControls->showDBValue("WillingToPayPerTon", $data, $keylink));
	$format = $settings->getViewFormat("WillingToPayPerTon");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("WillingToPayPerTon")))
		$class = ' rnr-field-number';
		
	$xt->assign("WillingToPayPerTon_class", $class); // add class for field header as field value
	$xt->assign("WillingToPayCoverCharge_mastervalue", $viewControls->showDBValue("WillingToPayCoverCharge", $data, $keylink));
	$format = $settings->getViewFormat("WillingToPayCoverCharge");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("WillingToPayCoverCharge")))
		$class = ' rnr-field-number';
		
	$xt->assign("WillingToPayCoverCharge_class", $class); // add class for field header as field value
	$xt->assign("WillingToPayPerCubicMeterPerKm_mastervalue", $viewControls->showDBValue("WillingToPayPerCubicMeterPerKm", $data, $keylink));
	$format = $settings->getViewFormat("WillingToPayPerCubicMeterPerKm");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("WillingToPayPerCubicMeterPerKm")))
		$class = ' rnr-field-number';
		
	$xt->assign("WillingToPayPerCubicMeterPerKm_class", $class); // add class for field header as field value
	$xt->assign("Tons_mastervalue", $viewControls->showDBValue("Tons", $data, $keylink));
	$format = $settings->getViewFormat("Tons");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Tons")))
		$class = ' rnr-field-number';
		
	$xt->assign("Tons_class", $class); // add class for field header as field value
	$xt->assign("CubicMeters_mastervalue", $viewControls->showDBValue("CubicMeters", $data, $keylink));
	$format = $settings->getViewFormat("CubicMeters");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CubicMeters")))
		$class = ' rnr-field-number';
		
	$xt->assign("CubicMeters_class", $class); // add class for field header as field value
	$xt->assign("DisplayRoute_mastervalue", $viewControls->showDBValue("DisplayRoute", $data, $keylink));
	$format = $settings->getViewFormat("DisplayRoute");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("DisplayRoute")))
		$class = ' rnr-field-number';
		
	$xt->assign("DisplayRoute_class", $class); // add class for field header as field value

	$layout = GetPageLayout("findaride", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("findaride", "masterprint"));
}

?>