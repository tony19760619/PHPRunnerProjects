<?php
class eventclass_ClientAccounts  extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$description = "Deposit of[".$values['OpeningAccountBalance']."] for [".$values['AccountName']." - ".$values['AccountNumber']."]";

global $conn;

$rs = db_query("select * from finance_uggroups where label = 'Admin'",$conn);
$data=db_fetch_array($rs);
if(($data) and ($values['UserLevel'] == 'Admin'))
{
	if($data['GroupID'] != ''){
    db_query("INSERT INTO finance_ugmembers (UserName, GroupID) values ('".$values['Username']."', ".$data['GroupID'].")",$conn);
	}
}

$rs = db_query("select * from finance_uggroups where label = 'Clients'",$conn);
$data=db_fetch_array($rs);
if(($data) and ($values['UserLevel'] == 'Client'))
{
	if($data['GroupID'] != ''){
    db_query("INSERT INTO finance_ugmembers (UserName, GroupID) values ('".$values['Username']."', ".$data['GroupID'].")",$conn);
    $sql = "INSERT INTO accounts ".
			"(AccountNumber,AccountBalance,AccountHolder,LastTransactionDate, ".
      "OpeningBalance,AccountType,ClientNo,AccountName,LastModifiedBy,LastModifiedDate, SetWithdrawDate, InterestRate) ".
      "values ('".
      $values['AccountNumber']."', ".
      $values['OpeningAccountBalance'].", '".
      $values['AccountName']."', '".
      date("D M d, Y G:i")."', ".
      $values['OpeningAccountBalance'].", '".
      "Savings', '".
      $values['ClientNo']."', '".
      $values['AccountName']."', '".
      $values['LastModifiedBy']."', '".
      $values['LastModifiedDate']."', '".
      $values['SetWithdrawDate']."', ".
      $values['InterestRate'].
      ")";

		db_query($sql,$conn);
		$RecID = GetRecordCounterID('CashDepositNo');
    $sql = "INSERT INTO transactions ".
			"(AccountNumber,Balance,AccountName,DateTime, ".
      "Amount,AccountType,ClientNo,LastModifiedBy,LastModifiedDate,".
      "CashDepositNo,CashDepositorName,CashDepositType,TransactionType,TransactionStatus,TransactionNo,Description) ".
      "values ('".
      $values['AccountNumber']."', ".
      $values['OpeningAccountBalance'].", '".
      $values['AccountName']."', '".
      date("D M d, Y G:i")."', ".
      $values['OpeningAccountBalance'].", '".
      "Savings', '".
      $values['ClientNo']."', '".
      $values['LastModifiedBy']."', '".
      $values['LastModifiedDate']."', '".
      $RecID."', '".
      $values['AccountName']."', '".
      "Cash', 'Cash Deposit','Approved','$RecID', '$description'".
      ")";

		db_query($sql,$conn);



		return;
  }
}



;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		if ($values['OpeningAccountBalance'] < 0.01){
	$message = 'Opening Account Balance must be bigger than 0.00';
  return false;
}

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
