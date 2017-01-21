<?php
require_once(getabspath("classes/cipherer.php"));




$tdataRegisterPage_customer = array();	
	$tdataRegisterPage_customer[".truncateText"] = true;
	$tdataRegisterPage_customer[".NumberOfChars"] = 80; 
	$tdataRegisterPage_customer[".ShortName"] = "RegisterPage_customer";
	$tdataRegisterPage_customer[".OwnerID"] = "";
	$tdataRegisterPage_customer[".OriginalTable"] = "customer";

//	field labels
$fieldLabelsRegisterPage_customer = array();
$fieldToolTipsRegisterPage_customer = array();
$pageTitlesRegisterPage_customer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsRegisterPage_customer["English"] = array();
	$fieldToolTipsRegisterPage_customer["English"] = array();
	$pageTitlesRegisterPage_customer["English"] = array();
	$fieldLabelsRegisterPage_customer["English"]["Id"] = "Id";
	$fieldToolTipsRegisterPage_customer["English"]["Id"] = "";
	$fieldLabelsRegisterPage_customer["English"]["Name"] = "Name";
	$fieldToolTipsRegisterPage_customer["English"]["Name"] = "";
	if (count($fieldToolTipsRegisterPage_customer["English"]))
		$tdataRegisterPage_customer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsRegisterPage_customer[""] = array();
	$fieldToolTipsRegisterPage_customer[""] = array();
	$pageTitlesRegisterPage_customer[""] = array();
	if (count($fieldToolTipsRegisterPage_customer[""]))
		$tdataRegisterPage_customer[".isUseToolTips"] = true;
}
	
	
	$tdataRegisterPage_customer[".NCSearch"] = true;



$tdataRegisterPage_customer[".shortTableName"] = "RegisterPage_customer";
$tdataRegisterPage_customer[".nSecOptions"] = 0;
$tdataRegisterPage_customer[".recsPerRowList"] = 1;
$tdataRegisterPage_customer[".mainTableOwnerID"] = "";
$tdataRegisterPage_customer[".moveNext"] = 1;
$tdataRegisterPage_customer[".nType"] = 1;

$tdataRegisterPage_customer[".strOriginalTableName"] = "customer";

	


$tdataRegisterPage_customer[".showAddInPopup"] = false;

$tdataRegisterPage_customer[".showEditInPopup"] = false;

$tdataRegisterPage_customer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataRegisterPage_customer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataRegisterPage_customer[".fieldsForRegister"] = array();
	
$tdataRegisterPage_customer[".listAjax"] = false;

	$tdataRegisterPage_customer[".audit"] = false;

	$tdataRegisterPage_customer[".locking"] = false;

$tdataRegisterPage_customer[".edit"] = true;
$tdataRegisterPage_customer[".inlineEdit"] = true;
$tdataRegisterPage_customer[".inlineAdd"] = true;
$tdataRegisterPage_customer[".view"] = true;

$tdataRegisterPage_customer[".import"] = true;

$tdataRegisterPage_customer[".exportTo"] = true;

$tdataRegisterPage_customer[".printFriendly"] = true;

$tdataRegisterPage_customer[".delete"] = true;

