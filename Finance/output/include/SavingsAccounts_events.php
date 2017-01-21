<?php
class eventclass_SavingsAccounts  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		if ($values['OpeningBalance'] < 0.01){
	$message = 'Opening Balance must be bigger than 0.00';
  return false;
}

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		$description = "Deposit of[".$values['OpeningBalance']."] for [".$values['AccountName']." - ".$values['AccountNumber']."]";

global $conn;

    $sql = "UPDATE accounts set ".
			"AccountType = 'Savings',AccountBalance=".$values['OpeningBalance']." where id=".$values['id'];
		db_query($sql,$conn);

$RecID = GetRecordCounterID('CashDepositNo');
$sql = "INSERT INTO transactions ".
			"(AccountNumber,Balance,AccountName,DateTime, ".
      "Amount,AccountType,ClientNo,LastModifiedBy,LastModifiedDate,".
      "CashDepositNo,CashDepositorName,CashDepositType,TransactionType,TransactionStatus,TransactionNo,Description) ".
      "values ('".
      $values['AccountNumber']."', ".
      $values['OpeningBalance'].", '".
      $values['AccountName']."', '".
      date("D M d, Y G:i")."', ".
      $values['OpeningBalance'].", '".
      "Savings', '".
      $values['ClientNo']."', '".
      $values['LastModifiedBy']."', '".
      $values['LastModifiedDate']."', '".
      $RecID."', '".
      $values['AccountName']."', '".
      $values['LoanCreditPaymentPurpose']."', '".
      "Cash Deposit','Approved','$RecID','$description'".
      ")";

		db_query($sql,$conn);
	


	return;



;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
