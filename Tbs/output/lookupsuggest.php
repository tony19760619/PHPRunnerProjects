<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


$table = postvalue("table");
$pageType = postvalue("pageType");
if($pageType == "list")	
	$pageType = "search";
$strTableName = GetTableByShort($table);

if (!checkTableName($table))
{
	exit(0);
}

include("include/".$table."_variables.php");

$gSettings = new ProjectSettings($strTableName, $pageType);

$field = postvalue('searchField');
$value = postvalue('searchFor');
$searchByLinkField = postvalue('searchByLinkField');
$lookupValue = postvalue('lookupValue');
$category = postvalue('category');
$isExistParent = postvalue('isExistParent');
$LookupSQL = "";
$response = array();
$output = "";

$values = postvalue('multiselection') ? splitvalues($value) : array($value);

// convert into an array as parent ctrl can have multiple values
$lookupCategory = !$isExistParent ? array() : splitvalues($category);

$cipherer = new RunnerCipherer($strTableName);	

$strLoginTable = "user";
if ($strTableName != $strLoginTable)
{
	if(!isLogged()) { 
		return;	
	}
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) { return;	}
}
else 
{
	$checkResult = true;
	if($field=="Username")
		$checkResult=false;

	if($field=="Password")
		$checkResult=false;

	if($field=="Name")
		$checkResult=false;

	if($field=="Email")
		$checkResult=false;

	if($field=="CustomerId")
		$checkResult=false;

	if($field=="Type")
		$checkResult=false;

	if($checkResult)
	{
		if(!isLogged()) { return;	}
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) { return;	}
	}
}

$hasWhere = false;


$fieldsArr = $gSettings->getFieldsList();
$lwDisplayField = '';
$lwLinkField = '';
$lookupField = '';

