<?php
require_once(getabspath("classes/cipherer.php"));




$tdatajobsusers = array();	
	$tdatajobsusers[".truncateText"] = true;
	$tdatajobsusers[".NumberOfChars"] = 80; 
	$tdatajobsusers[".ShortName"] = "jobsusers";
	$tdatajobsusers[".OwnerID"] = "";
	$tdatajobsusers[".OriginalTable"] = "jobsusers";

//	field labels
$fieldLabelsjobsusers = array();
$fieldToolTipsjobsusers = array();
$pageTitlesjobsusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsjobsusers["English"] = array();
	$fieldToolTipsjobsusers["English"] = array();
	$pageTitlesjobsusers["English"] = array();
	$fieldLabelsjobsusers["English"]["Email"] = "Email";
	$fieldToolTipsjobsusers["English"]["Email"] = "";
	$fieldLabelsjobsusers["English"]["Group"] = "Group";
	$fieldToolTipsjobsusers["English"]["Group"] = "";
	$fieldLabelsjobsusers["English"]["ID"] = "ID";
	$fieldToolTipsjobsusers["English"]["ID"] = "";
	$fieldLabelsjobsusers["English"]["Password"] = "Password";
	$fieldToolTipsjobsusers["English"]["Password"] = "";
	$fieldLabelsjobsusers["English"]["Username"] = "Username";
	$fieldToolTipsjobsusers["English"]["Username"] = "";
	if (count($fieldToolTipsjobsusers["English"]))
		$tdatajobsusers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsjobsusers[""] = array();
	$fieldToolTipsjobsusers[""] = array();
	$pageTitlesjobsusers[""] = array();
	if (count($fieldToolTipsjobsusers[""]))
		$tdatajobsusers[".isUseToolTips"] = true;
}
	
	
	$tdatajobsusers[".NCSearch"] = true;



$tdatajobsusers[".shortTableName"] = "jobsusers";
$tdatajobsusers[".nSecOptions"] = 0;
$tdatajobsusers[".recsPerRowList"] = 1;
$tdatajobsusers[".mainTableOwnerID"] = "";
$tdatajobsusers[".moveNext"] = 1;
$tdatajobsusers[".nType"] = 0;

$tdatajobsusers[".strOriginalTableName"] = "jobsusers";




$tdatajobsusers[".showAddInPopup"] = true;

$tdatajobsusers[".showEditInPopup"] = true;

$tdatajobsusers[".showViewInPopup"] = true;

//page's base css files names
$popupPagesLayoutNames = array();
						
	;
$popupPagesLayoutNames["add"] = "add2";
						
	;
$popupPagesLayoutNames["edit"] = "edit2";
						
	;
$popupPagesLayoutNames["view"] = "view2";
$tdatajobsusers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatajobsusers[".fieldsForRegister"] = array();
	//Begin register settings
			$tdatajobsusers[".fieldsForRegister"] = array();
$tdatajobsusers[".fieldsForRegister"][] = "Username";
			$tdatajobsusers[".fieldsForRegister"][] = "Password";
			$tdatajobsusers[".fieldsForRegister"][] = "Email";
/*
$tdatajobsusers[".PasswordField"] = "Password";
$tdatajobsusers[".UserNameField"] = "Username";	
*/
//End register settings	

$tdatajobsusers[".listAjax"] = false;

	$tdatajobsusers[".audit"] = false;

	$tdatajobsusers[".locking"] = false;

$tdatajobsusers[".edit"] = true;

$tdatajobsusers[".list"] = true;

$tdatajobsusers[".inlineEdit"] = true;
$tdatajobsusers[".inlineAdd"] = true;
$tdatajobsusers[".view"] = true;

$tdatajobsusers[".import"] = true;

$tdatajobsusers[".exportTo"] = true;

$tdatajobsusers[".printFriendly"] = true;

$tdatajobsusers[".delete"] = true;

$tdatajobsusers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatajobsusers[".searchSaving"] = false;
//

$tdatajobsusers[".showSearchPanel"] = true;
		$tdatajobsusers[".flexibleSearch"] = true;		

if (isMobile())
	$tdatajobsusers[".isUseAjaxSuggest"] = false;
else 
	$tdatajobsusers[".isUseAjaxSuggest"] = true;

$tdatajobsusers[".rowHighlite"] = true;



