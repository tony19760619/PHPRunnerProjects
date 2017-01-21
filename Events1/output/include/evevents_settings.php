<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevevents = array();	
	$tdataevevents[".truncateText"] = true;
	$tdataevevents[".NumberOfChars"] = 80; 
	$tdataevevents[".ShortName"] = "evevents";
	$tdataevevents[".OwnerID"] = "";
	$tdataevevents[".OriginalTable"] = "evevents";

//	field labels
$fieldLabelsevevents = array();
$fieldToolTipsevevents = array();
$pageTitlesevevents = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevevents["English"] = array();
	$fieldToolTipsevevents["English"] = array();
	$pageTitlesevevents["English"] = array();
	$fieldLabelsevevents["English"]["EventID"] = "EventID";
	$fieldToolTipsevevents["English"]["EventID"] = "";
	$fieldLabelsevevents["English"]["Category"] = "Category";
	$fieldToolTipsevevents["English"]["Category"] = "";
	$fieldLabelsevevents["English"]["Subject"] = "Subject";
	$fieldToolTipsevevents["English"]["Subject"] = "";
	$fieldLabelsevevents["English"]["Description"] = "Description";
	$fieldToolTipsevevents["English"]["Description"] = "";
	$fieldLabelsevevents["English"]["FromDate"] = "From Date";
	$fieldToolTipsevevents["English"]["FromDate"] = "";
	$fieldLabelsevevents["English"]["ToDate"] = "To Date";
	$fieldToolTipsevevents["English"]["ToDate"] = "";
	$fieldLabelsevevents["English"]["FromTime"] = "Time";
	$fieldToolTipsevevents["English"]["FromTime"] = "";
	$fieldLabelsevevents["English"]["ToTime"] = "Time";
	$fieldToolTipsevevents["English"]["ToTime"] = "";
	$fieldLabelsevevents["English"]["Location"] = "Location";
	$fieldToolTipsevevents["English"]["Location"] = "";
	$fieldLabelsevevents["English"]["Price"] = "Price";
	$fieldToolTipsevevents["English"]["Price"] = "";
	$fieldLabelsevevents["English"]["Map"] = "Map";
	$fieldToolTipsevevents["English"]["Map"] = "";
	$fieldLabelsevevents["English"]["Note"] = "Note";
	$fieldToolTipsevevents["English"]["Note"] = "";
	$fieldLabelsevevents["English"]["Image"] = "Image";
	$fieldToolTipsevevents["English"]["Image"] = "";
	$fieldLabelsevevents["English"]["month_year"] = "Month Year";
	$fieldToolTipsevevents["English"]["month_year"] = "";
	if (count($fieldToolTipsevevents["English"]))
		$tdataevevents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevevents[""] = array();
	$fieldToolTipsevevents[""] = array();
	$pageTitlesevevents[""] = array();
	if (count($fieldToolTipsevevents[""]))
		$tdataevevents[".isUseToolTips"] = true;
}
	
	



$tdataevevents[".shortTableName"] = "evevents";
$tdataevevents[".nSecOptions"] = 0;
$tdataevevents[".recsPerRowList"] = 1;
$tdataevevents[".recsPerRowPrint"] = 1;
$tdataevevents[".mainTableOwnerID"] = "";
$tdataevevents[".moveNext"] = 1;
$tdataevevents[".entityType"] = 0;

$tdataevevents[".strOriginalTableName"] = "evevents";




$tdataevevents[".showAddInPopup"] = false;

$tdataevevents[".showEditInPopup"] = false;

