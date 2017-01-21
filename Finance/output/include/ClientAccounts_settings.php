<?php
require_once(getabspath("classes/cipherer.php"));




$tdataClientAccounts = array();
	$tdataClientAccounts[".truncateText"] = true;
	$tdataClientAccounts[".NumberOfChars"] = 80;
	$tdataClientAccounts[".ShortName"] = "ClientAccounts";
	$tdataClientAccounts[".OwnerID"] = "";
	$tdataClientAccounts[".OriginalTable"] = "users";

//	field labels
$fieldLabelsClientAccounts = array();
$fieldToolTipsClientAccounts = array();
$pageTitlesClientAccounts = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsClientAccounts["English"] = array();
	$fieldToolTipsClientAccounts["English"] = array();
	$pageTitlesClientAccounts["English"] = array();
	$fieldLabelsClientAccounts["English"]["id"] = "Id";
	$fieldToolTipsClientAccounts["English"]["id"] = "";
	$fieldLabelsClientAccounts["English"]["FirstName"] = "First Name";
	$fieldToolTipsClientAccounts["English"]["FirstName"] = "";
	$fieldLabelsClientAccounts["English"]["LastName"] = "Last Name";
	$fieldToolTipsClientAccounts["English"]["LastName"] = "";
	$fieldLabelsClientAccounts["English"]["ClientNo"] = "Client No";
	$fieldToolTipsClientAccounts["English"]["ClientNo"] = "";
	$fieldLabelsClientAccounts["English"]["Sex"] = "Sex";
	$fieldToolTipsClientAccounts["English"]["Sex"] = "";
	$fieldLabelsClientAccounts["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsClientAccounts["English"]["DateOfBirth"] = "";
	$fieldLabelsClientAccounts["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsClientAccounts["English"]["TelephoneNo"] = "";
	$fieldLabelsClientAccounts["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipsClientAccounts["English"]["EmailAddress"] = "";
	$fieldLabelsClientAccounts["English"]["CurrentAddress"] = "Current Address";
	$fieldToolTipsClientAccounts["English"]["CurrentAddress"] = "";
	$fieldLabelsClientAccounts["English"]["PlaceOfBirth"] = "Place Of Birth";
	$fieldToolTipsClientAccounts["English"]["PlaceOfBirth"] = "";
	$fieldLabelsClientAccounts["English"]["PassportOrID"] = "Passport Or ID";
	$fieldToolTipsClientAccounts["English"]["PassportOrID"] = "";
	$fieldLabelsClientAccounts["English"]["EmergencyContactPerson"] = "Emergency Contact Person";
	$fieldToolTipsClientAccounts["English"]["EmergencyContactPerson"] = "";
	$fieldLabelsClientAccounts["English"]["EmergencyContactRelation"] = "Emergency Contact Relation";
	$fieldToolTipsClientAccounts["English"]["EmergencyContactRelation"] = "";
	$fieldLabelsClientAccounts["English"]["EmergencyContactTel"] = "Emergency Contact Tel";
	$fieldToolTipsClientAccounts["English"]["EmergencyContactTel"] = "";
	$fieldLabelsClientAccounts["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsClientAccounts["English"]["LastModifiedBy"] = "";
	$fieldLabelsClientAccounts["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsClientAccounts["English"]["LastModifiedDate"] = "";
	$fieldLabelsClientAccounts["English"]["AccountName"] = "Account Name";
	$fieldToolTipsClientAccounts["English"]["AccountName"] = "";
	$fieldLabelsClientAccounts["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsClientAccounts["English"]["AccountNumber"] = "";
	$fieldLabelsClientAccounts["English"]["OpeningAccountDate"] = "Opening Account Date";
	$fieldToolTipsClientAccounts["English"]["OpeningAccountDate"] = "";
	$fieldLabelsClientAccounts["English"]["OpeningAccountBalance"] = "Opening Account Balance";
	$fieldToolTipsClientAccounts["English"]["OpeningAccountBalance"] = "";
	$fieldLabelsClientAccounts["English"]["Username"] = "Username";
	$fieldToolTipsClientAccounts["English"]["Username"] = "";
	$fieldLabelsClientAccounts["English"]["Password"] = "Password";
	$fieldToolTipsClientAccounts["English"]["Password"] = "";
	$fieldLabelsClientAccounts["English"]["UserLevel"] = "User Level";
	$fieldToolTipsClientAccounts["English"]["UserLevel"] = "";
	$fieldLabelsClientAccounts["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsClientAccounts["English"]["InterestRate"] = "";
	$fieldLabelsClientAccounts["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsClientAccounts["English"]["SetWithdrawDate"] = "";
	if (count($fieldToolTipsClientAccounts["English"]))
		$tdataClientAccounts[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsClientAccounts[""] = array();
	$fieldToolTipsClientAccounts[""] = array();
	$pageTitlesClientAccounts[""] = array();
	if (count($fieldToolTipsClientAccounts[""]))
		$tdataClientAccounts[".isUseToolTips"] = true;
}


	$tdataClientAccounts[".NCSearch"] = true;



$tdataClientAccounts[".shortTableName"] = "ClientAccounts";
$tdataClientAccounts[".nSecOptions"] = 0;
$tdataClientAccounts[".recsPerRowPrint"] = 1;
$tdataClientAccounts[".mainTableOwnerID"] = "";
$tdataClientAccounts[".moveNext"] = 1;
$tdataClientAccounts[".entityType"] = 1;

$tdataClientAccounts[".strOriginalTableName"] = "users";

	



$tdataClientAccounts[".showAddInPopup"] = false;

$tdataClientAccounts[".showEditInPopup"] = false;

$tdataClientAccounts[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataClientAccounts[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataClientAccounts[".fieldsForRegister"] = array();

$tdataClientAccounts[".listAjax"] = false;

	$tdataClientAccounts[".audit"] = false;

	$tdataClientAccounts[".locking"] = false;

$tdataClientAccounts[".edit"] = true;
$tdataClientAccounts[".afterEditAction"] = 1;
$tdataClientAccounts[".closePopupAfterEdit"] = 1;
$tdataClientAccounts[".afterEditActionDetTable"] = "";

$tdataClientAccounts[".add"] = true;
$tdataClientAccounts[".afterAddAction"] = 0;
$tdataClientAccounts[".closePopupAfterAdd"] = 1;
$tdataClientAccounts[".afterAddActionDetTable"] = "";

$tdataClientAccounts[".list"] = true;




$tdataClientAccounts[".view"] = true;

$tdataClientAccounts[".import"] = true;

$tdataClientAccounts[".exportTo"] = true;

$tdataClientAccounts[".printFriendly"] = true;

$tdataClientAccounts[".delete"] = true;

$tdataClientAccounts[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataClientAccounts[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataClientAccounts[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataClientAccounts[".searchSaving"] = true;
//

$tdataClientAccounts[".showSearchPanel"] = true;
		$tdataClientAccounts[".flexibleSearch"] = true;

$tdataClientAccounts[".isUseAjaxSuggest"] = true;

$tdataClientAccounts[".rowHighlite"] = true;



$tdataClientAccounts[".addPageEvents"] = true;

// use timepicker for search panel
$tdataClientAccounts[".isUseTimeForSearch"] = false;





$tdataClientAccounts[".allSearchFields"] = array();
$tdataClientAccounts[".filterFields"] = array();
$tdataClientAccounts[".requiredSearchFields"] = array();

$tdataClientAccounts[".allSearchFields"][] = "FirstName";
	$tdataClientAccounts[".allSearchFields"][] = "LastName";
	$tdataClientAccounts[".allSearchFields"][] = "id";
	$tdataClientAccounts[".allSearchFields"][] = "Sex";
	$tdataClientAccounts[".allSearchFields"][] = "DateOfBirth";
	$tdataClientAccounts[".allSearchFields"][] = "TelephoneNo";
	$tdataClientAccounts[".allSearchFields"][] = "EmailAddress";
	$tdataClientAccounts[".allSearchFields"][] = "CurrentAddress";
	$tdataClientAccounts[".allSearchFields"][] = "PlaceOfBirth";
	$tdataClientAccounts[".allSearchFields"][] = "PassportOrID";
	$tdataClientAccounts[".allSearchFields"][] = "EmergencyContactPerson";
	$tdataClientAccounts[".allSearchFields"][] = "EmergencyContactRelation";
	$tdataClientAccounts[".allSearchFields"][] = "EmergencyContactTel";
	$tdataClientAccounts[".allSearchFields"][] = "AccountName";
	$tdataClientAccounts[".allSearchFields"][] = "ClientNo";
	$tdataClientAccounts[".allSearchFields"][] = "AccountNumber";
	$tdataClientAccounts[".allSearchFields"][] = "OpeningAccountDate";
	$tdataClientAccounts[".allSearchFields"][] = "OpeningAccountBalance";
	$tdataClientAccounts[".allSearchFields"][] = "SetWithdrawDate";
	$tdataClientAccounts[".allSearchFields"][] = "InterestRate";
	$tdataClientAccounts[".allSearchFields"][] = "Username";
	$tdataClientAccounts[".allSearchFields"][] = "UserLevel";
	$tdataClientAccounts[".allSearchFields"][] = "LastModifiedBy";
	$tdataClientAccounts[".allSearchFields"][] = "LastModifiedDate";
	

$tdataClientAccounts[".googleLikeFields"] = array();
$tdataClientAccounts[".googleLikeFields"][] = "FirstName";
$tdataClientAccounts[".googleLikeFields"][] = "LastName";
$tdataClientAccounts[".googleLikeFields"][] = "Sex";
$tdataClientAccounts[".googleLikeFields"][] = "DateOfBirth";
$tdataClientAccounts[".googleLikeFields"][] = "TelephoneNo";
$tdataClientAccounts[".googleLikeFields"][] = "EmailAddress";
$tdataClientAccounts[".googleLikeFields"][] = "CurrentAddress";
$tdataClientAccounts[".googleLikeFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".googleLikeFields"][] = "PassportOrID";
$tdataClientAccounts[".googleLikeFields"][] = "ClientNo";
$tdataClientAccounts[".googleLikeFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".googleLikeFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".googleLikeFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".googleLikeFields"][] = "AccountName";
$tdataClientAccounts[".googleLikeFields"][] = "AccountNumber";
$tdataClientAccounts[".googleLikeFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".googleLikeFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".googleLikeFields"][] = "Username";
$tdataClientAccounts[".googleLikeFields"][] = "UserLevel";
$tdataClientAccounts[".googleLikeFields"][] = "LastModifiedBy";
$tdataClientAccounts[".googleLikeFields"][] = "LastModifiedDate";
$tdataClientAccounts[".googleLikeFields"][] = "InterestRate";
$tdataClientAccounts[".googleLikeFields"][] = "SetWithdrawDate";


$tdataClientAccounts[".advSearchFields"] = array();
$tdataClientAccounts[".advSearchFields"][] = "FirstName";
$tdataClientAccounts[".advSearchFields"][] = "LastName";
$tdataClientAccounts[".advSearchFields"][] = "id";
$tdataClientAccounts[".advSearchFields"][] = "Sex";
$tdataClientAccounts[".advSearchFields"][] = "DateOfBirth";
$tdataClientAccounts[".advSearchFields"][] = "TelephoneNo";
$tdataClientAccounts[".advSearchFields"][] = "EmailAddress";
$tdataClientAccounts[".advSearchFields"][] = "CurrentAddress";
$tdataClientAccounts[".advSearchFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".advSearchFields"][] = "PassportOrID";
$tdataClientAccounts[".advSearchFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".advSearchFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".advSearchFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".advSearchFields"][] = "AccountName";
$tdataClientAccounts[".advSearchFields"][] = "ClientNo";
$tdataClientAccounts[".advSearchFields"][] = "AccountNumber";
$tdataClientAccounts[".advSearchFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".advSearchFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".advSearchFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".advSearchFields"][] = "InterestRate";
$tdataClientAccounts[".advSearchFields"][] = "Username";
$tdataClientAccounts[".advSearchFields"][] = "UserLevel";
$tdataClientAccounts[".advSearchFields"][] = "LastModifiedBy";
$tdataClientAccounts[".advSearchFields"][] = "LastModifiedDate";

$tdataClientAccounts[".tableType"] = "list";

$tdataClientAccounts[".printerPageOrientation"] = 0;
$tdataClientAccounts[".nPrinterPageScale"] = 100;

$tdataClientAccounts[".nPrinterSplitRecords"] = 40;

$tdataClientAccounts[".nPrinterPDFSplitRecords"] = 40;



$tdataClientAccounts[".geocodingEnabled"] = false;





$tdataClientAccounts[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataClientAccounts[".pageSize"] = 20;

$tdataClientAccounts[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataClientAccounts[".strOrderBy"] = $tstrOrderBy;

$tdataClientAccounts[".orderindexes"] = array();
$tdataClientAccounts[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataClientAccounts[".sqlHead"] = "SELECT id,  FirstName,  LastName,  Sex,  DateOfBirth,  TelephoneNo,  EmailAddress,  CurrentAddress,  PlaceOfBirth,  PassportOrID,  ClientNo,  EmergencyContactPerson,  EmergencyContactRelation,  EmergencyContactTel,  AccountName,  AccountNumber,  OpeningAccountDate,  OpeningAccountBalance,  Username,  Password,  UserLevel,  LastModifiedBy,  LastModifiedDate,  InterestRate,  SetWithdrawDate";
$tdataClientAccounts[".sqlFrom"] = "FROM users";
$tdataClientAccounts[".sqlWhereExpr"] = "";
$tdataClientAccounts[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "FirstName";
	
		$tabFields[] = "LastName";
	
		$tabFields[] = "Sex";
	
		$tabFields[] = "DateOfBirth";
	
		$tabFields[] = "TelephoneNo";
	
		$tabFields[] = "EmailAddress";
	
		$tabFields[] = "CurrentAddress";
$arrEditTabs[] = array('tabId'=>'Step1',
					   'tabName'=>"Personal Details 1",
					   'nType'=>'2',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "PlaceOfBirth";
	
		$tabFields[] = "PassportOrID";
	
		$tabFields[] = "ClientNo";
	
		$tabFields[] = "EmergencyContactPerson";
	
		$tabFields[] = "EmergencyContactRelation";
	
		$tabFields[] = "EmergencyContactTel";
$arrEditTabs[] = array('tabId'=>'Step2',
					   'tabName'=>"Personal Details 2",
					   'nType'=>'2',
					   'nOrder'=>9,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "AccountName";
	
		$tabFields[] = "AccountNumber";
	
		$tabFields[] = "OpeningAccountDate";
	
		$tabFields[] = "OpeningAccountBalance";
	
		$tabFields[] = "SetWithdrawDate";
	
		$tabFields[] = "InterestRate";
$arrEditTabs[] = array('tabId'=>'Saving_Account_Info1',
					   'tabName'=>"Saving Account Info",
					   'nType'=>'2',
					   'nOrder'=>16,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "Username";
	
		$tabFields[] = "Password";
	
		$tabFields[] = "UserLevel";
	
		$tabFields[] = "LastModifiedBy";
	
		$tabFields[] = "LastModifiedDate";
	
		$tabFields[] = "id";
$arrEditTabs[] = array('tabId'=>'User_Details1',
					   'tabName'=>"User Details",
					   'nType'=>'2',
					   'nOrder'=>23,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>0);
$tdataClientAccounts[".arrEditTabs"] = $arrEditTabs;


//fill array of tabs for add page
$arrAddTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "FirstName";
	
		$tabFields[] = "LastName";
	
		$tabFields[] = "Sex";
	
		$tabFields[] = "DateOfBirth";
	
		$tabFields[] = "TelephoneNo";
	
		$tabFields[] = "EmailAddress";
	
		$tabFields[] = "CurrentAddress";
$arrAddTabs[] = array('tabId'=>'Step1',
					  'tabName'=>"Personal Details 1",
					  'nType'=>'2',
					  'nOrder'=>1,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "PlaceOfBirth";
	
		$tabFields[] = "PassportOrID";
	
		$tabFields[] = "ClientNo";
	
		$tabFields[] = "EmergencyContactPerson";
	
		$tabFields[] = "EmergencyContactRelation";
	
		$tabFields[] = "EmergencyContactTel";
$arrAddTabs[] = array('tabId'=>'Step2',
					  'tabName'=>"Personal Details 2",
					  'nType'=>'2',
					  'nOrder'=>9,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "AccountName";
	
		$tabFields[] = "AccountNumber";
	
		$tabFields[] = "OpeningAccountDate";
	
		$tabFields[] = "OpeningAccountBalance";
	
		$tabFields[] = "SetWithdrawDate";
	
		$tabFields[] = "InterestRate";
$arrAddTabs[] = array('tabId'=>'Saving_Account_Info1',
					  'tabName'=>"Saving Account Info",
					  'nType'=>'2',
					  'nOrder'=>16,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
	$tabFields = array();
	
	
		$tabFields[] = "Username";
	
		$tabFields[] = "Password";
	
		$tabFields[] = "UserLevel";
	
		$tabFields[] = "LastModifiedBy";
	
		$tabFields[] = "LastModifiedDate";
	
		$tabFields[] = "id";
$arrAddTabs[] = array('tabId'=>'User_Details1',
					  'tabName'=>"User Details",
					  'nType'=>'2',
					  'nOrder'=>23,
					  'tabGroup'=>0,
					  'arrFields'=> $tabFields,
					  'expandSec'=>0);
$tdataClientAccounts[".arrAddTabs"] = $arrAddTabs;



$tdataClientAccounts[".addMultistep"] = true;

$tdataClientAccounts[".editMultistep"] = true;




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataClientAccounts[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataClientAccounts[".arrGroupsPerPage"] = $arrGPP;

$tdataClientAccounts[".highlightSearchResults"] = true;

$tableKeysClientAccounts = array();
$tableKeysClientAccounts[] = "id";
$tdataClientAccounts[".Keys"] = $tableKeysClientAccounts;

$tdataClientAccounts[".listFields"] = array();
$tdataClientAccounts[".listFields"][] = "FirstName";
$tdataClientAccounts[".listFields"][] = "LastName";
$tdataClientAccounts[".listFields"][] = "id";
$tdataClientAccounts[".listFields"][] = "Sex";
$tdataClientAccounts[".listFields"][] = "DateOfBirth";
$tdataClientAccounts[".listFields"][] = "TelephoneNo";
$tdataClientAccounts[".listFields"][] = "EmailAddress";
$tdataClientAccounts[".listFields"][] = "CurrentAddress";
$tdataClientAccounts[".listFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".listFields"][] = "PassportOrID";
$tdataClientAccounts[".listFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".listFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".listFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".listFields"][] = "AccountName";
$tdataClientAccounts[".listFields"][] = "ClientNo";
$tdataClientAccounts[".listFields"][] = "AccountNumber";
$tdataClientAccounts[".listFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".listFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".listFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".listFields"][] = "InterestRate";
$tdataClientAccounts[".listFields"][] = "Username";
$tdataClientAccounts[".listFields"][] = "UserLevel";
$tdataClientAccounts[".listFields"][] = "LastModifiedBy";
$tdataClientAccounts[".listFields"][] = "LastModifiedDate";

$tdataClientAccounts[".hideMobileList"] = array();


$tdataClientAccounts[".viewFields"] = array();
$tdataClientAccounts[".viewFields"][] = "FirstName";
$tdataClientAccounts[".viewFields"][] = "LastName";
$tdataClientAccounts[".viewFields"][] = "id";
$tdataClientAccounts[".viewFields"][] = "Sex";
$tdataClientAccounts[".viewFields"][] = "DateOfBirth";
$tdataClientAccounts[".viewFields"][] = "TelephoneNo";
$tdataClientAccounts[".viewFields"][] = "EmailAddress";
$tdataClientAccounts[".viewFields"][] = "CurrentAddress";
$tdataClientAccounts[".viewFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".viewFields"][] = "PassportOrID";
$tdataClientAccounts[".viewFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".viewFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".viewFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".viewFields"][] = "AccountName";
$tdataClientAccounts[".viewFields"][] = "ClientNo";
$tdataClientAccounts[".viewFields"][] = "AccountNumber";
$tdataClientAccounts[".viewFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".viewFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".viewFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".viewFields"][] = "InterestRate";
$tdataClientAccounts[".viewFields"][] = "Username";
$tdataClientAccounts[".viewFields"][] = "UserLevel";
$tdataClientAccounts[".viewFields"][] = "LastModifiedBy";
$tdataClientAccounts[".viewFields"][] = "LastModifiedDate";

$tdataClientAccounts[".addFields"] = array();
$tdataClientAccounts[".addFields"][] = "FirstName";
$tdataClientAccounts[".addFields"][] = "LastName";
$tdataClientAccounts[".addFields"][] = "Sex";
$tdataClientAccounts[".addFields"][] = "DateOfBirth";
$tdataClientAccounts[".addFields"][] = "TelephoneNo";
$tdataClientAccounts[".addFields"][] = "EmailAddress";
$tdataClientAccounts[".addFields"][] = "CurrentAddress";
$tdataClientAccounts[".addFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".addFields"][] = "PassportOrID";
$tdataClientAccounts[".addFields"][] = "ClientNo";
$tdataClientAccounts[".addFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".addFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".addFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".addFields"][] = "AccountName";
$tdataClientAccounts[".addFields"][] = "AccountNumber";
$tdataClientAccounts[".addFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".addFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".addFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".addFields"][] = "InterestRate";
$tdataClientAccounts[".addFields"][] = "Username";
$tdataClientAccounts[".addFields"][] = "Password";
$tdataClientAccounts[".addFields"][] = "UserLevel";
$tdataClientAccounts[".addFields"][] = "LastModifiedBy";
$tdataClientAccounts[".addFields"][] = "LastModifiedDate";
$tdataClientAccounts[".addFields"][] = "id";

$tdataClientAccounts[".masterListFields"] = array();
$tdataClientAccounts[".masterListFields"][] = "FirstName";
$tdataClientAccounts[".masterListFields"][] = "LastName";
$tdataClientAccounts[".masterListFields"][] = "id";
$tdataClientAccounts[".masterListFields"][] = "Sex";
$tdataClientAccounts[".masterListFields"][] = "DateOfBirth";
$tdataClientAccounts[".masterListFields"][] = "TelephoneNo";
$tdataClientAccounts[".masterListFields"][] = "EmailAddress";
$tdataClientAccounts[".masterListFields"][] = "CurrentAddress";
$tdataClientAccounts[".masterListFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".masterListFields"][] = "PassportOrID";
$tdataClientAccounts[".masterListFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".masterListFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".masterListFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".masterListFields"][] = "AccountName";
$tdataClientAccounts[".masterListFields"][] = "ClientNo";
$tdataClientAccounts[".masterListFields"][] = "AccountNumber";
$tdataClientAccounts[".masterListFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".masterListFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".masterListFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".masterListFields"][] = "InterestRate";
$tdataClientAccounts[".masterListFields"][] = "Username";
$tdataClientAccounts[".masterListFields"][] = "UserLevel";
$tdataClientAccounts[".masterListFields"][] = "LastModifiedBy";
$tdataClientAccounts[".masterListFields"][] = "LastModifiedDate";
$tdataClientAccounts[".masterListFields"][] = "Password";

$tdataClientAccounts[".inlineAddFields"] = array();

$tdataClientAccounts[".editFields"] = array();
$tdataClientAccounts[".editFields"][] = "FirstName";
$tdataClientAccounts[".editFields"][] = "LastName";
$tdataClientAccounts[".editFields"][] = "Sex";
$tdataClientAccounts[".editFields"][] = "DateOfBirth";
$tdataClientAccounts[".editFields"][] = "TelephoneNo";
$tdataClientAccounts[".editFields"][] = "EmailAddress";
$tdataClientAccounts[".editFields"][] = "CurrentAddress";
$tdataClientAccounts[".editFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".editFields"][] = "PassportOrID";
$tdataClientAccounts[".editFields"][] = "ClientNo";
$tdataClientAccounts[".editFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".editFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".editFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".editFields"][] = "AccountName";
$tdataClientAccounts[".editFields"][] = "AccountNumber";
$tdataClientAccounts[".editFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".editFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".editFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".editFields"][] = "InterestRate";
$tdataClientAccounts[".editFields"][] = "Username";
$tdataClientAccounts[".editFields"][] = "Password";
$tdataClientAccounts[".editFields"][] = "UserLevel";
$tdataClientAccounts[".editFields"][] = "LastModifiedBy";
$tdataClientAccounts[".editFields"][] = "LastModifiedDate";
$tdataClientAccounts[".editFields"][] = "id";

$tdataClientAccounts[".inlineEditFields"] = array();

$tdataClientAccounts[".updateSelectedFields"] = array();


$tdataClientAccounts[".exportFields"] = array();
$tdataClientAccounts[".exportFields"][] = "FirstName";
$tdataClientAccounts[".exportFields"][] = "LastName";
$tdataClientAccounts[".exportFields"][] = "id";
$tdataClientAccounts[".exportFields"][] = "Sex";
$tdataClientAccounts[".exportFields"][] = "DateOfBirth";
$tdataClientAccounts[".exportFields"][] = "TelephoneNo";
$tdataClientAccounts[".exportFields"][] = "EmailAddress";
$tdataClientAccounts[".exportFields"][] = "CurrentAddress";
$tdataClientAccounts[".exportFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".exportFields"][] = "PassportOrID";
$tdataClientAccounts[".exportFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".exportFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".exportFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".exportFields"][] = "AccountName";
$tdataClientAccounts[".exportFields"][] = "ClientNo";
$tdataClientAccounts[".exportFields"][] = "AccountNumber";
$tdataClientAccounts[".exportFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".exportFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".exportFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".exportFields"][] = "InterestRate";
$tdataClientAccounts[".exportFields"][] = "Username";
$tdataClientAccounts[".exportFields"][] = "UserLevel";
$tdataClientAccounts[".exportFields"][] = "LastModifiedBy";
$tdataClientAccounts[".exportFields"][] = "LastModifiedDate";
$tdataClientAccounts[".exportFields"][] = "Password";

$tdataClientAccounts[".importFields"] = array();
$tdataClientAccounts[".importFields"][] = "id";
$tdataClientAccounts[".importFields"][] = "FirstName";
$tdataClientAccounts[".importFields"][] = "LastName";
$tdataClientAccounts[".importFields"][] = "Sex";
$tdataClientAccounts[".importFields"][] = "DateOfBirth";
$tdataClientAccounts[".importFields"][] = "TelephoneNo";
$tdataClientAccounts[".importFields"][] = "EmailAddress";
$tdataClientAccounts[".importFields"][] = "CurrentAddress";
$tdataClientAccounts[".importFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".importFields"][] = "PassportOrID";
$tdataClientAccounts[".importFields"][] = "ClientNo";
$tdataClientAccounts[".importFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".importFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".importFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".importFields"][] = "AccountName";
$tdataClientAccounts[".importFields"][] = "AccountNumber";
$tdataClientAccounts[".importFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".importFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".importFields"][] = "Username";
$tdataClientAccounts[".importFields"][] = "Password";
$tdataClientAccounts[".importFields"][] = "UserLevel";
$tdataClientAccounts[".importFields"][] = "LastModifiedBy";
$tdataClientAccounts[".importFields"][] = "LastModifiedDate";
$tdataClientAccounts[".importFields"][] = "InterestRate";
$tdataClientAccounts[".importFields"][] = "SetWithdrawDate";

$tdataClientAccounts[".printFields"] = array();
$tdataClientAccounts[".printFields"][] = "FirstName";
$tdataClientAccounts[".printFields"][] = "LastName";
$tdataClientAccounts[".printFields"][] = "id";
$tdataClientAccounts[".printFields"][] = "Sex";
$tdataClientAccounts[".printFields"][] = "DateOfBirth";
$tdataClientAccounts[".printFields"][] = "TelephoneNo";
$tdataClientAccounts[".printFields"][] = "EmailAddress";
$tdataClientAccounts[".printFields"][] = "CurrentAddress";
$tdataClientAccounts[".printFields"][] = "PlaceOfBirth";
$tdataClientAccounts[".printFields"][] = "PassportOrID";
$tdataClientAccounts[".printFields"][] = "EmergencyContactPerson";
$tdataClientAccounts[".printFields"][] = "EmergencyContactRelation";
$tdataClientAccounts[".printFields"][] = "EmergencyContactTel";
$tdataClientAccounts[".printFields"][] = "AccountName";
$tdataClientAccounts[".printFields"][] = "ClientNo";
$tdataClientAccounts[".printFields"][] = "AccountNumber";
$tdataClientAccounts[".printFields"][] = "OpeningAccountDate";
$tdataClientAccounts[".printFields"][] = "OpeningAccountBalance";
$tdataClientAccounts[".printFields"][] = "SetWithdrawDate";
$tdataClientAccounts[".printFields"][] = "InterestRate";
$tdataClientAccounts[".printFields"][] = "Username";
$tdataClientAccounts[".printFields"][] = "UserLevel";
$tdataClientAccounts[".printFields"][] = "LastModifiedBy";
$tdataClientAccounts[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["id"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","FirstName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FirstName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["FirstName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","LastName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["LastName"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","Sex");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sex";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["Sex"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","DateOfBirth");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateOfBirth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateOfBirth";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientAccounts["DateOfBirth"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","TelephoneNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TelephoneNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TelephoneNo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["TelephoneNo"] = $fdata;
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","EmailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmailAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=75";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["EmailAddress"] = $fdata;
//	CurrentAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CurrentAddress";
	$fdata["GoodName"] = "CurrentAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","CurrentAddress");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "CurrentAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentAddress";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["CurrentAddress"] = $fdata;
//	PlaceOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PlaceOfBirth";
	$fdata["GoodName"] = "PlaceOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","PlaceOfBirth");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PlaceOfBirth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PlaceOfBirth";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["PlaceOfBirth"] = $fdata;
//	PassportOrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PassportOrID";
	$fdata["GoodName"] = "PassportOrID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","PassportOrID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PassportOrID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PassportOrID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["PassportOrID"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClientNo";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "AccountName", "lookup" => "AccountName" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["ClientNo"] = $fdata;
//	EmergencyContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "EmergencyContactPerson";
	$fdata["GoodName"] = "EmergencyContactPerson";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","EmergencyContactPerson");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmergencyContactPerson";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmergencyContactPerson";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["EmergencyContactPerson"] = $fdata;
//	EmergencyContactRelation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "EmergencyContactRelation";
	$fdata["GoodName"] = "EmergencyContactRelation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","EmergencyContactRelation");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmergencyContactRelation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmergencyContactRelation";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["EmergencyContactRelation"] = $fdata;
//	EmergencyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EmergencyContactTel";
	$fdata["GoodName"] = "EmergencyContactTel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","EmergencyContactTel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EmergencyContactTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmergencyContactTel";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["EmergencyContactTel"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountName";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ClientNo";
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["AccountName"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountNumber";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "AccountNumber";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountNumber";

	
	$edata["LookupOrderBy"] = "AccountNumber";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "AccountName", "lookup" => "AccountName" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["AccountNumber"] = $fdata;
//	OpeningAccountDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "OpeningAccountDate";
	$fdata["GoodName"] = "OpeningAccountDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","OpeningAccountDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OpeningAccountDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpeningAccountDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientAccounts["OpeningAccountDate"] = $fdata;
//	OpeningAccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "OpeningAccountBalance";
	$fdata["GoodName"] = "OpeningAccountBalance";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","OpeningAccountBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "OpeningAccountBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpeningAccountBalance";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["OpeningAccountBalance"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","Username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Password");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataClientAccounts["Password"] = $fdata;
//	UserLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UserLevel";
	$fdata["GoodName"] = "UserLevel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","UserLevel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UserLevel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserLevel";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "LookUps";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Value";

	
	$edata["LookupOrderBy"] = "Value";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["UserLevel"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastModifiedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedBy";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LastModifiedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientAccounts["LastModifiedDate"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","InterestRate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InterestRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestRate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientAccounts["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("ClientAccounts","SetWithdrawDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SetWithdrawDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SetWithdrawDate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientAccounts["SetWithdrawDate"] = $fdata;


$tables_data["ClientAccounts"]=&$tdataClientAccounts;
$field_labels["ClientAccounts"] = &$fieldLabelsClientAccounts;
$fieldToolTips["ClientAccounts"] = &$fieldToolTipsClientAccounts;
$page_titles["ClientAccounts"] = &$pageTitlesClientAccounts;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ClientAccounts"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ClientAccounts"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ClientAccounts()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  FirstName,  LastName,  Sex,  DateOfBirth,  TelephoneNo,  EmailAddress,  CurrentAddress,  PlaceOfBirth,  PassportOrID,  ClientNo,  EmergencyContactPerson,  EmergencyContactRelation,  EmergencyContactTel,  AccountName,  AccountNumber,  OpeningAccountDate,  OpeningAccountBalance,  Username,  Password,  UserLevel,  LastModifiedBy,  LastModifiedDate,  InterestRate,  SetWithdrawDate";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ClientAccounts";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto8["m_sql"] = "FirstName";
$proto8["m_srcTableName"] = "ClientAccounts";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto10["m_sql"] = "LastName";
$proto10["m_srcTableName"] = "ClientAccounts";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto12["m_sql"] = "Sex";
$proto12["m_srcTableName"] = "ClientAccounts";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto14["m_sql"] = "DateOfBirth";
$proto14["m_srcTableName"] = "ClientAccounts";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto16["m_sql"] = "TelephoneNo";
$proto16["m_srcTableName"] = "ClientAccounts";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto18["m_sql"] = "EmailAddress";
$proto18["m_srcTableName"] = "ClientAccounts";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto20["m_sql"] = "CurrentAddress";
$proto20["m_srcTableName"] = "ClientAccounts";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PlaceOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto22["m_sql"] = "PlaceOfBirth";
$proto22["m_srcTableName"] = "ClientAccounts";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PassportOrID",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto24["m_sql"] = "PassportOrID";
$proto24["m_srcTableName"] = "ClientAccounts";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto26["m_sql"] = "ClientNo";
$proto26["m_srcTableName"] = "ClientAccounts";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactPerson",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto28["m_sql"] = "EmergencyContactPerson";
$proto28["m_srcTableName"] = "ClientAccounts";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactRelation",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto30["m_sql"] = "EmergencyContactRelation";
$proto30["m_srcTableName"] = "ClientAccounts";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactTel",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto32["m_sql"] = "EmergencyContactTel";
$proto32["m_srcTableName"] = "ClientAccounts";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto34["m_sql"] = "AccountName";
$proto34["m_srcTableName"] = "ClientAccounts";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto36["m_sql"] = "AccountNumber";
$proto36["m_srcTableName"] = "ClientAccounts";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountDate",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto38["m_sql"] = "OpeningAccountDate";
$proto38["m_srcTableName"] = "ClientAccounts";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountBalance",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto40["m_sql"] = "OpeningAccountBalance";
$proto40["m_srcTableName"] = "ClientAccounts";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto42["m_sql"] = "Username";
$proto42["m_srcTableName"] = "ClientAccounts";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto44["m_sql"] = "Password";
$proto44["m_srcTableName"] = "ClientAccounts";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "UserLevel",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto46["m_sql"] = "UserLevel";
$proto46["m_srcTableName"] = "ClientAccounts";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto48["m_sql"] = "LastModifiedBy";
$proto48["m_srcTableName"] = "ClientAccounts";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto50["m_sql"] = "LastModifiedDate";
$proto50["m_srcTableName"] = "ClientAccounts";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto52["m_sql"] = "InterestRate";
$proto52["m_srcTableName"] = "ClientAccounts";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto54["m_sql"] = "SetWithdrawDate";
$proto54["m_srcTableName"] = "ClientAccounts";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "users";
$proto57["m_srcTableName"] = "ClientAccounts";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "FirstName";
$proto57["m_columns"][] = "LastName";
$proto57["m_columns"][] = "Sex";
$proto57["m_columns"][] = "DateOfBirth";
$proto57["m_columns"][] = "TelephoneNo";
$proto57["m_columns"][] = "EmailAddress";
$proto57["m_columns"][] = "CurrentAddress";
$proto57["m_columns"][] = "PlaceOfBirth";
$proto57["m_columns"][] = "PassportOrID";
$proto57["m_columns"][] = "ProfilePhoto";
$proto57["m_columns"][] = "AttachedFile";
$proto57["m_columns"][] = "ClientNo";
$proto57["m_columns"][] = "EmergencyContactPerson";
$proto57["m_columns"][] = "EmergencyContactRelation";
$proto57["m_columns"][] = "EmergencyContactTel";
$proto57["m_columns"][] = "Username";
$proto57["m_columns"][] = "Password";
$proto57["m_columns"][] = "LastModifiedBy";
$proto57["m_columns"][] = "LastModifiedDate";
$proto57["m_columns"][] = "AccountName";
$proto57["m_columns"][] = "AccountNumber";
$proto57["m_columns"][] = "OpeningAccountDate";
$proto57["m_columns"][] = "OpeningAccountBalance";
$proto57["m_columns"][] = "UserLevel";
$proto57["m_columns"][] = "InterestRate";
$proto57["m_columns"][] = "SetWithdrawDate";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "users";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "ClientAccounts";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "ClientAccounts"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 0;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ClientAccounts";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ClientAccounts = createSqlQuery_ClientAccounts();


	
		;

																									

$tdataClientAccounts[".sqlquery"] = $queryData_ClientAccounts;

include_once(getabspath("include/ClientAccounts_events.php"));
$tableEvents["ClientAccounts"] = new eventclass_ClientAccounts;
$tdataClientAccounts[".hasEvents"] = true;

?>