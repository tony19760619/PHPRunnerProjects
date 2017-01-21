<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobsstate = array();	
	$tdatajobsstate[".truncateText"] = true;
	$tdatajobsstate[".NumberOfChars"] = 80; 
	$tdatajobsstate[".ShortName"] = "jobsstate";
	$tdatajobsstate[".OwnerID"] = "";
	$tdatajobsstate[".OriginalTable"] = "jobsstate";

//	field labels
$fieldLabelsjobsstate = array();
$fieldToolTipsjobsstate = array();
$pageTitlesjobsstate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobsstate["English"] = array();
	$fieldToolTipsjobsstate["English"] = array();
	$pageTitlesjobsstate["English"] = array();
	$fieldLabelsjobsstate["English"]["ID"] = "ID";
	$fieldToolTipsjobsstate["English"]["ID"] = "";
	$fieldLabelsjobsstate["English"]["state"] = "State";
	$fieldToolTipsjobsstate["English"]["state"] = "";
	if (count($fieldToolTipsjobsstate["English"]))
		$tdatajobsstate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobsstate[""] = array();
	$fieldToolTipsjobsstate[""] = array();
	$pageTitlesjobsstate[""] = array();
	if (count($fieldToolTipsjobsstate[""]))
		$tdatajobsstate[".isUseToolTips"] = true;
}
	
	
	$tdatajobsstate[".NCSearch"] = true;



$tdatajobsstate[".shortTableName"] = "jobsstate";
$tdatajobsstate[".nSecOptions"] = 0;
$tdatajobsstate[".recsPerRowList"] = 1;
$tdatajobsstate[".mainTableOwnerID"] = "";
$tdatajobsstate[".moveNext"] = 1;
$tdatajobsstate[".nType"] = 0;

$tdatajobsstate[".strOriginalTableName"] = "jobsstate";




$tdatajobsstate[".showAddInPopup"] = true;

$tdatajobsstate[".showEditInPopup"] = true;

$tdatajobsstate[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatajobsstate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobsstate[".fieldsForRegister"] = array();
	
$tdatajobsstate[".listAjax"] = false;

	$tdatajobsstate[".audit"] = false;

	$tdatajobsstate[".locking"] = false;

$tdatajobsstate[".edit"] = true;

$tdatajobsstate[".list"] = true;

$tdatajobsstate[".inlineEdit"] = true;
$tdatajobsstate[".inlineAdd"] = true;
$tdatajobsstate[".view"] = true;

$tdatajobsstate[".import"] = true;

$tdatajobsstate[".exportTo"] = true;

$tdatajobsstate[".printFriendly"] = true;

$tdatajobsstate[".delete"] = true;

$tdatajobsstate[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobsstate[".searchSaving"] = false;
//

$tdatajobsstate[".showSearchPanel"] = true;
		$tdatajobsstate[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobsstate[".isUseAjaxSuggest"] = false;
else 
	$tdatajobsstate[".isUseAjaxSuggest"] = true;

$tdatajobsstate[".rowHighlite"] = true;



$tdatajobsstate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobsstate[".isUseTimeForSearch"] = false;





$tdatajobsstate[".allSearchFields"] = array();
$tdatajobsstate[".filterFields"] = array();
$tdatajobsstate[".requiredSearchFields"] = array();

$tdatajobsstate[".allSearchFields"][] = "state";
	

$tdatajobsstate[".googleLikeFields"] = array();
$tdatajobsstate[".googleLikeFields"][] = "ID";
$tdatajobsstate[".googleLikeFields"][] = "state";


$tdatajobsstate[".advSearchFields"] = array();
$tdatajobsstate[".advSearchFields"][] = "state";

$tdatajobsstate[".tableType"] = "list";

$tdatajobsstate[".printerPageOrientation"] = 0;
$tdatajobsstate[".nPrinterPageScale"] = 100;

$tdatajobsstate[".nPrinterSplitRecords"] = 40;

$tdatajobsstate[".nPrinterPDFSplitRecords"] = 40;





	



$tdatajobsstate[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatajobsstate[".pageSize"] = 20;

$tdatajobsstate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobsstate[".strOrderBy"] = $tstrOrderBy;

$tdatajobsstate[".orderindexes"] = array();

$tdatajobsstate[".sqlHead"] = "SELECT ID,  `state`";
$tdatajobsstate[".sqlFrom"] = "FROM jobsstate";
$tdatajobsstate[".sqlWhereExpr"] = "";
$tdatajobsstate[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobsstate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobsstate[".arrGroupsPerPage"] = $arrGPP;


$tableKeysjobsstate = array();
$tableKeysjobsstate[] = "ID";
$tdatajobsstate[".Keys"] = $tableKeysjobsstate;

$tdatajobsstate[".listFields"] = array();
$tdatajobsstate[".listFields"][] = "state";

$tdatajobsstate[".hideMobileList"] = array();


$tdatajobsstate[".viewFields"] = array();
$tdatajobsstate[".viewFields"][] = "state";

$tdatajobsstate[".addFields"] = array();
$tdatajobsstate[".addFields"][] = "state";

$tdatajobsstate[".inlineAddFields"] = array();
$tdatajobsstate[".inlineAddFields"][] = "state";

$tdatajobsstate[".editFields"] = array();
$tdatajobsstate[".editFields"][] = "state";

$tdatajobsstate[".inlineEditFields"] = array();
$tdatajobsstate[".inlineEditFields"][] = "state";

$tdatajobsstate[".exportFields"] = array();
$tdatajobsstate[".exportFields"][] = "state";

$tdatajobsstate[".importFields"] = array();
$tdatajobsstate[".importFields"][] = "ID";
$tdatajobsstate[".importFields"][] = "state";

$tdatajobsstate[".printFields"] = array();
$tdatajobsstate[".printFields"][] = "state";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "jobsstate";
	$fdata["Label"] = GetFieldLabel("jobsstate","ID"); 
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
	
	
	
	

	

	
	$tdatajobsstate["ID"] = $fdata;
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "jobsstate";
	$fdata["Label"] = GetFieldLabel("jobsstate","state"); 
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
	
		$fdata["strField"] = "state"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state`";
	
		
		
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
			$edata["EditParams"].= " maxlength=10";
	
		
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

	

	
	$tdatajobsstate["state"] = $fdata;

	
$tables_data["jobsstate"]=&$tdatajobsstate;
$field_labels["jobsstate"] = &$fieldLabelsjobsstate;
$fieldToolTips["jobsstate"] = &$fieldToolTipsjobsstate;
$page_titles["jobsstate"] = &$pageTitlesjobsstate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobsstate"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jobsstate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobsstate()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "ID,  `state`";
$proto3["m_strFrom"] = "FROM jobsstate";
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
	"m_strTable" => "jobsstate",
	"m_srcTableName" => "jobsstate"
));

$proto8["m_sql"] = "ID";
$proto8["m_srcTableName"] = "jobsstate";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "jobsstate",
	"m_srcTableName" => "jobsstate"
));

$proto10["m_sql"] = "`state`";
$proto10["m_srcTableName"] = "jobsstate";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "jobsstate";
$proto13["m_srcTableName"] = "jobsstate";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "state";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "jobsstate";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "jobsstate";
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
$proto3["m_srcTableName"]="jobsstate";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_jobsstate = createSqlQuery_jobsstate();


	
		
	
$tdatajobsstate[".sqlquery"] = $queryData_jobsstate;

$tableEvents["jobsstate"] = new eventsBase;
$tdatajobsstate[".hasEvents"] = false;

?>