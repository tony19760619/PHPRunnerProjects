<?php 
class EditHiddenField extends UserControl
{
	function initUserControl()
	{
	}
	
	function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data)
	{
		//echo "<input type='text' id='".$this->cfield."' name='".$this->cfield."' value=\"HiddenValue:$value\"/>";
                echo $this->getSetting("label").'<input id="'.$this->cfield.'" name="'.$this->cfield.'" class="PLEASE_HIDE_ME" '.$this->inputStyle.' type="text" '
			.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
			.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
			.' '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
			.htmlspecialchars($value).'">';	

	}
	
	function getUserSearchOptions()
	{
		return array(EQUALS, STARTS_WITH, NOT_EMPTY, NOT_EQUALS);		
	}

	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
	}
                
       	function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
	{         
		$this->getPostValueAndType();
		if (FieldSubmitted($this->goodFieldName."_".$this->id)){
			$this->webValue = prepare_for_db($this->field, $this->webValue, $this->webType);
                }else{
			$this->webValue = false;
                }
                	
		if(!($this->webValue===false))
		{
			$avalues[$this->field] = $this->webValue;
		}
	} 	

}
?>