<?php 
class eventclass_jobsjobs  extends eventsBase
{ 
	function eventclass_jobsjobs()
	{
	// fill list of events
		$this->events["BeforeShowList"]=true;

		$this->events["BeforeShowView"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["BeforeEdit"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		global $conn;

$rstt = CustomQuery("select ".AddFieldWrappers("Title").",".AddFieldWrappers("City").",".AddFieldWrappers("state").",".AddFieldWrappers("Zip").",".AddTableWrappers("jobsjobtype").".".AddFieldWrappers("sType")." as ".AddFieldWrappers("Category")." From ".AddTableWrappers("jobsjobs")." left join ".AddTableWrappers("jobsjobtype")." on ".AddTableWrappers("jobsjobtype").".".AddFieldWrappers("ID")."=".AddTableWrappers("jobsjobs").".".AddFieldWrappers("TypeID")." where ".AddTableWrappers("jobsjobs").".".AddFieldWrappers("ID")."=".$_REQUEST["editid1"]);
if($data=db_fetch_array($rstt))
{
	$xt->assign("Title1",$data["Title"]);
	$xt->assign("Category1",$data["Category"]);
	$c="";
	$s="";
	$z="";
	if(!empty($data["City"]))
		$c=$data["City"];
	if(!empty($data["state"]))
		$s=$data["state"];
	if(!empty($data["Zip"]))
		$z=$data["Zip"];
	$xt->assign("Location1",$c.", ".$s." ".$z);
}

;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, &$pageObject)
{

		$values["DateAdded"]=now();

return true;
;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, $where, &$oldvalues, &$keys, &$message, $inline, &$pageObject)
{

		$values["DateAdded"]=now();

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
