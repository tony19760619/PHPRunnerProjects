<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomerwastebyweek = array();	
	$tdatacustomerwastebyweek[".truncateText"] = true;
	$tdatacustomerwastebyweek[".NumberOfChars"] = 80; 
	$tdatacustomerwastebyweek[".ShortName"] = "customerwastebyweek";
	$tdatacustomerwastebyweek[".OwnerID"] = "CustomerId";
	$tdatacustomerwastebyweek[".OriginalTable"] = "customerwastebyweek";

//	field labels
$fieldLabelscustomerwastebyweek = array();
$fieldToolTipscustomerwastebyweek = array();
$pageTitlescustomerwastebyweek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomerwastebyweek["English"] = array();
	$fieldToolTipscustomerwastebyweek["English"] = array();
	$pageTitlescustomerwastebyweek["English"] = array();
	$fieldLabelscustomerwastebyweek["English"]["Id"] = "Id";
	$fieldToolTipscustomerwastebyweek["English"]["Id"] = "";
	$fieldLabelscustomerwastebyweek["English"]["CustomerId"] = "Customer Id";
	$fieldToolTipscustomerwastebyweek["English"]["CustomerId"] = "";
	$fieldLabelscustomerwastebyweek["English"]["WasteId"] = "Waste Id";
	$fieldToolTipscustomerwastebyweek["English"]["WasteId"] = "";
	$fieldLabelscustomerwastebyweek["English"]["Year"] = "Year";
	$fieldToolTipscustomerwastebyweek["English"]["Year"] = "";
	$fieldLabelscustomerwastebyweek["English"]["Week"] = "Week";
	$fieldToolTipscustomerwastebyweek["English"]["Week"] = "";
	$fieldLabelscustomerwastebyweek["English"]["Amount"] = "Amount";
	$fieldToolTipscustomerwastebyweek["English"]["Amount"] = "";
	if (count($fieldToolTipscustomerwastebyweek["English"]))
		$tdatacustomerwastebyweek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomerwastebyweek[""] = array();
	$fieldToolTipscustomerwastebyweek[""] = array();
	$pageTitlescustomerwastebyweek[""] = array();
	if (count($fieldToolTipscustomerwastebyweek[""]))
		$tdatacustomerwastebyweek[".isUseToolTips"] = true;
}
	
	
	$tdatacustomerwastebyweek[".NCSearch"] = true;



$tdatacustomerwastebyweek[".shortTableName"] = "customerwastebyweek";
$tdatacustomerwastebyweek[".nSecOptions"] = 1;
$tdatacustomerwastebyweek[".recsPerRowList"] = 1;
$tdatacustomerwastebyweek[".mainTableOwnerID"] = "CustomerId";
$tdatacustomerwastebyweek[".moveNext"] = 1;
$tdatacustomerwastebyweek[".nType"] = 0;

$tdatacustomerwastebyweek[".strOriginalTableName"] = "customerwastebyweek";

	


$tdatacustomerwastebyweek[".showAddInPopup"] = false;

$tdatacustomerwastebyweek[".showEditInPopup"] = false;

$tdatacustomerwastebyweek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomerwastebyweek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomerwastebyweek[".fieldsForRegister"] = array();
	
$tdatacustomerwastebyweek[".listAjax"] = false;

	$tdatacustomerwastebyweek[".audit"] = false;

	$tdatacustomerwastebyweek[".locking"] = true;

$tdatacustomerwastebyweek[".edit"] = true;
$tdatacustomerwastebyweek[".inlineEdit"] = true;
$tdatacustomerwastebyweek[".inlineAdd"] = true;
$tdatacustomerwastebyweek[".view"] = true;

$tdatacustomerwastebyweek[".import"] = true;

$tdatacustomerwastebyweek[".exportTo"] = true;

$tdatacustomerwastebyweek[".printFriendly"] = true;

$tdatacustomerwastebyweek[".delete"] = true;

