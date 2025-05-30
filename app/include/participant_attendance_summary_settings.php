<?php
$tdataparticipant_attendance_summary = array();
$tdataparticipant_attendance_summary[".searchableFields"] = array();
$tdataparticipant_attendance_summary[".ShortName"] = "participant_attendance_summary";
$tdataparticipant_attendance_summary[".OwnerID"] = "";
$tdataparticipant_attendance_summary[".OriginalTable"] = "public.participant_attendance_summary";


$tdataparticipant_attendance_summary[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataparticipant_attendance_summary[".originalPagesByType"] = $tdataparticipant_attendance_summary[".pagesByType"];
$tdataparticipant_attendance_summary[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataparticipant_attendance_summary[".originalPages"] = $tdataparticipant_attendance_summary[".pages"];
$tdataparticipant_attendance_summary[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataparticipant_attendance_summary[".originalDefaultPages"] = $tdataparticipant_attendance_summary[".defaultPages"];

//	field labels
$fieldLabelsparticipant_attendance_summary = array();
$fieldToolTipsparticipant_attendance_summary = array();
$pageTitlesparticipant_attendance_summary = array();
$placeHoldersparticipant_attendance_summary = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparticipant_attendance_summary["English"] = array();
	$fieldToolTipsparticipant_attendance_summary["English"] = array();
	$placeHoldersparticipant_attendance_summary["English"] = array();
	$pageTitlesparticipant_attendance_summary["English"] = array();
	$fieldLabelsparticipant_attendance_summary["English"]["participant_id"] = "Participant Id";
	$fieldToolTipsparticipant_attendance_summary["English"]["participant_id"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["participant_id"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["training_id"] = "Training Session";
	$fieldToolTipsparticipant_attendance_summary["English"]["training_id"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["training_id"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["first_name"] = "First Name";
	$fieldToolTipsparticipant_attendance_summary["English"]["first_name"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["first_name"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["last_name"] = "Last Name";
	$fieldToolTipsparticipant_attendance_summary["English"]["last_name"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["last_name"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["email"] = "Email";
	$fieldToolTipsparticipant_attendance_summary["English"]["email"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["email"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["training_name"] = "Training Name";
	$fieldToolTipsparticipant_attendance_summary["English"]["training_name"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["training_name"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["start_date"] = "Start Date";
	$fieldToolTipsparticipant_attendance_summary["English"]["start_date"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["start_date"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["end_date"] = "End Date";
	$fieldToolTipsparticipant_attendance_summary["English"]["end_date"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["end_date"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["total_days"] = "Total Days";
	$fieldToolTipsparticipant_attendance_summary["English"]["total_days"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["total_days"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["days_recorded"] = "Days Recorded";
	$fieldToolTipsparticipant_attendance_summary["English"]["days_recorded"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["days_recorded"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["days_attended"] = "Days Attended";
	$fieldToolTipsparticipant_attendance_summary["English"]["days_attended"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["days_attended"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["attendance_percentage"] = "Attendance Percentage (%)";
	$fieldToolTipsparticipant_attendance_summary["English"]["attendance_percentage"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["attendance_percentage"] = "";
	$fieldLabelsparticipant_attendance_summary["English"]["attendance_status"] = "Attendance Status";
	$fieldToolTipsparticipant_attendance_summary["English"]["attendance_status"] = "";
	$placeHoldersparticipant_attendance_summary["English"]["attendance_status"] = "";
	if (count($fieldToolTipsparticipant_attendance_summary["English"]))
		$tdataparticipant_attendance_summary[".isUseToolTips"] = true;
}


	$tdataparticipant_attendance_summary[".NCSearch"] = true;



$tdataparticipant_attendance_summary[".shortTableName"] = "participant_attendance_summary";
$tdataparticipant_attendance_summary[".nSecOptions"] = 0;

$tdataparticipant_attendance_summary[".mainTableOwnerID"] = "";
$tdataparticipant_attendance_summary[".entityType"] = 0;
$tdataparticipant_attendance_summary[".connId"] = "lifebox_mesystem_at_localhost";


$tdataparticipant_attendance_summary[".strOriginalTableName"] = "public.participant_attendance_summary";

	



$tdataparticipant_attendance_summary[".showAddInPopup"] = false;

$tdataparticipant_attendance_summary[".showEditInPopup"] = false;

$tdataparticipant_attendance_summary[".showViewInPopup"] = false;

$tdataparticipant_attendance_summary[".listAjax"] = false;
//	temporary
//$tdataparticipant_attendance_summary[".listAjax"] = false;

	$tdataparticipant_attendance_summary[".audit"] = false;

	$tdataparticipant_attendance_summary[".locking"] = false;


$pages = $tdataparticipant_attendance_summary[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataparticipant_attendance_summary[".edit"] = true;
	$tdataparticipant_attendance_summary[".afterEditAction"] = 1;
	$tdataparticipant_attendance_summary[".closePopupAfterEdit"] = 1;
	$tdataparticipant_attendance_summary[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataparticipant_attendance_summary[".add"] = true;
$tdataparticipant_attendance_summary[".afterAddAction"] = 1;
$tdataparticipant_attendance_summary[".closePopupAfterAdd"] = 1;
$tdataparticipant_attendance_summary[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataparticipant_attendance_summary[".list"] = true;
}



$tdataparticipant_attendance_summary[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataparticipant_attendance_summary[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataparticipant_attendance_summary[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataparticipant_attendance_summary[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataparticipant_attendance_summary[".printFriendly"] = true;
}



$tdataparticipant_attendance_summary[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataparticipant_attendance_summary[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataparticipant_attendance_summary[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataparticipant_attendance_summary[".isUseAjaxSuggest"] = true;





$tdataparticipant_attendance_summary[".ajaxCodeSnippetAdded"] = false;

$tdataparticipant_attendance_summary[".buttonsAdded"] = false;

$tdataparticipant_attendance_summary[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparticipant_attendance_summary[".isUseTimeForSearch"] = false;


$tdataparticipant_attendance_summary[".badgeColor"] = "2F4F4F";


$tdataparticipant_attendance_summary[".allSearchFields"] = array();
$tdataparticipant_attendance_summary[".filterFields"] = array();
$tdataparticipant_attendance_summary[".requiredSearchFields"] = array();

$tdataparticipant_attendance_summary[".googleLikeFields"] = array();
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "participant_id";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "training_id";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "first_name";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "last_name";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "email";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "training_name";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "start_date";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "end_date";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "total_days";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "days_recorded";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "days_attended";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "attendance_percentage";
$tdataparticipant_attendance_summary[".googleLikeFields"][] = "attendance_status";



$tdataparticipant_attendance_summary[".tableType"] = "list";

$tdataparticipant_attendance_summary[".printerPageOrientation"] = 0;
$tdataparticipant_attendance_summary[".nPrinterPageScale"] = 100;

$tdataparticipant_attendance_summary[".nPrinterSplitRecords"] = 40;

$tdataparticipant_attendance_summary[".geocodingEnabled"] = false;










$tdataparticipant_attendance_summary[".pageSize"] = 20;

$tdataparticipant_attendance_summary[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataparticipant_attendance_summary[".strOrderBy"] = $tstrOrderBy;

$tdataparticipant_attendance_summary[".orderindexes"] = array();


$tdataparticipant_attendance_summary[".sqlHead"] = "SELECT participant_id,  	training_id,  	first_name,  	last_name,  	email,  	training_name,  	start_date,  	end_date,  	total_days,  	days_recorded,  	days_attended,  	attendance_percentage,  	attendance_status";
$tdataparticipant_attendance_summary[".sqlFrom"] = "FROM \"public\".participant_attendance_summary";
$tdataparticipant_attendance_summary[".sqlWhereExpr"] = "";
$tdataparticipant_attendance_summary[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparticipant_attendance_summary[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparticipant_attendance_summary[".arrGroupsPerPage"] = $arrGPP;

$tdataparticipant_attendance_summary[".highlightSearchResults"] = true;

$tableKeysparticipant_attendance_summary = array();
$tdataparticipant_attendance_summary[".Keys"] = $tableKeysparticipant_attendance_summary;


$tdataparticipant_attendance_summary[".hideMobileList"] = array();




//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","participant_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "participant_id";

		$fdata["sourceSingle"] = "participant_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participant_id";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataparticipant_attendance_summary["participant_id"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "participant_id";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","training_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_id";

		$fdata["sourceSingle"] = "training_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_id";

	
	
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
	$edata["LookupTable"] = "public.training_sessions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "training_details";

	

	
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


	$tdataparticipant_attendance_summary["training_id"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "training_id";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","first_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "first_name";

		$fdata["sourceSingle"] = "first_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataparticipant_attendance_summary["first_name"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "first_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

		$fdata["sourceSingle"] = "last_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataparticipant_attendance_summary["last_name"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "last_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataparticipant_attendance_summary["email"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "email";
//	training_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "training_name";
	$fdata["GoodName"] = "training_name";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","training_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "training_name";

		$fdata["sourceSingle"] = "training_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "training_name";

	
	
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


	$tdataparticipant_attendance_summary["training_name"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "training_name";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

		$fdata["sourceSingle"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "start_date";

	
	
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


	$tdataparticipant_attendance_summary["start_date"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

		$fdata["sourceSingle"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_date";

	
	
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


	$tdataparticipant_attendance_summary["end_date"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "end_date";
//	total_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "total_days";
	$fdata["GoodName"] = "total_days";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","total_days");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_days";

		$fdata["sourceSingle"] = "total_days";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_days";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataparticipant_attendance_summary["total_days"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "total_days";
//	days_recorded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "days_recorded";
	$fdata["GoodName"] = "days_recorded";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","days_recorded");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "days_recorded";

		$fdata["sourceSingle"] = "days_recorded";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "days_recorded";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataparticipant_attendance_summary["days_recorded"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "days_recorded";
//	days_attended
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "days_attended";
	$fdata["GoodName"] = "days_attended";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","days_attended");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "days_attended";

		$fdata["sourceSingle"] = "days_attended";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "days_attended";

	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataparticipant_attendance_summary["days_attended"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "days_attended";
//	attendance_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "attendance_percentage";
	$fdata["GoodName"] = "attendance_percentage";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","attendance_percentage");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "attendance_percentage";

		$fdata["sourceSingle"] = "attendance_percentage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attendance_percentage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdataparticipant_attendance_summary["attendance_percentage"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "attendance_percentage";
//	attendance_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "attendance_status";
	$fdata["GoodName"] = "attendance_status";
	$fdata["ownerTable"] = "public.participant_attendance_summary";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_summary","attendance_status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "attendance_status";

		$fdata["sourceSingle"] = "attendance_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attendance_status";

	
	
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


	$tdataparticipant_attendance_summary["attendance_status"] = $fdata;
		$tdataparticipant_attendance_summary[".searchableFields"][] = "attendance_status";


$tables_data["public.participant_attendance_summary"]=&$tdataparticipant_attendance_summary;
$field_labels["public_participant_attendance_summary"] = &$fieldLabelsparticipant_attendance_summary;
$fieldToolTips["public_participant_attendance_summary"] = &$fieldToolTipsparticipant_attendance_summary;
$placeHolders["public_participant_attendance_summary"] = &$placeHoldersparticipant_attendance_summary;
$page_titles["public_participant_attendance_summary"] = &$pageTitlesparticipant_attendance_summary;


changeTextControlsToDate( "public.participant_attendance_summary" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.participant_attendance_summary"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.participant_attendance_summary"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_participant_attendance_summary()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participant_id,  	training_id,  	first_name,  	last_name,  	email,  	training_name,  	start_date,  	end_date,  	total_days,  	days_recorded,  	days_attended,  	attendance_percentage,  	attendance_status";
$proto0["m_strFrom"] = "FROM \"public\".participant_attendance_summary";
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
	"m_strName" => "participant_id",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto6["m_sql"] = "participant_id";
$proto6["m_srcTableName"] = "public.participant_attendance_summary";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto8["m_sql"] = "training_id";
$proto8["m_srcTableName"] = "public.participant_attendance_summary";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto10["m_sql"] = "first_name";
$proto10["m_srcTableName"] = "public.participant_attendance_summary";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto12["m_sql"] = "last_name";
$proto12["m_srcTableName"] = "public.participant_attendance_summary";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "public.participant_attendance_summary";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "training_name",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto16["m_sql"] = "training_name";
$proto16["m_srcTableName"] = "public.participant_attendance_summary";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto18["m_sql"] = "start_date";
$proto18["m_srcTableName"] = "public.participant_attendance_summary";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto20["m_sql"] = "end_date";
$proto20["m_srcTableName"] = "public.participant_attendance_summary";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "total_days",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto22["m_sql"] = "total_days";
$proto22["m_srcTableName"] = "public.participant_attendance_summary";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "days_recorded",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto24["m_sql"] = "days_recorded";
$proto24["m_srcTableName"] = "public.participant_attendance_summary";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "days_attended",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto26["m_sql"] = "days_attended";
$proto26["m_srcTableName"] = "public.participant_attendance_summary";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance_percentage",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto28["m_sql"] = "attendance_percentage";
$proto28["m_srcTableName"] = "public.participant_attendance_summary";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance_status",
	"m_strTable" => "public.participant_attendance_summary",
	"m_srcTableName" => "public.participant_attendance_summary"
));

$proto30["m_sql"] = "attendance_status";
$proto30["m_srcTableName"] = "public.participant_attendance_summary";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "public.participant_attendance_summary";
$proto33["m_srcTableName"] = "public.participant_attendance_summary";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "participant_id";
$proto33["m_columns"][] = "training_id";
$proto33["m_columns"][] = "first_name";
$proto33["m_columns"][] = "last_name";
$proto33["m_columns"][] = "email";
$proto33["m_columns"][] = "training_name";
$proto33["m_columns"][] = "start_date";
$proto33["m_columns"][] = "end_date";
$proto33["m_columns"][] = "total_days";
$proto33["m_columns"][] = "days_recorded";
$proto33["m_columns"][] = "days_attended";
$proto33["m_columns"][] = "attendance_percentage";
$proto33["m_columns"][] = "attendance_status";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "\"public\".participant_attendance_summary";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "public.participant_attendance_summary";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.participant_attendance_summary";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_participant_attendance_summary = createSqlQuery_participant_attendance_summary();


	
		;

													

$tdataparticipant_attendance_summary[".sqlquery"] = $queryData_participant_attendance_summary;



$tdataparticipant_attendance_summary[".hasEvents"] = false;

?>