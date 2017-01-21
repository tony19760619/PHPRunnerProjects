<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/admin_rights_variables.php");

if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	HeaderRedirect("login", "", "message=expired");
	return;
}
if(!IsAdmin())
{
	echo "<p>"."You don't have permissions to access this table"." <a href=\"".GetTableLink("login")."\">"."Back to login page"."</a></p>";
	return;
}


$tables = array();
$pageMask = array();
$table = "customer";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("customer", " " . "Customer");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_customer", strtoupper($y)."-"."Customer");
}
*/
$table = "customerwaste";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("customerwaste", " " . "Customer Waste");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_customerwaste", strtoupper($y)."-"."Customer Waste");
}
*/
$table = "customerwastebyday";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("customerwastebyday", " " . "Customer Waste By Day");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_customerwastebyday", strtoupper($y)."-"."Customer Waste By Day");
}
*/
$table = "customerwastebymonth";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("customerwastebymonth", " " . "Customer Waste By Month");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_customerwastebymonth", strtoupper($y)."-"."Customer Waste By Month");
}
*/
$table = "customerwastebyweek";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("customerwastebyweek", " " . "Customer Waste By Week");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_customerwastebyweek", strtoupper($y)."-"."Customer Waste By Week");
}
*/
$table = "customerwastebyyear";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("customerwastebyyear", " " . "Customer Waste By Year");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_customerwastebyyear", strtoupper($y)."-"."Customer Waste By Year");
}
*/
$table = "waste";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("waste", " " . "Waste");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_waste", strtoupper($y)."-"."Waste");
}
*/
$table = "user";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("user", " " . "User");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_user", strtoupper($y)."-"."User");
}
*/
$table = "RegisterPage_customer";
$mask="";
	$mask .= "A";
	$mask .= "E";
	$mask .= "D";
	$mask .= "S";
$mask .= "P";
$mask .= "I";

$pageMask[$table] = $mask;
$tables[$table] = array("RegisterPage_customer", " " . "RegisterPage Customer");
/*
$xxx = array();
$xxx[] = "a";
$xxx[] = "b";
$xxx[] = "c";
$xxx[] = "d";
$xxx[] = "e";
$xxx[] = "f";
$xxx[] = "g";
$xxx[] = "h";
$xxx[] = "i";
$xxx[] = "j";
$xxx[] = "k";
$xxx[] = "l";
$xxx[] = "m";
$xxx[] = "m";
$xxx[] = "o";
$xxx[] = "p";
$xxx[] = "q";
$xxx[] = "r";
$xxx[] = "s";
$xxx[] = "t";
$xxx[] = "u";

foreach($xxx as $x)
{
	$yyy[]=$x;
	$yyy[]="1".$x;
}
foreach($yyy as $y)
{
	$pageMask[$y."_".$table] = $mask;
	$tables[$y."_".$table] = array($y."_RegisterPage_customer", strtoupper($y)."-"."RegisterPage Customer");
}
*/






$layout = new TLayout("ug_rights", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["center"] = array();
$layout->containers["ugcontrols"] = array();
$layout->containers["ugcontrols"][] = array("name"=>"ugbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->containers["ugcontrols"][] = array("name"=>"ugrightbuttons", 
	"block"=>"savebuttons_block", "substyle"=>1  );

$layout->skins["ugcontrols"] = "1";

$layout->blocks["center"][] = "ugcontrols";
$layout->containers["message"] = array();
$layout->containers["message"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->skins["message"] = "1";

$layout->blocks["center"][] = "message";
$layout->containers["grid"] = array();
$layout->containers["grid"][] = array("name"=>"ugrightsblock", 
	"block"=>"rights_block", "substyle"=>1  );

$layout->skins["grid"] = "grid";

$layout->blocks["center"][] = "grid";
$layout->containers["pagination"] = array();
$layout->containers["pagination"][] = array("name"=>"pagination", 
	"block"=>"pagination_block", "substyle"=>1  );

$layout->skins["pagination"] = "2";

$layout->blocks["center"][] = "pagination";
$layout->blocks["left"] = array();
$layout->containers["left"] = array();
$layout->containers["left"][] = array("name"=>"loggedas", 
	"block"=>"security_block", "substyle"=>1  );

$layout->containers["left"][] = array("name"=>"vmenu", 
	"block"=>"menu_block", "substyle"=>1  );

$layout->skins["left"] = "menu";

$layout->blocks["left"][] = "left";
$layout->containers["uggroup"] = array();
$layout->containers["uggroup"][] = array("name"=>"ugrightsgroup", 
	"block"=>"", "substyle"=>1  );

$layout->skins["uggroup"] = "1";

$layout->blocks["left"][] = "uggroup";
$layout->blocks["top"] = array();
$layout->skins["master"] = "empty";

$layout->blocks["top"][] = "master";
$layout->skins["toplinks"] = "2";

$layout->blocks["top"][] = "toplinks";
$page_layouts["admin_rights_list"] = $layout;

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



include('include/xtempl.php');
include('classes/runnerpage.php');
include('classes/listpage.php');
include('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = PAGE_LIST;
$options["id"] = postvalue("id") ? postvalue("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('values'));
	$pageObject->saveRights($modifiedRights);
	return;
}

 
// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();
	


?>
