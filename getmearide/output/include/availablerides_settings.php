<?php
require_once(getabspath("classes/cipherer.php"));




$tdataavailablerides = array();	
	$tdataavailablerides[".truncateText"] = true;
	$tdataavailablerides[".NumberOfChars"] = 80; 
	$tdataavailablerides[".ShortName"] = "availablerides";
	$tdataavailablerides[".OwnerID"] = "";
	$tdataavailablerides[".OriginalTable"] = "availablerides";

//	field labels
$fieldLabelsavailablerides = array();
$fieldToolTipsavailablerides = array();
$pageTitlesavailablerides = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsavailablerides["English"] = array();
	$fieldToolTipsavailablerides["English"] = array();
	$pageTitlesavailablerides["English"] = array();
	$fieldLabelsavailablerides["English"]["id"] = "Id";
	$fieldToolTipsavailablerides["English"]["id"] = "";
	if (count($fieldToolTipsavailablerides["English"]))
		$tdataavailablerides[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsavailablerides[""] = array();
	$fieldToolTipsavailablerides[""] = array();
	$pageTitlesavailablerides[""] = array();
	if (count($fieldToolTipsavailablerides[""]))
		$tdataavailablerides[".isUseToolTips"] = true;
}
	
	
	$tdataavailablerides[".NCSearch"] = true;



$tdataavailablerides[".shortTableName"] = "availablerides";
$tdataavailablerides[".nSecOptions"] = 0;
$tdataavailablerides[".recsPerRowList"] = 1;
$tdataavailablerides[".recsPerRowPrint"] = 1;
$tdataavailablerides[".mainTableOwnerID"] = "";
$tdataavailablerides[".moveNext"] = 1;
$tdataavailablerides[".entityType"] = 0;

$tdataavailablerides[".strOriginalTableName"] = "availablerides";




$tdataavailablerides[".showAddInPopup"] = false;

$tdataavailablerides[".showEditInPopup"] = false;

$tdataavailablerides[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataavailablerides[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataavailablerides[".fieldsForRegister"] = array();

$tdataavailablerides[".listAjax"] = false;

	$tdataavailablerides[".audit"] = false;

	$tdataavailablerides[".locking"] = false;

$tdataavailablerides[".edit"] = true;
$tdataavailablerides[".afterEditAction"] = 1;
$tdataavailablerides[".closePopupAfterEdit"] = 1;
$tdataavailablerides[".afterEditActionDetTable"] = "";

$tdataavailablerides[".add"] = true;
$tdataavailablerides[".afterAddAction"] = 1;
$tdataavailablerides[".closePopupAfterAdd"] = 1;
$tdataavailablerides[".afterAddActionDetTable"] = "";

$tdataavailablerides[".list"] = true;

$tdataavailablerides[".inlineEdit"] = true;
$tdataavailablerides[".inlineAdd"] = true;
$tdataavailablerides[".view"] = true;

$tdataavailablerides[".import"] = true;

$tdataavailablerides[".exportTo"] = true;

$tdataavailablerides[".printFriendly"] = true;

$tdataavailablerides[".delete"] = true;

$tdataavailablerides[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataavailablerides[".searchSaving"] = false;
//

$tdataavailablerides[".showSearchPanel"] = true;
		$tdataavailablerides[".flexibleSearch"] = true;		

if (isMobile())
	$tdataavailablerides[".isUseAjaxSuggest"] = false;
else 
	$tdataavailablerides[".isUseAjaxSuggest"] = true;

$tdataavailablerides[".rowHighlite"] = true;



$tdataavailablerides[".addPageEvents"] = false;

// use timepicker for search panel
$tdataavailablerides[".isUseTimeForSearch"] = false;





$tdataavailablerides[".allSearchFields"] = array();
$tdataavailablerides[".filterFields"] = array();
$tdataavailablerides[".requiredSearchFields"] = array();

$tdataavailablerides[".allSearchFields"][] = "id";
	

$tdataavailablerides[".googleLikeFields"] = array();
$tdataavailablerides[".googleLikeFields"][] = "id";


$tdataavailablerides[".advSearchFields"] = array();
$tdataavailablerides[".advSearchFields"][] = "id";

$tdataavailablerides[".tableType"] = "list";

$tdataavailablerides[".printerPageOrientation"] = 0;
$tdataavailablerides[".nPrinterPageScale"] = 100;

$tdataavailablerides[".nPrinterSplitRecords"] = 40;

$tdataavailablerides[".nPrinterPDFSplitRecords"] = 40;



$tdataavailablerides[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataavailablerides[".pageSize"] = 20;

$tdataavailablerides[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataavailablerides[".strOrderBy"] = $tstrOrderBy;

$tdataavailablerides[".orderindexes"] = array();

$tdataavailablerides[".sqlHead"] = "SELECT id";
$tdataavailablerides[".sqlFrom"] = "FROM availablerides";
$tdataavailablerides[".sqlWhereExpr"] = "";
$tdataavailablerides[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataavailablerides[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataavailablerides[".arrGroupsPerPage"] = $arrGPP;

$tdataavailablerides[".highlightSearchResults"] = true;

$tableKeysavailablerides = array();
$tableKeysavailablerides[] = "id";
$tdataavailablerides[".Keys"] = $tableKeysavailablerides;

$tdataavailablerides[".listFields"] = array();
$tdataavailablerides[".listFields"][] = "id";

$tdataavailablerides[".hideMobileList"] = array();


$tdataavailablerides[".viewFields"] = array();
$tdataavailablerides[".viewFields"][] = "id";

$tdataavailablerides[".addFields"] = array();

$tdataavailablerides[".masterListFields"] = array();
$tdataavailablerides[".masterListFields"][] = "id";

$tdataavailablerides[".inlineAddFields"] = array();

$tdataavailablerides[".editFields"] = array();

$tdataavailablerides[".inlineEditFields"] = array();

$tdataavailablerides[".exportFields"] = array();
$tdataavailablerides[".exportFields"][] = "id";

$tdataavailablerides[".importFields"] = array();
$tdataavailablerides[".importFields"][] = "id";

$tdataavailablerides[".printFields"] = array();
$tdataavailablerides[".printFields"][] = "id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "availablerides";
	$fdata["Label"] = GetFieldLabel("availablerides","id"); 
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

	

	
	$tdataavailablerides["id"] = $fdata;

	
$tables_data["availablerides"]=&$tdataavailablerides;
$field_labels["availablerides"] = &$fieldLabelsavailablerides;
$fieldToolTips["availablerides"] = &$fieldToolTipsavailablerides;
$page_titles["availablerides"] = &$pageTitlesavailablerides;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["availablerides"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["availablerides"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_availablerides()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id";
$proto0["m_strFrom"] = "FROM availablerides";
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
	"m_strTable" => "availablerides",
	"m_srcTableName" => "availablerides"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "availablerides";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto7=array();
$proto7["m_link"] = "SQLL_MAIN";
			$proto8=array();
$proto8["m_strName"] = "availablerides";
$proto8["m_srcTableName"] = "availablerides";
$proto8["m_columns"] = array();
$proto8["m_columns"][] = "id";
$obj = new SQLTable($proto8);

$proto7["m_table"] = $obj;
$proto7["m_sql"] = "availablerides";
$proto7["m_alias"] = "";
$proto7["m_srcTableName"] = "availablerides";
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
$proto0["m_srcTableName"]="availablerides";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_availablerides = createSqlQuery_availablerides();


	
	
	
$tdataavailablerides[".sqlquery"] = $queryData_availablerides;

$tableEvents["availablerides"] = new eventsBase;
$tdataavailablerides[".hasEvents"] = false;

?>