<?php
include_once(getabspath("classes/printpage.php"));

function DisplayMasterTableInfoForPrint_offeraride($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "offeraride";
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

	if( $detailtable == "offeraridemessages" )
	{
		$keysAssoc["id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id", $keys[1-1], "", true);
		
				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("offeraride","id").": ".$keyValue;
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
	$xt->assign("HomeLocation_mastervalue", $viewControls->showDBValue("HomeLocation", $data, $keylink));
	$format = $settings->getViewFormat("HomeLocation");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("HomeLocation")))
		$class = ' rnr-field-number';
		
	$xt->assign("HomeLocation_class", $class); // add class for field header as field value
	$xt->assign("TransportType_mastervalue", $viewControls->showDBValue("TransportType", $data, $keylink));
	$format = $settings->getViewFormat("TransportType");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TransportType")))
		$class = ' rnr-field-number';
		
	$xt->assign("TransportType_class", $class); // add class for field header as field value
	$xt->assign("TransportPicture_mastervalue", $viewControls->showDBValue("TransportPicture", $data, $keylink));
	$format = $settings->getViewFormat("TransportPicture");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("TransportPicture")))
		$class = ' rnr-field-number';
		
	$xt->assign("TransportPicture_class", $class); // add class for field header as field value
	$xt->assign("WhoDoesTheDriving_mastervalue", $viewControls->showDBValue("WhoDoesTheDriving", $data, $keylink));
	$format = $settings->getViewFormat("WhoDoesTheDriving");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("WhoDoesTheDriving")))
		$class = ' rnr-field-number';
		
	$xt->assign("WhoDoesTheDriving_class", $class); // add class for field header as field value
	$xt->assign("ChargingPerDay_mastervalue", $viewControls->showDBValue("ChargingPerDay", $data, $keylink));
	$format = $settings->getViewFormat("ChargingPerDay");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ChargingPerDay")))
		$class = ' rnr-field-number';
		
	$xt->assign("ChargingPerDay_class", $class); // add class for field header as field value
	$xt->assign("ChargingPerHalfDay_mastervalue", $viewControls->showDBValue("ChargingPerHalfDay", $data, $keylink));
	$format = $settings->getViewFormat("ChargingPerHalfDay");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ChargingPerHalfDay")))
		$class = ' rnr-field-number';
		
	$xt->assign("ChargingPerHalfDay_class", $class); // add class for field header as field value
	$xt->assign("ChargingCoverCharge_mastervalue", $viewControls->showDBValue("ChargingCoverCharge", $data, $keylink));
	$format = $settings->getViewFormat("ChargingCoverCharge");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ChargingCoverCharge")))
		$class = ' rnr-field-number';
		
	$xt->assign("ChargingCoverCharge_class", $class); // add class for field header as field value
	$xt->assign("ChargingPerCubicMeterPerKm_mastervalue", $viewControls->showDBValue("ChargingPerCubicMeterPerKm", $data, $keylink));
	$format = $settings->getViewFormat("ChargingPerCubicMeterPerKm");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("ChargingPerCubicMeterPerKm")))
		$class = ' rnr-field-number';
		
	$xt->assign("ChargingPerCubicMeterPerKm_class", $class); // add class for field header as field value
	$xt->assign("CurrentLocation_mastervalue", $viewControls->showDBValue("CurrentLocation", $data, $keylink));
	$format = $settings->getViewFormat("CurrentLocation");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("CurrentLocation")))
		$class = ' rnr-field-number';
		
	$xt->assign("CurrentLocation_class", $class); // add class for field header as field value

	$layout = GetPageLayout("offeraride", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("offeraride", "masterprint"));
}

?>