<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");

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

require_once("include/".$table."_variables.php");

$cipherer = new RunnerCipherer($strTableName);	
$gSettings = new ProjectSettings($strTableName, $pageType);

$field = postvalue('searchField');
$value = postvalue('searchFor');
$output = "";
$response = array();
$category = postvalue('category');
$LookupSQL = "";
$lookupValue = postvalue('lookupValue');
$isExistParent = postvalue('isExistParent');
$searchByLinkField = postvalue('searchByLinkField');

$values = postvalue('multiselection') ? splitvalues($value) : array($value);

// convert into an array as parent ctrl can have multiple values
$lookupCategory = !$isExistParent ? array() : splitvalues($category);

// if suggest for dashboard search
if ($gSettings->getNType() == DASHBOARD_SEARCH)
{
    $dashFields = $gSettings->getDashboardSearchFields();
    $table = GoodFieldName($dashFields[$field][0]["table"]);
    $strTableName = GetTableByShort($table);
    $field = GoodFieldName($dashFields[$field][0]["field"]);
	if (!checkTableName($table))
	{
		exit(0);
	}
	require_once("include/".$table."_variables.php");
    $cipherer = new RunnerCipherer($strTableName);
    $gSettings = new ProjectSettings($strTableName, $pageType);
}

if( $strTableName != "jobsusers" )
{
	if(!isLogged())  
		return;	
	
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) 
		return;
}
else 
{
	$checkResult = true;
	if($field=="Username")
		$checkResult=false;

	if($field=="Password")
		$checkResult=false;

	if($field=="Email")
		$checkResult=false;

	if($checkResult)
	{
		if(!isLogged())  
			return;	
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			return;
	}
}

