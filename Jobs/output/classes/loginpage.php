<?php
require_once(getabspath("classes/cipherer.php"));
/**
 * Class for login page 
 *
 */
class LoginPage extends RunnerPage 
{
	public $message = "";
	
	public $auditObj = null;
		
	public $fromFacebook = false;
		
		
	/**
	 * @constructor
	 */
	function LoginPage(&$params) 
	{
		// call parent constructor
		parent::RunnerPage($params);
		
				$this->pSet = new ProjectSettings("jobsusers", $this->pageType);
		$this->pSetEdit = $this->pSet;
		$this->pSetSearch = new ProjectSettings($this->tName, PAGE_SEARCH); 
		$this->auditObj = GetAuditObject();
		$this->formBricks["header"] = "loginheader";
		$this->formBricks["footer"] = "loginbuttons";
		$this->assignFormFooterAndHeaderBricks( true );
	}		
	
	/**
	 * Set the 'connection' property
	 */
	protected function setTableConnection()
	{
		global $cman;
		$this->connection = $cman->getForLogin();		
	}	

	/**
	 * Set the 'cipherer' property
	 */
	protected function assignCipherer()
	{
		$this->cipherer = RunnerCipherer::getForLogin();
	}
	
	/**
	 * Login method
	 * @param String pUsername
	 * @param String pPassword
	 */
	function LogIn($pUsername, $pPassword)
	{
		// username and password are stored in the database
		global $cUserNameFieldType, $cPasswordFieldType, $cUserNameField, $cPasswordField, $cDisplayNameField;
		
		$logged = false;
		$strUsername = (string)$pUsername;
		$strPassword = (string)$pPassword;
		
		$loginSet = ProjectSettings::getForLogin();
		$cipherer = RunnerCipherer::getForLogin( $loginSet );			
	
		$sUsername = $strUsername;
		$sPassword = $strPassword;
		
		if( $cipherer->isFieldEncrypted($cUserNameField) )
			$strUsername = $cipherer->MakeDBValue($cUserNameField, $strUsername, "", true);
		else
		{
			if( NeedQuotes($cUserNameFieldType) )
				$strUsername = $this->connection->prepareString( $strUsername );
			else
				$strUsername = 0 + $strUsername;
		}
		
		if( $cipherer->isFieldEncrypted($cPasswordField) )
			$strPassword = $cipherer->MakeDBValue($cPasswordField, $strPassword, "", true);		
		else
		{
			if( NeedQuotes($cPasswordFieldType) )
				$strPassword = $this->connection->prepareString( $strPassword );
			else
				$strPassword = 0 + $strPassword;
		}

		if( $loginSet )
		{
			if( !$this->pSet->isCaseInsensitiveUsername() ) 
			{
				$where = $this->getFieldSQLDecrypt($cUserNameField) . 
					"=".$strUsername." and ".$this->getFieldSQLDecrypt($cPasswordField)."=".$strPassword;
 			} 
			else 
			{
				$where = $this->connection->upper( $this->getFieldSQLDecrypt($cUserNameField) ).
					"=".$this->pSet->getCaseSensitiveUsername($strUsername)." and ".$this->getFieldSQLDecrypt($cPasswordField).
					"=".$strPassword;
			}		 
			$tempSQLQuery = $loginSet->GetTableData(".sqlquery");
			$tempSQLQuery->addWhere( $where );
				$strSQL = $tempSQLQuery->toSql();		 
		}
		else
		{
			$strSQL = "select * from ".$this->connection->addTableWrappers("jobsusers")
				." where ".$this->connection->addFieldWrappers($cUserNameField)."=".$strUsername
				." and ".$this->connection->addFieldWrappers($cPasswordField)."=".$strPassword;
			}
		
	 	$data = $cipherer->DecryptFetchedArray( $this->connection->query( $strSQL )->fetchAssoc() );
		if( $data )
		{
			if( $this->pSet->getCaseSensitiveUsername( @$data[ $cUserNameField ]) == $this->pSet->getCaseSensitiveUsername($sUsername) && @$data[ $cPasswordField ] == $sPassword )
			{
				$logged = true;
				$pDisplayUsername = $data[ $cDisplayNameField ] != '' ? $data[ $cDisplayNameField ] : $sUsername;
			}
		}

		if( $logged && $this->isCaptchaOk )
		{
			DoLogin(false, $pUsername, $pDisplayUsername, "", ACCESS_LEVEL_USER, $pPassword, $this);
			SetAuthSessionData($pUsername, $data, $this->fromFacebook, $pPassword, $this);
			return true;
		}

		if( $this->auditObj )
		{
			$this->auditObj->LogLoginFailed($pUsername);
			$this->auditObj->LoginUnsuccessful($pUsername);
		}
		return false;		
	}
	
	/**
	 * Logout
	 *
	 */
	function Logout($redirectToLogin = false, $message = "") 
	{
		if($this->auditObj)
			$this->auditObj->LogLogout();
			
		Security::clearSecuritySession();

		
		// redirect to login page and show message
		if ($redirectToLogin) 
		{
			$url = GetTableLink("login");
			if (!empty($message))
				$url .= "?cmessage=".$message;
			header("Location: ".$url);
			exit();
		}
	}
	
	/**
	 * @param String url
	 */
	function LogoutAndRedirect($url = "") 
	{
		$this->Logout();
		
		if ($url == "") 
			$url = GetTableLink("menu");
		
		header("Location: ".$url);
		exit();
	}
	

	/**
	 * @param String messageText
	 */
	public function setDatabaseError( $messageText )
	{
		global $message;
		$message = $messageText;
	}
}
?>