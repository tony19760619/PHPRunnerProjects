<?php 
include("include/dbcommon.php");

@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

add_nocache_headers();
include("include/user_variables.php");
include('include/xtempl.php');
include('classes/addpage.php');
include('include/lookuplinks.php');

InitLookupLinks();

RunnerPage::reloginAndLogoutProcess("A");

if ((postvalue("editType") != "inline") && (postvalue("editType") != ADD_POPUP)) {
	$_SESSION["MyURL"] = $_SERVER["SCRIPT_NAME"];
	if(!isLogged())
	{ 
		redirectToLogin();
	}
}


$returnJSON = array();
if ((sizeof($_POST)==0) && (postvalue('ferror'))){
	if (postvalue("inline")){
		$returnJSON['success'] = false;
		$returnJSON['message'] = "Error occurred";
		$returnJSON['fatalError'] = true;
		echo printJSON($returnJSON);
		exit();
	}
	else if (postvalue("fly")){
		echo -1;
		exit();
	}
	else {
		$_SESSION["message_add"] = "<< "."Error occurred"." >>";
	}
}




$layout = new TLayout("add2", "RoundedWhite_label", "MobileWhite_label");
$layout->version = 2;
$layout->blocks["top"] = array();
$layout->containers["all"] = array();
$layout->containers["all"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"add" );
$layout->containers["add"] = array();
$layout->containers["add"][] = array("name"=>"addheader", 
	"block"=>"addheader", "substyle"=>2  );

$layout->containers["add"][] = array("name"=>"message", 
	"block"=>"message_block", "substyle"=>1  );

$layout->containers["add"][] = array("name"=>"wrapper", 
	"block"=>"", "substyle"=>1 , "container"=>"fields" );
$layout->containers["fields"] = array();
$layout->containers["fields"][] = array("name"=>"addfields", 
	"block"=>"", "substyle"=>1  );

$layout->containers["fields"][] = array("name"=>"addbuttons", 
	"block"=>"addbuttons", "substyle"=>2  );

$layout->skins["fields"] = "fields";


$layout->skins["add"] = "1";


$layout->skins["all"] = "empty";

$layout->blocks["top"][] = "all";
$page_layouts["user_add"] = $layout;

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





$filename = "";
$status = "";
$message = "";
$mesClass = "rnr-error";
$usermessage = "";
$error_happened = false;
$readavalues = false;

$keys = array();
$showValues = array();
$showRawValues = array();
$showFields = array();
$showDetailKeys = array();
$IsSaved = false;
$HaveData = true;
$popUpSave = false;

$sessionPrefix = $strTableName;

$onFly = false;
if(postvalue("onFly"))
	$onFly = true;

if(@$_REQUEST["editType"]=="inline")
	$inlineadd = ADD_INLINE;
elseif(@$_REQUEST["editType"]==ADD_POPUP)
{
	$inlineadd = ADD_POPUP;
	if(@$_POST["a"]=="added" && postvalue("field")=="" && postvalue("category")=="")
		$popUpSave = true;	
}
elseif(@$_REQUEST["editType"]==ADD_MASTER)
	$inlineadd = ADD_MASTER;
elseif($onFly)
{
	$inlineadd = ADD_ONTHEFLY;
	$sessionPrefix = $strTableName."_add";
}
else
	$inlineadd = ADD_SIMPLE;

if($inlineadd == ADD_INLINE)
{
	$templatefile = GetTemplateName("user", "inline_add");
}
else
{
	$templatefile = GetTemplateName("user", "add");
}

$id = postvalue("id");
if(intval($id)==0)
	$id = 1;

//If undefined session value for mastet table, but exist post value master table, than take second
//It may be happen only when use dpInline mode on page add
if(!@$_SESSION[$sessionPrefix."_mastertable"] && postvalue("mastertable"))
	$_SESSION[$sessionPrefix."_mastertable"] = postvalue("mastertable");
	
$xt = new Xtempl();
	
// assign an id
$xt->assign("id",$id);
	
$auditObj = GetAuditObject($strTableName);

//array of params for classes
$params = array("pageType" => PAGE_ADD,"id" => $id,"mode" => $inlineadd);

$params['xt'] = &$xt;
$params['tName'] = $strTableName;
$params['locale_info'] = $locale_info;
$params['baseTableName'] = postvalue("table");
$params['useTabsOnAdd'] = $gSettings->useTabsOnAdd();
$params['templatefile'] = $templatefile;
$params['pageAddLikeInline'] = ($inlineadd==ADD_INLINE);
$params['needSearchClauseObj'] = false;
$params['strOriginalTableName'] = $strOriginalTableName;