$tdataevevents[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevevents[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevevents[".fieldsForRegister"] = array();

$tdataevevents[".listAjax"] = false;

	$tdataevevents[".audit"] = false;

	$tdataevevents[".locking"] = false;

$tdataevevents[".edit"] = true;
$tdataevevents[".afterEditAction"] = 1;
$tdataevevents[".closePopupAfterEdit"] = 1;
$tdataevevents[".afterEditActionDetTable"] = "";

$tdataevevents[".add"] = true;
$tdataevevents[".afterAddAction"] = 1;
$tdataevevents[".closePopupAfterAdd"] = 1;
$tdataevevents[".afterAddActionDetTable"] = "";

$tdataevevents[".list"] = true;

$tdataevevents[".inlineEdit"] = true;
$tdataevevents[".inlineAdd"] = true;
$tdataevevents[".view"] = true;


$tdataevevents[".exportTo"] = true;

$tdataevevents[".printFriendly"] = true;

$tdataevevents[".delete"] = true;

$tdataevevents[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataevevents[".searchSaving"] = false;
//

$tdataevevents[".showSearchPanel"] = true;
		$tdataevevents[".flexibleSearch"] = true;		

if (isMobile())
	$tdataevevents[".isUseAjaxSuggest"] = false;
else 
	$tdataevevents[".isUseAjaxSuggest"] = true;

$tdataevevents[".rowHighlite"] = true;



$tdataevevents[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevevents[".isUseTimeForSearch"] = false;





$tdataevevents[".allSearchFields"] = array();
$tdataevevents[".filterFields"] = array();
$tdataevevents[".requiredSearchFields"] = array();

$tdataevevents[".allSearchFields"][] = "Category";
	$tdataevevents[".allSearchFields"][] = "Subject";
	$tdataevevents[".allSearchFields"][] = "Description";
	$tdataevevents[".allSearchFields"][] = "FromDate";
	$tdataevevents[".allSearchFields"][] = "ToDate";
	$tdataevevents[".allSearchFields"][] = "FromTime";
	$tdataevevents[".allSearchFields"][] = "ToTime";
	$tdataevevents[".allSearchFields"][] = "Location";
	$tdataevevents[".allSearchFields"][] = "Price";
	$tdataevevents[".allSearchFields"][] = "Note";
	$tdataevevents[".allSearchFields"][] = "month_year";
	
$tdataevevents[".filterFields"][] = "Category";	
$tdataevevents[".filterFields"][] = "month_year";	

$tdataevevents[".googleLikeFields"] = array();
$tdataevevents[".googleLikeFields"][] = "Category";
$tdataevevents[".googleLikeFields"][] = "Subject";
$tdataevevents[".googleLikeFields"][] = "Description";
$tdataevevents[".googleLikeFields"][] = "ToDate";
$tdataevevents[".googleLikeFields"][] = "FromTime";
$tdataevevents[".googleLikeFields"][] = "ToTime";
$tdataevevents[".googleLikeFields"][] = "Location";
$tdataevevents[".googleLikeFields"][] = "Price";
$tdataevevents[".googleLikeFields"][] = "Note";


$tdataevevents[".advSearchFields"] = array();
$tdataevevents[".advSearchFields"][] = "Category";
$tdataevevents[".advSearchFields"][] = "Subject";
$tdataevevents[".advSearchFields"][] = "Description";
$tdataevevents[".advSearchFields"][] = "FromDate";
$tdataevevents[".advSearchFields"][] = "ToDate";
$tdataevevents[".advSearchFields"][] = "FromTime";
$tdataevevents[".advSearchFields"][] = "ToTime";
$tdataevevents[".advSearchFields"][] = "Location";
$tdataevevents[".advSearchFields"][] = "Price";
$tdataevevents[".advSearchFields"][] = "Note";
$tdataevevents[".advSearchFields"][] = "month_year";

$tdataevevents[".tableType"] = "list";

$tdataevevents[".printerPageOrientation"] = 0;
$tdataevevents[".nPrinterPageScale"] = 100;

$tdataevevents[".nPrinterSplitRecords"] = 40;

$tdataevevents[".nPrinterPDFSplitRecords"] = 40;



$tdataevevents[".geocodingEnabled"] = false;




$tdataevevents[".printGridLayout"] = 1;
	
$tdataevevents[".listGridLayout"] = 1;





// view page pdf

// print page pdf


$tdataevevents[".pageSize"] = 20;

$tdataevevents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevevents[".strOrderBy"] = $tstrOrderBy;

$tdataevevents[".orderindexes"] = array();

$tdataevevents[".sqlHead"] = "select EventID,  Category,  Subject,  Description,  FromDate,  ToDate,  FromTime,  ToTime,  Location,  Price,  `Map`,  Note,  Image,  date_format(`FromDate`, '%Y %m') AS month_year";
$tdataevevents[".sqlFrom"] = "FROM evevents";
$tdataevevents[".sqlWhereExpr"] = "";
$tdataevevents[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevevents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevevents[".arrGroupsPerPage"] = $arrGPP;


$tableKeysevevents = array();
$tableKeysevevents[] = "EventID";
$tdataevevents[".Keys"] = $tableKeysevevents;

$tdataevevents[".listFields"] = array();
$tdataevevents[".listFields"][] = "Category";
$tdataevevents[".listFields"][] = "EventID";
$tdataevevents[".listFields"][] = "Subject";
$tdataevevents[".listFields"][] = "FromDate";
$tdataevevents[".listFields"][] = "ToDate";
$tdataevevents[".listFields"][] = "FromTime";
$tdataevevents[".listFields"][] = "ToTime";
$tdataevevents[".listFields"][] = "Location";
$tdataevevents[".listFields"][] = "Map";
$tdataevevents[".listFields"][] = "Price";

$tdataevevents[".hideMobileList"] = array();


$tdataevevents[".viewFields"] = array();
$tdataevevents[".viewFields"][] = "EventID";
$tdataevevents[".viewFields"][] = "Category";
$tdataevevents[".viewFields"][] = "Subject";
$tdataevevents[".viewFields"][] = "Image";
$tdataevevents[".viewFields"][] = "Description";
$tdataevevents[".viewFields"][] = "FromDate";
$tdataevevents[".viewFields"][] = "ToDate";
$tdataevevents[".viewFields"][] = "FromTime";
$tdataevevents[".viewFields"][] = "ToTime";
$tdataevevents[".viewFields"][] = "Location";
$tdataevevents[".viewFields"][] = "Map";
$tdataevevents[".viewFields"][] = "Price";
$tdataevevents[".viewFields"][] = "Note";

$tdataevevents[".addFields"] = array();
$tdataevevents[".addFields"][] = "Category";
$tdataevevents[".addFields"][] = "Subject";
$tdataevevents[".addFields"][] = "Description";
$tdataevevents[".addFields"][] = "FromDate";
$tdataevevents[".addFields"][] = "ToDate";
$tdataevevents[".addFields"][] = "FromTime";
$tdataevevents[".addFields"][] = "ToTime";
$tdataevevents[".addFields"][] = "Location";
$tdataevevents[".addFields"][] = "Price";
$tdataevevents[".addFields"][] = "Map";
$tdataevevents[".addFields"][] = "Note";
$tdataevevents[".addFields"][] = "Image";

$tdataevevents[".masterListFields"] = array();
$tdataevevents[".masterListFields"][] = "month_year";

$tdataevevents[".inlineAddFields"] = array();
$tdataevevents[".inlineAddFields"][] = "Category";
$tdataevevents[".inlineAddFields"][] = "Subject";
$tdataevevents[".inlineAddFields"][] = "FromDate";
$tdataevevents[".inlineAddFields"][] = "ToDate";
$tdataevevents[".inlineAddFields"][] = "FromTime";
$tdataevevents[".inlineAddFields"][] = "ToTime";
$tdataevevents[".inlineAddFields"][] = "Location";
$tdataevevents[".inlineAddFields"][] = "Map";
$tdataevevents[".inlineAddFields"][] = "Price";

$tdataevevents[".editFields"] = array();
$tdataevevents[".editFields"][] = "Category";
$tdataevevents[".editFields"][] = "Subject";
$tdataevevents[".editFields"][] = "Description";
$tdataevevents[".editFields"][] = "FromDate";
$tdataevevents[".editFields"][] = "ToDate";
$tdataevevents[".editFields"][] = "FromTime";
$tdataevevents[".editFields"][] = "ToTime";
$tdataevevents[".editFields"][] = "Location";
$tdataevevents[".editFields"][] = "Price";
$tdataevevents[".editFields"][] = "Map";
$tdataevevents[".editFields"][] = "Note";
$tdataevevents[".editFields"][] = "Image";

$tdataevevents[".inlineEditFields"] = array();
$tdataevevents[".inlineEditFields"][] = "Category";
$tdataevevents[".inlineEditFields"][] = "Subject";
$tdataevevents[".inlineEditFields"][] = "FromDate";
$tdataevevents[".inlineEditFields"][] = "ToDate";
$tdataevevents[".inlineEditFields"][] = "FromTime";
$tdataevevents[".inlineEditFields"][] = "ToTime";
$tdataevevents[".inlineEditFields"][] = "Location";
$tdataevevents[".inlineEditFields"][] = "Map";
$tdataevevents[".inlineEditFields"][] = "Price";

$tdataevevents[".exportFields"] = array();
$tdataevevents[".exportFields"][] = "EventID";
$tdataevevents[".exportFields"][] = "Category";
$tdataevevents[".exportFields"][] = "Subject";
$tdataevevents[".exportFields"][] = "Description";
$tdataevevents[".exportFields"][] = "FromDate";
$tdataevevents[".exportFields"][] = "ToDate";
$tdataevevents[".exportFields"][] = "FromTime";
$tdataevevents[".exportFields"][] = "ToTime";
$tdataevevents[".exportFields"][] = "Location";
$tdataevevents[".exportFields"][] = "Price";
$tdataevevents[".exportFields"][] = "Map";
$tdataevevents[".exportFields"][] = "Note";
$tdataevevents[".exportFields"][] = "Image";

$tdataevevents[".importFields"] = array();
$tdataevevents[".importFields"][] = "EventID";
$tdataevevents[".importFields"][] = "Category";
$tdataevevents[".importFields"][] = "Subject";
$tdataevevents[".importFields"][] = "Description";
$tdataevevents[".importFields"][] = "FromDate";
$tdataevevents[".importFields"][] = "ToDate";
$tdataevevents[".importFields"][] = "FromTime";
$tdataevevents[".importFields"][] = "ToTime";
$tdataevevents[".importFields"][] = "Location";
$tdataevevents[".importFields"][] = "Price";
$tdataevevents[".importFields"][] = "Map";
$tdataevevents[".importFields"][] = "Note";
$tdataevevents[".importFields"][] = "Image";
$tdataevevents[".importFields"][] = "month_year";

$tdataevevents[".printFields"] = array();
$tdataevevents[".printFields"][] = "EventID";
$tdataevevents[".printFields"][] = "Category";
$tdataevevents[".printFields"][] = "Subject";
$tdataevevents[".printFields"][] = "Description";
$tdataevevents[".printFields"][] = "FromDate";
$tdataevevents[".printFields"][] = "ToDate";
$tdataevevents[".printFields"][] = "FromTime";
$tdataevevents[".printFields"][] = "ToTime";
$tdataevevents[".printFields"][] = "Location";
$tdataevevents[".printFields"][] = "Price";
$tdataevevents[".printFields"][] = "Note";

//	EventID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EventID";
	$fdata["GoodName"] = "EventID";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","EventID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "EventID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EventID";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
	
	
	

	

	
	$tdataevevents["EventID"] = $fdata;
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Category"); 
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
	
		$fdata["strField"] = "Category"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Category";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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

	
//Filters settings
	$fdata["filterTotals"] = 1;	
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataevevents["Category"] = $fdata;
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Subject"); 
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
	
		$fdata["strField"] = "Subject"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Subject";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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

	

	
	$tdataevevents["Subject"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Description"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Description"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "HTML");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text area");
	
			
	
	


		
		$edata["UseRTE"] = true; 
	
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 250;
			$edata["nCols"] = 500;
	
		
		
		
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

	

	
	$tdataevevents["Description"] = $fdata;
//	FromDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "FromDate";
	$fdata["GoodName"] = "FromDate";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","FromDate"); 
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
	
		$fdata["strField"] = "FromDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromDate";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataevevents["FromDate"] = $fdata;
//	ToDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ToDate";
	$fdata["GoodName"] = "ToDate";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","ToDate"); 
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
	
		$fdata["strField"] = "ToDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToDate";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataevevents["ToDate"] = $fdata;
//	FromTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "FromTime";
	$fdata["GoodName"] = "FromTime";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","FromTime"); 
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
	
		$fdata["strField"] = "FromTime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromTime";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataevevents["FromTime"] = $fdata;
//	ToTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ToTime";
	$fdata["GoodName"] = "ToTime";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","ToTime"); 
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
	
		$fdata["strField"] = "ToTime"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ToTime";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataevevents["ToTime"] = $fdata;
//	Location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Location";
	$fdata["GoodName"] = "Location";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Location"); 
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
	
		$fdata["strField"] = "Location"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Location";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
		
		
		
				$edata["nRows"] = 50;
			$edata["nCols"] = 150;
	
		
		
		
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

	

	
	$tdataevevents["Location"] = $fdata;
//	Price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Price";
	$fdata["GoodName"] = "Price";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Price"); 
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
	
		$fdata["strField"] = "Price"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Price";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Currency");
	
		
		
		
		
		
		
		
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataevevents["Price"] = $fdata;
//	Map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Map";
	$fdata["GoodName"] = "Map";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Map"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Map"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Map`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Hyperlink");
	
		
		
		
		
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "See Map";
	$vdata["hlTitleField"] = "See Map";
	
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10000";
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevevents["Map"] = $fdata;
//	Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Note";
	$fdata["GoodName"] = "Note";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Note"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Note"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Note";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
		
		
		
				$edata["nRows"] = 75;
			$edata["nCols"] = 500;
	
		
		
		
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

	

	
	$tdataevevents["Note"] = $fdata;
//	Image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Image";
	$fdata["GoodName"] = "Image";
	$fdata["ownerTable"] = "evevents";
	$fdata["Label"] = GetFieldLabel("evevents","Image"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Image"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Image";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "photos";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "File-based Image");
	
		
		$vdata["LinkPrefix"] ="photos/"; 
	
						$vdata["ImageWidth"] = 287;
	$vdata["ImageHeight"] = 216;
	
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Document upload");
	
			
	
	


		
		
		$edata["UseTimestamp"] = true; 
	
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;
	
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevevents["Image"] = $fdata;
//	month_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "month_year";
	$fdata["GoodName"] = "month_year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("evevents","month_year"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "month_year"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_format(`FromDate`, '%Y %m')";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 160;
	
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
		$fdata["filterTotalFields"] = "EventID";	
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;	
	
		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;
	
				
		
	
//end of Filters settings	

	
	$tdataevevents["month_year"] = $fdata;

	
$tables_data["evevents"]=&$tdataevevents;
$field_labels["evevents"] = &$fieldLabelsevevents;
$fieldToolTips["evevents"] = &$fieldToolTipsevevents;
$page_titles["evevents"] = &$pageTitlesevevents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evevents"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["evevents"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evevents()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "EventID,  Category,  Subject,  Description,  FromDate,  ToDate,  FromTime,  ToTime,  Location,  Price,  `Map`,  Note,  Image,  date_format(`FromDate`, '%Y %m') AS month_year";
$proto0["m_strFrom"] = "FROM evevents";
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
	"m_strName" => "EventID",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto5["m_sql"] = "EventID";
$proto5["m_srcTableName"] = "evevents";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto7["m_sql"] = "Category";
$proto7["m_srcTableName"] = "evevents";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto9["m_sql"] = "Subject";
$proto9["m_srcTableName"] = "evevents";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto11["m_sql"] = "Description";
$proto11["m_srcTableName"] = "evevents";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "FromDate",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto13["m_sql"] = "FromDate";
$proto13["m_srcTableName"] = "evevents";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "ToDate",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto15["m_sql"] = "ToDate";
$proto15["m_srcTableName"] = "evevents";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "FromTime",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto17["m_sql"] = "FromTime";
$proto17["m_srcTableName"] = "evevents";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ToTime",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto19["m_sql"] = "ToTime";
$proto19["m_srcTableName"] = "evevents";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Location",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto21["m_sql"] = "Location";
$proto21["m_srcTableName"] = "evevents";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Price",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto23["m_sql"] = "Price";
$proto23["m_srcTableName"] = "evevents";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Map",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto25["m_sql"] = "`Map`";
$proto25["m_srcTableName"] = "evevents";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Note",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto27["m_sql"] = "Note";
$proto27["m_srcTableName"] = "evevents";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Image",
	"m_strTable" => "evevents",
	"m_srcTableName" => "evevents"
));

$proto29["m_sql"] = "Image";
$proto29["m_srcTableName"] = "evevents";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_CUSTOM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`FromDate`"
));

$proto32["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'%Y %m'"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "date_format";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "date_format(`FromDate`, '%Y %m')";
$proto31["m_srcTableName"] = "evevents";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "month_year";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "evevents";
$proto36["m_srcTableName"] = "evevents";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "Category";
$proto36["m_columns"][] = "Description";
$proto36["m_columns"][] = "EventID";
$proto36["m_columns"][] = "FromDate";
$proto36["m_columns"][] = "FromTime";
$proto36["m_columns"][] = "Image";
$proto36["m_columns"][] = "Location";
$proto36["m_columns"][] = "Map";
$proto36["m_columns"][] = "Note";
$proto36["m_columns"][] = "Price";
$proto36["m_columns"][] = "Subject";
$proto36["m_columns"][] = "ToDate";
$proto36["m_columns"][] = "ToTime";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "evevents";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "evevents";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evevents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evevents = createSqlQuery_evevents();


	
														
	
$tdataevevents[".sqlquery"] = $queryData_evevents;

include_once(getabspath("include/evevents_events.php"));
$tableEvents["evevents"] = new eventclass_evevents;
$tdataevevents[".hasEvents"] = true;

?>