$hasWhere = false;
$fieldsArr = $gSettings->getFieldsList();
$lwLinkField = '';
$lookupField = '';
$lwDisplayField = '';
$lookupConnection = $cman->getDefault();

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
		if( $LookupType == LT_QUERY )
			$lookupConnection = $cman->byTable( $lookupTable );
		else
		{
			$connId = $gSettings->getNotProjectLookupTableConnId( $f );
			$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();		
		}
		
		$linkFieldName = $gSettings->getLinkField($f);
		$displayFieldName = $gSettings->getDisplayField($f);
		$linkAndDisplaySame = $displayFieldName == $linkFieldName;
		$lookupOrderBy = $gSettings->getLookupOrderBy($f);
		
		$lwDisplayField = RunnerPage::sqlFormattedDisplayField($f, $lookupConnection, $gSettings);
										
		if( $lookupConnection->dbType == nDATABASE_MSSQLServer )
			$strUniqueOrderBy = $lookupOrderBy;
		
		if($LookupType == LT_QUERY)
		{
			$lookupPSet = new ProjectSettings($lookupTable, $pageType);
			$lookupCipherer = new RunnerCipherer($lookupTable);
			$lookupQueryObj = $lookupPSet->getSQLQuery();
			
			if($gSettings->getCustomDisplay($f))
				$lookupQueryObj->AddCustomExpression($displayFieldName, $lookupPSet, $strTableName, $f);
			
			$lookupQueryObj->ReplaceFieldsWithDummies($lookupPSet->getBinaryFieldsIndices());
		}
		else
		{
			$LookupSQLTable = "SELECT ";
			$lwLinkField = $lookupConnection->addFieldWrappers($gSettings->getLinkField($f));
			if ($gSettings->isLookupUnique($f))
			{
				$LookupSQLTable .= "DISTINCT ";
			}
			$LookupSQLTable .= $cipherer->GetLookupFieldName($lwLinkField, $f, null, true);
			if( $lookupConnection->dbType == nDATABASE_MSSQLServer )
			{
				if( $strUniqueOrderBy && $gSettings->isLookupUnique($f) )
					$LookupSQLTable .= ",".$lookupConnection->addFieldWrappers( $strUniqueOrderBy );
			}
			if(!$linkAndDisplaySame)
				$LookupSQLTable .= ",".($lwDisplayField == $lwLinkField ? $cipherer->GetFieldName($lwDisplayField, $f, true) : $lwDisplayField);
			
			$LookupSQLTable .= " FROM ".$lookupConnection->addTableWrappers($lookupTable)." ";
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
				$likeField = RunnerPage::_getFieldSQLDecrypt($searchByLinkField ? $linkFieldName : $displayFieldName, $lookupConnection ,$lookupPSet, $cipherer);
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
			if($LookupType == LT_QUERY)
				$likeWheres[] = $likeField.$lookupCipherer->GetLikeClause($likeConditionField, $fieldValue);
			else	
				$likeWheres[] = $likeField.$cipherer->GetLikeClause($likeConditionField, $fieldValue);
		}
		$strLookupWhere.= implode(' OR ', $likeWheres);
		

		if($gSettings->useCategory($f) && ($isExistParent || postvalue('editMode') != MODE_SEARCH))
		{
			$arLookupWhere = array();
			foreach($lookupCategory as $arLookupCategory)
			{
				$cvalue = make_db_value($gSettings->getCategoryControl($f), $arLookupCategory);
				$arLookupWhere[] = $lookupConnection->addFieldWrappers($gSettings->getCategoryFilter($f))."=".$cvalue;
			}
			$arLookupWhereToStr = (count($arLookupWhere) == 1) ? $arLookupWhere[0] : "(".implode(" OR ", $arLookupWhere).")";
			if(count($arLookupWhere))
				$strLookupWhere = whereAdd($strLookupWhere, $arLookupWhereToStr);
		}
		if(strlen($lookupOrderBy))
		{
			$lookupOrderBy = $lookupConnection->addFieldWrappers($lookupOrderBy);
			if($gSettings->isLookupDesc($f))
				$lookupOrderBy .= ' DESC';
		}
		if($LookupType == LT_QUERY)
		{
			$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strLookupWhere),
				strlen($lookupOrderBy) ? ' ORDER BY '.$lookupOrderBy : null);
		}else
		{
			$LookupSQL = $LookupSQLTable." where ".$strLookupWhere;
			if ( !$gSettings->isLookupUnique($f) || nDATABASE_Access != $lookupConnection->dbType )
			{
				if ($lookupOrderBy)
				{
					$LookupSQL.= " ORDER BY ".$lookupOrderBy;
				}
			}
		}
	}
	if( strlen(GetLWWhere($f, $pageType, $strTableName)) )
	{
		$hasWhere = true;
	}
	break;
}

$lookupIndexes = GetLookupFieldsIndexes($gSettings, $lookupField);
$linkFieldIndex = $lookupIndexes["linkFieldIndex"];
$displayFieldIndex = $lookupIndexes["displayFieldIndex"];

if( $lookupConnection )
{
	$qResult = $lookupConnection->query( $LookupSQL );
	while ($data = $qResult->fetchNumeric() ) 
	{
		if( $LookupType == LT_QUERY && $gSettings->isLookupUnique($lookupField) )
		{
			if( !isset($uniqueArray) )
				$uniqueArray = array();
				
			if( in_array($data[ $displayFieldIndex ], $uniqueArray) )
				continue;
			
			$uniqueArray[] = $data[ $displayFieldIndex ];
		}
		
		$data[ $linkFieldIndex ] = $cipherer->DecryptField($lookupField, $data[ $linkFieldIndex ]);
		if( $LookupType == LT_QUERY )
			$data[ $displayFieldIndex ] = $cipherer->DecryptField($displayFieldName, $data[ $displayFieldIndex ]);
		
		$response[] = $data[ $linkFieldIndex ];
		$response[] = $data[ $displayFieldIndex ];
	}
}

$respObj = array('success' => true, 'data' => array_slice($response, 0, 40));
echo printJSON($respObj);
exit();
?>