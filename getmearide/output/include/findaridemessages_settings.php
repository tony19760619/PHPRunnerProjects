<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafindaridemessages = array();
	$tdatafindaridemessages[".truncateText"] = true;
	$tdatafindaridemessages[".NumberOfChars"] = 80;
	$tdatafindaridemessages[".ShortName"] = "findaridemessages";
	$tdatafindaridemessages[".OwnerID"] = "";
	$tdatafindaridemessages[".OriginalTable"] = "findaridemessages";

//	field labels
$fieldLabelsfindaridemessages = array();
$fieldToolTipsfindaridemessages = array();
$pageTitlesfindaridemessages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfindaridemessages["English"] = array();
	$fieldToolTipsfindaridemessages["English"] = array();
	$pageTitlesfindaridemessages["English"] = array();
	$fieldLabelsfindaridemessages["English"]["DateSent"] = "Date Sent";
	$fieldToolTipsfindaridemessages["English"]["DateSent"] = "";
	$fieldLabelsfindaridemessages["English"]["ID"] = "ID";
	$fieldToolTipsfindaridemessages["English"]["ID"] = "";
	$fieldLabelsfindaridemessages["English"]["FindARideID"] = "Find A Ride ID";
	$fieldToolTipsfindaridemessages["English"]["FindARideID"] = "";
	$fieldLabelsfindaridemessages["English"]["FromUsername"] = "From Username";
	$fieldToolTipsfindaridemessages["English"]["FromUsername"] = "";
	$fieldLabelsfindaridemessages["English"]["ToUsername"] = "To Username";
	$fieldToolTipsfindaridemessages["English"]["ToUsername"] = "";
	$fieldLabelsfindaridemessages["English"]["Message"] = "Message";
	$fieldToolTipsfindaridemessages["English"]["Message"] = "";
	$fieldLabelsfindaridemessages["English"]["Date"] = "Date";
	$fieldToolTipsfindaridemessages["English"]["Date"] = "";
	$fieldLabelsfindaridemessages["English"]["SentOrReceived"] = "Sent Or Received";
	$fieldToolTipsfindaridemessages["English"]["SentOrReceived"] = "";
	if (count($fieldToolTipsfindaridemessages["English"]))
		$tdatafindaridemessages[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfindaridemessages[""] = array();
	$fieldToolTipsfindaridemessages[""] = array();
	$pageTitlesfindaridemessages[""] = array();
	$fieldLabelsfindaridemessages[""]["DateSent"] = "Date Sent";
	$fieldToolTipsfindaridemessages[""]["DateSent"] = "";
	$fieldLabelsfindaridemessages[""]["ID"] = "ID";
	$fieldToolTipsfindaridemessages[""]["ID"] = "";
	$fieldLabelsfindaridemessages[""]["FindARideID"] = "Find ARide ID";
	$fieldToolTipsfindaridemessages[""]["FindARideID"] = "";
	$fieldLabelsfindaridemessages[""]["FromUsername"] = "From Username";
	$fieldToolTipsfindaridemessages[""]["FromUsername"] = "";
	$fieldLabelsfindaridemessages[""]["ToUsername"] = "To Username";
	$fieldToolTipsfindaridemessages[""]["ToUsername"] = "";
	$fieldLabelsfindaridemessages[""]["Message"] = "Message";
	$fieldToolTipsfindaridemessages[""]["Message"] = "";
	$fieldLabelsfindaridemessages[""]["Date"] = "Date";
	$fieldToolTipsfindaridemessages[""]["Date"] = "";
	$fieldLabelsfindaridemessages[""]["SentOrReceived"] = "Sent Or Received";
	$fieldToolTipsfindaridemessages[""]["SentOrReceived"] = "";
	if (count($fieldToolTipsfindaridemessages[""]))
		$tdatafindaridemessages[".isUseToolTips"] = true;
}


	$tdatafindaridemessages[".NCSearch"] = true;



$tdatafindaridemessages[".shortTableName"] = "findaridemessages";
$tdatafindaridemessages[".nSecOptions"] = 0;
$tdatafindaridemessages[".recsPerRowPrint"] = 1;
$tdatafindaridemessages[".mainTableOwnerID"] = "";
$tdatafindaridemessages[".moveNext"] = 1;
$tdatafindaridemessages[".entityType"] = 0;

$tdatafindaridemessages[".strOriginalTableName"] = "findaridemessages";

	



$tdatafindaridemessages[".showAddInPopup"] = false;

