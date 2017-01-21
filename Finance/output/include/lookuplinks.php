<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["accountsLookUp"]["transactions.DebitAccount"]["edit"] = array("table" => "transactions", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["transactions.CreditAccount"]["edit"] = array("table" => "transactions", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.CashDepositType"]["edit"] = array("table" => "transactions", "field" => "CashDepositType", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.WithdrawlType"]["edit"] = array("table" => "transactions", "field" => "WithdrawlType", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.LoanPaymentPurpose"]["edit"] = array("table" => "transactions", "field" => "LoanPaymentPurpose", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.AccountType"]["edit"] = array("table" => "transactions", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.WithdrawlStatus"]["edit"] = array("table" => "transactions", "field" => "WithdrawlStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.WithdrawlStatus"]["search"] = array("table" => "transactions", "field" => "WithdrawlStatus", "page" => "search");
	$lookupTableLinks["LookUps"]["transactions.NEFTTransferStatus"]["edit"] = array("table" => "transactions", "field" => "NEFTTransferStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.NEFTTransferStatus"]["search"] = array("table" => "transactions", "field" => "NEFTTransferStatus", "page" => "search");
	$lookupTableLinks["LookUps"]["transactions.LoanCreditApplicationStatus"]["edit"] = array("table" => "transactions", "field" => "LoanCreditApplicationStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["transactions.LoanCreditApplicationStatus"]["search"] = array("table" => "transactions", "field" => "LoanCreditApplicationStatus", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["transactions.AccountNumber"]["add"] = array("table" => "transactions", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["transactions.AccountNumber"]["search"] = array("table" => "transactions", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["usersLookUp"]["transactions.ClientNo"]["add"] = array("table" => "transactions", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["usersLookUp"]["transactions.ClientNo"]["search"] = array("table" => "transactions", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["users"]["transactions.AccountName"]["add"] = array("table" => "transactions", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["transactions.AccountName"]["search"] = array("table" => "transactions", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["usersLookUp"]["accounts.AccountHolder"]["edit"] = array("table" => "accounts", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["LookUps"]["accounts.AccountType"]["edit"] = array("table" => "accounts", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["accounts"]["accounts.ClientNo"]["edit"] = array("table" => "accounts", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["users"]["accounts.AccountName"]["edit"] = array("table" => "accounts", "field" => "AccountName", "page" => "edit");
	$lookupTableLinks["LookUps"]["users.Sex"]["edit"] = array("table" => "users", "field" => "Sex", "page" => "edit");
	$lookupTableLinks["LookUps"]["users.EmergencyContactRelation"]["edit"] = array("table" => "users", "field" => "EmergencyContactRelation", "page" => "edit");
	$lookupTableLinks["LookUps"]["users.UserLevel"]["edit"] = array("table" => "users", "field" => "UserLevel", "page" => "edit");
	$lookupTableLinks["LookUps"]["LookUps.Type"]["edit"] = array("table" => "LookUps", "field" => "Type", "page" => "edit");
	$lookupTableLinks["LookUps"]["usersLookUp.Sex"]["edit"] = array("table" => "usersLookUp", "field" => "Sex", "page" => "edit");
	$lookupTableLinks["LookUps"]["usersLookUp.EmergencyContactRelation"]["edit"] = array("table" => "usersLookUp", "field" => "EmergencyContactRelation", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["accountsLookUp.AccountHolder"]["edit"] = array("table" => "accountsLookUp", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["LookUps"]["accountsLookUp.AccountType"]["edit"] = array("table" => "accountsLookUp", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["accountsLookUp.ClientNo"]["add"] = array("table" => "accountsLookUp", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["usersLookUp"]["accountsLookUp.ClientNo"]["search"] = array("table" => "accountsLookUp", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["loanaccounts.AccountNumber"]["search"] = array("table" => "loanaccounts", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["usersLookUp"]["loanaccounts.AccountHolder"]["edit"] = array("table" => "loanaccounts", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["loanaccounts.ClientNo"]["search"] = array("table" => "loanaccounts", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["users"]["loanaccounts.AccountName"]["add"] = array("table" => "loanaccounts", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["loanaccounts.AccountName"]["search"] = array("table" => "loanaccounts", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["LookUps"]["loanaccounts.LoanCreditPaymentPurpose"]["add"] = array("table" => "loanaccounts", "field" => "LoanCreditPaymentPurpose", "page" => "add");
	$lookupTableLinks["LookUps"]["loanaccounts.LoanCreditPaymentPurpose"]["search"] = array("table" => "loanaccounts", "field" => "LoanCreditPaymentPurpose", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["CashDeposit.CreditAccount"]["edit"] = array("table" => "CashDeposit", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["CashDeposit.DebitAccount"]["edit"] = array("table" => "CashDeposit", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["LookUps"]["CashDeposit.CashDepositType"]["add"] = array("table" => "CashDeposit", "field" => "CashDepositType", "page" => "add");
	$lookupTableLinks["LookUps"]["CashDeposit.CashDepositType"]["search"] = array("table" => "CashDeposit", "field" => "CashDepositType", "page" => "search");
	$lookupTableLinks["usersLookUp"]["CashDeposit.ClientNo"]["add"] = array("table" => "CashDeposit", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["CashDeposit.ClientNo"]["search"] = array("table" => "CashDeposit", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["CashDeposit.AccountNumber"]["add"] = array("table" => "CashDeposit", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["CashDeposit.AccountNumber"]["search"] = array("table" => "CashDeposit", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["users"]["CashDeposit.AccountName"]["add"] = array("table" => "CashDeposit", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["CashDeposit.AccountName"]["search"] = array("table" => "CashDeposit", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["LookUps"]["CashDeposit.TransactionStatus"]["edit"] = array("table" => "CashDeposit", "field" => "TransactionStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["CashDeposit.TransactionStatus"]["search"] = array("table" => "CashDeposit", "field" => "TransactionStatus", "page" => "search");
	$lookupTableLinks["LookUps"]["CashDeposit.AccountType"]["search"] = array("table" => "CashDeposit", "field" => "AccountType", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["CashWithdrawl.CreditAccount"]["edit"] = array("table" => "CashWithdrawl", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["CashWithdrawl.DebitAccount"]["edit"] = array("table" => "CashWithdrawl", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["LookUps"]["CashWithdrawl.WithdrawlType"]["add"] = array("table" => "CashWithdrawl", "field" => "WithdrawlType", "page" => "add");
	$lookupTableLinks["LookUps"]["CashWithdrawl.WithdrawlType"]["search"] = array("table" => "CashWithdrawl", "field" => "WithdrawlType", "page" => "search");
	$lookupTableLinks["LookUps"]["CashWithdrawl.WithdrawlStatus"]["edit"] = array("table" => "CashWithdrawl", "field" => "WithdrawlStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["CashWithdrawl.WithdrawlStatus"]["search"] = array("table" => "CashWithdrawl", "field" => "WithdrawlStatus", "page" => "search");
	$lookupTableLinks["usersLookUp"]["CashWithdrawl.ClientNo"]["add"] = array("table" => "CashWithdrawl", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["CashWithdrawl.ClientNo"]["search"] = array("table" => "CashWithdrawl", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["CashWithdrawl.AccountNumber"]["add"] = array("table" => "CashWithdrawl", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["CashWithdrawl.AccountNumber"]["search"] = array("table" => "CashWithdrawl", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["users"]["CashWithdrawl.AccountName"]["add"] = array("table" => "CashWithdrawl", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["CashWithdrawl.AccountName"]["search"] = array("table" => "CashWithdrawl", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["LookUps"]["CashWithdrawl.TransactionStatus"]["edit"] = array("table" => "CashWithdrawl", "field" => "TransactionStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["CashWithdrawl.TransactionStatus"]["search"] = array("table" => "CashWithdrawl", "field" => "TransactionStatus", "page" => "search");
	$lookupTableLinks["LookUps"]["CashWithdrawl.AccountType"]["search"] = array("table" => "CashWithdrawl", "field" => "AccountType", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanCredit.CreditAccount"]["edit"] = array("table" => "LoanCredit", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["LoanCredit.DebitAccount"]["edit"] = array("table" => "LoanCredit", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["LoanCredit.LoanCreditPaymentName"]["search"] = array("table" => "LoanCredit", "field" => "LoanCreditPaymentName", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanCredit.LoanCreditPaymentPurpose"]["add"] = array("table" => "LoanCredit", "field" => "LoanCreditPaymentPurpose", "page" => "add");
	$lookupTableLinks["LookUps"]["LoanCredit.LoanCreditPaymentPurpose"]["search"] = array("table" => "LoanCredit", "field" => "LoanCreditPaymentPurpose", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanCredit.LoanCreditApplicationStatus"]["edit"] = array("table" => "LoanCredit", "field" => "LoanCreditApplicationStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanCredit.LoanCreditApplicationStatus"]["search"] = array("table" => "LoanCredit", "field" => "LoanCreditApplicationStatus", "page" => "search");
	$lookupTableLinks["usersLookUp"]["LoanCredit.ClientNo"]["add"] = array("table" => "LoanCredit", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["LoanCredit.ClientNo"]["search"] = array("table" => "LoanCredit", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanCredit.AccountNumber"]["add"] = array("table" => "LoanCredit", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["LoanCredit.AccountNumber"]["search"] = array("table" => "LoanCredit", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["users"]["LoanCredit.AccountName"]["add"] = array("table" => "LoanCredit", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["LoanCredit.AccountName"]["search"] = array("table" => "LoanCredit", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanCredit.TransactionStatus"]["edit"] = array("table" => "LoanCredit", "field" => "TransactionStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanCredit.TransactionStatus"]["search"] = array("table" => "LoanCredit", "field" => "TransactionStatus", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanPayment.CreditAccount"]["edit"] = array("table" => "LoanPayment", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["LoanPayment.DebitAccount"]["edit"] = array("table" => "LoanPayment", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["LoanPayment.LoanPaymentName"]["search"] = array("table" => "LoanPayment", "field" => "LoanPaymentName", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanPayment.LoanPaymentPurpose"]["add"] = array("table" => "LoanPayment", "field" => "LoanPaymentPurpose", "page" => "add");
	$lookupTableLinks["LookUps"]["LoanPayment.LoanPaymentPurpose"]["search"] = array("table" => "LoanPayment", "field" => "LoanPaymentPurpose", "page" => "search");
	$lookupTableLinks["usersLookUp"]["LoanPayment.ClientNo"]["add"] = array("table" => "LoanPayment", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["LoanPayment.ClientNo"]["search"] = array("table" => "LoanPayment", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanPayment.AccountNumber"]["add"] = array("table" => "LoanPayment", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["LoanPayment.AccountNumber"]["search"] = array("table" => "LoanPayment", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["users"]["LoanPayment.AccountName"]["add"] = array("table" => "LoanPayment", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["LoanPayment.AccountName"]["search"] = array("table" => "LoanPayment", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanPayment.TransactionStatus"]["edit"] = array("table" => "LoanPayment", "field" => "TransactionStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanPayment.TransactionStatus"]["search"] = array("table" => "LoanPayment", "field" => "TransactionStatus", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanPayment.LoanPaymentStatus"]["edit"] = array("table" => "LoanPayment", "field" => "LoanPaymentStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanPayment.LoanPaymentStatus"]["search"] = array("table" => "LoanPayment", "field" => "LoanPaymentStatus", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.DebitAccount"]["edit"] = array("table" => "SavingsStatements", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.CreditAccount"]["edit"] = array("table" => "SavingsStatements", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.CashDepositorName"]["search"] = array("table" => "SavingsStatements", "field" => "CashDepositorName", "page" => "search");
	$lookupTableLinks[""]["SavingsStatements.CashDepositType"]["edit"] = array("table" => "SavingsStatements", "field" => "CashDepositType", "page" => "edit");
	$lookupTableLinks["LookUps"]["SavingsStatements.CashDepositType"]["search"] = array("table" => "SavingsStatements", "field" => "CashDepositType", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.WithdrawlName"]["edit"] = array("table" => "SavingsStatements", "field" => "WithdrawlName", "page" => "edit");
	$lookupTableLinks["LookUps"]["SavingsStatements.WithdrawlType"]["search"] = array("table" => "SavingsStatements", "field" => "WithdrawlType", "page" => "search");
	$lookupTableLinks["LookUps"]["SavingsStatements.AccountType"]["edit"] = array("table" => "SavingsStatements", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["LookUps"]["SavingsStatements.AccountType"]["search"] = array("table" => "SavingsStatements", "field" => "AccountType", "page" => "search");
	$lookupTableLinks["usersLookUp"]["SavingsStatements.ClientNo"]["add"] = array("table" => "SavingsStatements", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.ClientNo"]["search"] = array("table" => "SavingsStatements", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.AccountNumber"]["add"] = array("table" => "SavingsStatements", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["SavingsStatements.AccountNumber"]["search"] = array("table" => "SavingsStatements", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["users"]["SavingsStatements.AccountName"]["add"] = array("table" => "SavingsStatements", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["SavingsStatements.AccountName"]["search"] = array("table" => "SavingsStatements", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanStatements.DebitAccount"]["edit"] = array("table" => "LoanStatements", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["LoanStatements.CreditAccount"]["edit"] = array("table" => "LoanStatements", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["LoanStatements.LoanPaymentName"]["search"] = array("table" => "LoanStatements", "field" => "LoanPaymentName", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanStatements.LoanPaymentPurpose"]["search"] = array("table" => "LoanStatements", "field" => "LoanPaymentPurpose", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanStatements.LoanCreditPaymentName"]["edit"] = array("table" => "LoanStatements", "field" => "LoanCreditPaymentName", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanStatements.LoanCreditPaymentPurpose"]["edit"] = array("table" => "LoanStatements", "field" => "LoanCreditPaymentPurpose", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanStatements.LoanCreditPaymentPurpose"]["search"] = array("table" => "LoanStatements", "field" => "LoanCreditPaymentPurpose", "page" => "search");
	$lookupTableLinks["LookUps"]["LoanStatements.AccountType"]["edit"] = array("table" => "LoanStatements", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["LookUps"]["LoanStatements.AccountType"]["search"] = array("table" => "LoanStatements", "field" => "AccountType", "page" => "search");
	$lookupTableLinks["usersLookUp"]["LoanStatements.ClientNo"]["add"] = array("table" => "LoanStatements", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["accountsLookUp"]["LoanStatements.ClientNo"]["search"] = array("table" => "LoanStatements", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["LoanStatements.AccountNumber"]["add"] = array("table" => "LoanStatements", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["users"]["LoanStatements.AccountName"]["add"] = array("table" => "LoanStatements", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["LoanStatements.AccountName"]["search"] = array("table" => "LoanStatements", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accounts"]["BalaceEnquiry.AccountNumber"]["edit"] = array("table" => "BalaceEnquiry", "field" => "AccountNumber", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["BalaceEnquiry.AccountHolder"]["edit"] = array("table" => "BalaceEnquiry", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["LookUps"]["BalaceEnquiry.AccountType"]["edit"] = array("table" => "BalaceEnquiry", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["BalaceEnquiry.ClientNo"]["edit"] = array("table" => "BalaceEnquiry", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["users"]["BalaceEnquiry.AccountName"]["edit"] = array("table" => "BalaceEnquiry", "field" => "AccountName", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["NEFTTransfer.CreditAccount"]["edit"] = array("table" => "NEFTTransfer", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["NEFTTransfer.DebitAccount"]["edit"] = array("table" => "NEFTTransfer", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["usersLookupFiltered"]["NEFTTransfer.ClientNo"]["add"] = array("table" => "NEFTTransfer", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["usersLookupFiltered"]["NEFTTransfer.ClientNo"]["search"] = array("table" => "NEFTTransfer", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUpFiltered"]["NEFTTransfer.AccountNumber"]["add"] = array("table" => "NEFTTransfer", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["users"]["NEFTTransfer.AccountName"]["add"] = array("table" => "NEFTTransfer", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["NEFTTransfer.AccountName"]["search"] = array("table" => "NEFTTransfer", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["TransactionLog.DebitAccount"]["edit"] = array("table" => "TransactionLog", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["TransactionLog.CreditAccount"]["edit"] = array("table" => "TransactionLog", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["usersLookupFiltered"]["TransactionLog.ClientNo"]["edit"] = array("table" => "TransactionLog", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["accountsLookUpFiltered"]["TransactionLog.AccountNumber"]["edit"] = array("table" => "TransactionLog", "field" => "AccountNumber", "page" => "edit");
	$lookupTableLinks["users"]["TransactionLog.AccountName"]["edit"] = array("table" => "TransactionLog", "field" => "AccountName", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["ClientCashWithdrawl.CreditAccount"]["edit"] = array("table" => "ClientCashWithdrawl", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["ClientCashWithdrawl.DebitAccount"]["edit"] = array("table" => "ClientCashWithdrawl", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientCashWithdrawl.WithdrawlType"]["edit"] = array("table" => "ClientCashWithdrawl", "field" => "WithdrawlType", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientCashWithdrawl.WithdrawlStatus"]["edit"] = array("table" => "ClientCashWithdrawl", "field" => "WithdrawlStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientCashWithdrawl.WithdrawlStatus"]["search"] = array("table" => "ClientCashWithdrawl", "field" => "WithdrawlStatus", "page" => "search");
	$lookupTableLinks["usersLookUp"]["ClientCashWithdrawl.ClientNo"]["add"] = array("table" => "ClientCashWithdrawl", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["usersLookupFiltered"]["ClientCashWithdrawl.ClientNo"]["search"] = array("table" => "ClientCashWithdrawl", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["ClientCashWithdrawl.AccountNumber"]["add"] = array("table" => "ClientCashWithdrawl", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["users"]["ClientCashWithdrawl.AccountName"]["add"] = array("table" => "ClientCashWithdrawl", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["ClientCashWithdrawl.AccountName"]["search"] = array("table" => "ClientCashWithdrawl", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["ClientLoanCredit.CreditAccount"]["edit"] = array("table" => "ClientLoanCredit", "field" => "CreditAccount", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["ClientLoanCredit.DebitAccount"]["edit"] = array("table" => "ClientLoanCredit", "field" => "DebitAccount", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientLoanCredit.LoanCreditApplicationStatus"]["edit"] = array("table" => "ClientLoanCredit", "field" => "LoanCreditApplicationStatus", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientLoanCredit.LoanCreditApplicationStatus"]["search"] = array("table" => "ClientLoanCredit", "field" => "LoanCreditApplicationStatus", "page" => "search");
	$lookupTableLinks["usersLookupFiltered"]["ClientLoanCredit.ClientNo"]["add"] = array("table" => "ClientLoanCredit", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["usersLookupFiltered"]["ClientLoanCredit.ClientNo"]["search"] = array("table" => "ClientLoanCredit", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["accountsLookUpFiltered"]["ClientLoanCredit.AccountNumber"]["add"] = array("table" => "ClientLoanCredit", "field" => "AccountNumber", "page" => "add");
	$lookupTableLinks["accountsLookUpFiltered"]["ClientLoanCredit.AccountNumber"]["search"] = array("table" => "ClientLoanCredit", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["users"]["ClientLoanCredit.AccountName"]["add"] = array("table" => "ClientLoanCredit", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["ClientLoanCredit.AccountName"]["search"] = array("table" => "ClientLoanCredit", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accountsLookUpFiltered"]["ClientSavingsAccounts.AccountNumber"]["edit"] = array("table" => "ClientSavingsAccounts", "field" => "AccountNumber", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["ClientSavingsAccounts.AccountHolder"]["edit"] = array("table" => "ClientSavingsAccounts", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientSavingsAccounts.AccountType"]["edit"] = array("table" => "ClientSavingsAccounts", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["usersLookupFiltered"]["ClientSavingsAccounts.ClientNo"]["edit"] = array("table" => "ClientSavingsAccounts", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["users"]["ClientSavingsAccounts.AccountName"]["edit"] = array("table" => "ClientSavingsAccounts", "field" => "AccountName", "page" => "edit");
	$lookupTableLinks["accountsLookUpFiltered"]["ClientLoanAccounts.AccountNumber"]["edit"] = array("table" => "ClientLoanAccounts", "field" => "AccountNumber", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["ClientLoanAccounts.AccountHolder"]["edit"] = array("table" => "ClientLoanAccounts", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientLoanAccounts.AccountType"]["edit"] = array("table" => "ClientLoanAccounts", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["usersLookupFiltered"]["ClientLoanAccounts.ClientNo"]["edit"] = array("table" => "ClientLoanAccounts", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["users"]["ClientLoanAccounts.AccountName"]["edit"] = array("table" => "ClientLoanAccounts", "field" => "AccountName", "page" => "edit");
	$lookupTableLinks["users"]["ClientLoanAccounts.AccountName"]["search"] = array("table" => "ClientLoanAccounts", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["SavingsAccounts.AccountNumber"]["search"] = array("table" => "SavingsAccounts", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["usersLookUp"]["SavingsAccounts.AccountHolder"]["edit"] = array("table" => "SavingsAccounts", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["SavingsAccounts.ClientNo"]["search"] = array("table" => "SavingsAccounts", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["users"]["SavingsAccounts.AccountName"]["add"] = array("table" => "SavingsAccounts", "field" => "AccountName", "page" => "add");
	$lookupTableLinks["users"]["SavingsAccounts.AccountName"]["search"] = array("table" => "SavingsAccounts", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["usersLookUp"]["MonthlyStatement.ClientNo"]["add"] = array("table" => "MonthlyStatement", "field" => "ClientNo", "page" => "add");
	$lookupTableLinks["usersLookUp"]["MonthlyStatement.ClientNo"]["search"] = array("table" => "MonthlyStatement", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["LookUps"]["MonthlyStatement.AccountType"]["edit"] = array("table" => "MonthlyStatement", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["users"]["YearlyStatement.AccountName"]["edit"] = array("table" => "YearlyStatement", "field" => "AccountName", "page" => "edit");
	$lookupTableLinks["LookUps"]["YearlyStatement.AccountType"]["edit"] = array("table" => "YearlyStatement", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["YearlyStatement.ClientNo"]["edit"] = array("table" => "YearlyStatement", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["YearlyStatement.ClientNo"]["search"] = array("table" => "YearlyStatement", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["LookUps"]["usersLookupFiltered.Sex"]["edit"] = array("table" => "usersLookupFiltered", "field" => "Sex", "page" => "edit");
	$lookupTableLinks["LookUps"]["usersLookupFiltered.EmergencyContactRelation"]["edit"] = array("table" => "usersLookupFiltered", "field" => "EmergencyContactRelation", "page" => "edit");
	$lookupTableLinks["usersLookUp"]["accountsLookUpFiltered.AccountHolder"]["edit"] = array("table" => "accountsLookUpFiltered", "field" => "AccountHolder", "page" => "edit");
	$lookupTableLinks["LookUps"]["accountsLookUpFiltered.AccountType"]["edit"] = array("table" => "accountsLookUpFiltered", "field" => "AccountType", "page" => "edit");
	$lookupTableLinks["accounts"]["accountsLookUpFiltered.ClientNo"]["edit"] = array("table" => "accountsLookUpFiltered", "field" => "ClientNo", "page" => "edit");
	$lookupTableLinks["LookUps"]["admin_members.Sex"]["edit"] = array("table" => "admin_members", "field" => "Sex", "page" => "edit");
	$lookupTableLinks["LookUps"]["admin_members.EmergencyContactRelation"]["edit"] = array("table" => "admin_members", "field" => "EmergencyContactRelation", "page" => "edit");
	$lookupTableLinks["LookUps"]["admin_users.Sex"]["edit"] = array("table" => "admin_users", "field" => "Sex", "page" => "edit");
	$lookupTableLinks["LookUps"]["admin_users.EmergencyContactRelation"]["edit"] = array("table" => "admin_users", "field" => "EmergencyContactRelation", "page" => "edit");
	$lookupTableLinks["LookUps"]["ClientAccounts.Sex"]["edit"] = array("table" => "ClientAccounts", "field" => "Sex", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["ClientAccounts.ClientNo"]["search"] = array("table" => "ClientAccounts", "field" => "ClientNo", "page" => "search");
	$lookupTableLinks["LookUps"]["ClientAccounts.EmergencyContactRelation"]["edit"] = array("table" => "ClientAccounts", "field" => "EmergencyContactRelation", "page" => "edit");
	$lookupTableLinks["accountsLookUp"]["ClientAccounts.AccountName"]["search"] = array("table" => "ClientAccounts", "field" => "AccountName", "page" => "search");
	$lookupTableLinks["accountsLookUp"]["ClientAccounts.AccountNumber"]["search"] = array("table" => "ClientAccounts", "field" => "AccountNumber", "page" => "search");
	$lookupTableLinks["LookUps"]["ClientAccounts.UserLevel"]["add"] = array("table" => "ClientAccounts", "field" => "UserLevel", "page" => "add");
	$lookupTableLinks["LookUps"]["ClientAccounts.UserLevel"]["search"] = array("table" => "ClientAccounts", "field" => "UserLevel", "page" => "search");
}

?>