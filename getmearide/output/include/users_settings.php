<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers = array();
	$tdatausers[".truncateText"] = true;
	$tdatausers[".NumberOfChars"] = 80;
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "ID";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["Lat"] = "Lat";
	$fieldToolTipsusers["English"]["Lat"] = "";
	$fieldLabelsusers["English"]["Lng"] = "Lng";
	$fieldToolTipsusers["English"]["Lng"] = "";
	$fieldLabelsusers["English"]["ID"] = "ID";
	$fieldToolTipsusers["English"]["ID"] = "";
	$fieldLabelsusers["English"]["Username"] = "Username";
	$fieldToolTipsusers["English"]["Username"] = "";
	$fieldLabelsusers["English"]["Password"] = "Password";
	$fieldToolTipsusers["English"]["Password"] = "";
	$fieldLabelsusers["English"]["Active"] = "Active";
	$fieldToolTipsusers["English"]["Active"] = "";
	$fieldLabelsusers["English"]["Email"] = "Email";
	$fieldToolTipsusers["English"]["Email"] = "";
	$fieldLabelsusers["English"]["Mobile"] = "Mobile";
	$fieldToolTipsusers["English"]["Mobile"] = "";
	$fieldLabelsusers["English"]["UserType"] = "User Type";
	$fieldToolTipsusers["English"]["UserType"] = "";
	$fieldLabelsusers["English"]["Address"] = "Address";
	$fieldToolTipsusers["English"]["Address"] = "";
	$fieldLabelsusers["English"]["CurrentLocation"] = "Current Location";
	$fieldToolTipsusers["English"]["CurrentLocation"] = "";
	$fieldLabelsusers["English"]["Fullname"] = "Fullname";
	$fieldToolTipsusers["English"]["Fullname"] = "";
	$fieldLabelsusers["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsusers["English"]["DateOfBirth"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers[""] = array();
	$fieldToolTipsusers[""] = array();
	$pageTitlesusers[""] = array();
	if (count($fieldToolTipsusers[""]))
		$tdatausers[".isUseToolTips"] = true;
}


	$tdatausers[".NCSearch"] = true;



