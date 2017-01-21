<?php 

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once("include/snapshotcamdemo2_variables.php");
require_once('include/xtempl.php');
require_once('classes/editpage.php');

add_nocache_headers();


EditPage::handleBrokenRequest();

//	render all necessary layouts




$layout = new TLayout("edit_basic_center", "RoundedOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->container_properties["all"] = array(  );
$layout->containers["all"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"editheader",
	"block"=>"editheader", "substyle"=>2  );

$layout->containers["fields"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"editfields_simple",
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"editbuttons",
	"block"=>"editbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["snapshotcamdemo2_edit"] = $layout;

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





$layout = new TLayout("list_bootstrap1", "RoundedOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "cerulean";
		$layout->customCssPageName = "snapshotcamdemo2_list";
$layout->blocks["center"] = array();
$layout->containers["messagerow"] = array();
$layout->container_properties["messagerow"] = array(  );
$layout->containers["messagerow"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "";


$layout->skins["messagerow"] = "";

$layout->blocks["center"][] = "messagerow";
$layout->containers["gridcontrols"] = array();
$layout->container_properties["gridcontrols"] = array(  );
$layout->containers["gridcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"add_delete" );
$layout->containers["add_delete"] = array();
$layout->container_properties["add_delete"] = array(  );
$layout->containers["add_delete"][] = array("name"=>"add",
	"block"=>"newrecord_controls_block", "substyle"=>1  );

$layout->containers["add_delete"][] = array("name"=>"recordcontrol",
	"block"=>"record_controls_block", "substyle"=>1  );

$layout->skins["add_delete"] = "";


$layout->containers["gridcontrols"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"gridinfo" );
$layout->containers["gridinfo"] = array();
$layout->container_properties["gridinfo"] = array(  );
$layout->containers["gridinfo"][] = array("name"=>"details_found",
	"block"=>"details_found", "substyle"=>1  );

$layout->containers["gridinfo"][] = array("name"=>"printpanel",
	"block"=>"print_friendly", "substyle"=>1  );

$layout->skins["gridinfo"] = "";


$layout->skins["gridcontrols"] = "";

$layout->blocks["center"][] = "gridcontrols";
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"grid" );
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"grid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "";


$layout->skins["center"] = "";

$layout->blocks["center"][] = "center";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"searchpanel",
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more" );
$layout->containers["more"] = array();
$layout->container_properties["more"] = array(  );
$layout->containers["more"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->skins["more"] = "";


$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"more_1" );
$layout->containers["more_1"] = array();
$layout->container_properties["more_1"] = array(  );
$layout->containers["more_1"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->skins["more_1"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->blocks["topmiddle"] = array();
$layout->containers["breadcrumbs"] = array();
$layout->container_properties["breadcrumbs"] = array(  );
$layout->containers["breadcrumbs"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"bc" );
$layout->containers["bc"] = array();
$layout->container_properties["bc"] = array(  );
$layout->containers["bc"][] = array("name"=>"breadcrumbs",
	"block"=>"breadcrumbs", "substyle"=>1  );

$layout->skins["bc"] = "";


$layout->skins["breadcrumbs"] = "";

$layout->blocks["topmiddle"][] = "breadcrumbs";
$layout->skins["masterinfo"] = "";

$layout->blocks["topmiddle"][] = "masterinfo";
$page_layouts["snapshotcamdemo2_list"] = $layout;




// add master layouts 



// parse control parameters
$pageMode = EditPage::readEditModeFromRequest();

$xt = new Xtempl();	
	
$id = postvalue("id");
$id = intval($id) == 0 ? 1 : $id;


// $keys could not be set properly if editid params were no passed
$keys = array();
$keys["id"] = postvalue("editid1");

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["keys"] = $keys;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_EDIT;
$params["tName"] = $strTableName;
$params["action"] = postvalue("a");
$params["selectedFields"] = postvalue("fields");
		
	;
$params["captchaValue"] = postvalue("value_captcha_" . $id);
$params["selection"] = postvalue("selection");
$params["rowIds"] = my_json_decode( postvalue("rowIds") ); 

//	locking parameters
$params["lockingAction"] = postvalue("action");
$params["lockingSid"] = postvalue("sid");
$params["lockingKeys"] = postvalue("keys");
$params["lockingStart"] = postvalue("startEdit");

if( $pageMode == EDIT_INLINE )
{
	$params["screenWidth"] = postvalue("screenWidth");
	$params["screenHeight"] = postvalue("screenHeight");
	$params["orientation"] = postvalue("orientation");
}	

if( $pageMode == EDIT_DASHBOARD ) 
{
	$params["dashElementName"] = postvalue("dashelement");
	$params["dashTName"] = postvalue("table");
	
	if(	postvalue("mapRefresh") )
	{
		$params["mapRefresh"] = true;
		$params["vpCoordinates"] = my_json_decode( postvalue("vpCoordinates") );
	}	
}

if(( $pageMode == EDIT_POPUP || $pageMode == EDIT_INLINE ) && postvalue("dashTName"))
{
	$params["dashTName"] = postvalue("dashTName");
	$params["dashElementName"] = postvalue("dashelement");
}

$pageObject = EditPage::EditPageFactory($params);

if( $pageObject->isLockingRequest() )
{
	$pageObject->doLockingAction();
	exit();
}

$pageObject->init();

$pageObject->process();
?>