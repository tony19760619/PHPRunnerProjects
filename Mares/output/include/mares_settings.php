<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamares = array();
	$tdatamares[".truncateText"] = true;
	$tdatamares[".NumberOfChars"] = 80;
	$tdatamares[".ShortName"] = "mares";
	$tdatamares[".OwnerID"] = "";
	$tdatamares[".OriginalTable"] = "mares";

//	field labels
$fieldLabelsmares = array();
$fieldToolTipsmares = array();
$pageTitlesmares = array();

if(mlang_getcurrentlang()=="Portuguese(Standard)")
{
	$fieldLabelsmares["Portuguese(Standard)"] = array();
	$fieldToolTipsmares["Portuguese(Standard)"] = array();
	$pageTitlesmares["Portuguese(Standard)"] = array();
	$fieldLabelsmares["Portuguese(Standard)"]["id"] = "Id";
	$fieldToolTipsmares["Portuguese(Standard)"]["id"] = "";
	$fieldLabelsmares["Portuguese(Standard)"]["cidade"] = "Cidade";
	$fieldToolTipsmares["Portuguese(Standard)"]["cidade"] = "";
	$fieldLabelsmares["Portuguese(Standard)"]["tempo"] = "Tempo";
	$fieldToolTipsmares["Portuguese(Standard)"]["tempo"] = "";
	$fieldLabelsmares["Portuguese(Standard)"]["altura"] = "Altura";
	$fieldToolTipsmares["Portuguese(Standard)"]["altura"] = "";
	$fieldLabelsmares["Portuguese(Standard)"]["dia"] = "Dia";
	$fieldToolTipsmares["Portuguese(Standard)"]["dia"] = "";
	if (count($fieldToolTipsmares["Portuguese(Standard)"]))
		$tdatamares[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmares[""] = array();
	$fieldToolTipsmares[""] = array();
	$pageTitlesmares[""] = array();
	$fieldLabelsmares[""]["id"] = "Id";
	$fieldToolTipsmares[""]["id"] = "";
	$fieldLabelsmares[""]["cidade"] = "Cidade";
	$fieldToolTipsmares[""]["cidade"] = "";
	$fieldLabelsmares[""]["tempo"] = "Tempo";
	$fieldToolTipsmares[""]["tempo"] = "";
	$fieldLabelsmares[""]["altura"] = "Altura";
	$fieldToolTipsmares[""]["altura"] = "";
	$fieldLabelsmares[""]["dia"] = "Dia";
	$fieldToolTipsmares[""]["dia"] = "";
	if (count($fieldToolTipsmares[""]))
		$tdatamares[".isUseToolTips"] = true;
}


	$tdatamares[".NCSearch"] = true;



$tdatamares[".shortTableName"] = "mares";
$tdatamares[".nSecOptions"] = 0;
$tdatamares[".recsPerRowPrint"] = 1;
$tdatamares[".mainTableOwnerID"] = "";
$tdatamares[".moveNext"] = 1;
$tdatamares[".entityType"] = 0;

$tdatamares[".strOriginalTableName"] = "mares";

	



$tdatamares[".showAddInPopup"] = false;

$tdatamares[".showEditInPopup"] = false;

$tdatamares[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamares[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamares[".fieldsForRegister"] = array();

$tdatamares[".listAjax"] = false;

	$tdatamares[".audit"] = false;

	$tdatamares[".locking"] = false;

$tdatamares[".edit"] = true;
$tdatamares[".afterEditAction"] = 1;
$tdatamares[".closePopupAfterEdit"] = 1;
$tdatamares[".afterEditActionDetTable"] = "";

$tdatamares[".add"] = true;
$tdatamares[".afterAddAction"] = 1;
$tdatamares[".closePopupAfterAdd"] = 1;
$tdatamares[".afterAddActionDetTable"] = "";

$tdatamares[".list"] = true;




$tdatamares[".view"] = true;

$tdatamares[".import"] = true;

$tdatamares[".exportTo"] = true;

$tdatamares[".printFriendly"] = true;

$tdatamares[".delete"] = true;

$tdatamares[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamares[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamares[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamares[".searchSaving"] = false;
//

$tdatamares[".showSearchPanel"] = true;
		$tdatamares[".flexibleSearch"] = true;

$tdatamares[".isUseAjaxSuggest"] = true;

$tdatamares[".rowHighlite"] = true;



$tdatamares[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamares[".isUseTimeForSearch"] = false;



$tdatamares[".badgeColor"] = "8FBC8B";


$tdatamares[".allSearchFields"] = array();
$tdatamares[".filterFields"] = array();
$tdatamares[".requiredSearchFields"] = array();

$tdatamares[".allSearchFields"][] = "id";
	$tdatamares[".allSearchFields"][] = "cidade";
	$tdatamares[".allSearchFields"][] = "dia";
	$tdatamares[".allSearchFields"][] = "tempo";
	$tdatamares[".allSearchFields"][] = "altura";
	

$tdatamares[".googleLikeFields"] = array();
$tdatamares[".googleLikeFields"][] = "id";
$tdatamares[".googleLikeFields"][] = "cidade";
$tdatamares[".googleLikeFields"][] = "tempo";
$tdatamares[".googleLikeFields"][] = "altura";
$tdatamares[".googleLikeFields"][] = "dia";


$tdatamares[".advSearchFields"] = array();
$tdatamares[".advSearchFields"][] = "id";
$tdatamares[".advSearchFields"][] = "cidade";
$tdatamares[".advSearchFields"][] = "dia";
$tdatamares[".advSearchFields"][] = "tempo";
$tdatamares[".advSearchFields"][] = "altura";

$tdatamares[".tableType"] = "list";

$tdatamares[".printerPageOrientation"] = 0;
$tdatamares[".nPrinterPageScale"] = 100;

$tdatamares[".nPrinterSplitRecords"] = 40;

$tdatamares[".nPrinterPDFSplitRecords"] = 40;



$tdatamares[".geocodingEnabled"] = false;





$tdatamares[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamares[".pageSize"] = 20;

$tdatamares[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamares[".strOrderBy"] = $tstrOrderBy;

$tdatamares[".orderindexes"] = array();

$tdatamares[".sqlHead"] = "SELECT id,  	cidade,  	tempo,  	altura,  	dia";
$tdatamares[".sqlFrom"] = "FROM mares";
$tdatamares[".sqlWhereExpr"] = "";
$tdatamares[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamares[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamares[".arrGroupsPerPage"] = $arrGPP;

$tdatamares[".highlightSearchResults"] = true;

$tableKeysmares = array();
$tableKeysmares[] = "id";
$tdatamares[".Keys"] = $tableKeysmares;

$tdatamares[".listFields"] = array();
$tdatamares[".listFields"][] = "id";
$tdatamares[".listFields"][] = "cidade";
$tdatamares[".listFields"][] = "dia";
$tdatamares[".listFields"][] = "tempo";
$tdatamares[".listFields"][] = "altura";

$tdatamares[".hideMobileList"] = array();


$tdatamares[".viewFields"] = array();
$tdatamares[".viewFields"][] = "id";
$tdatamares[".viewFields"][] = "cidade";
$tdatamares[".viewFields"][] = "dia";
$tdatamares[".viewFields"][] = "tempo";
$tdatamares[".viewFields"][] = "altura";

$tdatamares[".addFields"] = array();
$tdatamares[".addFields"][] = "cidade";
$tdatamares[".addFields"][] = "dia";
$tdatamares[".addFields"][] = "tempo";
$tdatamares[".addFields"][] = "altura";

$tdatamares[".masterListFields"] = array();
$tdatamares[".masterListFields"][] = "id";
$tdatamares[".masterListFields"][] = "cidade";
$tdatamares[".masterListFields"][] = "dia";
$tdatamares[".masterListFields"][] = "tempo";
$tdatamares[".masterListFields"][] = "altura";

$tdatamares[".inlineAddFields"] = array();

$tdatamares[".editFields"] = array();
$tdatamares[".editFields"][] = "cidade";
$tdatamares[".editFields"][] = "dia";
$tdatamares[".editFields"][] = "tempo";
$tdatamares[".editFields"][] = "altura";

$tdatamares[".inlineEditFields"] = array();

$tdatamares[".updateSelectedFields"] = array();


$tdatamares[".exportFields"] = array();
$tdatamares[".exportFields"][] = "cidade";
$tdatamares[".exportFields"][] = "dia";
$tdatamares[".exportFields"][] = "tempo";
$tdatamares[".exportFields"][] = "altura";

$tdatamares[".importFields"] = array();
$tdatamares[".importFields"][] = "cidade";
$tdatamares[".importFields"][] = "tempo";
$tdatamares[".importFields"][] = "altura";
$tdatamares[".importFields"][] = "dia";

$tdatamares[".printFields"] = array();
$tdatamares[".printFields"][] = "id";
$tdatamares[".printFields"][] = "cidade";
$tdatamares[".printFields"][] = "dia";
$tdatamares[".printFields"][] = "tempo";
$tdatamares[".printFields"][] = "altura";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mares";
	$fdata["Label"] = GetFieldLabel("mares","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdatamares["id"] = $fdata;
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "mares";
	$fdata["Label"] = GetFieldLabel("mares","cidade");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cidade";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cidade";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamares["cidade"] = $fdata;
//	tempo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tempo";
	$fdata["GoodName"] = "tempo";
	$fdata["ownerTable"] = "mares";
	$fdata["Label"] = GetFieldLabel("mares","tempo");
	$fdata["FieldType"] = 134;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tempo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tempo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatamares["tempo"] = $fdata;
//	altura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "altura";
	$fdata["GoodName"] = "altura";
	$fdata["ownerTable"] = "mares";
	$fdata["Label"] = GetFieldLabel("mares","altura");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "altura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "altura";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamares["altura"] = $fdata;
//	dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dia";
	$fdata["GoodName"] = "dia";
	$fdata["ownerTable"] = "mares";
	$fdata["Label"] = GetFieldLabel("mares","dia");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dia";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatamares["dia"] = $fdata;


$tables_data["mares"]=&$tdatamares;
$field_labels["mares"] = &$fieldLabelsmares;
$fieldToolTips["mares"] = &$fieldToolTipsmares;
$page_titles["mares"] = &$pageTitlesmares;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mares"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mares"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mares()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	cidade,  	tempo,  	altura,  	dia";
$proto0["m_strFrom"] = "FROM mares";
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
	"m_strTable" => "mares",
	"m_srcTableName" => "mares"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mares";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "mares",
	"m_srcTableName" => "mares"
));

$proto8["m_sql"] = "cidade";
$proto8["m_srcTableName"] = "mares";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tempo",
	"m_strTable" => "mares",
	"m_srcTableName" => "mares"
));

$proto10["m_sql"] = "tempo";
$proto10["m_srcTableName"] = "mares";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "altura",
	"m_strTable" => "mares",
	"m_srcTableName" => "mares"
));

$proto12["m_sql"] = "altura";
$proto12["m_srcTableName"] = "mares";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dia",
	"m_strTable" => "mares",
	"m_srcTableName" => "mares"
));

$proto14["m_sql"] = "dia";
$proto14["m_srcTableName"] = "mares";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "mares";
$proto17["m_srcTableName"] = "mares";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "cidade";
$proto17["m_columns"][] = "tempo";
$proto17["m_columns"][] = "altura";
$proto17["m_columns"][] = "dia";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "mares";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "mares";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mares";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mares = createSqlQuery_mares();


	
		;

					

$tdatamares[".sqlquery"] = $queryData_mares;

$tableEvents["mares"] = new eventsBase;
$tdatamares[".hasEvents"] = false;

?>