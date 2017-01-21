<?php
include_once(getabspath("include/waste_settings.php"));

function DisplayMasterTableInfoForPrint_waste($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="waste";

//$strSQL = "SELECT Id,   WasteDescr  FROM waste ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;



$layout = new TLayout("masterprint", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["masterlistheader"] = array();
$layout->containers["masterlistheader"][] = array("name"=>"masterprintheader", 
	"block"=>"", "substyle"=>1  );

$layout->skins["masterlistheader"] = "empty";

$layout->blocks["bare"][] = "masterlistheader";
$layout->containers["mastergrid"] = array();
$layout->containers["mastergrid"][] = array("name"=>"masterprintfields", 
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "grid";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["waste_masterprint"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



$keysAssoc = array();
$showKeys = "";

if($detailtable=="customerwaste")
{
	$keysAssoc["Id"] = $keys[1-1];
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("waste","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
	
}

if($detailtable=="customerwastebymonth")
{
	$keysAssoc["Id"] = $keys[1-1];
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("waste","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
	
}

if($detailtable=="customerwastebyweek")
{
	$keysAssoc["Id"] = $keys[1-1];
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("waste","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
	
}

if($detailtable=="customerwastebyday")
{
	$keysAssoc["Id"] = $keys[1-1];
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("waste","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
	
}

if($detailtable=="customerwastebyyear")
{
	$keysAssoc["Id"] = $keys[1-1];
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("waste","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink="";
	$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Id"]));
	
	$xt->assign("Id_mastervalue", $viewControls->showDBValue("Id", $data, $keylink));
		$format = $settings->getViewFormat("Id");
		$class = " rnr-field-text";
		if($format==FORMAT_FILE) 
			$class = ' rnr-field-file'; 
		if($format==FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if($format==FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if($format==FORMAT_NUMBER || IsNumberType($settings->getFieldType("Id")))
			$class = ' rnr-field-number';
		$xt->assign("Id_class", $class); // add class for field header as field value
	$xt->assign("WasteDescr_mastervalue", $viewControls->showDBValue("WasteDescr", $data, $keylink));
		$format = $settings->getViewFormat("WasteDescr");
		$class = " rnr-field-text";
		if($format==FORMAT_FILE) 
			$class = ' rnr-field-file'; 
		if($format==FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if($format==FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if($format==FORMAT_NUMBER || IsNumberType($settings->getFieldType("WasteDescr")))
			$class = ' rnr-field-number';
		$xt->assign("WasteDescr_class", $class); // add class for field header as field value
	$xt->displayPartial(GetTemplateName("waste", "masterprint"));
	$strTableName=$oldTableName;

}

?>