if($params['useTabsOnAdd'])
	$params['arrAddTabs'] = $gSettings->getAddTabs();
	
$pageObject = new AddPage($params);
$pageObject->init();

if(isset($_REQUEST['afteradd'])){
		HeaderRedirect("user", "add");
	if($eventObj->exists("AfterAdd") && isset($_SESSION['after_add_data'][$_REQUEST['afteradd']])){
	
		$data = $_SESSION['after_add_data'][$_REQUEST['afteradd']];
		$eventObj->AfterAdd($data['avalues'], $data['keys'],$data['inlineadd'], $pageObject);
	
	}
	unset($_SESSION['after_add_data'][$_REQUEST['afteradd']]);
	
	foreach (is_array($_SESSION['after_add_data']) ? $_SESSION['after_add_data'] : array() as $k=>$v){
		if (!is_array($v) or !array_key_exists('time',$v)) {
			unset($_SESSION['after_add_data'][$k]);
			continue;
		}
		if ($v['time'] < time() - 3600){
			unset($_SESSION['after_add_data'][$k]);
		}
	}
		exit();
}

//Get detail table keys	
$detailKeys = $pageObject->detailKeysByM;

//Array of fields, which appear on add page
$addFields = $pageObject->getFieldsByPageType();

// add button events if exist
if ($inlineadd == ADD_SIMPLE || $inlineadd == ADD_ONTHEFLY)
	$pageObject->addButtonHandlers();


//For show detail tables on master page add
if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	$dpParams = array();
	if($pageObject->isShowDetailTables  && !isMobile())
	{
		$ids = $id;
		$countDetailsIsShow = 0;
		$pageObject->jsSettings['tableSettings'][$strTableName]['isShowDetails'] = $countDetailsIsShow > 0 ? true : false;
		$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array('tableNames'=>$dpParams['strTableNames'], 'ids'=>$dpParams['ids']);
	}
}

//	Before Process event
if($eventObj->exists("BeforeProcessAdd"))
{
	$eventObj->BeforeProcessAdd($conn, $pageObject);
}

// proccess captcha
if ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{
	if($pageObject->captchaExists())
	{
		$pageObject->doCaptchaCode();
	}
}
	
