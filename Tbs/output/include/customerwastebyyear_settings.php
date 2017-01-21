<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomerwastebyyear = array();	
	$tdatacustomerwastebyyear[".truncateText"] = true;
	$tdatacustomerwastebyyear[".NumberOfChars"] = 80; 
	$tdatacustomerwastebyyear[".ShortName"] = "customerwastebyyear";
	$tdatacustomerwastebyyear[".OwnerID"] = "CustomerId";
	$tdatacustomerwastebyyear[".OriginalTable"] = "customerwastebyyear";

//	field labels
$fieldLabelscustomerwastebyyear = array();
$fieldToolTipscustomerwastebyyear = array();
$pageTitlescustomerwastebyyear = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomerwastebyyear["English"] = array();
	$fieldToolTipscustomerwastebyyear["English"] = array();
	$pageTitlescustomerwastebyyear["English"] = array();
	$fieldLabelscustomerwastebyyear["English"]["Id"] = "Id";
	$fieldToolTipscustomerwastebyyear["English"]["Id"] = "";
	$fieldLabelscustomerwastebyyear["English"]["CustomerId"] = "Customer Id";
	$fieldToolTipscustomerwastebyyear["English"]["CustomerId"] = "";
	$fieldLabelscustomerwastebyyear["English"]["WasteId"] = "Waste Id";
	$fieldToolTipscustomerwastebyyear["English"]["WasteId"] = "";
	$fieldLabelscustomerwastebyyear["English"]["Year"] = "Year";
	$fieldToolTipscustomerwastebyyear["English"]["Year"] = "";
	$fieldLabelscustomerwastebyyear["English"]["Amount"] = "Amount";
	$fieldToolTipscustomerwastebyyear["English"]["Amount"] = "";
	if (count($fieldToolTipscustomerwastebyyear["English"]))
		$tdatacustomerwastebyyear[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomerwastebyyear[""] = array();
	$fieldToolTipscustomerwastebyyear[""] = array();
	$pageTitlescustomerwastebyyear[""] = array();
	if (count($fieldToolTipscustomerwastebyyear[""]))
		$tdatacustomerwastebyyear[".isUseToolTips"] = true;
}
	
	
	$tdatacustomerwastebyyear[".NCSearch"] = true;



$tdatacustomerwastebyyear[".shortTableName"] = "customerwastebyyear";
$tdatacustomerwastebyyear[".nSecOptions"] = 1;
$tdatacustomerwastebyyear[".recsPerRowList"] = 1;
$tdatacustomerwastebyyear[".mainTableOwnerID"] = "CustomerId";
$tdatacustomerwastebyyear[".moveNext"] = 1;
$tdatacustomerwastebyyear[".nType"] = 0;

$tdatacustomerwastebyyear[".strOriginalTableName"] = "customerwastebyyear";

	


$tdatacustomerwastebyyear[".showAddInPopup"] = false;

$tdatacustomerwastebyyear[".showEditInPopup"] = false;

