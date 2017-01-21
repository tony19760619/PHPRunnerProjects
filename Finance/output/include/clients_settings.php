<?php
require_once(getabspath("classes/cipherer.php"));




$tdataclients = array();	
	$tdataclients[".truncateText"] = true;
	$tdataclients[".NumberOfChars"] = 80; 
	$tdataclients[".ShortName"] = "clients";
	$tdataclients[".OwnerID"] = "";
	$tdataclients[".OriginalTable"] = "clients";

//	field labels
$fieldLabelsclients = array();
$fieldToolTipsclients = array();
$pageTitlesclients = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsclients["English"] = array();
	$fieldToolTipsclients["English"] = array();
	$pageTitlesclients["English"] = array();
	$fieldLabelsclients["English"]["id"] = "Id";
	$fieldToolTipsclients["English"]["id"] = "";
	if (count($fieldToolTipsclients["English"]))
		$tdataclients[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsclients[""] = array();
	$fieldToolTipsclients[""] = array();
	$pageTitlesclients[""] = array();
	if (count($fieldToolTipsclients[""]))
		$tdataclients[".isUseToolTips"] = true;
}
	
	
	$tdataclients[".NCSearch"] = true;



$tdataclients[".shortTableName"] = "clients";
$tdataclients[".nSecOptions"] = 0;
$tdataclients[".recsPerRowList"] = 1;
$tdataclients[".recsPerRowPrint"] = 1;
$tdataclients[".mainTableOwnerID"] = "";
$tdataclients[".moveNext"] = 1;
$tdataclients[".entityType"] = 0;

$tdataclients[".strOriginalTableName"] = "clients";




$tdataclients[".showAddInPopup"] = false;

$tdataclients[".showEditInPopup"] = false;

$tdataclients[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataclients[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataclients[".fieldsForRegister"] = array();

$tdataclients[".listAjax"] = false;

	$tdataclients[".audit"] = false;

	$tdataclients[".locking"] = false;

$tdataclients[".edit"] = true;
$tdataclients[".afterEditAction"] = 1;
$tdataclients[".closePopupAfterEdit"] = 1;
$tdataclients[".afterEditActionDetTable"] = "";

$tdataclients[".add"] = true;
$tdataclients[".afterAddAction"] = 1;
$tdataclients[".closePopupAfterAdd"] = 1;
$tdataclients[".afterAddActionDetTable"] = "";

$tdataclients[".list"] = true;

$tdataclients[".inlineEdit"] = true;
$tdataclients[".inlineAdd"] = true;
$tdataclients[".view"] = true;

$tdataclients[".import"] = true;

$tdataclients[".exportTo"] = true;

$tdataclients[".printFriendly"] = true;

$tdataclients[".delete"] = true;

$tdataclients[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataclients[".searchSaving"] = false;
//

$tdataclients[".showSearchPanel"] = true;
		$tdataclients[".flexibleSearch"] = true;		

if (isMobile())
	$tdataclients[".isUseAjaxSuggest"] = false;
else 
	$tdataclients[".isUseAjaxSuggest"] = true;

$tdataclients[".rowHighlite"] = true;



$tdataclients[".addPageEvents"] = false;

// use timepicker for search panel
$tdataclients[".isUseTimeForSearch"] = false;





$tdataclients[".allSearchFields"] = array();
$tdataclients[".filterFields"] = array();
$tdataclients[".requiredSearchFields"] = array();

$tdataclients[".allSearchFields"][] = "id";
	

$tdataclients[".googleLikeFields"] = array();
$tdataclients[".googleLikeFields"][] = "id";


$tdataclients[".advSearchFields"] = array();
$tdataclients[".advSearchFields"][] = "id";

$tdataclients[".tableType"] = "list";

$tdataclients[".printerPageOrientation"] = 0;
$tdataclients[".nPrinterPageScale"] = 100;

$tdataclients[".nPrinterSplitRecords"] = 40;

$tdataclients[".nPrinterPDFSplitRecords"] = 40;



$tdataclients[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdataclients[".pageSize"] = 20;

$tdataclients[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataclients[".strOrderBy"] = $tstrOrderBy;

$tdataclients[".orderindexes"] = array();

$tdataclients[".sqlHead"] = "SELECT id";
$tdataclients[".sqlFrom"] = "FROM clients";
$tdataclients[".sqlWhereExpr"] = "";
$tdataclients[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataclients[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataclients[".arrGroupsPerPage"] = $arrGPP;

$tdataclients[".highlightSearchResults"] = true;

$tableKeysclients = array();
$tableKeysclients[] = "id";
$tdataclients[".Keys"] = $tableKeysclients;

$tdataclients[".listFields"] = array();
$tdataclients[".listFields"][] = "id";

$tdataclients[".hideMobileList"] = array();


$tdataclients[".viewFields"] = array();
$tdataclients[".viewFields"][] = "id";

$tdataclients[".addFields"] = array();

$tdataclients[".masterListFields"] = array();
$tdataclients[".masterListFields"][] = "id";

$tdataclients[".inlineAddFields"] = array();

$tdataclients[".editFields"] = array();

$tdataclients[".inlineEditFields"] = array();

$tdataclients[".exportFields"] = array();
$tdataclients[".exportFields"][] = "id";

$tdataclients[".importFields"] = array();
$tdataclients[".importFields"][] = "id";

$tdataclients[".printFields"] = array();
$tdataclients[".printFields"][] = "id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "clients";
	$fdata["Label"] = GetFieldLabel("clients","id"); 
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

	

	
	$tdataclients["id"] = $fdata;

	
$tables_data["clients"]=&$tdataclients;
$field_labels["clients"] = &$fieldLabelsclients;
$fieldToolTips["clients"] = &$fieldToolTipsclients;
$page_titles["clients"] = &$pageTitlesclients;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["clients"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["clients"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_clients()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id";
$proto0["m_strFrom"] = "FROM clients";
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
	"m_strTable" => "clients",
	"m_srcTableName" => "clients"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "clients";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto7=array();
$proto7["m_link"] = "SQLL_MAIN";
			$proto8=array();
$proto8["m_strName"] = "clients";
$proto8["m_srcTableName"] = "clients";
$proto8["m_columns"] = array();
$proto8["m_columns"][] = "id";
$obj = new SQLTable($proto8);

$proto7["m_table"] = $obj;
$proto7["m_sql"] = "clients";
$proto7["m_alias"] = "";
$proto7["m_srcTableName"] = "clients";
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
$proto0["m_srcTableName"]="clients";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_clients = createSqlQuery_clients();


	
	
	
$tdataclients[".sqlquery"] = $queryData_clients;

$tableEvents["clients"] = new eventsBase;
$tdataclients[".hasEvents"] = false;

?>