// insert new record if we have to
if(@$_POST["a"]=="added")
{
	$afilename_values=array();
	$avalues=array();
	$blobfields=array();
//	processing UserType - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_UserType = $pageObject->getControl("UserType", $id);
		$control_UserType->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing UserType - end
//	processing Username - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Username = $pageObject->getControl("Username", $id);
		$control_Username->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Username - end
//	processing Password - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Password = $pageObject->getControl("Password", $id);
		$control_Password->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Password - end
//	processing CustomerId - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_CustomerId = $pageObject->getControl("CustomerId", $id);
		$control_CustomerId->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing CustomerId - end
//	processing Name - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Name = $pageObject->getControl("Name", $id);
		$control_Name->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Name - end
//	processing Active - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Active = $pageObject->getControl("Active", $id);
		$control_Active->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Active - end
//	processing Email - start
	$inlineAddOption = true;
	if($inlineAddOption)
	{
		$control_Email = $pageObject->getControl("Email", $id);
		$control_Email->readWebValue($avalues, $blobfields, "", false, $afilename_values);
	}
//	processing Email - end

	// insert ownerid value if it exists an It hasn't already set by user
	if( $strOriginalTableName == $pageObject->pSet->getOwnerTable("Id") && ( !CheckTablePermissions($strTableName, 'M') || !strlen( $avalues["Id"] ) ) )
		$avalues["Id"] = prepare_for_db("Id", $_SESSION["_".$strTableName."_OwnerID"]);

//	insert masterkey value if exists and if not specified
	if(@$_SESSION[$sessionPrefix."_mastertable"]=="customer")
	{
		if(postvalue("masterkey1"))
			$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");
		
		if(!isset($avalues["CustomerId"]) || $avalues["CustomerId"] == ""){
			$avalues["CustomerId"] = prepare_for_db("CustomerId",$_SESSION[$sessionPrefix."_masterkey1"]);
		}
			
	}

	$lookupMainSettings = getLookupMainTableSettings($strTableName, postvalue("table"), postvalue("field"));
	if($lookupMainSettings)
	{
		$mainField = postvalue("field");
		if($lookupMainSettings->useCategory($mainField) && !isset($avalues[$lookupMainSettings->getCategoryFilter($mainField)]))
		{
			$avalues[$lookupMainSettings->getCategoryFilter($mainField)] = postvalue("category");
		}
	}

	$failed_inline_add=false;
	//	add filenames to values
	foreach($afilename_values as $akey=>$value)
		$avalues[$akey]=$value;
		
//	before Add event
	$retval = true;
	if($eventObj->exists("BeforeAdd"))
		$retval = $eventObj->BeforeAdd($avalues,$usermessage,(bool)$inlineadd, $pageObject);
	
	if($retval)
	{
		//check if some values are duplicated for the fields not allowing duplicates
		$retval = !$pageObject->hasDeniedDuplicateValues($avalues, $usermessage);	
	}

	// if get save data and user is logged and not check permission
	if ($avalues && !CheckTablePermissions($strTableName, "A") && isLogged()) {
		$retval = false;
		$usermessage = 'You have no permissions to complete this action.';
	}
	
	// if get save data and user is not logged or guest
	if ($avalues && ((!CheckTablePermissions($strTableName, "A") && isLoggedAsGuest()) || !isLogged())) {
		$retval = false;
		$usermessage = "Your session has expired." . "<a href='#' id='loginButtonContinue" . $pageObject->id . "'>" . "Login" . "</a>" . " to save data.";
	}

	if($retval && $pageObject->isCaptchaOk)
	{
		//add or set updated lat-lng values for all map fileds with 'UpdateLatLng' ticked
		$pageObject->setUpdatedLatLng( $avalues );
		
		$_SESSION[$strTableName."_count_captcha"] = $_SESSION[$strTableName."_count_captcha"]+1;
		
		$customAddResult = true;
		$customAddError = false;
		if($eventObj->exists("CustomAdd"))
		{
			$customAddResult = $eventObj->CustomAdd($avalues, $keys, $customAddError, (boolean)$inlineadd, $pageObject);
			if($keys && !is_array($keys))
				$keys = array("ID" => $keys);
			elseif((is_array($keys) && !count($keys)) || !$keys)
				$keys = prepareTableKeysAfterInsert($strOriginalTableName, $avalues, $pageObject, $keys);
			
			if(!$customAddResult && !$customAddError)
				$mesClass = "";
		}

		if($customAddResult && !$customAddError)
		{
			if(DoInsertRecord($strOriginalTableName,$avalues,$blobfields,$id,$pageObject, $pageObject->cipherer, $keys))
			{
				$IsSaved=true;
//	after edit event
				if($auditObj || $eventObj->exists("AfterAdd"))
				{
					foreach($keys as $idx=>$val)
						$avalues[$idx]=$val;
				}
				
				if($auditObj)
					$auditObj->LogAdd($strTableName,$avalues,$keys);
				
// Give possibility to all edit controls to clean their data				
//	processing UserType - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_UserType->afterSuccessfulSave();
				}
//	processing UserType - end
//	processing Username - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_Username->afterSuccessfulSave();
				}
//	processing Username - end
//	processing Password - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_Password->afterSuccessfulSave();
				}
//	processing Password - end
//	processing CustomerId - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_CustomerId->afterSuccessfulSave();
				}
//	processing CustomerId - end
//	processing Name - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_Name->afterSuccessfulSave();
				}
//	processing Name - end
//	processing Active - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_Active->afterSuccessfulSave();
				}
//	processing Active - end
//	processing Email - start
				$inlineAddOption = true;
				if($inlineAddOption)
				{
					$control_Email->afterSuccessfulSave();
				}
//	processing Email - end
	
				$afterAdd_id = '';	
				if($eventObj->exists("AfterAdd") && $inlineadd!=ADD_MASTER){
					$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
				} else if ($eventObj->exists("AfterAdd") && $inlineadd==ADD_MASTER){
					if($onFly)
						$eventObj->AfterAdd($avalues,$keys,(bool)$inlineadd, $pageObject);
					else{
						$afterAdd_id = generatePassword(20);	
					
						$_SESSION['after_add_data'][$afterAdd_id] = array(
							'avalues'=>$avalues,
							'keys'=>$keys,
							'inlineadd'=>(bool)$inlineadd,
							'time' => time()
						);	
					}
				}
					
				if($inlineadd==ADD_SIMPLE || $inlineadd==ADD_MASTER)
				{
					$permis = array();
					$keylink = "";$k = 0;
					foreach($keys as $idx=>$val)
					{
						if($k!=0)
							$keylink .="&";
						$keylink .="editid".(++$k)."=".runner_htmlspecialchars(rawurlencode(@$val));
					}
					$permis = $pageObject->getPermissions();				
					if (count($keys))
					{
						$message .="</br>";
						if($pageObject->pSet->hasEditPage() && $permis['edit'])
							$message .="&nbsp;<a href='".GetTableLink("user", "edit", $keylink)."'>"."Edit"."</a>&nbsp;";
						if($pageObject->pSet->hasViewPage() && $permis['search'])
							$message .="&nbsp;<a href='".GetTableLink("user", "view", $keylink)."'>"."View"."</a>&nbsp;";
					}
					$mesClass = "";	
				}
			}
		}
		elseif($customAddError)
			$message = $customAddError;
	}
	else
	{
		$message = $usermessage;
		$status = "DECLINED";
		$readavalues = true;
	}
}
if($message)
	$message = "<div class='".$mesClass."'>".$message."</div>";

