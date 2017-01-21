<?php
require_once(getabspath("classes/cipherer.php"));




$tdataevtellfriend = array();	
	$tdataevtellfriend[".truncateText"] = true;
	$tdataevtellfriend[".NumberOfChars"] = 80; 
	$tdataevtellfriend[".ShortName"] = "evtellfriend";
	$tdataevtellfriend[".OwnerID"] = "";
	$tdataevtellfriend[".OriginalTable"] = "evtellfriend";

//	field labels
$fieldLabelsevtellfriend = array();
$fieldToolTipsevtellfriend = array();
$pageTitlesevtellfriend = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsevtellfriend["English"] = array();
	$fieldToolTipsevtellfriend["English"] = array();
	$pageTitlesevtellfriend["English"] = array();
	$fieldLabelsevtellfriend["English"]["FromName"] = "From:";
	$fieldToolTipsevtellfriend["English"]["FromName"] = "";
	$fieldLabelsevtellfriend["English"]["EmailAddress1"] = "To:";
	$fieldToolTipsevtellfriend["English"]["EmailAddress1"] = "";
	$fieldLabelsevtellfriend["English"]["EmailAddress2"] = "2th Email:";
	$fieldToolTipsevtellfriend["English"]["EmailAddress2"] = "";
	$fieldLabelsevtellfriend["English"]["EmailAddress3"] = "3rd Email:";
	$fieldToolTipsevtellfriend["English"]["EmailAddress3"] = "";
	$fieldLabelsevtellfriend["English"]["EmailAddress4"] = "4th Email:";
	$fieldToolTipsevtellfriend["English"]["EmailAddress4"] = "";
	$fieldLabelsevtellfriend["English"]["EmailAddress5"] = "5th Email:";
	$fieldToolTipsevtellfriend["English"]["EmailAddress5"] = "";
	$fieldLabelsevtellfriend["English"]["EmailSubject"] = "Subject:";
	$fieldToolTipsevtellfriend["English"]["EmailSubject"] = "";
	$fieldLabelsevtellfriend["English"]["EmailBody"] = "Text:";
	$fieldToolTipsevtellfriend["English"]["EmailBody"] = "";
	if (count($fieldToolTipsevtellfriend["English"]))
		$tdataevtellfriend[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsevtellfriend[""] = array();
	$fieldToolTipsevtellfriend[""] = array();
	$pageTitlesevtellfriend[""] = array();
	if (count($fieldToolTipsevtellfriend[""]))
		$tdataevtellfriend[".isUseToolTips"] = true;
}
	
	



$tdataevtellfriend[".shortTableName"] = "evtellfriend";
$tdataevtellfriend[".nSecOptions"] = 0;
$tdataevtellfriend[".recsPerRowList"] = 1;
$tdataevtellfriend[".recsPerRowPrint"] = 1;
$tdataevtellfriend[".mainTableOwnerID"] = "";
$tdataevtellfriend[".moveNext"] = 1;
$tdataevtellfriend[".entityType"] = 0;

$tdataevtellfriend[".strOriginalTableName"] = "evtellfriend";




$tdataevtellfriend[".showAddInPopup"] = false;

$tdataevtellfriend[".showEditInPopup"] = false;

