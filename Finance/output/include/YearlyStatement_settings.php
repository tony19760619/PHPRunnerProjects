<?php
require_once(getabspath("classes/cipherer.php"));




$tdataYearlyStatement = array();
	$tdataYearlyStatement[".truncateText"] = true;
	$tdataYearlyStatement[".NumberOfChars"] = 80;
	$tdataYearlyStatement[".ShortName"] = "YearlyStatement";
	$tdataYearlyStatement[".OwnerID"] = "ClientNo";
	$tdataYearlyStatement[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsYearlyStatement = array();
$fieldToolTipsYearlyStatement = array();
$pageTitlesYearlyStatement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsYearlyStatement["English"] = array();
	$fieldToolTipsYearlyStatement["English"] = array();
	$pageTitlesYearlyStatement["English"] = array();
	$fieldLabelsYearlyStatement["English"]["Amount"] = "Amount";
	$fieldToolTipsYearlyStatement["English"]["Amount"] = "";
	$fieldLabelsYearlyStatement["English"]["AccountType"] = "Account Type";
	$fieldToolTipsYearlyStatement["English"]["AccountType"] = "";
	$fieldLabelsYearlyStatement["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsYearlyStatement["English"]["InterestAmount"] = "";
	$fieldLabelsYearlyStatement["English"]["ClientNo"] = "Client No";
	$fieldToolTipsYearlyStatement["English"]["ClientNo"] = "";
	$fieldLabelsYearlyStatement["English"]["Year"] = "Year";
	$fieldToolTipsYearlyStatement["English"]["Year"] = "";
	$fieldLabelsYearlyStatement["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsYearlyStatement["English"]["AccountNumber"] = "";
	$fieldLabelsYearlyStatement["English"]["AccountName"] = "Account Name";
	$fieldToolTipsYearlyStatement["English"]["AccountName"] = "";
	if (count($fieldToolTipsYearlyStatement["English"]))
		$tdataYearlyStatement[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsYearlyStatement[""] = array();
	$fieldToolTipsYearlyStatement[""] = array();
	$pageTitlesYearlyStatement[""] = array();
	if (count($fieldToolTipsYearlyStatement[""]))
		$tdataYearlyStatement[".isUseToolTips"] = true;
}


	$tdataYearlyStatement[".NCSearch"] = true;



$tdataYearlyStatement[".shortTableName"] = "YearlyStatement";
$tdataYearlyStatement[".nSecOptions"] = 1;
$tdataYearlyStatement[".recsPerRowPrint"] = 1;
$tdataYearlyStatement[".mainTableOwnerID"] = "ClientNo";
$tdataYearlyStatement[".moveNext"] = 1;
$tdataYearlyStatement[".entityType"] = 1;

$tdataYearlyStatement[".strOriginalTableName"] = "transactions";

	



$tdataYearlyStatement[".showAddInPopup"] = false;

$tdataYearlyStatement[".showEditInPopup"] = false;

$tdataYearlyStatement[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataYearlyStatement[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataYearlyStatement[".fieldsForRegister"] = array();

$tdataYearlyStatement[".listAjax"] = false;

	$tdataYearlyStatement[".audit"] = false;

	$tdataYearlyStatement[".locking"] = false;



$tdataYearlyStatement[".list"] = true;






$tdataYearlyStatement[".exportTo"] = true;

$tdataYearlyStatement[".printFriendly"] = true;


$tdataYearlyStatement[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataYearlyStatement[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataYearlyStatement[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataYearlyStatement[".searchSaving"] = true;
//

$tdataYearlyStatement[".showSearchPanel"] = true;
		$tdataYearlyStatement[".flexibleSearch"] = true;

$tdataYearlyStatement[".isUseAjaxSuggest"] = true;

$tdataYearlyStatement[".rowHighlite"] = true;



$tdataYearlyStatement[".addPageEvents"] = false;

// use timepicker for search panel
$tdataYearlyStatement[".isUseTimeForSearch"] = false;





$tdataYearlyStatement[".allSearchFields"] = array();
$tdataYearlyStatement[".filterFields"] = array();
$tdataYearlyStatement[".requiredSearchFields"] = array();

$tdataYearlyStatement[".allSearchFields"][] = "AccountName";
	$tdataYearlyStatement[".allSearchFields"][] = "ClientNo";
	$tdataYearlyStatement[".allSearchFields"][] = "AccountNumber";
	$tdataYearlyStatement[".allSearchFields"][] = "Year";
	$tdataYearlyStatement[".allSearchFields"][] = "Amount";
	$tdataYearlyStatement[".allSearchFields"][] = "AccountType";
	$tdataYearlyStatement[".allSearchFields"][] = "InterestAmount";
	

$tdataYearlyStatement[".googleLikeFields"] = array();
$tdataYearlyStatement[".googleLikeFields"][] = "AccountName";
$tdataYearlyStatement[".googleLikeFields"][] = "AccountType";
$tdataYearlyStatement[".googleLikeFields"][] = "ClientNo";
$tdataYearlyStatement[".googleLikeFields"][] = "AccountNumber";
$tdataYearlyStatement[".googleLikeFields"][] = "Year";
$tdataYearlyStatement[".googleLikeFields"][] = "InterestAmount";
$tdataYearlyStatement[".googleLikeFields"][] = "Amount";


$tdataYearlyStatement[".advSearchFields"] = array();
$tdataYearlyStatement[".advSearchFields"][] = "AccountName";
$tdataYearlyStatement[".advSearchFields"][] = "ClientNo";
$tdataYearlyStatement[".advSearchFields"][] = "AccountNumber";
$tdataYearlyStatement[".advSearchFields"][] = "Year";
$tdataYearlyStatement[".advSearchFields"][] = "Amount";
$tdataYearlyStatement[".advSearchFields"][] = "AccountType";
$tdataYearlyStatement[".advSearchFields"][] = "InterestAmount";

$tdataYearlyStatement[".tableType"] = "list";

$tdataYearlyStatement[".printerPageOrientation"] = 0;
$tdataYearlyStatement[".nPrinterPageScale"] = 100;

$tdataYearlyStatement[".nPrinterSplitRecords"] = 40;

$tdataYearlyStatement[".nPrinterPDFSplitRecords"] = 40;



$tdataYearlyStatement[".geocodingEnabled"] = false;





$tdataYearlyStatement[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataYearlyStatement[".pageSize"] = 20;

$tdataYearlyStatement[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AccountName, ClientNo, AccountType, AccountNumber";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataYearlyStatement[".strOrderBy"] = $tstrOrderBy;

$tdataYearlyStatement[".orderindexes"] = array();
$tdataYearlyStatement[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "AccountName");
$tdataYearlyStatement[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "ClientNo");
$tdataYearlyStatement[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "AccountType");
$tdataYearlyStatement[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "AccountNumber");

$tdataYearlyStatement[".sqlHead"] = "SELECT AccountName,  AccountType,  ClientNo,  AccountNumber,  Year(`DateTime`) AS `Year`,  SUM(InterestAmount) AS InterestAmount,  SUM(Amount) AS Amount";
$tdataYearlyStatement[".sqlFrom"] = "FROM transactions";
$tdataYearlyStatement[".sqlWhereExpr"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$tdataYearlyStatement[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataYearlyStatement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataYearlyStatement[".arrGroupsPerPage"] = $arrGPP;

$tdataYearlyStatement[".highlightSearchResults"] = true;

$tableKeysYearlyStatement = array();
$tdataYearlyStatement[".Keys"] = $tableKeysYearlyStatement;

$tdataYearlyStatement[".listFields"] = array();
$tdataYearlyStatement[".listFields"][] = "AccountName";
$tdataYearlyStatement[".listFields"][] = "ClientNo";
$tdataYearlyStatement[".listFields"][] = "AccountNumber";
$tdataYearlyStatement[".listFields"][] = "Year";
$tdataYearlyStatement[".listFields"][] = "Amount";
$tdataYearlyStatement[".listFields"][] = "AccountType";
$tdataYearlyStatement[".listFields"][] = "InterestAmount";

$tdataYearlyStatement[".hideMobileList"] = array();


$tdataYearlyStatement[".viewFields"] = array();

$tdataYearlyStatement[".addFields"] = array();

$tdataYearlyStatement[".masterListFields"] = array();
$tdataYearlyStatement[".masterListFields"][] = "AccountName";
$tdataYearlyStatement[".masterListFields"][] = "ClientNo";
$tdataYearlyStatement[".masterListFields"][] = "AccountNumber";
$tdataYearlyStatement[".masterListFields"][] = "Year";
$tdataYearlyStatement[".masterListFields"][] = "Amount";
$tdataYearlyStatement[".masterListFields"][] = "AccountType";
$tdataYearlyStatement[".masterListFields"][] = "InterestAmount";

$tdataYearlyStatement[".inlineAddFields"] = array();

$tdataYearlyStatement[".editFields"] = array();

$tdataYearlyStatement[".inlineEditFields"] = array();

$tdataYearlyStatement[".updateSelectedFields"] = array();


$tdataYearlyStatement[".exportFields"] = array();
$tdataYearlyStatement[".exportFields"][] = "AccountName";
$tdataYearlyStatement[".exportFields"][] = "ClientNo";
$tdataYearlyStatement[".exportFields"][] = "AccountNumber";
$tdataYearlyStatement[".exportFields"][] = "Year";
$tdataYearlyStatement[".exportFields"][] = "Amount";
$tdataYearlyStatement[".exportFields"][] = "AccountType";
$tdataYearlyStatement[".exportFields"][] = "InterestAmount";

$tdataYearlyStatement[".importFields"] = array();

$tdataYearlyStatement[".printFields"] = array();
$tdataYearlyStatement[".printFields"][] = "AccountName";
$tdataYearlyStatement[".printFields"][] = "ClientNo";
$tdataYearlyStatement[".printFields"][] = "AccountNumber";
$tdataYearlyStatement[".printFields"][] = "Year";
$tdataYearlyStatement[".printFields"][] = "Amount";
$tdataYearlyStatement[".printFields"][] = "AccountType";
$tdataYearlyStatement[".printFields"][] = "InterestAmount";

//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	

	
	
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




	$tdataYearlyStatement["AccountName"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
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




	$tdataYearlyStatement["AccountType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(FirstName,' ',LastName,' [',ClientNo,']')";

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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(FirstName,' ',LastName,' [',ClientNo,']')";

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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataYearlyStatement["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
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




	$tdataYearlyStatement["AccountNumber"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","Year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Year(`DateTime`)";

	
	
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




	$tdataYearlyStatement["Year"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","InterestAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InterestAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(InterestAmount)";

	
	
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




	$tdataYearlyStatement["InterestAmount"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("YearlyStatement","Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(Amount)";

	
	
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




	$tdataYearlyStatement["Amount"] = $fdata;


$tables_data["YearlyStatement"]=&$tdataYearlyStatement;
$field_labels["YearlyStatement"] = &$fieldLabelsYearlyStatement;
$fieldToolTips["YearlyStatement"] = &$fieldToolTipsYearlyStatement;
$page_titles["YearlyStatement"] = &$pageTitlesYearlyStatement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["YearlyStatement"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["YearlyStatement"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_YearlyStatement()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AccountName,  AccountType,  ClientNo,  AccountNumber,  Year(`DateTime`) AS `Year`,  SUM(InterestAmount) AS InterestAmount,  SUM(Amount) AS Amount";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto0["m_strOrderBy"] = "ORDER BY AccountName, ClientNo, AccountType, AccountNumber";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "1 =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "in('Approved')";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))";
$proto10["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
						$proto12=array();
$proto12["m_sql"] = "(WithdrawlNo is not null) OR (WithdrawlNo <>'')";
$proto12["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(WithdrawlNo is not null) OR (WithdrawlNo <>'')"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
						$proto14=array();
$proto14["m_sql"] = "WithdrawlNo is not null";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "is not null";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto12["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "WithdrawlNo <>''";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "<>''";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto12["m_contained"][]=$obj;
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto10["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "WithdrawlStatus in('Approved')";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "in('Approved')";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto10["m_contained"][]=$obj;
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))";
$proto20["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
						$proto22=array();
$proto22["m_sql"] = "(LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')";
$proto22["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
						$proto24=array();
$proto24["m_sql"] = "LoanCreditPaymentNo is not null";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "is not null";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = true;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto22["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "LoanCreditPaymentNo <>''";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "<>''";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = true;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto22["m_contained"][]=$obj;
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = true;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto20["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "LoanCreditApplicationStatus in('Approved')";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditApplicationStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "in('Approved')";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = true;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto20["m_contained"][]=$obj;
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = true;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto6["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "in('Approved')";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = true;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto34["m_sql"] = "AccountName";
$proto34["m_srcTableName"] = "YearlyStatement";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto36["m_sql"] = "AccountType";
$proto36["m_srcTableName"] = "YearlyStatement";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto38["m_sql"] = "ClientNo";
$proto38["m_srcTableName"] = "YearlyStatement";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto40["m_sql"] = "AccountNumber";
$proto40["m_srcTableName"] = "YearlyStatement";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`DateTime`"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "Year";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "Year(`DateTime`)";
$proto42["m_srcTableName"] = "YearlyStatement";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "Year";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$proto46=array();
$proto46["m_functiontype"] = "SQLF_SUM";
$proto46["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto46["m_arguments"][]=$obj;
$proto46["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto46);

$proto45["m_sql"] = "SUM(InterestAmount)";
$proto45["m_srcTableName"] = "YearlyStatement";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "InterestAmount";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$proto49=array();
$proto49["m_functiontype"] = "SQLF_SUM";
$proto49["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto49);

$proto48["m_sql"] = "SUM(Amount)";
$proto48["m_srcTableName"] = "YearlyStatement";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "Amount";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strName"] = "transactions";
$proto52["m_srcTableName"] = "YearlyStatement";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "id";
$proto52["m_columns"][] = "DebitAccount";
$proto52["m_columns"][] = "CreditAccount";
$proto52["m_columns"][] = "DebitAccountTransactionCharge";
$proto52["m_columns"][] = "CreditAccountTransactionCharge";
$proto52["m_columns"][] = "Amount";
$proto52["m_columns"][] = "DateTime";
$proto52["m_columns"][] = "Description";
$proto52["m_columns"][] = "CashDepositNo";
$proto52["m_columns"][] = "CashDepositorName";
$proto52["m_columns"][] = "CashDepositType";
$proto52["m_columns"][] = "WithdrawlNo";
$proto52["m_columns"][] = "WithdrawlName";
$proto52["m_columns"][] = "WithdrawlType";
$proto52["m_columns"][] = "LoanPaymentNo";
$proto52["m_columns"][] = "LoanPaymentName";
$proto52["m_columns"][] = "LoanPaymentPurpose";
$proto52["m_columns"][] = "LoanCreditPaymentNo";
$proto52["m_columns"][] = "LoanCreditPaymentName";
$proto52["m_columns"][] = "LoanCreditPaymentPurpose";
$proto52["m_columns"][] = "AccountType";
$proto52["m_columns"][] = "InterestAmount";
$proto52["m_columns"][] = "PrincipalAmount";
$proto52["m_columns"][] = "WithdrawlStatus";
$proto52["m_columns"][] = "NEFTTransferStatus";
$proto52["m_columns"][] = "LoanCreditApplicationStatus";
$proto52["m_columns"][] = "LoanCreditWitness";
$proto52["m_columns"][] = "NEFTTransferNo";
$proto52["m_columns"][] = "NEFTTransferDepositorName";
$proto52["m_columns"][] = "TransactionType";
$proto52["m_columns"][] = "Balance";
$proto52["m_columns"][] = "AccountNumber";
$proto52["m_columns"][] = "ClientNo";
$proto52["m_columns"][] = "LastModifiedBy";
$proto52["m_columns"][] = "LastModifiedDate";
$proto52["m_columns"][] = "AccountName";
$proto52["m_columns"][] = "TransactionNo";
$proto52["m_columns"][] = "TransactionStatus";
$proto52["m_columns"][] = "SelectedClientNo";
$proto52["m_columns"][] = "LoanPaymentStatus";
$proto52["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "transactions";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "YearlyStatement";
$proto53=array();
$proto53["m_sql"] = "";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto0["m_groupby"][]=$obj;
												$proto57=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto0["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto0["m_groupby"][]=$obj;
												$proto61=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto61["m_column"]=$obj;
$obj = new SQLGroupByItem($proto61);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 1;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
												$proto65=array();
						$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto65["m_column"]=$obj;
$proto65["m_bAsc"] = 1;
$proto65["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto65);

$proto0["m_orderby"][]=$obj;					
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto67["m_column"]=$obj;
$proto67["m_bAsc"] = 1;
$proto67["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto67);

$proto0["m_orderby"][]=$obj;					
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyStatement"
));

$proto69["m_column"]=$obj;
$proto69["m_bAsc"] = 1;
$proto69["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto69);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="YearlyStatement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_YearlyStatement = createSqlQuery_YearlyStatement();


	
		;

							

$tdataYearlyStatement[".sqlquery"] = $queryData_YearlyStatement;

$tableEvents["YearlyStatement"] = new eventsBase;
$tdataYearlyStatement[".hasEvents"] = false;

?>