<?php
$strTableName="usersLookupFiltered";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="users";

$gstrOrderBy="ORDER BY FirstName, LastName, ClientNo";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("usersLookupFiltered");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["usersLookupFiltered"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>