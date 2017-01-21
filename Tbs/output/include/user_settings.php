<?php
require_once(getabspath("classes/cipherer.php"));




$tdatauser = array();	
	$tdatauser[".truncateText"] = true;
	$tdatauser[".NumberOfChars"] = 80; 
	$tdatauser[".ShortName"] = "user";
	$tdatauser[".OwnerID"] = "Id";
	$tdatauser[".OriginalTable"] = "user";

//	field labels
$fieldLabelsuser = array();
$fieldToolTipsuser = array();
$pageTitlesuser = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser["English"] = array();
	$fieldToolTipsuser["English"] = array();
	$pageTitlesuser["English"] = array();
	$fieldLabelsuser["English"]["Id"] = "Id";
	$fieldToolTipsuser["English"]["Id"] = "";
	$fieldLabelsuser["English"]["Username"] = "Username";
	$fieldToolTipsuser["English"]["Username"] = "";
	$fieldLabelsuser["English"]["Password"] = "Password";
	$fieldToolTipsuser["English"]["Password"] = "";
	$fieldLabelsuser["English"]["CustomerId"] = "Customer Id";
	$fieldToolTipsuser["English"]["CustomerId"] = "";
	$fieldLabelsuser["English"]["Name"] = "Name";
	$fieldToolTipsuser["English"]["Name"] = "";
	$fieldLabelsuser["English"]["Active"] = "Active";
	$fieldToolTipsuser["English"]["Active"] = "";
	$fieldLabelsuser["English"]["Email"] = "Email";
	$fieldToolTipsuser["English"]["Email"] = "";
	$fieldLabelsuser["English"]["UserType"] = "User Type";
	$fieldToolTipsuser["English"]["UserType"] = "";
	if (count($fieldToolTipsuser["English"]))
		$tdatauser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsuser[""] = array();
	$fieldToolTipsuser[""] = array();
	$pageTitlesuser[""] = array();
	if (count($fieldToolTipsuser[""]))
		$tdatauser[".isUseToolTips"] = true;
}
	
	
	$tdatauser[".NCSearch"] = true;



$tdatauser[".shortTableName"] = "user";
$tdatauser[".nSecOptions"] = 1;
$tdatauser[".recsPerRowList"] = 1;
$tdatauser[".mainTableOwnerID"] = "Id";
$tdatauser[".moveNext"] = 1;
$tdatauser[".nType"] = 0;

$tdatauser[".strOriginalTableName"] = "user";

	


$tdatauser[".showAddInPopup"] = false;

$tdatauser[".showEditInPopup"] = false;

$tdatauser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatauser[".fieldsForRegister"] = array();
$tdatauser[".fieldsForRegister"][] = "Username";
			$tdatauser[".fieldsForRegister"][] = "Password";
			$tdatauser[".fieldsForRegister"][] = "Name";
			$tdatauser[".fieldsForRegister"][] = "Email";
			$tdatauser[".fieldsForRegister"][] = "CustomerId";
			$tdatauser[".fieldsForRegister"][] = "Type";
/*
$tdatauser[".PasswordField"] = "Password";
$tdatauser[".UserNameField"] = "Username";	
*/
//End register settings	

$tdatauser[".listAjax"] = false;

	$tdatauser[".audit"] = false;

	$tdatauser[".locking"] = true;

$tdatauser[".edit"] = true;
$tdatauser[".inlineEdit"] = true;
$tdatauser[".inlineAdd"] = true;
$tdatauser[".view"] = true;

$tdatauser[".import"] = true;

$tdatauser[".exportTo"] = true;

$tdatauser[".printFriendly"] = true;

$tdatauser[".delete"] = true;

