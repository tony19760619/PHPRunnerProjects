<?php
require_once(getabspath("classes/cipherer.php"));




$tdataLoanStatements = array();
	$tdataLoanStatements[".truncateText"] = true;
	$tdataLoanStatements[".NumberOfChars"] = 80;
	$tdataLoanStatements[".ShortName"] = "LoanStatements";
	$tdataLoanStatements[".OwnerID"] = "";
	$tdataLoanStatements[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsLoanStatements = array();
$fieldToolTipsLoanStatements = array();
$pageTitlesLoanStatements = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsLoanStatements["English"] = array();
	$fieldToolTipsLoanStatements["English"] = array();
	$pageTitlesLoanStatements["English"] = array();
	$fieldLabelsLoanStatements["English"]["id"] = "Id";
	$fieldToolTipsLoanStatements["English"]["id"] = "";
	$fieldLabelsLoanStatements["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipsLoanStatements["English"]["DebitAccount"] = "";
	$fieldLabelsLoanStatements["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipsLoanStatements["English"]["CreditAccount"] = "";
	$fieldLabelsLoanStatements["English"]["DebitAccountTransactionCharge"] = "Debit Account Transaction Charge";
	$fieldToolTipsLoanStatements["English"]["DebitAccountTransactionCharge"] = "";
	$fieldLabelsLoanStatements["English"]["CreditAccountTransactionCharge"] = "Credit Account Transaction Charge";
	$fieldToolTipsLoanStatements["English"]["CreditAccountTransactionCharge"] = "";
	$fieldLabelsLoanStatements["English"]["Amount"] = "Amount";
	$fieldToolTipsLoanStatements["English"]["Amount"] = "";
	$fieldLabelsLoanStatements["English"]["DateTime"] = "Date Time";
	$fieldToolTipsLoanStatements["English"]["DateTime"] = "";
	$fieldLabelsLoanStatements["English"]["Description"] = "Description";
	$fieldToolTipsLoanStatements["English"]["Description"] = "";
	$fieldLabelsLoanStatements["English"]["LoanPaymentNo"] = "Loan Payment No";
	$fieldToolTipsLoanStatements["English"]["LoanPaymentNo"] = "";
	$fieldLabelsLoanStatements["English"]["LoanPaymentPurpose"] = "Loan Payment Purpose";
	$fieldToolTipsLoanStatements["English"]["LoanPaymentPurpose"] = "";
	$fieldLabelsLoanStatements["English"]["LoanCreditPaymentNo"] = "Loan Credit Payment No";
	$fieldToolTipsLoanStatements["English"]["LoanCreditPaymentNo"] = "";
	$fieldLabelsLoanStatements["English"]["AccountType"] = "Account Type";
	$fieldToolTipsLoanStatements["English"]["AccountType"] = "";
	$fieldLabelsLoanStatements["English"]["ClientNo"] = "Client No";
	$fieldToolTipsLoanStatements["English"]["ClientNo"] = "";
	$fieldLabelsLoanStatements["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsLoanStatements["English"]["AccountNumber"] = "";
	$fieldLabelsLoanStatements["English"]["Balance"] = "Balance";
	$fieldToolTipsLoanStatements["English"]["Balance"] = "";
	$fieldLabelsLoanStatements["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsLoanStatements["English"]["LastModifiedBy"] = "";
	$fieldLabelsLoanStatements["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsLoanStatements["English"]["LastModifiedDate"] = "";
	$fieldLabelsLoanStatements["English"]["AccountName"] = "Account Name";
	$fieldToolTipsLoanStatements["English"]["AccountName"] = "";
	$fieldLabelsLoanStatements["English"]["LoanPaymentName"] = "Loan Payment Name";
	$fieldToolTipsLoanStatements["English"]["LoanPaymentName"] = "";
	$fieldLabelsLoanStatements["English"]["LoanCreditPaymentName"] = "Loan Credit Payment Name";
	$fieldToolTipsLoanStatements["English"]["LoanCreditPaymentName"] = "";
	$fieldLabelsLoanStatements["English"]["LoanCreditPaymentPurpose"] = "Loan Credit Payment Purpose";
	$fieldToolTipsLoanStatements["English"]["LoanCreditPaymentPurpose"] = "";
	$fieldLabelsLoanStatements["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipsLoanStatements["English"]["SelectedClientNo"] = "";
	if (count($fieldToolTipsLoanStatements["English"]))
		$tdataLoanStatements[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsLoanStatements[""] = array();
	$fieldToolTipsLoanStatements[""] = array();
	$pageTitlesLoanStatements[""] = array();
	if (count($fieldToolTipsLoanStatements[""]))
		$tdataLoanStatements[".isUseToolTips"] = true;
}


	$tdataLoanStatements[".NCSearch"] = true;



$tdataLoanStatements[".shortTableName"] = "LoanStatements";
$tdataLoanStatements[".nSecOptions"] = 0;
$tdataLoanStatements[".recsPerRowPrint"] = 1;
$tdataLoanStatements[".mainTableOwnerID"] = "";
$tdataLoanStatements[".moveNext"] = 1;
$tdataLoanStatements[".entityType"] = 1;

$tdataLoanStatements[".strOriginalTableName"] = "transactions";

	



$tdataLoanStatements[".showAddInPopup"] = false;

$tdataLoanStatements[".showEditInPopup"] = false;

$tdataLoanStatements[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataLoanStatements[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataLoanStatements[".fieldsForRegister"] = array();

$tdataLoanStatements[".listAjax"] = false;

	$tdataLoanStatements[".audit"] = false;

	$tdataLoanStatements[".locking"] = false;



$tdataLoanStatements[".list"] = true;




$tdataLoanStatements[".view"] = true;

$tdataLoanStatements[".import"] = true;

$tdataLoanStatements[".exportTo"] = true;

$tdataLoanStatements[".printFriendly"] = true;

$tdataLoanStatements[".delete"] = true;

$tdataLoanStatements[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataLoanStatements[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataLoanStatements[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataLoanStatements[".searchSaving"] = true;
//

$tdataLoanStatements[".showSearchPanel"] = true;
		$tdataLoanStatements[".flexibleSearch"] = true;

$tdataLoanStatements[".isUseAjaxSuggest"] = true;

$tdataLoanStatements[".rowHighlite"] = true;



$tdataLoanStatements[".addPageEvents"] = false;

// use timepicker for search panel
$tdataLoanStatements[".isUseTimeForSearch"] = false;





$tdataLoanStatements[".allSearchFields"] = array();
$tdataLoanStatements[".filterFields"] = array();
$tdataLoanStatements[".requiredSearchFields"] = array();

$tdataLoanStatements[".allSearchFields"][] = "AccountName";
	$tdataLoanStatements[".allSearchFields"][] = "ClientNo";
	$tdataLoanStatements[".allSearchFields"][] = "AccountNumber";
	$tdataLoanStatements[".allSearchFields"][] = "AccountType";
	$tdataLoanStatements[".allSearchFields"][] = "LoanPaymentNo";
	$tdataLoanStatements[".allSearchFields"][] = "LoanPaymentName";
	$tdataLoanStatements[".allSearchFields"][] = "LoanPaymentPurpose";
	$tdataLoanStatements[".allSearchFields"][] = "LoanCreditPaymentNo";
	$tdataLoanStatements[".allSearchFields"][] = "LoanCreditPaymentName";
	$tdataLoanStatements[".allSearchFields"][] = "LoanCreditPaymentPurpose";
	$tdataLoanStatements[".allSearchFields"][] = "DateTime";
	$tdataLoanStatements[".allSearchFields"][] = "Amount";
	$tdataLoanStatements[".allSearchFields"][] = "Balance";
	$tdataLoanStatements[".allSearchFields"][] = "Description";
	$tdataLoanStatements[".allSearchFields"][] = "LastModifiedBy";
	$tdataLoanStatements[".allSearchFields"][] = "LastModifiedDate";
	

$tdataLoanStatements[".googleLikeFields"] = array();
$tdataLoanStatements[".googleLikeFields"][] = "Amount";
$tdataLoanStatements[".googleLikeFields"][] = "DateTime";
$tdataLoanStatements[".googleLikeFields"][] = "Description";
$tdataLoanStatements[".googleLikeFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".googleLikeFields"][] = "LoanPaymentName";
$tdataLoanStatements[".googleLikeFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".googleLikeFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".googleLikeFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".googleLikeFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".googleLikeFields"][] = "AccountType";
$tdataLoanStatements[".googleLikeFields"][] = "ClientNo";
$tdataLoanStatements[".googleLikeFields"][] = "AccountNumber";
$tdataLoanStatements[".googleLikeFields"][] = "Balance";
$tdataLoanStatements[".googleLikeFields"][] = "LastModifiedBy";
$tdataLoanStatements[".googleLikeFields"][] = "LastModifiedDate";
$tdataLoanStatements[".googleLikeFields"][] = "AccountName";


$tdataLoanStatements[".advSearchFields"] = array();
$tdataLoanStatements[".advSearchFields"][] = "AccountName";
$tdataLoanStatements[".advSearchFields"][] = "ClientNo";
$tdataLoanStatements[".advSearchFields"][] = "AccountNumber";
$tdataLoanStatements[".advSearchFields"][] = "AccountType";
$tdataLoanStatements[".advSearchFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".advSearchFields"][] = "LoanPaymentName";
$tdataLoanStatements[".advSearchFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".advSearchFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".advSearchFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".advSearchFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".advSearchFields"][] = "DateTime";
$tdataLoanStatements[".advSearchFields"][] = "Amount";
$tdataLoanStatements[".advSearchFields"][] = "Balance";
$tdataLoanStatements[".advSearchFields"][] = "Description";
$tdataLoanStatements[".advSearchFields"][] = "LastModifiedBy";
$tdataLoanStatements[".advSearchFields"][] = "LastModifiedDate";

$tdataLoanStatements[".tableType"] = "list";

$tdataLoanStatements[".printerPageOrientation"] = 0;
$tdataLoanStatements[".nPrinterPageScale"] = 100;

$tdataLoanStatements[".nPrinterSplitRecords"] = 40;

$tdataLoanStatements[".nPrinterPDFSplitRecords"] = 40;



$tdataLoanStatements[".geocodingEnabled"] = false;





$tdataLoanStatements[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataLoanStatements[".pageSize"] = 20;

$tdataLoanStatements[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataLoanStatements[".strOrderBy"] = $tstrOrderBy;

$tdataLoanStatements[".orderindexes"] = array();
$tdataLoanStatements[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataLoanStatements[".sqlHead"] = "SELECT id,  DebitAccount,  CreditAccount,  DebitAccountTransactionCharge,  CreditAccountTransactionCharge,  Amount,  `DateTime`,  Description,  LoanPaymentNo,  LoanPaymentName,  LoanPaymentPurpose,  LoanCreditPaymentNo,  LoanCreditPaymentName,  LoanCreditPaymentPurpose,  AccountType,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$tdataLoanStatements[".sqlFrom"] = "FROM transactions";
$tdataLoanStatements[".sqlWhereExpr"] = "AccountType = 'Loan'";
$tdataLoanStatements[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataLoanStatements[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataLoanStatements[".arrGroupsPerPage"] = $arrGPP;

$tdataLoanStatements[".highlightSearchResults"] = true;

$tableKeysLoanStatements = array();
$tableKeysLoanStatements[] = "id";
$tdataLoanStatements[".Keys"] = $tableKeysLoanStatements;

$tdataLoanStatements[".listFields"] = array();
$tdataLoanStatements[".listFields"][] = "AccountName";
$tdataLoanStatements[".listFields"][] = "ClientNo";
$tdataLoanStatements[".listFields"][] = "AccountNumber";
$tdataLoanStatements[".listFields"][] = "AccountType";
$tdataLoanStatements[".listFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".listFields"][] = "LoanPaymentName";
$tdataLoanStatements[".listFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".listFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".listFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".listFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".listFields"][] = "DateTime";
$tdataLoanStatements[".listFields"][] = "Amount";
$tdataLoanStatements[".listFields"][] = "Balance";
$tdataLoanStatements[".listFields"][] = "Description";
$tdataLoanStatements[".listFields"][] = "LastModifiedBy";
$tdataLoanStatements[".listFields"][] = "LastModifiedDate";

$tdataLoanStatements[".hideMobileList"] = array();


$tdataLoanStatements[".viewFields"] = array();
$tdataLoanStatements[".viewFields"][] = "AccountName";
$tdataLoanStatements[".viewFields"][] = "ClientNo";
$tdataLoanStatements[".viewFields"][] = "AccountNumber";
$tdataLoanStatements[".viewFields"][] = "AccountType";
$tdataLoanStatements[".viewFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".viewFields"][] = "LoanPaymentName";
$tdataLoanStatements[".viewFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".viewFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".viewFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".viewFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".viewFields"][] = "DateTime";
$tdataLoanStatements[".viewFields"][] = "Amount";
$tdataLoanStatements[".viewFields"][] = "Balance";
$tdataLoanStatements[".viewFields"][] = "Description";
$tdataLoanStatements[".viewFields"][] = "LastModifiedBy";
$tdataLoanStatements[".viewFields"][] = "LastModifiedDate";

$tdataLoanStatements[".addFields"] = array();

$tdataLoanStatements[".masterListFields"] = array();
$tdataLoanStatements[".masterListFields"][] = "DebitAccount";
$tdataLoanStatements[".masterListFields"][] = "CreditAccount";
$tdataLoanStatements[".masterListFields"][] = "DebitAccountTransactionCharge";
$tdataLoanStatements[".masterListFields"][] = "CreditAccountTransactionCharge";
$tdataLoanStatements[".masterListFields"][] = "AccountName";
$tdataLoanStatements[".masterListFields"][] = "ClientNo";
$tdataLoanStatements[".masterListFields"][] = "id";
$tdataLoanStatements[".masterListFields"][] = "AccountNumber";
$tdataLoanStatements[".masterListFields"][] = "AccountType";
$tdataLoanStatements[".masterListFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".masterListFields"][] = "LoanPaymentName";
$tdataLoanStatements[".masterListFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".masterListFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".masterListFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".masterListFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".masterListFields"][] = "DateTime";
$tdataLoanStatements[".masterListFields"][] = "Amount";
$tdataLoanStatements[".masterListFields"][] = "Balance";
$tdataLoanStatements[".masterListFields"][] = "Description";
$tdataLoanStatements[".masterListFields"][] = "LastModifiedBy";
$tdataLoanStatements[".masterListFields"][] = "LastModifiedDate";
$tdataLoanStatements[".masterListFields"][] = "SelectedClientNo";

$tdataLoanStatements[".inlineAddFields"] = array();

$tdataLoanStatements[".editFields"] = array();

$tdataLoanStatements[".inlineEditFields"] = array();

$tdataLoanStatements[".updateSelectedFields"] = array();


$tdataLoanStatements[".exportFields"] = array();
$tdataLoanStatements[".exportFields"][] = "AccountName";
$tdataLoanStatements[".exportFields"][] = "ClientNo";
$tdataLoanStatements[".exportFields"][] = "AccountNumber";
$tdataLoanStatements[".exportFields"][] = "AccountType";
$tdataLoanStatements[".exportFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".exportFields"][] = "LoanPaymentName";
$tdataLoanStatements[".exportFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".exportFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".exportFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".exportFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".exportFields"][] = "DateTime";
$tdataLoanStatements[".exportFields"][] = "Amount";
$tdataLoanStatements[".exportFields"][] = "Balance";
$tdataLoanStatements[".exportFields"][] = "Description";
$tdataLoanStatements[".exportFields"][] = "LastModifiedBy";
$tdataLoanStatements[".exportFields"][] = "LastModifiedDate";

$tdataLoanStatements[".importFields"] = array();
$tdataLoanStatements[".importFields"][] = "Amount";
$tdataLoanStatements[".importFields"][] = "DateTime";
$tdataLoanStatements[".importFields"][] = "Description";
$tdataLoanStatements[".importFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".importFields"][] = "LoanPaymentName";
$tdataLoanStatements[".importFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".importFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".importFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".importFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".importFields"][] = "AccountType";
$tdataLoanStatements[".importFields"][] = "ClientNo";
$tdataLoanStatements[".importFields"][] = "AccountNumber";
$tdataLoanStatements[".importFields"][] = "Balance";
$tdataLoanStatements[".importFields"][] = "LastModifiedBy";
$tdataLoanStatements[".importFields"][] = "LastModifiedDate";
$tdataLoanStatements[".importFields"][] = "AccountName";

$tdataLoanStatements[".printFields"] = array();
$tdataLoanStatements[".printFields"][] = "AccountName";
$tdataLoanStatements[".printFields"][] = "ClientNo";
$tdataLoanStatements[".printFields"][] = "AccountNumber";
$tdataLoanStatements[".printFields"][] = "AccountType";
$tdataLoanStatements[".printFields"][] = "LoanPaymentNo";
$tdataLoanStatements[".printFields"][] = "LoanPaymentName";
$tdataLoanStatements[".printFields"][] = "LoanPaymentPurpose";
$tdataLoanStatements[".printFields"][] = "LoanCreditPaymentNo";
$tdataLoanStatements[".printFields"][] = "LoanCreditPaymentName";
$tdataLoanStatements[".printFields"][] = "LoanCreditPaymentPurpose";
$tdataLoanStatements[".printFields"][] = "DateTime";
$tdataLoanStatements[".printFields"][] = "Amount";
$tdataLoanStatements[".printFields"][] = "Balance";
$tdataLoanStatements[".printFields"][] = "Description";
$tdataLoanStatements[".printFields"][] = "LastModifiedBy";
$tdataLoanStatements[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
			
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








	$tdataLoanStatements["id"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","DebitAccount");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "DebitAccount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebitAccount";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(AccountName,' [',AccountNumber,']')   ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataLoanStatements["DebitAccount"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","CreditAccount");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "CreditAccount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreditAccount";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(AccountName,' [',AccountNumber,']') ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataLoanStatements["CreditAccount"] = $fdata;
//	DebitAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DebitAccountTransactionCharge";
	$fdata["GoodName"] = "DebitAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","DebitAccountTransactionCharge");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "DebitAccountTransactionCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebitAccountTransactionCharge";

	
	
			
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








	$tdataLoanStatements["DebitAccountTransactionCharge"] = $fdata;
//	CreditAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CreditAccountTransactionCharge";
	$fdata["GoodName"] = "CreditAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","CreditAccountTransactionCharge");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "CreditAccountTransactionCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreditAccountTransactionCharge";

	
	
			
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








	$tdataLoanStatements["CreditAccountTransactionCharge"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["Amount"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","DateTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DateTime`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Starts with";
		$fdata["searchOptionsList"][] = "More than";
		$fdata["searchOptionsList"][] = "Less than";
		$fdata["searchOptionsList"][] = "Between";
		$fdata["searchOptionsList"][] = "Empty";
// the end of search options settings




	$tdataLoanStatements["DateTime"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","Description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["Description"] = $fdata;
//	LoanPaymentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "LoanPaymentNo";
	$fdata["GoodName"] = "LoanPaymentNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LoanPaymentNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanPaymentNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanPaymentNo";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["LoanPaymentNo"] = $fdata;
//	LoanPaymentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LoanPaymentName";
	$fdata["GoodName"] = "LoanPaymentName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LoanPaymentName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanPaymentName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanPaymentName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["LoanPaymentName"] = $fdata;
//	LoanPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "LoanPaymentPurpose";
	$fdata["GoodName"] = "LoanPaymentPurpose";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LoanPaymentPurpose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanPaymentPurpose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanPaymentPurpose";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["LoanPaymentPurpose"] = $fdata;
//	LoanCreditPaymentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LoanCreditPaymentNo";
	$fdata["GoodName"] = "LoanCreditPaymentNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LoanCreditPaymentNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditPaymentNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditPaymentNo";

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["LoanCreditPaymentNo"] = $fdata;
//	LoanCreditPaymentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LoanCreditPaymentName";
	$fdata["GoodName"] = "LoanCreditPaymentName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LoanCreditPaymentName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditPaymentName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditPaymentName";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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




	$tdataLoanStatements["LoanCreditPaymentName"] = $fdata;
//	LoanCreditPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LoanCreditPaymentPurpose";
	$fdata["GoodName"] = "LoanCreditPaymentPurpose";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LoanCreditPaymentPurpose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditPaymentPurpose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditPaymentPurpose";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["LoanCreditPaymentPurpose"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["AccountType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClientNo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "AccountName", "lookup" => "AccountName" );

	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountNumber";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountNumber";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountNumber";

	
	$edata["LookupOrderBy"] = "AccountNumber";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ClientNo", "lookup" => "ClientNo" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["AccountNumber"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","Balance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Balance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Balance";

	
	
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




	$tdataLoanStatements["Balance"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastModifiedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedBy";

	
	
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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastModifiedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedDate";

	
	
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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataLoanStatements["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$edata["autoCompleteFields"][] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ClientNo";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ClientNo";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataLoanStatements["AccountName"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("LoanStatements","SelectedClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "SelectedClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectedClientNo";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
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
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;








	$tdataLoanStatements["SelectedClientNo"] = $fdata;


$tables_data["LoanStatements"]=&$tdataLoanStatements;
$field_labels["LoanStatements"] = &$fieldLabelsLoanStatements;
$fieldToolTips["LoanStatements"] = &$fieldToolTipsLoanStatements;
$page_titles["LoanStatements"] = &$pageTitlesLoanStatements;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["LoanStatements"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["LoanStatements"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_LoanStatements()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  DebitAccount,  CreditAccount,  DebitAccountTransactionCharge,  CreditAccountTransactionCharge,  Amount,  `DateTime`,  Description,  LoanPaymentNo,  LoanPaymentName,  LoanPaymentPurpose,  LoanCreditPaymentNo,  LoanCreditPaymentName,  LoanCreditPaymentPurpose,  AccountType,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "AccountType = 'Loan'";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "AccountType = 'Loan'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'Loan'";
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
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "LoanStatements";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto8["m_sql"] = "DebitAccount";
$proto8["m_srcTableName"] = "LoanStatements";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto10["m_sql"] = "CreditAccount";
$proto10["m_srcTableName"] = "LoanStatements";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto12["m_sql"] = "DebitAccountTransactionCharge";
$proto12["m_srcTableName"] = "LoanStatements";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto14["m_sql"] = "CreditAccountTransactionCharge";
$proto14["m_srcTableName"] = "LoanStatements";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto16["m_sql"] = "Amount";
$proto16["m_srcTableName"] = "LoanStatements";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto18["m_sql"] = "`DateTime`";
$proto18["m_srcTableName"] = "LoanStatements";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto20["m_sql"] = "Description";
$proto20["m_srcTableName"] = "LoanStatements";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto22["m_sql"] = "LoanPaymentNo";
$proto22["m_srcTableName"] = "LoanStatements";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto24["m_sql"] = "LoanPaymentName";
$proto24["m_srcTableName"] = "LoanStatements";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentPurpose",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto26["m_sql"] = "LoanPaymentPurpose";
$proto26["m_srcTableName"] = "LoanStatements";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto28["m_sql"] = "LoanCreditPaymentNo";
$proto28["m_srcTableName"] = "LoanStatements";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto30["m_sql"] = "LoanCreditPaymentName";
$proto30["m_srcTableName"] = "LoanStatements";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentPurpose",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto32["m_sql"] = "LoanCreditPaymentPurpose";
$proto32["m_srcTableName"] = "LoanStatements";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto34["m_sql"] = "AccountType";
$proto34["m_srcTableName"] = "LoanStatements";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto36["m_sql"] = "ClientNo";
$proto36["m_srcTableName"] = "LoanStatements";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto38["m_sql"] = "AccountNumber";
$proto38["m_srcTableName"] = "LoanStatements";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto40["m_sql"] = "Balance";
$proto40["m_srcTableName"] = "LoanStatements";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto42["m_sql"] = "LastModifiedBy";
$proto42["m_srcTableName"] = "LoanStatements";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto44["m_sql"] = "LastModifiedDate";
$proto44["m_srcTableName"] = "LoanStatements";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto46["m_sql"] = "AccountName";
$proto46["m_srcTableName"] = "LoanStatements";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto48["m_sql"] = "SelectedClientNo";
$proto48["m_srcTableName"] = "LoanStatements";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "transactions";
$proto51["m_srcTableName"] = "LoanStatements";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "DebitAccount";
$proto51["m_columns"][] = "CreditAccount";
$proto51["m_columns"][] = "DebitAccountTransactionCharge";
$proto51["m_columns"][] = "CreditAccountTransactionCharge";
$proto51["m_columns"][] = "Amount";
$proto51["m_columns"][] = "DateTime";
$proto51["m_columns"][] = "Description";
$proto51["m_columns"][] = "CashDepositNo";
$proto51["m_columns"][] = "CashDepositorName";
$proto51["m_columns"][] = "CashDepositType";
$proto51["m_columns"][] = "WithdrawlNo";
$proto51["m_columns"][] = "WithdrawlName";
$proto51["m_columns"][] = "WithdrawlType";
$proto51["m_columns"][] = "LoanPaymentNo";
$proto51["m_columns"][] = "LoanPaymentName";
$proto51["m_columns"][] = "LoanPaymentPurpose";
$proto51["m_columns"][] = "LoanCreditPaymentNo";
$proto51["m_columns"][] = "LoanCreditPaymentName";
$proto51["m_columns"][] = "LoanCreditPaymentPurpose";
$proto51["m_columns"][] = "AccountType";
$proto51["m_columns"][] = "InterestAmount";
$proto51["m_columns"][] = "PrincipalAmount";
$proto51["m_columns"][] = "WithdrawlStatus";
$proto51["m_columns"][] = "NEFTTransferStatus";
$proto51["m_columns"][] = "LoanCreditApplicationStatus";
$proto51["m_columns"][] = "LoanCreditWitness";
$proto51["m_columns"][] = "NEFTTransferNo";
$proto51["m_columns"][] = "NEFTTransferDepositorName";
$proto51["m_columns"][] = "TransactionType";
$proto51["m_columns"][] = "Balance";
$proto51["m_columns"][] = "AccountNumber";
$proto51["m_columns"][] = "ClientNo";
$proto51["m_columns"][] = "LastModifiedBy";
$proto51["m_columns"][] = "LastModifiedDate";
$proto51["m_columns"][] = "AccountName";
$proto51["m_columns"][] = "TransactionNo";
$proto51["m_columns"][] = "TransactionStatus";
$proto51["m_columns"][] = "SelectedClientNo";
$proto51["m_columns"][] = "LoanPaymentStatus";
$proto51["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "transactions";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "LoanStatements";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "LoanStatements"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="LoanStatements";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_LoanStatements = createSqlQuery_LoanStatements();


	
		;

																						

$tdataLoanStatements[".sqlquery"] = $queryData_LoanStatements;

$tableEvents["LoanStatements"] = new eventsBase;
$tdataLoanStatements[".hasEvents"] = false;

?>