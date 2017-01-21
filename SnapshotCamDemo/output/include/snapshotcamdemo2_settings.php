<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasnapshotcamdemo2 = array();
	$tdatasnapshotcamdemo2[".truncateText"] = true;
	$tdatasnapshotcamdemo2[".NumberOfChars"] = 80;
	$tdatasnapshotcamdemo2[".ShortName"] = "snapshotcamdemo2";
	$tdatasnapshotcamdemo2[".OwnerID"] = "";
	$tdatasnapshotcamdemo2[".OriginalTable"] = "snapshotcamdemo2";

//	field labels
$fieldLabelssnapshotcamdemo2 = array();
$fieldToolTipssnapshotcamdemo2 = array();
$pageTitlessnapshotcamdemo2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssnapshotcamdemo2["English"] = array();
	$fieldToolTipssnapshotcamdemo2["English"] = array();
	$pageTitlessnapshotcamdemo2["English"] = array();
	$fieldLabelssnapshotcamdemo2["English"]["id"] = "Id";
	$fieldToolTipssnapshotcamdemo2["English"]["id"] = "";
	$fieldLabelssnapshotcamdemo2["English"]["ProfilePicture"] = "Profile Picture";
	$fieldToolTipssnapshotcamdemo2["English"]["ProfilePicture"] = "";
	$fieldLabelssnapshotcamdemo2["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipssnapshotcamdemo2["English"]["AttachedFile"] = "";
	if (count($fieldToolTipssnapshotcamdemo2["English"]))
		$tdatasnapshotcamdemo2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssnapshotcamdemo2[""] = array();
	$fieldToolTipssnapshotcamdemo2[""] = array();
	$pageTitlessnapshotcamdemo2[""] = array();
	$fieldLabelssnapshotcamdemo2[""]["id"] = "Id";
	$fieldToolTipssnapshotcamdemo2[""]["id"] = "";
	$fieldLabelssnapshotcamdemo2[""]["ProfilePicture"] = "Profile Picture";
	$fieldToolTipssnapshotcamdemo2[""]["ProfilePicture"] = "";
	$fieldLabelssnapshotcamdemo2[""]["AttachedFile"] = "Attached File";
	$fieldToolTipssnapshotcamdemo2[""]["AttachedFile"] = "";
	if (count($fieldToolTipssnapshotcamdemo2[""]))
		$tdatasnapshotcamdemo2[".isUseToolTips"] = true;
}


	$tdatasnapshotcamdemo2[".NCSearch"] = true;



$tdatasnapshotcamdemo2[".shortTableName"] = "snapshotcamdemo2";
$tdatasnapshotcamdemo2[".nSecOptions"] = 0;
$tdatasnapshotcamdemo2[".recsPerRowPrint"] = 1;
$tdatasnapshotcamdemo2[".mainTableOwnerID"] = "";
$tdatasnapshotcamdemo2[".moveNext"] = 1;
$tdatasnapshotcamdemo2[".entityType"] = 0;

$tdatasnapshotcamdemo2[".strOriginalTableName"] = "snapshotcamdemo2";

	



$tdatasnapshotcamdemo2[".showAddInPopup"] = false;

$tdatasnapshotcamdemo2[".showEditInPopup"] = false;

$tdatasnapshotcamdemo2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasnapshotcamdemo2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasnapshotcamdemo2[".fieldsForRegister"] = array();

$tdatasnapshotcamdemo2[".listAjax"] = false;

	$tdatasnapshotcamdemo2[".audit"] = false;

	$tdatasnapshotcamdemo2[".locking"] = false;

$tdatasnapshotcamdemo2[".edit"] = true;
$tdatasnapshotcamdemo2[".afterEditAction"] = 1;
$tdatasnapshotcamdemo2[".closePopupAfterEdit"] = 1;
$tdatasnapshotcamdemo2[".afterEditActionDetTable"] = "";

