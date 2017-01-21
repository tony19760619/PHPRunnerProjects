<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaccountsLookUp = array();
	$tdataaccountsLookUp[".truncateText"] = true;
	$tdataaccountsLookUp[".NumberOfChars"] = 80;
	$tdataaccountsLookUp[".ShortName"] = "accountsLookUp";
	$tdataaccountsLookUp[".OwnerID"] = "";
	$tdataaccountsLookUp[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsaccountsLookUp = array();
$fieldToolTipsaccountsLookUp = array();
$pageTitlesaccountsLookUp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccountsLookUp["English"] = array();
	$fieldToolTipsaccountsLookUp["English"] = array();
	$pageTitlesaccountsLookUp["English"] = array();
	$fieldLabelsaccountsLookUp["English"]["id"] = "Id";
	$fieldToolTipsaccountsLookUp["English"]["id"] = "";
	$fieldLabelsaccountsLookUp["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsaccountsLookUp["English"]["AccountNumber"] = "";
	$fieldLabelsaccountsLookUp["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsaccountsLookUp["English"]["AccountBalance"] = "";
	$fieldLabelsaccountsLookUp["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsaccountsLookUp["English"]["AccountHolder"] = "";
	$fieldLabelsaccountsLookUp["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsaccountsLookUp["English"]["LastTransactionDate"] = "";
	$fieldLabelsaccountsLookUp["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsaccountsLookUp["English"]["OpeningBalance"] = "";
	$fieldLabelsaccountsLookUp["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsaccountsLookUp["English"]["InterestRate"] = "";
	$fieldLabelsaccountsLookUp["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsaccountsLookUp["English"]["SetWithdrawDate"] = "";
	$fieldLabelsaccountsLookUp["English"]["AccountType"] = "Account Type";
	$fieldToolTipsaccountsLookUp["English"]["AccountType"] = "";
	$fieldLabelsaccountsLookUp["English"]["AccountHolderKey"] = "Account Holder Key";
	$fieldToolTipsaccountsLookUp["English"]["AccountHolderKey"] = "";
	$fieldLabelsaccountsLookUp["English"]["ClientNo"] = "Client No";
	$fieldToolTipsaccountsLookUp["English"]["ClientNo"] = "";
	$fieldLabelsaccountsLookUp["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsaccountsLookUp["English"]["LastModifiedBy"] = "";
	$fieldLabelsaccountsLookUp["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsaccountsLookUp["English"]["LastModifiedDate"] = "";
	$fieldLabelsaccountsLookUp["English"]["AccountName"] = "Account Name";
	$fieldToolTipsaccountsLookUp["English"]["AccountName"] = "";
	if (count($fieldToolTipsaccountsLookUp["English"]))
		$tdataaccountsLookUp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaccountsLookUp[""] = array();
	$fieldToolTipsaccountsLookUp[""] = array();
	$pageTitlesaccountsLookUp[""] = array();
	if (count($fieldToolTipsaccountsLookUp[""]))
		$tdataaccountsLookUp[".isUseToolTips"] = true;
}


	$tdataaccountsLookUp[".NCSearch"] = true;



$tdataaccountsLookUp[".shortTableName"] = "accountsLookUp";
$tdataaccountsLookUp[".nSecOptions"] = 0;
$tdataaccountsLookUp[".recsPerRowPrint"] = 1;
$tdataaccountsLookUp[".mainTableOwnerID"] = "";
$tdataaccountsLookUp[".moveNext"] = 1;
$tdataaccountsLookUp[".entityType"] = 1;

$tdataaccountsLookUp[".strOriginalTableName"] = "accounts";

	



$tdataaccountsLookUp[".showAddInPopup"] = false;

$tdataaccountsLookUp[".showEditInPopup"] = false;

$tdataaccountsLookUp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaccountsLookUp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaccountsLookUp[".fieldsForRegister"] = array();

$tdataaccountsLookUp[".listAjax"] = false;

	$tdataaccountsLookUp[".audit"] = false;

	$tdataaccountsLookUp[".locking"] = false;

$tdataaccountsLookUp[".edit"] = true;
$tdataaccountsLookUp[".afterEditAction"] = 1;
$tdataaccountsLookUp[".closePopupAfterEdit"] = 1;
$tdataaccountsLookUp[".afterEditActionDetTable"] = "";

$tdataaccountsLookUp[".add"] = true;
$tdataaccountsLookUp[".afterAddAction"] = 0;
$tdataaccountsLookUp[".closePopupAfterAdd"] = 1;
$tdataaccountsLookUp[".afterAddActionDetTable"] = "";

$tdataaccountsLookUp[".list"] = true;




$tdataaccountsLookUp[".view"] = true;

$tdataaccountsLookUp[".import"] = true;

$tdataaccountsLookUp[".exportTo"] = true;

$tdataaccountsLookUp[".printFriendly"] = true;

$tdataaccountsLookUp[".delete"] = true;

$tdataaccountsLookUp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataaccountsLookUp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataaccountsLookUp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataaccountsLookUp[".searchSaving"] = true;
//

$tdataaccountsLookUp[".showSearchPanel"] = true;
		$tdataaccountsLookUp[".flexibleSearch"] = true;

$tdataaccountsLookUp[".isUseAjaxSuggest"] = true;

$tdataaccountsLookUp[".rowHighlite"] = true;



$tdataaccountsLookUp[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccountsLookUp[".isUseTimeForSearch"] = false;





$tdataaccountsLookUp[".allSearchFields"] = array();
$tdataaccountsLookUp[".filterFields"] = array();
$tdataaccountsLookUp[".requiredSearchFields"] = array();

$tdataaccountsLookUp[".allSearchFields"][] = "id";
	$tdataaccountsLookUp[".allSearchFields"][] = "AccountNumber";
	$tdataaccountsLookUp[".allSearchFields"][] = "AccountType";
	$tdataaccountsLookUp[".allSearchFields"][] = "ClientNo";
	$tdataaccountsLookUp[".allSearchFields"][] = "AccountName";
	

$tdataaccountsLookUp[".googleLikeFields"] = array();
$tdataaccountsLookUp[".googleLikeFields"][] = "id";
$tdataaccountsLookUp[".googleLikeFields"][] = "AccountNumber";
$tdataaccountsLookUp[".googleLikeFields"][] = "AccountBalance";
$tdataaccountsLookUp[".googleLikeFields"][] = "AccountHolder";
$tdataaccountsLookUp[".googleLikeFields"][] = "LastTransactionDate";
$tdataaccountsLookUp[".googleLikeFields"][] = "OpeningBalance";
$tdataaccountsLookUp[".googleLikeFields"][] = "InterestRate";
$tdataaccountsLookUp[".googleLikeFields"][] = "SetWithdrawDate";
$tdataaccountsLookUp[".googleLikeFields"][] = "AccountType";
$tdataaccountsLookUp[".googleLikeFields"][] = "AccountHolderKey";
$tdataaccountsLookUp[".googleLikeFields"][] = "ClientNo";
$tdataaccountsLookUp[".googleLikeFields"][] = "LastModifiedBy";
$tdataaccountsLookUp[".googleLikeFields"][] = "LastModifiedDate";
$tdataaccountsLookUp[".googleLikeFields"][] = "AccountName";


$tdataaccountsLookUp[".advSearchFields"] = array();
$tdataaccountsLookUp[".advSearchFields"][] = "id";
$tdataaccountsLookUp[".advSearchFields"][] = "AccountNumber";
$tdataaccountsLookUp[".advSearchFields"][] = "AccountType";
$tdataaccountsLookUp[".advSearchFields"][] = "ClientNo";
$tdataaccountsLookUp[".advSearchFields"][] = "AccountName";

$tdataaccountsLookUp[".tableType"] = "list";

$tdataaccountsLookUp[".printerPageOrientation"] = 0;
$tdataaccountsLookUp[".nPrinterPageScale"] = 100;

$tdataaccountsLookUp[".nPrinterSplitRecords"] = 40;

$tdataaccountsLookUp[".nPrinterPDFSplitRecords"] = 40;



$tdataaccountsLookUp[".geocodingEnabled"] = false;





$tdataaccountsLookUp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataaccountsLookUp[".pageSize"] = 20;

$tdataaccountsLookUp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AccountHolder, AccountNumber";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaccountsLookUp[".strOrderBy"] = $tstrOrderBy;

$tdataaccountsLookUp[".orderindexes"] = array();
$tdataaccountsLookUp[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "AccountHolder");
$tdataaccountsLookUp[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "AccountNumber");

$tdataaccountsLookUp[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$tdataaccountsLookUp[".sqlFrom"] = "FROM accounts";
$tdataaccountsLookUp[".sqlWhereExpr"] = "";
$tdataaccountsLookUp[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccountsLookUp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccountsLookUp[".arrGroupsPerPage"] = $arrGPP;

$tdataaccountsLookUp[".highlightSearchResults"] = true;

$tableKeysaccountsLookUp = array();
$tableKeysaccountsLookUp[] = "id";
$tdataaccountsLookUp[".Keys"] = $tableKeysaccountsLookUp;

$tdataaccountsLookUp[".listFields"] = array();
$tdataaccountsLookUp[".listFields"][] = "AccountName";
$tdataaccountsLookUp[".listFields"][] = "id";
$tdataaccountsLookUp[".listFields"][] = "AccountNumber";
$tdataaccountsLookUp[".listFields"][] = "AccountType";
$tdataaccountsLookUp[".listFields"][] = "ClientNo";

$tdataaccountsLookUp[".hideMobileList"] = array();


$tdataaccountsLookUp[".viewFields"] = array();
$tdataaccountsLookUp[".viewFields"][] = "id";
$tdataaccountsLookUp[".viewFields"][] = "AccountNumber";
$tdataaccountsLookUp[".viewFields"][] = "AccountType";
$tdataaccountsLookUp[".viewFields"][] = "ClientNo";
$tdataaccountsLookUp[".viewFields"][] = "AccountName";

$tdataaccountsLookUp[".addFields"] = array();
$tdataaccountsLookUp[".addFields"][] = "AccountName";
$tdataaccountsLookUp[".addFields"][] = "AccountNumber";
$tdataaccountsLookUp[".addFields"][] = "AccountType";
$tdataaccountsLookUp[".addFields"][] = "ClientNo";

$tdataaccountsLookUp[".masterListFields"] = array();
$tdataaccountsLookUp[".masterListFields"][] = "id";
$tdataaccountsLookUp[".masterListFields"][] = "AccountNumber";
$tdataaccountsLookUp[".masterListFields"][] = "AccountBalance";
$tdataaccountsLookUp[".masterListFields"][] = "AccountHolder";
$tdataaccountsLookUp[".masterListFields"][] = "LastTransactionDate";
$tdataaccountsLookUp[".masterListFields"][] = "OpeningBalance";
$tdataaccountsLookUp[".masterListFields"][] = "InterestRate";
$tdataaccountsLookUp[".masterListFields"][] = "SetWithdrawDate";
$tdataaccountsLookUp[".masterListFields"][] = "AccountType";
$tdataaccountsLookUp[".masterListFields"][] = "AccountHolderKey";
$tdataaccountsLookUp[".masterListFields"][] = "ClientNo";
$tdataaccountsLookUp[".masterListFields"][] = "LastModifiedBy";
$tdataaccountsLookUp[".masterListFields"][] = "LastModifiedDate";
$tdataaccountsLookUp[".masterListFields"][] = "AccountName";

$tdataaccountsLookUp[".inlineAddFields"] = array();

$tdataaccountsLookUp[".editFields"] = array();
$tdataaccountsLookUp[".editFields"][] = "AccountName";
$tdataaccountsLookUp[".editFields"][] = "AccountNumber";
$tdataaccountsLookUp[".editFields"][] = "AccountType";
$tdataaccountsLookUp[".editFields"][] = "ClientNo";

$tdataaccountsLookUp[".inlineEditFields"] = array();

$tdataaccountsLookUp[".updateSelectedFields"] = array();


$tdataaccountsLookUp[".exportFields"] = array();
$tdataaccountsLookUp[".exportFields"][] = "id";
$tdataaccountsLookUp[".exportFields"][] = "AccountNumber";
$tdataaccountsLookUp[".exportFields"][] = "AccountType";
$tdataaccountsLookUp[".exportFields"][] = "ClientNo";
$tdataaccountsLookUp[".exportFields"][] = "AccountName";

$tdataaccountsLookUp[".importFields"] = array();
$tdataaccountsLookUp[".importFields"][] = "id";
$tdataaccountsLookUp[".importFields"][] = "AccountNumber";
$tdataaccountsLookUp[".importFields"][] = "AccountType";
$tdataaccountsLookUp[".importFields"][] = "ClientNo";
$tdataaccountsLookUp[".importFields"][] = "AccountName";

$tdataaccountsLookUp[".printFields"] = array();
$tdataaccountsLookUp[".printFields"][] = "id";
$tdataaccountsLookUp[".printFields"][] = "AccountNumber";
$tdataaccountsLookUp[".printFields"][] = "AccountType";
$tdataaccountsLookUp[".printFields"][] = "ClientNo";
$tdataaccountsLookUp[".printFields"][] = "AccountName";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","id");
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




	$tdataaccountsLookUp["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","AccountNumber");
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

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccountsLookUp["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","AccountBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "AccountBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountBalance";

	
	
			
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








	$tdataaccountsLookUp["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","AccountHolder");
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








	$tdataaccountsLookUp["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","LastTransactionDate");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "LastTransactionDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastTransactionDate";

	
	
			
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








	$tdataaccountsLookUp["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","OpeningBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "OpeningBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpeningBalance";

	
	
			
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








	$tdataaccountsLookUp["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","InterestRate");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "InterestRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestRate";

	
	
			
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








	$tdataaccountsLookUp["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","SetWithdrawDate");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "SetWithdrawDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SetWithdrawDate";

	
	
			
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








	$tdataaccountsLookUp["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","AccountType");
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




	$tdataaccountsLookUp["AccountType"] = $fdata;
//	AccountHolderKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AccountHolderKey";
	$fdata["GoodName"] = "AccountHolderKey";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","AccountHolderKey");
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








	$tdataaccountsLookUp["AccountHolderKey"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","ClientNo");
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(FirstName,' ',LastName,' [',ClientNo,']')   ";

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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(FirstName,' ',LastName,' [',ClientNo,']')   ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataaccountsLookUp["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "LastModifiedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedBy";

	
	
			
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








	$tdataaccountsLookUp["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "LastModifiedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedDate";

	
	
			
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








	$tdataaccountsLookUp["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUp","AccountName");
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

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataaccountsLookUp["AccountName"] = $fdata;


$tables_data["accountsLookUp"]=&$tdataaccountsLookUp;
$field_labels["accountsLookUp"] = &$fieldLabelsaccountsLookUp;
$fieldToolTips["accountsLookUp"] = &$fieldToolTipsaccountsLookUp;
$page_titles["accountsLookUp"] = &$pageTitlesaccountsLookUp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["accountsLookUp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["accountsLookUp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_accountsLookUp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$proto0["m_strFrom"] = "FROM accounts";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY AccountHolder, AccountNumber";
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
	"m_srcTableName" => "accountsLookUp"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "accountsLookUp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "accountsLookUp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "accountsLookUp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "accountsLookUp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "accountsLookUp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "accountsLookUp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "accountsLookUp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "accountsLookUp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "accountsLookUp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolderKey",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto24["m_sql"] = "AccountHolderKey";
$proto24["m_srcTableName"] = "accountsLookUp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto26["m_sql"] = "ClientNo";
$proto26["m_srcTableName"] = "accountsLookUp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto28["m_sql"] = "LastModifiedBy";
$proto28["m_srcTableName"] = "accountsLookUp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto30["m_sql"] = "LastModifiedDate";
$proto30["m_srcTableName"] = "accountsLookUp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto32["m_sql"] = "AccountName";
$proto32["m_srcTableName"] = "accountsLookUp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "accounts";
$proto35["m_srcTableName"] = "accountsLookUp";
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
$proto34["m_srcTableName"] = "accountsLookUp";
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
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUp"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 1;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="accountsLookUp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accountsLookUp = createSqlQuery_accountsLookUp();


	
		;

														

$tdataaccountsLookUp[".sqlquery"] = $queryData_accountsLookUp;

$tableEvents["accountsLookUp"] = new eventsBase;
$tdataaccountsLookUp[".hasEvents"] = false;

?>