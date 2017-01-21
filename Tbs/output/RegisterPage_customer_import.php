<?php

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
session_cache_limiter("none");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

set_time_limit(600);

include("include/RegisterPage_customer_variables.php");
include("include/import_functions.php");

$strOriginalTableName="`customer`";


if(!isLogged())
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	redirectToLogin();
}
// check user permissions
if(!CheckTablePermissions($strTableName, "I"))
{
	HeaderRedirect("menu");
}

$cipherer = new RunnerCipherer($strTableName);

$keys = array();

// keys array
$keys[] = AddFieldWrappers("Id");
$keys_present=1;

$total_records=0;
$goodlines = 0;

// Create audit object
$auditObj = GetAuditObject($strTableName);

function getFieldNamesByHeaders($fields, $strOriginalTableName, $ext) 
{
	global $strTableName, $conn, $gSettings;
// check fields in column headers
	// check that we have labes in column headers
	$fieldsNotFoundArr = array();
	$fNamesArr = array();
	$fNamesFromQuery = $gSettings->getFieldsList();
	
	$fieldLabelError = false;
	$labelFieldsNotFoundArr = array();
	
	for ($j=0;$j<count($fields);$j++)
	{		
		$labelNotFound = true;
		for($i=0;$i<count($fNamesFromQuery);$i++)
		{	
			if($ext==".CSV")
				$label = trim(GoodFieldName($fNamesFromQuery[$i]));
			else
				$label = trim(GetFieldLabel(GoodFieldName($strTableName), GoodFieldName($fNamesFromQuery[$i])));
			if($fields[$j] == $label)
			{				
				$fNamesArr[$j] = $fNamesFromQuery[$i];
				$labelNotFound = false;
				break;
			}				
		}
		if ($labelNotFound)
		{			
			$fieldLabelError = true;
			$labelFieldsNotFoundArr[] = $fields[$j];
		}				
	}
	// if field names are not labels, than compare them with fields from query	
	$fieldsListError = false;
	$queryFieldsNotFoundArr = array();
	
	if ($fieldLabelError)
	{
		$fieldFromListNotFound = true;
		$fNamesArr = array();
		for ($j=0;$j<count($fields);$j++)
		{
			$fieldNotFound = true;
			for($i=0;$i<count($fNamesFromQuery);$i++)
			{
				if($fields[$j] == $fNamesFromQuery[$i])
				{
					$fNamesArr[$j] = $fNamesFromQuery[$i];
					$fieldNotFound = false;
					$fieldFromListNotFound = false;
					break;
				}
			}
			if ($fieldNotFound)
			{
				$fieldsListError = true;
				$queryFieldsNotFoundArr[] = $fields[$j];
			}	
		}
	}
	
	// if field list not lables or fields from query, than compare fields from DB
	$fieldsDbError = false;
	$dbFieldsNotFoundArr = array();
	if ($fieldLabelError && $fieldsListError)
	{
		$fNamesArr = array();
		$strSQL = "select * from ".AddTableWrappers($strOriginalTableName);
		$rs = db_query($strSQL,$conn);
		$dbFieldNum = db_numfields($rs);
		
		for ($j=0;$j<count($fields);$j++)
		{	
			$fieldFromDBNotFound = true;
			for($i=0;$i<$dbFieldNum;$i++)
			{
				$fNameFromDB = db_fieldname($rs,$i);
				if($fields[$j] == $fNameFromDB)
				{				
					$fNamesArr[$j] = $fNameFromDB;
					$fieldFromDBNotFound = false;
					break;
				}				
			}	
			if ($fieldFromDBNotFound)
			{
				$fieldsDbError = true;
				$dbFieldsNotFoundArr[] = $fields[$j];
			}				
		}		
	}
	
	// if fields are not labels, fields from list and fields from table
	if ($fieldLabelError && $fieldsListError && $fieldsDbError)
	{
		if (count($labelFieldsNotFoundArr) < count($dbFieldsNotFoundArr) && count($labelFieldsNotFoundArr) < count($queryFieldsNotFoundArr) ){
			$fieldsNotFoundArr = $labelFieldsNotFoundArr;
		}elseif (count($dbFieldsNotFoundArr) < count($labelFieldsNotFoundArr) && count($dbFieldsNotFoundArr) < count($queryFieldsNotFoundArr) ){
			$fieldsNotFoundArr = $dbFieldsNotFoundArr;
		}elseif (count($queryFieldsNotFoundArr) < count($labelFieldsNotFoundArr) && count($queryFieldsNotFoundArr) < count($dbFieldsNotFoundArr)){
			$fieldsNotFoundArr = $queryFieldsNotFoundArr;
		}elseif(count($queryFieldsNotFoundArr) == count($labelFieldsNotFoundArr) && count($queryFieldsNotFoundArr) == count($dbFieldsNotFoundArr)){
			$fieldsNotFoundArr = $dbFieldsNotFoundArr;
		}
		$message = "Import didn't succeed, couldn't find the followind fields: ".implode(", ", $fieldsNotFoundArr);
		return null;
		//exit();
	}
	// if found any type of fields, than use them as fields array
	else
	{
		return $fNamesArr;
	}
}

