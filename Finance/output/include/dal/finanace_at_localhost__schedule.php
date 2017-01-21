<?php
$dalTableschedule = array();
$dalTableschedule["id"] = array("type"=>3,"varname"=>"id");
$dalTableschedule["AccountNumber"] = array("type"=>200,"varname"=>"AccountNumber");
$dalTableschedule["PaymentNo"] = array("type"=>200,"varname"=>"PaymentNo");
$dalTableschedule["PaymentDate"] = array("type"=>7,"varname"=>"PaymentDate");
$dalTableschedule["PaymentAmount"] = array("type"=>14,"varname"=>"PaymentAmount");
$dalTableschedule["LoanInterest"] = array("type"=>14,"varname"=>"LoanInterest");
$dalTableschedule["Depreciation"] = array("type"=>14,"varname"=>"Depreciation");
$dalTableschedule["AmountPay"] = array("type"=>14,"varname"=>"AmountPay");
$dalTableschedule["Remark"] = array("type"=>200,"varname"=>"Remark");
$dalTableschedule["LoanID"] = array("type"=>200,"varname"=>"LoanID");
	$dalTableschedule["id"]["key"]=true;

$dal_info["finanace_at_localhost__schedule"] = &$dalTableschedule;
?>