<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacountries = array();
	$tdatacountries[".truncateText"] = true;
	$tdatacountries[".NumberOfChars"] = 80;
	$tdatacountries[".ShortName"] = "countries";
	$tdatacountries[".OwnerID"] = "";
	$tdatacountries[".OriginalTable"] = "countries";

//	field labels
$fieldLabelscountries = array();
$fieldToolTipscountries = array();
$pageTitlescountries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscountries["English"] = array();
	$fieldToolTipscountries["English"] = array();
	$pageTitlescountries["English"] = array();
	$fieldLabelscountries["English"]["Name"] = "Name";
	$fieldToolTipscountries["English"]["Name"] = "";
	$fieldLabelscountries["English"]["Code"] = "Code";
	$fieldToolTipscountries["English"]["Code"] = "";
	if (count($fieldToolTipscountries["English"]))
		$tdatacountries[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscountries[""] = array();
	$fieldToolTipscountries[""] = array();
	$pageTitlescountries[""] = array();
	if (count($fieldToolTipscountries[""]))
		$tdatacountries[".isUseToolTips"] = true;
}


	$tdatacountries[".NCSearch"] = true;



$tdatacountries[".shortTableName"] = "countries";
$tdatacountries[".nSecOptions"] = 0;
$tdatacountries[".recsPerRowPrint"] = 1;
$tdatacountries[".mainTableOwnerID"] = "";
$tdatacountries[".moveNext"] = 1;
$tdatacountries[".entityType"] = 0;

$tdatacountries[".strOriginalTableName"] = "countries";

	



$tdatacountries[".showAddInPopup"] = false;

$tdatacountries[".showEditInPopup"] = false;

