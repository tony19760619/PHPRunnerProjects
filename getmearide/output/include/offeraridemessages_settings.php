<?php
require_once(getabspath("classes/cipherer.php"));




$tdataofferaridemessages = array();
	$tdataofferaridemessages[".truncateText"] = true;
	$tdataofferaridemessages[".NumberOfChars"] = 80;
	$tdataofferaridemessages[".ShortName"] = "offeraridemessages";
	$tdataofferaridemessages[".OwnerID"] = "";
	$tdataofferaridemessages[".OriginalTable"] = "offeraridemessages";

//	field labels
$fieldLabelsofferaridemessages = array();
$fieldToolTipsofferaridemessages = array();
$pageTitlesofferaridemessages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsofferaridemessages["English"] = array();
	$fieldToolTipsofferaridemessages["English"] = array();
	$pageTitlesofferaridemessages["English"] = array();
	$fieldLabelsofferaridemessages["English"]["DateSent"] = "Date Sent";
	$fieldToolTipsofferaridemessages["English"]["DateSent"] = "";
	$fieldLabelsofferaridemessages["English"]["ID"] = "ID";
	$fieldToolTipsofferaridemessages["English"]["ID"] = "";
	$fieldLabelsofferaridemessages["English"]["OfferARideID"] = "Offer A Ride ID";
	$fieldToolTipsofferaridemessages["English"]["OfferARideID"] = "";
	$fieldLabelsofferaridemessages["English"]["FromUsername"] = "From Username";
	$fieldToolTipsofferaridemessages["English"]["FromUsername"] = "";
	$fieldLabelsofferaridemessages["English"]["ToUsername"] = "To Username";
	$fieldToolTipsofferaridemessages["English"]["ToUsername"] = "";
	$fieldLabelsofferaridemessages["English"]["Message"] = "Message";
	$fieldToolTipsofferaridemessages["English"]["Message"] = "";
	$fieldLabelsofferaridemessages["English"]["Date"] = "Date";
	$fieldToolTipsofferaridemessages["English"]["Date"] = "";
	$fieldLabelsofferaridemessages["English"]["SentOrReceived"] = "Sent Or Received";
	$fieldToolTipsofferaridemessages["English"]["SentOrReceived"] = "";
	if (count($fieldToolTipsofferaridemessages["English"]))
		$tdataofferaridemessages[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsofferaridemessages[""] = array();
	$fieldToolTipsofferaridemessages[""] = array();
	$pageTitlesofferaridemessages[""] = array();
	$fieldLabelsofferaridemessages[""]["DateSent"] = "Date Sent";
	$fieldToolTipsofferaridemessages[""]["DateSent"] = "";
	$fieldLabelsofferaridemessages[""]["ID"] = "ID";
	$fieldToolTipsofferaridemessages[""]["ID"] = "";
	$fieldLabelsofferaridemessages[""]["OfferARideID"] = "Offer ARide ID";
	$fieldToolTipsofferaridemessages[""]["OfferARideID"] = "";
	$fieldLabelsofferaridemessages[""]["FromUsername"] = "From Username";
	$fieldToolTipsofferaridemessages[""]["FromUsername"] = "";
	$fieldLabelsofferaridemessages[""]["ToUsername"] = "To Username";
	$fieldToolTipsofferaridemessages[""]["ToUsername"] = "";
	$fieldLabelsofferaridemessages[""]["Message"] = "Message";
	$fieldToolTipsofferaridemessages[""]["Message"] = "";
	$fieldLabelsofferaridemessages[""]["Date"] = "Date";
	$fieldToolTipsofferaridemessages[""]["Date"] = "";
	$fieldLabelsofferaridemessages[""]["SentOrReceived"] = "Sent Or Received";
	$fieldToolTipsofferaridemessages[""]["SentOrReceived"] = "";
	if (count($fieldToolTipsofferaridemessages[""]))
		$tdataofferaridemessages[".isUseToolTips"] = true;
}


	$tdataofferaridemessages[".NCSearch"] = true;



$tdataofferaridemessages[".shortTableName"] = "offeraridemessages";
$tdataofferaridemessages[".nSecOptions"] = 0;
$tdataofferaridemessages[".recsPerRowPrint"] = 1;
$tdataofferaridemessages[".mainTableOwnerID"] = "";
$tdataofferaridemessages[".moveNext"] = 1;
$tdataofferaridemessages[".entityType"] = 0;

$tdataofferaridemessages[".strOriginalTableName"] = "offeraridemessages";

	



