<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthlyStatement = array();
	$tdataMonthlyStatement[".truncateText"] = true;
	$tdataMonthlyStatement[".NumberOfChars"] = 80;
	$tdataMonthlyStatement[".ShortName"] = "MonthlyStatement";
	$tdataMonthlyStatement[".OwnerID"] = "ClientNo";
	$tdataMonthlyStatement[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsMonthlyStatement = array();
$fieldToolTipsMonthlyStatement = array();
$pageTitlesMonthlyStatement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthlyStatement["English"] = array();
	$fieldToolTipsMonthlyStatement["English"] = array();
	$pageTitlesMonthlyStatement["English"] = array();
	$fieldLabelsMonthlyStatement["English"]["Amount"] = "Amount";
	$fieldToolTipsMonthlyStatement["English"]["Amount"] = "";
	$fieldLabelsMonthlyStatement["English"]["AccountType"] = "Account Type";
	$fieldToolTipsMonthlyStatement["English"]["AccountType"] = "";
	$fieldLabelsMonthlyStatement["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsMonthlyStatement["English"]["InterestAmount"] = "";
	$fieldLabelsMonthlyStatement["English"]["ClientNo"] = "Client No";
	$fieldToolTipsMonthlyStatement["English"]["ClientNo"] = "";
	$fieldLabelsMonthlyStatement["English"]["Year"] = "Year";
	$fieldToolTipsMonthlyStatement["English"]["Year"] = "";
	$fieldLabelsMonthlyStatement["English"]["Month"] = "Month";
	$fieldToolTipsMonthlyStatement["English"]["Month"] = "";
	$fieldLabelsMonthlyStatement["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsMonthlyStatement["English"]["AccountNumber"] = "";
	$fieldLabelsMonthlyStatement["English"]["AccountName"] = "Account Name";
	$fieldToolTipsMonthlyStatement["English"]["AccountName"] = "";
	if (count($fieldToolTipsMonthlyStatement["English"]))
		$tdataMonthlyStatement[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthlyStatement[""] = array();
	$fieldToolTipsMonthlyStatement[""] = array();
	$pageTitlesMonthlyStatement[""] = array();
	if (count($fieldToolTipsMonthlyStatement[""]))
		$tdataMonthlyStatement[".isUseToolTips"] = true;
}


	$tdataMonthlyStatement[".NCSearch"] = true;



$tdataMonthlyStatement[".shortTableName"] = "MonthlyStatement";
$tdataMonthlyStatement[".nSecOptions"] = 1;
$tdataMonthlyStatement[".recsPerRowPrint"] = 1;
$tdataMonthlyStatement[".mainTableOwnerID"] = "ClientNo";
$tdataMonthlyStatement[".moveNext"] = 1;
$tdataMonthlyStatement[".entityType"] = 1;

$tdataMonthlyStatement[".strOriginalTableName"] = "transactions";

	



$tdataMonthlyStatement[".showAddInPopup"] = false;

$tdataMonthlyStatement[".showEditInPopup"] = false;

$tdataMonthlyStatement[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthlyStatement[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthlyStatement[".fieldsForRegister"] = array();

$tdataMonthlyStatement[".listAjax"] = false;

	$tdataMonthlyStatement[".audit"] = false;

	$tdataMonthlyStatement[".locking"] = false;



$tdataMonthlyStatement[".list"] = true;





$tdataMonthlyStatement[".import"] = true;

$tdataMonthlyStatement[".exportTo"] = true;

$tdataMonthlyStatement[".printFriendly"] = true;


$tdataMonthlyStatement[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMonthlyStatement[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMonthlyStatement[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMonthlyStatement[".searchSaving"] = true;
//

$tdataMonthlyStatement[".showSearchPanel"] = true;
		$tdataMonthlyStatement[".flexibleSearch"] = true;

$tdataMonthlyStatement[".isUseAjaxSuggest"] = true;

$tdataMonthlyStatement[".rowHighlite"] = true;



$tdataMonthlyStatement[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthlyStatement[".isUseTimeForSearch"] = false;





$tdataMonthlyStatement[".allSearchFields"] = array();
$tdataMonthlyStatement[".filterFields"] = array();
$tdataMonthlyStatement[".requiredSearchFields"] = array();

$tdataMonthlyStatement[".allSearchFields"][] = "AccountName";
	$tdataMonthlyStatement[".allSearchFields"][] = "ClientNo";
	$tdataMonthlyStatement[".allSearchFields"][] = "AccountType";
	$tdataMonthlyStatement[".allSearchFields"][] = "AccountNumber";
	$tdataMonthlyStatement[".allSearchFields"][] = "Year";
	$tdataMonthlyStatement[".allSearchFields"][] = "Month";
	$tdataMonthlyStatement[".allSearchFields"][] = "InterestAmount";
	$tdataMonthlyStatement[".allSearchFields"][] = "Amount";
	

$tdataMonthlyStatement[".googleLikeFields"] = array();
$tdataMonthlyStatement[".googleLikeFields"][] = "AccountName";
$tdataMonthlyStatement[".googleLikeFields"][] = "ClientNo";
$tdataMonthlyStatement[".googleLikeFields"][] = "AccountType";
$tdataMonthlyStatement[".googleLikeFields"][] = "AccountNumber";
$tdataMonthlyStatement[".googleLikeFields"][] = "Year";
$tdataMonthlyStatement[".googleLikeFields"][] = "Month";
$tdataMonthlyStatement[".googleLikeFields"][] = "InterestAmount";
$tdataMonthlyStatement[".googleLikeFields"][] = "Amount";


$tdataMonthlyStatement[".advSearchFields"] = array();
$tdataMonthlyStatement[".advSearchFields"][] = "AccountName";
$tdataMonthlyStatement[".advSearchFields"][] = "ClientNo";
$tdataMonthlyStatement[".advSearchFields"][] = "AccountType";
$tdataMonthlyStatement[".advSearchFields"][] = "AccountNumber";
$tdataMonthlyStatement[".advSearchFields"][] = "Year";
$tdataMonthlyStatement[".advSearchFields"][] = "Month";
$tdataMonthlyStatement[".advSearchFields"][] = "InterestAmount";
$tdataMonthlyStatement[".advSearchFields"][] = "Amount";

$tdataMonthlyStatement[".tableType"] = "list";

$tdataMonthlyStatement[".printerPageOrientation"] = 0;
$tdataMonthlyStatement[".nPrinterPageScale"] = 100;

$tdataMonthlyStatement[".nPrinterSplitRecords"] = 40;

$tdataMonthlyStatement[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthlyStatement[".geocodingEnabled"] = false;





$tdataMonthlyStatement[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataMonthlyStatement[".pageSize"] = 20;

$tdataMonthlyStatement[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AccountName, ClientNo, AccountType, AccountNumber";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthlyStatement[".strOrderBy"] = $tstrOrderBy;

$tdataMonthlyStatement[".orderindexes"] = array();
$tdataMonthlyStatement[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "AccountName");
$tdataMonthlyStatement[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "ClientNo");
$tdataMonthlyStatement[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "AccountType");
$tdataMonthlyStatement[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "AccountNumber");

$tdataMonthlyStatement[".sqlHead"] = "SELECT AccountName,  ClientNo,  AccountType,  AccountNumber,  Year(`DateTime`) AS `Year`,  Month(`DateTime`) AS `Month`,  SUM(InterestAmount) AS InterestAmount,  SUM(Amount) AS Amount";
$tdataMonthlyStatement[".sqlFrom"] = "FROM transactions";
$tdataMonthlyStatement[".sqlWhereExpr"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$tdataMonthlyStatement[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthlyStatement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthlyStatement[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthlyStatement[".highlightSearchResults"] = true;

$tableKeysMonthlyStatement = array();
$tdataMonthlyStatement[".Keys"] = $tableKeysMonthlyStatement;

$tdataMonthlyStatement[".listFields"] = array();
$tdataMonthlyStatement[".listFields"][] = "AccountName";
$tdataMonthlyStatement[".listFields"][] = "AccountNumber";
$tdataMonthlyStatement[".listFields"][] = "Year";
$tdataMonthlyStatement[".listFields"][] = "Month";
$tdataMonthlyStatement[".listFields"][] = "Amount";
$tdataMonthlyStatement[".listFields"][] = "AccountType";
$tdataMonthlyStatement[".listFields"][] = "InterestAmount";
$tdataMonthlyStatement[".listFields"][] = "ClientNo";

$tdataMonthlyStatement[".hideMobileList"] = array();


$tdataMonthlyStatement[".viewFields"] = array();

$tdataMonthlyStatement[".addFields"] = array();

$tdataMonthlyStatement[".masterListFields"] = array();
$tdataMonthlyStatement[".masterListFields"][] = "AccountName";
$tdataMonthlyStatement[".masterListFields"][] = "ClientNo";
$tdataMonthlyStatement[".masterListFields"][] = "AccountType";
$tdataMonthlyStatement[".masterListFields"][] = "AccountNumber";
$tdataMonthlyStatement[".masterListFields"][] = "Year";
$tdataMonthlyStatement[".masterListFields"][] = "Month";
$tdataMonthlyStatement[".masterListFields"][] = "InterestAmount";
$tdataMonthlyStatement[".masterListFields"][] = "Amount";

$tdataMonthlyStatement[".inlineAddFields"] = array();

$tdataMonthlyStatement[".editFields"] = array();

$tdataMonthlyStatement[".inlineEditFields"] = array();

$tdataMonthlyStatement[".updateSelectedFields"] = array();


$tdataMonthlyStatement[".exportFields"] = array();
$tdataMonthlyStatement[".exportFields"][] = "AccountName";
$tdataMonthlyStatement[".exportFields"][] = "ClientNo";
$tdataMonthlyStatement[".exportFields"][] = "AccountType";
$tdataMonthlyStatement[".exportFields"][] = "AccountNumber";
$tdataMonthlyStatement[".exportFields"][] = "Year";
$tdataMonthlyStatement[".exportFields"][] = "Month";
$tdataMonthlyStatement[".exportFields"][] = "InterestAmount";
$tdataMonthlyStatement[".exportFields"][] = "Amount";

$tdataMonthlyStatement[".importFields"] = array();
$tdataMonthlyStatement[".importFields"][] = "AccountName";
$tdataMonthlyStatement[".importFields"][] = "ClientNo";
$tdataMonthlyStatement[".importFields"][] = "AccountType";
$tdataMonthlyStatement[".importFields"][] = "AccountNumber";
$tdataMonthlyStatement[".importFields"][] = "Year";
$tdataMonthlyStatement[".importFields"][] = "Month";
$tdataMonthlyStatement[".importFields"][] = "InterestAmount";
$tdataMonthlyStatement[".importFields"][] = "Amount";

$tdataMonthlyStatement[".printFields"] = array();
$tdataMonthlyStatement[".printFields"][] = "AccountName";
$tdataMonthlyStatement[".printFields"][] = "ClientNo";
$tdataMonthlyStatement[".printFields"][] = "AccountType";
$tdataMonthlyStatement[".printFields"][] = "AccountNumber";
$tdataMonthlyStatement[".printFields"][] = "Year";
$tdataMonthlyStatement[".printFields"][] = "Month";
$tdataMonthlyStatement[".printFields"][] = "InterestAmount";
$tdataMonthlyStatement[".printFields"][] = "Amount";

//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","AccountName");
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




	$tdataMonthlyStatement["AccountName"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","ClientNo");
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
	$edata["DisplayField"] = "concat(FirstName,' ',LastName,' [',ClientNo,']')";

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




	$tdataMonthlyStatement["ClientNo"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","AccountType");
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




	$tdataMonthlyStatement["AccountType"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","AccountNumber");
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




	$tdataMonthlyStatement["AccountNumber"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","Year");
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




	$tdataMonthlyStatement["Year"] = $fdata;
//	Month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Month";
	$fdata["GoodName"] = "Month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","Month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Month(`DateTime`)";

	
	
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




	$tdataMonthlyStatement["Month"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","InterestAmount");
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




	$tdataMonthlyStatement["InterestAmount"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyStatement","Amount");
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




	$tdataMonthlyStatement["Amount"] = $fdata;


$tables_data["MonthlyStatement"]=&$tdataMonthlyStatement;
$field_labels["MonthlyStatement"] = &$fieldLabelsMonthlyStatement;
$fieldToolTips["MonthlyStatement"] = &$fieldToolTipsMonthlyStatement;
$page_titles["MonthlyStatement"] = &$pageTitlesMonthlyStatement;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MonthlyStatement"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MonthlyStatement"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MonthlyStatement()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AccountName,  ClientNo,  AccountType,  AccountNumber,  Year(`DateTime`) AS `Year`,  Month(`DateTime`) AS `Month`,  SUM(InterestAmount) AS InterestAmount,  SUM(Amount) AS Amount";
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
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
	"m_srcTableName" => "MonthlyStatement"
));

$proto34["m_sql"] = "AccountName";
$proto34["m_srcTableName"] = "MonthlyStatement";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto36["m_sql"] = "ClientNo";
$proto36["m_srcTableName"] = "MonthlyStatement";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto38["m_sql"] = "AccountType";
$proto38["m_srcTableName"] = "MonthlyStatement";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto40["m_sql"] = "AccountNumber";
$proto40["m_srcTableName"] = "MonthlyStatement";
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
$proto42["m_srcTableName"] = "MonthlyStatement";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "Year";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$proto46=array();
$proto46["m_functiontype"] = "SQLF_CUSTOM";
$proto46["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`DateTime`"
));

$proto46["m_arguments"][]=$obj;
$proto46["m_strFunctionName"] = "Month";
$obj = new SQLFunctionCall($proto46);

$proto45["m_sql"] = "Month(`DateTime`)";
$proto45["m_srcTableName"] = "MonthlyStatement";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "Month";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$proto49=array();
$proto49["m_functiontype"] = "SQLF_SUM";
$proto49["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto49);

$proto48["m_sql"] = "SUM(InterestAmount)";
$proto48["m_srcTableName"] = "MonthlyStatement";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "InterestAmount";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$proto52=array();
$proto52["m_functiontype"] = "SQLF_SUM";
$proto52["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto52["m_arguments"][]=$obj;
$proto52["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto52);

$proto51["m_sql"] = "SUM(Amount)";
$proto51["m_srcTableName"] = "MonthlyStatement";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "Amount";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "transactions";
$proto55["m_srcTableName"] = "MonthlyStatement";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "DebitAccount";
$proto55["m_columns"][] = "CreditAccount";
$proto55["m_columns"][] = "DebitAccountTransactionCharge";
$proto55["m_columns"][] = "CreditAccountTransactionCharge";
$proto55["m_columns"][] = "Amount";
$proto55["m_columns"][] = "DateTime";
$proto55["m_columns"][] = "Description";
$proto55["m_columns"][] = "CashDepositNo";
$proto55["m_columns"][] = "CashDepositorName";
$proto55["m_columns"][] = "CashDepositType";
$proto55["m_columns"][] = "WithdrawlNo";
$proto55["m_columns"][] = "WithdrawlName";
$proto55["m_columns"][] = "WithdrawlType";
$proto55["m_columns"][] = "LoanPaymentNo";
$proto55["m_columns"][] = "LoanPaymentName";
$proto55["m_columns"][] = "LoanPaymentPurpose";
$proto55["m_columns"][] = "LoanCreditPaymentNo";
$proto55["m_columns"][] = "LoanCreditPaymentName";
$proto55["m_columns"][] = "LoanCreditPaymentPurpose";
$proto55["m_columns"][] = "AccountType";
$proto55["m_columns"][] = "InterestAmount";
$proto55["m_columns"][] = "PrincipalAmount";
$proto55["m_columns"][] = "WithdrawlStatus";
$proto55["m_columns"][] = "NEFTTransferStatus";
$proto55["m_columns"][] = "LoanCreditApplicationStatus";
$proto55["m_columns"][] = "LoanCreditWitness";
$proto55["m_columns"][] = "NEFTTransferNo";
$proto55["m_columns"][] = "NEFTTransferDepositorName";
$proto55["m_columns"][] = "TransactionType";
$proto55["m_columns"][] = "Balance";
$proto55["m_columns"][] = "AccountNumber";
$proto55["m_columns"][] = "ClientNo";
$proto55["m_columns"][] = "LastModifiedBy";
$proto55["m_columns"][] = "LastModifiedDate";
$proto55["m_columns"][] = "AccountName";
$proto55["m_columns"][] = "TransactionNo";
$proto55["m_columns"][] = "TransactionStatus";
$proto55["m_columns"][] = "SelectedClientNo";
$proto55["m_columns"][] = "LoanPaymentStatus";
$proto55["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "transactions";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "MonthlyStatement";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto58["m_column"]=$obj;
$obj = new SQLGroupByItem($proto58);

$proto0["m_groupby"][]=$obj;
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto60["m_column"]=$obj;
$obj = new SQLGroupByItem($proto60);

$proto0["m_groupby"][]=$obj;
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto62["m_column"]=$obj;
$obj = new SQLGroupByItem($proto62);

$proto0["m_groupby"][]=$obj;
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto64["m_column"]=$obj;
$obj = new SQLGroupByItem($proto64);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto66["m_column"]=$obj;
$proto66["m_bAsc"] = 1;
$proto66["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto66);

$proto0["m_orderby"][]=$obj;					
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 1;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 1;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyStatement"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 1;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="MonthlyStatement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MonthlyStatement = createSqlQuery_MonthlyStatement();


	
		;

								

$tdataMonthlyStatement[".sqlquery"] = $queryData_MonthlyStatement;

$tableEvents["MonthlyStatement"] = new eventsBase;
$tdataMonthlyStatement[".hasEvents"] = false;

?>