//////////////////////
// import from Excel
//////////////////////
function ImportFromExcel($uploadfile, $strOriginalTableName, $ext, $keys, &$keys_present, &$total_records, &$error_message, &$goodlines, $pageObject, $cipherer)
{
	global $conn, $strTableName;
	
	$autoinc = false;
	$ret = 1;
	
	$data = openImportExcelFile($uploadfile);
	
	// populate field names array
	
	$fields = array();
	
	$fields = getImportExcelFields($data);
	
	$fields = getFieldNamesByHeaders($fields, $strOriginalTableName, $ext);	
	if($fields == null) // if error happened
		return;
	
	$keys_present=1;
	
	for($k=0; $k<count($keys); $k++)
	{
		if (!in_array(RemoveFieldWrappers($keys[$k]),$fields))
		{
			$keys_present=0;
			break;
		}
	}

		if(in_array("Id",$fields))
		$autoinc=true;
		
			$ret = getImportExcelData($data, $fields, $error_message, $goodlines, $keys, $keys_present, $strOriginalTableName, $pageObject, $cipherer, $autoinc, $total_records);
		
	
	return $ret;

}

/////////////////////////
// import from CSV
/////////////////////////
function ImportFromCSV($uploadfile, $strOriginalTableName, $ext, $keys, &$keys_present, &$total_records, &$error_message, &$goodlines, $pageObject, $cipherer)
{	
	global $conn, $gSettings;

	$ret = 1;

	$fields = array();
	
	$fields = getImportCVSFields($uploadfile);
	
	// populate field names array
	for ($j=0;$j<count($fields);$j++)
	{
		$fields[$j] = $fields[$j];
		if(substr($fields[$j],0,1)=="\"" && substr($fields[$j],-1)=="\"")
			$fields[$j]=substr($fields[$j],1,-1);
	}
	$fields = getFieldNamesByHeaders($fields, $strOriginalTableName, $ext);

	if($fields == null) // if error happened
		return;
	
	$keys_present=1;
	for($k=0; $k<count($keys); $k++)
	{
		if (!in_array(RemoveFieldWrappers($keys[$k]),$fields))
		{
			$keys_present=0;
			break;
		}
	}
	$autoinc = false;
		if(in_array("Id",$fields))
		$autoinc=true;
		
		
	
	
	$total_records = 0;
	$line = "";		
	$row = 0;
	// parse records from file
	if (($handle = OpenCSVFile($uploadfile)) !== FALSE) 
	{
	    while (($data = GetCSVLine($handle, 1000000, ",")) !== FALSE) 
	    {
	    				// first rec contain only fields names	    	
	    	if ($row === 0)
	    	{
	    		$row++;
	    		continue;	    		
	    	}
	    	$arr = array();
			foreach($data as $key=>$val)
			{
				$type = $gSettings->getFieldType($fields[$key]);
				if(IsDateFieldType($type))
				{
					$value = localdatetime2db($val);
					if ( $value !== FALSE && strlen($value) && $value != 'null' )
						$arr[$fields[$key]] = $value;
					else
						$arr[$fields[$key]] = NULL;
				}
				elseif(IsTimeType($type))
				{
					$value = localtime2db($val);
					if ( $value !== FALSE && strlen($value) && !is_null($val) && strlen($val) )
						$arr[$fields[$key]] = $value;
					else
						$arr[$fields[$key]] = NULL;
				}
				else
					$arr[$fields[$key]] = $val;
			}
			
	    	$ret = InsertRecord($arr, $row, $error_message, $goodlines, $keys, $keys_present, 
	    		$strOriginalTableName, $pageObject, $cipherer, $autoinc);
	        $row++;
	    }
	    CloseCSVFile($handle);
	}
	
		$total_records = $row-1;
	
	
	
		
	return $ret;	
} 

function import_error_handler($errno, $errstr, $errfile, $errline)
{
	/*global $error_happened;

	$error_happened=1;*/
}
		
function ParseCSVLine($line)
{

	$arr = array();
	$inword=0;
	$hasquotes=0;
	$start=0;
	for ($i=0;$i<strlen($line);$i++)
	{
		$c = $line[$i];
		switch ($c)
		{
			case "\"":
			
				if (!$inword)
					{
						$inword=1;
						$hasquotes=1;
						$start=$i+1;
					}
				else
					{
						if ($line[$i+1]=="\"")
						{
							$i++;
							continue;
						}
						else
						{
							$inword=0;
							$hasquotes=0;
							$arr[] = substr($line, $start, $i-$start);
							$start=$i+1;
						}
					}				
					
				break;
			case ",":
				if (!$inword)
					{
						if ($line[$i+1]==",") $inword=1;
						$hasquotes=0;
						$start=$i+1;
					}
				else
					{
						if (!$hasquotes)
						{
							$inword=0;
							if ($line[$i+1]==",") $inword=1;
							$hasquotes=0;
							$arr[] = substr($line, $start, $i-$start);
							$start=$i+1;
						}
					}		
				break;
			case " ":
				break;
			default:
				$inword=1;		
				break;
		}
	}
	
		if ($start<strlen($line))
			$arr[] = substr($line, $start);


	
	return $arr;

}		

