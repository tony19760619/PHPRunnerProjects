<?php
$dalTablejobsusers = array();
$dalTablejobsusers["Email"] = array("type"=>200,"varname"=>"Email");
$dalTablejobsusers["Group"] = array("type"=>200,"varname"=>"Group");
$dalTablejobsusers["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablejobsusers["Password"] = array("type"=>200,"varname"=>"Password");
$dalTablejobsusers["Username"] = array("type"=>200,"varname"=>"Username");
	$dalTablejobsusers["ID"]["key"]=true;

$dal_info["Tables__jobsusers"] = &$dalTablejobsusers;
?>