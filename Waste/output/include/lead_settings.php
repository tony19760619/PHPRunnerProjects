<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalead = array();
	$tdatalead[".truncateText"] = true;
	$tdatalead[".NumberOfChars"] = 80;
	$tdatalead[".ShortName"] = "lead";
	$tdatalead[".OwnerID"] = "";
	$tdatalead[".OriginalTable"] = "lead";

//	field labels
$fieldLabelslead = array();
$fieldToolTipslead = array();
$pageTitleslead = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslead["English"] = array();
	$fieldToolTipslead["English"] = array();
	$pageTitleslead["English"] = array();
	$fieldLabelslead["English"]["ID"] = "ID";
	$fieldToolTipslead["English"]["ID"] = "";
	$fieldLabelslead["English"]["CompanyName"] = "Company Name";
	$fieldToolTipslead["English"]["CompanyName"] = "";
	$fieldLabelslead["English"]["Address"] = "Address";
	$fieldToolTipslead["English"]["Address"] = "";
	$fieldLabelslead["English"]["WhoSpokenToAndWhoIsPersonInCharge"] = "Who Spoken To And Who Is Person In Charge";
	$fieldToolTipslead["English"]["WhoSpokenToAndWhoIsPersonInCharge"] = "";
	$fieldLabelslead["English"]["TelNoAndEmailAddress"] = "Tel No And Email Address";
	$fieldToolTipslead["English"]["TelNoAndEmailAddress"] = "";
	$fieldLabelslead["English"]["RenewalDateOfCurrentContract"] = "Renewal Date Of Current Contract";
	$fieldToolTipslead["English"]["RenewalDateOfCurrentContract"] = "";
	$fieldLabelslead["English"]["DateSeen"] = "Date Seen";
	$fieldToolTipslead["English"]["DateSeen"] = "";
	$fieldLabelslead["English"]["Interested"] = "Interested";
	$fieldToolTipslead["English"]["Interested"] = "";
	$fieldLabelslead["English"]["NumberOfBins"] = "Number Of Bins";
	$fieldToolTipslead["English"]["NumberOfBins"] = "";
	$fieldLabelslead["English"]["WeeksInMonth"] = "Weeks In Month";
	$fieldToolTipslead["English"]["WeeksInMonth"] = "";
	$fieldLabelslead["English"]["PickupsPerWeek"] = "Pickups Per Week";
	$fieldToolTipslead["English"]["PickupsPerWeek"] = "";
	$fieldLabelslead["English"]["ChargePerPickupPerBin"] = "Charge Per Pickup Per Bin";
	$fieldToolTipslead["English"]["ChargePerPickupPerBin"] = "";
	$fieldLabelslead["English"]["TotalExclVAT"] = "Total Excl VAT";
	$fieldToolTipslead["English"]["TotalExclVAT"] = "";
	$fieldLabelslead["English"]["VAT"] = "VAT";
	$fieldToolTipslead["English"]["VAT"] = "";
	$fieldLabelslead["English"]["TotalInclVAT"] = "Total Incl VAT";
	$fieldToolTipslead["English"]["TotalInclVAT"] = "";
	$fieldLabelslead["English"]["Info"] = "Info";
	$fieldToolTipslead["English"]["Info"] = "";
	$fieldLabelslead["English"]["NextContact"] = "Next Contact";
	$fieldToolTipslead["English"]["NextContact"] = "";
	$fieldLabelslead["English"]["NotInterested"] = "Not Interested";
	$fieldToolTipslead["English"]["NotInterested"] = "";
	if (count($fieldToolTipslead["English"]))
		$tdatalead[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslead[""] = array();
	$fieldToolTipslead[""] = array();
	$pageTitleslead[""] = array();
	if (count($fieldToolTipslead[""]))
		$tdatalead[".isUseToolTips"] = true;
}


	$tdatalead[".NCSearch"] = true;



$tdatalead[".shortTableName"] = "lead";
$tdatalead[".nSecOptions"] = 0;
$tdatalead[".recsPerRowPrint"] = 1;
$tdatalead[".mainTableOwnerID"] = "";
$tdatalead[".moveNext"] = 1;
$tdatalead[".entityType"] = 0;

