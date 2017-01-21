<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();	
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80; 
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["ID"] = "ID";
	$fieldToolTipsadmin_members["English"]["ID"] = "";
	$fieldLabelsadmin_members["English"]["Username"] = "Username";
	$fieldToolTipsadmin_members["English"]["Username"] = "";
	$fieldLabelsadmin_members["English"]["Password"] = "Password";
	$fieldToolTipsadmin_members["English"]["Password"] = "";
	$fieldLabelsadmin_members["English"]["Active"] = "Active";
	$fieldToolTipsadmin_members["English"]["Active"] = "";
	$fieldLabelsadmin_members["English"]["Email"] = "Email";
	$fieldToolTipsadmin_members["English"]["Email"] = "";
	$fieldLabelsadmin_members["English"]["Mobile"] = "Mobile";
	$fieldToolTipsadmin_members["English"]["Mobile"] = "";
	$fieldLabelsadmin_members["English"]["UserType"] = "User Type";
	$fieldToolTipsadmin_members["English"]["UserType"] = "";
	$fieldLabelsadmin_members["English"]["Address"] = "Address";
	$fieldToolTipsadmin_members["English"]["Address"] = "";
	$fieldLabelsadmin_members["English"]["CurrentLocation"] = "Current Location";
	$fieldToolTipsadmin_members["English"]["CurrentLocation"] = "";
	$fieldLabelsadmin_members["English"]["Fullname"] = "Fullname";
	$fieldToolTipsadmin_members["English"]["Fullname"] = "";
	$fieldLabelsadmin_members["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsadmin_members["English"]["DateOfBirth"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
	
	
	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowList"] = 1;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "users";




$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();
	
$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;









$tdataadmin_members[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;		

if (isMobile())
	$tdataadmin_members[".isUseAjaxSuggest"] = false;
else 
	$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;

$tdataadmin_members[".isUseFieldsMaps"] = true;




$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "ID";
	$tdataadmin_members[".allSearchFields"][] = "Username";
	$tdataadmin_members[".allSearchFields"][] = "Password";
	$tdataadmin_members[".allSearchFields"][] = "Active";
	$tdataadmin_members[".allSearchFields"][] = "Email";
	$tdataadmin_members[".allSearchFields"][] = "Mobile";
	$tdataadmin_members[".allSearchFields"][] = "UserType";
	$tdataadmin_members[".allSearchFields"][] = "Address";
	$tdataadmin_members[".allSearchFields"][] = "CurrentLocation";
	$tdataadmin_members[".allSearchFields"][] = "Fullname";
	$tdataadmin_members[".allSearchFields"][] = "DateOfBirth";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "ID";
$tdataadmin_members[".googleLikeFields"][] = "Username";
$tdataadmin_members[".googleLikeFields"][] = "Password";
$tdataadmin_members[".googleLikeFields"][] = "Active";
$tdataadmin_members[".googleLikeFields"][] = "Email";
$tdataadmin_members[".googleLikeFields"][] = "Mobile";
$tdataadmin_members[".googleLikeFields"][] = "UserType";
$tdataadmin_members[".googleLikeFields"][] = "Address";
$tdataadmin_members[".googleLikeFields"][] = "CurrentLocation";
$tdataadmin_members[".googleLikeFields"][] = "Fullname";
$tdataadmin_members[".googleLikeFields"][] = "DateOfBirth";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "ID";
$tdataadmin_members[".advSearchFields"][] = "Username";
$tdataadmin_members[".advSearchFields"][] = "Password";
$tdataadmin_members[".advSearchFields"][] = "Active";
$tdataadmin_members[".advSearchFields"][] = "Email";
$tdataadmin_members[".advSearchFields"][] = "Mobile";
$tdataadmin_members[".advSearchFields"][] = "UserType";
$tdataadmin_members[".advSearchFields"][] = "Address";
$tdataadmin_members[".advSearchFields"][] = "CurrentLocation";
$tdataadmin_members[".advSearchFields"][] = "Fullname";
$tdataadmin_members[".advSearchFields"][] = "DateOfBirth";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT ID,  	Username,  	Password,  	Active,  	Email,  	Mobile,  	UserType,  	Address,  	CurrentLocation,  	Fullname,  	DateOfBirth";
$tdataadmin_members[".sqlFrom"] = "FROM users";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "ID";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "ID";
$tdataadmin_members[".listFields"][] = "Username";
$tdataadmin_members[".listFields"][] = "Password";
$tdataadmin_members[".listFields"][] = "Active";
$tdataadmin_members[".listFields"][] = "Email";
$tdataadmin_members[".listFields"][] = "Mobile";
$tdataadmin_members[".listFields"][] = "UserType";
$tdataadmin_members[".listFields"][] = "Address";
$tdataadmin_members[".listFields"][] = "CurrentLocation";
$tdataadmin_members[".listFields"][] = "Fullname";
$tdataadmin_members[".listFields"][] = "DateOfBirth";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "ID";
$tdataadmin_members[".viewFields"][] = "Username";
$tdataadmin_members[".viewFields"][] = "Password";
$tdataadmin_members[".viewFields"][] = "Active";
$tdataadmin_members[".viewFields"][] = "Email";
$tdataadmin_members[".viewFields"][] = "Mobile";
$tdataadmin_members[".viewFields"][] = "UserType";
$tdataadmin_members[".viewFields"][] = "Address";
$tdataadmin_members[".viewFields"][] = "CurrentLocation";
$tdataadmin_members[".viewFields"][] = "Fullname";
$tdataadmin_members[".viewFields"][] = "DateOfBirth";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "Username";
$tdataadmin_members[".addFields"][] = "Password";
$tdataadmin_members[".addFields"][] = "Active";
$tdataadmin_members[".addFields"][] = "Email";
$tdataadmin_members[".addFields"][] = "Mobile";
$tdataadmin_members[".addFields"][] = "UserType";
$tdataadmin_members[".addFields"][] = "Address";
$tdataadmin_members[".addFields"][] = "CurrentLocation";
$tdataadmin_members[".addFields"][] = "Fullname";
$tdataadmin_members[".addFields"][] = "DateOfBirth";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "ID";
$tdataadmin_members[".masterListFields"][] = "Username";
$tdataadmin_members[".masterListFields"][] = "Password";
$tdataadmin_members[".masterListFields"][] = "Active";
$tdataadmin_members[".masterListFields"][] = "Email";
$tdataadmin_members[".masterListFields"][] = "Mobile";
$tdataadmin_members[".masterListFields"][] = "UserType";
$tdataadmin_members[".masterListFields"][] = "Address";
$tdataadmin_members[".masterListFields"][] = "CurrentLocation";
$tdataadmin_members[".masterListFields"][] = "Fullname";
$tdataadmin_members[".masterListFields"][] = "DateOfBirth";

$tdataadmin_members[".inlineAddFields"] = array();

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "Username";
$tdataadmin_members[".editFields"][] = "Password";
$tdataadmin_members[".editFields"][] = "Active";
$tdataadmin_members[".editFields"][] = "Email";
$tdataadmin_members[".editFields"][] = "Mobile";
$tdataadmin_members[".editFields"][] = "UserType";
$tdataadmin_members[".editFields"][] = "Address";
$tdataadmin_members[".editFields"][] = "CurrentLocation";
$tdataadmin_members[".editFields"][] = "Fullname";
$tdataadmin_members[".editFields"][] = "DateOfBirth";

$tdataadmin_members[".inlineEditFields"] = array();

$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "ID";
$tdataadmin_members[".exportFields"][] = "Username";
$tdataadmin_members[".exportFields"][] = "Password";
$tdataadmin_members[".exportFields"][] = "Active";
$tdataadmin_members[".exportFields"][] = "Email";
$tdataadmin_members[".exportFields"][] = "Mobile";
$tdataadmin_members[".exportFields"][] = "UserType";
$tdataadmin_members[".exportFields"][] = "Address";
$tdataadmin_members[".exportFields"][] = "CurrentLocation";
$tdataadmin_members[".exportFields"][] = "Fullname";
$tdataadmin_members[".exportFields"][] = "DateOfBirth";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "ID";
$tdataadmin_members[".importFields"][] = "Username";
$tdataadmin_members[".importFields"][] = "Password";
$tdataadmin_members[".importFields"][] = "Active";
$tdataadmin_members[".importFields"][] = "Email";
$tdataadmin_members[".importFields"][] = "Mobile";
$tdataadmin_members[".importFields"][] = "UserType";
$tdataadmin_members[".importFields"][] = "Address";
$tdataadmin_members[".importFields"][] = "CurrentLocation";
$tdataadmin_members[".importFields"][] = "Fullname";
$tdataadmin_members[".importFields"][] = "DateOfBirth";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "ID";
$tdataadmin_members[".printFields"][] = "Username";
$tdataadmin_members[".printFields"][] = "Password";
$tdataadmin_members[".printFields"][] = "Active";
$tdataadmin_members[".printFields"][] = "Email";
$tdataadmin_members[".printFields"][] = "Mobile";
$tdataadmin_members[".printFields"][] = "UserType";
$tdataadmin_members[".printFields"][] = "Address";
$tdataadmin_members[".printFields"][] = "CurrentLocation";
$tdataadmin_members[".printFields"][] = "Fullname";
$tdataadmin_members[".printFields"][] = "DateOfBirth";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","ID"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataadmin_members["ID"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Username"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Password"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Password"] = $fdata;
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Active"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataadmin_members["Active"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Email"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Email"] = $fdata;
//	Mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Mobile";
	$fdata["GoodName"] = "Mobile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Mobile"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Mobile"] = $fdata;
//	UserType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UserType";
	$fdata["GoodName"] = "UserType";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","UserType"); 
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
	$edata["LinkFieldType"] = 0;
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["UserType"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Address"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Address"] = $fdata;
//	CurrentLocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CurrentLocation";
	$fdata["GoodName"] = "CurrentLocation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","CurrentLocation"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["CurrentLocation"] = $fdata;
//	Fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Fullname";
	$fdata["GoodName"] = "Fullname";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Fullname"); 
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataadmin_members["Fullname"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","DateOfBirth"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataadmin_members["DateOfBirth"] = $fdata;

	
$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Username,  	Password,  	Active,  	Email,  	Mobile,  	UserType,  	Address,  	CurrentLocation,  	Fullname,  	DateOfBirth";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "admin_members";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto7["m_sql"] = "Username";
$proto7["m_srcTableName"] = "admin_members";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto9["m_sql"] = "Password";
$proto9["m_srcTableName"] = "admin_members";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto11["m_sql"] = "Active";
$proto11["m_srcTableName"] = "admin_members";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto13["m_sql"] = "Email";
$proto13["m_srcTableName"] = "admin_members";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Mobile",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto15["m_sql"] = "Mobile";
$proto15["m_srcTableName"] = "admin_members";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "UserType",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto17["m_sql"] = "UserType";
$proto17["m_srcTableName"] = "admin_members";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto19["m_sql"] = "Address";
$proto19["m_srcTableName"] = "admin_members";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentLocation",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto21["m_sql"] = "CurrentLocation";
$proto21["m_srcTableName"] = "admin_members";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Fullname",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto23["m_sql"] = "Fullname";
$proto23["m_srcTableName"] = "admin_members";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto25["m_sql"] = "DateOfBirth";
$proto25["m_srcTableName"] = "admin_members";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "users";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "ID";
$proto28["m_columns"][] = "Username";
$proto28["m_columns"][] = "Password";
$proto28["m_columns"][] = "Active";
$proto28["m_columns"][] = "Email";
$proto28["m_columns"][] = "Mobile";
$proto28["m_columns"][] = "UserType";
$proto28["m_columns"][] = "Address";
$proto28["m_columns"][] = "CurrentLocation";
$proto28["m_columns"][] = "Fullname";
$proto28["m_columns"][] = "DateOfBirth";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "users";
$proto27["m_alias"] = "";
$proto27["m_srcTableName"] = "admin_members";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
											
	
$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>