<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafindaride = array();
	$tdatafindaride[".truncateText"] = true;
	$tdatafindaride[".NumberOfChars"] = 80;
	$tdatafindaride[".ShortName"] = "findaride";
	$tdatafindaride[".OwnerID"] = "";
	$tdatafindaride[".OriginalTable"] = "findaride";

//	field labels
$fieldLabelsfindaride = array();
$fieldToolTipsfindaride = array();
$pageTitlesfindaride = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfindaride["English"] = array();
	$fieldToolTipsfindaride["English"] = array();
	$pageTitlesfindaride["English"] = array();
	$fieldLabelsfindaride["English"]["id"] = "Id";
	$fieldToolTipsfindaride["English"]["id"] = "";
	$fieldLabelsfindaride["English"]["Username"] = "Username";
	$fieldToolTipsfindaride["English"]["Username"] = "";
	$fieldLabelsfindaride["English"]["FromLocation"] = "From Location";
	$fieldToolTipsfindaride["English"]["FromLocation"] = "";
	$fieldLabelsfindaride["English"]["ToLocation"] = "To Location";
	$fieldToolTipsfindaride["English"]["ToLocation"] = "";
	$fieldLabelsfindaride["English"]["FromDate"] = "From Date";
	$fieldToolTipsfindaride["English"]["FromDate"] = "";
	$fieldLabelsfindaride["English"]["ToDate"] = "To Date";
	$fieldToolTipsfindaride["English"]["ToDate"] = "";
	$fieldLabelsfindaride["English"]["TransportWhat"] = "Transport What";
	$fieldToolTipsfindaride["English"]["TransportWhat"] = "";
	$fieldLabelsfindaride["English"]["TypeOfTransport"] = "Type Of Transport";
	$fieldToolTipsfindaride["English"]["TypeOfTransport"] = "";
	$fieldLabelsfindaride["English"]["WillingToPayPerDay"] = "Willing To Pay Per Day";
	$fieldToolTipsfindaride["English"]["WillingToPayPerDay"] = "";
	$fieldLabelsfindaride["English"]["WillingToPayPerHalfDay"] = "Willing To Pay Per Half Day";
	$fieldToolTipsfindaride["English"]["WillingToPayPerHalfDay"] = "";
	$fieldLabelsfindaride["English"]["WillingToPayPerTon"] = "Willing To Pay Per Ton";
	$fieldToolTipsfindaride["English"]["WillingToPayPerTon"] = "";
	$fieldLabelsfindaride["English"]["Tons"] = "Tons";
	$fieldToolTipsfindaride["English"]["Tons"] = "";
	$fieldLabelsfindaride["English"]["CubicMeters"] = "Cubic Meters";
	$fieldToolTipsfindaride["English"]["CubicMeters"] = "";
	$fieldLabelsfindaride["English"]["WillingToPayCoverCharge"] = "Willing To Pay Cover Charge";
	$fieldToolTipsfindaride["English"]["WillingToPayCoverCharge"] = "";
	$fieldLabelsfindaride["English"]["WillingToPayPerCubicMeterPerKm"] = "Willing To Pay Per Cubic Meter Per Km";
	$fieldToolTipsfindaride["English"]["WillingToPayPerCubicMeterPerKm"] = "";
	$fieldLabelsfindaride["English"]["TransportOfWhatPicture"] = "Transport Of What Picture";
	$fieldToolTipsfindaride["English"]["TransportOfWhatPicture"] = "";
	$fieldLabelsfindaride["English"]["DisplayRoute"] = "Display Route";
	$fieldToolTipsfindaride["English"]["DisplayRoute"] = "";
	if (count($fieldToolTipsfindaride["English"]))
		$tdatafindaride[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfindaride[""] = array();
	$fieldToolTipsfindaride[""] = array();
	$pageTitlesfindaride[""] = array();
	if (count($fieldToolTipsfindaride[""]))
		$tdatafindaride[".isUseToolTips"] = true;
}


	$tdatafindaride[".NCSearch"] = true;



