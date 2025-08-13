<?php
$tdatatraining_sessions = array();
$tdatatraining_sessions[".searchableFields"] = array();
$tdatatraining_sessions[".ShortName"] = "training_sessions";
$tdatatraining_sessions[".OwnerID"] = "";
$tdatatraining_sessions[".OriginalTable"] = "public.training_sessions";


$tdatatraining_sessions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_sessions[".originalPagesByType"] = $tdatatraining_sessions[".pagesByType"];
$tdatatraining_sessions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_sessions[".originalPages"] = $tdatatraining_sessions[".pages"];
$tdatatraining_sessions[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_sessions[".originalDefaultPages"] = $tdatatraining_sessions[".defaultPages"];

//	field labels
$fieldLabelstraining_sessions = array();
$fieldToolTipstraining_sessions = array();
$pageTitlestraining_sessions = array();
$placeHolderstraining_sessions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_sessions["English"] = array();
	$fieldToolTipstraining_sessions["English"] = array();
	$placeHolderstraining_sessions["English"] = array();
	$pageTitlestraining_sessions["English"] = array();
	$fieldLabelstraining_sessions["English"]["training_id"] = "Training SeID";
	$fieldToolTipstraining_sessions["English"]["training_id"] = "";
	$placeHolderstraining_sessions["English"]["training_id"] = "";
	$fieldLabelstraining_sessions["English"]["course_id"] = "Course";
	$fieldToolTipstraining_sessions["English"]["course_id"] = "";
	$placeHolderstraining_sessions["English"]["course_id"] = "";
	$fieldLabelstraining_sessions["English"]["quarter"] = "Quarter";
	$fieldToolTipstraining_sessions["English"]["quarter"] = "";
	$placeHolderstraining_sessions["English"]["quarter"] = "";
	$fieldLabelstraining_sessions["English"]["start_date"] = "Start Date";
	$fieldToolTipstraining_sessions["English"]["start_date"] = "";
	$placeHolderstraining_sessions["English"]["start_date"] = "";
	$fieldLabelstraining_sessions["English"]["end_date"] = "End Date";
	$fieldToolTipstraining_sessions["English"]["end_date"] = "";
	$placeHolderstraining_sessions["English"]["end_date"] = "";
	$fieldLabelstraining_sessions["English"]["facility_id"] = "Facility Id";
	$fieldToolTipstraining_sessions["English"]["facility_id"] = "";
	$placeHolderstraining_sessions["English"]["facility_id"] = "";
	$fieldLabelstraining_sessions["English"]["host_country_id"] = "Host Country";
	$fieldToolTipstraining_sessions["English"]["host_country_id"] = "";
	$placeHolderstraining_sessions["English"]["host_country_id"] = "";
	$fieldLabelstraining_sessions["English"]["ceu_points"] = "Ceu Points";
	$fieldToolTipstraining_sessions["English"]["ceu_points"] = "";
	$placeHolderstraining_sessions["English"]["ceu_points"] = "";
	$fieldLabelstraining_sessions["English"]["num_participants"] = "Num Participants";
	$fieldToolTipstraining_sessions["English"]["num_participants"] = "";
	$placeHolderstraining_sessions["English"]["num_participants"] = "";
	$fieldLabelstraining_sessions["English"]["avg_pre_test_score"] = "Avg Pre Test Score";
	$fieldToolTipstraining_sessions["English"]["avg_pre_test_score"] = "";
	$placeHolderstraining_sessions["English"]["avg_pre_test_score"] = "";
	$fieldLabelstraining_sessions["English"]["avg_post_test_score"] = "Avg Post Test Score";
	$fieldToolTipstraining_sessions["English"]["avg_post_test_score"] = "";
	$placeHolderstraining_sessions["English"]["avg_post_test_score"] = "";
	$fieldLabelstraining_sessions["English"]["remarks"] = "Remarks";
	$fieldToolTipstraining_sessions["English"]["remarks"] = "";
	$placeHolderstraining_sessions["English"]["remarks"] = "";
	$fieldLabelstraining_sessions["English"]["created_at"] = "Created At";
	$fieldToolTipstraining_sessions["English"]["created_at"] = "";
	$placeHolderstraining_sessions["English"]["created_at"] = "";
	$fieldLabelstraining_sessions["English"]["updated_at"] = "Updated At";
	$fieldToolTipstraining_sessions["English"]["updated_at"] = "";
	$placeHolderstraining_sessions["English"]["updated_at"] = "";
	$fieldLabelstraining_sessions["English"]["training_type_id"] = "Training Type";
	$fieldToolTipstraining_sessions["English"]["training_type_id"] = "";
	$placeHolderstraining_sessions["English"]["training_type_id"] = "";
	$fieldLabelstraining_sessions["English"]["approach_id"] = "Training Approach";
	$fieldToolTipstraining_sessions["English"]["approach_id"] = "";
	$placeHolderstraining_sessions["English"]["approach_id"] = "";
	$fieldLabelstraining_sessions["English"]["program_id"] = "Program";
	$fieldToolTipstraining_sessions["English"]["program_id"] = "";
	$placeHolderstraining_sessions["English"]["program_id"] = "";
	$fieldLabelstraining_sessions["English"]["training_details"] = "Training Details";
	$fieldToolTipstraining_sessions["English"]["training_details"] = "";
	$placeHolderstraining_sessions["English"]["training_details"] = "";
	$fieldLabelstraining_sessions["English"]["venue_id"] = "Venue";
	$fieldToolTipstraining_sessions["English"]["venue_id"] = "";
	$placeHolderstraining_sessions["English"]["venue_id"] = "";
	if (count($fieldToolTipstraining_sessions["English"]))
		$tdatatraining_sessions[".isUseToolTips"] = true;
}


	$tdatatraining_sessions[".NCSearch"] = true;



