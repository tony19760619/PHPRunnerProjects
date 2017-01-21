<?php
require_once(getabspath("classes/cipherer.php"));




$tdataClientSavingsAccounts = array();
	$tdataClientSavingsAccounts[".truncateText"] = true;
	$tdataClientSavingsAccounts[".NumberOfChars"] = 80;
	$tdataClientSavingsAccounts[".ShortName"] = "ClientSavingsAccounts";
	$tdataClientSavingsAccounts[".OwnerID"] = "ClientNo";
	$tdataClientSavingsAccounts[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsClientSavingsAccounts = array();
$fieldToolTipsClientSavingsAccounts = array();
$pageTitlesClientSavingsAccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsClientSavingsAccounts["English"] = array();
	$fieldToolTipsClientSavingsAccounts["English"] = array();
	$pageTitlesClientSavingsAccounts["English"] = array();
	$fieldLabelsClientSavingsAccounts["English"]["id"] = "Id";
	$fieldToolTipsClientSavingsAccounts["English"]["id"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsClientSavingsAccounts["English"]["AccountNumber"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsClientSavingsAccounts["English"]["AccountBalance"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsClientSavingsAccounts["English"]["AccountHolder"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsClientSavingsAccounts["English"]["LastTransactionDate"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsClientSavingsAccounts["English"]["OpeningBalance"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsClientSavingsAccounts["English"]["InterestRate"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsClientSavingsAccounts["English"]["SetWithdrawDate"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["AccountType"] = "Account Type";
	$fieldToolTipsClientSavingsAccounts["English"]["AccountType"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["ClientNo"] = "Client No";
	$fieldToolTipsClientSavingsAccounts["English"]["ClientNo"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsClientSavingsAccounts["English"]["LastModifiedBy"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsClientSavingsAccounts["English"]["LastModifiedDate"] = "";
	$fieldLabelsClientSavingsAccounts["English"]["AccountName"] = "Account Name";
	$fieldToolTipsClientSavingsAccounts["English"]["AccountName"] = "";
	if (count($fieldToolTipsClientSavingsAccounts["English"]))
		$tdataClientSavingsAccounts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsClientSavingsAccounts[""] = array();
	$fieldToolTipsClientSavingsAccounts[""] = array();
	$pageTitlesClientSavingsAccounts[""] = array();
	if (count($fieldToolTipsClientSavingsAccounts[""]))
		$tdataClientSavingsAccounts[".isUseToolTips"] = true;
}


	$tdataClientSavingsAccounts[".NCSearch"] = true;



$tdataClientSavingsAccounts[".shortTableName"] = "ClientSavingsAccounts";
$tdataClientSavingsAccounts[".nSecOptions"] = 1;
$tdataClientSavingsAccounts[".recsPerRowPrint"] = 1;
$tdataClientSavingsAccounts[".mainTableOwnerID"] = "ClientNo";
$tdataClientSavingsAccounts[".moveNext"] = 1;
$tdataClientSavingsAccounts[".entityType"] = 1;

$tdataClientSavingsAccounts[".strOriginalTableName"] = "accounts";

	



$tdataClientSavingsAccounts[".showAddInPopup"] = false;

$tdataClientSavingsAccounts[".showEditInPopup"] = false;

$tdataClientSavingsAccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataClientSavingsAccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataClientSavingsAccounts[".fieldsForRegister"] = array();

$tdataClientSavingsAccounts[".listAjax"] = false;

	$tdataClientSavingsAccounts[".audit"] = false;

	$tdataClientSavingsAccounts[".locking"] = false;



$tdataClientSavingsAccounts[".list"] = true;




$tdataClientSavingsAccounts[".view"] = true;


$tdataClientSavingsAccounts[".exportTo"] = true;

$tdataClientSavingsAccounts[".printFriendly"] = true;


$tdataClientSavingsAccounts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataClientSavingsAccounts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataClientSavingsAccounts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataClientSavingsAccounts[".searchSaving"] = true;
//

$tdataClientSavingsAccounts[".showSearchPanel"] = true;
		$tdataClientSavingsAccounts[".flexibleSearch"] = true;

$tdataClientSavingsAccounts[".isUseAjaxSuggest"] = true;

$tdataClientSavingsAccounts[".rowHighlite"] = true;



$tdataClientSavingsAccounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataClientSavingsAccounts[".isUseTimeForSearch"] = false;





$tdataClientSavingsAccounts[".allSearchFields"] = array();
$tdataClientSavingsAccounts[".filterFields"] = array();
$tdataClientSavingsAccounts[".requiredSearchFields"] = array();

$tdataClientSavingsAccounts[".allSearchFields"][] = "id";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "AccountName";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "ClientNo";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "AccountType";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "AccountNumber";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "AccountBalance";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "OpeningBalance";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "InterestRate";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "LastTransactionDate";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "SetWithdrawDate";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "LastModifiedBy";
	$tdataClientSavingsAccounts[".allSearchFields"][] = "LastModifiedDate";
	

$tdataClientSavingsAccounts[".googleLikeFields"] = array();
$tdataClientSavingsAccounts[".googleLikeFields"][] = "id";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "AccountHolder";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "AccountType";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "LastModifiedDate";
$tdataClientSavingsAccounts[".googleLikeFields"][] = "AccountName";


$tdataClientSavingsAccounts[".advSearchFields"] = array();
$tdataClientSavingsAccounts[".advSearchFields"][] = "id";
$tdataClientSavingsAccounts[".advSearchFields"][] = "AccountName";
$tdataClientSavingsAccounts[".advSearchFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".advSearchFields"][] = "AccountType";
$tdataClientSavingsAccounts[".advSearchFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".advSearchFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".advSearchFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".advSearchFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".advSearchFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".advSearchFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".advSearchFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".advSearchFields"][] = "LastModifiedDate";

$tdataClientSavingsAccounts[".tableType"] = "list";

$tdataClientSavingsAccounts[".printerPageOrientation"] = 0;
$tdataClientSavingsAccounts[".nPrinterPageScale"] = 100;

$tdataClientSavingsAccounts[".nPrinterSplitRecords"] = 40;

$tdataClientSavingsAccounts[".nPrinterPDFSplitRecords"] = 40;



$tdataClientSavingsAccounts[".geocodingEnabled"] = false;





$tdataClientSavingsAccounts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataClientSavingsAccounts[".pageSize"] = 20;

$tdataClientSavingsAccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataClientSavingsAccounts[".strOrderBy"] = $tstrOrderBy;

$tdataClientSavingsAccounts[".orderindexes"] = array();
$tdataClientSavingsAccounts[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataClientSavingsAccounts[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$tdataClientSavingsAccounts[".sqlFrom"] = "FROM accounts";
$tdataClientSavingsAccounts[".sqlWhereExpr"] = "AccountType = 'Savings'";
$tdataClientSavingsAccounts[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataClientSavingsAccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataClientSavingsAccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataClientSavingsAccounts[".highlightSearchResults"] = true;

$tableKeysClientSavingsAccounts = array();
$tableKeysClientSavingsAccounts[] = "id";
$tdataClientSavingsAccounts[".Keys"] = $tableKeysClientSavingsAccounts;

$tdataClientSavingsAccounts[".listFields"] = array();
$tdataClientSavingsAccounts[".listFields"][] = "id";
$tdataClientSavingsAccounts[".listFields"][] = "AccountName";
$tdataClientSavingsAccounts[".listFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".listFields"][] = "AccountType";
$tdataClientSavingsAccounts[".listFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".listFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".listFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".listFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".listFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".listFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".listFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".listFields"][] = "LastModifiedDate";

$tdataClientSavingsAccounts[".hideMobileList"] = array();


$tdataClientSavingsAccounts[".viewFields"] = array();
$tdataClientSavingsAccounts[".viewFields"][] = "id";
$tdataClientSavingsAccounts[".viewFields"][] = "AccountName";
$tdataClientSavingsAccounts[".viewFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".viewFields"][] = "AccountType";
$tdataClientSavingsAccounts[".viewFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".viewFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".viewFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".viewFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".viewFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".viewFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".viewFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".viewFields"][] = "LastModifiedDate";

$tdataClientSavingsAccounts[".addFields"] = array();

$tdataClientSavingsAccounts[".masterListFields"] = array();
$tdataClientSavingsAccounts[".masterListFields"][] = "AccountHolder";
$tdataClientSavingsAccounts[".masterListFields"][] = "id";
$tdataClientSavingsAccounts[".masterListFields"][] = "AccountName";
$tdataClientSavingsAccounts[".masterListFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".masterListFields"][] = "AccountType";
$tdataClientSavingsAccounts[".masterListFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".masterListFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".masterListFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".masterListFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".masterListFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".masterListFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".masterListFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".masterListFields"][] = "LastModifiedDate";

$tdataClientSavingsAccounts[".inlineAddFields"] = array();

$tdataClientSavingsAccounts[".editFields"] = array();

$tdataClientSavingsAccounts[".inlineEditFields"] = array();

$tdataClientSavingsAccounts[".updateSelectedFields"] = array();


$tdataClientSavingsAccounts[".exportFields"] = array();
$tdataClientSavingsAccounts[".exportFields"][] = "id";
$tdataClientSavingsAccounts[".exportFields"][] = "AccountName";
$tdataClientSavingsAccounts[".exportFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".exportFields"][] = "AccountType";
$tdataClientSavingsAccounts[".exportFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".exportFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".exportFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".exportFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".exportFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".exportFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".exportFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".exportFields"][] = "LastModifiedDate";

$tdataClientSavingsAccounts[".importFields"] = array();

$tdataClientSavingsAccounts[".printFields"] = array();
$tdataClientSavingsAccounts[".printFields"][] = "id";
$tdataClientSavingsAccounts[".printFields"][] = "AccountName";
$tdataClientSavingsAccounts[".printFields"][] = "ClientNo";
$tdataClientSavingsAccounts[".printFields"][] = "AccountType";
$tdataClientSavingsAccounts[".printFields"][] = "AccountNumber";
$tdataClientSavingsAccounts[".printFields"][] = "AccountBalance";
$tdataClientSavingsAccounts[".printFields"][] = "OpeningBalance";
$tdataClientSavingsAccounts[".printFields"][] = "InterestRate";
$tdataClientSavingsAccounts[".printFields"][] = "LastTransactionDate";
$tdataClientSavingsAccounts[".printFields"][] = "SetWithdrawDate";
$tdataClientSavingsAccounts[".printFields"][] = "LastModifiedBy";
$tdataClientSavingsAccounts[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","id");
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




	$tdataClientSavingsAccounts["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUpFiltered";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountNumber";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountNumber";

	
	$edata["LookupOrderBy"] = "AccountNumber";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ClientNo", "lookup" => "ClientNo" );

	
	

	
	
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

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientSavingsAccounts["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","AccountBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","AccountHolder");
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








	$tdataClientSavingsAccounts["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","LastTransactionDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","OpeningBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","InterestRate");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","SetWithdrawDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["AccountType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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
	$edata["LookupTable"] = "usersLookupFiltered";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientSavingsAccounts["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataClientSavingsAccounts["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientSavingsAccounts","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountName";

	
	
				$fdata["FieldPermissions"] = true;

			
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




	$tdataClientSavingsAccounts["AccountName"] = $fdata;


$tables_data["ClientSavingsAccounts"]=&$tdataClientSavingsAccounts;
$field_labels["ClientSavingsAccounts"] = &$fieldLabelsClientSavingsAccounts;
$fieldToolTips["ClientSavingsAccounts"] = &$fieldToolTipsClientSavingsAccounts;
$page_titles["ClientSavingsAccounts"] = &$pageTitlesClientSavingsAccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ClientSavingsAccounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ClientSavingsAccounts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ClientSavingsAccounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
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
	"m_srcTableName" => "ClientSavingsAccounts"
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
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ClientSavingsAccounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "ClientSavingsAccounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "ClientSavingsAccounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "ClientSavingsAccounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "ClientSavingsAccounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "ClientSavingsAccounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "ClientSavingsAccounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "ClientSavingsAccounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "ClientSavingsAccounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto24["m_sql"] = "ClientNo";
$proto24["m_srcTableName"] = "ClientSavingsAccounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto26["m_sql"] = "LastModifiedBy";
$proto26["m_srcTableName"] = "ClientSavingsAccounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto28["m_sql"] = "LastModifiedDate";
$proto28["m_srcTableName"] = "ClientSavingsAccounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto30["m_sql"] = "AccountName";
$proto30["m_srcTableName"] = "ClientSavingsAccounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "accounts";
$proto33["m_srcTableName"] = "ClientSavingsAccounts";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "AccountNumber";
$proto33["m_columns"][] = "AccountBalance";
$proto33["m_columns"][] = "AccountHolder";
$proto33["m_columns"][] = "LastTransactionDate";
$proto33["m_columns"][] = "OpeningBalance";
$proto33["m_columns"][] = "InterestRate";
$proto33["m_columns"][] = "SetWithdrawDate";
$proto33["m_columns"][] = "AccountType";
$proto33["m_columns"][] = "AccountHolderKey";
$proto33["m_columns"][] = "ClientNo";
$proto33["m_columns"][] = "AccountName";
$proto33["m_columns"][] = "LastModifiedBy";
$proto33["m_columns"][] = "LastModifiedDate";
$proto33["m_columns"][] = "LoanCreditPaymentPurpose";
$proto33["m_columns"][] = "LoanCreditWitness";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "accounts";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "ClientSavingsAccounts";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientSavingsAccounts"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ClientSavingsAccounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ClientSavingsAccounts = createSqlQuery_ClientSavingsAccounts();


	
		;

													

$tdataClientSavingsAccounts[".sqlquery"] = $queryData_ClientSavingsAccounts;

$tableEvents["ClientSavingsAccounts"] = new eventsBase;
$tdataClientSavingsAccounts[".hasEvents"] = false;

?>