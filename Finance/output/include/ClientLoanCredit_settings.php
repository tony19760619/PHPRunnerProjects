<?php
require_once(getabspath("classes/cipherer.php"));




$tdataClientLoanCredit = array();
	$tdataClientLoanCredit[".truncateText"] = true;
	$tdataClientLoanCredit[".NumberOfChars"] = 80;
	$tdataClientLoanCredit[".ShortName"] = "ClientLoanCredit";
	$tdataClientLoanCredit[".OwnerID"] = "ClientNo";
	$tdataClientLoanCredit[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsClientLoanCredit = array();
$fieldToolTipsClientLoanCredit = array();
$pageTitlesClientLoanCredit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsClientLoanCredit["English"] = array();
	$fieldToolTipsClientLoanCredit["English"] = array();
	$pageTitlesClientLoanCredit["English"] = array();
	$fieldLabelsClientLoanCredit["English"]["id"] = "Id";
	$fieldToolTipsClientLoanCredit["English"]["id"] = "";
	$fieldLabelsClientLoanCredit["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipsClientLoanCredit["English"]["DebitAccount"] = "";
	$fieldLabelsClientLoanCredit["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipsClientLoanCredit["English"]["CreditAccount"] = "";
	$fieldLabelsClientLoanCredit["English"]["DebitAccountTransactionCharge"] = "Debit Account Transaction Charge";
	$fieldToolTipsClientLoanCredit["English"]["DebitAccountTransactionCharge"] = "";
	$fieldLabelsClientLoanCredit["English"]["CreditAccountTransactionCharge"] = "Credit Account Transaction Charge";
	$fieldToolTipsClientLoanCredit["English"]["CreditAccountTransactionCharge"] = "";
	$fieldLabelsClientLoanCredit["English"]["Amount"] = "Amount";
	$fieldToolTipsClientLoanCredit["English"]["Amount"] = "";
	$fieldLabelsClientLoanCredit["English"]["DateTime"] = "Date Time";
	$fieldToolTipsClientLoanCredit["English"]["DateTime"] = "";
	$fieldLabelsClientLoanCredit["English"]["Description"] = "Description";
	$fieldToolTipsClientLoanCredit["English"]["Description"] = "";
	$fieldLabelsClientLoanCredit["English"]["LoanCreditPaymentNo"] = "Loan Credit Payment No";
	$fieldToolTipsClientLoanCredit["English"]["LoanCreditPaymentNo"] = "";
	$fieldLabelsClientLoanCredit["English"]["LoanCreditApplicationStatus"] = "Loan Credit Application Status";
	$fieldToolTipsClientLoanCredit["English"]["LoanCreditApplicationStatus"] = "";
	$fieldLabelsClientLoanCredit["English"]["LoanCreditWitness"] = "Loan Credit Witness";
	$fieldToolTipsClientLoanCredit["English"]["LoanCreditWitness"] = "";
	$fieldLabelsClientLoanCredit["English"]["ClientNo"] = "Client No";
	$fieldToolTipsClientLoanCredit["English"]["ClientNo"] = "";
	$fieldLabelsClientLoanCredit["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsClientLoanCredit["English"]["AccountNumber"] = "";
	$fieldLabelsClientLoanCredit["English"]["Balance"] = "Balance";
	$fieldToolTipsClientLoanCredit["English"]["Balance"] = "";
	$fieldLabelsClientLoanCredit["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsClientLoanCredit["English"]["LastModifiedBy"] = "";
	$fieldLabelsClientLoanCredit["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsClientLoanCredit["English"]["LastModifiedDate"] = "";
	$fieldLabelsClientLoanCredit["English"]["AccountName"] = "Account Name";
	$fieldToolTipsClientLoanCredit["English"]["AccountName"] = "";
	$fieldLabelsClientLoanCredit["English"]["LoanCreditPaymentName"] = "Loan Credit Payment Name";
	$fieldToolTipsClientLoanCredit["English"]["LoanCreditPaymentName"] = "";
	$fieldLabelsClientLoanCredit["English"]["LoanCreditPaymentPurpose"] = "Loan Credit Payment Purpose";
	$fieldToolTipsClientLoanCredit["English"]["LoanCreditPaymentPurpose"] = "";
	$fieldLabelsClientLoanCredit["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipsClientLoanCredit["English"]["SelectedClientNo"] = "";
	if (count($fieldToolTipsClientLoanCredit["English"]))
		$tdataClientLoanCredit[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsClientLoanCredit[""] = array();
	$fieldToolTipsClientLoanCredit[""] = array();
	$pageTitlesClientLoanCredit[""] = array();
	if (count($fieldToolTipsClientLoanCredit[""]))
		$tdataClientLoanCredit[".isUseToolTips"] = true;
}


	$tdataClientLoanCredit[".NCSearch"] = true;



$tdataClientLoanCredit[".shortTableName"] = "ClientLoanCredit";
$tdataClientLoanCredit[".nSecOptions"] = 1;
$tdataClientLoanCredit[".recsPerRowPrint"] = 1;
$tdataClientLoanCredit[".mainTableOwnerID"] = "ClientNo";
$tdataClientLoanCredit[".moveNext"] = 1;
$tdataClientLoanCredit[".entityType"] = 1;

$tdataClientLoanCredit[".strOriginalTableName"] = "transactions";

	



$tdataClientLoanCredit[".showAddInPopup"] = false;

$tdataClientLoanCredit[".showEditInPopup"] = false;

$tdataClientLoanCredit[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataClientLoanCredit[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataClientLoanCredit[".fieldsForRegister"] = array();

$tdataClientLoanCredit[".listAjax"] = false;

	$tdataClientLoanCredit[".audit"] = false;

	$tdataClientLoanCredit[".locking"] = false;

$tdataClientLoanCredit[".edit"] = true;
$tdataClientLoanCredit[".afterEditAction"] = 1;
$tdataClientLoanCredit[".closePopupAfterEdit"] = 1;
$tdataClientLoanCredit[".afterEditActionDetTable"] = "";

$tdataClientLoanCredit[".add"] = true;
$tdataClientLoanCredit[".afterAddAction"] = 0;
$tdataClientLoanCredit[".closePopupAfterAdd"] = 1;
$tdataClientLoanCredit[".afterAddActionDetTable"] = "";

$tdataClientLoanCredit[".list"] = true;




$tdataClientLoanCredit[".view"] = true;

$tdataClientLoanCredit[".import"] = true;

$tdataClientLoanCredit[".exportTo"] = true;

$tdataClientLoanCredit[".printFriendly"] = true;


$tdataClientLoanCredit[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataClientLoanCredit[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataClientLoanCredit[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataClientLoanCredit[".searchSaving"] = true;
//

$tdataClientLoanCredit[".showSearchPanel"] = true;
		$tdataClientLoanCredit[".flexibleSearch"] = true;

$tdataClientLoanCredit[".isUseAjaxSuggest"] = true;

$tdataClientLoanCredit[".rowHighlite"] = true;



$tdataClientLoanCredit[".addPageEvents"] = false;

// use timepicker for search panel
$tdataClientLoanCredit[".isUseTimeForSearch"] = false;





$tdataClientLoanCredit[".allSearchFields"] = array();
$tdataClientLoanCredit[".filterFields"] = array();
$tdataClientLoanCredit[".requiredSearchFields"] = array();

$tdataClientLoanCredit[".allSearchFields"][] = "AccountName";
	$tdataClientLoanCredit[".allSearchFields"][] = "id";
	$tdataClientLoanCredit[".allSearchFields"][] = "ClientNo";
	$tdataClientLoanCredit[".allSearchFields"][] = "AccountNumber";
	$tdataClientLoanCredit[".allSearchFields"][] = "LoanCreditPaymentNo";
	$tdataClientLoanCredit[".allSearchFields"][] = "LoanCreditPaymentName";
	$tdataClientLoanCredit[".allSearchFields"][] = "LoanCreditPaymentPurpose";
	$tdataClientLoanCredit[".allSearchFields"][] = "LoanCreditApplicationStatus";
	$tdataClientLoanCredit[".allSearchFields"][] = "LoanCreditWitness";
	$tdataClientLoanCredit[".allSearchFields"][] = "DateTime";
	$tdataClientLoanCredit[".allSearchFields"][] = "Amount";
	$tdataClientLoanCredit[".allSearchFields"][] = "Balance";
	$tdataClientLoanCredit[".allSearchFields"][] = "Description";
	$tdataClientLoanCredit[".allSearchFields"][] = "LastModifiedBy";
	$tdataClientLoanCredit[".allSearchFields"][] = "LastModifiedDate";
	

$tdataClientLoanCredit[".googleLikeFields"] = array();
$tdataClientLoanCredit[".googleLikeFields"][] = "id";
$tdataClientLoanCredit[".googleLikeFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".googleLikeFields"][] = "DateTime";
$tdataClientLoanCredit[".googleLikeFields"][] = "CreditAccount";
$tdataClientLoanCredit[".googleLikeFields"][] = "DebitAccount";
$tdataClientLoanCredit[".googleLikeFields"][] = "CreditAccountTransactionCharge";
$tdataClientLoanCredit[".googleLikeFields"][] = "DebitAccountTransactionCharge";
$tdataClientLoanCredit[".googleLikeFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".googleLikeFields"][] = "Amount";
$tdataClientLoanCredit[".googleLikeFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".googleLikeFields"][] = "Description";
$tdataClientLoanCredit[".googleLikeFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".googleLikeFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".googleLikeFields"][] = "ClientNo";
$tdataClientLoanCredit[".googleLikeFields"][] = "AccountNumber";
$tdataClientLoanCredit[".googleLikeFields"][] = "Balance";
$tdataClientLoanCredit[".googleLikeFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".googleLikeFields"][] = "LastModifiedDate";
$tdataClientLoanCredit[".googleLikeFields"][] = "AccountName";
$tdataClientLoanCredit[".googleLikeFields"][] = "SelectedClientNo";


$tdataClientLoanCredit[".advSearchFields"] = array();
$tdataClientLoanCredit[".advSearchFields"][] = "AccountName";
$tdataClientLoanCredit[".advSearchFields"][] = "id";
$tdataClientLoanCredit[".advSearchFields"][] = "ClientNo";
$tdataClientLoanCredit[".advSearchFields"][] = "AccountNumber";
$tdataClientLoanCredit[".advSearchFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".advSearchFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".advSearchFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".advSearchFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".advSearchFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".advSearchFields"][] = "DateTime";
$tdataClientLoanCredit[".advSearchFields"][] = "Amount";
$tdataClientLoanCredit[".advSearchFields"][] = "Balance";
$tdataClientLoanCredit[".advSearchFields"][] = "Description";
$tdataClientLoanCredit[".advSearchFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".advSearchFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".tableType"] = "list";

$tdataClientLoanCredit[".printerPageOrientation"] = 0;
$tdataClientLoanCredit[".nPrinterPageScale"] = 100;

$tdataClientLoanCredit[".nPrinterSplitRecords"] = 40;

$tdataClientLoanCredit[".nPrinterPDFSplitRecords"] = 40;



$tdataClientLoanCredit[".geocodingEnabled"] = false;





$tdataClientLoanCredit[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataClientLoanCredit[".pageSize"] = 20;

$tdataClientLoanCredit[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataClientLoanCredit[".strOrderBy"] = $tstrOrderBy;

$tdataClientLoanCredit[".orderindexes"] = array();
$tdataClientLoanCredit[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataClientLoanCredit[".sqlHead"] = "  SELECT id,  LoanCreditPaymentNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  LoanCreditPaymentName,  Amount,  LoanCreditPaymentPurpose,  Description,  LoanCreditApplicationStatus,  LoanCreditWitness,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$tdataClientLoanCredit[".sqlFrom"] = "FROM transactions";
$tdataClientLoanCredit[".sqlWhereExpr"] = "LoanCreditPaymentPurpose in ('Loan Amount','Pawn Amount')";
$tdataClientLoanCredit[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataClientLoanCredit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataClientLoanCredit[".arrGroupsPerPage"] = $arrGPP;

$tdataClientLoanCredit[".highlightSearchResults"] = true;

$tableKeysClientLoanCredit = array();
$tableKeysClientLoanCredit[] = "id";
$tdataClientLoanCredit[".Keys"] = $tableKeysClientLoanCredit;

$tdataClientLoanCredit[".listFields"] = array();
$tdataClientLoanCredit[".listFields"][] = "AccountName";
$tdataClientLoanCredit[".listFields"][] = "id";
$tdataClientLoanCredit[".listFields"][] = "ClientNo";
$tdataClientLoanCredit[".listFields"][] = "AccountNumber";
$tdataClientLoanCredit[".listFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".listFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".listFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".listFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".listFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".listFields"][] = "DateTime";
$tdataClientLoanCredit[".listFields"][] = "Amount";
$tdataClientLoanCredit[".listFields"][] = "Balance";
$tdataClientLoanCredit[".listFields"][] = "Description";
$tdataClientLoanCredit[".listFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".listFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".hideMobileList"] = array();


$tdataClientLoanCredit[".viewFields"] = array();
$tdataClientLoanCredit[".viewFields"][] = "AccountName";
$tdataClientLoanCredit[".viewFields"][] = "id";
$tdataClientLoanCredit[".viewFields"][] = "ClientNo";
$tdataClientLoanCredit[".viewFields"][] = "AccountNumber";
$tdataClientLoanCredit[".viewFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".viewFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".viewFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".viewFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".viewFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".viewFields"][] = "DateTime";
$tdataClientLoanCredit[".viewFields"][] = "Amount";
$tdataClientLoanCredit[".viewFields"][] = "Balance";
$tdataClientLoanCredit[".viewFields"][] = "Description";
$tdataClientLoanCredit[".viewFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".viewFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".addFields"] = array();
$tdataClientLoanCredit[".addFields"][] = "SelectedClientNo";
$tdataClientLoanCredit[".addFields"][] = "AccountName";
$tdataClientLoanCredit[".addFields"][] = "ClientNo";
$tdataClientLoanCredit[".addFields"][] = "AccountNumber";
$tdataClientLoanCredit[".addFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".addFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".addFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".addFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".addFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".addFields"][] = "DateTime";
$tdataClientLoanCredit[".addFields"][] = "Amount";
$tdataClientLoanCredit[".addFields"][] = "Balance";
$tdataClientLoanCredit[".addFields"][] = "Description";
$tdataClientLoanCredit[".addFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".addFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".masterListFields"] = array();
$tdataClientLoanCredit[".masterListFields"][] = "CreditAccountTransactionCharge";
$tdataClientLoanCredit[".masterListFields"][] = "DebitAccountTransactionCharge";
$tdataClientLoanCredit[".masterListFields"][] = "CreditAccount";
$tdataClientLoanCredit[".masterListFields"][] = "DebitAccount";
$tdataClientLoanCredit[".masterListFields"][] = "SelectedClientNo";
$tdataClientLoanCredit[".masterListFields"][] = "AccountName";
$tdataClientLoanCredit[".masterListFields"][] = "id";
$tdataClientLoanCredit[".masterListFields"][] = "ClientNo";
$tdataClientLoanCredit[".masterListFields"][] = "AccountNumber";
$tdataClientLoanCredit[".masterListFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".masterListFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".masterListFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".masterListFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".masterListFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".masterListFields"][] = "DateTime";
$tdataClientLoanCredit[".masterListFields"][] = "Amount";
$tdataClientLoanCredit[".masterListFields"][] = "Balance";
$tdataClientLoanCredit[".masterListFields"][] = "Description";
$tdataClientLoanCredit[".masterListFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".masterListFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".inlineAddFields"] = array();

$tdataClientLoanCredit[".editFields"] = array();
$tdataClientLoanCredit[".editFields"][] = "AccountName";
$tdataClientLoanCredit[".editFields"][] = "ClientNo";
$tdataClientLoanCredit[".editFields"][] = "AccountNumber";
$tdataClientLoanCredit[".editFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".editFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".editFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".editFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".editFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".editFields"][] = "DateTime";
$tdataClientLoanCredit[".editFields"][] = "Amount";
$tdataClientLoanCredit[".editFields"][] = "Balance";
$tdataClientLoanCredit[".editFields"][] = "Description";
$tdataClientLoanCredit[".editFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".editFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".inlineEditFields"] = array();

$tdataClientLoanCredit[".updateSelectedFields"] = array();


$tdataClientLoanCredit[".exportFields"] = array();
$tdataClientLoanCredit[".exportFields"][] = "AccountName";
$tdataClientLoanCredit[".exportFields"][] = "id";
$tdataClientLoanCredit[".exportFields"][] = "ClientNo";
$tdataClientLoanCredit[".exportFields"][] = "AccountNumber";
$tdataClientLoanCredit[".exportFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".exportFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".exportFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".exportFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".exportFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".exportFields"][] = "DateTime";
$tdataClientLoanCredit[".exportFields"][] = "Amount";
$tdataClientLoanCredit[".exportFields"][] = "Balance";
$tdataClientLoanCredit[".exportFields"][] = "Description";
$tdataClientLoanCredit[".exportFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".exportFields"][] = "LastModifiedDate";

$tdataClientLoanCredit[".importFields"] = array();
$tdataClientLoanCredit[".importFields"][] = "id";
$tdataClientLoanCredit[".importFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".importFields"][] = "DateTime";
$tdataClientLoanCredit[".importFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".importFields"][] = "Amount";
$tdataClientLoanCredit[".importFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".importFields"][] = "Description";
$tdataClientLoanCredit[".importFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".importFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".importFields"][] = "ClientNo";
$tdataClientLoanCredit[".importFields"][] = "AccountNumber";
$tdataClientLoanCredit[".importFields"][] = "Balance";
$tdataClientLoanCredit[".importFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".importFields"][] = "LastModifiedDate";
$tdataClientLoanCredit[".importFields"][] = "AccountName";

$tdataClientLoanCredit[".printFields"] = array();
$tdataClientLoanCredit[".printFields"][] = "AccountName";
$tdataClientLoanCredit[".printFields"][] = "id";
$tdataClientLoanCredit[".printFields"][] = "ClientNo";
$tdataClientLoanCredit[".printFields"][] = "AccountNumber";
$tdataClientLoanCredit[".printFields"][] = "LoanCreditPaymentNo";
$tdataClientLoanCredit[".printFields"][] = "LoanCreditPaymentName";
$tdataClientLoanCredit[".printFields"][] = "LoanCreditPaymentPurpose";
$tdataClientLoanCredit[".printFields"][] = "LoanCreditApplicationStatus";
$tdataClientLoanCredit[".printFields"][] = "LoanCreditWitness";
$tdataClientLoanCredit[".printFields"][] = "DateTime";
$tdataClientLoanCredit[".printFields"][] = "Amount";
$tdataClientLoanCredit[".printFields"][] = "Balance";
$tdataClientLoanCredit[".printFields"][] = "Description";
$tdataClientLoanCredit[".printFields"][] = "LastModifiedBy";
$tdataClientLoanCredit[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","id");
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientLoanCredit["id"] = $fdata;
//	LoanCreditPaymentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "LoanCreditPaymentNo";
	$fdata["GoodName"] = "LoanCreditPaymentNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LoanCreditPaymentNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientLoanCredit["LoanCreditPaymentNo"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","DateTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientLoanCredit["DateTime"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","CreditAccount");
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








	$tdataClientLoanCredit["CreditAccount"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","DebitAccount");
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








	$tdataClientLoanCredit["DebitAccount"] = $fdata;
//	CreditAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CreditAccountTransactionCharge";
	$fdata["GoodName"] = "CreditAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","CreditAccountTransactionCharge");
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








	$tdataClientLoanCredit["CreditAccountTransactionCharge"] = $fdata;
//	DebitAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DebitAccountTransactionCharge";
	$fdata["GoodName"] = "DebitAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","DebitAccountTransactionCharge");
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








	$tdataClientLoanCredit["DebitAccountTransactionCharge"] = $fdata;
//	LoanCreditPaymentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "LoanCreditPaymentName";
	$fdata["GoodName"] = "LoanCreditPaymentName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LoanCreditPaymentName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdataClientLoanCredit["LoanCreditPaymentName"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdataClientLoanCredit["Amount"] = $fdata;
//	LoanCreditPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "LoanCreditPaymentPurpose";
	$fdata["GoodName"] = "LoanCreditPaymentPurpose";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LoanCreditPaymentPurpose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientLoanCredit["LoanCreditPaymentPurpose"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","Description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdataClientLoanCredit["Description"] = $fdata;
//	LoanCreditApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LoanCreditApplicationStatus";
	$fdata["GoodName"] = "LoanCreditApplicationStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LoanCreditApplicationStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditApplicationStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditApplicationStatus";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientLoanCredit["LoanCreditApplicationStatus"] = $fdata;
//	LoanCreditWitness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LoanCreditWitness";
	$fdata["GoodName"] = "LoanCreditWitness";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LoanCreditWitness");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanCreditWitness";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanCreditWitness";

	
	
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




	$tdataClientLoanCredit["LoanCreditWitness"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
	$edata["LookupTable"] = "usersLookupFiltered";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";
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
	$edata["LookupTable"] = "usersLookupFiltered";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(FirstName,' ',LastName,' [',ClientNo,']') ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";
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




	$tdataClientLoanCredit["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
	$edata["LookupTable"] = "accountsLookUpFiltered";
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUpFiltered";
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientLoanCredit["AccountNumber"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","Balance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdataClientLoanCredit["Balance"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdataClientLoanCredit["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientLoanCredit["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdataClientLoanCredit["AccountName"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientLoanCredit","SelectedClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	


	
	
	
	
		$fdata["strField"] = "SelectedClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectedClientNo";

	
	
			
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








	$tdataClientLoanCredit["SelectedClientNo"] = $fdata;


$tables_data["ClientLoanCredit"]=&$tdataClientLoanCredit;
$field_labels["ClientLoanCredit"] = &$fieldLabelsClientLoanCredit;
$fieldToolTips["ClientLoanCredit"] = &$fieldToolTipsClientLoanCredit;
$page_titles["ClientLoanCredit"] = &$pageTitlesClientLoanCredit;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ClientLoanCredit"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ClientLoanCredit"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ClientLoanCredit()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "id,  LoanCreditPaymentNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  LoanCreditPaymentName,  Amount,  LoanCreditPaymentPurpose,  Description,  LoanCreditApplicationStatus,  LoanCreditWitness,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "LoanCreditPaymentPurpose in ('Loan Amount','Pawn Amount')";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "LoanCreditPaymentPurpose in ('Loan Amount','Pawn Amount')";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentPurpose",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "in ('Loan Amount','Pawn Amount')";
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
	"m_srcTableName" => "ClientLoanCredit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ClientLoanCredit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto8["m_sql"] = "LoanCreditPaymentNo";
$proto8["m_srcTableName"] = "ClientLoanCredit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto10["m_sql"] = "`DateTime`";
$proto10["m_srcTableName"] = "ClientLoanCredit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto12["m_sql"] = "CreditAccount";
$proto12["m_srcTableName"] = "ClientLoanCredit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto14["m_sql"] = "DebitAccount";
$proto14["m_srcTableName"] = "ClientLoanCredit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto16["m_sql"] = "CreditAccountTransactionCharge";
$proto16["m_srcTableName"] = "ClientLoanCredit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto18["m_sql"] = "DebitAccountTransactionCharge";
$proto18["m_srcTableName"] = "ClientLoanCredit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto20["m_sql"] = "LoanCreditPaymentName";
$proto20["m_srcTableName"] = "ClientLoanCredit";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto22["m_sql"] = "Amount";
$proto22["m_srcTableName"] = "ClientLoanCredit";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentPurpose",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto24["m_sql"] = "LoanCreditPaymentPurpose";
$proto24["m_srcTableName"] = "ClientLoanCredit";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto26["m_sql"] = "Description";
$proto26["m_srcTableName"] = "ClientLoanCredit";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditApplicationStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto28["m_sql"] = "LoanCreditApplicationStatus";
$proto28["m_srcTableName"] = "ClientLoanCredit";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditWitness",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto30["m_sql"] = "LoanCreditWitness";
$proto30["m_srcTableName"] = "ClientLoanCredit";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto32["m_sql"] = "ClientNo";
$proto32["m_srcTableName"] = "ClientLoanCredit";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto34["m_sql"] = "AccountNumber";
$proto34["m_srcTableName"] = "ClientLoanCredit";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto36["m_sql"] = "Balance";
$proto36["m_srcTableName"] = "ClientLoanCredit";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto38["m_sql"] = "LastModifiedBy";
$proto38["m_srcTableName"] = "ClientLoanCredit";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto40["m_sql"] = "LastModifiedDate";
$proto40["m_srcTableName"] = "ClientLoanCredit";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto42["m_sql"] = "AccountName";
$proto42["m_srcTableName"] = "ClientLoanCredit";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto44["m_sql"] = "SelectedClientNo";
$proto44["m_srcTableName"] = "ClientLoanCredit";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "transactions";
$proto47["m_srcTableName"] = "ClientLoanCredit";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "DebitAccount";
$proto47["m_columns"][] = "CreditAccount";
$proto47["m_columns"][] = "DebitAccountTransactionCharge";
$proto47["m_columns"][] = "CreditAccountTransactionCharge";
$proto47["m_columns"][] = "Amount";
$proto47["m_columns"][] = "DateTime";
$proto47["m_columns"][] = "Description";
$proto47["m_columns"][] = "CashDepositNo";
$proto47["m_columns"][] = "CashDepositorName";
$proto47["m_columns"][] = "CashDepositType";
$proto47["m_columns"][] = "WithdrawlNo";
$proto47["m_columns"][] = "WithdrawlName";
$proto47["m_columns"][] = "WithdrawlType";
$proto47["m_columns"][] = "LoanPaymentNo";
$proto47["m_columns"][] = "LoanPaymentName";
$proto47["m_columns"][] = "LoanPaymentPurpose";
$proto47["m_columns"][] = "LoanCreditPaymentNo";
$proto47["m_columns"][] = "LoanCreditPaymentName";
$proto47["m_columns"][] = "LoanCreditPaymentPurpose";
$proto47["m_columns"][] = "AccountType";
$proto47["m_columns"][] = "InterestAmount";
$proto47["m_columns"][] = "PrincipalAmount";
$proto47["m_columns"][] = "WithdrawlStatus";
$proto47["m_columns"][] = "NEFTTransferStatus";
$proto47["m_columns"][] = "LoanCreditApplicationStatus";
$proto47["m_columns"][] = "LoanCreditWitness";
$proto47["m_columns"][] = "NEFTTransferNo";
$proto47["m_columns"][] = "NEFTTransferDepositorName";
$proto47["m_columns"][] = "TransactionType";
$proto47["m_columns"][] = "Balance";
$proto47["m_columns"][] = "AccountNumber";
$proto47["m_columns"][] = "ClientNo";
$proto47["m_columns"][] = "LastModifiedBy";
$proto47["m_columns"][] = "LastModifiedDate";
$proto47["m_columns"][] = "AccountName";
$proto47["m_columns"][] = "TransactionNo";
$proto47["m_columns"][] = "TransactionStatus";
$proto47["m_columns"][] = "SelectedClientNo";
$proto47["m_columns"][] = "LoanPaymentStatus";
$proto47["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "transactions";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "ClientLoanCredit";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientLoanCredit"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ClientLoanCredit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ClientLoanCredit = createSqlQuery_ClientLoanCredit();


	
		;

																				

$tdataClientLoanCredit[".sqlquery"] = $queryData_ClientLoanCredit;

include_once(getabspath("include/ClientLoanCredit_events.php"));
$tableEvents["ClientLoanCredit"] = new eventclass_ClientLoanCredit;
$tdataClientLoanCredit[".hasEvents"] = true;

?>