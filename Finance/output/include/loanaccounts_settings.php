<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloanaccounts = array();
	$tdataloanaccounts[".truncateText"] = true;
	$tdataloanaccounts[".NumberOfChars"] = 80;
	$tdataloanaccounts[".ShortName"] = "loanaccounts";
	$tdataloanaccounts[".OwnerID"] = "";
	$tdataloanaccounts[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsloanaccounts = array();
$fieldToolTipsloanaccounts = array();
$pageTitlesloanaccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloanaccounts["English"] = array();
	$fieldToolTipsloanaccounts["English"] = array();
	$pageTitlesloanaccounts["English"] = array();
	$fieldLabelsloanaccounts["English"]["id"] = "Id";
	$fieldToolTipsloanaccounts["English"]["id"] = "";
	$fieldLabelsloanaccounts["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsloanaccounts["English"]["AccountNumber"] = "";
	$fieldLabelsloanaccounts["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsloanaccounts["English"]["AccountBalance"] = "";
	$fieldLabelsloanaccounts["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsloanaccounts["English"]["AccountHolder"] = "";
	$fieldLabelsloanaccounts["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsloanaccounts["English"]["LastTransactionDate"] = "";
	$fieldLabelsloanaccounts["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsloanaccounts["English"]["OpeningBalance"] = "";
	$fieldLabelsloanaccounts["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsloanaccounts["English"]["InterestRate"] = "";
	$fieldLabelsloanaccounts["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsloanaccounts["English"]["SetWithdrawDate"] = "";
	$fieldLabelsloanaccounts["English"]["AccountType"] = "Account Type";
	$fieldToolTipsloanaccounts["English"]["AccountType"] = "";
	$fieldLabelsloanaccounts["English"]["ClientNo"] = "Client No";
	$fieldToolTipsloanaccounts["English"]["ClientNo"] = "";
	$fieldLabelsloanaccounts["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsloanaccounts["English"]["LastModifiedBy"] = "";
	$fieldLabelsloanaccounts["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsloanaccounts["English"]["LastModifiedDate"] = "";
	$fieldLabelsloanaccounts["English"]["AccountName"] = "Account Name";
	$fieldToolTipsloanaccounts["English"]["AccountName"] = "";
	$fieldLabelsloanaccounts["English"]["LoanCreditPaymentPurpose"] = "Loan Credit Payment Purpose";
	$fieldToolTipsloanaccounts["English"]["LoanCreditPaymentPurpose"] = "";
	$fieldLabelsloanaccounts["English"]["LoanCreditWitness"] = "Loan Credit Witness";
	$fieldToolTipsloanaccounts["English"]["LoanCreditWitness"] = "";
	if (count($fieldToolTipsloanaccounts["English"]))
		$tdataloanaccounts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloanaccounts[""] = array();
	$fieldToolTipsloanaccounts[""] = array();
	$pageTitlesloanaccounts[""] = array();
	if (count($fieldToolTipsloanaccounts[""]))
		$tdataloanaccounts[".isUseToolTips"] = true;
}


	$tdataloanaccounts[".NCSearch"] = true;



$tdataloanaccounts[".shortTableName"] = "loanaccounts";
$tdataloanaccounts[".nSecOptions"] = 0;
$tdataloanaccounts[".recsPerRowPrint"] = 1;
$tdataloanaccounts[".mainTableOwnerID"] = "";
$tdataloanaccounts[".moveNext"] = 1;
$tdataloanaccounts[".entityType"] = 1;

$tdataloanaccounts[".strOriginalTableName"] = "accounts";

	



$tdataloanaccounts[".showAddInPopup"] = false;

$tdataloanaccounts[".showEditInPopup"] = false;

$tdataloanaccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloanaccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloanaccounts[".fieldsForRegister"] = array();

$tdataloanaccounts[".listAjax"] = false;

	$tdataloanaccounts[".audit"] = false;

	$tdataloanaccounts[".locking"] = false;

$tdataloanaccounts[".edit"] = true;
$tdataloanaccounts[".afterEditAction"] = 1;
$tdataloanaccounts[".closePopupAfterEdit"] = 1;
$tdataloanaccounts[".afterEditActionDetTable"] = "";

$tdataloanaccounts[".add"] = true;
$tdataloanaccounts[".afterAddAction"] = 0;
$tdataloanaccounts[".closePopupAfterAdd"] = 1;
$tdataloanaccounts[".afterAddActionDetTable"] = "";

$tdataloanaccounts[".list"] = true;




$tdataloanaccounts[".view"] = true;

$tdataloanaccounts[".import"] = true;

$tdataloanaccounts[".exportTo"] = true;

$tdataloanaccounts[".printFriendly"] = true;

$tdataloanaccounts[".delete"] = true;

$tdataloanaccounts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloanaccounts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloanaccounts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloanaccounts[".searchSaving"] = true;
//

$tdataloanaccounts[".showSearchPanel"] = true;
		$tdataloanaccounts[".flexibleSearch"] = true;

$tdataloanaccounts[".isUseAjaxSuggest"] = true;

$tdataloanaccounts[".rowHighlite"] = true;



$tdataloanaccounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloanaccounts[".isUseTimeForSearch"] = false;





$tdataloanaccounts[".allSearchFields"] = array();
$tdataloanaccounts[".filterFields"] = array();
$tdataloanaccounts[".requiredSearchFields"] = array();

$tdataloanaccounts[".allSearchFields"][] = "AccountName";
	$tdataloanaccounts[".allSearchFields"][] = "ClientNo";
	$tdataloanaccounts[".allSearchFields"][] = "AccountNumber";
	$tdataloanaccounts[".allSearchFields"][] = "OpeningBalance";
	$tdataloanaccounts[".allSearchFields"][] = "LoanCreditWitness";
	$tdataloanaccounts[".allSearchFields"][] = "AccountBalance";
	$tdataloanaccounts[".allSearchFields"][] = "InterestRate";
	$tdataloanaccounts[".allSearchFields"][] = "LastTransactionDate";
	$tdataloanaccounts[".allSearchFields"][] = "LoanCreditPaymentPurpose";
	$tdataloanaccounts[".allSearchFields"][] = "SetWithdrawDate";
	$tdataloanaccounts[".allSearchFields"][] = "LastModifiedBy";
	$tdataloanaccounts[".allSearchFields"][] = "LastModifiedDate";
	

$tdataloanaccounts[".googleLikeFields"] = array();
$tdataloanaccounts[".googleLikeFields"][] = "AccountNumber";
$tdataloanaccounts[".googleLikeFields"][] = "LastTransactionDate";
$tdataloanaccounts[".googleLikeFields"][] = "OpeningBalance";
$tdataloanaccounts[".googleLikeFields"][] = "InterestRate";
$tdataloanaccounts[".googleLikeFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".googleLikeFields"][] = "ClientNo";
$tdataloanaccounts[".googleLikeFields"][] = "LastModifiedBy";
$tdataloanaccounts[".googleLikeFields"][] = "LastModifiedDate";
$tdataloanaccounts[".googleLikeFields"][] = "AccountName";
$tdataloanaccounts[".googleLikeFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".googleLikeFields"][] = "LoanCreditPaymentPurpose";


$tdataloanaccounts[".advSearchFields"] = array();
$tdataloanaccounts[".advSearchFields"][] = "AccountName";
$tdataloanaccounts[".advSearchFields"][] = "ClientNo";
$tdataloanaccounts[".advSearchFields"][] = "AccountNumber";
$tdataloanaccounts[".advSearchFields"][] = "OpeningBalance";
$tdataloanaccounts[".advSearchFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".advSearchFields"][] = "AccountBalance";
$tdataloanaccounts[".advSearchFields"][] = "InterestRate";
$tdataloanaccounts[".advSearchFields"][] = "LastTransactionDate";
$tdataloanaccounts[".advSearchFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".advSearchFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".advSearchFields"][] = "LastModifiedBy";
$tdataloanaccounts[".advSearchFields"][] = "LastModifiedDate";

$tdataloanaccounts[".tableType"] = "list";

$tdataloanaccounts[".printerPageOrientation"] = 0;
$tdataloanaccounts[".nPrinterPageScale"] = 100;

$tdataloanaccounts[".nPrinterSplitRecords"] = 40;

$tdataloanaccounts[".nPrinterPDFSplitRecords"] = 40;



$tdataloanaccounts[".geocodingEnabled"] = false;





$tdataloanaccounts[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataloanaccounts[".pageSize"] = 20;

$tdataloanaccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloanaccounts[".strOrderBy"] = $tstrOrderBy;

$tdataloanaccounts[".orderindexes"] = array();
$tdataloanaccounts[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataloanaccounts[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName,  LoanCreditWitness,  LoanCreditPaymentPurpose";
$tdataloanaccounts[".sqlFrom"] = "FROM accounts";
$tdataloanaccounts[".sqlWhereExpr"] = "(AccountType = 'Loan')";
$tdataloanaccounts[".sqlTail"] = "";




//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
	$tabFields[] = "AccountName";
	$tabFields[] = "ClientNo";
	$tabFields[] = "AccountNumber";
	$tabFields[] = "OpeningBalance";
	$tabFields[] = "InterestRate";
$arrViewTabs[] = array('tabId'=>'Account_Info_11',
					   'tabName'=>"Account Info 1",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	$tabFields[] = "LastTransactionDate";
	$tabFields[] = "LoanCreditPaymentPurpose";
	$tabFields[] = "SetWithdrawDate";
	$tabFields[] = "LastModifiedBy";
	$tabFields[] = "LastModifiedDate";
$arrViewTabs[] = array('tabId'=>'Account_Info_21',
					   'tabName'=>"Account Info 2",
					   'nType'=>'1',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataloanaccounts[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloanaccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloanaccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataloanaccounts[".highlightSearchResults"] = true;

$tableKeysloanaccounts = array();
$tableKeysloanaccounts[] = "id";
$tdataloanaccounts[".Keys"] = $tableKeysloanaccounts;

$tdataloanaccounts[".listFields"] = array();
$tdataloanaccounts[".listFields"][] = "AccountName";
$tdataloanaccounts[".listFields"][] = "ClientNo";
$tdataloanaccounts[".listFields"][] = "AccountNumber";
$tdataloanaccounts[".listFields"][] = "OpeningBalance";
$tdataloanaccounts[".listFields"][] = "AccountBalance";
$tdataloanaccounts[".listFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".listFields"][] = "InterestRate";
$tdataloanaccounts[".listFields"][] = "LastTransactionDate";
$tdataloanaccounts[".listFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".listFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".listFields"][] = "LastModifiedBy";
$tdataloanaccounts[".listFields"][] = "LastModifiedDate";

$tdataloanaccounts[".hideMobileList"] = array();


$tdataloanaccounts[".viewFields"] = array();
$tdataloanaccounts[".viewFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".viewFields"][] = "AccountName";
$tdataloanaccounts[".viewFields"][] = "ClientNo";
$tdataloanaccounts[".viewFields"][] = "AccountNumber";
$tdataloanaccounts[".viewFields"][] = "AccountBalance";
$tdataloanaccounts[".viewFields"][] = "OpeningBalance";
$tdataloanaccounts[".viewFields"][] = "InterestRate";
$tdataloanaccounts[".viewFields"][] = "LastTransactionDate";
$tdataloanaccounts[".viewFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".viewFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".viewFields"][] = "LastModifiedBy";
$tdataloanaccounts[".viewFields"][] = "LastModifiedDate";

$tdataloanaccounts[".addFields"] = array();
$tdataloanaccounts[".addFields"][] = "AccountName";
$tdataloanaccounts[".addFields"][] = "ClientNo";
$tdataloanaccounts[".addFields"][] = "AccountNumber";
$tdataloanaccounts[".addFields"][] = "OpeningBalance";
$tdataloanaccounts[".addFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".addFields"][] = "AccountBalance";
$tdataloanaccounts[".addFields"][] = "InterestRate";
$tdataloanaccounts[".addFields"][] = "LastTransactionDate";
$tdataloanaccounts[".addFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".addFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".addFields"][] = "LastModifiedBy";
$tdataloanaccounts[".addFields"][] = "LastModifiedDate";

$tdataloanaccounts[".masterListFields"] = array();
$tdataloanaccounts[".masterListFields"][] = "AccountHolder";
$tdataloanaccounts[".masterListFields"][] = "AccountName";
$tdataloanaccounts[".masterListFields"][] = "id";
$tdataloanaccounts[".masterListFields"][] = "ClientNo";
$tdataloanaccounts[".masterListFields"][] = "AccountNumber";
$tdataloanaccounts[".masterListFields"][] = "OpeningBalance";
$tdataloanaccounts[".masterListFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".masterListFields"][] = "InterestRate";
$tdataloanaccounts[".masterListFields"][] = "LastTransactionDate";
$tdataloanaccounts[".masterListFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".masterListFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".masterListFields"][] = "LastModifiedBy";
$tdataloanaccounts[".masterListFields"][] = "LastModifiedDate";

$tdataloanaccounts[".inlineAddFields"] = array();

$tdataloanaccounts[".editFields"] = array();
$tdataloanaccounts[".editFields"][] = "AccountName";
$tdataloanaccounts[".editFields"][] = "ClientNo";
$tdataloanaccounts[".editFields"][] = "AccountNumber";
$tdataloanaccounts[".editFields"][] = "OpeningBalance";
$tdataloanaccounts[".editFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".editFields"][] = "AccountBalance";
$tdataloanaccounts[".editFields"][] = "InterestRate";
$tdataloanaccounts[".editFields"][] = "LastTransactionDate";
$tdataloanaccounts[".editFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".editFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".editFields"][] = "LastModifiedBy";
$tdataloanaccounts[".editFields"][] = "LastModifiedDate";

$tdataloanaccounts[".inlineEditFields"] = array();

$tdataloanaccounts[".updateSelectedFields"] = array();


$tdataloanaccounts[".exportFields"] = array();
$tdataloanaccounts[".exportFields"][] = "AccountName";
$tdataloanaccounts[".exportFields"][] = "ClientNo";
$tdataloanaccounts[".exportFields"][] = "AccountNumber";
$tdataloanaccounts[".exportFields"][] = "OpeningBalance";
$tdataloanaccounts[".exportFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".exportFields"][] = "AccountBalance";
$tdataloanaccounts[".exportFields"][] = "InterestRate";
$tdataloanaccounts[".exportFields"][] = "LastTransactionDate";
$tdataloanaccounts[".exportFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".exportFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".exportFields"][] = "LastModifiedBy";
$tdataloanaccounts[".exportFields"][] = "LastModifiedDate";

$tdataloanaccounts[".importFields"] = array();
$tdataloanaccounts[".importFields"][] = "AccountNumber";
$tdataloanaccounts[".importFields"][] = "AccountBalance";
$tdataloanaccounts[".importFields"][] = "LastTransactionDate";
$tdataloanaccounts[".importFields"][] = "OpeningBalance";
$tdataloanaccounts[".importFields"][] = "InterestRate";
$tdataloanaccounts[".importFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".importFields"][] = "ClientNo";
$tdataloanaccounts[".importFields"][] = "LastModifiedBy";
$tdataloanaccounts[".importFields"][] = "LastModifiedDate";
$tdataloanaccounts[".importFields"][] = "AccountName";
$tdataloanaccounts[".importFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".importFields"][] = "LoanCreditPaymentPurpose";

$tdataloanaccounts[".printFields"] = array();
$tdataloanaccounts[".printFields"][] = "AccountName";
$tdataloanaccounts[".printFields"][] = "ClientNo";
$tdataloanaccounts[".printFields"][] = "AccountNumber";
$tdataloanaccounts[".printFields"][] = "OpeningBalance";
$tdataloanaccounts[".printFields"][] = "LoanCreditWitness";
$tdataloanaccounts[".printFields"][] = "AccountBalance";
$tdataloanaccounts[".printFields"][] = "InterestRate";
$tdataloanaccounts[".printFields"][] = "LastTransactionDate";
$tdataloanaccounts[".printFields"][] = "LoanCreditPaymentPurpose";
$tdataloanaccounts[".printFields"][] = "SetWithdrawDate";
$tdataloanaccounts[".printFields"][] = "LastModifiedBy";
$tdataloanaccounts[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataloanaccounts["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountNumber";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "AccountNumber";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountNumber";

	
	$edata["LookupOrderBy"] = "AccountNumber";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "AccountName", "lookup" => "AccountName" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","AccountBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountBalance";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","AccountHolder");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "AccountHolder";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountHolder";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(FirstName,' ',LastName,' [',PassportOrID,']')";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataloanaccounts["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","LastTransactionDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastTransactionDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastTransactionDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataloanaccounts["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","OpeningBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OpeningBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpeningBalance";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","InterestRate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InterestRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestRate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","SetWithdrawDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SetWithdrawDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SetWithdrawDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataloanaccounts["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "AccountType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountType";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;








	$tdataloanaccounts["AccountType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClientNo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "AccountName", "lookup" => "AccountName" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastModifiedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedBy";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastModifiedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataloanaccounts["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ClientNo";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ClientNo";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["AccountName"] = $fdata;
//	LoanCreditWitness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LoanCreditWitness";
	$fdata["GoodName"] = "LoanCreditWitness";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","LoanCreditWitness");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditWitness";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditWitness";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["LoanCreditWitness"] = $fdata;
//	LoanCreditPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LoanCreditPaymentPurpose";
	$fdata["GoodName"] = "LoanCreditPaymentPurpose";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("loanaccounts","LoanCreditPaymentPurpose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditPaymentPurpose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditPaymentPurpose";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataloanaccounts["LoanCreditPaymentPurpose"] = $fdata;


$tables_data["loanaccounts"]=&$tdataloanaccounts;
$field_labels["loanaccounts"] = &$fieldLabelsloanaccounts;
$fieldToolTips["loanaccounts"] = &$fieldToolTipsloanaccounts;
$page_titles["loanaccounts"] = &$pageTitlesloanaccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loanaccounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loanaccounts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loanaccounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName,  LoanCreditWitness,  LoanCreditPaymentPurpose";
$proto0["m_strFrom"] = "FROM accounts";
$proto0["m_strWhere"] = "(AccountType = 'Loan')";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "AccountType = 'Loan'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'Loan'";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "loanaccounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "loanaccounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "loanaccounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "loanaccounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "loanaccounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "loanaccounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "loanaccounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "loanaccounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "loanaccounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto24["m_sql"] = "ClientNo";
$proto24["m_srcTableName"] = "loanaccounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto26["m_sql"] = "LastModifiedBy";
$proto26["m_srcTableName"] = "loanaccounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto28["m_sql"] = "LastModifiedDate";
$proto28["m_srcTableName"] = "loanaccounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto30["m_sql"] = "AccountName";
$proto30["m_srcTableName"] = "loanaccounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditWitness",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto32["m_sql"] = "LoanCreditWitness";
$proto32["m_srcTableName"] = "loanaccounts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentPurpose",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto34["m_sql"] = "LoanCreditPaymentPurpose";
$proto34["m_srcTableName"] = "loanaccounts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "accounts";
$proto37["m_srcTableName"] = "loanaccounts";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "AccountNumber";
$proto37["m_columns"][] = "AccountBalance";
$proto37["m_columns"][] = "AccountHolder";
$proto37["m_columns"][] = "LastTransactionDate";
$proto37["m_columns"][] = "OpeningBalance";
$proto37["m_columns"][] = "InterestRate";
$proto37["m_columns"][] = "SetWithdrawDate";
$proto37["m_columns"][] = "AccountType";
$proto37["m_columns"][] = "AccountHolderKey";
$proto37["m_columns"][] = "ClientNo";
$proto37["m_columns"][] = "AccountName";
$proto37["m_columns"][] = "LastModifiedBy";
$proto37["m_columns"][] = "LastModifiedDate";
$proto37["m_columns"][] = "LoanCreditPaymentPurpose";
$proto37["m_columns"][] = "LoanCreditWitness";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "accounts";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "loanaccounts";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "accounts",
	"m_srcTableName" => "loanaccounts"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="loanaccounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loanaccounts = createSqlQuery_loanaccounts();


	
		;

															

$tdataloanaccounts[".sqlquery"] = $queryData_loanaccounts;

include_once(getabspath("include/loanaccounts_events.php"));
$tableEvents["loanaccounts"] = new eventclass_loanaccounts;
$tdataloanaccounts[".hasEvents"] = true;

?>