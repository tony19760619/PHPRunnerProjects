<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLookUps = array();
	$tdataLookUps[".truncateText"] = true;
	$tdataLookUps[".NumberOfChars"] = 80;
	$tdataLookUps[".ShortName"] = "LookUps";
	$tdataLookUps[".OwnerID"] = "";
	$tdataLookUps[".OriginalTable"] = "LookUps";

//	field labels
$fieldLabelsLookUps = array();
$fieldToolTipsLookUps = array();
$pageTitlesLookUps = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLookUps["English"] = array();
	$fieldToolTipsLookUps["English"] = array();
	$pageTitlesLookUps["English"] = array();
	$fieldLabelsLookUps["English"]["id"] = "Id";
	$fieldToolTipsLookUps["English"]["id"] = "";
	$fieldLabelsLookUps["English"]["Type"] = "Type";
	$fieldToolTipsLookUps["English"]["Type"] = "";
	$fieldLabelsLookUps["English"]["Value"] = "Value";
	$fieldToolTipsLookUps["English"]["Value"] = "";
	if (count($fieldToolTipsLookUps["English"]))
		$tdataLookUps[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLookUps[""] = array();
	$fieldToolTipsLookUps[""] = array();
	$pageTitlesLookUps[""] = array();
	if (count($fieldToolTipsLookUps[""]))
		$tdataLookUps[".isUseToolTips"] = true;
}


	$tdataLookUps[".NCSearch"] = true;



$tdataLookUps[".shortTableName"] = "LookUps";
$tdataLookUps[".nSecOptions"] = 0;
$tdataLookUps[".recsPerRowPrint"] = 1;
$tdataLookUps[".mainTableOwnerID"] = "";
$tdataLookUps[".moveNext"] = 1;
$tdataLookUps[".entityType"] = 0;

$tdataLookUps[".strOriginalTableName"] = "LookUps";

	



$tdataLookUps[".showAddInPopup"] = false;

$tdataLookUps[".showEditInPopup"] = false;

