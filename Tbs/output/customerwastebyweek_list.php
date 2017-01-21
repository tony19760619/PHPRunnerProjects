<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
add_nocache_headers();

include('include/xtempl.php');
include("include/customerwastebyweek_variables.php");
include('classes/runnerpage.php');
include('classes/listpage.php');
include("classes/searchpanel.php");
include("classes/searchcontrol.php");
include("classes/searchclause.php");
include("classes/panelsearchcontrol.php");
include('include/lookuplinks.php');

InitLookupLinks();

$lookupInPage = false;
$lookupInRegisterPage = false;
if(postvalue("mode") == "lookup")
{
	$mainTableShortName = postvalue("table");
	
		if(postvalue("pageType") == "register")
		$mainTableShortName = "user";
	$lookupMainSettings = getLookupMainTableSettings($strTableName, $mainTableShortName, postvalue("field"));
	if($lookupMainSettings)
	{
		$lookupInPage = true;
			$registerFields = $lookupMainSettings->getFieldsForRegister();
		if(array_search(postvalue("field"), $registerFields) !== FALSE)
		{
			$lookupInRegisterPage = true;
		}
	}
}

RunnerPage::reloginAndLogoutProcess('S');

if(!isLogged() && !$lookupInRegisterPage)
{ 
	redirectToLogin();
}

   // check user permissions
$permissionGranted = false;
if($lookupInRegisterPage)
{
	$permissionGranted = true;
}
if(!$permissionGranted)
{
	$permissionGranted = CheckTablePermissions($strTableName, "S");
}
if(!$permissionGranted && $lookupInPage)
{
	$mainTable = $lookupMainSettings->getTableName();
	$permissionGranted = CheckTablePermissions($mainTable, "S") || CheckTablePermissions($mainTable, "E") || CheckTablePermissions($mainTable, "A");
}

if(!$permissionGranted)
{
	if(IsAdmin())
	{
		echo "<p>"."You don't have permissions to access this table"."<br><a href=\"".GetTableLink("admin_rights", "list")."\">"."Proceed to Admin Area"."</a> "."to set up user permissions"."</p>";
	}
	else
		HeaderRedirect("menu");
	exit();
}





$layout = new TLayout("list5", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["bigblock"] = array();
$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"recordcontrols" );
$layout->containers["recordcontrols"] = array();
$layout->containers["recordcontrols"][] = array("name"=>"recordcontrols_new", 
	"block"=>"newrecord_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"recordcontrol", 
	"block"=>"record_controls_block", "substyle"=>1  );

$layout->containers["recordcontrols"][] = array("name"=>"toplinks", 
	"block"=>"more_list", "substyle"=>1  );

$layout->skins["recordcontrols"] = "2";


$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"message" );
$layout->containers["message"] = array();
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "2";


