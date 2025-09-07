<?php
$tdatasmtp = array();
$tdatasmtp[".searchableFields"] = array();
$tdatasmtp[".ShortName"] = "smtp";
$tdatasmtp[".OwnerID"] = "";
$tdatasmtp[".OriginalTable"] = "public.smtp";


$tdatasmtp[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasmtp[".originalPagesByType"] = $tdatasmtp[".pagesByType"];
$tdatasmtp[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasmtp[".originalPages"] = $tdatasmtp[".pages"];
$tdatasmtp[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasmtp[".originalDefaultPages"] = $tdatasmtp[".defaultPages"];

//	field labels
$fieldLabelssmtp = array();
$fieldToolTipssmtp = array();
$pageTitlessmtp = array();
$placeHolderssmtp = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssmtp["English"] = array();
	$fieldToolTipssmtp["English"] = array();
	$placeHolderssmtp["English"] = array();
	$pageTitlessmtp["English"] = array();
	$fieldLabelssmtp["English"]["id"] = "Id";
	$fieldToolTipssmtp["English"]["id"] = "";
	$placeHolderssmtp["English"]["id"] = "";
	$fieldLabelssmtp["English"]["username"] = "Username";
	$fieldToolTipssmtp["English"]["username"] = "";
	$placeHolderssmtp["English"]["username"] = "";
	$fieldLabelssmtp["English"]["host"] = "Host";
	$fieldToolTipssmtp["English"]["host"] = "";
	$placeHolderssmtp["English"]["host"] = "";
	$fieldLabelssmtp["English"]["port"] = "Port";
	$fieldToolTipssmtp["English"]["port"] = "";
	$placeHolderssmtp["English"]["port"] = "";
	$fieldLabelssmtp["English"]["password"] = "Password";
	$fieldToolTipssmtp["English"]["password"] = "";
	$placeHolderssmtp["English"]["password"] = "";
	$fieldLabelssmtp["English"]["smtpfrom"] = "SMTP From";
	$fieldToolTipssmtp["English"]["smtpfrom"] = "";
	$placeHolderssmtp["English"]["smtpfrom"] = "";
	$fieldLabelssmtp["English"]["secure"] = "Secure";
	$fieldToolTipssmtp["English"]["secure"] = "";
	$placeHolderssmtp["English"]["secure"] = "";
	$fieldLabelssmtp["English"]["created_at"] = "Created At";
	$fieldToolTipssmtp["English"]["created_at"] = "";
	$placeHolderssmtp["English"]["created_at"] = "";
	$fieldLabelssmtp["English"]["updated_at"] = "Updated At";
	$fieldToolTipssmtp["English"]["updated_at"] = "";
	$placeHolderssmtp["English"]["updated_at"] = "";
	if (count($fieldToolTipssmtp["English"]))
		$tdatasmtp[".isUseToolTips"] = true;
}


	$tdatasmtp[".NCSearch"] = true;



$tdatasmtp[".shortTableName"] = "smtp";
$tdatasmtp[".nSecOptions"] = 0;

$tdatasmtp[".mainTableOwnerID"] = "";
$tdatasmtp[".entityType"] = 0;
$tdatasmtp[".connId"] = "lifebox_mesystem_at_localhost";


$tdatasmtp[".strOriginalTableName"] = "public.smtp";

	



$tdatasmtp[".showAddInPopup"] = false;

$tdatasmtp[".showEditInPopup"] = false;

$tdatasmtp[".showViewInPopup"] = false;

$tdatasmtp[".listAjax"] = false;
//	temporary
//$tdatasmtp[".listAjax"] = false;

	$tdatasmtp[".audit"] = true;

	$tdatasmtp[".locking"] = false;


$pages = $tdatasmtp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasmtp[".edit"] = true;
	$tdatasmtp[".afterEditAction"] = 1;
	$tdatasmtp[".closePopupAfterEdit"] = 1;
	$tdatasmtp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasmtp[".add"] = true;
$tdatasmtp[".afterAddAction"] = 1;
$tdatasmtp[".closePopupAfterAdd"] = 1;
$tdatasmtp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasmtp[".list"] = true;
}



$tdatasmtp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasmtp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasmtp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasmtp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasmtp[".printFriendly"] = true;
}



$tdatasmtp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasmtp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasmtp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasmtp[".isUseAjaxSuggest"] = true;





$tdatasmtp[".ajaxCodeSnippetAdded"] = false;

$tdatasmtp[".buttonsAdded"] = false;

$tdatasmtp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasmtp[".isUseTimeForSearch"] = false;


$tdatasmtp[".badgeColor"] = "2F4F4F";


$tdatasmtp[".allSearchFields"] = array();
$tdatasmtp[".filterFields"] = array();
$tdatasmtp[".requiredSearchFields"] = array();