$tdatajobsusers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatajobsusers[".isUseTimeForSearch"] = false;





$tdatajobsusers[".allSearchFields"] = array();
$tdatajobsusers[".filterFields"] = array();
$tdatajobsusers[".requiredSearchFields"] = array();

$tdatajobsusers[".allSearchFields"][] = "Email";
	$tdatajobsusers[".allSearchFields"][] = "Group";
	$tdatajobsusers[".allSearchFields"][] = "Password";
	$tdatajobsusers[".allSearchFields"][] = "Username";
	

$tdatajobsusers[".googleLikeFields"] = array();
$tdatajobsusers[".googleLikeFields"][] = "Email";
$tdatajobsusers[".googleLikeFields"][] = "Group";
$tdatajobsusers[".googleLikeFields"][] = "ID";
$tdatajobsusers[".googleLikeFields"][] = "Password";
$tdatajobsusers[".googleLikeFields"][] = "Username";


$tdatajobsusers[".advSearchFields"] = array();
$tdatajobsusers[".advSearchFields"][] = "Email";
$tdatajobsusers[".advSearchFields"][] = "Group";
$tdatajobsusers[".advSearchFields"][] = "Password";
$tdatajobsusers[".advSearchFields"][] = "Username";

$tdatajobsusers[".tableType"] = "list";

$tdatajobsusers[".printerPageOrientation"] = 0;
$tdatajobsusers[".nPrinterPageScale"] = 100;

$tdatajobsusers[".nPrinterSplitRecords"] = 40;

$tdatajobsusers[".nPrinterPDFSplitRecords"] = 40;





	



