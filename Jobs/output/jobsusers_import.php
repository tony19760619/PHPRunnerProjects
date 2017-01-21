<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

set_time_limit(600);

require_once("include/jobsusers_variables.php");
require_once("include/import_functions.php");
require_once('classes/importpage.php');

if( !Security::processPageSecurity( $strtablename, 'I' ) )
	return;




$layout = new TLayout("import2", "PurificGreen", "MobileGreen");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["import"] = array();
$layout->container_properties["import"] = array(  );
$layout->containers["import"][] = array("name"=>"importheader", 
	"block"=>"", "substyle"=>2  );

$layout->containers["import"][] = array("name"=>"errormessage", 
	"block"=>"", "substyle"=>1  );

$layout->containers["import"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"importfields" );
$layout->containers["importfields"] = array();
$layout->container_properties["importfields"] = array(  );
$layout->containers["importfields"][] = array("name"=>"importheader_text", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"importfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"import_rawtext_control", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"import_preview", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"import_process", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"import_results", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"importbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["importfields"] = "fields";


$layout->skins["import"] = "1";

$layout->blocks["top"][] = "import";
$page_layouts["jobsusers_import"] = $layout;

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



require_once('include/xtempl.php');
$xt = new Xtempl();
$id = postvalue("id");
$id = $id != "" ? $id : 1;
$xt->assign("id", $id);

//an array of params for ImportPage constructor
$params = array();
$params["id"] = $id;
$params["xt"] = &$xt;
$params["tName"] = $strTableName;
$params["pageType"] = PAGE_IMPORT;
$params["needSearchClauseObj"] = false;
$params["strOriginalTableName"] = $strOriginalTableName;

$pageObject = new ImportPage($params);
$pageObject->init();

$action = postvalue("a");

if( !strlen($action) )
	$pageObject->removeOldTemporaryFiles();

	
if( $action == "importPreview" ) 
{
	$returnJSON = array();
	// prepare the temp import file name
	$rnrTempFileName = $pageObject->getImportTempFileName();
	
	if( postvalue("importType") == "text" )
	{
		$importText = postvalue("importText");
		$returnJSON["previewData"] = $pageObject->getPreviewDataFromText( $importText );

		// prepare the temp file path
		$rnrTempImportFilePath = getabspath("templates_c/".$rnrTempFileName.".csv");
		// save file in a temporary directory
		runner_save_textfile( $rnrTempImportFilePath, $importText );		
	}
	else
	{
		$ext = getImportFileExtension( "importFile".$id );
		$importTempFileName = getTempImportFileName( "importFile".$id );
		$returnJSON["previewData"] = $pageObject->getPreviewDataFromFile( $importTempFileName, $ext );
		
		// save file in a temporary directory
		$importFileData = getImportFileData( "importFile".$id );
		// prepare the temp file path
		$rnrTempImportFilePath = getabspath("templates_c/".$rnrTempFileName.".".$ext);
		upload_File( $importFileData, $rnrTempImportFilePath );
	}
	
	// keep the temporary path in the SESSION variable
	$_SESSION[ $pageObject->sessionPrefix ."_tempImportFilePath" ] = $rnrTempImportFilePath;	

	echo printJSON( $returnJSON, postvalue("useXHR") );
	exit();
}

if( $action == "importData" )
{
	if( $eventObj->exists('BeforeImport') )
	{
		if( $eventObj->BeforeImport($pageObject) === false )
		{
			echo printJSON( array() );
			exit(0);
		}
	}
	
	$rnrTempImportFilePath = $_SESSION[ $pageObject->sessionPrefix ."_tempImportFilePath" ];
	$importData = my_json_decode( postvalue("importData") );
	$resultData = $pageObject->ImportFromFile( $rnrTempImportFilePath, $importData );			
	// remove a temporary import file
	runner_delete_file( $rnrTempImportFilePath );
	
	if( $eventObj->exists('AfterImport') )
		$eventObj->AfterImport($goodlines, $resultData["unprocessedRecordsNumber"], $pageObject);
	
	// keep all necessary data in SESSION variables 
	$_SESSION[ $pageObject->sessionPrefix ."_tempImportLogFilePath" ] = $resultData["logFilePath"];
	if( $resultData["unprocessedRecordsNumber"] )
		 $_SESSION[ $pageObject->sessionPrefix ."_tempDataFilePath" ] = $resultData["unprocessedFilePath"];	
	
	echo printJSON( $resultData );
	exit();		
}

if( $action == "downloadReport" )
{
	$logFilePath = $_SESSION[ $pageObject->sessionPrefix ."_tempImportLogFilePath" ];
	if( !myfile_exists( $logFilePath ) )
	{
		$data = array( "success" => false );
		echo printJSON( $data );
		exit();
	}	
	
	header("Content-Type: text/plain");
	header("Content-Disposition: attachment;Filename=importLog.txt");
	header("Cache-Control: private");
	
	printfile( $logFilePath );
	exit();
}

if( $action == "downloadUnprocessed" )
{
	$dataFilePath = $_SESSION[ $pageObject->sessionPrefix ."_tempDataFilePath" ];
	if( !myfile_exists( $dataFilePath ) )
	{
		$data = array( "success" => false );
		echo printJSON( $data );
		exit();
	}
	
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment;Filename=unpocessedData.csv");

	printfile( $dataFilePath );
	exit();	
}


// add button events if exist
$pageObject->addButtonHandlers();
$pageObject->addCommonJs();
$pageObject->addCommonHtml();

$hiddenBricks = array( "import_rawtext_control", "import_preview", "import_process", "import_results", "error_message" );
$xt->displayBricksHidden( $hiddenBricks );

$pageObject->display( $pageObject->templatefile );
?>