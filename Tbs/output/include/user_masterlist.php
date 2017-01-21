<?php
include_once(getabspath("include/user_settings.php"));

function DisplayMasterTableInfo_user($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "user";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","RoundedWhite_label","MobileWhite_label");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["user_masterlist"] = $layout;


if($detailtable == "customerwaste")
{
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
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
	$keylink = "";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Id"]));
	

//	Id - 
			$value="";

					$xt->assign("Id_mastervalue", $viewControls->showDBValue("Id", $data, $keylink));

//	Type - 
			$value="";

					$xt->assign("Type_mastervalue", $viewControls->showDBValue("Type", $data, $keylink));

//	Username - 
			$value="";

					$xt->assign("Username_mastervalue", $viewControls->showDBValue("Username", $data, $keylink));

//	Password - 
			$value="";

					$xt->assign("Password_mastervalue", $viewControls->showDBValue("Password", $data, $keylink));

//	CustomerId - 
			$value="";

					$xt->assign("CustomerId_mastervalue", $viewControls->showDBValue("CustomerId", $data, $keylink));

//	Name - 
			$value="";

					$xt->assign("Name_mastervalue", $viewControls->showDBValue("Name", $data, $keylink));

//	Active - 
			$value="";

					$xt->assign("Active_mastervalue", $viewControls->showDBValue("Active", $data, $keylink));

//	Email - 
			$value="";

					$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("user", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("user_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>