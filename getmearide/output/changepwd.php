<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");

if(!isLogged() || @$_SESSION["UserID"]=="<Guest>")
{ 
	Security::saveRedirectURL();
	HeaderRedirect("login", "", "message=expired"); 
	return;
}

require_once('include/xtempl.php');
require_once('classes/changepwdpage.php');
require_once(getabspath("classes/cipherer.php"));

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$message = "";

$changePwdFields = array('oldpass', 'newpass', 'confirm');

$cipherer = RunnerCipherer::getForLogin();




$layout = new TLayout("changepwd2", "OfficeOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["changepwd"] = array();
$layout->container_properties["changepwd"] = array(  );
$layout->containers["changepwd"][] = array("name"=>"changeheader", 
	"block"=>"changeheader", "substyle"=>2  );

$layout->containers["changepwd"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["changepwd"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"changefields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"changebuttons", 
	"block"=>"changebuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["changepwd"] = "1";

$layout->blocks["top"][] = "changepwd";
$page_layouts["changepwd"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");



//array of params for classes
$params = array("pageType" => PAGE_CHANGEPASS, "id" =>$id);
$params['xt'] = &$xt;
$params['tName'] = NOT_TABLE_BASED_TNAME;
$params['templatefile'] = "changepwd.htm";
$params['needSearchClauseObj'] = false;
$pageObject = new ChangePasswordPage($params);
$pageObject->init();

$onFly = postvalue("onFly");

$referer = @$_SERVER["HTTP_REFERER"] != "" 
		&& strpos($_SERVER["HTTP_REFERER"], GetTableLink("changepwd")) != strlen($_SERVER["HTTP_REFERER"]) - strlen(GetTableLink("changepwd"))
		? $_SERVER["HTTP_REFERER"] : ""; 

if(!isset($_SESSION["changepwd_referer"]))
	$_SESSION["changepwd_referer"] = $referer != "" ? $referer : GetTableLink("menu");
else if($referer != "")
	$_SESSION["changepwd_referer"] = $referer;

$auditObj = GetAuditObject();

//	Before Process event
if($globalEvents->exists("BeforeProcessChangePwd"))
	$globalEvents->BeforeProcessChangePwd( $pageObject );

if (@$_POST["btnSubmit"] == "Change")
{	
	$xt->assign( "backlink_attrs", "href=\"". runner_htmlspecialchars( $_SESSION["changepwd_referer"] ) . "\"" );
	
	$filename_values = array();
	$blobfields = array();
	$values = array();
	$strTableName = $cLoginTable;
	foreach($changePwdFields as $fName)
	{
		$fControl = $pageObject->getControl($fName, $id);
		$fControl->readWebValue($values, $blobfields, NULL, NULL, $filename_values);
	}
		
	
	$value = @$_SESSION["UserID"];
	if($cipherer->isFieldEncrypted($cUserNameField))
		$value = $cipherer->MakeDBValue($cUserNameField, $value, "", true);
	else
	{
		if(NeedQuotes($cUserNameFieldType))
			$value = $pageObject->connection->prepareString($value);
		else
			$value = (0 + $value);
	}
	
	$passvalue = $values["newpass"];
	
	if($cipherer->isFieldEncrypted($cPasswordField))
		$passvalue = $cipherer->MakeDBValue($cPasswordField, $passvalue);
	else
	{
		if(NeedQuotes($cPasswordFieldType))
			$passvalue = $pageObject->connection->prepareString($passvalue);
		else
			$passvalue = (0 + $passvalue);
	}
	
	$sWhere = " where " . $pageObject->getFieldSQLDecrypt( $cUserNameField ) . "=" . $value;
	$strSQL = "select " . $pageObject->getFieldSQLDecrypt( $cPasswordField );
	
	$strSQL .= " as ".$pageObject->connection->addFieldWrappers($cPasswordField)
			." from ".$pageObject->connection->addTableWrappers($cLoginTable).$sWhere;
			
	$qResult = $pageObject->connection->query( $strSQL );	
	$row = $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	if($row && ($values['oldpass'] == $row[$cPasswordField]))
	{
		if($pageObject->pwdStrong && !checkpassword($values['newpass']))
		{
			$msg = "";
			$pwdLen = GetGlobalData("pwdLen", 0);
			if($pwdLen)
			{
				$fmt = "Password must be at least %% characters length.";
				$fmt = str_replace("%%", "".$pwdLen, $fmt);
				$msg.= "<br>".$fmt;
			}
			$pwdUnique = GetGlobalData("pwdUnique", 0);
			if($pwdUnique)
			{
				$fmt = "Password must contain %% unique characters.";
				$fmt = str_replace("%%", "".$pwdUnique, $fmt);
				$msg.= "<br>".$fmt;
			}
			$pwdDigits = GetGlobalData("pwdDigits", 0);
			if($pwdDigits)
			{
				$fmt = "Password must contain %% digits or symbols.";
				$fmt = str_replace("%%", "".$pwdDigits, $fmt);
				$msg.= "<br>".$fmt;
			}
			if(GetGlobalData("pwdUpperLower", false))
			{
				$fmt = "Password must contain letters in upper and lower case.";
				$msg.= "<br>".$fmt;
			}
			
			if($msg)
				$msg = substr($msg, 4);
			
			$message = $msg;
			$pageObject->jsSettings['tableSettings'][$strTableName]['msg_passwordError'] = $msg;
			$allow_registration = false;
		}
		else
		{
			$retval = true;
			if($globalEvents->exists("BeforeChangePassword"))
				$retval = $globalEvents->BeforeChangePassword($values["oldpass"], $values["newpass"], $pageObject);
			if($retval)
			{
				$strSQL = "update ".$pageObject->connection->addTableWrappers($cLoginTable)
						 ." set ".$pageObject->connection->addFieldWrappers($cPasswordField)."=".$passvalue.$sWhere;
					
				$pageObject->connection->exec( $strSQL );

				if($auditObj)
					$auditObj->LogChPassword();
				if($globalEvents->exists("AfterChangePassword"))
					$globalEvents->AfterChangePassword($values["oldpass"], $values["newpass"], $pageObject);
				
				


$layout = new TLayout("changepwd_success2", "OfficeOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["changepwd"] = array();
$layout->container_properties["changepwd"] = array(  );
$layout->containers["changepwd"][] = array("name"=>"changeheader", 
	"block"=>"changeheader", "substyle"=>2  );

$layout->containers["changepwd"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"changepwd_message", 
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "fields";


$layout->containers["changepwd"][] = array("name"=>"changesuccessbutton", 
	"block"=>"", "substyle"=>2  );

$layout->skins["changepwd"] = "1";

$layout->blocks["top"][] = "changepwd";
$page_layouts["changepwd_success"] = $layout;

$layout->skinsparams = array();
$layout->skinsparams["empty"] = array("button"=>"button2");
$layout->skinsparams["menu"] = array("button"=>"button1");
$layout->skinsparams["hmenu"] = array("button"=>"button1");
$layout->skinsparams["undermenu"] = array("button"=>"button1");
$layout->skinsparams["fields"] = array("button"=>"button1");
$layout->skinsparams["form"] = array("button"=>"button1");
$layout->skinsparams["1"] = array("button"=>"button1");
$layout->skinsparams["2"] = array("button"=>"button1");
$layout->skinsparams["3"] = array("button"=>"button1");


				
				$pageObject->updatePageLayoutAndCSS('', 'success');
				
				$xt->assign("body", true);
				return $pageObject->display(GetTemplateName("", "changepwd_success")); // return $xt->display for .net compatibility
			}
		}
	}
	else
	{
		$message = "Invalid password";
	}
}
else 
{
	$xt->assign("backlink_attrs", "href=\"". runner_htmlspecialchars( $_SESSION["changepwd_referer"] ) . "\"");
}	
	
if($message)
{
	$xt->assign("message", "<div class='message rnr-error'>".$message."</div>");
	$xt->assign("message_block", true);
}

foreach($changePwdFields as $fName)
{
	$parameters = array();
	$parameters["id"] = $id;
	$parameters["mode"] = "add";
	$parameters["field"] = $fName;
	$parameters["format"] = "Password";
	$parameters["pageObj"] = $pageObject;
	$parameters["suggest"] = true;
	$parameters["validate"] = Array('basicValidate' => Array('IsRequired')); 
	
	$parameters["extraParams"] = array();
	$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
			
	
	$controls = array('controls'=>array());	
	$controls["controls"]['id'] = $id;
	$controls["controls"]['mode'] = "add";
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['fieldName'] = $fName;
	$controls["controls"]['suggest'] = $parameters["suggest"];
	
	$xt->assign_function( "xt_buildeditcontrol", $parameters );
	$xt->assign($fName."_label", true);
	
	if(isEnableSection508())
		$xt->assign_section($fName."_label", "<label for=\"value_".$fName."_".$id."\">", "</label>");
	
	$xt->assign($fName."_block", true);
			
	$pageObject->fillControlsMap($controls);
}

$xt->assign("submit_attrs", "id=\"saveButton".$id."\"");

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);
$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->addButtonHandlers();

$pageObject->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $pageObject );

$xt->assignbyref("body", $pageObject->body);

if($globalEvents->exists("BeforeShowChangePwd"))
	$globalEvents->BeforeShowChangePwd($xt,$pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>