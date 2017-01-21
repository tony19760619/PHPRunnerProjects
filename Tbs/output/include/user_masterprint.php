<?php
include_once(getabspath("include/user_settings.php"));

function DisplayMasterTableInfo_user($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="user";

//$strSQL = "SELECT  Id,  `Type`,  Username,  Password,  CustomerId,  Name,  Active,  Email  FROM `user`  ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","RoundedWhite_label","MobileWhite_label");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["user_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="customerwaste")
{
		$where.= GetFullFieldName("Id", "", false)."=".$cipherer->MakeDBValue("Id",$keys[1-1], "", "", true);
	$showKeys .= " "."Id".": ".$keys[1-1];
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
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["Id"]));
	

//	Id - 
			$xt->assign("Id_mastervalue", $viewControls->showDBValue("Id", $data, $keylink));

//	Type - 
			$xt->assign("Type_mastervalue", $viewControls->showDBValue("Type", $data, $keylink));

//	Username - 
			$xt->assign("Username_mastervalue", $viewControls->showDBValue("Username", $data, $keylink));

//	Password - 
			$xt->assign("Password_mastervalue", $viewControls->showDBValue("Password", $data, $keylink));

//	CustomerId - 
			$xt->assign("CustomerId_mastervalue", $viewControls->showDBValue("CustomerId", $data, $keylink));

//	Name - 
			$xt->assign("Name_mastervalue", $viewControls->showDBValue("Name", $data, $keylink));

//	Active - 
			$xt->assign("Active_mastervalue", $viewControls->showDBValue("Active", $data, $keylink));

//	Email - 
			$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));
	$xt->display("user_masterprint.htm");
	$strTableName=$oldTableName;

}

?>