$tdatajobsusers[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdatajobsusers[".pageSize"] = 20;

$tdatajobsusers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatajobsusers[".strOrderBy"] = $tstrOrderBy;

$tdatajobsusers[".orderindexes"] = array();

$tdatajobsusers[".sqlHead"] = "SELECT Email,  `Group`,  ID,  Password,  Username";
$tdatajobsusers[".sqlFrom"] = "FROM jobsusers";
$tdatajobsusers[".sqlWhereExpr"] = "";
$tdatajobsusers[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatajobsusers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatajobsusers[".arrGroupsPerPage"] = $arrGPP;


$tableKeysjobsusers = array();
$tableKeysjobsusers[] = "ID";
$tdatajobsusers[".Keys"] = $tableKeysjobsusers;

$tdatajobsusers[".listFields"] = array();
$tdatajobsusers[".listFields"][] = "Username";
$tdatajobsusers[".listFields"][] = "Password";
$tdatajobsusers[".listFields"][] = "Email";
$tdatajobsusers[".listFields"][] = "Group";

$tdatajobsusers[".hideMobileList"] = array();


$tdatajobsusers[".viewFields"] = array();
$tdatajobsusers[".viewFields"][] = "Username";
$tdatajobsusers[".viewFields"][] = "Password";
$tdatajobsusers[".viewFields"][] = "Email";
$tdatajobsusers[".viewFields"][] = "Group";

$tdatajobsusers[".addFields"] = array();
$tdatajobsusers[".addFields"][] = "Username";
$tdatajobsusers[".addFields"][] = "Password";
$tdatajobsusers[".addFields"][] = "Email";
$tdatajobsusers[".addFields"][] = "Group";

$tdatajobsusers[".inlineAddFields"] = array();
$tdatajobsusers[".inlineAddFields"][] = "Username";
$tdatajobsusers[".inlineAddFields"][] = "Password";
$tdatajobsusers[".inlineAddFields"][] = "Email";
$tdatajobsusers[".inlineAddFields"][] = "Group";

$tdatajobsusers[".editFields"] = array();
$tdatajobsusers[".editFields"][] = "Username";
$tdatajobsusers[".editFields"][] = "Password";
$tdatajobsusers[".editFields"][] = "Email";
$tdatajobsusers[".editFields"][] = "Group";

$tdatajobsusers[".inlineEditFields"] = array();
$tdatajobsusers[".inlineEditFields"][] = "Username";
$tdatajobsusers[".inlineEditFields"][] = "Password";
$tdatajobsusers[".inlineEditFields"][] = "Email";
$tdatajobsusers[".inlineEditFields"][] = "Group";

$tdatajobsusers[".exportFields"] = array();
$tdatajobsusers[".exportFields"][] = "Username";
$tdatajobsusers[".exportFields"][] = "Password";
$tdatajobsusers[".exportFields"][] = "Email";
$tdatajobsusers[".exportFields"][] = "Group";

$tdatajobsusers[".importFields"] = array();
$tdatajobsusers[".importFields"][] = "Email";
$tdatajobsusers[".importFields"][] = "Group";
$tdatajobsusers[".importFields"][] = "ID";
$tdatajobsusers[".importFields"][] = "Password";
$tdatajobsusers[".importFields"][] = "Username";

$tdatajobsusers[".printFields"] = array();
$tdatajobsusers[".printFields"][] = "Username";
$tdatajobsusers[".printFields"][] = "Password";
$tdatajobsusers[".printFields"][] = "Email";
$tdatajobsusers[".printFields"][] = "Group";

//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "jobsusers";
	$fdata["Label"] = GetFieldLabel("jobsusers","Email"); 
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
			$edata["EditParams"].= " maxlength=50";
	
		
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
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsusers["Email"] = $fdata;
//	Group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Group";
	$fdata["GoodName"] = "Group";
	$fdata["ownerTable"] = "jobsusers";
	$fdata["Label"] = GetFieldLabel("jobsusers","Group"); 
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

	

	
	$tdatajobsusers["Group"] = $fdata;
//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "jobsusers";
	$fdata["Label"] = GetFieldLabel("jobsusers","ID"); 
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
	
	
	
	

	

	
	$tdatajobsusers["ID"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "jobsusers";
	$fdata["Label"] = GetFieldLabel("jobsusers","Password"); 
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsusers["Password"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "jobsusers";
	$fdata["Label"] = GetFieldLabel("jobsusers","Username"); 
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
	
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
		//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatajobsusers["Username"] = $fdata;

	
$tables_data["jobsusers"]=&$tdatajobsusers;
$field_labels["jobsusers"] = &$fieldLabelsjobsusers;
$fieldToolTips["jobsusers"] = &$fieldToolTipsjobsusers;
$page_titles["jobsusers"] = &$pageTitlesjobsusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["jobsusers"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["jobsusers"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_jobsusers()
{
$proto3=array();
$proto3["m_strHead"] = "SELECT";
$proto3["m_strFieldList"] = "Email,  `Group`,  ID,  Password,  Username";
$proto3["m_strFrom"] = "FROM jobsusers";
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
	"m_strName" => "Email",
	"m_strTable" => "jobsusers",
	"m_srcTableName" => "jobsusers"
));

$proto8["m_sql"] = "Email";
$proto8["m_srcTableName"] = "jobsusers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto3["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Group",
	"m_strTable" => "jobsusers",
	"m_srcTableName" => "jobsusers"
));

$proto10["m_sql"] = "`Group`";
$proto10["m_srcTableName"] = "jobsusers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto3["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "jobsusers",
	"m_srcTableName" => "jobsusers"
));

$proto12["m_sql"] = "ID";
$proto12["m_srcTableName"] = "jobsusers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto3["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "jobsusers",
	"m_srcTableName" => "jobsusers"
));

$proto14["m_sql"] = "Password";
$proto14["m_srcTableName"] = "jobsusers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto3["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "jobsusers",
	"m_srcTableName" => "jobsusers"
));

$proto16["m_sql"] = "Username";
$proto16["m_srcTableName"] = "jobsusers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto3["m_fieldlist"][]=$obj;
$proto3["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "jobsusers";
$proto19["m_srcTableName"] = "jobsusers";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "Email";
$proto19["m_columns"][] = "Group";
$proto19["m_columns"][] = "ID";
$proto19["m_columns"][] = "Password";
$proto19["m_columns"][] = "Username";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "jobsusers";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "jobsusers";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto3["m_fromlist"][]=$obj;
$proto3["m_groupby"] = array();
$proto3["m_orderby"] = array();
$proto3["m_srcTableName"]="jobsusers";		
$obj = new SQLQuery($proto3);

	return $obj;
}
$queryData_jobsusers = createSqlQuery_jobsusers();


	
					
	
$tdatajobsusers[".sqlquery"] = $queryData_jobsusers;

$tableEvents["jobsusers"] = new eventsBase;
$tdatajobsusers[".hasEvents"] = false;

?>