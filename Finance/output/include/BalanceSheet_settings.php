<?php
require_once(getabspath("classes/cipherer.php"));




$tdataBalanceSheet = array();	
	$tdataBalanceSheet[".truncateText"] = true;
	$tdataBalanceSheet[".NumberOfChars"] = 80; 
	$tdataBalanceSheet[".ShortName"] = "BalanceSheet";
	$tdataBalanceSheet[".OwnerID"] = "";
	$tdataBalanceSheet[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsBalanceSheet = array();
$fieldToolTipsBalanceSheet = array();
$pageTitlesBalanceSheet = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsBalanceSheet["English"] = array();
	$fieldToolTipsBalanceSheet["English"] = array();
	$pageTitlesBalanceSheet["English"] = array();
	$fieldLabelsBalanceSheet["English"]["AccountType"] = "Account Type";
	$fieldToolTipsBalanceSheet["English"]["AccountType"] = "";
	$fieldLabelsBalanceSheet["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsBalanceSheet["English"]["InterestAmount"] = "";
	if (count($fieldToolTipsBalanceSheet["English"]))
		$tdataBalanceSheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsBalanceSheet[""] = array();
	$fieldToolTipsBalanceSheet[""] = array();
	$pageTitlesBalanceSheet[""] = array();
	$fieldLabelsBalanceSheet[""]["AccountType"] = "Account Type";
	$fieldToolTipsBalanceSheet[""]["AccountType"] = "";
	$fieldLabelsBalanceSheet[""]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsBalanceSheet[""]["InterestAmount"] = "";
	if (count($fieldToolTipsBalanceSheet[""]))
		$tdataBalanceSheet[".isUseToolTips"] = true;
}
	
	
	$tdataBalanceSheet[".NCSearch"] = true;



$tdataBalanceSheet[".shortTableName"] = "BalanceSheet";
$tdataBalanceSheet[".nSecOptions"] = 0;
$tdataBalanceSheet[".recsPerRowList"] = 1;
$tdataBalanceSheet[".recsPerRowPrint"] = 1;
$tdataBalanceSheet[".mainTableOwnerID"] = "";
$tdataBalanceSheet[".moveNext"] = 1;
$tdataBalanceSheet[".entityType"] = 1;

$tdataBalanceSheet[".strOriginalTableName"] = "transactions";




$tdataBalanceSheet[".showAddInPopup"] = false;

$tdataBalanceSheet[".showEditInPopup"] = false;

$tdataBalanceSheet[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataBalanceSheet[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataBalanceSheet[".fieldsForRegister"] = array();

$tdataBalanceSheet[".listAjax"] = false;

	$tdataBalanceSheet[".audit"] = false;

	$tdataBalanceSheet[".locking"] = false;



$tdataBalanceSheet[".list"] = true;




$tdataBalanceSheet[".printFriendly"] = true;


$tdataBalanceSheet[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataBalanceSheet[".searchSaving"] = false;
//

$tdataBalanceSheet[".showSearchPanel"] = true;
		$tdataBalanceSheet[".flexibleSearch"] = true;		

if (isMobile())
	$tdataBalanceSheet[".isUseAjaxSuggest"] = false;
else 
	$tdataBalanceSheet[".isUseAjaxSuggest"] = true;

$tdataBalanceSheet[".rowHighlite"] = true;



$tdataBalanceSheet[".addPageEvents"] = false;

// use timepicker for search panel
$tdataBalanceSheet[".isUseTimeForSearch"] = false;





$tdataBalanceSheet[".allSearchFields"] = array();
$tdataBalanceSheet[".filterFields"] = array();
$tdataBalanceSheet[".requiredSearchFields"] = array();

$tdataBalanceSheet[".allSearchFields"][] = "AccountType";
	$tdataBalanceSheet[".allSearchFields"][] = "InterestAmount";
	

$tdataBalanceSheet[".googleLikeFields"] = array();
$tdataBalanceSheet[".googleLikeFields"][] = "AccountType";
$tdataBalanceSheet[".googleLikeFields"][] = "InterestAmount";


$tdataBalanceSheet[".advSearchFields"] = array();
$tdataBalanceSheet[".advSearchFields"][] = "AccountType";
$tdataBalanceSheet[".advSearchFields"][] = "InterestAmount";

$tdataBalanceSheet[".tableType"] = "list";

$tdataBalanceSheet[".printerPageOrientation"] = 0;
$tdataBalanceSheet[".nPrinterPageScale"] = 100;

$tdataBalanceSheet[".nPrinterSplitRecords"] = 40;

$tdataBalanceSheet[".nPrinterPDFSplitRecords"] = 40;



$tdataBalanceSheet[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf

$tdataBalanceSheet[".totalsFields"] = array();
$tdataBalanceSheet[".totalsFields"][] = array(
	"fName" => "InterestAmount", 
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataBalanceSheet[".pageSize"] = 20;

$tdataBalanceSheet[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataBalanceSheet[".strOrderBy"] = $tstrOrderBy;

$tdataBalanceSheet[".orderindexes"] = array();

$tdataBalanceSheet[".sqlHead"] = "SELECT AccountType,  SUM(InterestAmount) AS InterestAmount";
$tdataBalanceSheet[".sqlFrom"] = "FROM transactions";
$tdataBalanceSheet[".sqlWhereExpr"] = "(`DateTime` between DATE_SUB(NOW(), INTERVAL 1 MONTH) and NOW())  and  ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$tdataBalanceSheet[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataBalanceSheet[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataBalanceSheet[".arrGroupsPerPage"] = $arrGPP;

$tdataBalanceSheet[".highlightSearchResults"] = true;

$tableKeysBalanceSheet = array();
$tdataBalanceSheet[".Keys"] = $tableKeysBalanceSheet;

$tdataBalanceSheet[".listFields"] = array();
$tdataBalanceSheet[".listFields"][] = "AccountType";
$tdataBalanceSheet[".listFields"][] = "InterestAmount";

$tdataBalanceSheet[".hideMobileList"] = array();


$tdataBalanceSheet[".viewFields"] = array();

$tdataBalanceSheet[".addFields"] = array();

$tdataBalanceSheet[".masterListFields"] = array();
$tdataBalanceSheet[".masterListFields"][] = "AccountType";
$tdataBalanceSheet[".masterListFields"][] = "InterestAmount";

$tdataBalanceSheet[".inlineAddFields"] = array();

$tdataBalanceSheet[".editFields"] = array();

$tdataBalanceSheet[".inlineEditFields"] = array();

$tdataBalanceSheet[".exportFields"] = array();

$tdataBalanceSheet[".importFields"] = array();

$tdataBalanceSheet[".printFields"] = array();
$tdataBalanceSheet[".printFields"][] = "AccountType";
$tdataBalanceSheet[".printFields"][] = "InterestAmount";

//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("BalanceSheet","AccountType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "AccountType"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountType";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataBalanceSheet["AccountType"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("BalanceSheet","InterestAmount"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "InterestAmount"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(InterestAmount)";
	
		
		
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdataBalanceSheet["InterestAmount"] = $fdata;

	
$tables_data["BalanceSheet"]=&$tdataBalanceSheet;
$field_labels["BalanceSheet"] = &$fieldLabelsBalanceSheet;
$fieldToolTips["BalanceSheet"] = &$fieldToolTipsBalanceSheet;
$page_titles["BalanceSheet"] = &$pageTitlesBalanceSheet;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["BalanceSheet"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["BalanceSheet"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_BalanceSheet()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AccountType,  SUM(InterestAmount) AS InterestAmount";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "(`DateTime` between DATE_SUB(NOW(), INTERVAL 1 MONTH) and NOW())  and  ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(`DateTime` between DATE_SUB(NOW(), INTERVAL 1 MONTH) and NOW())  and  ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`DateTime` between DATE_SUB(NOW(), INTERVAL 1 MONTH) and NOW())  and  ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "`DateTime` between DATE_SUB(NOW(), INTERVAL 1 MONTH) and NOW()";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "between DATE_SUB(NOW(), INTERVAL 1 MONTH) and NOW()";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))";
$proto5["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
						$proto7=array();
$proto7["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "in('Approved')";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = true;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto5["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))";
$proto9["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
						$proto11=array();
$proto11["m_sql"] = "(WithdrawlNo is not null) OR (WithdrawlNo <>'')";
$proto11["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(WithdrawlNo is not null) OR (WithdrawlNo <>'')"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
						$proto13=array();
$proto13["m_sql"] = "WithdrawlNo is not null";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "is not null";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = true;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto11["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "WithdrawlNo <>''";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "<>''";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = true;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto11["m_contained"][]=$obj;
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = true;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto9["m_contained"][]=$obj;
						$proto17=array();
$proto17["m_sql"] = "WithdrawlStatus in('Approved')";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "in('Approved')";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = true;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto9["m_contained"][]=$obj;
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = true;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto5["m_contained"][]=$obj;
						$proto19=array();
$proto19["m_sql"] = "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))";
$proto19["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
						$proto21=array();
$proto21["m_sql"] = "(LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')";
$proto21["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
						$proto23=array();
$proto23["m_sql"] = "LoanCreditPaymentNo is not null";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "is not null";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = true;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

			$proto21["m_contained"][]=$obj;
						$proto25=array();
$proto25["m_sql"] = "LoanCreditPaymentNo <>''";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "<>''";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = true;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

			$proto21["m_contained"][]=$obj;
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = true;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto19["m_contained"][]=$obj;
						$proto27=array();
$proto27["m_sql"] = "LoanCreditApplicationStatus in('Approved')";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditApplicationStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "in('Approved')";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = true;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

			$proto19["m_contained"][]=$obj;
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = true;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

			$proto5["m_contained"][]=$obj;
						$proto29=array();
$proto29["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "in('Approved')";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = true;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

			$proto5["m_contained"][]=$obj;
$proto5["m_strCase"] = "";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto33["m_sql"] = "AccountType";
$proto33["m_srcTableName"] = "BalanceSheet";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_SUM";
$proto36["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "SUM(InterestAmount)";
$proto35["m_srcTableName"] = "BalanceSheet";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "InterestAmount";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "transactions";
$proto39["m_srcTableName"] = "BalanceSheet";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "DebitAccount";
$proto39["m_columns"][] = "CreditAccount";
$proto39["m_columns"][] = "DebitAccountTransactionCharge";
$proto39["m_columns"][] = "CreditAccountTransactionCharge";
$proto39["m_columns"][] = "Amount";
$proto39["m_columns"][] = "DateTime";
$proto39["m_columns"][] = "Description";
$proto39["m_columns"][] = "CashDepositNo";
$proto39["m_columns"][] = "CashDepositorName";
$proto39["m_columns"][] = "CashDepositType";
$proto39["m_columns"][] = "WithdrawlNo";
$proto39["m_columns"][] = "WithdrawlName";
$proto39["m_columns"][] = "WithdrawlType";
$proto39["m_columns"][] = "LoanPaymentNo";
$proto39["m_columns"][] = "LoanPaymentDepositorName";
$proto39["m_columns"][] = "LoanPaymentPurpose";
$proto39["m_columns"][] = "LoanCreditPaymentNo";
$proto39["m_columns"][] = "LoanCreditDepositorName";
$proto39["m_columns"][] = "LoanCreditPurpose";
$proto39["m_columns"][] = "AccountType";
$proto39["m_columns"][] = "InterestAmount";
$proto39["m_columns"][] = "PrincipalAmount";
$proto39["m_columns"][] = "WithdrawlStatus";
$proto39["m_columns"][] = "NEFTTransferStatus";
$proto39["m_columns"][] = "LoanCreditApplicationStatus";
$proto39["m_columns"][] = "LoanCreditWitness";
$proto39["m_columns"][] = "NEFTTransferNo";
$proto39["m_columns"][] = "NEFTTransferDepositorName";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "transactions";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "BalanceSheet";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "BalanceSheet"
));

$proto44["m_column"]=$obj;
$obj = new SQLGroupByItem($proto44);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BalanceSheet";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_BalanceSheet = createSqlQuery_BalanceSheet();


	
		
	
$tdataBalanceSheet[".sqlquery"] = $queryData_BalanceSheet;

$tableEvents["BalanceSheet"] = new eventsBase;
$tdataBalanceSheet[".hasEvents"] = false;

?>