$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"grid" );
$layout->containers["grid"] = array();
$layout->containers["grid"][] = array("name"=>"grid", 
	"block"=>"grid_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";


$layout->containers["bigblock"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"pagination" );
$layout->containers["pagination"] = array();
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";


$layout->skins["bigblock"] = "1";

$layout->blocks["center"][] = "bigblock";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->containers["left"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vsearch1", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vsearch2", 
	"block"=>"searchform_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"search_saving_buttons", 
	"block"=>"searchsaving_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vdetails_found", 
	"block"=>"details_block", "substyle"=>2  );

$layout->containers["left"][] = array("name"=>"vpage_of", 
	"block"=>"pages_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vrecsperpage", 
	"block"=>"recordspp_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"searchpanel", 
	"block"=>"searchPanel", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->blocks["top"] = array();
$layout->containers["master"] = array();
$layout->containers["master"][] = array("name"=>"masterinfo", 
	"block"=>"mastertable_block", "substyle"=>1  );

$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->containers["toplinks"] = array();
$layout->containers["toplinks"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["customerwastebyweek_list"] = $layout;

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




//	Include necessary files in accordance with mode displaying page
if (postvalue("mode")=="")
{
	$mode = LIST_SIMPLE;
	include('classes/listpage_simple.php');
	include("classes/searchpanelsimple.php");
}
elseif(postvalue("mode") == "ajax")
{
	$mode = LIST_AJAX;
	include('classes/listpage_simple.php');
	include('classes/listpage_ajax.php');
	include("classes/searchpanelsimple.php");
}
elseif(postvalue("mode") == "lookup")
{	
	include('classes/listpage_embed.php');
	include('classes/listpage_lookup.php');
	include("classes/searchpanellookup.php");
	$mode=LIST_LOOKUP;
	//
	// $params declared but never used. Thus, I commented this code. If you need this you can uncomment it, 
	// but ensure that $params is declared as array.
	// 
	//determine which field should be used to select values
	/*
			$params["lookupSelectField"] = "Id";
	
		
		
		
		
		*/
}
elseif(postvalue("mode")=="listdetails")
{
	
	include('classes/listpage_embed.php');
	include('classes/listpage_dpinline.php');
	$mode=LIST_DETAILS;
}

$xt = new Xtempl( $mode != LIST_SIMPLE ); //#9607 1. Temporary fix


// Modify query: remove blob fields from fieldlist.
// Blob fields on a list page are shown using imager.php (for example).
// They don't need to be selected from DB in list.php itself.
$noBlobReplace = false;

$options = array();
//array of params for classes
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = $mode;
$options['xt'] = &$xt;
$options['mainMasterPageType'] = postvalue("mainmasterpagetype");
$options['masterPageType'] = postvalue("masterpagetype");
$options["masterTable"] = postvalue("mastertable");
$options["masterId"] = postvalue("masterid");
$options["firstTime"] = postvalue("firsttime");

$i = 1;
while(isset($_REQUEST["masterkey".$i])) 
{
	if($i == 1)
	{
		$options["masterKeysReq"] = array();
	}
	$options["masterKeysReq"][$i] = $_REQUEST["masterkey".$i];
	$i++;
}
$pageObject = ListPage::createListPage($strTableName, $options);


// Save search
if( postvalue("saveSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$searchParams = $pageObject->getSearchParamsForSaving();
	$pageObject->searchLogger->saveSearch( $searchName, $searchParams );
	
	$pageObject->searchClauseObj->savedSearchIsRun = true;
	$_SESSION[$pageObject->sessionPrefix.'_advsearch'] = serialize( $pageObject->searchClauseObj );
	
	echo my_json_encode( $searchParams );
	exit();
}
// Delete the saved search
if( postvalue("deleteSearch") && postvalue("searchName") && !is_null($pageObject->searchLogger) ) 
{
	$searchName = postvalue("searchName");
	$pageObject->searchLogger->deleteSearch( $searchName );
	exit();
}





$layout = new TLayout("masterlist", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["masterlistheader"] = array();
$layout->containers["masterlistheader"][] = array("name"=>"masterlistheader", 
	"block"=>"", "substyle"=>1  );

$layout->skins["masterlistheader"] = "empty";

$layout->blocks["bare"][] = "masterlistheader";
$layout->containers["mastergrid"] = array();
$layout->containers["mastergrid"][] = array("name"=>"masterlistfields", 
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "grid";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["customer_masterlist"] = $layout;

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


$mastertype = "masterlist";
include_once getabspath('classes/controls/ViewControlsContainer.php');
$viewControls = new ViewControlsContainer(new ProjectSettings("customer", PAGE_LIST), PAGE_LIST);
$viewControls->addControlsJSAndCSS();
$pageObject->includes_js = array_merge($pageObject->includes_js, $viewControls->includes_js);
$pageObject->includes_jsreq = array_merge($pageObject->includes_jsreq, $viewControls->includes_jsreq);
$pageObject->includes_css = array_merge($pageObject->includes_css, $viewControls->includes_css);
$layout = GetPageLayout("customer", $mastertype);
$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));




$layout = new TLayout("masterlist", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["bare"] = array();
$layout->containers["masterlistheader"] = array();
$layout->containers["masterlistheader"][] = array("name"=>"masterlistheader", 
	"block"=>"", "substyle"=>1  );

$layout->skins["masterlistheader"] = "empty";

$layout->blocks["bare"][] = "masterlistheader";
$layout->containers["mastergrid"] = array();
$layout->containers["mastergrid"][] = array("name"=>"masterlistfields", 
	"block"=>"", "substyle"=>1  );

$layout->skins["mastergrid"] = "grid";

$layout->blocks["bare"][] = "mastergrid";
$page_layouts["waste_masterlist"] = $layout;

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


$mastertype = "masterlist";
include_once getabspath('classes/controls/ViewControlsContainer.php');
$viewControls = new ViewControlsContainer(new ProjectSettings("waste", PAGE_LIST), PAGE_LIST);
$viewControls->addControlsJSAndCSS();
$pageObject->includes_js = array_merge($pageObject->includes_js, $viewControls->includes_js);
$pageObject->includes_jsreq = array_merge($pageObject->includes_jsreq, $viewControls->includes_jsreq);
$pageObject->includes_css = array_merge($pageObject->includes_css, $viewControls->includes_css);
$layout = GetPageLayout("waste", $mastertype);
$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));

if (!$noBlobReplace){
	$gQuery->ReplaceFieldsWithDummies($pageObject->pSet->getBinaryFieldsIndices());
}

if ($mode != LIST_DETAILS) { 
}

unset($_SESSION["message_add"]);
unset($_SESSION["message_edit"]);

// prepare code for build page
$pageObject->prepareForBuildPage();

$masterTablesInfoArr = $pageObject->pSet->getMasterTablesArr($strTableName);
for($i = 0; $i < count($masterTablesInfoArr); $i++) 
{
	if( $masterTablesInfoArr[$i]['dispInfo'] )
		include_once( getabspath("include/".GetTableLink($masterTablesInfoArr[$i]['mShortTable'], "master".$masterTablesInfoArr[$i]['type'])) );
}

// show page depends of mode
$pageObject->showPage();

?>