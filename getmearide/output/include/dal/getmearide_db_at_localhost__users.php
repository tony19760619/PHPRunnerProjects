<?php
$dalTableusers = array();
$dalTableusers["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableusers["Username"] = array("type"=>200,"varname"=>"Username");
$dalTableusers["Password"] = array("type"=>200,"varname"=>"Password");
$dalTableusers["Active"] = array("type"=>3,"varname"=>"Active");
$dalTableusers["Email"] = array("type"=>200,"varname"=>"Email");
$dalTableusers["Mobile"] = array("type"=>200,"varname"=>"Mobile");
$dalTableusers["UserType"] = array("type"=>200,"varname"=>"UserType");
$dalTableusers["Address"] = array("type"=>200,"varname"=>"Address");
$dalTableusers["CurrentLocation"] = array("type"=>200,"varname"=>"CurrentLocation");
$dalTableusers["Fullname"] = array("type"=>200,"varname"=>"Fullname");
$dalTableusers["DateOfBirth"] = array("type"=>7,"varname"=>"DateOfBirth");
	$dalTableusers["ID"]["key"]=true;

$dal_info["getmearide_db_at_localhost__users"] = &$dalTableusers;
?>