$tdatalead[".strOriginalTableName"] = "lead";

	



$tdatalead[".showAddInPopup"] = false;

$tdatalead[".showEditInPopup"] = false;

$tdatalead[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalead[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalead[".fieldsForRegister"] = array();

$tdatalead[".listAjax"] = false;

	$tdatalead[".audit"] = false;

	$tdatalead[".locking"] = false;

$tdatalead[".edit"] = true;
$tdatalead[".afterEditAction"] = 1;
$tdatalead[".closePopupAfterEdit"] = 1;
$tdatalead[".afterEditActionDetTable"] = "";

$tdatalead[".add"] = true;
$tdatalead[".afterAddAction"] = 1;
$tdatalead[".closePopupAfterAdd"] = 1;
$tdatalead[".afterAddActionDetTable"] = "";

$tdatalead[".list"] = true;

$tdatalead[".inlineEdit"] = true;



$tdatalead[".inlineAdd"] = true;
$tdatalead[".view"] = true;

$tdatalead[".import"] = true;

$tdatalead[".exportTo"] = true;

$tdatalead[".printFriendly"] = true;

$tdatalead[".delete"] = true;

$tdatalead[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalead[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalead[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalead[".searchSaving"] = false;
//

$tdatalead[".showSearchPanel"] = true;
		$tdatalead[".flexibleSearch"] = true;

$tdatalead[".isUseAjaxSuggest"] = true;

$tdatalead[".rowHighlite"] = true;



$tdatalead[".addPageEvents"] = true;

// use timepicker for search panel
$tdatalead[".isUseTimeForSearch"] = false;



$tdatalead[".badgeColor"] = "7B68EE";


$tdatalead[".allSearchFields"] = array();
$tdatalead[".filterFields"] = array();
$tdatalead[".requiredSearchFields"] = array();

$tdatalead[".allSearchFields"][] = "CompanyName";
	$tdatalead[".allSearchFields"][] = "ID";
	$tdatalead[".allSearchFields"][] = "Address";
	$tdatalead[".allSearchFields"][] = "TelNoAndEmailAddress";
	$tdatalead[".allSearchFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
	$tdatalead[".allSearchFields"][] = "RenewalDateOfCurrentContract";
	$tdatalead[".allSearchFields"][] = "DateSeen";
	$tdatalead[".allSearchFields"][] = "NextContact";
	$tdatalead[".allSearchFields"][] = "Info";
	$tdatalead[".allSearchFields"][] = "Interested";
	$tdatalead[".allSearchFields"][] = "NotInterested";
	$tdatalead[".allSearchFields"][] = "NumberOfBins";
	$tdatalead[".allSearchFields"][] = "WeeksInMonth";
	$tdatalead[".allSearchFields"][] = "PickupsPerWeek";
	$tdatalead[".allSearchFields"][] = "ChargePerPickupPerBin";
	$tdatalead[".allSearchFields"][] = "TotalExclVAT";
	$tdatalead[".allSearchFields"][] = "VAT";
	$tdatalead[".allSearchFields"][] = "TotalInclVAT";
	

$tdatalead[".googleLikeFields"] = array();
$tdatalead[".googleLikeFields"][] = "ID";
$tdatalead[".googleLikeFields"][] = "CompanyName";
$tdatalead[".googleLikeFields"][] = "Address";
$tdatalead[".googleLikeFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".googleLikeFields"][] = "TelNoAndEmailAddress";
$tdatalead[".googleLikeFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".googleLikeFields"][] = "DateSeen";
$tdatalead[".googleLikeFields"][] = "Interested";
$tdatalead[".googleLikeFields"][] = "NumberOfBins";
$tdatalead[".googleLikeFields"][] = "WeeksInMonth";
$tdatalead[".googleLikeFields"][] = "PickupsPerWeek";
$tdatalead[".googleLikeFields"][] = "ChargePerPickupPerBin";
$tdatalead[".googleLikeFields"][] = "TotalExclVAT";
$tdatalead[".googleLikeFields"][] = "VAT";
$tdatalead[".googleLikeFields"][] = "TotalInclVAT";
$tdatalead[".googleLikeFields"][] = "Info";
$tdatalead[".googleLikeFields"][] = "NextContact";
$tdatalead[".googleLikeFields"][] = "NotInterested";


$tdatalead[".advSearchFields"] = array();
$tdatalead[".advSearchFields"][] = "CompanyName";
$tdatalead[".advSearchFields"][] = "ID";
$tdatalead[".advSearchFields"][] = "Address";
$tdatalead[".advSearchFields"][] = "TelNoAndEmailAddress";
$tdatalead[".advSearchFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".advSearchFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".advSearchFields"][] = "DateSeen";
$tdatalead[".advSearchFields"][] = "NextContact";
$tdatalead[".advSearchFields"][] = "Info";
$tdatalead[".advSearchFields"][] = "Interested";
$tdatalead[".advSearchFields"][] = "NotInterested";
$tdatalead[".advSearchFields"][] = "NumberOfBins";
$tdatalead[".advSearchFields"][] = "WeeksInMonth";
$tdatalead[".advSearchFields"][] = "PickupsPerWeek";
$tdatalead[".advSearchFields"][] = "ChargePerPickupPerBin";
$tdatalead[".advSearchFields"][] = "TotalExclVAT";
$tdatalead[".advSearchFields"][] = "VAT";
$tdatalead[".advSearchFields"][] = "TotalInclVAT";

$tdatalead[".tableType"] = "list";

$tdatalead[".printerPageOrientation"] = 0;
$tdatalead[".nPrinterPageScale"] = 100;

$tdatalead[".nPrinterSplitRecords"] = 40;

$tdatalead[".nPrinterPDFSplitRecords"] = 40;



$tdatalead[".geocodingEnabled"] = false;





$tdatalead[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalead[".pageSize"] = 20;

$tdatalead[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalead[".strOrderBy"] = $tstrOrderBy;

$tdatalead[".orderindexes"] = array();

$tdatalead[".sqlHead"] = "SELECT ID,  CompanyName,  Address,  WhoSpokenToAndWhoIsPersonInCharge,  TelNoAndEmailAddress,  RenewalDateOfCurrentContract,  DateSeen,  Interested,  NumberOfBins,  WeeksInMonth,  PickupsPerWeek,  ChargePerPickupPerBin,  TotalExclVAT,  VAT,  TotalInclVAT,  Info,  NextContact,  NotInterested";
$tdatalead[".sqlFrom"] = "FROM lead";
$tdatalead[".sqlWhereExpr"] = "";
$tdatalead[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalead[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalead[".arrGroupsPerPage"] = $arrGPP;

$tdatalead[".highlightSearchResults"] = true;

$tableKeyslead = array();
$tableKeyslead[] = "ID";
$tdatalead[".Keys"] = $tableKeyslead;

$tdatalead[".listFields"] = array();
$tdatalead[".listFields"][] = "CompanyName";
$tdatalead[".listFields"][] = "ID";
$tdatalead[".listFields"][] = "TelNoAndEmailAddress";
$tdatalead[".listFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".listFields"][] = "DateSeen";
$tdatalead[".listFields"][] = "NextContact";
$tdatalead[".listFields"][] = "Info";
$tdatalead[".listFields"][] = "NotInterested";

$tdatalead[".hideMobileList"] = array();


$tdatalead[".viewFields"] = array();
$tdatalead[".viewFields"][] = "CompanyName";
$tdatalead[".viewFields"][] = "ID";
$tdatalead[".viewFields"][] = "Address";
$tdatalead[".viewFields"][] = "TelNoAndEmailAddress";
$tdatalead[".viewFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".viewFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".viewFields"][] = "DateSeen";
$tdatalead[".viewFields"][] = "NextContact";
$tdatalead[".viewFields"][] = "Info";
$tdatalead[".viewFields"][] = "Interested";
$tdatalead[".viewFields"][] = "NotInterested";
$tdatalead[".viewFields"][] = "NumberOfBins";
$tdatalead[".viewFields"][] = "WeeksInMonth";
$tdatalead[".viewFields"][] = "PickupsPerWeek";
$tdatalead[".viewFields"][] = "ChargePerPickupPerBin";
$tdatalead[".viewFields"][] = "TotalExclVAT";
$tdatalead[".viewFields"][] = "VAT";
$tdatalead[".viewFields"][] = "TotalInclVAT";

$tdatalead[".addFields"] = array();
$tdatalead[".addFields"][] = "CompanyName";
$tdatalead[".addFields"][] = "Address";
$tdatalead[".addFields"][] = "TelNoAndEmailAddress";
$tdatalead[".addFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".addFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".addFields"][] = "DateSeen";
$tdatalead[".addFields"][] = "NextContact";
$tdatalead[".addFields"][] = "Info";
$tdatalead[".addFields"][] = "Interested";
$tdatalead[".addFields"][] = "NotInterested";
$tdatalead[".addFields"][] = "NumberOfBins";
$tdatalead[".addFields"][] = "WeeksInMonth";
$tdatalead[".addFields"][] = "PickupsPerWeek";
$tdatalead[".addFields"][] = "ChargePerPickupPerBin";
$tdatalead[".addFields"][] = "TotalExclVAT";
$tdatalead[".addFields"][] = "VAT";
$tdatalead[".addFields"][] = "TotalInclVAT";

$tdatalead[".masterListFields"] = array();
$tdatalead[".masterListFields"][] = "CompanyName";
$tdatalead[".masterListFields"][] = "ID";
$tdatalead[".masterListFields"][] = "Address";
$tdatalead[".masterListFields"][] = "TelNoAndEmailAddress";
$tdatalead[".masterListFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".masterListFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".masterListFields"][] = "DateSeen";
$tdatalead[".masterListFields"][] = "NextContact";
$tdatalead[".masterListFields"][] = "Info";
$tdatalead[".masterListFields"][] = "Interested";
$tdatalead[".masterListFields"][] = "NotInterested";
$tdatalead[".masterListFields"][] = "NumberOfBins";
$tdatalead[".masterListFields"][] = "WeeksInMonth";
$tdatalead[".masterListFields"][] = "PickupsPerWeek";
$tdatalead[".masterListFields"][] = "ChargePerPickupPerBin";
$tdatalead[".masterListFields"][] = "TotalExclVAT";
$tdatalead[".masterListFields"][] = "VAT";
$tdatalead[".masterListFields"][] = "TotalInclVAT";

$tdatalead[".inlineAddFields"] = array();
$tdatalead[".inlineAddFields"][] = "CompanyName";
$tdatalead[".inlineAddFields"][] = "TelNoAndEmailAddress";
$tdatalead[".inlineAddFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".inlineAddFields"][] = "DateSeen";
$tdatalead[".inlineAddFields"][] = "NextContact";
$tdatalead[".inlineAddFields"][] = "Info";
$tdatalead[".inlineAddFields"][] = "NotInterested";

$tdatalead[".editFields"] = array();
$tdatalead[".editFields"][] = "CompanyName";
$tdatalead[".editFields"][] = "Address";
$tdatalead[".editFields"][] = "TelNoAndEmailAddress";
$tdatalead[".editFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".editFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".editFields"][] = "DateSeen";
$tdatalead[".editFields"][] = "NextContact";
$tdatalead[".editFields"][] = "Info";
$tdatalead[".editFields"][] = "Interested";
$tdatalead[".editFields"][] = "NotInterested";
$tdatalead[".editFields"][] = "NumberOfBins";
$tdatalead[".editFields"][] = "WeeksInMonth";
$tdatalead[".editFields"][] = "PickupsPerWeek";
$tdatalead[".editFields"][] = "ChargePerPickupPerBin";
$tdatalead[".editFields"][] = "TotalExclVAT";
$tdatalead[".editFields"][] = "VAT";
$tdatalead[".editFields"][] = "TotalInclVAT";

$tdatalead[".inlineEditFields"] = array();
$tdatalead[".inlineEditFields"][] = "CompanyName";
$tdatalead[".inlineEditFields"][] = "TelNoAndEmailAddress";
$tdatalead[".inlineEditFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".inlineEditFields"][] = "DateSeen";
$tdatalead[".inlineEditFields"][] = "NextContact";
$tdatalead[".inlineEditFields"][] = "Info";
$tdatalead[".inlineEditFields"][] = "NotInterested";

$tdatalead[".updateSelectedFields"] = array();


$tdatalead[".exportFields"] = array();
$tdatalead[".exportFields"][] = "CompanyName";
$tdatalead[".exportFields"][] = "ID";
$tdatalead[".exportFields"][] = "Address";
$tdatalead[".exportFields"][] = "TelNoAndEmailAddress";
$tdatalead[".exportFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".exportFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".exportFields"][] = "DateSeen";
$tdatalead[".exportFields"][] = "NextContact";
$tdatalead[".exportFields"][] = "Info";
$tdatalead[".exportFields"][] = "Interested";
$tdatalead[".exportFields"][] = "NotInterested";
$tdatalead[".exportFields"][] = "NumberOfBins";
$tdatalead[".exportFields"][] = "WeeksInMonth";
$tdatalead[".exportFields"][] = "PickupsPerWeek";
$tdatalead[".exportFields"][] = "ChargePerPickupPerBin";
$tdatalead[".exportFields"][] = "TotalExclVAT";
$tdatalead[".exportFields"][] = "VAT";
$tdatalead[".exportFields"][] = "TotalInclVAT";

$tdatalead[".importFields"] = array();
$tdatalead[".importFields"][] = "ID";
$tdatalead[".importFields"][] = "CompanyName";
$tdatalead[".importFields"][] = "Address";
$tdatalead[".importFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".importFields"][] = "TelNoAndEmailAddress";
$tdatalead[".importFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".importFields"][] = "DateSeen";
$tdatalead[".importFields"][] = "Interested";
$tdatalead[".importFields"][] = "NumberOfBins";
$tdatalead[".importFields"][] = "WeeksInMonth";
$tdatalead[".importFields"][] = "PickupsPerWeek";
$tdatalead[".importFields"][] = "ChargePerPickupPerBin";
$tdatalead[".importFields"][] = "TotalExclVAT";
$tdatalead[".importFields"][] = "VAT";
$tdatalead[".importFields"][] = "TotalInclVAT";
$tdatalead[".importFields"][] = "Info";
$tdatalead[".importFields"][] = "NextContact";
$tdatalead[".importFields"][] = "NotInterested";

$tdatalead[".printFields"] = array();
$tdatalead[".printFields"][] = "CompanyName";
$tdatalead[".printFields"][] = "ID";
$tdatalead[".printFields"][] = "Address";
$tdatalead[".printFields"][] = "TelNoAndEmailAddress";
$tdatalead[".printFields"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$tdatalead[".printFields"][] = "RenewalDateOfCurrentContract";
$tdatalead[".printFields"][] = "DateSeen";
$tdatalead[".printFields"][] = "NextContact";
$tdatalead[".printFields"][] = "Info";
$tdatalead[".printFields"][] = "Interested";
$tdatalead[".printFields"][] = "NotInterested";
$tdatalead[".printFields"][] = "NumberOfBins";
$tdatalead[".printFields"][] = "WeeksInMonth";
$tdatalead[".printFields"][] = "PickupsPerWeek";
$tdatalead[".printFields"][] = "ChargePerPickupPerBin";
$tdatalead[".printFields"][] = "TotalExclVAT";
$tdatalead[".printFields"][] = "VAT";
$tdatalead[".printFields"][] = "TotalInclVAT";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","ID");
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




	$tdatalead["ID"] = $fdata;
//	CompanyName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CompanyName";
	$fdata["GoodName"] = "CompanyName";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","CompanyName");
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

		$fdata["strField"] = "CompanyName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CompanyName";

	
	
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
			$edata["EditParams"].= " maxlength=40";

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




	$tdatalead["CompanyName"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","Address");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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




	$tdatalead["Address"] = $fdata;
//	WhoSpokenToAndWhoIsPersonInCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WhoSpokenToAndWhoIsPersonInCharge";
	$fdata["GoodName"] = "WhoSpokenToAndWhoIsPersonInCharge";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","WhoSpokenToAndWhoIsPersonInCharge");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WhoSpokenToAndWhoIsPersonInCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WhoSpokenToAndWhoIsPersonInCharge";

	
	
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




	$tdatalead["WhoSpokenToAndWhoIsPersonInCharge"] = $fdata;
//	TelNoAndEmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TelNoAndEmailAddress";
	$fdata["GoodName"] = "TelNoAndEmailAddress";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","TelNoAndEmailAddress");
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

		$fdata["strField"] = "TelNoAndEmailAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TelNoAndEmailAddress";

	
	
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




	$tdatalead["TelNoAndEmailAddress"] = $fdata;
//	RenewalDateOfCurrentContract
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RenewalDateOfCurrentContract";
	$fdata["GoodName"] = "RenewalDateOfCurrentContract";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","RenewalDateOfCurrentContract");
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

		$fdata["strField"] = "RenewalDateOfCurrentContract";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RenewalDateOfCurrentContract";

	
	
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




	$tdatalead["RenewalDateOfCurrentContract"] = $fdata;
//	DateSeen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DateSeen";
	$fdata["GoodName"] = "DateSeen";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","DateSeen");
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

		$fdata["strField"] = "DateSeen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateSeen";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatalead["DateSeen"] = $fdata;
//	Interested
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Interested";
	$fdata["GoodName"] = "Interested";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","Interested");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Interested";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Interested";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



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




	$tdatalead["Interested"] = $fdata;
//	NumberOfBins
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NumberOfBins";
	$fdata["GoodName"] = "NumberOfBins";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","NumberOfBins");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NumberOfBins";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NumberOfBins";

	
	
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




	$tdatalead["NumberOfBins"] = $fdata;
//	WeeksInMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WeeksInMonth";
	$fdata["GoodName"] = "WeeksInMonth";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","WeeksInMonth");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WeeksInMonth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WeeksInMonth";

	
	
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




	$tdatalead["WeeksInMonth"] = $fdata;
//	PickupsPerWeek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PickupsPerWeek";
	$fdata["GoodName"] = "PickupsPerWeek";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","PickupsPerWeek");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PickupsPerWeek";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PickupsPerWeek";

	
	
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




	$tdatalead["PickupsPerWeek"] = $fdata;
//	ChargePerPickupPerBin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ChargePerPickupPerBin";
	$fdata["GoodName"] = "ChargePerPickupPerBin";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","ChargePerPickupPerBin");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ChargePerPickupPerBin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChargePerPickupPerBin";

	
	
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




	$tdatalead["ChargePerPickupPerBin"] = $fdata;
//	TotalExclVAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TotalExclVAT";
	$fdata["GoodName"] = "TotalExclVAT";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","TotalExclVAT");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalExclVAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalExclVAT";

	
	
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




	$tdatalead["TotalExclVAT"] = $fdata;
//	VAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "VAT";
	$fdata["GoodName"] = "VAT";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","VAT");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "VAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VAT";

	
	
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




	$tdatalead["VAT"] = $fdata;
//	TotalInclVAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "TotalInclVAT";
	$fdata["GoodName"] = "TotalInclVAT";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","TotalInclVAT");
	$fdata["FieldType"] = 14;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TotalInclVAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalInclVAT";

	
	
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




	$tdatalead["TotalInclVAT"] = $fdata;
//	Info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Info";
	$fdata["GoodName"] = "Info";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","Info");
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

		$fdata["strField"] = "Info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Info";

	
	
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




	$tdatalead["Info"] = $fdata;
//	NextContact
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "NextContact";
	$fdata["GoodName"] = "NextContact";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","NextContact");
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

		$fdata["strField"] = "NextContact";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NextContact";

	
	
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




	$tdatalead["NextContact"] = $fdata;
//	NotInterested
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "NotInterested";
	$fdata["GoodName"] = "NotInterested";
	$fdata["ownerTable"] = "lead";
	$fdata["Label"] = GetFieldLabel("lead","NotInterested");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NotInterested";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NotInterested";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
	
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




	$tdatalead["NotInterested"] = $fdata;


$tables_data["lead"]=&$tdatalead;
$field_labels["lead"] = &$fieldLabelslead;
$fieldToolTips["lead"] = &$fieldToolTipslead;
$page_titles["lead"] = &$pageTitleslead;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lead"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lead"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lead()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  CompanyName,  Address,  WhoSpokenToAndWhoIsPersonInCharge,  TelNoAndEmailAddress,  RenewalDateOfCurrentContract,  DateSeen,  Interested,  NumberOfBins,  WeeksInMonth,  PickupsPerWeek,  ChargePerPickupPerBin,  TotalExclVAT,  VAT,  TotalInclVAT,  Info,  NextContact,  NotInterested";
$proto0["m_strFrom"] = "FROM lead";
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
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "lead";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CompanyName",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto8["m_sql"] = "CompanyName";
$proto8["m_srcTableName"] = "lead";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto10["m_sql"] = "Address";
$proto10["m_srcTableName"] = "lead";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "WhoSpokenToAndWhoIsPersonInCharge",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto12["m_sql"] = "WhoSpokenToAndWhoIsPersonInCharge";
$proto12["m_srcTableName"] = "lead";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TelNoAndEmailAddress",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto14["m_sql"] = "TelNoAndEmailAddress";
$proto14["m_srcTableName"] = "lead";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RenewalDateOfCurrentContract",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto16["m_sql"] = "RenewalDateOfCurrentContract";
$proto16["m_srcTableName"] = "lead";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DateSeen",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto18["m_sql"] = "DateSeen";
$proto18["m_srcTableName"] = "lead";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Interested",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto20["m_sql"] = "Interested";
$proto20["m_srcTableName"] = "lead";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NumberOfBins",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto22["m_sql"] = "NumberOfBins";
$proto22["m_srcTableName"] = "lead";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WeeksInMonth",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto24["m_sql"] = "WeeksInMonth";
$proto24["m_srcTableName"] = "lead";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PickupsPerWeek",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto26["m_sql"] = "PickupsPerWeek";
$proto26["m_srcTableName"] = "lead";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ChargePerPickupPerBin",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto28["m_sql"] = "ChargePerPickupPerBin";
$proto28["m_srcTableName"] = "lead";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalExclVAT",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto30["m_sql"] = "TotalExclVAT";
$proto30["m_srcTableName"] = "lead";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "VAT",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto32["m_sql"] = "VAT";
$proto32["m_srcTableName"] = "lead";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalInclVAT",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto34["m_sql"] = "TotalInclVAT";
$proto34["m_srcTableName"] = "lead";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Info",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto36["m_sql"] = "Info";
$proto36["m_srcTableName"] = "lead";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "NextContact",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto38["m_sql"] = "NextContact";
$proto38["m_srcTableName"] = "lead";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "NotInterested",
	"m_strTable" => "lead",
	"m_srcTableName" => "lead"
));

$proto40["m_sql"] = "NotInterested";
$proto40["m_srcTableName"] = "lead";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "lead";
$proto43["m_srcTableName"] = "lead";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ID";
$proto43["m_columns"][] = "CompanyName";
$proto43["m_columns"][] = "Address";
$proto43["m_columns"][] = "WhoSpokenToAndWhoIsPersonInCharge";
$proto43["m_columns"][] = "TelNoAndEmailAddress";
$proto43["m_columns"][] = "RenewalDateOfCurrentContract";
$proto43["m_columns"][] = "DateSeen";
$proto43["m_columns"][] = "Interested";
$proto43["m_columns"][] = "NumberOfBins";
$proto43["m_columns"][] = "WeeksInMonth";
$proto43["m_columns"][] = "PickupsPerWeek";
$proto43["m_columns"][] = "ChargePerPickupPerBin";
$proto43["m_columns"][] = "TotalExclVAT";
$proto43["m_columns"][] = "VAT";
$proto43["m_columns"][] = "TotalInclVAT";
$proto43["m_columns"][] = "Info";
$proto43["m_columns"][] = "NextContact";
$proto43["m_columns"][] = "NotInterested";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "lead";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "lead";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="lead";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lead = createSqlQuery_lead();


	
		;

																		

$tdatalead[".sqlquery"] = $queryData_lead;

include_once(getabspath("include/lead_events.php"));
$tableEvents["lead"] = new eventclass_lead;
$tdatalead[".hasEvents"] = true;

?>