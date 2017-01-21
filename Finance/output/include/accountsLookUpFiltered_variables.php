<?php
$strTableName="accountsLookUpFiltered";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="accounts";

$gstrOrderBy="ORDER BY AccountHolder, AccountNumber";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("accountsLookUpFiltered");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["accountsLookUpFiltered"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>