<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevcategories = array();	
	$tdataevcategories[".truncateText"] = true;
	$tdataevcategories[".NumberOfChars"] = 80; 
	$tdataevcategories[".ShortName"] = "evcategories";
	$tdataevcategories[".OwnerID"] = "";
	$tdataevcategories[".OriginalTable"] = "evcategories";

//	field labels
$fieldLabelsevcategories = array();
$fieldToolTipsevcategories = array();
$pageTitlesevcategories = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevcategories["English"] = array();
	$fieldToolTipsevcategories["English"] = array();
	$pageTitlesevcategories["English"] = array();
	$fieldLabelsevcategories["English"]["Category"] = "Category";
	$fieldToolTipsevcategories["English"]["Category"] = "";
	if (count($fieldToolTipsevcategories["English"]))
		$tdataevcategories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevcategories[""] = array();
	$fieldToolTipsevcategories[""] = array();
	$pageTitlesevcategories[""] = array();
	if (count($fieldToolTipsevcategories[""]))
		$tdataevcategories[".isUseToolTips"] = true;
}
	
	



$tdataevcategories[".shortTableName"] = "evcategories";
$tdataevcategories[".nSecOptions"] = 0;
$tdataevcategories[".recsPerRowList"] = 1;
$tdataevcategories[".recsPerRowPrint"] = 1;
$tdataevcategories[".mainTableOwnerID"] = "";
$tdataevcategories[".moveNext"] = 1;
$tdataevcategories[".entityType"] = 0;

$tdataevcategories[".strOriginalTableName"] = "evcategories";




$tdataevcategories[".showAddInPopup"] = true;

$tdataevcategories[".showEditInPopup"] = true;

$tdataevcategories[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdataevcategories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevcategories[".fieldsForRegister"] = array();

$tdataevcategories[".listAjax"] = false;

	$tdataevcategories[".audit"] = false;

	$tdataevcategories[".locking"] = false;

$tdataevcategories[".edit"] = true;
$tdataevcategories[".afterEditAction"] = 1;
$tdataevcategories[".closePopupAfterEdit"] = 1;
$tdataevcategories[".afterEditActionDetTable"] = "";

$tdataevcategories[".add"] = true;
$tdataevcategories[".afterAddAction"] = 1;
$tdataevcategories[".closePopupAfterAdd"] = 1;
$tdataevcategories[".afterAddActionDetTable"] = "";

$tdataevcategories[".list"] = true;

$tdataevcategories[".inlineEdit"] = true;
$tdataevcategories[".inlineAdd"] = true;
$tdataevcategories[".view"] = true;


$tdataevcategories[".exportTo"] = true;

$tdataevcategories[".printFriendly"] = true;

$tdataevcategories[".delete"] = true;

$tdataevcategories[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataevcategories[".searchSaving"] = false;
//

$tdataevcategories[".showSearchPanel"] = true;
		$tdataevcategories[".flexibleSearch"] = true;		

if (isMobile())
	$tdataevcategories[".isUseAjaxSuggest"] = false;
else 
	$tdataevcategories[".isUseAjaxSuggest"] = true;

$tdataevcategories[".rowHighlite"] = true;



$tdataevcategories[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevcategories[".isUseTimeForSearch"] = false;





$tdataevcategories[".allSearchFields"] = array();
$tdataevcategories[".filterFields"] = array();
$tdataevcategories[".requiredSearchFields"] = array();

$tdataevcategories[".allSearchFields"][] = "Category";
	

$tdataevcategories[".googleLikeFields"] = array();
$tdataevcategories[".googleLikeFields"][] = "Category";


$tdataevcategories[".advSearchFields"] = array();
$tdataevcategories[".advSearchFields"][] = "Category";

$tdataevcategories[".tableType"] = "list";

$tdataevcategories[".printerPageOrientation"] = 0;
$tdataevcategories[".nPrinterPageScale"] = 100;

$tdataevcategories[".nPrinterSplitRecords"] = 40;

$tdataevcategories[".nPrinterPDFSplitRecords"] = 40;



$tdataevcategories[".geocodingEnabled"] = false;




	



$tdataevcategories[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataevcategories[".pageSize"] = 20;

$tdataevcategories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevcategories[".strOrderBy"] = $tstrOrderBy;

$tdataevcategories[".orderindexes"] = array();

$tdataevcategories[".sqlHead"] = "select Category";
$tdataevcategories[".sqlFrom"] = "FROM evcategories";
$tdataevcategories[".sqlWhereExpr"] = "";
$tdataevcategories[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevcategories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevcategories[".arrGroupsPerPage"] = $arrGPP;


$tableKeysevcategories = array();
$tableKeysevcategories[] = "Category";
$tdataevcategories[".Keys"] = $tableKeysevcategories;

$tdataevcategories[".listFields"] = array();
$tdataevcategories[".listFields"][] = "Category";

$tdataevcategories[".hideMobileList"] = array();


$tdataevcategories[".viewFields"] = array();
$tdataevcategories[".viewFields"][] = "Category";

$tdataevcategories[".addFields"] = array();
$tdataevcategories[".addFields"][] = "Category";

$tdataevcategories[".masterListFields"] = array();

$tdataevcategories[".inlineAddFields"] = array();
$tdataevcategories[".inlineAddFields"][] = "Category";

$tdataevcategories[".editFields"] = array();
$tdataevcategories[".editFields"][] = "Category";

$tdataevcategories[".inlineEditFields"] = array();
$tdataevcategories[".inlineEditFields"][] = "Category";

$tdataevcategories[".exportFields"] = array();
$tdataevcategories[".exportFields"][] = "Category";

$tdataevcategories[".importFields"] = array();
$tdataevcategories[".importFields"][] = "Category";

$tdataevcategories[".printFields"] = array();
$tdataevcategories[".printFields"][] = "Category";

//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "evcategories";
	$fdata["Label"] = GetFieldLabel("evcategories","Category"); 
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

	

	
	$tdataevcategories["Category"] = $fdata;

	
$tables_data["evcategories"]=&$tdataevcategories;
$field_labels["evcategories"] = &$fieldLabelsevcategories;
$fieldToolTips["evcategories"] = &$fieldToolTipsevcategories;
$page_titles["evcategories"] = &$pageTitlesevcategories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evcategories"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["evcategories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evcategories()
{
$proto3=array();
$proto3["m_strHead"] = "select";
$proto3["m_strFieldList"] = "Category";
$proto3["m_strFrom"] = "FROM evcategories";
$proto3["m_strWhere"] = "";
$proto3["m_strOrderBy"] = "";
$proto3["m_strTail"] = "";
			$proto3["cipherer"] = null;
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

$proto3["m_where"] = $obj;
$proto6=array();
$proto6["m_sql"] = "";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

$proto3["m_having"] = $obj;
$proto3["m_fieldlist"] = array();
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "evcategories",
	"m_srcTableName" => "evcategories"
));

$proto8["m_sql"] = "Category";
$proto8["m_srcTableName"] = "evcategories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "evcategories";
$proto11["m_srcTableName"] = "evcategories";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Category";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "evcategories";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "evcategories";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="evcategories";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_evcategories = createSqlQuery_evcategories();


	
	
	
$tdataevcategories[".sqlquery"] = $queryData_evcategories;

$tableEvents["evcategories"] = new eventsBase;
$tdataevcategories[".hasEvents"] = false;

?>