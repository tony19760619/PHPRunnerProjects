<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevusers = array();	
	$tdataevusers[".truncateText"] = true;
	$tdataevusers[".NumberOfChars"] = 80; 
	$tdataevusers[".ShortName"] = "evusers";
	$tdataevusers[".OwnerID"] = "";
	$tdataevusers[".OriginalTable"] = "evusers";

//	field labels
$fieldLabelsevusers = array();
$fieldToolTipsevusers = array();
$pageTitlesevusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevusers["English"] = array();
	$fieldToolTipsevusers["English"] = array();
	$pageTitlesevusers["English"] = array();
	$fieldLabelsevusers["English"]["ID"] = "ID";
	$fieldToolTipsevusers["English"]["ID"] = "";
	$fieldLabelsevusers["English"]["Username"] = "Username";
	$fieldToolTipsevusers["English"]["Username"] = "";
	$fieldLabelsevusers["English"]["Password"] = "Password";
	$fieldToolTipsevusers["English"]["Password"] = "";
	$fieldLabelsevusers["English"]["Group"] = "Group";
	$fieldToolTipsevusers["English"]["Group"] = "";
	$fieldLabelsevusers["English"]["Email"] = "Email";
	$fieldToolTipsevusers["English"]["Email"] = "";
	if (count($fieldToolTipsevusers["English"]))
		$tdataevusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevusers[""] = array();
	$fieldToolTipsevusers[""] = array();
	$pageTitlesevusers[""] = array();
	if (count($fieldToolTipsevusers[""]))
		$tdataevusers[".isUseToolTips"] = true;
}
	
	



$tdataevusers[".shortTableName"] = "evusers";
$tdataevusers[".nSecOptions"] = 0;
$tdataevusers[".recsPerRowList"] = 1;
$tdataevusers[".recsPerRowPrint"] = 1;
$tdataevusers[".mainTableOwnerID"] = "";
$tdataevusers[".moveNext"] = 1;
$tdataevusers[".entityType"] = 0;

$tdataevusers[".strOriginalTableName"] = "evusers";




$tdataevusers[".showAddInPopup"] = false;

$tdataevusers[".showEditInPopup"] = false;

$tdataevusers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevusers[".fieldsForRegister"] = array();

$tdataevusers[".listAjax"] = false;

	$tdataevusers[".audit"] = false;

	$tdataevusers[".locking"] = false;

$tdataevusers[".edit"] = true;
$tdataevusers[".afterEditAction"] = 1;
$tdataevusers[".closePopupAfterEdit"] = 1;
$tdataevusers[".afterEditActionDetTable"] = "";

$tdataevusers[".add"] = true;
$tdataevusers[".afterAddAction"] = 1;
$tdataevusers[".closePopupAfterAdd"] = 1;
$tdataevusers[".afterAddActionDetTable"] = "";

$tdataevusers[".list"] = true;

$tdataevusers[".inlineEdit"] = true;
$tdataevusers[".inlineAdd"] = true;
$tdataevusers[".view"] = true;


$tdataevusers[".exportTo"] = true;

$tdataevusers[".printFriendly"] = true;

$tdataevusers[".delete"] = true;

$tdataevusers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataevusers[".searchSaving"] = false;
//

$tdataevusers[".showSearchPanel"] = true;
		$tdataevusers[".flexibleSearch"] = true;		

if (isMobile())
	$tdataevusers[".isUseAjaxSuggest"] = false;
else 
	$tdataevusers[".isUseAjaxSuggest"] = true;

$tdataevusers[".rowHighlite"] = true;



$tdataevusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevusers[".isUseTimeForSearch"] = false;





$tdataevusers[".allSearchFields"] = array();
$tdataevusers[".filterFields"] = array();
$tdataevusers[".requiredSearchFields"] = array();

$tdataevusers[".allSearchFields"][] = "ID";
	$tdataevusers[".allSearchFields"][] = "Username";
	$tdataevusers[".allSearchFields"][] = "Password";
	$tdataevusers[".allSearchFields"][] = "Group";
	$tdataevusers[".allSearchFields"][] = "Email";
	

$tdataevusers[".googleLikeFields"] = array();
$tdataevusers[".googleLikeFields"][] = "ID";
$tdataevusers[".googleLikeFields"][] = "Username";
$tdataevusers[".googleLikeFields"][] = "Password";
$tdataevusers[".googleLikeFields"][] = "Group";
$tdataevusers[".googleLikeFields"][] = "Email";


$tdataevusers[".advSearchFields"] = array();
$tdataevusers[".advSearchFields"][] = "ID";
$tdataevusers[".advSearchFields"][] = "Username";
$tdataevusers[".advSearchFields"][] = "Password";
$tdataevusers[".advSearchFields"][] = "Group";
$tdataevusers[".advSearchFields"][] = "Email";

$tdataevusers[".tableType"] = "list";

$tdataevusers[".printerPageOrientation"] = 0;
$tdataevusers[".nPrinterPageScale"] = 100;

$tdataevusers[".nPrinterSplitRecords"] = 40;

$tdataevusers[".nPrinterPDFSplitRecords"] = 40;



$tdataevusers[".geocodingEnabled"] = false;




	



