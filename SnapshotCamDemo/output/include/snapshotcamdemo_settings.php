<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasnapshotcamdemo = array();
	$tdatasnapshotcamdemo[".truncateText"] = true;
	$tdatasnapshotcamdemo[".NumberOfChars"] = 80;
	$tdatasnapshotcamdemo[".ShortName"] = "snapshotcamdemo";
	$tdatasnapshotcamdemo[".OwnerID"] = "";
	$tdatasnapshotcamdemo[".OriginalTable"] = "snapshotcamdemo";

//	field labels
$fieldLabelssnapshotcamdemo = array();
$fieldToolTipssnapshotcamdemo = array();
$pageTitlessnapshotcamdemo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssnapshotcamdemo["English"] = array();
	$fieldToolTipssnapshotcamdemo["English"] = array();
	$pageTitlessnapshotcamdemo["English"] = array();
	$fieldLabelssnapshotcamdemo["English"]["id"] = "Id";
	$fieldToolTipssnapshotcamdemo["English"]["id"] = "";
	$fieldLabelssnapshotcamdemo["English"]["ProfilePicture"] = "Profile Picture";
	$fieldToolTipssnapshotcamdemo["English"]["ProfilePicture"] = "";
	$fieldLabelssnapshotcamdemo["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipssnapshotcamdemo["English"]["AttachedFile"] = "";
	if (count($fieldToolTipssnapshotcamdemo["English"]))
		$tdatasnapshotcamdemo[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssnapshotcamdemo[""] = array();
	$fieldToolTipssnapshotcamdemo[""] = array();
	$pageTitlessnapshotcamdemo[""] = array();
	$fieldLabelssnapshotcamdemo[""]["id"] = "Id";
	$fieldToolTipssnapshotcamdemo[""]["id"] = "";
	$fieldLabelssnapshotcamdemo[""]["ProfilePicture"] = "Profile Picture";
	$fieldToolTipssnapshotcamdemo[""]["ProfilePicture"] = "";
	$fieldLabelssnapshotcamdemo[""]["AttachedFile"] = "Attached File";
	$fieldToolTipssnapshotcamdemo[""]["AttachedFile"] = "";
	if (count($fieldToolTipssnapshotcamdemo[""]))
		$tdatasnapshotcamdemo[".isUseToolTips"] = true;
}


	$tdatasnapshotcamdemo[".NCSearch"] = true;



$tdatasnapshotcamdemo[".shortTableName"] = "snapshotcamdemo";
$tdatasnapshotcamdemo[".nSecOptions"] = 0;
$tdatasnapshotcamdemo[".recsPerRowPrint"] = 1;
$tdatasnapshotcamdemo[".mainTableOwnerID"] = "";
$tdatasnapshotcamdemo[".moveNext"] = 1;
$tdatasnapshotcamdemo[".entityType"] = 0;

$tdatasnapshotcamdemo[".strOriginalTableName"] = "snapshotcamdemo";

	



$tdatasnapshotcamdemo[".showAddInPopup"] = false;

$tdatasnapshotcamdemo[".showEditInPopup"] = false;

$tdatasnapshotcamdemo[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasnapshotcamdemo[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasnapshotcamdemo[".fieldsForRegister"] = array();

$tdatasnapshotcamdemo[".listAjax"] = false;

	$tdatasnapshotcamdemo[".audit"] = false;

	$tdatasnapshotcamdemo[".locking"] = false;

$tdatasnapshotcamdemo[".edit"] = true;
$tdatasnapshotcamdemo[".afterEditAction"] = 1;
$tdatasnapshotcamdemo[".closePopupAfterEdit"] = 1;
$tdatasnapshotcamdemo[".afterEditActionDetTable"] = "";

$tdatasnapshotcamdemo[".add"] = true;
$tdatasnapshotcamdemo[".afterAddAction"] = 1;
$tdatasnapshotcamdemo[".closePopupAfterAdd"] = 1;
$tdatasnapshotcamdemo[".afterAddActionDetTable"] = "";

$tdatasnapshotcamdemo[".list"] = true;




$tdatasnapshotcamdemo[".view"] = true;

$tdatasnapshotcamdemo[".import"] = true;

$tdatasnapshotcamdemo[".exportTo"] = true;

$tdatasnapshotcamdemo[".printFriendly"] = true;

$tdatasnapshotcamdemo[".delete"] = true;

$tdatasnapshotcamdemo[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasnapshotcamdemo[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasnapshotcamdemo[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasnapshotcamdemo[".searchSaving"] = false;
//

$tdatasnapshotcamdemo[".showSearchPanel"] = true;
		$tdatasnapshotcamdemo[".flexibleSearch"] = true;

$tdatasnapshotcamdemo[".isUseAjaxSuggest"] = true;

$tdatasnapshotcamdemo[".rowHighlite"] = true;



$tdatasnapshotcamdemo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasnapshotcamdemo[".isUseTimeForSearch"] = false;



$tdatasnapshotcamdemo[".badgeColor"] = "E67349";


$tdatasnapshotcamdemo[".allSearchFields"] = array();
$tdatasnapshotcamdemo[".filterFields"] = array();
$tdatasnapshotcamdemo[".requiredSearchFields"] = array();

$tdatasnapshotcamdemo[".allSearchFields"][] = "id";
	$tdatasnapshotcamdemo[".allSearchFields"][] = "ProfilePicture";
	$tdatasnapshotcamdemo[".allSearchFields"][] = "AttachedFile";
	

$tdatasnapshotcamdemo[".googleLikeFields"] = array();
$tdatasnapshotcamdemo[".googleLikeFields"][] = "id";
$tdatasnapshotcamdemo[".googleLikeFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".googleLikeFields"][] = "AttachedFile";


$tdatasnapshotcamdemo[".advSearchFields"] = array();
$tdatasnapshotcamdemo[".advSearchFields"][] = "id";
$tdatasnapshotcamdemo[".advSearchFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".advSearchFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".tableType"] = "list";

$tdatasnapshotcamdemo[".printerPageOrientation"] = 0;
$tdatasnapshotcamdemo[".nPrinterPageScale"] = 100;

$tdatasnapshotcamdemo[".nPrinterSplitRecords"] = 40;

$tdatasnapshotcamdemo[".nPrinterPDFSplitRecords"] = 40;



$tdatasnapshotcamdemo[".geocodingEnabled"] = false;





$tdatasnapshotcamdemo[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasnapshotcamdemo[".pageSize"] = 20;

$tdatasnapshotcamdemo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasnapshotcamdemo[".strOrderBy"] = $tstrOrderBy;

$tdatasnapshotcamdemo[".orderindexes"] = array();

$tdatasnapshotcamdemo[".sqlHead"] = "SELECT id,  	ProfilePicture,  	AttachedFile";
$tdatasnapshotcamdemo[".sqlFrom"] = "FROM SnapshotCamDemo";
$tdatasnapshotcamdemo[".sqlWhereExpr"] = "";
$tdatasnapshotcamdemo[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasnapshotcamdemo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasnapshotcamdemo[".arrGroupsPerPage"] = $arrGPP;

$tdatasnapshotcamdemo[".highlightSearchResults"] = true;

$tableKeyssnapshotcamdemo = array();
$tableKeyssnapshotcamdemo[] = "id";
$tdatasnapshotcamdemo[".Keys"] = $tableKeyssnapshotcamdemo;

$tdatasnapshotcamdemo[".listFields"] = array();
$tdatasnapshotcamdemo[".listFields"][] = "id";
$tdatasnapshotcamdemo[".listFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".listFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".hideMobileList"] = array();


$tdatasnapshotcamdemo[".viewFields"] = array();
$tdatasnapshotcamdemo[".viewFields"][] = "id";
$tdatasnapshotcamdemo[".viewFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".viewFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".addFields"] = array();
$tdatasnapshotcamdemo[".addFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".addFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".masterListFields"] = array();
$tdatasnapshotcamdemo[".masterListFields"][] = "id";
$tdatasnapshotcamdemo[".masterListFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".masterListFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".inlineAddFields"] = array();

$tdatasnapshotcamdemo[".editFields"] = array();
$tdatasnapshotcamdemo[".editFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".editFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".inlineEditFields"] = array();

$tdatasnapshotcamdemo[".updateSelectedFields"] = array();


$tdatasnapshotcamdemo[".exportFields"] = array();
$tdatasnapshotcamdemo[".exportFields"][] = "id";
$tdatasnapshotcamdemo[".exportFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".exportFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".importFields"] = array();
$tdatasnapshotcamdemo[".importFields"][] = "id";
$tdatasnapshotcamdemo[".importFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".importFields"][] = "AttachedFile";

$tdatasnapshotcamdemo[".printFields"] = array();
$tdatasnapshotcamdemo[".printFields"][] = "id";
$tdatasnapshotcamdemo[".printFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo[".printFields"][] = "AttachedFile";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "snapshotcamdemo";
	$fdata["Label"] = GetFieldLabel("snapshotcamdemo","id");
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasnapshotcamdemo["id"] = $fdata;
//	ProfilePicture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProfilePicture";
	$fdata["GoodName"] = "ProfilePicture";
	$fdata["ownerTable"] = "snapshotcamdemo";
	$fdata["Label"] = GetFieldLabel("snapshotcamdemo","ProfilePicture");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ProfilePicture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProfilePicture";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "SnapshotCam");

	
	



	
	
	
	
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




	$tdatasnapshotcamdemo["ProfilePicture"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "snapshotcamdemo";
	$fdata["Label"] = GetFieldLabel("snapshotcamdemo","AttachedFile");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AttachedFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AttachedFile";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasnapshotcamdemo["AttachedFile"] = $fdata;


$tables_data["snapshotcamdemo"]=&$tdatasnapshotcamdemo;
$field_labels["snapshotcamdemo"] = &$fieldLabelssnapshotcamdemo;
$fieldToolTips["snapshotcamdemo"] = &$fieldToolTipssnapshotcamdemo;
$page_titles["snapshotcamdemo"] = &$pageTitlessnapshotcamdemo;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["snapshotcamdemo"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["snapshotcamdemo"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_snapshotcamdemo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	ProfilePicture,  	AttachedFile";
$proto0["m_strFrom"] = "FROM SnapshotCamDemo";
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
	"m_strName" => "id",
	"m_strTable" => "snapshotcamdemo",
	"m_srcTableName" => "snapshotcamdemo"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "snapshotcamdemo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePicture",
	"m_strTable" => "snapshotcamdemo",
	"m_srcTableName" => "snapshotcamdemo"
));

$proto8["m_sql"] = "ProfilePicture";
$proto8["m_srcTableName"] = "snapshotcamdemo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "snapshotcamdemo",
	"m_srcTableName" => "snapshotcamdemo"
));

$proto10["m_sql"] = "AttachedFile";
$proto10["m_srcTableName"] = "snapshotcamdemo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "snapshotcamdemo";
$proto13["m_srcTableName"] = "snapshotcamdemo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "ProfilePicture";
$proto13["m_columns"][] = "AttachedFile";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "SnapshotCamDemo";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "snapshotcamdemo";
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

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="snapshotcamdemo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_snapshotcamdemo = createSqlQuery_snapshotcamdemo();


	
		;

			

$tdatasnapshotcamdemo[".sqlquery"] = $queryData_snapshotcamdemo;

$tableEvents["snapshotcamdemo"] = new eventsBase;
$tdatasnapshotcamdemo[".hasEvents"] = false;

?>