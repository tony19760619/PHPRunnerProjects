<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausersLookUp = array();
	$tdatausersLookUp[".truncateText"] = true;
	$tdatausersLookUp[".NumberOfChars"] = 80;
	$tdatausersLookUp[".ShortName"] = "usersLookUp";
	$tdatausersLookUp[".OwnerID"] = "";
	$tdatausersLookUp[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusersLookUp = array();
$fieldToolTipsusersLookUp = array();
$pageTitlesusersLookUp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusersLookUp["English"] = array();
	$fieldToolTipsusersLookUp["English"] = array();
	$pageTitlesusersLookUp["English"] = array();
	$fieldLabelsusersLookUp["English"]["id"] = "Id";
	$fieldToolTipsusersLookUp["English"]["id"] = "";
	$fieldLabelsusersLookUp["English"]["FirstName"] = "First Name";
	$fieldToolTipsusersLookUp["English"]["FirstName"] = "";
	$fieldLabelsusersLookUp["English"]["LastName"] = "Last Name";
	$fieldToolTipsusersLookUp["English"]["LastName"] = "";
	$fieldLabelsusersLookUp["English"]["Sex"] = "Sex";
	$fieldToolTipsusersLookUp["English"]["Sex"] = "";
	$fieldLabelsusersLookUp["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsusersLookUp["English"]["DateOfBirth"] = "";
	$fieldLabelsusersLookUp["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsusersLookUp["English"]["TelephoneNo"] = "";
	$fieldLabelsusersLookUp["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipsusersLookUp["English"]["EmailAddress"] = "";
	$fieldLabelsusersLookUp["English"]["CurrentAddress"] = "Current Address";
	$fieldToolTipsusersLookUp["English"]["CurrentAddress"] = "";
	$fieldLabelsusersLookUp["English"]["PlaceOfBirth"] = "Place Of Birth";
	$fieldToolTipsusersLookUp["English"]["PlaceOfBirth"] = "";
	$fieldLabelsusersLookUp["English"]["PassportOrID"] = "Passport Or ID";
	$fieldToolTipsusersLookUp["English"]["PassportOrID"] = "";
	$fieldLabelsusersLookUp["English"]["ProfilePhoto"] = "Profile Photo";
	$fieldToolTipsusersLookUp["English"]["ProfilePhoto"] = "";
	$fieldLabelsusersLookUp["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipsusersLookUp["English"]["AttachedFile"] = "";
	$fieldLabelsusersLookUp["English"]["EmergencyContactPerson"] = "Emergency Contact Person";
	$fieldToolTipsusersLookUp["English"]["EmergencyContactPerson"] = "";
	$fieldLabelsusersLookUp["English"]["EmergencyContactRelation"] = "Emergency Contact Relation";
	$fieldToolTipsusersLookUp["English"]["EmergencyContactRelation"] = "";
	$fieldLabelsusersLookUp["English"]["EmergencyContactTel"] = "Emergency Contact Tel";
	$fieldToolTipsusersLookUp["English"]["EmergencyContactTel"] = "";
	$fieldLabelsusersLookUp["English"]["Username"] = "Username";
	$fieldToolTipsusersLookUp["English"]["Username"] = "";
	$fieldLabelsusersLookUp["English"]["Password"] = "Password";
	$fieldToolTipsusersLookUp["English"]["Password"] = "";
	$fieldLabelsusersLookUp["English"]["ClientNo"] = "Client No";
	$fieldToolTipsusersLookUp["English"]["ClientNo"] = "";
	$fieldLabelsusersLookUp["English"]["AccountName"] = "Account Name";
	$fieldToolTipsusersLookUp["English"]["AccountName"] = "";
	if (count($fieldToolTipsusersLookUp["English"]))
		$tdatausersLookUp[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusersLookUp[""] = array();
	$fieldToolTipsusersLookUp[""] = array();
	$pageTitlesusersLookUp[""] = array();
	if (count($fieldToolTipsusersLookUp[""]))
		$tdatausersLookUp[".isUseToolTips"] = true;
}


	$tdatausersLookUp[".NCSearch"] = true;



$tdatausersLookUp[".shortTableName"] = "usersLookUp";
$tdatausersLookUp[".nSecOptions"] = 0;
$tdatausersLookUp[".recsPerRowPrint"] = 1;
$tdatausersLookUp[".mainTableOwnerID"] = "";
$tdatausersLookUp[".moveNext"] = 1;
$tdatausersLookUp[".entityType"] = 1;

$tdatausersLookUp[".strOriginalTableName"] = "users";

	



$tdatausersLookUp[".showAddInPopup"] = false;

$tdatausersLookUp[".showEditInPopup"] = false;

$tdatausersLookUp[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausersLookUp[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausersLookUp[".fieldsForRegister"] = array();

$tdatausersLookUp[".listAjax"] = false;

	$tdatausersLookUp[".audit"] = false;

	$tdatausersLookUp[".locking"] = false;

$tdatausersLookUp[".edit"] = true;
$tdatausersLookUp[".afterEditAction"] = 1;
$tdatausersLookUp[".closePopupAfterEdit"] = 1;
$tdatausersLookUp[".afterEditActionDetTable"] = "";

$tdatausersLookUp[".add"] = true;
$tdatausersLookUp[".afterAddAction"] = 0;
$tdatausersLookUp[".closePopupAfterAdd"] = 1;
$tdatausersLookUp[".afterAddActionDetTable"] = "";

$tdatausersLookUp[".list"] = true;




$tdatausersLookUp[".view"] = true;

$tdatausersLookUp[".import"] = true;

$tdatausersLookUp[".exportTo"] = true;

$tdatausersLookUp[".printFriendly"] = true;

$tdatausersLookUp[".delete"] = true;

$tdatausersLookUp[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausersLookUp[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausersLookUp[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausersLookUp[".searchSaving"] = true;
//

$tdatausersLookUp[".showSearchPanel"] = true;
		$tdatausersLookUp[".flexibleSearch"] = true;

$tdatausersLookUp[".isUseAjaxSuggest"] = true;

$tdatausersLookUp[".rowHighlite"] = true;



$tdatausersLookUp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausersLookUp[".isUseTimeForSearch"] = false;





$tdatausersLookUp[".allSearchFields"] = array();
$tdatausersLookUp[".filterFields"] = array();
$tdatausersLookUp[".requiredSearchFields"] = array();

$tdatausersLookUp[".allSearchFields"][] = "id";
	$tdatausersLookUp[".allSearchFields"][] = "FirstName";
	$tdatausersLookUp[".allSearchFields"][] = "LastName";
	$tdatausersLookUp[".allSearchFields"][] = "Sex";
	$tdatausersLookUp[".allSearchFields"][] = "DateOfBirth";
	$tdatausersLookUp[".allSearchFields"][] = "TelephoneNo";
	$tdatausersLookUp[".allSearchFields"][] = "EmailAddress";
	$tdatausersLookUp[".allSearchFields"][] = "CurrentAddress";
	$tdatausersLookUp[".allSearchFields"][] = "PlaceOfBirth";
	$tdatausersLookUp[".allSearchFields"][] = "PassportOrID";
	$tdatausersLookUp[".allSearchFields"][] = "ProfilePhoto";
	$tdatausersLookUp[".allSearchFields"][] = "AttachedFile";
	$tdatausersLookUp[".allSearchFields"][] = "ClientNo";
	$tdatausersLookUp[".allSearchFields"][] = "EmergencyContactPerson";
	$tdatausersLookUp[".allSearchFields"][] = "EmergencyContactRelation";
	$tdatausersLookUp[".allSearchFields"][] = "EmergencyContactTel";
	$tdatausersLookUp[".allSearchFields"][] = "Username";
	$tdatausersLookUp[".allSearchFields"][] = "Password";
	$tdatausersLookUp[".allSearchFields"][] = "AccountName";
	

$tdatausersLookUp[".googleLikeFields"] = array();
$tdatausersLookUp[".googleLikeFields"][] = "id";
$tdatausersLookUp[".googleLikeFields"][] = "FirstName";
$tdatausersLookUp[".googleLikeFields"][] = "LastName";
$tdatausersLookUp[".googleLikeFields"][] = "Sex";
$tdatausersLookUp[".googleLikeFields"][] = "DateOfBirth";
$tdatausersLookUp[".googleLikeFields"][] = "TelephoneNo";
$tdatausersLookUp[".googleLikeFields"][] = "EmailAddress";
$tdatausersLookUp[".googleLikeFields"][] = "CurrentAddress";
$tdatausersLookUp[".googleLikeFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".googleLikeFields"][] = "PassportOrID";
$tdatausersLookUp[".googleLikeFields"][] = "ProfilePhoto";
$tdatausersLookUp[".googleLikeFields"][] = "AttachedFile";
$tdatausersLookUp[".googleLikeFields"][] = "ClientNo";
$tdatausersLookUp[".googleLikeFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".googleLikeFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".googleLikeFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".googleLikeFields"][] = "Username";
$tdatausersLookUp[".googleLikeFields"][] = "Password";
$tdatausersLookUp[".googleLikeFields"][] = "AccountName";


$tdatausersLookUp[".advSearchFields"] = array();
$tdatausersLookUp[".advSearchFields"][] = "id";
$tdatausersLookUp[".advSearchFields"][] = "FirstName";
$tdatausersLookUp[".advSearchFields"][] = "LastName";
$tdatausersLookUp[".advSearchFields"][] = "Sex";
$tdatausersLookUp[".advSearchFields"][] = "DateOfBirth";
$tdatausersLookUp[".advSearchFields"][] = "TelephoneNo";
$tdatausersLookUp[".advSearchFields"][] = "EmailAddress";
$tdatausersLookUp[".advSearchFields"][] = "CurrentAddress";
$tdatausersLookUp[".advSearchFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".advSearchFields"][] = "PassportOrID";
$tdatausersLookUp[".advSearchFields"][] = "ProfilePhoto";
$tdatausersLookUp[".advSearchFields"][] = "AttachedFile";
$tdatausersLookUp[".advSearchFields"][] = "ClientNo";
$tdatausersLookUp[".advSearchFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".advSearchFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".advSearchFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".advSearchFields"][] = "Username";
$tdatausersLookUp[".advSearchFields"][] = "Password";
$tdatausersLookUp[".advSearchFields"][] = "AccountName";

$tdatausersLookUp[".tableType"] = "list";

$tdatausersLookUp[".printerPageOrientation"] = 0;
$tdatausersLookUp[".nPrinterPageScale"] = 100;

$tdatausersLookUp[".nPrinterSplitRecords"] = 40;

$tdatausersLookUp[".nPrinterPDFSplitRecords"] = 40;



$tdatausersLookUp[".geocodingEnabled"] = false;





$tdatausersLookUp[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausersLookUp[".pageSize"] = 20;

$tdatausersLookUp[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY FirstName, LastName, ClientNo";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausersLookUp[".strOrderBy"] = $tstrOrderBy;

$tdatausersLookUp[".orderindexes"] = array();
$tdatausersLookUp[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "FirstName");
$tdatausersLookUp[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "LastName");
$tdatausersLookUp[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "ClientNo");

$tdatausersLookUp[".sqlHead"] = "SELECT id,  FirstName,  LastName,  Sex,  DateOfBirth,  TelephoneNo,  EmailAddress,  CurrentAddress,  PlaceOfBirth,  PassportOrID,  ProfilePhoto,  AttachedFile,  ClientNo,  EmergencyContactPerson,  EmergencyContactRelation,  EmergencyContactTel,  Username,  Password,  AccountName";
$tdatausersLookUp[".sqlFrom"] = "FROM users";
$tdatausersLookUp[".sqlWhereExpr"] = "";
$tdatausersLookUp[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausersLookUp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausersLookUp[".arrGroupsPerPage"] = $arrGPP;

$tdatausersLookUp[".highlightSearchResults"] = true;

$tableKeysusersLookUp = array();
$tableKeysusersLookUp[] = "id";
$tdatausersLookUp[".Keys"] = $tableKeysusersLookUp;

$tdatausersLookUp[".listFields"] = array();
$tdatausersLookUp[".listFields"][] = "id";
$tdatausersLookUp[".listFields"][] = "FirstName";
$tdatausersLookUp[".listFields"][] = "LastName";
$tdatausersLookUp[".listFields"][] = "Sex";
$tdatausersLookUp[".listFields"][] = "DateOfBirth";
$tdatausersLookUp[".listFields"][] = "TelephoneNo";
$tdatausersLookUp[".listFields"][] = "EmailAddress";
$tdatausersLookUp[".listFields"][] = "CurrentAddress";
$tdatausersLookUp[".listFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".listFields"][] = "PassportOrID";
$tdatausersLookUp[".listFields"][] = "ProfilePhoto";
$tdatausersLookUp[".listFields"][] = "AttachedFile";
$tdatausersLookUp[".listFields"][] = "ClientNo";
$tdatausersLookUp[".listFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".listFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".listFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".listFields"][] = "Username";
$tdatausersLookUp[".listFields"][] = "Password";
$tdatausersLookUp[".listFields"][] = "AccountName";

$tdatausersLookUp[".hideMobileList"] = array();


$tdatausersLookUp[".viewFields"] = array();
$tdatausersLookUp[".viewFields"][] = "id";
$tdatausersLookUp[".viewFields"][] = "FirstName";
$tdatausersLookUp[".viewFields"][] = "LastName";
$tdatausersLookUp[".viewFields"][] = "Sex";
$tdatausersLookUp[".viewFields"][] = "DateOfBirth";
$tdatausersLookUp[".viewFields"][] = "TelephoneNo";
$tdatausersLookUp[".viewFields"][] = "EmailAddress";
$tdatausersLookUp[".viewFields"][] = "CurrentAddress";
$tdatausersLookUp[".viewFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".viewFields"][] = "PassportOrID";
$tdatausersLookUp[".viewFields"][] = "ProfilePhoto";
$tdatausersLookUp[".viewFields"][] = "AttachedFile";
$tdatausersLookUp[".viewFields"][] = "ClientNo";
$tdatausersLookUp[".viewFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".viewFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".viewFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".viewFields"][] = "Username";
$tdatausersLookUp[".viewFields"][] = "Password";
$tdatausersLookUp[".viewFields"][] = "AccountName";

$tdatausersLookUp[".addFields"] = array();
$tdatausersLookUp[".addFields"][] = "FirstName";
$tdatausersLookUp[".addFields"][] = "LastName";
$tdatausersLookUp[".addFields"][] = "Sex";
$tdatausersLookUp[".addFields"][] = "DateOfBirth";
$tdatausersLookUp[".addFields"][] = "TelephoneNo";
$tdatausersLookUp[".addFields"][] = "EmailAddress";
$tdatausersLookUp[".addFields"][] = "CurrentAddress";
$tdatausersLookUp[".addFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".addFields"][] = "PassportOrID";
$tdatausersLookUp[".addFields"][] = "ProfilePhoto";
$tdatausersLookUp[".addFields"][] = "AttachedFile";
$tdatausersLookUp[".addFields"][] = "ClientNo";
$tdatausersLookUp[".addFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".addFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".addFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".addFields"][] = "Username";
$tdatausersLookUp[".addFields"][] = "Password";
$tdatausersLookUp[".addFields"][] = "AccountName";

$tdatausersLookUp[".masterListFields"] = array();
$tdatausersLookUp[".masterListFields"][] = "id";
$tdatausersLookUp[".masterListFields"][] = "FirstName";
$tdatausersLookUp[".masterListFields"][] = "LastName";
$tdatausersLookUp[".masterListFields"][] = "Sex";
$tdatausersLookUp[".masterListFields"][] = "DateOfBirth";
$tdatausersLookUp[".masterListFields"][] = "TelephoneNo";
$tdatausersLookUp[".masterListFields"][] = "EmailAddress";
$tdatausersLookUp[".masterListFields"][] = "CurrentAddress";
$tdatausersLookUp[".masterListFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".masterListFields"][] = "PassportOrID";
$tdatausersLookUp[".masterListFields"][] = "ProfilePhoto";
$tdatausersLookUp[".masterListFields"][] = "AttachedFile";
$tdatausersLookUp[".masterListFields"][] = "ClientNo";
$tdatausersLookUp[".masterListFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".masterListFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".masterListFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".masterListFields"][] = "Username";
$tdatausersLookUp[".masterListFields"][] = "Password";
$tdatausersLookUp[".masterListFields"][] = "AccountName";

$tdatausersLookUp[".inlineAddFields"] = array();

$tdatausersLookUp[".editFields"] = array();
$tdatausersLookUp[".editFields"][] = "FirstName";
$tdatausersLookUp[".editFields"][] = "LastName";
$tdatausersLookUp[".editFields"][] = "Sex";
$tdatausersLookUp[".editFields"][] = "DateOfBirth";
$tdatausersLookUp[".editFields"][] = "TelephoneNo";
$tdatausersLookUp[".editFields"][] = "EmailAddress";
$tdatausersLookUp[".editFields"][] = "CurrentAddress";
$tdatausersLookUp[".editFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".editFields"][] = "PassportOrID";
$tdatausersLookUp[".editFields"][] = "ProfilePhoto";
$tdatausersLookUp[".editFields"][] = "AttachedFile";
$tdatausersLookUp[".editFields"][] = "ClientNo";
$tdatausersLookUp[".editFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".editFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".editFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".editFields"][] = "Username";
$tdatausersLookUp[".editFields"][] = "Password";
$tdatausersLookUp[".editFields"][] = "AccountName";

$tdatausersLookUp[".inlineEditFields"] = array();

$tdatausersLookUp[".updateSelectedFields"] = array();


$tdatausersLookUp[".exportFields"] = array();
$tdatausersLookUp[".exportFields"][] = "id";
$tdatausersLookUp[".exportFields"][] = "FirstName";
$tdatausersLookUp[".exportFields"][] = "LastName";
$tdatausersLookUp[".exportFields"][] = "Sex";
$tdatausersLookUp[".exportFields"][] = "DateOfBirth";
$tdatausersLookUp[".exportFields"][] = "TelephoneNo";
$tdatausersLookUp[".exportFields"][] = "EmailAddress";
$tdatausersLookUp[".exportFields"][] = "CurrentAddress";
$tdatausersLookUp[".exportFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".exportFields"][] = "PassportOrID";
$tdatausersLookUp[".exportFields"][] = "ProfilePhoto";
$tdatausersLookUp[".exportFields"][] = "AttachedFile";
$tdatausersLookUp[".exportFields"][] = "ClientNo";
$tdatausersLookUp[".exportFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".exportFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".exportFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".exportFields"][] = "Username";
$tdatausersLookUp[".exportFields"][] = "Password";
$tdatausersLookUp[".exportFields"][] = "AccountName";

$tdatausersLookUp[".importFields"] = array();
$tdatausersLookUp[".importFields"][] = "id";
$tdatausersLookUp[".importFields"][] = "FirstName";
$tdatausersLookUp[".importFields"][] = "LastName";
$tdatausersLookUp[".importFields"][] = "Sex";
$tdatausersLookUp[".importFields"][] = "DateOfBirth";
$tdatausersLookUp[".importFields"][] = "TelephoneNo";
$tdatausersLookUp[".importFields"][] = "EmailAddress";
$tdatausersLookUp[".importFields"][] = "CurrentAddress";
$tdatausersLookUp[".importFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".importFields"][] = "PassportOrID";
$tdatausersLookUp[".importFields"][] = "ProfilePhoto";
$tdatausersLookUp[".importFields"][] = "AttachedFile";
$tdatausersLookUp[".importFields"][] = "ClientNo";
$tdatausersLookUp[".importFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".importFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".importFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".importFields"][] = "Username";
$tdatausersLookUp[".importFields"][] = "Password";
$tdatausersLookUp[".importFields"][] = "AccountName";

$tdatausersLookUp[".printFields"] = array();
$tdatausersLookUp[".printFields"][] = "id";
$tdatausersLookUp[".printFields"][] = "FirstName";
$tdatausersLookUp[".printFields"][] = "LastName";
$tdatausersLookUp[".printFields"][] = "Sex";
$tdatausersLookUp[".printFields"][] = "DateOfBirth";
$tdatausersLookUp[".printFields"][] = "TelephoneNo";
$tdatausersLookUp[".printFields"][] = "EmailAddress";
$tdatausersLookUp[".printFields"][] = "CurrentAddress";
$tdatausersLookUp[".printFields"][] = "PlaceOfBirth";
$tdatausersLookUp[".printFields"][] = "PassportOrID";
$tdatausersLookUp[".printFields"][] = "ProfilePhoto";
$tdatausersLookUp[".printFields"][] = "AttachedFile";
$tdatausersLookUp[".printFields"][] = "ClientNo";
$tdatausersLookUp[".printFields"][] = "EmergencyContactPerson";
$tdatausersLookUp[".printFields"][] = "EmergencyContactRelation";
$tdatausersLookUp[".printFields"][] = "EmergencyContactTel";
$tdatausersLookUp[".printFields"][] = "Username";
$tdatausersLookUp[".printFields"][] = "Password";
$tdatausersLookUp[".printFields"][] = "AccountName";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","id");
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




	$tdatausersLookUp["id"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","FirstName");
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




	$tdatausersLookUp["FirstName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","LastName");
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




	$tdatausersLookUp["LastName"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","Sex");
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




	$tdatausersLookUp["Sex"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","DateOfBirth");
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




	$tdatausersLookUp["DateOfBirth"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","TelephoneNo");
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




	$tdatausersLookUp["TelephoneNo"] = $fdata;
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","EmailAddress");
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




	$tdatausersLookUp["EmailAddress"] = $fdata;
//	CurrentAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CurrentAddress";
	$fdata["GoodName"] = "CurrentAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","CurrentAddress");
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




	$tdatausersLookUp["CurrentAddress"] = $fdata;
//	PlaceOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PlaceOfBirth";
	$fdata["GoodName"] = "PlaceOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","PlaceOfBirth");
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




	$tdatausersLookUp["PlaceOfBirth"] = $fdata;
//	PassportOrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PassportOrID";
	$fdata["GoodName"] = "PassportOrID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","PassportOrID");
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




	$tdatausersLookUp["PassportOrID"] = $fdata;
//	ProfilePhoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProfilePhoto";
	$fdata["GoodName"] = "ProfilePhoto";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","ProfilePhoto");
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




	$tdatausersLookUp["ProfilePhoto"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","AttachedFile");
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




	$tdatausersLookUp["AttachedFile"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","ClientNo");
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




	$tdatausersLookUp["ClientNo"] = $fdata;
//	EmergencyContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EmergencyContactPerson";
	$fdata["GoodName"] = "EmergencyContactPerson";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","EmergencyContactPerson");
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




	$tdatausersLookUp["EmergencyContactPerson"] = $fdata;
//	EmergencyContactRelation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EmergencyContactRelation";
	$fdata["GoodName"] = "EmergencyContactRelation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","EmergencyContactRelation");
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




	$tdatausersLookUp["EmergencyContactRelation"] = $fdata;
//	EmergencyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EmergencyContactTel";
	$fdata["GoodName"] = "EmergencyContactTel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","EmergencyContactTel");
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




	$tdatausersLookUp["EmergencyContactTel"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","Username");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatausersLookUp["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","Password");
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




	$tdatausersLookUp["Password"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("usersLookUp","AccountName");
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




	$tdatausersLookUp["AccountName"] = $fdata;


$tables_data["usersLookUp"]=&$tdatausersLookUp;
$field_labels["usersLookUp"] = &$fieldLabelsusersLookUp;
$fieldToolTips["usersLookUp"] = &$fieldToolTipsusersLookUp;
$page_titles["usersLookUp"] = &$pageTitlesusersLookUp;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usersLookUp"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usersLookUp"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usersLookUp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  FirstName,  LastName,  Sex,  DateOfBirth,  TelephoneNo,  EmailAddress,  CurrentAddress,  PlaceOfBirth,  PassportOrID,  ProfilePhoto,  AttachedFile,  ClientNo,  EmergencyContactPerson,  EmergencyContactRelation,  EmergencyContactTel,  Username,  Password,  AccountName";
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
	"m_srcTableName" => "usersLookUp"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "usersLookUp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto8["m_sql"] = "FirstName";
$proto8["m_srcTableName"] = "usersLookUp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto10["m_sql"] = "LastName";
$proto10["m_srcTableName"] = "usersLookUp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto12["m_sql"] = "Sex";
$proto12["m_srcTableName"] = "usersLookUp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto14["m_sql"] = "DateOfBirth";
$proto14["m_srcTableName"] = "usersLookUp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto16["m_sql"] = "TelephoneNo";
$proto16["m_srcTableName"] = "usersLookUp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto18["m_sql"] = "EmailAddress";
$proto18["m_srcTableName"] = "usersLookUp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto20["m_sql"] = "CurrentAddress";
$proto20["m_srcTableName"] = "usersLookUp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "PlaceOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto22["m_sql"] = "PlaceOfBirth";
$proto22["m_srcTableName"] = "usersLookUp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PassportOrID",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto24["m_sql"] = "PassportOrID";
$proto24["m_srcTableName"] = "usersLookUp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePhoto",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto26["m_sql"] = "ProfilePhoto";
$proto26["m_srcTableName"] = "usersLookUp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto28["m_sql"] = "AttachedFile";
$proto28["m_srcTableName"] = "usersLookUp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto30["m_sql"] = "ClientNo";
$proto30["m_srcTableName"] = "usersLookUp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactPerson",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto32["m_sql"] = "EmergencyContactPerson";
$proto32["m_srcTableName"] = "usersLookUp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactRelation",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto34["m_sql"] = "EmergencyContactRelation";
$proto34["m_srcTableName"] = "usersLookUp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactTel",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto36["m_sql"] = "EmergencyContactTel";
$proto36["m_srcTableName"] = "usersLookUp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto38["m_sql"] = "Username";
$proto38["m_srcTableName"] = "usersLookUp";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto40["m_sql"] = "Password";
$proto40["m_srcTableName"] = "usersLookUp";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto42["m_sql"] = "AccountName";
$proto42["m_srcTableName"] = "usersLookUp";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "users";
$proto45["m_srcTableName"] = "usersLookUp";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "FirstName";
$proto45["m_columns"][] = "LastName";
$proto45["m_columns"][] = "Sex";
$proto45["m_columns"][] = "DateOfBirth";
$proto45["m_columns"][] = "TelephoneNo";
$proto45["m_columns"][] = "EmailAddress";
$proto45["m_columns"][] = "CurrentAddress";
$proto45["m_columns"][] = "PlaceOfBirth";
$proto45["m_columns"][] = "PassportOrID";
$proto45["m_columns"][] = "ProfilePhoto";
$proto45["m_columns"][] = "AttachedFile";
$proto45["m_columns"][] = "ClientNo";
$proto45["m_columns"][] = "EmergencyContactPerson";
$proto45["m_columns"][] = "EmergencyContactRelation";
$proto45["m_columns"][] = "EmergencyContactTel";
$proto45["m_columns"][] = "Username";
$proto45["m_columns"][] = "Password";
$proto45["m_columns"][] = "LastModifiedBy";
$proto45["m_columns"][] = "LastModifiedDate";
$proto45["m_columns"][] = "AccountName";
$proto45["m_columns"][] = "AccountNumber";
$proto45["m_columns"][] = "OpeningAccountDate";
$proto45["m_columns"][] = "OpeningAccountBalance";
$proto45["m_columns"][] = "UserLevel";
$proto45["m_columns"][] = "InterestRate";
$proto45["m_columns"][] = "SetWithdrawDate";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "users";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "usersLookUp";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 1;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 1;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "usersLookUp"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 1;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="usersLookUp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usersLookUp = createSqlQuery_usersLookUp();


	
		;

																			

$tdatausersLookUp[".sqlquery"] = $queryData_usersLookUp;

$tableEvents["usersLookUp"] = new eventsBase;
$tdatausersLookUp[".hasEvents"] = false;

?>