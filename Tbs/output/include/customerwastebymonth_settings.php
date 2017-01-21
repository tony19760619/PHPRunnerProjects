<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomerwastebymonth = array();	
	$tdatacustomerwastebymonth[".truncateText"] = true;
	$tdatacustomerwastebymonth[".NumberOfChars"] = 80; 
	$tdatacustomerwastebymonth[".ShortName"] = "customerwastebymonth";
	$tdatacustomerwastebymonth[".OwnerID"] = "CustomerId";
	$tdatacustomerwastebymonth[".OriginalTable"] = "customerwastebymonth";

//	field labels
$fieldLabelscustomerwastebymonth = array();
$fieldToolTipscustomerwastebymonth = array();
$pageTitlescustomerwastebymonth = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomerwastebymonth["English"] = array();
	$fieldToolTipscustomerwastebymonth["English"] = array();
	$pageTitlescustomerwastebymonth["English"] = array();
	$fieldLabelscustomerwastebymonth["English"]["Id"] = "Id";
	$fieldToolTipscustomerwastebymonth["English"]["Id"] = "";
	$fieldLabelscustomerwastebymonth["English"]["CustomerId"] = "Customer Id";
	$fieldToolTipscustomerwastebymonth["English"]["CustomerId"] = "";
	$fieldLabelscustomerwastebymonth["English"]["WasteId"] = "Waste Id";
	$fieldToolTipscustomerwastebymonth["English"]["WasteId"] = "";
	$fieldLabelscustomerwastebymonth["English"]["Year"] = "Year";
	$fieldToolTipscustomerwastebymonth["English"]["Year"] = "";
	$fieldLabelscustomerwastebymonth["English"]["Month"] = "Month";
	$fieldToolTipscustomerwastebymonth["English"]["Month"] = "";
	$fieldLabelscustomerwastebymonth["English"]["Amount"] = "Amount";
	$fieldToolTipscustomerwastebymonth["English"]["Amount"] = "";
	if (count($fieldToolTipscustomerwastebymonth["English"]))
		$tdatacustomerwastebymonth[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomerwastebymonth[""] = array();
	$fieldToolTipscustomerwastebymonth[""] = array();
	$pageTitlescustomerwastebymonth[""] = array();
	if (count($fieldToolTipscustomerwastebymonth[""]))
		$tdatacustomerwastebymonth[".isUseToolTips"] = true;
}
	
	
	$tdatacustomerwastebymonth[".NCSearch"] = true;



$tdatacustomerwastebymonth[".shortTableName"] = "customerwastebymonth";
$tdatacustomerwastebymonth[".nSecOptions"] = 1;
$tdatacustomerwastebymonth[".recsPerRowList"] = 1;
$tdatacustomerwastebymonth[".mainTableOwnerID"] = "CustomerId";
$tdatacustomerwastebymonth[".moveNext"] = 1;
$tdatacustomerwastebymonth[".nType"] = 0;

$tdatacustomerwastebymonth[".strOriginalTableName"] = "customerwastebymonth";

	


$tdatacustomerwastebymonth[".showAddInPopup"] = false;

$tdatacustomerwastebymonth[".showEditInPopup"] = false;

