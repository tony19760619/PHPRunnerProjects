<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawaste = array();	
	$tdatawaste[".truncateText"] = true;
	$tdatawaste[".NumberOfChars"] = 80; 
	$tdatawaste[".ShortName"] = "waste";
	$tdatawaste[".OwnerID"] = "";
	$tdatawaste[".OriginalTable"] = "waste";

//	field labels
$fieldLabelswaste = array();
$fieldToolTipswaste = array();
$pageTitleswaste = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswaste["English"] = array();
	$fieldToolTipswaste["English"] = array();
	$pageTitleswaste["English"] = array();
	$fieldLabelswaste["English"]["Id"] = "Id";
	$fieldToolTipswaste["English"]["Id"] = "";
	$fieldLabelswaste["English"]["WasteDescr"] = "Waste Descr";
	$fieldToolTipswaste["English"]["WasteDescr"] = "";
	if (count($fieldToolTipswaste["English"]))
		$tdatawaste[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswaste[""] = array();
	$fieldToolTipswaste[""] = array();
	$pageTitleswaste[""] = array();
	if (count($fieldToolTipswaste[""]))
		$tdatawaste[".isUseToolTips"] = true;
}
	
	
	$tdatawaste[".NCSearch"] = true;



$tdatawaste[".shortTableName"] = "waste";
$tdatawaste[".nSecOptions"] = 0;
$tdatawaste[".recsPerRowList"] = 1;
$tdatawaste[".mainTableOwnerID"] = "";
$tdatawaste[".moveNext"] = 1;
$tdatawaste[".nType"] = 0;

$tdatawaste[".strOriginalTableName"] = "waste";

	


$tdatawaste[".showAddInPopup"] = false;

$tdatawaste[".showEditInPopup"] = false;

