<?php
require_once(getabspath("classes/cipherer.php"));




$tdataschedule = array();
	$tdataschedule[".truncateText"] = true;
	$tdataschedule[".NumberOfChars"] = 80;
	$tdataschedule[".ShortName"] = "schedule";
	$tdataschedule[".OwnerID"] = "";
	$tdataschedule[".OriginalTable"] = "schedule";

//	field labels
$fieldLabelsschedule = array();
$fieldToolTipsschedule = array();
$pageTitlesschedule = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsschedule["English"] = array();
	$fieldToolTipsschedule["English"] = array();
	$pageTitlesschedule["English"] = array();
	$fieldLabelsschedule["English"]["id"] = "Id";
	$fieldToolTipsschedule["English"]["id"] = "";
	$fieldLabelsschedule["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsschedule["English"]["AccountNumber"] = "";
	$fieldLabelsschedule["English"]["PaymentNo"] = "Payment No";
	$fieldToolTipsschedule["English"]["PaymentNo"] = "";
	$fieldLabelsschedule["English"]["PaymentDate"] = "Payment Date";
	$fieldToolTipsschedule["English"]["PaymentDate"] = "";
	$fieldLabelsschedule["English"]["PaymentAmount"] = "Payment Amount";
	$fieldToolTipsschedule["English"]["PaymentAmount"] = "";
	$fieldLabelsschedule["English"]["LoanInterest"] = "Loan Interest";
	$fieldToolTipsschedule["English"]["LoanInterest"] = "";
	$fieldLabelsschedule["English"]["Depreciation"] = "Depreciation";
	$fieldToolTipsschedule["English"]["Depreciation"] = "";
	$fieldLabelsschedule["English"]["AmountPay"] = "Amount Pay";
	$fieldToolTipsschedule["English"]["AmountPay"] = "";
	$fieldLabelsschedule["English"]["Remark"] = "Remark";
	$fieldToolTipsschedule["English"]["Remark"] = "";
	$fieldLabelsschedule["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsschedule["English"]["LoanID"] = "";
	if (count($fieldToolTipsschedule["English"]))
		$tdataschedule[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsschedule[""] = array();
	$fieldToolTipsschedule[""] = array();
	$pageTitlesschedule[""] = array();
	if (count($fieldToolTipsschedule[""]))
		$tdataschedule[".isUseToolTips"] = true;
}


	$tdataschedule[".NCSearch"] = true;



$tdataschedule[".shortTableName"] = "schedule";
$tdataschedule[".nSecOptions"] = 0;
$tdataschedule[".recsPerRowPrint"] = 1;
$tdataschedule[".mainTableOwnerID"] = "";
$tdataschedule[".moveNext"] = 1;
$tdataschedule[".entityType"] = 0;

$tdataschedule[".strOriginalTableName"] = "schedule";

	



$tdataschedule[".showAddInPopup"] = false;

$tdataschedule[".showEditInPopup"] = false;

$tdataschedule[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataschedule[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataschedule[".fieldsForRegister"] = array();

$tdataschedule[".listAjax"] = false;

	$tdataschedule[".audit"] = false;

	$tdataschedule[".locking"] = false;



$tdataschedule[".list"] = true;

$tdataschedule[".inlineEdit"] = true;



$tdataschedule[".inlineAdd"] = true;
$tdataschedule[".view"] = true;

$tdataschedule[".import"] = true;

$tdataschedule[".exportTo"] = true;

$tdataschedule[".printFriendly"] = true;

$tdataschedule[".delete"] = true;

$tdataschedule[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataschedule[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataschedule[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataschedule[".searchSaving"] = true;
//

$tdataschedule[".showSearchPanel"] = true;
		$tdataschedule[".flexibleSearch"] = true;

$tdataschedule[".isUseAjaxSuggest"] = true;

$tdataschedule[".rowHighlite"] = true;



$tdataschedule[".addPageEvents"] = false;

// use timepicker for search panel
$tdataschedule[".isUseTimeForSearch"] = false;





$tdataschedule[".allSearchFields"] = array();
$tdataschedule[".filterFields"] = array();
$tdataschedule[".requiredSearchFields"] = array();

$tdataschedule[".allSearchFields"][] = "AccountNumber";
	$tdataschedule[".allSearchFields"][] = "PaymentNo";
	$tdataschedule[".allSearchFields"][] = "PaymentDate";
	$tdataschedule[".allSearchFields"][] = "PaymentAmount";
	$tdataschedule[".allSearchFields"][] = "LoanInterest";
	$tdataschedule[".allSearchFields"][] = "Depreciation";
	$tdataschedule[".allSearchFields"][] = "AmountPay";
	$tdataschedule[".allSearchFields"][] = "Remark";
	$tdataschedule[".allSearchFields"][] = "LoanID";
	

$tdataschedule[".googleLikeFields"] = array();
$tdataschedule[".googleLikeFields"][] = "id";
$tdataschedule[".googleLikeFields"][] = "AccountNumber";
$tdataschedule[".googleLikeFields"][] = "PaymentNo";
$tdataschedule[".googleLikeFields"][] = "PaymentDate";
$tdataschedule[".googleLikeFields"][] = "PaymentAmount";
$tdataschedule[".googleLikeFields"][] = "LoanInterest";
$tdataschedule[".googleLikeFields"][] = "Depreciation";
$tdataschedule[".googleLikeFields"][] = "AmountPay";
$tdataschedule[".googleLikeFields"][] = "Remark";
$tdataschedule[".googleLikeFields"][] = "LoanID";


$tdataschedule[".advSearchFields"] = array();
$tdataschedule[".advSearchFields"][] = "AccountNumber";
$tdataschedule[".advSearchFields"][] = "PaymentNo";
$tdataschedule[".advSearchFields"][] = "PaymentDate";
$tdataschedule[".advSearchFields"][] = "PaymentAmount";
$tdataschedule[".advSearchFields"][] = "LoanInterest";
$tdataschedule[".advSearchFields"][] = "Depreciation";
$tdataschedule[".advSearchFields"][] = "AmountPay";
$tdataschedule[".advSearchFields"][] = "Remark";
$tdataschedule[".advSearchFields"][] = "LoanID";

$tdataschedule[".tableType"] = "list";

$tdataschedule[".printerPageOrientation"] = 0;
$tdataschedule[".nPrinterPageScale"] = 100;

$tdataschedule[".nPrinterSplitRecords"] = 40;

$tdataschedule[".nPrinterPDFSplitRecords"] = 40;



$tdataschedule[".geocodingEnabled"] = false;





$tdataschedule[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataschedule[".pageSize"] = 20;

$tdataschedule[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataschedule[".strOrderBy"] = $tstrOrderBy;

$tdataschedule[".orderindexes"] = array();
$tdataschedule[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataschedule[".sqlHead"] = "SELECT id,  AccountNumber,  PaymentNo,  PaymentDate,  PaymentAmount,  LoanInterest,  Depreciation,  AmountPay,  Remark,  LoanID";
$tdataschedule[".sqlFrom"] = "FROM schedule";
$tdataschedule[".sqlWhereExpr"] = "";
$tdataschedule[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataschedule[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataschedule[".arrGroupsPerPage"] = $arrGPP;

$tdataschedule[".highlightSearchResults"] = true;

$tableKeysschedule = array();
$tableKeysschedule[] = "id";
$tdataschedule[".Keys"] = $tableKeysschedule;

$tdataschedule[".listFields"] = array();
$tdataschedule[".listFields"][] = "AccountNumber";
$tdataschedule[".listFields"][] = "PaymentNo";
$tdataschedule[".listFields"][] = "PaymentDate";
$tdataschedule[".listFields"][] = "PaymentAmount";
$tdataschedule[".listFields"][] = "LoanInterest";
$tdataschedule[".listFields"][] = "Depreciation";
$tdataschedule[".listFields"][] = "AmountPay";
$tdataschedule[".listFields"][] = "Remark";
$tdataschedule[".listFields"][] = "LoanID";

$tdataschedule[".hideMobileList"] = array();


$tdataschedule[".viewFields"] = array();
$tdataschedule[".viewFields"][] = "AccountNumber";
$tdataschedule[".viewFields"][] = "PaymentNo";
$tdataschedule[".viewFields"][] = "PaymentDate";
$tdataschedule[".viewFields"][] = "PaymentAmount";
$tdataschedule[".viewFields"][] = "LoanInterest";
$tdataschedule[".viewFields"][] = "Depreciation";
$tdataschedule[".viewFields"][] = "AmountPay";
$tdataschedule[".viewFields"][] = "Remark";
$tdataschedule[".viewFields"][] = "LoanID";

$tdataschedule[".addFields"] = array();

$tdataschedule[".masterListFields"] = array();
$tdataschedule[".masterListFields"][] = "id";
$tdataschedule[".masterListFields"][] = "AccountNumber";
$tdataschedule[".masterListFields"][] = "PaymentNo";
$tdataschedule[".masterListFields"][] = "PaymentDate";
$tdataschedule[".masterListFields"][] = "PaymentAmount";
$tdataschedule[".masterListFields"][] = "LoanInterest";
$tdataschedule[".masterListFields"][] = "Depreciation";
$tdataschedule[".masterListFields"][] = "AmountPay";
$tdataschedule[".masterListFields"][] = "Remark";
$tdataschedule[".masterListFields"][] = "LoanID";

$tdataschedule[".inlineAddFields"] = array();

$tdataschedule[".editFields"] = array();

$tdataschedule[".inlineEditFields"] = array();
$tdataschedule[".inlineEditFields"][] = "AccountNumber";
$tdataschedule[".inlineEditFields"][] = "PaymentNo";
$tdataschedule[".inlineEditFields"][] = "PaymentDate";
$tdataschedule[".inlineEditFields"][] = "PaymentAmount";
$tdataschedule[".inlineEditFields"][] = "LoanInterest";
$tdataschedule[".inlineEditFields"][] = "Depreciation";
$tdataschedule[".inlineEditFields"][] = "AmountPay";
$tdataschedule[".inlineEditFields"][] = "Remark";
$tdataschedule[".inlineEditFields"][] = "LoanID";

$tdataschedule[".updateSelectedFields"] = array();


$tdataschedule[".exportFields"] = array();
$tdataschedule[".exportFields"][] = "AccountNumber";
$tdataschedule[".exportFields"][] = "PaymentNo";
$tdataschedule[".exportFields"][] = "PaymentDate";
$tdataschedule[".exportFields"][] = "PaymentAmount";
$tdataschedule[".exportFields"][] = "LoanInterest";
$tdataschedule[".exportFields"][] = "Depreciation";
$tdataschedule[".exportFields"][] = "AmountPay";
$tdataschedule[".exportFields"][] = "Remark";
$tdataschedule[".exportFields"][] = "LoanID";

$tdataschedule[".importFields"] = array();
$tdataschedule[".importFields"][] = "AccountNumber";
$tdataschedule[".importFields"][] = "PaymentNo";
$tdataschedule[".importFields"][] = "PaymentDate";
$tdataschedule[".importFields"][] = "PaymentAmount";
$tdataschedule[".importFields"][] = "LoanInterest";
$tdataschedule[".importFields"][] = "Depreciation";
$tdataschedule[".importFields"][] = "AmountPay";
$tdataschedule[".importFields"][] = "Remark";
$tdataschedule[".importFields"][] = "LoanID";

$tdataschedule[".printFields"] = array();
$tdataschedule[".printFields"][] = "AccountNumber";
$tdataschedule[".printFields"][] = "PaymentNo";
$tdataschedule[".printFields"][] = "PaymentDate";
$tdataschedule[".printFields"][] = "PaymentAmount";
$tdataschedule[".printFields"][] = "LoanInterest";
$tdataschedule[".printFields"][] = "Depreciation";
$tdataschedule[".printFields"][] = "AmountPay";
$tdataschedule[".printFields"][] = "Remark";
$tdataschedule[".printFields"][] = "LoanID";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","id");
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








	$tdataschedule["id"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



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




	$tdataschedule["AccountNumber"] = $fdata;
//	PaymentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PaymentNo";
	$fdata["GoodName"] = "PaymentNo";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","PaymentNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentNo";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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




	$tdataschedule["PaymentNo"] = $fdata;
//	PaymentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PaymentDate";
	$fdata["GoodName"] = "PaymentDate";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","PaymentDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentDate";

	
	
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




	$tdataschedule["PaymentDate"] = $fdata;
//	PaymentAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PaymentAmount";
	$fdata["GoodName"] = "PaymentAmount";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","PaymentAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PaymentAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PaymentAmount";

	
	
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




	$tdataschedule["PaymentAmount"] = $fdata;
//	LoanInterest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "LoanInterest";
	$fdata["GoodName"] = "LoanInterest";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","LoanInterest");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanInterest";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanInterest";

	
	
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




	$tdataschedule["LoanInterest"] = $fdata;
//	Depreciation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Depreciation";
	$fdata["GoodName"] = "Depreciation";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","Depreciation");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Depreciation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Depreciation";

	
	
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




	$tdataschedule["Depreciation"] = $fdata;
//	AmountPay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AmountPay";
	$fdata["GoodName"] = "AmountPay";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","AmountPay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AmountPay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AmountPay";

	
	
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




	$tdataschedule["AmountPay"] = $fdata;
//	Remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Remark";
	$fdata["GoodName"] = "Remark";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","Remark");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remark";

	
	
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




	$tdataschedule["Remark"] = $fdata;
//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "schedule";
	$fdata["Label"] = GetFieldLabel("schedule","LoanID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanID";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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




	$tdataschedule["LoanID"] = $fdata;


$tables_data["schedule"]=&$tdataschedule;
$field_labels["schedule"] = &$fieldLabelsschedule;
$fieldToolTips["schedule"] = &$fieldToolTipsschedule;
$page_titles["schedule"] = &$pageTitlesschedule;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["schedule"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["schedule"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_schedule()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  AccountNumber,  PaymentNo,  PaymentDate,  PaymentAmount,  LoanInterest,  Depreciation,  AmountPay,  Remark,  LoanID";
$proto0["m_strFrom"] = "FROM schedule";
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
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "schedule";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto8["m_sql"] = "AccountNumber";
$proto8["m_srcTableName"] = "schedule";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentNo",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto10["m_sql"] = "PaymentNo";
$proto10["m_srcTableName"] = "schedule";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentDate",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto12["m_sql"] = "PaymentDate";
$proto12["m_srcTableName"] = "schedule";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PaymentAmount",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto14["m_sql"] = "PaymentAmount";
$proto14["m_srcTableName"] = "schedule";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanInterest",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto16["m_sql"] = "LoanInterest";
$proto16["m_srcTableName"] = "schedule";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Depreciation",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto18["m_sql"] = "Depreciation";
$proto18["m_srcTableName"] = "schedule";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AmountPay",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto20["m_sql"] = "AmountPay";
$proto20["m_srcTableName"] = "schedule";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Remark",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto22["m_sql"] = "Remark";
$proto22["m_srcTableName"] = "schedule";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanID",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto24["m_sql"] = "LoanID";
$proto24["m_srcTableName"] = "schedule";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "schedule";
$proto27["m_srcTableName"] = "schedule";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "AccountNumber";
$proto27["m_columns"][] = "PaymentNo";
$proto27["m_columns"][] = "PaymentDate";
$proto27["m_columns"][] = "PaymentAmount";
$proto27["m_columns"][] = "LoanInterest";
$proto27["m_columns"][] = "Depreciation";
$proto27["m_columns"][] = "AmountPay";
$proto27["m_columns"][] = "Remark";
$proto27["m_columns"][] = "LoanID";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "schedule";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "schedule";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "schedule",
	"m_srcTableName" => "schedule"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="schedule";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_schedule = createSqlQuery_schedule();


	
		;

										

$tdataschedule[".sqlquery"] = $queryData_schedule;

$tableEvents["schedule"] = new eventsBase;
$tdataschedule[".hasEvents"] = false;

?>