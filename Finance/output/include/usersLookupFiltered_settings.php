<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausersLookupFiltered = array();
	$tdatausersLookupFiltered[".truncateText"] = true;
	$tdatausersLookupFiltered[".NumberOfChars"] = 80;
	$tdatausersLookupFiltered[".ShortName"] = "usersLookupFiltered";
	$tdatausersLookupFiltered[".OwnerID"] = "ClientNo";
	$tdatausersLookupFiltered[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusersLookupFiltered = array();
$fieldToolTipsusersLookupFiltered = array();
$pageTitlesusersLookupFiltered = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusersLookupFiltered["English"] = array();
	$fieldToolTipsusersLookupFiltered["English"] = array();
	$pageTitlesusersLookupFiltered["English"] = array();
	$fieldLabelsusersLookupFiltered["English"]["id"] = "Id";
	$fieldToolTipsusersLookupFiltered["English"]["id"] = "";
	$fieldLabelsusersLookupFiltered["English"]["FirstName"] = "First Name";
	$fieldToolTipsusersLookupFiltered["English"]["FirstName"] = "";
	$fieldLabelsusersLookupFiltered["English"]["LastName"] = "Last Name";
	$fieldToolTipsusersLookupFiltered["English"]["LastName"] = "";
	$fieldLabelsusersLookupFiltered["English"]["Sex"] = "Sex";
	$fieldToolTipsusersLookupFiltered["English"]["Sex"] = "";
	$fieldLabelsusersLookupFiltered["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsusersLookupFiltered["English"]["DateOfBirth"] = "";
	$fieldLabelsusersLookupFiltered["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsusersLookupFiltered["English"]["TelephoneNo"] = "";
	$fieldLabelsusersLookupFiltered["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipsusersLookupFiltered["English"]["EmailAddress"] = "";
	$fieldLabelsusersLookupFiltered["English"]["CurrentAddress"] = "Current Address";
	$fieldToolTipsusersLookupFiltered["English"]["CurrentAddress"] = "";
	$fieldLabelsusersLookupFiltered["English"]["PlaceOfBirth"] = "Place Of Birth";
	$fieldToolTipsusersLookupFiltered["English"]["PlaceOfBirth"] = "";
	$fieldLabelsusersLookupFiltered["English"]["PassportOrID"] = "Passport Or ID";
	$fieldToolTipsusersLookupFiltered["English"]["PassportOrID"] = "";
	$fieldLabelsusersLookupFiltered["English"]["ProfilePhoto"] = "Profile Photo";
	$fieldToolTipsusersLookupFiltered["English"]["ProfilePhoto"] = "";
	$fieldLabelsusersLookupFiltered["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipsusersLookupFiltered["English"]["AttachedFile"] = "";
	$fieldLabelsusersLookupFiltered["English"]["EmergencyContactPerson"] = "Emergency Contact Person";
	$fieldToolTipsusersLookupFiltered["English"]["EmergencyContactPerson"] = "";
	$fieldLabelsusersLookupFiltered["English"]["EmergencyContactRelation"] = "Emergency Contact Relation";
	$fieldToolTipsusersLookupFiltered["English"]["EmergencyContactRelation"] = "";
	$fieldLabelsusersLookupFiltered["English"]["EmergencyContactTel"] = "Emergency Contact Tel";
	$fieldToolTipsusersLookupFiltered["English"]["EmergencyContactTel"] = "";
	$fieldLabelsusersLookupFiltered["English"]["Username"] = "Username";
	$fieldToolTipsusersLookupFiltered["English"]["Username"] = "";
	$fieldLabelsusersLookupFiltered["English"]["Password"] = "Password";
	$fieldToolTipsusersLookupFiltered["English"]["Password"] = "";
	$fieldLabelsusersLookupFiltered["English"]["ClientNo"] = "Client No";
	$fieldToolTipsusersLookupFiltered["English"]["ClientNo"] = "";
	$fieldLabelsusersLookupFiltered["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsusersLookupFiltered["English"]["LastModifiedBy"] = "";
	$fieldLabelsusersLookupFiltered["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsusersLookupFiltered["English"]["LastModifiedDate"] = "";
	$fieldLabelsusersLookupFiltered["English"]["AccountName"] = "Account Name";
	$fieldToolTipsusersLookupFiltered["English"]["AccountName"] = "";
	$fieldLabelsusersLookupFiltered["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsusersLookupFiltered["English"]["AccountNumber"] = "";
	$fieldLabelsusersLookupFiltered["English"]["OpeningAccountDate"] = "Opening Account Date";
	$fieldToolTipsusersLookupFiltered["English"]["OpeningAccountDate"] = "";
	$fieldLabelsusersLookupFiltered["English"]["OpeningAccountBalance"] = "Opening Account Balance";
	$fieldToolTipsusersLookupFiltered["English"]["OpeningAccountBalance"] = "";
	$fieldLabelsusersLookupFiltered["English"]["UserLevel"] = "User Level";
	$fieldToolTipsusersLookupFiltered["English"]["UserLevel"] = "";
	if (count($fieldToolTipsusersLookupFiltered["English"]))
		$tdatausersLookupFiltered[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusersLookupFiltered[""] = array();
	$fieldToolTipsusersLookupFiltered[""] = array();
	$pageTitlesusersLookupFiltered[""] = array();
	if (count($fieldToolTipsusersLookupFiltered[""]))
		$tdatausersLookupFiltered[".isUseToolTips"] = true;
}


	$tdatausersLookupFiltered[".NCSearch"] = true;



$tdatausersLookupFiltered[".shortTableName"] = "usersLookupFiltered";
$tdatausersLookupFiltered[".nSecOptions"] = 1;
$tdatausersLookupFiltered[".recsPerRowPrint"] = 1;
$tdatausersLookupFiltered[".mainTableOwnerID"] = "ClientNo";
$tdatausersLookupFiltered[".moveNext"] = 1;
$tdatausersLookupFiltered[".entityType"] = 1;

$tdatausersLookupFiltered[".strOriginalTableName"] = "users";

	



$tdatausersLookupFiltered[".showAddInPopup"] = false;

$tdatausersLookupFiltered[".showEditInPopup"] = false;

$tdatausersLookupFiltered[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausersLookupFiltered[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausersLookupFiltered[".fieldsForRegister"] = array();

$tdatausersLookupFiltered[".listAjax"] = false;

	$tdatausersLookupFiltered[".audit"] = false;

	$tdatausersLookupFiltered[".locking"] = false;

$tdatausersLookupFiltered[".edit"] = true;
$tdatausersLookupFiltered[".afterEditAction"] = 1;
$tdatausersLookupFiltered[".closePopupAfterEdit"] = 1;
$tdatausersLookupFiltered[".afterEditActionDetTable"] = "";

$tdatausersLookupFiltered[".add"] = true;
$tdatausersLookupFiltered[".afterAddAction"] = 0;
$tdatausersLookupFiltered[".closePopupAfterAdd"] = 1;
$tdatausersLookupFiltered[".afterAddActionDetTable"] = "";

$tdatausersLookupFiltered[".list"] = true;




$tdatausersLookupFiltered[".view"] = true;

$tdatausersLookupFiltered[".import"] = true;

$tdatausersLookupFiltered[".exportTo"] = true;

$tdatausersLookupFiltered[".printFriendly"] = true;

$tdatausersLookupFiltered[".delete"] = true;

$tdatausersLookupFiltered[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausersLookupFiltered[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausersLookupFiltered[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausersLookupFiltered[".searchSaving"] = true;
//

$tdatausersLookupFiltered[".showSearchPanel"] = true;
		$tdatausersLookupFiltered[".flexibleSearch"] = true;

$tdatausersLookupFiltered[".isUseAjaxSuggest"] = true;

$tdatausersLookupFiltered[".rowHighlite"] = true;



$tdatausersLookupFiltered[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausersLookupFiltered[".isUseTimeForSearch"] = false;





$tdatausersLookupFiltered[".allSearchFields"] = array();
$tdatausersLookupFiltered[".filterFields"] = array();
$tdatausersLookupFiltered[".requiredSearchFields"] = array();

$tdatausersLookupFiltered[".allSearchFields"][] = "id";
	$tdatausersLookupFiltered[".allSearchFields"][] = "FirstName";
	$tdatausersLookupFiltered[".allSearchFields"][] = "LastName";
	$tdatausersLookupFiltered[".allSearchFields"][] = "Sex";
	$tdatausersLookupFiltered[".allSearchFields"][] = "DateOfBirth";
	$tdatausersLookupFiltered[".allSearchFields"][] = "TelephoneNo";
	$tdatausersLookupFiltered[".allSearchFields"][] = "EmailAddress";
	$tdatausersLookupFiltered[".allSearchFields"][] = "CurrentAddress";
	$tdatausersLookupFiltered[".allSearchFields"][] = "PlaceOfBirth";
	$tdatausersLookupFiltered[".allSearchFields"][] = "PassportOrID";
	$tdatausersLookupFiltered[".allSearchFields"][] = "ProfilePhoto";
	$tdatausersLookupFiltered[".allSearchFields"][] = "AttachedFile";
	$tdatausersLookupFiltered[".allSearchFields"][] = "ClientNo";
	$tdatausersLookupFiltered[".allSearchFields"][] = "EmergencyContactPerson";
	$tdatausersLookupFiltered[".allSearchFields"][] = "EmergencyContactRelation";
	$tdatausersLookupFiltered[".allSearchFields"][] = "EmergencyContactTel";
	$tdatausersLookupFiltered[".allSearchFields"][] = "Username";
	$tdatausersLookupFiltered[".allSearchFields"][] = "Password";
	$tdatausersLookupFiltered[".allSearchFields"][] = "AccountName";
	$tdatausersLookupFiltered[".allSearchFields"][] = "AccountNumber";
	$tdatausersLookupFiltered[".allSearchFields"][] = "OpeningAccountDate";
	$tdatausersLookupFiltered[".allSearchFields"][] = "OpeningAccountBalance";
	$tdatausersLookupFiltered[".allSearchFields"][] = "UserLevel";
	

$tdatausersLookupFiltered[".googleLikeFields"] = array();
$tdatausersLookupFiltered[".googleLikeFields"][] = "id";
$tdatausersLookupFiltered[".googleLikeFields"][] = "FirstName";
$tdatausersLookupFiltered[".googleLikeFields"][] = "LastName";
$tdatausersLookupFiltered[".googleLikeFields"][] = "Sex";
$tdatausersLookupFiltered[".googleLikeFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".googleLikeFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".googleLikeFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".googleLikeFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".googleLikeFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".googleLikeFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".googleLikeFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".googleLikeFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".googleLikeFields"][] = "ClientNo";
$tdatausersLookupFiltered[".googleLikeFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".googleLikeFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".googleLikeFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".googleLikeFields"][] = "Username";
$tdatausersLookupFiltered[".googleLikeFields"][] = "Password";
$tdatausersLookupFiltered[".googleLikeFields"][] = "LastModifiedBy";
$tdatausersLookupFiltered[".googleLikeFields"][] = "LastModifiedDate";
$tdatausersLookupFiltered[".googleLikeFields"][] = "AccountName";
$tdatausersLookupFiltered[".googleLikeFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".googleLikeFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".googleLikeFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".googleLikeFields"][] = "UserLevel";


$tdatausersLookupFiltered[".advSearchFields"] = array();
$tdatausersLookupFiltered[".advSearchFields"][] = "id";
$tdatausersLookupFiltered[".advSearchFields"][] = "FirstName";
$tdatausersLookupFiltered[".advSearchFields"][] = "LastName";
$tdatausersLookupFiltered[".advSearchFields"][] = "Sex";
$tdatausersLookupFiltered[".advSearchFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".advSearchFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".advSearchFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".advSearchFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".advSearchFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".advSearchFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".advSearchFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".advSearchFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".advSearchFields"][] = "ClientNo";
$tdatausersLookupFiltered[".advSearchFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".advSearchFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".advSearchFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".advSearchFields"][] = "Username";
$tdatausersLookupFiltered[".advSearchFields"][] = "Password";
$tdatausersLookupFiltered[".advSearchFields"][] = "AccountName";
$tdatausersLookupFiltered[".advSearchFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".advSearchFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".advSearchFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".advSearchFields"][] = "UserLevel";

$tdatausersLookupFiltered[".tableType"] = "list";

$tdatausersLookupFiltered[".printerPageOrientation"] = 0;
$tdatausersLookupFiltered[".nPrinterPageScale"] = 100;

$tdatausersLookupFiltered[".nPrinterSplitRecords"] = 40;

$tdatausersLookupFiltered[".nPrinterPDFSplitRecords"] = 40;



$tdatausersLookupFiltered[".geocodingEnabled"] = false;





$tdatausersLookupFiltered[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausersLookupFiltered[".pageSize"] = 20;

$tdatausersLookupFiltered[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY FirstName, LastName, ClientNo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausersLookupFiltered[".strOrderBy"] = $tstrOrderBy;

$tdatausersLookupFiltered[".orderindexes"] = array();
$tdatausersLookupFiltered[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "FirstName");
$tdatausersLookupFiltered[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "LastName");
$tdatausersLookupFiltered[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "ClientNo");

$tdatausersLookupFiltered[".sqlHead"] = "SELECT id,  FirstName,  LastName,  Sex,  DateOfBirth,  TelephoneNo,  EmailAddress,  CurrentAddress,  PlaceOfBirth,  PassportOrID,  ProfilePhoto,  AttachedFile,  ClientNo,  EmergencyContactPerson,  EmergencyContactRelation,  EmergencyContactTel,  Username,  Password,  LastModifiedBy,  LastModifiedDate,  AccountName,  AccountNumber,  OpeningAccountDate,  OpeningAccountBalance,  UserLevel";
$tdatausersLookupFiltered[".sqlFrom"] = "FROM users";
$tdatausersLookupFiltered[".sqlWhereExpr"] = "";
$tdatausersLookupFiltered[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausersLookupFiltered[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausersLookupFiltered[".arrGroupsPerPage"] = $arrGPP;

$tdatausersLookupFiltered[".highlightSearchResults"] = true;

$tableKeysusersLookupFiltered = array();
$tableKeysusersLookupFiltered[] = "id";
$tdatausersLookupFiltered[".Keys"] = $tableKeysusersLookupFiltered;

$tdatausersLookupFiltered[".listFields"] = array();
$tdatausersLookupFiltered[".listFields"][] = "id";
$tdatausersLookupFiltered[".listFields"][] = "FirstName";
$tdatausersLookupFiltered[".listFields"][] = "LastName";
$tdatausersLookupFiltered[".listFields"][] = "Sex";
$tdatausersLookupFiltered[".listFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".listFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".listFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".listFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".listFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".listFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".listFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".listFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".listFields"][] = "ClientNo";
$tdatausersLookupFiltered[".listFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".listFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".listFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".listFields"][] = "Username";
$tdatausersLookupFiltered[".listFields"][] = "Password";
$tdatausersLookupFiltered[".listFields"][] = "AccountName";
$tdatausersLookupFiltered[".listFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".listFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".listFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".listFields"][] = "UserLevel";

$tdatausersLookupFiltered[".hideMobileList"] = array();


$tdatausersLookupFiltered[".viewFields"] = array();
$tdatausersLookupFiltered[".viewFields"][] = "id";
$tdatausersLookupFiltered[".viewFields"][] = "FirstName";
$tdatausersLookupFiltered[".viewFields"][] = "LastName";
$tdatausersLookupFiltered[".viewFields"][] = "Sex";
$tdatausersLookupFiltered[".viewFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".viewFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".viewFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".viewFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".viewFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".viewFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".viewFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".viewFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".viewFields"][] = "ClientNo";
$tdatausersLookupFiltered[".viewFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".viewFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".viewFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".viewFields"][] = "Username";
$tdatausersLookupFiltered[".viewFields"][] = "Password";
$tdatausersLookupFiltered[".viewFields"][] = "AccountName";
$tdatausersLookupFiltered[".viewFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".viewFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".viewFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".viewFields"][] = "UserLevel";

$tdatausersLookupFiltered[".addFields"] = array();
$tdatausersLookupFiltered[".addFields"][] = "FirstName";
$tdatausersLookupFiltered[".addFields"][] = "LastName";
$tdatausersLookupFiltered[".addFields"][] = "Sex";
$tdatausersLookupFiltered[".addFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".addFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".addFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".addFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".addFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".addFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".addFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".addFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".addFields"][] = "ClientNo";
$tdatausersLookupFiltered[".addFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".addFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".addFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".addFields"][] = "Username";
$tdatausersLookupFiltered[".addFields"][] = "Password";
$tdatausersLookupFiltered[".addFields"][] = "AccountName";
$tdatausersLookupFiltered[".addFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".addFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".addFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".addFields"][] = "UserLevel";

$tdatausersLookupFiltered[".masterListFields"] = array();
$tdatausersLookupFiltered[".masterListFields"][] = "id";
$tdatausersLookupFiltered[".masterListFields"][] = "FirstName";
$tdatausersLookupFiltered[".masterListFields"][] = "LastName";
$tdatausersLookupFiltered[".masterListFields"][] = "Sex";
$tdatausersLookupFiltered[".masterListFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".masterListFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".masterListFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".masterListFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".masterListFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".masterListFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".masterListFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".masterListFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".masterListFields"][] = "ClientNo";
$tdatausersLookupFiltered[".masterListFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".masterListFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".masterListFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".masterListFields"][] = "Username";
$tdatausersLookupFiltered[".masterListFields"][] = "Password";
$tdatausersLookupFiltered[".masterListFields"][] = "LastModifiedBy";
$tdatausersLookupFiltered[".masterListFields"][] = "LastModifiedDate";
$tdatausersLookupFiltered[".masterListFields"][] = "AccountName";
$tdatausersLookupFiltered[".masterListFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".masterListFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".masterListFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".masterListFields"][] = "UserLevel";

$tdatausersLookupFiltered[".inlineAddFields"] = array();
$tdatausersLookupFiltered[".inlineAddFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".inlineAddFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".inlineAddFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".inlineAddFields"][] = "UserLevel";

$tdatausersLookupFiltered[".editFields"] = array();
$tdatausersLookupFiltered[".editFields"][] = "FirstName";
$tdatausersLookupFiltered[".editFields"][] = "LastName";
$tdatausersLookupFiltered[".editFields"][] = "Sex";
$tdatausersLookupFiltered[".editFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".editFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".editFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".editFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".editFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".editFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".editFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".editFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".editFields"][] = "ClientNo";
$tdatausersLookupFiltered[".editFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".editFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".editFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".editFields"][] = "Username";
$tdatausersLookupFiltered[".editFields"][] = "Password";
$tdatausersLookupFiltered[".editFields"][] = "AccountName";
$tdatausersLookupFiltered[".editFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".editFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".editFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".editFields"][] = "UserLevel";

$tdatausersLookupFiltered[".inlineEditFields"] = array();
$tdatausersLookupFiltered[".inlineEditFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".inlineEditFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".inlineEditFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".inlineEditFields"][] = "UserLevel";

$tdatausersLookupFiltered[".updateSelectedFields"] = array();


$tdatausersLookupFiltered[".exportFields"] = array();
$tdatausersLookupFiltered[".exportFields"][] = "id";
$tdatausersLookupFiltered[".exportFields"][] = "FirstName";
$tdatausersLookupFiltered[".exportFields"][] = "LastName";
$tdatausersLookupFiltered[".exportFields"][] = "Sex";
$tdatausersLookupFiltered[".exportFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".exportFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".exportFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".exportFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".exportFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".exportFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".exportFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".exportFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".exportFields"][] = "ClientNo";
$tdatausersLookupFiltered[".exportFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".exportFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".exportFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".exportFields"][] = "Username";
$tdatausersLookupFiltered[".exportFields"][] = "Password";
$tdatausersLookupFiltered[".exportFields"][] = "AccountName";
$tdatausersLookupFiltered[".exportFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".exportFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".exportFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".exportFields"][] = "UserLevel";

$tdatausersLookupFiltered[".importFields"] = array();
$tdatausersLookupFiltered[".importFields"][] = "id";
$tdatausersLookupFiltered[".importFields"][] = "FirstName";
$tdatausersLookupFiltered[".importFields"][] = "LastName";
$tdatausersLookupFiltered[".importFields"][] = "Sex";
$tdatausersLookupFiltered[".importFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".importFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".importFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".importFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".importFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".importFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".importFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".importFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".importFields"][] = "ClientNo";
$tdatausersLookupFiltered[".importFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".importFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".importFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".importFields"][] = "Username";
$tdatausersLookupFiltered[".importFields"][] = "Password";
$tdatausersLookupFiltered[".importFields"][] = "AccountName";
$tdatausersLookupFiltered[".importFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".importFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".importFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".importFields"][] = "UserLevel";

$tdatausersLookupFiltered[".printFields"] = array();
$tdatausersLookupFiltered[".printFields"][] = "id";
$tdatausersLookupFiltered[".printFields"][] = "FirstName";
$tdatausersLookupFiltered[".printFields"][] = "LastName";
$tdatausersLookupFiltered[".printFields"][] = "Sex";
$tdatausersLookupFiltered[".printFields"][] = "DateOfBirth";
$tdatausersLookupFiltered[".printFields"][] = "TelephoneNo";
$tdatausersLookupFiltered[".printFields"][] = "EmailAddress";
$tdatausersLookupFiltered[".printFields"][] = "CurrentAddress";
$tdatausersLookupFiltered[".printFields"][] = "PlaceOfBirth";
$tdatausersLookupFiltered[".printFields"][] = "PassportOrID";
$tdatausersLookupFiltered[".printFields"][] = "ProfilePhoto";
$tdatausersLookupFiltered[".printFields"][] = "AttachedFile";
$tdatausersLookupFiltered[".printFields"][] = "ClientNo";
$tdatausersLookupFiltered[".printFields"][] = "EmergencyContactPerson";
$tdatausersLookupFiltered[".printFields"][] = "EmergencyContactRelation";
$tdatausersLookupFiltered[".printFields"][] = "EmergencyContactTel";
$tdatausersLookupFiltered[".printFields"][] = "Username";
$tdatausersLookupFiltered[".printFields"][] = "Password";
$tdatausersLookupFiltered[".printFields"][] = "AccountName";
$tdatausersLookupFiltered[".printFields"][] = "AccountNumber";
$tdatausersLookupFiltered[".printFields"][] = "OpeningAccountDate";
$tdatausersLookupFiltered[".printFields"][] = "OpeningAccountBalance";
$tdatausersLookupFiltered[".printFields"][] = "UserLevel";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","id");
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




	$tdatausersLookupFiltered["id"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","FirstName");
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




	$tdatausersLookupFiltered["FirstName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","LastName");
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




	$tdatausersLookupFiltered["LastName"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","Sex");
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




	$tdatausersLookupFiltered["Sex"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","DateOfBirth");
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




	$tdatausersLookupFiltered["DateOfBirth"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","TelephoneNo");
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




	$tdatausersLookupFiltered["TelephoneNo"] = $fdata;
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","EmailAddress");
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




	$tdatausersLookupFiltered["EmailAddress"] = $fdata;
//	CurrentAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CurrentAddress";
	$fdata["GoodName"] = "CurrentAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","CurrentAddress");
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




	$tdatausersLookupFiltered["CurrentAddress"] = $fdata;
//	PlaceOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PlaceOfBirth";
	$fdata["GoodName"] = "PlaceOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","PlaceOfBirth");
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




	$tdatausersLookupFiltered["PlaceOfBirth"] = $fdata;
//	PassportOrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PassportOrID";
	$fdata["GoodName"] = "PassportOrID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","PassportOrID");
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




	$tdatausersLookupFiltered["PassportOrID"] = $fdata;
//	ProfilePhoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProfilePhoto";
	$fdata["GoodName"] = "ProfilePhoto";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","ProfilePhoto");
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




	$tdatausersLookupFiltered["ProfilePhoto"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","AttachedFile");
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




	$tdatausersLookupFiltered["AttachedFile"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","ClientNo");
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




	$tdatausersLookupFiltered["ClientNo"] = $fdata;
//	EmergencyContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EmergencyContactPerson";
	$fdata["GoodName"] = "EmergencyContactPerson";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","EmergencyContactPerson");
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




	$tdatausersLookupFiltered["EmergencyContactPerson"] = $fdata;
//	EmergencyContactRelation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EmergencyContactRelation";
	$fdata["GoodName"] = "EmergencyContactRelation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","EmergencyContactRelation");
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




	$tdatausersLookupFiltered["EmergencyContactRelation"] = $fdata;
//	EmergencyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EmergencyContactTel";
	$fdata["GoodName"] = "EmergencyContactTel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","EmergencyContactTel");
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




	$tdatausersLookupFiltered["EmergencyContactTel"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","Username");
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




	$tdatausersLookupFiltered["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","Password");
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




	$tdatausersLookupFiltered["Password"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "LastModifiedBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedBy";

	
	
			
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








	$tdatausersLookupFiltered["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "LastModifiedDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastModifiedDate";

	
	
			
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








	$tdatausersLookupFiltered["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","AccountName");
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




	$tdatausersLookupFiltered["AccountName"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","AccountNumber");
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




	$tdatausersLookupFiltered["AccountNumber"] = $fdata;
//	OpeningAccountDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "OpeningAccountDate";
	$fdata["GoodName"] = "OpeningAccountDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","OpeningAccountDate");
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




	$tdatausersLookupFiltered["OpeningAccountDate"] = $fdata;
//	OpeningAccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OpeningAccountBalance";
	$fdata["GoodName"] = "OpeningAccountBalance";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","OpeningAccountBalance");
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




	$tdatausersLookupFiltered["OpeningAccountBalance"] = $fdata;
//	UserLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "UserLevel";
	$fdata["GoodName"] = "UserLevel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookupFiltered","UserLevel");
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




	$tdatausersLookupFiltered["UserLevel"] = $fdata;


$tables_data["usersLookupFiltered"]=&$tdatausersLookupFiltered;
$field_labels["usersLookupFiltered"] = &$fieldLabelsusersLookupFiltered;
$fieldToolTips["usersLookupFiltered"] = &$fieldToolTipsusersLookupFiltered;
$page_titles["usersLookupFiltered"] = &$pageTitlesusersLookupFiltered;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usersLookupFiltered"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usersLookupFiltered"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usersLookupFiltered()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  FirstName,  LastName,  Sex,  DateOfBirth,  TelephoneNo,  EmailAddress,  CurrentAddress,  PlaceOfBirth,  PassportOrID,  ProfilePhoto,  AttachedFile,  ClientNo,  EmergencyContactPerson,  EmergencyContactRelation,  EmergencyContactTel,  Username,  Password,  LastModifiedBy,  LastModifiedDate,  AccountName,  AccountNumber,  OpeningAccountDate,  OpeningAccountBalance,  UserLevel";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY FirstName, LastName, ClientNo";
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
	"m_srcTableName" => "usersLookupFiltered"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "usersLookupFiltered";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto8["m_sql"] = "FirstName";
$proto8["m_srcTableName"] = "usersLookupFiltered";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto10["m_sql"] = "LastName";
$proto10["m_srcTableName"] = "usersLookupFiltered";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto12["m_sql"] = "Sex";
$proto12["m_srcTableName"] = "usersLookupFiltered";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto14["m_sql"] = "DateOfBirth";
$proto14["m_srcTableName"] = "usersLookupFiltered";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto16["m_sql"] = "TelephoneNo";
$proto16["m_srcTableName"] = "usersLookupFiltered";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto18["m_sql"] = "EmailAddress";
$proto18["m_srcTableName"] = "usersLookupFiltered";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto20["m_sql"] = "CurrentAddress";
$proto20["m_srcTableName"] = "usersLookupFiltered";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PlaceOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto22["m_sql"] = "PlaceOfBirth";
$proto22["m_srcTableName"] = "usersLookupFiltered";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PassportOrID",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto24["m_sql"] = "PassportOrID";
$proto24["m_srcTableName"] = "usersLookupFiltered";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePhoto",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto26["m_sql"] = "ProfilePhoto";
$proto26["m_srcTableName"] = "usersLookupFiltered";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto28["m_sql"] = "AttachedFile";
$proto28["m_srcTableName"] = "usersLookupFiltered";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto30["m_sql"] = "ClientNo";
$proto30["m_srcTableName"] = "usersLookupFiltered";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactPerson",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto32["m_sql"] = "EmergencyContactPerson";
$proto32["m_srcTableName"] = "usersLookupFiltered";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactRelation",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto34["m_sql"] = "EmergencyContactRelation";
$proto34["m_srcTableName"] = "usersLookupFiltered";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactTel",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto36["m_sql"] = "EmergencyContactTel";
$proto36["m_srcTableName"] = "usersLookupFiltered";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto38["m_sql"] = "Username";
$proto38["m_srcTableName"] = "usersLookupFiltered";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto40["m_sql"] = "Password";
$proto40["m_srcTableName"] = "usersLookupFiltered";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto42["m_sql"] = "LastModifiedBy";
$proto42["m_srcTableName"] = "usersLookupFiltered";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto44["m_sql"] = "LastModifiedDate";
$proto44["m_srcTableName"] = "usersLookupFiltered";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto46["m_sql"] = "AccountName";
$proto46["m_srcTableName"] = "usersLookupFiltered";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto48["m_sql"] = "AccountNumber";
$proto48["m_srcTableName"] = "usersLookupFiltered";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountDate",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto50["m_sql"] = "OpeningAccountDate";
$proto50["m_srcTableName"] = "usersLookupFiltered";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountBalance",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto52["m_sql"] = "OpeningAccountBalance";
$proto52["m_srcTableName"] = "usersLookupFiltered";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "UserLevel",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto54["m_sql"] = "UserLevel";
$proto54["m_srcTableName"] = "usersLookupFiltered";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "users";
$proto57["m_srcTableName"] = "usersLookupFiltered";
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
$proto56["m_srcTableName"] = "usersLookupFiltered";
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
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 1;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto62["m_column"]=$obj;
$proto62["m_bAsc"] = 1;
$proto62["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto62);

$proto0["m_orderby"][]=$obj;					
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookupFiltered"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 1;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="usersLookupFiltered";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usersLookupFiltered = createSqlQuery_usersLookupFiltered();


	
		;

																									

$tdatausersLookupFiltered[".sqlquery"] = $queryData_usersLookupFiltered;

$tableEvents["usersLookupFiltered"] = new eventsBase;
$tdatausersLookupFiltered[".hasEvents"] = false;

?>