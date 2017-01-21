<?php
class EditControlsContainer
{
	public $controls = array();
	public $jsSettings = array();
	public $pSetEdit = null;
	public $pageType = "";
	public $cipherer = null;
	public $tName = "";
	
	public $pageObject = null;
	
	public $pageAddLikeInline = false;
	public $pageEditLikeInline = false;
	public $tableBasedSearchPanelAdded = false;
	
	/**
	 * Associative array used like a container to exchange some data between controls on one page
	 * @var {array}
	 */
	public $globalVals = array();
	
	/**
	* The indicator showing if there is the Search panel on the page
	* @var {boolean}
	*/
	public $searchPanelActivated = false;
	
	public function EditControlsContainer($pageObject, $pSetEdit, $pageType, $cipherer = "")
	{
		if($pageObject != null)
		{
			$this->pageObject = $pageObject;
			$this->pageAddLikeInline = $pageObject->pageAddLikeInline;
			$this->pageEditLikeInline = $pageObject->pageEditLikeInline;
		}
		else 
		{
			$this->tName = $pSetEdit->_table;
			$this->cipherer	= $cipherer;
		}

		$this->pSetEdit = $pSetEdit;
		$this->pageType = $pageType;		
		$this->searchPanelActivated = $pageType == PAGE_LIST;
	}
	
	function addControlsJSAndCSS()
	{
		$pageTypes = array();
		switch ($this->pageType)
		{
			case PAGE_ADD:
				$pageTypeStr = "Add";
				break;
			case PAGE_EDIT:
				$pageTypeStr = "Edit";
				break;
			case PAGE_VIEW:	
			case PAGE_LIST:
			case PAGE_SEARCH:
				$pageTypeStr = "List";
				break;
			case PAGE_REGISTER:
				$pageTypeStr = "RegisterOrSearch";
				break;
			default:
				$pageTypeStr = "";
		}
		
		if($pageTypeStr == "" && !$this->searchPanelActivated) 
			return;

		if($pageTypeStr != "" && $this->pageType != PAGE_SEARCH)
		{
			$getEditFieldsFunc = "get".(($this->pageAddLikeInline || $this->pageEditLikeInline) ? "Inline" : "").$pageTypeStr."Fields";
			if($this->pageAddLikeInline || $this->pageEditLikeInline)
				$appearOnPageFunc = "appearOnInline".$pageTypeStr;
			else 
				$appearOnPageFunc = "appearOn".$pageTypeStr."Page";
		}
		switch($this->pageType)
		{
			case PAGE_REGISTER:
				$fields = $this->pSetEdit->getFieldsForRegister();
				break;
			case PAGE_SEARCH:
				$fields = $this->pSetEdit->getAdvSearchFields();
				break;
			default:
				$fields = array();
				if($getEditFieldsFunc)
					$fields = $this->pSetEdit->$getEditFieldsFunc();	
		}
		
		// Addign fields that aren't appear at list page, but appear on search panel  
		$searchFields = array();
		if($this->searchPanelActivated)
		{
			$searchFields = $this->pSetEdit->getPanelSearchFields();
			$searchFields = array_merge($searchFields, $this->pSetEdit->getAllSearchFields());
			$searchFields = array_unique($searchFields);
			$fields = array_merge($searchFields, $fields);
			$fields = array_unique($fields);			
		}
		for($i = 0; $i < count($fields); $i++)
		{
			$appear = false;
			if($this->pageType == PAGE_REGISTER || $this->pageType == PAGE_SEARCH || in_array($fields[$i], $searchFields))
				$appear = true;
			else 
				$appear = $this->pSetEdit->$appearOnPageFunc($fields[$i]);
			if($appear)
			{
				$this->getControl($fields[$i])->addJSFiles();
				$this->getControl($fields[$i])->addCSSFiles();
			}
		}
	}
	
	function getControl($field, $id = "")
	{
		// if conrol does not created previously  
		if(!array_key_exists($field, $this->controls))
		{
			include_once(getabspath("classes/controls/Control.php"));
			$userControl = false;
			$cTypes = new ControlTypes();
			$editFormat = $this->pSetEdit->getEditFormat($field);
			if($editFormat == EDIT_FORMAT_TEXT_FIELD && IsDateFieldType($this->pSetEdit->getFieldType($field)))
				$editFormat = EDIT_FORMAT_DATE;
			if($this->pageType == PAGE_SEARCH || $this->pageType == PAGE_LIST)
			{
				// Text field may be Lookup field on some page
				if($editFormat == EDIT_FORMAT_TEXT_FIELD 
					&& $this->pSetEdit->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD) != "")
				{
					$localPSet = new ProjectSettings($this->pSetEdit->_table, 
						$this->pSetEdit->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD));
					if($localPSet->getLWLinkField($field) != $localPSet->getLWDisplayField($field))
						$className = "LookupTextField";
					else 
						$className = $cTypes->forSearch[$editFormat];
				}
				else
					$className = $cTypes->forSearch[$editFormat];
			}
			else
				$className = $cTypes->forEdit[$editFormat];
				
			if(!$className)
			{
				if($editFormat != "")
				{
					$className = "Edit".$editFormat;
					$userControl = true;
					include_once(getabspath("classes/controls/UserControl.php"));
					if(!is_null($this->pageObject))
						$this->pageObject->AddJSFile("include/runnerJS/controls/".$className.".js", "include/runnerJS/Control.js");
				}
				else
					$className = $cTypes->forEdit[EDIT_FORMAT_TEXT_FIELD];
			}
			else if($className == $cTypes->forEdit[EDIT_FORMAT_FILE] && $this->pSetEdit->isCompatibilityMode($field))
				$className = "FileFieldSingle";
			
			$this->controls[$field] = createControlClass($className, $field, $this->pageObject != null ? $this->pageObject : $this, $id);
			$this->controls[$field]->container = $this;
			if($userControl)
			{
				$this->controls[$field]->format = $className;
				$this->controls[$field]->initUserControl();
			}
		}
		if($id !== "")
			$this->controls[$field]->setID($id);
		return $this->controls[$field];
	}
	
	function isSystemControl($className)
	{
		include_once(getabspath("classes/controls/Control.php"));
		$cTypes = new ControlTypes();
		if($this->pageType == PAGE_SEARCH || $this->pageType == PAGE_LIST)
			return isset($cTypes->forSearch[$className]);
		else
			return isset($cTypes->forEdit[$className]);
	}
	
	function isPageTableBased()
	{
		if($this->pageType == PAGE_MENU || $this->pageType == PAGE_LOGIN || $this->pageType == PAGE_REMIND || $this->pageType == PAGE_CHANGEPASS)
		{
			return false;
		}		
		return true;
	}
}
?>