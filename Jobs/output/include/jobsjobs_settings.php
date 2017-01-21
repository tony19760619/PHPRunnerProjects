<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobsjobs = array();	
	$tdatajobsjobs[".truncateText"] = true;
	$tdatajobsjobs[".NumberOfChars"] = 80; 
	$tdatajobsjobs[".ShortName"] = "jobsjobs";
	$tdatajobsjobs[".OwnerID"] = "";
	$tdatajobsjobs[".OriginalTable"] = "jobsjobs";

//	field labels
$fieldLabelsjobsjobs = array();
$fieldToolTipsjobsjobs = array();
$pageTitlesjobsjobs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobsjobs["English"] = array();
	$fieldToolTipsjobsjobs["English"] = array();
	$pageTitlesjobsjobs["English"] = array();
	$fieldLabelsjobsjobs["English"]["ID"] = "ID";
	$fieldToolTipsjobsjobs["English"]["ID"] = "";
	$fieldLabelsjobsjobs["English"]["City"] = "City";
	$fieldToolTipsjobsjobs["English"]["City"] = "";
	$fieldLabelsjobsjobs["English"]["Company"] = "Company";
	$fieldToolTipsjobsjobs["English"]["Company"] = "";
	$fieldLabelsjobsjobs["English"]["Country"] = "Country";
	$fieldToolTipsjobsjobs["English"]["Country"] = "";
	$fieldLabelsjobsjobs["English"]["DateAdded"] = "Posted";
	$fieldToolTipsjobsjobs["English"]["DateAdded"] = "";
	$fieldLabelsjobsjobs["English"]["Description"] = "Description";
	$fieldToolTipsjobsjobs["English"]["Description"] = "";
	$fieldLabelsjobsjobs["English"]["HowToApply"] = "How To Apply";
	$fieldToolTipsjobsjobs["English"]["HowToApply"] = "";
	$fieldLabelsjobsjobs["English"]["LogoURL"] = "Logo URL";
	$fieldToolTipsjobsjobs["English"]["LogoURL"] = "";
	$fieldLabelsjobsjobs["English"]["state"] = "State";
	$fieldToolTipsjobsjobs["English"]["state"] = "";
	$fieldLabelsjobsjobs["English"]["Title"] = "Title";
	$fieldToolTipsjobsjobs["English"]["Title"] = "";
	$fieldLabelsjobsjobs["English"]["TypeID"] = "Category";
	$fieldToolTipsjobsjobs["English"]["TypeID"] = "";
	$fieldLabelsjobsjobs["English"]["Website"] = "Website";
	$fieldToolTipsjobsjobs["English"]["Website"] = "";
	$fieldLabelsjobsjobs["English"]["Zip"] = "Zip";
	$fieldToolTipsjobsjobs["English"]["Zip"] = "";
	$fieldLabelsjobsjobs["English"]["Job"] = "Job";
	$fieldToolTipsjobsjobs["English"]["Job"] = "";
	$fieldLabelsjobsjobs["English"]["Category"] = "Category";
	$fieldToolTipsjobsjobs["English"]["Category"] = "";
	if (count($fieldToolTipsjobsjobs["English"]))
		$tdatajobsjobs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobsjobs[""] = array();
	$fieldToolTipsjobsjobs[""] = array();
	$pageTitlesjobsjobs[""] = array();
	if (count($fieldToolTipsjobsjobs[""]))
		$tdatajobsjobs[".isUseToolTips"] = true;
}
	
	
	$tdatajobsjobs[".NCSearch"] = true;



$tdatajobsjobs[".shortTableName"] = "jobsjobs";
$tdatajobsjobs[".nSecOptions"] = 0;
$tdatajobsjobs[".recsPerRowList"] = 1;
$tdatajobsjobs[".mainTableOwnerID"] = "";
$tdatajobsjobs[".moveNext"] = 1;
$tdatajobsjobs[".nType"] = 0;

$tdatajobsjobs[".strOriginalTableName"] = "jobsjobs";




$tdatajobsjobs[".showAddInPopup"] = false;

$tdatajobsjobs[".showEditInPopup"] = false;

$tdatajobsjobs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatajobsjobs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobsjobs[".fieldsForRegister"] = array();
	
$tdatajobsjobs[".listAjax"] = false;

	$tdatajobsjobs[".audit"] = false;

	$tdatajobsjobs[".locking"] = false;

