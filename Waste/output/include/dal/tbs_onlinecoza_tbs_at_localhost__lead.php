<?php
$dalTablelead = array();
$dalTablelead["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablelead["CompanyName"] = array("type"=>200,"varname"=>"CompanyName");
$dalTablelead["Address"] = array("type"=>200,"varname"=>"Address");
$dalTablelead["WhoSpokenToAndWhoIsPersonInCharge"] = array("type"=>200,"varname"=>"WhoSpokenToAndWhoIsPersonInCharge");
$dalTablelead["TelNoAndEmailAddress"] = array("type"=>200,"varname"=>"TelNoAndEmailAddress");
$dalTablelead["RenewalDateOfCurrentContract"] = array("type"=>7,"varname"=>"RenewalDateOfCurrentContract");
$dalTablelead["DateSeen"] = array("type"=>7,"varname"=>"DateSeen");
$dalTablelead["Interested"] = array("type"=>16,"varname"=>"Interested");
$dalTablelead["NumberOfBins"] = array("type"=>3,"varname"=>"NumberOfBins");
$dalTablelead["WeeksInMonth"] = array("type"=>14,"varname"=>"WeeksInMonth");
$dalTablelead["PickupsPerWeek"] = array("type"=>3,"varname"=>"PickupsPerWeek");
$dalTablelead["ChargePerPickupPerBin"] = array("type"=>14,"varname"=>"ChargePerPickupPerBin");
$dalTablelead["TotalExclVAT"] = array("type"=>14,"varname"=>"TotalExclVAT");
$dalTablelead["VAT"] = array("type"=>14,"varname"=>"VAT");
$dalTablelead["TotalInclVAT"] = array("type"=>14,"varname"=>"TotalInclVAT");
$dalTablelead["Info"] = array("type"=>200,"varname"=>"Info");
$dalTablelead["NextContact"] = array("type"=>7,"varname"=>"NextContact");
$dalTablelead["NotInterested"] = array("type"=>16,"varname"=>"NotInterested");
	$dalTablelead["ID"]["key"]=true;

$dal_info["tbs_onlinecoza_tbs_at_localhost__lead"] = &$dalTablelead;
?>