$tdatacustomerwastebyyear[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomerwastebyyear[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomerwastebyyear[".fieldsForRegister"] = array();
	
$tdatacustomerwastebyyear[".listAjax"] = false;

	$tdatacustomerwastebyyear[".audit"] = false;

	$tdatacustomerwastebyyear[".locking"] = true;

$tdatacustomerwastebyyear[".edit"] = true;
$tdatacustomerwastebyyear[".inlineEdit"] = true;
$tdatacustomerwastebyyear[".inlineAdd"] = true;
$tdatacustomerwastebyyear[".view"] = true;

$tdatacustomerwastebyyear[".import"] = true;

$tdatacustomerwastebyyear[".exportTo"] = true;

$tdatacustomerwastebyyear[".printFriendly"] = true;

$tdatacustomerwastebyyear[".delete"] = true;

$tdatacustomerwastebyyear[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomerwastebyyear[".searchSaving"] = false;
//

$tdatacustomerwastebyyear[".showSearchPanel"] = true;
		$tdatacustomerwastebyyear[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustomerwastebyyear[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomerwastebyyear[".isUseAjaxSuggest"] = true;

$tdatacustomerwastebyyear[".rowHighlite"] = true;



$tdatacustomerwastebyyear[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomerwastebyyear[".isUseTimeForSearch"] = false;





$tdatacustomerwastebyyear[".allSearchFields"] = array();
$tdatacustomerwastebyyear[".filterFields"] = array();
$tdatacustomerwastebyyear[".requiredSearchFields"] = array();

$tdatacustomerwastebyyear[".allSearchFields"][] = "Id";
		$tdatacustomerwastebyyear[".allSearchFields"][] = "CustomerId";
		$tdatacustomerwastebyyear[".allSearchFields"][] = "WasteId";
		$tdatacustomerwastebyyear[".allSearchFields"][] = "Year";
		$tdatacustomerwastebyyear[".allSearchFields"][] = "Amount";
		
$tdatacustomerwastebyyear[".googleLikeFields"] = array();
$tdatacustomerwastebyyear[".googleLikeFields"][] = "Id";
$tdatacustomerwastebyyear[".googleLikeFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".googleLikeFields"][] = "WasteId";
$tdatacustomerwastebyyear[".googleLikeFields"][] = "Year";
$tdatacustomerwastebyyear[".googleLikeFields"][] = "Amount";

$tdatacustomerwastebyyear[".panelSearchFields"] = array();
$tdatacustomerwastebyyear[".searchPanelOptions"] = array();
$tdatacustomerwastebyyear[".panelSearchFields"][] = "CustomerId";
	$tdatacustomerwastebyyear[".panelSearchFields"][] = "WasteId";
	$tdatacustomerwastebyyear[".panelSearchFields"][] = "Year";
	
$tdatacustomerwastebyyear[".advSearchFields"] = array();
$tdatacustomerwastebyyear[".advSearchFields"][] = "Id";
$tdatacustomerwastebyyear[".advSearchFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".advSearchFields"][] = "WasteId";
$tdatacustomerwastebyyear[".advSearchFields"][] = "Year";
$tdatacustomerwastebyyear[".advSearchFields"][] = "Amount";

$tdatacustomerwastebyyear[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacustomerwastebyyear[".pageSize"] = 20;

$tdatacustomerwastebyyear[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomerwastebyyear[".strOrderBy"] = $tstrOrderBy;

$tdatacustomerwastebyyear[".orderindexes"] = array();

$tdatacustomerwastebyyear[".sqlHead"] = "SELECT Id,   CustomerId,   WasteId,   `Year`,   Amount";
$tdatacustomerwastebyyear[".sqlFrom"] = "FROM customerwastebyyear";
$tdatacustomerwastebyyear[".sqlWhereExpr"] = "";
$tdatacustomerwastebyyear[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomerwastebyyear[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomerwastebyyear[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscustomerwastebyyear = array();
$tableKeyscustomerwastebyyear[] = "Id";
$tableKeyscustomerwastebyyear[] = "CustomerId";
$tableKeyscustomerwastebyyear[] = "WasteId";
$tdatacustomerwastebyyear[".Keys"] = $tableKeyscustomerwastebyyear;

$tdatacustomerwastebyyear[".listFields"] = array();
$tdatacustomerwastebyyear[".listFields"][] = "Id";
$tdatacustomerwastebyyear[".listFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".listFields"][] = "WasteId";
$tdatacustomerwastebyyear[".listFields"][] = "Year";
$tdatacustomerwastebyyear[".listFields"][] = "Amount";

$tdatacustomerwastebyyear[".hideMobileList"] = array();


$tdatacustomerwastebyyear[".viewFields"] = array();
$tdatacustomerwastebyyear[".viewFields"][] = "Id";
$tdatacustomerwastebyyear[".viewFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".viewFields"][] = "WasteId";
$tdatacustomerwastebyyear[".viewFields"][] = "Year";
$tdatacustomerwastebyyear[".viewFields"][] = "Amount";

$tdatacustomerwastebyyear[".addFields"] = array();
$tdatacustomerwastebyyear[".addFields"][] = "WasteId";
$tdatacustomerwastebyyear[".addFields"][] = "Year";
$tdatacustomerwastebyyear[".addFields"][] = "Amount";

$tdatacustomerwastebyyear[".inlineAddFields"] = array();
$tdatacustomerwastebyyear[".inlineAddFields"][] = "WasteId";
$tdatacustomerwastebyyear[".inlineAddFields"][] = "Year";
$tdatacustomerwastebyyear[".inlineAddFields"][] = "Amount";

$tdatacustomerwastebyyear[".editFields"] = array();
$tdatacustomerwastebyyear[".editFields"][] = "WasteId";
$tdatacustomerwastebyyear[".editFields"][] = "Year";
$tdatacustomerwastebyyear[".editFields"][] = "Amount";

$tdatacustomerwastebyyear[".inlineEditFields"] = array();
$tdatacustomerwastebyyear[".inlineEditFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".inlineEditFields"][] = "WasteId";
$tdatacustomerwastebyyear[".inlineEditFields"][] = "Year";
$tdatacustomerwastebyyear[".inlineEditFields"][] = "Amount";

$tdatacustomerwastebyyear[".exportFields"] = array();
$tdatacustomerwastebyyear[".exportFields"][] = "Id";
$tdatacustomerwastebyyear[".exportFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".exportFields"][] = "WasteId";
$tdatacustomerwastebyyear[".exportFields"][] = "Year";
$tdatacustomerwastebyyear[".exportFields"][] = "Amount";

$tdatacustomerwastebyyear[".printFields"] = array();
$tdatacustomerwastebyyear[".printFields"][] = "Id";
$tdatacustomerwastebyyear[".printFields"][] = "CustomerId";
$tdatacustomerwastebyyear[".printFields"][] = "WasteId";
$tdatacustomerwastebyyear[".printFields"][] = "Year";
$tdatacustomerwastebyyear[".printFields"][] = "Amount";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customerwastebyyear";
	$fdata["Label"] = GetFieldLabel("customerwastebyyear","Id"); 
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

	

	
	$tdatacustomerwastebyyear["Id"] = $fdata;
//	CustomerId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CustomerId";
	$fdata["GoodName"] = "CustomerId";
	$fdata["ownerTable"] = "customerwastebyyear";
	$fdata["Label"] = GetFieldLabel("customerwastebyyear","CustomerId"); 
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

	

	
	$tdatacustomerwastebyyear["CustomerId"] = $fdata;
//	WasteId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "WasteId";
	$fdata["GoodName"] = "WasteId";
	$fdata["ownerTable"] = "customerwastebyyear";
	$fdata["Label"] = GetFieldLabel("customerwastebyyear","WasteId"); 
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

	

	
	$tdatacustomerwastebyyear["WasteId"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "customerwastebyyear";
	$fdata["Label"] = GetFieldLabel("customerwastebyyear","Year"); 
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

	

	
	$tdatacustomerwastebyyear["Year"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "customerwastebyyear";
	$fdata["Label"] = GetFieldLabel("customerwastebyyear","Amount"); 
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

	

	
	$tdatacustomerwastebyyear["Amount"] = $fdata;

	
$tables_data["customerwastebyyear"]=&$tdatacustomerwastebyyear;
$field_labels["customerwastebyyear"] = &$fieldLabelscustomerwastebyyear;
$fieldToolTips["customerwastebyyear"] = &$fieldToolTipscustomerwastebyyear;
$page_titles["customerwastebyyear"] = &$pageTitlescustomerwastebyyear;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customerwastebyyear"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["customerwastebyyear"] = array();


	
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
					$masterTablesData["customerwastebyyear"][0] = $masterParams;	
				$masterTablesData["customerwastebyyear"][0]["masterKeys"] = array();
	$masterTablesData["customerwastebyyear"][0]["masterKeys"][]="Id";
				$masterTablesData["customerwastebyyear"][0]["detailKeys"] = array();
	$masterTablesData["customerwastebyyear"][0]["detailKeys"][]="CustomerId";
		
	
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
					$masterTablesData["customerwastebyyear"][1] = $masterParams;	
				$masterTablesData["customerwastebyyear"][1]["masterKeys"] = array();
	$masterTablesData["customerwastebyyear"][1]["masterKeys"][]="Id";
				$masterTablesData["customerwastebyyear"][1]["detailKeys"] = array();
	$masterTablesData["customerwastebyyear"][1]["detailKeys"][]="WasteId";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customerwastebyyear()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   CustomerId,   WasteId,   `Year`,   Amount";
$proto0["m_strFrom"] = "FROM customerwastebyyear";
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
	"m_strTable" => "customerwastebyyear"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CustomerId",
	"m_strTable" => "customerwastebyyear"
));

$proto7["m_sql"] = "CustomerId";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "WasteId",
	"m_strTable" => "customerwastebyyear"
));

$proto9["m_sql"] = "WasteId";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Year",
	"m_strTable" => "customerwastebyyear"
));

$proto11["m_sql"] = "`Year`";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "customerwastebyyear"
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
$proto16["m_strName"] = "customerwastebyyear";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Id";
$proto16["m_columns"][] = "CustomerId";
$proto16["m_columns"][] = "WasteId";
$proto16["m_columns"][] = "Year";
$proto16["m_columns"][] = "Amount";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "customerwastebyyear";
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
$queryData_customerwastebyyear = createSqlQuery_customerwastebyyear();

					
	
$tdatacustomerwastebyyear[".sqlquery"] = $queryData_customerwastebyyear;

$tableEvents["customerwastebyyear"] = new eventsBase;
$tdatacustomerwastebyyear[".hasEvents"] = false;

$cipherer = new RunnerCipherer("customerwastebyyear");

?>