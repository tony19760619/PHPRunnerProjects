<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomerwaste = array();	
	$tdatacustomerwaste[".truncateText"] = true;
	$tdatacustomerwaste[".NumberOfChars"] = 80; 
	$tdatacustomerwaste[".ShortName"] = "customerwaste";
	$tdatacustomerwaste[".OwnerID"] = "CustomerId";
	$tdatacustomerwaste[".OriginalTable"] = "customerwaste";

//	field labels
$fieldLabelscustomerwaste = array();
$fieldToolTipscustomerwaste = array();
$pageTitlescustomerwaste = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomerwaste["English"] = array();
	$fieldToolTipscustomerwaste["English"] = array();
	$pageTitlescustomerwaste["English"] = array();
	$fieldLabelscustomerwaste["English"]["Id"] = "Id";
	$fieldToolTipscustomerwaste["English"]["Id"] = "";
	$fieldLabelscustomerwaste["English"]["CustomerId"] = "Customer Id";
	$fieldToolTipscustomerwaste["English"]["CustomerId"] = "";
	$fieldLabelscustomerwaste["English"]["WasteId"] = "Waste Id";
	$fieldToolTipscustomerwaste["English"]["WasteId"] = "";
	$fieldLabelscustomerwaste["English"]["DateTime"] = "Date Time";
	$fieldToolTipscustomerwaste["English"]["DateTime"] = "";
	$fieldLabelscustomerwaste["English"]["Amount"] = "Amount";
	$fieldToolTipscustomerwaste["English"]["Amount"] = "";
	$fieldLabelscustomerwaste["English"]["UserId"] = "User Id";
	$fieldToolTipscustomerwaste["English"]["UserId"] = "";
	if (count($fieldToolTipscustomerwaste["English"]))
		$tdatacustomerwaste[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomerwaste[""] = array();
	$fieldToolTipscustomerwaste[""] = array();
	$pageTitlescustomerwaste[""] = array();
	if (count($fieldToolTipscustomerwaste[""]))
		$tdatacustomerwaste[".isUseToolTips"] = true;
}
	
	
	$tdatacustomerwaste[".NCSearch"] = true;



$tdatacustomerwaste[".shortTableName"] = "customerwaste";
$tdatacustomerwaste[".nSecOptions"] = 1;
$tdatacustomerwaste[".recsPerRowList"] = 1;
$tdatacustomerwaste[".mainTableOwnerID"] = "CustomerId";
$tdatacustomerwaste[".moveNext"] = 1;
$tdatacustomerwaste[".nType"] = 0;

$tdatacustomerwaste[".strOriginalTableName"] = "customerwaste";

	


$tdatacustomerwaste[".showAddInPopup"] = false;

$tdatacustomerwaste[".showEditInPopup"] = false;