$tdatasnapshotcamdemo2[".add"] = true;
$tdatasnapshotcamdemo2[".afterAddAction"] = 1;
$tdatasnapshotcamdemo2[".closePopupAfterAdd"] = 1;
$tdatasnapshotcamdemo2[".afterAddActionDetTable"] = "";

$tdatasnapshotcamdemo2[".list"] = true;




$tdatasnapshotcamdemo2[".view"] = true;

$tdatasnapshotcamdemo2[".import"] = true;

$tdatasnapshotcamdemo2[".exportTo"] = true;

$tdatasnapshotcamdemo2[".printFriendly"] = true;

$tdatasnapshotcamdemo2[".delete"] = true;

$tdatasnapshotcamdemo2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasnapshotcamdemo2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasnapshotcamdemo2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasnapshotcamdemo2[".searchSaving"] = false;
//

$tdatasnapshotcamdemo2[".showSearchPanel"] = true;
		$tdatasnapshotcamdemo2[".flexibleSearch"] = true;

$tdatasnapshotcamdemo2[".isUseAjaxSuggest"] = true;

$tdatasnapshotcamdemo2[".rowHighlite"] = true;



$tdatasnapshotcamdemo2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasnapshotcamdemo2[".isUseTimeForSearch"] = false;



$tdatasnapshotcamdemo2[".badgeColor"] = "E67349";


$tdatasnapshotcamdemo2[".allSearchFields"] = array();
$tdatasnapshotcamdemo2[".filterFields"] = array();
$tdatasnapshotcamdemo2[".requiredSearchFields"] = array();

$tdatasnapshotcamdemo2[".allSearchFields"][] = "id";
	$tdatasnapshotcamdemo2[".allSearchFields"][] = "ProfilePicture";
	$tdatasnapshotcamdemo2[".allSearchFields"][] = "AttachedFile";
	

