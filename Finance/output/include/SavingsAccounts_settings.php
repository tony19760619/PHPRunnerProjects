<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSavingsAccounts = array();
	$tdataSavingsAccounts[".truncateText"] = true;
	$tdataSavingsAccounts[".NumberOfChars"] = 80;
	$tdataSavingsAccounts[".ShortName"] = "SavingsAccounts";
	$tdataSavingsAccounts[".OwnerID"] = "";
	$tdataSavingsAccounts[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsSavingsAccounts = array();
$fieldToolTipsSavingsAccounts = array();
$pageTitlesSavingsAccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSavingsAccounts["English"] = array();
	$fieldToolTipsSavingsAccounts["English"] = array();
	$pageTitlesSavingsAccounts["English"] = array();
	$fieldLabelsSavingsAccounts["English"]["id"] = "Id";
	$fieldToolTipsSavingsAccounts["English"]["id"] = "";
	$fieldLabelsSavingsAccounts["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsSavingsAccounts["English"]["AccountNumber"] = "";
	$fieldLabelsSavingsAccounts["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsSavingsAccounts["English"]["AccountBalance"] = "";
	$fieldLabelsSavingsAccounts["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsSavingsAccounts["English"]["AccountHolder"] = "";
	$fieldLabelsSavingsAccounts["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsSavingsAccounts["English"]["LastTransactionDate"] = "";
	$fieldLabelsSavingsAccounts["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsSavingsAccounts["English"]["OpeningBalance"] = "";
	$fieldLabelsSavingsAccounts["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsSavingsAccounts["English"]["InterestRate"] = "";
	$fieldLabelsSavingsAccounts["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsSavingsAccounts["English"]["SetWithdrawDate"] = "";
	$fieldLabelsSavingsAccounts["English"]["AccountType"] = "Account Type";
	$fieldToolTipsSavingsAccounts["English"]["AccountType"] = "";
	$fieldLabelsSavingsAccounts["English"]["AccountHolderKey"] = "Account Holder Key";
	$fieldToolTipsSavingsAccounts["English"]["AccountHolderKey"] = "";
	$fieldLabelsSavingsAccounts["English"]["ClientNo"] = "Client No";
	$fieldToolTipsSavingsAccounts["English"]["ClientNo"] = "";
	$fieldLabelsSavingsAccounts["English"]["AccountName"] = "Account Name";
	$fieldToolTipsSavingsAccounts["English"]["AccountName"] = "";
	$fieldLabelsSavingsAccounts["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsSavingsAccounts["English"]["LastModifiedBy"] = "";
	$fieldLabelsSavingsAccounts["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsSavingsAccounts["English"]["LastModifiedDate"] = "";
	if (count($fieldToolTipsSavingsAccounts["English"]))
		$tdataSavingsAccounts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSavingsAccounts[""] = array();
	$fieldToolTipsSavingsAccounts[""] = array();
	$pageTitlesSavingsAccounts[""] = array();
	if (count($fieldToolTipsSavingsAccounts[""]))
		$tdataSavingsAccounts[".isUseToolTips"] = true;
}


	$tdataSavingsAccounts[".NCSearch"] = true;



$tdataSavingsAccounts[".shortTableName"] = "SavingsAccounts";
$tdataSavingsAccounts[".nSecOptions"] = 0;
$tdataSavingsAccounts[".recsPerRowPrint"] = 1;
$tdataSavingsAccounts[".mainTableOwnerID"] = "";
$tdataSavingsAccounts[".moveNext"] = 1;
$tdataSavingsAccounts[".entityType"] = 1;

$tdataSavingsAccounts[".strOriginalTableName"] = "accounts";

	



$tdataSavingsAccounts[".showAddInPopup"] = false;

$tdataSavingsAccounts[".showEditInPopup"] = false;

$tdataSavingsAccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSavingsAccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSavingsAccounts[".fieldsForRegister"] = array();

$tdataSavingsAccounts[".listAjax"] = false;

	$tdataSavingsAccounts[".audit"] = false;

	$tdataSavingsAccounts[".locking"] = false;

$tdataSavingsAccounts[".edit"] = true;
$tdataSavingsAccounts[".afterEditAction"] = 1;
$tdataSavingsAccounts[".closePopupAfterEdit"] = 1;
$tdataSavingsAccounts[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataSavingsAccounts[".add"] = true;
$tdataSavingsAccounts[".afterAddAction"] = 0;
$tdataSavingsAccounts[".closePopupAfterAdd"] = 1;
$tdataSavingsAccounts[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataSavingsAccounts[".list"] = true;




$tdataSavingsAccounts[".view"] = true;

$tdataSavingsAccounts[".import"] = true;

$tdataSavingsAccounts[".exportTo"] = true;

$tdataSavingsAccounts[".printFriendly"] = true;

$tdataSavingsAccounts[".delete"] = true;

$tdataSavingsAccounts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataSavingsAccounts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataSavingsAccounts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataSavingsAccounts[".searchSaving"] = true;
//

$tdataSavingsAccounts[".showSearchPanel"] = true;
		$tdataSavingsAccounts[".flexibleSearch"] = true;

$tdataSavingsAccounts[".isUseAjaxSuggest"] = true;

$tdataSavingsAccounts[".rowHighlite"] = true;



$tdataSavingsAccounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSavingsAccounts[".isUseTimeForSearch"] = false;





$tdataSavingsAccounts[".allSearchFields"] = array();
$tdataSavingsAccounts[".filterFields"] = array();
$tdataSavingsAccounts[".requiredSearchFields"] = array();

$tdataSavingsAccounts[".allSearchFields"][] = "AccountName";
	$tdataSavingsAccounts[".allSearchFields"][] = "ClientNo";
	$tdataSavingsAccounts[".allSearchFields"][] = "AccountNumber";
	$tdataSavingsAccounts[".allSearchFields"][] = "AccountType";
	$tdataSavingsAccounts[".allSearchFields"][] = "AccountBalance";
	$tdataSavingsAccounts[".allSearchFields"][] = "LastTransactionDate";
	$tdataSavingsAccounts[".allSearchFields"][] = "OpeningBalance";
	$tdataSavingsAccounts[".allSearchFields"][] = "InterestRate";
	$tdataSavingsAccounts[".allSearchFields"][] = "SetWithdrawDate";
	$tdataSavingsAccounts[".allSearchFields"][] = "LastModifiedBy";
	$tdataSavingsAccounts[".allSearchFields"][] = "LastModifiedDate";
	

$tdataSavingsAccounts[".googleLikeFields"] = array();
$tdataSavingsAccounts[".googleLikeFields"][] = "AccountNumber";
$tdataSavingsAccounts[".googleLikeFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".googleLikeFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".googleLikeFields"][] = "InterestRate";
$tdataSavingsAccounts[".googleLikeFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".googleLikeFields"][] = "AccountType";
$tdataSavingsAccounts[".googleLikeFields"][] = "ClientNo";
$tdataSavingsAccounts[".googleLikeFields"][] = "AccountName";
$tdataSavingsAccounts[".googleLikeFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".googleLikeFields"][] = "LastModifiedDate";


$tdataSavingsAccounts[".advSearchFields"] = array();
$tdataSavingsAccounts[".advSearchFields"][] = "AccountName";
$tdataSavingsAccounts[".advSearchFields"][] = "ClientNo";
$tdataSavingsAccounts[".advSearchFields"][] = "AccountNumber";
$tdataSavingsAccounts[".advSearchFields"][] = "AccountType";
$tdataSavingsAccounts[".advSearchFields"][] = "AccountBalance";
$tdataSavingsAccounts[".advSearchFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".advSearchFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".advSearchFields"][] = "InterestRate";
$tdataSavingsAccounts[".advSearchFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".advSearchFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".advSearchFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".tableType"] = "list";

$tdataSavingsAccounts[".printerPageOrientation"] = 0;
$tdataSavingsAccounts[".nPrinterPageScale"] = 100;

$tdataSavingsAccounts[".nPrinterSplitRecords"] = 40;

$tdataSavingsAccounts[".nPrinterPDFSplitRecords"] = 40;



$tdataSavingsAccounts[".geocodingEnabled"] = false;





$tdataSavingsAccounts[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataSavingsAccounts[".pageSize"] = 20;

$tdataSavingsAccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSavingsAccounts[".strOrderBy"] = $tstrOrderBy;

$tdataSavingsAccounts[".orderindexes"] = array();
$tdataSavingsAccounts[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataSavingsAccounts[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  AccountName,  LastModifiedBy,  LastModifiedDate";
$tdataSavingsAccounts[".sqlFrom"] = "FROM accounts";
$tdataSavingsAccounts[".sqlWhereExpr"] = "AccountType = 'Savings'";
$tdataSavingsAccounts[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSavingsAccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSavingsAccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataSavingsAccounts[".highlightSearchResults"] = true;

$tableKeysSavingsAccounts = array();
$tableKeysSavingsAccounts[] = "id";
$tdataSavingsAccounts[".Keys"] = $tableKeysSavingsAccounts;

$tdataSavingsAccounts[".listFields"] = array();
$tdataSavingsAccounts[".listFields"][] = "AccountName";
$tdataSavingsAccounts[".listFields"][] = "ClientNo";
$tdataSavingsAccounts[".listFields"][] = "AccountNumber";
$tdataSavingsAccounts[".listFields"][] = "AccountType";
$tdataSavingsAccounts[".listFields"][] = "AccountBalance";
$tdataSavingsAccounts[".listFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".listFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".listFields"][] = "InterestRate";
$tdataSavingsAccounts[".listFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".listFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".listFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".hideMobileList"] = array();


$tdataSavingsAccounts[".viewFields"] = array();
$tdataSavingsAccounts[".viewFields"][] = "AccountName";
$tdataSavingsAccounts[".viewFields"][] = "ClientNo";
$tdataSavingsAccounts[".viewFields"][] = "AccountNumber";
$tdataSavingsAccounts[".viewFields"][] = "AccountType";
$tdataSavingsAccounts[".viewFields"][] = "AccountBalance";
$tdataSavingsAccounts[".viewFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".viewFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".viewFields"][] = "InterestRate";
$tdataSavingsAccounts[".viewFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".viewFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".viewFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".addFields"] = array();
$tdataSavingsAccounts[".addFields"][] = "AccountName";
$tdataSavingsAccounts[".addFields"][] = "ClientNo";
$tdataSavingsAccounts[".addFields"][] = "AccountNumber";
$tdataSavingsAccounts[".addFields"][] = "AccountType";
$tdataSavingsAccounts[".addFields"][] = "AccountBalance";
$tdataSavingsAccounts[".addFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".addFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".addFields"][] = "InterestRate";
$tdataSavingsAccounts[".addFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".addFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".addFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".masterListFields"] = array();
$tdataSavingsAccounts[".masterListFields"][] = "AccountHolder";
$tdataSavingsAccounts[".masterListFields"][] = "AccountName";
$tdataSavingsAccounts[".masterListFields"][] = "id";
$tdataSavingsAccounts[".masterListFields"][] = "ClientNo";
$tdataSavingsAccounts[".masterListFields"][] = "AccountNumber";
$tdataSavingsAccounts[".masterListFields"][] = "AccountType";
$tdataSavingsAccounts[".masterListFields"][] = "AccountBalance";
$tdataSavingsAccounts[".masterListFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".masterListFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".masterListFields"][] = "InterestRate";
$tdataSavingsAccounts[".masterListFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".masterListFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".masterListFields"][] = "AccountHolderKey";
$tdataSavingsAccounts[".masterListFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".inlineAddFields"] = array();

$tdataSavingsAccounts[".editFields"] = array();
$tdataSavingsAccounts[".editFields"][] = "AccountName";
$tdataSavingsAccounts[".editFields"][] = "ClientNo";
$tdataSavingsAccounts[".editFields"][] = "AccountNumber";
$tdataSavingsAccounts[".editFields"][] = "AccountType";
$tdataSavingsAccounts[".editFields"][] = "AccountBalance";
$tdataSavingsAccounts[".editFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".editFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".editFields"][] = "InterestRate";
$tdataSavingsAccounts[".editFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".editFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".editFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".inlineEditFields"] = array();

$tdataSavingsAccounts[".updateSelectedFields"] = array();


$tdataSavingsAccounts[".exportFields"] = array();
$tdataSavingsAccounts[".exportFields"][] = "AccountName";
$tdataSavingsAccounts[".exportFields"][] = "ClientNo";
$tdataSavingsAccounts[".exportFields"][] = "AccountNumber";
$tdataSavingsAccounts[".exportFields"][] = "AccountType";
$tdataSavingsAccounts[".exportFields"][] = "AccountBalance";
$tdataSavingsAccounts[".exportFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".exportFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".exportFields"][] = "InterestRate";
$tdataSavingsAccounts[".exportFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".exportFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".exportFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".importFields"] = array();
$tdataSavingsAccounts[".importFields"][] = "AccountNumber";
$tdataSavingsAccounts[".importFields"][] = "AccountBalance";
$tdataSavingsAccounts[".importFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".importFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".importFields"][] = "InterestRate";
$tdataSavingsAccounts[".importFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".importFields"][] = "AccountType";
$tdataSavingsAccounts[".importFields"][] = "ClientNo";
$tdataSavingsAccounts[".importFields"][] = "AccountName";
$tdataSavingsAccounts[".importFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".importFields"][] = "LastModifiedDate";

$tdataSavingsAccounts[".printFields"] = array();
$tdataSavingsAccounts[".printFields"][] = "AccountName";
$tdataSavingsAccounts[".printFields"][] = "ClientNo";
$tdataSavingsAccounts[".printFields"][] = "AccountNumber";
$tdataSavingsAccounts[".printFields"][] = "AccountType";
$tdataSavingsAccounts[".printFields"][] = "AccountBalance";
$tdataSavingsAccounts[".printFields"][] = "LastTransactionDate";
$tdataSavingsAccounts[".printFields"][] = "OpeningBalance";
$tdataSavingsAccounts[".printFields"][] = "InterestRate";
$tdataSavingsAccounts[".printFields"][] = "SetWithdrawDate";
$tdataSavingsAccounts[".printFields"][] = "LastModifiedBy";
$tdataSavingsAccounts[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","id");
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








	$tdataSavingsAccounts["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","AccountNumber");
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




	$tdataSavingsAccounts["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","AccountBalance");
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




	$tdataSavingsAccounts["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","AccountHolder");
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








	$tdataSavingsAccounts["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","LastTransactionDate");
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




	$tdataSavingsAccounts["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","OpeningBalance");
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




	$tdataSavingsAccounts["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","InterestRate");
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




	$tdataSavingsAccounts["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","SetWithdrawDate");
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
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataSavingsAccounts["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","AccountType");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSavingsAccounts["AccountType"] = $fdata;
//	AccountHolderKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AccountHolderKey";
	$fdata["GoodName"] = "AccountHolderKey";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","AccountHolderKey");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "AccountHolderKey";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountHolderKey";

	
	
			
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








	$tdataSavingsAccounts["AccountHolderKey"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","ClientNo");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSavingsAccounts["ClientNo"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","AccountName");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataSavingsAccounts["AccountName"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","LastModifiedBy");
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




	$tdataSavingsAccounts["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("SavingsAccounts","LastModifiedDate");
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




	$tdataSavingsAccounts["LastModifiedDate"] = $fdata;


$tables_data["SavingsAccounts"]=&$tdataSavingsAccounts;
$field_labels["SavingsAccounts"] = &$fieldLabelsSavingsAccounts;
$fieldToolTips["SavingsAccounts"] = &$fieldToolTipsSavingsAccounts;
$page_titles["SavingsAccounts"] = &$pageTitlesSavingsAccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SavingsAccounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SavingsAccounts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SavingsAccounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  AccountName,  LastModifiedBy,  LastModifiedDate";
$proto0["m_strFrom"] = "FROM accounts";
$proto0["m_strWhere"] = "AccountType = 'Savings'";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "AccountType = 'Savings'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'Savings'";
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
	"m_srcTableName" => "SavingsAccounts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "SavingsAccounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "SavingsAccounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "SavingsAccounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "SavingsAccounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "SavingsAccounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "SavingsAccounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "SavingsAccounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "SavingsAccounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "SavingsAccounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolderKey",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto24["m_sql"] = "AccountHolderKey";
$proto24["m_srcTableName"] = "SavingsAccounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto26["m_sql"] = "ClientNo";
$proto26["m_srcTableName"] = "SavingsAccounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto28["m_sql"] = "AccountName";
$proto28["m_srcTableName"] = "SavingsAccounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto30["m_sql"] = "LastModifiedBy";
$proto30["m_srcTableName"] = "SavingsAccounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto32["m_sql"] = "LastModifiedDate";
$proto32["m_srcTableName"] = "SavingsAccounts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "accounts";
$proto35["m_srcTableName"] = "SavingsAccounts";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "AccountNumber";
$proto35["m_columns"][] = "AccountBalance";
$proto35["m_columns"][] = "AccountHolder";
$proto35["m_columns"][] = "LastTransactionDate";
$proto35["m_columns"][] = "OpeningBalance";
$proto35["m_columns"][] = "InterestRate";
$proto35["m_columns"][] = "SetWithdrawDate";
$proto35["m_columns"][] = "AccountType";
$proto35["m_columns"][] = "AccountHolderKey";
$proto35["m_columns"][] = "ClientNo";
$proto35["m_columns"][] = "AccountName";
$proto35["m_columns"][] = "LastModifiedBy";
$proto35["m_columns"][] = "LastModifiedDate";
$proto35["m_columns"][] = "LoanCreditPaymentPurpose";
$proto35["m_columns"][] = "LoanCreditWitness";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "accounts";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "SavingsAccounts";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "accounts",
	"m_srcTableName" => "SavingsAccounts"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 0;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="SavingsAccounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SavingsAccounts = createSqlQuery_SavingsAccounts();


	
		;

														

$tdataSavingsAccounts[".sqlquery"] = $queryData_SavingsAccounts;

include_once(getabspath("include/SavingsAccounts_events.php"));
$tableEvents["SavingsAccounts"] = new eventclass_SavingsAccounts;
$tdataSavingsAccounts[".hasEvents"] = true;

?>