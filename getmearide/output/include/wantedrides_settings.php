<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawantedrides = array();	
	$tdatawantedrides[".truncateText"] = true;
	$tdatawantedrides[".NumberOfChars"] = 80; 
	$tdatawantedrides[".ShortName"] = "wantedrides";
	$tdatawantedrides[".OwnerID"] = "";
	$tdatawantedrides[".OriginalTable"] = "wantedrides";

//	field labels
$fieldLabelswantedrides = array();
$fieldToolTipswantedrides = array();
$pageTitleswantedrides = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswantedrides["English"] = array();
	$fieldToolTipswantedrides["English"] = array();
	$pageTitleswantedrides["English"] = array();
	$fieldLabelswantedrides["English"]["id"] = "Id";
	$fieldToolTipswantedrides["English"]["id"] = "";
	if (count($fieldToolTipswantedrides["English"]))
		$tdatawantedrides[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswantedrides[""] = array();
	$fieldToolTipswantedrides[""] = array();
	$pageTitleswantedrides[""] = array();
	if (count($fieldToolTipswantedrides[""]))
		$tdatawantedrides[".isUseToolTips"] = true;
}
	
	
	$tdatawantedrides[".NCSearch"] = true;



$tdatawantedrides[".shortTableName"] = "wantedrides";
$tdatawantedrides[".nSecOptions"] = 0;
$tdatawantedrides[".recsPerRowList"] = 1;
$tdatawantedrides[".recsPerRowPrint"] = 1;
$tdatawantedrides[".mainTableOwnerID"] = "";
$tdatawantedrides[".moveNext"] = 1;
$tdatawantedrides[".entityType"] = 0;

$tdatawantedrides[".strOriginalTableName"] = "wantedrides";




$tdatawantedrides[".showAddInPopup"] = false;

$tdatawantedrides[".showEditInPopup"] = false;

$tdatawantedrides[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawantedrides[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawantedrides[".fieldsForRegister"] = array();

$tdatawantedrides[".listAjax"] = false;

	$tdatawantedrides[".audit"] = false;

	$tdatawantedrides[".locking"] = false;

$tdatawantedrides[".edit"] = true;
$tdatawantedrides[".afterEditAction"] = 1;
$tdatawantedrides[".closePopupAfterEdit"] = 1;
$tdatawantedrides[".afterEditActionDetTable"] = "";

$tdatawantedrides[".add"] = true;
$tdatawantedrides[".afterAddAction"] = 1;
$tdatawantedrides[".closePopupAfterAdd"] = 1;
$tdatawantedrides[".afterAddActionDetTable"] = "";

$tdatawantedrides[".list"] = true;

$tdatawantedrides[".inlineEdit"] = true;
$tdatawantedrides[".inlineAdd"] = true;
$tdatawantedrides[".view"] = true;

$tdatawantedrides[".import"] = true;

$tdatawantedrides[".exportTo"] = true;

$tdatawantedrides[".printFriendly"] = true;

$tdatawantedrides[".delete"] = true;

$tdatawantedrides[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatawantedrides[".searchSaving"] = false;
//

$tdatawantedrides[".showSearchPanel"] = true;
		$tdatawantedrides[".flexibleSearch"] = true;		

if (isMobile())
	$tdatawantedrides[".isUseAjaxSuggest"] = false;
else 
	$tdatawantedrides[".isUseAjaxSuggest"] = true;

$tdatawantedrides[".rowHighlite"] = true;



$tdatawantedrides[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawantedrides[".isUseTimeForSearch"] = false;





$tdatawantedrides[".allSearchFields"] = array();
$tdatawantedrides[".filterFields"] = array();
$tdatawantedrides[".requiredSearchFields"] = array();

$tdatawantedrides[".allSearchFields"][] = "id";
	

$tdatawantedrides[".googleLikeFields"] = array();
$tdatawantedrides[".googleLikeFields"][] = "id";


$tdatawantedrides[".advSearchFields"] = array();
$tdatawantedrides[".advSearchFields"][] = "id";

$tdatawantedrides[".tableType"] = "list";

$tdatawantedrides[".printerPageOrientation"] = 0;
$tdatawantedrides[".nPrinterPageScale"] = 100;

$tdatawantedrides[".nPrinterSplitRecords"] = 40;

$tdatawantedrides[".nPrinterPDFSplitRecords"] = 40;



$tdatawantedrides[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatawantedrides[".pageSize"] = 20;

$tdatawantedrides[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawantedrides[".strOrderBy"] = $tstrOrderBy;

$tdatawantedrides[".orderindexes"] = array();

$tdatawantedrides[".sqlHead"] = "SELECT id";
$tdatawantedrides[".sqlFrom"] = "FROM wantedrides";
$tdatawantedrides[".sqlWhereExpr"] = "";
$tdatawantedrides[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawantedrides[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawantedrides[".arrGroupsPerPage"] = $arrGPP;

$tdatawantedrides[".highlightSearchResults"] = true;

$tableKeyswantedrides = array();
$tableKeyswantedrides[] = "id";
$tdatawantedrides[".Keys"] = $tableKeyswantedrides;

$tdatawantedrides[".listFields"] = array();
$tdatawantedrides[".listFields"][] = "id";

$tdatawantedrides[".hideMobileList"] = array();


$tdatawantedrides[".viewFields"] = array();
$tdatawantedrides[".viewFields"][] = "id";

$tdatawantedrides[".addFields"] = array();

$tdatawantedrides[".masterListFields"] = array();
$tdatawantedrides[".masterListFields"][] = "id";

$tdatawantedrides[".inlineAddFields"] = array();

$tdatawantedrides[".editFields"] = array();

$tdatawantedrides[".inlineEditFields"] = array();

$tdatawantedrides[".exportFields"] = array();
$tdatawantedrides[".exportFields"][] = "id";

$tdatawantedrides[".importFields"] = array();
$tdatawantedrides[".importFields"][] = "id";

$tdatawantedrides[".printFields"] = array();
$tdatawantedrides[".printFields"][] = "id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "wantedrides";
	$fdata["Label"] = GetFieldLabel("wantedrides","id"); 
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatawantedrides["id"] = $fdata;

	
$tables_data["wantedrides"]=&$tdatawantedrides;
$field_labels["wantedrides"] = &$fieldLabelswantedrides;
$fieldToolTips["wantedrides"] = &$fieldToolTipswantedrides;
$page_titles["wantedrides"] = &$pageTitleswantedrides;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["wantedrides"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["wantedrides"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_wantedrides()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id";
$proto0["m_strFrom"] = "FROM wantedrides";
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
	"m_strName" => "id",
	"m_strTable" => "wantedrides",
	"m_srcTableName" => "wantedrides"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "wantedrides";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto7=array();
$proto7["m_link"] = "SQLL_MAIN";
			$proto8=array();
$proto8["m_strName"] = "wantedrides";
$proto8["m_srcTableName"] = "wantedrides";
$proto8["m_columns"] = array();
$proto8["m_columns"][] = "id";
$obj = new SQLTable($proto8);

$proto7["m_table"] = $obj;
$proto7["m_sql"] = "wantedrides";
$proto7["m_alias"] = "";
$proto7["m_srcTableName"] = "wantedrides";
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto7["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto7);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="wantedrides";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_wantedrides = createSqlQuery_wantedrides();


	
	
	
$tdatawantedrides[".sqlquery"] = $queryData_wantedrides;

$tableEvents["wantedrides"] = new eventsBase;
$tdatawantedrides[".hasEvents"] = false;

?>