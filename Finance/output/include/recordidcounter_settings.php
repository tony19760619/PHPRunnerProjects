<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarecordidcounter = array();
	$tdatarecordidcounter[".truncateText"] = true;
	$tdatarecordidcounter[".NumberOfChars"] = 80;
	$tdatarecordidcounter[".ShortName"] = "recordidcounter";
	$tdatarecordidcounter[".OwnerID"] = "";
	$tdatarecordidcounter[".OriginalTable"] = "recordidcounter";

//	field labels
$fieldLabelsrecordidcounter = array();
$fieldToolTipsrecordidcounter = array();
$pageTitlesrecordidcounter = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrecordidcounter["English"] = array();
	$fieldToolTipsrecordidcounter["English"] = array();
	$pageTitlesrecordidcounter["English"] = array();
	$fieldLabelsrecordidcounter["English"]["Name"] = "Name";
	$fieldToolTipsrecordidcounter["English"]["Name"] = "";
	$fieldLabelsrecordidcounter["English"]["Prefix"] = "Prefix";
	$fieldToolTipsrecordidcounter["English"]["Prefix"] = "";
	$fieldLabelsrecordidcounter["English"]["Sufix"] = "Sufix";
	$fieldToolTipsrecordidcounter["English"]["Sufix"] = "";
	$fieldLabelsrecordidcounter["English"]["Number"] = "Number";
	$fieldToolTipsrecordidcounter["English"]["Number"] = "";
	$fieldLabelsrecordidcounter["English"]["flag"] = "Flag";
	$fieldToolTipsrecordidcounter["English"]["flag"] = "";
	$fieldLabelsrecordidcounter["English"]["useflag"] = "Useflag";
	$fieldToolTipsrecordidcounter["English"]["useflag"] = "";
	if (count($fieldToolTipsrecordidcounter["English"]))
		$tdatarecordidcounter[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrecordidcounter[""] = array();
	$fieldToolTipsrecordidcounter[""] = array();
	$pageTitlesrecordidcounter[""] = array();
	if (count($fieldToolTipsrecordidcounter[""]))
		$tdatarecordidcounter[".isUseToolTips"] = true;
}


	$tdatarecordidcounter[".NCSearch"] = true;



$tdatarecordidcounter[".shortTableName"] = "recordidcounter";
$tdatarecordidcounter[".nSecOptions"] = 0;
$tdatarecordidcounter[".recsPerRowPrint"] = 1;
$tdatarecordidcounter[".mainTableOwnerID"] = "";
$tdatarecordidcounter[".moveNext"] = 1;
$tdatarecordidcounter[".entityType"] = 0;

$tdatarecordidcounter[".strOriginalTableName"] = "recordidcounter";

	



$tdatarecordidcounter[".showAddInPopup"] = false;

$tdatarecordidcounter[".showEditInPopup"] = false;

