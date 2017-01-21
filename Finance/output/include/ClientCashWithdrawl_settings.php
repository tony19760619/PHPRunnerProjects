<?php
require_once(getabspath("classes/cipherer.php"));




$tdataClientCashWithdrawl = array();
	$tdataClientCashWithdrawl[".truncateText"] = true;
	$tdataClientCashWithdrawl[".NumberOfChars"] = 80;
	$tdataClientCashWithdrawl[".ShortName"] = "ClientCashWithdrawl";
	$tdataClientCashWithdrawl[".OwnerID"] = "ClientNo";
	$tdataClientCashWithdrawl[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsClientCashWithdrawl = array();
$fieldToolTipsClientCashWithdrawl = array();
$pageTitlesClientCashWithdrawl = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsClientCashWithdrawl["English"] = array();
	$fieldToolTipsClientCashWithdrawl["English"] = array();
	$pageTitlesClientCashWithdrawl["English"] = array();
	$fieldLabelsClientCashWithdrawl["English"]["id"] = "Id";
	$fieldToolTipsClientCashWithdrawl["English"]["id"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipsClientCashWithdrawl["English"]["DebitAccount"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipsClientCashWithdrawl["English"]["CreditAccount"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["DebitAccountTransactionCharge"] = "Debit Account Transaction Charge";
	$fieldToolTipsClientCashWithdrawl["English"]["DebitAccountTransactionCharge"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["CreditAccountTransactionCharge"] = "Credit Account Transaction Charge";
	$fieldToolTipsClientCashWithdrawl["English"]["CreditAccountTransactionCharge"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["Amount"] = "Amount";
	$fieldToolTipsClientCashWithdrawl["English"]["Amount"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["DateTime"] = "Date Time";
	$fieldToolTipsClientCashWithdrawl["English"]["DateTime"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["Description"] = "Description";
	$fieldToolTipsClientCashWithdrawl["English"]["Description"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["WithdrawlNo"] = "Withdrawl No";
	$fieldToolTipsClientCashWithdrawl["English"]["WithdrawlNo"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["WithdrawlName"] = "Withdrawl Name";
	$fieldToolTipsClientCashWithdrawl["English"]["WithdrawlName"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["WithdrawlType"] = "Withdrawl Type";
	$fieldToolTipsClientCashWithdrawl["English"]["WithdrawlType"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["PrincipalAmount"] = "Principal Amount";
	$fieldToolTipsClientCashWithdrawl["English"]["PrincipalAmount"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsClientCashWithdrawl["English"]["InterestAmount"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["WithdrawlStatus"] = "Withdrawl Status";
	$fieldToolTipsClientCashWithdrawl["English"]["WithdrawlStatus"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["ClientNo"] = "Client No";
	$fieldToolTipsClientCashWithdrawl["English"]["ClientNo"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsClientCashWithdrawl["English"]["AccountNumber"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["Balance"] = "Balance";
	$fieldToolTipsClientCashWithdrawl["English"]["Balance"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsClientCashWithdrawl["English"]["LastModifiedBy"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsClientCashWithdrawl["English"]["LastModifiedDate"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["AccountName"] = "Account Name";
	$fieldToolTipsClientCashWithdrawl["English"]["AccountName"] = "";
	$fieldLabelsClientCashWithdrawl["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipsClientCashWithdrawl["English"]["SelectedClientNo"] = "";
	if (count($fieldToolTipsClientCashWithdrawl["English"]))
		$tdataClientCashWithdrawl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsClientCashWithdrawl[""] = array();
	$fieldToolTipsClientCashWithdrawl[""] = array();
	$pageTitlesClientCashWithdrawl[""] = array();
	if (count($fieldToolTipsClientCashWithdrawl[""]))
		$tdataClientCashWithdrawl[".isUseToolTips"] = true;
}


	$tdataClientCashWithdrawl[".NCSearch"] = true;



$tdataClientCashWithdrawl[".shortTableName"] = "ClientCashWithdrawl";
$tdataClientCashWithdrawl[".nSecOptions"] = 1;
$tdataClientCashWithdrawl[".recsPerRowPrint"] = 1;
$tdataClientCashWithdrawl[".mainTableOwnerID"] = "ClientNo";
$tdataClientCashWithdrawl[".moveNext"] = 1;
$tdataClientCashWithdrawl[".entityType"] = 1;

$tdataClientCashWithdrawl[".strOriginalTableName"] = "transactions";

	



$tdataClientCashWithdrawl[".showAddInPopup"] = false;

$tdataClientCashWithdrawl[".showEditInPopup"] = false;

$tdataClientCashWithdrawl[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataClientCashWithdrawl[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataClientCashWithdrawl[".fieldsForRegister"] = array();

$tdataClientCashWithdrawl[".listAjax"] = false;

	$tdataClientCashWithdrawl[".audit"] = false;

	$tdataClientCashWithdrawl[".locking"] = false;

$tdataClientCashWithdrawl[".edit"] = true;
$tdataClientCashWithdrawl[".afterEditAction"] = 1;
$tdataClientCashWithdrawl[".closePopupAfterEdit"] = 1;
$tdataClientCashWithdrawl[".afterEditActionDetTable"] = "";

$tdataClientCashWithdrawl[".add"] = true;
$tdataClientCashWithdrawl[".afterAddAction"] = 0;
$tdataClientCashWithdrawl[".closePopupAfterAdd"] = 1;
$tdataClientCashWithdrawl[".afterAddActionDetTable"] = "";

$tdataClientCashWithdrawl[".list"] = true;




$tdataClientCashWithdrawl[".view"] = true;

$tdataClientCashWithdrawl[".import"] = true;

$tdataClientCashWithdrawl[".exportTo"] = true;

$tdataClientCashWithdrawl[".printFriendly"] = true;


$tdataClientCashWithdrawl[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataClientCashWithdrawl[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataClientCashWithdrawl[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataClientCashWithdrawl[".searchSaving"] = true;
//

$tdataClientCashWithdrawl[".showSearchPanel"] = true;
		$tdataClientCashWithdrawl[".flexibleSearch"] = true;

$tdataClientCashWithdrawl[".isUseAjaxSuggest"] = true;

$tdataClientCashWithdrawl[".rowHighlite"] = true;



$tdataClientCashWithdrawl[".addPageEvents"] = false;

// use timepicker for search panel
$tdataClientCashWithdrawl[".isUseTimeForSearch"] = false;





$tdataClientCashWithdrawl[".allSearchFields"] = array();
$tdataClientCashWithdrawl[".filterFields"] = array();
$tdataClientCashWithdrawl[".requiredSearchFields"] = array();

$tdataClientCashWithdrawl[".allSearchFields"][] = "id";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "AccountName";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "ClientNo";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "AccountNumber";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "WithdrawlType";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "WithdrawlNo";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "DateTime";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "WithdrawlStatus";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "Amount";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "Balance";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "Description";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "LastModifiedBy";
	$tdataClientCashWithdrawl[".allSearchFields"][] = "LastModifiedDate";
	

$tdataClientCashWithdrawl[".googleLikeFields"] = array();
$tdataClientCashWithdrawl[".googleLikeFields"][] = "id";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "DateTime";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "CreditAccount";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "DebitAccount";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "CreditAccountTransactionCharge";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "DebitAccountTransactionCharge";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "WithdrawlName";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "Amount";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "Description";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "InterestAmount";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "PrincipalAmount";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "Balance";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "LastModifiedDate";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "AccountName";
$tdataClientCashWithdrawl[".googleLikeFields"][] = "SelectedClientNo";


$tdataClientCashWithdrawl[".advSearchFields"] = array();
$tdataClientCashWithdrawl[".advSearchFields"][] = "id";
$tdataClientCashWithdrawl[".advSearchFields"][] = "AccountName";
$tdataClientCashWithdrawl[".advSearchFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".advSearchFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".advSearchFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".advSearchFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".advSearchFields"][] = "DateTime";
$tdataClientCashWithdrawl[".advSearchFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".advSearchFields"][] = "Amount";
$tdataClientCashWithdrawl[".advSearchFields"][] = "Balance";
$tdataClientCashWithdrawl[".advSearchFields"][] = "Description";
$tdataClientCashWithdrawl[".advSearchFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".advSearchFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".tableType"] = "list";

$tdataClientCashWithdrawl[".printerPageOrientation"] = 0;
$tdataClientCashWithdrawl[".nPrinterPageScale"] = 100;

$tdataClientCashWithdrawl[".nPrinterSplitRecords"] = 40;

$tdataClientCashWithdrawl[".nPrinterPDFSplitRecords"] = 40;



$tdataClientCashWithdrawl[".geocodingEnabled"] = false;





$tdataClientCashWithdrawl[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataClientCashWithdrawl[".pageSize"] = 20;

$tdataClientCashWithdrawl[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataClientCashWithdrawl[".strOrderBy"] = $tstrOrderBy;

$tdataClientCashWithdrawl[".orderindexes"] = array();
$tdataClientCashWithdrawl[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataClientCashWithdrawl[".sqlHead"] = "SELECT id,  WithdrawlNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  WithdrawlName,  Amount,  WithdrawlType,  Description,  InterestAmount,  PrincipalAmount,  WithdrawlStatus,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$tdataClientCashWithdrawl[".sqlFrom"] = "FROM transactions";
$tdataClientCashWithdrawl[".sqlWhereExpr"] = "WithdrawlType in ('Cash','Cheque')";
$tdataClientCashWithdrawl[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataClientCashWithdrawl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataClientCashWithdrawl[".arrGroupsPerPage"] = $arrGPP;

$tdataClientCashWithdrawl[".highlightSearchResults"] = true;

$tableKeysClientCashWithdrawl = array();
$tableKeysClientCashWithdrawl[] = "id";
$tdataClientCashWithdrawl[".Keys"] = $tableKeysClientCashWithdrawl;

$tdataClientCashWithdrawl[".listFields"] = array();
$tdataClientCashWithdrawl[".listFields"][] = "id";
$tdataClientCashWithdrawl[".listFields"][] = "AccountName";
$tdataClientCashWithdrawl[".listFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".listFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".listFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".listFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".listFields"][] = "DateTime";
$tdataClientCashWithdrawl[".listFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".listFields"][] = "Amount";
$tdataClientCashWithdrawl[".listFields"][] = "Balance";
$tdataClientCashWithdrawl[".listFields"][] = "Description";
$tdataClientCashWithdrawl[".listFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".listFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".hideMobileList"] = array();


$tdataClientCashWithdrawl[".viewFields"] = array();
$tdataClientCashWithdrawl[".viewFields"][] = "id";
$tdataClientCashWithdrawl[".viewFields"][] = "AccountName";
$tdataClientCashWithdrawl[".viewFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".viewFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".viewFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".viewFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".viewFields"][] = "DateTime";
$tdataClientCashWithdrawl[".viewFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".viewFields"][] = "Amount";
$tdataClientCashWithdrawl[".viewFields"][] = "Balance";
$tdataClientCashWithdrawl[".viewFields"][] = "Description";
$tdataClientCashWithdrawl[".viewFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".viewFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".addFields"] = array();
$tdataClientCashWithdrawl[".addFields"][] = "AccountName";
$tdataClientCashWithdrawl[".addFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".addFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".addFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".addFields"][] = "DateTime";
$tdataClientCashWithdrawl[".addFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".addFields"][] = "Amount";
$tdataClientCashWithdrawl[".addFields"][] = "Balance";
$tdataClientCashWithdrawl[".addFields"][] = "Description";
$tdataClientCashWithdrawl[".addFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".addFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".masterListFields"] = array();
$tdataClientCashWithdrawl[".masterListFields"][] = "id";
$tdataClientCashWithdrawl[".masterListFields"][] = "AccountName";
$tdataClientCashWithdrawl[".masterListFields"][] = "PrincipalAmount";
$tdataClientCashWithdrawl[".masterListFields"][] = "CreditAccount";
$tdataClientCashWithdrawl[".masterListFields"][] = "DebitAccount";
$tdataClientCashWithdrawl[".masterListFields"][] = "CreditAccountTransactionCharge";
$tdataClientCashWithdrawl[".masterListFields"][] = "DebitAccountTransactionCharge";
$tdataClientCashWithdrawl[".masterListFields"][] = "WithdrawlName";
$tdataClientCashWithdrawl[".masterListFields"][] = "InterestAmount";
$tdataClientCashWithdrawl[".masterListFields"][] = "SelectedClientNo";
$tdataClientCashWithdrawl[".masterListFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".masterListFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".masterListFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".masterListFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".masterListFields"][] = "DateTime";
$tdataClientCashWithdrawl[".masterListFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".masterListFields"][] = "Amount";
$tdataClientCashWithdrawl[".masterListFields"][] = "Balance";
$tdataClientCashWithdrawl[".masterListFields"][] = "Description";
$tdataClientCashWithdrawl[".masterListFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".masterListFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".inlineAddFields"] = array();

$tdataClientCashWithdrawl[".editFields"] = array();
$tdataClientCashWithdrawl[".editFields"][] = "AccountName";
$tdataClientCashWithdrawl[".editFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".editFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".editFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".editFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".editFields"][] = "DateTime";
$tdataClientCashWithdrawl[".editFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".editFields"][] = "Amount";
$tdataClientCashWithdrawl[".editFields"][] = "Balance";
$tdataClientCashWithdrawl[".editFields"][] = "Description";
$tdataClientCashWithdrawl[".editFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".editFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".inlineEditFields"] = array();

$tdataClientCashWithdrawl[".updateSelectedFields"] = array();


$tdataClientCashWithdrawl[".exportFields"] = array();
$tdataClientCashWithdrawl[".exportFields"][] = "id";
$tdataClientCashWithdrawl[".exportFields"][] = "AccountName";
$tdataClientCashWithdrawl[".exportFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".exportFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".exportFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".exportFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".exportFields"][] = "DateTime";
$tdataClientCashWithdrawl[".exportFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".exportFields"][] = "Amount";
$tdataClientCashWithdrawl[".exportFields"][] = "Balance";
$tdataClientCashWithdrawl[".exportFields"][] = "Description";
$tdataClientCashWithdrawl[".exportFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".exportFields"][] = "LastModifiedDate";

$tdataClientCashWithdrawl[".importFields"] = array();
$tdataClientCashWithdrawl[".importFields"][] = "id";
$tdataClientCashWithdrawl[".importFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".importFields"][] = "DateTime";
$tdataClientCashWithdrawl[".importFields"][] = "Amount";
$tdataClientCashWithdrawl[".importFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".importFields"][] = "Description";
$tdataClientCashWithdrawl[".importFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".importFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".importFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".importFields"][] = "Balance";
$tdataClientCashWithdrawl[".importFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".importFields"][] = "LastModifiedDate";
$tdataClientCashWithdrawl[".importFields"][] = "AccountName";

$tdataClientCashWithdrawl[".printFields"] = array();
$tdataClientCashWithdrawl[".printFields"][] = "id";
$tdataClientCashWithdrawl[".printFields"][] = "AccountName";
$tdataClientCashWithdrawl[".printFields"][] = "ClientNo";
$tdataClientCashWithdrawl[".printFields"][] = "AccountNumber";
$tdataClientCashWithdrawl[".printFields"][] = "WithdrawlType";
$tdataClientCashWithdrawl[".printFields"][] = "WithdrawlNo";
$tdataClientCashWithdrawl[".printFields"][] = "DateTime";
$tdataClientCashWithdrawl[".printFields"][] = "WithdrawlStatus";
$tdataClientCashWithdrawl[".printFields"][] = "Amount";
$tdataClientCashWithdrawl[".printFields"][] = "Balance";
$tdataClientCashWithdrawl[".printFields"][] = "Description";
$tdataClientCashWithdrawl[".printFields"][] = "LastModifiedBy";
$tdataClientCashWithdrawl[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","id");
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




	$tdataClientCashWithdrawl["id"] = $fdata;
//	WithdrawlNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "WithdrawlNo";
	$fdata["GoodName"] = "WithdrawlNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","WithdrawlNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlNo";

	
	
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




	$tdataClientCashWithdrawl["WithdrawlNo"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","DateTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DateTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DateTime`";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataClientCashWithdrawl["DateTime"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","CreditAccount");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "CreditAccount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreditAccount";

	
	
			
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
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(AccountName,' [',AccountNumber,']') ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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








	$tdataClientCashWithdrawl["CreditAccount"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","DebitAccount");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "DebitAccount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebitAccount";

	
	
			
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
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(AccountName,' [',AccountNumber,']')   ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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








	$tdataClientCashWithdrawl["DebitAccount"] = $fdata;
//	CreditAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CreditAccountTransactionCharge";
	$fdata["GoodName"] = "CreditAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","CreditAccountTransactionCharge");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "CreditAccountTransactionCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreditAccountTransactionCharge";

	
	
			
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








	$tdataClientCashWithdrawl["CreditAccountTransactionCharge"] = $fdata;
//	DebitAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DebitAccountTransactionCharge";
	$fdata["GoodName"] = "DebitAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","DebitAccountTransactionCharge");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "DebitAccountTransactionCharge";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DebitAccountTransactionCharge";

	
	
			
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








	$tdataClientCashWithdrawl["DebitAccountTransactionCharge"] = $fdata;
//	WithdrawlName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "WithdrawlName";
	$fdata["GoodName"] = "WithdrawlName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","WithdrawlName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "WithdrawlName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlName";

	
	
			
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








	$tdataClientCashWithdrawl["WithdrawlName"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
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




	$tdataClientCashWithdrawl["Amount"] = $fdata;
//	WithdrawlType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WithdrawlType";
	$fdata["GoodName"] = "WithdrawlType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","WithdrawlType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlType";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientCashWithdrawl["WithdrawlType"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","Description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Description";

	
	
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




	$tdataClientCashWithdrawl["Description"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","InterestAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "InterestAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestAmount";

	
	
			
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








	$tdataClientCashWithdrawl["InterestAmount"] = $fdata;
//	PrincipalAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PrincipalAmount";
	$fdata["GoodName"] = "PrincipalAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","PrincipalAmount");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "PrincipalAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrincipalAmount";

	
	
			
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
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataClientCashWithdrawl["PrincipalAmount"] = $fdata;
//	WithdrawlStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "WithdrawlStatus";
	$fdata["GoodName"] = "WithdrawlStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","WithdrawlStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "WithdrawlStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlStatus";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientCashWithdrawl["WithdrawlStatus"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ClientNo";

	
	$edata["LookupOrderBy"] = "ClientNo";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "AccountNumber";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookupFiltered";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ClientNo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = " concat(FirstName,' ',LastName,' [',ClientNo,']') ";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientCashWithdrawl["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","AccountNumber");
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "accountsLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountNumber";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountNumber";

	
	$edata["LookupOrderBy"] = "AccountNumber";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ClientNo", "lookup" => "ClientNo" );

	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientCashWithdrawl["AccountNumber"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","Balance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Balance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Balance";

	
	
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




	$tdataClientCashWithdrawl["Balance"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","LastModifiedBy");
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




	$tdataClientCashWithdrawl["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","LastModifiedDate");
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




	$tdataClientCashWithdrawl["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","AccountName");
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ClientNo", 'lookupF'=>"ClientNo");
	$edata["autoCompleteFields"][] = array('masterF'=>"SelectedClientNo", 'lookupF'=>"ClientNo");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountName";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountName";

	
	$edata["LookupOrderBy"] = "AccountName";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataClientCashWithdrawl["AccountName"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("ClientCashWithdrawl","SelectedClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "SelectedClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectedClientNo";

	
	
			
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








	$tdataClientCashWithdrawl["SelectedClientNo"] = $fdata;


$tables_data["ClientCashWithdrawl"]=&$tdataClientCashWithdrawl;
$field_labels["ClientCashWithdrawl"] = &$fieldLabelsClientCashWithdrawl;
$fieldToolTips["ClientCashWithdrawl"] = &$fieldToolTipsClientCashWithdrawl;
$page_titles["ClientCashWithdrawl"] = &$pageTitlesClientCashWithdrawl;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ClientCashWithdrawl"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ClientCashWithdrawl"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ClientCashWithdrawl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  WithdrawlNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  WithdrawlName,  Amount,  WithdrawlType,  Description,  InterestAmount,  PrincipalAmount,  WithdrawlStatus,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "WithdrawlType in ('Cash','Cheque')";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "WithdrawlType in ('Cash','Cheque')";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "WithdrawlType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "in ('Cash','Cheque')";
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
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ClientCashWithdrawl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto8["m_sql"] = "WithdrawlNo";
$proto8["m_srcTableName"] = "ClientCashWithdrawl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto10["m_sql"] = "`DateTime`";
$proto10["m_srcTableName"] = "ClientCashWithdrawl";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto12["m_sql"] = "CreditAccount";
$proto12["m_srcTableName"] = "ClientCashWithdrawl";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto14["m_sql"] = "DebitAccount";
$proto14["m_srcTableName"] = "ClientCashWithdrawl";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto16["m_sql"] = "CreditAccountTransactionCharge";
$proto16["m_srcTableName"] = "ClientCashWithdrawl";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto18["m_sql"] = "DebitAccountTransactionCharge";
$proto18["m_srcTableName"] = "ClientCashWithdrawl";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto20["m_sql"] = "WithdrawlName";
$proto20["m_srcTableName"] = "ClientCashWithdrawl";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto22["m_sql"] = "Amount";
$proto22["m_srcTableName"] = "ClientCashWithdrawl";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto24["m_sql"] = "WithdrawlType";
$proto24["m_srcTableName"] = "ClientCashWithdrawl";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto26["m_sql"] = "Description";
$proto26["m_srcTableName"] = "ClientCashWithdrawl";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto28["m_sql"] = "InterestAmount";
$proto28["m_srcTableName"] = "ClientCashWithdrawl";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PrincipalAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto30["m_sql"] = "PrincipalAmount";
$proto30["m_srcTableName"] = "ClientCashWithdrawl";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto32["m_sql"] = "WithdrawlStatus";
$proto32["m_srcTableName"] = "ClientCashWithdrawl";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto34["m_sql"] = "ClientNo";
$proto34["m_srcTableName"] = "ClientCashWithdrawl";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto36["m_sql"] = "AccountNumber";
$proto36["m_srcTableName"] = "ClientCashWithdrawl";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto38["m_sql"] = "Balance";
$proto38["m_srcTableName"] = "ClientCashWithdrawl";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto40["m_sql"] = "LastModifiedBy";
$proto40["m_srcTableName"] = "ClientCashWithdrawl";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto42["m_sql"] = "LastModifiedDate";
$proto42["m_srcTableName"] = "ClientCashWithdrawl";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto44["m_sql"] = "AccountName";
$proto44["m_srcTableName"] = "ClientCashWithdrawl";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto46["m_sql"] = "SelectedClientNo";
$proto46["m_srcTableName"] = "ClientCashWithdrawl";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "transactions";
$proto49["m_srcTableName"] = "ClientCashWithdrawl";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "DebitAccount";
$proto49["m_columns"][] = "CreditAccount";
$proto49["m_columns"][] = "DebitAccountTransactionCharge";
$proto49["m_columns"][] = "CreditAccountTransactionCharge";
$proto49["m_columns"][] = "Amount";
$proto49["m_columns"][] = "DateTime";
$proto49["m_columns"][] = "Description";
$proto49["m_columns"][] = "CashDepositNo";
$proto49["m_columns"][] = "CashDepositorName";
$proto49["m_columns"][] = "CashDepositType";
$proto49["m_columns"][] = "WithdrawlNo";
$proto49["m_columns"][] = "WithdrawlName";
$proto49["m_columns"][] = "WithdrawlType";
$proto49["m_columns"][] = "LoanPaymentNo";
$proto49["m_columns"][] = "LoanPaymentName";
$proto49["m_columns"][] = "LoanPaymentPurpose";
$proto49["m_columns"][] = "LoanCreditPaymentNo";
$proto49["m_columns"][] = "LoanCreditPaymentName";
$proto49["m_columns"][] = "LoanCreditPaymentPurpose";
$proto49["m_columns"][] = "AccountType";
$proto49["m_columns"][] = "InterestAmount";
$proto49["m_columns"][] = "PrincipalAmount";
$proto49["m_columns"][] = "WithdrawlStatus";
$proto49["m_columns"][] = "NEFTTransferStatus";
$proto49["m_columns"][] = "LoanCreditApplicationStatus";
$proto49["m_columns"][] = "LoanCreditWitness";
$proto49["m_columns"][] = "NEFTTransferNo";
$proto49["m_columns"][] = "NEFTTransferDepositorName";
$proto49["m_columns"][] = "TransactionType";
$proto49["m_columns"][] = "Balance";
$proto49["m_columns"][] = "AccountNumber";
$proto49["m_columns"][] = "ClientNo";
$proto49["m_columns"][] = "LastModifiedBy";
$proto49["m_columns"][] = "LastModifiedDate";
$proto49["m_columns"][] = "AccountName";
$proto49["m_columns"][] = "TransactionNo";
$proto49["m_columns"][] = "TransactionStatus";
$proto49["m_columns"][] = "SelectedClientNo";
$proto49["m_columns"][] = "LoanPaymentStatus";
$proto49["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "transactions";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "ClientCashWithdrawl";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "ClientCashWithdrawl"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ClientCashWithdrawl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ClientCashWithdrawl = createSqlQuery_ClientCashWithdrawl();


	
		;

																					

$tdataClientCashWithdrawl[".sqlquery"] = $queryData_ClientCashWithdrawl;

include_once(getabspath("include/ClientCashWithdrawl_events.php"));
$tableEvents["ClientCashWithdrawl"] = new eventclass_ClientCashWithdrawl;
$tdataClientCashWithdrawl[".hasEvents"] = true;

?>