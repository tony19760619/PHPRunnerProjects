<?php
include_once(getabspath("include/customer_settings.php"));

function DisplayMasterTableInfo_customer($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "customer";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$keysAssoc = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;




$layout = new TLayout("masterlist", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["masterlistheader"] = array();
$layout->containers["masterlistheader"][] = array("name"=>"masterlistheader", 
	"block"=>"", "substyle"=>1  );

$layout->skins["masterlistheader"] = "empty";

$layout->blocks["bare"][] = "masterlistheader";
$layout->containers["mastergrid"] = array();
$layout->containers["mastergrid"][] = array("name"=>"masterlistfields", 
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "grid";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["customer_masterlist"] = $layout;

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




if($detailtable == "customerwaste")
{
	$keysAssoc["Id"] = $keys[1-1];
			$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("customer","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
}

if($detailtable == "customerwastebyday")
{
	$keysAssoc["Id"] = $keys[1-1];
			$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("customer","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
}

if($detailtable == "customerwastebymonth")
{
	$keysAssoc["Id"] = $keys[1-1];
			$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("customer","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
}

if($detailtable == "customerwastebyweek")
{
	$keysAssoc["Id"] = $keys[1-1];
			$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("customer","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
}

if($detailtable == "customerwastebyyear")
{
	$keysAssoc["Id"] = $keys[1-1];
			$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("customer","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
}

if($detailtable == "user")
{
	$keysAssoc["Id"] = $keys[1-1];
			$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);

			$keyValue = $viewControls->showDBValue("Id", $keysAssoc);
	$showKeys .= " ".GetFieldLabel("customer","Id").": ".$keyValue;
	$xt->assign('showKeys',$showKeys);
}
	if(!$where)
	{
		$strTableName = $oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.= " and ".$str;

	$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
	if(strlen($strWhere))
		$strWhere = " where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL = AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName = $oldTableName;
		return;
	}
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Id"]));
	
$value="";
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
$value="";
					$xt->assign("Name_mastervalue", $viewControls->showDBValue("Name", $data, $keylink));
		$format = $settings->getViewFormat("Name");
		$class = " rnr-field-text";
		if($format==FORMAT_FILE) 
			$class = ' rnr-field-file'; 
		if($format==FORMAT_AUDIO)
			$class = ' rnr-field-audio';
		if($format==FORMAT_CHECKBOX)
			$class = ' rnr-field-checkbox';
		if($format==FORMAT_NUMBER || IsNumberType($settings->getFieldType("Name")))
			$class = ' rnr-field-number';
		$xt->assign("Name_class", $class); // add class for field header as field value

	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("customer", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("customer", "masterlist"));
	
	$strTableName=$oldTableName;
}

?>