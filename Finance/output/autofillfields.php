<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


$mainTable = postvalue('mainTable');
$pageType = postvalue('pageType');

if (!checkTableName($mainTable))
	exit(0);
require_once("include/".$mainTable."_variables.php");

$gSettings = new ProjectSettings($strTableName, $pageType);

$mainField = postvalue('mainField');
$linkFieldName = postvalue('linkField');

if( $strTableName != "users" )
{
	if(!isLogged())  
		return;	
	
	if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search")) 
		return;
}
else 
{
	$checkResult = true;
	if($mainField=="Username")
		$checkResult=false;

	if($mainField=="Password")
		$checkResult=false;

	if($mainField=="EmailAddress")
		$checkResult=false;

	if($checkResult)
	{
		if(!isLogged()) 
			return;
			
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Edit") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Add") && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
			return;
	}
}
$autoCompleteFields = array();

$separatedSettings = $gSettings->isSeparate( $mainField );
if( $strTableName == "transactions" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "accounts" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "loanaccounts" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "CashDeposit" && $mainField == "ClientNo" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Temp", 'lookupF'=>"ClientNo");
	$lookupTable = "usersLookUp";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "CashDeposit" && $mainField == "AccountNumber" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Balance", 'lookupF'=>"AccountBalance");
	$autoCompleteFields[] = array('masterF'=>"AccountType", 'lookupF'=>"AccountType");
	$lookupTable = "accountsLookUp";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "CashDeposit" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "CashWithdrawl" && $mainField == "ClientNo" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Temp", 'lookupF'=>"ClientNo");
	$lookupTable = "usersLookUp";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "CashWithdrawl" && $mainField == "AccountNumber" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Balance", 'lookupF'=>"AccountBalance");
	$autoCompleteFields[] = array('masterF'=>"AccountType", 'lookupF'=>"AccountType");
	$lookupTable = "accountsLookUp";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "CashWithdrawl" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "LoanCredit" && $mainField == "AccountNumber" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Balance", 'lookupF'=>"AccountBalance");
	$lookupTable = "accountsLookUp";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "LoanCredit" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"LoanCreditPaymentName", 'lookupF'=>"AccountName");
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "LoanPayment" && $mainField == "AccountNumber" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"Balance", 'lookupF'=>"AccountBalance");
	$autoCompleteFields[] = array('masterF'=>"AccountType", 'lookupF'=>"AccountType");
	$lookupTable = "accountsLookUp";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "LoanPayment" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"LoanPaymentName", 'lookupF'=>"AccountName");
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "SavingsStatements" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "LoanStatements" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "BalaceEnquiry" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "NEFTTransfer" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "TransactionLog" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "ClientCashWithdrawl" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "ClientLoanCredit" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$autoCompleteFields[] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "ClientSavingsAccounts" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "ClientLoanAccounts" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "edit" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}
if( $strTableName == "SavingsAccounts" && $mainField == "AccountName" && (!$separatedSettings || $pageType == "add" ) )
{
	$autoCompleteFields[] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$lookupTable = "users";
	$lookupConnection = $cman->byTable( $lookupTable );
	if( !$lookupConnection )
	{
		$connId = $gSettings->getNotProjectLookupTableConnId( $mainField );
		$lookupConnection = strlen( $connId ) ? $cman->byId( $connId ) : $cman->getDefault();
	}
}

$nLookupType = $gSettings->getLookupType($mainField);
$cipherer = new RunnerCipherer($nLookupType == LT_QUERY ? $lookupTable : $strTableName);
$linkFieldVal = postvalue('linkFieldVal');
$linkFieldVal = $cipherer->MakeDBValue($nLookupType == LT_QUERY ? $linkFieldName : $mainField, $linkFieldVal, "", true);
$strLookupWhere = GetLWWhere($mainField, $pageType, $strTableName);

if($nLookupType == LT_QUERY)
{
	$lookupSettings = new ProjectSettings($lookupTable, $pageType);
	$lookupQueryObj = $lookupSettings->getSQLQuery();
	$lookupQueryObj->ReplaceFieldsWithDummies($lookupSettings->getBinaryFieldsIndices());
	$strWhere = whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), 
		RunnerPage::_getFieldSQLDecrypt( $linkFieldName, $lookupConnection, $lookupSettings, $cipherer ).'='.$linkFieldVal);
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL = $lookupQueryObj->toSql(whereAdd($lookupQueryObj->m_where->toSql($lookupQueryObj), $strWhere));
}
else
{
	$strSQL = 'SELECT ';
	for($i=0; $i<count($autoCompleteFields); $i++)
	{
		$strSQL .= $lookupConnection->addFieldWrappers( $autoCompleteFields[$i]['lookupF'] ).', ';
	}
	$strSQL = substr($strSQL, 0, strlen($strSQL)-2);
	
	$strSQL .= " FROM ".$lookupConnection->addTableWrappers($lookupTable);
	$linkFieldName = $cipherer->GetLookupFieldName( $lookupConnection->addFieldWrappers($linkFieldName), $mainField );
	$strWhere = $linkFieldName.'='.$linkFieldVal;
	$strWhere = whereAdd($strWhere, $strLookupWhere);
	$strSQL .= " WHERE ".$strWhere;
}

$row = $lookupConnection->query( $strSQL )->fetchAssoc();
if($nLookupType == LT_QUERY)
	$row =  $cipherer->DecryptFetchedArray( $row );

$lookupConnection->close();	
	
if( !$row )
	$row = array($mainField=>'');
	
echo printJSON(array('success'=>true, 'data'=>$row));
exit();
?>