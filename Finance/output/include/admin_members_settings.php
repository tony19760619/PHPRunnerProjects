<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	$fieldLabelsadmin_members["English"]["id"] = "Id";
	$fieldToolTipsadmin_members["English"]["id"] = "";
	$fieldLabelsadmin_members["English"]["FirstName"] = "First Name";
	$fieldToolTipsadmin_members["English"]["FirstName"] = "";
	$fieldLabelsadmin_members["English"]["LastName"] = "Last Name";
	$fieldToolTipsadmin_members["English"]["LastName"] = "";
	$fieldLabelsadmin_members["English"]["Sex"] = "Sex";
	$fieldToolTipsadmin_members["English"]["Sex"] = "";
	$fieldLabelsadmin_members["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsadmin_members["English"]["DateOfBirth"] = "";
	$fieldLabelsadmin_members["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsadmin_members["English"]["TelephoneNo"] = "";
	$fieldLabelsadmin_members["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipsadmin_members["English"]["EmailAddress"] = "";
	$fieldLabelsadmin_members["English"]["CurrentAddress"] = "Current Address";
	$fieldToolTipsadmin_members["English"]["CurrentAddress"] = "";
	$fieldLabelsadmin_members["English"]["PlaceOfBirth"] = "Place Of Birth";
	$fieldToolTipsadmin_members["English"]["PlaceOfBirth"] = "";
	$fieldLabelsadmin_members["English"]["PassportOrID"] = "Passport Or ID";
	$fieldToolTipsadmin_members["English"]["PassportOrID"] = "";
	$fieldLabelsadmin_members["English"]["ProfilePhoto"] = "Profile Photo";
	$fieldToolTipsadmin_members["English"]["ProfilePhoto"] = "";
	$fieldLabelsadmin_members["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipsadmin_members["English"]["AttachedFile"] = "";
	$fieldLabelsadmin_members["English"]["EmergencyContactPerson"] = "Emergency Contact Person";
	$fieldToolTipsadmin_members["English"]["EmergencyContactPerson"] = "";
	$fieldLabelsadmin_members["English"]["EmergencyContactRelation"] = "Emergency Contact Relation";
	$fieldToolTipsadmin_members["English"]["EmergencyContactRelation"] = "";
	$fieldLabelsadmin_members["English"]["EmergencyContactTel"] = "Emergency Contact Tel";
	$fieldToolTipsadmin_members["English"]["EmergencyContactTel"] = "";
	$fieldLabelsadmin_members["English"]["Username"] = "Username";
	$fieldToolTipsadmin_members["English"]["Username"] = "";
	$fieldLabelsadmin_members["English"]["Password"] = "Password";
	$fieldToolTipsadmin_members["English"]["Password"] = "";
	$fieldLabelsadmin_members["English"]["ClientNo"] = "Client No";
	$fieldToolTipsadmin_members["English"]["ClientNo"] = "";
	$fieldLabelsadmin_members["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsadmin_members["English"]["LastModifiedBy"] = "";
	$fieldLabelsadmin_members["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsadmin_members["English"]["LastModifiedDate"] = "";
	$fieldLabelsadmin_members["English"]["AccountName"] = "Account Name";
	$fieldToolTipsadmin_members["English"]["AccountName"] = "";
	$fieldLabelsadmin_members["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsadmin_members["English"]["AccountNumber"] = "";
	$fieldLabelsadmin_members["English"]["OpeningAccountDate"] = "Opening Account Date";
	$fieldToolTipsadmin_members["English"]["OpeningAccountDate"] = "";
	$fieldLabelsadmin_members["English"]["OpeningAccountBalance"] = "Opening Account Balance";
	$fieldToolTipsadmin_members["English"]["OpeningAccountBalance"] = "";
	$fieldLabelsadmin_members["English"]["UserLevel"] = "User Level";
	$fieldToolTipsadmin_members["English"]["UserLevel"] = "";
	$fieldLabelsadmin_members["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsadmin_members["English"]["InterestRate"] = "";
	$fieldLabelsadmin_members["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsadmin_members["English"]["SetWithdrawDate"] = "";
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "users";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = false;

	$tdataadmin_members[".locking"] = false;












$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = true;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;





$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();

$tdataadmin_members[".allSearchFields"][] = "id";
	$tdataadmin_members[".allSearchFields"][] = "FirstName";
	$tdataadmin_members[".allSearchFields"][] = "LastName";
	$tdataadmin_members[".allSearchFields"][] = "Sex";
	$tdataadmin_members[".allSearchFields"][] = "DateOfBirth";
	$tdataadmin_members[".allSearchFields"][] = "TelephoneNo";
	$tdataadmin_members[".allSearchFields"][] = "EmailAddress";
	$tdataadmin_members[".allSearchFields"][] = "CurrentAddress";
	$tdataadmin_members[".allSearchFields"][] = "PlaceOfBirth";
	$tdataadmin_members[".allSearchFields"][] = "PassportOrID";
	$tdataadmin_members[".allSearchFields"][] = "ProfilePhoto";
	$tdataadmin_members[".allSearchFields"][] = "AttachedFile";
	$tdataadmin_members[".allSearchFields"][] = "ClientNo";
	$tdataadmin_members[".allSearchFields"][] = "EmergencyContactPerson";
	$tdataadmin_members[".allSearchFields"][] = "EmergencyContactRelation";
	$tdataadmin_members[".allSearchFields"][] = "EmergencyContactTel";
	$tdataadmin_members[".allSearchFields"][] = "Username";
	$tdataadmin_members[".allSearchFields"][] = "Password";
	$tdataadmin_members[".allSearchFields"][] = "LastModifiedBy";
	$tdataadmin_members[".allSearchFields"][] = "LastModifiedDate";
	$tdataadmin_members[".allSearchFields"][] = "AccountName";
	$tdataadmin_members[".allSearchFields"][] = "AccountNumber";
	$tdataadmin_members[".allSearchFields"][] = "OpeningAccountDate";
	$tdataadmin_members[".allSearchFields"][] = "OpeningAccountBalance";
	$tdataadmin_members[".allSearchFields"][] = "UserLevel";
	$tdataadmin_members[".allSearchFields"][] = "InterestRate";
	$tdataadmin_members[".allSearchFields"][] = "SetWithdrawDate";
	

$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "id";
$tdataadmin_members[".googleLikeFields"][] = "FirstName";
$tdataadmin_members[".googleLikeFields"][] = "LastName";
$tdataadmin_members[".googleLikeFields"][] = "Sex";
$tdataadmin_members[".googleLikeFields"][] = "DateOfBirth";
$tdataadmin_members[".googleLikeFields"][] = "TelephoneNo";
$tdataadmin_members[".googleLikeFields"][] = "EmailAddress";
$tdataadmin_members[".googleLikeFields"][] = "CurrentAddress";
$tdataadmin_members[".googleLikeFields"][] = "PlaceOfBirth";
$tdataadmin_members[".googleLikeFields"][] = "PassportOrID";
$tdataadmin_members[".googleLikeFields"][] = "ProfilePhoto";
$tdataadmin_members[".googleLikeFields"][] = "AttachedFile";
$tdataadmin_members[".googleLikeFields"][] = "ClientNo";
$tdataadmin_members[".googleLikeFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".googleLikeFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".googleLikeFields"][] = "EmergencyContactTel";
$tdataadmin_members[".googleLikeFields"][] = "Username";
$tdataadmin_members[".googleLikeFields"][] = "Password";
$tdataadmin_members[".googleLikeFields"][] = "LastModifiedBy";
$tdataadmin_members[".googleLikeFields"][] = "LastModifiedDate";
$tdataadmin_members[".googleLikeFields"][] = "AccountName";
$tdataadmin_members[".googleLikeFields"][] = "AccountNumber";
$tdataadmin_members[".googleLikeFields"][] = "OpeningAccountDate";
$tdataadmin_members[".googleLikeFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".googleLikeFields"][] = "UserLevel";
$tdataadmin_members[".googleLikeFields"][] = "InterestRate";
$tdataadmin_members[".googleLikeFields"][] = "SetWithdrawDate";


$tdataadmin_members[".advSearchFields"] = array();
$tdataadmin_members[".advSearchFields"][] = "id";
$tdataadmin_members[".advSearchFields"][] = "FirstName";
$tdataadmin_members[".advSearchFields"][] = "LastName";
$tdataadmin_members[".advSearchFields"][] = "Sex";
$tdataadmin_members[".advSearchFields"][] = "DateOfBirth";
$tdataadmin_members[".advSearchFields"][] = "TelephoneNo";
$tdataadmin_members[".advSearchFields"][] = "EmailAddress";
$tdataadmin_members[".advSearchFields"][] = "CurrentAddress";
$tdataadmin_members[".advSearchFields"][] = "PlaceOfBirth";
$tdataadmin_members[".advSearchFields"][] = "PassportOrID";
$tdataadmin_members[".advSearchFields"][] = "ProfilePhoto";
$tdataadmin_members[".advSearchFields"][] = "AttachedFile";
$tdataadmin_members[".advSearchFields"][] = "ClientNo";
$tdataadmin_members[".advSearchFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".advSearchFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".advSearchFields"][] = "EmergencyContactTel";
$tdataadmin_members[".advSearchFields"][] = "Username";
$tdataadmin_members[".advSearchFields"][] = "Password";
$tdataadmin_members[".advSearchFields"][] = "LastModifiedBy";
$tdataadmin_members[".advSearchFields"][] = "LastModifiedDate";
$tdataadmin_members[".advSearchFields"][] = "AccountName";
$tdataadmin_members[".advSearchFields"][] = "AccountNumber";
$tdataadmin_members[".advSearchFields"][] = "OpeningAccountDate";
$tdataadmin_members[".advSearchFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".advSearchFields"][] = "UserLevel";
$tdataadmin_members[".advSearchFields"][] = "InterestRate";
$tdataadmin_members[".advSearchFields"][] = "SetWithdrawDate";

$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT id,  	FirstName,  	LastName,  	Sex,  	DateOfBirth,  	TelephoneNo,  	EmailAddress,  	CurrentAddress,  	PlaceOfBirth,  	PassportOrID,  	ProfilePhoto,  	AttachedFile,  	ClientNo,  	EmergencyContactPerson,  	EmergencyContactRelation,  	EmergencyContactTel,  	Username,  	Password,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	AccountNumber,  	OpeningAccountDate,  	OpeningAccountBalance,  	UserLevel,  	InterestRate,  	SetWithdrawDate";
$tdataadmin_members[".sqlFrom"] = "FROM users";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "id";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "id";
$tdataadmin_members[".listFields"][] = "FirstName";
$tdataadmin_members[".listFields"][] = "LastName";
$tdataadmin_members[".listFields"][] = "Sex";
$tdataadmin_members[".listFields"][] = "DateOfBirth";
$tdataadmin_members[".listFields"][] = "TelephoneNo";
$tdataadmin_members[".listFields"][] = "EmailAddress";
$tdataadmin_members[".listFields"][] = "CurrentAddress";
$tdataadmin_members[".listFields"][] = "PlaceOfBirth";
$tdataadmin_members[".listFields"][] = "PassportOrID";
$tdataadmin_members[".listFields"][] = "ProfilePhoto";
$tdataadmin_members[".listFields"][] = "AttachedFile";
$tdataadmin_members[".listFields"][] = "ClientNo";
$tdataadmin_members[".listFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".listFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".listFields"][] = "EmergencyContactTel";
$tdataadmin_members[".listFields"][] = "Username";
$tdataadmin_members[".listFields"][] = "Password";
$tdataadmin_members[".listFields"][] = "LastModifiedBy";
$tdataadmin_members[".listFields"][] = "LastModifiedDate";
$tdataadmin_members[".listFields"][] = "AccountName";
$tdataadmin_members[".listFields"][] = "AccountNumber";
$tdataadmin_members[".listFields"][] = "OpeningAccountDate";
$tdataadmin_members[".listFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".listFields"][] = "UserLevel";
$tdataadmin_members[".listFields"][] = "InterestRate";
$tdataadmin_members[".listFields"][] = "SetWithdrawDate";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "id";
$tdataadmin_members[".viewFields"][] = "FirstName";
$tdataadmin_members[".viewFields"][] = "LastName";
$tdataadmin_members[".viewFields"][] = "Sex";
$tdataadmin_members[".viewFields"][] = "DateOfBirth";
$tdataadmin_members[".viewFields"][] = "TelephoneNo";
$tdataadmin_members[".viewFields"][] = "EmailAddress";
$tdataadmin_members[".viewFields"][] = "CurrentAddress";
$tdataadmin_members[".viewFields"][] = "PlaceOfBirth";
$tdataadmin_members[".viewFields"][] = "PassportOrID";
$tdataadmin_members[".viewFields"][] = "ProfilePhoto";
$tdataadmin_members[".viewFields"][] = "AttachedFile";
$tdataadmin_members[".viewFields"][] = "ClientNo";
$tdataadmin_members[".viewFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".viewFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".viewFields"][] = "EmergencyContactTel";
$tdataadmin_members[".viewFields"][] = "Username";
$tdataadmin_members[".viewFields"][] = "Password";
$tdataadmin_members[".viewFields"][] = "LastModifiedBy";
$tdataadmin_members[".viewFields"][] = "LastModifiedDate";
$tdataadmin_members[".viewFields"][] = "AccountName";
$tdataadmin_members[".viewFields"][] = "AccountNumber";
$tdataadmin_members[".viewFields"][] = "OpeningAccountDate";
$tdataadmin_members[".viewFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".viewFields"][] = "UserLevel";
$tdataadmin_members[".viewFields"][] = "InterestRate";
$tdataadmin_members[".viewFields"][] = "SetWithdrawDate";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "FirstName";
$tdataadmin_members[".addFields"][] = "LastName";
$tdataadmin_members[".addFields"][] = "Sex";
$tdataadmin_members[".addFields"][] = "DateOfBirth";
$tdataadmin_members[".addFields"][] = "TelephoneNo";
$tdataadmin_members[".addFields"][] = "EmailAddress";
$tdataadmin_members[".addFields"][] = "CurrentAddress";
$tdataadmin_members[".addFields"][] = "PlaceOfBirth";
$tdataadmin_members[".addFields"][] = "PassportOrID";
$tdataadmin_members[".addFields"][] = "ProfilePhoto";
$tdataadmin_members[".addFields"][] = "AttachedFile";
$tdataadmin_members[".addFields"][] = "ClientNo";
$tdataadmin_members[".addFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".addFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".addFields"][] = "EmergencyContactTel";
$tdataadmin_members[".addFields"][] = "Username";
$tdataadmin_members[".addFields"][] = "Password";
$tdataadmin_members[".addFields"][] = "LastModifiedBy";
$tdataadmin_members[".addFields"][] = "LastModifiedDate";
$tdataadmin_members[".addFields"][] = "AccountName";
$tdataadmin_members[".addFields"][] = "AccountNumber";
$tdataadmin_members[".addFields"][] = "OpeningAccountDate";
$tdataadmin_members[".addFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".addFields"][] = "UserLevel";
$tdataadmin_members[".addFields"][] = "InterestRate";
$tdataadmin_members[".addFields"][] = "SetWithdrawDate";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "id";
$tdataadmin_members[".masterListFields"][] = "FirstName";
$tdataadmin_members[".masterListFields"][] = "LastName";
$tdataadmin_members[".masterListFields"][] = "Sex";
$tdataadmin_members[".masterListFields"][] = "DateOfBirth";
$tdataadmin_members[".masterListFields"][] = "TelephoneNo";
$tdataadmin_members[".masterListFields"][] = "EmailAddress";
$tdataadmin_members[".masterListFields"][] = "CurrentAddress";
$tdataadmin_members[".masterListFields"][] = "PlaceOfBirth";
$tdataadmin_members[".masterListFields"][] = "PassportOrID";
$tdataadmin_members[".masterListFields"][] = "ProfilePhoto";
$tdataadmin_members[".masterListFields"][] = "AttachedFile";
$tdataadmin_members[".masterListFields"][] = "ClientNo";
$tdataadmin_members[".masterListFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".masterListFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".masterListFields"][] = "EmergencyContactTel";
$tdataadmin_members[".masterListFields"][] = "Username";
$tdataadmin_members[".masterListFields"][] = "Password";
$tdataadmin_members[".masterListFields"][] = "LastModifiedBy";
$tdataadmin_members[".masterListFields"][] = "LastModifiedDate";
$tdataadmin_members[".masterListFields"][] = "AccountName";
$tdataadmin_members[".masterListFields"][] = "AccountNumber";
$tdataadmin_members[".masterListFields"][] = "OpeningAccountDate";
$tdataadmin_members[".masterListFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".masterListFields"][] = "UserLevel";
$tdataadmin_members[".masterListFields"][] = "InterestRate";
$tdataadmin_members[".masterListFields"][] = "SetWithdrawDate";

$tdataadmin_members[".inlineAddFields"] = array();
$tdataadmin_members[".inlineAddFields"][] = "AccountName";
$tdataadmin_members[".inlineAddFields"][] = "AccountNumber";
$tdataadmin_members[".inlineAddFields"][] = "OpeningAccountDate";
$tdataadmin_members[".inlineAddFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".inlineAddFields"][] = "UserLevel";
$tdataadmin_members[".inlineAddFields"][] = "InterestRate";
$tdataadmin_members[".inlineAddFields"][] = "SetWithdrawDate";

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "FirstName";
$tdataadmin_members[".editFields"][] = "LastName";
$tdataadmin_members[".editFields"][] = "Sex";
$tdataadmin_members[".editFields"][] = "DateOfBirth";
$tdataadmin_members[".editFields"][] = "TelephoneNo";
$tdataadmin_members[".editFields"][] = "EmailAddress";
$tdataadmin_members[".editFields"][] = "CurrentAddress";
$tdataadmin_members[".editFields"][] = "PlaceOfBirth";
$tdataadmin_members[".editFields"][] = "PassportOrID";
$tdataadmin_members[".editFields"][] = "ProfilePhoto";
$tdataadmin_members[".editFields"][] = "AttachedFile";
$tdataadmin_members[".editFields"][] = "ClientNo";
$tdataadmin_members[".editFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".editFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".editFields"][] = "EmergencyContactTel";
$tdataadmin_members[".editFields"][] = "Username";
$tdataadmin_members[".editFields"][] = "Password";
$tdataadmin_members[".editFields"][] = "LastModifiedBy";
$tdataadmin_members[".editFields"][] = "LastModifiedDate";
$tdataadmin_members[".editFields"][] = "AccountName";
$tdataadmin_members[".editFields"][] = "AccountNumber";
$tdataadmin_members[".editFields"][] = "OpeningAccountDate";
$tdataadmin_members[".editFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".editFields"][] = "UserLevel";
$tdataadmin_members[".editFields"][] = "InterestRate";
$tdataadmin_members[".editFields"][] = "SetWithdrawDate";

$tdataadmin_members[".inlineEditFields"] = array();
$tdataadmin_members[".inlineEditFields"][] = "AccountName";
$tdataadmin_members[".inlineEditFields"][] = "AccountNumber";
$tdataadmin_members[".inlineEditFields"][] = "OpeningAccountDate";
$tdataadmin_members[".inlineEditFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".inlineEditFields"][] = "UserLevel";
$tdataadmin_members[".inlineEditFields"][] = "InterestRate";
$tdataadmin_members[".inlineEditFields"][] = "SetWithdrawDate";

$tdataadmin_members[".updateSelectedFields"] = array();


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "id";
$tdataadmin_members[".exportFields"][] = "FirstName";
$tdataadmin_members[".exportFields"][] = "LastName";
$tdataadmin_members[".exportFields"][] = "Sex";
$tdataadmin_members[".exportFields"][] = "DateOfBirth";
$tdataadmin_members[".exportFields"][] = "TelephoneNo";
$tdataadmin_members[".exportFields"][] = "EmailAddress";
$tdataadmin_members[".exportFields"][] = "CurrentAddress";
$tdataadmin_members[".exportFields"][] = "PlaceOfBirth";
$tdataadmin_members[".exportFields"][] = "PassportOrID";
$tdataadmin_members[".exportFields"][] = "ProfilePhoto";
$tdataadmin_members[".exportFields"][] = "AttachedFile";
$tdataadmin_members[".exportFields"][] = "ClientNo";
$tdataadmin_members[".exportFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".exportFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".exportFields"][] = "EmergencyContactTel";
$tdataadmin_members[".exportFields"][] = "Username";
$tdataadmin_members[".exportFields"][] = "Password";
$tdataadmin_members[".exportFields"][] = "LastModifiedBy";
$tdataadmin_members[".exportFields"][] = "LastModifiedDate";
$tdataadmin_members[".exportFields"][] = "AccountName";
$tdataadmin_members[".exportFields"][] = "AccountNumber";
$tdataadmin_members[".exportFields"][] = "OpeningAccountDate";
$tdataadmin_members[".exportFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".exportFields"][] = "UserLevel";
$tdataadmin_members[".exportFields"][] = "InterestRate";
$tdataadmin_members[".exportFields"][] = "SetWithdrawDate";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "id";
$tdataadmin_members[".importFields"][] = "FirstName";
$tdataadmin_members[".importFields"][] = "LastName";
$tdataadmin_members[".importFields"][] = "Sex";
$tdataadmin_members[".importFields"][] = "DateOfBirth";
$tdataadmin_members[".importFields"][] = "TelephoneNo";
$tdataadmin_members[".importFields"][] = "EmailAddress";
$tdataadmin_members[".importFields"][] = "CurrentAddress";
$tdataadmin_members[".importFields"][] = "PlaceOfBirth";
$tdataadmin_members[".importFields"][] = "PassportOrID";
$tdataadmin_members[".importFields"][] = "ProfilePhoto";
$tdataadmin_members[".importFields"][] = "AttachedFile";
$tdataadmin_members[".importFields"][] = "ClientNo";
$tdataadmin_members[".importFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".importFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".importFields"][] = "EmergencyContactTel";
$tdataadmin_members[".importFields"][] = "Username";
$tdataadmin_members[".importFields"][] = "Password";
$tdataadmin_members[".importFields"][] = "LastModifiedBy";
$tdataadmin_members[".importFields"][] = "LastModifiedDate";
$tdataadmin_members[".importFields"][] = "AccountName";
$tdataadmin_members[".importFields"][] = "AccountNumber";
$tdataadmin_members[".importFields"][] = "OpeningAccountDate";
$tdataadmin_members[".importFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".importFields"][] = "UserLevel";
$tdataadmin_members[".importFields"][] = "InterestRate";
$tdataadmin_members[".importFields"][] = "SetWithdrawDate";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "InterestRate";
$tdataadmin_members[".printFields"][] = "UserLevel";
$tdataadmin_members[".printFields"][] = "OpeningAccountBalance";
$tdataadmin_members[".printFields"][] = "OpeningAccountDate";
$tdataadmin_members[".printFields"][] = "AccountNumber";
$tdataadmin_members[".printFields"][] = "AccountName";
$tdataadmin_members[".printFields"][] = "SetWithdrawDate";
$tdataadmin_members[".printFields"][] = "id";
$tdataadmin_members[".printFields"][] = "FirstName";
$tdataadmin_members[".printFields"][] = "LastName";
$tdataadmin_members[".printFields"][] = "Sex";
$tdataadmin_members[".printFields"][] = "DateOfBirth";
$tdataadmin_members[".printFields"][] = "TelephoneNo";
$tdataadmin_members[".printFields"][] = "EmailAddress";
$tdataadmin_members[".printFields"][] = "CurrentAddress";
$tdataadmin_members[".printFields"][] = "PlaceOfBirth";
$tdataadmin_members[".printFields"][] = "PassportOrID";
$tdataadmin_members[".printFields"][] = "ProfilePhoto";
$tdataadmin_members[".printFields"][] = "AttachedFile";
$tdataadmin_members[".printFields"][] = "ClientNo";
$tdataadmin_members[".printFields"][] = "EmergencyContactPerson";
$tdataadmin_members[".printFields"][] = "EmergencyContactRelation";
$tdataadmin_members[".printFields"][] = "EmergencyContactTel";
$tdataadmin_members[".printFields"][] = "Username";
$tdataadmin_members[".printFields"][] = "Password";
$tdataadmin_members[".printFields"][] = "LastModifiedBy";
$tdataadmin_members[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataadmin_members["id"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","FirstName");
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




	$tdataadmin_members["FirstName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","LastName");
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




	$tdataadmin_members["LastName"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Sex");
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

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataadmin_members["Sex"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","DateOfBirth");
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




	$tdataadmin_members["DateOfBirth"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","TelephoneNo");
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




	$tdataadmin_members["TelephoneNo"] = $fdata;
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","EmailAddress");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=75";

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




	$tdataadmin_members["EmailAddress"] = $fdata;
//	CurrentAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CurrentAddress";
	$fdata["GoodName"] = "CurrentAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","CurrentAddress");
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




	$tdataadmin_members["CurrentAddress"] = $fdata;
//	PlaceOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PlaceOfBirth";
	$fdata["GoodName"] = "PlaceOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","PlaceOfBirth");
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




	$tdataadmin_members["PlaceOfBirth"] = $fdata;
//	PassportOrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PassportOrID";
	$fdata["GoodName"] = "PassportOrID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","PassportOrID");
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




	$tdataadmin_members["PassportOrID"] = $fdata;
//	ProfilePhoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProfilePhoto";
	$fdata["GoodName"] = "ProfilePhoto";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","ProfilePhoto");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ProfilePhoto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProfilePhoto";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "ScriptCam");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["ProfilePhoto"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","AttachedFile");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AttachedFile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AttachedFile";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 600;

	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["AttachedFile"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","ClientNo");
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




	$tdataadmin_members["ClientNo"] = $fdata;
//	EmergencyContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EmergencyContactPerson";
	$fdata["GoodName"] = "EmergencyContactPerson";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","EmergencyContactPerson");
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




	$tdataadmin_members["EmergencyContactPerson"] = $fdata;
//	EmergencyContactRelation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EmergencyContactRelation";
	$fdata["GoodName"] = "EmergencyContactRelation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","EmergencyContactRelation");
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




	$tdataadmin_members["EmergencyContactRelation"] = $fdata;
//	EmergencyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EmergencyContactTel";
	$fdata["GoodName"] = "EmergencyContactTel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","EmergencyContactTel");
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




	$tdataadmin_members["EmergencyContactTel"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Username");
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




	$tdataadmin_members["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["Password"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","LastModifiedBy");
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




	$tdataadmin_members["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","LastModifiedDate");
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




	$tdataadmin_members["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["AccountName"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["AccountNumber"] = $fdata;
//	OpeningAccountDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "OpeningAccountDate";
	$fdata["GoodName"] = "OpeningAccountDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","OpeningAccountDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataadmin_members["OpeningAccountDate"] = $fdata;
//	OpeningAccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OpeningAccountBalance";
	$fdata["GoodName"] = "OpeningAccountBalance";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","OpeningAccountBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["OpeningAccountBalance"] = $fdata;
//	UserLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "UserLevel";
	$fdata["GoodName"] = "UserLevel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","UserLevel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["UserLevel"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","InterestRate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_members["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","SetWithdrawDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;



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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataadmin_members["SetWithdrawDate"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	FirstName,  	LastName,  	Sex,  	DateOfBirth,  	TelephoneNo,  	EmailAddress,  	CurrentAddress,  	PlaceOfBirth,  	PassportOrID,  	ProfilePhoto,  	AttachedFile,  	ClientNo,  	EmergencyContactPerson,  	EmergencyContactRelation,  	EmergencyContactTel,  	Username,  	Password,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	AccountNumber,  	OpeningAccountDate,  	OpeningAccountBalance,  	UserLevel,  	InterestRate,  	SetWithdrawDate";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "FirstName";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "LastName";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "Sex";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "DateOfBirth";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "TelephoneNo";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "EmailAddress";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "CurrentAddress";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PlaceOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "PlaceOfBirth";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PassportOrID",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "PassportOrID";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePhoto",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "ProfilePhoto";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "AttachedFile";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto30["m_sql"] = "ClientNo";
$proto30["m_srcTableName"] = "admin_members";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactPerson",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto32["m_sql"] = "EmergencyContactPerson";
$proto32["m_srcTableName"] = "admin_members";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactRelation",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto34["m_sql"] = "EmergencyContactRelation";
$proto34["m_srcTableName"] = "admin_members";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactTel",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto36["m_sql"] = "EmergencyContactTel";
$proto36["m_srcTableName"] = "admin_members";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto38["m_sql"] = "Username";
$proto38["m_srcTableName"] = "admin_members";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto40["m_sql"] = "Password";
$proto40["m_srcTableName"] = "admin_members";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto42["m_sql"] = "LastModifiedBy";
$proto42["m_srcTableName"] = "admin_members";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto44["m_sql"] = "LastModifiedDate";
$proto44["m_srcTableName"] = "admin_members";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto46["m_sql"] = "AccountName";
$proto46["m_srcTableName"] = "admin_members";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto48["m_sql"] = "AccountNumber";
$proto48["m_srcTableName"] = "admin_members";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountDate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto50["m_sql"] = "OpeningAccountDate";
$proto50["m_srcTableName"] = "admin_members";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountBalance",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto52["m_sql"] = "OpeningAccountBalance";
$proto52["m_srcTableName"] = "admin_members";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "UserLevel",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto54["m_sql"] = "UserLevel";
$proto54["m_srcTableName"] = "admin_members";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto56["m_sql"] = "InterestRate";
$proto56["m_srcTableName"] = "admin_members";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto58["m_sql"] = "SetWithdrawDate";
$proto58["m_srcTableName"] = "admin_members";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "users";
$proto61["m_srcTableName"] = "admin_members";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "FirstName";
$proto61["m_columns"][] = "LastName";
$proto61["m_columns"][] = "Sex";
$proto61["m_columns"][] = "DateOfBirth";
$proto61["m_columns"][] = "TelephoneNo";
$proto61["m_columns"][] = "EmailAddress";
$proto61["m_columns"][] = "CurrentAddress";
$proto61["m_columns"][] = "PlaceOfBirth";
$proto61["m_columns"][] = "PassportOrID";
$proto61["m_columns"][] = "ProfilePhoto";
$proto61["m_columns"][] = "AttachedFile";
$proto61["m_columns"][] = "ClientNo";
$proto61["m_columns"][] = "EmergencyContactPerson";
$proto61["m_columns"][] = "EmergencyContactRelation";
$proto61["m_columns"][] = "EmergencyContactTel";
$proto61["m_columns"][] = "Username";
$proto61["m_columns"][] = "Password";
$proto61["m_columns"][] = "LastModifiedBy";
$proto61["m_columns"][] = "LastModifiedDate";
$proto61["m_columns"][] = "AccountName";
$proto61["m_columns"][] = "AccountNumber";
$proto61["m_columns"][] = "OpeningAccountDate";
$proto61["m_columns"][] = "OpeningAccountBalance";
$proto61["m_columns"][] = "UserLevel";
$proto61["m_columns"][] = "InterestRate";
$proto61["m_columns"][] = "SetWithdrawDate";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "users";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "admin_members";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

																											

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>