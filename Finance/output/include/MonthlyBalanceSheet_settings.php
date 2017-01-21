<?php
require_once(getabspath("classes/cipherer.php"));




$tdataMonthlyBalanceSheet = array();
	$tdataMonthlyBalanceSheet[".truncateText"] = true;
	$tdataMonthlyBalanceSheet[".NumberOfChars"] = 80;
	$tdataMonthlyBalanceSheet[".ShortName"] = "MonthlyBalanceSheet";
	$tdataMonthlyBalanceSheet[".OwnerID"] = "";
	$tdataMonthlyBalanceSheet[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsMonthlyBalanceSheet = array();
$fieldToolTipsMonthlyBalanceSheet = array();
$pageTitlesMonthlyBalanceSheet = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsMonthlyBalanceSheet["English"] = array();
	$fieldToolTipsMonthlyBalanceSheet["English"] = array();
	$pageTitlesMonthlyBalanceSheet["English"] = array();
	$fieldLabelsMonthlyBalanceSheet["English"]["AccountType"] = "Account Type";
	$fieldToolTipsMonthlyBalanceSheet["English"]["AccountType"] = "";
	$fieldLabelsMonthlyBalanceSheet["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsMonthlyBalanceSheet["English"]["InterestAmount"] = "";
	$fieldLabelsMonthlyBalanceSheet["English"]["Year"] = "Year";
	$fieldToolTipsMonthlyBalanceSheet["English"]["Year"] = "";
	$fieldLabelsMonthlyBalanceSheet["English"]["Month"] = "Month";
	$fieldToolTipsMonthlyBalanceSheet["English"]["Month"] = "";
	if (count($fieldToolTipsMonthlyBalanceSheet["English"]))
		$tdataMonthlyBalanceSheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsMonthlyBalanceSheet[""] = array();
	$fieldToolTipsMonthlyBalanceSheet[""] = array();
	$pageTitlesMonthlyBalanceSheet[""] = array();
	if (count($fieldToolTipsMonthlyBalanceSheet[""]))
		$tdataMonthlyBalanceSheet[".isUseToolTips"] = true;
}


	$tdataMonthlyBalanceSheet[".NCSearch"] = true;



$tdataMonthlyBalanceSheet[".shortTableName"] = "MonthlyBalanceSheet";
$tdataMonthlyBalanceSheet[".nSecOptions"] = 0;
$tdataMonthlyBalanceSheet[".recsPerRowPrint"] = 1;
$tdataMonthlyBalanceSheet[".mainTableOwnerID"] = "";
$tdataMonthlyBalanceSheet[".moveNext"] = 1;
$tdataMonthlyBalanceSheet[".entityType"] = 1;

$tdataMonthlyBalanceSheet[".strOriginalTableName"] = "transactions";

	



$tdataMonthlyBalanceSheet[".showAddInPopup"] = false;

$tdataMonthlyBalanceSheet[".showEditInPopup"] = false;

$tdataMonthlyBalanceSheet[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataMonthlyBalanceSheet[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataMonthlyBalanceSheet[".fieldsForRegister"] = array();

$tdataMonthlyBalanceSheet[".listAjax"] = false;

	$tdataMonthlyBalanceSheet[".audit"] = false;

	$tdataMonthlyBalanceSheet[".locking"] = false;



$tdataMonthlyBalanceSheet[".list"] = true;







$tdataMonthlyBalanceSheet[".printFriendly"] = true;


$tdataMonthlyBalanceSheet[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataMonthlyBalanceSheet[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataMonthlyBalanceSheet[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataMonthlyBalanceSheet[".searchSaving"] = true;
//

$tdataMonthlyBalanceSheet[".showSearchPanel"] = true;
		$tdataMonthlyBalanceSheet[".flexibleSearch"] = true;

$tdataMonthlyBalanceSheet[".isUseAjaxSuggest"] = true;

$tdataMonthlyBalanceSheet[".rowHighlite"] = true;



$tdataMonthlyBalanceSheet[".addPageEvents"] = false;

// use timepicker for search panel
$tdataMonthlyBalanceSheet[".isUseTimeForSearch"] = false;





$tdataMonthlyBalanceSheet[".allSearchFields"] = array();
$tdataMonthlyBalanceSheet[".filterFields"] = array();
$tdataMonthlyBalanceSheet[".requiredSearchFields"] = array();

$tdataMonthlyBalanceSheet[".allSearchFields"][] = "AccountType";
	$tdataMonthlyBalanceSheet[".allSearchFields"][] = "InterestAmount";
	$tdataMonthlyBalanceSheet[".allSearchFields"][] = "Year";
	$tdataMonthlyBalanceSheet[".allSearchFields"][] = "Month";
	

$tdataMonthlyBalanceSheet[".googleLikeFields"] = array();
$tdataMonthlyBalanceSheet[".googleLikeFields"][] = "AccountType";
$tdataMonthlyBalanceSheet[".googleLikeFields"][] = "InterestAmount";
$tdataMonthlyBalanceSheet[".googleLikeFields"][] = "Year";
$tdataMonthlyBalanceSheet[".googleLikeFields"][] = "Month";


$tdataMonthlyBalanceSheet[".advSearchFields"] = array();
$tdataMonthlyBalanceSheet[".advSearchFields"][] = "AccountType";
$tdataMonthlyBalanceSheet[".advSearchFields"][] = "InterestAmount";
$tdataMonthlyBalanceSheet[".advSearchFields"][] = "Year";
$tdataMonthlyBalanceSheet[".advSearchFields"][] = "Month";

$tdataMonthlyBalanceSheet[".tableType"] = "list";

$tdataMonthlyBalanceSheet[".printerPageOrientation"] = 0;
$tdataMonthlyBalanceSheet[".nPrinterPageScale"] = 100;

$tdataMonthlyBalanceSheet[".nPrinterSplitRecords"] = 40;

$tdataMonthlyBalanceSheet[".nPrinterPDFSplitRecords"] = 40;



$tdataMonthlyBalanceSheet[".geocodingEnabled"] = false;





$tdataMonthlyBalanceSheet[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataMonthlyBalanceSheet[".totalsFields"] = array();
$tdataMonthlyBalanceSheet[".totalsFields"][] = array(
	"fName" => "InterestAmount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataMonthlyBalanceSheet[".pageSize"] = 20;

$tdataMonthlyBalanceSheet[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AccountType, `Year`             DESC, `Month`             DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataMonthlyBalanceSheet[".strOrderBy"] = $tstrOrderBy;

$tdataMonthlyBalanceSheet[".orderindexes"] = array();

$tdataMonthlyBalanceSheet[".sqlHead"] = "SELECT AccountType,  SUM(InterestAmount) AS InterestAmount,  Year(`DateTime`) AS `Year`,  Month(`DateTime`) AS `Month`";
$tdataMonthlyBalanceSheet[".sqlFrom"] = "FROM transactions";
$tdataMonthlyBalanceSheet[".sqlWhereExpr"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$tdataMonthlyBalanceSheet[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataMonthlyBalanceSheet[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataMonthlyBalanceSheet[".arrGroupsPerPage"] = $arrGPP;

$tdataMonthlyBalanceSheet[".highlightSearchResults"] = true;

$tableKeysMonthlyBalanceSheet = array();
$tdataMonthlyBalanceSheet[".Keys"] = $tableKeysMonthlyBalanceSheet;

$tdataMonthlyBalanceSheet[".listFields"] = array();
$tdataMonthlyBalanceSheet[".listFields"][] = "Year";
$tdataMonthlyBalanceSheet[".listFields"][] = "Month";
$tdataMonthlyBalanceSheet[".listFields"][] = "AccountType";
$tdataMonthlyBalanceSheet[".listFields"][] = "InterestAmount";

$tdataMonthlyBalanceSheet[".hideMobileList"] = array();


$tdataMonthlyBalanceSheet[".viewFields"] = array();

$tdataMonthlyBalanceSheet[".addFields"] = array();

$tdataMonthlyBalanceSheet[".masterListFields"] = array();
$tdataMonthlyBalanceSheet[".masterListFields"][] = "AccountType";
$tdataMonthlyBalanceSheet[".masterListFields"][] = "InterestAmount";
$tdataMonthlyBalanceSheet[".masterListFields"][] = "Year";
$tdataMonthlyBalanceSheet[".masterListFields"][] = "Month";

$tdataMonthlyBalanceSheet[".inlineAddFields"] = array();

$tdataMonthlyBalanceSheet[".editFields"] = array();

$tdataMonthlyBalanceSheet[".inlineEditFields"] = array();

$tdataMonthlyBalanceSheet[".updateSelectedFields"] = array();


$tdataMonthlyBalanceSheet[".exportFields"] = array();

$tdataMonthlyBalanceSheet[".importFields"] = array();

$tdataMonthlyBalanceSheet[".printFields"] = array();
$tdataMonthlyBalanceSheet[".printFields"][] = "AccountType";
$tdataMonthlyBalanceSheet[".printFields"][] = "InterestAmount";
$tdataMonthlyBalanceSheet[".printFields"][] = "Year";
$tdataMonthlyBalanceSheet[".printFields"][] = "Month";

//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("MonthlyBalanceSheet","AccountType");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMonthlyBalanceSheet["AccountType"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyBalanceSheet","InterestAmount");
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataMonthlyBalanceSheet["InterestAmount"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyBalanceSheet","Year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Year(`DateTime`)";

	
	
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




	$tdataMonthlyBalanceSheet["Year"] = $fdata;
//	Month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Month";
	$fdata["GoodName"] = "Month";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("MonthlyBalanceSheet","Month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Month(`DateTime`)";

	
	
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




	$tdataMonthlyBalanceSheet["Month"] = $fdata;


$tables_data["MonthlyBalanceSheet"]=&$tdataMonthlyBalanceSheet;
$field_labels["MonthlyBalanceSheet"] = &$fieldLabelsMonthlyBalanceSheet;
$fieldToolTips["MonthlyBalanceSheet"] = &$fieldToolTipsMonthlyBalanceSheet;
$page_titles["MonthlyBalanceSheet"] = &$pageTitlesMonthlyBalanceSheet;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["MonthlyBalanceSheet"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["MonthlyBalanceSheet"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_MonthlyBalanceSheet()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AccountType,  SUM(InterestAmount) AS InterestAmount,  Year(`DateTime`) AS `Year`,  Month(`DateTime`) AS `Month`";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto0["m_strOrderBy"] = "ORDER BY AccountType, `Year`             DESC, `Month`             DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "1 =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLNonParsed(array(
	"m_sql" => "1"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "in('Approved')";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = true;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))";
$proto10["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) AND (WithdrawlStatus in('Approved'))"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
						$proto12=array();
$proto12["m_sql"] = "(WithdrawlNo is not null) OR (WithdrawlNo <>'')";
$proto12["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(WithdrawlNo is not null) OR (WithdrawlNo <>'')"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
						$proto14=array();
$proto14["m_sql"] = "WithdrawlNo is not null";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "is not null";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = true;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto12["m_contained"][]=$obj;
						$proto16=array();
$proto16["m_sql"] = "WithdrawlNo <>''";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "<>''";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = true;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

			$proto12["m_contained"][]=$obj;
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto10["m_contained"][]=$obj;
						$proto18=array();
$proto18["m_sql"] = "WithdrawlStatus in('Approved')";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "in('Approved')";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = true;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

			$proto10["m_contained"][]=$obj;
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
						$proto20=array();
$proto20["m_sql"] = "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))";
$proto20["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) AND (LoanCreditApplicationStatus in('Approved'))"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
						$proto22=array();
$proto22["m_sql"] = "(LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')";
$proto22["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
						$proto24=array();
$proto24["m_sql"] = "LoanCreditPaymentNo is not null";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "is not null";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = true;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

			$proto22["m_contained"][]=$obj;
						$proto26=array();
$proto26["m_sql"] = "LoanCreditPaymentNo <>''";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "<>''";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = true;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto22["m_contained"][]=$obj;
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = true;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

			$proto20["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "LoanCreditApplicationStatus in('Approved')";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditApplicationStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "in('Approved')";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = true;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto20["m_contained"][]=$obj;
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = true;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

			$proto6["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "in('Approved')";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = true;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto34["m_sql"] = "AccountType";
$proto34["m_srcTableName"] = "MonthlyBalanceSheet";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_SUM";
$proto37["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "SUM(InterestAmount)";
$proto36["m_srcTableName"] = "MonthlyBalanceSheet";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "InterestAmount";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_CUSTOM";
$proto40["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`DateTime`"
));

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "Year";
$obj = new SQLFunctionCall($proto40);

$proto39["m_sql"] = "Year(`DateTime`)";
$proto39["m_srcTableName"] = "MonthlyBalanceSheet";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Year";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`DateTime`"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "Month";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "Month(`DateTime`)";
$proto42["m_srcTableName"] = "MonthlyBalanceSheet";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "Month";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "transactions";
$proto46["m_srcTableName"] = "MonthlyBalanceSheet";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "id";
$proto46["m_columns"][] = "DebitAccount";
$proto46["m_columns"][] = "CreditAccount";
$proto46["m_columns"][] = "DebitAccountTransactionCharge";
$proto46["m_columns"][] = "CreditAccountTransactionCharge";
$proto46["m_columns"][] = "Amount";
$proto46["m_columns"][] = "DateTime";
$proto46["m_columns"][] = "Description";
$proto46["m_columns"][] = "CashDepositNo";
$proto46["m_columns"][] = "CashDepositorName";
$proto46["m_columns"][] = "CashDepositType";
$proto46["m_columns"][] = "WithdrawlNo";
$proto46["m_columns"][] = "WithdrawlName";
$proto46["m_columns"][] = "WithdrawlType";
$proto46["m_columns"][] = "LoanPaymentNo";
$proto46["m_columns"][] = "LoanPaymentName";
$proto46["m_columns"][] = "LoanPaymentPurpose";
$proto46["m_columns"][] = "LoanCreditPaymentNo";
$proto46["m_columns"][] = "LoanCreditPaymentName";
$proto46["m_columns"][] = "LoanCreditPaymentPurpose";
$proto46["m_columns"][] = "AccountType";
$proto46["m_columns"][] = "InterestAmount";
$proto46["m_columns"][] = "PrincipalAmount";
$proto46["m_columns"][] = "WithdrawlStatus";
$proto46["m_columns"][] = "NEFTTransferStatus";
$proto46["m_columns"][] = "LoanCreditApplicationStatus";
$proto46["m_columns"][] = "LoanCreditWitness";
$proto46["m_columns"][] = "NEFTTransferNo";
$proto46["m_columns"][] = "NEFTTransferDepositorName";
$proto46["m_columns"][] = "TransactionType";
$proto46["m_columns"][] = "Balance";
$proto46["m_columns"][] = "AccountNumber";
$proto46["m_columns"][] = "ClientNo";
$proto46["m_columns"][] = "LastModifiedBy";
$proto46["m_columns"][] = "LastModifiedDate";
$proto46["m_columns"][] = "AccountName";
$proto46["m_columns"][] = "TransactionNo";
$proto46["m_columns"][] = "TransactionStatus";
$proto46["m_columns"][] = "SelectedClientNo";
$proto46["m_columns"][] = "LoanPaymentStatus";
$proto46["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "transactions";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "MonthlyBalanceSheet";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto49=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto49["m_column"]=$obj;
$obj = new SQLGroupByItem($proto49);

$proto0["m_groupby"][]=$obj;
												$proto51=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Year`"
));

$proto51["m_column"]=$obj;
$obj = new SQLGroupByItem($proto51);

$proto0["m_groupby"][]=$obj;
												$proto53=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Month`"
));

$proto53["m_column"]=$obj;
$obj = new SQLGroupByItem($proto53);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "MonthlyBalanceSheet"
));

$proto55["m_column"]=$obj;
$proto55["m_bAsc"] = 1;
$proto55["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto55);

$proto0["m_orderby"][]=$obj;					
												$proto57=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Year`             "
));

$proto57["m_column"]=$obj;
$proto57["m_bAsc"] = 0;
$proto57["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto57);

$proto0["m_orderby"][]=$obj;					
												$proto59=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Month`             "
));

$proto59["m_column"]=$obj;
$proto59["m_bAsc"] = 0;
$proto59["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto59);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="MonthlyBalanceSheet";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_MonthlyBalanceSheet = createSqlQuery_MonthlyBalanceSheet();


	
		;

				

$tdataMonthlyBalanceSheet[".sqlquery"] = $queryData_MonthlyBalanceSheet;

$tableEvents["MonthlyBalanceSheet"] = new eventsBase;
$tdataMonthlyBalanceSheet[".hasEvents"] = false;

?>