$tdatacustomerwastebyweek[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerwastebyweek[".searchSaving"] = false;
//

$tdatacustomerwastebyweek[".showSearchPanel"] = true;
		$tdatacustomerwastebyweek[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustomerwastebyweek[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomerwastebyweek[".isUseAjaxSuggest"] = true;

$tdatacustomerwastebyweek[".rowHighlite"] = true;



$tdatacustomerwastebyweek[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomerwastebyweek[".isUseTimeForSearch"] = false;





$tdatacustomerwastebyweek[".allSearchFields"] = array();
$tdatacustomerwastebyweek[".filterFields"] = array();
$tdatacustomerwastebyweek[".requiredSearchFields"] = array();

$tdatacustomerwastebyweek[".allSearchFields"][] = "Id";
		$tdatacustomerwastebyweek[".allSearchFields"][] = "CustomerId";
		$tdatacustomerwastebyweek[".allSearchFields"][] = "WasteId";
		$tdatacustomerwastebyweek[".allSearchFields"][] = "Year";
		$tdatacustomerwastebyweek[".allSearchFields"][] = "Week";
		$tdatacustomerwastebyweek[".allSearchFields"][] = "Amount";
		
$tdatacustomerwastebyweek[".googleLikeFields"] = array();
$tdatacustomerwastebyweek[".googleLikeFields"][] = "Id";
$tdatacustomerwastebyweek[".googleLikeFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".googleLikeFields"][] = "WasteId";
$tdatacustomerwastebyweek[".googleLikeFields"][] = "Year";
$tdatacustomerwastebyweek[".googleLikeFields"][] = "Week";
$tdatacustomerwastebyweek[".googleLikeFields"][] = "Amount";

$tdatacustomerwastebyweek[".panelSearchFields"] = array();
$tdatacustomerwastebyweek[".searchPanelOptions"] = array();
$tdatacustomerwastebyweek[".panelSearchFields"][] = "CustomerId";
	$tdatacustomerwastebyweek[".panelSearchFields"][] = "WasteId";
	$tdatacustomerwastebyweek[".panelSearchFields"][] = "Year";
	$tdatacustomerwastebyweek[".panelSearchFields"][] = "Week";
	
$tdatacustomerwastebyweek[".advSearchFields"] = array();
$tdatacustomerwastebyweek[".advSearchFields"][] = "Id";
$tdatacustomerwastebyweek[".advSearchFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".advSearchFields"][] = "WasteId";
$tdatacustomerwastebyweek[".advSearchFields"][] = "Year";
$tdatacustomerwastebyweek[".advSearchFields"][] = "Week";
$tdatacustomerwastebyweek[".advSearchFields"][] = "Amount";

$tdatacustomerwastebyweek[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacustomerwastebyweek[".pageSize"] = 20;

$tdatacustomerwastebyweek[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomerwastebyweek[".strOrderBy"] = $tstrOrderBy;

$tdatacustomerwastebyweek[".orderindexes"] = array();

$tdatacustomerwastebyweek[".sqlHead"] = "SELECT Id,   CustomerId,   WasteId,   `Year`,   Week,   Amount";
$tdatacustomerwastebyweek[".sqlFrom"] = "FROM customerwastebyweek";
$tdatacustomerwastebyweek[".sqlWhereExpr"] = "";
$tdatacustomerwastebyweek[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomerwastebyweek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomerwastebyweek[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscustomerwastebyweek = array();
$tableKeyscustomerwastebyweek[] = "Id";
$tableKeyscustomerwastebyweek[] = "CustomerId";
$tableKeyscustomerwastebyweek[] = "WasteId";
$tdatacustomerwastebyweek[".Keys"] = $tableKeyscustomerwastebyweek;

$tdatacustomerwastebyweek[".listFields"] = array();
$tdatacustomerwastebyweek[".listFields"][] = "Id";
$tdatacustomerwastebyweek[".listFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".listFields"][] = "WasteId";
$tdatacustomerwastebyweek[".listFields"][] = "Year";
$tdatacustomerwastebyweek[".listFields"][] = "Week";
$tdatacustomerwastebyweek[".listFields"][] = "Amount";

$tdatacustomerwastebyweek[".hideMobileList"] = array();


$tdatacustomerwastebyweek[".viewFields"] = array();
$tdatacustomerwastebyweek[".viewFields"][] = "Id";
$tdatacustomerwastebyweek[".viewFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".viewFields"][] = "WasteId";
$tdatacustomerwastebyweek[".viewFields"][] = "Year";
$tdatacustomerwastebyweek[".viewFields"][] = "Week";
$tdatacustomerwastebyweek[".viewFields"][] = "Amount";

$tdatacustomerwastebyweek[".addFields"] = array();
$tdatacustomerwastebyweek[".addFields"][] = "WasteId";
$tdatacustomerwastebyweek[".addFields"][] = "Year";
$tdatacustomerwastebyweek[".addFields"][] = "Week";
$tdatacustomerwastebyweek[".addFields"][] = "Amount";

$tdatacustomerwastebyweek[".inlineAddFields"] = array();
$tdatacustomerwastebyweek[".inlineAddFields"][] = "WasteId";
$tdatacustomerwastebyweek[".inlineAddFields"][] = "Year";
$tdatacustomerwastebyweek[".inlineAddFields"][] = "Week";
$tdatacustomerwastebyweek[".inlineAddFields"][] = "Amount";

$tdatacustomerwastebyweek[".editFields"] = array();
$tdatacustomerwastebyweek[".editFields"][] = "WasteId";
$tdatacustomerwastebyweek[".editFields"][] = "Year";
$tdatacustomerwastebyweek[".editFields"][] = "Week";
$tdatacustomerwastebyweek[".editFields"][] = "Amount";

$tdatacustomerwastebyweek[".inlineEditFields"] = array();
$tdatacustomerwastebyweek[".inlineEditFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".inlineEditFields"][] = "WasteId";
$tdatacustomerwastebyweek[".inlineEditFields"][] = "Year";
$tdatacustomerwastebyweek[".inlineEditFields"][] = "Week";
$tdatacustomerwastebyweek[".inlineEditFields"][] = "Amount";

$tdatacustomerwastebyweek[".exportFields"] = array();
$tdatacustomerwastebyweek[".exportFields"][] = "Id";
$tdatacustomerwastebyweek[".exportFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".exportFields"][] = "WasteId";
$tdatacustomerwastebyweek[".exportFields"][] = "Year";
$tdatacustomerwastebyweek[".exportFields"][] = "Week";
$tdatacustomerwastebyweek[".exportFields"][] = "Amount";

$tdatacustomerwastebyweek[".printFields"] = array();
$tdatacustomerwastebyweek[".printFields"][] = "Id";
$tdatacustomerwastebyweek[".printFields"][] = "CustomerId";
$tdatacustomerwastebyweek[".printFields"][] = "WasteId";
$tdatacustomerwastebyweek[".printFields"][] = "Year";
$tdatacustomerwastebyweek[".printFields"][] = "Week";
$tdatacustomerwastebyweek[".printFields"][] = "Amount";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customerwastebyweek";
	$fdata["Label"] = GetFieldLabel("customerwastebyweek","Id"); 
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

	

	
	$tdatacustomerwastebyweek["Id"] = $fdata;
//	CustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CustomerId";
	$fdata["GoodName"] = "CustomerId";
	$fdata["ownerTable"] = "customerwastebyweek";
	$fdata["Label"] = GetFieldLabel("customerwastebyweek","CustomerId"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
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

	

	
	$tdatacustomerwastebyweek["CustomerId"] = $fdata;
//	WasteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "WasteId";
	$fdata["GoodName"] = "WasteId";
	$fdata["ownerTable"] = "customerwastebyweek";
	$fdata["Label"] = GetFieldLabel("customerwastebyweek","WasteId"); 
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
	
		$fdata["strField"] = "WasteId"; 
		$fdata["FullName"] = "WasteId";
	
		
		
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
	$edata["LookupTable"] = "waste";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "WasteDescr";
	
		
	$edata["LookupOrderBy"] = "WasteDescr";
	
		
			
		
				
	
	
		
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

	

	
	$tdatacustomerwastebyweek["WasteId"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "customerwastebyweek";
	$fdata["Label"] = GetFieldLabel("customerwastebyweek","Year"); 
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
	
		$fdata["strField"] = "Year"; 
		$fdata["FullName"] = "`Year`";
	
		
		
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

	

	
	$tdatacustomerwastebyweek["Year"] = $fdata;
//	Week
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Week";
	$fdata["GoodName"] = "Week";
	$fdata["ownerTable"] = "customerwastebyweek";
	$fdata["Label"] = GetFieldLabel("customerwastebyweek","Week"); 
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
	
		$fdata["strField"] = "Week"; 
		$fdata["FullName"] = "Week";
	
		
		
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

	

	
	$tdatacustomerwastebyweek["Week"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "customerwastebyweek";
	$fdata["Label"] = GetFieldLabel("customerwastebyweek","Amount"); 
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
	
		$fdata["strField"] = "Amount"; 
		$fdata["FullName"] = "Amount";
	
		
		
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

	

	
	$tdatacustomerwastebyweek["Amount"] = $fdata;

	
$tables_data["customerwastebyweek"]=&$tdatacustomerwastebyweek;
$field_labels["customerwastebyweek"] = &$fieldLabelscustomerwastebyweek;
$fieldToolTips["customerwastebyweek"] = &$fieldToolTipscustomerwastebyweek;
$page_titles["customerwastebyweek"] = &$pageTitlescustomerwastebyweek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customerwastebyweek"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["customerwastebyweek"] = array();


	
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
					$masterTablesData["customerwastebyweek"][0] = $masterParams;	
				$masterTablesData["customerwastebyweek"][0]["masterKeys"] = array();
	$masterTablesData["customerwastebyweek"][0]["masterKeys"][]="Id";
				$masterTablesData["customerwastebyweek"][0]["detailKeys"] = array();
	$masterTablesData["customerwastebyweek"][0]["detailKeys"][]="CustomerId";
		
	
				$strOriginalDetailsTable="waste";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="waste";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "waste";
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
					$masterTablesData["customerwastebyweek"][1] = $masterParams;	
				$masterTablesData["customerwastebyweek"][1]["masterKeys"] = array();
	$masterTablesData["customerwastebyweek"][1]["masterKeys"][]="Id";
				$masterTablesData["customerwastebyweek"][1]["detailKeys"] = array();
	$masterTablesData["customerwastebyweek"][1]["detailKeys"][]="WasteId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customerwastebyweek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   CustomerId,   WasteId,   `Year`,   Week,   Amount";
$proto0["m_strFrom"] = "FROM customerwastebyweek";
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
	"m_strTable" => "customerwastebyweek"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerId",
	"m_strTable" => "customerwastebyweek"
));

$proto7["m_sql"] = "CustomerId";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "WasteId",
	"m_strTable" => "customerwastebyweek"
));

$proto9["m_sql"] = "WasteId";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Year",
	"m_strTable" => "customerwastebyweek"
));

$proto11["m_sql"] = "`Year`";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Week",
	"m_strTable" => "customerwastebyweek"
));

$proto13["m_sql"] = "Week";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "customerwastebyweek"
));

$proto15["m_sql"] = "Amount";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto17=array();
$proto17["m_link"] = "SQLL_MAIN";
			$proto18=array();
$proto18["m_strName"] = "customerwastebyweek";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "Id";
$proto18["m_columns"][] = "CustomerId";
$proto18["m_columns"][] = "WasteId";
$proto18["m_columns"][] = "Year";
$proto18["m_columns"][] = "Week";
$proto18["m_columns"][] = "Amount";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "customerwastebyweek";
$proto17["m_alias"] = "";
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto17["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto17);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customerwastebyweek = createSqlQuery_customerwastebyweek();

						
	
$tdatacustomerwastebyweek[".sqlquery"] = $queryData_customerwastebyweek;

$tableEvents["customerwastebyweek"] = new eventsBase;
$tdatacustomerwastebyweek[".hasEvents"] = false;

$cipherer = new RunnerCipherer("customerwastebyweek");

?>