$tdatafindaridemessages[".showEditInPopup"] = false;

$tdatafindaridemessages[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafindaridemessages[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafindaridemessages[".fieldsForRegister"] = array();

$tdatafindaridemessages[".listAjax"] = false;

	$tdatafindaridemessages[".audit"] = false;

	$tdatafindaridemessages[".locking"] = false;



$tdatafindaridemessages[".list"] = true;

$tdatafindaridemessages[".inlineEdit"] = true;



$tdatafindaridemessages[".inlineAdd"] = true;
$tdatafindaridemessages[".view"] = true;

$tdatafindaridemessages[".import"] = true;

$tdatafindaridemessages[".exportTo"] = true;

$tdatafindaridemessages[".printFriendly"] = true;

$tdatafindaridemessages[".delete"] = true;

$tdatafindaridemessages[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafindaridemessages[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafindaridemessages[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafindaridemessages[".searchSaving"] = false;
//

$tdatafindaridemessages[".showSearchPanel"] = true;
		$tdatafindaridemessages[".flexibleSearch"] = true;

$tdatafindaridemessages[".isUseAjaxSuggest"] = true;

$tdatafindaridemessages[".rowHighlite"] = true;



$tdatafindaridemessages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafindaridemessages[".isUseTimeForSearch"] = false;



$tdatafindaridemessages[".badgeColor"] = "8FBC8B";


$tdatafindaridemessages[".allSearchFields"] = array();
$tdatafindaridemessages[".filterFields"] = array();
$tdatafindaridemessages[".requiredSearchFields"] = array();

$tdatafindaridemessages[".allSearchFields"][] = "ID";
	$tdatafindaridemessages[".allSearchFields"][] = "FindARideID";
	$tdatafindaridemessages[".allSearchFields"][] = "Date";
	$tdatafindaridemessages[".allSearchFields"][] = "FromUsername";
	$tdatafindaridemessages[".allSearchFields"][] = "ToUsername";
	$tdatafindaridemessages[".allSearchFields"][] = "Message";
	$tdatafindaridemessages[".allSearchFields"][] = "SentOrReceived";
	

$tdatafindaridemessages[".googleLikeFields"] = array();
$tdatafindaridemessages[".googleLikeFields"][] = "ID";
$tdatafindaridemessages[".googleLikeFields"][] = "FindARideID";
$tdatafindaridemessages[".googleLikeFields"][] = "Date";
$tdatafindaridemessages[".googleLikeFields"][] = "FromUsername";
$tdatafindaridemessages[".googleLikeFields"][] = "ToUsername";
$tdatafindaridemessages[".googleLikeFields"][] = "Message";
$tdatafindaridemessages[".googleLikeFields"][] = "SentOrReceived";


$tdatafindaridemessages[".advSearchFields"] = array();
$tdatafindaridemessages[".advSearchFields"][] = "ID";
$tdatafindaridemessages[".advSearchFields"][] = "FindARideID";
$tdatafindaridemessages[".advSearchFields"][] = "Date";
$tdatafindaridemessages[".advSearchFields"][] = "FromUsername";
$tdatafindaridemessages[".advSearchFields"][] = "ToUsername";
$tdatafindaridemessages[".advSearchFields"][] = "Message";
$tdatafindaridemessages[".advSearchFields"][] = "SentOrReceived";

$tdatafindaridemessages[".tableType"] = "list";

$tdatafindaridemessages[".printerPageOrientation"] = 0;
$tdatafindaridemessages[".nPrinterPageScale"] = 100;

$tdatafindaridemessages[".nPrinterSplitRecords"] = 40;

$tdatafindaridemessages[".nPrinterPDFSplitRecords"] = 40;



$tdatafindaridemessages[".geocodingEnabled"] = false;





$tdatafindaridemessages[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdatafindaridemessages[".pageSize"] = 20;

$tdatafindaridemessages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafindaridemessages[".strOrderBy"] = $tstrOrderBy;

$tdatafindaridemessages[".orderindexes"] = array();

$tdatafindaridemessages[".sqlHead"] = "SELECT ID,  	FindARideID,  	`Date`,  	FromUsername,  	ToUsername,  	Message,  	SentOrReceived";
$tdatafindaridemessages[".sqlFrom"] = "FROM findaridemessages";
$tdatafindaridemessages[".sqlWhereExpr"] = "";
$tdatafindaridemessages[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafindaridemessages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafindaridemessages[".arrGroupsPerPage"] = $arrGPP;

$tdatafindaridemessages[".highlightSearchResults"] = true;

$tableKeysfindaridemessages = array();
$tableKeysfindaridemessages[] = "ID";
$tdatafindaridemessages[".Keys"] = $tableKeysfindaridemessages;

$tdatafindaridemessages[".listFields"] = array();
$tdatafindaridemessages[".listFields"][] = "SentOrReceived";
$tdatafindaridemessages[".listFields"][] = "Date";
$tdatafindaridemessages[".listFields"][] = "ID";
$tdatafindaridemessages[".listFields"][] = "FindARideID";
$tdatafindaridemessages[".listFields"][] = "FromUsername";
$tdatafindaridemessages[".listFields"][] = "ToUsername";
$tdatafindaridemessages[".listFields"][] = "Message";

$tdatafindaridemessages[".hideMobileList"] = array();


$tdatafindaridemessages[".viewFields"] = array();
$tdatafindaridemessages[".viewFields"][] = "ID";
$tdatafindaridemessages[".viewFields"][] = "FindARideID";
$tdatafindaridemessages[".viewFields"][] = "Date";
$tdatafindaridemessages[".viewFields"][] = "FromUsername";
$tdatafindaridemessages[".viewFields"][] = "ToUsername";
$tdatafindaridemessages[".viewFields"][] = "Message";
$tdatafindaridemessages[".viewFields"][] = "SentOrReceived";

$tdatafindaridemessages[".addFields"] = array();

$tdatafindaridemessages[".masterListFields"] = array();
$tdatafindaridemessages[".masterListFields"][] = "ID";
$tdatafindaridemessages[".masterListFields"][] = "FindARideID";
$tdatafindaridemessages[".masterListFields"][] = "Date";
$tdatafindaridemessages[".masterListFields"][] = "FromUsername";
$tdatafindaridemessages[".masterListFields"][] = "ToUsername";
$tdatafindaridemessages[".masterListFields"][] = "Message";
$tdatafindaridemessages[".masterListFields"][] = "SentOrReceived";

$tdatafindaridemessages[".inlineAddFields"] = array();
$tdatafindaridemessages[".inlineAddFields"][] = "Date";
$tdatafindaridemessages[".inlineAddFields"][] = "SentOrReceived";
$tdatafindaridemessages[".inlineAddFields"][] = "FindARideID";
$tdatafindaridemessages[".inlineAddFields"][] = "FromUsername";
$tdatafindaridemessages[".inlineAddFields"][] = "ToUsername";
$tdatafindaridemessages[".inlineAddFields"][] = "Message";

$tdatafindaridemessages[".editFields"] = array();

$tdatafindaridemessages[".inlineEditFields"] = array();
$tdatafindaridemessages[".inlineEditFields"][] = "Date";
$tdatafindaridemessages[".inlineEditFields"][] = "SentOrReceived";
$tdatafindaridemessages[".inlineEditFields"][] = "FindARideID";
$tdatafindaridemessages[".inlineEditFields"][] = "FromUsername";
$tdatafindaridemessages[".inlineEditFields"][] = "ToUsername";
$tdatafindaridemessages[".inlineEditFields"][] = "Message";

$tdatafindaridemessages[".updateSelectedFields"] = array();


$tdatafindaridemessages[".exportFields"] = array();
$tdatafindaridemessages[".exportFields"][] = "ID";
$tdatafindaridemessages[".exportFields"][] = "FindARideID";
$tdatafindaridemessages[".exportFields"][] = "Date";
$tdatafindaridemessages[".exportFields"][] = "FromUsername";
$tdatafindaridemessages[".exportFields"][] = "ToUsername";
$tdatafindaridemessages[".exportFields"][] = "Message";
$tdatafindaridemessages[".exportFields"][] = "SentOrReceived";

$tdatafindaridemessages[".importFields"] = array();
$tdatafindaridemessages[".importFields"][] = "ID";
$tdatafindaridemessages[".importFields"][] = "FindARideID";
$tdatafindaridemessages[".importFields"][] = "Date";
$tdatafindaridemessages[".importFields"][] = "FromUsername";
$tdatafindaridemessages[".importFields"][] = "ToUsername";
$tdatafindaridemessages[".importFields"][] = "Message";
$tdatafindaridemessages[".importFields"][] = "SentOrReceived";

$tdatafindaridemessages[".printFields"] = array();
$tdatafindaridemessages[".printFields"][] = "ID";
$tdatafindaridemessages[".printFields"][] = "FindARideID";
$tdatafindaridemessages[".printFields"][] = "Date";
$tdatafindaridemessages[".printFields"][] = "FromUsername";
$tdatafindaridemessages[".printFields"][] = "ToUsername";
$tdatafindaridemessages[".printFields"][] = "Message";
$tdatafindaridemessages[".printFields"][] = "SentOrReceived";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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




	$tdatafindaridemessages["ID"] = $fdata;
//	FindARideID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FindARideID";
	$fdata["GoodName"] = "FindARideID";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","FindARideID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FindARideID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FindARideID";

	
	
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




	$tdatafindaridemessages["FindARideID"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","Date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Date`";

	
	
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




	$tdatafindaridemessages["Date"] = $fdata;
//	FromUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromUsername";
	$fdata["GoodName"] = "FromUsername";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","FromUsername");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FromUsername";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromUsername";

	
	
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




	$tdatafindaridemessages["FromUsername"] = $fdata;
//	ToUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToUsername";
	$fdata["GoodName"] = "ToUsername";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","ToUsername");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ToUsername";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToUsername";

	
	
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




	$tdatafindaridemessages["ToUsername"] = $fdata;
//	Message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Message";
	$fdata["GoodName"] = "Message";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","Message");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Message";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatafindaridemessages["Message"] = $fdata;
//	SentOrReceived
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SentOrReceived";
	$fdata["GoodName"] = "SentOrReceived";
	$fdata["ownerTable"] = "findaridemessages";
	$fdata["Label"] = GetFieldLabel("findaridemessages","SentOrReceived");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SentOrReceived";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SentOrReceived";

	
	
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
	$edata["LookupTable"] = "lookups";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
	
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




	$tdatafindaridemessages["SentOrReceived"] = $fdata;


$tables_data["findaridemessages"]=&$tdatafindaridemessages;
$field_labels["findaridemessages"] = &$fieldLabelsfindaridemessages;
$fieldToolTips["findaridemessages"] = &$fieldToolTipsfindaridemessages;
$page_titles["findaridemessages"] = &$pageTitlesfindaridemessages;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["findaridemessages"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["findaridemessages"] = array();


	
				$strOriginalDetailsTable="findaride";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="findaride";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "findaride";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
					$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["findaridemessages"][0] = $masterParams;
				$masterTablesData["findaridemessages"][0]["masterKeys"] = array();
	$masterTablesData["findaridemessages"][0]["masterKeys"][]="id";
				$masterTablesData["findaridemessages"][0]["detailKeys"] = array();
	$masterTablesData["findaridemessages"][0]["detailKeys"][]="FindARideID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_findaridemessages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	FindARideID,  	`Date`,  	FromUsername,  	ToUsername,  	Message,  	SentOrReceived";
$proto0["m_strFrom"] = "FROM findaridemessages";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "ID",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "findaridemessages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FindARideID",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto8["m_sql"] = "FindARideID";
$proto8["m_srcTableName"] = "findaridemessages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto10["m_sql"] = "`Date`";
$proto10["m_srcTableName"] = "findaridemessages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromUsername",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto12["m_sql"] = "FromUsername";
$proto12["m_srcTableName"] = "findaridemessages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToUsername",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto14["m_sql"] = "ToUsername";
$proto14["m_srcTableName"] = "findaridemessages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Message",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto16["m_sql"] = "Message";
$proto16["m_srcTableName"] = "findaridemessages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SentOrReceived",
	"m_strTable" => "findaridemessages",
	"m_srcTableName" => "findaridemessages"
));

$proto18["m_sql"] = "SentOrReceived";
$proto18["m_srcTableName"] = "findaridemessages";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "findaridemessages";
$proto21["m_srcTableName"] = "findaridemessages";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "FindARideID";
$proto21["m_columns"][] = "Date";
$proto21["m_columns"][] = "FromUsername";
$proto21["m_columns"][] = "ToUsername";
$proto21["m_columns"][] = "Message";
$proto21["m_columns"][] = "SentOrReceived";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "findaridemessages";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "findaridemessages";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="findaridemessages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_findaridemessages = createSqlQuery_findaridemessages();


	
		;

							

$tdatafindaridemessages[".sqlquery"] = $queryData_findaridemessages;

include_once(getabspath("include/findaridemessages_events.php"));
$tableEvents["findaridemessages"] = new eventclass_findaridemessages;
$tdatafindaridemessages[".hasEvents"] = true;

?>