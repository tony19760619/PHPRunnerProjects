<?php
class eventclass_ClientCashWithdrawl  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, &$pageObject)
{

		global $conn;
$Balance = $values['Balance']-$values['Amount'];
$description = "Withdrawl of[".$values['OpeningAccountBalance']."] for [".$values['AccountName']." - ".$values['AccountNumber']."]";
db_query("update transactions set TransactionType = 'Cash Withdrawl', Description = '$description', Balance=$Balance where id=".$values['id'],$conn);
db_query("update accounts set AccountBalance = $Balance where AccountNumber='".$values['AccountNumber']."'",$conn);

;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
