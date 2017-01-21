<?php
require_once(getabspath("classes/cipherer.php"));




$tdataYearlyBalanceSheet = array();
	$tdataYearlyBalanceSheet[".truncateText"] = true;
	$tdataYearlyBalanceSheet[".NumberOfChars"] = 80;
	$tdataYearlyBalanceSheet[".ShortName"] = "YearlyBalanceSheet";
	$tdataYearlyBalanceSheet[".OwnerID"] = "";
	$tdataYearlyBalanceSheet[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsYearlyBalanceSheet = array();
$fieldToolTipsYearlyBalanceSheet = array();
$pageTitlesYearlyBalanceSheet = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsYearlyBalanceSheet["English"] = array();
	$fieldToolTipsYearlyBalanceSheet["English"] = array();
	$pageTitlesYearlyBalanceSheet["English"] = array();
	$fieldLabelsYearlyBalanceSheet["English"]["AccountType"] = "Account Type";
	$fieldToolTipsYearlyBalanceSheet["English"]["AccountType"] = "";
	$fieldLabelsYearlyBalanceSheet["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsYearlyBalanceSheet["English"]["InterestAmount"] = "";
	$fieldLabelsYearlyBalanceSheet["English"]["Year"] = "Year";
	$fieldToolTipsYearlyBalanceSheet["English"]["Year"] = "";
	if (count($fieldToolTipsYearlyBalanceSheet["English"]))
		$tdataYearlyBalanceSheet[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsYearlyBalanceSheet[""] = array();
	$fieldToolTipsYearlyBalanceSheet[""] = array();
	$pageTitlesYearlyBalanceSheet[""] = array();
	if (count($fieldToolTipsYearlyBalanceSheet[""]))
		$tdataYearlyBalanceSheet[".isUseToolTips"] = true;
}


	$tdataYearlyBalanceSheet[".NCSearch"] = true;



$tdataYearlyBalanceSheet[".shortTableName"] = "YearlyBalanceSheet";
$tdataYearlyBalanceSheet[".nSecOptions"] = 0;
$tdataYearlyBalanceSheet[".recsPerRowPrint"] = 1;
$tdataYearlyBalanceSheet[".mainTableOwnerID"] = "";
$tdataYearlyBalanceSheet[".moveNext"] = 1;
$tdataYearlyBalanceSheet[".entityType"] = 1;

$tdataYearlyBalanceSheet[".strOriginalTableName"] = "transactions";

	



$tdataYearlyBalanceSheet[".showAddInPopup"] = false;

$tdataYearlyBalanceSheet[".showEditInPopup"] = false;

$tdataYearlyBalanceSheet[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataYearlyBalanceSheet[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataYearlyBalanceSheet[".fieldsForRegister"] = array();

$tdataYearlyBalanceSheet[".listAjax"] = false;

	$tdataYearlyBalanceSheet[".audit"] = false;

	$tdataYearlyBalanceSheet[".locking"] = false;



$tdataYearlyBalanceSheet[".list"] = true;






$tdataYearlyBalanceSheet[".exportTo"] = true;

$tdataYearlyBalanceSheet[".printFriendly"] = true;


$tdataYearlyBalanceSheet[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataYearlyBalanceSheet[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataYearlyBalanceSheet[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataYearlyBalanceSheet[".searchSaving"] = true;
//

$tdataYearlyBalanceSheet[".showSearchPanel"] = true;
		$tdataYearlyBalanceSheet[".flexibleSearch"] = true;

$tdataYearlyBalanceSheet[".isUseAjaxSuggest"] = true;

$tdataYearlyBalanceSheet[".rowHighlite"] = true;



$tdataYearlyBalanceSheet[".addPageEvents"] = false;

// use timepicker for search panel
$tdataYearlyBalanceSheet[".isUseTimeForSearch"] = false;





$tdataYearlyBalanceSheet[".allSearchFields"] = array();
$tdataYearlyBalanceSheet[".filterFields"] = array();
$tdataYearlyBalanceSheet[".requiredSearchFields"] = array();

$tdataYearlyBalanceSheet[".allSearchFields"][] = "AccountType";
	$tdataYearlyBalanceSheet[".allSearchFields"][] = "InterestAmount";
	$tdataYearlyBalanceSheet[".allSearchFields"][] = "Year";
	

$tdataYearlyBalanceSheet[".googleLikeFields"] = array();
$tdataYearlyBalanceSheet[".googleLikeFields"][] = "AccountType";
$tdataYearlyBalanceSheet[".googleLikeFields"][] = "InterestAmount";
$tdataYearlyBalanceSheet[".googleLikeFields"][] = "Year";


$tdataYearlyBalanceSheet[".advSearchFields"] = array();
$tdataYearlyBalanceSheet[".advSearchFields"][] = "AccountType";
$tdataYearlyBalanceSheet[".advSearchFields"][] = "InterestAmount";
$tdataYearlyBalanceSheet[".advSearchFields"][] = "Year";

$tdataYearlyBalanceSheet[".tableType"] = "list";

$tdataYearlyBalanceSheet[".printerPageOrientation"] = 0;
$tdataYearlyBalanceSheet[".nPrinterPageScale"] = 100;

$tdataYearlyBalanceSheet[".nPrinterSplitRecords"] = 40;

$tdataYearlyBalanceSheet[".nPrinterPDFSplitRecords"] = 40;



$tdataYearlyBalanceSheet[".geocodingEnabled"] = false;





$tdataYearlyBalanceSheet[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataYearlyBalanceSheet[".pageSize"] = 20;

$tdataYearlyBalanceSheet[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY AccountType, `Year`                       DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataYearlyBalanceSheet[".strOrderBy"] = $tstrOrderBy;

$tdataYearlyBalanceSheet[".orderindexes"] = array();

$tdataYearlyBalanceSheet[".sqlHead"] = "SELECT AccountType,  SUM(InterestAmount) AS InterestAmount,  Year(`DateTime`) AS `Year`";
$tdataYearlyBalanceSheet[".sqlFrom"] = "FROM transactions";
$tdataYearlyBalanceSheet[".sqlWhereExpr"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$tdataYearlyBalanceSheet[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataYearlyBalanceSheet[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataYearlyBalanceSheet[".arrGroupsPerPage"] = $arrGPP;

$tdataYearlyBalanceSheet[".highlightSearchResults"] = true;

$tableKeysYearlyBalanceSheet = array();
$tableKeysYearlyBalanceSheet[] = "AccountType";
$tdataYearlyBalanceSheet[".Keys"] = $tableKeysYearlyBalanceSheet;

$tdataYearlyBalanceSheet[".listFields"] = array();
$tdataYearlyBalanceSheet[".listFields"][] = "AccountType";
$tdataYearlyBalanceSheet[".listFields"][] = "InterestAmount";
$tdataYearlyBalanceSheet[".listFields"][] = "Year";

$tdataYearlyBalanceSheet[".hideMobileList"] = array();


$tdataYearlyBalanceSheet[".viewFields"] = array();

$tdataYearlyBalanceSheet[".addFields"] = array();

$tdataYearlyBalanceSheet[".masterListFields"] = array();
$tdataYearlyBalanceSheet[".masterListFields"][] = "AccountType";
$tdataYearlyBalanceSheet[".masterListFields"][] = "InterestAmount";
$tdataYearlyBalanceSheet[".masterListFields"][] = "Year";

$tdataYearlyBalanceSheet[".inlineAddFields"] = array();

$tdataYearlyBalanceSheet[".editFields"] = array();

$tdataYearlyBalanceSheet[".inlineEditFields"] = array();

$tdataYearlyBalanceSheet[".updateSelectedFields"] = array();


$tdataYearlyBalanceSheet[".exportFields"] = array();
$tdataYearlyBalanceSheet[".exportFields"][] = "AccountType";
$tdataYearlyBalanceSheet[".exportFields"][] = "InterestAmount";
$tdataYearlyBalanceSheet[".exportFields"][] = "Year";

$tdataYearlyBalanceSheet[".importFields"] = array();

$tdataYearlyBalanceSheet[".printFields"] = array();
$tdataYearlyBalanceSheet[".printFields"][] = "AccountType";
$tdataYearlyBalanceSheet[".printFields"][] = "InterestAmount";
$tdataYearlyBalanceSheet[".printFields"][] = "Year";

//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("YearlyBalanceSheet","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdataYearlyBalanceSheet["AccountType"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("YearlyBalanceSheet","InterestAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdataYearlyBalanceSheet["InterestAmount"] = $fdata;
//	Year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Year";
	$fdata["GoodName"] = "Year";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("YearlyBalanceSheet","Year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

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




	$tdataYearlyBalanceSheet["Year"] = $fdata;


$tables_data["YearlyBalanceSheet"]=&$tdataYearlyBalanceSheet;
$field_labels["YearlyBalanceSheet"] = &$fieldLabelsYearlyBalanceSheet;
$fieldToolTips["YearlyBalanceSheet"] = &$fieldToolTipsYearlyBalanceSheet;
$page_titles["YearlyBalanceSheet"] = &$pageTitlesYearlyBalanceSheet;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["YearlyBalanceSheet"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["YearlyBalanceSheet"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_YearlyBalanceSheet()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AccountType,  SUM(InterestAmount) AS InterestAmount,  Year(`DateTime`) AS `Year`";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto0["m_strOrderBy"] = "ORDER BY AccountType, `Year`                       DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(1 =1) OR ((NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved')))"
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
$proto6["m_sql"] = "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(NEFTTransferStatus in('Approved')) OR (((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))) OR (((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))) OR (NEFTTransferStatus in('Approved'))"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "NEFTTransferStatus in('Approved')";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyBalanceSheet"
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
$proto10["m_sql"] = "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))";
$proto10["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((WithdrawlNo is not null) OR (WithdrawlNo <>'')) OR (WithdrawlStatus in('Approved'))"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
$proto20["m_sql"] = "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))";
$proto20["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((LoanCreditPaymentNo is not null) OR (LoanCreditPaymentNo <>'')) OR (LoanCreditApplicationStatus in('Approved'))"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
	"m_srcTableName" => "YearlyBalanceSheet"
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
	"m_srcTableName" => "YearlyBalanceSheet"
));

$proto34["m_sql"] = "AccountType";
$proto34["m_srcTableName"] = "YearlyBalanceSheet";
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
	"m_srcTableName" => "YearlyBalanceSheet"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "SUM(InterestAmount)";
$proto36["m_srcTableName"] = "YearlyBalanceSheet";
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
$proto39["m_srcTableName"] = "YearlyBalanceSheet";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Year";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "transactions";
$proto43["m_srcTableName"] = "YearlyBalanceSheet";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "DebitAccount";
$proto43["m_columns"][] = "CreditAccount";
$proto43["m_columns"][] = "DebitAccountTransactionCharge";
$proto43["m_columns"][] = "CreditAccountTransactionCharge";
$proto43["m_columns"][] = "Amount";
$proto43["m_columns"][] = "DateTime";
$proto43["m_columns"][] = "Description";
$proto43["m_columns"][] = "CashDepositNo";
$proto43["m_columns"][] = "CashDepositorName";
$proto43["m_columns"][] = "CashDepositType";
$proto43["m_columns"][] = "WithdrawlNo";
$proto43["m_columns"][] = "WithdrawlName";
$proto43["m_columns"][] = "WithdrawlType";
$proto43["m_columns"][] = "LoanPaymentNo";
$proto43["m_columns"][] = "LoanPaymentName";
$proto43["m_columns"][] = "LoanPaymentPurpose";
$proto43["m_columns"][] = "LoanCreditPaymentNo";
$proto43["m_columns"][] = "LoanCreditPaymentName";
$proto43["m_columns"][] = "LoanCreditPaymentPurpose";
$proto43["m_columns"][] = "AccountType";
$proto43["m_columns"][] = "InterestAmount";
$proto43["m_columns"][] = "PrincipalAmount";
$proto43["m_columns"][] = "WithdrawlStatus";
$proto43["m_columns"][] = "NEFTTransferStatus";
$proto43["m_columns"][] = "LoanCreditApplicationStatus";
$proto43["m_columns"][] = "LoanCreditWitness";
$proto43["m_columns"][] = "NEFTTransferNo";
$proto43["m_columns"][] = "NEFTTransferDepositorName";
$proto43["m_columns"][] = "TransactionType";
$proto43["m_columns"][] = "Balance";
$proto43["m_columns"][] = "AccountNumber";
$proto43["m_columns"][] = "ClientNo";
$proto43["m_columns"][] = "LastModifiedBy";
$proto43["m_columns"][] = "LastModifiedDate";
$proto43["m_columns"][] = "AccountName";
$proto43["m_columns"][] = "TransactionNo";
$proto43["m_columns"][] = "TransactionStatus";
$proto43["m_columns"][] = "SelectedClientNo";
$proto43["m_columns"][] = "LoanPaymentStatus";
$proto43["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "transactions";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "YearlyBalanceSheet";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyBalanceSheet"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Year`"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "YearlyBalanceSheet"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 1;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
												$proto52=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`Year`                       "
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="YearlyBalanceSheet";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_YearlyBalanceSheet = createSqlQuery_YearlyBalanceSheet();


	
		;

			

$tdataYearlyBalanceSheet[".sqlquery"] = $queryData_YearlyBalanceSheet;

$tableEvents["YearlyBalanceSheet"] = new eventsBase;
$tdataYearlyBalanceSheet[".hasEvents"] = false;

?>