$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 1;
$tdatausers[".recsPerRowPrint"] = 1;
$tdatausers[".mainTableOwnerID"] = "ID";
$tdatausers[".moveNext"] = 1;
$tdatausers[".entityType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";

	



$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = false;

	$tdatausers[".locking"] = false;

$tdatausers[".edit"] = true;
$tdatausers[".afterEditAction"] = 0;
$tdatausers[".closePopupAfterEdit"] = 1;
$tdatausers[".afterEditActionDetTable"] = "";

$tdatausers[".add"] = true;
$tdatausers[".afterAddAction"] = 0;
$tdatausers[".closePopupAfterAdd"] = 1;
$tdatausers[".afterAddActionDetTable"] = "";

$tdatausers[".list"] = true;




$tdatausers[".view"] = true;

$tdatausers[".import"] = true;

$tdatausers[".exportTo"] = true;

$tdatausers[".printFriendly"] = true;

$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausers[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausers[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausers[".searchSaving"] = false;
//

$tdatausers[".showSearchPanel"] = true;
		$tdatausers[".flexibleSearch"] = true;

$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;



$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;

$tdatausers[".isUseFieldsMaps"] = true;


$tdatausers[".badgeColor"] = "D2691E";


$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();

$tdatausers[".allSearchFields"][] = "ID";
	$tdatausers[".allSearchFields"][] = "Username";
	$tdatausers[".allSearchFields"][] = "Password";
	$tdatausers[".allSearchFields"][] = "Active";
	$tdatausers[".allSearchFields"][] = "Email";
	$tdatausers[".allSearchFields"][] = "Mobile";
	$tdatausers[".allSearchFields"][] = "UserType";
	$tdatausers[".allSearchFields"][] = "Address";
	$tdatausers[".allSearchFields"][] = "CurrentLocation";
	$tdatausers[".allSearchFields"][] = "Fullname";
	$tdatausers[".allSearchFields"][] = "DateOfBirth";
	

$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "ID";
$tdatausers[".googleLikeFields"][] = "Username";
$tdatausers[".googleLikeFields"][] = "Password";
$tdatausers[".googleLikeFields"][] = "Active";
$tdatausers[".googleLikeFields"][] = "Email";
$tdatausers[".googleLikeFields"][] = "Mobile";
$tdatausers[".googleLikeFields"][] = "UserType";
$tdatausers[".googleLikeFields"][] = "Address";
$tdatausers[".googleLikeFields"][] = "CurrentLocation";
$tdatausers[".googleLikeFields"][] = "Fullname";
$tdatausers[".googleLikeFields"][] = "DateOfBirth";


$tdatausers[".advSearchFields"] = array();
$tdatausers[".advSearchFields"][] = "ID";
$tdatausers[".advSearchFields"][] = "Username";
$tdatausers[".advSearchFields"][] = "Password";
$tdatausers[".advSearchFields"][] = "Active";
$tdatausers[".advSearchFields"][] = "Email";
$tdatausers[".advSearchFields"][] = "Mobile";
$tdatausers[".advSearchFields"][] = "UserType";
$tdatausers[".advSearchFields"][] = "Address";
$tdatausers[".advSearchFields"][] = "CurrentLocation";
$tdatausers[".advSearchFields"][] = "Fullname";
$tdatausers[".advSearchFields"][] = "DateOfBirth";

$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".nPrinterPDFSplitRecords"] = 40;



$tdatausers[".geocodingEnabled"] = false;





$tdatausers[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausers[".pageSize"] = 20;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT ID,  	Username,  	Password,  	Active,  	Email,  	Mobile,  	UserType,  	Address,  	CurrentLocation,  	Fullname,  	DateOfBirth";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "ID";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();
$tdatausers[".listFields"][] = "ID";
$tdatausers[".listFields"][] = "Username";
$tdatausers[".listFields"][] = "Password";
$tdatausers[".listFields"][] = "Active";
$tdatausers[".listFields"][] = "Email";
$tdatausers[".listFields"][] = "Mobile";
$tdatausers[".listFields"][] = "UserType";
$tdatausers[".listFields"][] = "Address";
$tdatausers[".listFields"][] = "CurrentLocation";
$tdatausers[".listFields"][] = "Fullname";
$tdatausers[".listFields"][] = "DateOfBirth";

$tdatausers[".hideMobileList"] = array();


$tdatausers[".viewFields"] = array();
$tdatausers[".viewFields"][] = "ID";
$tdatausers[".viewFields"][] = "Username";
$tdatausers[".viewFields"][] = "Password";
$tdatausers[".viewFields"][] = "Active";
$tdatausers[".viewFields"][] = "Email";
$tdatausers[".viewFields"][] = "Mobile";
$tdatausers[".viewFields"][] = "UserType";
$tdatausers[".viewFields"][] = "Address";
$tdatausers[".viewFields"][] = "CurrentLocation";
$tdatausers[".viewFields"][] = "Fullname";
$tdatausers[".viewFields"][] = "DateOfBirth";

$tdatausers[".addFields"] = array();
$tdatausers[".addFields"][] = "Username";
$tdatausers[".addFields"][] = "Password";
$tdatausers[".addFields"][] = "Active";
$tdatausers[".addFields"][] = "Email";
$tdatausers[".addFields"][] = "Mobile";
$tdatausers[".addFields"][] = "UserType";
$tdatausers[".addFields"][] = "Address";
$tdatausers[".addFields"][] = "CurrentLocation";
$tdatausers[".addFields"][] = "Fullname";
$tdatausers[".addFields"][] = "DateOfBirth";

$tdatausers[".masterListFields"] = array();
$tdatausers[".masterListFields"][] = "ID";
$tdatausers[".masterListFields"][] = "Username";
$tdatausers[".masterListFields"][] = "Password";
$tdatausers[".masterListFields"][] = "Active";
$tdatausers[".masterListFields"][] = "Email";
$tdatausers[".masterListFields"][] = "Mobile";
$tdatausers[".masterListFields"][] = "UserType";
$tdatausers[".masterListFields"][] = "Address";
$tdatausers[".masterListFields"][] = "CurrentLocation";
$tdatausers[".masterListFields"][] = "Fullname";
$tdatausers[".masterListFields"][] = "DateOfBirth";

$tdatausers[".inlineAddFields"] = array();

$tdatausers[".editFields"] = array();
$tdatausers[".editFields"][] = "Username";
$tdatausers[".editFields"][] = "Password";
$tdatausers[".editFields"][] = "Active";
$tdatausers[".editFields"][] = "Email";
$tdatausers[".editFields"][] = "Mobile";
$tdatausers[".editFields"][] = "UserType";
$tdatausers[".editFields"][] = "Address";
$tdatausers[".editFields"][] = "CurrentLocation";
$tdatausers[".editFields"][] = "Fullname";
$tdatausers[".editFields"][] = "DateOfBirth";

$tdatausers[".inlineEditFields"] = array();

$tdatausers[".updateSelectedFields"] = array();


$tdatausers[".exportFields"] = array();
$tdatausers[".exportFields"][] = "ID";
$tdatausers[".exportFields"][] = "Username";
$tdatausers[".exportFields"][] = "Password";
$tdatausers[".exportFields"][] = "Active";
$tdatausers[".exportFields"][] = "Email";
$tdatausers[".exportFields"][] = "Mobile";
$tdatausers[".exportFields"][] = "UserType";
$tdatausers[".exportFields"][] = "Address";
$tdatausers[".exportFields"][] = "CurrentLocation";
$tdatausers[".exportFields"][] = "Fullname";
$tdatausers[".exportFields"][] = "DateOfBirth";

$tdatausers[".importFields"] = array();
$tdatausers[".importFields"][] = "ID";
$tdatausers[".importFields"][] = "Username";
$tdatausers[".importFields"][] = "Password";
$tdatausers[".importFields"][] = "Active";
$tdatausers[".importFields"][] = "Email";
$tdatausers[".importFields"][] = "Mobile";
$tdatausers[".importFields"][] = "UserType";
$tdatausers[".importFields"][] = "Address";
$tdatausers[".importFields"][] = "CurrentLocation";
$tdatausers[".importFields"][] = "Fullname";
$tdatausers[".importFields"][] = "DateOfBirth";

$tdatausers[".printFields"] = array();
$tdatausers[".printFields"][] = "ID";
$tdatausers[".printFields"][] = "Username";
$tdatausers[".printFields"][] = "Password";
$tdatausers[".printFields"][] = "Active";
$tdatausers[".printFields"][] = "Email";
$tdatausers[".printFields"][] = "Mobile";
$tdatausers[".printFields"][] = "UserType";
$tdatausers[".printFields"][] = "Address";
$tdatausers[".printFields"][] = "CurrentLocation";
$tdatausers[".printFields"][] = "Fullname";
$tdatausers[".printFields"][] = "DateOfBirth";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","ID");
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




	$tdatausers["ID"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Username");
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

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatausers["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatausers["Password"] = $fdata;
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Active");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Active";

	
	
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




	$tdatausers["Active"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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




	$tdatausers["Email"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Mobile");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Mobile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mobile";

	
	
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




	$tdatausers["Mobile"] = $fdata;
//	UserType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UserType";
	$fdata["GoodName"] = "UserType";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","UserType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserType";

	
	
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




	$tdatausers["UserType"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Address");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

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

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "Address";
	$vdata["mapData"]['lat'] = "";
	$vdata["mapData"]['lng'] = "";
	$vdata["mapData"]['desc'] = "";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 10;

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




	$tdatausers["Address"] = $fdata;
//	CurrentLocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CurrentLocation";
	$fdata["GoodName"] = "CurrentLocation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","CurrentLocation");
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

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "CurrentLocation";
	$vdata["mapData"]['lat'] = "";
	$vdata["mapData"]['lng'] = "";
	$vdata["mapData"]['desc'] = "";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 10;

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




	$tdatausers["CurrentLocation"] = $fdata;
//	Fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fullname";
	$fdata["GoodName"] = "Fullname";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Fullname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fullname";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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




	$tdatausers["Fullname"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","DateOfBirth");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateOfBirth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateOfBirth";

	
	
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




	$tdatausers["DateOfBirth"] = $fdata;


$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Username,  	Password,  	Active,  	Email,  	Mobile,  	UserType,  	Address,  	CurrentLocation,  	Fullname,  	DateOfBirth";
$proto0["m_strFrom"] = "FROM users";
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
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto8["m_sql"] = "Username";
$proto8["m_srcTableName"] = "users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto10["m_sql"] = "Password";
$proto10["m_srcTableName"] = "users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto12["m_sql"] = "Active";
$proto12["m_srcTableName"] = "users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto14["m_sql"] = "Email";
$proto14["m_srcTableName"] = "users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto16["m_sql"] = "Mobile";
$proto16["m_srcTableName"] = "users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UserType",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto18["m_sql"] = "UserType";
$proto18["m_srcTableName"] = "users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto20["m_sql"] = "Address";
$proto20["m_srcTableName"] = "users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentLocation",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto22["m_sql"] = "CurrentLocation";
$proto22["m_srcTableName"] = "users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Fullname",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto24["m_sql"] = "Fullname";
$proto24["m_srcTableName"] = "users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto26["m_sql"] = "DateOfBirth";
$proto26["m_srcTableName"] = "users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "users";
$proto29["m_srcTableName"] = "users";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "ID";
$proto29["m_columns"][] = "Username";
$proto29["m_columns"][] = "Password";
$proto29["m_columns"][] = "Active";
$proto29["m_columns"][] = "Email";
$proto29["m_columns"][] = "Mobile";
$proto29["m_columns"][] = "UserType";
$proto29["m_columns"][] = "Address";
$proto29["m_columns"][] = "CurrentLocation";
$proto29["m_columns"][] = "Fullname";
$proto29["m_columns"][] = "DateOfBirth";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "users";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "users";
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
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();


	
		;

											

$tdatausers[".sqlquery"] = $queryData_users;

$tableEvents["users"] = new eventsBase;
$tdatausers[".hasEvents"] = false;

?>