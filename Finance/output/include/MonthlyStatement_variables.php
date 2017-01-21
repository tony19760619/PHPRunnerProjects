<?php
$strTableName="MonthlyStatement";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="transactions";

$gstrOrderBy="ORDER BY AccountName, ClientNo, AccountType, AccountNumber";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("MonthlyStatement");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["MonthlyStatement"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>