$tdataRegisterPage_customer[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataRegisterPage_customer[".searchSaving"] = false;
//

$tdataRegisterPage_customer[".showSearchPanel"] = true;
		$tdataRegisterPage_customer[".flexibleSearch"] = true;		

if (isMobile())
	$tdataRegisterPage_customer[".isUseAjaxSuggest"] = false;
else 
	$tdataRegisterPage_customer[".isUseAjaxSuggest"] = true;

$tdataRegisterPage_customer[".rowHighlite"] = true;



$tdataRegisterPage_customer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataRegisterPage_customer[".isUseTimeForSearch"] = false;





$tdataRegisterPage_customer[".allSearchFields"] = array();
$tdataRegisterPage_customer[".filterFields"] = array();
$tdataRegisterPage_customer[".requiredSearchFields"] = array();

$tdataRegisterPage_customer[".allSearchFields"][] = "Id";
		$tdataRegisterPage_customer[".allSearchFields"][] = "Name";
		
$tdataRegisterPage_customer[".googleLikeFields"] = array();
$tdataRegisterPage_customer[".googleLikeFields"][] = "Id";
$tdataRegisterPage_customer[".googleLikeFields"][] = "Name";


$tdataRegisterPage_customer[".advSearchFields"] = array();
$tdataRegisterPage_customer[".advSearchFields"][] = "Id";
$tdataRegisterPage_customer[".advSearchFields"][] = "Name";

$tdataRegisterPage_customer[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdataRegisterPage_customer[".pageSize"] = 20;

$tdataRegisterPage_customer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataRegisterPage_customer[".strOrderBy"] = $tstrOrderBy;

$tdataRegisterPage_customer[".orderindexes"] = array();

$tdataRegisterPage_customer[".sqlHead"] = "SELECT Id,   Name";
$tdataRegisterPage_customer[".sqlFrom"] = "FROM customer";
$tdataRegisterPage_customer[".sqlWhereExpr"] = "";
$tdataRegisterPage_customer[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataRegisterPage_customer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataRegisterPage_customer[".arrGroupsPerPage"] = $arrGPP;


$tableKeysRegisterPage_customer = array();
$tableKeysRegisterPage_customer[] = "Id";
$tdataRegisterPage_customer[".Keys"] = $tableKeysRegisterPage_customer;

$tdataRegisterPage_customer[".listFields"] = array();
$tdataRegisterPage_customer[".listFields"][] = "Id";
$tdataRegisterPage_customer[".listFields"][] = "Name";

$tdataRegisterPage_customer[".hideMobileList"] = array();


$tdataRegisterPage_customer[".viewFields"] = array();
$tdataRegisterPage_customer[".viewFields"][] = "Id";
$tdataRegisterPage_customer[".viewFields"][] = "Name";

$tdataRegisterPage_customer[".addFields"] = array();
$tdataRegisterPage_customer[".addFields"][] = "Name";

$tdataRegisterPage_customer[".inlineAddFields"] = array();
$tdataRegisterPage_customer[".inlineAddFields"][] = "Name";

$tdataRegisterPage_customer[".editFields"] = array();
$tdataRegisterPage_customer[".editFields"][] = "Name";

$tdataRegisterPage_customer[".inlineEditFields"] = array();
$tdataRegisterPage_customer[".inlineEditFields"][] = "Name";

$tdataRegisterPage_customer[".exportFields"] = array();
$tdataRegisterPage_customer[".exportFields"][] = "Id";
$tdataRegisterPage_customer[".exportFields"][] = "Name";

$tdataRegisterPage_customer[".printFields"] = array();
$tdataRegisterPage_customer[".printFields"][] = "Id";
$tdataRegisterPage_customer[".printFields"][] = "Name";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("RegisterPage_customer","Id"); 
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

	

	
	$tdataRegisterPage_customer["Id"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("RegisterPage_customer","Name"); 
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

	

	
	$tdataRegisterPage_customer["Name"] = $fdata;

	
$tables_data["RegisterPage_customer"]=&$tdataRegisterPage_customer;
$field_labels["RegisterPage_customer"] = &$fieldLabelsRegisterPage_customer;
$fieldToolTips["RegisterPage_customer"] = &$fieldToolTipsRegisterPage_customer;
$page_titles["RegisterPage_customer"] = &$pageTitlesRegisterPage_customer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["RegisterPage_customer"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["RegisterPage_customer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_RegisterPage_customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,   Name";
$proto0["m_strFrom"] = "FROM customer";
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
	"m_strTable" => "customer"
));

$proto5["m_sql"] = "Id";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "customer"
));

$proto7["m_sql"] = "Name";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "customer";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "Id";
$proto10["m_columns"][] = "Name";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "customer";
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
$queryData_RegisterPage_customer = createSqlQuery_RegisterPage_customer();

		
	
$tdataRegisterPage_customer[".sqlquery"] = $queryData_RegisterPage_customer;

$tableEvents["RegisterPage_customer"] = new eventsBase;
$tdataRegisterPage_customer[".hasEvents"] = false;

$cipherer = new RunnerCipherer("RegisterPage_customer");

?>