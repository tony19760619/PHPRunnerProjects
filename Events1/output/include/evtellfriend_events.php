<?php 
class eventclass_evtellfriend  extends eventsBase
{ 
	function eventclass_evtellfriend()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$email.=$values["EmailAddress1"];
if($values["EmailAddress2"]!="") 
	$email.=", " . $values["EmailAddress2"];
if($values["EmailAddress3"]!="") 
	$email.=", " . $values["EmailAddress3"];
if($values["EmailAddress4"]!="") 
	$email.=", " . $values["EmailAddress4"];
if($values["EmailAddress5"]!="") 
	$email.=", " . $values["EmailAddress5"];

$ret=runner_mail(array('to' => $email, 'subject' => $values["EmailSubject"], 'body' => $values["EmailBody"], 'from'=>$values["FromName"]));
if(!$ret["mailed"])
{
	$message = $ret["message"];
	return false;
}
else
	return true;

// return true if you like to proceed with adding new record
// return false in other case 


;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
