<?php
class eventclass_LoanCredit  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


		$this->events["BeforeAdd"]=true;


		$this->events["AfterEdit"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		global $conn;

db_query("update transactions set TransactionType = 'Loan Credit',ClientNo='".$values['SelectedClientNo']."', ".
       "LoanCreditApplicationStatus = '".$values['TransactionStatus']."', LoanCreditPaymentNo='".$values['TransactionNo']."', ".  
				" AccountType='Loan'".
				" where id=".$values['id'],$conn);

if(($values['TransactionStatus'] == 'Approved') && ($oldvalues['TransactionStatus'] != 'Approved')){
	$Balance = $values['Balance']+$values['Amount'];
	db_query("update transactions set Balance = $Balance ".
				" where id=".$values['id'],$conn);
	db_query("update accounts set AccountBalance=$Balance where AccountNumber='".$values['AccountNumber']."'",$conn);
}


;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		global $conn;

if ($values['Amount'] < 0.01){
	$message = 'Amount must be bigger than 0.00';
  return false;
}

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		global $conn;

db_query("update transactions set TransactionType = 'Loan Credit',ClientNo='".$values['SelectedClientNo']."', ".
       "LoanCreditApplicationStatus = '".$values['TransactionStatus']."', LoanCreditPaymentNo='".$values['TransactionNo']."', ".  
				" AccountType='Loan'".
				" where id=".$values['id'],$conn);

if(($values['TransactionStatus'] == 'Approved') && ($oldvalues['TransactionStatus'] != 'Approved')){
	$Balance = $values['Balance']+$values['Amount'];
	db_query("update transactions set Balance = $Balance ".
				" where id=".$values['id'],$conn);
	db_query("update accounts set AccountBalance=$Balance where AccountNumber='".$values['AccountNumber']."'",$conn);
}


;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		
if ($values['Amount'] < 0.01){
	$message = 'Amount must be bigger than 0.00';
  return false;
}

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