$tdataevtellfriend[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataevtellfriend[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataevtellfriend[".fieldsForRegister"] = array();

$tdataevtellfriend[".listAjax"] = false;

	$tdataevtellfriend[".audit"] = false;

	$tdataevtellfriend[".locking"] = false;


$tdataevtellfriend[".add"] = true;
$tdataevtellfriend[".afterAddAction"] = 1;
$tdataevtellfriend[".closePopupAfterAdd"] = 1;
$tdataevtellfriend[".afterAddActionDetTable"] = "";







$tdataevtellfriend[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataevtellfriend[".searchSaving"] = false;
//

$tdataevtellfriend[".showSearchPanel"] = true;
		$tdataevtellfriend[".flexibleSearch"] = true;		

if (isMobile())
	$tdataevtellfriend[".isUseAjaxSuggest"] = false;
else 
	$tdataevtellfriend[".isUseAjaxSuggest"] = true;

$tdataevtellfriend[".rowHighlite"] = true;



$tdataevtellfriend[".addPageEvents"] = false;

// use timepicker for search panel
$tdataevtellfriend[".isUseTimeForSearch"] = false;





$tdataevtellfriend[".allSearchFields"] = array();
$tdataevtellfriend[".filterFields"] = array();
$tdataevtellfriend[".requiredSearchFields"] = array();



$tdataevtellfriend[".googleLikeFields"] = array();
$tdataevtellfriend[".googleLikeFields"][] = "FromName";
$tdataevtellfriend[".googleLikeFields"][] = "EmailAddress1";
$tdataevtellfriend[".googleLikeFields"][] = "EmailAddress2";
$tdataevtellfriend[".googleLikeFields"][] = "EmailAddress3";
$tdataevtellfriend[".googleLikeFields"][] = "EmailAddress4";
$tdataevtellfriend[".googleLikeFields"][] = "EmailAddress5";
$tdataevtellfriend[".googleLikeFields"][] = "EmailSubject";
$tdataevtellfriend[".googleLikeFields"][] = "EmailBody";



$tdataevtellfriend[".tableType"] = "list";

$tdataevtellfriend[".printerPageOrientation"] = 0;
$tdataevtellfriend[".nPrinterPageScale"] = 100;

$tdataevtellfriend[".nPrinterSplitRecords"] = 40;

$tdataevtellfriend[".nPrinterPDFSplitRecords"] = 40;



$tdataevtellfriend[".geocodingEnabled"] = false;




	



$tdataevtellfriend[".searchIsRequiredForFilters"] = true;


// view page pdf

// print page pdf


$tdataevtellfriend[".pageSize"] = 20;

$tdataevtellfriend[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataevtellfriend[".strOrderBy"] = $tstrOrderBy;

$tdataevtellfriend[".orderindexes"] = array();

$tdataevtellfriend[".sqlHead"] = "select FromName,  EmailAddress1,  EmailAddress2,  EmailAddress3,  EmailAddress4,  EmailAddress5,  EmailSubject,  EmailBody";
$tdataevtellfriend[".sqlFrom"] = "FROM evtellfriend";
$tdataevtellfriend[".sqlWhereExpr"] = "";
$tdataevtellfriend[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataevtellfriend[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataevtellfriend[".arrGroupsPerPage"] = $arrGPP;


$tableKeysevtellfriend = array();
$tdataevtellfriend[".Keys"] = $tableKeysevtellfriend;

$tdataevtellfriend[".listFields"] = array();

$tdataevtellfriend[".hideMobileList"] = array();


$tdataevtellfriend[".viewFields"] = array();

$tdataevtellfriend[".addFields"] = array();
$tdataevtellfriend[".addFields"][] = "FromName";
$tdataevtellfriend[".addFields"][] = "EmailAddress1";
$tdataevtellfriend[".addFields"][] = "EmailAddress2";
$tdataevtellfriend[".addFields"][] = "EmailAddress3";
$tdataevtellfriend[".addFields"][] = "EmailAddress4";
$tdataevtellfriend[".addFields"][] = "EmailAddress5";
$tdataevtellfriend[".addFields"][] = "EmailSubject";
$tdataevtellfriend[".addFields"][] = "EmailBody";

$tdataevtellfriend[".masterListFields"] = array();

$tdataevtellfriend[".inlineAddFields"] = array();

$tdataevtellfriend[".editFields"] = array();

$tdataevtellfriend[".inlineEditFields"] = array();

$tdataevtellfriend[".exportFields"] = array();

$tdataevtellfriend[".importFields"] = array();
$tdataevtellfriend[".importFields"][] = "FromName";
$tdataevtellfriend[".importFields"][] = "EmailAddress1";
$tdataevtellfriend[".importFields"][] = "EmailAddress2";
$tdataevtellfriend[".importFields"][] = "EmailAddress3";
$tdataevtellfriend[".importFields"][] = "EmailAddress4";
$tdataevtellfriend[".importFields"][] = "EmailAddress5";
$tdataevtellfriend[".importFields"][] = "EmailSubject";
$tdataevtellfriend[".importFields"][] = "EmailBody";

$tdataevtellfriend[".printFields"] = array();

//	FromName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "FromName";
	$fdata["GoodName"] = "FromName";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","FromName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "FromName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FromName";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["FromName"] = $fdata;
//	EmailAddress1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EmailAddress1";
	$fdata["GoodName"] = "EmailAddress1";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailAddress1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailAddress1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress1";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailAddress1"] = $fdata;
//	EmailAddress2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EmailAddress2";
	$fdata["GoodName"] = "EmailAddress2";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailAddress2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailAddress2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress2";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailAddress2"] = $fdata;
//	EmailAddress3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "EmailAddress3";
	$fdata["GoodName"] = "EmailAddress3";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailAddress3"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailAddress3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress3";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailAddress3"] = $fdata;
//	EmailAddress4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "EmailAddress4";
	$fdata["GoodName"] = "EmailAddress4";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailAddress4"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailAddress4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress4";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailAddress4"] = $fdata;
//	EmailAddress5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EmailAddress5";
	$fdata["GoodName"] = "EmailAddress5";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailAddress5"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailAddress5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress5";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailAddress5"] = $fdata;
//	EmailSubject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailSubject";
	$fdata["GoodName"] = "EmailSubject";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailSubject"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailSubject"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailSubject";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
			$edata["EditParams"].= " maxlength=150";
	
		$edata["controlWidth"] = 483;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailSubject"] = $fdata;
//	EmailBody
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EmailBody";
	$fdata["GoodName"] = "EmailBody";
	$fdata["ownerTable"] = "evtellfriend";
	$fdata["Label"] = GetFieldLabel("evtellfriend","EmailBody"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailBody"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailBody";
	
		$fdata["DeleteAssociatedFile"] = true;
	
		
				
					
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
	
		
		
		
				$edata["nRows"] = 150;
			$edata["nCols"] = 500;
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataevtellfriend["EmailBody"] = $fdata;

	
$tables_data["evtellfriend"]=&$tdataevtellfriend;
$field_labels["evtellfriend"] = &$fieldLabelsevtellfriend;
$fieldToolTips["evtellfriend"] = &$fieldToolTipsevtellfriend;
$page_titles["evtellfriend"] = &$pageTitlesevtellfriend;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["evtellfriend"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["evtellfriend"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_evtellfriend()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "FromName,  EmailAddress1,  EmailAddress2,  EmailAddress3,  EmailAddress4,  EmailAddress5,  EmailSubject,  EmailBody";
$proto0["m_strFrom"] = "FROM evtellfriend";
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
	"m_strName" => "FromName",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto5["m_sql"] = "FromName";
$proto5["m_srcTableName"] = "evtellfriend";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress1",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto7["m_sql"] = "EmailAddress1";
$proto7["m_srcTableName"] = "evtellfriend";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress2",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto9["m_sql"] = "EmailAddress2";
$proto9["m_srcTableName"] = "evtellfriend";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress3",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto11["m_sql"] = "EmailAddress3";
$proto11["m_srcTableName"] = "evtellfriend";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress4",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto13["m_sql"] = "EmailAddress4";
$proto13["m_srcTableName"] = "evtellfriend";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress5",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto15["m_sql"] = "EmailAddress5";
$proto15["m_srcTableName"] = "evtellfriend";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailSubject",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto17["m_sql"] = "EmailSubject";
$proto17["m_srcTableName"] = "evtellfriend";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailBody",
	"m_strTable" => "evtellfriend",
	"m_srcTableName" => "evtellfriend"
));

$proto19["m_sql"] = "EmailBody";
$proto19["m_srcTableName"] = "evtellfriend";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "evtellfriend";
$proto22["m_srcTableName"] = "evtellfriend";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "EmailAddress1";
$proto22["m_columns"][] = "EmailAddress2";
$proto22["m_columns"][] = "EmailAddress3";
$proto22["m_columns"][] = "EmailAddress4";
$proto22["m_columns"][] = "EmailAddress5";
$proto22["m_columns"][] = "EmailBody";
$proto22["m_columns"][] = "EmailSubject";
$proto22["m_columns"][] = "FromName";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "evtellfriend";
$proto21["m_alias"] = "";
$proto21["m_srcTableName"] = "evtellfriend";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="evtellfriend";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_evtellfriend = createSqlQuery_evtellfriend();


	
								
	
$tdataevtellfriend[".sqlquery"] = $queryData_evtellfriend;

include_once(getabspath("include/evtellfriend_events.php"));
$tableEvents["evtellfriend"] = new eventclass_evtellfriend;
$tdataevtellfriend[".hasEvents"] = true;

?>