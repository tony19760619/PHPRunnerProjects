<?php
$dalTablefindaridemessages = array();
$dalTablefindaridemessages["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablefindaridemessages["FindARideID"] = array("type"=>3,"varname"=>"FindARideID");
$dalTablefindaridemessages["Date"] = array("type"=>135,"varname"=>"Date");
$dalTablefindaridemessages["FromUsername"] = array("type"=>200,"varname"=>"FromUsername");
$dalTablefindaridemessages["ToUsername"] = array("type"=>200,"varname"=>"ToUsername");
$dalTablefindaridemessages["Message"] = array("type"=>201,"varname"=>"Message");
$dalTablefindaridemessages["SentOrReceived"] = array("type"=>200,"varname"=>"SentOrReceived");
	$dalTablefindaridemessages["ID"]["key"]=true;

$dal_info["getmearide_db_at_localhost__findaridemessages"] = &$dalTablefindaridemessages;
?>