$tdataevusers[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataevusers[".pageSize"] = 20;

$tdataevusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevusers[".strOrderBy"] = $tstrOrderBy;

$tdataevusers[".orderindexes"] = array();

$tdataevusers[".sqlHead"] = "select ID,  Username,  Password,  `Group`,  Email";
$tdataevusers[".sqlFrom"] = "FROM evusers";
$tdataevusers[".sqlWhereExpr"] = "";
$tdataevusers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevusers[".arrGroupsPerPage"] = $arrGPP;


$tableKeysevusers = array();
$tableKeysevusers[] = "ID";
$tdataevusers[".Keys"] = $tableKeysevusers;

$tdataevusers[".listFields"] = array();
$tdataevusers[".listFields"][] = "ID";
$tdataevusers[".listFields"][] = "Username";
$tdataevusers[".listFields"][] = "Password";
$tdataevusers[".listFields"][] = "Group";
$tdataevusers[".listFields"][] = "Email";

$tdataevusers[".hideMobileList"] = array();


$tdataevusers[".viewFields"] = array();
$tdataevusers[".viewFields"][] = "ID";
$tdataevusers[".viewFields"][] = "Username";
$tdataevusers[".viewFields"][] = "Password";
$tdataevusers[".viewFields"][] = "Group";
$tdataevusers[".viewFields"][] = "Email";

$tdataevusers[".addFields"] = array();
$tdataevusers[".addFields"][] = "Username";
$tdataevusers[".addFields"][] = "Password";
$tdataevusers[".addFields"][] = "Group";
$tdataevusers[".addFields"][] = "Email";

$tdataevusers[".masterListFields"] = array();

$tdataevusers[".inlineAddFields"] = array();
$tdataevusers[".inlineAddFields"][] = "Username";
$tdataevusers[".inlineAddFields"][] = "Password";
$tdataevusers[".inlineAddFields"][] = "Group";
$tdataevusers[".inlineAddFields"][] = "Email";

$tdataevusers[".editFields"] = array();
$tdataevusers[".editFields"][] = "Username";
$tdataevusers[".editFields"][] = "Password";
$tdataevusers[".editFields"][] = "Group";
$tdataevusers[".editFields"][] = "Email";

$tdataevusers[".inlineEditFields"] = array();
$tdataevusers[".inlineEditFields"][] = "Username";
$tdataevusers[".inlineEditFields"][] = "Password";
$tdataevusers[".inlineEditFields"][] = "Group";
$tdataevusers[".inlineEditFields"][] = "Email";

$tdataevusers[".exportFields"] = array();
$tdataevusers[".exportFields"][] = "ID";
$tdataevusers[".exportFields"][] = "Username";
$tdataevusers[".exportFields"][] = "Password";
$tdataevusers[".exportFields"][] = "Group";
$tdataevusers[".exportFields"][] = "Email";

$tdataevusers[".importFields"] = array();
$tdataevusers[".importFields"][] = "ID";
$tdataevusers[".importFields"][] = "Username";
$tdataevusers[".importFields"][] = "Password";
$tdataevusers[".importFields"][] = "Group";
$tdataevusers[".importFields"][] = "Email";

$tdataevusers[".printFields"] = array();
$tdataevusers[".printFields"][] = "ID";
$tdataevusers[".printFields"][] = "Username";
$tdataevusers[".printFields"][] = "Password";
$tdataevusers[".printFields"][] = "Group";
$tdataevusers[".printFields"][] = "Email";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "evusers";
	$fdata["Label"] = GetFieldLabel("evusers","ID"); 
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
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataevusers["ID"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "evusers";
	$fdata["Label"] = GetFieldLabel("evusers","Username"); 
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
	
		$fdata["strField"] = "Username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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

	

	
	$tdataevusers["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "evusers";
	$fdata["Label"] = GetFieldLabel("evusers","Password"); 
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
	
		$fdata["strField"] = "Password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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

	

	
	$tdataevusers["Password"] = $fdata;
//	Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Group";
	$fdata["GoodName"] = "Group";
	$fdata["ownerTable"] = "evusers";
	$fdata["Label"] = GetFieldLabel("evusers","Group"); 
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
	
		$fdata["strField"] = "Group"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Group`";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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

	

	
	$tdataevusers["Group"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "evusers";
	$fdata["Label"] = GetFieldLabel("evusers","Email"); 
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
	
		$fdata["strField"] = "Email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				$fdata["FieldPermissions"] = true;
	
					
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

	

	
	$tdataevusers["Email"] = $fdata;

	
$tables_data["evusers"]=&$tdataevusers;
$field_labels["evusers"] = &$fieldLabelsevusers;
$fieldToolTips["evusers"] = &$fieldToolTipsevusers;
$page_titles["evusers"] = &$pageTitlesevusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evusers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["evusers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evusers()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "ID,  Username,  Password,  `Group`,  Email";
$proto0["m_strFrom"] = "FROM evusers";
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
	"m_strName" => "ID",
	"m_strTable" => "evusers",
	"m_srcTableName" => "evusers"
));

$proto5["m_sql"] = "ID";
$proto5["m_srcTableName"] = "evusers";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "evusers",
	"m_srcTableName" => "evusers"
));

$proto7["m_sql"] = "Username";
$proto7["m_srcTableName"] = "evusers";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "evusers",
	"m_srcTableName" => "evusers"
));

$proto9["m_sql"] = "Password";
$proto9["m_srcTableName"] = "evusers";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Group",
	"m_strTable" => "evusers",
	"m_srcTableName" => "evusers"
));

$proto11["m_sql"] = "`Group`";
$proto11["m_srcTableName"] = "evusers";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "evusers",
	"m_srcTableName" => "evusers"
));

$proto13["m_sql"] = "Email";
$proto13["m_srcTableName"] = "evusers";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "evusers";
$proto16["m_srcTableName"] = "evusers";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "Email";
$proto16["m_columns"][] = "Group";
$proto16["m_columns"][] = "ID";
$proto16["m_columns"][] = "Password";
$proto16["m_columns"][] = "Username";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "evusers";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "evusers";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evusers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evusers = createSqlQuery_evusers();


	
					
	
$tdataevusers[".sqlquery"] = $queryData_evusers;

$tableEvents["evusers"] = new eventsBase;
$tdataevusers[".hasEvents"] = false;

?>