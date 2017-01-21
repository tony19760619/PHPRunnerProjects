<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include('classes/remindpwdpage.php');
include('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

$reminded = false;
$sentMailResults = array();

$cipherer = new RunnerCipherer("user");

$xt = new Xtempl();
$sessPrefix = 'remind';
$id = postvalue("id")!=="" ? postvalue("id") : 1;
$cEmailField = "Email";




$layout = new TLayout("remind2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["remind"] = array();
$layout->containers["remind"][] = array("name"=>"remindheader", 
	"block"=>"remindheader", "substyle"=>2  );

$layout->containers["remind"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["remind"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"remindfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"remindbuttons", 
	"block"=>"remindbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["remind"] = "1";

$layout->blocks["top"][] = "remind";
$page_layouts["remind"] = $layout;

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
$params = array("id" =>$id, "pageType" => PAGE_REMIND);
$params['xt'] = &$xt;
$params["tName"]= NOT_TABLE_BASED_TNAME;
$params["templatefile"] = "remind.htm";
$params["needSearchClauseObj"] = false;
$pageObject = new RemindPasswordPage($params);
$pageObject->init();

$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->body["end"] .= "<script>";
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
$pageObject->body["end"] .= "<script>".$pageObject->PrepareJS()."</script>";

$pageObject->addButtonHandlers();
	
$xt->assign("closewindow_attrs", 'style="display:none" id="closeWindowRemind"');
$isUseCaptcha = false;
$pageObject->isCaptchaOk = 1;

$onFly = postvalue("onFly");
if( !$onFly )
	$pageObject->assignFormFooterAndHeaderBricks( true );
if($onFly == 2) 
    $id = 1;


$strUsernameEmail="";
$strEmail="";
$strMessage="";

if (@$_POST["btnSubmit"] == "Remind")
{
	//	Before Process event
	if($globalEvents->exists("BeforeProcessRemind"))
		$globalEvents->BeforeProcessRemind($conn, $pageObject);
	
	$strUsernameEmail = postvalue("username_email");
		
	if(!$isUseCaptcha || ($isUseCaptcha && $pageObject->isCaptchaOk==1))
	{	
		$tosearch=false;
		
		
		$value=$strUsernameEmail;
		if((string)$value!="")
			$tosearch=true;
			
		if($cipherer->isFieldEncrypted($cUserNameField))
			$value = $cipherer->MakeDBValue($cUserNameField,$value,"","",true);
		else
		{
			if(NeedQuotes($cUserNameFieldType))
				$value=db_prepare_string($value);
			else
				$value=(0+$value);
		}
		$sWhere="(".GetFullFieldName($cUserNameField,"user",false)."=".$value;

		$value=$strUsernameEmail;
		if($cipherer->isFieldEncrypted($cEmailField))
			$value = $cipherer->MakeDBValue($cEmailField,$value,"","",true);
		else
		{
			if(NeedQuotes($cEmailFieldType))
				$value=db_prepare_string($value);
			else
				$value=(0+$value);
		}
		$sWhere.=" or ".GetFullFieldName($cEmailField,"user",false)."=".$value.")";
	
		if($tosearch && $globalEvents->exists("BeforeRemindPassword"))
			$tosearch = $globalEvents->BeforeRemindPassword($strUsernameEmail,$strUsernameEmail, $pageObject);
		
		if($tosearch)
		{
			$activeField = "";
							$activeField = ", ".AddFieldWrappers("Active");
			$strSQL = "select ".GetFullFieldName($cUserNameField,"user",false)." as ".AddFieldWrappers($cUserNameField).",".GetFullFieldName($cPasswordField,"user",false)." as ".AddFieldWrappers($cPasswordField).",".GetFullFieldName($cEmailField,"user",false)." as ".AddFieldWrappers($cEmailField).$activeField." from ".AddTableWrappers("user")." where ".$sWhere;
			$rs = db_query($strSQL,$conn);
			$data = $cipherer->DecryptFetchedArray($rs);
			if($data)
			{
				$password=$data[$cPasswordField];
				$strUsername = $data[$cUserNameField];
		
	
				$url = GetSiteUrl();
				$url.= $_SERVER["SCRIPT_NAME"];
				$url2 = str_replace("remind.","login.",$url)."?username=".$data[$cUserNameField];
				$message = "";
							if(!$data["Active"])
				{
					$message.= "Click this link to confirm your account and finish the registration".":\r\n";
					$message.= $url2."?a=activate&u=".rawurlencode(base64_encode($data[$cUserNameField]))."&code=";
					$message.= rawurlencode(md5($data[$cUserNameField].md5($password)));
					$message.= "\r\n("."If you are unable to click on the link, copy and paste it into your browser window.".")\r\n\r\n";
				}
				


$layout = new TLayout("remind_success2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["remindsuccess"] = array();
$layout->containers["remindsuccess"][] = array("name"=>"remindheader", 
	"block"=>"remindheader", "substyle"=>2  );

$layout->containers["remindsuccess"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"weresent_message", 
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "fields";


$layout->containers["remindsuccess"][] = array("name"=>"remindsucbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["remindsuccess"] = "1";

$layout->blocks["top"][] = "remindsuccess";
$page_layouts["remind_success"] = $layout;

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


				$message.= "Password reminder"."\r\n";
				$message.= "You asked to remind your username and password at"." ".$url2."\r\n";
				$message.= "Username".": ".$data[$cUserNameField]."\r\n";
				$message.= "Password".": ".$password."\r\n";
				$sentMailResults = runner_mail(array('to' => $data[$cEmailField], 'subject' => "Password reminder", 'body' => $message));
				if($sentMailResults['mailed'])
				{
					$pageObject->updatePageLayoutAndCSS('', 'success');
					
					$reminded = true;
					if($globalEvents->exists("AfterRemindPassword"))
						$globalEvents->AfterRemindPassword($strUsernameEmail,$strUsernameEmail, $pageObject);
					
					$loginlink_attrs = "href=\"".GetTableLink("login");
					$loginlink_attrs.="?username=".rawurlencode($strUsernameEmail);
					$loginlink_attrs.="\"";
					$loginlink_attrs.=' id="ProceedToLogin"';
					
					$_SESSION[$sessPrefix."_count_captcha"]=$_SESSION[$sessPrefix."_count_captcha"]+1;
					
					$xt->assign("loginlink_attrs",$loginlink_attrs);
					$xt->assign("body",true);
					if (postvalue("onFly") != 2)
						return $pageObject->display(GetTemplateName("", "remind_success")); // return $pageObject->display for .net compatibility
				}	
			}
		}
		
		if(!$reminded)
		{
			if($sentMailResults['message'])
				$strMessage = $sentMailResults['message'];
			else
				$strMessage = "User"." ".$strUsernameEmail." "."is not registered.";
		}

	}

}

$xt->assign("submit_attrs","onclick='document.forms.form1.submit();return false;'");

$xt->assign("username_email_label",true);
$is508=isEnableSection508();
if($is508)
{
	$xt->assign_section("username_email_label","<label for=\"username_email\">","</label>");
}
$xt->assign("username_email_attrs",($is508==true ? "id=\"username_email\" " : "")."value=\"".runner_htmlspecialchars($strUsernameEmail)."\"");

if(@$strMessage)
{
	$xt->assign("message","<div class='message rnr-error'>".$strMessage."</div>");
	$xt->assign("message_block",true);
	if($pageObject->isCaptchaOk==1) 
		$_SESSION[$sessPrefix."_count_captcha"]=$_SESSION[$sessPrefix."_count_captcha"]+1;
}

$pageObject->body["begin"] .= GetBaseScriptsForPage(false);

$pageObject->body["begin"] .="<script language = JavaScript>
function OnKeyDown()
{
	e = window.event;
	if (e.keyCode == 13)
	{
		e.cancel = true;
		document.forms[0].submit();
	}	
}
</script>
<form method=post action=\"".GetTableLink("remind")."\" id=form1 name=form1>
<input type=hidden name=btnSubmit value=\"Remind\">
<input type=\"Hidden\" name=\"searchby\" value=\"".$strSearchBy."\">";
$pageObject->body["end"] .= "</form>
	<script language=\"JavaScript\">
	".$pageObject->PrepareJS()."
	</script>";

$xt->assignbyref("body",$pageObject->body);

if($globalEvents->exists("BeforeShowRemindPwd"))
	$globalEvents->BeforeShowRemindPwd($xt,$pageObject->templatefile, $pageObject);

// submit on popup page
if (postvalue("onFly") == 2)
{
	if(@$strMessage) {
		$returnJSON['message'] = $strMessage;
	}
	if (($pageObject->isCaptchaOk == 0) && ($isUseCaptcha)) {
		$returnJSON['message'] = "Invalid security code.";
	}
	if ($reminded) {
		$pageObject->templatefile = GetTemplateName("", "remind_success");
		$xt->assign("id",$id);
		$xt->assign("footer",false);
		$xt->assign("header",false);
		$xt->assign("body",true);
		$pageObject->displayAJAX($pageObject->templatefile, $id+1);
		exit();
	}
	echo printJSON($returnJSON);
	exit();
}
	
// load popup page
if (postvalue("onFly") == 1)
{
	$xt->assign("message_block",true);
	$xt->assign("message","<div id='remind_message' class='message rnr-error'></div>");
	$xt->displayBrickHidden("message");
	$xt->assign("id",$id);
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("body",$pageObject->body);	
	$xt->assign("style_block",true);
	$xt->assign("backlink_attrs", 'style="display:none"');
	$xt->assign("submit_attrs","id='submitRemind'");
	
	$pageObject->displayAJAX($pageObject->templatefile, $id+1);
	exit();
}
	
$pageObject->display($pageObject->templatefile);