$tdatacustomerwaste[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomerwaste[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomerwaste[".fieldsForRegister"] = array();
	
$tdatacustomerwaste[".listAjax"] = false;

	$tdatacustomerwaste[".audit"] = false;

	$tdatacustomerwaste[".locking"] = true;

$tdatacustomerwaste[".edit"] = true;
$tdatacustomerwaste[".inlineEdit"] = true;
$tdatacustomerwaste[".inlineAdd"] = true;
$tdatacustomerwaste[".view"] = true;

$tdatacustomerwaste[".import"] = true;

$tdatacustomerwaste[".exportTo"] = true;

$tdatacustomerwaste[".printFriendly"] = true;

$tdatacustomerwaste[".delete"] = true;

$tdatacustomerwaste[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerwaste[".searchSaving"] = false;
//

$tdatacustomerwaste[".showSearchPanel"] = true;
		$tdatacustomerwaste[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustomerwaste[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomerwaste[".isUseAjaxSuggest"] = true;

$tdatacustomerwaste[".rowHighlite"] = true;



$tdatacustomerwaste[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomerwaste[".isUseTimeForSearch"] = false;





$tdatacustomerwaste[".allSearchFields"] = array();
$tdatacustomerwaste[".filterFields"] = array();
$tdatacustomerwaste[".requiredSearchFields"] = array();

$tdatacustomerwaste[".allSearchFields"][] = "Id";
		$tdatacustomerwaste[".allSearchFields"][] = "CustomerId";
		$tdatacustomerwaste[".allSearchFields"][] = "WasteId";
		$tdatacustomerwaste[".allSearchFields"][] = "DateTime";
		$tdatacustomerwaste[".allSearchFields"][] = "Amount";
		
$tdatacustomerwaste[".googleLikeFields"] = array();
$tdatacustomerwaste[".googleLikeFields"][] = "Id";
$tdatacustomerwaste[".googleLikeFields"][] = "CustomerId";
$tdatacustomerwaste[".googleLikeFields"][] = "UserId";
$tdatacustomerwaste[".googleLikeFields"][] = "WasteId";
$tdatacustomerwaste[".googleLikeFields"][] = "DateTime";
$tdatacustomerwaste[".googleLikeFields"][] = "Amount";

$tdatacustomerwaste[".panelSearchFields"] = array();
$tdatacustomerwaste[".searchPanelOptions"] = array();
$tdatacustomerwaste[".panelSearchFields"][] = "CustomerId";
	$tdatacustomerwaste[".panelSearchFields"][] = "WasteId";
	$tdatacustomerwaste[".panelSearchFields"][] = "DateTime";
	
$tdatacustomerwaste[".advSearchFields"] = array();
$tdatacustomerwaste[".advSearchFields"][] = "Id";
$tdatacustomerwaste[".advSearchFields"][] = "CustomerId";
$tdatacustomerwaste[".advSearchFields"][] = "WasteId";
$tdatacustomerwaste[".advSearchFields"][] = "DateTime";
$tdatacustomerwaste[".advSearchFields"][] = "Amount";

$tdatacustomerwaste[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacustomerwaste[".pageSize"] = 20;

$tdatacustomerwaste[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomerwaste[".strOrderBy"] = $tstrOrderBy;

$tdatacustomerwaste[".orderindexes"] = array();

$tdatacustomerwaste[".sqlHead"] = "SELECT Id,   CustomerId,   UserId,   WasteId,   `DateTime`,   Amount";
$tdatacustomerwaste[".sqlFrom"] = "FROM customerwaste";
$tdatacustomerwaste[".sqlWhereExpr"] = "";
$tdatacustomerwaste[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomerwaste[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomerwaste[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscustomerwaste = array();
$tableKeyscustomerwaste[] = "Id";
$tableKeyscustomerwaste[] = "CustomerId";
$tableKeyscustomerwaste[] = "WasteId";
$tdatacustomerwaste[".Keys"] = $tableKeyscustomerwaste;

$tdatacustomerwaste[".listFields"] = array();
$tdatacustomerwaste[".listFields"][] = "Id";
$tdatacustomerwaste[".listFields"][] = "UserId";
$tdatacustomerwaste[".listFields"][] = "CustomerId";
$tdatacustomerwaste[".listFields"][] = "WasteId";
$tdatacustomerwaste[".listFields"][] = "DateTime";
$tdatacustomerwaste[".listFields"][] = "Amount";

$tdatacustomerwaste[".hideMobileList"] = array();


$tdatacustomerwaste[".viewFields"] = array();
$tdatacustomerwaste[".viewFields"][] = "Id";
$tdatacustomerwaste[".viewFields"][] = "CustomerId";
$tdatacustomerwaste[".viewFields"][] = "WasteId";
$tdatacustomerwaste[".viewFields"][] = "DateTime";
$tdatacustomerwaste[".viewFields"][] = "Amount";

$tdatacustomerwaste[".addFields"] = array();
$tdatacustomerwaste[".addFields"][] = "UserId";
$tdatacustomerwaste[".addFields"][] = "WasteId";
$tdatacustomerwaste[".addFields"][] = "DateTime";
$tdatacustomerwaste[".addFields"][] = "Amount";

$tdatacustomerwaste[".inlineAddFields"] = array();
$tdatacustomerwaste[".inlineAddFields"][] = "UserId";
$tdatacustomerwaste[".inlineAddFields"][] = "WasteId";
$tdatacustomerwaste[".inlineAddFields"][] = "DateTime";
$tdatacustomerwaste[".inlineAddFields"][] = "Amount";

$tdatacustomerwaste[".editFields"] = array();
$tdatacustomerwaste[".editFields"][] = "WasteId";
$tdatacustomerwaste[".editFields"][] = "DateTime";
$tdatacustomerwaste[".editFields"][] = "Amount";

$tdatacustomerwaste[".inlineEditFields"] = array();
$tdatacustomerwaste[".inlineEditFields"][] = "CustomerId";
$tdatacustomerwaste[".inlineEditFields"][] = "WasteId";
$tdatacustomerwaste[".inlineEditFields"][] = "DateTime";
$tdatacustomerwaste[".inlineEditFields"][] = "Amount";

$tdatacustomerwaste[".exportFields"] = array();
$tdatacustomerwaste[".exportFields"][] = "Id";
$tdatacustomerwaste[".exportFields"][] = "CustomerId";
$tdatacustomerwaste[".exportFields"][] = "WasteId";
$tdatacustomerwaste[".exportFields"][] = "DateTime";
$tdatacustomerwaste[".exportFields"][] = "Amount";

$tdatacustomerwaste[".printFields"] = array();
$tdatacustomerwaste[".printFields"][] = "Id";
$tdatacustomerwaste[".printFields"][] = "CustomerId";
$tdatacustomerwaste[".printFields"][] = "WasteId";
$tdatacustomerwaste[".printFields"][] = "DateTime";
$tdatacustomerwaste[".printFields"][] = "Amount";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customerwaste";
	$fdata["Label"] = GetFieldLabel("customerwaste","Id"); 
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

	

	
	$tdatacustomerwaste["Id"] = $fdata;
//	CustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CustomerId";
	$fdata["GoodName"] = "CustomerId";
	$fdata["ownerTable"] = "customerwaste";
	$fdata["Label"] = GetFieldLabel("customerwaste","CustomerId"); 
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

	

	
	$tdatacustomerwaste["CustomerId"] = $fdata;
//	UserId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UserId";
	$fdata["GoodName"] = "UserId";
	$fdata["ownerTable"] = "customerwaste";
	$fdata["Label"] = GetFieldLabel("customerwaste","UserId"); 
	$fdata["FieldType"] = 3;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "UserId"; 
		$fdata["FullName"] = "UserId";
	
		
		
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
	
		
		
		
		
		
		
		$edata["controlWidth"] = 143;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								
			//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdatacustomerwaste["UserId"] = $fdata;
//	WasteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "WasteId";
	$fdata["GoodName"] = "WasteId";
	$fdata["ownerTable"] = "customerwaste";
	$fdata["Label"] = GetFieldLabel("customerwaste","WasteId"); 
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

	

	
	$tdatacustomerwaste["WasteId"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "customerwaste";
	$fdata["Label"] = GetFieldLabel("customerwaste","DateTime"); 
	$fdata["FieldType"] = 135;
	
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DateTime"; 
		$fdata["FullName"] = "`DateTime`";
	
		
		
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

	

	
	$tdatacustomerwaste["DateTime"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "customerwaste";
	$fdata["Label"] = GetFieldLabel("customerwaste","Amount"); 
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

	

	
	$tdatacustomerwaste["Amount"] = $fdata;

	
$tables_data["customerwaste"]=&$tdatacustomerwaste;
$field_labels["customerwaste"] = &$fieldLabelscustomerwaste;
$fieldToolTips["customerwaste"] = &$fieldToolTipscustomerwaste;
$page_titles["customerwaste"] = &$pageTitlescustomerwaste;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customerwaste"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["customerwaste"] = array();


	
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
					$masterTablesData["customerwaste"][0] = $masterParams;	
				$masterTablesData["customerwaste"][0]["masterKeys"] = array();
	$masterTablesData["customerwaste"][0]["masterKeys"][]="Id";
				$masterTablesData["customerwaste"][0]["detailKeys"] = array();
	$masterTablesData["customerwaste"][0]["detailKeys"][]="CustomerId";
		
	
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
					$masterTablesData["customerwaste"][1] = $masterParams;	
				$masterTablesData["customerwaste"][1]["masterKeys"] = array();
	$masterTablesData["customerwaste"][1]["masterKeys"][]="Id";
				$masterTablesData["customerwaste"][1]["detailKeys"] = array();
	$masterTablesData["customerwaste"][1]["detailKeys"][]="WasteId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customerwaste()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   CustomerId,   UserId,   WasteId,   `DateTime`,   Amount";
$proto0["m_strFrom"] = "FROM customerwaste";
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
	"m_strTable" => "customerwaste"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerId",
	"m_strTable" => "customerwaste"
));

$proto7["m_sql"] = "CustomerId";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "UserId",
	"m_strTable" => "customerwaste"
));

$proto9["m_sql"] = "UserId";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "WasteId",
	"m_strTable" => "customerwaste"
));

$proto11["m_sql"] = "WasteId";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "customerwaste"
));

$proto13["m_sql"] = "`DateTime`";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "customerwaste"
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
$proto18["m_strName"] = "customerwaste";
$proto18["m_columns"] = array();
$proto18["m_columns"][] = "Id";
$proto18["m_columns"][] = "CustomerId";
$proto18["m_columns"][] = "UserId";
$proto18["m_columns"][] = "WasteId";
$proto18["m_columns"][] = "DateTime";
$proto18["m_columns"][] = "Amount";
$obj = new SQLTable($proto18);

$proto17["m_table"] = $obj;
$proto17["m_sql"] = "customerwaste";
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
$queryData_customerwaste = createSqlQuery_customerwaste();

						
	
$tdatacustomerwaste[".sqlquery"] = $queryData_customerwaste;

include_once(getabspath("include/customerwaste_events.php"));
$tableEvents["customerwaste"] = new eventclass_customerwaste;
$tdatacustomerwaste[".hasEvents"] = true;

$cipherer = new RunnerCipherer("customerwaste");

?>