$tdatacountries[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacountries[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacountries[".fieldsForRegister"] = array();

$tdatacountries[".listAjax"] = false;

	$tdatacountries[".audit"] = false;

	$tdatacountries[".locking"] = false;

$tdatacountries[".edit"] = true;
$tdatacountries[".afterEditAction"] = 1;
$tdatacountries[".closePopupAfterEdit"] = 1;
$tdatacountries[".afterEditActionDetTable"] = "";

$tdatacountries[".add"] = true;
$tdatacountries[".afterAddAction"] = 1;
$tdatacountries[".closePopupAfterAdd"] = 1;
$tdatacountries[".afterAddActionDetTable"] = "";

$tdatacountries[".list"] = true;

$tdatacountries[".inlineEdit"] = true;



$tdatacountries[".inlineAdd"] = true;
$tdatacountries[".copy"] = true;
$tdatacountries[".view"] = true;

$tdatacountries[".import"] = true;

$tdatacountries[".exportTo"] = true;

$tdatacountries[".printFriendly"] = true;

$tdatacountries[".delete"] = true;

$tdatacountries[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacountries[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacountries[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacountries[".searchSaving"] = false;
//

$tdatacountries[".showSearchPanel"] = true;
		$tdatacountries[".flexibleSearch"] = true;

$tdatacountries[".isUseAjaxSuggest"] = true;

$tdatacountries[".rowHighlite"] = true;



$tdatacountries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacountries[".isUseTimeForSearch"] = false;



$tdatacountries[".badgeColor"] = "D2AF80";


$tdatacountries[".allSearchFields"] = array();
$tdatacountries[".filterFields"] = array();
$tdatacountries[".requiredSearchFields"] = array();

$tdatacountries[".allSearchFields"][] = "Name";
	$tdatacountries[".allSearchFields"][] = "Code";
	

$tdatacountries[".googleLikeFields"] = array();
$tdatacountries[".googleLikeFields"][] = "Name";
$tdatacountries[".googleLikeFields"][] = "Code";


$tdatacountries[".advSearchFields"] = array();
$tdatacountries[".advSearchFields"][] = "Name";
$tdatacountries[".advSearchFields"][] = "Code";

$tdatacountries[".tableType"] = "list";

$tdatacountries[".printerPageOrientation"] = 0;
$tdatacountries[".nPrinterPageScale"] = 100;

$tdatacountries[".nPrinterSplitRecords"] = 40;

$tdatacountries[".nPrinterPDFSplitRecords"] = 40;



$tdatacountries[".geocodingEnabled"] = false;





$tdatacountries[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacountries[".pageSize"] = 20;

$tdatacountries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacountries[".strOrderBy"] = $tstrOrderBy;

$tdatacountries[".orderindexes"] = array();

$tdatacountries[".sqlHead"] = "SELECT Name,  	Code";
$tdatacountries[".sqlFrom"] = "FROM countries";
$tdatacountries[".sqlWhereExpr"] = "";
$tdatacountries[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacountries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacountries[".arrGroupsPerPage"] = $arrGPP;

$tdatacountries[".highlightSearchResults"] = true;

$tableKeyscountries = array();
$tableKeyscountries[] = "Code";
$tdatacountries[".Keys"] = $tableKeyscountries;

$tdatacountries[".listFields"] = array();
$tdatacountries[".listFields"][] = "Name";
$tdatacountries[".listFields"][] = "Code";

$tdatacountries[".hideMobileList"] = array();


$tdatacountries[".viewFields"] = array();
$tdatacountries[".viewFields"][] = "Name";
$tdatacountries[".viewFields"][] = "Code";

$tdatacountries[".addFields"] = array();
$tdatacountries[".addFields"][] = "Name";
$tdatacountries[".addFields"][] = "Code";

$tdatacountries[".masterListFields"] = array();
$tdatacountries[".masterListFields"][] = "Name";
$tdatacountries[".masterListFields"][] = "Code";

$tdatacountries[".inlineAddFields"] = array();
$tdatacountries[".inlineAddFields"][] = "Name";
$tdatacountries[".inlineAddFields"][] = "Code";

$tdatacountries[".editFields"] = array();
$tdatacountries[".editFields"][] = "Name";
$tdatacountries[".editFields"][] = "Code";

$tdatacountries[".inlineEditFields"] = array();
$tdatacountries[".inlineEditFields"][] = "Name";
$tdatacountries[".inlineEditFields"][] = "Code";

$tdatacountries[".updateSelectedFields"] = array();


$tdatacountries[".exportFields"] = array();
$tdatacountries[".exportFields"][] = "Name";
$tdatacountries[".exportFields"][] = "Code";

$tdatacountries[".importFields"] = array();
$tdatacountries[".importFields"][] = "Name";
$tdatacountries[".importFields"][] = "Code";

$tdatacountries[".printFields"] = array();
$tdatacountries[".printFields"][] = "Name";
$tdatacountries[".printFields"][] = "Code";

//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = GetFieldLabel("countries","Name");
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
			$edata["EditParams"].= " maxlength=70";

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




	$tdatacountries["Name"] = $fdata;
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "countries";
	$fdata["Label"] = GetFieldLabel("countries","Code");
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

		$fdata["strField"] = "Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Code";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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




	$tdatacountries["Code"] = $fdata;


$tables_data["countries"]=&$tdatacountries;
$field_labels["countries"] = &$fieldLabelscountries;
$fieldToolTips["countries"] = &$fieldToolTipscountries;
$page_titles["countries"] = &$pageTitlescountries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["countries"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["countries"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Name,  	Code";
$proto0["m_strFrom"] = "FROM countries";
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
	"m_strTable" => "countries",
	"m_srcTableName" => "countries"
));

$proto6["m_sql"] = "Name";
$proto6["m_srcTableName"] = "countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "countries",
	"m_srcTableName" => "countries"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "countries";
$proto11["m_srcTableName"] = "countries";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Name";
$proto11["m_columns"][] = "Code";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "countries";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "countries";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_countries = createSqlQuery_countries();


	
		;

		

$tdatacountries[".sqlquery"] = $queryData_countries;

$tableEvents["countries"] = new eventsBase;
$tdatacountries[".hasEvents"] = false;

?>