// PRG rule, to avoid POSTDATA resend
if (no_output_done() && $inlineadd==ADD_SIMPLE && $IsSaved)
{
	// saving message
	$_SESSION["message_add"] = ($message ? $message : "");
	// redirect
	HeaderRedirect("user", $pageObject->getPageType());
	// turned on output buffering, so we need to stop script
	exit();
}

if($inlineadd==ADD_MASTER && $IsSaved)
	$_SESSION["message_add"] = ($message ? $message : "");
	
// for PRG rule, to avoid POSTDATA resend. Saving mess in session
if($inlineadd==ADD_SIMPLE && isset($_SESSION["message_add"]))
{
	$message = $_SESSION["message_add"];
	unset($_SESSION["message_add"]);
}

$defvalues=array();

//	copy record
if(array_key_exists("copyid1",$_REQUEST) || array_key_exists("editid1",$_REQUEST))
{
	$copykeys=array();
	if(array_key_exists("copyid1",$_REQUEST))
	{
		$copykeys["Id"]=postvalue("copyid1");
	}
	else
	{
		$copykeys["Id"]=postvalue("editid1");
	}
	$strWhere=KeyWhere($copykeys);
	$strWhere=whereAdd($strWhere,SecuritySQL("Search"));
	$strSQL = $gQuery->gSQLWhere($strWhere);

	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$defvalues = $pageObject->cipherer->DecryptFetchedArray($rs);
	if(!$defvalues)
		$defvalues=array();
//	clear key fields
	$defvalues["Id"]="";
//call CopyOnLoad event
	if($eventObj->exists("CopyOnLoad"))
		$eventObj->CopyOnLoad($defvalues,$strWhere, $pageObject);
}
else
{
}

//	insert default ownerid value if exists
	if($strOriginalTableName == $pageObject->pSet->getOwnerTable("Id"))
		$defvalues["Id"] = prepare_for_db("Id",$_SESSION["_".$strTableName."_OwnerID"]);

//	set default values for the foreign keys

if(@$_SESSION[$sessionPrefix."_mastertable"]=="customer")
{
	if(postvalue("masterkey1"))
		$_SESSION[$sessionPrefix."_masterkey1"] = postvalue("masterkey1");

	if(postvalue("mainMPageType")<>"add")
		$defvalues["CustomerId"] = @$_SESSION[$sessionPrefix."_masterkey1"];	
	
}


$lookupMainSettings = getLookupMainTableSettings($strTableName, postvalue("table"), postvalue("field"));
if($lookupMainSettings)
{
	$mainField = postvalue("field");
	if($lookupMainSettings->useCategory($mainField) && !isset($avalues[$lookupMainSettings->getCategoryFilter($mainField)]))
	{
		$defvalues[$lookupMainSettings->getCategoryFilter($mainField)] = postvalue("category");
	}
}


if($readavalues)
{
	$defvalues["UserType"]=@$avalues["UserType"];
	$defvalues["Username"]=@$avalues["Username"];
	$defvalues["Password"]=@$avalues["Password"];
	$defvalues["CustomerId"]=@$avalues["CustomerId"];
	$defvalues["Name"]=@$avalues["Name"];
	$defvalues["Active"]=@$avalues["Active"];
	$defvalues["Email"]=@$avalues["Email"];
}

if($eventObj->exists("ProcessValuesAdd"))
	$eventObj->ProcessValuesAdd($defvalues, $pageObject);


//for basic files
$includes="";

