<?php
require_once(getabspath("classes/cipherer.php"));




$tdataCashWithdrawl = array();
	$tdataCashWithdrawl[".truncateText"] = true;
	$tdataCashWithdrawl[".NumberOfChars"] = 80;
	$tdataCashWithdrawl[".ShortName"] = "CashWithdrawl";
	$tdataCashWithdrawl[".OwnerID"] = "";
	$tdataCashWithdrawl[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsCashWithdrawl = array();
$fieldToolTipsCashWithdrawl = array();
$pageTitlesCashWithdrawl = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsCashWithdrawl["English"] = array();
	$fieldToolTipsCashWithdrawl["English"] = array();
	$pageTitlesCashWithdrawl["English"] = array();
	$fieldLabelsCashWithdrawl["English"]["id"] = "Id";
	$fieldToolTipsCashWithdrawl["English"]["id"] = "";
	$fieldLabelsCashWithdrawl["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipsCashWithdrawl["English"]["DebitAccount"] = "";
	$fieldLabelsCashWithdrawl["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipsCashWithdrawl["English"]["CreditAccount"] = "";
	$fieldLabelsCashWithdrawl["English"]["DebitAccountTransactionCharge"] = "Debit Account Transaction Charge";
	$fieldToolTipsCashWithdrawl["English"]["DebitAccountTransactionCharge"] = "";
	$fieldLabelsCashWithdrawl["English"]["CreditAccountTransactionCharge"] = "Credit Account Transaction Charge";
	$fieldToolTipsCashWithdrawl["English"]["CreditAccountTransactionCharge"] = "";
	$fieldLabelsCashWithdrawl["English"]["Amount"] = "Amount";
	$fieldToolTipsCashWithdrawl["English"]["Amount"] = "";
	$fieldLabelsCashWithdrawl["English"]["DateTime"] = "Date Time";
	$fieldToolTipsCashWithdrawl["English"]["DateTime"] = "";
	$fieldLabelsCashWithdrawl["English"]["Description"] = "Description";
	$fieldToolTipsCashWithdrawl["English"]["Description"] = "";
	$fieldLabelsCashWithdrawl["English"]["WithdrawlNo"] = "Withdrawl No";
	$fieldToolTipsCashWithdrawl["English"]["WithdrawlNo"] = "";
	$fieldLabelsCashWithdrawl["English"]["WithdrawlName"] = "Withdrawl Name";
	$fieldToolTipsCashWithdrawl["English"]["WithdrawlName"] = "";
	$fieldLabelsCashWithdrawl["English"]["WithdrawlType"] = "Withdrawl Type";
	$fieldToolTipsCashWithdrawl["English"]["WithdrawlType"] = "";
	$fieldLabelsCashWithdrawl["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsCashWithdrawl["English"]["InterestAmount"] = "";
	$fieldLabelsCashWithdrawl["English"]["PrincipalAmount"] = "Principal Amount";
	$fieldToolTipsCashWithdrawl["English"]["PrincipalAmount"] = "";
	$fieldLabelsCashWithdrawl["English"]["WithdrawlStatus"] = "Withdrawl Status";
	$fieldToolTipsCashWithdrawl["English"]["WithdrawlStatus"] = "";
	$fieldLabelsCashWithdrawl["English"]["ClientNo"] = "Client No";
	$fieldToolTipsCashWithdrawl["English"]["ClientNo"] = "";
	$fieldLabelsCashWithdrawl["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsCashWithdrawl["English"]["AccountNumber"] = "";
	$fieldLabelsCashWithdrawl["English"]["Balance"] = "Balance";
	$fieldToolTipsCashWithdrawl["English"]["Balance"] = "";
	$fieldLabelsCashWithdrawl["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsCashWithdrawl["English"]["LastModifiedBy"] = "";
	$fieldLabelsCashWithdrawl["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsCashWithdrawl["English"]["LastModifiedDate"] = "";
	$fieldLabelsCashWithdrawl["English"]["AccountName"] = "Account Name";
	$fieldToolTipsCashWithdrawl["English"]["AccountName"] = "";
	$fieldLabelsCashWithdrawl["English"]["TransactionStatus"] = "Transaction Status";
	$fieldToolTipsCashWithdrawl["English"]["TransactionStatus"] = "";
	$fieldLabelsCashWithdrawl["English"]["TransactionNo"] = "Transaction No";
	$fieldToolTipsCashWithdrawl["English"]["TransactionNo"] = "";
	$fieldLabelsCashWithdrawl["English"]["AccountType"] = "Account Type";
	$fieldToolTipsCashWithdrawl["English"]["AccountType"] = "";
	$fieldLabelsCashWithdrawl["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipsCashWithdrawl["English"]["SelectedClientNo"] = "";
	if (count($fieldToolTipsCashWithdrawl["English"]))
		$tdataCashWithdrawl[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsCashWithdrawl[""] = array();
	$fieldToolTipsCashWithdrawl[""] = array();
	$pageTitlesCashWithdrawl[""] = array();
	if (count($fieldToolTipsCashWithdrawl[""]))
		$tdataCashWithdrawl[".isUseToolTips"] = true;
}


	$tdataCashWithdrawl[".NCSearch"] = true;



$tdataCashWithdrawl[".shortTableName"] = "CashWithdrawl";
$tdataCashWithdrawl[".nSecOptions"] = 0;
$tdataCashWithdrawl[".mainTableOwnerID"] = "";
$tdataCashWithdrawl[".moveNext"] = 1;
$tdataCashWithdrawl[".entityType"] = 1;

$tdataCashWithdrawl[".strOriginalTableName"] = "transactions";

	



$tdataCashWithdrawl[".showAddInPopup"] = false;

$tdataCashWithdrawl[".showEditInPopup"] = false;

$tdataCashWithdrawl[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataCashWithdrawl[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataCashWithdrawl[".fieldsForRegister"] = array();

$tdataCashWithdrawl[".listAjax"] = false;

	$tdataCashWithdrawl[".audit"] = false;

	$tdataCashWithdrawl[".locking"] = false;

$tdataCashWithdrawl[".edit"] = true;
$tdataCashWithdrawl[".afterEditAction"] = 1;
$tdataCashWithdrawl[".closePopupAfterEdit"] = 1;
$tdataCashWithdrawl[".afterEditActionDetTable"] = "";

$tdataCashWithdrawl[".add"] = true;
$tdataCashWithdrawl[".afterAddAction"] = 2;
$tdataCashWithdrawl[".closePopupAfterAdd"] = 1;
$tdataCashWithdrawl[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataCashWithdrawl[".list"] = true;




$tdataCashWithdrawl[".view"] = true;

$tdataCashWithdrawl[".import"] = true;

$tdataCashWithdrawl[".exportTo"] = true;

$tdataCashWithdrawl[".printFriendly"] = true;

$tdataCashWithdrawl[".delete"] = true;

$tdataCashWithdrawl[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataCashWithdrawl[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataCashWithdrawl[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataCashWithdrawl[".searchSaving"] = true;
//

$tdataCashWithdrawl[".showSearchPanel"] = true;
		$tdataCashWithdrawl[".flexibleSearch"] = true;

$tdataCashWithdrawl[".isUseAjaxSuggest"] = true;

$tdataCashWithdrawl[".rowHighlite"] = true;



$tdataCashWithdrawl[".addPageEvents"] = true;

// use timepicker for search panel
$tdataCashWithdrawl[".isUseTimeForSearch"] = false;





$tdataCashWithdrawl[".allSearchFields"] = array();
$tdataCashWithdrawl[".filterFields"] = array();
$tdataCashWithdrawl[".requiredSearchFields"] = array();

$tdataCashWithdrawl[".allSearchFields"][] = "AccountName";
	$tdataCashWithdrawl[".allSearchFields"][] = "AccountNumber";
	$tdataCashWithdrawl[".allSearchFields"][] = "AccountType";
	$tdataCashWithdrawl[".allSearchFields"][] = "ClientNo";
	$tdataCashWithdrawl[".allSearchFields"][] = "TransactionNo";
	$tdataCashWithdrawl[".allSearchFields"][] = "TransactionStatus";
	$tdataCashWithdrawl[".allSearchFields"][] = "WithdrawlType";
	$tdataCashWithdrawl[".allSearchFields"][] = "DateTime";
	$tdataCashWithdrawl[".allSearchFields"][] = "Amount";
	$tdataCashWithdrawl[".allSearchFields"][] = "Balance";
	$tdataCashWithdrawl[".allSearchFields"][] = "Description";
	$tdataCashWithdrawl[".allSearchFields"][] = "LastModifiedBy";
	$tdataCashWithdrawl[".allSearchFields"][] = "LastModifiedDate";
	

$tdataCashWithdrawl[".googleLikeFields"] = array();
$tdataCashWithdrawl[".googleLikeFields"][] = "id";
$tdataCashWithdrawl[".googleLikeFields"][] = "WithdrawlNo";
$tdataCashWithdrawl[".googleLikeFields"][] = "DateTime";
$tdataCashWithdrawl[".googleLikeFields"][] = "CreditAccount";
$tdataCashWithdrawl[".googleLikeFields"][] = "DebitAccount";
$tdataCashWithdrawl[".googleLikeFields"][] = "CreditAccountTransactionCharge";
$tdataCashWithdrawl[".googleLikeFields"][] = "DebitAccountTransactionCharge";
$tdataCashWithdrawl[".googleLikeFields"][] = "WithdrawlName";
$tdataCashWithdrawl[".googleLikeFields"][] = "Amount";
$tdataCashWithdrawl[".googleLikeFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".googleLikeFields"][] = "Description";
$tdataCashWithdrawl[".googleLikeFields"][] = "InterestAmount";
$tdataCashWithdrawl[".googleLikeFields"][] = "PrincipalAmount";
$tdataCashWithdrawl[".googleLikeFields"][] = "WithdrawlStatus";
$tdataCashWithdrawl[".googleLikeFields"][] = "ClientNo";
$tdataCashWithdrawl[".googleLikeFields"][] = "AccountNumber";
$tdataCashWithdrawl[".googleLikeFields"][] = "Balance";
$tdataCashWithdrawl[".googleLikeFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".googleLikeFields"][] = "LastModifiedDate";
$tdataCashWithdrawl[".googleLikeFields"][] = "AccountName";
$tdataCashWithdrawl[".googleLikeFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".googleLikeFields"][] = "TransactionNo";
$tdataCashWithdrawl[".googleLikeFields"][] = "AccountType";
$tdataCashWithdrawl[".googleLikeFields"][] = "SelectedClientNo";


$tdataCashWithdrawl[".advSearchFields"] = array();
$tdataCashWithdrawl[".advSearchFields"][] = "AccountName";
$tdataCashWithdrawl[".advSearchFields"][] = "AccountNumber";
$tdataCashWithdrawl[".advSearchFields"][] = "AccountType";
$tdataCashWithdrawl[".advSearchFields"][] = "ClientNo";
$tdataCashWithdrawl[".advSearchFields"][] = "TransactionNo";
$tdataCashWithdrawl[".advSearchFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".advSearchFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".advSearchFields"][] = "DateTime";
$tdataCashWithdrawl[".advSearchFields"][] = "Amount";
$tdataCashWithdrawl[".advSearchFields"][] = "Balance";
$tdataCashWithdrawl[".advSearchFields"][] = "Description";
$tdataCashWithdrawl[".advSearchFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".advSearchFields"][] = "LastModifiedDate";

$tdataCashWithdrawl[".tableType"] = "list";

$tdataCashWithdrawl[".printerPageOrientation"] = 0;
$tdataCashWithdrawl[".nPrinterPageScale"] = 100;

$tdataCashWithdrawl[".nPrinterSplitRecords"] = 40;

$tdataCashWithdrawl[".nPrinterPDFSplitRecords"] = 40;



$tdataCashWithdrawl[".geocodingEnabled"] = false;




$tdataCashWithdrawl[".printGridLayout"] = 2;

$tdataCashWithdrawl[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataCashWithdrawl[".pageSize"] = 20;

$tdataCashWithdrawl[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataCashWithdrawl[".strOrderBy"] = $tstrOrderBy;

$tdataCashWithdrawl[".orderindexes"] = array();
$tdataCashWithdrawl[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataCashWithdrawl[".sqlHead"] = "SELECT id,  WithdrawlNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  WithdrawlName,  Amount,  WithdrawlType,  Description,  InterestAmount,  PrincipalAmount,  WithdrawlStatus,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  TransactionStatus,  TransactionNo,  AccountType,  SelectedClientNo";
$tdataCashWithdrawl[".sqlFrom"] = "FROM transactions";
$tdataCashWithdrawl[".sqlWhereExpr"] = "WithdrawlType in ('Cash','Cheque')";
$tdataCashWithdrawl[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataCashWithdrawl[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataCashWithdrawl[".arrGroupsPerPage"] = $arrGPP;

$tdataCashWithdrawl[".highlightSearchResults"] = true;

$tableKeysCashWithdrawl = array();
$tableKeysCashWithdrawl[] = "id";
$tdataCashWithdrawl[".Keys"] = $tableKeysCashWithdrawl;

$tdataCashWithdrawl[".listFields"] = array();
$tdataCashWithdrawl[".listFields"][] = "AccountName";
$tdataCashWithdrawl[".listFields"][] = "AccountNumber";
$tdataCashWithdrawl[".listFields"][] = "AccountType";
$tdataCashWithdrawl[".listFields"][] = "ClientNo";
$tdataCashWithdrawl[".listFields"][] = "TransactionNo";
$tdataCashWithdrawl[".listFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".listFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".listFields"][] = "DateTime";
$tdataCashWithdrawl[".listFields"][] = "Amount";
$tdataCashWithdrawl[".listFields"][] = "Balance";
$tdataCashWithdrawl[".listFields"][] = "Description";
$tdataCashWithdrawl[".listFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".listFields"][] = "LastModifiedDate";

$tdataCashWithdrawl[".hideMobileList"] = array();


$tdataCashWithdrawl[".viewFields"] = array();
$tdataCashWithdrawl[".viewFields"][] = "AccountName";
$tdataCashWithdrawl[".viewFields"][] = "AccountNumber";
$tdataCashWithdrawl[".viewFields"][] = "AccountType";
$tdataCashWithdrawl[".viewFields"][] = "ClientNo";
$tdataCashWithdrawl[".viewFields"][] = "TransactionNo";
$tdataCashWithdrawl[".viewFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".viewFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".viewFields"][] = "DateTime";
$tdataCashWithdrawl[".viewFields"][] = "Amount";
$tdataCashWithdrawl[".viewFields"][] = "Balance";
$tdataCashWithdrawl[".viewFields"][] = "Description";
$tdataCashWithdrawl[".viewFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".viewFields"][] = "LastModifiedDate";

$tdataCashWithdrawl[".addFields"] = array();
$tdataCashWithdrawl[".addFields"][] = "AccountName";
$tdataCashWithdrawl[".addFields"][] = "AccountNumber";
$tdataCashWithdrawl[".addFields"][] = "AccountType";
$tdataCashWithdrawl[".addFields"][] = "ClientNo";
$tdataCashWithdrawl[".addFields"][] = "TransactionNo";
$tdataCashWithdrawl[".addFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".addFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".addFields"][] = "DateTime";
$tdataCashWithdrawl[".addFields"][] = "Amount";
$tdataCashWithdrawl[".addFields"][] = "Balance";
$tdataCashWithdrawl[".addFields"][] = "Description";
$tdataCashWithdrawl[".addFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".addFields"][] = "LastModifiedDate";
$tdataCashWithdrawl[".addFields"][] = "SelectedClientNo";

$tdataCashWithdrawl[".masterListFields"] = array();
$tdataCashWithdrawl[".masterListFields"][] = "PrincipalAmount";
$tdataCashWithdrawl[".masterListFields"][] = "WithdrawlName";
$tdataCashWithdrawl[".masterListFields"][] = "DebitAccountTransactionCharge";
$tdataCashWithdrawl[".masterListFields"][] = "CreditAccount";
$tdataCashWithdrawl[".masterListFields"][] = "DebitAccount";
$tdataCashWithdrawl[".masterListFields"][] = "CreditAccountTransactionCharge";
$tdataCashWithdrawl[".masterListFields"][] = "InterestAmount";
$tdataCashWithdrawl[".masterListFields"][] = "AccountName";
$tdataCashWithdrawl[".masterListFields"][] = "id";
$tdataCashWithdrawl[".masterListFields"][] = "AccountNumber";
$tdataCashWithdrawl[".masterListFields"][] = "AccountType";
$tdataCashWithdrawl[".masterListFields"][] = "ClientNo";
$tdataCashWithdrawl[".masterListFields"][] = "TransactionNo";
$tdataCashWithdrawl[".masterListFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".masterListFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".masterListFields"][] = "WithdrawlNo";
$tdataCashWithdrawl[".masterListFields"][] = "WithdrawlStatus";
$tdataCashWithdrawl[".masterListFields"][] = "DateTime";
$tdataCashWithdrawl[".masterListFields"][] = "Amount";
$tdataCashWithdrawl[".masterListFields"][] = "Balance";
$tdataCashWithdrawl[".masterListFields"][] = "Description";
$tdataCashWithdrawl[".masterListFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".masterListFields"][] = "LastModifiedDate";
$tdataCashWithdrawl[".masterListFields"][] = "SelectedClientNo";

$tdataCashWithdrawl[".inlineAddFields"] = array();

$tdataCashWithdrawl[".editFields"] = array();
$tdataCashWithdrawl[".editFields"][] = "AccountName";
$tdataCashWithdrawl[".editFields"][] = "AccountNumber";
$tdataCashWithdrawl[".editFields"][] = "AccountType";
$tdataCashWithdrawl[".editFields"][] = "ClientNo";
$tdataCashWithdrawl[".editFields"][] = "TransactionNo";
$tdataCashWithdrawl[".editFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".editFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".editFields"][] = "DateTime";
$tdataCashWithdrawl[".editFields"][] = "Amount";
$tdataCashWithdrawl[".editFields"][] = "Balance";
$tdataCashWithdrawl[".editFields"][] = "Description";
$tdataCashWithdrawl[".editFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".editFields"][] = "LastModifiedDate";
$tdataCashWithdrawl[".editFields"][] = "SelectedClientNo";

$tdataCashWithdrawl[".inlineEditFields"] = array();

$tdataCashWithdrawl[".updateSelectedFields"] = array();


$tdataCashWithdrawl[".exportFields"] = array();
$tdataCashWithdrawl[".exportFields"][] = "AccountName";
$tdataCashWithdrawl[".exportFields"][] = "AccountNumber";
$tdataCashWithdrawl[".exportFields"][] = "AccountType";
$tdataCashWithdrawl[".exportFields"][] = "ClientNo";
$tdataCashWithdrawl[".exportFields"][] = "TransactionNo";
$tdataCashWithdrawl[".exportFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".exportFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".exportFields"][] = "DateTime";
$tdataCashWithdrawl[".exportFields"][] = "Amount";
$tdataCashWithdrawl[".exportFields"][] = "Balance";
$tdataCashWithdrawl[".exportFields"][] = "Description";
$tdataCashWithdrawl[".exportFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".exportFields"][] = "LastModifiedDate";

$tdataCashWithdrawl[".importFields"] = array();
$tdataCashWithdrawl[".importFields"][] = "DateTime";
$tdataCashWithdrawl[".importFields"][] = "Amount";
$tdataCashWithdrawl[".importFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".importFields"][] = "Description";
$tdataCashWithdrawl[".importFields"][] = "ClientNo";
$tdataCashWithdrawl[".importFields"][] = "AccountNumber";
$tdataCashWithdrawl[".importFields"][] = "Balance";
$tdataCashWithdrawl[".importFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".importFields"][] = "LastModifiedDate";
$tdataCashWithdrawl[".importFields"][] = "AccountName";
$tdataCashWithdrawl[".importFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".importFields"][] = "TransactionNo";
$tdataCashWithdrawl[".importFields"][] = "AccountType";

$tdataCashWithdrawl[".printFields"] = array();
$tdataCashWithdrawl[".printFields"][] = "AccountName";
$tdataCashWithdrawl[".printFields"][] = "AccountNumber";
$tdataCashWithdrawl[".printFields"][] = "AccountType";
$tdataCashWithdrawl[".printFields"][] = "ClientNo";
$tdataCashWithdrawl[".printFields"][] = "TransactionNo";
$tdataCashWithdrawl[".printFields"][] = "TransactionStatus";
$tdataCashWithdrawl[".printFields"][] = "WithdrawlType";
$tdataCashWithdrawl[".printFields"][] = "DateTime";
$tdataCashWithdrawl[".printFields"][] = "Amount";
$tdataCashWithdrawl[".printFields"][] = "Balance";
$tdataCashWithdrawl[".printFields"][] = "Description";
$tdataCashWithdrawl[".printFields"][] = "LastModifiedBy";
$tdataCashWithdrawl[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","id");
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








	$tdataCashWithdrawl["id"] = $fdata;
//	WithdrawlNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "WithdrawlNo";
	$fdata["GoodName"] = "WithdrawlNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","WithdrawlNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "WithdrawlNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlNo";

	
	
			
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








	$tdataCashWithdrawl["WithdrawlNo"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","DateTime");
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




	$tdataCashWithdrawl["DateTime"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","CreditAccount");
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








	$tdataCashWithdrawl["CreditAccount"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","DebitAccount");
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








	$tdataCashWithdrawl["DebitAccount"] = $fdata;
//	CreditAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CreditAccountTransactionCharge";
	$fdata["GoodName"] = "CreditAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","CreditAccountTransactionCharge");
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








	$tdataCashWithdrawl["CreditAccountTransactionCharge"] = $fdata;
//	DebitAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DebitAccountTransactionCharge";
	$fdata["GoodName"] = "DebitAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","DebitAccountTransactionCharge");
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








	$tdataCashWithdrawl["DebitAccountTransactionCharge"] = $fdata;
//	WithdrawlName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "WithdrawlName";
	$fdata["GoodName"] = "WithdrawlName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","WithdrawlName");
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








	$tdataCashWithdrawl["WithdrawlName"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","Amount");
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataCashWithdrawl["Amount"] = $fdata;
//	WithdrawlType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "WithdrawlType";
	$fdata["GoodName"] = "WithdrawlType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","WithdrawlType");
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




	$tdataCashWithdrawl["WithdrawlType"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","Description");
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




	$tdataCashWithdrawl["Description"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","InterestAmount");
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








	$tdataCashWithdrawl["InterestAmount"] = $fdata;
//	PrincipalAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PrincipalAmount";
	$fdata["GoodName"] = "PrincipalAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","PrincipalAmount");
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








	$tdataCashWithdrawl["PrincipalAmount"] = $fdata;
//	WithdrawlStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "WithdrawlStatus";
	$fdata["GoodName"] = "WithdrawlStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","WithdrawlStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "WithdrawlStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WithdrawlStatus";

	
	
			
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








	$tdataCashWithdrawl["WithdrawlStatus"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","ClientNo");
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "usersLookUp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"Temp", 'lookupF'=>"ClientNo");
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




	$tdataCashWithdrawl["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","AccountNumber");
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
		$edata["autoCompleteFields"][] = array('masterF'=>"Balance", 'lookupF'=>"AccountBalance");
	$edata["autoCompleteFields"][] = array('masterF'=>"AccountType", 'lookupF'=>"AccountType");
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




	$tdataCashWithdrawl["AccountNumber"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","Balance");
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




	$tdataCashWithdrawl["Balance"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","LastModifiedBy");
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




	$tdataCashWithdrawl["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","LastModifiedDate");
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




	$tdataCashWithdrawl["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","AccountName");
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

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "ClientNo";
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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
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




	$tdataCashWithdrawl["AccountName"] = $fdata;
//	TransactionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TransactionStatus";
	$fdata["GoodName"] = "TransactionStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","TransactionStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransactionStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionStatus";

	
	
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




	$tdataCashWithdrawl["TransactionStatus"] = $fdata;
//	TransactionNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TransactionNo";
	$fdata["GoodName"] = "TransactionNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","TransactionNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransactionNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionNo";

	
	
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




	$tdataCashWithdrawl["TransactionNo"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "AccountType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountType";

	
	
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




	$tdataCashWithdrawl["AccountType"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("CashWithdrawl","SelectedClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


	
	
	
	
		$fdata["strField"] = "SelectedClientNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SelectedClientNo";

	
	
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








	$tdataCashWithdrawl["SelectedClientNo"] = $fdata;


$tables_data["CashWithdrawl"]=&$tdataCashWithdrawl;
$field_labels["CashWithdrawl"] = &$fieldLabelsCashWithdrawl;
$fieldToolTips["CashWithdrawl"] = &$fieldToolTipsCashWithdrawl;
$page_titles["CashWithdrawl"] = &$pageTitlesCashWithdrawl;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["CashWithdrawl"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["CashWithdrawl"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_CashWithdrawl()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  WithdrawlNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  WithdrawlName,  Amount,  WithdrawlType,  Description,  InterestAmount,  PrincipalAmount,  WithdrawlStatus,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  TransactionStatus,  TransactionNo,  AccountType,  SelectedClientNo";
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
	"m_srcTableName" => "CashWithdrawl"
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
	"m_srcTableName" => "CashWithdrawl"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "CashWithdrawl";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto8["m_sql"] = "WithdrawlNo";
$proto8["m_srcTableName"] = "CashWithdrawl";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto10["m_sql"] = "`DateTime`";
$proto10["m_srcTableName"] = "CashWithdrawl";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto12["m_sql"] = "CreditAccount";
$proto12["m_srcTableName"] = "CashWithdrawl";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto14["m_sql"] = "DebitAccount";
$proto14["m_srcTableName"] = "CashWithdrawl";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto16["m_sql"] = "CreditAccountTransactionCharge";
$proto16["m_srcTableName"] = "CashWithdrawl";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto18["m_sql"] = "DebitAccountTransactionCharge";
$proto18["m_srcTableName"] = "CashWithdrawl";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto20["m_sql"] = "WithdrawlName";
$proto20["m_srcTableName"] = "CashWithdrawl";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto22["m_sql"] = "Amount";
$proto22["m_srcTableName"] = "CashWithdrawl";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto24["m_sql"] = "WithdrawlType";
$proto24["m_srcTableName"] = "CashWithdrawl";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto26["m_sql"] = "Description";
$proto26["m_srcTableName"] = "CashWithdrawl";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto28["m_sql"] = "InterestAmount";
$proto28["m_srcTableName"] = "CashWithdrawl";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "PrincipalAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto30["m_sql"] = "PrincipalAmount";
$proto30["m_srcTableName"] = "CashWithdrawl";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "WithdrawlStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto32["m_sql"] = "WithdrawlStatus";
$proto32["m_srcTableName"] = "CashWithdrawl";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto34["m_sql"] = "ClientNo";
$proto34["m_srcTableName"] = "CashWithdrawl";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto36["m_sql"] = "AccountNumber";
$proto36["m_srcTableName"] = "CashWithdrawl";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto38["m_sql"] = "Balance";
$proto38["m_srcTableName"] = "CashWithdrawl";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto40["m_sql"] = "LastModifiedBy";
$proto40["m_srcTableName"] = "CashWithdrawl";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto42["m_sql"] = "LastModifiedDate";
$proto42["m_srcTableName"] = "CashWithdrawl";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto44["m_sql"] = "AccountName";
$proto44["m_srcTableName"] = "CashWithdrawl";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto46["m_sql"] = "TransactionStatus";
$proto46["m_srcTableName"] = "CashWithdrawl";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto48["m_sql"] = "TransactionNo";
$proto48["m_srcTableName"] = "CashWithdrawl";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto50["m_sql"] = "AccountType";
$proto50["m_srcTableName"] = "CashWithdrawl";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto52["m_sql"] = "SelectedClientNo";
$proto52["m_srcTableName"] = "CashWithdrawl";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "transactions";
$proto55["m_srcTableName"] = "CashWithdrawl";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id";
$proto55["m_columns"][] = "DebitAccount";
$proto55["m_columns"][] = "CreditAccount";
$proto55["m_columns"][] = "DebitAccountTransactionCharge";
$proto55["m_columns"][] = "CreditAccountTransactionCharge";
$proto55["m_columns"][] = "Amount";
$proto55["m_columns"][] = "DateTime";
$proto55["m_columns"][] = "Description";
$proto55["m_columns"][] = "CashDepositNo";
$proto55["m_columns"][] = "CashDepositorName";
$proto55["m_columns"][] = "CashDepositType";
$proto55["m_columns"][] = "WithdrawlNo";
$proto55["m_columns"][] = "WithdrawlName";
$proto55["m_columns"][] = "WithdrawlType";
$proto55["m_columns"][] = "LoanPaymentNo";
$proto55["m_columns"][] = "LoanPaymentName";
$proto55["m_columns"][] = "LoanPaymentPurpose";
$proto55["m_columns"][] = "LoanCreditPaymentNo";
$proto55["m_columns"][] = "LoanCreditPaymentName";
$proto55["m_columns"][] = "LoanCreditPaymentPurpose";
$proto55["m_columns"][] = "AccountType";
$proto55["m_columns"][] = "InterestAmount";
$proto55["m_columns"][] = "PrincipalAmount";
$proto55["m_columns"][] = "WithdrawlStatus";
$proto55["m_columns"][] = "NEFTTransferStatus";
$proto55["m_columns"][] = "LoanCreditApplicationStatus";
$proto55["m_columns"][] = "LoanCreditWitness";
$proto55["m_columns"][] = "NEFTTransferNo";
$proto55["m_columns"][] = "NEFTTransferDepositorName";
$proto55["m_columns"][] = "TransactionType";
$proto55["m_columns"][] = "Balance";
$proto55["m_columns"][] = "AccountNumber";
$proto55["m_columns"][] = "ClientNo";
$proto55["m_columns"][] = "LastModifiedBy";
$proto55["m_columns"][] = "LastModifiedDate";
$proto55["m_columns"][] = "AccountName";
$proto55["m_columns"][] = "TransactionNo";
$proto55["m_columns"][] = "TransactionStatus";
$proto55["m_columns"][] = "SelectedClientNo";
$proto55["m_columns"][] = "LoanPaymentStatus";
$proto55["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "transactions";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "CashWithdrawl";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "CashWithdrawl"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 0;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="CashWithdrawl";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_CashWithdrawl = createSqlQuery_CashWithdrawl();


	
		;

																								

$tdataCashWithdrawl[".sqlquery"] = $queryData_CashWithdrawl;

include_once(getabspath("include/CashWithdrawl_events.php"));
$tableEvents["CashWithdrawl"] = new eventclass_CashWithdrawl;
$tdataCashWithdrawl[".hasEvents"] = true;

?>