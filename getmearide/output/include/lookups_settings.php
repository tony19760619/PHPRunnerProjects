<?php
require_once(getabspath("classes/cipherer.php"));




$tdatalookups = array();
	$tdatalookups[".truncateText"] = true;
	$tdatalookups[".NumberOfChars"] = 80;
	$tdatalookups[".ShortName"] = "lookups";
	$tdatalookups[".OwnerID"] = "";
	$tdatalookups[".OriginalTable"] = "lookups";

//	field labels
$fieldLabelslookups = array();
$fieldToolTipslookups = array();
$pageTitleslookups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslookups["English"] = array();
	$fieldToolTipslookups["English"] = array();
	$pageTitleslookups["English"] = array();
	$fieldLabelslookups["English"]["Name"] = "Name";
	$fieldToolTipslookups["English"]["Name"] = "";
	$fieldLabelslookups["English"]["ID"] = "ID";
	$fieldToolTipslookups["English"]["ID"] = "";
	$fieldLabelslookups["English"]["Type"] = "Type";
	$fieldToolTipslookups["English"]["Type"] = "";
	$fieldLabelslookups["English"]["Value"] = "Value";
	$fieldToolTipslookups["English"]["Value"] = "";
	$fieldLabelslookups["English"]["SubType"] = "Sub Type";
	$fieldToolTipslookups["English"]["SubType"] = "";
	if (count($fieldToolTipslookups["English"]))
		$tdatalookups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelslookups[""] = array();
	$fieldToolTipslookups[""] = array();
	$pageTitleslookups[""] = array();
	if (count($fieldToolTipslookups[""]))
		$tdatalookups[".isUseToolTips"] = true;
}


	$tdatalookups[".NCSearch"] = true;



$tdatalookups[".shortTableName"] = "lookups";
$tdatalookups[".nSecOptions"] = 0;
$tdatalookups[".recsPerRowPrint"] = 1;
$tdatalookups[".mainTableOwnerID"] = "";
$tdatalookups[".moveNext"] = 1;
$tdatalookups[".entityType"] = 0;

$tdatalookups[".strOriginalTableName"] = "lookups";

	



$tdatalookups[".showAddInPopup"] = false;

$tdatalookups[".showEditInPopup"] = false;

$tdatalookups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalookups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalookups[".fieldsForRegister"] = array();

$tdatalookups[".listAjax"] = false;

	$tdatalookups[".audit"] = false;

	$tdatalookups[".locking"] = false;

$tdatalookups[".edit"] = true;
$tdatalookups[".afterEditAction"] = 0;
$tdatalookups[".closePopupAfterEdit"] = 1;
$tdatalookups[".afterEditActionDetTable"] = "";

$tdatalookups[".add"] = true;
$tdatalookups[".afterAddAction"] = 0;
$tdatalookups[".closePopupAfterAdd"] = 1;
$tdatalookups[".afterAddActionDetTable"] = "";

$tdatalookups[".list"] = true;




$tdatalookups[".view"] = true;

$tdatalookups[".import"] = true;

$tdatalookups[".exportTo"] = true;

$tdatalookups[".printFriendly"] = true;

$tdatalookups[".delete"] = true;

