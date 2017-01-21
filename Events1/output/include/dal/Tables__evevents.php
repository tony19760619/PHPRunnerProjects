<?php
$dalTableevevents = array();
$dalTableevevents["Category"] = array("type"=>200,"varname"=>"Category");
$dalTableevevents["Description"] = array("type"=>201,"varname"=>"Description");
$dalTableevevents["EventID"] = array("type"=>3,"varname"=>"EventID");
$dalTableevevents["FromDate"] = array("type"=>7,"varname"=>"FromDate");
$dalTableevevents["FromTime"] = array("type"=>200,"varname"=>"FromTime");
$dalTableevevents["Image"] = array("type"=>200,"varname"=>"Image");
$dalTableevevents["Location"] = array("type"=>200,"varname"=>"Location");
$dalTableevevents["Map"] = array("type"=>201,"varname"=>"Map");
$dalTableevevents["Note"] = array("type"=>201,"varname"=>"Note");
$dalTableevevents["Price"] = array("type"=>14,"varname"=>"Price");
$dalTableevevents["Subject"] = array("type"=>200,"varname"=>"Subject");
$dalTableevevents["ToDate"] = array("type"=>7,"varname"=>"ToDate");
$dalTableevevents["ToTime"] = array("type"=>200,"varname"=>"ToTime");
	$dalTableevevents["EventID"]["key"]=true;

$dal_info["Tables__evevents"] = &$dalTableevevents;
?>