if($inlineadd!=ADD_INLINE)
{
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$includes .= GetBaseScriptsForPage(false);
		if (!isMobile())
			$includes.="<div id=\"search_suggest\"></div>\r\n";
	}
	
	if(!$pageObject->isAppearOnTabs("UserType"))
		$xt->assign("UserType_fieldblock",true);
	else
		$xt->assign("UserType_tabfieldblock",true);
	$xt->assign("UserType_label",true);
	if(isEnableSection508())
		$xt->assign_section("UserType_label","<label for=\"".GetInputElementId("UserType", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Username"))
		$xt->assign("Username_fieldblock",true);
	else
		$xt->assign("Username_tabfieldblock",true);
	$xt->assign("Username_label",true);
	if(isEnableSection508())
		$xt->assign_section("Username_label","<label for=\"".GetInputElementId("Username", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Password"))
		$xt->assign("Password_fieldblock",true);
	else
		$xt->assign("Password_tabfieldblock",true);
	$xt->assign("Password_label",true);
	if(isEnableSection508())
		$xt->assign_section("Password_label","<label for=\"".GetInputElementId("Password", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("CustomerId"))
		$xt->assign("CustomerId_fieldblock",true);
	else
		$xt->assign("CustomerId_tabfieldblock",true);
	$xt->assign("CustomerId_label",true);
	if(isEnableSection508())
		$xt->assign_section("CustomerId_label","<label for=\"".GetInputElementId("CustomerId", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Name"))
		$xt->assign("Name_fieldblock",true);
	else
		$xt->assign("Name_tabfieldblock",true);
	$xt->assign("Name_label",true);
	if(isEnableSection508())
		$xt->assign_section("Name_label","<label for=\"".GetInputElementId("Name", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Active"))
		$xt->assign("Active_fieldblock",true);
	else
		$xt->assign("Active_tabfieldblock",true);
	$xt->assign("Active_label",true);
	if(isEnableSection508())
		$xt->assign_section("Active_label","<label for=\"".GetInputElementId("Active", $id, PAGE_ADD)."\">","</label>");
	
	if(!$pageObject->isAppearOnTabs("Email"))
		$xt->assign("Email_fieldblock",true);
	else
		$xt->assign("Email_tabfieldblock",true);
	$xt->assign("Email_label",true);
	if(isEnableSection508())
		$xt->assign_section("Email_label","<label for=\"".GetInputElementId("Email", $id, PAGE_ADD)."\">","</label>");
	
	
	
	if($inlineadd!=ADD_ONTHEFLY && $inlineadd!=ADD_POPUP)
	{
		$pageObject->body["begin"] .= $includes;
				$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
		$xt->assign("mbackbutton_attrs","id=\"extraBackButton".$id."\"");
		$xt->assign("back_button",true);
	}
	else
	{		
		$xt->assign("cancelbutton_attrs", "id=\"cancelButton".$id."\"");
		$xt->assign("cancel_button",true);
		$xt->assign("header","");
	}
	$xt->assign("save_button",true);
}
$xt->assign("savebutton_attrs","id=\"saveButton".$id."\"");
$xt->assign("message_block",true);
$xt->assign("message",$message);
if(!strlen($message))
{
	$xt->displayBrickHidden("message");
}

//	show readonly fields
$linkdata="";

$i = 0;
$jsKeys = array();
$keyFields = array();
foreach($keys as $field=>$value)
{
	$keyFields[$i] = $field;
	$jsKeys[$i++] = $value;
}

if(@$_POST["a"]=="added" && $inlineadd==ADD_ONTHEFLY)
{
	if( !$error_happened && $status!="DECLINED")
	{
		$addedData = $pageObject->GetAddedDataLookupQuery( $keys, false, postvalue("table"), postvalue("field"), postvalue("pageType") );
		$data =& $addedData[0];	
		
		if($data)
		{
			$respData = array($addedData[1]["linkField"] => @$data[$addedData[1]["linkFieldIndex"]], $addedData[1]["displayField"] => @$data[$addedData[1]["displayFieldIndex"]]);
		}
		else
		{
			$respData = array($addedData[1]["linkField"] => @$avalues[$addedData[1]["linkField"]], $addedData[1]["displayField"] => @$avalues[$addedData[1]["displayField"]]);
		}		
		$returnJSON['success'] = true;
		$returnJSON['keys'] = $jsKeys;
		$returnJSON['keyFields'] = $keyFields;
		$returnJSON['vals'] = $respData;
		$returnJSON['fields'] = $showFields;
	}
	else
	{
		$returnJSON['success'] = false;
		$returnJSON['message'] = $message;
	}
	echo printJSON($returnJSON);
	exit();
}

if(@$_POST["a"]=="added" && ($inlineadd == ADD_INLINE || $inlineadd == ADD_MASTER || $inlineadd==ADD_POPUP)) 
{
	//Preparation   view values
	//	get current values and show edit controls
	$dispFieldAlias = "";
	$data=0;
	$linkAndDispVals = array();
	if(count($keys))
	{
		$where=KeyWhere($keys);
		//	select only owned records
		$where=whereAdd($where,SecuritySQL("Search"));
		
		$forLookup = postvalue('forLookup');
		if ($forLookup)
		{
			$addedData = $pageObject->GetAddedDataLookupQuery( $keys, true, postvalue("table"), postvalue("field") );
			$data =& $addedData[0];
			$linkAndDispVals = array('linkField' => $addedData[0][$addedData[1]["linkField"]], 'displayField' => $addedData[0][$addedData[1]["displayField"]]);
		}
		else
		{
			$strSQL = $gQuery->gSQLWhere_having_fromQuery('', $where, '');		
		
			LogInfo($strSQL);
			$rs=db_query($strSQL,$conn);
			$data = $pageObject->cipherer->DecryptFetchedArray($rs);
		}
	}
	if(!$data)
	{
		$data=$avalues;
		$HaveData=false;
	}
	//check if correct values added



	$keylink="";
	$keylink.="&key1=".runner_htmlspecialchars(rawurlencode(@$data["Id"]));
	
////////////////////////////////////////////
//	Id
	$display = false;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Id"] = $pageObject->showDBValue("Id", $data, $keylink);
		$showFields[] = "Id";
	}	
//	UserType
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["UserType"] = $pageObject->showDBValue("UserType", $data, $keylink);
		$showFields[] = "UserType";
	}	
//	Username
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Username"] = $pageObject->showDBValue("Username", $data, $keylink);
		$showFields[] = "Username";
	}	
//	Password
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Password"] = $pageObject->showDBValue("Password", $data, $keylink);
		$showFields[] = "Password";
	}	
//	CustomerId
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["CustomerId"] = $pageObject->showDBValue("CustomerId", $data, $keylink);
		$showFields[] = "CustomerId";
	}	
//	Name
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Name"] = $pageObject->showDBValue("Name", $data, $keylink);
		$showFields[] = "Name";
	}	
//	Active
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Active"] = $pageObject->showDBValue("Active", $data, $keylink);
		$showFields[] = "Active";
	}	
//	Email
	$display = false;
	if($inlineadd==ADD_MASTER)
		$display = true;
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		$display = true;
	if($display)
	{	
		$showValues["Email"] = $pageObject->showDBValue("Email", $data, $keylink);
		$showFields[] = "Email";
	}	
		$showRawValues["Id"] = substr($data["Id"],0,100);
		$showRawValues["UserType"] = substr($data["UserType"],0,100);
		$showRawValues["Username"] = substr($data["Username"],0,100);
		$showRawValues["Password"] = substr($data["Password"],0,100);
		$showRawValues["CustomerId"] = substr($data["CustomerId"],0,100);
		$showRawValues["Name"] = substr($data["Name"],0,100);
		$showRawValues["Active"] = substr($data["Active"],0,100);
		$showRawValues["Email"] = substr($data["Email"],0,100);
	
	// for custom expression for display field
	if ($dispFieldAlias)
	{
		$showValues[] = $data[$dispFieldAlias];	
		$showFields[] = $dispFieldAlias;
		$showRawValues[] = substr($data[$dispFieldAlias],0,100);
	}
	
	if($inlineadd==ADD_INLINE || $inlineadd==ADD_POPUP)
	{	
		if($IsSaved && count($showValues))
		{
			$returnJSON['success'] = true;
			if($HaveData){
				$returnJSON['noKeys'] = false;
			}else{
				$returnJSON['noKeys'] = true;
			}
			
			$returnJSON['keys'] = $jsKeys;
			$returnJSON['keyFields'] = $keyFields;
			$returnJSON['vals'] = $showValues;
			$returnJSON['fields'] = $showFields;
			$returnJSON['rawVals'] = $showRawValues;
			$returnJSON['detKeys'] = $showDetailKeys;
			$returnJSON['userMess'] = $usermessage;
			$returnJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			// add link and display value if list page is lookup with search
			if(array_key_exists('linkField', $linkAndDispVals))
			{
				$returnJSON['linkValue'] = $linkAndDispVals['linkField'];
				$returnJSON['displayValue'] = $linkAndDispVals['displayField'];
			}
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{ 
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$returnJSON['nonEditable'] = true;
			}
			
			if($inlineadd==ADD_POPUP && isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
				$returnJSON['hideCaptcha'] = true;
		}
		else
		{
			$returnJSON['success'] = false;
			$returnJSON['message'] = $message;
			if(!$pageObject->isCaptchaOk)
				$returnJSON['captcha'] = false;
		}
		echo printJSON($returnJSON);
		exit();
	}
} 

/////////////////////////////////////////////////////////////
if($inlineadd==ADD_MASTER)
{
	$respJSON = array();
	if(($_POST["a"]=="added" && $IsSaved))
	{
		$respJSON['afterAddId'] = $afterAdd_id;
		$respJSON['success'] = true;
		$respJSON['fields'] = $showFields;
		$respJSON['vals'] = $showValues;
		if($onFly){
			if($HaveData)
				$respJSON['noKeys'] = false;
			else
				$respJSON['noKeys'] = true;
			$respJSON['keys'] = $jsKeys;
			$respJSON['keyFields'] = $keyFields;
			$respJSON['rawVals'] = $showRawValues;
			$respJSON['detKeys'] = $showDetailKeys;
			$respJSON['userMess'] = $usermessage;
			$respJSON['hrefs'] = $pageObject->buildDetailGridLinks($showDetailKeys);
			if($globalEvents->exists("IsRecordEditable", $strTableName))
			{
				if(!$globalEvents->IsRecordEditable($showRawValues, true, $strTableName))
					$respJSON['nonEditable'] = true;
			}
		}
		$respJSON['mKeys'] = array();
		for($i=0;$i<count($dpParams['ids']);$i++)
		{
			$data=0;
			if(count($keys))
			{
				$where=KeyWhere($keys);
							//	select only owned records
				$where=whereAdd($where,SecuritySQL("Search"));
				$strSQL = $gQuery->gSQLWhere($where);
				LogInfo($strSQL);
				$rs = db_query($strSQL,$conn);
				$data = $pageObject->cipherer->DecryptFetchedArray($rs);
			}
			if(!$data)
				$data=$avalues;
			
			$mKeyId = 1;
			foreach($mKeys[$dpParams['strTableNames'][$i]] as $mk)
			{
				if($data[$mk])
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = $data[$mk];
				else
					$respJSON['mKeys'][$dpParams['strTableNames'][$i]]['masterkey'.$mKeyId++] = '';
			}
		}
		if(isset($_SESSION[$strTableName."_count_captcha"]) || $_SESSION[$strTableName."_count_captcha"]>0 || $_SESSION[$strTableName."_count_captcha"]<5)
			$respJSON['hidecaptcha'] = true;
	}
	else{
			$respJSON['success'] = false;
			if(!$pageObject->isCaptchaOk)
				$respJSON['captcha'] = false;
			else
				$respJSON['error'] = $message;
			if($onFly)
				$respJSON['message'] = $message;
		}
	echo printJSON($respJSON);
	exit();
}

/////////////////////////////////////////////////////////////
//	prepare Edit Controls
/////////////////////////////////////////////////////////////

//	validation stuff
$control = array();
$controlFields = $addFields;

if( $inlineadd == ADD_INLINE ) //#9069
	$pageObject->removeHiddenColumnsFromInlineFields( $controlFields,  postvalue("screenWidth"), postvalue("screenHeight"), postvalue("orientation") );	
	
foreach($controlFields as $fName)
{
	$gfName = GoodFieldName($fName);
	$controls = array('controls'=>array());
	if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))
	{
		$control[$gfName] = array();
		$parameters = array();
		$parameters["id"] = $id;
		$parameters["ptype"] = PAGE_ADD;
		$parameters["field"] = $fName;
		$parameters["value"] = @$defvalues[$fName];
		$parameters["pageObj"] = $pageObject;
		
		if($pageObject->pSet->isUseRTE($fName))
			$_SESSION[$strTableName."_".$fName."_rte"] = @$defvalues[$fName];
		
		//	Begin Add validation
		$arrValidate = $pageObject->pSet->getValidation($fName);
		$parameters["validate"] = $arrValidate;
		//	End Add validation
	}
	$controls["controls"]['ctrlInd'] = 0;
	$controls["controls"]['id'] = $id;
	$controls["controls"]['fieldName'] = $fName;
	//if richEditor for field
	if($pageObject->pSet->isUseRTE($fName))
	{
		if(!$detailKeys || !in_array($fName, $detailKeys))
			$parameters["mode"]="add";
		$controls["controls"]['mode'] = "add";
	}
	else
	{
		if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$parameters["mode"]="inline_add";
			$controls["controls"]['mode'] = "inline_add";
		}
		else
		{
			if(!$detailKeys || !in_array($fName, $detailKeys) || $fName == postvalue("category"))	
				$parameters["mode"]="add";
			$controls["controls"]['mode'] = "add";
		}
	}
	
	if(!$detailKeys || !in_array($fName, $detailKeys))
	{
		AssignFunction($control[$gfName], "xt_buildeditcontrol", $parameters);
		$xt->assignbyref($gfName."_editcontrol",$control[$gfName]);
	}
	elseif($detailKeys && in_array($fName, $detailKeys))
	{
		$controls["controls"]['value'] = @$defvalues[$fName];
	}
	
	// category control field
	$strCategoryControl = $pageObject->getMainLookupFieldNameForDependant($fName);
	
	if($strCategoryControl !== "" && in_array($strCategoryControl, $controlFields))
		$vals = array($fName => @$defvalues[$fName], $strCategoryControl => @$defvalues[$strCategoryControl]);
	else
		$vals = array($fName => @$defvalues[$fName]);
	
	$preload = $pageObject->fillPreload($fName, $vals);
	if($preload!==false)
	{
		$controls["controls"]['preloadData'] = $preload;
		if(!@$defvalues[$fName] && count($preload["vals"])>0)
			$defvalues[$fName] = $preload["vals"][0];
	}
	$pageObject->fillControlsMap($controls);
	
	//fill field tool tips
	$pageObject->fillFieldToolTips($fName);
	
	// fill special settings for timepicker
	if($pageObject->pSet->getEditFormat($fName) == 'Time')
		$pageObject->fillTimePickSettings($fName, @$defvalues[$fName]);
	
	if((($detailKeys && in_array($fName, $detailKeys)) || $fName == postvalue("category")) && array_key_exists($fName, $defvalues))
	{
		$value = $pageObject->showDBValue($fName, $defvalues);
		
		$xt->assign($gfName."_editcontrol", $value);
	}
}

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && ($inlineadd==ADD_SIMPLE || $inlineadd==ADD_POPUP) && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
		include("classes/searchclause.php");
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
		
	$flyId = $ids+1;
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_ADD;
		$options["mainMasterPageType"] = PAGE_ADD;
		$options['masterTable'] = "user";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$pageObject->AddCSSFile($layout->getCSSFiles(isRTL(), isMobile()));
		}	
			
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $flyId++;
		$mkr = 1;
		
		foreach($mKeys[$strTableName] as $mk)
		{
			if($defvalues[$mk])
				$options['masterKeysReq'][$mkr++] = $defvalues[$mk];
			else
				$options['masterKeysReq'][$mkr++] = '';
		}
		$listPageObject = ListPage::createListPage($strTableName,$options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		$flyId = $listPageObject->recId+1;
		
		//set page events
		foreach($listPageObject->eventsObject->events as $event => $name)
			$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
		
		//add detail settings to master settings
		$listPageObject->addControlsJSAndCSS();
		$listPageObject->fillSetCntrlMaps();
		$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];

		$dControlsMap[$strTableName] = $listPageObject->controlsMap;
		$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
		
		foreach($listPageObject->jsSettings["global"]["shortTNames"] as $tName => $shortTName){
			$pageObject->settingsMap["globalSettings"]["shortTNames"][$tName] = $shortTName;
		}
		
		//Add detail's js files to master's files
		$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
		
		//Add detail's css files to master's files
		$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());

		$xt->assign("details_".GoodFieldName($listPageObject->tName), true);
	
		$xtParams = array("params" => false);
		AssignMethod($xtParams, 'showPage', $listPageObject);
		$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id'], 'pType'=>PAGE_LIST);
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap;
	$strTableName = "user";
}
/////////////////////////////////////////////////////////////
//fill jsSettings and ControlsHTMLMap
$pageObject->fillSetCntrlMaps();

