<?php
$dalTableuser = array();
$dalTableuser["Id"] = array("type"=>3,"varname"=>"Id");
$dalTableuser["UserType"] = array("type"=>3,"varname"=>"UserType");
$dalTableuser["Username"] = array("type"=>200,"varname"=>"Username");
$dalTableuser["Password"] = array("type"=>200,"varname"=>"Password");
$dalTableuser["CustomerId"] = array("type"=>3,"varname"=>"CustomerId");
$dalTableuser["Name"] = array("type"=>200,"varname"=>"Name");
$dalTableuser["Active"] = array("type"=>3,"varname"=>"Active");
$dalTableuser["Email"] = array("type"=>200,"varname"=>"Email");
	$dalTableuser["Id"]["key"]=true;
$dal_info["user"]=&$dalTableuser;

?>