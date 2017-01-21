<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBalaceEnquiry = array();
	$tdataBalaceEnquiry[".truncateText"] = true;
	$tdataBalaceEnquiry[".NumberOfChars"] = 80;
	$tdataBalaceEnquiry[".ShortName"] = "BalaceEnquiry";
	$tdataBalaceEnquiry[".OwnerID"] = "";
	$tdataBalaceEnquiry[".OriginalTable"] = "accounts";

//	field labels
$fieldLabelsBalaceEnquiry = array();
$fieldToolTipsBalaceEnquiry = array();
$pageTitlesBalaceEnquiry = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBalaceEnquiry["English"] = array();
	$fieldToolTipsBalaceEnquiry["English"] = array();
	$pageTitlesBalaceEnquiry["English"] = array();
	$fieldLabelsBalaceEnquiry["English"]["id"] = "Id";
	$fieldToolTipsBalaceEnquiry["English"]["id"] = "";
	$fieldLabelsBalaceEnquiry["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsBalaceEnquiry["English"]["AccountNumber"] = "";
	$fieldLabelsBalaceEnquiry["English"]["AccountBalance"] = "Account Balance";
	$fieldToolTipsBalaceEnquiry["English"]["AccountBalance"] = "";
	$fieldLabelsBalaceEnquiry["English"]["AccountHolder"] = "Account Holder";
	$fieldToolTipsBalaceEnquiry["English"]["AccountHolder"] = "";
	$fieldLabelsBalaceEnquiry["English"]["LastTransactionDate"] = "Last Transaction Date";
	$fieldToolTipsBalaceEnquiry["English"]["LastTransactionDate"] = "";
	$fieldLabelsBalaceEnquiry["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsBalaceEnquiry["English"]["InterestRate"] = "";
	$fieldLabelsBalaceEnquiry["English"]["AccountType"] = "Account Type";
	$fieldToolTipsBalaceEnquiry["English"]["AccountType"] = "";
	$fieldLabelsBalaceEnquiry["English"]["ClientNo"] = "Client No";
	$fieldToolTipsBalaceEnquiry["English"]["ClientNo"] = "";
	$fieldLabelsBalaceEnquiry["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsBalaceEnquiry["English"]["LastModifiedBy"] = "";
	$fieldLabelsBalaceEnquiry["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsBalaceEnquiry["English"]["LastModifiedDate"] = "";
	$fieldLabelsBalaceEnquiry["English"]["AccountName"] = "Account Name";
	$fieldToolTipsBalaceEnquiry["English"]["AccountName"] = "";
	if (count($fieldToolTipsBalaceEnquiry["English"]))
		$tdataBalaceEnquiry[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBalaceEnquiry[""] = array();
	$fieldToolTipsBalaceEnquiry[""] = array();
	$pageTitlesBalaceEnquiry[""] = array();
	if (count($fieldToolTipsBalaceEnquiry[""]))
		$tdataBalaceEnquiry[".isUseToolTips"] = true;
}


	$tdataBalaceEnquiry[".NCSearch"] = true;



$tdataBalaceEnquiry[".shortTableName"] = "BalaceEnquiry";
$tdataBalaceEnquiry[".nSecOptions"] = 0;
$tdataBalaceEnquiry[".recsPerRowPrint"] = 1;
$tdataBalaceEnquiry[".mainTableOwnerID"] = "";
$tdataBalaceEnquiry[".moveNext"] = 1;
$tdataBalaceEnquiry[".entityType"] = 1;

$tdataBalaceEnquiry[".strOriginalTableName"] = "accounts";

	



$tdataBalaceEnquiry[".showAddInPopup"] = false;

$tdataBalaceEnquiry[".showEditInPopup"] = false;

$tdataBalaceEnquiry[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBalaceEnquiry[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBalaceEnquiry[".fieldsForRegister"] = array();

$tdataBalaceEnquiry[".listAjax"] = false;

	$tdataBalaceEnquiry[".audit"] = false;

	$tdataBalaceEnquiry[".locking"] = false;



$tdataBalaceEnquiry[".list"] = true;




$tdataBalaceEnquiry[".view"] = true;

$tdataBalaceEnquiry[".import"] = true;

$tdataBalaceEnquiry[".exportTo"] = true;

$tdataBalaceEnquiry[".printFriendly"] = true;


$tdataBalaceEnquiry[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataBalaceEnquiry[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataBalaceEnquiry[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataBalaceEnquiry[".searchSaving"] = true;
//

$tdataBalaceEnquiry[".showSearchPanel"] = true;
		$tdataBalaceEnquiry[".flexibleSearch"] = true;

$tdataBalaceEnquiry[".isUseAjaxSuggest"] = true;

$tdataBalaceEnquiry[".rowHighlite"] = true;



$tdataBalaceEnquiry[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBalaceEnquiry[".isUseTimeForSearch"] = false;





$tdataBalaceEnquiry[".allSearchFields"] = array();
$tdataBalaceEnquiry[".filterFields"] = array();
$tdataBalaceEnquiry[".requiredSearchFields"] = array();

$tdataBalaceEnquiry[".allSearchFields"][] = "id";
	$tdataBalaceEnquiry[".allSearchFields"][] = "AccountName";
	$tdataBalaceEnquiry[".allSearchFields"][] = "ClientNo";
	$tdataBalaceEnquiry[".allSearchFields"][] = "AccountType";
	$tdataBalaceEnquiry[".allSearchFields"][] = "AccountNumber";
	$tdataBalaceEnquiry[".allSearchFields"][] = "AccountBalance";
	$tdataBalaceEnquiry[".allSearchFields"][] = "LastTransactionDate";
	$tdataBalaceEnquiry[".allSearchFields"][] = "InterestRate";
	$tdataBalaceEnquiry[".allSearchFields"][] = "LastModifiedBy";
	$tdataBalaceEnquiry[".allSearchFields"][] = "LastModifiedDate";
	

$tdataBalaceEnquiry[".googleLikeFields"] = array();
$tdataBalaceEnquiry[".googleLikeFields"][] = "id";
$tdataBalaceEnquiry[".googleLikeFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".googleLikeFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".googleLikeFields"][] = "AccountHolder";
$tdataBalaceEnquiry[".googleLikeFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".googleLikeFields"][] = "InterestRate";
$tdataBalaceEnquiry[".googleLikeFields"][] = "AccountType";
$tdataBalaceEnquiry[".googleLikeFields"][] = "ClientNo";
$tdataBalaceEnquiry[".googleLikeFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".googleLikeFields"][] = "LastModifiedDate";
$tdataBalaceEnquiry[".googleLikeFields"][] = "AccountName";


$tdataBalaceEnquiry[".advSearchFields"] = array();
$tdataBalaceEnquiry[".advSearchFields"][] = "id";
$tdataBalaceEnquiry[".advSearchFields"][] = "AccountName";
$tdataBalaceEnquiry[".advSearchFields"][] = "ClientNo";
$tdataBalaceEnquiry[".advSearchFields"][] = "AccountType";
$tdataBalaceEnquiry[".advSearchFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".advSearchFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".advSearchFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".advSearchFields"][] = "InterestRate";
$tdataBalaceEnquiry[".advSearchFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".advSearchFields"][] = "LastModifiedDate";

$tdataBalaceEnquiry[".tableType"] = "list";

$tdataBalaceEnquiry[".printerPageOrientation"] = 0;
$tdataBalaceEnquiry[".nPrinterPageScale"] = 100;

$tdataBalaceEnquiry[".nPrinterSplitRecords"] = 40;

$tdataBalaceEnquiry[".nPrinterPDFSplitRecords"] = 40;



$tdataBalaceEnquiry[".geocodingEnabled"] = false;





$tdataBalaceEnquiry[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataBalaceEnquiry[".pageSize"] = 20;

$tdataBalaceEnquiry[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBalaceEnquiry[".strOrderBy"] = $tstrOrderBy;

$tdataBalaceEnquiry[".orderindexes"] = array();
$tdataBalaceEnquiry[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataBalaceEnquiry[".sqlHead"] = "SELECT id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  InterestRate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
$tdataBalaceEnquiry[".sqlFrom"] = "FROM accounts";
$tdataBalaceEnquiry[".sqlWhereExpr"] = "";
$tdataBalaceEnquiry[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBalaceEnquiry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBalaceEnquiry[".arrGroupsPerPage"] = $arrGPP;

$tdataBalaceEnquiry[".highlightSearchResults"] = true;

$tableKeysBalaceEnquiry = array();
$tableKeysBalaceEnquiry[] = "id";
$tdataBalaceEnquiry[".Keys"] = $tableKeysBalaceEnquiry;

$tdataBalaceEnquiry[".listFields"] = array();
$tdataBalaceEnquiry[".listFields"][] = "id";
$tdataBalaceEnquiry[".listFields"][] = "AccountName";
$tdataBalaceEnquiry[".listFields"][] = "ClientNo";
$tdataBalaceEnquiry[".listFields"][] = "AccountType";
$tdataBalaceEnquiry[".listFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".listFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".listFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".listFields"][] = "InterestRate";
$tdataBalaceEnquiry[".listFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".listFields"][] = "LastModifiedDate";

$tdataBalaceEnquiry[".hideMobileList"] = array();


$tdataBalaceEnquiry[".viewFields"] = array();
$tdataBalaceEnquiry[".viewFields"][] = "id";
$tdataBalaceEnquiry[".viewFields"][] = "AccountName";
$tdataBalaceEnquiry[".viewFields"][] = "ClientNo";
$tdataBalaceEnquiry[".viewFields"][] = "AccountType";
$tdataBalaceEnquiry[".viewFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".viewFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".viewFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".viewFields"][] = "InterestRate";
$tdataBalaceEnquiry[".viewFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".viewFields"][] = "LastModifiedDate";

$tdataBalaceEnquiry[".addFields"] = array();

$tdataBalaceEnquiry[".masterListFields"] = array();
$tdataBalaceEnquiry[".masterListFields"][] = "AccountHolder";
$tdataBalaceEnquiry[".masterListFields"][] = "id";
$tdataBalaceEnquiry[".masterListFields"][] = "AccountName";
$tdataBalaceEnquiry[".masterListFields"][] = "ClientNo";
$tdataBalaceEnquiry[".masterListFields"][] = "AccountType";
$tdataBalaceEnquiry[".masterListFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".masterListFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".masterListFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".masterListFields"][] = "InterestRate";
$tdataBalaceEnquiry[".masterListFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".masterListFields"][] = "LastModifiedDate";

$tdataBalaceEnquiry[".inlineAddFields"] = array();

$tdataBalaceEnquiry[".editFields"] = array();

$tdataBalaceEnquiry[".inlineEditFields"] = array();

$tdataBalaceEnquiry[".updateSelectedFields"] = array();


$tdataBalaceEnquiry[".exportFields"] = array();
$tdataBalaceEnquiry[".exportFields"][] = "id";
$tdataBalaceEnquiry[".exportFields"][] = "AccountName";
$tdataBalaceEnquiry[".exportFields"][] = "ClientNo";
$tdataBalaceEnquiry[".exportFields"][] = "AccountType";
$tdataBalaceEnquiry[".exportFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".exportFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".exportFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".exportFields"][] = "InterestRate";
$tdataBalaceEnquiry[".exportFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".exportFields"][] = "LastModifiedDate";

$tdataBalaceEnquiry[".importFields"] = array();
$tdataBalaceEnquiry[".importFields"][] = "id";
$tdataBalaceEnquiry[".importFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".importFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".importFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".importFields"][] = "InterestRate";
$tdataBalaceEnquiry[".importFields"][] = "AccountType";
$tdataBalaceEnquiry[".importFields"][] = "ClientNo";
$tdataBalaceEnquiry[".importFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".importFields"][] = "LastModifiedDate";
$tdataBalaceEnquiry[".importFields"][] = "AccountName";

$tdataBalaceEnquiry[".printFields"] = array();
$tdataBalaceEnquiry[".printFields"][] = "id";
$tdataBalaceEnquiry[".printFields"][] = "AccountName";
$tdataBalaceEnquiry[".printFields"][] = "ClientNo";
$tdataBalaceEnquiry[".printFields"][] = "AccountType";
$tdataBalaceEnquiry[".printFields"][] = "AccountNumber";
$tdataBalaceEnquiry[".printFields"][] = "AccountBalance";
$tdataBalaceEnquiry[".printFields"][] = "LastTransactionDate";
$tdataBalaceEnquiry[".printFields"][] = "InterestRate";
$tdataBalaceEnquiry[".printFields"][] = "LastModifiedBy";
$tdataBalaceEnquiry[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","id");
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




	$tdataBalaceEnquiry["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","AccountNumber");
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
	$edata["LookupTable"] = "accounts";
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




	$tdataBalaceEnquiry["AccountNumber"] = $fdata;
//	AccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountBalance";
	$fdata["GoodName"] = "AccountBalance";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","AccountBalance");
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




	$tdataBalaceEnquiry["AccountBalance"] = $fdata;
//	AccountHolder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountHolder";
	$fdata["GoodName"] = "AccountHolder";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","AccountHolder");
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








	$tdataBalaceEnquiry["AccountHolder"] = $fdata;
//	LastTransactionDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LastTransactionDate";
	$fdata["GoodName"] = "LastTransactionDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","LastTransactionDate");
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




	$tdataBalaceEnquiry["LastTransactionDate"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","InterestRate");
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




	$tdataBalaceEnquiry["InterestRate"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","AccountType");
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




	$tdataBalaceEnquiry["AccountType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","ClientNo");
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
	$edata["LookupTable"] = "usersLookUp";
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




	$tdataBalaceEnquiry["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","LastModifiedBy");
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




	$tdataBalaceEnquiry["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","LastModifiedDate");
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




	$tdataBalaceEnquiry["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "accounts";
	$fdata["Label"] = GetFieldLabel("BalaceEnquiry","AccountName");
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




	$tdataBalaceEnquiry["AccountName"] = $fdata;


$tables_data["BalaceEnquiry"]=&$tdataBalaceEnquiry;
$field_labels["BalaceEnquiry"] = &$fieldLabelsBalaceEnquiry;
$fieldToolTips["BalaceEnquiry"] = &$fieldToolTipsBalaceEnquiry;
$page_titles["BalaceEnquiry"] = &$pageTitlesBalaceEnquiry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BalaceEnquiry"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["BalaceEnquiry"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BalaceEnquiry()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  AccountBalance,  AccountHolder,  LastTransactionDate,  InterestRate,  AccountType,  ClientNo,  LastModifiedBy,  LastModifiedDate,  AccountName";
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
	"m_srcTableName" => "BalaceEnquiry"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "BalaceEnquiry";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "BalaceEnquiry";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountBalance",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto10["m_sql"] = "AccountBalance";
$proto10["m_srcTableName"] = "BalaceEnquiry";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountHolder",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto12["m_sql"] = "AccountHolder";
$proto12["m_srcTableName"] = "BalaceEnquiry";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LastTransactionDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto14["m_sql"] = "LastTransactionDate";
$proto14["m_srcTableName"] = "BalaceEnquiry";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto16["m_sql"] = "InterestRate";
$proto16["m_srcTableName"] = "BalaceEnquiry";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto18["m_sql"] = "AccountType";
$proto18["m_srcTableName"] = "BalaceEnquiry";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto20["m_sql"] = "ClientNo";
$proto20["m_srcTableName"] = "BalaceEnquiry";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto22["m_sql"] = "LastModifiedBy";
$proto22["m_srcTableName"] = "BalaceEnquiry";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto24["m_sql"] = "LastModifiedDate";
$proto24["m_srcTableName"] = "BalaceEnquiry";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto26["m_sql"] = "AccountName";
$proto26["m_srcTableName"] = "BalaceEnquiry";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "accounts";
$proto29["m_srcTableName"] = "BalaceEnquiry";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "AccountNumber";
$proto29["m_columns"][] = "AccountBalance";
$proto29["m_columns"][] = "AccountHolder";
$proto29["m_columns"][] = "LastTransactionDate";
$proto29["m_columns"][] = "OpeningBalance";
$proto29["m_columns"][] = "InterestRate";
$proto29["m_columns"][] = "SetWithdrawDate";
$proto29["m_columns"][] = "AccountType";
$proto29["m_columns"][] = "AccountHolderKey";
$proto29["m_columns"][] = "ClientNo";
$proto29["m_columns"][] = "AccountName";
$proto29["m_columns"][] = "LastModifiedBy";
$proto29["m_columns"][] = "LastModifiedDate";
$proto29["m_columns"][] = "LoanCreditPaymentPurpose";
$proto29["m_columns"][] = "LoanCreditWitness";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "accounts";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "BalaceEnquiry";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "accounts",
	"m_srcTableName" => "BalaceEnquiry"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="BalaceEnquiry";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BalaceEnquiry = createSqlQuery_BalaceEnquiry();


	
		;

											

$tdataBalaceEnquiry[".sqlquery"] = $queryData_BalaceEnquiry;

$tableEvents["BalaceEnquiry"] = new eventsBase;
$tdataBalaceEnquiry[".hasEvents"] = false;

?>