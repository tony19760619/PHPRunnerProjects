<?php
include_once(getabspath("classes/runnerpage.php"));
class AddPage extends RunnerPage
{
	
	function AddPage(&$params)
	{
		parent::RunnerPage($params);
		
		$this->formBricks["header"] = "addheader";
		$this->formBricks["footer"] = "addbuttons";		
	}
	
	/**
	 * @param Array keys
	 * @param Boolean forLookup
	 * @param String _table
	 * @param String _field
	 * @param String pageType
	 * @return Array
	 */
	public function GetAddedDataLookupQuery($keys, $forLookup, $_table, $_field, $pageType)
	{	
		$lookupMainSettings = getLookupMainTableSettings($this->tName, $_table, $_field, $pageType);
		if(!$lookupMainSettings)
			return array();

		global $conn;		
		$LookupSQL = "";
		$mainField = $_field;	
		$mainTable = $lookupMainSettings->getTableName();
		$linkFieldName = $lookupMainSettings->getLinkField($mainField);
		$dispfield = $lookupMainSettings->getDisplayField($mainField);
		
		$nLookupType = $lookupMainSettings->getLookupType($mainField);
		if($nLookupType == LT_QUERY)
		{
			if($lookupMainSettings->getCustomDisplay($mainField))
				$this->pSet->getSQLQuery()->AddCustomExpression($dispfield, $this->pSet, $mainTable, $mainField);
			$lookupQueryObj = $this->pSet->getSQLQuery()->CloneObject();
		}
		else
		{
			$LookupSQL = "select ";
			$LookupSQL .= GetFullFieldName($linkFieldName, $this->tName, true);
			if($linkFieldName != $dispfield)
				$LookupSQL .= "," . $this->pSet->getLWDisplayField($mainField, true);
			$LookupSQL.=" from ".AddTableWrappers($this->strOriginalTableName);
		}
			
		$data = 0;
		$lookupIndexes = array("linkFieldIndex" => 0, "displayFieldIndex" => 0);
		if(count($keys))
		{
			$where = KeyWhere($keys);
			if($nLookupType == LT_QUERY)
				$LookupSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $where));
			else 
				$LookupSQL.=" where ".$where;
			$lookupIndexes = GetLookupFieldsIndexes($lookupMainSettings, $mainField);
			LogInfo($LookupSQL);
			if($forLookup)
			{
				$rs=db_query($LookupSQL,$conn);
				$data = $this->cipherer->DecryptFetchedArray($rs);
			}
			else if($LookupSQL)
			{
				$rs = db_query($LookupSQL,$conn);
				$data = db_fetch_numarray($rs);
				$data[$lookupIndexes["linkFieldIndex"]] = $this->cipherer->DecryptField($linkFieldName, $data[$lookupIndexes["linkFieldIndex"]]);
				if($nLookupType == LT_QUERY)
					$data[$lookupIndexes["displayFieldIndex"]] = $this->cipherer->DecryptField($dispfield, $data[$lookupIndexes["displayFieldIndex"]]);		
			}
		}

		return array($data, array("linkField" => $linkFieldName, "displayField" => $dispfield
			, "linkFieldIndex" => $lookupIndexes["linkFieldIndex"], "displayFieldIndex" => $lookupIndexes["displayFieldIndex"]));
	}	
}
?>