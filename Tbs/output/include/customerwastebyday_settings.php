<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomerwastebyday = array();	
	$tdatacustomerwastebyday[".truncateText"] = true;
	$tdatacustomerwastebyday[".NumberOfChars"] = 80; 
	$tdatacustomerwastebyday[".ShortName"] = "customerwastebyday";
	$tdatacustomerwastebyday[".OwnerID"] = "CustomerId";
	$tdatacustomerwastebyday[".OriginalTable"] = "customerwastebyday";

//	field labels
$fieldLabelscustomerwastebyday = array();
$fieldToolTipscustomerwastebyday = array();
$pageTitlescustomerwastebyday = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomerwastebyday["English"] = array();
	$fieldToolTipscustomerwastebyday["English"] = array();
	$pageTitlescustomerwastebyday["English"] = array();
	$fieldLabelscustomerwastebyday["English"]["Id"] = "Id";
	$fieldToolTipscustomerwastebyday["English"]["Id"] = "";
	$fieldLabelscustomerwastebyday["English"]["CustomerId"] = "Customer Id";
	$fieldToolTipscustomerwastebyday["English"]["CustomerId"] = "";
	$fieldLabelscustomerwastebyday["English"]["WasteId"] = "Waste Id";
	$fieldToolTipscustomerwastebyday["English"]["WasteId"] = "";
	$fieldLabelscustomerwastebyday["English"]["Date"] = "Date";
	$fieldToolTipscustomerwastebyday["English"]["Date"] = "";
	$fieldLabelscustomerwastebyday["English"]["Amount"] = "Amount";
	$fieldToolTipscustomerwastebyday["English"]["Amount"] = "";
	if (count($fieldToolTipscustomerwastebyday["English"]))
		$tdatacustomerwastebyday[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomerwastebyday[""] = array();
	$fieldToolTipscustomerwastebyday[""] = array();
	$pageTitlescustomerwastebyday[""] = array();
	if (count($fieldToolTipscustomerwastebyday[""]))
		$tdatacustomerwastebyday[".isUseToolTips"] = true;
}
	
	
	$tdatacustomerwastebyday[".NCSearch"] = true;



$tdatacustomerwastebyday[".shortTableName"] = "customerwastebyday";
$tdatacustomerwastebyday[".nSecOptions"] = 1;
$tdatacustomerwastebyday[".recsPerRowList"] = 1;
$tdatacustomerwastebyday[".mainTableOwnerID"] = "CustomerId";
$tdatacustomerwastebyday[".moveNext"] = 1;
$tdatacustomerwastebyday[".nType"] = 0;

$tdatacustomerwastebyday[".strOriginalTableName"] = "customerwastebyday";

	


$tdatacustomerwastebyday[".showAddInPopup"] = false;

$tdatacustomerwastebyday[".showEditInPopup"] = false;

