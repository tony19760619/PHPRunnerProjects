<?php
require_once(getabspath("classes/cipherer.php"));




$tdataTransactionLog = array();
	$tdataTransactionLog[".truncateText"] = true;
	$tdataTransactionLog[".NumberOfChars"] = 80;
	$tdataTransactionLog[".ShortName"] = "TransactionLog";
	$tdataTransactionLog[".OwnerID"] = "ClientNo";
	$tdataTransactionLog[".OriginalTable"] = "transactions";

//	field labels
$fieldLabelsTransactionLog = array();
$fieldToolTipsTransactionLog = array();
$pageTitlesTransactionLog = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsTransactionLog["English"] = array();
	$fieldToolTipsTransactionLog["English"] = array();
	$pageTitlesTransactionLog["English"] = array();
	$fieldLabelsTransactionLog["English"]["id"] = "Id";
	$fieldToolTipsTransactionLog["English"]["id"] = "";
	$fieldLabelsTransactionLog["English"]["DebitAccount"] = "Debit Account";
	$fieldToolTipsTransactionLog["English"]["DebitAccount"] = "";
	$fieldLabelsTransactionLog["English"]["CreditAccount"] = "Credit Account";
	$fieldToolTipsTransactionLog["English"]["CreditAccount"] = "";
	$fieldLabelsTransactionLog["English"]["Amount"] = "Amount";
	$fieldToolTipsTransactionLog["English"]["Amount"] = "";
	$fieldLabelsTransactionLog["English"]["DateTime"] = "Date Time";
	$fieldToolTipsTransactionLog["English"]["DateTime"] = "";
	$fieldLabelsTransactionLog["English"]["Description"] = "Description";
	$fieldToolTipsTransactionLog["English"]["Description"] = "";
	$fieldLabelsTransactionLog["English"]["AccountType"] = "Account Type";
	$fieldToolTipsTransactionLog["English"]["AccountType"] = "";
	$fieldLabelsTransactionLog["English"]["TransactionType"] = "Transaction Type";
	$fieldToolTipsTransactionLog["English"]["TransactionType"] = "";
	$fieldLabelsTransactionLog["English"]["TransactionNo"] = "Transaction No";
	$fieldToolTipsTransactionLog["English"]["TransactionNo"] = "";
	$fieldLabelsTransactionLog["English"]["TransactionStatus"] = "Transaction Status";
	$fieldToolTipsTransactionLog["English"]["TransactionStatus"] = "";
	$fieldLabelsTransactionLog["English"]["ClientNo"] = "Client No";
	$fieldToolTipsTransactionLog["English"]["ClientNo"] = "";
	$fieldLabelsTransactionLog["English"]["AccountNumber"] = "Account Number";
	$fieldToolTipsTransactionLog["English"]["AccountNumber"] = "";
	$fieldLabelsTransactionLog["English"]["Balance"] = "Balance";
	$fieldToolTipsTransactionLog["English"]["Balance"] = "";
	$fieldLabelsTransactionLog["English"]["LastModifiedBy"] = "Last Modified By";
	$fieldToolTipsTransactionLog["English"]["LastModifiedBy"] = "";
	$fieldLabelsTransactionLog["English"]["LastModifiedDate"] = "Last Modified Date";
	$fieldToolTipsTransactionLog["English"]["LastModifiedDate"] = "";
	$fieldLabelsTransactionLog["English"]["AccountName"] = "Account Name";
	$fieldToolTipsTransactionLog["English"]["AccountName"] = "";
	$fieldLabelsTransactionLog["English"]["SelectedClientNo"] = "Selected Client No";
	$fieldToolTipsTransactionLog["English"]["SelectedClientNo"] = "";
	if (count($fieldToolTipsTransactionLog["English"]))
		$tdataTransactionLog[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsTransactionLog[""] = array();
	$fieldToolTipsTransactionLog[""] = array();
	$pageTitlesTransactionLog[""] = array();
	if (count($fieldToolTipsTransactionLog[""]))
		$tdataTransactionLog[".isUseToolTips"] = true;
}


	$tdataTransactionLog[".NCSearch"] = true;



