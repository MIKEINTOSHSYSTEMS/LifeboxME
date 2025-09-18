<?php
$tdatalifeboxme__locking = array();
$tdatalifeboxme__locking[".searchableFields"] = array();
$tdatalifeboxme__locking[".ShortName"] = "lifeboxme__locking";
$tdatalifeboxme__locking[".OwnerID"] = "";
$tdatalifeboxme__locking[".OriginalTable"] = "public.lifeboxme__locking";


$tdatalifeboxme__locking[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalifeboxme__locking[".originalPagesByType"] = $tdatalifeboxme__locking[".pagesByType"];
$tdatalifeboxme__locking[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalifeboxme__locking[".originalPages"] = $tdatalifeboxme__locking[".pages"];
$tdatalifeboxme__locking[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalifeboxme__locking[".originalDefaultPages"] = $tdatalifeboxme__locking[".defaultPages"];

//	field labels
$fieldLabelslifeboxme__locking = array();
$fieldToolTipslifeboxme__locking = array();
$pageTitleslifeboxme__locking = array();
$placeHolderslifeboxme__locking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslifeboxme__locking["English"] = array();
	$fieldToolTipslifeboxme__locking["English"] = array();
	$placeHolderslifeboxme__locking["English"] = array();
	$pageTitleslifeboxme__locking["English"] = array();
	$fieldLabelslifeboxme__locking["English"]["id"] = "Id";
	$fieldToolTipslifeboxme__locking["English"]["id"] = "";
	$placeHolderslifeboxme__locking["English"]["id"] = "";
	$fieldLabelslifeboxme__locking["English"]["table"] = "Table";
	$fieldToolTipslifeboxme__locking["English"]["table"] = "";
	$placeHolderslifeboxme__locking["English"]["table"] = "";
	$fieldLabelslifeboxme__locking["English"]["startdatetime"] = "Startdatetime";
	$fieldToolTipslifeboxme__locking["English"]["startdatetime"] = "";
	$placeHolderslifeboxme__locking["English"]["startdatetime"] = "";
	$fieldLabelslifeboxme__locking["English"]["confirmdatetime"] = "Confirmdatetime";
	$fieldToolTipslifeboxme__locking["English"]["confirmdatetime"] = "";
	$placeHolderslifeboxme__locking["English"]["confirmdatetime"] = "";
	$fieldLabelslifeboxme__locking["English"]["keys"] = "Keys";
	$fieldToolTipslifeboxme__locking["English"]["keys"] = "";
	$placeHolderslifeboxme__locking["English"]["keys"] = "";
	$fieldLabelslifeboxme__locking["English"]["sessionid"] = "Sessionid";
	$fieldToolTipslifeboxme__locking["English"]["sessionid"] = "";
	$placeHolderslifeboxme__locking["English"]["sessionid"] = "";
	$fieldLabelslifeboxme__locking["English"]["userid"] = "Userid";
	$fieldToolTipslifeboxme__locking["English"]["userid"] = "";
	$placeHolderslifeboxme__locking["English"]["userid"] = "";
	$fieldLabelslifeboxme__locking["English"]["action"] = "Action";
	$fieldToolTipslifeboxme__locking["English"]["action"] = "";
	$placeHolderslifeboxme__locking["English"]["action"] = "";
	if (count($fieldToolTipslifeboxme__locking["English"]))
		$tdatalifeboxme__locking[".isUseToolTips"] = true;
}


	$tdatalifeboxme__locking[".NCSearch"] = true;



$tdatalifeboxme__locking[".shortTableName"] = "lifeboxme__locking";
$tdatalifeboxme__locking[".nSecOptions"] = 0;

$tdatalifeboxme__locking[".mainTableOwnerID"] = "";
$tdatalifeboxme__locking[".entityType"] = 0;
$tdatalifeboxme__locking[".connId"] = "lifebox_mesystem_at_localhost";


$tdatalifeboxme__locking[".strOriginalTableName"] = "public.lifeboxme__locking";

	



$tdatalifeboxme__locking[".showAddInPopup"] = false;

$tdatalifeboxme__locking[".showEditInPopup"] = false;

$tdatalifeboxme__locking[".showViewInPopup"] = false;

$tdatalifeboxme__locking[".listAjax"] = false;
//	temporary
//$tdatalifeboxme__locking[".listAjax"] = false;

	$tdatalifeboxme__locking[".audit"] = true;

	$tdatalifeboxme__locking[".locking"] = false;


$pages = $tdatalifeboxme__locking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalifeboxme__locking[".edit"] = true;
	$tdatalifeboxme__locking[".afterEditAction"] = 1;
	$tdatalifeboxme__locking[".closePopupAfterEdit"] = 1;
	$tdatalifeboxme__locking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalifeboxme__locking[".add"] = true;
$tdatalifeboxme__locking[".afterAddAction"] = 1;
$tdatalifeboxme__locking[".closePopupAfterAdd"] = 1;
$tdatalifeboxme__locking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalifeboxme__locking[".list"] = true;
}



$tdatalifeboxme__locking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalifeboxme__locking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalifeboxme__locking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalifeboxme__locking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalifeboxme__locking[".printFriendly"] = true;
}