$tdatawaste[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawaste[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawaste[".fieldsForRegister"] = array();
	
$tdatawaste[".listAjax"] = false;

	$tdatawaste[".audit"] = false;

	$tdatawaste[".locking"] = true;

$tdatawaste[".edit"] = true;
$tdatawaste[".inlineEdit"] = true;
$tdatawaste[".inlineAdd"] = true;
$tdatawaste[".view"] = true;

$tdatawaste[".import"] = true;

$tdatawaste[".exportTo"] = true;

$tdatawaste[".printFriendly"] = true;

$tdatawaste[".delete"] = true;

$tdatawaste[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatawaste[".searchSaving"] = false;
//

$tdatawaste[".showSearchPanel"] = true;
		$tdatawaste[".flexibleSearch"] = true;		

if (isMobile())
	$tdatawaste[".isUseAjaxSuggest"] = false;
else 
	$tdatawaste[".isUseAjaxSuggest"] = true;

$tdatawaste[".rowHighlite"] = true;



$tdatawaste[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawaste[".isUseTimeForSearch"] = false;



$tdatawaste[".useDetailsPreview"] = true;


$tdatawaste[".allSearchFields"] = array();
$tdatawaste[".filterFields"] = array();
$tdatawaste[".requiredSearchFields"] = array();

$tdatawaste[".allSearchFields"][] = "Id";
		$tdatawaste[".allSearchFields"][] = "WasteDescr";
		
$tdatawaste[".googleLikeFields"] = array();
$tdatawaste[".googleLikeFields"][] = "Id";
$tdatawaste[".googleLikeFields"][] = "WasteDescr";

$tdatawaste[".panelSearchFields"] = array();
$tdatawaste[".searchPanelOptions"] = array();
$tdatawaste[".panelSearchFields"][] = "WasteDescr";
	
$tdatawaste[".advSearchFields"] = array();
$tdatawaste[".advSearchFields"][] = "Id";
$tdatawaste[".advSearchFields"][] = "WasteDescr";

$tdatawaste[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatawaste[".pageSize"] = 20;

$tdatawaste[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawaste[".strOrderBy"] = $tstrOrderBy;

$tdatawaste[".orderindexes"] = array();

$tdatawaste[".sqlHead"] = "SELECT Id,   WasteDescr";
$tdatawaste[".sqlFrom"] = "FROM waste";
$tdatawaste[".sqlWhereExpr"] = "";
$tdatawaste[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawaste[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawaste[".arrGroupsPerPage"] = $arrGPP;


$tableKeyswaste = array();
$tableKeyswaste[] = "Id";
$tdatawaste[".Keys"] = $tableKeyswaste;

$tdatawaste[".listFields"] = array();
$tdatawaste[".listFields"][] = "Id";
$tdatawaste[".listFields"][] = "WasteDescr";

$tdatawaste[".hideMobileList"] = array();


$tdatawaste[".viewFields"] = array();
$tdatawaste[".viewFields"][] = "Id";
$tdatawaste[".viewFields"][] = "WasteDescr";

$tdatawaste[".addFields"] = array();
$tdatawaste[".addFields"][] = "WasteDescr";

$tdatawaste[".inlineAddFields"] = array();
$tdatawaste[".inlineAddFields"][] = "WasteDescr";

$tdatawaste[".editFields"] = array();
$tdatawaste[".editFields"][] = "WasteDescr";

$tdatawaste[".inlineEditFields"] = array();
$tdatawaste[".inlineEditFields"][] = "WasteDescr";

$tdatawaste[".exportFields"] = array();
$tdatawaste[".exportFields"][] = "Id";
$tdatawaste[".exportFields"][] = "WasteDescr";

$tdatawaste[".printFields"] = array();
$tdatawaste[".printFields"][] = "Id";
$tdatawaste[".printFields"][] = "WasteDescr";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "waste";
	$fdata["Label"] = GetFieldLabel("waste","Id"); 
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

	

	
	$tdatawaste["Id"] = $fdata;
//	WasteDescr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "WasteDescr";
	$fdata["GoodName"] = "WasteDescr";
	$fdata["ownerTable"] = "waste";
	$fdata["Label"] = GetFieldLabel("waste","WasteDescr"); 
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
	
		$fdata["strField"] = "WasteDescr"; 
		$fdata["FullName"] = "WasteDescr";
	
		
		
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
			$edata["EditParams"].= " maxlength=30";
	
		$edata["controlWidth"] = 143;
	
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
	
	// the end of search options settings	

	

	
	$tdatawaste["WasteDescr"] = $fdata;

	
$tables_data["waste"]=&$tdatawaste;
$field_labels["waste"] = &$fieldLabelswaste;
$fieldToolTips["waste"] = &$fieldToolTipswaste;
$page_titles["waste"] = &$pageTitleswaste;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["waste"] = array();
//	customerwaste
	
	

		$dIndex = 0;
		$detailsParam["dOriginalTable"] = "customerwaste";
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customerwaste";
				$detailsParam["dType"]="list";
	$detailsParam["dShortTable"] = "customerwaste";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["waste"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["waste"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["waste"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["detailKeys"][]="WasteId";
//	customerwastebymonth
	
	

		$dIndex = 1;
		$detailsParam["dOriginalTable"] = "customerwastebymonth";
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customerwastebymonth";
				$detailsParam["dType"]="list";
	$detailsParam["dShortTable"] = "customerwastebymonth";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["waste"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["waste"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["waste"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["detailKeys"][]="WasteId";
//	customerwastebyweek
	
	

		$dIndex = 2;
		$detailsParam["dOriginalTable"] = "customerwastebyweek";
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customerwastebyweek";
				$detailsParam["dType"]="list";
	$detailsParam["dShortTable"] = "customerwastebyweek";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["waste"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["waste"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["waste"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["detailKeys"][]="WasteId";
//	customerwastebyday
	
	

		$dIndex = 3;
		$detailsParam["dOriginalTable"] = "customerwastebyday";
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customerwastebyday";
				$detailsParam["dType"]="list";
	$detailsParam["dShortTable"] = "customerwastebyday";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["waste"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["waste"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["waste"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["detailKeys"][]="WasteId";
//	customerwastebyyear
	
	

		$dIndex = 4;
		$detailsParam["dOriginalTable"] = "customerwastebyyear";
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="customerwastebyyear";
				$detailsParam["dType"]="list";
	$detailsParam["dShortTable"] = "customerwastebyyear";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["waste"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["waste"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["waste"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["waste"][$dIndex]["detailKeys"][]="WasteId";
	
// tables which are master tables for current table (detail)
$masterTablesData["waste"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_waste()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   WasteDescr";
$proto0["m_strFrom"] = "FROM waste";
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
	"m_strTable" => "waste"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "WasteDescr",
	"m_strTable" => "waste"
));

$proto7["m_sql"] = "WasteDescr";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "waste";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Id";
$proto10["m_columns"][] = "WasteDescr";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "waste";
$proto9["m_alias"] = "";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_waste = createSqlQuery_waste();

		
	
$tdatawaste[".sqlquery"] = $queryData_waste;

$tableEvents["waste"] = new eventsBase;
$tdatawaste[".hasEvents"] = false;

$cipherer = new RunnerCipherer("waste");

?>