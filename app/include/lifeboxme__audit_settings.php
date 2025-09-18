<?php
$tdatalifeboxme__audit = array();
$tdatalifeboxme__audit[".searchableFields"] = array();
$tdatalifeboxme__audit[".ShortName"] = "lifeboxme__audit";
$tdatalifeboxme__audit[".OwnerID"] = "";
$tdatalifeboxme__audit[".OriginalTable"] = "public.lifeboxme__audit";


$tdatalifeboxme__audit[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalifeboxme__audit[".originalPagesByType"] = $tdatalifeboxme__audit[".pagesByType"];
$tdatalifeboxme__audit[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalifeboxme__audit[".originalPages"] = $tdatalifeboxme__audit[".pages"];
$tdatalifeboxme__audit[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalifeboxme__audit[".originalDefaultPages"] = $tdatalifeboxme__audit[".defaultPages"];

//	field labels
$fieldLabelslifeboxme__audit = array();
$fieldToolTipslifeboxme__audit = array();
$pageTitleslifeboxme__audit = array();
$placeHolderslifeboxme__audit = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifeboxme__audit["English"] = array();
	$fieldToolTipslifeboxme__audit["English"] = array();
	$placeHolderslifeboxme__audit["English"] = array();
	$pageTitleslifeboxme__audit["English"] = array();
	$fieldLabelslifeboxme__audit["English"]["id"] = "Id";
	$fieldToolTipslifeboxme__audit["English"]["id"] = "";
	$placeHolderslifeboxme__audit["English"]["id"] = "";
	$fieldLabelslifeboxme__audit["English"]["datetime"] = "Datetime";
	$fieldToolTipslifeboxme__audit["English"]["datetime"] = "";
	$placeHolderslifeboxme__audit["English"]["datetime"] = "";
	$fieldLabelslifeboxme__audit["English"]["ip"] = "Ip";
	$fieldToolTipslifeboxme__audit["English"]["ip"] = "";
	$placeHolderslifeboxme__audit["English"]["ip"] = "";
	$fieldLabelslifeboxme__audit["English"]["user"] = "User";
	$fieldToolTipslifeboxme__audit["English"]["user"] = "";
	$placeHolderslifeboxme__audit["English"]["user"] = "";
	$fieldLabelslifeboxme__audit["English"]["table"] = "Table";
	$fieldToolTipslifeboxme__audit["English"]["table"] = "";
	$placeHolderslifeboxme__audit["English"]["table"] = "";
	$fieldLabelslifeboxme__audit["English"]["action"] = "Action";
	$fieldToolTipslifeboxme__audit["English"]["action"] = "";
	$placeHolderslifeboxme__audit["English"]["action"] = "";
	$fieldLabelslifeboxme__audit["English"]["description"] = "Description";
	$fieldToolTipslifeboxme__audit["English"]["description"] = "";
	$placeHolderslifeboxme__audit["English"]["description"] = "";
	if (count($fieldToolTipslifeboxme__audit["English"]))
		$tdatalifeboxme__audit[".isUseToolTips"] = true;
}


	$tdatalifeboxme__audit[".NCSearch"] = true;



$tdatalifeboxme__audit[".shortTableName"] = "lifeboxme__audit";
$tdatalifeboxme__audit[".nSecOptions"] = 0;

$tdatalifeboxme__audit[".mainTableOwnerID"] = "";
$tdatalifeboxme__audit[".entityType"] = 0;
$tdatalifeboxme__audit[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalifeboxme__audit[".strOriginalTableName"] = "public.lifeboxme__audit";

	



$tdatalifeboxme__audit[".showAddInPopup"] = false;

$tdatalifeboxme__audit[".showEditInPopup"] = false;

$tdatalifeboxme__audit[".showViewInPopup"] = false;

$tdatalifeboxme__audit[".listAjax"] = false;
//	temporary
//$tdatalifeboxme__audit[".listAjax"] = false;

	$tdatalifeboxme__audit[".audit"] = true;

	$tdatalifeboxme__audit[".locking"] = false;


$pages = $tdatalifeboxme__audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifeboxme__audit[".edit"] = true;
	$tdatalifeboxme__audit[".afterEditAction"] = 1;
	$tdatalifeboxme__audit[".closePopupAfterEdit"] = 1;
	$tdatalifeboxme__audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifeboxme__audit[".add"] = true;
$tdatalifeboxme__audit[".afterAddAction"] = 1;
$tdatalifeboxme__audit[".closePopupAfterAdd"] = 1;
$tdatalifeboxme__audit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifeboxme__audit[".list"] = true;
}



$tdatalifeboxme__audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifeboxme__audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifeboxme__audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifeboxme__audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifeboxme__audit[".printFriendly"] = true;
}



$tdatalifeboxme__audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifeboxme__audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifeboxme__audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifeboxme__audit[".isUseAjaxSuggest"] = true;



			

$tdatalifeboxme__audit[".ajaxCodeSnippetAdded"] = false;

$tdatalifeboxme__audit[".buttonsAdded"] = false;

$tdatalifeboxme__audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifeboxme__audit[".isUseTimeForSearch"] = false;


$tdatalifeboxme__audit[".badgeColor"] = "5F9EA0";


$tdatalifeboxme__audit[".allSearchFields"] = array();
$tdatalifeboxme__audit[".filterFields"] = array();
$tdatalifeboxme__audit[".requiredSearchFields"] = array();

$tdatalifeboxme__audit[".googleLikeFields"] = array();
$tdatalifeboxme__audit[".googleLikeFields"][] = "id";
$tdatalifeboxme__audit[".googleLikeFields"][] = "datetime";
$tdatalifeboxme__audit[".googleLikeFields"][] = "ip";
$tdatalifeboxme__audit[".googleLikeFields"][] = "user";
$tdatalifeboxme__audit[".googleLikeFields"][] = "table";
$tdatalifeboxme__audit[".googleLikeFields"][] = "action";
$tdatalifeboxme__audit[".googleLikeFields"][] = "description";



$tdatalifeboxme__audit[".tableType"] = "list";

$tdatalifeboxme__audit[".printerPageOrientation"] = 0;
$tdatalifeboxme__audit[".nPrinterPageScale"] = 100;

$tdatalifeboxme__audit[".nPrinterSplitRecords"] = 40;

$tdatalifeboxme__audit[".geocodingEnabled"] = false;










$tdatalifeboxme__audit[".pageSize"] = 20;

$tdatalifeboxme__audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifeboxme__audit[".strOrderBy"] = $tstrOrderBy;

$tdatalifeboxme__audit[".orderindexes"] = array();


$tdatalifeboxme__audit[".sqlHead"] = "SELECT id,  	\"datetime\",  	ip,  	\"user\",  	\"table\",  	\"action\",  	description";
$tdatalifeboxme__audit[".sqlFrom"] = "FROM \"public\".lifeboxme__audit";
$tdatalifeboxme__audit[".sqlWhereExpr"] = "";
$tdatalifeboxme__audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifeboxme__audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifeboxme__audit[".arrGroupsPerPage"] = $arrGPP;

$tdatalifeboxme__audit[".highlightSearchResults"] = true;

$tableKeyslifeboxme__audit = array();
$tableKeyslifeboxme__audit[] = "id";
$tdatalifeboxme__audit[".Keys"] = $tableKeyslifeboxme__audit;


$tdatalifeboxme__audit[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","id");
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


	$tdatalifeboxme__audit["id"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "id";
//	datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "datetime";
	$fdata["GoodName"] = "datetime";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","datetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datetime";

		$fdata["sourceSingle"] = "datetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"datetime\"";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


	$tdatalifeboxme__audit["datetime"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "datetime";
//	ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ip";
	$fdata["GoodName"] = "ip";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ip";

		$fdata["sourceSingle"] = "ip";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lifeboxme__audit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ip";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ip";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme__audit["ip"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "ip";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

		$fdata["sourceSingle"] = "user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"user\"";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lifeboxme__audit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "user";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "user";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme__audit["user"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "user";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "table";

		$fdata["sourceSingle"] = "table";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"table\"";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lifeboxme__audit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "table";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "table";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme__audit["table"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "table";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","action");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "action";

		$fdata["sourceSingle"] = "action";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"action\"";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.lifeboxme__audit";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "action";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "action";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalifeboxme__audit["action"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "action";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "public.lifeboxme__audit";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__audit","description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "description";

		$fdata["sourceSingle"] = "description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatalifeboxme__audit["description"] = $fdata;
		$tdatalifeboxme__audit[".searchableFields"][] = "description";


$tables_data["public.lifeboxme__audit"]=&$tdatalifeboxme__audit;
$field_labels["public_lifeboxme__audit"] = &$fieldLabelslifeboxme__audit;
$fieldToolTips["public_lifeboxme__audit"] = &$fieldToolTipslifeboxme__audit;
$placeHolders["public_lifeboxme__audit"] = &$placeHolderslifeboxme__audit;
$page_titles["public_lifeboxme__audit"] = &$pageTitleslifeboxme__audit;


changeTextControlsToDate( "public.lifeboxme__audit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lifeboxme__audit"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lifeboxme__audit"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lifeboxme__audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	\"datetime\",  	ip,  	\"user\",  	\"table\",  	\"action\",  	description";
$proto0["m_strFrom"] = "FROM \"public\".lifeboxme__audit";
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
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.lifeboxme__audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "datetime",
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto8["m_sql"] = "\"datetime\"";
$proto8["m_srcTableName"] = "public.lifeboxme__audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ip",
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto10["m_sql"] = "ip";
$proto10["m_srcTableName"] = "public.lifeboxme__audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto12["m_sql"] = "\"user\"";
$proto12["m_srcTableName"] = "public.lifeboxme__audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto14["m_sql"] = "\"table\"";
$proto14["m_srcTableName"] = "public.lifeboxme__audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto16["m_sql"] = "\"action\"";
$proto16["m_srcTableName"] = "public.lifeboxme__audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "public.lifeboxme__audit",
	"m_srcTableName" => "public.lifeboxme__audit"
));

$proto18["m_sql"] = "description";
$proto18["m_srcTableName"] = "public.lifeboxme__audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.lifeboxme__audit";
$proto21["m_srcTableName"] = "public.lifeboxme__audit";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "datetime";
$proto21["m_columns"][] = "ip";
$proto21["m_columns"][] = "user";
$proto21["m_columns"][] = "table";
$proto21["m_columns"][] = "action";
$proto21["m_columns"][] = "description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".lifeboxme__audit";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.lifeboxme__audit";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lifeboxme__audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lifeboxme__audit = createSqlQuery_lifeboxme__audit();


	
				;

							

$tdatalifeboxme__audit[".sqlquery"] = $queryData_lifeboxme__audit;



$tdatalifeboxme__audit[".hasEvents"] = false;

?>