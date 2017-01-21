<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacustomer = array();	
	$tdatacustomer[".truncateText"] = true;
	$tdatacustomer[".NumberOfChars"] = 80; 
	$tdatacustomer[".ShortName"] = "customer";
	$tdatacustomer[".OwnerID"] = "Id";
	$tdatacustomer[".OriginalTable"] = "customer";

//	field labels
$fieldLabelscustomer = array();
$fieldToolTipscustomer = array();
$pageTitlescustomer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomer["English"] = array();
	$fieldToolTipscustomer["English"] = array();
	$pageTitlescustomer["English"] = array();
	$fieldLabelscustomer["English"]["Id"] = "Id";
	$fieldToolTipscustomer["English"]["Id"] = "";
	$fieldLabelscustomer["English"]["Name"] = "Name";
	$fieldToolTipscustomer["English"]["Name"] = "";
	if (count($fieldToolTipscustomer["English"]))
		$tdatacustomer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscustomer[""] = array();
	$fieldToolTipscustomer[""] = array();
	$pageTitlescustomer[""] = array();
	$fieldLabelscustomer[""]["Id"] = "Id";
	$fieldToolTipscustomer[""]["Id"] = "";
	if (count($fieldToolTipscustomer[""]))
		$tdatacustomer[".isUseToolTips"] = true;
}
	
	
	$tdatacustomer[".NCSearch"] = true;



$tdatacustomer[".shortTableName"] = "customer";
$tdatacustomer[".nSecOptions"] = 1;
$tdatacustomer[".recsPerRowList"] = 1;
$tdatacustomer[".mainTableOwnerID"] = "Id";
$tdatacustomer[".moveNext"] = 1;
$tdatacustomer[".nType"] = 0;

$tdatacustomer[".strOriginalTableName"] = "customer";

	


$tdatacustomer[".showAddInPopup"] = false;

$tdatacustomer[".showEditInPopup"] = false;

$tdatacustomer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacustomer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacustomer[".fieldsForRegister"] = array();
	
$tdatacustomer[".listAjax"] = false;

	$tdatacustomer[".audit"] = false;

	$tdatacustomer[".locking"] = true;

$tdatacustomer[".edit"] = true;
$tdatacustomer[".inlineEdit"] = true;
$tdatacustomer[".inlineAdd"] = true;
$tdatacustomer[".view"] = true;

$tdatacustomer[".import"] = true;

$tdatacustomer[".exportTo"] = true;

$tdatacustomer[".printFriendly"] = true;

$tdatacustomer[".delete"] = true;

$tdatacustomer[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacustomer[".searchSaving"] = false;
//

$tdatacustomer[".showSearchPanel"] = true;
		$tdatacustomer[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacustomer[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomer[".isUseAjaxSuggest"] = true;

$tdatacustomer[".rowHighlite"] = true;



$tdatacustomer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer[".isUseTimeForSearch"] = false;



$tdatacustomer[".useDetailsPreview"] = true;


$tdatacustomer[".allSearchFields"] = array();
$tdatacustomer[".filterFields"] = array();
$tdatacustomer[".requiredSearchFields"] = array();

$tdatacustomer[".allSearchFields"][] = "Id";
		$tdatacustomer[".allSearchFields"][] = "Name";
		
$tdatacustomer[".googleLikeFields"] = array();
$tdatacustomer[".googleLikeFields"][] = "Id";
$tdatacustomer[".googleLikeFields"][] = "Name";

$tdatacustomer[".panelSearchFields"] = array();
$tdatacustomer[".searchPanelOptions"] = array();
$tdatacustomer[".panelSearchFields"][] = "Name";
	
$tdatacustomer[".advSearchFields"] = array();
$tdatacustomer[".advSearchFields"][] = "Id";
$tdatacustomer[".advSearchFields"][] = "Name";

$tdatacustomer[".tableType"] = "list";

	



// Access doesn't support subqueries from the same table as main




$tdatacustomer[".pageSize"] = 20;

$tdatacustomer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomer[".strOrderBy"] = $tstrOrderBy;

$tdatacustomer[".orderindexes"] = array();

$tdatacustomer[".sqlHead"] = "SELECT Id,   Name";
$tdatacustomer[".sqlFrom"] = "FROM customer";
$tdatacustomer[".sqlWhereExpr"] = "";
$tdatacustomer[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomer[".arrGroupsPerPage"] = $arrGPP;


$tableKeyscustomer = array();
$tableKeyscustomer[] = "Id";
$tdatacustomer[".Keys"] = $tableKeyscustomer;

$tdatacustomer[".listFields"] = array();
$tdatacustomer[".listFields"][] = "Id";
$tdatacustomer[".listFields"][] = "Name";

$tdatacustomer[".hideMobileList"] = array();


$tdatacustomer[".viewFields"] = array();
$tdatacustomer[".viewFields"][] = "Id";
$tdatacustomer[".viewFields"][] = "Name";

$tdatacustomer[".addFields"] = array();
$tdatacustomer[".addFields"][] = "Name";

$tdatacustomer[".inlineAddFields"] = array();
$tdatacustomer[".inlineAddFields"][] = "Name";

$tdatacustomer[".editFields"] = array();
$tdatacustomer[".editFields"][] = "Name";

$tdatacustomer[".inlineEditFields"] = array();
$tdatacustomer[".inlineEditFields"][] = "Name";

$tdatacustomer[".exportFields"] = array();
$tdatacustomer[".exportFields"][] = "Id";
$tdatacustomer[".exportFields"][] = "Name";

$tdatacustomer[".printFields"] = array();
$tdatacustomer[".printFields"][] = "Id";
$tdatacustomer[".printFields"][] = "Name";

//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Id"); 
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

	

	
	$tdatacustomer["Id"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = GetFieldLabel("customer","Name"); 
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

	

	
	$tdatacustomer["Name"] = $fdata;

	
$tables_data["customer"]=&$tdatacustomer;
$field_labels["customer"] = &$fieldLabelscustomer;
$fieldToolTips["customer"] = &$fieldToolTipscustomer;
$page_titles["customer"] = &$pageTitlescustomer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customer"] = array();
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
			
	$detailsTablesData["customer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="CustomerId";
//	customerwastebyday
	
	

		$dIndex = 1;
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
			
	$detailsTablesData["customer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="CustomerId";
//	customerwastebymonth
	
	

		$dIndex = 2;
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
			
	$detailsTablesData["customer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="CustomerId";
//	customerwastebyweek
	
	

		$dIndex = 3;
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
			
	$detailsTablesData["customer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="CustomerId";
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
			
	$detailsTablesData["customer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="CustomerId";
//	user
	
	

		$dIndex = 5;
		$detailsParam["dOriginalTable"] = "user";
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="user";
				$detailsParam["dType"]="list";
	$detailsParam["dShortTable"] = "user";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["customer"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["customer"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["masterKeys"][]="Id";

				$detailsTablesData["customer"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["customer"][$dIndex]["detailKeys"][]="CustomerId";
	
// tables which are master tables for current table (detail)
$masterTablesData["customer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customer()
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
$queryData_customer = createSqlQuery_customer();

		
	
$tdatacustomer[".sqlquery"] = $queryData_customer;

$tableEvents["customer"] = new eventsBase;
$tdatacustomer[".hasEvents"] = false;

$cipherer = new RunnerCipherer("customer");

?>