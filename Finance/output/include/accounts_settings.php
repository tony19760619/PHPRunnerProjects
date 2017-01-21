<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaccounts = array();
	$tdataaccounts[".truncateText"] = true;
	$tdataaccounts[".NumberOfChars"] = 80;
	$tdataaccounts[".ShortName"] = "accounts";
	$tdataaccounts[".OwnerID"] = "ClientNo";
	$tdataaccounts[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsaccounts = array();
$fieldToolTipsaccounts = array();
$pageTitlesaccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccounts["English"] = array();
	$fieldToolTipsaccounts["English"] = array();
	$pageTitlesaccounts["English"] = array();
	$fieldLabelsaccounts["English"]["id"] = "Id";
	$fieldToolTipsaccounts["English"]["id"] = "";
	$fieldLabelsaccounts["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsaccounts["English"]["AccountNumber"] = "";
	$fieldLabelsaccounts["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsaccounts["English"]["AccountBalance"] = "";
	$fieldLabelsaccounts["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsaccounts["English"]["AccountHolder"] = "";
	$fieldLabelsaccounts["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsaccounts["English"]["LastTransactionDate"] = "";
	$fieldLabelsaccounts["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsaccounts["English"]["OpeningBalance"] = "";
	$fieldLabelsaccounts["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsaccounts["English"]["InterestRate"] = "";
	$fieldLabelsaccounts["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsaccounts["English"]["SetWithdrawDate"] = "";
	$fieldLabelsaccounts["English"]["AccountType"] = "Account Type";
	$fieldToolTipsaccounts["English"]["AccountType"] = "";
	$fieldLabelsaccounts["English"]["AccountHolderKey"] = "Account Holder Key";
	$fieldToolTipsaccounts["English"]["AccountHolderKey"] = "";
	$fieldLabelsaccounts["English"]["ClientNo"] = "Client No";
	$fieldToolTipsaccounts["English"]["ClientNo"] = "";
	$fieldLabelsaccounts["English"]["AccountName"] = "Account Name";
	$fieldToolTipsaccounts["English"]["AccountName"] = "";
	$fieldLabelsaccounts["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsaccounts["English"]["LastModifiedBy"] = "";
	$fieldLabelsaccounts["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsaccounts["English"]["LastModifiedDate"] = "";
	$fieldLabelsaccounts["English"]["LoanCreditPaymentPurpose"] = "Loan Credit Payment Purpose";
	$fieldToolTipsaccounts["English"]["LoanCreditPaymentPurpose"] = "";
	if (count($fieldToolTipsaccounts["English"]))
		$tdataaccounts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaccounts[""] = array();
	$fieldToolTipsaccounts[""] = array();
	$pageTitlesaccounts[""] = array();
	if (count($fieldToolTipsaccounts[""]))
		$tdataaccounts[".isUseToolTips"] = true;
}


	$tdataaccounts[".NCSearch"] = true;



$tdataaccounts[".shortTableName"] = "accounts";
$tdataaccounts[".nSecOptions"] = 1;
$tdataaccounts[".mainTableOwnerID"] = "ClientNo";
$tdataaccounts[".moveNext"] = 1;
$tdataaccounts[".entityType"] = 0;

$tdataaccounts[".strOriginalTableName"] = "accounts";

	



$tdataaccounts[".showAddInPopup"] = false;

$tdataaccounts[".showEditInPopup"] = false;

$tdataaccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaccounts[".fieldsForRegister"] = array();

$tdataaccounts[".listAjax"] = false;

	$tdataaccounts[".audit"] = false;

	$tdataaccounts[".locking"] = false;

$tdataaccounts[".edit"] = true;
$tdataaccounts[".afterEditAction"] = 1;
$tdataaccounts[".closePopupAfterEdit"] = 1;
$tdataaccounts[".afterEditActionDetTable"] = "";

$tdataaccounts[".add"] = true;
$tdataaccounts[".afterAddAction"] = 0;
$tdataaccounts[".closePopupAfterAdd"] = 1;
$tdataaccounts[".afterAddActionDetTable"] = "";

$tdataaccounts[".list"] = true;




$tdataaccounts[".view"] = true;

$tdataaccounts[".import"] = true;

$tdataaccounts[".exportTo"] = true;

$tdataaccounts[".printFriendly"] = true;

$tdataaccounts[".delete"] = true;

$tdataaccounts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataaccounts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataaccounts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataaccounts[".searchSaving"] = true;
//

$tdataaccounts[".showSearchPanel"] = true;
		$tdataaccounts[".flexibleSearch"] = true;

$tdataaccounts[".isUseAjaxSuggest"] = true;

$tdataaccounts[".rowHighlite"] = true;



$tdataaccounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccounts[".isUseTimeForSearch"] = false;



$tdataaccounts[".badgeColor"] = "DB7093";


$tdataaccounts[".allSearchFields"] = array();
$tdataaccounts[".filterFields"] = array();
$tdataaccounts[".requiredSearchFields"] = array();

$tdataaccounts[".allSearchFields"][] = "id";
	$tdataaccounts[".allSearchFields"][] = "AccountName";
	$tdataaccounts[".allSearchFields"][] = "ClientNo";
	$tdataaccounts[".allSearchFields"][] = "AccountType";
	$tdataaccounts[".allSearchFields"][] = "AccountNumber";
	$tdataaccounts[".allSearchFields"][] = "AccountBalance";
	$tdataaccounts[".allSearchFields"][] = "LastTransactionDate";
	$tdataaccounts[".allSearchFields"][] = "SetWithdrawDate";
	$tdataaccounts[".allSearchFields"][] = "InterestRate";
	$tdataaccounts[".allSearchFields"][] = "LoanCreditPaymentPurpose";
	$tdataaccounts[".allSearchFields"][] = "AccountHolderKey";
	$tdataaccounts[".allSearchFields"][] = "OpeningBalance";
	$tdataaccounts[".allSearchFields"][] = "LastModifiedDate";
	$tdataaccounts[".allSearchFields"][] = "LastModifiedBy";
	

$tdataaccounts[".googleLikeFields"] = array();
$tdataaccounts[".googleLikeFields"][] = "id";
$tdataaccounts[".googleLikeFields"][] = "AccountNumber";
$tdataaccounts[".googleLikeFields"][] = "AccountBalance";
$tdataaccounts[".googleLikeFields"][] = "AccountHolder";
$tdataaccounts[".googleLikeFields"][] = "LastTransactionDate";
$tdataaccounts[".googleLikeFields"][] = "OpeningBalance";
$tdataaccounts[".googleLikeFields"][] = "InterestRate";
$tdataaccounts[".googleLikeFields"][] = "SetWithdrawDate";
$tdataaccounts[".googleLikeFields"][] = "AccountType";
$tdataaccounts[".googleLikeFields"][] = "AccountHolderKey";
$tdataaccounts[".googleLikeFields"][] = "ClientNo";
$tdataaccounts[".googleLikeFields"][] = "AccountName";
$tdataaccounts[".googleLikeFields"][] = "LastModifiedBy";
$tdataaccounts[".googleLikeFields"][] = "LastModifiedDate";
$tdataaccounts[".googleLikeFields"][] = "LoanCreditPaymentPurpose";


$tdataaccounts[".advSearchFields"] = array();
$tdataaccounts[".advSearchFields"][] = "id";
$tdataaccounts[".advSearchFields"][] = "AccountName";
$tdataaccounts[".advSearchFields"][] = "ClientNo";
$tdataaccounts[".advSearchFields"][] = "AccountType";
$tdataaccounts[".advSearchFields"][] = "AccountNumber";
$tdataaccounts[".advSearchFields"][] = "AccountBalance";
$tdataaccounts[".advSearchFields"][] = "LastTransactionDate";
$tdataaccounts[".advSearchFields"][] = "SetWithdrawDate";
$tdataaccounts[".advSearchFields"][] = "InterestRate";
$tdataaccounts[".advSearchFields"][] = "LoanCreditPaymentPurpose";
$tdataaccounts[".advSearchFields"][] = "AccountHolderKey";
$tdataaccounts[".advSearchFields"][] = "OpeningBalance";
$tdataaccounts[".advSearchFields"][] = "LastModifiedDate";
$tdataaccounts[".advSearchFields"][] = "LastModifiedBy";

$tdataaccounts[".tableType"] = "list";

$tdataaccounts[".printerPageOrientation"] = 0;
$tdataaccounts[".nPrinterPageScale"] = 100;

$tdataaccounts[".nPrinterSplitRecords"] = 40;

$tdataaccounts[".nPrinterPDFSplitRecords"] = 40;



$tdataaccounts[".geocodingEnabled"] = false;




$tdataaccounts[".printGridLayout"] = 2;

$tdataaccounts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataaccounts[".pageSize"] = 20;

$tdataaccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaccounts[".strOrderBy"] = $tstrOrderBy;

$tdataaccounts[".orderindexes"] = array();
$tdataaccounts[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataaccounts[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  AccountName,  LastModifiedBy,  LastModifiedDate,  LoanCreditPaymentPurpose";
$tdataaccounts[".sqlFrom"] = "FROM accounts";
$tdataaccounts[".sqlWhereExpr"] = "";
$tdataaccounts[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "AccountNumber";
	
		$tabFields[] = "AccountBalance";
	
		$tabFields[] = "LastTransactionDate";
	
		$tabFields[] = "OpeningBalance";
	
		$tabFields[] = "InterestRate";
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Step1",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "SetWithdrawDate";
	
		$tabFields[] = "AccountType";
	
		$tabFields[] = "AccountHolderKey";
	
		$tabFields[] = "ClientNo";
	
		$tabFields[] = "LastModifiedBy";
	
		$tabFields[] = "LastModifiedDate";
	
		$tabFields[] = "AccountName";
	
		$tabFields[] = "LoanCreditPaymentPurpose";
$arrEditTabs[] = array('tabId'=>'Step2',
					   'tabName'=>"Step2",
					   'nType'=>'2',
					   'nOrder'=>7,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataaccounts[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "AccountNumber";
	
		$tabFields[] = "AccountBalance";
	
		$tabFields[] = "LastTransactionDate";
	
		$tabFields[] = "OpeningBalance";
	
		$tabFields[] = "InterestRate";
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Step1",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "SetWithdrawDate";
	
		$tabFields[] = "AccountType";
	
		$tabFields[] = "AccountHolderKey";
	
		$tabFields[] = "LastModifiedBy";
	
		$tabFields[] = "LastModifiedDate";
	
		$tabFields[] = "AccountName";
	
		$tabFields[] = "LoanCreditPaymentPurpose";
$arrAddTabs[] = array('tabId'=>'Step2',
					  'tabName'=>"Step2",
					  'nType'=>'2',
					  'nOrder'=>7,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
$tdataaccounts[".arrAddTabs"] = $arrAddTabs;



$tdataaccounts[".addMultistep"] = true;

$tdataaccounts[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataaccounts[".highlightSearchResults"] = true;

$tableKeysaccounts = array();
$tableKeysaccounts[] = "id";
$tdataaccounts[".Keys"] = $tableKeysaccounts;

$tdataaccounts[".listFields"] = array();
$tdataaccounts[".listFields"][] = "id";
$tdataaccounts[".listFields"][] = "AccountName";
$tdataaccounts[".listFields"][] = "ClientNo";
$tdataaccounts[".listFields"][] = "AccountType";
$tdataaccounts[".listFields"][] = "AccountNumber";
$tdataaccounts[".listFields"][] = "AccountBalance";
$tdataaccounts[".listFields"][] = "LastTransactionDate";
$tdataaccounts[".listFields"][] = "SetWithdrawDate";
$tdataaccounts[".listFields"][] = "InterestRate";
$tdataaccounts[".listFields"][] = "LoanCreditPaymentPurpose";
$tdataaccounts[".listFields"][] = "AccountHolderKey";
$tdataaccounts[".listFields"][] = "OpeningBalance";
$tdataaccounts[".listFields"][] = "LastModifiedDate";
$tdataaccounts[".listFields"][] = "LastModifiedBy";

$tdataaccounts[".hideMobileList"] = array();


$tdataaccounts[".viewFields"] = array();
$tdataaccounts[".viewFields"][] = "id";
$tdataaccounts[".viewFields"][] = "AccountName";
$tdataaccounts[".viewFields"][] = "ClientNo";
$tdataaccounts[".viewFields"][] = "AccountType";
$tdataaccounts[".viewFields"][] = "AccountNumber";
$tdataaccounts[".viewFields"][] = "AccountBalance";
$tdataaccounts[".viewFields"][] = "LastTransactionDate";
$tdataaccounts[".viewFields"][] = "SetWithdrawDate";
$tdataaccounts[".viewFields"][] = "InterestRate";
$tdataaccounts[".viewFields"][] = "LoanCreditPaymentPurpose";
$tdataaccounts[".viewFields"][] = "AccountHolderKey";
$tdataaccounts[".viewFields"][] = "OpeningBalance";
$tdataaccounts[".viewFields"][] = "LastModifiedDate";
$tdataaccounts[".viewFields"][] = "LastModifiedBy";

$tdataaccounts[".addFields"] = array();
$tdataaccounts[".addFields"][] = "AccountNumber";
$tdataaccounts[".addFields"][] = "AccountBalance";
$tdataaccounts[".addFields"][] = "LastTransactionDate";
$tdataaccounts[".addFields"][] = "OpeningBalance";
$tdataaccounts[".addFields"][] = "InterestRate";
$tdataaccounts[".addFields"][] = "SetWithdrawDate";
$tdataaccounts[".addFields"][] = "AccountType";
$tdataaccounts[".addFields"][] = "AccountHolderKey";
$tdataaccounts[".addFields"][] = "LastModifiedBy";
$tdataaccounts[".addFields"][] = "LastModifiedDate";
$tdataaccounts[".addFields"][] = "AccountName";
$tdataaccounts[".addFields"][] = "LoanCreditPaymentPurpose";

$tdataaccounts[".masterListFields"] = array();
$tdataaccounts[".masterListFields"][] = "AccountHolder";
$tdataaccounts[".masterListFields"][] = "id";
$tdataaccounts[".masterListFields"][] = "AccountName";
$tdataaccounts[".masterListFields"][] = "ClientNo";
$tdataaccounts[".masterListFields"][] = "AccountType";
$tdataaccounts[".masterListFields"][] = "AccountNumber";
$tdataaccounts[".masterListFields"][] = "AccountBalance";
$tdataaccounts[".masterListFields"][] = "LastTransactionDate";
$tdataaccounts[".masterListFields"][] = "SetWithdrawDate";
$tdataaccounts[".masterListFields"][] = "InterestRate";
$tdataaccounts[".masterListFields"][] = "LoanCreditPaymentPurpose";
$tdataaccounts[".masterListFields"][] = "AccountHolderKey";
$tdataaccounts[".masterListFields"][] = "OpeningBalance";
$tdataaccounts[".masterListFields"][] = "LastModifiedDate";
$tdataaccounts[".masterListFields"][] = "LastModifiedBy";

$tdataaccounts[".inlineAddFields"] = array();

$tdataaccounts[".editFields"] = array();
$tdataaccounts[".editFields"][] = "AccountNumber";
$tdataaccounts[".editFields"][] = "AccountBalance";
$tdataaccounts[".editFields"][] = "LastTransactionDate";
$tdataaccounts[".editFields"][] = "OpeningBalance";
$tdataaccounts[".editFields"][] = "InterestRate";
$tdataaccounts[".editFields"][] = "SetWithdrawDate";
$tdataaccounts[".editFields"][] = "AccountType";
$tdataaccounts[".editFields"][] = "AccountHolderKey";
$tdataaccounts[".editFields"][] = "ClientNo";
$tdataaccounts[".editFields"][] = "LastModifiedBy";
$tdataaccounts[".editFields"][] = "LastModifiedDate";
$tdataaccounts[".editFields"][] = "AccountName";
$tdataaccounts[".editFields"][] = "LoanCreditPaymentPurpose";

$tdataaccounts[".inlineEditFields"] = array();

$tdataaccounts[".updateSelectedFields"] = array();


$tdataaccounts[".exportFields"] = array();
$tdataaccounts[".exportFields"][] = "id";
$tdataaccounts[".exportFields"][] = "AccountName";
$tdataaccounts[".exportFields"][] = "ClientNo";
$tdataaccounts[".exportFields"][] = "AccountType";
$tdataaccounts[".exportFields"][] = "AccountNumber";
$tdataaccounts[".exportFields"][] = "AccountBalance";
$tdataaccounts[".exportFields"][] = "LastTransactionDate";
$tdataaccounts[".exportFields"][] = "SetWithdrawDate";
$tdataaccounts[".exportFields"][] = "InterestRate";
$tdataaccounts[".exportFields"][] = "LoanCreditPaymentPurpose";
$tdataaccounts[".exportFields"][] = "AccountHolderKey";
$tdataaccounts[".exportFields"][] = "OpeningBalance";
$tdataaccounts[".exportFields"][] = "LastModifiedDate";
$tdataaccounts[".exportFields"][] = "LastModifiedBy";

$tdataaccounts[".importFields"] = array();
$tdataaccounts[".importFields"][] = "id";
$tdataaccounts[".importFields"][] = "AccountNumber";
$tdataaccounts[".importFields"][] = "AccountBalance";
$tdataaccounts[".importFields"][] = "LastTransactionDate";
$tdataaccounts[".importFields"][] = "OpeningBalance";
$tdataaccounts[".importFields"][] = "InterestRate";
$tdataaccounts[".importFields"][] = "SetWithdrawDate";
$tdataaccounts[".importFields"][] = "AccountType";
$tdataaccounts[".importFields"][] = "AccountHolderKey";
$tdataaccounts[".importFields"][] = "ClientNo";
$tdataaccounts[".importFields"][] = "AccountName";
$tdataaccounts[".importFields"][] = "LastModifiedBy";
$tdataaccounts[".importFields"][] = "LastModifiedDate";
$tdataaccounts[".importFields"][] = "LoanCreditPaymentPurpose";

$tdataaccounts[".printFields"] = array();
$tdataaccounts[".printFields"][] = "id";
$tdataaccounts[".printFields"][] = "AccountName";
$tdataaccounts[".printFields"][] = "ClientNo";
$tdataaccounts[".printFields"][] = "AccountType";
$tdataaccounts[".printFields"][] = "AccountNumber";
$tdataaccounts[".printFields"][] = "AccountBalance";
$tdataaccounts[".printFields"][] = "LastTransactionDate";
$tdataaccounts[".printFields"][] = "SetWithdrawDate";
$tdataaccounts[".printFields"][] = "InterestRate";
$tdataaccounts[".printFields"][] = "LoanCreditPaymentPurpose";
$tdataaccounts[".printFields"][] = "AccountHolderKey";
$tdataaccounts[".printFields"][] = "OpeningBalance";
$tdataaccounts[".printFields"][] = "LastModifiedDate";
$tdataaccounts[".printFields"][] = "LastModifiedBy";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","AccountNumber");
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","AccountBalance");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","AccountHolder");
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








	$tdataaccounts["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","LastTransactionDate");
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

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataaccounts["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","OpeningBalance");
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","InterestRate");
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




	$tdataaccounts["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","SetWithdrawDate");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataaccounts["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountType";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["AccountType"] = $fdata;
//	AccountHolderKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AccountHolderKey";
	$fdata["GoodName"] = "AccountHolderKey";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","AccountHolderKey");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountHolderKey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountHolderKey";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=75";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["AccountHolderKey"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accounts";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["ClientNo"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","AccountName");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["AccountName"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","LastModifiedBy");
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




	$tdataaccounts["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","LastModifiedDate");
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




	$tdataaccounts["LastModifiedDate"] = $fdata;
//	LoanCreditPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LoanCreditPaymentPurpose";
	$fdata["GoodName"] = "LoanCreditPaymentPurpose";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accounts","LoanCreditPaymentPurpose");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccounts["LoanCreditPaymentPurpose"] = $fdata;


$tables_data["accounts"]=&$tdataaccounts;
$field_labels["accounts"] = &$fieldLabelsaccounts;
$fieldToolTips["accounts"] = &$fieldToolTipsaccounts;
$page_titles["accounts"] = &$pageTitlesaccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["accounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["accounts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_accounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  AccountName,  LastModifiedBy,  LastModifiedDate,  LoanCreditPaymentPurpose";
$proto0["m_strFrom"] = "FROM accounts";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_srcTableName" => "accounts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "accounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "accounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "accounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "accounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "accounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "accounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "accounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "accounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "accounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolderKey",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto24["m_sql"] = "AccountHolderKey";
$proto24["m_srcTableName"] = "accounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto26["m_sql"] = "ClientNo";
$proto26["m_srcTableName"] = "accounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto28["m_sql"] = "AccountName";
$proto28["m_srcTableName"] = "accounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto30["m_sql"] = "LastModifiedBy";
$proto30["m_srcTableName"] = "accounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto32["m_sql"] = "LastModifiedDate";
$proto32["m_srcTableName"] = "accounts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentPurpose",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accounts"
));

$proto34["m_sql"] = "LoanCreditPaymentPurpose";
$proto34["m_srcTableName"] = "accounts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "accounts";
$proto37["m_srcTableName"] = "accounts";
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
$proto36["m_srcTableName"] = "accounts";
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
	"m_srcTableName" => "accounts"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="accounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accounts = createSqlQuery_accounts();


	
		;

															

$tdataaccounts[".sqlquery"] = $queryData_accounts;

$tableEvents["accounts"] = new eventsBase;
$tdataaccounts[".hasEvents"] = false;

?>