$tdataLookUps[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLookUps[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLookUps[".fieldsForRegister"] = array();

$tdataLookUps[".listAjax"] = false;

	$tdataLookUps[".audit"] = false;

	$tdataLookUps[".locking"] = false;

$tdataLookUps[".edit"] = true;
$tdataLookUps[".afterEditAction"] = 1;
$tdataLookUps[".closePopupAfterEdit"] = 1;
$tdataLookUps[".afterEditActionDetTable"] = "";

$tdataLookUps[".add"] = true;
$tdataLookUps[".afterAddAction"] = 0;
$tdataLookUps[".closePopupAfterAdd"] = 1;
$tdataLookUps[".afterAddActionDetTable"] = "";

$tdataLookUps[".list"] = true;




$tdataLookUps[".view"] = true;

$tdataLookUps[".import"] = true;

$tdataLookUps[".exportTo"] = true;

$tdataLookUps[".printFriendly"] = true;

$tdataLookUps[".delete"] = true;

$tdataLookUps[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataLookUps[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataLookUps[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataLookUps[".searchSaving"] = true;
//

$tdataLookUps[".showSearchPanel"] = true;
		$tdataLookUps[".flexibleSearch"] = true;

$tdataLookUps[".isUseAjaxSuggest"] = true;

$tdataLookUps[".rowHighlite"] = true;



$tdataLookUps[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLookUps[".isUseTimeForSearch"] = false;



$tdataLookUps[".badgeColor"] = "6DA5C8";


$tdataLookUps[".allSearchFields"] = array();
$tdataLookUps[".filterFields"] = array();
$tdataLookUps[".requiredSearchFields"] = array();

$tdataLookUps[".allSearchFields"][] = "id";
	$tdataLookUps[".allSearchFields"][] = "Type";
	$tdataLookUps[".allSearchFields"][] = "Value";
	

$tdataLookUps[".googleLikeFields"] = array();
$tdataLookUps[".googleLikeFields"][] = "id";
$tdataLookUps[".googleLikeFields"][] = "Type";
$tdataLookUps[".googleLikeFields"][] = "Value";


$tdataLookUps[".advSearchFields"] = array();
$tdataLookUps[".advSearchFields"][] = "id";
$tdataLookUps[".advSearchFields"][] = "Type";
$tdataLookUps[".advSearchFields"][] = "Value";

$tdataLookUps[".tableType"] = "list";

$tdataLookUps[".printerPageOrientation"] = 0;
$tdataLookUps[".nPrinterPageScale"] = 100;

$tdataLookUps[".nPrinterSplitRecords"] = 40;

$tdataLookUps[".nPrinterPDFSplitRecords"] = 40;



$tdataLookUps[".geocodingEnabled"] = false;





$tdataLookUps[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataLookUps[".pageSize"] = 20;

$tdataLookUps[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLookUps[".strOrderBy"] = $tstrOrderBy;

$tdataLookUps[".orderindexes"] = array();

$tdataLookUps[".sqlHead"] = "SELECT id,  	`Type`,  	`Value`";
$tdataLookUps[".sqlFrom"] = "FROM LookUps";
$tdataLookUps[".sqlWhereExpr"] = "";
$tdataLookUps[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLookUps[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLookUps[".arrGroupsPerPage"] = $arrGPP;

$tdataLookUps[".highlightSearchResults"] = true;

$tableKeysLookUps = array();
$tableKeysLookUps[] = "id";
$tdataLookUps[".Keys"] = $tableKeysLookUps;

$tdataLookUps[".listFields"] = array();
$tdataLookUps[".listFields"][] = "id";
$tdataLookUps[".listFields"][] = "Type";
$tdataLookUps[".listFields"][] = "Value";

$tdataLookUps[".hideMobileList"] = array();


$tdataLookUps[".viewFields"] = array();
$tdataLookUps[".viewFields"][] = "id";
$tdataLookUps[".viewFields"][] = "Type";
$tdataLookUps[".viewFields"][] = "Value";

$tdataLookUps[".addFields"] = array();
$tdataLookUps[".addFields"][] = "Type";
$tdataLookUps[".addFields"][] = "Value";

$tdataLookUps[".masterListFields"] = array();
$tdataLookUps[".masterListFields"][] = "id";
$tdataLookUps[".masterListFields"][] = "Type";
$tdataLookUps[".masterListFields"][] = "Value";

$tdataLookUps[".inlineAddFields"] = array();

$tdataLookUps[".editFields"] = array();
$tdataLookUps[".editFields"][] = "Type";
$tdataLookUps[".editFields"][] = "Value";

$tdataLookUps[".inlineEditFields"] = array();

$tdataLookUps[".updateSelectedFields"] = array();


$tdataLookUps[".exportFields"] = array();
$tdataLookUps[".exportFields"][] = "id";
$tdataLookUps[".exportFields"][] = "Type";
$tdataLookUps[".exportFields"][] = "Value";

$tdataLookUps[".importFields"] = array();
$tdataLookUps[".importFields"][] = "id";
$tdataLookUps[".importFields"][] = "Type";
$tdataLookUps[".importFields"][] = "Value";

$tdataLookUps[".printFields"] = array();
$tdataLookUps[".printFields"][] = "id";
$tdataLookUps[".printFields"][] = "Type";
$tdataLookUps[".printFields"][] = "Value";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("LookUps","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdataLookUps["id"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("LookUps","Type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Type";

	
	$edata["LookupOrderBy"] = "Type";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLookUps["Type"] = $fdata;
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("LookUps","Value");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Value`";

	
	
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




	$tdataLookUps["Value"] = $fdata;


$tables_data["LookUps"]=&$tdataLookUps;
$field_labels["LookUps"] = &$fieldLabelsLookUps;
$fieldToolTips["LookUps"] = &$fieldToolTipsLookUps;
$page_titles["LookUps"] = &$pageTitlesLookUps;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LookUps"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LookUps"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LookUps()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	`Type`,  	`Value`";
$proto0["m_strFrom"] = "FROM LookUps";
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
	"m_strName" => "id",
	"m_strTable" => "lookups",
	"m_srcTableName" => "LookUps"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "LookUps";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "lookups",
	"m_srcTableName" => "LookUps"
));

$proto8["m_sql"] = "`Type`";
$proto8["m_srcTableName"] = "LookUps";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Value",
	"m_strTable" => "lookups",
	"m_srcTableName" => "LookUps"
));

$proto10["m_sql"] = "`Value`";
$proto10["m_srcTableName"] = "LookUps";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "lookups";
$proto13["m_srcTableName"] = "LookUps";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Type";
$proto13["m_columns"][] = "Value";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "LookUps";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "LookUps";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="LookUps";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LookUps = createSqlQuery_LookUps();


	
		;

			

$tdataLookUps[".sqlquery"] = $queryData_LookUps;

$tableEvents["LookUps"] = new eventsBase;
$tdataLookUps[".hasEvents"] = false;

?>