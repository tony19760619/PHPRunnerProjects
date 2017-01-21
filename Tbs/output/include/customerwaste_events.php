<?php 
class eventclass_customerwaste  extends eventsBase
{ 
	function eventclass_customerwaste()
	{
	// fill list of events
		$this->events["BeforeQueryList"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before SQL query
function BeforeQueryList(&$strSQL,&$strWhereClause,&$strOrderBy,&$pageObject)
{

		
$strSQL = "SELECT cw.`Id` as Id, cw.`CustomerId` as CustomerId, u.`Name` as UserId, cw.`WasteId` as WasteId, cw.`DateTime` as DateTime, cw.`Amount` as Amount FROM customerwaste as cw inner join User as u on u.Id = cw.UserId ".$strOrderBy;

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeQueryList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
