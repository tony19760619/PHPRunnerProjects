<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatransactions = array();
	$tdatatransactions[".truncateText"] = true;
	$tdatatransactions[".NumberOfChars"] = 80;
	$tdatatransactions[".ShortName"] = "transactions";
	$tdatatransactions[".OwnerID"] = "";
	$tdatatransactions[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelstransactions = array();
$fieldToolTipstransactions = array();
$pageTitlestransactions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransactions["English"] = array();
	$fieldToolTipstransactions["English"] = array();
	$pageTitlestransactions["English"] = array();
	$fieldLabelstransactions["English"]["id"] = "Id";
	$fieldToolTipstransactions["English"]["id"] = "";
	$fieldLabelstransactions["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipstransactions["English"]["DebitAccount"] = "";
	$fieldLabelstransactions["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipstransactions["English"]["CreditAccount"] = "";
	$fieldLabelstransactions["English"]["DebitAccountTransactionCharge"] = "Debit Account Transaction Charge";
	$fieldToolTipstransactions["English"]["DebitAccountTransactionCharge"] = "";
	$fieldLabelstransactions["English"]["CreditAccountTransactionCharge"] = "Credit Account Transaction Charge";
	$fieldToolTipstransactions["English"]["CreditAccountTransactionCharge"] = "";
	$fieldLabelstransactions["English"]["Amount"] = "Amount";
	$fieldToolTipstransactions["English"]["Amount"] = "";
	$fieldLabelstransactions["English"]["DateTime"] = "Date Time";
	$fieldToolTipstransactions["English"]["DateTime"] = "";
	$fieldLabelstransactions["English"]["Description"] = "Description";
	$fieldToolTipstransactions["English"]["Description"] = "";
	$fieldLabelstransactions["English"]["WithdrawlNo"] = "Withdrawl No";
	$fieldToolTipstransactions["English"]["WithdrawlNo"] = "";
	$fieldLabelstransactions["English"]["WithdrawlName"] = "Withdrawl Name";
	$fieldToolTipstransactions["English"]["WithdrawlName"] = "";
	$fieldLabelstransactions["English"]["WithdrawlType"] = "Withdrawl Type";
	$fieldToolTipstransactions["English"]["WithdrawlType"] = "";
	$fieldLabelstransactions["English"]["LoanPaymentNo"] = "Loan Payment No";
	$fieldToolTipstransactions["English"]["LoanPaymentNo"] = "";
	$fieldLabelstransactions["English"]["LoanPaymentPurpose"] = "Loan Payment Purpose";
	$fieldToolTipstransactions["English"]["LoanPaymentPurpose"] = "";
	$fieldLabelstransactions["English"]["LoanCreditPaymentNo"] = "Loan Credit Payment No";
	$fieldToolTipstransactions["English"]["LoanCreditPaymentNo"] = "";
	$fieldLabelstransactions["English"]["AccountType"] = "Account Type";
	$fieldToolTipstransactions["English"]["AccountType"] = "";
	$fieldLabelstransactions["English"]["PrincipalAmount"] = "Principal Amount";
	$fieldToolTipstransactions["English"]["PrincipalAmount"] = "";
	$fieldLabelstransactions["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipstransactions["English"]["InterestAmount"] = "";
	$fieldLabelstransactions["English"]["WithdrawlStatus"] = "Withdrawl Status";
	$fieldToolTipstransactions["English"]["WithdrawlStatus"] = "";
	$fieldLabelstransactions["English"]["LoanCreditApplicationStatus"] = "Loan Credit Application Status";
	$fieldToolTipstransactions["English"]["LoanCreditApplicationStatus"] = "";
	$fieldLabelstransactions["English"]["LoanCreditWitness"] = "Loan Credit Witness";
	$fieldToolTipstransactions["English"]["LoanCreditWitness"] = "";
	$fieldLabelstransactions["English"]["NEFTTransferStatus"] = "NEFTTransfer Status";
	$fieldToolTipstransactions["English"]["NEFTTransferStatus"] = "";
	$fieldLabelstransactions["English"]["NEFTTransferNo"] = "NEFTTransfer No";
	$fieldToolTipstransactions["English"]["NEFTTransferNo"] = "";
	$fieldLabelstransactions["English"]["NEFTTransferDepositorName"] = "NEFTTransfer Depositor Name";
	$fieldToolTipstransactions["English"]["NEFTTransferDepositorName"] = "";
	$fieldLabelstransactions["English"]["CashDepositNo"] = "Cash Deposit No";
	$fieldToolTipstransactions["English"]["CashDepositNo"] = "";
	$fieldLabelstransactions["English"]["CashDepositorName"] = "Cash Depositor Name";
	$fieldToolTipstransactions["English"]["CashDepositorName"] = "";
	$fieldLabelstransactions["English"]["CashDepositType"] = "Cash Deposit Type";
	$fieldToolTipstransactions["English"]["CashDepositType"] = "";
	$fieldLabelstransactions["English"]["TransactionType"] = "Transaction Type";
	$fieldToolTipstransactions["English"]["TransactionType"] = "";
	$fieldLabelstransactions["English"]["Balance"] = "Balance";
	$fieldToolTipstransactions["English"]["Balance"] = "";
	$fieldLabelstransactions["English"]["ClientNo"] = "Client No";
	$fieldToolTipstransactions["English"]["ClientNo"] = "";
	$fieldLabelstransactions["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipstransactions["English"]["AccountNumber"] = "";
	$fieldLabelstransactions["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipstransactions["English"]["LastModifiedBy"] = "";
	$fieldLabelstransactions["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipstransactions["English"]["LastModifiedDate"] = "";
	$fieldLabelstransactions["English"]["AccountName"] = "Account Name";
	$fieldToolTipstransactions["English"]["AccountName"] = "";
	$fieldLabelstransactions["English"]["LoanPaymentName"] = "Loan Payment Name";
	$fieldToolTipstransactions["English"]["LoanPaymentName"] = "";
	$fieldLabelstransactions["English"]["LoanCreditPaymentName"] = "Loan Credit Payment Name";
	$fieldToolTipstransactions["English"]["LoanCreditPaymentName"] = "";
	$fieldLabelstransactions["English"]["LoanCreditPaymentPurpose"] = "Loan Credit Payment Purpose";
	$fieldToolTipstransactions["English"]["LoanCreditPaymentPurpose"] = "";
	$fieldLabelstransactions["English"]["TransactionNo"] = "Transaction No";
	$fieldToolTipstransactions["English"]["TransactionNo"] = "";
	$fieldLabelstransactions["English"]["TransactionStatus"] = "Transaction Status";
	$fieldToolTipstransactions["English"]["TransactionStatus"] = "";
	$fieldLabelstransactions["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipstransactions["English"]["SelectedClientNo"] = "";
	$fieldLabelstransactions["English"]["LoanPaymentStatus"] = "Loan Payment Status";
	$fieldToolTipstransactions["English"]["LoanPaymentStatus"] = "";
	$fieldLabelstransactions["English"]["CashDepositStatus"] = "Cash Deposit Status";
	$fieldToolTipstransactions["English"]["CashDepositStatus"] = "";
	if (count($fieldToolTipstransactions["English"]))
		$tdatatransactions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstransactions[""] = array();
	$fieldToolTipstransactions[""] = array();
	$pageTitlestransactions[""] = array();
	if (count($fieldToolTipstransactions[""]))
		$tdatatransactions[".isUseToolTips"] = true;
}


	$tdatatransactions[".NCSearch"] = true;



$tdatatransactions[".shortTableName"] = "transactions";
$tdatatransactions[".nSecOptions"] = 0;
$tdatatransactions[".recsPerRowPrint"] = 1;
$tdatatransactions[".mainTableOwnerID"] = "";
$tdatatransactions[".moveNext"] = 1;
$tdatatransactions[".entityType"] = 0;

$tdatatransactions[".strOriginalTableName"] = "transactions";

	



$tdatatransactions[".showAddInPopup"] = false;

$tdatatransactions[".showEditInPopup"] = false;

$tdatatransactions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatransactions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatransactions[".fieldsForRegister"] = array();

$tdatatransactions[".listAjax"] = false;

	$tdatatransactions[".audit"] = false;

	$tdatatransactions[".locking"] = false;

$tdatatransactions[".edit"] = true;
$tdatatransactions[".afterEditAction"] = 1;
$tdatatransactions[".closePopupAfterEdit"] = 1;
$tdatatransactions[".afterEditActionDetTable"] = "";

$tdatatransactions[".add"] = true;
$tdatatransactions[".afterAddAction"] = 0;
$tdatatransactions[".closePopupAfterAdd"] = 1;
$tdatatransactions[".afterAddActionDetTable"] = "";

$tdatatransactions[".list"] = true;




$tdatatransactions[".view"] = true;

$tdatatransactions[".import"] = true;

$tdatatransactions[".exportTo"] = true;

$tdatatransactions[".printFriendly"] = true;

$tdatatransactions[".delete"] = true;

$tdatatransactions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatransactions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatransactions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatransactions[".searchSaving"] = true;
//

$tdatatransactions[".showSearchPanel"] = true;
		$tdatatransactions[".flexibleSearch"] = true;

$tdatatransactions[".isUseAjaxSuggest"] = true;

$tdatatransactions[".rowHighlite"] = true;



$tdatatransactions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransactions[".isUseTimeForSearch"] = false;



$tdatatransactions[".badgeColor"] = "B22222";


$tdatatransactions[".allSearchFields"] = array();
$tdatatransactions[".filterFields"] = array();
$tdatatransactions[".requiredSearchFields"] = array();

$tdatatransactions[".allSearchFields"][] = "id";
	$tdatatransactions[".allSearchFields"][] = "Amount";
	$tdatatransactions[".allSearchFields"][] = "DateTime";
	$tdatatransactions[".allSearchFields"][] = "Description";
	$tdatatransactions[".allSearchFields"][] = "CashDepositNo";
	$tdatatransactions[".allSearchFields"][] = "CashDepositType";
	$tdatatransactions[".allSearchFields"][] = "WithdrawlNo";
	$tdatatransactions[".allSearchFields"][] = "WithdrawlName";
	$tdatatransactions[".allSearchFields"][] = "WithdrawlType";
	$tdatatransactions[".allSearchFields"][] = "LoanPaymentNo";
	$tdatatransactions[".allSearchFields"][] = "LoanPaymentName";
	$tdatatransactions[".allSearchFields"][] = "LoanPaymentPurpose";
	$tdatatransactions[".allSearchFields"][] = "LoanCreditPaymentNo";
	$tdatatransactions[".allSearchFields"][] = "LoanCreditPaymentName";
	$tdatatransactions[".allSearchFields"][] = "LoanCreditPaymentPurpose";
	$tdatatransactions[".allSearchFields"][] = "AccountType";
	$tdatatransactions[".allSearchFields"][] = "InterestAmount";
	$tdatatransactions[".allSearchFields"][] = "PrincipalAmount";
	$tdatatransactions[".allSearchFields"][] = "WithdrawlStatus";
	$tdatatransactions[".allSearchFields"][] = "NEFTTransferStatus";
	$tdatatransactions[".allSearchFields"][] = "LoanCreditApplicationStatus";
	$tdatatransactions[".allSearchFields"][] = "LoanCreditWitness";
	$tdatatransactions[".allSearchFields"][] = "NEFTTransferNo";
	$tdatatransactions[".allSearchFields"][] = "NEFTTransferDepositorName";
	$tdatatransactions[".allSearchFields"][] = "TransactionType";
	$tdatatransactions[".allSearchFields"][] = "Balance";
	$tdatatransactions[".allSearchFields"][] = "AccountNumber";
	$tdatatransactions[".allSearchFields"][] = "ClientNo";
	$tdatatransactions[".allSearchFields"][] = "LastModifiedBy";
	$tdatatransactions[".allSearchFields"][] = "LastModifiedDate";
	$tdatatransactions[".allSearchFields"][] = "AccountName";
	$tdatatransactions[".allSearchFields"][] = "TransactionNo";
	$tdatatransactions[".allSearchFields"][] = "TransactionStatus";
	$tdatatransactions[".allSearchFields"][] = "SelectedClientNo";
	$tdatatransactions[".allSearchFields"][] = "LoanPaymentStatus";
	$tdatatransactions[".allSearchFields"][] = "CashDepositStatus";
	

$tdatatransactions[".googleLikeFields"] = array();
$tdatatransactions[".googleLikeFields"][] = "id";
$tdatatransactions[".googleLikeFields"][] = "DebitAccount";
$tdatatransactions[".googleLikeFields"][] = "CreditAccount";
$tdatatransactions[".googleLikeFields"][] = "DebitAccountTransactionCharge";
$tdatatransactions[".googleLikeFields"][] = "CreditAccountTransactionCharge";
$tdatatransactions[".googleLikeFields"][] = "Amount";
$tdatatransactions[".googleLikeFields"][] = "DateTime";
$tdatatransactions[".googleLikeFields"][] = "Description";
$tdatatransactions[".googleLikeFields"][] = "CashDepositNo";
$tdatatransactions[".googleLikeFields"][] = "CashDepositorName";
$tdatatransactions[".googleLikeFields"][] = "CashDepositType";
$tdatatransactions[".googleLikeFields"][] = "WithdrawlNo";
$tdatatransactions[".googleLikeFields"][] = "WithdrawlName";
$tdatatransactions[".googleLikeFields"][] = "WithdrawlType";
$tdatatransactions[".googleLikeFields"][] = "LoanPaymentNo";
$tdatatransactions[".googleLikeFields"][] = "LoanPaymentName";
$tdatatransactions[".googleLikeFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".googleLikeFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".googleLikeFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".googleLikeFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".googleLikeFields"][] = "AccountType";
$tdatatransactions[".googleLikeFields"][] = "InterestAmount";
$tdatatransactions[".googleLikeFields"][] = "PrincipalAmount";
$tdatatransactions[".googleLikeFields"][] = "WithdrawlStatus";
$tdatatransactions[".googleLikeFields"][] = "NEFTTransferStatus";
$tdatatransactions[".googleLikeFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".googleLikeFields"][] = "LoanCreditWitness";
$tdatatransactions[".googleLikeFields"][] = "NEFTTransferNo";
$tdatatransactions[".googleLikeFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".googleLikeFields"][] = "TransactionType";
$tdatatransactions[".googleLikeFields"][] = "Balance";
$tdatatransactions[".googleLikeFields"][] = "AccountNumber";
$tdatatransactions[".googleLikeFields"][] = "ClientNo";
$tdatatransactions[".googleLikeFields"][] = "LastModifiedBy";
$tdatatransactions[".googleLikeFields"][] = "LastModifiedDate";
$tdatatransactions[".googleLikeFields"][] = "AccountName";
$tdatatransactions[".googleLikeFields"][] = "TransactionNo";
$tdatatransactions[".googleLikeFields"][] = "TransactionStatus";
$tdatatransactions[".googleLikeFields"][] = "SelectedClientNo";
$tdatatransactions[".googleLikeFields"][] = "LoanPaymentStatus";
$tdatatransactions[".googleLikeFields"][] = "CashDepositStatus";


$tdatatransactions[".advSearchFields"] = array();
$tdatatransactions[".advSearchFields"][] = "id";
$tdatatransactions[".advSearchFields"][] = "Amount";
$tdatatransactions[".advSearchFields"][] = "DateTime";
$tdatatransactions[".advSearchFields"][] = "Description";
$tdatatransactions[".advSearchFields"][] = "CashDepositNo";
$tdatatransactions[".advSearchFields"][] = "CashDepositType";
$tdatatransactions[".advSearchFields"][] = "WithdrawlNo";
$tdatatransactions[".advSearchFields"][] = "WithdrawlName";
$tdatatransactions[".advSearchFields"][] = "WithdrawlType";
$tdatatransactions[".advSearchFields"][] = "LoanPaymentNo";
$tdatatransactions[".advSearchFields"][] = "LoanPaymentName";
$tdatatransactions[".advSearchFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".advSearchFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".advSearchFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".advSearchFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".advSearchFields"][] = "AccountType";
$tdatatransactions[".advSearchFields"][] = "InterestAmount";
$tdatatransactions[".advSearchFields"][] = "PrincipalAmount";
$tdatatransactions[".advSearchFields"][] = "WithdrawlStatus";
$tdatatransactions[".advSearchFields"][] = "NEFTTransferStatus";
$tdatatransactions[".advSearchFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".advSearchFields"][] = "LoanCreditWitness";
$tdatatransactions[".advSearchFields"][] = "NEFTTransferNo";
$tdatatransactions[".advSearchFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".advSearchFields"][] = "TransactionType";
$tdatatransactions[".advSearchFields"][] = "Balance";
$tdatatransactions[".advSearchFields"][] = "AccountNumber";
$tdatatransactions[".advSearchFields"][] = "ClientNo";
$tdatatransactions[".advSearchFields"][] = "LastModifiedBy";
$tdatatransactions[".advSearchFields"][] = "LastModifiedDate";
$tdatatransactions[".advSearchFields"][] = "AccountName";
$tdatatransactions[".advSearchFields"][] = "TransactionNo";
$tdatatransactions[".advSearchFields"][] = "TransactionStatus";
$tdatatransactions[".advSearchFields"][] = "SelectedClientNo";
$tdatatransactions[".advSearchFields"][] = "LoanPaymentStatus";
$tdatatransactions[".advSearchFields"][] = "CashDepositStatus";

$tdatatransactions[".tableType"] = "list";

$tdatatransactions[".printerPageOrientation"] = 0;
$tdatatransactions[".nPrinterPageScale"] = 100;

$tdatatransactions[".nPrinterSplitRecords"] = 40;

$tdatatransactions[".nPrinterPDFSplitRecords"] = 40;



$tdatatransactions[".geocodingEnabled"] = false;





$tdatatransactions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatransactions[".pageSize"] = 20;

$tdatatransactions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatransactions[".strOrderBy"] = $tstrOrderBy;

$tdatatransactions[".orderindexes"] = array();

$tdatatransactions[".sqlHead"] = "SELECT id,  	DebitAccount,  	CreditAccount,  	DebitAccountTransactionCharge,  	CreditAccountTransactionCharge,  	Amount,  	`DateTime`,  	Description,  	CashDepositNo,  	CashDepositorName,  	CashDepositType,  	WithdrawlNo,  	WithdrawlName,  	WithdrawlType,  	LoanPaymentNo,  	LoanPaymentName,  	LoanPaymentPurpose,  	LoanCreditPaymentNo,  	LoanCreditPaymentName,  	LoanCreditPaymentPurpose,  	AccountType,  	InterestAmount,  	PrincipalAmount,  	WithdrawlStatus,  	NEFTTransferStatus,  	LoanCreditApplicationStatus,  	LoanCreditWitness,  	NEFTTransferNo,  	NEFTTransferDepositorName,  	TransactionType,  	Balance,  	AccountNumber,  	ClientNo,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	TransactionNo,  	TransactionStatus,  	SelectedClientNo,  	LoanPaymentStatus,  	CashDepositStatus";
$tdatatransactions[".sqlFrom"] = "FROM transactions";
$tdatatransactions[".sqlWhereExpr"] = "";
$tdatatransactions[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransactions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransactions[".arrGroupsPerPage"] = $arrGPP;

$tdatatransactions[".highlightSearchResults"] = true;

$tableKeystransactions = array();
$tableKeystransactions[] = "id";
$tdatatransactions[".Keys"] = $tableKeystransactions;

$tdatatransactions[".listFields"] = array();
$tdatatransactions[".listFields"][] = "LoanPaymentStatus";
$tdatatransactions[".listFields"][] = "SelectedClientNo";
$tdatatransactions[".listFields"][] = "CashDepositStatus";
$tdatatransactions[".listFields"][] = "TransactionStatus";
$tdatatransactions[".listFields"][] = "TransactionNo";
$tdatatransactions[".listFields"][] = "id";
$tdatatransactions[".listFields"][] = "Amount";
$tdatatransactions[".listFields"][] = "DateTime";
$tdatatransactions[".listFields"][] = "Description";
$tdatatransactions[".listFields"][] = "CashDepositNo";
$tdatatransactions[".listFields"][] = "CashDepositType";
$tdatatransactions[".listFields"][] = "WithdrawlNo";
$tdatatransactions[".listFields"][] = "WithdrawlName";
$tdatatransactions[".listFields"][] = "WithdrawlType";
$tdatatransactions[".listFields"][] = "LoanPaymentNo";
$tdatatransactions[".listFields"][] = "LoanPaymentName";
$tdatatransactions[".listFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".listFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".listFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".listFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".listFields"][] = "AccountType";
$tdatatransactions[".listFields"][] = "InterestAmount";
$tdatatransactions[".listFields"][] = "PrincipalAmount";
$tdatatransactions[".listFields"][] = "WithdrawlStatus";
$tdatatransactions[".listFields"][] = "NEFTTransferStatus";
$tdatatransactions[".listFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".listFields"][] = "LoanCreditWitness";
$tdatatransactions[".listFields"][] = "NEFTTransferNo";
$tdatatransactions[".listFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".listFields"][] = "TransactionType";
$tdatatransactions[".listFields"][] = "Balance";
$tdatatransactions[".listFields"][] = "AccountNumber";
$tdatatransactions[".listFields"][] = "ClientNo";
$tdatatransactions[".listFields"][] = "LastModifiedBy";
$tdatatransactions[".listFields"][] = "LastModifiedDate";
$tdatatransactions[".listFields"][] = "AccountName";

$tdatatransactions[".hideMobileList"] = array();


$tdatatransactions[".viewFields"] = array();
$tdatatransactions[".viewFields"][] = "id";
$tdatatransactions[".viewFields"][] = "Amount";
$tdatatransactions[".viewFields"][] = "DateTime";
$tdatatransactions[".viewFields"][] = "Description";
$tdatatransactions[".viewFields"][] = "CashDepositNo";
$tdatatransactions[".viewFields"][] = "CashDepositType";
$tdatatransactions[".viewFields"][] = "WithdrawlNo";
$tdatatransactions[".viewFields"][] = "WithdrawlName";
$tdatatransactions[".viewFields"][] = "WithdrawlType";
$tdatatransactions[".viewFields"][] = "LoanPaymentNo";
$tdatatransactions[".viewFields"][] = "LoanPaymentName";
$tdatatransactions[".viewFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".viewFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".viewFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".viewFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".viewFields"][] = "AccountType";
$tdatatransactions[".viewFields"][] = "InterestAmount";
$tdatatransactions[".viewFields"][] = "PrincipalAmount";
$tdatatransactions[".viewFields"][] = "WithdrawlStatus";
$tdatatransactions[".viewFields"][] = "NEFTTransferStatus";
$tdatatransactions[".viewFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".viewFields"][] = "LoanCreditWitness";
$tdatatransactions[".viewFields"][] = "NEFTTransferNo";
$tdatatransactions[".viewFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".viewFields"][] = "TransactionType";
$tdatatransactions[".viewFields"][] = "Balance";
$tdatatransactions[".viewFields"][] = "AccountNumber";
$tdatatransactions[".viewFields"][] = "ClientNo";
$tdatatransactions[".viewFields"][] = "LastModifiedBy";
$tdatatransactions[".viewFields"][] = "LastModifiedDate";
$tdatatransactions[".viewFields"][] = "AccountName";
$tdatatransactions[".viewFields"][] = "TransactionNo";
$tdatatransactions[".viewFields"][] = "TransactionStatus";
$tdatatransactions[".viewFields"][] = "SelectedClientNo";
$tdatatransactions[".viewFields"][] = "LoanPaymentStatus";
$tdatatransactions[".viewFields"][] = "CashDepositStatus";

$tdatatransactions[".addFields"] = array();
$tdatatransactions[".addFields"][] = "LoanPaymentStatus";
$tdatatransactions[".addFields"][] = "SelectedClientNo";
$tdatatransactions[".addFields"][] = "CashDepositStatus";
$tdatatransactions[".addFields"][] = "Amount";
$tdatatransactions[".addFields"][] = "DateTime";
$tdatatransactions[".addFields"][] = "Description";
$tdatatransactions[".addFields"][] = "CashDepositNo";
$tdatatransactions[".addFields"][] = "CashDepositType";
$tdatatransactions[".addFields"][] = "WithdrawlNo";
$tdatatransactions[".addFields"][] = "WithdrawlName";
$tdatatransactions[".addFields"][] = "WithdrawlType";
$tdatatransactions[".addFields"][] = "LoanPaymentNo";
$tdatatransactions[".addFields"][] = "LoanPaymentName";
$tdatatransactions[".addFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".addFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".addFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".addFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".addFields"][] = "AccountType";
$tdatatransactions[".addFields"][] = "InterestAmount";
$tdatatransactions[".addFields"][] = "PrincipalAmount";
$tdatatransactions[".addFields"][] = "WithdrawlStatus";
$tdatatransactions[".addFields"][] = "NEFTTransferStatus";
$tdatatransactions[".addFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".addFields"][] = "LoanCreditWitness";
$tdatatransactions[".addFields"][] = "NEFTTransferNo";
$tdatatransactions[".addFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".addFields"][] = "TransactionType";
$tdatatransactions[".addFields"][] = "Balance";
$tdatatransactions[".addFields"][] = "AccountNumber";
$tdatatransactions[".addFields"][] = "ClientNo";
$tdatatransactions[".addFields"][] = "LastModifiedBy";
$tdatatransactions[".addFields"][] = "LastModifiedDate";
$tdatatransactions[".addFields"][] = "AccountName";
$tdatatransactions[".addFields"][] = "TransactionNo";
$tdatatransactions[".addFields"][] = "TransactionStatus";

$tdatatransactions[".masterListFields"] = array();
$tdatatransactions[".masterListFields"][] = "id";
$tdatatransactions[".masterListFields"][] = "DebitAccount";
$tdatatransactions[".masterListFields"][] = "CreditAccount";
$tdatatransactions[".masterListFields"][] = "DebitAccountTransactionCharge";
$tdatatransactions[".masterListFields"][] = "CreditAccountTransactionCharge";
$tdatatransactions[".masterListFields"][] = "Amount";
$tdatatransactions[".masterListFields"][] = "DateTime";
$tdatatransactions[".masterListFields"][] = "Description";
$tdatatransactions[".masterListFields"][] = "CashDepositNo";
$tdatatransactions[".masterListFields"][] = "CashDepositorName";
$tdatatransactions[".masterListFields"][] = "CashDepositType";
$tdatatransactions[".masterListFields"][] = "WithdrawlNo";
$tdatatransactions[".masterListFields"][] = "WithdrawlName";
$tdatatransactions[".masterListFields"][] = "WithdrawlType";
$tdatatransactions[".masterListFields"][] = "LoanPaymentNo";
$tdatatransactions[".masterListFields"][] = "LoanPaymentName";
$tdatatransactions[".masterListFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".masterListFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".masterListFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".masterListFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".masterListFields"][] = "AccountType";
$tdatatransactions[".masterListFields"][] = "InterestAmount";
$tdatatransactions[".masterListFields"][] = "PrincipalAmount";
$tdatatransactions[".masterListFields"][] = "WithdrawlStatus";
$tdatatransactions[".masterListFields"][] = "NEFTTransferStatus";
$tdatatransactions[".masterListFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".masterListFields"][] = "LoanCreditWitness";
$tdatatransactions[".masterListFields"][] = "NEFTTransferNo";
$tdatatransactions[".masterListFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".masterListFields"][] = "TransactionType";
$tdatatransactions[".masterListFields"][] = "Balance";
$tdatatransactions[".masterListFields"][] = "AccountNumber";
$tdatatransactions[".masterListFields"][] = "ClientNo";
$tdatatransactions[".masterListFields"][] = "LastModifiedBy";
$tdatatransactions[".masterListFields"][] = "LastModifiedDate";
$tdatatransactions[".masterListFields"][] = "AccountName";
$tdatatransactions[".masterListFields"][] = "TransactionNo";
$tdatatransactions[".masterListFields"][] = "TransactionStatus";
$tdatatransactions[".masterListFields"][] = "SelectedClientNo";
$tdatatransactions[".masterListFields"][] = "LoanPaymentStatus";
$tdatatransactions[".masterListFields"][] = "CashDepositStatus";

$tdatatransactions[".inlineAddFields"] = array();

$tdatatransactions[".editFields"] = array();
$tdatatransactions[".editFields"][] = "Amount";
$tdatatransactions[".editFields"][] = "DateTime";
$tdatatransactions[".editFields"][] = "Description";
$tdatatransactions[".editFields"][] = "CashDepositNo";
$tdatatransactions[".editFields"][] = "CashDepositType";
$tdatatransactions[".editFields"][] = "WithdrawlNo";
$tdatatransactions[".editFields"][] = "WithdrawlName";
$tdatatransactions[".editFields"][] = "WithdrawlType";
$tdatatransactions[".editFields"][] = "LoanPaymentNo";
$tdatatransactions[".editFields"][] = "LoanPaymentName";
$tdatatransactions[".editFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".editFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".editFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".editFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".editFields"][] = "AccountType";
$tdatatransactions[".editFields"][] = "InterestAmount";
$tdatatransactions[".editFields"][] = "PrincipalAmount";
$tdatatransactions[".editFields"][] = "WithdrawlStatus";
$tdatatransactions[".editFields"][] = "NEFTTransferStatus";
$tdatatransactions[".editFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".editFields"][] = "LoanCreditWitness";
$tdatatransactions[".editFields"][] = "NEFTTransferNo";
$tdatatransactions[".editFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".editFields"][] = "TransactionType";
$tdatatransactions[".editFields"][] = "Balance";
$tdatatransactions[".editFields"][] = "AccountNumber";
$tdatatransactions[".editFields"][] = "ClientNo";
$tdatatransactions[".editFields"][] = "LastModifiedBy";
$tdatatransactions[".editFields"][] = "LastModifiedDate";
$tdatatransactions[".editFields"][] = "AccountName";
$tdatatransactions[".editFields"][] = "TransactionNo";
$tdatatransactions[".editFields"][] = "TransactionStatus";
$tdatatransactions[".editFields"][] = "SelectedClientNo";
$tdatatransactions[".editFields"][] = "LoanPaymentStatus";
$tdatatransactions[".editFields"][] = "CashDepositStatus";

$tdatatransactions[".inlineEditFields"] = array();

$tdatatransactions[".updateSelectedFields"] = array();


$tdatatransactions[".exportFields"] = array();
$tdatatransactions[".exportFields"][] = "id";
$tdatatransactions[".exportFields"][] = "Amount";
$tdatatransactions[".exportFields"][] = "DateTime";
$tdatatransactions[".exportFields"][] = "Description";
$tdatatransactions[".exportFields"][] = "CashDepositNo";
$tdatatransactions[".exportFields"][] = "CashDepositType";
$tdatatransactions[".exportFields"][] = "WithdrawlNo";
$tdatatransactions[".exportFields"][] = "WithdrawlName";
$tdatatransactions[".exportFields"][] = "WithdrawlType";
$tdatatransactions[".exportFields"][] = "LoanPaymentNo";
$tdatatransactions[".exportFields"][] = "LoanPaymentName";
$tdatatransactions[".exportFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".exportFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".exportFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".exportFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".exportFields"][] = "AccountType";
$tdatatransactions[".exportFields"][] = "InterestAmount";
$tdatatransactions[".exportFields"][] = "PrincipalAmount";
$tdatatransactions[".exportFields"][] = "WithdrawlStatus";
$tdatatransactions[".exportFields"][] = "NEFTTransferStatus";
$tdatatransactions[".exportFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".exportFields"][] = "LoanCreditWitness";
$tdatatransactions[".exportFields"][] = "NEFTTransferNo";
$tdatatransactions[".exportFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".exportFields"][] = "TransactionType";
$tdatatransactions[".exportFields"][] = "Balance";
$tdatatransactions[".exportFields"][] = "AccountNumber";
$tdatatransactions[".exportFields"][] = "ClientNo";
$tdatatransactions[".exportFields"][] = "LastModifiedBy";
$tdatatransactions[".exportFields"][] = "LastModifiedDate";
$tdatatransactions[".exportFields"][] = "AccountName";
$tdatatransactions[".exportFields"][] = "TransactionNo";
$tdatatransactions[".exportFields"][] = "TransactionStatus";
$tdatatransactions[".exportFields"][] = "SelectedClientNo";
$tdatatransactions[".exportFields"][] = "LoanPaymentStatus";
$tdatatransactions[".exportFields"][] = "CashDepositStatus";

$tdatatransactions[".importFields"] = array();
$tdatatransactions[".importFields"][] = "id";
$tdatatransactions[".importFields"][] = "Amount";
$tdatatransactions[".importFields"][] = "DateTime";
$tdatatransactions[".importFields"][] = "Description";
$tdatatransactions[".importFields"][] = "CashDepositNo";
$tdatatransactions[".importFields"][] = "CashDepositType";
$tdatatransactions[".importFields"][] = "WithdrawlNo";
$tdatatransactions[".importFields"][] = "WithdrawlName";
$tdatatransactions[".importFields"][] = "WithdrawlType";
$tdatatransactions[".importFields"][] = "LoanPaymentNo";
$tdatatransactions[".importFields"][] = "LoanPaymentName";
$tdatatransactions[".importFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".importFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".importFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".importFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".importFields"][] = "AccountType";
$tdatatransactions[".importFields"][] = "InterestAmount";
$tdatatransactions[".importFields"][] = "PrincipalAmount";
$tdatatransactions[".importFields"][] = "WithdrawlStatus";
$tdatatransactions[".importFields"][] = "NEFTTransferStatus";
$tdatatransactions[".importFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".importFields"][] = "LoanCreditWitness";
$tdatatransactions[".importFields"][] = "NEFTTransferNo";
$tdatatransactions[".importFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".importFields"][] = "TransactionType";
$tdatatransactions[".importFields"][] = "Balance";
$tdatatransactions[".importFields"][] = "AccountNumber";
$tdatatransactions[".importFields"][] = "ClientNo";
$tdatatransactions[".importFields"][] = "LastModifiedBy";
$tdatatransactions[".importFields"][] = "LastModifiedDate";
$tdatatransactions[".importFields"][] = "AccountName";
$tdatatransactions[".importFields"][] = "TransactionNo";
$tdatatransactions[".importFields"][] = "TransactionStatus";
$tdatatransactions[".importFields"][] = "SelectedClientNo";
$tdatatransactions[".importFields"][] = "LoanPaymentStatus";
$tdatatransactions[".importFields"][] = "CashDepositStatus";

$tdatatransactions[".printFields"] = array();
$tdatatransactions[".printFields"][] = "LoanPaymentStatus";
$tdatatransactions[".printFields"][] = "SelectedClientNo";
$tdatatransactions[".printFields"][] = "CashDepositStatus";
$tdatatransactions[".printFields"][] = "TransactionStatus";
$tdatatransactions[".printFields"][] = "AccountName";
$tdatatransactions[".printFields"][] = "TransactionNo";
$tdatatransactions[".printFields"][] = "LoanCreditPaymentName";
$tdatatransactions[".printFields"][] = "LoanCreditPaymentPurpose";
$tdatatransactions[".printFields"][] = "LoanPaymentName";
$tdatatransactions[".printFields"][] = "id";
$tdatatransactions[".printFields"][] = "Amount";
$tdatatransactions[".printFields"][] = "DateTime";
$tdatatransactions[".printFields"][] = "Description";
$tdatatransactions[".printFields"][] = "CashDepositNo";
$tdatatransactions[".printFields"][] = "CashDepositType";
$tdatatransactions[".printFields"][] = "WithdrawlNo";
$tdatatransactions[".printFields"][] = "WithdrawlName";
$tdatatransactions[".printFields"][] = "WithdrawlType";
$tdatatransactions[".printFields"][] = "LoanPaymentNo";
$tdatatransactions[".printFields"][] = "LoanPaymentPurpose";
$tdatatransactions[".printFields"][] = "LoanCreditPaymentNo";
$tdatatransactions[".printFields"][] = "AccountType";
$tdatatransactions[".printFields"][] = "InterestAmount";
$tdatatransactions[".printFields"][] = "PrincipalAmount";
$tdatatransactions[".printFields"][] = "WithdrawlStatus";
$tdatatransactions[".printFields"][] = "NEFTTransferStatus";
$tdatatransactions[".printFields"][] = "LoanCreditApplicationStatus";
$tdatatransactions[".printFields"][] = "LoanCreditWitness";
$tdatatransactions[".printFields"][] = "NEFTTransferNo";
$tdatatransactions[".printFields"][] = "NEFTTransferDepositorName";
$tdatatransactions[".printFields"][] = "TransactionType";
$tdatatransactions[".printFields"][] = "Balance";
$tdatatransactions[".printFields"][] = "AccountNumber";
$tdatatransactions[".printFields"][] = "ClientNo";
$tdatatransactions[".printFields"][] = "LastModifiedBy";
$tdatatransactions[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","id");
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




	$tdatatransactions["id"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","DebitAccount");
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
	$edata["DisplayField"] = " concat(FirstName,' '.LastName,' [',AccountNumber,']')   ";

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








	$tdatatransactions["DebitAccount"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","CreditAccount");
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
	$edata["DisplayField"] = " concat(FirstName,' '.LastName,' [',AccountNumber,']') ";

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








	$tdatatransactions["CreditAccount"] = $fdata;
//	DebitAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DebitAccountTransactionCharge";
	$fdata["GoodName"] = "DebitAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","DebitAccountTransactionCharge");
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








	$tdatatransactions["DebitAccountTransactionCharge"] = $fdata;
//	CreditAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CreditAccountTransactionCharge";
	$fdata["GoodName"] = "CreditAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","CreditAccountTransactionCharge");
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








	$tdatatransactions["CreditAccountTransactionCharge"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","Amount");
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




	$tdatatransactions["Amount"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","DateTime");
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




	$tdatatransactions["DateTime"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","Description");
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




	$tdatatransactions["Description"] = $fdata;
//	CashDepositNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CashDepositNo";
	$fdata["GoodName"] = "CashDepositNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","CashDepositNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CashDepositNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CashDepositNo";

	
	
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




	$tdatatransactions["CashDepositNo"] = $fdata;
//	CashDepositorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CashDepositorName";
	$fdata["GoodName"] = "CashDepositorName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","CashDepositorName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "CashDepositorName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CashDepositorName";

	
	
			
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








	$tdatatransactions["CashDepositorName"] = $fdata;
//	CashDepositType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CashDepositType";
	$fdata["GoodName"] = "CashDepositType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","CashDepositType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CashDepositType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CashDepositType";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransactions["CashDepositType"] = $fdata;
//	WithdrawlNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "WithdrawlNo";
	$fdata["GoodName"] = "WithdrawlNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","WithdrawlNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlNo";

	
	
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




	$tdatatransactions["WithdrawlNo"] = $fdata;
//	WithdrawlName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "WithdrawlName";
	$fdata["GoodName"] = "WithdrawlName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","WithdrawlName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlName";

	
	
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




	$tdatatransactions["WithdrawlName"] = $fdata;
//	WithdrawlType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "WithdrawlType";
	$fdata["GoodName"] = "WithdrawlType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","WithdrawlType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlType";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransactions["WithdrawlType"] = $fdata;
//	LoanPaymentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LoanPaymentNo";
	$fdata["GoodName"] = "LoanPaymentNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanPaymentNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdatatransactions["LoanPaymentNo"] = $fdata;
//	LoanPaymentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "LoanPaymentName";
	$fdata["GoodName"] = "LoanPaymentName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanPaymentName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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




	$tdatatransactions["LoanPaymentName"] = $fdata;
//	LoanPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "LoanPaymentPurpose";
	$fdata["GoodName"] = "LoanPaymentPurpose";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanPaymentPurpose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransactions["LoanPaymentPurpose"] = $fdata;
//	LoanCreditPaymentNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LoanCreditPaymentNo";
	$fdata["GoodName"] = "LoanCreditPaymentNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanCreditPaymentNo");
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




	$tdatatransactions["LoanCreditPaymentNo"] = $fdata;
//	LoanCreditPaymentName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LoanCreditPaymentName";
	$fdata["GoodName"] = "LoanCreditPaymentName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanCreditPaymentName");
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




	$tdatatransactions["LoanCreditPaymentName"] = $fdata;
//	LoanCreditPaymentPurpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LoanCreditPaymentPurpose";
	$fdata["GoodName"] = "LoanCreditPaymentPurpose";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanCreditPaymentPurpose");
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




	$tdatatransactions["LoanCreditPaymentPurpose"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransactions["AccountType"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","InterestAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InterestAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestAmount";

	
	
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




	$tdatatransactions["InterestAmount"] = $fdata;
//	PrincipalAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "PrincipalAmount";
	$fdata["GoodName"] = "PrincipalAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","PrincipalAmount");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PrincipalAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrincipalAmount";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatatransactions["PrincipalAmount"] = $fdata;
//	WithdrawlStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "WithdrawlStatus";
	$fdata["GoodName"] = "WithdrawlStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","WithdrawlStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlStatus";

	
	
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




	$tdatatransactions["WithdrawlStatus"] = $fdata;
//	NEFTTransferStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "NEFTTransferStatus";
	$fdata["GoodName"] = "NEFTTransferStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","NEFTTransferStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NEFTTransferStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEFTTransferStatus";

	
	
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




	$tdatatransactions["NEFTTransferStatus"] = $fdata;
//	LoanCreditApplicationStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "LoanCreditApplicationStatus";
	$fdata["GoodName"] = "LoanCreditApplicationStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanCreditApplicationStatus");
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




	$tdatatransactions["LoanCreditApplicationStatus"] = $fdata;
//	LoanCreditWitness
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "LoanCreditWitness";
	$fdata["GoodName"] = "LoanCreditWitness";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanCreditWitness");
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




	$tdatatransactions["LoanCreditWitness"] = $fdata;
//	NEFTTransferNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "NEFTTransferNo";
	$fdata["GoodName"] = "NEFTTransferNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","NEFTTransferNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NEFTTransferNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEFTTransferNo";

	
	
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




	$tdatatransactions["NEFTTransferNo"] = $fdata;
//	NEFTTransferDepositorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "NEFTTransferDepositorName";
	$fdata["GoodName"] = "NEFTTransferDepositorName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","NEFTTransferDepositorName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NEFTTransferDepositorName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEFTTransferDepositorName";

	
	
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




	$tdatatransactions["NEFTTransferDepositorName"] = $fdata;
//	TransactionType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "TransactionType";
	$fdata["GoodName"] = "TransactionType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","TransactionType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransactionType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionType";

	
	
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




	$tdatatransactions["TransactionType"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","Balance");
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




	$tdatatransactions["Balance"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","AccountNumber");
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransactions["AccountNumber"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","ClientNo");
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
	$edata["LookupTable"] = "usersLookUp";
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
	$edata["LookupTable"] = "usersLookUp";
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatatransactions["ClientNo"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LastModifiedBy");
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




	$tdatatransactions["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LastModifiedDate");
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




	$tdatatransactions["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","AccountName");
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




	$tdatatransactions["AccountName"] = $fdata;
//	TransactionNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "TransactionNo";
	$fdata["GoodName"] = "TransactionNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","TransactionNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransactionNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionNo";

	
	
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




	$tdatatransactions["TransactionNo"] = $fdata;
//	TransactionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "TransactionStatus";
	$fdata["GoodName"] = "TransactionStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","TransactionStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransactionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionStatus";

	
	
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




	$tdatatransactions["TransactionStatus"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","SelectedClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SelectedClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectedClientNo";

	
	
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




	$tdatatransactions["SelectedClientNo"] = $fdata;
//	LoanPaymentStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "LoanPaymentStatus";
	$fdata["GoodName"] = "LoanPaymentStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","LoanPaymentStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LoanPaymentStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoanPaymentStatus";

	
	
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




	$tdatatransactions["LoanPaymentStatus"] = $fdata;
//	CashDepositStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "CashDepositStatus";
	$fdata["GoodName"] = "CashDepositStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("transactions","CashDepositStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CashDepositStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CashDepositStatus";

	
	
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




	$tdatatransactions["CashDepositStatus"] = $fdata;


$tables_data["transactions"]=&$tdatatransactions;
$field_labels["transactions"] = &$fieldLabelstransactions;
$fieldToolTips["transactions"] = &$fieldToolTipstransactions;
$page_titles["transactions"] = &$pageTitlestransactions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["transactions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["transactions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_transactions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	DebitAccount,  	CreditAccount,  	DebitAccountTransactionCharge,  	CreditAccountTransactionCharge,  	Amount,  	`DateTime`,  	Description,  	CashDepositNo,  	CashDepositorName,  	CashDepositType,  	WithdrawlNo,  	WithdrawlName,  	WithdrawlType,  	LoanPaymentNo,  	LoanPaymentName,  	LoanPaymentPurpose,  	LoanCreditPaymentNo,  	LoanCreditPaymentName,  	LoanCreditPaymentPurpose,  	AccountType,  	InterestAmount,  	PrincipalAmount,  	WithdrawlStatus,  	NEFTTransferStatus,  	LoanCreditApplicationStatus,  	LoanCreditWitness,  	NEFTTransferNo,  	NEFTTransferDepositorName,  	TransactionType,  	Balance,  	AccountNumber,  	ClientNo,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	TransactionNo,  	TransactionStatus,  	SelectedClientNo,  	LoanPaymentStatus,  	CashDepositStatus";
$proto0["m_strFrom"] = "FROM transactions";
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
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "transactions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto8["m_sql"] = "DebitAccount";
$proto8["m_srcTableName"] = "transactions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto10["m_sql"] = "CreditAccount";
$proto10["m_srcTableName"] = "transactions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto12["m_sql"] = "DebitAccountTransactionCharge";
$proto12["m_srcTableName"] = "transactions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto14["m_sql"] = "CreditAccountTransactionCharge";
$proto14["m_srcTableName"] = "transactions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto16["m_sql"] = "Amount";
$proto16["m_srcTableName"] = "transactions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto18["m_sql"] = "`DateTime`";
$proto18["m_srcTableName"] = "transactions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto20["m_sql"] = "Description";
$proto20["m_srcTableName"] = "transactions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CashDepositNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto22["m_sql"] = "CashDepositNo";
$proto22["m_srcTableName"] = "transactions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CashDepositorName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto24["m_sql"] = "CashDepositorName";
$proto24["m_srcTableName"] = "transactions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CashDepositType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto26["m_sql"] = "CashDepositType";
$proto26["m_srcTableName"] = "transactions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto28["m_sql"] = "WithdrawlNo";
$proto28["m_srcTableName"] = "transactions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto30["m_sql"] = "WithdrawlName";
$proto30["m_srcTableName"] = "transactions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto32["m_sql"] = "WithdrawlType";
$proto32["m_srcTableName"] = "transactions";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto34["m_sql"] = "LoanPaymentNo";
$proto34["m_srcTableName"] = "transactions";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto36["m_sql"] = "LoanPaymentName";
$proto36["m_srcTableName"] = "transactions";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentPurpose",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto38["m_sql"] = "LoanPaymentPurpose";
$proto38["m_srcTableName"] = "transactions";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto40["m_sql"] = "LoanCreditPaymentNo";
$proto40["m_srcTableName"] = "transactions";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto42["m_sql"] = "LoanCreditPaymentName";
$proto42["m_srcTableName"] = "transactions";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditPaymentPurpose",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto44["m_sql"] = "LoanCreditPaymentPurpose";
$proto44["m_srcTableName"] = "transactions";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto46["m_sql"] = "AccountType";
$proto46["m_srcTableName"] = "transactions";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto48["m_sql"] = "InterestAmount";
$proto48["m_srcTableName"] = "transactions";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "PrincipalAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto50["m_sql"] = "PrincipalAmount";
$proto50["m_srcTableName"] = "transactions";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto52["m_sql"] = "WithdrawlStatus";
$proto52["m_srcTableName"] = "transactions";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto54["m_sql"] = "NEFTTransferStatus";
$proto54["m_srcTableName"] = "transactions";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditApplicationStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto56["m_sql"] = "LoanCreditApplicationStatus";
$proto56["m_srcTableName"] = "transactions";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanCreditWitness",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto58["m_sql"] = "LoanCreditWitness";
$proto58["m_srcTableName"] = "transactions";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "NEFTTransferNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto60["m_sql"] = "NEFTTransferNo";
$proto60["m_srcTableName"] = "transactions";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "NEFTTransferDepositorName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto62["m_sql"] = "NEFTTransferDepositorName";
$proto62["m_srcTableName"] = "transactions";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto64["m_sql"] = "TransactionType";
$proto64["m_srcTableName"] = "transactions";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto66["m_sql"] = "Balance";
$proto66["m_srcTableName"] = "transactions";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto68["m_sql"] = "AccountNumber";
$proto68["m_srcTableName"] = "transactions";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto70["m_sql"] = "ClientNo";
$proto70["m_srcTableName"] = "transactions";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto72["m_sql"] = "LastModifiedBy";
$proto72["m_srcTableName"] = "transactions";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto74["m_sql"] = "LastModifiedDate";
$proto74["m_srcTableName"] = "transactions";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto76["m_sql"] = "AccountName";
$proto76["m_srcTableName"] = "transactions";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto78["m_sql"] = "TransactionNo";
$proto78["m_srcTableName"] = "transactions";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto80["m_sql"] = "TransactionStatus";
$proto80["m_srcTableName"] = "transactions";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto82["m_sql"] = "SelectedClientNo";
$proto82["m_srcTableName"] = "transactions";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "LoanPaymentStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto84["m_sql"] = "LoanPaymentStatus";
$proto84["m_srcTableName"] = "transactions";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "CashDepositStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "transactions"
));

$proto86["m_sql"] = "CashDepositStatus";
$proto86["m_srcTableName"] = "transactions";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "transactions";
$proto89["m_srcTableName"] = "transactions";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id";
$proto89["m_columns"][] = "DebitAccount";
$proto89["m_columns"][] = "CreditAccount";
$proto89["m_columns"][] = "DebitAccountTransactionCharge";
$proto89["m_columns"][] = "CreditAccountTransactionCharge";
$proto89["m_columns"][] = "Amount";
$proto89["m_columns"][] = "DateTime";
$proto89["m_columns"][] = "Description";
$proto89["m_columns"][] = "CashDepositNo";
$proto89["m_columns"][] = "CashDepositorName";
$proto89["m_columns"][] = "CashDepositType";
$proto89["m_columns"][] = "WithdrawlNo";
$proto89["m_columns"][] = "WithdrawlName";
$proto89["m_columns"][] = "WithdrawlType";
$proto89["m_columns"][] = "LoanPaymentNo";
$proto89["m_columns"][] = "LoanPaymentName";
$proto89["m_columns"][] = "LoanPaymentPurpose";
$proto89["m_columns"][] = "LoanCreditPaymentNo";
$proto89["m_columns"][] = "LoanCreditPaymentName";
$proto89["m_columns"][] = "LoanCreditPaymentPurpose";
$proto89["m_columns"][] = "AccountType";
$proto89["m_columns"][] = "InterestAmount";
$proto89["m_columns"][] = "PrincipalAmount";
$proto89["m_columns"][] = "WithdrawlStatus";
$proto89["m_columns"][] = "NEFTTransferStatus";
$proto89["m_columns"][] = "LoanCreditApplicationStatus";
$proto89["m_columns"][] = "LoanCreditWitness";
$proto89["m_columns"][] = "NEFTTransferNo";
$proto89["m_columns"][] = "NEFTTransferDepositorName";
$proto89["m_columns"][] = "TransactionType";
$proto89["m_columns"][] = "Balance";
$proto89["m_columns"][] = "AccountNumber";
$proto89["m_columns"][] = "ClientNo";
$proto89["m_columns"][] = "LastModifiedBy";
$proto89["m_columns"][] = "LastModifiedDate";
$proto89["m_columns"][] = "AccountName";
$proto89["m_columns"][] = "TransactionNo";
$proto89["m_columns"][] = "TransactionStatus";
$proto89["m_columns"][] = "SelectedClientNo";
$proto89["m_columns"][] = "LoanPaymentStatus";
$proto89["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "transactions";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "transactions";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="transactions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transactions = createSqlQuery_transactions();


	
		;

																																									

$tdatatransactions[".sqlquery"] = $queryData_transactions;

$tableEvents["transactions"] = new eventsBase;
$tdatatransactions[".hasEvents"] = false;

?>