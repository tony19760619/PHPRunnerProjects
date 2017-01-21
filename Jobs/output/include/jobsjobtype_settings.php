<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobsjobtype = array();	
	$tdatajobsjobtype[".truncateText"] = true;
	$tdatajobsjobtype[".NumberOfChars"] = 80; 
	$tdatajobsjobtype[".ShortName"] = "jobsjobtype";
	$tdatajobsjobtype[".OwnerID"] = "";
	$tdatajobsjobtype[".OriginalTable"] = "jobsjobtype";

//	field labels
$fieldLabelsjobsjobtype = array();
$fieldToolTipsjobsjobtype = array();
$pageTitlesjobsjobtype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobsjobtype["English"] = array();
	$fieldToolTipsjobsjobtype["English"] = array();
	$pageTitlesjobsjobtype["English"] = array();
	$fieldLabelsjobsjobtype["English"]["ID"] = "Id";
	$fieldToolTipsjobsjobtype["English"]["ID"] = "";
	$fieldLabelsjobsjobtype["English"]["sType"] = "Type";
	$fieldToolTipsjobsjobtype["English"]["sType"] = "";
	if (count($fieldToolTipsjobsjobtype["English"]))
		$tdatajobsjobtype[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobsjobtype[""] = array();
	$fieldToolTipsjobsjobtype[""] = array();
	$pageTitlesjobsjobtype[""] = array();
	if (count($fieldToolTipsjobsjobtype[""]))
		$tdatajobsjobtype[".isUseToolTips"] = true;
}
	
	
	$tdatajobsjobtype[".NCSearch"] = true;



$tdatajobsjobtype[".shortTableName"] = "jobsjobtype";
$tdatajobsjobtype[".nSecOptions"] = 0;
$tdatajobsjobtype[".recsPerRowList"] = 1;
$tdatajobsjobtype[".mainTableOwnerID"] = "";
$tdatajobsjobtype[".moveNext"] = 1;
$tdatajobsjobtype[".nType"] = 0;

$tdatajobsjobtype[".strOriginalTableName"] = "jobsjobtype";




$tdatajobsjobtype[".showAddInPopup"] = true;

$tdatajobsjobtype[".showEditInPopup"] = true;

