<?php
include_once(getabspath("classes/runnerpage.php"));
class RemindPasswordPage extends RunnerPage
{
	
	function RemindPasswordPage(&$params)
	{
		parent::RunnerPage($params);
		
		$this->formBricks["header"] = "remindheader";
		$this->formBricks["footer"] = "remindbuttons";		
	}
}
?>