$tdatacustomerwastebymonth[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomerwastebymonth[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomerwastebymonth[".fieldsForRegister"] = array();
	
$tdatacustomerwastebymonth[".listAjax"] = false;

	$tdatacustomerwastebymonth[".audit"] = false;

	$tdatacustomerwastebymonth[".locking"] = true;

$tdatacustomerwastebymonth[".edit"] = true;
$tdatacustomerwastebymonth[".inlineEdit"] = true;
$tdatacustomerwastebymonth[".inlineAdd"] = true;
$tdatacustomerwastebymonth[".view"] = true;

$tdatacustomerwastebymonth[".import"] = true;

$tdatacustomerwastebymonth[".exportTo"] = true;

$tdatacustomerwastebymonth[".printFriendly"] = true;

$tdatacustomerwastebymonth[".delete"] = true;

$tdatacustomerwastebymonth[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerwastebymonth[".searchSaving"] = false;
//

$tdatacustomerwastebymonth[".showSearchPanel"] = true;
		$tdatacustomerwastebymonth[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustomerwastebymonth[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomerwastebymonth[".isUseAjaxSuggest"] = true;

$tdatacustomerwastebymonth[".rowHighlite"] = true;



$tdatacustomerwastebymonth[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomerwastebymonth[".isUseTimeForSearch"] = false;





$tdatacustomerwastebymonth[".allSearchFields"] = array();
$tdatacustomerwastebymonth[".filterFields"] = array();
$tdatacustomerwastebymonth[".requiredSearchFields"] = array();

$tdatacustomerwastebymonth[".allSearchFields"][] = "Id";
		$tdatacustomerwastebymonth[".allSearchFields"][] = "CustomerId";
		$tdatacustomerwastebymonth[".allSearchFields"][] = "WasteId";
		$tdatacustomerwastebymonth[".allSearchFields"][] = "Year";
		$tdatacustomerwastebymonth[".allSearchFields"][] = "Month";
		$tdatacustomerwastebymonth[".allSearchFields"][] = "Amount";
		
$tdatacustomerwastebymonth[".googleLikeFields"] = array();
$tdatacustomerwastebymonth[".googleLikeFields"][] = "Id";
$tdatacustomerwastebymonth[".googleLikeFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".googleLikeFields"][] = "WasteId";
$tdatacustomerwastebymonth[".googleLikeFields"][] = "Year";
$tdatacustomerwastebymonth[".googleLikeFields"][] = "Month";
$tdatacustomerwastebymonth[".googleLikeFields"][] = "Amount";

$tdatacustomerwastebymonth[".panelSearchFields"] = array();
$tdatacustomerwastebymonth[".searchPanelOptions"] = array();
$tdatacustomerwastebymonth[".panelSearchFields"][] = "CustomerId";
	$tdatacustomerwastebymonth[".panelSearchFields"][] = "WasteId";
	$tdatacustomerwastebymonth[".panelSearchFields"][] = "Year";
	$tdatacustomerwastebymonth[".panelSearchFields"][] = "Month";
	
$tdatacustomerwastebymonth[".advSearchFields"] = array();
$tdatacustomerwastebymonth[".advSearchFields"][] = "Id";
$tdatacustomerwastebymonth[".advSearchFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".advSearchFields"][] = "WasteId";
$tdatacustomerwastebymonth[".advSearchFields"][] = "Year";
$tdatacustomerwastebymonth[".advSearchFields"][] = "Month";
$tdatacustomerwastebymonth[".advSearchFields"][] = "Amount";

$tdatacustomerwastebymonth[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacustomerwastebymonth[".pageSize"] = 20;

$tdatacustomerwastebymonth[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomerwastebymonth[".strOrderBy"] = $tstrOrderBy;

$tdatacustomerwastebymonth[".orderindexes"] = array();

$tdatacustomerwastebymonth[".sqlHead"] = "SELECT Id,   CustomerId,   WasteId,   `Year`,   `Month`,   Amount";
$tdatacustomerwastebymonth[".sqlFrom"] = "FROM customerwastebymonth";
$tdatacustomerwastebymonth[".sqlWhereExpr"] = "";
$tdatacustomerwastebymonth[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomerwastebymonth[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomerwastebymonth[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscustomerwastebymonth = array();
$tableKeyscustomerwastebymonth[] = "Id";
$tableKeyscustomerwastebymonth[] = "CustomerId";
$tableKeyscustomerwastebymonth[] = "WasteId";
$tdatacustomerwastebymonth[".Keys"] = $tableKeyscustomerwastebymonth;

$tdatacustomerwastebymonth[".listFields"] = array();
$tdatacustomerwastebymonth[".listFields"][] = "Id";
$tdatacustomerwastebymonth[".listFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".listFields"][] = "WasteId";
$tdatacustomerwastebymonth[".listFields"][] = "Year";
$tdatacustomerwastebymonth[".listFields"][] = "Month";
$tdatacustomerwastebymonth[".listFields"][] = "Amount";

$tdatacustomerwastebymonth[".hideMobileList"] = array();


$tdatacustomerwastebymonth[".viewFields"] = array();
$tdatacustomerwastebymonth[".viewFields"][] = "Id";
$tdatacustomerwastebymonth[".viewFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".viewFields"][] = "WasteId";
$tdatacustomerwastebymonth[".viewFields"][] = "Year";
$tdatacustomerwastebymonth[".viewFields"][] = "Month";
$tdatacustomerwastebymonth[".viewFields"][] = "Amount";

$tdatacustomerwastebymonth[".addFields"] = array();
$tdatacustomerwastebymonth[".addFields"][] = "WasteId";
$tdatacustomerwastebymonth[".addFields"][] = "Year";
$tdatacustomerwastebymonth[".addFields"][] = "Month";
$tdatacustomerwastebymonth[".addFields"][] = "Amount";

$tdatacustomerwastebymonth[".inlineAddFields"] = array();
$tdatacustomerwastebymonth[".inlineAddFields"][] = "WasteId";
$tdatacustomerwastebymonth[".inlineAddFields"][] = "Year";
$tdatacustomerwastebymonth[".inlineAddFields"][] = "Month";
$tdatacustomerwastebymonth[".inlineAddFields"][] = "Amount";

$tdatacustomerwastebymonth[".editFields"] = array();
$tdatacustomerwastebymonth[".editFields"][] = "WasteId";
$tdatacustomerwastebymonth[".editFields"][] = "Year";
$tdatacustomerwastebymonth[".editFields"][] = "Month";
$tdatacustomerwastebymonth[".editFields"][] = "Amount";

$tdatacustomerwastebymonth[".inlineEditFields"] = array();
$tdatacustomerwastebymonth[".inlineEditFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".inlineEditFields"][] = "WasteId";
$tdatacustomerwastebymonth[".inlineEditFields"][] = "Year";
$tdatacustomerwastebymonth[".inlineEditFields"][] = "Month";
$tdatacustomerwastebymonth[".inlineEditFields"][] = "Amount";

$tdatacustomerwastebymonth[".exportFields"] = array();
$tdatacustomerwastebymonth[".exportFields"][] = "Id";
$tdatacustomerwastebymonth[".exportFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".exportFields"][] = "WasteId";
$tdatacustomerwastebymonth[".exportFields"][] = "Year";
$tdatacustomerwastebymonth[".exportFields"][] = "Month";
$tdatacustomerwastebymonth[".exportFields"][] = "Amount";

$tdatacustomerwastebymonth[".printFields"] = array();
$tdatacustomerwastebymonth[".printFields"][] = "Id";
$tdatacustomerwastebymonth[".printFields"][] = "CustomerId";
$tdatacustomerwastebymonth[".printFields"][] = "WasteId";
$tdatacustomerwastebymonth[".printFields"][] = "Year";
$tdatacustomerwastebymonth[".printFields"][] = "Month";
$tdatacustomerwastebymonth[".printFields"][] = "Amount";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customerwastebymonth";
	$fdata["Label"] = GetFieldLabel("customerwastebymonth","Id"); 
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

	

	
	$tdatacustomerwastebymonth["Id"] = $fdata;
//	CustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CustomerId";
	$fdata["GoodName"] = "CustomerId";
	$fdata["ownerTable"] = "customerwastebymonth";
	$fdata["Label"] = GetFieldLabel("customerwastebymonth","CustomerId"); 
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

	

	
	$tdatacustomerwastebymonth["CustomerId"] = $fdata;
//	WasteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "WasteId";
	$fdata["GoodName"] = "WasteId";
	$fdata["ownerTable"] = "customerwastebymonth";
	$fdata["Label"] = GetFieldLabel("customerwastebymonth","WasteId"); 
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

	

	
	$tdatacustomerwastebymonth["WasteId"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "customerwastebymonth";
	$fdata["Label"] = GetFieldLabel("customerwastebymonth","Year"); 
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

	

	
	$tdatacustomerwastebymonth["Year"] = $fdata;
//	Month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Month";
	$fdata["GoodName"] = "Month";
	$fdata["ownerTable"] = "customerwastebymonth";
	$fdata["Label"] = GetFieldLabel("customerwastebymonth","Month"); 
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
	
		$fdata["strField"] = "Month"; 
		$fdata["FullName"] = "`Month`";
	
		
		
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

	

	
	$tdatacustomerwastebymonth["Month"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "customerwastebymonth";
	$fdata["Label"] = GetFieldLabel("customerwastebymonth","Amount"); 
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

	

	
	$tdatacustomerwastebymonth["Amount"] = $fdata;

	
$tables_data["customerwastebymonth"]=&$tdatacustomerwastebymonth;
$field_labels["customerwastebymonth"] = &$fieldLabelscustomerwastebymonth;
$fieldToolTips["customerwastebymonth"] = &$fieldToolTipscustomerwastebymonth;
$page_titles["customerwastebymonth"] = &$pageTitlescustomerwastebymonth;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customerwastebymonth"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["customerwastebymonth"] = array();


	
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
					$masterTablesData["customerwastebymonth"][0] = $masterParams;	
				$masterTablesData["customerwastebymonth"][0]["masterKeys"] = array();
	$masterTablesData["customerwastebymonth"][0]["masterKeys"][]="Id";
				$masterTablesData["customerwastebymonth"][0]["detailKeys"] = array();
	$masterTablesData["customerwastebymonth"][0]["detailKeys"][]="CustomerId";
		
	
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
					$masterTablesData["customerwastebymonth"][1] = $masterParams;	
				$masterTablesData["customerwastebymonth"][1]["masterKeys"] = array();
	$masterTablesData["customerwastebymonth"][1]["masterKeys"][]="Id";
				$masterTablesData["customerwastebymonth"][1]["detailKeys"] = array();
	$masterTablesData["customerwastebymonth"][1]["detailKeys"][]="WasteId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customerwastebymonth()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   CustomerId,   WasteId,   `Year`,   `Month`,   Amount";
$proto0["m_strFrom"] = "FROM customerwastebymonth";
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
	"m_strTable" => "customerwastebymonth"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerId",
	"m_strTable" => "customerwastebymonth"
));

$proto7["m_sql"] = "CustomerId";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "WasteId",
	"m_strTable" => "customerwastebymonth"
));

$proto9["m_sql"] = "WasteId";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Year",
	"m_strTable" => "customerwastebymonth"
));

$proto11["m_sql"] = "`Year`";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Month",
	"m_strTable" => "customerwastebymonth"
));

$proto13["m_sql"] = "`Month`";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "customerwastebymonth"
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
$proto18["m_strName"] = "customerwastebymonth";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "Id";
$proto18["m_columns"][] = "CustomerId";
$proto18["m_columns"][] = "WasteId";
$proto18["m_columns"][] = "Year";
$proto18["m_columns"][] = "Month";
$proto18["m_columns"][] = "Amount";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "customerwastebymonth";
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
$queryData_customerwastebymonth = createSqlQuery_customerwastebymonth();

						
	
$tdatacustomerwastebymonth[".sqlquery"] = $queryData_customerwastebymonth;

$tableEvents["customerwastebymonth"] = new eventsBase;
$tdatacustomerwastebymonth[".hasEvents"] = false;

$cipherer = new RunnerCipherer("customerwastebymonth");

?>