$tdataofferaridemessages[".showAddInPopup"] = false;

$tdataofferaridemessages[".showEditInPopup"] = false;

$tdataofferaridemessages[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataofferaridemessages[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataofferaridemessages[".fieldsForRegister"] = array();

$tdataofferaridemessages[".listAjax"] = false;

	$tdataofferaridemessages[".audit"] = false;

	$tdataofferaridemessages[".locking"] = false;



$tdataofferaridemessages[".list"] = true;

$tdataofferaridemessages[".inlineEdit"] = true;



$tdataofferaridemessages[".inlineAdd"] = true;
$tdataofferaridemessages[".view"] = true;

$tdataofferaridemessages[".import"] = true;

$tdataofferaridemessages[".exportTo"] = true;

$tdataofferaridemessages[".printFriendly"] = true;

$tdataofferaridemessages[".delete"] = true;

$tdataofferaridemessages[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataofferaridemessages[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataofferaridemessages[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataofferaridemessages[".searchSaving"] = false;
//

$tdataofferaridemessages[".showSearchPanel"] = true;
		$tdataofferaridemessages[".flexibleSearch"] = true;

$tdataofferaridemessages[".isUseAjaxSuggest"] = true;

$tdataofferaridemessages[".rowHighlite"] = true;



$tdataofferaridemessages[".addPageEvents"] = false;

// use timepicker for search panel
$tdataofferaridemessages[".isUseTimeForSearch"] = false;



$tdataofferaridemessages[".badgeColor"] = "CD5C5C";


$tdataofferaridemessages[".allSearchFields"] = array();
$tdataofferaridemessages[".filterFields"] = array();
$tdataofferaridemessages[".requiredSearchFields"] = array();

$tdataofferaridemessages[".allSearchFields"][] = "SentOrReceived";
	$tdataofferaridemessages[".allSearchFields"][] = "Date";
	$tdataofferaridemessages[".allSearchFields"][] = "ID";
	$tdataofferaridemessages[".allSearchFields"][] = "OfferARideID";
	$tdataofferaridemessages[".allSearchFields"][] = "FromUsername";
	$tdataofferaridemessages[".allSearchFields"][] = "ToUsername";
	$tdataofferaridemessages[".allSearchFields"][] = "Message";
	

$tdataofferaridemessages[".googleLikeFields"] = array();
$tdataofferaridemessages[".googleLikeFields"][] = "ID";
$tdataofferaridemessages[".googleLikeFields"][] = "OfferARideID";
$tdataofferaridemessages[".googleLikeFields"][] = "Date";
$tdataofferaridemessages[".googleLikeFields"][] = "FromUsername";
$tdataofferaridemessages[".googleLikeFields"][] = "ToUsername";
$tdataofferaridemessages[".googleLikeFields"][] = "Message";
$tdataofferaridemessages[".googleLikeFields"][] = "SentOrReceived";


$tdataofferaridemessages[".advSearchFields"] = array();
$tdataofferaridemessages[".advSearchFields"][] = "SentOrReceived";
$tdataofferaridemessages[".advSearchFields"][] = "Date";
$tdataofferaridemessages[".advSearchFields"][] = "ID";
$tdataofferaridemessages[".advSearchFields"][] = "OfferARideID";
$tdataofferaridemessages[".advSearchFields"][] = "FromUsername";
$tdataofferaridemessages[".advSearchFields"][] = "ToUsername";
$tdataofferaridemessages[".advSearchFields"][] = "Message";

$tdataofferaridemessages[".tableType"] = "list";

$tdataofferaridemessages[".printerPageOrientation"] = 0;
$tdataofferaridemessages[".nPrinterPageScale"] = 100;

$tdataofferaridemessages[".nPrinterSplitRecords"] = 40;

$tdataofferaridemessages[".nPrinterPDFSplitRecords"] = 40;



$tdataofferaridemessages[".geocodingEnabled"] = false;





$tdataofferaridemessages[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataofferaridemessages[".pageSize"] = 20;

$tdataofferaridemessages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataofferaridemessages[".strOrderBy"] = $tstrOrderBy;

$tdataofferaridemessages[".orderindexes"] = array();

$tdataofferaridemessages[".sqlHead"] = "SELECT ID,  	OfferARideID,  	`Date`,  	FromUsername,  	ToUsername,  	Message,  	SentOrReceived";
$tdataofferaridemessages[".sqlFrom"] = "FROM offeraridemessages";
$tdataofferaridemessages[".sqlWhereExpr"] = "";
$tdataofferaridemessages[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataofferaridemessages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataofferaridemessages[".arrGroupsPerPage"] = $arrGPP;

$tdataofferaridemessages[".highlightSearchResults"] = true;

$tableKeysofferaridemessages = array();
$tableKeysofferaridemessages[] = "ID";
$tdataofferaridemessages[".Keys"] = $tableKeysofferaridemessages;

$tdataofferaridemessages[".listFields"] = array();
$tdataofferaridemessages[".listFields"][] = "SentOrReceived";
$tdataofferaridemessages[".listFields"][] = "Date";
$tdataofferaridemessages[".listFields"][] = "ID";
$tdataofferaridemessages[".listFields"][] = "OfferARideID";
$tdataofferaridemessages[".listFields"][] = "FromUsername";
$tdataofferaridemessages[".listFields"][] = "ToUsername";
$tdataofferaridemessages[".listFields"][] = "Message";

$tdataofferaridemessages[".hideMobileList"] = array();


$tdataofferaridemessages[".viewFields"] = array();
$tdataofferaridemessages[".viewFields"][] = "SentOrReceived";
$tdataofferaridemessages[".viewFields"][] = "Date";
$tdataofferaridemessages[".viewFields"][] = "ID";
$tdataofferaridemessages[".viewFields"][] = "OfferARideID";
$tdataofferaridemessages[".viewFields"][] = "FromUsername";
$tdataofferaridemessages[".viewFields"][] = "ToUsername";
$tdataofferaridemessages[".viewFields"][] = "Message";

$tdataofferaridemessages[".addFields"] = array();

$tdataofferaridemessages[".masterListFields"] = array();
$tdataofferaridemessages[".masterListFields"][] = "ID";
$tdataofferaridemessages[".masterListFields"][] = "OfferARideID";
$tdataofferaridemessages[".masterListFields"][] = "Date";
$tdataofferaridemessages[".masterListFields"][] = "FromUsername";
$tdataofferaridemessages[".masterListFields"][] = "ToUsername";
$tdataofferaridemessages[".masterListFields"][] = "Message";
$tdataofferaridemessages[".masterListFields"][] = "SentOrReceived";

$tdataofferaridemessages[".inlineAddFields"] = array();
$tdataofferaridemessages[".inlineAddFields"][] = "Date";
$tdataofferaridemessages[".inlineAddFields"][] = "SentOrReceived";
$tdataofferaridemessages[".inlineAddFields"][] = "OfferARideID";
$tdataofferaridemessages[".inlineAddFields"][] = "FromUsername";
$tdataofferaridemessages[".inlineAddFields"][] = "ToUsername";
$tdataofferaridemessages[".inlineAddFields"][] = "Message";

$tdataofferaridemessages[".editFields"] = array();

$tdataofferaridemessages[".inlineEditFields"] = array();
$tdataofferaridemessages[".inlineEditFields"][] = "Date";
$tdataofferaridemessages[".inlineEditFields"][] = "SentOrReceived";
$tdataofferaridemessages[".inlineEditFields"][] = "OfferARideID";
$tdataofferaridemessages[".inlineEditFields"][] = "FromUsername";
$tdataofferaridemessages[".inlineEditFields"][] = "ToUsername";
$tdataofferaridemessages[".inlineEditFields"][] = "Message";

$tdataofferaridemessages[".updateSelectedFields"] = array();


$tdataofferaridemessages[".exportFields"] = array();
$tdataofferaridemessages[".exportFields"][] = "SentOrReceived";
$tdataofferaridemessages[".exportFields"][] = "Date";
$tdataofferaridemessages[".exportFields"][] = "ID";
$tdataofferaridemessages[".exportFields"][] = "OfferARideID";
$tdataofferaridemessages[".exportFields"][] = "FromUsername";
$tdataofferaridemessages[".exportFields"][] = "ToUsername";
$tdataofferaridemessages[".exportFields"][] = "Message";

$tdataofferaridemessages[".importFields"] = array();
$tdataofferaridemessages[".importFields"][] = "ID";
$tdataofferaridemessages[".importFields"][] = "OfferARideID";
$tdataofferaridemessages[".importFields"][] = "Date";
$tdataofferaridemessages[".importFields"][] = "FromUsername";
$tdataofferaridemessages[".importFields"][] = "ToUsername";
$tdataofferaridemessages[".importFields"][] = "Message";
$tdataofferaridemessages[".importFields"][] = "SentOrReceived";

$tdataofferaridemessages[".printFields"] = array();
$tdataofferaridemessages[".printFields"][] = "SentOrReceived";
$tdataofferaridemessages[".printFields"][] = "Date";
$tdataofferaridemessages[".printFields"][] = "ID";
$tdataofferaridemessages[".printFields"][] = "OfferARideID";
$tdataofferaridemessages[".printFields"][] = "FromUsername";
$tdataofferaridemessages[".printFields"][] = "ToUsername";
$tdataofferaridemessages[".printFields"][] = "Message";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","ID");
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




	$tdataofferaridemessages["ID"] = $fdata;
//	OfferARideID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OfferARideID";
	$fdata["GoodName"] = "OfferARideID";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","OfferARideID");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OfferARideID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OfferARideID";

	
	
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




	$tdataofferaridemessages["OfferARideID"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","Date");
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




	$tdataofferaridemessages["Date"] = $fdata;
//	FromUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FromUsername";
	$fdata["GoodName"] = "FromUsername";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","FromUsername");
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




	$tdataofferaridemessages["FromUsername"] = $fdata;
//	ToUsername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ToUsername";
	$fdata["GoodName"] = "ToUsername";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","ToUsername");
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




	$tdataofferaridemessages["ToUsername"] = $fdata;
//	Message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Message";
	$fdata["GoodName"] = "Message";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","Message");
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




	$tdataofferaridemessages["Message"] = $fdata;
//	SentOrReceived
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SentOrReceived";
	$fdata["GoodName"] = "SentOrReceived";
	$fdata["ownerTable"] = "offeraridemessages";
	$fdata["Label"] = GetFieldLabel("offeraridemessages","SentOrReceived");
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




	$tdataofferaridemessages["SentOrReceived"] = $fdata;


$tables_data["offeraridemessages"]=&$tdataofferaridemessages;
$field_labels["offeraridemessages"] = &$fieldLabelsofferaridemessages;
$fieldToolTips["offeraridemessages"] = &$fieldToolTipsofferaridemessages;
$page_titles["offeraridemessages"] = &$pageTitlesofferaridemessages;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["offeraridemessages"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["offeraridemessages"] = array();


	
				$strOriginalDetailsTable="offeraride";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="offeraride";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "offeraride";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
		
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["offeraridemessages"][0] = $masterParams;
				$masterTablesData["offeraridemessages"][0]["masterKeys"] = array();
	$masterTablesData["offeraridemessages"][0]["masterKeys"][]="id";
				$masterTablesData["offeraridemessages"][0]["detailKeys"] = array();
	$masterTablesData["offeraridemessages"][0]["detailKeys"][]="OfferARideID";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_offeraridemessages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	OfferARideID,  	`Date`,  	FromUsername,  	ToUsername,  	Message,  	SentOrReceived";
$proto0["m_strFrom"] = "FROM offeraridemessages";
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
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "offeraridemessages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "OfferARideID",
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto8["m_sql"] = "OfferARideID";
$proto8["m_srcTableName"] = "offeraridemessages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto10["m_sql"] = "`Date`";
$proto10["m_srcTableName"] = "offeraridemessages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FromUsername",
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto12["m_sql"] = "FromUsername";
$proto12["m_srcTableName"] = "offeraridemessages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ToUsername",
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto14["m_sql"] = "ToUsername";
$proto14["m_srcTableName"] = "offeraridemessages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Message",
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto16["m_sql"] = "Message";
$proto16["m_srcTableName"] = "offeraridemessages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SentOrReceived",
	"m_strTable" => "offeraridemessages",
	"m_srcTableName" => "offeraridemessages"
));

$proto18["m_sql"] = "SentOrReceived";
$proto18["m_srcTableName"] = "offeraridemessages";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "offeraridemessages";
$proto21["m_srcTableName"] = "offeraridemessages";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "OfferARideID";
$proto21["m_columns"][] = "Date";
$proto21["m_columns"][] = "FromUsername";
$proto21["m_columns"][] = "ToUsername";
$proto21["m_columns"][] = "Message";
$proto21["m_columns"][] = "SentOrReceived";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "offeraridemessages";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "offeraridemessages";
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
$proto0["m_srcTableName"]="offeraridemessages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_offeraridemessages = createSqlQuery_offeraridemessages();


	
		;

							

$tdataofferaridemessages[".sqlquery"] = $queryData_offeraridemessages;

$tableEvents["offeraridemessages"] = new eventsBase;
$tdataofferaridemessages[".hasEvents"] = false;

?>