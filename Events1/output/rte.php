<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");

$table = postvalue("table");
if (!checkTableName($table))
{
	exit(0);
}
require_once("include/".$table."_variables.php");

if((!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) && @$_GET["action"]<>"add")
{ 
	return;
}

$ptype = postvalue("ptype");
$field = postvalue("field");
$pSet = new ProjectSettings($strTableName, $ptype);
if(!$pSet->checkFieldPermissions($field) && @$_GET["action"] <> "add")
	return;

$_connection = $cman->byTable( $strTableName );	
	
//	construct sql
$data = false;
if(@$_GET["action"] <> "add")
{
	$keysArr = $pSet->getTableKeys();
	$keys = array();
	foreach ($keysArr as $ind=>$k)
	{	
		$keys[$k]=postvalue("key".($ind+1));
	}
	$where = KeyWhere($keys);

		if ($pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN)
	{
		$where = whereAdd($where,SecuritySQL("Search", $strTableName));
	}

	$sql = $gQuery->gSQLWhere($where);
	$qResult = $_connection->query( $sql );
	if(!$qResult)
	  return;

	$data = $qResult->fetchAssoc();
}
else 
{	
	$data = array();
	$data[$field] = @$_SESSION[$strTableName."_".$field."_rte"];
}

$nWidth = $pSet->getNCols($field);
$nHeight = $pSet->getNRows($field);
$id = postvalue("id");
$cfield = "value_".GoodFieldName($field)."_".($id!=='' ? $id : '1');

if(@$_REQUEST["browser"]=="ie")
	$onsubmit = "onsubmit=\"updateRTEs();\"";
else
	$onsubmit = "onsubmit=\"updateRTEs();return this.elements['".$cfield."'].value;\"";

echo "<html><body style=\"margin:0;\"><form name=\"rteform\" ".$onsubmit.">";
echo "<script type=\"text/javascript\" src=\"".GetRootPathForResources("include/rte/richtext.js")."\"></script>\r\n";
echo "<script language=\"JavaScript\" type=\"text/javascript\">";
echo "initRTE('include/rte/images/', 'include/rte/', '');\r\n";
echo "{var rte = new richTextEditor('".$cfield."');";
echo "rte.width= ".$nWidth.";";
echo "rte.height= ".$nHeight.";";
echo "rte.html = '";
if($data && $data[$field] != null)
	echo jsreplace($data[$field]);
echo "';";
echo "rte.build();}";
echo "</script>";
echo "</form></body></html>";
return;
?>
