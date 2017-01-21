<?php
class ViewHTMLLink extends ViewUserControl
{
	public $HTMLLinkValue = "<a id='TypeFileDownload' target='_blank' href='http://www.google.com'>Google Search</a>";
	
	// Optional. Can be deleted
	function initUserControl()
	{
	}
	
	// Optional. Can be deleted
	function addJSFiles()
	{
	}
	
	public function showDBValue(&$data, $keylink)
	{
		$result = $HTMLLinkValue;
		return $result;
	}
}
?>