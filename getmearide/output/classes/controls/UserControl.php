<?php
class UserControl extends EditControl
{
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildControlEnd($validate, $mode);
	}
	
	public function buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
	}
	
	public function initUserControl()
	{		
	}
	
	function getUserSearchOptions()
	{
		return array();		
	}
	
	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */		
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions($this->getUserSearchOptions(), $selOpt, $not, $both);		
	}
	
	function init()
	{
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
	{
		$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
		$tName = $dashFields[$field][0]["table"];
		$field = $dashFields[$field][0]["field"];
	}
				if($tName=="findaride" && $field=="DisplayRoute" && $this->pageObject->pageType=="edit")
	{
		echo "<a target='_blank' href='http://www.google.com'>Show Route On Google Maps</a>";
;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
	{
		$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
		$tName = $dashFields[$field][0]["table"];
		$field = $dashFields[$field][0]["field"];
	}
				if($tName=="findaride" && $field=="DisplayRoute" && $this->pageObject->pageType=="add")
	{
		echo "<a target='_blank' href='http://www.google.com'>Show Route On Google Maps</a>";
;
		return;
	}	
	}
}
?>