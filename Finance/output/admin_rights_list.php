<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "transactions";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("transactions", " " . "Transactions");
$table = "accounts";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("accounts", " " . "Accounts");
$table = "users";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("users", " " . "Users");
$table = "LookUps";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LookUps", " " . "Look Ups");
$table = "usersLookUp";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("usersLookUp", " " . "Users Look Up");
$table = "accountsLookUp";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("accountsLookUp", " " . "Accounts Look Up");
$table = "loanaccounts";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("loanaccounts", " " . "Loan Accounts");
$table = "CashDeposit";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CashDeposit", " " . "Cash Deposit");
$table = "CashWithdrawl";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("CashWithdrawl", " " . "Cash Withdrawl");
$table = "LoanCredit";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LoanCredit", " " . "Loan Credit");
$table = "LoanPayment";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LoanPayment", " " . "Loan Payment");
$table = "SavingsStatements";
$mask="";
			$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SavingsStatements", " " . "Savings Statements");
$table = "LoanStatements";
$mask="";
			$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("LoanStatements", " " . "Loan Statements");
$table = "MonthlyBalanceSheet";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("MonthlyBalanceSheet", " " . "Monthly Balance Sheet");
$table = "BalaceEnquiry";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("BalaceEnquiry", " " . "Balace Enquiry");
$table = "NEFTTransfer";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("NEFTTransfer", " " . "NEFTTransfer");
$table = "recordidcounter";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("recordidcounter", " " . "Recordidcounter");
$table = "YearlyBalanceSheet";
$mask="";
				$mask .= "S";
$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("YearlyBalanceSheet", " " . "Yearly Balance Sheet");
$table = "TransactionLog";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("TransactionLog", " " . "Transaction Log");
$table = "ClientCashWithdrawl";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("ClientCashWithdrawl", " " . "Withdrawl");
$table = "ClientLoanCredit";
$mask="";
	$mask .= "A";
	$mask .= "E";
		$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("ClientLoanCredit", " " . "Loan Application");
$table = "ClientSavingsAccounts";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("ClientSavingsAccounts", " " . "Client Savings Accounts");
$table = "ClientLoanAccounts";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("ClientLoanAccounts", " " . "Client Loan Accounts");
$table = "SavingsAccounts";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("SavingsAccounts", " " . "Savings Accounts");
$table = "MonthlyStatement";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("MonthlyStatement", " " . "Monthly Statement");
$table = "YearlyStatement";
$mask="";
				$mask .= "S";
$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("YearlyStatement", " " . "Yearly Statement");
$table = "usersLookupFiltered";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("usersLookupFiltered", " " . "Users Lookup Filtered");
$table = "accountsLookUpFiltered";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("accountsLookUpFiltered", " " . "Accounts Look Up Filtered");
$table = "ClientAccounts";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("ClientAccounts", " " . "Client Accounts");
$table = "schedule";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("schedule", " " . "Schedule");
$table = "loan";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("loan", " " . "Loan");




$layout = new TLayout("ug_rights", "RoundedOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->container_properties["ugcontrols"] = array(  );
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons",
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"ugrightsblock",
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->container_properties["uggroup"] = array(  );
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup",
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["admin_rights_list"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
