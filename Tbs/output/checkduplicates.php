<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");

global $conn;
$tableName = postvalue("tableName");
$pageType = postvalue("pageType");
$fieldName = postvalue("fieldName");
$fieldControlType = postvalue("fieldControlType");
$value = postvalue("value");

if( !checkTableName($tableName) )
{
	exit(0);
}

include("include/".$tableName."_variables.php");

if($pageType != PAGE_REGISTER && ( !isLogged() || !CheckSecurity(@$_SESSION["_".$tableName."_OwnerID"], "Search") ))
{ 
	$returnJSON = array("success" => false, "error" => "Error: You have not permissions to read the ".$tableName." table's data");
	echo "<div>".printJSON($returnJSON)."</div>";
	return;
}

$pSet = new ProjectSettings(GetTableByShort($tableName), $pageType);
$denyChecking = $pSet->allowDuplicateValues( $fieldName );
$denyChecking = $denyChecking && ($pSet->getOriginalTableName() != $cLoginTable || $fieldName != $cUserNameField && $fieldName != $cEmailField);

if( $denyChecking )
{
	$returnJSON = array("success" => false, "error" => "Duplicated values are allowed");
	echo "<div>".printJSON($returnJSON)."</div>";
	return;
}

$cipherer = new RunnerCipherer($tableName, $pSet);

if( $cipherer->isFieldEncrypted($fieldName) )
	$value = $cipherer->MakeDBValue($fieldName, $value, $fieldControlType, "", true);	
else
	$value = make_db_value($fieldName, $value, $fieldControlType, "", $tableName);

$where = GetFullFieldName($fieldName, $tableName, false).( $value == "null" ? ' is ' : '=' ).$value; 
$sql = "SELECT count(*) from ".AddTableWrappers( $pSet->getOriginalTableName() )." where ".$where;

$rs = db_query($sql, $conn);
if( !$rs || !($data = db_fetch_numarray($rs)) )
{
	$returnJSON = array("success" => false, "error" => "Error: Wrong SQL query");
	echo "<div>".printJSON($returnJSON)."</div>";
	return;
}

$hasDuplicates = $data[0] ? true : false;
$returnJSON = array("success" => true, "hasDuplicates" => $hasDuplicates, "error"=>"");	
echo "<div>".printJSON($returnJSON)."</div>";
return;
?>