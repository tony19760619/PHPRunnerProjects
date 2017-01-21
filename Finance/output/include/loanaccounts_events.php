<?php
class eventclass_loanaccounts  extends eventsBase
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

		$description = "Lending of[".$values['OpeningBalance']."] for [".$values['AccountName']." - ".$values['AccountNumber']."]";

global $conn;

    $sql = "UPDATE accounts set ".
			"AccountType = 'Loan',AccountBalance=".$values['OpeningBalance']." where id=".$values['id'];
		db_query($sql,$conn);

$RecID = GetRecordCounterID('CashDepositNo');
$sql = "INSERT INTO transactions ".
			"(AccountNumber,Balance,AccountName,`DateTime`, ".
      "Amount,AccountType,ClientNo,LastModifiedBy,LastModifiedDate,".
      "CashDepositNo,CashDepositType,LoanCreditPaymentPurpose,TransactionType,".
      "TransactionStatus,TransactionNo,Description,".
      "LoanCreditWitness,LoanCreditPaymentNo, LoanCreditPaymentName,LoanCreditApplicationStatus) ".
      "values ('".
      $values['AccountNumber']."', ".
      $values['OpeningBalance'].", '".
      $values['AccountName']."', '".
      date("D M d, Y G:i")."', ".
      $values['OpeningBalance'].", '".
      "Loan', '".
      $values['ClientNo']."', '".
      $values['LastModifiedBy']."', '".
      $values['LastModifiedDate']."', '".
      $RecID."', '".
      $values['AccountName']."', '".
      $values['LoanCreditPaymentPurpose']."', '".
      "Loan Credit','Approved','$RecID','$description','".
      $values['LoanCreditWitness']."', '". 
      $RecID."', '". 
      $values['AccountName']."', 'Approved'". 
      ")";

		db_query($sql,$conn);
	


	return;



;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