$pageObject->addCommonJs();

if($inlineadd == ADD_SIMPLE)
{
	$pageObject->body['end'] = array();
	AssignMethod($pageObject->body['end'], "assignBodyEnd", $pageObject);
	
	$xt->assign("flybody", true);	
	$xt->assign("body", $pageObject->body);
	
	$pageObject->assignFormFooterAndHeaderBricks( true );
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_MASTER || $inlineadd==ADD_POPUP)
{ 
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody", $pageObject->body);
	$xt->assign("body",true);
}	

$xt->assign("style_block",true);
$pageObject->xt->assign("legend", true);

if($eventObj->exists("BeforeShowAdd"))
	$eventObj->BeforeShowAdd($xt, $templatefile, $pageObject);
	
if($inlineadd != ADD_SIMPLE)
{
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;	
}

if($inlineadd==ADD_ONTHEFLY || $inlineadd==ADD_POPUP)
{
	$pageObject->displayAJAX($templatefile, $id+1);
	exit(); // .net compatibility
}
elseif ($inlineadd == ADD_INLINE)
{
	$xt->load_template($templatefile);
	$returnJSON["html"] = array();
	foreach($controlFields as $fName)
	{
		$returnJSON["html"][$fName] = $xt->fetchVar(GoodFieldName($fName)."_editcontrol");	
	}	
	$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
	$returnJSON["additionalCSS"] = $pageObject->grabAllCSSFiles();
	echo printJSON($returnJSON); 
	exit(); // .net compatibility
}
else
	$pageObject->display($templatefile);

	
?>
