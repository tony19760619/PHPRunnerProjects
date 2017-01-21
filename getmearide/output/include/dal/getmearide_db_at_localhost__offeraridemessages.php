<?php
$dalTableofferaridemessages = array();
$dalTableofferaridemessages["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableofferaridemessages["OfferARideID"] = array("type"=>3,"varname"=>"OfferARideID");
$dalTableofferaridemessages["Date"] = array("type"=>135,"varname"=>"Date");
$dalTableofferaridemessages["FromUsername"] = array("type"=>200,"varname"=>"FromUsername");
$dalTableofferaridemessages["ToUsername"] = array("type"=>200,"varname"=>"ToUsername");
$dalTableofferaridemessages["Message"] = array("type"=>201,"varname"=>"Message");
$dalTableofferaridemessages["SentOrReceived"] = array("type"=>200,"varname"=>"SentOrReceived");
	$dalTableofferaridemessages["ID"]["key"]=true;

$dal_info["getmearide_db_at_localhost__offeraridemessages"] = &$dalTableofferaridemessages;
?>