$tdatacustomerwastebyday[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomerwastebyday[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomerwastebyday[".fieldsForRegister"] = array();
	
$tdatacustomerwastebyday[".listAjax"] = false;

	$tdatacustomerwastebyday[".audit"] = false;

	$tdatacustomerwastebyday[".locking"] = true;

$tdatacustomerwastebyday[".edit"] = true;
$tdatacustomerwastebyday[".inlineEdit"] = true;
$tdatacustomerwastebyday[".inlineAdd"] = true;
$tdatacustomerwastebyday[".view"] = true;

$tdatacustomerwastebyday[".import"] = true;

$tdatacustomerwastebyday[".exportTo"] = true;

$tdatacustomerwastebyday[".printFriendly"] = true;

$tdatacustomerwastebyday[".delete"] = true;

$tdatacustomerwastebyday[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerwastebyday[".searchSaving"] = false;
//

$tdatacustomerwastebyday[".showSearchPanel"] = true;
		$tdatacustomerwastebyday[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustomerwastebyday[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomerwastebyday[".isUseAjaxSuggest"] = true;

$tdatacustomerwastebyday[".rowHighlite"] = true;



$tdatacustomerwastebyday[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomerwastebyday[".isUseTimeForSearch"] = false;





$tdatacustomerwastebyday[".allSearchFields"] = array();
$tdatacustomerwastebyday[".filterFields"] = array();
$tdatacustomerwastebyday[".requiredSearchFields"] = array();

$tdatacustomerwastebyday[".allSearchFields"][] = "Id";
		$tdatacustomerwastebyday[".allSearchFields"][] = "CustomerId";
		$tdatacustomerwastebyday[".allSearchFields"][] = "WasteId";
		$tdatacustomerwastebyday[".allSearchFields"][] = "Date";
		$tdatacustomerwastebyday[".allSearchFields"][] = "Amount";
		
$tdatacustomerwastebyday[".googleLikeFields"] = array();
$tdatacustomerwastebyday[".googleLikeFields"][] = "Id";
$tdatacustomerwastebyday[".googleLikeFields"][] = "CustomerId";
$tdatacustomerwastebyday[".googleLikeFields"][] = "WasteId";
$tdatacustomerwastebyday[".googleLikeFields"][] = "Date";
$tdatacustomerwastebyday[".googleLikeFields"][] = "Amount";

$tdatacustomerwastebyday[".panelSearchFields"] = array();
$tdatacustomerwastebyday[".searchPanelOptions"] = array();
$tdatacustomerwastebyday[".panelSearchFields"][] = "CustomerId";
	$tdatacustomerwastebyday[".panelSearchFields"][] = "WasteId";
	$tdatacustomerwastebyday[".panelSearchFields"][] = "Date";
	
$tdatacustomerwastebyday[".advSearchFields"] = array();
$tdatacustomerwastebyday[".advSearchFields"][] = "Id";
$tdatacustomerwastebyday[".advSearchFields"][] = "CustomerId";
$tdatacustomerwastebyday[".advSearchFields"][] = "WasteId";
$tdatacustomerwastebyday[".advSearchFields"][] = "Date";
$tdatacustomerwastebyday[".advSearchFields"][] = "Amount";

$tdatacustomerwastebyday[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacustomerwastebyday[".pageSize"] = 20;

$tdatacustomerwastebyday[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomerwastebyday[".strOrderBy"] = $tstrOrderBy;

$tdatacustomerwastebyday[".orderindexes"] = array();

$tdatacustomerwastebyday[".sqlHead"] = "SELECT Id,   CustomerId,   WasteId,   `Date`,   Amount";
$tdatacustomerwastebyday[".sqlFrom"] = "FROM customerwastebyday";
$tdatacustomerwastebyday[".sqlWhereExpr"] = "";
$tdatacustomerwastebyday[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomerwastebyday[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomerwastebyday[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscustomerwastebyday = array();
$tableKeyscustomerwastebyday[] = "Id";
$tableKeyscustomerwastebyday[] = "CustomerId";
$tableKeyscustomerwastebyday[] = "WasteId";
$tdatacustomerwastebyday[".Keys"] = $tableKeyscustomerwastebyday;

$tdatacustomerwastebyday[".listFields"] = array();
$tdatacustomerwastebyday[".listFields"][] = "Id";
$tdatacustomerwastebyday[".listFields"][] = "CustomerId";
$tdatacustomerwastebyday[".listFields"][] = "WasteId";
$tdatacustomerwastebyday[".listFields"][] = "Date";
$tdatacustomerwastebyday[".listFields"][] = "Amount";

$tdatacustomerwastebyday[".hideMobileList"] = array();


$tdatacustomerwastebyday[".viewFields"] = array();
$tdatacustomerwastebyday[".viewFields"][] = "Id";
$tdatacustomerwastebyday[".viewFields"][] = "CustomerId";
$tdatacustomerwastebyday[".viewFields"][] = "WasteId";
$tdatacustomerwastebyday[".viewFields"][] = "Date";
$tdatacustomerwastebyday[".viewFields"][] = "Amount";

$tdatacustomerwastebyday[".addFields"] = array();
$tdatacustomerwastebyday[".addFields"][] = "WasteId";
$tdatacustomerwastebyday[".addFields"][] = "Date";
$tdatacustomerwastebyday[".addFields"][] = "Amount";

$tdatacustomerwastebyday[".inlineAddFields"] = array();
$tdatacustomerwastebyday[".inlineAddFields"][] = "WasteId";
$tdatacustomerwastebyday[".inlineAddFields"][] = "Date";
$tdatacustomerwastebyday[".inlineAddFields"][] = "Amount";

$tdatacustomerwastebyday[".editFields"] = array();
$tdatacustomerwastebyday[".editFields"][] = "WasteId";
$tdatacustomerwastebyday[".editFields"][] = "Date";
$tdatacustomerwastebyday[".editFields"][] = "Amount";

$tdatacustomerwastebyday[".inlineEditFields"] = array();
$tdatacustomerwastebyday[".inlineEditFields"][] = "CustomerId";
$tdatacustomerwastebyday[".inlineEditFields"][] = "WasteId";
$tdatacustomerwastebyday[".inlineEditFields"][] = "Date";
$tdatacustomerwastebyday[".inlineEditFields"][] = "Amount";

$tdatacustomerwastebyday[".exportFields"] = array();
$tdatacustomerwastebyday[".exportFields"][] = "Id";
$tdatacustomerwastebyday[".exportFields"][] = "CustomerId";
$tdatacustomerwastebyday[".exportFields"][] = "WasteId";
$tdatacustomerwastebyday[".exportFields"][] = "Date";
$tdatacustomerwastebyday[".exportFields"][] = "Amount";

$tdatacustomerwastebyday[".printFields"] = array();
$tdatacustomerwastebyday[".printFields"][] = "Id";
$tdatacustomerwastebyday[".printFields"][] = "CustomerId";
$tdatacustomerwastebyday[".printFields"][] = "WasteId";
$tdatacustomerwastebyday[".printFields"][] = "Date";
$tdatacustomerwastebyday[".printFields"][] = "Amount";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customerwastebyday";
	$fdata["Label"] = GetFieldLabel("customerwastebyday","Id"); 
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

	

	
	$tdatacustomerwastebyday["Id"] = $fdata;
//	CustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CustomerId";
	$fdata["GoodName"] = "CustomerId";
	$fdata["ownerTable"] = "customerwastebyday";
	$fdata["Label"] = GetFieldLabel("customerwastebyday","CustomerId"); 
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

	

	
	$tdatacustomerwastebyday["CustomerId"] = $fdata;
//	WasteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "WasteId";
	$fdata["GoodName"] = "WasteId";
	$fdata["ownerTable"] = "customerwastebyday";
	$fdata["Label"] = GetFieldLabel("customerwastebyday","WasteId"); 
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

	

	
	$tdatacustomerwastebyday["WasteId"] = $fdata;
//	Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Date";
	$fdata["GoodName"] = "Date";
	$fdata["ownerTable"] = "customerwastebyday";
	$fdata["Label"] = GetFieldLabel("customerwastebyday","Date"); 
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
	
		$fdata["strField"] = "Date"; 
		$fdata["FullName"] = "`Date`";
	
		
		
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

	

	
	$tdatacustomerwastebyday["Date"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "customerwastebyday";
	$fdata["Label"] = GetFieldLabel("customerwastebyday","Amount"); 
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

	

	
	$tdatacustomerwastebyday["Amount"] = $fdata;

	
$tables_data["customerwastebyday"]=&$tdatacustomerwastebyday;
$field_labels["customerwastebyday"] = &$fieldLabelscustomerwastebyday;
$fieldToolTips["customerwastebyday"] = &$fieldToolTipscustomerwastebyday;
$page_titles["customerwastebyday"] = &$pageTitlescustomerwastebyday;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customerwastebyday"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["customerwastebyday"] = array();


	
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
					$masterTablesData["customerwastebyday"][0] = $masterParams;	
				$masterTablesData["customerwastebyday"][0]["masterKeys"] = array();
	$masterTablesData["customerwastebyday"][0]["masterKeys"][]="Id";
				$masterTablesData["customerwastebyday"][0]["detailKeys"] = array();
	$masterTablesData["customerwastebyday"][0]["detailKeys"][]="CustomerId";
		
	
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
					$masterTablesData["customerwastebyday"][1] = $masterParams;	
				$masterTablesData["customerwastebyday"][1]["masterKeys"] = array();
	$masterTablesData["customerwastebyday"][1]["masterKeys"][]="Id";
				$masterTablesData["customerwastebyday"][1]["detailKeys"] = array();
	$masterTablesData["customerwastebyday"][1]["detailKeys"][]="WasteId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customerwastebyday()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   CustomerId,   WasteId,   `Date`,   Amount";
$proto0["m_strFrom"] = "FROM customerwastebyday";
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
	"m_strTable" => "customerwastebyday"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerId",
	"m_strTable" => "customerwastebyday"
));

$proto7["m_sql"] = "CustomerId";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "WasteId",
	"m_strTable" => "customerwastebyday"
));

$proto9["m_sql"] = "WasteId";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Date",
	"m_strTable" => "customerwastebyday"
));

$proto11["m_sql"] = "`Date`";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "customerwastebyday"
));

$proto13["m_sql"] = "Amount";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "customerwastebyday";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Id";
$proto16["m_columns"][] = "CustomerId";
$proto16["m_columns"][] = "WasteId";
$proto16["m_columns"][] = "Date";
$proto16["m_columns"][] = "Amount";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "customerwastebyday";
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customerwastebyday = createSqlQuery_customerwastebyday();

					
	
$tdatacustomerwastebyday[".sqlquery"] = $queryData_customerwastebyday;

$tableEvents["customerwastebyday"] = new eventsBase;
$tdatacustomerwastebyday[".hasEvents"] = false;

$cipherer = new RunnerCipherer("customerwastebyday");

?>