$tdatalookups[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatalookups[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatalookups[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatalookups[".searchSaving"] = false;
//

$tdatalookups[".showSearchPanel"] = true;
		$tdatalookups[".flexibleSearch"] = true;

$tdatalookups[".isUseAjaxSuggest"] = true;

$tdatalookups[".rowHighlite"] = true;



$tdatalookups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalookups[".isUseTimeForSearch"] = false;



$tdatalookups[".badgeColor"] = "DAA520";


$tdatalookups[".allSearchFields"] = array();
$tdatalookups[".filterFields"] = array();
$tdatalookups[".requiredSearchFields"] = array();

$tdatalookups[".allSearchFields"][] = "ID";
	$tdatalookups[".allSearchFields"][] = "Type";
	$tdatalookups[".allSearchFields"][] = "SubType";
	$tdatalookups[".allSearchFields"][] = "Value";
	

$tdatalookups[".googleLikeFields"] = array();
$tdatalookups[".googleLikeFields"][] = "ID";
$tdatalookups[".googleLikeFields"][] = "Type";
$tdatalookups[".googleLikeFields"][] = "SubType";
$tdatalookups[".googleLikeFields"][] = "Value";


$tdatalookups[".advSearchFields"] = array();
$tdatalookups[".advSearchFields"][] = "ID";
$tdatalookups[".advSearchFields"][] = "Type";
$tdatalookups[".advSearchFields"][] = "SubType";
$tdatalookups[".advSearchFields"][] = "Value";

$tdatalookups[".tableType"] = "list";

$tdatalookups[".printerPageOrientation"] = 0;
$tdatalookups[".nPrinterPageScale"] = 100;

$tdatalookups[".nPrinterSplitRecords"] = 40;

$tdatalookups[".nPrinterPDFSplitRecords"] = 40;



$tdatalookups[".geocodingEnabled"] = false;





$tdatalookups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatalookups[".pageSize"] = 20;

$tdatalookups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalookups[".strOrderBy"] = $tstrOrderBy;

$tdatalookups[".orderindexes"] = array();

$tdatalookups[".sqlHead"] = "SELECT ID,  	`Type`,  	`SubType`,  	`Value`";
$tdatalookups[".sqlFrom"] = "FROM lookups";
$tdatalookups[".sqlWhereExpr"] = "";
$tdatalookups[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalookups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalookups[".arrGroupsPerPage"] = $arrGPP;

$tdatalookups[".highlightSearchResults"] = true;

$tableKeyslookups = array();
$tableKeyslookups[] = "ID";
$tdatalookups[".Keys"] = $tableKeyslookups;

$tdatalookups[".listFields"] = array();
$tdatalookups[".listFields"][] = "ID";
$tdatalookups[".listFields"][] = "Type";
$tdatalookups[".listFields"][] = "SubType";
$tdatalookups[".listFields"][] = "Value";

$tdatalookups[".hideMobileList"] = array();


$tdatalookups[".viewFields"] = array();
$tdatalookups[".viewFields"][] = "ID";
$tdatalookups[".viewFields"][] = "Type";
$tdatalookups[".viewFields"][] = "SubType";
$tdatalookups[".viewFields"][] = "Value";

$tdatalookups[".addFields"] = array();
$tdatalookups[".addFields"][] = "Type";
$tdatalookups[".addFields"][] = "SubType";
$tdatalookups[".addFields"][] = "Value";

$tdatalookups[".masterListFields"] = array();
$tdatalookups[".masterListFields"][] = "ID";
$tdatalookups[".masterListFields"][] = "Type";
$tdatalookups[".masterListFields"][] = "SubType";
$tdatalookups[".masterListFields"][] = "Value";

$tdatalookups[".inlineAddFields"] = array();

$tdatalookups[".editFields"] = array();
$tdatalookups[".editFields"][] = "Type";
$tdatalookups[".editFields"][] = "SubType";
$tdatalookups[".editFields"][] = "Value";

$tdatalookups[".inlineEditFields"] = array();

$tdatalookups[".updateSelectedFields"] = array();


$tdatalookups[".exportFields"] = array();
$tdatalookups[".exportFields"][] = "ID";
$tdatalookups[".exportFields"][] = "Type";
$tdatalookups[".exportFields"][] = "SubType";
$tdatalookups[".exportFields"][] = "Value";

$tdatalookups[".importFields"] = array();
$tdatalookups[".importFields"][] = "ID";
$tdatalookups[".importFields"][] = "Type";
$tdatalookups[".importFields"][] = "SubType";
$tdatalookups[".importFields"][] = "Value";

$tdatalookups[".printFields"] = array();
$tdatalookups[".printFields"][] = "ID";
$tdatalookups[".printFields"][] = "Type";
$tdatalookups[".printFields"][] = "SubType";
$tdatalookups[".printFields"][] = "Value";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("lookups","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalookups["ID"] = $fdata;
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("lookups","Type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "lookups";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Type";

	
	$edata["LookupOrderBy"] = "Type";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "SubType";

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalookups["Type"] = $fdata;
//	SubType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SubType";
	$fdata["GoodName"] = "SubType";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("lookups","SubType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SubType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SubType`";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "lookups";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "SubType";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "SubType";

	
	$edata["LookupOrderBy"] = "SubType";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "Type", "lookup" => "Type" );

	
	

	
	
	
// End Lookup Settings


	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalookups["SubType"] = $fdata;
//	Value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Value";
	$fdata["GoodName"] = "Value";
	$fdata["ownerTable"] = "lookups";
	$fdata["Label"] = GetFieldLabel("lookups","Value");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Value`";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatalookups["Value"] = $fdata;


$tables_data["lookups"]=&$tdatalookups;
$field_labels["lookups"] = &$fieldLabelslookups;
$fieldToolTips["lookups"] = &$fieldToolTipslookups;
$page_titles["lookups"] = &$pageTitleslookups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["lookups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["lookups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_lookups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`Type`,  	`SubType`,  	`Value`";
$proto0["m_strFrom"] = "FROM lookups";
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
	"m_strName" => "ID",
	"m_strTable" => "lookups",
	"m_srcTableName" => "lookups"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "lookups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "lookups",
	"m_srcTableName" => "lookups"
));

$proto8["m_sql"] = "`Type`";
$proto8["m_srcTableName"] = "lookups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SubType",
	"m_strTable" => "lookups",
	"m_srcTableName" => "lookups"
));

$proto10["m_sql"] = "`SubType`";
$proto10["m_srcTableName"] = "lookups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Value",
	"m_strTable" => "lookups",
	"m_srcTableName" => "lookups"
));

$proto12["m_sql"] = "`Value`";
$proto12["m_srcTableName"] = "lookups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "lookups";
$proto15["m_srcTableName"] = "lookups";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "Type";
$proto15["m_columns"][] = "SubType";
$proto15["m_columns"][] = "Value";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "lookups";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "lookups";
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
$proto0["m_srcTableName"]="lookups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lookups = createSqlQuery_lookups();


	
		;

				

$tdatalookups[".sqlquery"] = $queryData_lookups;

$tableEvents["lookups"] = new eventsBase;
$tdatalookups[".hasEvents"] = false;

?>