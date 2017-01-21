<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


include("include/dbcommon.php");
include("classes/searchclause.php");
include("classes/controls/ViewControl.php");
include("classes/controls/ViewControlsContainer.php");


$table = postvalue("table");
$field = postvalue("field");
$pageType = postvalue('pagetype');

$mainTable = postvalue("maintable");
$mainField = postvalue("mainfield");

$lookup = false;
if($mainTable && $mainField) {
	$lookup = true;
}

if( !checkTableName($table) )
	exit(0);
include("include/".$table."_variables.php");

$pSet = new ProjectSettings(GetTableByShort($table), $pageType);
$cipherer = new RunnerCipherer(GetTableByShort($table), $pSet);

$lookupInRegisterPage = false;
															if("RegisterPage_customer" == $table && "CustomerId" == $mainField)
{
	$lookupInRegisterPage = true;
}
			if(!in_array($field,$pSet->getListFields()))
{
	$lookupInRegisterPage = false;
}

if((!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) && !$lookupInRegisterPage)
{ 
	$returnJSON = array("success"=>false, "error"=>'');
	echo printJSON($returnJSON);
	return;
}

if(!$pSet->checkFieldPermissions($field))
{
	$returnJSON = array("success"=>false, "error"=>'Error: You have not permission for read this text');
	echo printJSON($returnJSON);
	return;
}
	
if(!$gQuery->HasGroupBy())
{
	// Do not select any fields except current (full text) field.
	// If query has 'group by' clause then other fields are used in it and we may not simply cut 'em off.
	// Just don't do anything in that case.
	$gQuery->RemoveAllFieldsExcept($pSet->getFieldIndex($field));
}

$keysArr = $pSet->getTableKeys();
$keys = array();
foreach ($keysArr as $ind=>$k)
	$keys[$k] = postvalue("key".($ind+1));

$where = KeyWhere($keys);

if ($pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN)
	$where = whereAdd($where,SecuritySQL("Search"));	

$sql = $gQuery->gSQLWhere($where);

$rs = db_query($sql,$conn);
if(!$rs || !($data = $cipherer->DecryptFetchedArray($rs)))
{
	$returnJSON = array("success"=>false, "error"=>'Error: Wrong SQL query');
	echo printJSON($returnJSON);
	return;
}
$fieldValue = $data[$field];

$sessionPrefix = $pSet->getOriginalTableName();
if($lookup) 
{
	//set the session prefix for the lookup list page
	$sessionPrefix = $pSet->getOriginalTableName()."_lookup_".$mainTable.'_'.$mainField;
	
}

$searchClauseObj = SearchClause::UnserializeObject($_SESSION[$sessionPrefix."_advsearch"]);
$container = new ViewControlsContainer($pSet, PAGE_LIST, null);
$cViewControl = $container->getControl($field);

if($cViewControl->localControlsContainer && !$cViewControl->linkAndDisplaySame)
	$cViewControl->localControlsContainer->fullText = true;
else
	$cViewControl->container->fullText = true;

if($searchClauseObj)
{ 
	if($searchClauseObj->bIsUsedSrch || $useViewControl) 
	{
		$cViewControl->searchClauseObj = $searchClauseObj;
		$cViewControl->searchHighlight = true;
	}
}

$htmlEncodedValue = $cViewControl->showDBValue($data, ""); 

$returnJSON = array("success"=>true, "textCont"=>nl2br($htmlEncodedValue));
echo printJSON($returnJSON); 
return;
?>