$tdatatraining_sessions[".shortTableName"] = "training_sessions";
$tdatatraining_sessions[".nSecOptions"] = 0;

$tdatatraining_sessions[".mainTableOwnerID"] = "";
$tdatatraining_sessions[".entityType"] = 0;
$tdatatraining_sessions[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_sessions[".strOriginalTableName"] = "public.training_sessions";

	



$tdatatraining_sessions[".showAddInPopup"] = false;

$tdatatraining_sessions[".showEditInPopup"] = false;

$tdatatraining_sessions[".showViewInPopup"] = false;

$tdatatraining_sessions[".listAjax"] = false;
//	temporary
//$tdatatraining_sessions[".listAjax"] = false;

	$tdatatraining_sessions[".audit"] = false;

	$tdatatraining_sessions[".locking"] = false;


$pages = $tdatatraining_sessions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_sessions[".edit"] = true;
	$tdatatraining_sessions[".afterEditAction"] = 1;
	$tdatatraining_sessions[".closePopupAfterEdit"] = 1;
	$tdatatraining_sessions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_sessions[".add"] = true;
$tdatatraining_sessions[".afterAddAction"] = 1;
$tdatatraining_sessions[".closePopupAfterAdd"] = 1;
$tdatatraining_sessions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_sessions[".list"] = true;
}



$tdatatraining_sessions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_sessions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_sessions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_sessions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_sessions[".printFriendly"] = true;
}



$tdatatraining_sessions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_sessions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_sessions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_sessions[".isUseAjaxSuggest"] = true;





