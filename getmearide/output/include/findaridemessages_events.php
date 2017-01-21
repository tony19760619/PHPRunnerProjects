<?php
class eventclass_findaridemessages  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL, &$strWhereClause, &$strOrderBy, &$pageObject)
{

		if($strWhereClause !=''){
$strWhereClause .= " and (FromUsername = '".$_SESSION["UserID"]."')";
}
// Place event code here.
// Use 
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

}
?>