$tdatajobsjobs[".edit"] = true;

$tdatajobsjobs[".list"] = true;

$tdatajobsjobs[".view"] = true;

$tdatajobsjobs[".import"] = true;

$tdatajobsjobs[".exportTo"] = true;

$tdatajobsjobs[".printFriendly"] = true;

$tdatajobsjobs[".delete"] = true;

$tdatajobsjobs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobsjobs[".searchSaving"] = false;
//

$tdatajobsjobs[".showSearchPanel"] = true;
		$tdatajobsjobs[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobsjobs[".isUseAjaxSuggest"] = false;
else 
	$tdatajobsjobs[".isUseAjaxSuggest"] = true;

$tdatajobsjobs[".rowHighlite"] = true;



$tdatajobsjobs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobsjobs[".isUseTimeForSearch"] = false;





$tdatajobsjobs[".allSearchFields"] = array();
$tdatajobsjobs[".filterFields"] = array();
$tdatajobsjobs[".requiredSearchFields"] = array();

$tdatajobsjobs[".allSearchFields"][] = "Company";
	$tdatajobsjobs[".allSearchFields"][] = "Title";
	$tdatajobsjobs[".allSearchFields"][] = "Description";
	$tdatajobsjobs[".allSearchFields"][] = "HowToApply";
	$tdatajobsjobs[".allSearchFields"][] = "Zip";
	$tdatajobsjobs[".allSearchFields"][] = "City";
	$tdatajobsjobs[".allSearchFields"][] = "state";
	$tdatajobsjobs[".allSearchFields"][] = "Country";
	$tdatajobsjobs[".allSearchFields"][] = "Website";
	$tdatajobsjobs[".allSearchFields"][] = "LogoURL";
	$tdatajobsjobs[".allSearchFields"][] = "Category";
	
$tdatajobsjobs[".filterFields"][] = "Category";	

$tdatajobsjobs[".googleLikeFields"] = array();
$tdatajobsjobs[".googleLikeFields"][] = "Company";
$tdatajobsjobs[".googleLikeFields"][] = "Title";
$tdatajobsjobs[".googleLikeFields"][] = "Description";
$tdatajobsjobs[".googleLikeFields"][] = "HowToApply";
$tdatajobsjobs[".googleLikeFields"][] = "Zip";
$tdatajobsjobs[".googleLikeFields"][] = "City";
$tdatajobsjobs[".googleLikeFields"][] = "state";
$tdatajobsjobs[".googleLikeFields"][] = "Country";
$tdatajobsjobs[".googleLikeFields"][] = "Website";
$tdatajobsjobs[".googleLikeFields"][] = "LogoURL";
$tdatajobsjobs[".googleLikeFields"][] = "Category";


$tdatajobsjobs[".advSearchFields"] = array();
$tdatajobsjobs[".advSearchFields"][] = "Company";
$tdatajobsjobs[".advSearchFields"][] = "Title";
$tdatajobsjobs[".advSearchFields"][] = "Description";
$tdatajobsjobs[".advSearchFields"][] = "HowToApply";
$tdatajobsjobs[".advSearchFields"][] = "Zip";
$tdatajobsjobs[".advSearchFields"][] = "City";
$tdatajobsjobs[".advSearchFields"][] = "state";
$tdatajobsjobs[".advSearchFields"][] = "Country";
$tdatajobsjobs[".advSearchFields"][] = "Website";
$tdatajobsjobs[".advSearchFields"][] = "LogoURL";
$tdatajobsjobs[".advSearchFields"][] = "Category";

$tdatajobsjobs[".tableType"] = "list";

$tdatajobsjobs[".printerPageOrientation"] = 0;
$tdatajobsjobs[".nPrinterPageScale"] = 100;

$tdatajobsjobs[".nPrinterSplitRecords"] = 40;

$tdatajobsjobs[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatajobsjobs[".pageSize"] = 20;

$tdatajobsjobs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobsjobs[".strOrderBy"] = $tstrOrderBy;

$tdatajobsjobs[".orderindexes"] = array();

$tdatajobsjobs[".sqlHead"] = "select jobsjobs.ID,  jobsjobs.Company,  jobsjobs.Title,  jobsjobs.TypeID,  jobsjobs.Description,  jobsjobs.HowToApply,  jobsjobs.Zip,  jobsjobs.City,  jobsjobs.`state`,  jobsjobs.Country,  jobsjobs.Website,  jobsjobs.LogoURL,  jobsjobs.DateAdded,  jobsjobs.Title AS Job,  jobsjobtype.sType AS Category";
$tdatajobsjobs[".sqlFrom"] = "FROM jobsjobs  LEFT OUTER JOIN jobsjobtype ON jobsjobs.TypeID = `jobsjobtype`.`ID`";
$tdatajobsjobs[".sqlWhereExpr"] = "";
$tdatajobsjobs[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobsjobs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobsjobs[".arrGroupsPerPage"] = $arrGPP;


$tableKeysjobsjobs = array();
$tableKeysjobsjobs[] = "ID";
$tdatajobsjobs[".Keys"] = $tableKeysjobsjobs;

$tdatajobsjobs[".listFields"] = array();
$tdatajobsjobs[".listFields"][] = "TypeID";
$tdatajobsjobs[".listFields"][] = "Title";
$tdatajobsjobs[".listFields"][] = "City";
$tdatajobsjobs[".listFields"][] = "state";
$tdatajobsjobs[".listFields"][] = "Zip";
$tdatajobsjobs[".listFields"][] = "DateAdded";

$tdatajobsjobs[".hideMobileList"] = array();


$tdatajobsjobs[".viewFields"] = array();
$tdatajobsjobs[".viewFields"][] = "Title";
$tdatajobsjobs[".viewFields"][] = "Category";
$tdatajobsjobs[".viewFields"][] = "Description";
$tdatajobsjobs[".viewFields"][] = "HowToApply";
$tdatajobsjobs[".viewFields"][] = "City";
$tdatajobsjobs[".viewFields"][] = "state";
$tdatajobsjobs[".viewFields"][] = "Zip";
$tdatajobsjobs[".viewFields"][] = "DateAdded";

$tdatajobsjobs[".addFields"] = array();
$tdatajobsjobs[".addFields"][] = "Title";
$tdatajobsjobs[".addFields"][] = "TypeID";
$tdatajobsjobs[".addFields"][] = "Description";
$tdatajobsjobs[".addFields"][] = "HowToApply";
$tdatajobsjobs[".addFields"][] = "Zip";
$tdatajobsjobs[".addFields"][] = "City";
$tdatajobsjobs[".addFields"][] = "state";
$tdatajobsjobs[".addFields"][] = "Country";
$tdatajobsjobs[".addFields"][] = "Website";
$tdatajobsjobs[".addFields"][] = "LogoURL";
$tdatajobsjobs[".addFields"][] = "DateAdded";

$tdatajobsjobs[".inlineAddFields"] = array();

$tdatajobsjobs[".editFields"] = array();
$tdatajobsjobs[".editFields"][] = "Title";
$tdatajobsjobs[".editFields"][] = "TypeID";
$tdatajobsjobs[".editFields"][] = "Description";
$tdatajobsjobs[".editFields"][] = "HowToApply";
$tdatajobsjobs[".editFields"][] = "Zip";
$tdatajobsjobs[".editFields"][] = "City";
$tdatajobsjobs[".editFields"][] = "state";
$tdatajobsjobs[".editFields"][] = "Country";
$tdatajobsjobs[".editFields"][] = "Website";
$tdatajobsjobs[".editFields"][] = "LogoURL";
$tdatajobsjobs[".editFields"][] = "DateAdded";

$tdatajobsjobs[".inlineEditFields"] = array();

$tdatajobsjobs[".exportFields"] = array();
$tdatajobsjobs[".exportFields"][] = "Title";
$tdatajobsjobs[".exportFields"][] = "Zip";
$tdatajobsjobs[".exportFields"][] = "City";
$tdatajobsjobs[".exportFields"][] = "state";
$tdatajobsjobs[".exportFields"][] = "DateAdded";
$tdatajobsjobs[".exportFields"][] = "Category";

$tdatajobsjobs[".importFields"] = array();
$tdatajobsjobs[".importFields"][] = "ID";
$tdatajobsjobs[".importFields"][] = "Company";
$tdatajobsjobs[".importFields"][] = "Title";
$tdatajobsjobs[".importFields"][] = "TypeID";
$tdatajobsjobs[".importFields"][] = "Description";
$tdatajobsjobs[".importFields"][] = "HowToApply";
$tdatajobsjobs[".importFields"][] = "Zip";
$tdatajobsjobs[".importFields"][] = "City";
$tdatajobsjobs[".importFields"][] = "state";
$tdatajobsjobs[".importFields"][] = "Country";
$tdatajobsjobs[".importFields"][] = "Website";
$tdatajobsjobs[".importFields"][] = "LogoURL";
$tdatajobsjobs[".importFields"][] = "DateAdded";
$tdatajobsjobs[".importFields"][] = "Job";
$tdatajobsjobs[".importFields"][] = "Category";

$tdatajobsjobs[".printFields"] = array();
$tdatajobsjobs[".printFields"][] = "Title";
$tdatajobsjobs[".printFields"][] = "HowToApply";
$tdatajobsjobs[".printFields"][] = "Zip";
$tdatajobsjobs[".printFields"][] = "City";
$tdatajobsjobs[".printFields"][] = "state";
$tdatajobsjobs[".printFields"][] = "DateAdded";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.ID";
	
		
		
				
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
	
	
	
	

	

	
	$tdatajobsjobs["ID"] = $fdata;
//	Company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Company";
	$fdata["GoodName"] = "Company";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Company"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Company"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Company";
	
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["Company"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Title"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Title";
	
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["Title"] = $fdata;
//	TypeID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TypeID";
	$fdata["GoodName"] = "TypeID";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","TypeID"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "TypeID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.TypeID";
	
		
		
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
	$edata["LookupTable"] = "jobsjobtype";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sType";
	
		
	$edata["LookupOrderBy"] = "sType";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatajobsjobs["TypeID"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Description"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Description";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 150;
			$edata["nCols"] = 400;
	
		
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["Description"] = $fdata;
//	HowToApply
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "HowToApply";
	$fdata["GoodName"] = "HowToApply";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","HowToApply"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "HowToApply"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.HowToApply";
	
		
		
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
	
		
		
		
				$edata["nRows"] = 150;
			$edata["nCols"] = 400;
	
		
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["HowToApply"] = $fdata;
//	Zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Zip";
	$fdata["GoodName"] = "Zip";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Zip"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Zip"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Zip";
	
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["Zip"] = $fdata;
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","City"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "City"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.City";
	
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["City"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","state"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "state"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.`state`";
	
		
		
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
	$edata["LookupTable"] = "jobsstate";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "state";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "state";
	
		
	$edata["LookupOrderBy"] = "state";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["state"] = $fdata;
//	Country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Country";
	$fdata["GoodName"] = "Country";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Country"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Country"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Country";
	
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["Country"] = $fdata;
//	Website
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Website";
	$fdata["GoodName"] = "Website";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Website"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Website"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Website";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["Website"] = $fdata;
//	LogoURL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LogoURL";
	$fdata["GoodName"] = "LogoURL";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","LogoURL"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "LogoURL"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.LogoURL";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsjobs["LogoURL"] = $fdata;
//	DateAdded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DateAdded";
	$fdata["GoodName"] = "DateAdded";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","DateAdded"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DateAdded"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.DateAdded";
	
		
		
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
	
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatajobsjobs["DateAdded"] = $fdata;
//	Job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Job";
	$fdata["GoodName"] = "Job";
	$fdata["ownerTable"] = "jobsjobs";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Job"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Title"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobs.Title";
	
		
		
				
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatajobsjobs["Job"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "jobsjobtype";
	$fdata["Label"] = GetFieldLabel("jobsjobs","Category"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "sType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jobsjobtype.sType";
	
		
		
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	
//Filters settings
	$fdata["filterTotals"] = 1;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdatajobsjobs["Category"] = $fdata;

	
$tables_data["jobsjobs"]=&$tdatajobsjobs;
$field_labels["jobsjobs"] = &$fieldLabelsjobsjobs;
$fieldToolTips["jobsjobs"] = &$fieldToolTipsjobsjobs;
$page_titles["jobsjobs"] = &$pageTitlesjobsjobs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobsjobs"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jobsjobs"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobsjobs()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "jobsjobs.ID,  jobsjobs.Company,  jobsjobs.Title,  jobsjobs.TypeID,  jobsjobs.Description,  jobsjobs.HowToApply,  jobsjobs.Zip,  jobsjobs.City,  jobsjobs.`state`,  jobsjobs.Country,  jobsjobs.Website,  jobsjobs.LogoURL,  jobsjobs.DateAdded,  jobsjobs.Title AS Job,  jobsjobtype.sType AS Category";
$proto0["m_strFrom"] = "FROM jobsjobs  LEFT OUTER JOIN jobsjobtype ON jobsjobs.TypeID = `jobsjobtype`.`ID`";
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
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto5["m_sql"] = "jobsjobs.ID";
$proto5["m_srcTableName"] = "jobsjobs";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Company",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto7["m_sql"] = "jobsjobs.Company";
$proto7["m_srcTableName"] = "jobsjobs";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto9["m_sql"] = "jobsjobs.Title";
$proto9["m_srcTableName"] = "jobsjobs";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "TypeID",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto11["m_sql"] = "jobsjobs.TypeID";
$proto11["m_srcTableName"] = "jobsjobs";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto13["m_sql"] = "jobsjobs.Description";
$proto13["m_srcTableName"] = "jobsjobs";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "HowToApply",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto15["m_sql"] = "jobsjobs.HowToApply";
$proto15["m_srcTableName"] = "jobsjobs";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Zip",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto17["m_sql"] = "jobsjobs.Zip";
$proto17["m_srcTableName"] = "jobsjobs";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto19["m_sql"] = "jobsjobs.City";
$proto19["m_srcTableName"] = "jobsjobs";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto21["m_sql"] = "jobsjobs.`state`";
$proto21["m_srcTableName"] = "jobsjobs";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Country",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto23["m_sql"] = "jobsjobs.Country";
$proto23["m_srcTableName"] = "jobsjobs";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Website",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto25["m_sql"] = "jobsjobs.Website";
$proto25["m_srcTableName"] = "jobsjobs";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "LogoURL",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto27["m_sql"] = "jobsjobs.LogoURL";
$proto27["m_srcTableName"] = "jobsjobs";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "DateAdded",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto29["m_sql"] = "jobsjobs.DateAdded";
$proto29["m_srcTableName"] = "jobsjobs";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto31["m_sql"] = "jobsjobs.Title";
$proto31["m_srcTableName"] = "jobsjobs";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "Job";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sType",
	"m_strTable" => "jobsjobtype",
	"m_srcTableName" => "jobsjobs"
));

$proto33["m_sql"] = "jobsjobtype.sType";
$proto33["m_srcTableName"] = "jobsjobs";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Category";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "jobsjobs";
$proto36["m_srcTableName"] = "jobsjobs";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "ID";
$proto36["m_columns"][] = "City";
$proto36["m_columns"][] = "Company";
$proto36["m_columns"][] = "Country";
$proto36["m_columns"][] = "DateAdded";
$proto36["m_columns"][] = "Description";
$proto36["m_columns"][] = "HowToApply";
$proto36["m_columns"][] = "LogoURL";
$proto36["m_columns"][] = "state";
$proto36["m_columns"][] = "Title";
$proto36["m_columns"][] = "TypeID";
$proto36["m_columns"][] = "Website";
$proto36["m_columns"][] = "Zip";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "jobsjobs";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "jobsjobs";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto0["m_fromlist"][]=$obj;
												$proto39=array();
$proto39["m_link"] = "SQLL_LEFTJOIN";
			$proto40=array();
$proto40["m_strName"] = "jobsjobtype";
$proto40["m_srcTableName"] = "jobsjobs";
$proto40["m_columns"] = array();
$proto40["m_columns"][] = "ID";
$proto40["m_columns"][] = "sType";
$obj = new SQLTable($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "LEFT OUTER JOIN jobsjobtype ON jobsjobs.TypeID = `jobsjobtype`.`ID`";
$proto39["m_alias"] = "";
$proto39["m_srcTableName"] = "jobsjobs";
$proto41=array();
$proto41["m_sql"] = "jobsjobs.TypeID = `jobsjobtype`.`ID`";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TypeID",
	"m_strTable" => "jobsjobs",
	"m_srcTableName" => "jobsjobs"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "= `jobsjobtype`.`ID`";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="jobsjobs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_jobsjobs = createSqlQuery_jobsjobs();


	
															
	
$tdatajobsjobs[".sqlquery"] = $queryData_jobsjobs;

include_once(getabspath("include/jobsjobs_events.php"));
$tableEvents["jobsjobs"] = new eventclass_jobsjobs;
$tdatajobsjobs[".hasEvents"] = true;

?>