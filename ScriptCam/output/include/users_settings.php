<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers = array();	
	$tdatausers[".truncateText"] = true;
	$tdatausers[".NumberOfChars"] = 80; 
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["id"] = "Id";
	$fieldToolTipsusers["English"]["id"] = "";
	$fieldLabelsusers["English"]["FirstName"] = "First Name";
	$fieldToolTipsusers["English"]["FirstName"] = "";
	$fieldLabelsusers["English"]["LastName"] = "Last Name";
	$fieldToolTipsusers["English"]["LastName"] = "";
	$fieldLabelsusers["English"]["Sex"] = "Sex";
	$fieldToolTipsusers["English"]["Sex"] = "";
	$fieldLabelsusers["English"]["DateOfBirth"] = "Date Of Birth";
	$fieldToolTipsusers["English"]["DateOfBirth"] = "";
	$fieldLabelsusers["English"]["TelephoneNo"] = "Telephone No";
	$fieldToolTipsusers["English"]["TelephoneNo"] = "";
	$fieldLabelsusers["English"]["EmailAddress"] = "Email Address";
	$fieldToolTipsusers["English"]["EmailAddress"] = "";
	$fieldLabelsusers["English"]["CurrentAddress"] = "Current Address";
	$fieldToolTipsusers["English"]["CurrentAddress"] = "";
	$fieldLabelsusers["English"]["PlaceOfBirth"] = "Place Of Birth";
	$fieldToolTipsusers["English"]["PlaceOfBirth"] = "";
	$fieldLabelsusers["English"]["PassportOrID"] = "Passport Or ID";
	$fieldToolTipsusers["English"]["PassportOrID"] = "";
	$fieldLabelsusers["English"]["ProfilePhoto"] = "Profile Photo";
	$fieldToolTipsusers["English"]["ProfilePhoto"] = "";
	$fieldLabelsusers["English"]["AttachedFile"] = "Attached File";
	$fieldToolTipsusers["English"]["AttachedFile"] = "";
	$fieldLabelsusers["English"]["ClientNo"] = "Client No";
	$fieldToolTipsusers["English"]["ClientNo"] = "";
	$fieldLabelsusers["English"]["EmergencyContactPerson"] = "Emergency Contact Person";
	$fieldToolTipsusers["English"]["EmergencyContactPerson"] = "";
	$fieldLabelsusers["English"]["EmergencyContactRelation"] = "Emergency Contact Relation";
	$fieldToolTipsusers["English"]["EmergencyContactRelation"] = "";
	$fieldLabelsusers["English"]["EmergencyContactTel"] = "Emergency Contact Tel";
	$fieldToolTipsusers["English"]["EmergencyContactTel"] = "";
	$fieldLabelsusers["English"]["Username"] = "Username";
	$fieldToolTipsusers["English"]["Username"] = "";
	$fieldLabelsusers["English"]["Password"] = "Password";
	$fieldToolTipsusers["English"]["Password"] = "";
	$fieldLabelsusers["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsusers["English"]["LastModifiedBy"] = "";
	$fieldLabelsusers["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsusers["English"]["LastModifiedDate"] = "";
	$fieldLabelsusers["English"]["AccountName"] = "Account Name";
	$fieldToolTipsusers["English"]["AccountName"] = "";
	$fieldLabelsusers["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsusers["English"]["AccountNumber"] = "";
	$fieldLabelsusers["English"]["OpeningAccountDate"] = "Opening Account Date";
	$fieldToolTipsusers["English"]["OpeningAccountDate"] = "";
	$fieldLabelsusers["English"]["OpeningAccountBalance"] = "Opening Account Balance";
	$fieldToolTipsusers["English"]["OpeningAccountBalance"] = "";
	$fieldLabelsusers["English"]["UserLevel"] = "User Level";
	$fieldToolTipsusers["English"]["UserLevel"] = "";
	$fieldLabelsusers["English"]["InterestRate"] = "Interest Rate";
	$fieldToolTipsusers["English"]["InterestRate"] = "";
	$fieldLabelsusers["English"]["SetWithdrawDate"] = "Set Withdraw Date";
	$fieldToolTipsusers["English"]["SetWithdrawDate"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers[""] = array();
	$fieldToolTipsusers[""] = array();
	$pageTitlesusers[""] = array();
	$fieldLabelsusers[""]["id"] = "Id";
	$fieldToolTipsusers[""]["id"] = "";
	if (count($fieldToolTipsusers[""]))
		$tdatausers[".isUseToolTips"] = true;
}
	
	
	$tdatausers[".NCSearch"] = true;



$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 0;
$tdatausers[".recsPerRowList"] = 1;
$tdatausers[".recsPerRowPrint"] = 1;
$tdatausers[".mainTableOwnerID"] = "";
$tdatausers[".moveNext"] = 1;
$tdatausers[".entityType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";



$tdatausers[".isUseVideo"] = true;

$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = false;

	$tdatausers[".locking"] = false;

$tdatausers[".edit"] = true;
$tdatausers[".afterEditAction"] = 1;
$tdatausers[".closePopupAfterEdit"] = 1;
$tdatausers[".afterEditActionDetTable"] = "";

$tdatausers[".add"] = true;
$tdatausers[".afterAddAction"] = 1;
$tdatausers[".closePopupAfterAdd"] = 1;
$tdatausers[".afterAddActionDetTable"] = "";

$tdatausers[".list"] = true;

$tdatausers[".inlineEdit"] = true;
$tdatausers[".inlineAdd"] = true;
$tdatausers[".view"] = true;

$tdatausers[".import"] = true;

$tdatausers[".exportTo"] = true;

$tdatausers[".printFriendly"] = true;

$tdatausers[".delete"] = true;

$tdatausers[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausers[".searchSaving"] = false;
//

$tdatausers[".showSearchPanel"] = true;
		$tdatausers[".flexibleSearch"] = true;		

if (isMobile())
	$tdatausers[".isUseAjaxSuggest"] = false;
else 
	$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;



$tdatausers[".addPageEvents"] = true;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;





$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();

$tdatausers[".allSearchFields"][] = "ProfilePhoto";
	$tdatausers[".allSearchFields"][] = "AttachedFile";
	$tdatausers[".allSearchFields"][] = "ClientNo";
	

$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "id";
$tdatausers[".googleLikeFields"][] = "FirstName";
$tdatausers[".googleLikeFields"][] = "LastName";
$tdatausers[".googleLikeFields"][] = "Sex";
$tdatausers[".googleLikeFields"][] = "DateOfBirth";
$tdatausers[".googleLikeFields"][] = "TelephoneNo";
$tdatausers[".googleLikeFields"][] = "EmailAddress";
$tdatausers[".googleLikeFields"][] = "CurrentAddress";
$tdatausers[".googleLikeFields"][] = "PlaceOfBirth";
$tdatausers[".googleLikeFields"][] = "PassportOrID";
$tdatausers[".googleLikeFields"][] = "ProfilePhoto";
$tdatausers[".googleLikeFields"][] = "AttachedFile";
$tdatausers[".googleLikeFields"][] = "ClientNo";
$tdatausers[".googleLikeFields"][] = "EmergencyContactPerson";
$tdatausers[".googleLikeFields"][] = "EmergencyContactRelation";
$tdatausers[".googleLikeFields"][] = "EmergencyContactTel";
$tdatausers[".googleLikeFields"][] = "Username";
$tdatausers[".googleLikeFields"][] = "Password";
$tdatausers[".googleLikeFields"][] = "LastModifiedBy";
$tdatausers[".googleLikeFields"][] = "LastModifiedDate";
$tdatausers[".googleLikeFields"][] = "AccountName";
$tdatausers[".googleLikeFields"][] = "AccountNumber";
$tdatausers[".googleLikeFields"][] = "OpeningAccountDate";
$tdatausers[".googleLikeFields"][] = "OpeningAccountBalance";
$tdatausers[".googleLikeFields"][] = "UserLevel";
$tdatausers[".googleLikeFields"][] = "InterestRate";
$tdatausers[".googleLikeFields"][] = "SetWithdrawDate";


$tdatausers[".advSearchFields"] = array();
$tdatausers[".advSearchFields"][] = "ProfilePhoto";
$tdatausers[".advSearchFields"][] = "AttachedFile";
$tdatausers[".advSearchFields"][] = "ClientNo";

$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".nPrinterPDFSplitRecords"] = 40;



$tdatausers[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatausers[".pageSize"] = 20;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT id,  	FirstName,  	LastName,  	Sex,  	DateOfBirth,  	TelephoneNo,  	EmailAddress,  	CurrentAddress,  	PlaceOfBirth,  	PassportOrID,  	ProfilePhoto,  	AttachedFile,  	ClientNo,  	EmergencyContactPerson,  	EmergencyContactRelation,  	EmergencyContactTel,  	Username,  	Password,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	AccountNumber,  	OpeningAccountDate,  	OpeningAccountBalance,  	UserLevel,  	InterestRate,  	SetWithdrawDate";
$tdatausers[".sqlFrom"] = "FROM users";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "id";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();
$tdatausers[".listFields"][] = "ProfilePhoto";
$tdatausers[".listFields"][] = "AttachedFile";
$tdatausers[".listFields"][] = "ClientNo";

$tdatausers[".hideMobileList"] = array();


$tdatausers[".viewFields"] = array();
$tdatausers[".viewFields"][] = "ProfilePhoto";
$tdatausers[".viewFields"][] = "AttachedFile";
$tdatausers[".viewFields"][] = "ClientNo";

$tdatausers[".addFields"] = array();
$tdatausers[".addFields"][] = "ProfilePhoto";
$tdatausers[".addFields"][] = "AttachedFile";
$tdatausers[".addFields"][] = "ClientNo";

$tdatausers[".masterListFields"] = array();
$tdatausers[".masterListFields"][] = "id";
$tdatausers[".masterListFields"][] = "FirstName";
$tdatausers[".masterListFields"][] = "LastName";
$tdatausers[".masterListFields"][] = "Sex";
$tdatausers[".masterListFields"][] = "DateOfBirth";
$tdatausers[".masterListFields"][] = "TelephoneNo";
$tdatausers[".masterListFields"][] = "EmailAddress";
$tdatausers[".masterListFields"][] = "CurrentAddress";
$tdatausers[".masterListFields"][] = "PlaceOfBirth";
$tdatausers[".masterListFields"][] = "PassportOrID";
$tdatausers[".masterListFields"][] = "ProfilePhoto";
$tdatausers[".masterListFields"][] = "AttachedFile";
$tdatausers[".masterListFields"][] = "ClientNo";
$tdatausers[".masterListFields"][] = "EmergencyContactPerson";
$tdatausers[".masterListFields"][] = "EmergencyContactRelation";
$tdatausers[".masterListFields"][] = "EmergencyContactTel";
$tdatausers[".masterListFields"][] = "Username";
$tdatausers[".masterListFields"][] = "Password";
$tdatausers[".masterListFields"][] = "LastModifiedBy";
$tdatausers[".masterListFields"][] = "LastModifiedDate";
$tdatausers[".masterListFields"][] = "AccountName";
$tdatausers[".masterListFields"][] = "AccountNumber";
$tdatausers[".masterListFields"][] = "OpeningAccountDate";
$tdatausers[".masterListFields"][] = "OpeningAccountBalance";
$tdatausers[".masterListFields"][] = "UserLevel";
$tdatausers[".masterListFields"][] = "InterestRate";
$tdatausers[".masterListFields"][] = "SetWithdrawDate";

$tdatausers[".inlineAddFields"] = array();
$tdatausers[".inlineAddFields"][] = "ProfilePhoto";
$tdatausers[".inlineAddFields"][] = "AttachedFile";
$tdatausers[".inlineAddFields"][] = "ClientNo";

$tdatausers[".editFields"] = array();
$tdatausers[".editFields"][] = "ProfilePhoto";
$tdatausers[".editFields"][] = "AttachedFile";
$tdatausers[".editFields"][] = "ClientNo";

$tdatausers[".inlineEditFields"] = array();
$tdatausers[".inlineEditFields"][] = "ProfilePhoto";
$tdatausers[".inlineEditFields"][] = "AttachedFile";
$tdatausers[".inlineEditFields"][] = "ClientNo";

$tdatausers[".exportFields"] = array();
$tdatausers[".exportFields"][] = "ProfilePhoto";
$tdatausers[".exportFields"][] = "AttachedFile";
$tdatausers[".exportFields"][] = "ClientNo";

$tdatausers[".importFields"] = array();
$tdatausers[".importFields"][] = "ProfilePhoto";
$tdatausers[".importFields"][] = "AttachedFile";
$tdatausers[".importFields"][] = "ClientNo";

$tdatausers[".printFields"] = array();
$tdatausers[".printFields"][] = "ProfilePhoto";
$tdatausers[".printFields"][] = "AttachedFile";
$tdatausers[".printFields"][] = "ClientNo";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["id"] = $fdata;
//	FirstName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "FirstName";
	$fdata["GoodName"] = "FirstName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","FirstName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "FirstName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FirstName";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["FirstName"] = $fdata;
//	LastName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "LastName";
	$fdata["GoodName"] = "LastName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","LastName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "LastName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LastName";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["LastName"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Sex"); 
	$fdata["FieldType"] = 16;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Sex"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sex";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Checkbox");
	
		
		
		
		
		
		
		
		
		
		
		
		
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Checkbox");
	
			
	
	


		
		
		
		
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
	
	
	
	

	

	
	$tdatausers["Sex"] = $fdata;
//	DateOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateOfBirth";
	$fdata["GoodName"] = "DateOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","DateOfBirth"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "DateOfBirth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DateOfBirth";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["DateOfBirth"] = $fdata;
//	TelephoneNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TelephoneNo";
	$fdata["GoodName"] = "TelephoneNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","TelephoneNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "TelephoneNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TelephoneNo";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["TelephoneNo"] = $fdata;
//	EmailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmailAddress";
	$fdata["GoodName"] = "EmailAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","EmailAddress"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "EmailAddress"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmailAddress";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["EmailAddress"] = $fdata;
//	CurrentAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CurrentAddress";
	$fdata["GoodName"] = "CurrentAddress";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","CurrentAddress"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "CurrentAddress"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrentAddress";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["CurrentAddress"] = $fdata;
//	PlaceOfBirth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "PlaceOfBirth";
	$fdata["GoodName"] = "PlaceOfBirth";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","PlaceOfBirth"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "PlaceOfBirth"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PlaceOfBirth";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["PlaceOfBirth"] = $fdata;
//	PassportOrID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PassportOrID";
	$fdata["GoodName"] = "PassportOrID";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","PassportOrID"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "PassportOrID"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PassportOrID";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["PassportOrID"] = $fdata;
//	ProfilePhoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ProfilePhoto";
	$fdata["GoodName"] = "ProfilePhoto";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","ProfilePhoto"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatausers["ProfilePhoto"] = $fdata;
//	AttachedFile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AttachedFile";
	$fdata["GoodName"] = "AttachedFile";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","AttachedFile"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
	$vdata = array("ViewFormat" => "Video file");
	
		
		
		
		
		
		
		
		
		
		$vdata["videoTitleField"] = "";
			$vdata["fieldIsVideoUrl"] = true;
		
			$vdata["videoHeight"] = 200;
		
		$vdata["RewindEnabled"] = true;
		
			$vdata["videoWidth"] = 300;
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatausers["AttachedFile"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","ClientNo"); 
	$fdata["FieldType"] = 201;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ClientNo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ClientNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
		$fdata["UploadCodeExpression"] = true;
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "HiddenField");
	
			
	
	


		
		
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatausers["ClientNo"] = $fdata;
//	EmergencyContactPerson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "EmergencyContactPerson";
	$fdata["GoodName"] = "EmergencyContactPerson";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","EmergencyContactPerson"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "EmergencyContactPerson"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmergencyContactPerson";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["EmergencyContactPerson"] = $fdata;
//	EmergencyContactRelation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EmergencyContactRelation";
	$fdata["GoodName"] = "EmergencyContactRelation";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","EmergencyContactRelation"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "EmergencyContactRelation"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmergencyContactRelation";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["EmergencyContactRelation"] = $fdata;
//	EmergencyContactTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EmergencyContactTel";
	$fdata["GoodName"] = "EmergencyContactTel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","EmergencyContactTel"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "EmergencyContactTel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmergencyContactTel";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["EmergencyContactTel"] = $fdata;
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Username"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Username"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["Username"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","Password"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["Password"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","LastModifiedBy"); 
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
	
	
	
	

	

	
	$tdatausers["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","LastModifiedDate"); 
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
	
	
	
	

	

	
	$tdatausers["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","AccountName"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "AccountName"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountName";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["AccountName"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","AccountNumber"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "AccountNumber"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountNumber";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["AccountNumber"] = $fdata;
//	OpeningAccountDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "OpeningAccountDate";
	$fdata["GoodName"] = "OpeningAccountDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","OpeningAccountDate"); 
	$fdata["FieldType"] = 135;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "OpeningAccountDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpeningAccountDate";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["OpeningAccountDate"] = $fdata;
//	OpeningAccountBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "OpeningAccountBalance";
	$fdata["GoodName"] = "OpeningAccountBalance";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","OpeningAccountBalance"); 
	$fdata["FieldType"] = 14;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "OpeningAccountBalance"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OpeningAccountBalance";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["OpeningAccountBalance"] = $fdata;
//	UserLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "UserLevel";
	$fdata["GoodName"] = "UserLevel";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","UserLevel"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "UserLevel"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserLevel";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["UserLevel"] = $fdata;
//	InterestRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "InterestRate";
	$fdata["GoodName"] = "InterestRate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","InterestRate"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "InterestRate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestRate";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["InterestRate"] = $fdata;
//	SetWithdrawDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "SetWithdrawDate";
	$fdata["GoodName"] = "SetWithdrawDate";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","SetWithdrawDate"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "SetWithdrawDate"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SetWithdrawDate";
	
		
		
				
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
	
	
	
	

	

	
	$tdatausers["SetWithdrawDate"] = $fdata;

	
$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	FirstName,  	LastName,  	Sex,  	DateOfBirth,  	TelephoneNo,  	EmailAddress,  	CurrentAddress,  	PlaceOfBirth,  	PassportOrID,  	ProfilePhoto,  	AttachedFile,  	ClientNo,  	EmergencyContactPerson,  	EmergencyContactRelation,  	EmergencyContactTel,  	Username,  	Password,  	LastModifiedBy,  	LastModifiedDate,  	AccountName,  	AccountNumber,  	OpeningAccountDate,  	OpeningAccountBalance,  	UserLevel,  	InterestRate,  	SetWithdrawDate";
$proto0["m_strFrom"] = "FROM users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "users";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "FirstName",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto7["m_sql"] = "FirstName";
$proto7["m_srcTableName"] = "users";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "LastName",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto9["m_sql"] = "LastName";
$proto9["m_srcTableName"] = "users";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto11["m_sql"] = "Sex";
$proto11["m_srcTableName"] = "users";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DateOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto13["m_sql"] = "DateOfBirth";
$proto13["m_srcTableName"] = "users";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "TelephoneNo",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto15["m_sql"] = "TelephoneNo";
$proto15["m_srcTableName"] = "users";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "EmailAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto17["m_sql"] = "EmailAddress";
$proto17["m_srcTableName"] = "users";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrentAddress",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto19["m_sql"] = "CurrentAddress";
$proto19["m_srcTableName"] = "users";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "PlaceOfBirth",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto21["m_sql"] = "PlaceOfBirth";
$proto21["m_srcTableName"] = "users";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "PassportOrID",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto23["m_sql"] = "PassportOrID";
$proto23["m_srcTableName"] = "users";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "ProfilePhoto",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto25["m_sql"] = "ProfilePhoto";
$proto25["m_srcTableName"] = "users";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "AttachedFile",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto27["m_sql"] = "AttachedFile";
$proto27["m_srcTableName"] = "users";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto29["m_sql"] = "ClientNo";
$proto29["m_srcTableName"] = "users";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactPerson",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto31["m_sql"] = "EmergencyContactPerson";
$proto31["m_srcTableName"] = "users";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactRelation",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto33["m_sql"] = "EmergencyContactRelation";
$proto33["m_srcTableName"] = "users";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "EmergencyContactTel",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto35["m_sql"] = "EmergencyContactTel";
$proto35["m_srcTableName"] = "users";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto37["m_sql"] = "Username";
$proto37["m_srcTableName"] = "users";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto39["m_sql"] = "Password";
$proto39["m_srcTableName"] = "users";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto41["m_sql"] = "LastModifiedBy";
$proto41["m_srcTableName"] = "users";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto43["m_sql"] = "LastModifiedDate";
$proto43["m_srcTableName"] = "users";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto45["m_sql"] = "AccountName";
$proto45["m_srcTableName"] = "users";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto47["m_sql"] = "AccountNumber";
$proto47["m_srcTableName"] = "users";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountDate",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto49["m_sql"] = "OpeningAccountDate";
$proto49["m_srcTableName"] = "users";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "OpeningAccountBalance",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto51["m_sql"] = "OpeningAccountBalance";
$proto51["m_srcTableName"] = "users";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "UserLevel",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto53["m_sql"] = "UserLevel";
$proto53["m_srcTableName"] = "users";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestRate",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto55["m_sql"] = "InterestRate";
$proto55["m_srcTableName"] = "users";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "SetWithdrawDate",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto57["m_sql"] = "SetWithdrawDate";
$proto57["m_srcTableName"] = "users";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto59=array();
$proto59["m_link"] = "SQLL_MAIN";
			$proto60=array();
$proto60["m_strName"] = "users";
$proto60["m_srcTableName"] = "users";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "id";
$proto60["m_columns"][] = "FirstName";
$proto60["m_columns"][] = "LastName";
$proto60["m_columns"][] = "Sex";
$proto60["m_columns"][] = "DateOfBirth";
$proto60["m_columns"][] = "TelephoneNo";
$proto60["m_columns"][] = "EmailAddress";
$proto60["m_columns"][] = "CurrentAddress";
$proto60["m_columns"][] = "PlaceOfBirth";
$proto60["m_columns"][] = "PassportOrID";
$proto60["m_columns"][] = "ProfilePhoto";
$proto60["m_columns"][] = "AttachedFile";
$proto60["m_columns"][] = "ClientNo";
$proto60["m_columns"][] = "EmergencyContactPerson";
$proto60["m_columns"][] = "EmergencyContactRelation";
$proto60["m_columns"][] = "EmergencyContactTel";
$proto60["m_columns"][] = "Username";
$proto60["m_columns"][] = "Password";
$proto60["m_columns"][] = "LastModifiedBy";
$proto60["m_columns"][] = "LastModifiedDate";
$proto60["m_columns"][] = "AccountName";
$proto60["m_columns"][] = "AccountNumber";
$proto60["m_columns"][] = "OpeningAccountDate";
$proto60["m_columns"][] = "OpeningAccountBalance";
$proto60["m_columns"][] = "UserLevel";
$proto60["m_columns"][] = "InterestRate";
$proto60["m_columns"][] = "SetWithdrawDate";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "users";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "users";
$proto61=array();
$proto61["m_sql"] = "";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();


	
																											
	
$tdatausers[".sqlquery"] = $queryData_users;

include_once(getabspath("include/users_events.php"));
$tableEvents["users"] = new eventclass_users;
$tdatausers[".hasEvents"] = true;

?>