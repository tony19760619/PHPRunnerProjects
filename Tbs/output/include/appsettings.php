<?php
$dDebug = false;
$dSQL = "";

$bSubqueriesSupported=true;
$bUseMobileStyleOnly = false;

$tables_data = array();
$page_layouts = array();
$field_labels = array();
$fieldToolTips = array();
$page_titles = array();
$lookupTableLinks = array();

include(getabspath('classes/layout.php'));

//	custom labels
$custom_labels = array();
$custom_labels["English"] = array();

define('NOT_TABLE_BASED_TNAME', ".global");

/**
 *  Define constants of page name 
 */
define('PAGE_LIST',"list");
define('PAGE_ADD',"add");
define('PAGE_EDIT',"edit");
define('PAGE_VIEW',"view");
define('PAGE_MENU',"menu");
define('PAGE_LOGIN',"login");
define('PAGE_REGISTER',"register");
define('PAGE_REMIND',"remind");
define('PAGE_CHANGEPASS',"changepwd");
define('PAGE_SEARCH',"search");
define('PAGE_REPORT',"report");
define('PAGE_CHART',"chart");
define('PAGE_PRINT',"print");
define('PAGE_RPRINT',"rprint");
define('PAGE_EXPORT',"export");
define('PAGE_IMPORT',"import");
define('PAGE_ADMIN_MEMBERS',"admin_members");
define('PAGE_ADMIN_RIGHTS',"admin_rights");
define('PAGE_INLINEADD',"inlineadd");
define('PAGE_INLINEEDIT',"inlineedit");

define('FORMAT_VIEW',"ViewFormats");
define('FORMAT_EDIT',"EditFormats");
/**
 *  Define constants of view format
 */
