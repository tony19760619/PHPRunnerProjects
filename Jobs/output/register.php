<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("include/jobsusers_variables.php");
require_once(getabspath("classes/cipherer.php"));
require_once("classes/registerpage.php");


$regCipherer = new RunnerCipherer($strTableName);

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
require_once('include/xtempl.php');

$isNeedSettings = true;
$xt = new Xtempl();




$layout = new TLayout("register2", "PurificGreen", "MobileGreen");
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






$layout = new TLayout("register_success2", "PurificGreen", "MobileGreen");
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

$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRegister"');
$xt->eventsObject = &$globalEvents;

$pageObject = new RegisterPage($params);
$pageObject->init();

$isUseCaptcha = $globalEvents->existsCAPTCHA(PAGE_REGISTER);

//	Before Process event
if($globalEvents->exists("BeforeProcessRegister"))
	$globalEvents->BeforeProcessRegister( $pageObject );
//Send activation link to user's email

$includes = GetBaseScriptsForPage(false);
	

// proccess captcha
if($isUseCaptcha)
	$pageObject->doCaptchaCode();
	
if(!$pageObject->isCaptchaOk)
	$allow_registration = false;
	
if(@$_POST["btnSubmit"] == "Register")
{
	$filename_values = array();
	$blobfields = array();

//	processing Username
	$control_Username = $pageObject->getControl("Username", $id);
	$control_Username->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Password
	$control_Password = $pageObject->getControl("Password", $id);
	$control_Password->readWebValue($values, $blobfields, NULL, NULL, $filename_values);

//	processing Email
	$control_Email = $pageObject->getControl("Email", $id);
	$control_Email->readWebValue($values, $blobfields, NULL, NULL, $filename_values);


	$strUsername = $values["Username"];
	$strPassword = $values["Password"];

	if($regCipherer->isFieldEncrypted("Username"))
		$sUsername = $regCipherer->MakeDBValue("Username", $strUsername, "", true);	
	else 
		$sUsername = add_db_quotes("Username",$strUsername);
	
	if($regCipherer->isFieldEncrypted(""))
		$sEmail = $regCipherer->MakeDBValue("", $strEmail, "", true);	
	else 
		$sEmail = add_db_quotes("",$strEmail);

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
		$strSQL = "select count(*) from ". $pageObject->connection->addTableWrappers( "jobsusers" ) 
			. " where " . 
			$pageObject->getFieldSQLDecrypt("Username") . "=" . $sUsername;
		
		$data = $pageObject->connection->query( $strSQL )->fetchNumeric();
		if( $data[0] > 0 )
		{
			$pageObject->jsSettings['tableSettings'][$strTableName]['msg_userError'] = "Username"." <i>".$strUsername."</i> "."already exists. Choose another username.";
			$allow_registration = false;
		}
	}


	
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
	
	if($allow_registration)
	{
		if($globalEvents->exists("BeforeRegister"))
			$retval = $globalEvents->BeforeRegister($values,$strMessage, $pageObject);
	}
	else
		$retval = false;
	
	if($retval)
	{
		$retval = DoInsertRecord("jobsusers", $values, $blobfields, $pageObject);
	}
	
	if($isUseCaptcha && $pageObject->isCaptchaOk)
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"] + 1;
	
	if($retval)
	{
		if($globalEvents->exists("AfterSuccessfulRegistration"))
			$globalEvents->AfterSuccessfulRegistration($values, $pageObject);
		$url = GetSiteUrl();
		$url.=$_SERVER["SCRIPT_NAME"];

		
		if(!count($sentMailResults) || $sentMailResults['mailed'])
		{
			//	show Registartion successful message
			$pageObject->updatePageLayoutAndCSS('', 'success');
					
			$pageObject->addCommonJs();
			$pageObject->fillSetCntrlMaps();
			$pageObject->addButtonHandlers();

			$pageObject->body["begin"] .= $includes."<form method=\"POST\" action=\"".GetTableLink("login")."\" name=\"loginform\">
			<input type=\"Hidden\" name=username value=\"".runner_htmlspecialchars($strUsername)."\">".
			"<input type=\"Hidden\" name=password value=\"".runner_htmlspecialchars($strPassword)."\"></form>";
			
			$pageObject->body["end"] .= "<script>";
			$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
			$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
			$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
						$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
			$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";
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
			$xt->assign("message", "<div class='message rnr-error'>".$strMessage."</div>");
			$xt->assign("message_block", true);
		}
	}
}

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
			
	$control[$gfName] = array();
	AssignFunction($control[$gfName], "xt_buildeditcontrol", $parameters);
		
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
	$xt->assignbyref($gfName."_editcontrol", $control[$gfName]);
	
	// category control field
	$strCategoryControl = $pageObject->getMainLookupFieldNameForDependant($fName);
	
	if($strCategoryControl !== "" && in_array($strCategoryControl, $regFields))
		$vals = array($fName => @$values[$fName], $strCategoryControl => @$values[$strCategoryControl]);
	else
		$vals = array($fName => @$values[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
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
				
		$control1['confirm'] = array();
		AssignFunction($control1['confirm'], "xt_buildeditcontrol", $parameters);
		
		$controls = array('controls'=>array());
		$controls["controls"]['id'] = $id;
		$controls["controls"]['mode'] = "add";
		$controls["controls"]['ctrlInd'] = 0;
		$controls["controls"]['suggest'] = true;
		$controls["controls"]['fieldName'] = "confirm";
				
		$xt->assign("confirm_label", true);
		if(isEnableSection508())
			$xt->assign_section("confirm_label", "<label for=\"value_confirm_".$id."\">", "</label>");
			
		$xt->assignbyref("confirm_editcontrol1", $control1['confirm']);
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

$pageObject->body['end'] = array();
AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);

$xt->assignbyref("body", $pageObject->body);

$pageObject->xt->assign("legend", true);

if($globalEvents->exists("BeforeShowRegister"))
{
	$globalEvents->BeforeShowRegister($xt, $pageObject->templatefile, $pageObject);
}

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
	$xt->assign("backlink_attrs", 'style="display:none"');
	
	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}

$pageObject->display($pageObject->templatefile);

?>
