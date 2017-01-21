<?php
require_once(getabspath("classes/cipherer.php"));




$tdataofferaride = array();
	$tdataofferaride[".truncateText"] = true;
	$tdataofferaride[".NumberOfChars"] = 80;
	$tdataofferaride[".ShortName"] = "offeraride";
	$tdataofferaride[".OwnerID"] = "";
	$tdataofferaride[".OriginalTable"] = "offeraride";

//	field labels
$fieldLabelsofferaride = array();
$fieldToolTipsofferaride = array();
$pageTitlesofferaride = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsofferaride["English"] = array();
	$fieldToolTipsofferaride["English"] = array();
	$pageTitlesofferaride["English"] = array();
	$fieldLabelsofferaride["English"]["UsingOwnDriver"] = "Using Own Driver";
	$fieldToolTipsofferaride["English"]["UsingOwnDriver"] = "";
	$fieldLabelsofferaride["English"]["Location"] = "Location";
	$fieldToolTipsofferaride["English"]["Location"] = "";
	$fieldLabelsofferaride["English"]["Picture"] = "Picture";
	$fieldToolTipsofferaride["English"]["Picture"] = "";
	$fieldLabelsofferaride["English"]["id"] = "Id";
	$fieldToolTipsofferaride["English"]["id"] = "";
	$fieldLabelsofferaride["English"]["Username"] = "Username";
	$fieldToolTipsofferaride["English"]["Username"] = "";
	$fieldLabelsofferaride["English"]["TransportType"] = "Transport Type";
	$fieldToolTipsofferaride["English"]["TransportType"] = "";
	$fieldLabelsofferaride["English"]["ChargingPerDay"] = "Charging Per Day";
	$fieldToolTipsofferaride["English"]["ChargingPerDay"] = "";
	$fieldLabelsofferaride["English"]["ChargingPerHalfDay"] = "Charging Per Half Day";
	$fieldToolTipsofferaride["English"]["ChargingPerHalfDay"] = "";
	$fieldLabelsofferaride["English"]["ChargingCoverCharge"] = "Charging Cover Charge";
	$fieldToolTipsofferaride["English"]["ChargingCoverCharge"] = "";
	$fieldLabelsofferaride["English"]["ChargingPerCubicMeterPerKm"] = "Charging Per Cubic Meter Per Km";
	$fieldToolTipsofferaride["English"]["ChargingPerCubicMeterPerKm"] = "";
	$fieldLabelsofferaride["English"]["CurrentLocation"] = "Current Location";
	$fieldToolTipsofferaride["English"]["CurrentLocation"] = "";
	$fieldLabelsofferaride["English"]["WhoDoesTheDriving"] = "Who Does The Driving";
	$fieldToolTipsofferaride["English"]["WhoDoesTheDriving"] = "";
	$fieldLabelsofferaride["English"]["HomeLocation"] = "Home Location";
	$fieldToolTipsofferaride["English"]["HomeLocation"] = "";
	$fieldLabelsofferaride["English"]["TransportPicture"] = "Transport Picture";
	$fieldToolTipsofferaride["English"]["TransportPicture"] = "";
	if (count($fieldToolTipsofferaride["English"]))
		$tdataofferaride[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsofferaride[""] = array();
	$fieldToolTipsofferaride[""] = array();
	$pageTitlesofferaride[""] = array();
	$fieldLabelsofferaride[""]["UsingOwnDriver"] = "Using Own Driver";
	$fieldToolTipsofferaride[""]["UsingOwnDriver"] = "";
	$fieldLabelsofferaride[""]["Location"] = "Location";
	$fieldToolTipsofferaride[""]["Location"] = "";
	$fieldLabelsofferaride[""]["Picture"] = "Picture";
	$fieldToolTipsofferaride[""]["Picture"] = "";
	$fieldLabelsofferaride[""]["Username"] = "Username";
	$fieldToolTipsofferaride[""]["Username"] = "";
	$fieldLabelsofferaride[""]["TransportType"] = "Transport Type";
	$fieldToolTipsofferaride[""]["TransportType"] = "";
	$fieldLabelsofferaride[""]["ChargingPerDay"] = "Charging Per Day";
	$fieldToolTipsofferaride[""]["ChargingPerDay"] = "";
	$fieldLabelsofferaride[""]["ChargingPerHalfDay"] = "Charging Per Half Day";
	$fieldToolTipsofferaride[""]["ChargingPerHalfDay"] = "";
	$fieldLabelsofferaride[""]["ChargingCoverCharge"] = "Charging Cover Charge";
	$fieldToolTipsofferaride[""]["ChargingCoverCharge"] = "";
	$fieldLabelsofferaride[""]["ChargingPerCubicMeterPerKm"] = "Charging Per Cubic Meter Per Km";
	$fieldToolTipsofferaride[""]["ChargingPerCubicMeterPerKm"] = "";
	$fieldLabelsofferaride[""]["CurrentLocation"] = "Current Location";
	$fieldToolTipsofferaride[""]["CurrentLocation"] = "";
	$fieldLabelsofferaride[""]["WhoDoesTheDriving"] = "Who Does The Driving";
	$fieldToolTipsofferaride[""]["WhoDoesTheDriving"] = "";
	$fieldLabelsofferaride[""]["HomeLocation"] = "Home Location";
	$fieldToolTipsofferaride[""]["HomeLocation"] = "";
	$fieldLabelsofferaride[""]["TransportPicture"] = "Transport Picture";
	$fieldToolTipsofferaride[""]["TransportPicture"] = "";
	if (count($fieldToolTipsofferaride[""]))
		$tdataofferaride[".isUseToolTips"] = true;
}


	$tdataofferaride[".NCSearch"] = true;



