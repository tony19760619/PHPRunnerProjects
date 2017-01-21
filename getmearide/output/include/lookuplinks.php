<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["lookups"]["offeraride.TransportType"]["edit"] = array("table" => "offeraride", "field" => "TransportType", "page" => "edit");
	$lookupTableLinks["lookups"]["offeraride.WhoDoesTheDriving"]["edit"] = array("table" => "offeraride", "field" => "WhoDoesTheDriving", "page" => "edit");
	$lookupTableLinks["lookups"]["offeraridemessages.SentOrReceived"]["edit"] = array("table" => "offeraridemessages", "field" => "SentOrReceived", "page" => "edit");
	$lookupTableLinks["lookups"]["findaridemessages.SentOrReceived"]["edit"] = array("table" => "findaridemessages", "field" => "SentOrReceived", "page" => "edit");
	$lookupTableLinks["lookups"]["lookups.Type"]["edit"] = array("table" => "lookups", "field" => "Type", "page" => "edit");
	$lookupTableLinks["lookups"]["lookups.SubType"]["edit"] = array("table" => "lookups", "field" => "SubType", "page" => "edit");
	$lookupTableLinks["lookups"]["users.UserType"]["edit"] = array("table" => "users", "field" => "UserType", "page" => "edit");
	$lookupTableLinks["lookups"]["findaride.TypeOfTransport"]["edit"] = array("table" => "findaride", "field" => "TypeOfTransport", "page" => "edit");
	$lookupTableLinks["lookups"]["admin_users.UserType"]["edit"] = array("table" => "admin_users", "field" => "UserType", "page" => "edit");
}

?>