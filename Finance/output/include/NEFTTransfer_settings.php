<?php
require_once(getabspath("classes/cipherer.php"));




$tdataNEFTTransfer = array();
	$tdataNEFTTransfer[".truncateText"] = true;
	$tdataNEFTTransfer[".NumberOfChars"] = 80;
	$tdataNEFTTransfer[".ShortName"] = "NEFTTransfer";
	$tdataNEFTTransfer[".OwnerID"] = "ClientNo";
	$tdataNEFTTransfer[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsNEFTTransfer = array();
$fieldToolTipsNEFTTransfer = array();
$pageTitlesNEFTTransfer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsNEFTTransfer["English"] = array();
	$fieldToolTipsNEFTTransfer["English"] = array();
	$pageTitlesNEFTTransfer["English"] = array();
	$fieldLabelsNEFTTransfer["English"]["id"] = "Id";
	$fieldToolTipsNEFTTransfer["English"]["id"] = "";
	$fieldLabelsNEFTTransfer["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipsNEFTTransfer["English"]["DebitAccount"] = "";
	$fieldLabelsNEFTTransfer["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipsNEFTTransfer["English"]["CreditAccount"] = "";
	$fieldLabelsNEFTTransfer["English"]["DebitAccountTransactionCharge"] = "Debit Account Transaction Charge";
	$fieldToolTipsNEFTTransfer["English"]["DebitAccountTransactionCharge"] = "";
	$fieldLabelsNEFTTransfer["English"]["CreditAccountTransactionCharge"] = "Credit Account Transaction Charge";
	$fieldToolTipsNEFTTransfer["English"]["CreditAccountTransactionCharge"] = "";
	$fieldLabelsNEFTTransfer["English"]["Amount"] = "Amount";
	$fieldToolTipsNEFTTransfer["English"]["Amount"] = "";
	$fieldLabelsNEFTTransfer["English"]["DateTime"] = "Date Time";
	$fieldToolTipsNEFTTransfer["English"]["DateTime"] = "";
	$fieldLabelsNEFTTransfer["English"]["Description"] = "Description";
	$fieldToolTipsNEFTTransfer["English"]["Description"] = "";
	$fieldLabelsNEFTTransfer["English"]["PrincipalAmount"] = "Principal Amount";
	$fieldToolTipsNEFTTransfer["English"]["PrincipalAmount"] = "";
	$fieldLabelsNEFTTransfer["English"]["InterestAmount"] = "Interest Amount";
	$fieldToolTipsNEFTTransfer["English"]["InterestAmount"] = "";
	$fieldLabelsNEFTTransfer["English"]["NEFTTransferStatus"] = "NEFTTransfer Status";
	$fieldToolTipsNEFTTransfer["English"]["NEFTTransferStatus"] = "";
	$fieldLabelsNEFTTransfer["English"]["NEFTTransferNo"] = "NEFTTransfer No";
	$fieldToolTipsNEFTTransfer["English"]["NEFTTransferNo"] = "";
	$fieldLabelsNEFTTransfer["English"]["NEFTTransferDepositorName"] = "NEFTTransfer Depositor Name";
	$fieldToolTipsNEFTTransfer["English"]["NEFTTransferDepositorName"] = "";
	$fieldLabelsNEFTTransfer["English"]["ClientNo"] = "Client No";
	$fieldToolTipsNEFTTransfer["English"]["ClientNo"] = "";
	$fieldLabelsNEFTTransfer["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsNEFTTransfer["English"]["AccountNumber"] = "";
	$fieldLabelsNEFTTransfer["English"]["Balance"] = "Balance";
	$fieldToolTipsNEFTTransfer["English"]["Balance"] = "";
	$fieldLabelsNEFTTransfer["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsNEFTTransfer["English"]["LastModifiedBy"] = "";
	$fieldLabelsNEFTTransfer["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsNEFTTransfer["English"]["LastModifiedDate"] = "";
	$fieldLabelsNEFTTransfer["English"]["AccountName"] = "Account Name";
	$fieldToolTipsNEFTTransfer["English"]["AccountName"] = "";
	$fieldLabelsNEFTTransfer["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipsNEFTTransfer["English"]["SelectedClientNo"] = "";
	if (count($fieldToolTipsNEFTTransfer["English"]))
		$tdataNEFTTransfer[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsNEFTTransfer[""] = array();
	$fieldToolTipsNEFTTransfer[""] = array();
	$pageTitlesNEFTTransfer[""] = array();
	if (count($fieldToolTipsNEFTTransfer[""]))
		$tdataNEFTTransfer[".isUseToolTips"] = true;
}


	$tdataNEFTTransfer[".NCSearch"] = true;



$tdataNEFTTransfer[".shortTableName"] = "NEFTTransfer";
$tdataNEFTTransfer[".nSecOptions"] = 1;
$tdataNEFTTransfer[".recsPerRowPrint"] = 1;
$tdataNEFTTransfer[".mainTableOwnerID"] = "ClientNo";
$tdataNEFTTransfer[".moveNext"] = 1;
$tdataNEFTTransfer[".entityType"] = 1;

$tdataNEFTTransfer[".strOriginalTableName"] = "transactions";

	



$tdataNEFTTransfer[".showAddInPopup"] = false;

$tdataNEFTTransfer[".showEditInPopup"] = false;

$tdataNEFTTransfer[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataNEFTTransfer[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataNEFTTransfer[".fieldsForRegister"] = array();

$tdataNEFTTransfer[".listAjax"] = false;

	$tdataNEFTTransfer[".audit"] = false;

	$tdataNEFTTransfer[".locking"] = false;

$tdataNEFTTransfer[".edit"] = true;
$tdataNEFTTransfer[".afterEditAction"] = 1;
$tdataNEFTTransfer[".closePopupAfterEdit"] = 1;
$tdataNEFTTransfer[".afterEditActionDetTable"] = "";

$tdataNEFTTransfer[".add"] = true;
$tdataNEFTTransfer[".afterAddAction"] = 0;
$tdataNEFTTransfer[".closePopupAfterAdd"] = 1;
$tdataNEFTTransfer[".afterAddActionDetTable"] = "";

$tdataNEFTTransfer[".list"] = true;




$tdataNEFTTransfer[".view"] = true;

$tdataNEFTTransfer[".import"] = true;

$tdataNEFTTransfer[".exportTo"] = true;

$tdataNEFTTransfer[".printFriendly"] = true;

$tdataNEFTTransfer[".delete"] = true;

$tdataNEFTTransfer[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataNEFTTransfer[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataNEFTTransfer[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataNEFTTransfer[".searchSaving"] = true;
//

$tdataNEFTTransfer[".showSearchPanel"] = true;
		$tdataNEFTTransfer[".flexibleSearch"] = true;

$tdataNEFTTransfer[".isUseAjaxSuggest"] = true;

$tdataNEFTTransfer[".rowHighlite"] = true;



$tdataNEFTTransfer[".addPageEvents"] = false;

// use timepicker for search panel
$tdataNEFTTransfer[".isUseTimeForSearch"] = false;





$tdataNEFTTransfer[".allSearchFields"] = array();
$tdataNEFTTransfer[".filterFields"] = array();
$tdataNEFTTransfer[".requiredSearchFields"] = array();

$tdataNEFTTransfer[".allSearchFields"][] = "id";
	$tdataNEFTTransfer[".allSearchFields"][] = "AccountName";
	$tdataNEFTTransfer[".allSearchFields"][] = "ClientNo";
	$tdataNEFTTransfer[".allSearchFields"][] = "AccountNumber";
	$tdataNEFTTransfer[".allSearchFields"][] = "NEFTTransferNo";
	$tdataNEFTTransfer[".allSearchFields"][] = "NEFTTransferStatus";
	$tdataNEFTTransfer[".allSearchFields"][] = "DateTime";
	$tdataNEFTTransfer[".allSearchFields"][] = "Amount";
	$tdataNEFTTransfer[".allSearchFields"][] = "Balance";
	$tdataNEFTTransfer[".allSearchFields"][] = "Description";
	$tdataNEFTTransfer[".allSearchFields"][] = "InterestAmount";
	$tdataNEFTTransfer[".allSearchFields"][] = "PrincipalAmount";
	$tdataNEFTTransfer[".allSearchFields"][] = "LastModifiedBy";
	$tdataNEFTTransfer[".allSearchFields"][] = "LastModifiedDate";
	

$tdataNEFTTransfer[".googleLikeFields"] = array();
$tdataNEFTTransfer[".googleLikeFields"][] = "id";
$tdataNEFTTransfer[".googleLikeFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".googleLikeFields"][] = "DateTime";
$tdataNEFTTransfer[".googleLikeFields"][] = "CreditAccount";
$tdataNEFTTransfer[".googleLikeFields"][] = "DebitAccount";
$tdataNEFTTransfer[".googleLikeFields"][] = "CreditAccountTransactionCharge";
$tdataNEFTTransfer[".googleLikeFields"][] = "DebitAccountTransactionCharge";
$tdataNEFTTransfer[".googleLikeFields"][] = "NEFTTransferDepositorName";
$tdataNEFTTransfer[".googleLikeFields"][] = "Amount";
$tdataNEFTTransfer[".googleLikeFields"][] = "Description";
$tdataNEFTTransfer[".googleLikeFields"][] = "InterestAmount";
$tdataNEFTTransfer[".googleLikeFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".googleLikeFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".googleLikeFields"][] = "ClientNo";
$tdataNEFTTransfer[".googleLikeFields"][] = "AccountNumber";
$tdataNEFTTransfer[".googleLikeFields"][] = "Balance";
$tdataNEFTTransfer[".googleLikeFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".googleLikeFields"][] = "LastModifiedDate";
$tdataNEFTTransfer[".googleLikeFields"][] = "AccountName";
$tdataNEFTTransfer[".googleLikeFields"][] = "SelectedClientNo";


$tdataNEFTTransfer[".advSearchFields"] = array();
$tdataNEFTTransfer[".advSearchFields"][] = "id";
$tdataNEFTTransfer[".advSearchFields"][] = "AccountName";
$tdataNEFTTransfer[".advSearchFields"][] = "ClientNo";
$tdataNEFTTransfer[".advSearchFields"][] = "AccountNumber";
$tdataNEFTTransfer[".advSearchFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".advSearchFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".advSearchFields"][] = "DateTime";
$tdataNEFTTransfer[".advSearchFields"][] = "Amount";
$tdataNEFTTransfer[".advSearchFields"][] = "Balance";
$tdataNEFTTransfer[".advSearchFields"][] = "Description";
$tdataNEFTTransfer[".advSearchFields"][] = "InterestAmount";
$tdataNEFTTransfer[".advSearchFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".advSearchFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".advSearchFields"][] = "LastModifiedDate";

$tdataNEFTTransfer[".tableType"] = "list";

$tdataNEFTTransfer[".printerPageOrientation"] = 0;
$tdataNEFTTransfer[".nPrinterPageScale"] = 100;

$tdataNEFTTransfer[".nPrinterSplitRecords"] = 40;

$tdataNEFTTransfer[".nPrinterPDFSplitRecords"] = 40;



$tdataNEFTTransfer[".geocodingEnabled"] = false;





$tdataNEFTTransfer[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataNEFTTransfer[".pageSize"] = 20;

$tdataNEFTTransfer[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataNEFTTransfer[".strOrderBy"] = $tstrOrderBy;

$tdataNEFTTransfer[".orderindexes"] = array();
$tdataNEFTTransfer[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataNEFTTransfer[".sqlHead"] = "  SELECT id,  NEFTTransferNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  NEFTTransferDepositorName,  Amount,  Description,  InterestAmount,  PrincipalAmount,  NEFTTransferStatus,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$tdataNEFTTransfer[".sqlFrom"] = "FROM transactions";
$tdataNEFTTransfer[".sqlWhereExpr"] = "NEFTTransferNo is not NULL OR NEFTTransferNo <> ''";
$tdataNEFTTransfer[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataNEFTTransfer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataNEFTTransfer[".arrGroupsPerPage"] = $arrGPP;

$tdataNEFTTransfer[".highlightSearchResults"] = true;

$tableKeysNEFTTransfer = array();
$tableKeysNEFTTransfer[] = "id";
$tdataNEFTTransfer[".Keys"] = $tableKeysNEFTTransfer;

$tdataNEFTTransfer[".listFields"] = array();
$tdataNEFTTransfer[".listFields"][] = "id";
$tdataNEFTTransfer[".listFields"][] = "AccountName";
$tdataNEFTTransfer[".listFields"][] = "ClientNo";
$tdataNEFTTransfer[".listFields"][] = "AccountNumber";
$tdataNEFTTransfer[".listFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".listFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".listFields"][] = "DateTime";
$tdataNEFTTransfer[".listFields"][] = "Amount";
$tdataNEFTTransfer[".listFields"][] = "Balance";
$tdataNEFTTransfer[".listFields"][] = "Description";
$tdataNEFTTransfer[".listFields"][] = "InterestAmount";
$tdataNEFTTransfer[".listFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".listFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".listFields"][] = "LastModifiedDate";

$tdataNEFTTransfer[".hideMobileList"] = array();


$tdataNEFTTransfer[".viewFields"] = array();
$tdataNEFTTransfer[".viewFields"][] = "id";
$tdataNEFTTransfer[".viewFields"][] = "AccountName";
$tdataNEFTTransfer[".viewFields"][] = "ClientNo";
$tdataNEFTTransfer[".viewFields"][] = "AccountNumber";
$tdataNEFTTransfer[".viewFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".viewFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".viewFields"][] = "DateTime";
$tdataNEFTTransfer[".viewFields"][] = "Amount";
$tdataNEFTTransfer[".viewFields"][] = "Balance";
$tdataNEFTTransfer[".viewFields"][] = "Description";
$tdataNEFTTransfer[".viewFields"][] = "InterestAmount";
$tdataNEFTTransfer[".viewFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".viewFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".viewFields"][] = "LastModifiedDate";

$tdataNEFTTransfer[".addFields"] = array();
$tdataNEFTTransfer[".addFields"][] = "AccountName";
$tdataNEFTTransfer[".addFields"][] = "ClientNo";
$tdataNEFTTransfer[".addFields"][] = "AccountNumber";
$tdataNEFTTransfer[".addFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".addFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".addFields"][] = "DateTime";
$tdataNEFTTransfer[".addFields"][] = "Amount";
$tdataNEFTTransfer[".addFields"][] = "Balance";
$tdataNEFTTransfer[".addFields"][] = "Description";
$tdataNEFTTransfer[".addFields"][] = "InterestAmount";
$tdataNEFTTransfer[".addFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".addFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".addFields"][] = "LastModifiedDate";
$tdataNEFTTransfer[".addFields"][] = "SelectedClientNo";

$tdataNEFTTransfer[".masterListFields"] = array();
$tdataNEFTTransfer[".masterListFields"][] = "CreditAccountTransactionCharge";
$tdataNEFTTransfer[".masterListFields"][] = "DebitAccount";
$tdataNEFTTransfer[".masterListFields"][] = "CreditAccount";
$tdataNEFTTransfer[".masterListFields"][] = "DebitAccountTransactionCharge";
$tdataNEFTTransfer[".masterListFields"][] = "id";
$tdataNEFTTransfer[".masterListFields"][] = "AccountName";
$tdataNEFTTransfer[".masterListFields"][] = "ClientNo";
$tdataNEFTTransfer[".masterListFields"][] = "AccountNumber";
$tdataNEFTTransfer[".masterListFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".masterListFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".masterListFields"][] = "DateTime";
$tdataNEFTTransfer[".masterListFields"][] = "Amount";
$tdataNEFTTransfer[".masterListFields"][] = "NEFTTransferDepositorName";
$tdataNEFTTransfer[".masterListFields"][] = "Balance";
$tdataNEFTTransfer[".masterListFields"][] = "Description";
$tdataNEFTTransfer[".masterListFields"][] = "InterestAmount";
$tdataNEFTTransfer[".masterListFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".masterListFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".masterListFields"][] = "LastModifiedDate";
$tdataNEFTTransfer[".masterListFields"][] = "SelectedClientNo";

$tdataNEFTTransfer[".inlineAddFields"] = array();

$tdataNEFTTransfer[".editFields"] = array();
$tdataNEFTTransfer[".editFields"][] = "AccountName";
$tdataNEFTTransfer[".editFields"][] = "ClientNo";
$tdataNEFTTransfer[".editFields"][] = "AccountNumber";
$tdataNEFTTransfer[".editFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".editFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".editFields"][] = "DateTime";
$tdataNEFTTransfer[".editFields"][] = "Amount";
$tdataNEFTTransfer[".editFields"][] = "Balance";
$tdataNEFTTransfer[".editFields"][] = "Description";
$tdataNEFTTransfer[".editFields"][] = "InterestAmount";
$tdataNEFTTransfer[".editFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".editFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".editFields"][] = "LastModifiedDate";

$tdataNEFTTransfer[".inlineEditFields"] = array();

$tdataNEFTTransfer[".updateSelectedFields"] = array();


$tdataNEFTTransfer[".exportFields"] = array();
$tdataNEFTTransfer[".exportFields"][] = "id";
$tdataNEFTTransfer[".exportFields"][] = "AccountName";
$tdataNEFTTransfer[".exportFields"][] = "ClientNo";
$tdataNEFTTransfer[".exportFields"][] = "AccountNumber";
$tdataNEFTTransfer[".exportFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".exportFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".exportFields"][] = "DateTime";
$tdataNEFTTransfer[".exportFields"][] = "Amount";
$tdataNEFTTransfer[".exportFields"][] = "Balance";
$tdataNEFTTransfer[".exportFields"][] = "Description";
$tdataNEFTTransfer[".exportFields"][] = "InterestAmount";
$tdataNEFTTransfer[".exportFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".exportFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".exportFields"][] = "LastModifiedDate";

$tdataNEFTTransfer[".importFields"] = array();
$tdataNEFTTransfer[".importFields"][] = "id";
$tdataNEFTTransfer[".importFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".importFields"][] = "DateTime";
$tdataNEFTTransfer[".importFields"][] = "Amount";
$tdataNEFTTransfer[".importFields"][] = "Description";
$tdataNEFTTransfer[".importFields"][] = "InterestAmount";
$tdataNEFTTransfer[".importFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".importFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".importFields"][] = "ClientNo";
$tdataNEFTTransfer[".importFields"][] = "AccountNumber";
$tdataNEFTTransfer[".importFields"][] = "Balance";
$tdataNEFTTransfer[".importFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".importFields"][] = "LastModifiedDate";
$tdataNEFTTransfer[".importFields"][] = "AccountName";

$tdataNEFTTransfer[".printFields"] = array();
$tdataNEFTTransfer[".printFields"][] = "id";
$tdataNEFTTransfer[".printFields"][] = "AccountName";
$tdataNEFTTransfer[".printFields"][] = "ClientNo";
$tdataNEFTTransfer[".printFields"][] = "AccountNumber";
$tdataNEFTTransfer[".printFields"][] = "NEFTTransferNo";
$tdataNEFTTransfer[".printFields"][] = "NEFTTransferStatus";
$tdataNEFTTransfer[".printFields"][] = "DateTime";
$tdataNEFTTransfer[".printFields"][] = "Amount";
$tdataNEFTTransfer[".printFields"][] = "Balance";
$tdataNEFTTransfer[".printFields"][] = "Description";
$tdataNEFTTransfer[".printFields"][] = "InterestAmount";
$tdataNEFTTransfer[".printFields"][] = "PrincipalAmount";
$tdataNEFTTransfer[".printFields"][] = "LastModifiedBy";
$tdataNEFTTransfer[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","id");
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




	$tdataNEFTTransfer["id"] = $fdata;
//	NEFTTransferNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NEFTTransferNo";
	$fdata["GoodName"] = "NEFTTransferNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","NEFTTransferNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NEFTTransferNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEFTTransferNo";

	
	
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




	$tdataNEFTTransfer["NEFTTransferNo"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","DateTime");
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




	$tdataNEFTTransfer["DateTime"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","CreditAccount");
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








	$tdataNEFTTransfer["CreditAccount"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","DebitAccount");
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








	$tdataNEFTTransfer["DebitAccount"] = $fdata;
//	CreditAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CreditAccountTransactionCharge";
	$fdata["GoodName"] = "CreditAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","CreditAccountTransactionCharge");
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








	$tdataNEFTTransfer["CreditAccountTransactionCharge"] = $fdata;
//	DebitAccountTransactionCharge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DebitAccountTransactionCharge";
	$fdata["GoodName"] = "DebitAccountTransactionCharge";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","DebitAccountTransactionCharge");
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








	$tdataNEFTTransfer["DebitAccountTransactionCharge"] = $fdata;
//	NEFTTransferDepositorName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NEFTTransferDepositorName";
	$fdata["GoodName"] = "NEFTTransferDepositorName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","NEFTTransferDepositorName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	


	
	
	
	
		$fdata["strField"] = "NEFTTransferDepositorName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEFTTransferDepositorName";

	
	
			
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








	$tdataNEFTTransfer["NEFTTransferDepositorName"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","Amount");
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




	$tdataNEFTTransfer["Amount"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","Description");
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




	$tdataNEFTTransfer["Description"] = $fdata;
//	InterestAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "InterestAmount";
	$fdata["GoodName"] = "InterestAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","InterestAmount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "InterestAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "InterestAmount";

	
	
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




	$tdataNEFTTransfer["InterestAmount"] = $fdata;
//	PrincipalAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PrincipalAmount";
	$fdata["GoodName"] = "PrincipalAmount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","PrincipalAmount");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "PrincipalAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PrincipalAmount";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataNEFTTransfer["PrincipalAmount"] = $fdata;
//	NEFTTransferStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NEFTTransferStatus";
	$fdata["GoodName"] = "NEFTTransferStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","NEFTTransferStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "NEFTTransferStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NEFTTransferStatus";

	
	
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




	$tdataNEFTTransfer["NEFTTransferStatus"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","ClientNo");
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
	$edata["LookupTable"] = "usersLookupFiltered";
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
	$edata["DisplayField"] = "concat(FirstName,' ',LastName,' [',ClientNo,']')";

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataNEFTTransfer["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","AccountNumber");
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
	$edata["LookupTable"] = "accountsLookUpFiltered";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "AccountNumber";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "AccountNumber";

	
	$edata["LookupOrderBy"] = "AccountHolder";

	
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




	$tdataNEFTTransfer["AccountNumber"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","Balance");
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




	$tdataNEFTTransfer["Balance"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","LastModifiedBy");
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




	$tdataNEFTTransfer["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","LastModifiedDate");
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




	$tdataNEFTTransfer["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","AccountName");
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




	$tdataNEFTTransfer["AccountName"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("NEFTTransfer","SelectedClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	


	
	
	
	
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








	$tdataNEFTTransfer["SelectedClientNo"] = $fdata;


$tables_data["NEFTTransfer"]=&$tdataNEFTTransfer;
$field_labels["NEFTTransfer"] = &$fieldLabelsNEFTTransfer;
$fieldToolTips["NEFTTransfer"] = &$fieldToolTipsNEFTTransfer;
$page_titles["NEFTTransfer"] = &$pageTitlesNEFTTransfer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["NEFTTransfer"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["NEFTTransfer"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_NEFTTransfer()
{
$proto0=array();
$proto0["m_strHead"] = "  SELECT";
$proto0["m_strFieldList"] = "id,  NEFTTransferNo,  `DateTime`,  CreditAccount,  DebitAccount,  CreditAccountTransactionCharge,  DebitAccountTransactionCharge,  NEFTTransferDepositorName,  Amount,  Description,  InterestAmount,  PrincipalAmount,  NEFTTransferStatus,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$proto0["m_strFrom"] = "FROM transactions";
$proto0["m_strWhere"] = "NEFTTransferNo is not NULL OR NEFTTransferNo <> ''";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "NEFTTransferNo is not NULL OR NEFTTransferNo <> ''";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "NEFTTransferNo is not NULL OR NEFTTransferNo <> ''"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "NEFTTransferNo is not NULL";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is not NULL";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "NEFTTransferNo <> ''";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "NEFTTransferNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "<> ''";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "NEFTTransfer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "NEFTTransferNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto12["m_sql"] = "NEFTTransferNo";
$proto12["m_srcTableName"] = "NEFTTransfer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto14["m_sql"] = "`DateTime`";
$proto14["m_srcTableName"] = "NEFTTransfer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto16["m_sql"] = "CreditAccount";
$proto16["m_srcTableName"] = "NEFTTransfer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto18["m_sql"] = "DebitAccount";
$proto18["m_srcTableName"] = "NEFTTransfer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto20["m_sql"] = "CreditAccountTransactionCharge";
$proto20["m_srcTableName"] = "NEFTTransfer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccountTransactionCharge",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto22["m_sql"] = "DebitAccountTransactionCharge";
$proto22["m_srcTableName"] = "NEFTTransfer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "NEFTTransferDepositorName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto24["m_sql"] = "NEFTTransferDepositorName";
$proto24["m_srcTableName"] = "NEFTTransfer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto26["m_sql"] = "Amount";
$proto26["m_srcTableName"] = "NEFTTransfer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto28["m_sql"] = "Description";
$proto28["m_srcTableName"] = "NEFTTransfer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "InterestAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto30["m_sql"] = "InterestAmount";
$proto30["m_srcTableName"] = "NEFTTransfer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "PrincipalAmount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto32["m_sql"] = "PrincipalAmount";
$proto32["m_srcTableName"] = "NEFTTransfer";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "NEFTTransferStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto34["m_sql"] = "NEFTTransferStatus";
$proto34["m_srcTableName"] = "NEFTTransfer";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto36["m_sql"] = "ClientNo";
$proto36["m_srcTableName"] = "NEFTTransfer";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto38["m_sql"] = "AccountNumber";
$proto38["m_srcTableName"] = "NEFTTransfer";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto40["m_sql"] = "Balance";
$proto40["m_srcTableName"] = "NEFTTransfer";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto42["m_sql"] = "LastModifiedBy";
$proto42["m_srcTableName"] = "NEFTTransfer";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto44["m_sql"] = "LastModifiedDate";
$proto44["m_srcTableName"] = "NEFTTransfer";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto46["m_sql"] = "AccountName";
$proto46["m_srcTableName"] = "NEFTTransfer";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto48["m_sql"] = "SelectedClientNo";
$proto48["m_srcTableName"] = "NEFTTransfer";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "transactions";
$proto51["m_srcTableName"] = "NEFTTransfer";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "DebitAccount";
$proto51["m_columns"][] = "CreditAccount";
$proto51["m_columns"][] = "DebitAccountTransactionCharge";
$proto51["m_columns"][] = "CreditAccountTransactionCharge";
$proto51["m_columns"][] = "Amount";
$proto51["m_columns"][] = "DateTime";
$proto51["m_columns"][] = "Description";
$proto51["m_columns"][] = "CashDepositNo";
$proto51["m_columns"][] = "CashDepositorName";
$proto51["m_columns"][] = "CashDepositType";
$proto51["m_columns"][] = "WithdrawlNo";
$proto51["m_columns"][] = "WithdrawlName";
$proto51["m_columns"][] = "WithdrawlType";
$proto51["m_columns"][] = "LoanPaymentNo";
$proto51["m_columns"][] = "LoanPaymentName";
$proto51["m_columns"][] = "LoanPaymentPurpose";
$proto51["m_columns"][] = "LoanCreditPaymentNo";
$proto51["m_columns"][] = "LoanCreditPaymentName";
$proto51["m_columns"][] = "LoanCreditPaymentPurpose";
$proto51["m_columns"][] = "AccountType";
$proto51["m_columns"][] = "InterestAmount";
$proto51["m_columns"][] = "PrincipalAmount";
$proto51["m_columns"][] = "WithdrawlStatus";
$proto51["m_columns"][] = "NEFTTransferStatus";
$proto51["m_columns"][] = "LoanCreditApplicationStatus";
$proto51["m_columns"][] = "LoanCreditWitness";
$proto51["m_columns"][] = "NEFTTransferNo";
$proto51["m_columns"][] = "NEFTTransferDepositorName";
$proto51["m_columns"][] = "TransactionType";
$proto51["m_columns"][] = "Balance";
$proto51["m_columns"][] = "AccountNumber";
$proto51["m_columns"][] = "ClientNo";
$proto51["m_columns"][] = "LastModifiedBy";
$proto51["m_columns"][] = "LastModifiedDate";
$proto51["m_columns"][] = "AccountName";
$proto51["m_columns"][] = "TransactionNo";
$proto51["m_columns"][] = "TransactionStatus";
$proto51["m_columns"][] = "SelectedClientNo";
$proto51["m_columns"][] = "LoanPaymentStatus";
$proto51["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "transactions";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "NEFTTransfer";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "NEFTTransfer"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="NEFTTransfer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_NEFTTransfer = createSqlQuery_NEFTTransfer();


	
		;

																				

$tdataNEFTTransfer[".sqlquery"] = $queryData_NEFTTransfer;

include_once(getabspath("include/NEFTTransfer_events.php"));
$tableEvents["NEFTTransfer"] = new eventclass_NEFTTransfer;
$tdataNEFTTransfer[".hasEvents"] = true;

?>