foreach ($fieldsArr as $f)
{
	$fEditFormat = $gSettings->getEditFormat($f);
	if ($fEditFormat != EDIT_FORMAT_LOOKUP_WIZARD || GoodFieldName($f) != $field)
	{
		continue;
	}
	
	$lookupField = $f;
	$LookupType = $gSettings->getLookupType($f);
	if ($LookupType == LT_LOOKUPTABLE || $LookupType == LT_QUERY)
	{
		$lookupTable = $gSettings->getLookupTable($f);
		$linkFieldName = $gSettings->getLinkField($f);
		$displayFieldName = $gSettings->getDisplayField($f);
		$linkAndDisplaySame = $displayFieldName == $linkFieldName;
		
		$lwDisplayField = $gSettings->getLWDisplayField($f);
		$lookupOrderBy = $gSettings->getLookupOrderBy($f);
				
		if($LookupType == LT_QUERY){
			$lookupPSet = new ProjectSettings($lookupTable, $pageType);
			$lookupQueryObj = $lookupPSet->getSQLQuery();
			if($gSettings->getCustomDisplay($f))
				$lookupQueryObj->AddCustomExpression($displayFieldName, $lookupPSet, $strTableName, $f);
			$lookupQueryObj->ReplaceFieldsWithDummies($lookupPSet->getBinaryFieldsIndices());
			$cipherer->strTableName = $lookupTable;
		}else{
			$LookupSQLTable = "SELECT ";
			$lwLinkField = $gSettings->GetLWLinkField($f,true);
			if ($gSettings->isLookupUnique($f))
			{
				$LookupSQLTable .= "DISTINCT ";
			}
			$LookupSQLTable .= $cipherer->GetLookupFieldName($lwLinkField, $strTableName, $f, null, true);
						if(!$linkAndDisplaySame)
				$LookupSQLTable .= ",".($lwDisplayField == $lwLinkField ? $cipherer->GetFieldName($lwDisplayField, $f, true) : $lwDisplayField);
			$LookupSQLTable .= " FROM ".AddTableWrappers($lookupTable)." ";
		}
		
		$strLookupWhere = GetLWWhere($f, $pageType, $strTableName);
				if($LookupType == LT_QUERY)
		{	
			$secOpt = $lookupPSet->getAdvancedSecurityType();
			if($secOpt == ADVSECURITY_VIEW_OWN)
				$strLookupWhere = whereAdd($strLookupWhere, SecuritySQL("Search", $lookupTable));
		}
		if ($strLookupWhere)
		{
			$strLookupWhere = " (".$strLookupWhere.")  AND ";
		}
		
		if($LookupType == LT_QUERY)
		{
			if($gSettings->getCustomDisplay($f))
				$likeField = $searchByLinkField ? $linkFieldName : $displayFieldName;
			else
				$likeField = GetFullFieldName($searchByLinkField ? $linkFieldName : $displayFieldName, $lookupTable, false);
		}
		else
			$likeField = $cipherer->GetFieldName($lwDisplayField, $f);

		if ($searchByLinkField) 	
			$likeConditionField = $LookupType == LT_QUERY ? $linkFieldName : $f;
		else 
			$likeConditionField = $LookupType == LT_QUERY ? $displayFieldName : $f;
			
		$likeWheres = array();
		foreach($values as $fieldValue) 
		{
			$likeWheres[] = $likeField.$cipherer->GetLikeClause($likeConditionField, $fieldValue);
		}
		$strLookupWhere.= implode(' OR ', $likeWheres);
		

		if($gSettings->useCategory($f) && ($isExistParent || postvalue('editMode') != MODE_SEARCH))
		{
			$arLookupWhere = array();
			foreach($lookupCategory as $arLookupCategory)
			{
				$cvalue = make_db_value($gSettings->getCategoryControl($f), $arLookupCategory);
				$arLookupWhere[] = AddFieldWrappers($gSettings->getCategoryFilter($f))."=".$cvalue;
			}
			$arLookupWhereToStr = (count($arLookupWhere) == 1) ? $arLookupWhere[0] : "(".implode(" OR ", $arLookupWhere).")";
			if(count($arLookupWhere))
				$strLookupWhere = whereAdd($strLookupWhere, $arLookupWhereToStr);
		}
		if(strlen($lookupOrderBy))
		{
			$lookupOrderBy = GetFullFieldName($lookupOrderBy, $lookupTable);
			if($gSettings->isLookupDesc($f))
				$lookupOrderBy .= ' DESC';
		}
		if($LookupType == LT_QUERY){
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strLookupWhere),
				strlen($lookupOrderBy) ? ' ORDER BY '.$lookupOrderBy : null);
		}else{
			$LookupSQL = $LookupSQLTable." where ".$strLookupWhere;
			if (!$gSettings->isLookupUnique($f) || nDATABASE_Access != 0)
			{
				if ($lookupOrderBy)
				{
					$LookupSQL.= " ORDER BY ".$lookupOrderBy;
				}
			}
		}
	}
	if (strlen(GetLWWhere($f, $pageType, $strTableName)))
	{
		$hasWhere = true;
	}
	break;
}

$lookupIndexes = GetLookupFieldsIndexes($gSettings, $lookupField);
$linkFieldIndex = $lookupIndexes["linkFieldIndex"];
$displayFieldIndex = $lookupIndexes["displayFieldIndex"];

$rs = db_query($LookupSQL,$conn);

while ($data = db_fetch_numarray($rs)) 
{
	if($LookupType == LT_QUERY && $gSettings->isLookupUnique($lookupField)){
		if(!isset($uniqueArray))
			$uniqueArray = array();
		if(in_array($data[$displayFieldIndex], $uniqueArray))
			continue;
		$uniqueArray[] = $data[$displayFieldIndex];
	}
	$data[$linkFieldIndex] = $cipherer->DecryptField($lookupField, $data[$linkFieldIndex]);
	if($LookupType == LT_QUERY)
		$data[$displayFieldIndex] = $cipherer->DecryptField($displayFieldName, $data[$displayFieldIndex]);
	
	$response[] = $data[$linkFieldIndex];
	$response[] = $data[$displayFieldIndex];
}

$respObj = array('success'=>true, 'data'=>array_slice($response, 0, 40));
echo printJSON($respObj);
exit();
?>