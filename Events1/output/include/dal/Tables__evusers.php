<?php
$dalTableevusers = array();
$dalTableevusers["Email"] = array("type"=>200,"varname"=>"Email");
$dalTableevusers["Group"] = array("type"=>200,"varname"=>"Group");
$dalTableevusers["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableevusers["Password"] = array("type"=>200,"varname"=>"Password");
$dalTableevusers["Username"] = array("type"=>200,"varname"=>"Username");
	$dalTableevusers["ID"]["key"]=true;

$dal_info["Tables__evusers"] = &$dalTableevusers;
?>