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

require_once("include/xtempl.php");
require_once("classes/changepwdpage.php");
require_once(getabspath("classes/cipherer.php"));




$layout = new TLayout("changepwd2", "RoundedOffice", "MobileOffice");
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






$layout = new TLayout("changepwd_success2", "RoundedOffice", "MobileOffice");
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



$xt = new Xtempl();

$id = postvalue("id");
$id = $id ? $id : 1;

$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = NOT_TABLE_BASED_TNAME;
$params["pageType"] = PAGE_CHANGEPASS;
$params["templatefile"] = "changepwd.htm";
$params["needSearchClauseObj"] = false;
$params["action"] = ChangePasswordPage::readActionFromRequest();

$pageObject = new ChangePasswordPage( $params );
$pageObject->init();

$pageObject->process();

?>