$tdatasmtp[".googleLikeFields"] = array();
$tdatasmtp[".googleLikeFields"][] = "id";
$tdatasmtp[".googleLikeFields"][] = "username";
$tdatasmtp[".googleLikeFields"][] = "host";
$tdatasmtp[".googleLikeFields"][] = "port";
$tdatasmtp[".googleLikeFields"][] = "password";
$tdatasmtp[".googleLikeFields"][] = "smtpfrom";
$tdatasmtp[".googleLikeFields"][] = "secure";
$tdatasmtp[".googleLikeFields"][] = "created_at";
$tdatasmtp[".googleLikeFields"][] = "updated_at";



$tdatasmtp[".tableType"] = "list";

$tdatasmtp[".printerPageOrientation"] = 0;
$tdatasmtp[".nPrinterPageScale"] = 100;

$tdatasmtp[".nPrinterSplitRecords"] = 40;

$tdatasmtp[".geocodingEnabled"] = false;










$tdatasmtp[".pageSize"] = 20;

$tdatasmtp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasmtp[".strOrderBy"] = $tstrOrderBy;

$tdatasmtp[".orderindexes"] = array();


$tdatasmtp[".sqlHead"] = "SELECT id,  	username,  	\"host\",  	port,  	password,  	smtpfrom,  	secure,  	created_at,  	updated_at";
$tdatasmtp[".sqlFrom"] = "FROM \"public\".smtp";
$tdatasmtp[".sqlWhereExpr"] = "";
$tdatasmtp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasmtp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasmtp[".arrGroupsPerPage"] = $arrGPP;

$tdatasmtp[".highlightSearchResults"] = true;

$tableKeyssmtp = array();
$tableKeyssmtp[] = "id";
$tdatasmtp[".Keys"] = $tableKeyssmtp;


$tdatasmtp[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["id"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["username"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "username";
//	host
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "host";
	$fdata["GoodName"] = "host";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","host");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "host";

		$fdata["sourceSingle"] = "host";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"host\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["host"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "host";
//	port
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "port";
	$fdata["GoodName"] = "port";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","port");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "port";

		$fdata["sourceSingle"] = "port";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "port";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["port"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "port";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "password";

		$fdata["sourceSingle"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["password"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "password";
//	smtpfrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "smtpfrom";
	$fdata["GoodName"] = "smtpfrom";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","smtpfrom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "smtpfrom";

		$fdata["sourceSingle"] = "smtpfrom";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "smtpfrom";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["smtpfrom"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "smtpfrom";
//	secure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "secure";
	$fdata["GoodName"] = "secure";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","secure");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "secure";

		$fdata["sourceSingle"] = "secure";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "secure";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["secure"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "secure";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["created_at"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.smtp";
	$fdata["Label"] = GetFieldLabel("public_smtp","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasmtp["updated_at"] = $fdata;
		$tdatasmtp[".searchableFields"][] = "updated_at";


$tables_data["public.smtp"]=&$tdatasmtp;
$field_labels["public_smtp"] = &$fieldLabelssmtp;
$fieldToolTips["public_smtp"] = &$fieldToolTipssmtp;
$placeHolders["public_smtp"] = &$placeHolderssmtp;
$page_titles["public_smtp"] = &$pageTitlessmtp;


changeTextControlsToDate( "public.smtp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.smtp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.smtp"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_smtp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	username,  	\"host\",  	port,  	password,  	smtpfrom,  	secure,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".smtp";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.smtp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "public.smtp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "host",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto10["m_sql"] = "\"host\"";
$proto10["m_srcTableName"] = "public.smtp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "port",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto12["m_sql"] = "port";
$proto12["m_srcTableName"] = "public.smtp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto14["m_sql"] = "password";
$proto14["m_srcTableName"] = "public.smtp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "smtpfrom",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto16["m_sql"] = "smtpfrom";
$proto16["m_srcTableName"] = "public.smtp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "secure",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto18["m_sql"] = "secure";
$proto18["m_srcTableName"] = "public.smtp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto20["m_sql"] = "created_at";
$proto20["m_srcTableName"] = "public.smtp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.smtp",
	"m_srcTableName" => "public.smtp"
));

$proto22["m_sql"] = "updated_at";
$proto22["m_srcTableName"] = "public.smtp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.smtp";
$proto25["m_srcTableName"] = "public.smtp";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "username";
$proto25["m_columns"][] = "host";
$proto25["m_columns"][] = "port";
$proto25["m_columns"][] = "password";
$proto25["m_columns"][] = "smtpfrom";
$proto25["m_columns"][] = "secure";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".smtp";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.smtp";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.smtp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_smtp = createSqlQuery_smtp();


	
				;

									

$tdatasmtp[".sqlquery"] = $queryData_smtp;



$tdatasmtp[".hasEvents"] = false;

?>