$tdatatraining_sessions[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_sessions[".buttonsAdded"] = false;

$tdatatraining_sessions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_sessions[".isUseTimeForSearch"] = false;


$tdatatraining_sessions[".badgeColor"] = "2f4f4f";


$tdatatraining_sessions[".allSearchFields"] = array();
$tdatatraining_sessions[".filterFields"] = array();
$tdatatraining_sessions[".requiredSearchFields"] = array();

$tdatatraining_sessions[".googleLikeFields"] = array();
$tdatatraining_sessions[".googleLikeFields"][] = "training_id";
$tdatatraining_sessions[".googleLikeFields"][] = "course_id";
$tdatatraining_sessions[".googleLikeFields"][] = "training_type_id";
$tdatatraining_sessions[".googleLikeFields"][] = "approach_id";
$tdatatraining_sessions[".googleLikeFields"][] = "program_id";
$tdatatraining_sessions[".googleLikeFields"][] = "quarter";
$tdatatraining_sessions[".googleLikeFields"][] = "start_date";
$tdatatraining_sessions[".googleLikeFields"][] = "end_date";
$tdatatraining_sessions[".googleLikeFields"][] = "facility_id";
$tdatatraining_sessions[".googleLikeFields"][] = "host_country_id";
$tdatatraining_sessions[".googleLikeFields"][] = "venue_id";
$tdatatraining_sessions[".googleLikeFields"][] = "ceu_points";
$tdatatraining_sessions[".googleLikeFields"][] = "num_participants";
$tdatatraining_sessions[".googleLikeFields"][] = "avg_pre_test_score";
$tdatatraining_sessions[".googleLikeFields"][] = "avg_post_test_score";
$tdatatraining_sessions[".googleLikeFields"][] = "remarks";
$tdatatraining_sessions[".googleLikeFields"][] = "training_details";
$tdatatraining_sessions[".googleLikeFields"][] = "created_at";
$tdatatraining_sessions[".googleLikeFields"][] = "updated_at";



$tdatatraining_sessions[".tableType"] = "list";

$tdatatraining_sessions[".printerPageOrientation"] = 0;
$tdatatraining_sessions[".nPrinterPageScale"] = 100;

$tdatatraining_sessions[".nPrinterSplitRecords"] = 40;

$tdatatraining_sessions[".geocodingEnabled"] = false;




$tdatatraining_sessions[".isDisplayLoading"] = true;






$tdatatraining_sessions[".pageSize"] = 20;

$tdatatraining_sessions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_sessions[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_sessions[".orderindexes"] = array();


$tdatatraining_sessions[".sqlHead"] = "SELECT \"public\".training_sessions.training_id,  \"public\".training_sessions.course_id,  \"public\".training_sessions.training_type_id,  \"public\".training_sessions.approach_id,  \"public\".training_sessions.program_id,  \"public\".training_sessions.quarter,  \"public\".training_sessions.start_date,  \"public\".training_sessions.end_date,  \"public\".training_sessions.facility_id,  \"public\".training_sessions.host_country_id,  \"public\".training_sessions.venue_id,  \"public\".training_sessions.ceu_points,  CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants          ELSE training_sessions.num_participants      END AS num_participants,  CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score          ELSE training_sessions.avg_pre_test_score      END AS avg_pre_test_score,  CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score          ELSE training_sessions.avg_post_test_score      END AS avg_post_test_score,  \"public\".training_sessions.remarks,  CONCAT('Training ID: ', training_sessions.training_id, ' | ', 'Course Name: ', training_courses.course_name, ' | ', 'Program Name: ', programs.program_name, ' | ', 'Program ID: ', training_sessions.program_id, ' | ', 'Quarter: ', training_sessions.quarter, ' | ', 'Start Date: ', training_sessions.start_date, ' | ', 'End Date: ', training_sessions.end_date) AS training_details,  \"public\".training_sessions.created_at,  \"public\".training_sessions.updated_at";
$tdatatraining_sessions[".sqlFrom"] = "FROM \"public\".training_sessions  INNER JOIN \"public\".training_courses ON \"public\".training_sessions.course_id = \"public\".training_courses.course_id  INNER JOIN \"public\".programs ON \"public\".training_sessions.program_id = \"public\".programs.program_id  LEFT OUTER JOIN \"public\".training_summary_view ON \"public\".training_sessions.training_id = \"public\".training_summary_view.training_id";
$tdatatraining_sessions[".sqlWhereExpr"] = "";
$tdatatraining_sessions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_sessions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_sessions[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_sessions[".highlightSearchResults"] = true;

$tableKeystraining_sessions = array();
$tableKeystraining_sessions[] = "training_id";
$tdatatraining_sessions[".Keys"] = $tableKeystraining_sessions;


$tdatatraining_sessions[".hideMobileList"] = array();




//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","training_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_id";

		$fdata["sourceSingle"] = "training_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.training_id";

	
	
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


	$tdatatraining_sessions["training_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "training_id";
//	course_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "course_id";
	$fdata["GoodName"] = "course_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","course_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "course_id";

		$fdata["sourceSingle"] = "course_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.course_id";

	
	
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
	$edata["LookupTable"] = "public.training_courses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "course_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "course_name";

	

	
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


	$tdatatraining_sessions["course_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "course_id";
//	training_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "training_type_id";
	$fdata["GoodName"] = "training_type_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","training_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_type_id";

		$fdata["sourceSingle"] = "training_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.training_type_id";

	
	
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
	$edata["LookupTable"] = "public.training_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_type_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "type_name";

	

	
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


	$tdatatraining_sessions["training_type_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "training_type_id";
//	approach_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "approach_id";
	$fdata["GoodName"] = "approach_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","approach_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "approach_id";

		$fdata["sourceSingle"] = "approach_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.approach_id";

	
	
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
	$edata["LookupTable"] = "public.training_approaches";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "approach_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "approach_name";

	

	
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


	$tdatatraining_sessions["approach_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "approach_id";
//	program_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "program_id";
	$fdata["GoodName"] = "program_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","program_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "program_id";

		$fdata["sourceSingle"] = "program_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.program_id";

	
	
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
	$edata["LookupTable"] = "public.programs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "program_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "program_name";

	

	
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


	$tdatatraining_sessions["program_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "program_id";
//	quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "quarter";
	$fdata["GoodName"] = "quarter";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","quarter");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "quarter";

		$fdata["sourceSingle"] = "quarter";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.quarter";

	
	
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
	$edata["LookupTable"] = "public.quarters";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "quarter_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "quarter_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_sessions["quarter"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "quarter";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

		$fdata["sourceSingle"] = "start_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.start_date";

	
	
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


	$tdatatraining_sessions["start_date"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

		$fdata["sourceSingle"] = "end_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.end_date";

	
	
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


	$tdatatraining_sessions["end_date"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "end_date";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","facility_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "facility_id";

		$fdata["sourceSingle"] = "facility_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.facility_id";

	
	
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
	$edata["LookupTable"] = "public.facilities";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "facility_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "facility_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatatraining_sessions["facility_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "facility_id";
//	host_country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "host_country_id";
	$fdata["GoodName"] = "host_country_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","host_country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "host_country_id";

		$fdata["sourceSingle"] = "host_country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.host_country_id";

	
	
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
	$edata["LookupTable"] = "public.countries";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "country_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

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


	$tdatatraining_sessions["host_country_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "host_country_id";
//	venue_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "venue_id";
	$fdata["GoodName"] = "venue_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","venue_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "venue_id";

		$fdata["sourceSingle"] = "venue_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.venue_id";

	
	
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
	$edata["LookupTable"] = "public.venues";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "venue_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "venue_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatatraining_sessions["venue_id"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "venue_id";
//	ceu_points
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ceu_points";
	$fdata["GoodName"] = "ceu_points";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","ceu_points");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ceu_points";

		$fdata["sourceSingle"] = "ceu_points";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.ceu_points";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatraining_sessions["ceu_points"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "ceu_points";
//	num_participants
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "num_participants";
	$fdata["GoodName"] = "num_participants";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","num_participants");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "num_participants";

		$fdata["sourceSingle"] = "num_participants";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants          ELSE training_sessions.num_participants      END";

	
	
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


	$tdatatraining_sessions["num_participants"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "num_participants";
//	avg_pre_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "avg_pre_test_score";
	$fdata["GoodName"] = "avg_pre_test_score";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","avg_pre_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "avg_pre_test_score";

		$fdata["sourceSingle"] = "avg_pre_test_score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score          ELSE training_sessions.avg_pre_test_score      END";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatraining_sessions["avg_pre_test_score"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "avg_pre_test_score";
//	avg_post_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "avg_post_test_score";
	$fdata["GoodName"] = "avg_post_test_score";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","avg_post_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "avg_post_test_score";

		$fdata["sourceSingle"] = "avg_post_test_score";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score          ELSE training_sessions.avg_post_test_score      END";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatatraining_sessions["avg_post_test_score"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "avg_post_test_score";
//	remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "remarks";
	$fdata["GoodName"] = "remarks";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","remarks");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "remarks";

		$fdata["sourceSingle"] = "remarks";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.remarks";

	
	
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


	$tdatatraining_sessions["remarks"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "remarks";
//	training_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "training_details";
	$fdata["GoodName"] = "training_details";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","training_details");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "training_details";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT('Training ID: ', training_sessions.training_id, ' | ', 'Course Name: ', training_courses.course_name, ' | ', 'Program Name: ', programs.program_name, ' | ', 'Program ID: ', training_sessions.program_id, ' | ', 'Quarter: ', training_sessions.quarter, ' | ', 'Start Date: ', training_sessions.start_date, ' | ', 'End Date: ', training_sessions.end_date)";

	
	
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


	$tdatatraining_sessions["training_details"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "training_details";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.created_at";

	
	
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


	$tdatatraining_sessions["created_at"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_sessions","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"public\".training_sessions.updated_at";

	
	
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


	$tdatatraining_sessions["updated_at"] = $fdata;
		$tdatatraining_sessions[".searchableFields"][] = "updated_at";


$tables_data["public.training_sessions"]=&$tdatatraining_sessions;
$field_labels["public_training_sessions"] = &$fieldLabelstraining_sessions;
$fieldToolTips["public_training_sessions"] = &$fieldToolTipstraining_sessions;
$placeHolders["public_training_sessions"] = &$placeHolderstraining_sessions;
$page_titles["public_training_sessions"] = &$pageTitlestraining_sessions;


changeTextControlsToDate( "public.training_sessions" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_sessions"] = array();
//	public.training_languages
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_languages";
		$detailsParam["dOriginalTable"] = "public.training_languages";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_languages";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_languages");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_sessions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"][]="training_id";

				$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"][]="training_id";
//	public.training_leads
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_leads";
		$detailsParam["dOriginalTable"] = "public.training_leads";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_leads";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_leads");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_sessions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"][]="training_id";

				$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"][]="training_id";
//	public.training_partners
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_partners";
		$detailsParam["dOriginalTable"] = "public.training_partners";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_partners";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_partners");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_sessions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"][]="training_id";

				$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"][]="training_id";
//	public.training_trainers
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_trainers";
		$detailsParam["dOriginalTable"] = "public.training_trainers";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_trainers";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_trainers");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_sessions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"][]="training_id";

				$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"][]="training_id";
//	public.training_participation
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.training_participation";
		$detailsParam["dOriginalTable"] = "public.training_participation";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "training_participation";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_training_participation");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.training_sessions"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["masterKeys"][]="training_id";

				$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.training_sessions"][$dIndex]["detailKeys"][]="training_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_sessions"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_courses";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_courses";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_courses";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_sessions"][0] = $masterParams;
				$masterTablesData["public.training_sessions"][0]["masterKeys"] = array();
	$masterTablesData["public.training_sessions"][0]["masterKeys"][]="course_id";
				$masterTablesData["public.training_sessions"][0]["detailKeys"] = array();
	$masterTablesData["public.training_sessions"][0]["detailKeys"][]="course_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_sessions"][1] = $masterParams;
				$masterTablesData["public.training_sessions"][1]["masterKeys"] = array();
	$masterTablesData["public.training_sessions"][1]["masterKeys"][]="facility_id";
				$masterTablesData["public.training_sessions"][1]["detailKeys"] = array();
	$masterTablesData["public.training_sessions"][1]["detailKeys"][]="facility_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.countries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.countries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "countries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_sessions"][2] = $masterParams;
				$masterTablesData["public.training_sessions"][2]["masterKeys"] = array();
	$masterTablesData["public.training_sessions"][2]["masterKeys"][]="country_id";
				$masterTablesData["public.training_sessions"][2]["detailKeys"] = array();
	$masterTablesData["public.training_sessions"][2]["detailKeys"][]="host_country_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.programs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.programs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "programs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_sessions"][3] = $masterParams;
				$masterTablesData["public.training_sessions"][3]["masterKeys"] = array();
	$masterTablesData["public.training_sessions"][3]["masterKeys"][]="program_id";
				$masterTablesData["public.training_sessions"][3]["detailKeys"] = array();
	$masterTablesData["public.training_sessions"][3]["detailKeys"][]="program_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_approaches";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_approaches";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_approaches";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_sessions"][4] = $masterParams;
				$masterTablesData["public.training_sessions"][4]["masterKeys"] = array();
	$masterTablesData["public.training_sessions"][4]["masterKeys"][]="approach_id";
				$masterTablesData["public.training_sessions"][4]["detailKeys"] = array();
	$masterTablesData["public.training_sessions"][4]["detailKeys"][]="approach_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_types";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_types";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_types";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_sessions"][5] = $masterParams;
				$masterTablesData["public.training_sessions"][5]["masterKeys"] = array();
	$masterTablesData["public.training_sessions"][5]["masterKeys"][]="training_type_id";
				$masterTablesData["public.training_sessions"][5]["detailKeys"] = array();
	$masterTablesData["public.training_sessions"][5]["detailKeys"][]="training_type_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_sessions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"public\".training_sessions.training_id,  \"public\".training_sessions.course_id,  \"public\".training_sessions.training_type_id,  \"public\".training_sessions.approach_id,  \"public\".training_sessions.program_id,  \"public\".training_sessions.quarter,  \"public\".training_sessions.start_date,  \"public\".training_sessions.end_date,  \"public\".training_sessions.facility_id,  \"public\".training_sessions.host_country_id,  \"public\".training_sessions.venue_id,  \"public\".training_sessions.ceu_points,  CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants          ELSE training_sessions.num_participants      END AS num_participants,  CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score          ELSE training_sessions.avg_pre_test_score      END AS avg_pre_test_score,  CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score          ELSE training_sessions.avg_post_test_score      END AS avg_post_test_score,  \"public\".training_sessions.remarks,  CONCAT('Training ID: ', training_sessions.training_id, ' | ', 'Course Name: ', training_courses.course_name, ' | ', 'Program Name: ', programs.program_name, ' | ', 'Program ID: ', training_sessions.program_id, ' | ', 'Quarter: ', training_sessions.quarter, ' | ', 'Start Date: ', training_sessions.start_date, ' | ', 'End Date: ', training_sessions.end_date) AS training_details,  \"public\".training_sessions.created_at,  \"public\".training_sessions.updated_at";
$proto0["m_strFrom"] = "FROM \"public\".training_sessions  INNER JOIN \"public\".training_courses ON \"public\".training_sessions.course_id = \"public\".training_courses.course_id  INNER JOIN \"public\".programs ON \"public\".training_sessions.program_id = \"public\".programs.program_id  LEFT OUTER JOIN \"public\".training_summary_view ON \"public\".training_sessions.training_id = \"public\".training_summary_view.training_id";
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
	"m_strName" => "training_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto6["m_sql"] = "\"public\".training_sessions.training_id";
$proto6["m_srcTableName"] = "public.training_sessions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "course_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto8["m_sql"] = "\"public\".training_sessions.course_id";
$proto8["m_srcTableName"] = "public.training_sessions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "training_type_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto10["m_sql"] = "\"public\".training_sessions.training_type_id";
$proto10["m_srcTableName"] = "public.training_sessions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "approach_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto12["m_sql"] = "\"public\".training_sessions.approach_id";
$proto12["m_srcTableName"] = "public.training_sessions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "program_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto14["m_sql"] = "\"public\".training_sessions.program_id";
$proto14["m_srcTableName"] = "public.training_sessions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto16["m_sql"] = "\"public\".training_sessions.quarter";
$proto16["m_srcTableName"] = "public.training_sessions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto18["m_sql"] = "\"public\".training_sessions.start_date";
$proto18["m_srcTableName"] = "public.training_sessions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto20["m_sql"] = "\"public\".training_sessions.end_date";
$proto20["m_srcTableName"] = "public.training_sessions";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto22["m_sql"] = "\"public\".training_sessions.facility_id";
$proto22["m_srcTableName"] = "public.training_sessions";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "host_country_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto24["m_sql"] = "\"public\".training_sessions.host_country_id";
$proto24["m_srcTableName"] = "public.training_sessions";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "venue_id",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto26["m_sql"] = "\"public\".training_sessions.venue_id";
$proto26["m_srcTableName"] = "public.training_sessions";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ceu_points",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto28["m_sql"] = "\"public\".training_sessions.ceu_points";
$proto28["m_srcTableName"] = "public.training_sessions";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants          ELSE training_sessions.num_participants      END"
));

$proto30["m_sql"] = "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants          ELSE training_sessions.num_participants      END";
$proto30["m_srcTableName"] = "public.training_sessions";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "num_participants";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score          ELSE training_sessions.avg_pre_test_score      END"
));

$proto32["m_sql"] = "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score          ELSE training_sessions.avg_pre_test_score      END";
$proto32["m_srcTableName"] = "public.training_sessions";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "avg_pre_test_score";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score          ELSE training_sessions.avg_post_test_score      END"
));

$proto34["m_sql"] = "CASE           WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score          ELSE training_sessions.avg_post_test_score      END";
$proto34["m_srcTableName"] = "public.training_sessions";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "avg_post_test_score";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "remarks",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto36["m_sql"] = "\"public\".training_sessions.remarks";
$proto36["m_srcTableName"] = "public.training_sessions";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$proto39=array();
$proto39["m_functiontype"] = "SQLF_CUSTOM";
$proto39["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Training ID: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "training_sessions.training_id"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Course Name: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "training_courses.course_name"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Program Name: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "programs.program_name"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Program ID: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "training_sessions.program_id"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Quarter: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "training_sessions.quarter"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'Start Date: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "training_sessions.start_date"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' | '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'End Date: '"
));

$proto39["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "training_sessions.end_date"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "CONCAT('Training ID: ', training_sessions.training_id, ' | ', 'Course Name: ', training_courses.course_name, ' | ', 'Program Name: ', programs.program_name, ' | ', 'Program ID: ', training_sessions.program_id, ' | ', 'Quarter: ', training_sessions.quarter, ' | ', 'Start Date: ', training_sessions.start_date, ' | ', 'End Date: ', training_sessions.end_date)";
$proto38["m_srcTableName"] = "public.training_sessions";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "training_details";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto60["m_sql"] = "\"public\".training_sessions.created_at";
$proto60["m_srcTableName"] = "public.training_sessions";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.training_sessions",
	"m_srcTableName" => "public.training_sessions"
));

$proto62["m_sql"] = "\"public\".training_sessions.updated_at";
$proto62["m_srcTableName"] = "public.training_sessions";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "public.training_sessions";
$proto65["m_srcTableName"] = "public.training_sessions";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "training_id";
$proto65["m_columns"][] = "course_id";
$proto65["m_columns"][] = "training_type";
$proto65["m_columns"][] = "training_approach";
$proto65["m_columns"][] = "program";
$proto65["m_columns"][] = "quarter";
$proto65["m_columns"][] = "start_date";
$proto65["m_columns"][] = "end_date";
$proto65["m_columns"][] = "facility_id";
$proto65["m_columns"][] = "host_country_id";
$proto65["m_columns"][] = "ceu_points";
$proto65["m_columns"][] = "num_participants";
$proto65["m_columns"][] = "avg_pre_test_score";
$proto65["m_columns"][] = "avg_post_test_score";
$proto65["m_columns"][] = "remarks";
$proto65["m_columns"][] = "created_at";
$proto65["m_columns"][] = "updated_at";
$proto65["m_columns"][] = "training_type_id";
$proto65["m_columns"][] = "approach_id";
$proto65["m_columns"][] = "program_id";
$proto65["m_columns"][] = "venue_id";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "\"public\".training_sessions";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "public.training_sessions";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_INNERJOIN";
			$proto69=array();
$proto69["m_strName"] = "public.training_courses";
$proto69["m_srcTableName"] = "public.training_sessions";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "course_id";
$proto69["m_columns"][] = "course_name";
$proto69["m_columns"][] = "description";
$proto69["m_columns"][] = "duration_hours";
$proto69["m_columns"][] = "is_active";
$proto69["m_columns"][] = "created_at";
$proto69["m_columns"][] = "updated_at";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "INNER JOIN \"public\".training_courses ON \"public\".training_sessions.course_id = \"public\".training_courses.course_id";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "public.training_sessions";
$proto70=array();
$proto70["m_sql"] = "\"public\".training_courses.course_id = \"public\".training_sessions.course_id";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "course_id",
	"m_strTable" => "public.training_courses",
	"m_srcTableName" => "public.training_sessions"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= \"public\".training_sessions.course_id";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_INNERJOIN";
			$proto73=array();
$proto73["m_strName"] = "public.programs";
$proto73["m_srcTableName"] = "public.training_sessions";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "program_id";
$proto73["m_columns"][] = "program_name";
$proto73["m_columns"][] = "description";
$proto73["m_columns"][] = "is_active";
$proto73["m_columns"][] = "created_at";
$proto73["m_columns"][] = "updated_at";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "INNER JOIN \"public\".programs ON \"public\".training_sessions.program_id = \"public\".programs.program_id";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "public.training_sessions";
$proto74=array();
$proto74["m_sql"] = "\"public\".programs.program_id = \"public\".training_sessions.program_id";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "program_id",
	"m_strTable" => "public.programs",
	"m_srcTableName" => "public.training_sessions"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= \"public\".training_sessions.program_id";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "public.training_summary_view";
$proto77["m_srcTableName"] = "public.training_sessions";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "training_id";
$proto77["m_columns"][] = "course_name";
$proto77["m_columns"][] = "training_type";
$proto77["m_columns"][] = "training_approach";
$proto77["m_columns"][] = "program";
$proto77["m_columns"][] = "quarter";
$proto77["m_columns"][] = "start_date";
$proto77["m_columns"][] = "end_date";
$proto77["m_columns"][] = "facility_name";
$proto77["m_columns"][] = "country_name";
$proto77["m_columns"][] = "region_name";
$proto77["m_columns"][] = "ceu_points";
$proto77["m_columns"][] = "num_participants";
$proto77["m_columns"][] = "avg_pre_test_score";
$proto77["m_columns"][] = "avg_post_test_score";
$proto77["m_columns"][] = "trainers";
$proto77["m_columns"][] = "partners";
$proto77["m_columns"][] = "languages";
$proto77["m_columns"][] = "remarks";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN \"public\".training_summary_view ON \"public\".training_sessions.training_id = \"public\".training_summary_view.training_id";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "public.training_sessions";
$proto78=array();
$proto78["m_sql"] = "\"public\".training_summary_view.training_id = \"public\".training_sessions.training_id";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.training_summary_view",
	"m_srcTableName" => "public.training_sessions"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= \"public\".training_sessions.training_id";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.training_sessions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_sessions = createSqlQuery_training_sessions();


	
				;

																			

$tdatatraining_sessions[".sqlquery"] = $queryData_training_sessions;



$tdatatraining_sessions[".hasEvents"] = false;

?>