<?php
require_once(getabspath("classes/cipherer.php"));




$tdataloan = array();
	$tdataloan[".truncateText"] = true;
	$tdataloan[".NumberOfChars"] = 80;
	$tdataloan[".ShortName"] = "loan";
	$tdataloan[".OwnerID"] = "";
	$tdataloan[".OriginalTable"] = "loan";

//	field labels
$fieldLabelsloan = array();
$fieldToolTipsloan = array();
$pageTitlesloan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsloan["English"] = array();
	$fieldToolTipsloan["English"] = array();
	$pageTitlesloan["English"] = array();
	$fieldLabelsloan["English"]["id"] = "Id";
	$fieldToolTipsloan["English"]["id"] = "";
	$fieldLabelsloan["English"]["LoanID"] = "Loan ID";
	$fieldToolTipsloan["English"]["LoanID"] = "";
	$fieldLabelsloan["English"]["AccountName"] = "Account Name";
	$fieldToolTipsloan["English"]["AccountName"] = "";
	$fieldLabelsloan["English"]["ClientNo"] = "Client No";
	$fieldToolTipsloan["English"]["ClientNo"] = "";
	$fieldLabelsloan["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsloan["English"]["AccountNumber"] = "";
	$fieldLabelsloan["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsloan["English"]["TelephoneNo"] = "";
	$fieldLabelsloan["English"]["DateLoanApproved"] = "Date Loan Approved";
	$fieldToolTipsloan["English"]["DateLoanApproved"] = "";
	$fieldLabelsloan["English"]["LoanAmount"] = "Loan Amount";
	$fieldToolTipsloan["English"]["LoanAmount"] = "";
	$fieldLabelsloan["English"]["LoanInterest"] = "Loan Interest";
	$fieldToolTipsloan["English"]["LoanInterest"] = "";
	$fieldLabelsloan["English"]["LoanPeriod"] = "Loan Period";
	$fieldToolTipsloan["English"]["LoanPeriod"] = "";
	$fieldLabelsloan["English"]["FirstPaymentDate"] = "First Payment Date";
	$fieldToolTipsloan["English"]["FirstPaymentDate"] = "";
	if (count($fieldToolTipsloan["English"]))
		$tdataloan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsloan[""] = array();
	$fieldToolTipsloan[""] = array();
	$pageTitlesloan[""] = array();
	if (count($fieldToolTipsloan[""]))
		$tdataloan[".isUseToolTips"] = true;
}


	$tdataloan[".NCSearch"] = true;



$tdataloan[".shortTableName"] = "loan";
$tdataloan[".nSecOptions"] = 0;
$tdataloan[".recsPerRowPrint"] = 1;
$tdataloan[".mainTableOwnerID"] = "";
$tdataloan[".moveNext"] = 1;
$tdataloan[".entityType"] = 0;

$tdataloan[".strOriginalTableName"] = "loan";

	



$tdataloan[".showAddInPopup"] = false;

$tdataloan[".showEditInPopup"] = false;

$tdataloan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataloan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataloan[".fieldsForRegister"] = array();

$tdataloan[".listAjax"] = false;

	$tdataloan[".audit"] = false;

	$tdataloan[".locking"] = false;

$tdataloan[".edit"] = true;
$tdataloan[".afterEditAction"] = 1;
$tdataloan[".closePopupAfterEdit"] = 1;
$tdataloan[".afterEditActionDetTable"] = "";

$tdataloan[".add"] = true;
$tdataloan[".afterAddAction"] = 0;
$tdataloan[".closePopupAfterAdd"] = 1;
$tdataloan[".afterAddActionDetTable"] = "";

$tdataloan[".list"] = true;

$tdataloan[".inlineEdit"] = true;



$tdataloan[".inlineAdd"] = true;
$tdataloan[".view"] = true;

$tdataloan[".import"] = true;

$tdataloan[".exportTo"] = true;

$tdataloan[".printFriendly"] = true;

$tdataloan[".delete"] = true;

$tdataloan[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataloan[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataloan[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataloan[".searchSaving"] = true;
//

$tdataloan[".showSearchPanel"] = true;
		$tdataloan[".flexibleSearch"] = true;

$tdataloan[".isUseAjaxSuggest"] = true;

$tdataloan[".rowHighlite"] = true;



$tdataloan[".addPageEvents"] = false;

// use timepicker for search panel
$tdataloan[".isUseTimeForSearch"] = false;





$tdataloan[".allSearchFields"] = array();
$tdataloan[".filterFields"] = array();
$tdataloan[".requiredSearchFields"] = array();

$tdataloan[".allSearchFields"][] = "LoanID";
	$tdataloan[".allSearchFields"][] = "AccountName";
	$tdataloan[".allSearchFields"][] = "ClientNo";
	$tdataloan[".allSearchFields"][] = "AccountNumber";
	$tdataloan[".allSearchFields"][] = "TelephoneNo";
	$tdataloan[".allSearchFields"][] = "DateLoanApproved";
	$tdataloan[".allSearchFields"][] = "LoanAmount";
	$tdataloan[".allSearchFields"][] = "LoanInterest";
	$tdataloan[".allSearchFields"][] = "LoanPeriod";
	$tdataloan[".allSearchFields"][] = "FirstPaymentDate";
	

$tdataloan[".googleLikeFields"] = array();
$tdataloan[".googleLikeFields"][] = "id";
$tdataloan[".googleLikeFields"][] = "LoanID";
$tdataloan[".googleLikeFields"][] = "AccountName";
$tdataloan[".googleLikeFields"][] = "ClientNo";
$tdataloan[".googleLikeFields"][] = "AccountNumber";
$tdataloan[".googleLikeFields"][] = "TelephoneNo";
$tdataloan[".googleLikeFields"][] = "DateLoanApproved";
$tdataloan[".googleLikeFields"][] = "LoanAmount";
$tdataloan[".googleLikeFields"][] = "LoanInterest";
$tdataloan[".googleLikeFields"][] = "LoanPeriod";
$tdataloan[".googleLikeFields"][] = "FirstPaymentDate";


$tdataloan[".advSearchFields"] = array();
$tdataloan[".advSearchFields"][] = "LoanID";
$tdataloan[".advSearchFields"][] = "AccountName";
$tdataloan[".advSearchFields"][] = "ClientNo";
$tdataloan[".advSearchFields"][] = "AccountNumber";
$tdataloan[".advSearchFields"][] = "TelephoneNo";
$tdataloan[".advSearchFields"][] = "DateLoanApproved";
$tdataloan[".advSearchFields"][] = "LoanAmount";
$tdataloan[".advSearchFields"][] = "LoanInterest";
$tdataloan[".advSearchFields"][] = "LoanPeriod";
$tdataloan[".advSearchFields"][] = "FirstPaymentDate";

$tdataloan[".tableType"] = "list";

$tdataloan[".printerPageOrientation"] = 0;
$tdataloan[".nPrinterPageScale"] = 100;

$tdataloan[".nPrinterSplitRecords"] = 40;

$tdataloan[".nPrinterPDFSplitRecords"] = 40;



$tdataloan[".geocodingEnabled"] = false;





$tdataloan[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataloan[".pageSize"] = 20;

$tdataloan[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataloan[".strOrderBy"] = $tstrOrderBy;

$tdataloan[".orderindexes"] = array();
$tdataloan[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataloan[".sqlHead"] = "SELECT id,  LoanID,  AccountName,  ClientNo,  AccountNumber,  TelephoneNo,  DateLoanApproved,  LoanAmount,  LoanInterest,  LoanPeriod,  FirstPaymentDate";
$tdataloan[".sqlFrom"] = "FROM loan";
$tdataloan[".sqlWhereExpr"] = "";
$tdataloan[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataloan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataloan[".arrGroupsPerPage"] = $arrGPP;

$tdataloan[".highlightSearchResults"] = true;

$tableKeysloan = array();
$tableKeysloan[] = "id";
$tdataloan[".Keys"] = $tableKeysloan;

$tdataloan[".listFields"] = array();
$tdataloan[".listFields"][] = "LoanID";
$tdataloan[".listFields"][] = "AccountName";
$tdataloan[".listFields"][] = "ClientNo";
$tdataloan[".listFields"][] = "AccountNumber";
$tdataloan[".listFields"][] = "TelephoneNo";
$tdataloan[".listFields"][] = "DateLoanApproved";
$tdataloan[".listFields"][] = "LoanAmount";
$tdataloan[".listFields"][] = "LoanInterest";
$tdataloan[".listFields"][] = "LoanPeriod";
$tdataloan[".listFields"][] = "FirstPaymentDate";

$tdataloan[".hideMobileList"] = array();


$tdataloan[".viewFields"] = array();
$tdataloan[".viewFields"][] = "LoanID";
$tdataloan[".viewFields"][] = "AccountName";
$tdataloan[".viewFields"][] = "ClientNo";
$tdataloan[".viewFields"][] = "AccountNumber";
$tdataloan[".viewFields"][] = "TelephoneNo";
$tdataloan[".viewFields"][] = "DateLoanApproved";
$tdataloan[".viewFields"][] = "LoanAmount";
$tdataloan[".viewFields"][] = "LoanInterest";
$tdataloan[".viewFields"][] = "LoanPeriod";
$tdataloan[".viewFields"][] = "FirstPaymentDate";

$tdataloan[".addFields"] = array();
$tdataloan[".addFields"][] = "LoanID";
$tdataloan[".addFields"][] = "AccountName";
$tdataloan[".addFields"][] = "ClientNo";
$tdataloan[".addFields"][] = "AccountNumber";
$tdataloan[".addFields"][] = "TelephoneNo";
$tdataloan[".addFields"][] = "DateLoanApproved";
$tdataloan[".addFields"][] = "LoanAmount";
$tdataloan[".addFields"][] = "LoanInterest";
$tdataloan[".addFields"][] = "LoanPeriod";
$tdataloan[".addFields"][] = "FirstPaymentDate";

$tdataloan[".masterListFields"] = array();
$tdataloan[".masterListFields"][] = "LoanID";
$tdataloan[".masterListFields"][] = "AccountName";
$tdataloan[".masterListFields"][] = "ClientNo";
$tdataloan[".masterListFields"][] = "AccountNumber";
$tdataloan[".masterListFields"][] = "TelephoneNo";
$tdataloan[".masterListFields"][] = "DateLoanApproved";
$tdataloan[".masterListFields"][] = "LoanAmount";
$tdataloan[".masterListFields"][] = "LoanInterest";
$tdataloan[".masterListFields"][] = "LoanPeriod";
$tdataloan[".masterListFields"][] = "FirstPaymentDate";

$tdataloan[".inlineAddFields"] = array();
$tdataloan[".inlineAddFields"][] = "LoanID";
$tdataloan[".inlineAddFields"][] = "AccountName";
$tdataloan[".inlineAddFields"][] = "ClientNo";
$tdataloan[".inlineAddFields"][] = "AccountNumber";
$tdataloan[".inlineAddFields"][] = "TelephoneNo";
$tdataloan[".inlineAddFields"][] = "DateLoanApproved";
$tdataloan[".inlineAddFields"][] = "LoanAmount";
$tdataloan[".inlineAddFields"][] = "LoanInterest";
$tdataloan[".inlineAddFields"][] = "LoanPeriod";
$tdataloan[".inlineAddFields"][] = "FirstPaymentDate";

$tdataloan[".editFields"] = array();
$tdataloan[".editFields"][] = "LoanID";
$tdataloan[".editFields"][] = "AccountName";
$tdataloan[".editFields"][] = "ClientNo";
$tdataloan[".editFields"][] = "AccountNumber";
$tdataloan[".editFields"][] = "TelephoneNo";
$tdataloan[".editFields"][] = "DateLoanApproved";
$tdataloan[".editFields"][] = "LoanAmount";
$tdataloan[".editFields"][] = "LoanInterest";
$tdataloan[".editFields"][] = "LoanPeriod";
$tdataloan[".editFields"][] = "FirstPaymentDate";

$tdataloan[".inlineEditFields"] = array();
$tdataloan[".inlineEditFields"][] = "LoanID";
$tdataloan[".inlineEditFields"][] = "AccountName";
$tdataloan[".inlineEditFields"][] = "ClientNo";
$tdataloan[".inlineEditFields"][] = "AccountNumber";
$tdataloan[".inlineEditFields"][] = "TelephoneNo";
$tdataloan[".inlineEditFields"][] = "DateLoanApproved";
$tdataloan[".inlineEditFields"][] = "LoanAmount";
$tdataloan[".inlineEditFields"][] = "LoanInterest";
$tdataloan[".inlineEditFields"][] = "LoanPeriod";
$tdataloan[".inlineEditFields"][] = "FirstPaymentDate";

$tdataloan[".updateSelectedFields"] = array();


$tdataloan[".exportFields"] = array();
$tdataloan[".exportFields"][] = "LoanID";
$tdataloan[".exportFields"][] = "AccountName";
$tdataloan[".exportFields"][] = "ClientNo";
$tdataloan[".exportFields"][] = "AccountNumber";
$tdataloan[".exportFields"][] = "TelephoneNo";
$tdataloan[".exportFields"][] = "DateLoanApproved";
$tdataloan[".exportFields"][] = "LoanAmount";
$tdataloan[".exportFields"][] = "LoanInterest";
$tdataloan[".exportFields"][] = "LoanPeriod";
$tdataloan[".exportFields"][] = "FirstPaymentDate";

$tdataloan[".importFields"] = array();
$tdataloan[".importFields"][] = "LoanID";
$tdataloan[".importFields"][] = "AccountName";
$tdataloan[".importFields"][] = "ClientNo";
$tdataloan[".importFields"][] = "AccountNumber";
$tdataloan[".importFields"][] = "TelephoneNo";
$tdataloan[".importFields"][] = "DateLoanApproved";
$tdataloan[".importFields"][] = "LoanAmount";
$tdataloan[".importFields"][] = "LoanInterest";
$tdataloan[".importFields"][] = "LoanPeriod";
$tdataloan[".importFields"][] = "FirstPaymentDate";

$tdataloan[".printFields"] = array();
$tdataloan[".printFields"][] = "LoanID";
$tdataloan[".printFields"][] = "AccountName";
$tdataloan[".printFields"][] = "ClientNo";
$tdataloan[".printFields"][] = "AccountNumber";
$tdataloan[".printFields"][] = "TelephoneNo";
$tdataloan[".printFields"][] = "DateLoanApproved";
$tdataloan[".printFields"][] = "LoanAmount";
$tdataloan[".printFields"][] = "LoanInterest";
$tdataloan[".printFields"][] = "LoanPeriod";
$tdataloan[".printFields"][] = "FirstPaymentDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","id");
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








	$tdataloan["id"] = $fdata;
//	LoanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LoanID";
	$fdata["GoodName"] = "LoanID";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","LoanID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

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




	$tdataloan["LoanID"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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




	$tdataloan["AccountName"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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




	$tdataloan["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

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




	$tdataloan["AccountNumber"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","TelephoneNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TelephoneNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TelephoneNo";

	
	
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




	$tdataloan["TelephoneNo"] = $fdata;
//	DateLoanApproved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DateLoanApproved";
	$fdata["GoodName"] = "DateLoanApproved";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","DateLoanApproved");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateLoanApproved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateLoanApproved";

	
	
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




	$tdataloan["DateLoanApproved"] = $fdata;
//	LoanAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LoanAmount";
	$fdata["GoodName"] = "LoanAmount";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","LoanAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanAmount";

	
	
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




	$tdataloan["LoanAmount"] = $fdata;
//	LoanInterest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LoanInterest";
	$fdata["GoodName"] = "LoanInterest";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","LoanInterest");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

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




	$tdataloan["LoanInterest"] = $fdata;
//	LoanPeriod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LoanPeriod";
	$fdata["GoodName"] = "LoanPeriod";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","LoanPeriod");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanPeriod";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanPeriod";

	
	
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




	$tdataloan["LoanPeriod"] = $fdata;
//	FirstPaymentDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FirstPaymentDate";
	$fdata["GoodName"] = "FirstPaymentDate";
	$fdata["ownerTable"] = "loan";
	$fdata["Label"] = GetFieldLabel("loan","FirstPaymentDate");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FirstPaymentDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstPaymentDate";

	
	
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




	$tdataloan["FirstPaymentDate"] = $fdata;


$tables_data["loan"]=&$tdataloan;
$field_labels["loan"] = &$fieldLabelsloan;
$fieldToolTips["loan"] = &$fieldToolTipsloan;
$page_titles["loan"] = &$pageTitlesloan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["loan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["loan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_loan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  LoanID,  AccountName,  ClientNo,  AccountNumber,  TelephoneNo,  DateLoanApproved,  LoanAmount,  LoanInterest,  LoanPeriod,  FirstPaymentDate";
$proto0["m_strFrom"] = "FROM loan";
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
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "loan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanID",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto8["m_sql"] = "LoanID";
$proto8["m_srcTableName"] = "loan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto10["m_sql"] = "AccountName";
$proto10["m_srcTableName"] = "loan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto12["m_sql"] = "ClientNo";
$proto12["m_srcTableName"] = "loan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto14["m_sql"] = "AccountNumber";
$proto14["m_srcTableName"] = "loan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto16["m_sql"] = "TelephoneNo";
$proto16["m_srcTableName"] = "loan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DateLoanApproved",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto18["m_sql"] = "DateLoanApproved";
$proto18["m_srcTableName"] = "loan";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanAmount",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto20["m_sql"] = "LoanAmount";
$proto20["m_srcTableName"] = "loan";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanInterest",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto22["m_sql"] = "LoanInterest";
$proto22["m_srcTableName"] = "loan";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPeriod",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto24["m_sql"] = "LoanPeriod";
$proto24["m_srcTableName"] = "loan";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstPaymentDate",
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto26["m_sql"] = "FirstPaymentDate";
$proto26["m_srcTableName"] = "loan";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "loan";
$proto29["m_srcTableName"] = "loan";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "LoanID";
$proto29["m_columns"][] = "AccountName";
$proto29["m_columns"][] = "ClientNo";
$proto29["m_columns"][] = "AccountNumber";
$proto29["m_columns"][] = "TelephoneNo";
$proto29["m_columns"][] = "DateLoanApproved";
$proto29["m_columns"][] = "LoanAmount";
$proto29["m_columns"][] = "LoanInterest";
$proto29["m_columns"][] = "LoanPeriod";
$proto29["m_columns"][] = "FirstPaymentDate";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "loan";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "loan";
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
	"m_strTable" => "loan",
	"m_srcTableName" => "loan"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="loan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_loan = createSqlQuery_loan();


	
		;

											

$tdataloan[".sqlquery"] = $queryData_loan;

$tableEvents["loan"] = new eventsBase;
$tdataloan[".hasEvents"] = false;

?>