$tdatasnapshotcamdemo2[".googleLikeFields"] = array();
$tdatasnapshotcamdemo2[".googleLikeFields"][] = "id";
$tdatasnapshotcamdemo2[".googleLikeFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".googleLikeFields"][] = "AttachedFile";


$tdatasnapshotcamdemo2[".advSearchFields"] = array();
$tdatasnapshotcamdemo2[".advSearchFields"][] = "id";
$tdatasnapshotcamdemo2[".advSearchFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".advSearchFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".tableType"] = "list";

$tdatasnapshotcamdemo2[".printerPageOrientation"] = 0;
$tdatasnapshotcamdemo2[".nPrinterPageScale"] = 100;

$tdatasnapshotcamdemo2[".nPrinterSplitRecords"] = 40;

$tdatasnapshotcamdemo2[".nPrinterPDFSplitRecords"] = 40;



$tdatasnapshotcamdemo2[".geocodingEnabled"] = false;





$tdatasnapshotcamdemo2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasnapshotcamdemo2[".pageSize"] = 20;

$tdatasnapshotcamdemo2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasnapshotcamdemo2[".strOrderBy"] = $tstrOrderBy;

$tdatasnapshotcamdemo2[".orderindexes"] = array();

$tdatasnapshotcamdemo2[".sqlHead"] = "SELECT id,  	ProfilePicture,  	AttachedFile";
$tdatasnapshotcamdemo2[".sqlFrom"] = "FROM snapshotcamdemo2";
$tdatasnapshotcamdemo2[".sqlWhereExpr"] = "";
$tdatasnapshotcamdemo2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasnapshotcamdemo2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasnapshotcamdemo2[".arrGroupsPerPage"] = $arrGPP;

$tdatasnapshotcamdemo2[".highlightSearchResults"] = true;

$tableKeyssnapshotcamdemo2 = array();
$tableKeyssnapshotcamdemo2[] = "id";
$tdatasnapshotcamdemo2[".Keys"] = $tableKeyssnapshotcamdemo2;

$tdatasnapshotcamdemo2[".listFields"] = array();
$tdatasnapshotcamdemo2[".listFields"][] = "id";
$tdatasnapshotcamdemo2[".listFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".listFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".hideMobileList"] = array();


$tdatasnapshotcamdemo2[".viewFields"] = array();
$tdatasnapshotcamdemo2[".viewFields"][] = "id";
$tdatasnapshotcamdemo2[".viewFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".viewFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".addFields"] = array();
$tdatasnapshotcamdemo2[".addFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".addFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".masterListFields"] = array();
$tdatasnapshotcamdemo2[".masterListFields"][] = "id";
$tdatasnapshotcamdemo2[".masterListFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".masterListFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".inlineAddFields"] = array();

$tdatasnapshotcamdemo2[".editFields"] = array();
$tdatasnapshotcamdemo2[".editFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".editFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".inlineEditFields"] = array();

$tdatasnapshotcamdemo2[".updateSelectedFields"] = array();


$tdatasnapshotcamdemo2[".exportFields"] = array();
$tdatasnapshotcamdemo2[".exportFields"][] = "id";
$tdatasnapshotcamdemo2[".exportFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".exportFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".importFields"] = array();
$tdatasnapshotcamdemo2[".importFields"][] = "id";
$tdatasnapshotcamdemo2[".importFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".importFields"][] = "AttachedFile";

$tdatasnapshotcamdemo2[".printFields"] = array();
$tdatasnapshotcamdemo2[".printFields"][] = "id";
$tdatasnapshotcamdemo2[".printFields"][] = "ProfilePicture";
$tdatasnapshotcamdemo2[".printFields"][] = "AttachedFile";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "snapshotcamdemo2";
	$fdata["Label"] = GetFieldLabel("snapshotcamdemo2","id");
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




	$tdatasnapshotcamdemo2["id"] = $fdata;
//	ProfilePicture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ProfilePicture";
	$fdata["GoodName"] = "ProfilePicture";
	$fdata["ownerTable"] = "snapshotcamdemo2";
	$fdata["Label"] = GetFieldLabel("snapshotcamdemo2","ProfilePicture");
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




	$tdatasnapshotcamdemo2["ProfilePicture"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "snapshotcamdemo2";
	$fdata["Label"] = GetFieldLabel("snapshotcamdemo2","AttachedFile");
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




	$tdatasnapshotcamdemo2["AttachedFile"] = $fdata;


$tables_data["snapshotcamdemo2"]=&$tdatasnapshotcamdemo2;
$field_labels["snapshotcamdemo2"] = &$fieldLabelssnapshotcamdemo2;
$fieldToolTips["snapshotcamdemo2"] = &$fieldToolTipssnapshotcamdemo2;
$page_titles["snapshotcamdemo2"] = &$pageTitlessnapshotcamdemo2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["snapshotcamdemo2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["snapshotcamdemo2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_snapshotcamdemo2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	ProfilePicture,  	AttachedFile";
$proto0["m_strFrom"] = "FROM snapshotcamdemo2";
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
	"m_strTable" => "snapshotcamdemo2",
	"m_srcTableName" => "snapshotcamdemo2"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "snapshotcamdemo2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePicture",
	"m_strTable" => "snapshotcamdemo2",
	"m_srcTableName" => "snapshotcamdemo2"
));

$proto8["m_sql"] = "ProfilePicture";
$proto8["m_srcTableName"] = "snapshotcamdemo2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "snapshotcamdemo2",
	"m_srcTableName" => "snapshotcamdemo2"
));

$proto10["m_sql"] = "AttachedFile";
$proto10["m_srcTableName"] = "snapshotcamdemo2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "snapshotcamdemo2";
$proto13["m_srcTableName"] = "snapshotcamdemo2";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "ProfilePicture";
$proto13["m_columns"][] = "AttachedFile";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "snapshotcamdemo2";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "snapshotcamdemo2";
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
$proto0["m_srcTableName"]="snapshotcamdemo2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_snapshotcamdemo2 = createSqlQuery_snapshotcamdemo2();


	
		;

			

$tdatasnapshotcamdemo2[".sqlquery"] = $queryData_snapshotcamdemo2;

$tableEvents["snapshotcamdemo2"] = new eventsBase;
$tdatasnapshotcamdemo2[".hasEvents"] = false;

?>