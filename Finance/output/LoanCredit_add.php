<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
require_once("classes/searchclause.php");
require_once("include/LoanCredit_variables.php");
require_once('include/xtempl.php');
require_once('classes/addpage.php');
require_once('include/lookuplinks.php');

add_nocache_headers();

InitLookupLinks();

if( !AddPage::processAddPageSecurity( $strTableName ) )
	return;

AddPage::handleBrokenRequest();




$layout = new TLayout("add2", "RoundedOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->container_properties["all"] = array(  );
$layout->containers["all"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"add" );
$layout->containers["add"] = array();
$layout->container_properties["add"] = array(  );
$layout->containers["add"][] = array("name"=>"addheader",
	"block"=>"addheader", "substyle"=>2  );

$layout->containers["add"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["add"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"addfields",
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"addbuttons",
	"block"=>"addbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["add"] = "1";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["LoanCredit_add"] = $layout;

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





$layout = new TLayout("list6", "RoundedOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["message"] = array();
$layout->container_properties["message"] = array(  );
$layout->containers["message"][] = array("name"=>"message",
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->container_properties["grid"] = array(  );
$layout->containers["grid"][] = array("name"=>"grid",
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->container_properties["pagination"] = array(  );
$layout->containers["pagination"][] = array("name"=>"pagination",
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->container_properties["left"] = array(  );
$layout->containers["left"][] = array("name"=>"searchpanel",
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->container_properties["toplinks"] = array(  );
$layout->containers["toplinks"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"toplinks_advsearch",
	"block"=>"asearch_link", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"toplinks_import",
	"block"=>"import_link", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"toplinks_export",
	"block"=>"export_link", "substyle"=>1  );

$layout->containers["toplinks"][] = array("name"=>"printpanel",
	"block"=>"print_friendly", "substyle"=>1  );

$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$layout->containers["hmenu"] = array();
$layout->container_properties["hmenu"] = array(  );
$layout->containers["hmenu"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["hmenu"] = "hmenu";

$layout->blocks["top"][] = "hmenu";
$layout->containers["search"] = array();
$layout->container_properties["search"] = array(  );
$layout->containers["search"][] = array("name"=>"search",
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"search_buttons",
	"block"=>"searchformbuttons_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"search_saving_buttons",
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"details_found",
	"block"=>"details_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"page_of",
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["search"][] = array("name"=>"recsperpage",
	"block"=>"recordspp_block", "substyle"=>1  );

$layout->skins["search"] = "1";

$layout->blocks["top"][] = "search";
$layout->containers["recordcontrols"] = array();
$layout->container_properties["recordcontrols"] = array(  );
$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new",
	"block"=>"newrecord_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol",
	"block"=>"record_controls_block", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";

$layout->blocks["top"][] = "recordcontrols";
$page_layouts["LoanCredit_list"] = $layout;

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



// add master layouts 
// end add master layouts 



$pageMode = AddPage::readAddModeFromRequest();

$xt = new Xtempl();

$id = postvalue("id");
$id = intval($id) == 0 ? 1 : $id;
	 	
//an array of AddPage constructor's params 
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["mode"] = $pageMode;
$params["pageType"] = PAGE_ADD;
$params["tName"] = $strTableName;
$params["action"] = postvalue("a");
$params["needSearchClauseObj"] = false;
$params["afterAdd_id"] = postvalue("afteradd");
$params["masterTable"] = postvalue("mastertable");
		
	;
$params["captchaValue"] = postvalue("value_captcha_" . $id);
$params["dashElementName"] = postvalue("dashelement");
$params["fromDashboard"] = postvalue("fromDashboard");
$params["dashTName"] = $params["fromDashboard"] ? $params["fromDashboard"] : postvalue("dashTName");

if( $pageMode == ADD_INLINE )
{
	// Inline add in a 'List page with search' lookup
	$params["forListPageLookup"] = postvalue('forLookup');
	
	$params["screenWidth"] = postvalue("screenWidth");
	$params["screenHeight"] = postvalue("screenHeight");
	$params["orientation"] = postvalue("orientation");
	
	$params["masterPageType"] = postvalue("mainMPageType");
}	

if( $pageMode == ADD_ONTHEFLY || $pageMode == ADD_INLINE && postvalue('forLookup') )	
{
	//table where lookup is set
	$params["lookupTable"] = postvalue("table");
	//field with lookup is set	
	$params["lookupField"] = postvalue("field");
	 //the ptype od the page where lookup is set
	$params["lookupPageType"] = postvalue("pageType");
	
	if( postvalue('parentsExist') )
	{
		//the parent controls values data
		$params["parentCtrlsData"] = my_json_decode( postvalue("parentCtrlsData") );		
	}		
}

$pageObject = new AddPage($params);
$pageObject->init();

$pageObject->process();	
?>