$tdatauser[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatauser[".searchSaving"] = false;
//

$tdatauser[".showSearchPanel"] = true;
		$tdatauser[".flexibleSearch"] = true;		

if (isMobile())
	$tdatauser[".isUseAjaxSuggest"] = false;
else 
	$tdatauser[".isUseAjaxSuggest"] = true;

$tdatauser[".rowHighlite"] = true;



$tdatauser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser[".isUseTimeForSearch"] = false;





$tdatauser[".allSearchFields"] = array();
$tdatauser[".filterFields"] = array();
$tdatauser[".requiredSearchFields"] = array();

$tdatauser[".allSearchFields"][] = "Id";
		$tdatauser[".allSearchFields"][] = "UserType";
		$tdatauser[".allSearchFields"][] = "Username";
		$tdatauser[".allSearchFields"][] = "Password";
		$tdatauser[".allSearchFields"][] = "CustomerId";
		$tdatauser[".allSearchFields"][] = "Name";
		$tdatauser[".allSearchFields"][] = "Active";
		$tdatauser[".allSearchFields"][] = "Email";
		
$tdatauser[".googleLikeFields"] = array();
$tdatauser[".googleLikeFields"][] = "Id";
$tdatauser[".googleLikeFields"][] = "UserType";
$tdatauser[".googleLikeFields"][] = "Username";
$tdatauser[".googleLikeFields"][] = "Password";
$tdatauser[".googleLikeFields"][] = "CustomerId";
$tdatauser[".googleLikeFields"][] = "Name";
$tdatauser[".googleLikeFields"][] = "Active";
$tdatauser[".googleLikeFields"][] = "Email";


$tdatauser[".advSearchFields"] = array();
$tdatauser[".advSearchFields"][] = "Id";
$tdatauser[".advSearchFields"][] = "UserType";
$tdatauser[".advSearchFields"][] = "Username";
$tdatauser[".advSearchFields"][] = "Password";
$tdatauser[".advSearchFields"][] = "CustomerId";
$tdatauser[".advSearchFields"][] = "Name";
$tdatauser[".advSearchFields"][] = "Active";
$tdatauser[".advSearchFields"][] = "Email";

$tdatauser[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatauser[".pageSize"] = 20;

$tdatauser[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser[".strOrderBy"] = $tstrOrderBy;

$tdatauser[".orderindexes"] = array();

$tdatauser[".sqlHead"] = "SELECT Id,   UserType,   Username,   Password,   CustomerId,   Name,   Active,   Email";
$tdatauser[".sqlFrom"] = "FROM `user`";
$tdatauser[".sqlWhereExpr"] = "";
$tdatauser[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser[".arrGroupsPerPage"] = $arrGPP;


$tableKeysuser = array();
$tableKeysuser[] = "Id";
$tdatauser[".Keys"] = $tableKeysuser;

$tdatauser[".listFields"] = array();
$tdatauser[".listFields"][] = "UserType";
$tdatauser[".listFields"][] = "Id";
$tdatauser[".listFields"][] = "Username";
$tdatauser[".listFields"][] = "Password";
$tdatauser[".listFields"][] = "CustomerId";
$tdatauser[".listFields"][] = "Name";
$tdatauser[".listFields"][] = "Active";
$tdatauser[".listFields"][] = "Email";

$tdatauser[".hideMobileList"] = array();


$tdatauser[".viewFields"] = array();
$tdatauser[".viewFields"][] = "Id";
$tdatauser[".viewFields"][] = "UserType";
$tdatauser[".viewFields"][] = "Username";
$tdatauser[".viewFields"][] = "Password";
$tdatauser[".viewFields"][] = "CustomerId";
$tdatauser[".viewFields"][] = "Name";
$tdatauser[".viewFields"][] = "Active";
$tdatauser[".viewFields"][] = "Email";

$tdatauser[".addFields"] = array();
$tdatauser[".addFields"][] = "UserType";
$tdatauser[".addFields"][] = "Username";
$tdatauser[".addFields"][] = "Password";
$tdatauser[".addFields"][] = "CustomerId";
$tdatauser[".addFields"][] = "Name";
$tdatauser[".addFields"][] = "Active";
$tdatauser[".addFields"][] = "Email";

$tdatauser[".inlineAddFields"] = array();
$tdatauser[".inlineAddFields"][] = "UserType";
$tdatauser[".inlineAddFields"][] = "Username";
$tdatauser[".inlineAddFields"][] = "Password";
$tdatauser[".inlineAddFields"][] = "CustomerId";
$tdatauser[".inlineAddFields"][] = "Name";
$tdatauser[".inlineAddFields"][] = "Active";
$tdatauser[".inlineAddFields"][] = "Email";

$tdatauser[".editFields"] = array();
$tdatauser[".editFields"][] = "UserType";
$tdatauser[".editFields"][] = "Username";
$tdatauser[".editFields"][] = "Password";
$tdatauser[".editFields"][] = "CustomerId";
$tdatauser[".editFields"][] = "Name";
$tdatauser[".editFields"][] = "Active";
$tdatauser[".editFields"][] = "Email";

$tdatauser[".inlineEditFields"] = array();
$tdatauser[".inlineEditFields"][] = "UserType";
$tdatauser[".inlineEditFields"][] = "Username";
$tdatauser[".inlineEditFields"][] = "Password";
$tdatauser[".inlineEditFields"][] = "CustomerId";
$tdatauser[".inlineEditFields"][] = "Name";
$tdatauser[".inlineEditFields"][] = "Active";
$tdatauser[".inlineEditFields"][] = "Email";

$tdatauser[".exportFields"] = array();
$tdatauser[".exportFields"][] = "Id";
$tdatauser[".exportFields"][] = "UserType";
$tdatauser[".exportFields"][] = "Username";
$tdatauser[".exportFields"][] = "Password";
$tdatauser[".exportFields"][] = "CustomerId";
$tdatauser[".exportFields"][] = "Name";
$tdatauser[".exportFields"][] = "Active";
$tdatauser[".exportFields"][] = "Email";

$tdatauser[".printFields"] = array();
$tdatauser[".printFields"][] = "Id";
$tdatauser[".printFields"][] = "UserType";
$tdatauser[".printFields"][] = "Username";
$tdatauser[".printFields"][] = "Password";
$tdatauser[".printFields"][] = "CustomerId";
$tdatauser[".printFields"][] = "Name";
$tdatauser[".printFields"][] = "Active";
$tdatauser[".printFields"][] = "Email";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","Id"); 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Id"; 
		$fdata["FullName"] = "Id";
	
		
		
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
			
		$edata["controlWidth"] = 143;
	
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
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["Id"] = $fdata;
//	UserType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserType";
	$fdata["GoodName"] = "UserType";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","UserType"); 
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
	
		$fdata["strField"] = "UserType"; 
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
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 143;
	
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
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["UserType"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","Username"); 
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
	
		$fdata["strField"] = "Username"; 
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
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";
	
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
							if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
			//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","Password"); 
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
	
		$fdata["strField"] = "Password"; 
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
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=30";
	
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
							if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
			//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["Password"] = $fdata;
//	CustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CustomerId";
	$fdata["GoodName"] = "CustomerId";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","CustomerId"); 
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
	
		$fdata["strField"] = "CustomerId"; 
		$fdata["FullName"] = "CustomerId";
	
		
		
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
	$edata["LookupTable"] = "RegisterPage_customer";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupOrderBy"] = "Name";
	
		
			
		$edata["AllowToAdd"] = true; 
	
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		$edata["controlWidth"] = 143;
	
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
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["CustomerId"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","Name"); 
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
	
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
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
			
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
									//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["Name"] = $fdata;
//	Active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Active";
	$fdata["GoodName"] = "Active";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","Active"); 
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
	
		$fdata["strField"] = "Active"; 
		$fdata["FullName"] = "Active";
	
		
		
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
			
		$edata["controlWidth"] = 143;
	
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
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["Active"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "user";
	$fdata["Label"] = GetFieldLabel("user","Email"); 
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
	
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		
		
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
			
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
										if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
	// the end of search options settings	

	

	
	$tdatauser["Email"] = $fdata;

	
$tables_data["user"]=&$tdatauser;
$field_labels["user"] = &$fieldLabelsuser;
$fieldToolTips["user"] = &$fieldToolTipsuser;
$page_titles["user"] = &$pageTitlesuser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["user"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["user"] = array();


	
				$strOriginalDetailsTable="customer";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="customer";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customer";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = "list";
					$masterTablesData["user"][0] = $masterParams;	
				$masterTablesData["user"][0]["masterKeys"] = array();
	$masterTablesData["user"][0]["masterKeys"][]="Id";
				$masterTablesData["user"][0]["detailKeys"] = array();
	$masterTablesData["user"][0]["detailKeys"][]="CustomerId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   UserType,   Username,   Password,   CustomerId,   Name,   Active,   Email";
$proto0["m_strFrom"] = "FROM `user`";
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
	"m_strName" => "Id",
	"m_strTable" => "user"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "UserType",
	"m_strTable" => "user"
));

$proto7["m_sql"] = "UserType";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "user"
));

$proto9["m_sql"] = "Username";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "user"
));

$proto11["m_sql"] = "Password";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerId",
	"m_strTable" => "user"
));

$proto13["m_sql"] = "CustomerId";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "user"
));

$proto15["m_sql"] = "Name";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Active",
	"m_strTable" => "user"
));

$proto17["m_sql"] = "Active";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "user"
));

$proto19["m_sql"] = "Email";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "user";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "Id";
$proto22["m_columns"][] = "UserType";
$proto22["m_columns"][] = "Username";
$proto22["m_columns"][] = "Password";
$proto22["m_columns"][] = "CustomerId";
$proto22["m_columns"][] = "Name";
$proto22["m_columns"][] = "Active";
$proto22["m_columns"][] = "Email";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "`user`";
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user = createSqlQuery_user();

								
	
$tdatauser[".sqlquery"] = $queryData_user;

$tableEvents["user"] = new eventsBase;
$tdatauser[".hasEvents"] = false;

$cipherer = new RunnerCipherer("user");

?>