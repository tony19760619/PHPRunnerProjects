<?php
class ChangePasswordPage extends RunnerPage
{
	var $pwdStrong = false;
	
	function ChangePasswordPage(&$params = "")
	{
		parent::RunnerPage($params);
		$this->pSet = new ProjectSettings("users", $this->pageType);
		$this->pSetEdit = $this->pSet;
		
		// fill global password settings
		$this->pwdStrong = GetGlobalData("pwdStrong", false);
		if($this->pwdStrong)
		{
			$this->settingsMap["globalSettings"]["pwdLen"] = GetGlobalData("pwdLen", 0);
			$this->settingsMap["globalSettings"]["pwdUnique"] = GetGlobalData("pwdUnique", 0);
			$this->settingsMap["globalSettings"]["pwdDigits"] = GetGlobalData("pwdDigits", 0);
			$this->settingsMap["globalSettings"]["pwdStrong"] = true;	
			$this->settingsMap["globalSettings"]["pwdUpperLower"] = GetGlobalData("pwdUpperLower", false);
		}
		
		$this->formBricks["header"] = "changeheader";
		$this->formBricks["footer"] = "changebuttons";
		$this->assignFormFooterAndHeaderBricks( true );		
	}
	
	/**
	 * Set the connection property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
}
?>