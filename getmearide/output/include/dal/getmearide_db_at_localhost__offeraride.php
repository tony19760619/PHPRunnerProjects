<?php
$dalTableofferaride = array();
$dalTableofferaride["id"] = array("type"=>3,"varname"=>"id");
$dalTableofferaride["Username"] = array("type"=>200,"varname"=>"Username");
$dalTableofferaride["HomeLocation"] = array("type"=>200,"varname"=>"HomeLocation");
$dalTableofferaride["TransportType"] = array("type"=>200,"varname"=>"TransportType");
$dalTableofferaride["TransportPicture"] = array("type"=>200,"varname"=>"TransportPicture");
$dalTableofferaride["WhoDoesTheDriving"] = array("type"=>200,"varname"=>"WhoDoesTheDriving");
$dalTableofferaride["ChargingPerDay"] = array("type"=>14,"varname"=>"ChargingPerDay");
$dalTableofferaride["ChargingPerHalfDay"] = array("type"=>14,"varname"=>"ChargingPerHalfDay");
$dalTableofferaride["ChargingCoverCharge"] = array("type"=>14,"varname"=>"ChargingCoverCharge");
$dalTableofferaride["ChargingPerCubicMeterPerKm"] = array("type"=>14,"varname"=>"ChargingPerCubicMeterPerKm");
$dalTableofferaride["CurrentLocation"] = array("type"=>200,"varname"=>"CurrentLocation");
	$dalTableofferaride["id"]["key"]=true;

$dal_info["getmearide_db_at_localhost__offeraride"] = &$dalTableofferaride;
?>