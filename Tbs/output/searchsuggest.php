<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

$table = postvalue("table");
$strTableName = GetTableByShort($table);

if (!checkTableName($table))
	exit(0);

include("include/".$table."_variables.php");

if(!isLogged())
	return;
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
	return;


$searchFor = postvalue('searchFor');
// if nothing to search 
if($searchFor == '')
{
	echo printJSON(array('success' => true, 'result' => '')); 
	return;
}

// array of vals
$response = array();
$searchOpt = postvalue("start") ? "Starts with" : "Contains";
$searchField = GoodFieldName(postvalue('searchField'));
$strSecuritySql = SecuritySQL("Search", $strTableName);
$numberOfSuggests = GetGlobalData("searchSuggestsNumber", 10);

$pSet = new ProjectSettings($strTableName, PAGE_SEARCH);

if($searchField == "")
	$allSearchFields = $pSet->getGoogleLikeFields();
else	
	// array of fields which were added in wizard for search
	$allSearchFields = $pSet->getAllSearchFields();	
		
require_once getabspath('classes/controls/EditControlsContainer.php');

$detailKeys = array();
$masterWhere = "";	
if(@$_SESSION[$strTableName."_mastertable"] != "")
{
	$masterTablesInfoArr = $pSet->getMasterTablesArr($strTableName);
	for($i = 0; $i < count($masterTablesInfoArr); $i++) 
	{
		if( $_SESSION[$strTableName."_mastertable"] != $masterTablesInfoArr[$i]['mDataSourceTable'] )
			continue;
		
		if($masterTablesInfoArr[$i]['dispInfo']) 
		{
			$masterPSet = new ProjectSettings($masterTablesInfoArr[$i]['mDataSourceTable'], PAGE_SEARCH);
			$masterControls = new EditControlsContainer(null, $masterPSet, PAGE_LIST, new RunnerCipherer($masterTablesInfoArr[$i]['mDataSourceTable'], $masterPSet));
			$detailKeys = $masterTablesInfoArr[$i]['detailKeys'];
			for($j = 0; $j < count($detailKeys); $j++)
			{
				$masterWhere .= " and ".$masterControls->getControl( $detailKeys[$j] )->getSuggestWhere('Equals', @$_SESSION[$strTableName."_masterkey".($j + 1)]);
			}
		}
		break;		
	}
}

$cipherer = new RunnerCipherer($strTableName);
$controls = new EditControlsContainer(null, $pSet, PAGE_LIST, $cipherer);

$result = array();
$pattern_clear_tags = '/<.*?>/i';
$pattern_clear_tags = $useUTF8 ? $pattern_clear_tags.'u' : $pattern_clear_tags;
$pattern_get_text = '/(.*<.*>|^.*?)([.]*'.preg_quote($searchFor, "/").'.*?)(<.*>|$)/i';
$pattern_get_text = $useUTF8 ? $pattern_get_text.'u' : $pattern_get_text;

// traversing searchable fields 
foreach($allSearchFields as $f)
{
	// filter fields by type
	$fType = $pSet->getFieldType($f);	
	if( !IsCharType($fType) && !IsNumberType($fType) && !IsGuid($fType)	|| in_array($f, $detailKeys) )
		continue;

	
	if( $searchField != '' && $searchField != GoodFieldName($f) || !$pSet->checkFieldPermissions($f) )
		continue;
	
	$fieldControl = $controls->getControl($f);
	
	$isAggregateField = $pSet->isAggregateField($f);
	$where = $fieldControl->getSuggestWhere($searchOpt, $searchFor, $isAggregateField);
	$having = $fieldControl->getSuggestHaving($searchOpt, $searchFor, $isAggregateField);
		
	if( !strlen($where) && !strlen($having) )
		continue;
	
	$where = whereAdd($where.$masterWhere, $strSecuritySql);
	
	$clausesData = $fieldControl->getSelectColumnsAndJoinFromPart( $searchFor, $searchOpt, true );	
	$selectColumns = $clausesData["selectColumns"];
	$fromClause = $gQuery->FromToSql().$clausesData["joinFromPart"];
	
	$distinct = "DISTINCT";
	$sqlHead = "SELECT ".$distinct." ".$selectColumns." ";
	
	if($gQuery->HasGroupBy())
	{
		$strSQL = $gQuery->gSQLWhere_having_fromQuery("", $where, $having);
		$strSQL = "SELECT DISTINCT st.".AddFieldWrappers($f)." from (".$strSQL.") st";
	}
	else
	{
		$strSQL = SQLQuery::gSQLWhere_having($sqlHead, $fromClause, $gQuery->WhereToSql(), $gQuery->GroupByToSql()
			, $gQuery->Having()->toSql($gQuery), $where, $having);
	}
	
	$strSQL.= " LIMIT ".$numberOfSuggests;

	$rs = db_query($strSQL, $conn);
	
	// fill $response array with the field's suggest value
	while( ($row = db_fetch_numarray($rs)) && count($response) < $numberOfSuggests ) 
	{
		$val = $cipherer->DecryptField($f, $row[0]);
		if(IsGuid($fType))
			$val = substr($val, 1, -1);
		
		// "_" is added to conver number type to string
		if (!preg_match($pattern_clear_tags, $val)) // if not html tags
			$fieldControl->suggestValue("_".$val, $searchFor, $response, $row);
		else
			$response['_'.$val] = '_'.$val;
	}
}
db_close($conn);
ksort($response, SORT_STRING);

foreach($response as $value => $realValue)
{	
	if( count($result) > $numberOfSuggests ) 
		break;

	$strValue = $value; // .net compatibility issue
	$strRealValue = $realValue;
	
	if ($strValue[0] == '_')
	{
		$strValue = substr($strValue, 1);
		$strRealValue = substr($strRealValue, 1);
	}
	
	if (preg_match($pattern_clear_tags, $strValue))
	{
		$filtered_value = preg_replace($pattern_clear_tags, '', $strValue);
		if (stristr($filtered_value, $searchFor) !== false)
		{
			$strValue = $fieldControl->cutHTMLSuggestValue($filtered_value, $searchFor);
			if (preg_match($pattern_get_text, $strRealValue, $match))
				$strRealValue = $match[2];
			else
				$strRealValue = preg_replace($pattern_clear_tags, '', $strRealValue);
		} else
		{
			continue;            
		}
		$strRealValue = $fieldControl->cutHTMLSuggestValue($strRealValue, $searchFor, false);
	}
	$pos = my_stripos($strValue, $searchFor, 0);

	if( $pos === FALSE )
		$result[] = array("value" => runner_htmlspecialchars( $strValue ), "realValue" => $strRealValue);
	else
	{
		$highlightedValue = runner_htmlspecialchars( substr($strValue, 0, $pos) )."<b>".runner_htmlspecialchars( substr($strValue, $pos, strlen($searchFor)) )."</b>"
			.runner_htmlspecialchars( substr($strValue, $pos + strlen($searchFor)) );
			
		$result[] = array("value" => $highlightedValue, "realValue" => $strRealValue);		
	}	
}

$returnJSON = array();
$returnJSON['success'] = true;
$returnJSON['result'] = $result;
echo printJSON($returnJSON);
exit();
?>