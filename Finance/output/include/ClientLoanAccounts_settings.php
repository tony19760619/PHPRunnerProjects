<?php
require_once(getabspath("classes/cipherer.php"));




$tdataClientLoanAccounts = array();
	$tdataClientLoanAccounts[".truncateText"] = true;
	$tdataClientLoanAccounts[".NumberOfChars"] = 80;
	$tdataClientLoanAccounts[".ShortName"] = "ClientLoanAccounts";
	$tdataClientLoanAccounts[".OwnerID"] = "ClientNo";
	$tdataClientLoanAccounts[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsClientLoanAccounts = array();
$fieldToolTipsClientLoanAccounts = array();
$pageTitlesClientLoanAccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsClientLoanAccounts["English"] = array();
	$fieldToolTipsClientLoanAccounts["English"] = array();
	$pageTitlesClientLoanAccounts["English"] = array();
	$fieldLabelsClientLoanAccounts["English"]["id"] = "Id";
	$fieldToolTipsClientLoanAccounts["English"]["id"] = "";
	$fieldLabelsClientLoanAccounts["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsClientLoanAccounts["English"]["AccountNumber"] = "";
	$fieldLabelsClientLoanAccounts["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsClientLoanAccounts["English"]["AccountBalance"] = "";
	$fieldLabelsClientLoanAccounts["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsClientLoanAccounts["English"]["AccountHolder"] = "";
	$fieldLabelsClientLoanAccounts["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsClientLoanAccounts["English"]["LastTransactionDate"] = "";
	$fieldLabelsClientLoanAccounts["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsClientLoanAccounts["English"]["OpeningBalance"] = "";
	$fieldLabelsClientLoanAccounts["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsClientLoanAccounts["English"]["InterestRate"] = "";
	$fieldLabelsClientLoanAccounts["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsClientLoanAccounts["English"]["SetWithdrawDate"] = "";
	$fieldLabelsClientLoanAccounts["English"]["AccountType"] = "Account Type";
	$fieldToolTipsClientLoanAccounts["English"]["AccountType"] = "";
	$fieldLabelsClientLoanAccounts["English"]["ClientNo"] = "Client No";
	$fieldToolTipsClientLoanAccounts["English"]["ClientNo"] = "";
	$fieldLabelsClientLoanAccounts["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsClientLoanAccounts["English"]["LastModifiedBy"] = "";
	$fieldLabelsClientLoanAccounts["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsClientLoanAccounts["English"]["LastModifiedDate"] = "";
	$fieldLabelsClientLoanAccounts["English"]["AccountName"] = "Account Name";
	$fieldToolTipsClientLoanAccounts["English"]["AccountName"] = "";
	if (count($fieldToolTipsClientLoanAccounts["English"]))
		$tdataClientLoanAccounts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsClientLoanAccounts[""] = array();
	$fieldToolTipsClientLoanAccounts[""] = array();
	$pageTitlesClientLoanAccounts[""] = array();
	if (count($fieldToolTipsClientLoanAccounts[""]))
		$tdataClientLoanAccounts[".isUseToolTips"] = true;
}


	$tdataClientLoanAccounts[".NCSearch"] = true;



$tdataClientLoanAccounts[".shortTableName"] = "ClientLoanAccounts";
$tdataClientLoanAccounts[".nSecOptions"] = 1;
$tdataClientLoanAccounts[".recsPerRowPrint"] = 1;
$tdataClientLoanAccounts[".mainTableOwnerID"] = "ClientNo";
$tdataClientLoanAccounts[".moveNext"] = 1;
$tdataClientLoanAccounts[".entityType"] = 1;

$tdataClientLoanAccounts[".strOriginalTableName"] = "accounts";

	



$tdataClientLoanAccounts[".showAddInPopup"] = false;

$tdataClientLoanAccounts[".showEditInPopup"] = false;

$tdataClientLoanAccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataClientLoanAccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataClientLoanAccounts[".fieldsForRegister"] = array();

$tdataClientLoanAccounts[".listAjax"] = false;

	$tdataClientLoanAccounts[".audit"] = false;

	$tdataClientLoanAccounts[".locking"] = false;



$tdataClientLoanAccounts[".list"] = true;




$tdataClientLoanAccounts[".view"] = true;


$tdataClientLoanAccounts[".exportTo"] = true;

$tdataClientLoanAccounts[".printFriendly"] = true;


$tdataClientLoanAccounts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataClientLoanAccounts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataClientLoanAccounts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataClientLoanAccounts[".searchSaving"] = true;
//

$tdataClientLoanAccounts[".showSearchPanel"] = true;
		$tdataClientLoanAccounts[".flexibleSearch"] = true;

$tdataClientLoanAccounts[".isUseAjaxSuggest"] = true;

$tdataClientLoanAccounts[".rowHighlite"] = true;



$tdataClientLoanAccounts[".addPageEvents"] = false;

// use timepicker for search panel
$tdataClientLoanAccounts[".isUseTimeForSearch"] = false;





$tdataClientLoanAccounts[".allSearchFields"] = array();
$tdataClientLoanAccounts[".filterFields"] = array();
$tdataClientLoanAccounts[".requiredSearchFields"] = array();

$tdataClientLoanAccounts[".allSearchFields"][] = "id";
	$tdataClientLoanAccounts[".allSearchFields"][] = "AccountName";
	$tdataClientLoanAccounts[".allSearchFields"][] = "ClientNo";
	$tdataClientLoanAccounts[".allSearchFields"][] = "AccountType";
	$tdataClientLoanAccounts[".allSearchFields"][] = "AccountNumber";
	$tdataClientLoanAccounts[".allSearchFields"][] = "AccountBalance";
	$tdataClientLoanAccounts[".allSearchFields"][] = "LastTransactionDate";
	$tdataClientLoanAccounts[".allSearchFields"][] = "OpeningBalance";
	$tdataClientLoanAccounts[".allSearchFields"][] = "InterestRate";
	$tdataClientLoanAccounts[".allSearchFields"][] = "SetWithdrawDate";
	$tdataClientLoanAccounts[".allSearchFields"][] = "LastModifiedBy";
	$tdataClientLoanAccounts[".allSearchFields"][] = "LastModifiedDate";
	

$tdataClientLoanAccounts[".googleLikeFields"] = array();
$tdataClientLoanAccounts[".googleLikeFields"][] = "id";
$tdataClientLoanAccounts[".googleLikeFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".googleLikeFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".googleLikeFields"][] = "AccountHolder";
$tdataClientLoanAccounts[".googleLikeFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".googleLikeFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".googleLikeFields"][] = "InterestRate";
$tdataClientLoanAccounts[".googleLikeFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".googleLikeFields"][] = "AccountType";
$tdataClientLoanAccounts[".googleLikeFields"][] = "ClientNo";
$tdataClientLoanAccounts[".googleLikeFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".googleLikeFields"][] = "LastModifiedDate";
$tdataClientLoanAccounts[".googleLikeFields"][] = "AccountName";


$tdataClientLoanAccounts[".advSearchFields"] = array();
$tdataClientLoanAccounts[".advSearchFields"][] = "id";
$tdataClientLoanAccounts[".advSearchFields"][] = "AccountName";
$tdataClientLoanAccounts[".advSearchFields"][] = "ClientNo";
$tdataClientLoanAccounts[".advSearchFields"][] = "AccountType";
$tdataClientLoanAccounts[".advSearchFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".advSearchFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".advSearchFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".advSearchFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".advSearchFields"][] = "InterestRate";
$tdataClientLoanAccounts[".advSearchFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".advSearchFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".advSearchFields"][] = "LastModifiedDate";

$tdataClientLoanAccounts[".tableType"] = "list";

$tdataClientLoanAccounts[".printerPageOrientation"] = 0;
$tdataClientLoanAccounts[".nPrinterPageScale"] = 100;

$tdataClientLoanAccounts[".nPrinterSplitRecords"] = 40;

$tdataClientLoanAccounts[".nPrinterPDFSplitRecords"] = 40;



$tdataClientLoanAccounts[".geocodingEnabled"] = false;





$tdataClientLoanAccounts[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataClientLoanAccounts[".pageSize"] = 20;

$tdataClientLoanAccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataClientLoanAccounts[".strOrderBy"] = $tstrOrderBy;

$tdataClientLoanAccounts[".orderindexes"] = array();
$tdataClientLoanAccounts[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataClientLoanAccounts[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$tdataClientLoanAccounts[".sqlFrom"] = "FROM accounts";
$tdataClientLoanAccounts[".sqlWhereExpr"] = "AccountType = 'Loan'";
$tdataClientLoanAccounts[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataClientLoanAccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataClientLoanAccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataClientLoanAccounts[".highlightSearchResults"] = true;

$tableKeysClientLoanAccounts = array();
$tableKeysClientLoanAccounts[] = "id";
$tdataClientLoanAccounts[".Keys"] = $tableKeysClientLoanAccounts;

$tdataClientLoanAccounts[".listFields"] = array();
$tdataClientLoanAccounts[".listFields"][] = "id";
$tdataClientLoanAccounts[".listFields"][] = "AccountName";
$tdataClientLoanAccounts[".listFields"][] = "ClientNo";
$tdataClientLoanAccounts[".listFields"][] = "AccountType";
$tdataClientLoanAccounts[".listFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".listFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".listFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".listFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".listFields"][] = "InterestRate";
$tdataClientLoanAccounts[".listFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".listFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".listFields"][] = "LastModifiedDate";

$tdataClientLoanAccounts[".hideMobileList"] = array();


$tdataClientLoanAccounts[".viewFields"] = array();
$tdataClientLoanAccounts[".viewFields"][] = "id";
$tdataClientLoanAccounts[".viewFields"][] = "AccountName";
$tdataClientLoanAccounts[".viewFields"][] = "ClientNo";
$tdataClientLoanAccounts[".viewFields"][] = "AccountType";
$tdataClientLoanAccounts[".viewFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".viewFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".viewFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".viewFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".viewFields"][] = "InterestRate";
$tdataClientLoanAccounts[".viewFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".viewFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".viewFields"][] = "LastModifiedDate";

$tdataClientLoanAccounts[".addFields"] = array();

$tdataClientLoanAccounts[".masterListFields"] = array();
$tdataClientLoanAccounts[".masterListFields"][] = "AccountHolder";
$tdataClientLoanAccounts[".masterListFields"][] = "id";
$tdataClientLoanAccounts[".masterListFields"][] = "AccountName";
$tdataClientLoanAccounts[".masterListFields"][] = "ClientNo";
$tdataClientLoanAccounts[".masterListFields"][] = "AccountType";
$tdataClientLoanAccounts[".masterListFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".masterListFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".masterListFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".masterListFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".masterListFields"][] = "InterestRate";
$tdataClientLoanAccounts[".masterListFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".masterListFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".masterListFields"][] = "LastModifiedDate";

$tdataClientLoanAccounts[".inlineAddFields"] = array();

$tdataClientLoanAccounts[".editFields"] = array();

$tdataClientLoanAccounts[".inlineEditFields"] = array();

$tdataClientLoanAccounts[".updateSelectedFields"] = array();


$tdataClientLoanAccounts[".exportFields"] = array();
$tdataClientLoanAccounts[".exportFields"][] = "id";
$tdataClientLoanAccounts[".exportFields"][] = "AccountName";
$tdataClientLoanAccounts[".exportFields"][] = "ClientNo";
$tdataClientLoanAccounts[".exportFields"][] = "AccountType";
$tdataClientLoanAccounts[".exportFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".exportFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".exportFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".exportFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".exportFields"][] = "InterestRate";
$tdataClientLoanAccounts[".exportFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".exportFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".exportFields"][] = "LastModifiedDate";

$tdataClientLoanAccounts[".importFields"] = array();

$tdataClientLoanAccounts[".printFields"] = array();
$tdataClientLoanAccounts[".printFields"][] = "id";
$tdataClientLoanAccounts[".printFields"][] = "AccountName";
$tdataClientLoanAccounts[".printFields"][] = "ClientNo";
$tdataClientLoanAccounts[".printFields"][] = "AccountType";
$tdataClientLoanAccounts[".printFields"][] = "AccountNumber";
$tdataClientLoanAccounts[".printFields"][] = "AccountBalance";
$tdataClientLoanAccounts[".printFields"][] = "LastTransactionDate";
$tdataClientLoanAccounts[".printFields"][] = "OpeningBalance";
$tdataClientLoanAccounts[".printFields"][] = "InterestRate";
$tdataClientLoanAccounts[".printFields"][] = "SetWithdrawDate";
$tdataClientLoanAccounts[".printFields"][] = "LastModifiedBy";
$tdataClientLoanAccounts[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","id");
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




	$tdataClientLoanAccounts["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","AccountNumber");
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




	$tdataClientLoanAccounts["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","AccountBalance");
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




	$tdataClientLoanAccounts["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","AccountHolder");
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








	$tdataClientLoanAccounts["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","LastTransactionDate");
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




	$tdataClientLoanAccounts["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","OpeningBalance");
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




	$tdataClientLoanAccounts["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","InterestRate");
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




	$tdataClientLoanAccounts["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","SetWithdrawDate");
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




	$tdataClientLoanAccounts["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","AccountType");
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




	$tdataClientLoanAccounts["AccountType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","ClientNo");
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




	$tdataClientLoanAccounts["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","LastModifiedBy");
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




	$tdataClientLoanAccounts["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","LastModifiedDate");
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




	$tdataClientLoanAccounts["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("ClientLoanAccounts","AccountName");
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




	$tdataClientLoanAccounts["AccountName"] = $fdata;


$tables_data["ClientLoanAccounts"]=&$tdataClientLoanAccounts;
$field_labels["ClientLoanAccounts"] = &$fieldLabelsClientLoanAccounts;
$fieldToolTips["ClientLoanAccounts"] = &$fieldToolTipsClientLoanAccounts;
$page_titles["ClientLoanAccounts"] = &$pageTitlesClientLoanAccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ClientLoanAccounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ClientLoanAccounts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ClientLoanAccounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$proto0["m_strFrom"] = "FROM accounts";
$proto0["m_strWhere"] = "AccountType = 'Loan'";
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
	"m_srcTableName" => "ClientLoanAccounts"
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
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ClientLoanAccounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "ClientLoanAccounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "ClientLoanAccounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "ClientLoanAccounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "ClientLoanAccounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "ClientLoanAccounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "ClientLoanAccounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "ClientLoanAccounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "ClientLoanAccounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto24["m_sql"] = "ClientNo";
$proto24["m_srcTableName"] = "ClientLoanAccounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto26["m_sql"] = "LastModifiedBy";
$proto26["m_srcTableName"] = "ClientLoanAccounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto28["m_sql"] = "LastModifiedDate";
$proto28["m_srcTableName"] = "ClientLoanAccounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto30["m_sql"] = "AccountName";
$proto30["m_srcTableName"] = "ClientLoanAccounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "accounts";
$proto33["m_srcTableName"] = "ClientLoanAccounts";
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
$proto32["m_srcTableName"] = "ClientLoanAccounts";
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
	"m_srcTableName" => "ClientLoanAccounts"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ClientLoanAccounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ClientLoanAccounts = createSqlQuery_ClientLoanAccounts();


	
		;

													

$tdataClientLoanAccounts[".sqlquery"] = $queryData_ClientLoanAccounts;

$tableEvents["ClientLoanAccounts"] = new eventsBase;
$tdataClientLoanAccounts[".hasEvents"] = false;

?>