$tdatalifeboxme__locking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalifeboxme__locking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalifeboxme__locking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalifeboxme__locking[".isUseAjaxSuggest"] = true;



			

$tdatalifeboxme__locking[".ajaxCodeSnippetAdded"] = false;

$tdatalifeboxme__locking[".buttonsAdded"] = false;

$tdatalifeboxme__locking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalifeboxme__locking[".isUseTimeForSearch"] = false;


$tdatalifeboxme__locking[".badgeColor"] = "E07878";


$tdatalifeboxme__locking[".allSearchFields"] = array();
$tdatalifeboxme__locking[".filterFields"] = array();
$tdatalifeboxme__locking[".requiredSearchFields"] = array();

$tdatalifeboxme__locking[".googleLikeFields"] = array();
$tdatalifeboxme__locking[".googleLikeFields"][] = "id";
$tdatalifeboxme__locking[".googleLikeFields"][] = "table";
$tdatalifeboxme__locking[".googleLikeFields"][] = "startdatetime";
$tdatalifeboxme__locking[".googleLikeFields"][] = "confirmdatetime";
$tdatalifeboxme__locking[".googleLikeFields"][] = "keys";
$tdatalifeboxme__locking[".googleLikeFields"][] = "sessionid";
$tdatalifeboxme__locking[".googleLikeFields"][] = "userid";
$tdatalifeboxme__locking[".googleLikeFields"][] = "action";



$tdatalifeboxme__locking[".tableType"] = "list";

$tdatalifeboxme__locking[".printerPageOrientation"] = 0;
$tdatalifeboxme__locking[".nPrinterPageScale"] = 100;

$tdatalifeboxme__locking[".nPrinterSplitRecords"] = 40;

$tdatalifeboxme__locking[".geocodingEnabled"] = false;










$tdatalifeboxme__locking[".pageSize"] = 20;

$tdatalifeboxme__locking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalifeboxme__locking[".strOrderBy"] = $tstrOrderBy;

$tdatalifeboxme__locking[".orderindexes"] = array();


$tdatalifeboxme__locking[".sqlHead"] = "SELECT id,  	\"table\",  	startdatetime,  	confirmdatetime,  	\"keys\",  	sessionid,  	userid,  	\"action\"";
$tdatalifeboxme__locking[".sqlFrom"] = "FROM \"public\".lifeboxme__locking";
$tdatalifeboxme__locking[".sqlWhereExpr"] = "";
$tdatalifeboxme__locking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalifeboxme__locking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalifeboxme__locking[".arrGroupsPerPage"] = $arrGPP;

$tdatalifeboxme__locking[".highlightSearchResults"] = true;

$tableKeyslifeboxme__locking = array();
$tableKeyslifeboxme__locking[] = "id";
$tdatalifeboxme__locking[".Keys"] = $tableKeyslifeboxme__locking;


