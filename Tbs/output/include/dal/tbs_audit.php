<?php
$dalTabletbs_audit = array();
$dalTabletbs_audit["id"] = array("type"=>3,"varname"=>"id");
$dalTabletbs_audit["datetime"] = array("type"=>135,"varname"=>"datetime");
$dalTabletbs_audit["ip"] = array("type"=>200,"varname"=>"ip");
$dalTabletbs_audit["user"] = array("type"=>200,"varname"=>"user");
$dalTabletbs_audit["table"] = array("type"=>200,"varname"=>"table");
$dalTabletbs_audit["action"] = array("type"=>200,"varname"=>"action");
$dalTabletbs_audit["description"] = array("type"=>201,"varname"=>"description");
	$dalTabletbs_audit["id"]["key"]=true;
$dal_info["tbs_audit"]=&$dalTabletbs_audit;

?>