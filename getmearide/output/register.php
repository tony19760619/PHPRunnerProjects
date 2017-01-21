<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/users_variables.php");
require_once(getabspath("classes/cipherer.php"));
require_once("classes/registerpage.php");


$regCipherer = new RunnerCipherer($strTableName);

$registered=false;
//event for onsubmit

$allow_registration = true;
$strUsername = "";
$strPassword = "";
$strEmail = "";
$sentMailResults = array();
$values = array();
$keys = array();
$id = postvalue("id") != "" ? postvalue("id") : 1;
require_once('include/xtempl.php');

$isNeedSettings = true;
$xt = new Xtempl();




$layout = new TLayout("register2", "OfficeOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["register"] = array();
$layout->container_properties["register"] = array(  );
$layout->containers["register"][] = array("name"=>"regheader", 
	"block"=>"regheader", "substyle"=>2  );

$layout->containers["register"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["register"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"regfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"regbuttons", 
	"block"=>"regbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["register"] = "1";

$layout->blocks["top"][] = "register";
$page_layouts["register"] = $layout;

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






$layout = new TLayout("register_success2", "OfficeOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["register"] = array();
$layout->container_properties["register"] = array(  );
$layout->containers["register"][] = array("name"=>"regheader", 
	"block"=>"regheader", "substyle"=>2  );

$layout->containers["register"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"activation", 
	"block"=>"activation_block", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"registered", 
	"block"=>"registered_block", "substyle"=>1  );

$layout->skins["fields"] = "fields";


$layout->skins["register"] = "1";

$layout->blocks["top"][] = "register";
$page_layouts["register_success"] = $layout;

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



$params = array();
$params["id"] = $id;
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params["pageType"] = PAGE_REGISTER;
$params["templatefile"] = "register.htm";
$params["needSearchClauseObj"] = false;
$params["captchaValue"] = postvalue("value_captcha_" . $id);

$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRegister"');
$xt->eventsObject = &$globalEvents;

$pageObject = new RegisterPage($params);
$pageObject->init();

//	Before Process event
if($globalEvents->exists("BeforeProcessRegister"))
	$globalEvents->BeforeProcessRegister( $pageObject );
//Send activation link to user's email

$includes = GetBaseScriptsForPage(false);
	
if(@$_GET["a"]=="activate")
{
	$username = base64_decode(@$_GET["u"]);
	$code = @$_GET["code"];
	if($regCipherer->isFieldEncrypted("Username"))
		$strUsername = $regCipherer->MakeDBValue("Username", $username, "", true);
	else
		$strUsername = make_db_value("Username",$username);

	$sql = "select ".$pageObject->getFieldSQLDecrypt("Password")
		." from ". $pageObject->connection->addTableWrappers( "users" ) 
		." where ".$pageObject->getFieldSQLDecrypt("Username") . "=" . $strUsername;
	
	$qResult = $pageObject->connection->query( $sql );
	$verified = false;
	if(!$qResult)
	{
		echo "Invalid validation code.";
		return;
	}
	$data = $qResult->fetchNumeric();
	if(!$data)
	{
		echo "Invalid validation code.";
		return;
	}
	$dbPassword = $regCipherer->DecryptField( "Password", $data[0] );
	$usercode = $username.md5($dbPassword);
	if($code != md5($usercode))
	{
		echo "Invalid validation code.";
		return;
	}
		
	$sql = "update ". $pageObject->connection->addTableWrappers( "users" )
		." set ". $pageObject->connection->addFieldWrappers( "Active" )."=1 "
		." where " . $pageObject->getFieldSQLDecrypt("Username" ) . "=" . $strUsername;
	$pageObject->connection->exec( $sql );

	$pageObject->updatePageLayoutAndCSS('', 'success');
	
	$pageObject->body["begin"].= "<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
	<input type=\"Hidden\" name=\"username\" value=\"".runner_htmlspecialchars($username)."\">";
	$pageObject->body["begin"].= "<input type=\"Hidden\" name=\"password\" value=\"".runner_htmlspecialchars($data["Password"])."\">";
	$pageObject->body["begin"].= "</form>";
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("registered_block",true);
	$xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");	
	return $pageObject->display(GetTemplateName("", "register_success")); // return $pageObject->display for .net compatibility
}

	
if(@$_POST["btnSubmit"] == "Register")
{

	if ( !$pageObject->checkCaptcha() )
		$allow_registration = false;

	$filename_values = array();
	$blobfields = array();

//	processing Username
	$control_Username = $pageObject->getControl("Username", $id);
	$control_Username->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Password
	$control_Password = $pageObject->getControl("Password", $id);
	$control_Password->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Fullname
	$control_Fullname = $pageObject->getControl("Fullname", $id);
	$control_Fullname->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing DateOfBirth
	$control_DateOfBirth = $pageObject->getControl("DateOfBirth", $id);
	$control_DateOfBirth->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Email
	$control_Email = $pageObject->getControl("Email", $id);
	$control_Email->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing UserType
	$control_UserType = $pageObject->getControl("UserType", $id);
	$control_UserType->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Mobile
	$control_Mobile = $pageObject->getControl("Mobile", $id);
	$control_Mobile->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Address
	$control_Address = $pageObject->getControl("Address", $id);
	$control_Address->readWebValue($values, $blobfields, NULL, NULL, $filename_values);


	$strUsername = $values["Username"];
	$strPassword = $values["Password"];
	$strEmail = $values["Email"];

	if($regCipherer->isFieldEncrypted("Username"))
		$sUsername = $regCipherer->MakeDBValue("Username", $strUsername, "", true);	
	else 
		$sUsername = add_db_quotes("Username",$strUsername);
	
	if($regCipherer->isFieldEncrypted("Email"))
		$sEmail = $regCipherer->MakeDBValue("Email", $strEmail, "", true);	
	else 
		$sEmail = add_db_quotes("Email",$strEmail);

//	add filenames to values
	foreach($filename_values as $key=>$value)
		$values[$key] = $value;

//	check if entered username already exists
	if(!strlen($strUsername))
	{
		$pageObject->jsSettings['tableSettings'][$strTableName]['msg_userError'] = "Username can not be empty.";
		$allow_registration = false;
	}	
	else
	{
		$strSQL = "select count(*) from ". $pageObject->connection->addTableWrappers( "users" ) 
			. " where " . 
			$pageObject->getFieldSQLDecrypt("Username") . "=" . $sUsername;
		
		$data = $pageObject->connection->query( $strSQL )->fetchNumeric();
		if( $data[0] > 0 )
		{
			$pageObject->jsSettings['tableSettings'][$strTableName]['msg_userError'] = "Username"." <i>".$strUsername."</i> "."already exists. Choose another username.";
			$allow_registration = false;
		}
	}


	$values["Active"] = 0;
	
	if($pageObject->pwdStrong)
	{
		if(!checkpassword($values["Password"]))
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
			$pageObject->jsSettings['tableSettings'][$strTableName]['msg_passwordError'] = $msg;
			$allow_registration = false;
		}
	}
	
	$retval = true;
	
	if( $allow_registration )
	{
		if($globalEvents->exists("BeforeRegister"))
			$retval = $globalEvents->BeforeRegister($values,$pageObject->message, $pageObject);
	}
	else
		$retval = false;
	
	if($retval)
	{
		$retval = DoInsertRecord("users", $values, $blobfields, $pageObject);
	}
	
	if($retval)
	{
		if($globalEvents->exists("AfterSuccessfulRegistration"))
			$globalEvents->AfterSuccessfulRegistration($values, $pageObject);
		$url = GetSiteUrl();
		$url.=$_SERVER["SCRIPT_NAME"];
//	send email to user
		$message = "You have registered as a user at"." ".$url."\r\n\r\n";
		$message.= "Click this link to confirm your account and finish the registration".":\r\n";
		$message.= $url."?a=activate&u=".rawurlencode(base64_encode($values["Username"]))."&code=";
		$message.= rawurlencode(md5($values["Username"].md5($values["Password"])));
		$message.= "\r\n("."If you are unable to click on the link, copy and paste it into your browser window.".")\r\n\r\n";
		$strLabel = GetFieldLabel("users","Username");
		$message.= $strLabel.": ".$values["Username"]."\r\n";
		$strLabel = GetFieldLabel("users","Fullname");
		$message.= $strLabel.": ".$values["Fullname"]."\r\n";
		$strLabel = GetFieldLabel("users","DateOfBirth");
		$message.= $strLabel.": ".$values["DateOfBirth"]."\r\n";
		$strLabel = GetFieldLabel("users","Email");
		$message.= $strLabel.": ".$values["Email"]."\r\n";
		$strLabel = GetFieldLabel("users","UserType");
		$message.= $strLabel.": ".$values["UserType"]."\r\n";
		$strLabel = GetFieldLabel("users","Mobile");
		$message.= $strLabel.": ".$values["Mobile"]."\r\n";
		$strLabel = GetFieldLabel("users","Address");
		$message.= $strLabel.": ".$values["Address"]."\r\n";
		if(($pos = strpos($strEmail,"\r"))!==FALSE || ($pos=strpos($strEmail,"\n"))!==FALSE)
			$strEmail = substr($strEmail,0,$pos);
		$sentMailResults = runner_mail(array('to' => $strEmail, 'subject' => "Notification on registering", 'body' => $message));

		
		if(!count($sentMailResults) || $sentMailResults['mailed'])
		{
			//	show Registartion successful message
			$pageObject->updatePageLayoutAndCSS('', 'success');
					$xt->assign("email",$strEmail);
			$xt->assign("activation_block",true);
			$xt->assign("registered_block",true);
			$xt->assign("body",$pageObject->body);
			$xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");
						
			if (postvalue("onFly") == 1) {
				$pageObject->templatefile = GetTemplateName("", "register_success");
				$xt->assign("id",$id);
				$xt->assign("footer",false);
				$xt->assign("header",false);
				$xt->assign("body",true);
				$pageObject->displayAJAX($pageObject->templatefile, $id+1);
				exit();
			}
					
			return $pageObject->display(GetTemplateName("", "register_success")); // return $pageObject->display for .net compatibility
		}
		elseif($sentMailResults['message'])
		{
			$pageObject->message = $sentMailResults['message'];
		}
	}
	else
	{
		if($globalEvents->exists("AfterUnsuccessfulRegistration"))
			$globalEvents->AfterUnsuccessfulRegistration($values,$pageObject->message, $pageObject);
	}
}

$xt->assign("message_block", true);
if ( strlen($pageObject->message) )
{
	if ( postvalue("onFly") == 1 )
	{
		$returnJSON = array();
		$returnJSON['success'] = false;
		$returnJSON['message'] = $pageObject->message;
		echo printJSON($returnJSON);
		exit();
	}

	$xt->assign("message", "<div class='message rnr-error'>" . $pageObject->message . "</div>" );
}
else
{		
	$xt->displayBrickHidden("message");	
}

// proccess captcha
if( $pageObject->captchaExists() )
	$pageObject->displayCaptcha();

if (!isMobile())
	$includes.="<div id=\"search_suggest\"></div>\r\n";

//	assign values to the controls
if(!count($values))
{
}

$regFields = $pageObject->pSet->getFieldsForRegister();
foreach($regFields as $fName)
{
	$gfName = GoodFieldName($fName);
	
	$parameters = array();
	$parameters["id"] = $id;
	$parameters["mode"] = "add";
	$parameters["field"] = $fName;
	$parameters["value"] = @$values[$fName];
	$parameters["pageObj"] = $pageObject;
	
	if($fName == GetPasswordField() or $fName == GetUserNameField() or $fName == GetEmailField())
		$parameters["suggest"] = true;
	else
		$parameters["suggest"] = false;
			
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$values[$fName]);
	
	if($fName == GetPasswordField())
	{
		$parameters["extraParams"] = array();
		$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
		$pageObject->jsSettings['tableSettings'][$strTableName]['passFieldName'] = $fName;
	}
	
	if($fName == GetUserNameField())
		$pageObject->jsSettings['tableSettings'][$strTableName]['userFieldName'] = $fName;
		
	if($fName == GetEmailField())
		$pageObject->jsSettings['tableSettings'][$strTableName]['emailFieldName'] = $fName;
		
	// Add validation
	if (($fName == GetUserNameField()) || ($fName == GetPasswordField()) || ($fName == GetEmailField()))
		$parameters["validate"] = Array('basicValidate' => Array ( 'IsRequired' )); 
	else 
		$parameters["validate"] = $pageObject->pSet->getValidation($fName);
		
	$controls = array('controls'=>array());
	$controls["controls"]['id'] = $id;
	$controls["controls"]['mode'] = "add";
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['suggest'] = $parameters["suggest"];
	$controls["controls"]['fieldName'] = $fName;
		
	$xt->assign($gfName."_label", true);
	if(isEnableSection508())
		$xt->assign_section($gfName."_label", "<label for=\"".$pageObject->getInputElementId($fName)."\">", "</label>");
	
	$xt->assign($gfName."_fieldblock", true);
	$xt->assign_function($gfName."_editcontrol", "xt_buildeditcontrol", $parameters );

	$preload = $pageObject->fillPreload($fName, $regFields, $values);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, @$values[$fName]);
	
	// Confirm field for re-enter password
	if($fName==GetPasswordField() && GetPasswordField()!=GetUserNameField())
	{
		$parameters = array();
		$parameters["id"] = $id;
		$parameters["mode"] = "add";
		$parameters["field"] = "confirm";
		$parameters["format"] = "Password";
		$parameters["suggest"] = true;
		$parameters["pageObj"] = $pageObject;
		$parameters["validate"]['basicValidate'] = array('IsRequired');
				
		$parameters["extraParams"] = array();
		$parameters["extraParams"]["isConfirm"] = true;
		$parameters["extraParams"]["getConrirmFieldCtrl"] = true;
				
		$controls = array('controls'=>array());
		$controls["controls"]['id'] = $id;
		$controls["controls"]['mode'] = "add";
		$controls["controls"]['ctrlInd'] = 0;
		$controls["controls"]['suggest'] = true;
		$controls["controls"]['fieldName'] = "confirm";
				
		$xt->assign("confirm_label", true);
		if(isEnableSection508())
			$xt->assign_section("confirm_label", "<label for=\"value_confirm_".$id."\">", "</label>");
			
		$xt->assign_function("confirm_editcontrol1", "xt_buildeditcontrol", $parameters );
		$xt->assign("confirm_block", true);
		
		$pageObject->fillControlsMap($controls);
	}
}

$xt->assign("buttons_block", true);

//	show readonly fields

$xt->assign("submit_attrs", "id=\"saveButton".$id."\"");

$pageObject->body["begin"].= $includes;
$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->addButtonHandlers();

$pageObject->body['end'] = XTempl::create_method_assignment( "assignBodyEnd", $pageObject);

$xt->assignbyref("body", $pageObject->body);

$pageObject->xt->assign("legend", true);

if($globalEvents->exists("BeforeShowRegister"))
{
	$globalEvents->BeforeShowRegister($xt, $pageObject->templatefile, $pageObject);
}

// load popup page
if(postvalue("onFly") == 1)
{
	$xt->assign("id",$id);
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);	
	$xt->assign("backlink_attrs", 'style="display:none"');
	
	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}

$pageObject->display($pageObject->templatefile);

?>