$tdatalifeboxme__locking[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","id");
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


	$tdatalifeboxme__locking["id"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "id";
//	table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "table";
	$fdata["GoodName"] = "table";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","table");
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
	$edata["LookupTable"] = "public.lifeboxme__locking";
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


	$tdatalifeboxme__locking["table"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "table";
//	startdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "startdatetime";
	$fdata["GoodName"] = "startdatetime";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","startdatetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "startdatetime";

		$fdata["sourceSingle"] = "startdatetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "startdatetime";

	
	
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


	$tdatalifeboxme__locking["startdatetime"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "startdatetime";
//	confirmdatetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "confirmdatetime";
	$fdata["GoodName"] = "confirmdatetime";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","confirmdatetime");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "confirmdatetime";

		$fdata["sourceSingle"] = "confirmdatetime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confirmdatetime";

	
	
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


	$tdatalifeboxme__locking["confirmdatetime"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "confirmdatetime";
//	keys
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "keys";
	$fdata["GoodName"] = "keys";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","keys");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "keys";

		$fdata["sourceSingle"] = "keys";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"keys\"";

	
	
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


	$tdatalifeboxme__locking["keys"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "keys";
//	sessionid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sessionid";
	$fdata["GoodName"] = "sessionid";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","sessionid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sessionid";

		$fdata["sourceSingle"] = "sessionid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sessionid";

	
	
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


	$tdatalifeboxme__locking["sessionid"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "sessionid";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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
	$edata["LookupTable"] = "public.lifeboxme__locking";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "userid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "userid";

	

	
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


	$tdatalifeboxme__locking["userid"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "userid";
//	action
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "action";
	$fdata["GoodName"] = "action";
	$fdata["ownerTable"] = "public.lifeboxme__locking";
	$fdata["Label"] = GetFieldLabel("public_lifeboxme__locking","action");
	$fdata["FieldType"] = 3;


	
	
			

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
	$edata["LookupTable"] = "public.lifeboxme__locking";
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


	$tdatalifeboxme__locking["action"] = $fdata;
		$tdatalifeboxme__locking[".searchableFields"][] = "action";


$tables_data["public.lifeboxme__locking"]=&$tdatalifeboxme__locking;
$field_labels["public_lifeboxme__locking"] = &$fieldLabelslifeboxme__locking;
$fieldToolTips["public_lifeboxme__locking"] = &$fieldToolTipslifeboxme__locking;
$placeHolders["public_lifeboxme__locking"] = &$placeHolderslifeboxme__locking;
$page_titles["public_lifeboxme__locking"] = &$pageTitleslifeboxme__locking;


changeTextControlsToDate( "public.lifeboxme__locking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.lifeboxme__locking"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.lifeboxme__locking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_lifeboxme__locking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	\"table\",  	startdatetime,  	confirmdatetime,  	\"keys\",  	sessionid,  	userid,  	\"action\"";
$proto0["m_strFrom"] = "FROM \"public\".lifeboxme__locking";
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
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "public.lifeboxme__locking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "table",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto8["m_sql"] = "\"table\"";
$proto8["m_srcTableName"] = "public.lifeboxme__locking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "startdatetime",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto10["m_sql"] = "startdatetime";
$proto10["m_srcTableName"] = "public.lifeboxme__locking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmdatetime",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto12["m_sql"] = "confirmdatetime";
$proto12["m_srcTableName"] = "public.lifeboxme__locking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "keys",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto14["m_sql"] = "\"keys\"";
$proto14["m_srcTableName"] = "public.lifeboxme__locking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sessionid",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto16["m_sql"] = "sessionid";
$proto16["m_srcTableName"] = "public.lifeboxme__locking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto18["m_sql"] = "userid";
$proto18["m_srcTableName"] = "public.lifeboxme__locking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "action",
	"m_strTable" => "public.lifeboxme__locking",
	"m_srcTableName" => "public.lifeboxme__locking"
));

$proto20["m_sql"] = "\"action\"";
$proto20["m_srcTableName"] = "public.lifeboxme__locking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.lifeboxme__locking";
$proto23["m_srcTableName"] = "public.lifeboxme__locking";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "table";
$proto23["m_columns"][] = "startdatetime";
$proto23["m_columns"][] = "confirmdatetime";
$proto23["m_columns"][] = "keys";
$proto23["m_columns"][] = "sessionid";
$proto23["m_columns"][] = "userid";
$proto23["m_columns"][] = "action";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".lifeboxme__locking";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.lifeboxme__locking";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.lifeboxme__locking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_lifeboxme__locking = createSqlQuery_lifeboxme__locking();


	
				;

								

$tdatalifeboxme__locking[".sqlquery"] = $queryData_lifeboxme__locking;



$tdatalifeboxme__locking[".hasEvents"] = false;

?>