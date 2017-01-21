<?php
$dalTableaccounts = array();
$dalTableaccounts["id"] = array("type"=>3,"varname"=>"id");
$dalTableaccounts["AccountNumber"] = array("type"=>200,"varname"=>"AccountNumber");
$dalTableaccounts["AccountBalance"] = array("type"=>14,"varname"=>"AccountBalance");
$dalTableaccounts["AccountHolder"] = array("type"=>3,"varname"=>"AccountHolder");
$dalTableaccounts["LastTransactionDate"] = array("type"=>135,"varname"=>"LastTransactionDate");
$dalTableaccounts["OpeningBalance"] = array("type"=>14,"varname"=>"OpeningBalance");
$dalTableaccounts["InterestRate"] = array("type"=>14,"varname"=>"InterestRate");
$dalTableaccounts["SetWithdrawDate"] = array("type"=>7,"varname"=>"SetWithdrawDate");
$dalTableaccounts["AccountType"] = array("type"=>200,"varname"=>"AccountType");
$dalTableaccounts["AccountHolderKey"] = array("type"=>200,"varname"=>"AccountHolderKey");
$dalTableaccounts["ClientNo"] = array("type"=>200,"varname"=>"ClientNo");
$dalTableaccounts["AccountName"] = array("type"=>200,"varname"=>"AccountName");
$dalTableaccounts["LastModifiedBy"] = array("type"=>200,"varname"=>"LastModifiedBy");
$dalTableaccounts["LastModifiedDate"] = array("type"=>135,"varname"=>"LastModifiedDate");
$dalTableaccounts["LoanCreditPaymentPurpose"] = array("type"=>200,"varname"=>"LoanCreditPaymentPurpose");
$dalTableaccounts["LoanCreditWitness"] = array("type"=>200,"varname"=>"LoanCreditWitness");
	$dalTableaccounts["id"]["key"]=true;

$dal_info["finanace_at_localhost__accounts"] = &$dalTableaccounts;
?>