$tdatafindaride[".shortTableName"] = "findaride";
$tdatafindaride[".nSecOptions"] = 0;
$tdatafindaride[".recsPerRowPrint"] = 1;
$tdatafindaride[".mainTableOwnerID"] = "";
$tdatafindaride[".moveNext"] = 1;
$tdatafindaride[".entityType"] = 0;

$tdatafindaride[".strOriginalTableName"] = "findaride";

	



$tdatafindaride[".showAddInPopup"] = false;

$tdatafindaride[".showEditInPopup"] = false;

$tdatafindaride[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafindaride[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafindaride[".fieldsForRegister"] = array();

$tdatafindaride[".listAjax"] = false;

	$tdatafindaride[".audit"] = false;

	$tdatafindaride[".locking"] = false;

$tdatafindaride[".edit"] = true;
$tdatafindaride[".afterEditAction"] = 0;
$tdatafindaride[".closePopupAfterEdit"] = 1;
$tdatafindaride[".afterEditActionDetTable"] = "";

$tdatafindaride[".add"] = true;
$tdatafindaride[".afterAddAction"] = 0;
$tdatafindaride[".closePopupAfterAdd"] = 1;
$tdatafindaride[".afterAddActionDetTable"] = "";

$tdatafindaride[".list"] = true;




$tdatafindaride[".view"] = true;

$tdatafindaride[".import"] = true;

$tdatafindaride[".exportTo"] = true;

$tdatafindaride[".printFriendly"] = true;

$tdatafindaride[".delete"] = true;

$tdatafindaride[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafindaride[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafindaride[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafindaride[".searchSaving"] = false;
//

$tdatafindaride[".showSearchPanel"] = true;
		$tdatafindaride[".flexibleSearch"] = true;

$tdatafindaride[".isUseAjaxSuggest"] = true;

$tdatafindaride[".rowHighlite"] = true;



$tdatafindaride[".addPageEvents"] = true;

// use timepicker for search panel
$tdatafindaride[".isUseTimeForSearch"] = false;



$tdatafindaride[".badgeColor"] = "5F9EA0";

$tdatafindaride[".detailsLinksOnList"] = "1";

$tdatafindaride[".allSearchFields"] = array();
$tdatafindaride[".filterFields"] = array();
$tdatafindaride[".requiredSearchFields"] = array();

$tdatafindaride[".allSearchFields"][] = "Username";
	$tdatafindaride[".allSearchFields"][] = "id";
	$tdatafindaride[".allSearchFields"][] = "FromLocation";
	$tdatafindaride[".allSearchFields"][] = "ToLocation";
	$tdatafindaride[".allSearchFields"][] = "DisplayRoute";
	$tdatafindaride[".allSearchFields"][] = "FromDate";
	$tdatafindaride[".allSearchFields"][] = "ToDate";
	$tdatafindaride[".allSearchFields"][] = "TransportWhat";
	$tdatafindaride[".allSearchFields"][] = "TransportOfWhatPicture";
	$tdatafindaride[".allSearchFields"][] = "TypeOfTransport";
	$tdatafindaride[".allSearchFields"][] = "Tons";
	$tdatafindaride[".allSearchFields"][] = "WillingToPayPerDay";
	$tdatafindaride[".allSearchFields"][] = "CubicMeters";
	$tdatafindaride[".allSearchFields"][] = "WillingToPayPerHalfDay";
	$tdatafindaride[".allSearchFields"][] = "WillingToPayPerTon";
	$tdatafindaride[".allSearchFields"][] = "WillingToPayCoverCharge";
	$tdatafindaride[".allSearchFields"][] = "WillingToPayPerCubicMeterPerKm";
	

$tdatafindaride[".googleLikeFields"] = array();
$tdatafindaride[".googleLikeFields"][] = "id";
$tdatafindaride[".googleLikeFields"][] = "Username";
$tdatafindaride[".googleLikeFields"][] = "FromLocation";
$tdatafindaride[".googleLikeFields"][] = "ToLocation";
$tdatafindaride[".googleLikeFields"][] = "FromDate";
$tdatafindaride[".googleLikeFields"][] = "ToDate";
$tdatafindaride[".googleLikeFields"][] = "TransportWhat";
$tdatafindaride[".googleLikeFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".googleLikeFields"][] = "TypeOfTransport";
$tdatafindaride[".googleLikeFields"][] = "WillingToPayPerDay";
$tdatafindaride[".googleLikeFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".googleLikeFields"][] = "WillingToPayPerTon";
$tdatafindaride[".googleLikeFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".googleLikeFields"][] = "WillingToPayPerCubicMeterPerKm";
$tdatafindaride[".googleLikeFields"][] = "Tons";
$tdatafindaride[".googleLikeFields"][] = "CubicMeters";
$tdatafindaride[".googleLikeFields"][] = "DisplayRoute";


$tdatafindaride[".advSearchFields"] = array();
$tdatafindaride[".advSearchFields"][] = "Username";
$tdatafindaride[".advSearchFields"][] = "id";
$tdatafindaride[".advSearchFields"][] = "FromLocation";
$tdatafindaride[".advSearchFields"][] = "ToLocation";
$tdatafindaride[".advSearchFields"][] = "DisplayRoute";
$tdatafindaride[".advSearchFields"][] = "FromDate";
$tdatafindaride[".advSearchFields"][] = "ToDate";
$tdatafindaride[".advSearchFields"][] = "TransportWhat";
$tdatafindaride[".advSearchFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".advSearchFields"][] = "TypeOfTransport";
$tdatafindaride[".advSearchFields"][] = "Tons";
$tdatafindaride[".advSearchFields"][] = "WillingToPayPerDay";
$tdatafindaride[".advSearchFields"][] = "CubicMeters";
$tdatafindaride[".advSearchFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".advSearchFields"][] = "WillingToPayPerTon";
$tdatafindaride[".advSearchFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".advSearchFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".tableType"] = "list";

$tdatafindaride[".printerPageOrientation"] = 0;
$tdatafindaride[".nPrinterPageScale"] = 100;

$tdatafindaride[".nPrinterSplitRecords"] = 40;

$tdatafindaride[".nPrinterPDFSplitRecords"] = 40;



$tdatafindaride[".geocodingEnabled"] = false;





$tdatafindaride[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafindaride[".pageSize"] = 20;

$tdatafindaride[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafindaride[".strOrderBy"] = $tstrOrderBy;

$tdatafindaride[".orderindexes"] = array();

$tdatafindaride[".sqlHead"] = "SELECT id,  	Username,  	FromLocation,  	ToLocation,  	FromDate,  	ToDate,  	TransportWhat,  	TransportOfWhatPicture,  	TypeOfTransport,  	WillingToPayPerDay,  	WillingToPayPerHalfDay,  	WillingToPayPerTon,  	WillingToPayCoverCharge,  	WillingToPayPerCubicMeterPerKm,  	Tons,  	CubicMeters,  	DisplayRoute";
$tdatafindaride[".sqlFrom"] = "FROM findaride";
$tdatafindaride[".sqlWhereExpr"] = "";
$tdatafindaride[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafindaride[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafindaride[".arrGroupsPerPage"] = $arrGPP;

$tdatafindaride[".highlightSearchResults"] = true;

$tableKeysfindaride = array();
$tableKeysfindaride[] = "id";
$tdatafindaride[".Keys"] = $tableKeysfindaride;

$tdatafindaride[".listFields"] = array();
$tdatafindaride[".listFields"][] = "Username";
$tdatafindaride[".listFields"][] = "id";
$tdatafindaride[".listFields"][] = "FromLocation";
$tdatafindaride[".listFields"][] = "ToLocation";
$tdatafindaride[".listFields"][] = "DisplayRoute";
$tdatafindaride[".listFields"][] = "FromDate";
$tdatafindaride[".listFields"][] = "ToDate";
$tdatafindaride[".listFields"][] = "TransportWhat";
$tdatafindaride[".listFields"][] = "TypeOfTransport";
$tdatafindaride[".listFields"][] = "Tons";
$tdatafindaride[".listFields"][] = "WillingToPayPerDay";
$tdatafindaride[".listFields"][] = "CubicMeters";
$tdatafindaride[".listFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".listFields"][] = "WillingToPayPerTon";
$tdatafindaride[".listFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".listFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".hideMobileList"] = array();


$tdatafindaride[".viewFields"] = array();
$tdatafindaride[".viewFields"][] = "Username";
$tdatafindaride[".viewFields"][] = "id";
$tdatafindaride[".viewFields"][] = "FromLocation";
$tdatafindaride[".viewFields"][] = "ToLocation";
$tdatafindaride[".viewFields"][] = "DisplayRoute";
$tdatafindaride[".viewFields"][] = "FromDate";
$tdatafindaride[".viewFields"][] = "ToDate";
$tdatafindaride[".viewFields"][] = "TransportWhat";
$tdatafindaride[".viewFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".viewFields"][] = "TypeOfTransport";
$tdatafindaride[".viewFields"][] = "Tons";
$tdatafindaride[".viewFields"][] = "WillingToPayPerDay";
$tdatafindaride[".viewFields"][] = "CubicMeters";
$tdatafindaride[".viewFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".viewFields"][] = "WillingToPayPerTon";
$tdatafindaride[".viewFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".viewFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".addFields"] = array();
$tdatafindaride[".addFields"][] = "Username";
$tdatafindaride[".addFields"][] = "FromLocation";
$tdatafindaride[".addFields"][] = "ToLocation";
$tdatafindaride[".addFields"][] = "DisplayRoute";
$tdatafindaride[".addFields"][] = "FromDate";
$tdatafindaride[".addFields"][] = "ToDate";
$tdatafindaride[".addFields"][] = "TransportWhat";
$tdatafindaride[".addFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".addFields"][] = "TypeOfTransport";
$tdatafindaride[".addFields"][] = "Tons";
$tdatafindaride[".addFields"][] = "WillingToPayPerDay";
$tdatafindaride[".addFields"][] = "CubicMeters";
$tdatafindaride[".addFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".addFields"][] = "WillingToPayPerTon";
$tdatafindaride[".addFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".addFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".masterListFields"] = array();
$tdatafindaride[".masterListFields"][] = "Username";
$tdatafindaride[".masterListFields"][] = "id";
$tdatafindaride[".masterListFields"][] = "FromLocation";
$tdatafindaride[".masterListFields"][] = "ToLocation";
$tdatafindaride[".masterListFields"][] = "DisplayRoute";
$tdatafindaride[".masterListFields"][] = "FromDate";
$tdatafindaride[".masterListFields"][] = "ToDate";
$tdatafindaride[".masterListFields"][] = "TransportWhat";
$tdatafindaride[".masterListFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".masterListFields"][] = "TypeOfTransport";
$tdatafindaride[".masterListFields"][] = "Tons";
$tdatafindaride[".masterListFields"][] = "WillingToPayPerDay";
$tdatafindaride[".masterListFields"][] = "CubicMeters";
$tdatafindaride[".masterListFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".masterListFields"][] = "WillingToPayPerTon";
$tdatafindaride[".masterListFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".masterListFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".inlineAddFields"] = array();

$tdatafindaride[".editFields"] = array();
$tdatafindaride[".editFields"][] = "Username";
$tdatafindaride[".editFields"][] = "FromLocation";
$tdatafindaride[".editFields"][] = "ToLocation";
$tdatafindaride[".editFields"][] = "DisplayRoute";
$tdatafindaride[".editFields"][] = "FromDate";
$tdatafindaride[".editFields"][] = "ToDate";
$tdatafindaride[".editFields"][] = "TransportWhat";
$tdatafindaride[".editFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".editFields"][] = "TypeOfTransport";
$tdatafindaride[".editFields"][] = "Tons";
$tdatafindaride[".editFields"][] = "WillingToPayPerDay";
$tdatafindaride[".editFields"][] = "CubicMeters";
$tdatafindaride[".editFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".editFields"][] = "WillingToPayPerTon";
$tdatafindaride[".editFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".editFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".inlineEditFields"] = array();

$tdatafindaride[".updateSelectedFields"] = array();


$tdatafindaride[".exportFields"] = array();
$tdatafindaride[".exportFields"][] = "Username";
$tdatafindaride[".exportFields"][] = "id";
$tdatafindaride[".exportFields"][] = "FromLocation";
$tdatafindaride[".exportFields"][] = "ToLocation";
$tdatafindaride[".exportFields"][] = "DisplayRoute";
$tdatafindaride[".exportFields"][] = "FromDate";
$tdatafindaride[".exportFields"][] = "ToDate";
$tdatafindaride[".exportFields"][] = "TransportWhat";
$tdatafindaride[".exportFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".exportFields"][] = "TypeOfTransport";
$tdatafindaride[".exportFields"][] = "Tons";
$tdatafindaride[".exportFields"][] = "WillingToPayPerDay";
$tdatafindaride[".exportFields"][] = "CubicMeters";
$tdatafindaride[".exportFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".exportFields"][] = "WillingToPayPerTon";
$tdatafindaride[".exportFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".exportFields"][] = "WillingToPayPerCubicMeterPerKm";

$tdatafindaride[".importFields"] = array();
$tdatafindaride[".importFields"][] = "id";
$tdatafindaride[".importFields"][] = "Username";
$tdatafindaride[".importFields"][] = "FromLocation";
$tdatafindaride[".importFields"][] = "ToLocation";
$tdatafindaride[".importFields"][] = "FromDate";
$tdatafindaride[".importFields"][] = "ToDate";
$tdatafindaride[".importFields"][] = "TransportWhat";
$tdatafindaride[".importFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".importFields"][] = "TypeOfTransport";
$tdatafindaride[".importFields"][] = "WillingToPayPerDay";
$tdatafindaride[".importFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".importFields"][] = "WillingToPayPerTon";
$tdatafindaride[".importFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".importFields"][] = "WillingToPayPerCubicMeterPerKm";
$tdatafindaride[".importFields"][] = "Tons";
$tdatafindaride[".importFields"][] = "CubicMeters";
$tdatafindaride[".importFields"][] = "DisplayRoute";

$tdatafindaride[".printFields"] = array();
$tdatafindaride[".printFields"][] = "Username";
$tdatafindaride[".printFields"][] = "id";
$tdatafindaride[".printFields"][] = "FromLocation";
$tdatafindaride[".printFields"][] = "ToLocation";
$tdatafindaride[".printFields"][] = "DisplayRoute";
$tdatafindaride[".printFields"][] = "FromDate";
$tdatafindaride[".printFields"][] = "ToDate";
$tdatafindaride[".printFields"][] = "TransportWhat";
$tdatafindaride[".printFields"][] = "TransportOfWhatPicture";
$tdatafindaride[".printFields"][] = "TypeOfTransport";
$tdatafindaride[".printFields"][] = "Tons";
$tdatafindaride[".printFields"][] = "WillingToPayPerDay";
$tdatafindaride[".printFields"][] = "CubicMeters";
$tdatafindaride[".printFields"][] = "WillingToPayPerHalfDay";
$tdatafindaride[".printFields"][] = "WillingToPayPerTon";
$tdatafindaride[".printFields"][] = "WillingToPayCoverCharge";
$tdatafindaride[".printFields"][] = "WillingToPayPerCubicMeterPerKm";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","id");
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




	$tdatafindaride["id"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","Username");
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




	$tdatafindaride["Username"] = $fdata;
//	FromLocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "FromLocation";
	$fdata["GoodName"] = "FromLocation";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","FromLocation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FromLocation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromLocation";

	
	
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




	$tdatafindaride["FromLocation"] = $fdata;
//	ToLocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ToLocation";
	$fdata["GoodName"] = "ToLocation";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","ToLocation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ToLocation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToLocation";

	
	
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




	$tdatafindaride["ToLocation"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","FromDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FromDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdatafindaride["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","ToDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ToDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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




	$tdatafindaride["ToDate"] = $fdata;
//	TransportWhat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TransportWhat";
	$fdata["GoodName"] = "TransportWhat";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","TransportWhat");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransportWhat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransportWhat";

	
	
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




	$tdatafindaride["TransportWhat"] = $fdata;
//	TransportOfWhatPicture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TransportOfWhatPicture";
	$fdata["GoodName"] = "TransportOfWhatPicture";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","TransportOfWhatPicture");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransportOfWhatPicture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransportOfWhatPicture";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "filesFindARide";

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




	$tdatafindaride["TransportOfWhatPicture"] = $fdata;
//	TypeOfTransport
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TypeOfTransport";
	$fdata["GoodName"] = "TypeOfTransport";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","TypeOfTransport");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TypeOfTransport";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TypeOfTransport";

	
	
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 200;
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




	$tdatafindaride["TypeOfTransport"] = $fdata;
//	WillingToPayPerDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WillingToPayPerDay";
	$fdata["GoodName"] = "WillingToPayPerDay";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","WillingToPayPerDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WillingToPayPerDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WillingToPayPerDay";

	
	
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




	$tdatafindaride["WillingToPayPerDay"] = $fdata;
//	WillingToPayPerHalfDay
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "WillingToPayPerHalfDay";
	$fdata["GoodName"] = "WillingToPayPerHalfDay";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","WillingToPayPerHalfDay");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WillingToPayPerHalfDay";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WillingToPayPerHalfDay";

	
	
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




	$tdatafindaride["WillingToPayPerHalfDay"] = $fdata;
//	WillingToPayPerTon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "WillingToPayPerTon";
	$fdata["GoodName"] = "WillingToPayPerTon";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","WillingToPayPerTon");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WillingToPayPerTon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WillingToPayPerTon";

	
	
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




	$tdatafindaride["WillingToPayPerTon"] = $fdata;
//	WillingToPayCoverCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "WillingToPayCoverCharge";
	$fdata["GoodName"] = "WillingToPayCoverCharge";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","WillingToPayCoverCharge");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WillingToPayCoverCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WillingToPayCoverCharge";

	
	
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




	$tdatafindaride["WillingToPayCoverCharge"] = $fdata;
//	WillingToPayPerCubicMeterPerKm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "WillingToPayPerCubicMeterPerKm";
	$fdata["GoodName"] = "WillingToPayPerCubicMeterPerKm";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","WillingToPayPerCubicMeterPerKm");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WillingToPayPerCubicMeterPerKm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WillingToPayPerCubicMeterPerKm";

	
	
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




	$tdatafindaride["WillingToPayPerCubicMeterPerKm"] = $fdata;
//	Tons
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Tons";
	$fdata["GoodName"] = "Tons";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","Tons");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Tons";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tons";

	
	
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




	$tdatafindaride["Tons"] = $fdata;
//	CubicMeters
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CubicMeters";
	$fdata["GoodName"] = "CubicMeters";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","CubicMeters");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CubicMeters";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CubicMeters";

	
	
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




	$tdatafindaride["CubicMeters"] = $fdata;
//	DisplayRoute
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DisplayRoute";
	$fdata["GoodName"] = "DisplayRoute";
	$fdata["ownerTable"] = "findaride";
	$fdata["Label"] = GetFieldLabel("findaride","DisplayRoute");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DisplayRoute";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DisplayRoute";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Check Route On Google Maps";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "HTMLLink");

	
	



	
	
	
	
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




	$tdatafindaride["DisplayRoute"] = $fdata;


$tables_data["findaride"]=&$tdatafindaride;
$field_labels["findaride"] = &$fieldLabelsfindaride;
$fieldToolTips["findaride"] = &$fieldToolTipsfindaride;
$page_titles["findaride"] = &$pageTitlesfindaride;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["findaride"] = array();
//	findaridemessages
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="findaridemessages";
		$detailsParam["dOriginalTable"] = "findaridemessages";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "findaridemessages";
	$detailsParam["dCaptionTable"] = GetTableCaption("findaridemessages");
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
		
	$detailsTablesData["findaride"][$dIndex] = $detailsParam;

	
		$detailsTablesData["findaride"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["findaride"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["findaride"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["findaride"][$dIndex]["detailKeys"][]="FindARideID";

// tables which are master tables for current table (detail)
$masterTablesData["findaride"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_findaride()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Username,  	FromLocation,  	ToLocation,  	FromDate,  	ToDate,  	TransportWhat,  	TransportOfWhatPicture,  	TypeOfTransport,  	WillingToPayPerDay,  	WillingToPayPerHalfDay,  	WillingToPayPerTon,  	WillingToPayCoverCharge,  	WillingToPayPerCubicMeterPerKm,  	Tons,  	CubicMeters,  	DisplayRoute";
$proto0["m_strFrom"] = "FROM findaride";
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
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "findaride";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto8["m_sql"] = "Username";
$proto8["m_srcTableName"] = "findaride";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "FromLocation",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto10["m_sql"] = "FromLocation";
$proto10["m_srcTableName"] = "findaride";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ToLocation",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto12["m_sql"] = "ToLocation";
$proto12["m_srcTableName"] = "findaride";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto14["m_sql"] = "FromDate";
$proto14["m_srcTableName"] = "findaride";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto16["m_sql"] = "ToDate";
$proto16["m_srcTableName"] = "findaride";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TransportWhat",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto18["m_sql"] = "TransportWhat";
$proto18["m_srcTableName"] = "findaride";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TransportOfWhatPicture",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto20["m_sql"] = "TransportOfWhatPicture";
$proto20["m_srcTableName"] = "findaride";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeOfTransport",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto22["m_sql"] = "TypeOfTransport";
$proto22["m_srcTableName"] = "findaride";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WillingToPayPerDay",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto24["m_sql"] = "WillingToPayPerDay";
$proto24["m_srcTableName"] = "findaride";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "WillingToPayPerHalfDay",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto26["m_sql"] = "WillingToPayPerHalfDay";
$proto26["m_srcTableName"] = "findaride";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "WillingToPayPerTon",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto28["m_sql"] = "WillingToPayPerTon";
$proto28["m_srcTableName"] = "findaride";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "WillingToPayCoverCharge",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto30["m_sql"] = "WillingToPayCoverCharge";
$proto30["m_srcTableName"] = "findaride";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "WillingToPayPerCubicMeterPerKm",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto32["m_sql"] = "WillingToPayPerCubicMeterPerKm";
$proto32["m_srcTableName"] = "findaride";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Tons",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto34["m_sql"] = "Tons";
$proto34["m_srcTableName"] = "findaride";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CubicMeters",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto36["m_sql"] = "CubicMeters";
$proto36["m_srcTableName"] = "findaride";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DisplayRoute",
	"m_strTable" => "findaride",
	"m_srcTableName" => "findaride"
));

$proto38["m_sql"] = "DisplayRoute";
$proto38["m_srcTableName"] = "findaride";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "findaride";
$proto41["m_srcTableName"] = "findaride";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "Username";
$proto41["m_columns"][] = "FromLocation";
$proto41["m_columns"][] = "ToLocation";
$proto41["m_columns"][] = "FromDate";
$proto41["m_columns"][] = "ToDate";
$proto41["m_columns"][] = "TransportWhat";
$proto41["m_columns"][] = "TransportOfWhatPicture";
$proto41["m_columns"][] = "TypeOfTransport";
$proto41["m_columns"][] = "WillingToPayPerDay";
$proto41["m_columns"][] = "WillingToPayPerHalfDay";
$proto41["m_columns"][] = "WillingToPayPerTon";
$proto41["m_columns"][] = "WillingToPayCoverCharge";
$proto41["m_columns"][] = "WillingToPayPerCubicMeterPerKm";
$proto41["m_columns"][] = "Tons";
$proto41["m_columns"][] = "CubicMeters";
$proto41["m_columns"][] = "DisplayRoute";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "findaride";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "findaride";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="findaride";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_findaride = createSqlQuery_findaride();


	
		;

																	

$tdatafindaride[".sqlquery"] = $queryData_findaride;

include_once(getabspath("include/findaride_events.php"));
$tableEvents["findaride"] = new eventclass_findaride;
$tdatafindaride[".hasEvents"] = true;

?>