$tdataTransactionLog[".shortTableName"] = "TransactionLog";
$tdataTransactionLog[".nSecOptions"] = 1;
$tdataTransactionLog[".recsPerRowPrint"] = 1;
$tdataTransactionLog[".mainTableOwnerID"] = "ClientNo";
$tdataTransactionLog[".moveNext"] = 1;
$tdataTransactionLog[".entityType"] = 1;

$tdataTransactionLog[".strOriginalTableName"] = "transactions";

	



$tdataTransactionLog[".showAddInPopup"] = false;

$tdataTransactionLog[".showEditInPopup"] = false;

$tdataTransactionLog[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataTransactionLog[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataTransactionLog[".fieldsForRegister"] = array();

$tdataTransactionLog[".listAjax"] = false;

	$tdataTransactionLog[".audit"] = false;

	$tdataTransactionLog[".locking"] = false;



$tdataTransactionLog[".list"] = true;




$tdataTransactionLog[".view"] = true;


$tdataTransactionLog[".exportTo"] = true;

$tdataTransactionLog[".printFriendly"] = true;


$tdataTransactionLog[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataTransactionLog[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataTransactionLog[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataTransactionLog[".searchSaving"] = true;
//

$tdataTransactionLog[".showSearchPanel"] = true;
		$tdataTransactionLog[".flexibleSearch"] = true;

$tdataTransactionLog[".isUseAjaxSuggest"] = true;

$tdataTransactionLog[".rowHighlite"] = true;



$tdataTransactionLog[".addPageEvents"] = false;

// use timepicker for search panel
$tdataTransactionLog[".isUseTimeForSearch"] = false;





$tdataTransactionLog[".allSearchFields"] = array();
$tdataTransactionLog[".filterFields"] = array();
$tdataTransactionLog[".requiredSearchFields"] = array();

$tdataTransactionLog[".allSearchFields"][] = "TransactionNo";
	$tdataTransactionLog[".allSearchFields"][] = "TransactionType";
	$tdataTransactionLog[".allSearchFields"][] = "TransactionStatus";
	$tdataTransactionLog[".allSearchFields"][] = "AccountNumber";
	$tdataTransactionLog[".allSearchFields"][] = "AccountName";
	$tdataTransactionLog[".allSearchFields"][] = "AccountType";
	$tdataTransactionLog[".allSearchFields"][] = "ClientNo";
	$tdataTransactionLog[".allSearchFields"][] = "DateTime";
	$tdataTransactionLog[".allSearchFields"][] = "Amount";
	$tdataTransactionLog[".allSearchFields"][] = "Balance";
	$tdataTransactionLog[".allSearchFields"][] = "Description";
	$tdataTransactionLog[".allSearchFields"][] = "LastModifiedBy";
	$tdataTransactionLog[".allSearchFields"][] = "LastModifiedDate";
	

$tdataTransactionLog[".googleLikeFields"] = array();
$tdataTransactionLog[".googleLikeFields"][] = "id";
$tdataTransactionLog[".googleLikeFields"][] = "DebitAccount";
$tdataTransactionLog[".googleLikeFields"][] = "CreditAccount";
$tdataTransactionLog[".googleLikeFields"][] = "Amount";
$tdataTransactionLog[".googleLikeFields"][] = "DateTime";
$tdataTransactionLog[".googleLikeFields"][] = "Description";
$tdataTransactionLog[".googleLikeFields"][] = "TransactionNo";
$tdataTransactionLog[".googleLikeFields"][] = "AccountType";
$tdataTransactionLog[".googleLikeFields"][] = "TransactionStatus";
$tdataTransactionLog[".googleLikeFields"][] = "TransactionType";
$tdataTransactionLog[".googleLikeFields"][] = "ClientNo";
$tdataTransactionLog[".googleLikeFields"][] = "AccountNumber";
$tdataTransactionLog[".googleLikeFields"][] = "Balance";
$tdataTransactionLog[".googleLikeFields"][] = "LastModifiedBy";
$tdataTransactionLog[".googleLikeFields"][] = "LastModifiedDate";
$tdataTransactionLog[".googleLikeFields"][] = "AccountName";
$tdataTransactionLog[".googleLikeFields"][] = "SelectedClientNo";


$tdataTransactionLog[".advSearchFields"] = array();
$tdataTransactionLog[".advSearchFields"][] = "TransactionNo";
$tdataTransactionLog[".advSearchFields"][] = "TransactionType";
$tdataTransactionLog[".advSearchFields"][] = "TransactionStatus";
$tdataTransactionLog[".advSearchFields"][] = "AccountNumber";
$tdataTransactionLog[".advSearchFields"][] = "AccountName";
$tdataTransactionLog[".advSearchFields"][] = "AccountType";
$tdataTransactionLog[".advSearchFields"][] = "ClientNo";
$tdataTransactionLog[".advSearchFields"][] = "DateTime";
$tdataTransactionLog[".advSearchFields"][] = "Amount";
$tdataTransactionLog[".advSearchFields"][] = "Balance";
$tdataTransactionLog[".advSearchFields"][] = "Description";
$tdataTransactionLog[".advSearchFields"][] = "LastModifiedBy";
$tdataTransactionLog[".advSearchFields"][] = "LastModifiedDate";

$tdataTransactionLog[".tableType"] = "list";

$tdataTransactionLog[".printerPageOrientation"] = 0;
$tdataTransactionLog[".nPrinterPageScale"] = 100;

$tdataTransactionLog[".nPrinterSplitRecords"] = 40;

$tdataTransactionLog[".nPrinterPDFSplitRecords"] = 40;



$tdataTransactionLog[".geocodingEnabled"] = false;





$tdataTransactionLog[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataTransactionLog[".pageSize"] = 20;

$tdataTransactionLog[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataTransactionLog[".strOrderBy"] = $tstrOrderBy;

$tdataTransactionLog[".orderindexes"] = array();
$tdataTransactionLog[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdataTransactionLog[".sqlHead"] = "SELECT id,  DebitAccount,  CreditAccount,  Amount,  `DateTime`,  Description,  TransactionNo,  AccountType,  TransactionStatus,  TransactionType,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$tdataTransactionLog[".sqlFrom"] = "FROM transactions";
$tdataTransactionLog[".sqlWhereExpr"] = "";
$tdataTransactionLog[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataTransactionLog[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataTransactionLog[".arrGroupsPerPage"] = $arrGPP;

$tdataTransactionLog[".highlightSearchResults"] = true;

$tableKeysTransactionLog = array();
$tableKeysTransactionLog[] = "id";
$tdataTransactionLog[".Keys"] = $tableKeysTransactionLog;

$tdataTransactionLog[".listFields"] = array();
$tdataTransactionLog[".listFields"][] = "TransactionNo";
$tdataTransactionLog[".listFields"][] = "TransactionType";
$tdataTransactionLog[".listFields"][] = "TransactionStatus";
$tdataTransactionLog[".listFields"][] = "AccountNumber";
$tdataTransactionLog[".listFields"][] = "AccountName";
$tdataTransactionLog[".listFields"][] = "AccountType";
$tdataTransactionLog[".listFields"][] = "ClientNo";
$tdataTransactionLog[".listFields"][] = "DateTime";
$tdataTransactionLog[".listFields"][] = "Amount";
$tdataTransactionLog[".listFields"][] = "Balance";
$tdataTransactionLog[".listFields"][] = "Description";
$tdataTransactionLog[".listFields"][] = "LastModifiedBy";
$tdataTransactionLog[".listFields"][] = "LastModifiedDate";

$tdataTransactionLog[".hideMobileList"] = array();


$tdataTransactionLog[".viewFields"] = array();
$tdataTransactionLog[".viewFields"][] = "TransactionNo";
$tdataTransactionLog[".viewFields"][] = "TransactionType";
$tdataTransactionLog[".viewFields"][] = "TransactionStatus";
$tdataTransactionLog[".viewFields"][] = "AccountNumber";
$tdataTransactionLog[".viewFields"][] = "AccountName";
$tdataTransactionLog[".viewFields"][] = "AccountType";
$tdataTransactionLog[".viewFields"][] = "ClientNo";
$tdataTransactionLog[".viewFields"][] = "DateTime";
$tdataTransactionLog[".viewFields"][] = "Amount";
$tdataTransactionLog[".viewFields"][] = "Balance";
$tdataTransactionLog[".viewFields"][] = "Description";
$tdataTransactionLog[".viewFields"][] = "LastModifiedBy";
$tdataTransactionLog[".viewFields"][] = "LastModifiedDate";

$tdataTransactionLog[".addFields"] = array();

$tdataTransactionLog[".masterListFields"] = array();
$tdataTransactionLog[".masterListFields"][] = "DebitAccount";
$tdataTransactionLog[".masterListFields"][] = "CreditAccount";
$tdataTransactionLog[".masterListFields"][] = "SelectedClientNo";
$tdataTransactionLog[".masterListFields"][] = "id";
$tdataTransactionLog[".masterListFields"][] = "TransactionNo";
$tdataTransactionLog[".masterListFields"][] = "TransactionType";
$tdataTransactionLog[".masterListFields"][] = "TransactionStatus";
$tdataTransactionLog[".masterListFields"][] = "AccountNumber";
$tdataTransactionLog[".masterListFields"][] = "AccountName";
$tdataTransactionLog[".masterListFields"][] = "AccountType";
$tdataTransactionLog[".masterListFields"][] = "ClientNo";
$tdataTransactionLog[".masterListFields"][] = "DateTime";
$tdataTransactionLog[".masterListFields"][] = "Amount";
$tdataTransactionLog[".masterListFields"][] = "Balance";
$tdataTransactionLog[".masterListFields"][] = "Description";
$tdataTransactionLog[".masterListFields"][] = "LastModifiedBy";
$tdataTransactionLog[".masterListFields"][] = "LastModifiedDate";

$tdataTransactionLog[".inlineAddFields"] = array();

$tdataTransactionLog[".editFields"] = array();

$tdataTransactionLog[".inlineEditFields"] = array();

$tdataTransactionLog[".updateSelectedFields"] = array();


$tdataTransactionLog[".exportFields"] = array();
$tdataTransactionLog[".exportFields"][] = "TransactionNo";
$tdataTransactionLog[".exportFields"][] = "TransactionType";
$tdataTransactionLog[".exportFields"][] = "TransactionStatus";
$tdataTransactionLog[".exportFields"][] = "AccountNumber";
$tdataTransactionLog[".exportFields"][] = "AccountName";
$tdataTransactionLog[".exportFields"][] = "AccountType";
$tdataTransactionLog[".exportFields"][] = "ClientNo";
$tdataTransactionLog[".exportFields"][] = "DateTime";
$tdataTransactionLog[".exportFields"][] = "Amount";
$tdataTransactionLog[".exportFields"][] = "Balance";
$tdataTransactionLog[".exportFields"][] = "Description";
$tdataTransactionLog[".exportFields"][] = "LastModifiedBy";
$tdataTransactionLog[".exportFields"][] = "LastModifiedDate";

$tdataTransactionLog[".importFields"] = array();

$tdataTransactionLog[".printFields"] = array();
$tdataTransactionLog[".printFields"][] = "TransactionNo";
$tdataTransactionLog[".printFields"][] = "TransactionType";
$tdataTransactionLog[".printFields"][] = "TransactionStatus";
$tdataTransactionLog[".printFields"][] = "AccountNumber";
$tdataTransactionLog[".printFields"][] = "AccountName";
$tdataTransactionLog[".printFields"][] = "AccountType";
$tdataTransactionLog[".printFields"][] = "ClientNo";
$tdataTransactionLog[".printFields"][] = "DateTime";
$tdataTransactionLog[".printFields"][] = "Amount";
$tdataTransactionLog[".printFields"][] = "Balance";
$tdataTransactionLog[".printFields"][] = "Description";
$tdataTransactionLog[".printFields"][] = "LastModifiedBy";
$tdataTransactionLog[".printFields"][] = "LastModifiedDate";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","id");
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








	$tdataTransactionLog["id"] = $fdata;
//	DebitAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DebitAccount";
	$fdata["GoodName"] = "DebitAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","DebitAccount");
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








	$tdataTransactionLog["DebitAccount"] = $fdata;
//	CreditAccount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CreditAccount";
	$fdata["GoodName"] = "CreditAccount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","CreditAccount");
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








	$tdataTransactionLog["CreditAccount"] = $fdata;
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","Amount");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["Amount"] = $fdata;
//	DateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DateTime";
	$fdata["GoodName"] = "DateTime";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","DateTime");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["DateTime"] = $fdata;
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","Description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["Description"] = $fdata;
//	TransactionNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TransactionNo";
	$fdata["GoodName"] = "TransactionNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","TransactionNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTransactionLog["TransactionNo"] = $fdata;
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","AccountType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["AccountType"] = $fdata;
//	TransactionStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TransactionStatus";
	$fdata["GoodName"] = "TransactionStatus";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","TransactionStatus");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTransactionLog["TransactionStatus"] = $fdata;
//	TransactionType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TransactionType";
	$fdata["GoodName"] = "TransactionType";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","TransactionType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TransactionType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TransactionType";

	
	
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




	$tdataTransactionLog["TransactionType"] = $fdata;
//	ClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ClientNo";
	$fdata["GoodName"] = "ClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","ClientNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTransactionLog["ClientNo"] = $fdata;
//	AccountNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AccountNumber";
	$fdata["GoodName"] = "AccountNumber";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","AccountNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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

	
	$edata["LookupOrderBy"] = "AccountNumber";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "ClientNo", "lookup" => "ClientNo" );

	
	

	
	
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




	$tdataTransactionLog["AccountNumber"] = $fdata;
//	Balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Balance";
	$fdata["GoodName"] = "Balance";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","Balance");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["Balance"] = $fdata;
//	LastModifiedBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "LastModifiedBy";
	$fdata["GoodName"] = "LastModifiedBy";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","LastModifiedBy");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["LastModifiedBy"] = $fdata;
//	LastModifiedDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LastModifiedDate";
	$fdata["GoodName"] = "LastModifiedDate";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","LastModifiedDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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




	$tdataTransactionLog["LastModifiedDate"] = $fdata;
//	AccountName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "AccountName";
	$fdata["GoodName"] = "AccountName";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","AccountName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	


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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataTransactionLog["AccountName"] = $fdata;
//	SelectedClientNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "SelectedClientNo";
	$fdata["GoodName"] = "SelectedClientNo";
	$fdata["ownerTable"] = "transactions";
	$fdata["Label"] = GetFieldLabel("TransactionLog","SelectedClientNo");
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








	$tdataTransactionLog["SelectedClientNo"] = $fdata;


$tables_data["TransactionLog"]=&$tdataTransactionLog;
$field_labels["TransactionLog"] = &$fieldLabelsTransactionLog;
$fieldToolTips["TransactionLog"] = &$fieldToolTipsTransactionLog;
$page_titles["TransactionLog"] = &$pageTitlesTransactionLog;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["TransactionLog"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["TransactionLog"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_TransactionLog()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  DebitAccount,  CreditAccount,  Amount,  `DateTime`,  Description,  TransactionNo,  AccountType,  TransactionStatus,  TransactionType,  ClientNo,  AccountNumber,  Balance,  LastModifiedBy,  LastModifiedDate,  AccountName,  SelectedClientNo";
$proto0["m_strFrom"] = "FROM transactions";
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
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "TransactionLog";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DebitAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto8["m_sql"] = "DebitAccount";
$proto8["m_srcTableName"] = "TransactionLog";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CreditAccount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto10["m_sql"] = "CreditAccount";
$proto10["m_srcTableName"] = "TransactionLog";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto12["m_sql"] = "Amount";
$proto12["m_srcTableName"] = "TransactionLog";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DateTime",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto14["m_sql"] = "`DateTime`";
$proto14["m_srcTableName"] = "TransactionLog";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto16["m_sql"] = "Description";
$proto16["m_srcTableName"] = "TransactionLog";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto18["m_sql"] = "TransactionNo";
$proto18["m_srcTableName"] = "TransactionLog";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto20["m_sql"] = "AccountType";
$proto20["m_srcTableName"] = "TransactionLog";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionStatus",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto22["m_sql"] = "TransactionStatus";
$proto22["m_srcTableName"] = "TransactionLog";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TransactionType",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto24["m_sql"] = "TransactionType";
$proto24["m_srcTableName"] = "TransactionLog";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto26["m_sql"] = "ClientNo";
$proto26["m_srcTableName"] = "TransactionLog";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountNumber",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto28["m_sql"] = "AccountNumber";
$proto28["m_srcTableName"] = "TransactionLog";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Balance",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto30["m_sql"] = "Balance";
$proto30["m_srcTableName"] = "TransactionLog";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedBy",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto32["m_sql"] = "LastModifiedBy";
$proto32["m_srcTableName"] = "TransactionLog";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "LastModifiedDate",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto34["m_sql"] = "LastModifiedDate";
$proto34["m_srcTableName"] = "TransactionLog";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountName",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto36["m_sql"] = "AccountName";
$proto36["m_srcTableName"] = "TransactionLog";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "SelectedClientNo",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto38["m_sql"] = "SelectedClientNo";
$proto38["m_srcTableName"] = "TransactionLog";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "transactions";
$proto41["m_srcTableName"] = "TransactionLog";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "DebitAccount";
$proto41["m_columns"][] = "CreditAccount";
$proto41["m_columns"][] = "DebitAccountTransactionCharge";
$proto41["m_columns"][] = "CreditAccountTransactionCharge";
$proto41["m_columns"][] = "Amount";
$proto41["m_columns"][] = "DateTime";
$proto41["m_columns"][] = "Description";
$proto41["m_columns"][] = "CashDepositNo";
$proto41["m_columns"][] = "CashDepositorName";
$proto41["m_columns"][] = "CashDepositType";
$proto41["m_columns"][] = "WithdrawlNo";
$proto41["m_columns"][] = "WithdrawlName";
$proto41["m_columns"][] = "WithdrawlType";
$proto41["m_columns"][] = "LoanPaymentNo";
$proto41["m_columns"][] = "LoanPaymentName";
$proto41["m_columns"][] = "LoanPaymentPurpose";
$proto41["m_columns"][] = "LoanCreditPaymentNo";
$proto41["m_columns"][] = "LoanCreditPaymentName";
$proto41["m_columns"][] = "LoanCreditPaymentPurpose";
$proto41["m_columns"][] = "AccountType";
$proto41["m_columns"][] = "InterestAmount";
$proto41["m_columns"][] = "PrincipalAmount";
$proto41["m_columns"][] = "WithdrawlStatus";
$proto41["m_columns"][] = "NEFTTransferStatus";
$proto41["m_columns"][] = "LoanCreditApplicationStatus";
$proto41["m_columns"][] = "LoanCreditWitness";
$proto41["m_columns"][] = "NEFTTransferNo";
$proto41["m_columns"][] = "NEFTTransferDepositorName";
$proto41["m_columns"][] = "TransactionType";
$proto41["m_columns"][] = "Balance";
$proto41["m_columns"][] = "AccountNumber";
$proto41["m_columns"][] = "ClientNo";
$proto41["m_columns"][] = "LastModifiedBy";
$proto41["m_columns"][] = "LastModifiedDate";
$proto41["m_columns"][] = "AccountName";
$proto41["m_columns"][] = "TransactionNo";
$proto41["m_columns"][] = "TransactionStatus";
$proto41["m_columns"][] = "SelectedClientNo";
$proto41["m_columns"][] = "LoanPaymentStatus";
$proto41["m_columns"][] = "CashDepositStatus";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "transactions";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "TransactionLog";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "transactions",
	"m_srcTableName" => "TransactionLog"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="TransactionLog";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_TransactionLog = createSqlQuery_TransactionLog();


	
		;

																	

$tdataTransactionLog[".sqlquery"] = $queryData_TransactionLog;

$tableEvents["TransactionLog"] = new eventsBase;
$tdataTransactionLog[".hasEvents"] = false;

?>