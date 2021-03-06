<?php
include_once(getabspath('classes/runnerpage.php'));
require_once(getabspath("classes/cipherer.php"));
/**
 * Class for login page 
 *
 */
class LoginPage extends RunnerPage 
{
	var $auditObj = null;

	var $fromFacebook = false;
	var $ldap_domainName = null;
	var $ldap_serverIP = null;
	var $message = "";
	
	function LoginPage(&$params) 
	{
		// call parent constructor
		parent::RunnerPage($params);
		
		$this->auditObj = GetAuditObject();
		
		$this->formBricks["header"] = "loginheader";
		$this->formBricks["footer"] = "loginbuttons";
	}
	
		
	/**
	* Login method
	*
	*/
	function LogIn($pUsername,$pPassword){
				//  username and password are stored in the database
		global $conn, $cUserNameFieldType, $cPasswordFieldType, $cUserNameField, $cPasswordField, $cDisplayNameField;
		$logged = false;
		$strUsername = (string)$pUsername;
		$strPassword = (string)$pPassword;
		$cipherer = new RunnerCipherer("user");
			
		
		$sUsername = $strUsername;
		$sPassword = $strPassword;
		

		if($cipherer->isFieldEncrypted($cUserNameField))
			$strUsername = $cipherer->MakeDBValue($cUserNameField,$strUsername,"","",true);
		else
		{
			if(NeedQuotes($cUserNameFieldType))
				$strUsername = db_prepare_string($strUsername);
			else
				$strUsername = (0+$strUsername);
		}
		
		if($cipherer->isFieldEncrypted($cPasswordField))
			$strPassword = $cipherer->MakeDBValue($cPasswordField,$strPassword,"","",true);		
		else
		{
			if(NeedQuotes($cPasswordFieldType))
				$strPassword = db_prepare_string($strPassword);
			else
				$strPassword = (0+$strPassword);
		}
		$fieldList = "";
		$lSet = new ProjectSettings("user", PAGE_LIST);
		if($lSet->GetTableData(".sqlquery"))
			$fieldList = $lSet->GetTableData(".sqlquery")->toSql();
		if($fieldList)
		{
			if(!$this->pSet->isCaseInsensitiveUsername()) {
				$where = GetFullFieldName($cUserNameField,"user",false).
				   "=".$strUsername." and ".GetFullFieldName($cPasswordField,"user",false)."=".$strPassword;
   			} else {
				$where = db_upper(getFullFieldName($cUserNameField,"user",false)).
					   "=".$this->pSet->getCaseSensitiveUsername($strUsername)." and ".GetFullFieldName($cPasswordField,"user",false).
					   "=".$strPassword;
			}		   
			$tempSQLQuery = $lSet->GetTableData(".sqlquery");
			$tempSQLQuery->addWhere($where);
							$tempSQLQuery->addWhere("`Active`=1");
			$strSQL = $tempSQLQuery->toSql();		   
		}
		else
		{
			$strSQL = "select * from `user` where ".AddFieldWrappers($cUserNameField)."=".$strUsername." and ".AddFieldWrappers($cPasswordField)."=".$strPassword;
							$strSQL.=" and `Active`=1";
		}
		
	
		$rs = db_query($strSQL,$conn);
	 	$data = $cipherer->DecryptFetchedArray($rs);
		if($data){
			if($this->pSet->getCaseSensitiveUsername(@$data[$cUserNameField])==$this->pSet->getCaseSensitiveUsername($sUsername) && @$data[$cPasswordField]==$sPassword){
				$logged=true;
				$pDisplayUsername = $data[$cDisplayNameField]!='' ? $data[$cDisplayNameField] : $sUsername;
			}
		}

		if($logged && $this->isCaptchaOk)
		{
			DoLogin(false, $pUsername, $pDisplayUsername, "", ACCESS_LEVEL_USER, $pPassword);
			SetAuthSessionData($pUsername, $data, $this->fromFacebook, $pPassword);
			return true;
		}
		else {
			if($this->auditObj)
			{
				$this->auditObj->LogLoginFailed($pUsername);
				$this->auditObj->LoginUnsuccessful($pUsername);
			}
			return false;
		}
	
	}
	
	/**
	 * Logout
	 *
	 */
	function Logout() {
		if($this->auditObj)
			$this->auditObj->LogLogout();
		session_unset();
		setcookie("username","",time()-365*1440*60);
		setcookie("password","",time()-365*1440*60);
			}
	
	function LogoutAndRedirect($url = "") {
		$this->Logout();
		
		if ($url == "") {
			$url = GetTableLink("menu");
		}
		header("Location: ".$url);
		exit();
	}
}

?>