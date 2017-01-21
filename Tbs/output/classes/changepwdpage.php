<?php
include_once(getabspath("classes/runnerpage.php"));
class ChangePasswordPage extends RunnerPage
{
	
	function ChangePasswordPage(&$params)
	{
		parent::RunnerPage($params);
		
		$this->formBricks["header"] = "changeheader";
		$this->formBricks["footer"] = "changebuttons";		
	}
}
?>