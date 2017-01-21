<?php
require_once(getabspath("classes/cipherer.php"));




$tdataaccountsLookUpFiltered = array();
	$tdataaccountsLookUpFiltered[".truncateText"] = true;
	$tdataaccountsLookUpFiltered[".NumberOfChars"] = 80;
	$tdataaccountsLookUpFiltered[".ShortName"] = "accountsLookUpFiltered";
	$tdataaccountsLookUpFiltered[".OwnerID"] = "ClientNo";
	$tdataaccountsLookUpFiltered[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsaccountsLookUpFiltered = array();
$fieldToolTipsaccountsLookUpFiltered = array();
$pageTitlesaccountsLookUpFiltered = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccountsLookUpFiltered["English"] = array();
	$fieldToolTipsaccountsLookUpFiltered["English"] = array();
	$pageTitlesaccountsLookUpFiltered["English"] = array();
	$fieldLabelsaccountsLookUpFiltered["English"]["id"] = "Id";
	$fieldToolTipsaccountsLookUpFiltered["English"]["id"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsaccountsLookUpFiltered["English"]["AccountNumber"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsaccountsLookUpFiltered["English"]["AccountBalance"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsaccountsLookUpFiltered["English"]["AccountHolder"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsaccountsLookUpFiltered["English"]["LastTransactionDate"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["OpeningBalance"] = "Opening Balance";
	$fieldToolTipsaccountsLookUpFiltered["English"]["OpeningBalance"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsaccountsLookUpFiltered["English"]["InterestRate"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsaccountsLookUpFiltered["English"]["SetWithdrawDate"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["AccountType"] = "Account Type";
	$fieldToolTipsaccountsLookUpFiltered["English"]["AccountType"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["AccountHolderKey"] = "Account Holder Key";
	$fieldToolTipsaccountsLookUpFiltered["English"]["AccountHolderKey"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["ClientNo"] = "Client No";
	$fieldToolTipsaccountsLookUpFiltered["English"]["ClientNo"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsaccountsLookUpFiltered["English"]["LastModifiedBy"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsaccountsLookUpFiltered["English"]["LastModifiedDate"] = "";
	$fieldLabelsaccountsLookUpFiltered["English"]["AccountName"] = "Account Name";
	$fieldToolTipsaccountsLookUpFiltered["English"]["AccountName"] = "";
	if (count($fieldToolTipsaccountsLookUpFiltered["English"]))
		$tdataaccountsLookUpFiltered[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsaccountsLookUpFiltered[""] = array();
	$fieldToolTipsaccountsLookUpFiltered[""] = array();
	$pageTitlesaccountsLookUpFiltered[""] = array();
	if (count($fieldToolTipsaccountsLookUpFiltered[""]))
		$tdataaccountsLookUpFiltered[".isUseToolTips"] = true;
}


	$tdataaccountsLookUpFiltered[".NCSearch"] = true;



$tdataaccountsLookUpFiltered[".shortTableName"] = "accountsLookUpFiltered";
$tdataaccountsLookUpFiltered[".nSecOptions"] = 1;
$tdataaccountsLookUpFiltered[".recsPerRowPrint"] = 1;
$tdataaccountsLookUpFiltered[".mainTableOwnerID"] = "ClientNo";
$tdataaccountsLookUpFiltered[".moveNext"] = 1;
$tdataaccountsLookUpFiltered[".entityType"] = 1;

$tdataaccountsLookUpFiltered[".strOriginalTableName"] = "accounts";

	



$tdataaccountsLookUpFiltered[".showAddInPopup"] = false;

$tdataaccountsLookUpFiltered[".showEditInPopup"] = false;

$tdataaccountsLookUpFiltered[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaccountsLookUpFiltered[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaccountsLookUpFiltered[".fieldsForRegister"] = array();

$tdataaccountsLookUpFiltered[".listAjax"] = false;

	$tdataaccountsLookUpFiltered[".audit"] = false;

	$tdataaccountsLookUpFiltered[".locking"] = false;

$tdataaccountsLookUpFiltered[".edit"] = true;
$tdataaccountsLookUpFiltered[".afterEditAction"] = 1;
$tdataaccountsLookUpFiltered[".closePopupAfterEdit"] = 1;
$tdataaccountsLookUpFiltered[".afterEditActionDetTable"] = "";

$tdataaccountsLookUpFiltered[".add"] = true;
$tdataaccountsLookUpFiltered[".afterAddAction"] = 0;
$tdataaccountsLookUpFiltered[".closePopupAfterAdd"] = 1;
$tdataaccountsLookUpFiltered[".afterAddActionDetTable"] = "";

$tdataaccountsLookUpFiltered[".list"] = true;




$tdataaccountsLookUpFiltered[".view"] = true;

$tdataaccountsLookUpFiltered[".import"] = true;

$tdataaccountsLookUpFiltered[".exportTo"] = true;

$tdataaccountsLookUpFiltered[".printFriendly"] = true;

$tdataaccountsLookUpFiltered[".delete"] = true;

$tdataaccountsLookUpFiltered[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataaccountsLookUpFiltered[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataaccountsLookUpFiltered[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataaccountsLookUpFiltered[".searchSaving"] = true;
//

$tdataaccountsLookUpFiltered[".showSearchPanel"] = true;
		$tdataaccountsLookUpFiltered[".flexibleSearch"] = true;

$tdataaccountsLookUpFiltered[".isUseAjaxSuggest"] = true;

$tdataaccountsLookUpFiltered[".rowHighlite"] = true;



$tdataaccountsLookUpFiltered[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccountsLookUpFiltered[".isUseTimeForSearch"] = false;





$tdataaccountsLookUpFiltered[".allSearchFields"] = array();
$tdataaccountsLookUpFiltered[".filterFields"] = array();
$tdataaccountsLookUpFiltered[".requiredSearchFields"] = array();

$tdataaccountsLookUpFiltered[".allSearchFields"][] = "id";
	$tdataaccountsLookUpFiltered[".allSearchFields"][] = "AccountNumber";
	$tdataaccountsLookUpFiltered[".allSearchFields"][] = "AccountType";
	$tdataaccountsLookUpFiltered[".allSearchFields"][] = "ClientNo";
	$tdataaccountsLookUpFiltered[".allSearchFields"][] = "AccountName";
	

$tdataaccountsLookUpFiltered[".googleLikeFields"] = array();
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "id";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "AccountBalance";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "AccountHolder";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "LastTransactionDate";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "OpeningBalance";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "InterestRate";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "SetWithdrawDate";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "AccountHolderKey";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "LastModifiedBy";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "LastModifiedDate";
$tdataaccountsLookUpFiltered[".googleLikeFields"][] = "AccountName";


$tdataaccountsLookUpFiltered[".advSearchFields"] = array();
$tdataaccountsLookUpFiltered[".advSearchFields"][] = "id";
$tdataaccountsLookUpFiltered[".advSearchFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".advSearchFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".advSearchFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".advSearchFields"][] = "AccountName";

$tdataaccountsLookUpFiltered[".tableType"] = "list";

$tdataaccountsLookUpFiltered[".printerPageOrientation"] = 0;
$tdataaccountsLookUpFiltered[".nPrinterPageScale"] = 100;

$tdataaccountsLookUpFiltered[".nPrinterSplitRecords"] = 40;

$tdataaccountsLookUpFiltered[".nPrinterPDFSplitRecords"] = 40;



$tdataaccountsLookUpFiltered[".geocodingEnabled"] = false;





$tdataaccountsLookUpFiltered[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataaccountsLookUpFiltered[".pageSize"] = 20;

$tdataaccountsLookUpFiltered[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AccountHolder, AccountNumber";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaccountsLookUpFiltered[".strOrderBy"] = $tstrOrderBy;

$tdataaccountsLookUpFiltered[".orderindexes"] = array();
$tdataaccountsLookUpFiltered[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "AccountHolder");
$tdataaccountsLookUpFiltered[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "AccountNumber");

$tdataaccountsLookUpFiltered[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  OpeningBalance,  InterestRate,  SetWithdrawDate,  AccountType,  AccountHolderKey,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$tdataaccountsLookUpFiltered[".sqlFrom"] = "FROM accounts";
$tdataaccountsLookUpFiltered[".sqlWhereExpr"] = "";
$tdataaccountsLookUpFiltered[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccountsLookUpFiltered[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccountsLookUpFiltered[".arrGroupsPerPage"] = $arrGPP;

$tdataaccountsLookUpFiltered[".highlightSearchResults"] = true;

$tableKeysaccountsLookUpFiltered = array();
$tableKeysaccountsLookUpFiltered[] = "id";
$tdataaccountsLookUpFiltered[".Keys"] = $tableKeysaccountsLookUpFiltered;

$tdataaccountsLookUpFiltered[".listFields"] = array();
$tdataaccountsLookUpFiltered[".listFields"][] = "AccountName";
$tdataaccountsLookUpFiltered[".listFields"][] = "id";
$tdataaccountsLookUpFiltered[".listFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".listFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".listFields"][] = "ClientNo";

$tdataaccountsLookUpFiltered[".hideMobileList"] = array();


$tdataaccountsLookUpFiltered[".viewFields"] = array();
$tdataaccountsLookUpFiltered[".viewFields"][] = "id";
$tdataaccountsLookUpFiltered[".viewFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".viewFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".viewFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".viewFields"][] = "AccountName";

$tdataaccountsLookUpFiltered[".addFields"] = array();
$tdataaccountsLookUpFiltered[".addFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".addFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".addFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".addFields"][] = "AccountName";

$tdataaccountsLookUpFiltered[".masterListFields"] = array();
$tdataaccountsLookUpFiltered[".masterListFields"][] = "id";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "AccountBalance";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "AccountHolder";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "LastTransactionDate";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "OpeningBalance";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "InterestRate";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "SetWithdrawDate";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "AccountHolderKey";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "LastModifiedBy";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "LastModifiedDate";
$tdataaccountsLookUpFiltered[".masterListFields"][] = "AccountName";

$tdataaccountsLookUpFiltered[".inlineAddFields"] = array();

$tdataaccountsLookUpFiltered[".editFields"] = array();
$tdataaccountsLookUpFiltered[".editFields"][] = "AccountName";
$tdataaccountsLookUpFiltered[".editFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".editFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".editFields"][] = "ClientNo";

$tdataaccountsLookUpFiltered[".inlineEditFields"] = array();

$tdataaccountsLookUpFiltered[".updateSelectedFields"] = array();


$tdataaccountsLookUpFiltered[".exportFields"] = array();
$tdataaccountsLookUpFiltered[".exportFields"][] = "id";
$tdataaccountsLookUpFiltered[".exportFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".exportFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".exportFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".exportFields"][] = "AccountName";

$tdataaccountsLookUpFiltered[".importFields"] = array();
$tdataaccountsLookUpFiltered[".importFields"][] = "id";
$tdataaccountsLookUpFiltered[".importFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".importFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".importFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".importFields"][] = "AccountName";

$tdataaccountsLookUpFiltered[".printFields"] = array();
$tdataaccountsLookUpFiltered[".printFields"][] = "id";
$tdataaccountsLookUpFiltered[".printFields"][] = "AccountNumber";
$tdataaccountsLookUpFiltered[".printFields"][] = "AccountType";
$tdataaccountsLookUpFiltered[".printFields"][] = "ClientNo";
$tdataaccountsLookUpFiltered[".printFields"][] = "AccountName";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","id");
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




	$tdataaccountsLookUpFiltered["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","AccountNumber");
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




	$tdataaccountsLookUpFiltered["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","AccountBalance");
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








	$tdataaccountsLookUpFiltered["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","AccountHolder");
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








	$tdataaccountsLookUpFiltered["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","LastTransactionDate");
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








	$tdataaccountsLookUpFiltered["LastTransactionDate"] = $fdata;
//	OpeningBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OpeningBalance";
	$fdata["GoodName"] = "OpeningBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","OpeningBalance");
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








	$tdataaccountsLookUpFiltered["OpeningBalance"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","InterestRate");
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








	$tdataaccountsLookUpFiltered["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","SetWithdrawDate");
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








	$tdataaccountsLookUpFiltered["SetWithdrawDate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","AccountType");
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




	$tdataaccountsLookUpFiltered["AccountType"] = $fdata;
//	AccountHolderKey
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "AccountHolderKey";
	$fdata["GoodName"] = "AccountHolderKey";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","AccountHolderKey");
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








	$tdataaccountsLookUpFiltered["AccountHolderKey"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","ClientNo");
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




	$tdataaccountsLookUpFiltered["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","LastModifiedBy");
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








	$tdataaccountsLookUpFiltered["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","LastModifiedDate");
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








	$tdataaccountsLookUpFiltered["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("accountsLookUpFiltered","AccountName");
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




	$tdataaccountsLookUpFiltered["AccountName"] = $fdata;


$tables_data["accountsLookUpFiltered"]=&$tdataaccountsLookUpFiltered;
$field_labels["accountsLookUpFiltered"] = &$fieldLabelsaccountsLookUpFiltered;
$fieldToolTips["accountsLookUpFiltered"] = &$fieldToolTipsaccountsLookUpFiltered;
$page_titles["accountsLookUpFiltered"] = &$pageTitlesaccountsLookUpFiltered;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["accountsLookUpFiltered"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["accountsLookUpFiltered"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_accountsLookUpFiltered()
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
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "accountsLookUpFiltered";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "accountsLookUpFiltered";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "accountsLookUpFiltered";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "accountsLookUpFiltered";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "accountsLookUpFiltered";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto16["m_sql"] = "OpeningBalance";
$proto16["m_srcTableName"] = "accountsLookUpFiltered";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto18["m_sql"] = "InterestRate";
$proto18["m_srcTableName"] = "accountsLookUpFiltered";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto20["m_sql"] = "SetWithdrawDate";
$proto20["m_srcTableName"] = "accountsLookUpFiltered";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto22["m_sql"] = "AccountType";
$proto22["m_srcTableName"] = "accountsLookUpFiltered";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolderKey",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto24["m_sql"] = "AccountHolderKey";
$proto24["m_srcTableName"] = "accountsLookUpFiltered";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto26["m_sql"] = "ClientNo";
$proto26["m_srcTableName"] = "accountsLookUpFiltered";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto28["m_sql"] = "LastModifiedBy";
$proto28["m_srcTableName"] = "accountsLookUpFiltered";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto30["m_sql"] = "LastModifiedDate";
$proto30["m_srcTableName"] = "accountsLookUpFiltered";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto32["m_sql"] = "AccountName";
$proto32["m_srcTableName"] = "accountsLookUpFiltered";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "accounts";
$proto35["m_srcTableName"] = "accountsLookUpFiltered";
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
$proto34["m_srcTableName"] = "accountsLookUpFiltered";
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
	"m_srcTableName" => "accountsLookUpFiltered"
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
	"m_srcTableName" => "accountsLookUpFiltered"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 1;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="accountsLookUpFiltered";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accountsLookUpFiltered = createSqlQuery_accountsLookUpFiltered();


	
		;

														

$tdataaccountsLookUpFiltered[".sqlquery"] = $queryData_accountsLookUpFiltered;

$tableEvents["accountsLookUpFiltered"] = new eventsBase;
$tdataaccountsLookUpFiltered[".hasEvents"] = false;

?>