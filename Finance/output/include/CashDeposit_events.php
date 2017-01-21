<?php
class eventclass_CashDeposit  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeAdd"]=true;



		$this->events["BeforeEdit"]=true;

		$this->events["AfterEdit"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		
global $conn;

db_query("update transactions set TransactionType = 'Cash Deposit',ClientNo='".$values['SelectedClientNo']."', ".
       " CashDepositStatus = '".$values['TransactionStatus']."', CashDepositNo='".$values['TransactionNo']."' ".  
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

		
if ($values['Amount'] < 0.01){
	$message = 'Amount must be bigger than 0.00';
  return false;
}

return true;

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, &$pageObject)
{

		
global $conn;

db_query("update transactions set TransactionType = 'Cash Deposit',ClientNo='".$values['SelectedClientNo']."', ".
       " CashDepositStatus = '".$values['TransactionStatus']."', CashDepositNo='".$values['TransactionNo']."' ".  
				" where id=".$values['id'],$conn);

if(($values['TransactionStatus'] == 'Approved') && ($oldvalues['TransactionStatus'] != 'Approved')){
	$Balance = $values['Balance']+$values['Amount'];
	db_query("update transactions set Balance = $Balance ".
				" where id=".$values['id'],$conn);
	db_query("update accounts set AccountBalance=$Balance where AccountNumber='".$values['AccountNumber']."'",$conn);
}

;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
