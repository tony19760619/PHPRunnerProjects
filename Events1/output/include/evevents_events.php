<?php 
class eventclass_evevents  extends eventsBase
{ 
	function eventclass_evevents()
	{
	// fill list of events
		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeShowList"]=true;

		$this->events["BeforeShowView"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, &$pageObject)
{

		if($_SESSION["UserID"]=="Guest")
	$xt->assign("menu_block",false);
;		
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, &$pageObject)
{

		//global $conn;
global $dal,$locale_info;
//**********  Custom code  ************
//------------------------------------------------------------	
//Search By Month
if(GetDatabaseType()==4)
	$str="SELECT Count(".AddFieldWrappers("FromDate").") AS " . AddFieldWrappers("Count") . ", date_part('month', ".AddFieldWrappers("FromDate").") AS ".AddFieldWrappers("MonthNumber").", date_part('year',".AddFieldWrappers("FromDate").") as ".AddFieldWrappers("YearNumber")." FROM ".AddTableWrappers("evevents")." GROUP BY date_part('month',".AddFieldWrappers("FromDate")."), date_part('year',".AddFieldWrappers("FromDate").") ORDER BY date_part('month',".AddFieldWrappers("FromDate")."), date_part('year',".AddFieldWrappers("FromDate").")";
elseif(GetDatabaseType()==1)
	$str="SELECT Count(".AddFieldWrappers("FromDate").") AS " . AddFieldWrappers("Count") . ", to_char(".AddFieldWrappers("FromDate").",'MM') AS ".AddFieldWrappers("MonthNumber").", to_char(".AddFieldWrappers("FromDate").",'YYYY') as ".AddFieldWrappers("YearNumber")." FROM ".AddTableWrappers("evevents")." GROUP BY to_char(".AddFieldWrappers("FromDate").",'MM'), to_char(".AddFieldWrappers("FromDate").",'YYYY') ORDER BY to_char(".AddFieldWrappers("FromDate").",'MM'), to_char(".AddFieldWrappers("FromDate").",'YYYY')";
else
	$str="SELECT Count(".AddFieldWrappers("FromDate").") AS " . AddFieldWrappers("Count") . ", Month(".AddFieldWrappers("FromDate").") AS ".AddFieldWrappers("MonthNumber").", Year(".AddFieldWrappers("FromDate").") as ".AddFieldWrappers("YearNumber")." FROM ".AddTableWrappers("evevents")." GROUP BY Month(".AddFieldWrappers("FromDate")."), Year(".AddFieldWrappers("FromDate").") ORDER BY Month(".AddFieldWrappers("FromDate")."), Year(".AddFieldWrappers("FromDate")."), Month(".AddFieldWrappers("FromDate").") & ' ' & Year(".AddFieldWrappers("FromDate").")";

$message.= "<br><Font face=Tahoma size=2><b>Search By Month</b></Font><br>";
$data = CustomQuery($str);
while($rs=db_fetch_array($data))
{
  $MonthNumber2=$rs["MonthNumber"]+1;
	$YearNumber2=$rs["YearNumber"];
	if ($MonthNumber2>12)
	{
			$MonthNumber2=1;
			$YearNumber2=$YearNumber2+1;
	}
	$date1=$rs["YearNumber"]."-".$rs["MonthNumber"]."-1" ;
	$date2=$YearNumber2 . "-" . $MonthNumber2 . "-1";
  $message=$message . "&nbsp;&nbsp;&nbsp;<a href='evevents_list.php?a=integrated&ctlSearchFor=&simpleSrchFieldsComboOpt=&simpleSrchTypeComboNot=&simpleSrchTypeComboOpt=&criteria=and&type1=date13&value11=" . $date2 . "&field1=FromDate&option1=More+than&not1=on&type2=date13&value21=" . $date1 . "&field2=FromDate&option2=More+than&not2='>";
	$message=$message . $locale_info["LOCALE_SMONTHNAME" . $rs["MonthNumber"]] . " " . $rs["YearNumber"]. " (" . $rs["Count"].")</a><br>";
}

$xt->assign("ListLoad",$message);
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, &$pageObject)
{

		global $strWhereClause;
global $dal;
// Parameters:
// $where - string with WHERE clause pointing to record to be viewed
//**********  Custom code  ************
// put your custom code here
  $_SESSION["EventsName"]=$values["Subject"];
	$_SESSION["Body"]="You have been notified about \"" . $_SESSION["EventsName"] . "\" on " . format_longdate(db2time(now())) . "\n\n\n";
	$_SESSION["Body"].="Event: " . $values["Subject"] . "\n";
	$_SESSION["Body"].="What: " . $values["Category"] . "\n";
	$_SESSION["Body"].="When: " . format_longdate(db2time(now())) . "\n";
	$_SESSION["Body"].="Where: " . $values["Location"] . "\n\n";
  $_SESSION["Body"].="To see more details about this event follow the link below:" . "\n";
 $pURL = "http";
 if ($_SERVER["HTTPS"] == "on") {$pURL .= "s";}
 $pURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];
 } else {
  $pURL .= $_SERVER["SERVER_NAME"].":".$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];
 }
	$_SESSION["Body"].=$pURL . "\n\n";
	$_SESSION["Body"].="Thanks";

;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
