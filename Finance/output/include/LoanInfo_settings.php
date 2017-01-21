<?php
require_once(getabspath("classes/cipherer.php"));



$tdataLoanInfo = array();	
$tdataLoanInfo[".ShortName"] = "LoanInfo";

//	field labels
$fieldLabelsLoanInfo = array();
$pageTitlesLoanInfo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLoanInfo["English"] = array();
	$fieldLabelsLoanInfo["English"]["schedule_AccountNumber"] = "Account Number";
	$fieldLabelsLoanInfo["English"]["schedule_PaymentNo"] = "Payment No";
	$fieldLabelsLoanInfo["English"]["schedule_PaymentDate"] = "Payment Date";
	$fieldLabelsLoanInfo["English"]["schedule_PaymentAmount"] = "Payment Amount";
	$fieldLabelsLoanInfo["English"]["schedule_LoanInterest"] = "Loan Interest";
	$fieldLabelsLoanInfo["English"]["schedule_Depreciation"] = "Depreciation";
	$fieldLabelsLoanInfo["English"]["schedule_AmountPay"] = "Amount Pay";
	$fieldLabelsLoanInfo["English"]["schedule_Remark"] = "Remark";
	$fieldLabelsLoanInfo["English"]["schedule_LoanID"] = "Loan ID";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLoanInfo[""] = array();
}

//	search fields
$tdataLoanInfo[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"AccountNumber" );
$tdataLoanInfo[".searchFields"]["schedule_AccountNumber"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"PaymentNo" );
$tdataLoanInfo[".searchFields"]["schedule_PaymentNo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"PaymentDate" );
$tdataLoanInfo[".searchFields"]["schedule_PaymentDate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"PaymentAmount" );
$tdataLoanInfo[".searchFields"]["schedule_PaymentAmount"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"LoanInterest" );
$tdataLoanInfo[".searchFields"]["schedule_LoanInterest"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"Depreciation" );
$tdataLoanInfo[".searchFields"]["schedule_Depreciation"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"AmountPay" );
$tdataLoanInfo[".searchFields"]["schedule_AmountPay"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"Remark" );
$tdataLoanInfo[".searchFields"]["schedule_Remark"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"schedule", "field"=>"LoanID" );
$tdataLoanInfo[".searchFields"]["schedule_LoanID"] = $dashField;

// all search fields
$tdataLoanInfo[".allSearchFields"] = array();
$tdataLoanInfo[".allSearchFields"][] = "schedule_AccountNumber";
$tdataLoanInfo[".allSearchFields"][] = "schedule_PaymentNo";
$tdataLoanInfo[".allSearchFields"][] = "schedule_PaymentDate";
$tdataLoanInfo[".allSearchFields"][] = "schedule_PaymentAmount";
$tdataLoanInfo[".allSearchFields"][] = "schedule_LoanInterest";
$tdataLoanInfo[".allSearchFields"][] = "schedule_Depreciation";
$tdataLoanInfo[".allSearchFields"][] = "schedule_AmountPay";
$tdataLoanInfo[".allSearchFields"][] = "schedule_Remark";
$tdataLoanInfo[".allSearchFields"][] = "schedule_LoanID";

// good like search fields
$tdataLoanInfo[".googleLikeFields"] = array();
$tdataLoanInfo[".googleLikeFields"][] = "schedule_AccountNumber";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_PaymentNo";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_PaymentDate";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_PaymentAmount";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_LoanInterest";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_Depreciation";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_AmountPay";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_Remark";
$tdataLoanInfo[".googleLikeFields"][] = "schedule_LoanID";

$tdataLoanInfo[".dashElements"] = array();

	$dbelement = array( "elementName" => "schedule_list", "table" => "schedule", "type" => 0);
	$dbelement["cellName"] = "cell_3_0";
	
					$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;
	
	$dbelement["popupAdd"] = 1 > 0;	
	$dbelement["popupEdit"] = 1 > 0;	
	$dbelement["popupView"] = 1 > 0;	

$dbelement["masterTable"] = "loan";

	$tdataLoanInfo[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "loan_list", "table" => "loan", "type" => 0);
	$dbelement["cellName"] = "cell_2_0";
	
					$dbelement["inlineAdd"] = 1 > 0;
	$dbelement["inlineEdit"] = 1 > 0;
	$dbelement["deleteRecord"] = 1 > 0;
	
	$dbelement["popupAdd"] = 0 > 0;	
	$dbelement["popupEdit"] = 0 > 0;	
	$dbelement["popupView"] = 0 > 0;	

$dbelement["masterTable"] = "loanaccounts";

	$tdataLoanInfo[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "loanaccounts_search", "table" => "loanaccounts", "type" => 4);
	$dbelement["cellName"] = "cell_0_0";
	
			

	$tdataLoanInfo[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "loanaccounts_record", "table" => "loanaccounts", "type" => 3);
	$dbelement["cellName"] = "cell_1_0";
	
				$dbelement["tabsPageTypes"] = array();
		$dbelement["tabsPageTypes"][] = PAGE_VIEW;
		$dbelement["tabsPageTypes"][] = PAGE_EDIT;
		$dbelement["tabsPageTypes"][] = PAGE_ADD;
		$dbelement["initialTabPageType"] = PAGE_VIEW;


	$tdataLoanInfo[".dashElements"][] = $dbelement;

$tdataLoanInfo[".shortTableName"] = "LoanInfo";
$tdataLoanInfo[".entityType"] = 4;


$tableEvents["LoanInfo"] = new eventsBase;
$tdataLoanInfo[".hasEvents"] = false;


$tdataLoanInfo[".tableType"] = "dashboard";



$tdataLoanInfo[".addPageEvents"] = false;

$tables_data["LoanInfo"]=&$tdataLoanInfo;
$field_labels["LoanInfo"] = &$fieldLabelsLoanInfo;
$page_titles["LoanInfo"] = &$pageTitlesLoanInfo;

?>