$tdatarecordidcounter[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecordidcounter[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecordidcounter[".fieldsForRegister"] = array();

$tdatarecordidcounter[".listAjax"] = false;

	$tdatarecordidcounter[".audit"] = false;

	$tdatarecordidcounter[".locking"] = false;

$tdatarecordidcounter[".edit"] = true;
$tdatarecordidcounter[".afterEditAction"] = 1;
$tdatarecordidcounter[".closePopupAfterEdit"] = 1;
$tdatarecordidcounter[".afterEditActionDetTable"] = "";

$tdatarecordidcounter[".add"] = true;
$tdatarecordidcounter[".afterAddAction"] = 0;
$tdatarecordidcounter[".closePopupAfterAdd"] = 1;
$tdatarecordidcounter[".afterAddActionDetTable"] = "";

$tdatarecordidcounter[".list"] = true;

$tdatarecordidcounter[".inlineEdit"] = true;



$tdatarecordidcounter[".inlineAdd"] = true;
$tdatarecordidcounter[".view"] = true;

$tdatarecordidcounter[".import"] = true;

$tdatarecordidcounter[".exportTo"] = true;

$tdatarecordidcounter[".printFriendly"] = true;

$tdatarecordidcounter[".delete"] = true;

$tdatarecordidcounter[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatarecordidcounter[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatarecordidcounter[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatarecordidcounter[".searchSaving"] = true;
//

$tdatarecordidcounter[".showSearchPanel"] = true;
		$tdatarecordidcounter[".flexibleSearch"] = true;

$tdatarecordidcounter[".isUseAjaxSuggest"] = true;

$tdatarecordidcounter[".rowHighlite"] = true;



$tdatarecordidcounter[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecordidcounter[".isUseTimeForSearch"] = false;





$tdatarecordidcounter[".allSearchFields"] = array();
$tdatarecordidcounter[".filterFields"] = array();
$tdatarecordidcounter[".requiredSearchFields"] = array();

$tdatarecordidcounter[".allSearchFields"][] = "Name";
	$tdatarecordidcounter[".allSearchFields"][] = "Prefix";
	$tdatarecordidcounter[".allSearchFields"][] = "Sufix";
	$tdatarecordidcounter[".allSearchFields"][] = "Number";
	$tdatarecordidcounter[".allSearchFields"][] = "flag";
	$tdatarecordidcounter[".allSearchFields"][] = "useflag";
	

$tdatarecordidcounter[".googleLikeFields"] = array();
$tdatarecordidcounter[".googleLikeFields"][] = "Name";
$tdatarecordidcounter[".googleLikeFields"][] = "Prefix";
$tdatarecordidcounter[".googleLikeFields"][] = "Sufix";
$tdatarecordidcounter[".googleLikeFields"][] = "Number";
$tdatarecordidcounter[".googleLikeFields"][] = "flag";
$tdatarecordidcounter[".googleLikeFields"][] = "useflag";


$tdatarecordidcounter[".advSearchFields"] = array();
$tdatarecordidcounter[".advSearchFields"][] = "Name";
$tdatarecordidcounter[".advSearchFields"][] = "Prefix";
$tdatarecordidcounter[".advSearchFields"][] = "Sufix";
$tdatarecordidcounter[".advSearchFields"][] = "Number";
$tdatarecordidcounter[".advSearchFields"][] = "flag";
$tdatarecordidcounter[".advSearchFields"][] = "useflag";

$tdatarecordidcounter[".tableType"] = "list";

$tdatarecordidcounter[".printerPageOrientation"] = 0;
$tdatarecordidcounter[".nPrinterPageScale"] = 100;

$tdatarecordidcounter[".nPrinterSplitRecords"] = 40;

$tdatarecordidcounter[".nPrinterPDFSplitRecords"] = 40;



$tdatarecordidcounter[".geocodingEnabled"] = false;





$tdatarecordidcounter[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatarecordidcounter[".pageSize"] = 20;

$tdatarecordidcounter[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecordidcounter[".strOrderBy"] = $tstrOrderBy;

$tdatarecordidcounter[".orderindexes"] = array();

$tdatarecordidcounter[".sqlHead"] = "SELECT Name,  	`Prefix`,  	Sufix,  	`Number`,  	flag,  	useflag";
$tdatarecordidcounter[".sqlFrom"] = "FROM recordidcounter";
$tdatarecordidcounter[".sqlWhereExpr"] = "";
$tdatarecordidcounter[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecordidcounter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecordidcounter[".arrGroupsPerPage"] = $arrGPP;

$tdatarecordidcounter[".highlightSearchResults"] = true;

$tableKeysrecordidcounter = array();
$tableKeysrecordidcounter[] = "Name";
$tdatarecordidcounter[".Keys"] = $tableKeysrecordidcounter;

$tdatarecordidcounter[".listFields"] = array();
$tdatarecordidcounter[".listFields"][] = "Name";
$tdatarecordidcounter[".listFields"][] = "Prefix";
$tdatarecordidcounter[".listFields"][] = "Sufix";
$tdatarecordidcounter[".listFields"][] = "Number";
$tdatarecordidcounter[".listFields"][] = "flag";
$tdatarecordidcounter[".listFields"][] = "useflag";

$tdatarecordidcounter[".hideMobileList"] = array();


$tdatarecordidcounter[".viewFields"] = array();
$tdatarecordidcounter[".viewFields"][] = "Name";
$tdatarecordidcounter[".viewFields"][] = "Prefix";
$tdatarecordidcounter[".viewFields"][] = "Sufix";
$tdatarecordidcounter[".viewFields"][] = "Number";
$tdatarecordidcounter[".viewFields"][] = "flag";
$tdatarecordidcounter[".viewFields"][] = "useflag";

$tdatarecordidcounter[".addFields"] = array();
$tdatarecordidcounter[".addFields"][] = "Name";
$tdatarecordidcounter[".addFields"][] = "Prefix";
$tdatarecordidcounter[".addFields"][] = "Sufix";
$tdatarecordidcounter[".addFields"][] = "Number";
$tdatarecordidcounter[".addFields"][] = "flag";
$tdatarecordidcounter[".addFields"][] = "useflag";

$tdatarecordidcounter[".masterListFields"] = array();
$tdatarecordidcounter[".masterListFields"][] = "Name";
$tdatarecordidcounter[".masterListFields"][] = "Prefix";
$tdatarecordidcounter[".masterListFields"][] = "Sufix";
$tdatarecordidcounter[".masterListFields"][] = "Number";
$tdatarecordidcounter[".masterListFields"][] = "flag";
$tdatarecordidcounter[".masterListFields"][] = "useflag";

$tdatarecordidcounter[".inlineAddFields"] = array();
$tdatarecordidcounter[".inlineAddFields"][] = "Name";
$tdatarecordidcounter[".inlineAddFields"][] = "Prefix";
$tdatarecordidcounter[".inlineAddFields"][] = "Sufix";
$tdatarecordidcounter[".inlineAddFields"][] = "Number";
$tdatarecordidcounter[".inlineAddFields"][] = "flag";
$tdatarecordidcounter[".inlineAddFields"][] = "useflag";

$tdatarecordidcounter[".editFields"] = array();
$tdatarecordidcounter[".editFields"][] = "Name";
$tdatarecordidcounter[".editFields"][] = "Prefix";
$tdatarecordidcounter[".editFields"][] = "Sufix";
$tdatarecordidcounter[".editFields"][] = "Number";
$tdatarecordidcounter[".editFields"][] = "flag";
$tdatarecordidcounter[".editFields"][] = "useflag";

$tdatarecordidcounter[".inlineEditFields"] = array();
$tdatarecordidcounter[".inlineEditFields"][] = "Name";
$tdatarecordidcounter[".inlineEditFields"][] = "Prefix";
$tdatarecordidcounter[".inlineEditFields"][] = "Sufix";
$tdatarecordidcounter[".inlineEditFields"][] = "Number";
$tdatarecordidcounter[".inlineEditFields"][] = "flag";
$tdatarecordidcounter[".inlineEditFields"][] = "useflag";

$tdatarecordidcounter[".updateSelectedFields"] = array();


$tdatarecordidcounter[".exportFields"] = array();
$tdatarecordidcounter[".exportFields"][] = "Name";
$tdatarecordidcounter[".exportFields"][] = "Prefix";
$tdatarecordidcounter[".exportFields"][] = "Sufix";
$tdatarecordidcounter[".exportFields"][] = "Number";
$tdatarecordidcounter[".exportFields"][] = "flag";
$tdatarecordidcounter[".exportFields"][] = "useflag";

$tdatarecordidcounter[".importFields"] = array();
$tdatarecordidcounter[".importFields"][] = "Name";
$tdatarecordidcounter[".importFields"][] = "Prefix";
$tdatarecordidcounter[".importFields"][] = "Sufix";
$tdatarecordidcounter[".importFields"][] = "Number";
$tdatarecordidcounter[".importFields"][] = "flag";
$tdatarecordidcounter[".importFields"][] = "useflag";

$tdatarecordidcounter[".printFields"] = array();
$tdatarecordidcounter[".printFields"][] = "Name";
$tdatarecordidcounter[".printFields"][] = "Prefix";
$tdatarecordidcounter[".printFields"][] = "Sufix";
$tdatarecordidcounter[".printFields"][] = "Number";
$tdatarecordidcounter[".printFields"][] = "flag";
$tdatarecordidcounter[".printFields"][] = "useflag";

//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "recordidcounter";
	$fdata["Label"] = GetFieldLabel("recordidcounter","Name");
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

		$fdata["isSQLExpression"] = true;
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




	$tdatarecordidcounter["Name"] = $fdata;
//	Prefix
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Prefix";
	$fdata["GoodName"] = "Prefix";
	$fdata["ownerTable"] = "recordidcounter";
	$fdata["Label"] = GetFieldLabel("recordidcounter","Prefix");
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

		$fdata["strField"] = "Prefix";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Prefix`";

	
	
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




	$tdatarecordidcounter["Prefix"] = $fdata;
//	Sufix
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Sufix";
	$fdata["GoodName"] = "Sufix";
	$fdata["ownerTable"] = "recordidcounter";
	$fdata["Label"] = GetFieldLabel("recordidcounter","Sufix");
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

		$fdata["strField"] = "Sufix";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sufix";

	
	
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




	$tdatarecordidcounter["Sufix"] = $fdata;
//	Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Number";
	$fdata["GoodName"] = "Number";
	$fdata["ownerTable"] = "recordidcounter";
	$fdata["Label"] = GetFieldLabel("recordidcounter","Number");
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

		$fdata["strField"] = "Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Number`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecordidcounter["Number"] = $fdata;
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "recordidcounter";
	$fdata["Label"] = GetFieldLabel("recordidcounter","flag");
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

		$fdata["strField"] = "flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag";

	
	
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




	$tdatarecordidcounter["flag"] = $fdata;
//	useflag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "useflag";
	$fdata["GoodName"] = "useflag";
	$fdata["ownerTable"] = "recordidcounter";
	$fdata["Label"] = GetFieldLabel("recordidcounter","useflag");
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

		$fdata["strField"] = "useflag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "useflag";

	
	
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




	$tdatarecordidcounter["useflag"] = $fdata;


$tables_data["recordidcounter"]=&$tdatarecordidcounter;
$field_labels["recordidcounter"] = &$fieldLabelsrecordidcounter;
$fieldToolTips["recordidcounter"] = &$fieldToolTipsrecordidcounter;
$page_titles["recordidcounter"] = &$pageTitlesrecordidcounter;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["recordidcounter"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["recordidcounter"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_recordidcounter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Name,  	`Prefix`,  	Sufix,  	`Number`,  	flag,  	useflag";
$proto0["m_strFrom"] = "FROM recordidcounter";
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
	"m_strName" => "Name",
	"m_strTable" => "recordidcounter",
	"m_srcTableName" => "recordidcounter"
));

$proto6["m_sql"] = "Name";
$proto6["m_srcTableName"] = "recordidcounter";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Prefix",
	"m_strTable" => "recordidcounter",
	"m_srcTableName" => "recordidcounter"
));

$proto8["m_sql"] = "`Prefix`";
$proto8["m_srcTableName"] = "recordidcounter";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Sufix",
	"m_strTable" => "recordidcounter",
	"m_srcTableName" => "recordidcounter"
));

$proto10["m_sql"] = "Sufix";
$proto10["m_srcTableName"] = "recordidcounter";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Number",
	"m_strTable" => "recordidcounter",
	"m_srcTableName" => "recordidcounter"
));

$proto12["m_sql"] = "`Number`";
$proto12["m_srcTableName"] = "recordidcounter";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "recordidcounter",
	"m_srcTableName" => "recordidcounter"
));

$proto14["m_sql"] = "flag";
$proto14["m_srcTableName"] = "recordidcounter";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "useflag",
	"m_strTable" => "recordidcounter",
	"m_srcTableName" => "recordidcounter"
));

$proto16["m_sql"] = "useflag";
$proto16["m_srcTableName"] = "recordidcounter";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "recordidcounter";
$proto19["m_srcTableName"] = "recordidcounter";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Name";
$proto19["m_columns"][] = "Prefix";
$proto19["m_columns"][] = "Sufix";
$proto19["m_columns"][] = "Number";
$proto19["m_columns"][] = "flag";
$proto19["m_columns"][] = "useflag";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "recordidcounter";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "recordidcounter";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="recordidcounter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recordidcounter = createSqlQuery_recordidcounter();


	
		;

						

$tdatarecordidcounter[".sqlquery"] = $queryData_recordidcounter;

$tableEvents["recordidcounter"] = new eventsBase;
$tdatarecordidcounter[".hasEvents"] = false;

?>