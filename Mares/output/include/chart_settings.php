<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachart = array();
	$tdatachart[".truncateText"] = true;
	$tdatachart[".NumberOfChars"] = 80;
	$tdatachart[".ShortName"] = "chart";
	$tdatachart[".OwnerID"] = "";
	$tdatachart[".OriginalTable"] = "chart";

//	field labels
$fieldLabelschart = array();
$fieldToolTipschart = array();
$pageTitleschart = array();

if(mlang_getcurrentlang()=="Portuguese(Standard)")
{
	$fieldLabelschart["Portuguese(Standard)"] = array();
	$fieldToolTipschart["Portuguese(Standard)"] = array();
	$pageTitleschart["Portuguese(Standard)"] = array();
	$fieldLabelschart["Portuguese(Standard)"]["id"] = "Id";
	$fieldToolTipschart["Portuguese(Standard)"]["id"] = "";
	$fieldLabelschart["Portuguese(Standard)"]["BackgroundColor"] = "Background Color";
	$fieldToolTipschart["Portuguese(Standard)"]["BackgroundColor"] = "";
	$fieldLabelschart["Portuguese(Standard)"]["BackgroundImage"] = "Background Image";
	$fieldToolTipschart["Portuguese(Standard)"]["BackgroundImage"] = "";
	$fieldLabelschart["Portuguese(Standard)"]["TextColor"] = "Text Color";
	$fieldToolTipschart["Portuguese(Standard)"]["TextColor"] = "";
	if (count($fieldToolTipschart["Portuguese(Standard)"]))
		$tdatachart[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschart[""] = array();
	$fieldToolTipschart[""] = array();
	$pageTitleschart[""] = array();
	$fieldLabelschart[""]["id"] = "Id";
	$fieldToolTipschart[""]["id"] = "";
	$fieldLabelschart[""]["BackgroundColor"] = "Background Color";
	$fieldToolTipschart[""]["BackgroundColor"] = "";
	$fieldLabelschart[""]["BackgroundImage"] = "Background Image";
	$fieldToolTipschart[""]["BackgroundImage"] = "";
	$fieldLabelschart[""]["TextColor"] = "Text Color";
	$fieldToolTipschart[""]["TextColor"] = "";
	if (count($fieldToolTipschart[""]))
		$tdatachart[".isUseToolTips"] = true;
}


	$tdatachart[".NCSearch"] = true;



$tdatachart[".shortTableName"] = "chart";
$tdatachart[".nSecOptions"] = 0;
$tdatachart[".recsPerRowPrint"] = 1;
$tdatachart[".mainTableOwnerID"] = "";
$tdatachart[".moveNext"] = 1;
$tdatachart[".entityType"] = 0;

$tdatachart[".strOriginalTableName"] = "chart";

	



$tdatachart[".showAddInPopup"] = false;

$tdatachart[".showEditInPopup"] = false;

$tdatachart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachart[".fieldsForRegister"] = array();

$tdatachart[".listAjax"] = false;

	$tdatachart[".audit"] = false;

	$tdatachart[".locking"] = false;

$tdatachart[".edit"] = true;
$tdatachart[".afterEditAction"] = 1;
$tdatachart[".closePopupAfterEdit"] = 1;
$tdatachart[".afterEditActionDetTable"] = "";


$tdatachart[".list"] = true;




$tdatachart[".view"] = true;



$tdatachart[".printFriendly"] = true;


$tdatachart[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatachart[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatachart[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatachart[".searchSaving"] = false;
//

$tdatachart[".showSearchPanel"] = true;
		$tdatachart[".flexibleSearch"] = true;

$tdatachart[".isUseAjaxSuggest"] = true;

$tdatachart[".rowHighlite"] = true;



$tdatachart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachart[".isUseTimeForSearch"] = false;



$tdatachart[".badgeColor"] = "2F4F4F";


$tdatachart[".allSearchFields"] = array();
$tdatachart[".filterFields"] = array();
$tdatachart[".requiredSearchFields"] = array();

$tdatachart[".allSearchFields"][] = "id";
	$tdatachart[".allSearchFields"][] = "BackgroundColor";
	$tdatachart[".allSearchFields"][] = "BackgroundImage";
	$tdatachart[".allSearchFields"][] = "TextColor";
	

$tdatachart[".googleLikeFields"] = array();
$tdatachart[".googleLikeFields"][] = "id";
$tdatachart[".googleLikeFields"][] = "BackgroundColor";
$tdatachart[".googleLikeFields"][] = "BackgroundImage";
$tdatachart[".googleLikeFields"][] = "TextColor";


$tdatachart[".advSearchFields"] = array();
$tdatachart[".advSearchFields"][] = "id";
$tdatachart[".advSearchFields"][] = "BackgroundColor";
$tdatachart[".advSearchFields"][] = "BackgroundImage";
$tdatachart[".advSearchFields"][] = "TextColor";

$tdatachart[".tableType"] = "list";

$tdatachart[".printerPageOrientation"] = 0;
$tdatachart[".nPrinterPageScale"] = 100;

$tdatachart[".nPrinterSplitRecords"] = 40;

$tdatachart[".nPrinterPDFSplitRecords"] = 40;



$tdatachart[".geocodingEnabled"] = false;





$tdatachart[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatachart[".pageSize"] = 20;

$tdatachart[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachart[".strOrderBy"] = $tstrOrderBy;

$tdatachart[".orderindexes"] = array();

$tdatachart[".sqlHead"] = "SELECT id,  	BackgroundColor,  	BackgroundImage,  	TextColor";
$tdatachart[".sqlFrom"] = "FROM chart";
$tdatachart[".sqlWhereExpr"] = "";
$tdatachart[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachart[".arrGroupsPerPage"] = $arrGPP;

$tdatachart[".highlightSearchResults"] = true;

$tableKeyschart = array();
$tableKeyschart[] = "id";
$tdatachart[".Keys"] = $tableKeyschart;

$tdatachart[".listFields"] = array();
$tdatachart[".listFields"][] = "id";
$tdatachart[".listFields"][] = "BackgroundColor";
$tdatachart[".listFields"][] = "BackgroundImage";
$tdatachart[".listFields"][] = "TextColor";

$tdatachart[".hideMobileList"] = array();


$tdatachart[".viewFields"] = array();
$tdatachart[".viewFields"][] = "id";
$tdatachart[".viewFields"][] = "BackgroundColor";
$tdatachart[".viewFields"][] = "BackgroundImage";
$tdatachart[".viewFields"][] = "TextColor";

$tdatachart[".addFields"] = array();

$tdatachart[".masterListFields"] = array();
$tdatachart[".masterListFields"][] = "id";
$tdatachart[".masterListFields"][] = "BackgroundColor";
$tdatachart[".masterListFields"][] = "BackgroundImage";
$tdatachart[".masterListFields"][] = "TextColor";

$tdatachart[".inlineAddFields"] = array();

$tdatachart[".editFields"] = array();
$tdatachart[".editFields"][] = "BackgroundColor";
$tdatachart[".editFields"][] = "BackgroundImage";
$tdatachart[".editFields"][] = "TextColor";

$tdatachart[".inlineEditFields"] = array();

$tdatachart[".updateSelectedFields"] = array();


$tdatachart[".exportFields"] = array();
$tdatachart[".exportFields"][] = "id";
$tdatachart[".exportFields"][] = "BackgroundColor";
$tdatachart[".exportFields"][] = "BackgroundImage";
$tdatachart[".exportFields"][] = "TextColor";

$tdatachart[".importFields"] = array();
$tdatachart[".importFields"][] = "id";
$tdatachart[".importFields"][] = "BackgroundColor";
$tdatachart[".importFields"][] = "BackgroundImage";
$tdatachart[".importFields"][] = "TextColor";

$tdatachart[".printFields"] = array();
$tdatachart[".printFields"][] = "id";
$tdatachart[".printFields"][] = "BackgroundColor";
$tdatachart[".printFields"][] = "BackgroundImage";
$tdatachart[".printFields"][] = "TextColor";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "chart";
	$fdata["Label"] = GetFieldLabel("chart","id");
	$fdata["FieldType"] = 3;

	
	
	
			
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachart["id"] = $fdata;
//	BackgroundColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BackgroundColor";
	$fdata["GoodName"] = "BackgroundColor";
	$fdata["ownerTable"] = "chart";
	$fdata["Label"] = GetFieldLabel("chart","BackgroundColor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BackgroundColor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BackgroundColor";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachart["BackgroundColor"] = $fdata;
//	BackgroundImage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BackgroundImage";
	$fdata["GoodName"] = "BackgroundImage";
	$fdata["ownerTable"] = "chart";
	$fdata["Label"] = GetFieldLabel("chart","BackgroundImage");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "BackgroundImage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BackgroundImage";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachart["BackgroundImage"] = $fdata;
//	TextColor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TextColor";
	$fdata["GoodName"] = "TextColor";
	$fdata["ownerTable"] = "chart";
	$fdata["Label"] = GetFieldLabel("chart","TextColor");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TextColor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TextColor";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachart["TextColor"] = $fdata;


$tables_data["chart"]=&$tdatachart;
$field_labels["chart"] = &$fieldLabelschart;
$fieldToolTips["chart"] = &$fieldToolTipschart;
$page_titles["chart"] = &$pageTitleschart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["chart"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	BackgroundColor,  	BackgroundImage,  	TextColor";
$proto0["m_strFrom"] = "FROM chart";
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
	"m_strTable" => "chart",
	"m_srcTableName" => "chart"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BackgroundColor",
	"m_strTable" => "chart",
	"m_srcTableName" => "chart"
));

$proto8["m_sql"] = "BackgroundColor";
$proto8["m_srcTableName"] = "chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BackgroundImage",
	"m_strTable" => "chart",
	"m_srcTableName" => "chart"
));

$proto10["m_sql"] = "BackgroundImage";
$proto10["m_srcTableName"] = "chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TextColor",
	"m_strTable" => "chart",
	"m_srcTableName" => "chart"
));

$proto12["m_sql"] = "TextColor";
$proto12["m_srcTableName"] = "chart";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "chart";
$proto15["m_srcTableName"] = "chart";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "BackgroundColor";
$proto15["m_columns"][] = "BackgroundImage";
$proto15["m_columns"][] = "TextColor";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "chart";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "chart";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chart = createSqlQuery_chart();


	
		;

				

$tdatachart[".sqlquery"] = $queryData_chart;

$tableEvents["chart"] = new eventsBase;
$tdatachart[".hasEvents"] = false;

?>