$tdatajobsjobtype[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatajobsjobtype[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobsjobtype[".fieldsForRegister"] = array();
	
$tdatajobsjobtype[".listAjax"] = false;

	$tdatajobsjobtype[".audit"] = false;

	$tdatajobsjobtype[".locking"] = false;

$tdatajobsjobtype[".edit"] = true;

$tdatajobsjobtype[".list"] = true;

$tdatajobsjobtype[".inlineEdit"] = true;
$tdatajobsjobtype[".inlineAdd"] = true;
$tdatajobsjobtype[".view"] = true;

$tdatajobsjobtype[".import"] = true;

$tdatajobsjobtype[".exportTo"] = true;

$tdatajobsjobtype[".printFriendly"] = true;

$tdatajobsjobtype[".delete"] = true;

$tdatajobsjobtype[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobsjobtype[".searchSaving"] = false;
//

$tdatajobsjobtype[".showSearchPanel"] = true;
		$tdatajobsjobtype[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobsjobtype[".isUseAjaxSuggest"] = false;
else 
	$tdatajobsjobtype[".isUseAjaxSuggest"] = true;

$tdatajobsjobtype[".rowHighlite"] = true;



$tdatajobsjobtype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobsjobtype[".isUseTimeForSearch"] = false;





$tdatajobsjobtype[".allSearchFields"] = array();
$tdatajobsjobtype[".filterFields"] = array();
$tdatajobsjobtype[".requiredSearchFields"] = array();

$tdatajobsjobtype[".allSearchFields"][] = "sType";
	

$tdatajobsjobtype[".googleLikeFields"] = array();
$tdatajobsjobtype[".googleLikeFields"][] = "ID";
$tdatajobsjobtype[".googleLikeFields"][] = "sType";


$tdatajobsjobtype[".advSearchFields"] = array();
$tdatajobsjobtype[".advSearchFields"][] = "sType";

$tdatajobsjobtype[".tableType"] = "list";

$tdatajobsjobtype[".printerPageOrientation"] = 0;
$tdatajobsjobtype[".nPrinterPageScale"] = 100;

$tdatajobsjobtype[".nPrinterSplitRecords"] = 40;

$tdatajobsjobtype[".nPrinterPDFSplitRecords"] = 40;





	



$tdatajobsjobtype[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatajobsjobtype[".pageSize"] = 20;

$tdatajobsjobtype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobsjobtype[".strOrderBy"] = $tstrOrderBy;

$tdatajobsjobtype[".orderindexes"] = array();

$tdatajobsjobtype[".sqlHead"] = "SELECT ID,  sType";
$tdatajobsjobtype[".sqlFrom"] = "FROM jobsjobtype";
$tdatajobsjobtype[".sqlWhereExpr"] = "";
$tdatajobsjobtype[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobsjobtype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobsjobtype[".arrGroupsPerPage"] = $arrGPP;


$tableKeysjobsjobtype = array();
$tableKeysjobsjobtype[] = "ID";
$tdatajobsjobtype[".Keys"] = $tableKeysjobsjobtype;

$tdatajobsjobtype[".listFields"] = array();
$tdatajobsjobtype[".listFields"][] = "sType";

$tdatajobsjobtype[".hideMobileList"] = array();


$tdatajobsjobtype[".viewFields"] = array();
$tdatajobsjobtype[".viewFields"][] = "sType";

$tdatajobsjobtype[".addFields"] = array();
$tdatajobsjobtype[".addFields"][] = "sType";

$tdatajobsjobtype[".inlineAddFields"] = array();
$tdatajobsjobtype[".inlineAddFields"][] = "sType";

$tdatajobsjobtype[".editFields"] = array();
$tdatajobsjobtype[".editFields"][] = "sType";

$tdatajobsjobtype[".inlineEditFields"] = array();
$tdatajobsjobtype[".inlineEditFields"][] = "sType";

$tdatajobsjobtype[".exportFields"] = array();
$tdatajobsjobtype[".exportFields"][] = "sType";

$tdatajobsjobtype[".importFields"] = array();
$tdatajobsjobtype[".importFields"][] = "ID";
$tdatajobsjobtype[".importFields"][] = "sType";

$tdatajobsjobtype[".printFields"] = array();
$tdatajobsjobtype[".printFields"][] = "sType";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "jobsjobtype";
	$fdata["Label"] = GetFieldLabel("jobsjobtype","ID"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";
	
		
		
				
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
	
	
	
	

	

	
	$tdatajobsjobtype["ID"] = $fdata;
//	sType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sType";
	$fdata["GoodName"] = "sType";
	$fdata["ownerTable"] = "jobsjobtype";
	$fdata["Label"] = GetFieldLabel("jobsjobtype","sType"); 
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
	
		$fdata["strField"] = "sType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sType";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
		
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

	

	
	$tdatajobsjobtype["sType"] = $fdata;

	
$tables_data["jobsjobtype"]=&$tdatajobsjobtype;
$field_labels["jobsjobtype"] = &$fieldLabelsjobsjobtype;
$fieldToolTips["jobsjobtype"] = &$fieldToolTipsjobsjobtype;
$page_titles["jobsjobtype"] = &$pageTitlesjobsjobtype;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobsjobtype"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jobsjobtype"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobsjobtype()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,  sType";
$proto3["m_strFrom"] = "FROM jobsjobtype";
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
	"m_strName" => "ID",
	"m_strTable" => "jobsjobtype",
	"m_srcTableName" => "jobsjobtype"
));

$proto8["m_sql"] = "ID";
$proto8["m_srcTableName"] = "jobsjobtype";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sType",
	"m_strTable" => "jobsjobtype",
	"m_srcTableName" => "jobsjobtype"
));

$proto10["m_sql"] = "sType";
$proto10["m_srcTableName"] = "jobsjobtype";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "jobsjobtype";
$proto13["m_srcTableName"] = "jobsjobtype";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "sType";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "jobsjobtype";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "jobsjobtype";
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

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="jobsjobtype";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_jobsjobtype = createSqlQuery_jobsjobtype();


	
		
	
$tdatajobsjobtype[".sqlquery"] = $queryData_jobsjobtype;

$tableEvents["jobsjobtype"] = new eventsBase;
$tdatajobsjobtype[".hasEvents"] = false;

?>