<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/user_variables.php");
require_once(getabspath("classes/cipherer.php"));
include("classes/registerpage.php");


$cipherer = new RunnerCipherer($strTableName);

$registered=false;
//event for onsubmit

$strMessage = "";
$allow_registration = true;
$strUsername = "";
$strPassword = "";
$strEmail = "";
$sentMailResults = array();
$values = array();
$keys = array();
$id = postvalue("id") != "" ? postvalue("id") : 1;
include('include/xtempl.php');

$isNeedSettings = true;
$xt = new Xtempl();




$layout = new TLayout("register2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["register"] = array();
$layout->containers["register"][] = array("name"=>"regheader", 
	"block"=>"regheader", "substyle"=>2  );

$layout->containers["register"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["register"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
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






$layout = new TLayout("register_success2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["register"] = array();
$layout->containers["register"][] = array("name"=>"regheader", 
	"block"=>"regheader", "substyle"=>2  );

$layout->containers["register"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
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



$params = array("pageType" => PAGE_REGISTER,"id" => $id);
$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params["templatefile"] = "register.htm";
$params["needSearchClauseObj"] = false;

$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRegister"');

$pageObject = new RegisterPage($params);
$pageObject->init();


$isUseCaptcha = $globalEvents->existsCAPTCHA(PAGE_REGISTER);


//	Before Process event
if($globalEvents->exists("BeforeProcessRegister"))
	$globalEvents->BeforeProcessRegister($conn, $pageObject);
//Send activation link to user's email

$includes = GetBaseScriptsForPage(false);
	
if(@$_GET["a"]=="activate")
{
	$username = base64_decode(@$_GET["u"]);
	$code = @$_GET["code"];
	if($cipherer->isFieldEncrypted("Username"))
		$strUsername = $cipherer->MakeDBValue("Username",$username,"","",true);
	else
		$strUsername = make_db_value("Username",$username);

	$sql = "select ".GetFullFieldName("Password","user",false)." as ".AddFieldWrappers("Password")." from `user` where ".GetFullFieldName("Username",$strTableName,false)."=".$strUsername;
	$rs = db_query($sql,$conn);
	$verified = false;
	if(!$rs)
	{
		echo "Invalid validation code.";
		return;
	}
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		echo "Invalid validation code.";
		return;
	}
	$usercode = $username.md5($data["Password"]);
	if($code!=md5($usercode))
	{
		echo "Invalid validation code.";
		return;
	}
	$sql = "update `user` set `Active`=1 where ".GetFullFieldName("Username",$strTableName,false)."=".$strUsername;
	db_exec($sql,$conn);

	$pageObject->updatePageLayoutAndCSS('', 'success');
	
	$pageObject->body["begin"].= "<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
	<input type=\"Hidden\" name=username value=\"".runner_htmlspecialchars($username)."\">";
	$pageObject->body["begin"].= "<input type=\"Hidden\" name=password value=\"".runner_htmlspecialchars($data["Password"])."\">";
	$pageObject->body["begin"].= "</form>";
	$xt->assign("body",$pageObject->body);
	$xt->assign("registered_block",true);
	$xt->assign("loginlink_attrs","onclick=\"document.forms.loginform.submit();return false;\" id=\"ProceedToLogin\"");	
	return $pageObject->display(GetTemplateName("", "register_success")); // return $pageObject->display for .net compatibility
}

// proccess captcha
if($isUseCaptcha)
	$pageObject->doCaptchaCode();
	
if(!$pageObject->isCaptchaOk)
	$allow_registration = false;
	
if(@$_POST["btnSubmit"] == "Register")
{
	$filename_values = array();
	$blobfields = array();
	$inlineedit = ADD_SIMPLE;

	$pageObject->addConfirmFieldControl(GetPasswordField(), $id);

//	processing Username - start
	$control_Username = $pageObject->getControl("Username", $id);
	$control_Username->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng Username - end

//	processing Password - start
	$control_Password = $pageObject->getControl("Password", $id);
	$control_Password->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng Password - end

//	processing Name - start
	$control_Name = $pageObject->getControl("Name", $id);
	$control_Name->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng Name - end

//	processing Email - start
	$control_Email = $pageObject->getControl("Email", $id);
	$control_Email->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng Email - end

//	processing CustomerId - start
	$control_CustomerId = $pageObject->getControl("CustomerId", $id);
	$control_CustomerId->readWebValue($values, $blobfields, "", null, $filename_values);
//	processibng CustomerId - end

	$strUsername = $values["Username"];
	$strPassword = $values["Password"];
	$strEmail = $values["Email"];

	if($cipherer->isFieldEncrypted("Username"))
		$sUsername = $cipherer->MakeDBValue("Username",$strUsername,"","",true);	
	else 
		$sUsername = add_db_quotes("Username",$strUsername);
	
	if($cipherer->isFieldEncrypted("Email"))
		$sEmail = $cipherer->MakeDBValue("Email",$strEmail,"","",true);	
	else 
		$sEmail = add_db_quotes("Email",$strEmail);

//	add filenames to values
	foreach($filename_values as $key=>$value)
		$values[$key] = $value;

//	check if entered username already exists
	if(!strlen($strUsername))
	{
		$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_userError'] = "Username can not be empty.";
		$allow_registration = false;
	}	
	else
	{
		$strSQL = "select count(*) from `user` where ".GetFullFieldName("Username",$strTableName,false)."=".$sUsername;
	   	$rs = db_query($strSQL,$conn);
		$data = db_fetch_numarray($rs);
		if($data[0]>0)
		{
			$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_userError'] = "Username"." <i>".$strUsername."</i> "."already exists. Choose another username.";
			$allow_registration = false;
		}
	}

	//	check if entered email already exists
	if(!strlen($strEmail))
	{
		$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_emailError'] = "Please enter a valid email address.";
		$allow_registration=false;
	}
	else
	{
		$strSQL = "select count(*) from `user` where ".GetFullFieldName("Email",$strTableName,false)."=".$sEmail;
		$rs = db_query($strSQL,$conn);
		$data = db_fetch_numarray($rs);
		if($data[0]>0)
		{
			$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_emailError'] = "Email"." <i>".$strEmail."</i> "."already registered. If you forgot your username or password use the password reminder form.";
			$allow_registration=false;
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
			$pageObject->jsSettings['tableSettings'][$strTableName]['regmsg_passwordError'] = $msg;
			$allow_registration = false;
		}
	}
	
	$retval = true;
	
	if($allow_registration)
	{
		if($globalEvents->exists("BeforeRegister"))
			$retval = $globalEvents->BeforeRegister($values,$strMessage, $pageObject);
	}
	else
		$retval = false;
	
	if($retval)
	{
		$message = "";
		$retval = DoInsertRecord("user",$values,$blobfields,$id,$pageObject, $cipherer, $keys);
		$strMessage = $message;
	}
	
	if($isUseCaptcha && $pageObject->isCaptchaOk)
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
	
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
		$strLabel = GetFieldLabel("user","Username");
		$message.= $strLabel.": ".$values["Username"]."\r\n";
		$strLabel = GetFieldLabel("user","Name");
		$message.= $strLabel.": ".$values["Name"]."\r\n";
		$strLabel = GetFieldLabel("user","Email");
		$message.= $strLabel.": ".$values["Email"]."\r\n";
		$strLabel = GetFieldLabel("user","CustomerId");
		$message.= $strLabel.": ".$values["CustomerId"]."\r\n";
		$strLabel = GetFieldLabel("user","Type");
		$message.= $strLabel.": ".$values["Type"]."\r\n";
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
			$xt->assign("message","<div class='message rnr-error'>".$sentMailResults['message']."</div>");
			$xt->assign("message_block",true);
		}
	}
	else
	{
		if($globalEvents->exists("AfterUnsuccessfulRegistration"))
			$globalEvents->AfterUnsuccessfulRegistration($values,$strMessage, $pageObject);
	
		if($strMessage!="")
		{
			$xt->assign("message","<div class='message rnr-error'>".$strMessage."</div>");
			$xt->assign("message_block",true);
		}
	}
}

if (!isMobile())
$includes.="<div id=\"search_suggest\"></div>\r\n";

//	assign values to the controls

if(!count($values))
{
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////
//	Begin Add validation params for Regester

$regFields = $pageObject->getFieldsByPageType();
foreach($regFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());	
	$control[$gfName] = array();
	$parameters = array();
	$parameters["id"] = $id;
	$parameters["mode"] = "add";
	$parameters["field"] = $fName;
	$parameters["value"] = @$values[$fName];
	$parameters["pageObj"] = $pageObject;
	
	if($fName == GetPasswordField() or $fName == GetUserNameField() or $fName == GetEmailField())
	{
		$parameters["suggest"] = true;
	}
	else
	{
		$parameters["suggest"] = false;
	}
		
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$values[$fName]);
	
	if($fName == GetPasswordField())
	{
		$pageObject->addConfirmFieldControl($fName, $id);
		$pageObject->jsSettings['tableSettings'][$strTableName]['passFieldName'] = $fName;
	}
	
	if($fName == GetUserNameField())
		$pageObject->jsSettings['tableSettings'][$strTableName]['userFieldName'] = $fName;
		
	if($fName == GetEmailField())
		$pageObject->jsSettings['tableSettings'][$strTableName]['emailFieldName'] = $fName;
		
	//	Begin Add validation
	if (($fName == GetUserNameField()) || ($fName == GetPasswordField()) || ($fName == GetEmailField()))
	{
		$parameters["validate"] = Array('basicValidate' => Array ( 'IsRequired' )); 
	}	
	else 
	{
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$parameters["validate"] = $arrValidate;
	}
		
	AssignFunction($control[$gfName], "xt_buildeditcontrol", $parameters);
	//	End Add validation
	
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	$controls["controls"]['mode'] = "add";
	
	$controls["controls"]['suggest'] = $parameters["suggest"];
	
	$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	$xt->assign($gfName."_label",true);
	if(isEnableSection508())
		$xt->assign_section($gfName."_label","<label for=\"".GetInputElementId($fName, $id, PAGE_REGISTER)."\">","</label>");
	$xt->assign($gfName."_fieldblock",true);
	
	// category control field
	$strCategoryControl = $pageObject->getMainLookupFieldNameForDependant($fName);
	
	if($strCategoryControl !== "" && in_array($strCategoryControl, $regFields))
		$vals = array($fName => @$values[$fName],$strCategoryControl => @$values[$strCategoryControl]);
	else
		$vals = array($fName => @$values[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
		$controls["controls"]['preloadData'] = $preload;
	
	$pageObject->fillControlsMap($controls);
	
	if($pageObject->pSet->getEditFormat($fName) == 'Time')	
		$pageObject->fillTimePickSettings($fName, @$values[$fName]);
		
	if($fName==GetPasswordField() && GetPasswordField()!=GetUserNameField())
	{
		//Begin second field for re-enter password
		$xt->assign("confirm_label",true);
		if(isEnableSection508())
			$xt->assign_section("confirm_label","<label for=\"value_confirm_".$id."\">","</label>");
		
		$pageObject->addConfirmFieldControl("confirm", $id, true);
			
		$control1['confirm'] = array();
		
		$parameters = array();
		$parameters["field"] = "confirm";
		$parameters["format"] = "Password";
		$parameters["validate"]['basicValidate'] = array('IsRequired');
		$parameters["id"] = $id;
		$parameters["mode"] = "add";
		$parameters["suggest"] = true;
		$parameters["pageObj"] = $pageObject;
		
		AssignFunction($control1['confirm'], "xt_buildeditcontrol", $parameters);
		
		$controls = array('controls'=>array());
		
		$controls["controls"]['ctrlInd'] = 0;
		$controls["controls"]['id'] = $id;
		$controls["controls"]['fieldName'] = "confirm";
		$controls["controls"]['mode'] = "add";
		$controls["controls"]['suggest'] = true;
		
		$xt->assignbyref("confirm_editcontrol1",$control1['confirm']);
		$xt->assign("confirm_block",true);
		
		$pageObject->fillControlsMap($controls);
	}
}

//////////////////////////////////
$xt->assign("buttons_block",true);

//	show readonly fields

$xt->assign("submit_attrs","id=\"saveButton".$id."\"");

$pageObject->body["begin"].= $includes;
$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->addButtonHandlers();


$pageObject->body['end'] = array();
AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);
$xt->assignbyref("body",$pageObject->body);

$pageObject->xt->assign("legend", true);

if($globalEvents->exists("BeforeShowRegister"))
{
	$globalEvents->BeforeShowRegister($xt, $pageObject->templatefile, $pageObject);
}
$xt->eventsObject = &$globalEvents;

if( !postvalue("onFly") )
	$pageObject->assignFormFooterAndHeaderBricks( true );

// load popup page
if(postvalue("onFly") == 1)
{
	if ($strMessage) {
		$xt->assign("message_block",true);
	}
	$xt->assign("id",$id);
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);	
	$xt->assign("style_block",true);
	$xt->assign("backlink_attrs", 'style="display:none"');
	
	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}

$pageObject->display($pageObject->templatefile);

?>
