<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacidades = array();
	$tdatacidades[".truncateText"] = true;
	$tdatacidades[".NumberOfChars"] = 80;
	$tdatacidades[".ShortName"] = "cidades";
	$tdatacidades[".OwnerID"] = "";
	$tdatacidades[".OriginalTable"] = "cidades";

//	field labels
$fieldLabelscidades = array();
$fieldToolTipscidades = array();
$pageTitlescidades = array();

if(mlang_getcurrentlang()=="Portuguese(Standard)")
{
	$fieldLabelscidades["Portuguese(Standard)"] = array();
	$fieldToolTipscidades["Portuguese(Standard)"] = array();
	$pageTitlescidades["Portuguese(Standard)"] = array();
	$fieldLabelscidades["Portuguese(Standard)"]["id"] = "Id";
	$fieldToolTipscidades["Portuguese(Standard)"]["id"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["terra"] = "Terra";
	$fieldToolTipscidades["Portuguese(Standard)"]["terra"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["regiao"] = "Regiao";
	$fieldToolTipscidades["Portuguese(Standard)"]["regiao"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["cidade"] = "Cidade";
	$fieldToolTipscidades["Portuguese(Standard)"]["cidade"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["locale"] = "Locale";
	$fieldToolTipscidades["Portuguese(Standard)"]["locale"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["longitude"] = "Longitude";
	$fieldToolTipscidades["Portuguese(Standard)"]["longitude"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["latitude"] = "Latitude";
	$fieldToolTipscidades["Portuguese(Standard)"]["latitude"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["v1diascript"] = "V1diascript";
	$fieldToolTipscidades["Portuguese(Standard)"]["v1diascript"] = "";
	$fieldLabelscidades["Portuguese(Standard)"]["v3diasscript"] = "V3diasscript";
	$fieldToolTipscidades["Portuguese(Standard)"]["v3diasscript"] = "";
	if (count($fieldToolTipscidades["Portuguese(Standard)"]))
		$tdatacidades[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscidades[""] = array();
	$fieldToolTipscidades[""] = array();
	$pageTitlescidades[""] = array();
	$fieldLabelscidades[""]["v1diascript"] = "V1diascript";
	$fieldToolTipscidades[""]["v1diascript"] = "";
	$fieldLabelscidades[""]["v3diasscript"] = "V3diasscript";
	$fieldToolTipscidades[""]["v3diasscript"] = "";
	if (count($fieldToolTipscidades[""]))
		$tdatacidades[".isUseToolTips"] = true;
}


	$tdatacidades[".NCSearch"] = true;



$tdatacidades[".shortTableName"] = "cidades";
$tdatacidades[".nSecOptions"] = 0;
$tdatacidades[".recsPerRowPrint"] = 1;
$tdatacidades[".mainTableOwnerID"] = "";
$tdatacidades[".moveNext"] = 1;
$tdatacidades[".entityType"] = 0;

$tdatacidades[".strOriginalTableName"] = "cidades";

	



$tdatacidades[".showAddInPopup"] = false;

$tdatacidades[".showEditInPopup"] = false;

$tdatacidades[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacidades[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacidades[".fieldsForRegister"] = array();

$tdatacidades[".listAjax"] = false;

	$tdatacidades[".audit"] = false;

	$tdatacidades[".locking"] = false;

$tdatacidades[".edit"] = true;
$tdatacidades[".afterEditAction"] = 1;
$tdatacidades[".closePopupAfterEdit"] = 1;
$tdatacidades[".afterEditActionDetTable"] = "";

$tdatacidades[".add"] = true;
$tdatacidades[".afterAddAction"] = 1;
$tdatacidades[".closePopupAfterAdd"] = 1;
$tdatacidades[".afterAddActionDetTable"] = "";

$tdatacidades[".list"] = true;




$tdatacidades[".view"] = true;

$tdatacidades[".import"] = true;

$tdatacidades[".exportTo"] = true;

$tdatacidades[".printFriendly"] = true;

$tdatacidades[".delete"] = true;

$tdatacidades[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatacidades[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatacidades[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatacidades[".searchSaving"] = false;
//

$tdatacidades[".showSearchPanel"] = true;
		$tdatacidades[".flexibleSearch"] = true;

$tdatacidades[".isUseAjaxSuggest"] = true;

$tdatacidades[".rowHighlite"] = true;



$tdatacidades[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacidades[".isUseTimeForSearch"] = false;



$tdatacidades[".badgeColor"] = "DAA520";


$tdatacidades[".allSearchFields"] = array();
$tdatacidades[".filterFields"] = array();
$tdatacidades[".requiredSearchFields"] = array();

$tdatacidades[".allSearchFields"][] = "id";
	$tdatacidades[".allSearchFields"][] = "terra";
	$tdatacidades[".allSearchFields"][] = "regiao";
	$tdatacidades[".allSearchFields"][] = "cidade";
	$tdatacidades[".allSearchFields"][] = "locale";
	$tdatacidades[".allSearchFields"][] = "longitude";
	$tdatacidades[".allSearchFields"][] = "latitude";
	$tdatacidades[".allSearchFields"][] = "v1diascript";
	$tdatacidades[".allSearchFields"][] = "v3diasscript";
	

$tdatacidades[".googleLikeFields"] = array();
$tdatacidades[".googleLikeFields"][] = "id";
$tdatacidades[".googleLikeFields"][] = "terra";
$tdatacidades[".googleLikeFields"][] = "regiao";
$tdatacidades[".googleLikeFields"][] = "cidade";
$tdatacidades[".googleLikeFields"][] = "locale";
$tdatacidades[".googleLikeFields"][] = "longitude";
$tdatacidades[".googleLikeFields"][] = "latitude";
$tdatacidades[".googleLikeFields"][] = "v1diascript";
$tdatacidades[".googleLikeFields"][] = "v3diasscript";


$tdatacidades[".advSearchFields"] = array();
$tdatacidades[".advSearchFields"][] = "id";
$tdatacidades[".advSearchFields"][] = "terra";
$tdatacidades[".advSearchFields"][] = "regiao";
$tdatacidades[".advSearchFields"][] = "cidade";
$tdatacidades[".advSearchFields"][] = "locale";
$tdatacidades[".advSearchFields"][] = "longitude";
$tdatacidades[".advSearchFields"][] = "latitude";
$tdatacidades[".advSearchFields"][] = "v1diascript";
$tdatacidades[".advSearchFields"][] = "v3diasscript";

$tdatacidades[".tableType"] = "list";

$tdatacidades[".printerPageOrientation"] = 0;
$tdatacidades[".nPrinterPageScale"] = 100;

$tdatacidades[".nPrinterSplitRecords"] = 40;

$tdatacidades[".nPrinterPDFSplitRecords"] = 40;



$tdatacidades[".geocodingEnabled"] = false;





$tdatacidades[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatacidades[".pageSize"] = 20;

$tdatacidades[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacidades[".strOrderBy"] = $tstrOrderBy;

$tdatacidades[".orderindexes"] = array();

$tdatacidades[".sqlHead"] = "SELECT id,  	terra,  	regiao,  	cidade,  	locale,  	longitude,  	latitude,  	v1diascript,  	v3diasscript";
$tdatacidades[".sqlFrom"] = "FROM cidades";
$tdatacidades[".sqlWhereExpr"] = "";
$tdatacidades[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacidades[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacidades[".arrGroupsPerPage"] = $arrGPP;

$tdatacidades[".highlightSearchResults"] = true;

$tableKeyscidades = array();
$tableKeyscidades[] = "id";
$tdatacidades[".Keys"] = $tableKeyscidades;

$tdatacidades[".listFields"] = array();
$tdatacidades[".listFields"][] = "v1diascript";
$tdatacidades[".listFields"][] = "v3diasscript";
$tdatacidades[".listFields"][] = "id";
$tdatacidades[".listFields"][] = "terra";
$tdatacidades[".listFields"][] = "regiao";
$tdatacidades[".listFields"][] = "cidade";
$tdatacidades[".listFields"][] = "locale";
$tdatacidades[".listFields"][] = "longitude";
$tdatacidades[".listFields"][] = "latitude";

$tdatacidades[".hideMobileList"] = array();


$tdatacidades[".viewFields"] = array();
$tdatacidades[".viewFields"][] = "id";
$tdatacidades[".viewFields"][] = "terra";
$tdatacidades[".viewFields"][] = "regiao";
$tdatacidades[".viewFields"][] = "cidade";
$tdatacidades[".viewFields"][] = "locale";
$tdatacidades[".viewFields"][] = "longitude";
$tdatacidades[".viewFields"][] = "latitude";
$tdatacidades[".viewFields"][] = "v1diascript";
$tdatacidades[".viewFields"][] = "v3diasscript";

$tdatacidades[".addFields"] = array();
$tdatacidades[".addFields"][] = "terra";
$tdatacidades[".addFields"][] = "regiao";
$tdatacidades[".addFields"][] = "cidade";
$tdatacidades[".addFields"][] = "locale";
$tdatacidades[".addFields"][] = "longitude";
$tdatacidades[".addFields"][] = "latitude";
$tdatacidades[".addFields"][] = "v1diascript";
$tdatacidades[".addFields"][] = "v3diasscript";

$tdatacidades[".masterListFields"] = array();
$tdatacidades[".masterListFields"][] = "id";
$tdatacidades[".masterListFields"][] = "terra";
$tdatacidades[".masterListFields"][] = "regiao";
$tdatacidades[".masterListFields"][] = "cidade";
$tdatacidades[".masterListFields"][] = "locale";
$tdatacidades[".masterListFields"][] = "longitude";
$tdatacidades[".masterListFields"][] = "latitude";
$tdatacidades[".masterListFields"][] = "v1diascript";
$tdatacidades[".masterListFields"][] = "v3diasscript";

$tdatacidades[".inlineAddFields"] = array();
$tdatacidades[".inlineAddFields"][] = "v1diascript";
$tdatacidades[".inlineAddFields"][] = "v3diasscript";

$tdatacidades[".editFields"] = array();
$tdatacidades[".editFields"][] = "terra";
$tdatacidades[".editFields"][] = "regiao";
$tdatacidades[".editFields"][] = "cidade";
$tdatacidades[".editFields"][] = "locale";
$tdatacidades[".editFields"][] = "longitude";
$tdatacidades[".editFields"][] = "latitude";
$tdatacidades[".editFields"][] = "v1diascript";
$tdatacidades[".editFields"][] = "v3diasscript";

$tdatacidades[".inlineEditFields"] = array();
$tdatacidades[".inlineEditFields"][] = "v1diascript";
$tdatacidades[".inlineEditFields"][] = "v3diasscript";

$tdatacidades[".updateSelectedFields"] = array();


$tdatacidades[".exportFields"] = array();
$tdatacidades[".exportFields"][] = "id";
$tdatacidades[".exportFields"][] = "terra";
$tdatacidades[".exportFields"][] = "regiao";
$tdatacidades[".exportFields"][] = "cidade";
$tdatacidades[".exportFields"][] = "locale";
$tdatacidades[".exportFields"][] = "longitude";
$tdatacidades[".exportFields"][] = "latitude";
$tdatacidades[".exportFields"][] = "v1diascript";
$tdatacidades[".exportFields"][] = "v3diasscript";

$tdatacidades[".importFields"] = array();
$tdatacidades[".importFields"][] = "id";
$tdatacidades[".importFields"][] = "terra";
$tdatacidades[".importFields"][] = "regiao";
$tdatacidades[".importFields"][] = "cidade";
$tdatacidades[".importFields"][] = "locale";
$tdatacidades[".importFields"][] = "longitude";
$tdatacidades[".importFields"][] = "latitude";
$tdatacidades[".importFields"][] = "v1diascript";
$tdatacidades[".importFields"][] = "v3diasscript";

$tdatacidades[".printFields"] = array();
$tdatacidades[".printFields"][] = "id";
$tdatacidades[".printFields"][] = "terra";
$tdatacidades[".printFields"][] = "regiao";
$tdatacidades[".printFields"][] = "cidade";
$tdatacidades[".printFields"][] = "locale";
$tdatacidades[".printFields"][] = "longitude";
$tdatacidades[".printFields"][] = "latitude";
$tdatacidades[".printFields"][] = "v1diascript";
$tdatacidades[".printFields"][] = "v3diasscript";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","id");
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




	$tdatacidades["id"] = $fdata;
//	terra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "terra";
	$fdata["GoodName"] = "terra";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","terra");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "terra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "terra";

	
	
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




	$tdatacidades["terra"] = $fdata;
//	regiao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "regiao";
	$fdata["GoodName"] = "regiao";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","regiao");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "regiao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "regiao";

	
	
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




	$tdatacidades["regiao"] = $fdata;
//	cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cidade";
	$fdata["GoodName"] = "cidade";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","cidade");
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




	$tdatacidades["cidade"] = $fdata;
//	locale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "locale";
	$fdata["GoodName"] = "locale";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","locale");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "locale";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "locale";

	
	
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




	$tdatacidades["locale"] = $fdata;
//	longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "longitude";
	$fdata["GoodName"] = "longitude";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","longitude");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "longitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitude";

	
	
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




	$tdatacidades["longitude"] = $fdata;
//	latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "latitude";
	$fdata["GoodName"] = "latitude";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","latitude");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "latitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitude";

	
	
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




	$tdatacidades["latitude"] = $fdata;
//	v1diascript
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "v1diascript";
	$fdata["GoodName"] = "v1diascript";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","v1diascript");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "v1diascript";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v1diascript";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatacidades["v1diascript"] = $fdata;
//	v3diasscript
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "v3diasscript";
	$fdata["GoodName"] = "v3diasscript";
	$fdata["ownerTable"] = "cidades";
	$fdata["Label"] = GetFieldLabel("cidades","v3diasscript");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "v3diasscript";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v3diasscript";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatacidades["v3diasscript"] = $fdata;


$tables_data["cidades"]=&$tdatacidades;
$field_labels["cidades"] = &$fieldLabelscidades;
$fieldToolTips["cidades"] = &$fieldToolTipscidades;
$page_titles["cidades"] = &$pageTitlescidades;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["cidades"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["cidades"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_cidades()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	terra,  	regiao,  	cidade,  	locale,  	longitude,  	latitude,  	v1diascript,  	v3diasscript";
$proto0["m_strFrom"] = "FROM cidades";
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
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "cidades";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "terra",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto8["m_sql"] = "terra";
$proto8["m_srcTableName"] = "cidades";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "regiao",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto10["m_sql"] = "regiao";
$proto10["m_srcTableName"] = "cidades";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cidade",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto12["m_sql"] = "cidade";
$proto12["m_srcTableName"] = "cidades";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "locale",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto14["m_sql"] = "locale";
$proto14["m_srcTableName"] = "cidades";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "longitude",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto16["m_sql"] = "longitude";
$proto16["m_srcTableName"] = "cidades";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto18["m_sql"] = "latitude";
$proto18["m_srcTableName"] = "cidades";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "v1diascript",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto20["m_sql"] = "v1diascript";
$proto20["m_srcTableName"] = "cidades";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "v3diasscript",
	"m_strTable" => "cidades",
	"m_srcTableName" => "cidades"
));

$proto22["m_sql"] = "v3diasscript";
$proto22["m_srcTableName"] = "cidades";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "cidades";
$proto25["m_srcTableName"] = "cidades";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "terra";
$proto25["m_columns"][] = "regiao";
$proto25["m_columns"][] = "cidade";
$proto25["m_columns"][] = "locale";
$proto25["m_columns"][] = "longitude";
$proto25["m_columns"][] = "latitude";
$proto25["m_columns"][] = "v1diascript";
$proto25["m_columns"][] = "v3diasscript";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "cidades";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "cidades";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cidades";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cidades = createSqlQuery_cidades();


	
		;

									

$tdatacidades[".sqlquery"] = $queryData_cidades;

include_once(getabspath("include/cidades_events.php"));
$tableEvents["cidades"] = new eventclass_cidades;
$tdatacidades[".hasEvents"] = true;

?>