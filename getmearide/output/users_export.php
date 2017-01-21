<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

require_once("classes/searchclause.php");
require_once("classes/sql.php");

require_once("include/users_variables.php");

if( !Security::processPageSecurity( $strtablename, 'P' ) )
	return;




$layout = new TLayout("export2", "OfficeOffice", "MobileOffice");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["export"] = array();
$layout->container_properties["export"] = array(  );
$layout->containers["export"][] = array("name"=>"exportheader",
	"block"=>"", "substyle"=>2  );

$layout->containers["export"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"range" );
$layout->containers["range"] = array();
$layout->container_properties["range"] = array(  );
$layout->containers["range"][] = array("name"=>"exprange",
	"block"=>"range_block", "substyle"=>1  );

$layout->skins["range"] = "fields";


$layout->containers["export"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->container_properties["fields"] = array(  );
$layout->containers["fields"][] = array("name"=>"expoutput",
	"block"=>"", "substyle"=>1  );

$layout->skins["fields"] = "fields";


$layout->containers["export"][] = array("name"=>"expbuttons",
	"block"=>"", "substyle"=>2  );

$layout->skins["export"] = "1";

$layout->blocks["top"][] = "export";
$page_layouts["users_export"] = $layout;

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



require_once("include/export_functions.php");
require_once("classes/exportpage.php");
require_once('include/xtempl.php');

$xt = new Xtempl();
$id = postvalue("id");
$id = $id != "" ? $id : 1;

//array of params for classes
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_EXPORT;

if( !$eventObj->exists("ListGetRowCount") && !$eventObj->exists("ListQuery") )
	$params["needSearchClauseObj"] = false;

$params["exportType"] = postvalue("type");
$params["action"] = postvalue("a");	
$params["records"] = postvalue("records");	
	
$pageObject = new ExportPage($params);
$pageObject->init();

$pageObject->process();

?>