<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");

if(!isLogged() || @$_SESSION["UserID"]=="<Guest>")
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	HeaderRedirect("login", "", "message=expired"); 
	return;
}

include('include/xtempl.php');
include('classes/changepwdpage.php');
require_once(getabspath("classes/cipherer.php"));

$xt = new Xtempl();
$id = postvalue("id") != "" ? postvalue("id") : 1;
$message = "";

$cipherer = new RunnerCipherer("user");




$layout = new TLayout("changepwd2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["changepwd"] = array();
$layout->containers["changepwd"][] = array("name"=>"changeheader", 
	"block"=>"changeheader", "substyle"=>2  );

$layout->containers["changepwd"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["changepwd"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
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
if( !$onFly )
	$pageObject->assignFormFooterAndHeaderBricks( true );


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
	$globalEvents->BeforeProcessChangePwd($conn, $pageObject);

if (@$_POST["btnSubmit"] == "Submit")
{	
	$xt->assign("backlink_attrs","href=\"".$_SESSION["changepwd_referer"]."\"");
	$opass = postvalue("opass");
	$newpass = postvalue("newpass");
	$newpassraw=$newpass;
	

	$value = @$_SESSION["UserID"];
	
	if($cipherer->isFieldEncrypted($cUserNameField))
		$value = $cipherer->MakeDBValue($cUserNameField,$value,"","",true);
	else
	{
		if(NeedQuotes($cUserNameFieldType))
			$value=db_prepare_string($value);
		else
			$value=(0+$value);
	}
	
	$passvalue = $newpass;
	
	if($cipherer->isFieldEncrypted($cPasswordField))
		$passvalue = $cipherer->MakeDBValue($cPasswordField,$newpass);
	else
	{
		if(NeedQuotes($cPasswordFieldType))
			$passvalue=db_prepare_string($passvalue);
		else
			$passvalue=(0+$passvalue);
	}

	$sWhere = " where ".GetFullFieldName($cUserNameField,"user",false)."=".$value;
	$strSQL = "select ".GetFullFieldName($cPasswordField,"user",false)." as ".AddFieldWrappers($cPasswordField)." from ".AddTableWrappers($cLoginTable).$sWhere;
	$rstemp=db_query($strSQL,$conn);

	if($row=$cipherer->DecryptFetchedArray($rstemp))
	{
		if($opass == $row[$cPasswordField])
		{		
			
			if($bStrongPassword && !checkpassword($newpassraw))
			{
							$fmt="Password must be at least %% characters length.";
				$fmt=str_replace("%%","8",$fmt);
				$message.="<br>".$fmt;
							$fmt="Password must contain %% unique characters.";
				$fmt=str_replace("%%","4",$fmt);
				$message.="<br>".$fmt;
							$fmt="Password must contain %% digits or symbols.";
				$fmt=str_replace("%%","2",$fmt);
				$message.="<br>".$fmt;
						}
			else
			{
				$retval=true;
				if($globalEvents->exists("BeforeChangePassword"))
					$retval=$globalEvents->BeforeChangePassword(postvalue("opass"), postvalue("newpass"), $pageObject);
				if($retval)
				{
					$strSQL= "update ".AddTableWrappers($cLoginTable)." set ".AddFieldWrappers($cPasswordField)."=".$passvalue.$sWhere;
					db_exec($strSQL,$conn);
					if($auditObj)
						$auditObj->LogChPassword();
					if($globalEvents->exists("AfterChangePassword"))
						$globalEvents->AfterChangePassword(postvalue("opass"), postvalue("newpass"), $pageObject);
					
					


$layout = new TLayout("changepwd_success2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["changepwd"] = array();
$layout->containers["changepwd"][] = array("name"=>"changeheader", 
	"block"=>"changeheader", "substyle"=>2  );

$layout->containers["changepwd"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
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
					
					$xt->assign("body",true);
					return $pageObject->display(GetTemplateName("", "changepwd_success")); // return $xt->display for .net compatibility
				}
			}
		}
		else
		{
			$message = "Invalid password";
		}
	}
}
else $xt->assign("backlink_attrs","href=\"".$_SESSION["changepwd_referer"]."\"");
	
if($message)
{
	$xt->assign("message","<div class='message rnr-error'>".$message."</div>");
	$xt->assign("message_block",true);
}
$xt->assign("loginlink_attrs","onclick='if (document.forms.form1.onsubmit()) document.forms.form1.submit();return false;'");

$includes = GetBaseScriptsForPage(false);

$pageObject->body["begin"] .= $includes."<script language=\"JavaScript\">
function validate(){
	if (document.forms.form1.cpass.value!=document.forms.form1.newpass.value){	
		alert('".jsreplace("Passwords do not match. Re-enter password").
		"');
		document.forms.form1.newpass.value='';
		document.forms.form1.cpass.value='';
		document.forms.form1.newpass.focus();
		return false;
	}
	return true;
}
</script>
<form method=\"POST\" action=\"".GetTableLink("changepwd")."\" id=form1 name=form1 onsubmit=\"return validate();\">
<input type=hidden name=btnSubmit value=\"Submit\">";
$pageObject->body["end"] .="</form>";

$pageObject->addCommonJs();
$pageObject->fillSetCntrlMaps();
$pageObject->body['end'] .= '<script>';
$pageObject->body['end'] .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageObject->body['end'] .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageObject->body['end'] .= "window.settings = ".my_json_encode($pageObject->jsSettings).";</script>";
$pageObject->body['end'] .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";
$pageObject->body["end"] .= '<script>'.$pageObject->PrepareJS()."</script>";
$pageObject->addButtonHandlers();

$xt->assignbyref("body",$pageObject->body);

if($globalEvents->exists("BeforeShowChangePwd"))
	$globalEvents->BeforeShowChangePwd($xt,$pageObject->templatefile, $pageObject);

$pageObject->display($pageObject->templatefile);
?>