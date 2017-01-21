<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	$fieldLabelsadmin_users["English"]["id"] = "Id";
	$fieldToolTipsadmin_users["English"]["id"] = "";
	$fieldLabelsadmin_users["English"]["FirstName"] = "First Name";
	$fieldToolTipsadmin_users["English"]["FirstName"] = "";
	$fieldLabelsadmin_users["English"]["LastName"] = "Last Name";
	$fieldToolTipsadmin_users["English"]["LastName"] = "";
	$fieldLabelsadmin_users["English"]["Sex"] = "Sex";
	$fieldToolTipsadmin_users["English"]["Sex"] = "";
	$fieldLabelsadmin_users["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsadmin_users["English"]["DateOfBirth"] = "";
	$fieldLabelsadmin_users["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsadmin_users["English"]["TelephoneNo"] = "";
	$fieldLabelsadmin_users["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipsadmin_users["English"]["EmailAddress"] = "";
	$fieldLabelsadmin_users["English"]["CurrentAddress"] = "Current Address";
	$fieldToolTipsadmin_users["English"]["CurrentAddress"] = "";
	$fieldLabelsadmin_users["English"]["PlaceOfBirth"] = "Place Of Birth";
	$fieldToolTipsadmin_users["English"]["PlaceOfBirth"] = "";
	$fieldLabelsadmin_users["English"]["PassportOrID"] = "Passport Or ID";
	$fieldToolTipsadmin_users["English"]["PassportOrID"] = "";
	$fieldLabelsadmin_users["English"]["ProfilePhoto"] = "Profile Photo";
	$fieldToolTipsadmin_users["English"]["ProfilePhoto"] = "";
	$fieldLabelsadmin_users["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipsadmin_users["English"]["AttachedFile"] = "";
	$fieldLabelsadmin_users["English"]["EmergencyContactPerson"] = "Emergency Contact Person";
	$fieldToolTipsadmin_users["English"]["EmergencyContactPerson"] = "";
	$fieldLabelsadmin_users["English"]["EmergencyContactRelation"] = "Emergency Contact Relation";
	$fieldToolTipsadmin_users["English"]["EmergencyContactRelation"] = "";
	$fieldLabelsadmin_users["English"]["EmergencyContactTel"] = "Emergency Contact Tel";
	$fieldToolTipsadmin_users["English"]["EmergencyContactTel"] = "";
	$fieldLabelsadmin_users["English"]["Username"] = "Username";
	$fieldToolTipsadmin_users["English"]["Username"] = "";
	$fieldLabelsadmin_users["English"]["Password"] = "Password";
	$fieldToolTipsadmin_users["English"]["Password"] = "";
	$fieldLabelsadmin_users["English"]["ClientNo"] = "Client No";
	$fieldToolTipsadmin_users["English"]["ClientNo"] = "";
	$fieldLabelsadmin_users["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsadmin_users["English"]["LastModifiedBy"] = "";
	$fieldLabelsadmin_users["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsadmin_users["English"]["LastModifiedDate"] = "";
	$fieldLabelsadmin_users["English"]["AccountName"] = "Account Name";
	$fieldToolTipsadmin_users["English"]["AccountName"] = "";
	$fieldLabelsadmin_users["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsadmin_users["English"]["AccountNumber"] = "";
	$fieldLabelsadmin_users["English"]["OpeningAccountDate"] = "Opening Account Date";
	$fieldToolTipsadmin_users["English"]["OpeningAccountDate"] = "";
	$fieldLabelsadmin_users["English"]["OpeningAccountBalance"] = "Opening Account Balance";
	$fieldToolTipsadmin_users["English"]["OpeningAccountBalance"] = "";
	$fieldLabelsadmin_users["English"]["UserLevel"] = "User Level";
	$fieldToolTipsadmin_users["English"]["UserLevel"] = "";
	$fieldLabelsadmin_users["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsadmin_users["English"]["InterestRate"] = "";
	$fieldLabelsadmin_users["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsadmin_users["English"]["SetWithdrawDate"] = "";
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "users";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();

$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = false;

	$tdataadmin_users[".locking"] = false;

$tdataadmin_users[".edit"] = true;
$tdataadmin_users[".afterEditAction"] = 1;
$tdataadmin_users[".closePopupAfterEdit"] = 1;
$tdataadmin_users[".afterEditActionDetTable"] = "";

$tdataadmin_users[".add"] = true;
$tdataadmin_users[".afterAddAction"] = 0;
$tdataadmin_users[".closePopupAfterAdd"] = 1;
$tdataadmin_users[".afterAddActionDetTable"] = "";

$tdataadmin_users[".list"] = true;






$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_users[".searchSaving"] = true;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;



$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;





$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "id";
	$tdataadmin_users[".allSearchFields"][] = "FirstName";
	$tdataadmin_users[".allSearchFields"][] = "LastName";
	$tdataadmin_users[".allSearchFields"][] = "Sex";
	$tdataadmin_users[".allSearchFields"][] = "DateOfBirth";
	$tdataadmin_users[".allSearchFields"][] = "TelephoneNo";
	$tdataadmin_users[".allSearchFields"][] = "EmailAddress";
	$tdataadmin_users[".allSearchFields"][] = "CurrentAddress";
	$tdataadmin_users[".allSearchFields"][] = "PlaceOfBirth";
	$tdataadmin_users[".allSearchFields"][] = "PassportOrID";
	$tdataadmin_users[".allSearchFields"][] = "ProfilePhoto";
	$tdataadmin_users[".allSearchFields"][] = "AttachedFile";
	$tdataadmin_users[".allSearchFields"][] = "ClientNo";
	$tdataadmin_users[".allSearchFields"][] = "EmergencyContactPerson";
	$tdataadmin_users[".allSearchFields"][] = "EmergencyContactRelation";
	$tdataadmin_users[".allSearchFields"][] = "EmergencyContactTel";
	$tdataadmin_users[".allSearchFields"][] = "Username";
	$tdataadmin_users[".allSearchFields"][] = "Password";
	$tdataadmin_users[".allSearchFields"][] = "LastModifiedBy";
	$tdataadmin_users[".allSearchFields"][] = "LastModifiedDate";
	$tdataadmin_users[".allSearchFields"][] = "AccountName";
	$tdataadmin_users[".allSearchFields"][] = "AccountNumber";
	$tdataadmin_users[".allSearchFields"][] = "OpeningAccountDate";
	$tdataadmin_users[".allSearchFields"][] = "OpeningAccountBalance";
	$tdataadmin_users[".allSearchFields"][] = "UserLevel";
	$tdataadmin_users[".allSearchFields"][] = "InterestRate";
	$tdataadmin_users[".allSearchFields"][] = "SetWithdrawDate";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "id";
$tdataadmin_users[".googleLikeFields"][] = "FirstName";
$tdataadmin_users[".googleLikeFields"][] = "LastName";
$tdataadmin_users[".googleLikeFields"][] = "Sex";
$tdataadmin_users[".googleLikeFields"][] = "DateOfBirth";
$tdataadmin_users[".googleLikeFields"][] = "TelephoneNo";
$tdataadmin_users[".googleLikeFields"][] = "EmailAddress";
$tdataadmin_users[".googleLikeFields"][] = "CurrentAddress";
$tdataadmin_users[".googleLikeFields"][] = "PlaceOfBirth";
$tdataadmin_users[".googleLikeFields"][] = "PassportOrID";
$tdataadmin_users[".googleLikeFields"][] = "ProfilePhoto";
$tdataadmin_users[".googleLikeFields"][] = "AttachedFile";
$tdataadmin_users[".googleLikeFields"][] = "ClientNo";
$tdataadmin_users[".googleLikeFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".googleLikeFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".googleLikeFields"][] = "EmergencyContactTel";
$tdataadmin_users[".googleLikeFields"][] = "Username";
$tdataadmin_users[".googleLikeFields"][] = "Password";
$tdataadmin_users[".googleLikeFields"][] = "LastModifiedBy";
$tdataadmin_users[".googleLikeFields"][] = "LastModifiedDate";
$tdataadmin_users[".googleLikeFields"][] = "AccountName";
$tdataadmin_users[".googleLikeFields"][] = "AccountNumber";
$tdataadmin_users[".googleLikeFields"][] = "OpeningAccountDate";
$tdataadmin_users[".googleLikeFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".googleLikeFields"][] = "UserLevel";
$tdataadmin_users[".googleLikeFields"][] = "InterestRate";
$tdataadmin_users[".googleLikeFields"][] = "SetWithdrawDate";


$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "id";
$tdataadmin_users[".advSearchFields"][] = "FirstName";
$tdataadmin_users[".advSearchFields"][] = "LastName";
$tdataadmin_users[".advSearchFields"][] = "Sex";
$tdataadmin_users[".advSearchFields"][] = "DateOfBirth";
$tdataadmin_users[".advSearchFields"][] = "TelephoneNo";
$tdataadmin_users[".advSearchFields"][] = "EmailAddress";
$tdataadmin_users[".advSearchFields"][] = "CurrentAddress";
$tdataadmin_users[".advSearchFields"][] = "PlaceOfBirth";
$tdataadmin_users[".advSearchFields"][] = "PassportOrID";
$tdataadmin_users[".advSearchFields"][] = "ProfilePhoto";
$tdataadmin_users[".advSearchFields"][] = "AttachedFile";
$tdataadmin_users[".advSearchFields"][] = "ClientNo";
$tdataadmin_users[".advSearchFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".advSearchFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".advSearchFields"][] = "EmergencyContactTel";
$tdataadmin_users[".advSearchFields"][] = "Username";
$tdataadmin_users[".advSearchFields"][] = "Password";
$tdataadmin_users[".advSearchFields"][] = "LastModifiedBy";
$tdataadmin_users[".advSearchFields"][] = "LastModifiedDate";
$tdataadmin_users[".advSearchFields"][] = "AccountName";
$tdataadmin_users[".advSearchFields"][] = "AccountNumber";
$tdataadmin_users[".advSearchFields"][] = "OpeningAccountDate";
$tdataadmin_users[".advSearchFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".advSearchFields"][] = "UserLevel";
$tdataadmin_users[".advSearchFields"][] = "InterestRate";
$tdataadmin_users[".advSearchFields"][] = "SetWithdrawDate";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 20;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();

$tdataadmin_users[".sqlHead"] = "SELECT id,  	FirstName,  	LastName,  	Sex,  	DateOfBirth,  	TelephoneNo,  	EmailAddress,  	CurrentAddress,  	PlaceOfBirth,  	PassportOrID,  	ProfilePhoto,  	AttachedFile,  	ClientNo,  	EmergencyContactPerson,  	EmergencyContactRelation,  	EmergencyContactTel,  	Username,  	Password,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	AccountNumber,  	OpeningAccountDate,  	OpeningAccountBalance,  	UserLevel,  	InterestRate,  	SetWithdrawDate";
$tdataadmin_users[".sqlFrom"] = "FROM users";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "id";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "InterestRate";
$tdataadmin_users[".listFields"][] = "SetWithdrawDate";
$tdataadmin_users[".listFields"][] = "AccountNumber";
$tdataadmin_users[".listFields"][] = "OpeningAccountDate";
$tdataadmin_users[".listFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".listFields"][] = "UserLevel";
$tdataadmin_users[".listFields"][] = "id";
$tdataadmin_users[".listFields"][] = "FirstName";
$tdataadmin_users[".listFields"][] = "LastName";
$tdataadmin_users[".listFields"][] = "Sex";
$tdataadmin_users[".listFields"][] = "DateOfBirth";
$tdataadmin_users[".listFields"][] = "TelephoneNo";
$tdataadmin_users[".listFields"][] = "EmailAddress";
$tdataadmin_users[".listFields"][] = "CurrentAddress";
$tdataadmin_users[".listFields"][] = "PlaceOfBirth";
$tdataadmin_users[".listFields"][] = "PassportOrID";
$tdataadmin_users[".listFields"][] = "ProfilePhoto";
$tdataadmin_users[".listFields"][] = "AttachedFile";
$tdataadmin_users[".listFields"][] = "ClientNo";
$tdataadmin_users[".listFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".listFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".listFields"][] = "EmergencyContactTel";
$tdataadmin_users[".listFields"][] = "Username";
$tdataadmin_users[".listFields"][] = "Password";
$tdataadmin_users[".listFields"][] = "LastModifiedBy";
$tdataadmin_users[".listFields"][] = "LastModifiedDate";
$tdataadmin_users[".listFields"][] = "AccountName";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();

$tdataadmin_users[".addFields"] = array();
$tdataadmin_users[".addFields"][] = "FirstName";
$tdataadmin_users[".addFields"][] = "LastName";
$tdataadmin_users[".addFields"][] = "Sex";
$tdataadmin_users[".addFields"][] = "DateOfBirth";
$tdataadmin_users[".addFields"][] = "TelephoneNo";
$tdataadmin_users[".addFields"][] = "EmailAddress";
$tdataadmin_users[".addFields"][] = "CurrentAddress";
$tdataadmin_users[".addFields"][] = "PlaceOfBirth";
$tdataadmin_users[".addFields"][] = "PassportOrID";
$tdataadmin_users[".addFields"][] = "ProfilePhoto";
$tdataadmin_users[".addFields"][] = "AttachedFile";
$tdataadmin_users[".addFields"][] = "ClientNo";
$tdataadmin_users[".addFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".addFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".addFields"][] = "EmergencyContactTel";
$tdataadmin_users[".addFields"][] = "Username";
$tdataadmin_users[".addFields"][] = "Password";
$tdataadmin_users[".addFields"][] = "LastModifiedBy";
$tdataadmin_users[".addFields"][] = "LastModifiedDate";
$tdataadmin_users[".addFields"][] = "AccountName";
$tdataadmin_users[".addFields"][] = "AccountNumber";
$tdataadmin_users[".addFields"][] = "OpeningAccountDate";
$tdataadmin_users[".addFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".addFields"][] = "UserLevel";
$tdataadmin_users[".addFields"][] = "InterestRate";
$tdataadmin_users[".addFields"][] = "SetWithdrawDate";

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "id";
$tdataadmin_users[".masterListFields"][] = "FirstName";
$tdataadmin_users[".masterListFields"][] = "LastName";
$tdataadmin_users[".masterListFields"][] = "Sex";
$tdataadmin_users[".masterListFields"][] = "DateOfBirth";
$tdataadmin_users[".masterListFields"][] = "TelephoneNo";
$tdataadmin_users[".masterListFields"][] = "EmailAddress";
$tdataadmin_users[".masterListFields"][] = "CurrentAddress";
$tdataadmin_users[".masterListFields"][] = "PlaceOfBirth";
$tdataadmin_users[".masterListFields"][] = "PassportOrID";
$tdataadmin_users[".masterListFields"][] = "ProfilePhoto";
$tdataadmin_users[".masterListFields"][] = "AttachedFile";
$tdataadmin_users[".masterListFields"][] = "ClientNo";
$tdataadmin_users[".masterListFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".masterListFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".masterListFields"][] = "EmergencyContactTel";
$tdataadmin_users[".masterListFields"][] = "Username";
$tdataadmin_users[".masterListFields"][] = "Password";
$tdataadmin_users[".masterListFields"][] = "LastModifiedBy";
$tdataadmin_users[".masterListFields"][] = "LastModifiedDate";
$tdataadmin_users[".masterListFields"][] = "AccountName";
$tdataadmin_users[".masterListFields"][] = "AccountNumber";
$tdataadmin_users[".masterListFields"][] = "OpeningAccountDate";
$tdataadmin_users[".masterListFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".masterListFields"][] = "UserLevel";
$tdataadmin_users[".masterListFields"][] = "InterestRate";
$tdataadmin_users[".masterListFields"][] = "SetWithdrawDate";

$tdataadmin_users[".inlineAddFields"] = array();

$tdataadmin_users[".editFields"] = array();
$tdataadmin_users[".editFields"][] = "FirstName";
$tdataadmin_users[".editFields"][] = "LastName";
$tdataadmin_users[".editFields"][] = "Sex";
$tdataadmin_users[".editFields"][] = "DateOfBirth";
$tdataadmin_users[".editFields"][] = "TelephoneNo";
$tdataadmin_users[".editFields"][] = "EmailAddress";
$tdataadmin_users[".editFields"][] = "CurrentAddress";
$tdataadmin_users[".editFields"][] = "PlaceOfBirth";
$tdataadmin_users[".editFields"][] = "PassportOrID";
$tdataadmin_users[".editFields"][] = "ProfilePhoto";
$tdataadmin_users[".editFields"][] = "AttachedFile";
$tdataadmin_users[".editFields"][] = "ClientNo";
$tdataadmin_users[".editFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".editFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".editFields"][] = "EmergencyContactTel";
$tdataadmin_users[".editFields"][] = "Username";
$tdataadmin_users[".editFields"][] = "Password";
$tdataadmin_users[".editFields"][] = "LastModifiedBy";
$tdataadmin_users[".editFields"][] = "LastModifiedDate";
$tdataadmin_users[".editFields"][] = "AccountName";
$tdataadmin_users[".editFields"][] = "AccountNumber";
$tdataadmin_users[".editFields"][] = "OpeningAccountDate";
$tdataadmin_users[".editFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".editFields"][] = "UserLevel";
$tdataadmin_users[".editFields"][] = "InterestRate";
$tdataadmin_users[".editFields"][] = "SetWithdrawDate";

$tdataadmin_users[".inlineEditFields"] = array();

$tdataadmin_users[".updateSelectedFields"] = array();


$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "id";
$tdataadmin_users[".exportFields"][] = "FirstName";
$tdataadmin_users[".exportFields"][] = "LastName";
$tdataadmin_users[".exportFields"][] = "Sex";
$tdataadmin_users[".exportFields"][] = "DateOfBirth";
$tdataadmin_users[".exportFields"][] = "TelephoneNo";
$tdataadmin_users[".exportFields"][] = "EmailAddress";
$tdataadmin_users[".exportFields"][] = "CurrentAddress";
$tdataadmin_users[".exportFields"][] = "PlaceOfBirth";
$tdataadmin_users[".exportFields"][] = "PassportOrID";
$tdataadmin_users[".exportFields"][] = "ProfilePhoto";
$tdataadmin_users[".exportFields"][] = "AttachedFile";
$tdataadmin_users[".exportFields"][] = "ClientNo";
$tdataadmin_users[".exportFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".exportFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".exportFields"][] = "EmergencyContactTel";
$tdataadmin_users[".exportFields"][] = "Username";
$tdataadmin_users[".exportFields"][] = "Password";
$tdataadmin_users[".exportFields"][] = "LastModifiedBy";
$tdataadmin_users[".exportFields"][] = "LastModifiedDate";
$tdataadmin_users[".exportFields"][] = "AccountName";
$tdataadmin_users[".exportFields"][] = "AccountNumber";
$tdataadmin_users[".exportFields"][] = "OpeningAccountDate";
$tdataadmin_users[".exportFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".exportFields"][] = "UserLevel";
$tdataadmin_users[".exportFields"][] = "InterestRate";
$tdataadmin_users[".exportFields"][] = "SetWithdrawDate";

$tdataadmin_users[".importFields"] = array();

$tdataadmin_users[".printFields"] = array();
$tdataadmin_users[".printFields"][] = "InterestRate";
$tdataadmin_users[".printFields"][] = "UserLevel";
$tdataadmin_users[".printFields"][] = "OpeningAccountBalance";
$tdataadmin_users[".printFields"][] = "OpeningAccountDate";
$tdataadmin_users[".printFields"][] = "AccountNumber";
$tdataadmin_users[".printFields"][] = "AccountName";
$tdataadmin_users[".printFields"][] = "SetWithdrawDate";
$tdataadmin_users[".printFields"][] = "id";
$tdataadmin_users[".printFields"][] = "FirstName";
$tdataadmin_users[".printFields"][] = "LastName";
$tdataadmin_users[".printFields"][] = "Sex";
$tdataadmin_users[".printFields"][] = "DateOfBirth";
$tdataadmin_users[".printFields"][] = "TelephoneNo";
$tdataadmin_users[".printFields"][] = "EmailAddress";
$tdataadmin_users[".printFields"][] = "CurrentAddress";
$tdataadmin_users[".printFields"][] = "PlaceOfBirth";
$tdataadmin_users[".printFields"][] = "PassportOrID";
$tdataadmin_users[".printFields"][] = "ProfilePhoto";
$tdataadmin_users[".printFields"][] = "AttachedFile";
$tdataadmin_users[".printFields"][] = "ClientNo";
$tdataadmin_users[".printFields"][] = "EmergencyContactPerson";
$tdataadmin_users[".printFields"][] = "EmergencyContactRelation";
$tdataadmin_users[".printFields"][] = "EmergencyContactTel";
$tdataadmin_users[".printFields"][] = "Username";
$tdataadmin_users[".printFields"][] = "Password";
$tdataadmin_users[".printFields"][] = "LastModifiedBy";
$tdataadmin_users[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	


	
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




	$tdataadmin_users["id"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","FirstName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["FirstName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","LastName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["LastName"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Sex");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["Sex"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","DateOfBirth");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["DateOfBirth"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","TelephoneNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["TelephoneNo"] = $fdata;
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","EmailAddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["EmailAddress"] = $fdata;
//	CurrentAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CurrentAddress";
	$fdata["GoodName"] = "CurrentAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","CurrentAddress");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataadmin_users["CurrentAddress"] = $fdata;
//	PlaceOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PlaceOfBirth";
	$fdata["GoodName"] = "PlaceOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","PlaceOfBirth");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["PlaceOfBirth"] = $fdata;
//	PassportOrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PassportOrID";
	$fdata["GoodName"] = "PassportOrID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","PassportOrID");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["PassportOrID"] = $fdata;
//	ProfilePhoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProfilePhoto";
	$fdata["GoodName"] = "ProfilePhoto";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","ProfilePhoto");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["ProfilePhoto"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","AttachedFile");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["AttachedFile"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["ClientNo"] = $fdata;
//	EmergencyContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EmergencyContactPerson";
	$fdata["GoodName"] = "EmergencyContactPerson";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","EmergencyContactPerson");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["EmergencyContactPerson"] = $fdata;
//	EmergencyContactRelation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EmergencyContactRelation";
	$fdata["GoodName"] = "EmergencyContactRelation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","EmergencyContactRelation");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["EmergencyContactRelation"] = $fdata;
//	EmergencyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EmergencyContactTel";
	$fdata["GoodName"] = "EmergencyContactTel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","EmergencyContactTel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["EmergencyContactTel"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Username");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","Password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["Password"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["AccountName"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["AccountNumber"] = $fdata;
//	OpeningAccountDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "OpeningAccountDate";
	$fdata["GoodName"] = "OpeningAccountDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","OpeningAccountDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["OpeningAccountDate"] = $fdata;
//	OpeningAccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OpeningAccountBalance";
	$fdata["GoodName"] = "OpeningAccountBalance";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","OpeningAccountBalance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["OpeningAccountBalance"] = $fdata;
//	UserLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "UserLevel";
	$fdata["GoodName"] = "UserLevel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","UserLevel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["UserLevel"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","InterestRate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","SetWithdrawDate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
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




	$tdataadmin_users["SetWithdrawDate"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
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
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "FirstName";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "LastName";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "Sex";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "DateOfBirth";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "TelephoneNo";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto18["m_sql"] = "EmailAddress";
$proto18["m_srcTableName"] = "admin_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto20["m_sql"] = "CurrentAddress";
$proto20["m_srcTableName"] = "admin_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PlaceOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto22["m_sql"] = "PlaceOfBirth";
$proto22["m_srcTableName"] = "admin_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PassportOrID",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto24["m_sql"] = "PassportOrID";
$proto24["m_srcTableName"] = "admin_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePhoto",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto26["m_sql"] = "ProfilePhoto";
$proto26["m_srcTableName"] = "admin_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto28["m_sql"] = "AttachedFile";
$proto28["m_srcTableName"] = "admin_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto30["m_sql"] = "ClientNo";
$proto30["m_srcTableName"] = "admin_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactPerson",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto32["m_sql"] = "EmergencyContactPerson";
$proto32["m_srcTableName"] = "admin_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactRelation",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto34["m_sql"] = "EmergencyContactRelation";
$proto34["m_srcTableName"] = "admin_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactTel",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto36["m_sql"] = "EmergencyContactTel";
$proto36["m_srcTableName"] = "admin_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto38["m_sql"] = "Username";
$proto38["m_srcTableName"] = "admin_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto40["m_sql"] = "Password";
$proto40["m_srcTableName"] = "admin_users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto42["m_sql"] = "LastModifiedBy";
$proto42["m_srcTableName"] = "admin_users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto44["m_sql"] = "LastModifiedDate";
$proto44["m_srcTableName"] = "admin_users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto46["m_sql"] = "AccountName";
$proto46["m_srcTableName"] = "admin_users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto48["m_sql"] = "AccountNumber";
$proto48["m_srcTableName"] = "admin_users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountDate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto50["m_sql"] = "OpeningAccountDate";
$proto50["m_srcTableName"] = "admin_users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountBalance",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto52["m_sql"] = "OpeningAccountBalance";
$proto52["m_srcTableName"] = "admin_users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "UserLevel",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto54["m_sql"] = "UserLevel";
$proto54["m_srcTableName"] = "admin_users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto56["m_sql"] = "InterestRate";
$proto56["m_srcTableName"] = "admin_users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto58["m_sql"] = "SetWithdrawDate";
$proto58["m_srcTableName"] = "admin_users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "users";
$proto61["m_srcTableName"] = "admin_users";
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
$proto60["m_srcTableName"] = "admin_users";
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
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

																																																																																	

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

$tableEvents["admin_users"] = new eventsBase;
$tdataadmin_users[".hasEvents"] = false;

?>