$tdataofferaride[".shortTableName"] = "offeraride";
$tdataofferaride[".nSecOptions"] = 0;
$tdataofferaride[".recsPerRowList"] = 1;
$tdataofferaride[".recsPerRowPrint"] = 1;
$tdataofferaride[".mainTableOwnerID"] = "";
$tdataofferaride[".moveNext"] = 1;
$tdataofferaride[".entityType"] = 0;

$tdataofferaride[".strOriginalTableName"] = "offeraride";

	



$tdataofferaride[".showAddInPopup"] = false;

$tdataofferaride[".showEditInPopup"] = false;

$tdataofferaride[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataofferaride[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataofferaride[".fieldsForRegister"] = array();

$tdataofferaride[".listAjax"] = false;

	$tdataofferaride[".audit"] = false;

	$tdataofferaride[".locking"] = false;

$tdataofferaride[".edit"] = true;
$tdataofferaride[".afterEditAction"] = 0;
$tdataofferaride[".closePopupAfterEdit"] = 1;
$tdataofferaride[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataofferaride[".add"] = true;
$tdataofferaride[".afterAddAction"] = 0;
$tdataofferaride[".closePopupAfterAdd"] = 1;
$tdataofferaride[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataofferaride[".list"] = true;




$tdataofferaride[".view"] = true;

$tdataofferaride[".import"] = true;

$tdataofferaride[".exportTo"] = true;

$tdataofferaride[".printFriendly"] = true;

$tdataofferaride[".delete"] = true;

$tdataofferaride[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataofferaride[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataofferaride[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataofferaride[".searchSaving"] = false;
//

$tdataofferaride[".showSearchPanel"] = true;
		$tdataofferaride[".flexibleSearch"] = true;

$tdataofferaride[".isUseAjaxSuggest"] = true;

$tdataofferaride[".rowHighlite"] = true;



$tdataofferaride[".addPageEvents"] = false;

// use timepicker for search panel
$tdataofferaride[".isUseTimeForSearch"] = false;



$tdataofferaride[".badgeColor"] = "DB7093";

$tdataofferaride[".detailsLinksOnList"] = "1";

$tdataofferaride[".allSearchFields"] = array();
$tdataofferaride[".filterFields"] = array();
$tdataofferaride[".requiredSearchFields"] = array();

$tdataofferaride[".allSearchFields"][] = "id";
	$tdataofferaride[".allSearchFields"][] = "HomeLocation";
	$tdataofferaride[".allSearchFields"][] = "CurrentLocation";
	$tdataofferaride[".allSearchFields"][] = "TransportPicture";
	$tdataofferaride[".allSearchFields"][] = "TransportType";
	$tdataofferaride[".allSearchFields"][] = "WhoDoesTheDriving";
	$tdataofferaride[".allSearchFields"][] = "ChargingPerDay";
	$tdataofferaride[".allSearchFields"][] = "ChargingPerHalfDay";
	$tdataofferaride[".allSearchFields"][] = "ChargingCoverCharge";
	$tdataofferaride[".allSearchFields"][] = "ChargingPerCubicMeterPerKm";
	$tdataofferaride[".allSearchFields"][] = "Username";
	

$tdataofferaride[".googleLikeFields"] = array();
$tdataofferaride[".googleLikeFields"][] = "id";
$tdataofferaride[".googleLikeFields"][] = "Username";
$tdataofferaride[".googleLikeFields"][] = "HomeLocation";
$tdataofferaride[".googleLikeFields"][] = "TransportType";
$tdataofferaride[".googleLikeFields"][] = "TransportPicture";
$tdataofferaride[".googleLikeFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".googleLikeFields"][] = "ChargingPerDay";
$tdataofferaride[".googleLikeFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".googleLikeFields"][] = "ChargingCoverCharge";
$tdataofferaride[".googleLikeFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".googleLikeFields"][] = "CurrentLocation";


$tdataofferaride[".advSearchFields"] = array();
$tdataofferaride[".advSearchFields"][] = "id";
$tdataofferaride[".advSearchFields"][] = "HomeLocation";
$tdataofferaride[".advSearchFields"][] = "CurrentLocation";
$tdataofferaride[".advSearchFields"][] = "TransportPicture";
$tdataofferaride[".advSearchFields"][] = "TransportType";
$tdataofferaride[".advSearchFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".advSearchFields"][] = "ChargingPerDay";
$tdataofferaride[".advSearchFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".advSearchFields"][] = "ChargingCoverCharge";
$tdataofferaride[".advSearchFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".advSearchFields"][] = "Username";

$tdataofferaride[".tableType"] = "list";

$tdataofferaride[".printerPageOrientation"] = 0;
$tdataofferaride[".nPrinterPageScale"] = 100;

$tdataofferaride[".nPrinterSplitRecords"] = 40;

$tdataofferaride[".nPrinterPDFSplitRecords"] = 40;



$tdataofferaride[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataofferaride[".pageSize"] = 20;

$tdataofferaride[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataofferaride[".strOrderBy"] = $tstrOrderBy;

$tdataofferaride[".orderindexes"] = array();

$tdataofferaride[".sqlHead"] = "SELECT id,  	Username,  	HomeLocation,  	TransportType,  	TransportPicture,  	WhoDoesTheDriving,  	ChargingPerDay,  	ChargingPerHalfDay,  	ChargingCoverCharge,  	ChargingPerCubicMeterPerKm,  	CurrentLocation";
$tdataofferaride[".sqlFrom"] = "FROM offeraride";
$tdataofferaride[".sqlWhereExpr"] = "";
$tdataofferaride[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataofferaride[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataofferaride[".arrGroupsPerPage"] = $arrGPP;

$tdataofferaride[".highlightSearchResults"] = true;

$tableKeysofferaride = array();
$tableKeysofferaride[] = "id";
$tdataofferaride[".Keys"] = $tableKeysofferaride;

$tdataofferaride[".listFields"] = array();
$tdataofferaride[".listFields"][] = "HomeLocation";
$tdataofferaride[".listFields"][] = "CurrentLocation";
$tdataofferaride[".listFields"][] = "TransportType";
$tdataofferaride[".listFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".listFields"][] = "ChargingPerDay";
$tdataofferaride[".listFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".listFields"][] = "ChargingCoverCharge";
$tdataofferaride[".listFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".listFields"][] = "Username";

$tdataofferaride[".hideMobileList"] = array();


$tdataofferaride[".viewFields"] = array();
$tdataofferaride[".viewFields"][] = "id";
$tdataofferaride[".viewFields"][] = "HomeLocation";
$tdataofferaride[".viewFields"][] = "CurrentLocation";
$tdataofferaride[".viewFields"][] = "TransportPicture";
$tdataofferaride[".viewFields"][] = "TransportType";
$tdataofferaride[".viewFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".viewFields"][] = "ChargingPerDay";
$tdataofferaride[".viewFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".viewFields"][] = "ChargingCoverCharge";
$tdataofferaride[".viewFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".viewFields"][] = "Username";

$tdataofferaride[".addFields"] = array();
$tdataofferaride[".addFields"][] = "HomeLocation";
$tdataofferaride[".addFields"][] = "CurrentLocation";
$tdataofferaride[".addFields"][] = "TransportPicture";
$tdataofferaride[".addFields"][] = "TransportType";
$tdataofferaride[".addFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".addFields"][] = "ChargingPerDay";
$tdataofferaride[".addFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".addFields"][] = "ChargingCoverCharge";
$tdataofferaride[".addFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".addFields"][] = "Username";

$tdataofferaride[".masterListFields"] = array();
$tdataofferaride[".masterListFields"][] = "id";
$tdataofferaride[".masterListFields"][] = "HomeLocation";
$tdataofferaride[".masterListFields"][] = "CurrentLocation";
$tdataofferaride[".masterListFields"][] = "TransportPicture";
$tdataofferaride[".masterListFields"][] = "TransportType";
$tdataofferaride[".masterListFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".masterListFields"][] = "ChargingPerDay";
$tdataofferaride[".masterListFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".masterListFields"][] = "ChargingCoverCharge";
$tdataofferaride[".masterListFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".masterListFields"][] = "Username";

$tdataofferaride[".inlineAddFields"] = array();

$tdataofferaride[".editFields"] = array();
$tdataofferaride[".editFields"][] = "HomeLocation";
$tdataofferaride[".editFields"][] = "CurrentLocation";
$tdataofferaride[".editFields"][] = "TransportPicture";
$tdataofferaride[".editFields"][] = "TransportType";
$tdataofferaride[".editFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".editFields"][] = "ChargingPerDay";
$tdataofferaride[".editFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".editFields"][] = "ChargingCoverCharge";
$tdataofferaride[".editFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".editFields"][] = "Username";

$tdataofferaride[".inlineEditFields"] = array();

$tdataofferaride[".updateSelectedFields"] = array();


$tdataofferaride[".exportFields"] = array();
$tdataofferaride[".exportFields"][] = "id";
$tdataofferaride[".exportFields"][] = "HomeLocation";
$tdataofferaride[".exportFields"][] = "CurrentLocation";
$tdataofferaride[".exportFields"][] = "TransportPicture";
$tdataofferaride[".exportFields"][] = "TransportType";
$tdataofferaride[".exportFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".exportFields"][] = "ChargingPerDay";
$tdataofferaride[".exportFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".exportFields"][] = "ChargingCoverCharge";
$tdataofferaride[".exportFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".exportFields"][] = "Username";

$tdataofferaride[".importFields"] = array();
$tdataofferaride[".importFields"][] = "id";
$tdataofferaride[".importFields"][] = "Username";
$tdataofferaride[".importFields"][] = "HomeLocation";
$tdataofferaride[".importFields"][] = "TransportType";
$tdataofferaride[".importFields"][] = "TransportPicture";
$tdataofferaride[".importFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".importFields"][] = "ChargingPerDay";
$tdataofferaride[".importFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".importFields"][] = "ChargingCoverCharge";
$tdataofferaride[".importFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".importFields"][] = "CurrentLocation";

$tdataofferaride[".printFields"] = array();
$tdataofferaride[".printFields"][] = "id";
$tdataofferaride[".printFields"][] = "HomeLocation";
$tdataofferaride[".printFields"][] = "CurrentLocation";
$tdataofferaride[".printFields"][] = "TransportPicture";
$tdataofferaride[".printFields"][] = "TransportType";
$tdataofferaride[".printFields"][] = "WhoDoesTheDriving";
$tdataofferaride[".printFields"][] = "ChargingPerDay";
$tdataofferaride[".printFields"][] = "ChargingPerHalfDay";
$tdataofferaride[".printFields"][] = "ChargingCoverCharge";
$tdataofferaride[".printFields"][] = "ChargingPerCubicMeterPerKm";
$tdataofferaride[".printFields"][] = "Username";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	


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




	$tdataofferaride["id"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","Username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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




	$tdataofferaride["Username"] = $fdata;
//	HomeLocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "HomeLocation";
	$fdata["GoodName"] = "HomeLocation";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","HomeLocation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HomeLocation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HomeLocation";

	
	
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
			$edata["nCols"] = 250;

	
	
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




	$tdataofferaride["HomeLocation"] = $fdata;
//	TransportType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TransportType";
	$fdata["GoodName"] = "TransportType";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","TransportType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransportType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransportType";

	
	
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




	$tdataofferaride["TransportType"] = $fdata;
//	TransportPicture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TransportPicture";
	$fdata["GoodName"] = "TransportPicture";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","TransportPicture");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransportPicture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransportPicture";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 400;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 800;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataofferaride["TransportPicture"] = $fdata;
//	WhoDoesTheDriving
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WhoDoesTheDriving";
	$fdata["GoodName"] = "WhoDoesTheDriving";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","WhoDoesTheDriving");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WhoDoesTheDriving";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WhoDoesTheDriving";

	
	
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




	$tdataofferaride["WhoDoesTheDriving"] = $fdata;
//	ChargingPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ChargingPerDay";
	$fdata["GoodName"] = "ChargingPerDay";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","ChargingPerDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ChargingPerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChargingPerDay";

	
	
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




	$tdataofferaride["ChargingPerDay"] = $fdata;
//	ChargingPerHalfDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ChargingPerHalfDay";
	$fdata["GoodName"] = "ChargingPerHalfDay";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","ChargingPerHalfDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ChargingPerHalfDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChargingPerHalfDay";

	
	
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




	$tdataofferaride["ChargingPerHalfDay"] = $fdata;
//	ChargingCoverCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ChargingCoverCharge";
	$fdata["GoodName"] = "ChargingCoverCharge";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","ChargingCoverCharge");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ChargingCoverCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChargingCoverCharge";

	
	
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




	$tdataofferaride["ChargingCoverCharge"] = $fdata;
//	ChargingPerCubicMeterPerKm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ChargingPerCubicMeterPerKm";
	$fdata["GoodName"] = "ChargingPerCubicMeterPerKm";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","ChargingPerCubicMeterPerKm");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ChargingPerCubicMeterPerKm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChargingPerCubicMeterPerKm";

	
	
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




	$tdataofferaride["ChargingPerCubicMeterPerKm"] = $fdata;
//	CurrentLocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CurrentLocation";
	$fdata["GoodName"] = "CurrentLocation";
	$fdata["ownerTable"] = "offeraride";
	$fdata["Label"] = GetFieldLabel("offeraride","CurrentLocation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CurrentLocation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentLocation";

	
	
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
			$edata["nCols"] = 250;

	
	
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




	$tdataofferaride["CurrentLocation"] = $fdata;


$tables_data["offeraride"]=&$tdataofferaride;
$field_labels["offeraride"] = &$fieldLabelsofferaride;
$fieldToolTips["offeraride"] = &$fieldToolTipsofferaride;
$page_titles["offeraride"] = &$pageTitlesofferaride;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["offeraride"] = array();
//	offeraridemessages
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="offeraridemessages";
		$detailsParam["dOriginalTable"] = "offeraridemessages";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "offeraridemessages";
	$detailsParam["dCaptionTable"] = GetTableCaption("offeraridemessages");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "0";
*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
			$detailsParam["previewOnList"] = "1";
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["offeraride"][$dIndex] = $detailsParam;

	
		$detailsTablesData["offeraride"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["offeraride"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["offeraride"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["offeraride"][$dIndex]["detailKeys"][]="OfferARideID";

// tables which are master tables for current table (detail)
$masterTablesData["offeraride"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_offeraride()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Username,  	HomeLocation,  	TransportType,  	TransportPicture,  	WhoDoesTheDriving,  	ChargingPerDay,  	ChargingPerHalfDay,  	ChargingCoverCharge,  	ChargingPerCubicMeterPerKm,  	CurrentLocation";
$proto0["m_strFrom"] = "FROM offeraride";
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
	"m_strName" => "id",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "offeraride";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto8["m_sql"] = "Username";
$proto8["m_srcTableName"] = "offeraride";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "HomeLocation",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto10["m_sql"] = "HomeLocation";
$proto10["m_srcTableName"] = "offeraride";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TransportType",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto12["m_sql"] = "TransportType";
$proto12["m_srcTableName"] = "offeraride";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TransportPicture",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto14["m_sql"] = "TransportPicture";
$proto14["m_srcTableName"] = "offeraride";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WhoDoesTheDriving",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto16["m_sql"] = "WhoDoesTheDriving";
$proto16["m_srcTableName"] = "offeraride";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ChargingPerDay",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto18["m_sql"] = "ChargingPerDay";
$proto18["m_srcTableName"] = "offeraride";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ChargingPerHalfDay",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto20["m_sql"] = "ChargingPerHalfDay";
$proto20["m_srcTableName"] = "offeraride";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ChargingCoverCharge",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto22["m_sql"] = "ChargingCoverCharge";
$proto22["m_srcTableName"] = "offeraride";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ChargingPerCubicMeterPerKm",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto24["m_sql"] = "ChargingPerCubicMeterPerKm";
$proto24["m_srcTableName"] = "offeraride";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentLocation",
	"m_strTable" => "offeraride",
	"m_srcTableName" => "offeraride"
));

$proto26["m_sql"] = "CurrentLocation";
$proto26["m_srcTableName"] = "offeraride";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "offeraride";
$proto29["m_srcTableName"] = "offeraride";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "Username";
$proto29["m_columns"][] = "HomeLocation";
$proto29["m_columns"][] = "TransportType";
$proto29["m_columns"][] = "TransportPicture";
$proto29["m_columns"][] = "WhoDoesTheDriving";
$proto29["m_columns"][] = "ChargingPerDay";
$proto29["m_columns"][] = "ChargingPerHalfDay";
$proto29["m_columns"][] = "ChargingCoverCharge";
$proto29["m_columns"][] = "ChargingPerCubicMeterPerKm";
$proto29["m_columns"][] = "CurrentLocation";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "offeraride";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "offeraride";
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
$proto0["m_srcTableName"]="offeraride";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_offeraride = createSqlQuery_offeraride();


	
		;

											

$tdataofferaride[".sqlquery"] = $queryData_offeraride;

$tableEvents["offeraride"] = new eventsBase;
$tdataofferaride[".hasEvents"] = false;

?>