define("FORMAT_NONE","");
define("FORMAT_DATE_SHORT","Short Date");
define("FORMAT_DATE_LONG","Long Date");
define("FORMAT_DATE_TIME","Datetime");
define("FORMAT_TIME","Time");
define("FORMAT_CURRENCY","Currency");
define("FORMAT_PERCENT","Percent");
define("FORMAT_HYPERLINK","Hyperlink");
define("FORMAT_EMAILHYPERLINK","Email Hyperlink");
define("FORMAT_FILE_IMAGE","File-based Image");
define("FORMAT_FILE_IMAGE_OLD","Old file-based Image");
define("FORMAT_DATABASE_IMAGE","Database Image");
define("FORMAT_DATABASE_FILE","Database File");
define("FORMAT_FILE","Document Download");
define("FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("FORMAT_PHONE_NUMBER","Phone Number");
define("FORMAT_NUMBER","Number");
define("FORMAT_HTML","HTML");
define("FORMAT_CHECKBOX","Checkbox");
define("FORMAT_MAP","Map");
define("FORMAT_CUSTOM","Custom");
define("FORMAT_AUDIO", "Audio file");
define("FORMAT_DATABASE_AUDIO", "Database audio");
define("FORMAT_VIDEO", "Video file");
define("FORMAT_VIDEO_HTML5", "Video file HTML5");
define("FORMAT_DATABASE_VIDEO", "Database video");
/**
 *  Define constants of edit format
 */
define("EDIT_FORMAT_NONE","");
define("EDIT_FORMAT_TEXT_FIELD","Text field");
define("EDIT_FORMAT_TEXT_AREA","Text area");
define("EDIT_FORMAT_PASSWORD","Password");
define("EDIT_FORMAT_DATE","Date");
define("EDIT_FORMAT_TIME","Time");
define("EDIT_FORMAT_RADIO","Radio button");
define("EDIT_FORMAT_CHECKBOX","Checkbox");
define("EDIT_FORMAT_DATABASE_IMAGE","Database image");
define("EDIT_FORMAT_DATABASE_FILE","Database file");
define("EDIT_FORMAT_FILE","Document upload");
define("EDIT_FORMAT_LOOKUP_WIZARD","Lookup wizard");
define("EDIT_FORMAT_HIDDEN","Hidden field");
define("EDIT_FORMAT_READONLY","Readonly");

define("EDIT_DATE_SIMPLE",0);
define("EDIT_DATE_SIMPLE_INLINE",2);
define("EDIT_DATE_SIMPLE_DP",11);
define("EDIT_DATE_DD",12);
define("EDIT_DATE_DD_INLINE",5);
define("EDIT_DATE_DD_DP",13);

define("MODE_ADD",0);
define("MODE_EDIT",1);
define("MODE_SEARCH",2);
define("MODE_LIST",3);
define("MODE_PRINT",4);
define("MODE_VIEW",5);
define("MODE_INLINE_ADD",6);
define("MODE_INLINE_EDIT",7);
define("MODE_EXPORT",8);

define("LOGIN_HARDCODED",0);
define("LOGIN_TABLE",1);

define("SECURITY_NONE",-1);
define("SECURITY_HARDCODED", 0);
define("SECURITY_TABLE", 1);

define("ADVSECURITY_ALL",0);
define("ADVSECURITY_VIEW_OWN",1);
define("ADVSECURITY_EDIT_OWN",2);
define("ADVSECURITY_NONE",3);

define("ACCESS_LEVEL_ADMIN","Admin");
define("ACCESS_LEVEL_ADMINGROUP","AdminGroup");
define("ACCESS_LEVEL_USER","User");
define("ACCESS_LEVEL_GUEST","Guest");

define("nDATABASE_MySQL",0);
define("nDATABASE_Oracle",1);
define("nDATABASE_MSSQLServer",2);
define("nDATABASE_Access",3);
define("nDATABASE_PostgreSQL",4);
define("nDATABASE_Informix",5);
define("nDATABASE_SQLite3",6);
define("nDATABASE_DB2",7);

define("ADD_SIMPLE",0);
define("ADD_INLINE",1);
define("ADD_ONTHEFLY",2);
define("ADD_MASTER",3);
define("ADD_POPUP",4);

define("EDIT_SIMPLE",0);
define("EDIT_INLINE",1);
define("EDIT_ONTHEFLY",2);
define("EDIT_POPUP",3);

define("titTABLE",0);
define("titVIEW",1);
define("titREPORT",2);
define("titCHART",3);

// for report lib
define("REPORT_STEPPED", 0);
define("REPORT_BLOCK", 1);
define("REPORT_OUTLINE", 2);
define("REPORT_ALIGN", 3);
define("REPORT_TABULAR", 6);

define("TOTAL_NONE", -1);
define("TOTAL_MAX", 0);
define("TOTAL_AVG", 1);
define("TOTAL_SUM", 3);
define("TOTAL_MIN", 4);

define("LIST_SIMPLE",0);
define("LIST_LOOKUP",1);
define("LIST_DETAILS",3);
define("LIST_AJAX",4);
define("RIGHTS_PAGE", 5);
define("MEMBERS_PAGE", 6);

define("DP_POPUP",0);
define("DP_INLINE",1);
define("DP_NONE",2);

define("SEARCH_SIMPLE",0);
define("SEARCH_LOAD_CONTROL",1);

define("LCT_DROPDOWN",0);
define("LCT_AJAX",1);
define("LCT_LIST",2);
define("LCT_CBLIST",3);
define("LCT_RADIO",4);

define("LT_LISTOFVALUES",0);
// lookup table is not added to the project
define("LT_LOOKUPTABLE",1);
define("LT_QUERY", 2);

define("ENCRYPTION_NONE", 0);
define("ENCRYPTION_DB", 1);
define("ENCRYPTION_PHP", 2);

define("SETTING_TYPE_GLOBAL", "global");
define("SETTING_TYPE_VIEW", "view");
define("SETTING_TYPE_EDIT", "edit");

define('otNone',0);
define('otUseMobile',1);
define('otUseDesktop',2);


define("CONTAINS", "Contains");
define("EQUALS", "Equals");
define("STARTS_WITH", "Starts with");
define("MORE_THAN", "More than");
define("LESS_THAN", "Less than");
define("BETWEEN", "Between");
define("EMPTY_SEARCH", "Empty");
define("NOT_CONTAINS", "NOT Contains");
define("NOT_EQUALS", "NOT Equals");
define("NOT_STARTS_WITH", "NOT Starts with");
define("NOT_MORE_THAN", "NOT More than");
define("NOT_LESS_THAN", "NOT Less than");
define("NOT_BETWEEN", "NOT Between");
define("NOT_EMPTY", "NOT Empty");

define("SEARCHID_SIMPLE", 1);
define("SEARCHID_PANEL", 10);
define("SEARCHID_ALL", 10000);


/* Define constants for the filters settings */
//fiter totals
define("FT_NONE", 0);
define("FT_COUNT", 1);
define("FT_MIN", 2);
define("FT_MAX", 3);
//filter multiselect
define("FM_NONE", 0);
define("FM_ON_DEMAND", 1);
define("FM_ALWAYS", 2);
//filter format
define("FF_VALUE_LIST", "Values list");
define("FF_BOOLEAN", "Options list");
define("FF_INTERVAL_LIST", "Interval list");
define("FF_INTERVAL_SLIDER", "Interval slider");
//define filter interval limits' constants
define("FIL_NONE", 0);
define("FIL_MORE_THAN", 1);
define("FIL_LESS_THAN", 1);
define("FIL_LESS_THAN_OR_EQUAL", 2);
define("FIL_MORE_THAN_OR_EQUAL", 2);
define("FIL_REMAINDER", 3);
//define slider filter constants
define("FS_BOTH", 0);
define("FS_MIN_ONLY", 1);
define("FS_MAX_ONLY", 2);
//define slider step types
define("FSST_SECONDS", 0);
define("FSST_MINUTES", 1);
define("FSST_HOURS", 2);
define("FSST_DAYS", 3);
define("FSST_MONTHS", 4);
define("FSST_YEARS", 5);
//sorting constants 
define('SORT_BY_DISP_VALUE', 0);
define('SORT_BY_DB_VALUE', 1);
define('SORT_BY_GR_VALUE', 2);
/**/


define("gltHORIZONTAL", 0);
define("gltVERTICAL", 1);
define("gltCOLUMNS", 2);

/* Define comstamts for hidden columns devices*/
define("DESKTOP", 1);
define("TABLET_10_IN", 2);
define("TABLET_7_IN", 3);
define("SMARTPHONE_LANDSCAPE", 4);
define("SMARTPHONE_PORTRAIT", 5);
/**/

$globalSettings = array();
$globalSettings["nLoginForm"] = 0;
$globalSettings["nLoginMethod"] = 1;
$globalSettings["dbType"] = 0;

$globalSettings["popupPagesLayoutNames"] = array();
if(!isMobile())
{
						
	;
$globalSettings["popupPagesLayoutNames"]["login"] = "login2";
						
	;
$globalSettings["popupPagesLayoutNames"]["register"] = "register2";
						
	;
$globalSettings["popupPagesLayoutNames"]["remind"] = "remind2";
}


$globalSettings["isDynamicPerm"] = true;



$globalSettings["createLoginPage"] = true;
$globalSettings["isUseEncryption"] = 0;
$globalSettings["encryptionKey"] = "";

$globalSettings["apiGoogleMapsCode"] = "";


$globalSettings["useBuiltInMailer"] = true;

$globalSettings["returnToActualListPage"] = true;


/**
 * If true then detail table name will be printed before detail table on the view page 
 * @var {bool}
 */
$globalSettings["printDetailTableName"] = true;

/**
 * Alias for custom expression in display field in ListPage_Lookup  
 * @var {string}
 */
$globalSettings["dispFieldAlias"] = "rrdf1";

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["handleSearchSuggestInLookup"] = true;

/**
 * Maximum size of search suggest result string
 * @var {int}
 */
$globalSettings["suggestStringSize"] = 40;

/**
 * The number of seach suggests displayed 
 */
$globalSettings["searchSuggestsNumber"] = 10;

/**
 * If true then search suggest result will be handled in Lookup control
 * @var {bool}
 */
$globalSettings["openPDFFileDirectly"] = true;

$globalSettings["override"] = array();


$wr_pagestylepath = "RoundedWhite_label";
$wr_is_standalone = false;
$WRAdminPagePassword = "";

$strLeftWrapper = "`";
$strRightWrapper = "`";

$cLoginTable = "user";
$cDisplayNameField = "Name";
$cUserNameField	= "Username";
$cPasswordField	= "Password";
$cUserGroupField = "Username";
$cEmailField = "Email";

if ($cDisplayNameField == ''){
	$cDisplayNameField = $cUserNameField;
}

$cDisplayNameFieldType	= 200;
$cUserNameFieldType	= 200;
$cPasswordFieldType	= 200;
$cEmailFieldType = 200;
$useFlashChartLibrary = true;


						
						
		$cUserNameFieldType	= 200;
				
				$cPasswordFieldType	= 200;
		
						
						
						
						$cEmailFieldType = 200;

$gPermissionsRefreshTime = 0;
$gPermissionsRead = false;

$nDBType = 0;

$mysqlVersion = "0";
$postgreDbVersion = "8";

$useAJAX = true;
$suggestAllContent = true;

$strLastSQL = "";


$mlang_messages = array();
$mlang_charsets = array();


$menuAssignments = array();

$menuStyles = array();

// table captions
$tableCaptions = array();
$tableCaptions["English"] = array();
$tableCaptions["English"]["customer"] = "Customer";
$tableCaptions["English"]["customerwaste"] = "Customer Waste";
$tableCaptions["English"]["customerwastebyday"] = "Customer Waste By Day";
$tableCaptions["English"]["customerwastebymonth"] = "Customer Waste By Month";
$tableCaptions["English"]["customerwastebyweek"] = "Customer Waste By Week";
$tableCaptions["English"]["customerwastebyyear"] = "Customer Waste By Year";
$tableCaptions["English"]["waste"] = "Waste";
$tableCaptions["English"]["user"] = "User";
$tableCaptions["English"]["admin_rights"] = "Admin Rights";
$tableCaptions["English"]["admin_members"] = "Admin Members";
$tableCaptions["English"]["admin_users"] = "Add/Edit users";
$tableCaptions["English"]["RegisterPage_customer"] = "RegisterPage Customer";
$tableCaptions["English"][""] = "";
$tableCaptions["English"][""] = "";
$tableCaptions[""] = array();
$tableCaptions[""][""] = "";
$tableCaptions[""]["customer"] = "Customer";




$globalEvents = new class_GlobalEvents;
$tableEvents = array();

$mlang_defaultlang = "English";



$page_titles[".global"] = array();
if(mlang_getcurrentlang()=="English")
{
}
if(mlang_getcurrentlang()=="")
{
}


$conn = db_connect();
if(!isLogged())
{
	$allowGuest = guestHasPermissions();
	$scriptname = getFileNameFromURL();
		if($allowGuest && $scriptname!="login.php" && $scriptname!="remind.php" && $scriptname!="register.php")
	{
		DoLogin(true);
	}
}

$isGroupSecurity = true;

$isUseRTEBasic = true;

$isUseRTECK = false;

$isUseRTEInnova = false;

$caseInsensitiveUsername = 1;

include(getabspath('classes/projectsettings.php'));


?>