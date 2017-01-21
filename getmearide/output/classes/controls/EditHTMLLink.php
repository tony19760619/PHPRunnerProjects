<?php 
class EditHTMLLink extends UserControl
{
        public $HTMLLinkValue = "<a id='TypeFileDownload' target='_blank' href='http://www.google.com'>Google Search</a>";

	function initUserControl()
	{
	}
	
	function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data)
	{
		echo $this->HTMLLinkValue;	
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
}
?>