$id = postvalue("id") != "" ? postvalue("id") : 1;
$error_message = "";
$message = "";

include('include/xtempl.php');
include('classes/runnerpage.php');
$xt = new Xtempl();




$layout = new TLayout("import2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["import"] = array();
$layout->containers["import"][] = array("name"=>"importheader", 
	"block"=>"", "substyle"=>2  );

$layout->containers["import"][] = array("name"=>"errormessage", 
	"block"=>"", "substyle"=>1  );

$layout->containers["import"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"importfields" );
$layout->containers["importfields"] = array();
$layout->containers["importfields"][] = array("name"=>"importfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"importheader_text", 
	"block"=>"", "substyle"=>1  );

$layout->containers["importfields"][] = array("name"=>"importbuttons", 
	"block"=>"", "substyle"=>2  );

$layout->skins["importfields"] = "fields";


$layout->skins["import"] = "1";

$layout->blocks["top"][] = "import";
$page_layouts["RegisterPage_customer_import"] = $layout;

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
$params = array("pageType" => PAGE_IMPORT, "id" =>$id, "tName"=>$strTableName);
$params["xt"] = &$xt;
$params["needSearchClauseObj"] = false;
$pageObject = new RunnerPage($params);
$pageObject->init();

// if is postback (form sent) and import needed
if(@$_POST["a"]=="added")
{
	$value = postvalue("value_ImportFileName".$id);
	$type = postvalue("type_ImportFileName".$id);
	
	$importfile = getImportTableName("file_ImportFileName".$id);
		
	//check the file extension  
	$pos = strrpos($value,".");
	$ext = strtoupper(substr($value,$pos));
	
	
	if ($eventObj->exists('BeforeImport'))
	{
		if ($eventObj->BeforeImport($pageObject) === false)
		{
			exit(0);
		}
	}
	if($ext==".XLS" || $ext==".XLSX")
	{
		ImportFromExcel($importfile, $strOriginalTableName, $ext, $keys, $keys_present, $total_records, $error_message, $goodlines, $pageObject, $cipherer);
	}	
	else 
	{
		ImportFromCSV($importfile, $strOriginalTableName, $ext, $keys, $keys_present, $total_records, $error_message, $goodlines, $pageObject, $cipherer);
	}	
	
	if($message != "")  // if error happened in ImportFromExcel or ImportFromCSV
	{
		$error_message .= "<br>".$message."<br><br>";
	}
	else if ($eventObj->exists('AfterImport'))
	{
		$eventObj->AfterImport($goodlines, $total_records-$goodlines, $pageObject);
	}
	
	if ($goodlines==$total_records)
	{
		$error_message .= "<font size=2>" . $goodlines . " records were imported</font><br>";
		$error_message .= "<font size=2>To back to your list click on the <b>Back to list</b> button.</font>";
	}
	else
	{
		$error_message .= "Number of records: ". $total_records ."<br>";
		$error_message .= "Imported: ".$goodlines."<br>";
		$error_message .= "Not imported: ";
		$error_message .= $total_records-$goodlines ."<br>";
	}	
}

// add button events if exist
$pageObject->addButtonHandlers();


$pageBegin = $pageObject->body["begin"];
$pageBegin .= GetBaseScriptsForPage(false, $additionalScripts);

$pageObject->fillSetCntrlMaps();
$pageEnd = $pageObject->body['end'];
$pageEnd .= '<script>';
$pageEnd .= "window.controlsMap = ".my_json_encode($pageObject->controlsHTMLMap).";";
$pageEnd .= "window.viewControlsMap = ".my_json_encode($pageObject->viewControlsHTMLMap).";";
$pageEnd .= "window.settings = ".my_json_encode($pageObject->jsSettings).";";
$pageEnd .= '</script>';
$pageEnd .= "<script language=\"JavaScript\" src=\"".GetRootPathForResources("include/runnerJS/RunnerAll.js")."\"></script>\r\n";

$pageObject->addCommonJs();

$pageEnd .= "<script>".$pageObject->PrepareJS()."</script>";

$pageObject->body["begin"] = $pageBegin;
$pageObject->body["end"] = $pageEnd;

$xt->assignbyref("body",$pageObject->body);

$xt->assign("importfile_attrs", "id=\"file_ImportFileName".$pageObject->id."\" name=\"file_ImportFileName".$pageObject->id."\"");
$xt->assign("backtolist_attrs", "id=\"backButton".$pageObject->id."\"");
$xt->assign("importlink_attrs", "id=\"saveButton".$pageObject->id."\"");
$xt->assign("error_message", $error_message);
$pageObject->display(GetTemplateName("RegisterPage_customer", "import"));

?>


