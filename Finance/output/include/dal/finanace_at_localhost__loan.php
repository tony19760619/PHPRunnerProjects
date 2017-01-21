<?php
$dalTableloan = array();
$dalTableloan["id"] = array("type"=>3,"varname"=>"id");
$dalTableloan["LoanID"] = array("type"=>200,"varname"=>"LoanID");
$dalTableloan["AccountName"] = array("type"=>200,"varname"=>"AccountName");
$dalTableloan["ClientNo"] = array("type"=>200,"varname"=>"ClientNo");
$dalTableloan["AccountNumber"] = array("type"=>200,"varname"=>"AccountNumber");
$dalTableloan["TelephoneNo"] = array("type"=>200,"varname"=>"TelephoneNo");
$dalTableloan["DateLoanApproved"] = array("type"=>7,"varname"=>"DateLoanApproved");
$dalTableloan["LoanAmount"] = array("type"=>14,"varname"=>"LoanAmount");
$dalTableloan["LoanInterest"] = array("type"=>14,"varname"=>"LoanInterest");
$dalTableloan["LoanPeriod"] = array("type"=>3,"varname"=>"LoanPeriod");
$dalTableloan["FirstPaymentDate"] = array("type"=>3,"varname"=>"FirstPaymentDate");
	$dalTableloan["id"]["key"]=true;

$dal_info["finanace_at_localhost__loan"] = &$dalTableloan;
?>