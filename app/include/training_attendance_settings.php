<?php
$tdatatraining_attendance = array();
$tdatatraining_attendance[".searchableFields"] = array();
$tdatatraining_attendance[".ShortName"] = "training_attendance";
$tdatatraining_attendance[".OwnerID"] = "";
$tdatatraining_attendance[".OriginalTable"] = "public.training_attendance";


$tdatatraining_attendance[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatraining_attendance[".originalPagesByType"] = $tdatatraining_attendance[".pagesByType"];
$tdatatraining_attendance[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatraining_attendance[".originalPages"] = $tdatatraining_attendance[".pages"];
$tdatatraining_attendance[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatraining_attendance[".originalDefaultPages"] = $tdatatraining_attendance[".defaultPages"];

//	field labels
$fieldLabelstraining_attendance = array();
$fieldToolTipstraining_attendance = array();
$pageTitlestraining_attendance = array();
$placeHolderstraining_attendance = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstraining_attendance["English"] = array();
	$fieldToolTipstraining_attendance["English"] = array();
	$placeHolderstraining_attendance["English"] = array();
	$pageTitlestraining_attendance["English"] = array();
	$fieldLabelstraining_attendance["English"]["attendance_id"] = "Att ID";
	$fieldToolTipstraining_attendance["English"]["attendance_id"] = "";
	$placeHolderstraining_attendance["English"]["attendance_id"] = "";
	$fieldLabelstraining_attendance["English"]["day_number"] = "Day#";
	$fieldToolTipstraining_attendance["English"]["day_number"] = "";
	$placeHolderstraining_attendance["English"]["day_number"] = "";
	$fieldLabelstraining_attendance["English"]["attended"] = "Attended";
	$fieldToolTipstraining_attendance["English"]["attended"] = "";
	$placeHolderstraining_attendance["English"]["attended"] = "";
	$fieldLabelstraining_attendance["English"]["attendance_date"] = "Attendance Date";
	$fieldToolTipstraining_attendance["English"]["attendance_date"] = "";
	$placeHolderstraining_attendance["English"]["attendance_date"] = "";
	$fieldLabelstraining_attendance["English"]["notes"] = "Notes";
	$fieldToolTipstraining_attendance["English"]["notes"] = "";
	$placeHolderstraining_attendance["English"]["notes"] = "";
	$fieldLabelstraining_attendance["English"]["recorded_at"] = "Recorded At";
	$fieldToolTipstraining_attendance["English"]["recorded_at"] = "";
	$placeHolderstraining_attendance["English"]["recorded_at"] = "";
	$fieldLabelstraining_attendance["English"]["recorded_by"] = "Recorded By";
	$fieldToolTipstraining_attendance["English"]["recorded_by"] = "";
	$placeHolderstraining_attendance["English"]["recorded_by"] = "";
	$fieldLabelstraining_attendance["English"]["participation_id"] = "Participation Id";
	$fieldToolTipstraining_attendance["English"]["participation_id"] = "";
	$placeHolderstraining_attendance["English"]["participation_id"] = "";
	$fieldLabelstraining_attendance["English"]["participant_full_name"] = "Training Participant Name";
	$fieldToolTipstraining_attendance["English"]["participant_full_name"] = "";
	$placeHolderstraining_attendance["English"]["participant_full_name"] = "";
	$fieldLabelstraining_attendance["English"]["sex_name"] = "Sex";
	$fieldToolTipstraining_attendance["English"]["sex_name"] = "";
	$placeHolderstraining_attendance["English"]["sex_name"] = "";
	$fieldLabelstraining_attendance["English"]["facility_name"] = "Facility";
	$fieldToolTipstraining_attendance["English"]["facility_name"] = "";
	$placeHolderstraining_attendance["English"]["facility_name"] = "";
	$fieldLabelstraining_attendance["English"]["role_name"] = "Role/Designation";
	$fieldToolTipstraining_attendance["English"]["role_name"] = "";
	$placeHolderstraining_attendance["English"]["role_name"] = "";
	$fieldLabelstraining_attendance["English"]["training_id"] = "Session";
	$fieldToolTipstraining_attendance["English"]["training_id"] = "";
	$placeHolderstraining_attendance["English"]["training_id"] = "";
	$fieldLabelstraining_attendance["English"]["course_name"] = "Training Course";
	$fieldToolTipstraining_attendance["English"]["course_name"] = "";
	$placeHolderstraining_attendance["English"]["course_name"] = "";
	$fieldLabelstraining_attendance["English"]["program_name"] = "Program";
	$fieldToolTipstraining_attendance["English"]["program_name"] = "";
	$placeHolderstraining_attendance["English"]["program_name"] = "";
	$fieldLabelstraining_attendance["English"]["program_id"] = "Program Id";
	$fieldToolTipstraining_attendance["English"]["program_id"] = "";
	$placeHolderstraining_attendance["English"]["program_id"] = "";
	$fieldLabelstraining_attendance["English"]["quarter"] = "Quarter";
	$fieldToolTipstraining_attendance["English"]["quarter"] = "";
	$placeHolderstraining_attendance["English"]["quarter"] = "";
	$fieldLabelstraining_attendance["English"]["start_date"] = "Start Date";
	$fieldToolTipstraining_attendance["English"]["start_date"] = "";
	$placeHolderstraining_attendance["English"]["start_date"] = "";
	$fieldLabelstraining_attendance["English"]["end_date"] = "End Date";
	$fieldToolTipstraining_attendance["English"]["end_date"] = "";
	$placeHolderstraining_attendance["English"]["end_date"] = "";
	$fieldLabelstraining_attendance["English"]["training_type"] = "Training Type";
	$fieldToolTipstraining_attendance["English"]["training_type"] = "";
	$placeHolderstraining_attendance["English"]["training_type"] = "";
	$fieldLabelstraining_attendance["English"]["training_approach"] = "Training Approach";
	$fieldToolTipstraining_attendance["English"]["training_approach"] = "";
	$placeHolderstraining_attendance["English"]["training_approach"] = "";
	$fieldLabelstraining_attendance["English"]["host_country"] = "Host Country";
	$fieldToolTipstraining_attendance["English"]["host_country"] = "";
	$placeHolderstraining_attendance["English"]["host_country"] = "";
	$fieldLabelstraining_attendance["English"]["host_region"] = "Host Region";
	$fieldToolTipstraining_attendance["English"]["host_region"] = "";
	$placeHolderstraining_attendance["English"]["host_region"] = "";
	$fieldLabelstraining_attendance["English"]["venue_name"] = "Venue";
	$fieldToolTipstraining_attendance["English"]["venue_name"] = "";
	$placeHolderstraining_attendance["English"]["venue_name"] = "";
	$fieldLabelstraining_attendance["English"]["partner_name"] = "Partner";
	$fieldToolTipstraining_attendance["English"]["partner_name"] = "";
	$placeHolderstraining_attendance["English"]["partner_name"] = "";
	$fieldLabelstraining_attendance["English"]["training_lead_name"] = "Training Lead";
	$fieldToolTipstraining_attendance["English"]["training_lead_name"] = "";
	$placeHolderstraining_attendance["English"]["training_lead_name"] = "";
	if (count($fieldToolTipstraining_attendance["English"]))
		$tdatatraining_attendance[".isUseToolTips"] = true;
}


	$tdatatraining_attendance[".NCSearch"] = true;



$tdatatraining_attendance[".shortTableName"] = "training_attendance";
$tdatatraining_attendance[".nSecOptions"] = 0;

$tdatatraining_attendance[".mainTableOwnerID"] = "";
$tdatatraining_attendance[".entityType"] = 0;
$tdatatraining_attendance[".connId"] = "lifebox_mesystem_at_localhost";


$tdatatraining_attendance[".strOriginalTableName"] = "public.training_attendance";

	



$tdatatraining_attendance[".showAddInPopup"] = false;

$tdatatraining_attendance[".showEditInPopup"] = false;

$tdatatraining_attendance[".showViewInPopup"] = false;

$tdatatraining_attendance[".listAjax"] = false;
//	temporary
//$tdatatraining_attendance[".listAjax"] = false;

	$tdatatraining_attendance[".audit"] = false;

	$tdatatraining_attendance[".locking"] = false;


$pages = $tdatatraining_attendance[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatraining_attendance[".edit"] = true;
	$tdatatraining_attendance[".afterEditAction"] = 1;
	$tdatatraining_attendance[".closePopupAfterEdit"] = 1;
	$tdatatraining_attendance[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatraining_attendance[".add"] = true;
$tdatatraining_attendance[".afterAddAction"] = 1;
$tdatatraining_attendance[".closePopupAfterAdd"] = 1;
$tdatatraining_attendance[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatraining_attendance[".list"] = true;
}



$tdatatraining_attendance[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatraining_attendance[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatraining_attendance[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatraining_attendance[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatraining_attendance[".printFriendly"] = true;
}



$tdatatraining_attendance[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatraining_attendance[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatraining_attendance[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatraining_attendance[".isUseAjaxSuggest"] = true;





$tdatatraining_attendance[".ajaxCodeSnippetAdded"] = false;

$tdatatraining_attendance[".buttonsAdded"] = false;

$tdatatraining_attendance[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatraining_attendance[".isUseTimeForSearch"] = false;


$tdatatraining_attendance[".badgeColor"] = "d2af80";


$tdatatraining_attendance[".allSearchFields"] = array();
$tdatatraining_attendance[".filterFields"] = array();
$tdatatraining_attendance[".requiredSearchFields"] = array();

$tdatatraining_attendance[".googleLikeFields"] = array();
$tdatatraining_attendance[".googleLikeFields"][] = "attendance_id";
$tdatatraining_attendance[".googleLikeFields"][] = "day_number";
$tdatatraining_attendance[".googleLikeFields"][] = "attended";
$tdatatraining_attendance[".googleLikeFields"][] = "attendance_date";
$tdatatraining_attendance[".googleLikeFields"][] = "notes";
$tdatatraining_attendance[".googleLikeFields"][] = "recorded_at";
$tdatatraining_attendance[".googleLikeFields"][] = "recorded_by";
$tdatatraining_attendance[".googleLikeFields"][] = "participation_id";
$tdatatraining_attendance[".googleLikeFields"][] = "participant_full_name";
$tdatatraining_attendance[".googleLikeFields"][] = "sex_name";
$tdatatraining_attendance[".googleLikeFields"][] = "facility_name";
$tdatatraining_attendance[".googleLikeFields"][] = "role_name";
$tdatatraining_attendance[".googleLikeFields"][] = "training_id";
$tdatatraining_attendance[".googleLikeFields"][] = "course_name";
$tdatatraining_attendance[".googleLikeFields"][] = "program_name";
$tdatatraining_attendance[".googleLikeFields"][] = "program_id";
$tdatatraining_attendance[".googleLikeFields"][] = "quarter";
$tdatatraining_attendance[".googleLikeFields"][] = "start_date";
$tdatatraining_attendance[".googleLikeFields"][] = "end_date";
$tdatatraining_attendance[".googleLikeFields"][] = "training_type";
$tdatatraining_attendance[".googleLikeFields"][] = "training_approach";
$tdatatraining_attendance[".googleLikeFields"][] = "host_country";
$tdatatraining_attendance[".googleLikeFields"][] = "host_region";
$tdatatraining_attendance[".googleLikeFields"][] = "venue_name";
$tdatatraining_attendance[".googleLikeFields"][] = "partner_name";
$tdatatraining_attendance[".googleLikeFields"][] = "training_lead_name";



$tdatatraining_attendance[".tableType"] = "list";

$tdatatraining_attendance[".printerPageOrientation"] = 0;
$tdatatraining_attendance[".nPrinterPageScale"] = 100;

$tdatatraining_attendance[".nPrinterSplitRecords"] = 40;

$tdatatraining_attendance[".geocodingEnabled"] = false;




$tdatatraining_attendance[".isDisplayLoading"] = true;






$tdatatraining_attendance[".pageSize"] = 20;

$tdatatraining_attendance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_attendance[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_attendance[".orderindexes"] = array();


$tdatatraining_attendance[".sqlHead"] = "SELECT ta.attendance_id,  ta.day_number,  ta.attended,  ta.attendance_date,  ta.notes,  ta.recorded_at,  ta.recorded_by,  ta.participation_id,  CONCAT(tpp.title_salutation, ' ', tpp.first_name, ' ', COALESCE(tpp.middle_name || ' ', ''), tpp.last_name) AS participant_full_name,  s.sex_name,  f.facility_name,  pr.role_name,  ts.training_id,  tc.course_name,  p.program_name,  ts.program_id,  ts.quarter,  ts.start_date,  ts.end_date,  tt.type_name AS training_type,  trapp.approach_name AS training_approach,  c.country_name AS host_country,  r.region_name AS host_region,  v.venue_name,  pt.partner_name,  CONCAT(ls.first_name, ' ', ls.last_name) AS training_lead_name";
$tdatatraining_attendance[".sqlFrom"] = "FROM \"public\".training_attendance AS ta  INNER JOIN \"public\".training_participation AS tp ON ta.participation_id = tp.participation_id  INNER JOIN \"public\".training_participants AS tpp ON tp.participant_id = tpp.participant_id  LEFT OUTER JOIN \"public\".sex AS s ON tpp.sex_id = s.sex_id  LEFT OUTER JOIN \"public\".facilities AS f ON tpp.facility_id = f.facility_id  LEFT OUTER JOIN \"public\".participant_role AS pr ON tpp.role_id = pr.role_id  INNER JOIN \"public\".training_sessions AS ts ON tp.training_id = ts.training_id  INNER JOIN \"public\".training_courses AS tc ON ts.course_id = tc.course_id  INNER JOIN \"public\".programs AS p ON ts.program_id = p.program_id  LEFT OUTER JOIN \"public\".training_types AS tt ON ts.training_type_id = tt.training_type_id  LEFT OUTER JOIN \"public\".training_approaches AS trapp ON ts.approach_id = trapp.approach_id  LEFT OUTER JOIN \"public\".countries AS c ON ts.host_country_id = c.country_id  LEFT OUTER JOIN \"public\".regions AS r ON c.region_id = r.region_id  LEFT OUTER JOIN \"public\".venues AS v ON ts.venue_id = v.venue_id  LEFT OUTER JOIN \"public\".training_partners AS tpr ON ts.training_id = tpr.training_id  LEFT OUTER JOIN \"public\".partners AS pt ON tpr.partner_id = pt.partner_id  LEFT OUTER JOIN \"public\".training_leads AS tl ON ts.training_id = tl.training_id  LEFT OUTER JOIN \"public\".lifebox_staff AS ls ON tl.staff_id = ls.staff_id";
$tdatatraining_attendance[".sqlWhereExpr"] = "";
$tdatatraining_attendance[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatraining_attendance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatraining_attendance[".arrGroupsPerPage"] = $arrGPP;

$tdatatraining_attendance[".highlightSearchResults"] = true;

$tableKeystraining_attendance = array();
$tableKeystraining_attendance[] = "attendance_id";
$tdatatraining_attendance[".Keys"] = $tableKeystraining_attendance;


$tdatatraining_attendance[".hideMobileList"] = array();




//	attendance_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "attendance_id";
	$fdata["GoodName"] = "attendance_id";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","attendance_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "attendance_id";

		$fdata["sourceSingle"] = "attendance_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.attendance_id";

	
	
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


	$tdatatraining_attendance["attendance_id"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "attendance_id";
//	day_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "day_number";
	$fdata["GoodName"] = "day_number";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","day_number");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "day_number";

		$fdata["sourceSingle"] = "day_number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.day_number";

	
	
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


	$tdatatraining_attendance["day_number"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "day_number";
//	attended
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "attended";
	$fdata["GoodName"] = "attended";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","attended");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "attended";

		$fdata["sourceSingle"] = "attended";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.attended";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	$fdata["filterTotals"] = 1;
			$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "True";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "False";

//end of Filters settings


	$tdatatraining_attendance["attended"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "attended";
//	attendance_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "attendance_date";
	$fdata["GoodName"] = "attendance_date";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","attendance_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "attendance_date";

		$fdata["sourceSingle"] = "attendance_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.attendance_date";

	
	
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


	$tdatatraining_attendance["attendance_date"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "attendance_date";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","notes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "notes";

		$fdata["sourceSingle"] = "notes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.notes";

	
	
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


	$tdatatraining_attendance["notes"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "notes";
//	recorded_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "recorded_at";
	$fdata["GoodName"] = "recorded_at";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","recorded_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "recorded_at";

		$fdata["sourceSingle"] = "recorded_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.recorded_at";

	
	
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


	$tdatatraining_attendance["recorded_at"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "recorded_at";
//	recorded_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "recorded_by";
	$fdata["GoodName"] = "recorded_by";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","recorded_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "recorded_by";

		$fdata["sourceSingle"] = "recorded_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.recorded_by";

	
	
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


	$tdatatraining_attendance["recorded_by"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "recorded_by";
//	participation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "participation_id";
	$fdata["GoodName"] = "participation_id";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","participation_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "participation_id";

		$fdata["sourceSingle"] = "participation_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ta.participation_id";

	
	
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
	$edata["LookupTable"] = "public.training_participation";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "participation_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "participant_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatatraining_attendance["participation_id"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "participation_id";
//	participant_full_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "participant_full_name";
	$fdata["GoodName"] = "participant_full_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","participant_full_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "participant_full_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(tpp.title_salutation, ' ', tpp.first_name, ' ', COALESCE(tpp.middle_name || ' ', ''), tpp.last_name)";

	
	
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


	$tdatatraining_attendance["participant_full_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "participant_full_name";
//	sex_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sex_name";
	$fdata["GoodName"] = "sex_name";
	$fdata["ownerTable"] = "public.sex";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","sex_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sex_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s.sex_name";

	
	
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
	$edata["LookupTable"] = "public.training_attendance";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "sex_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sex_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["sex_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "sex_name";
//	facility_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "facility_name";
	$fdata["GoodName"] = "facility_name";
	$fdata["ownerTable"] = "public.facilities";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","facility_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "f.facility_name";

	
	
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "facility_name";
	$edata["LinkFieldType"] = 0;
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["facility_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "facility_name";
//	role_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "role_name";
	$fdata["GoodName"] = "role_name";
	$fdata["ownerTable"] = "public.participant_role";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","role_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "role_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pr.role_name";

	
	
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
	$edata["LookupTable"] = "public.participant_role";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "role_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "role_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["role_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "role_name";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","training_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "training_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ts.training_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["training_id"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "training_id";
//	course_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "course_name";
	$fdata["GoodName"] = "course_name";
	$fdata["ownerTable"] = "public.training_courses";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","course_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "course_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tc.course_name";

	
	
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
	$edata["LookupTable"] = "public.training_attendance";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "course_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "course_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["course_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "course_name";
//	program_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "program_name";
	$fdata["GoodName"] = "program_name";
	$fdata["ownerTable"] = "public.programs";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","program_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "program_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "p.program_name";

	
	
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
	$edata["LookupTable"] = "public.training_attendance";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "program_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "program_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["program_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "program_name";
//	program_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "program_id";
	$fdata["GoodName"] = "program_id";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","program_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "program_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ts.program_id";

	
	
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


	$tdatatraining_attendance["program_id"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "program_id";
//	quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "quarter";
	$fdata["GoodName"] = "quarter";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","quarter");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "quarter";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ts.quarter";

	
	
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
	$edata["LookupTable"] = "public.training_attendance";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "quarter";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "quarter";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["quarter"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "quarter";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ts.start_date";

	
	
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


	$tdatatraining_attendance["start_date"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.training_sessions";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ts.end_date";

	
	
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


	$tdatatraining_attendance["end_date"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "end_date";
//	training_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "training_type";
	$fdata["GoodName"] = "training_type";
	$fdata["ownerTable"] = "public.training_types";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","training_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "type_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tt.type_name";

	
	
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

	
		
	$edata["LinkField"] = "type_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "type_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["training_type"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "training_type";
//	training_approach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "training_approach";
	$fdata["GoodName"] = "training_approach";
	$fdata["ownerTable"] = "public.training_approaches";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","training_approach");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "approach_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "trapp.approach_name";

	
	
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

	
		
	$edata["LinkField"] = "approach_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "approach_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["training_approach"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "training_approach";
//	host_country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "host_country";
	$fdata["GoodName"] = "host_country";
	$fdata["ownerTable"] = "public.countries";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","host_country");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "c.country_name";

	
	
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

	
		
	$edata["LinkField"] = "country_name";
	$edata["LinkFieldType"] = 0;
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["host_country"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "host_country";
//	host_region
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "host_region";
	$fdata["GoodName"] = "host_region";
	$fdata["ownerTable"] = "public.regions";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","host_region");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "region_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "r.region_name";

	
	
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
	$edata["LookupTable"] = "public.regions";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "region_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "region_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["host_region"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "host_region";
//	venue_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "venue_name";
	$fdata["GoodName"] = "venue_name";
	$fdata["ownerTable"] = "public.venues";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","venue_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "venue_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v.venue_name";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "venue_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "venue_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["venue_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "venue_name";
//	partner_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "partner_name";
	$fdata["GoodName"] = "partner_name";
	$fdata["ownerTable"] = "public.partners";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","partner_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "partner_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pt.partner_name";

	
	
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
	$edata["LookupTable"] = "public.partners";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "partner_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "partner_name";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["partner_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "partner_name";
//	training_lead_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "training_lead_name";
	$fdata["GoodName"] = "training_lead_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","training_lead_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "training_lead_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(ls.first_name, ' ', ls.last_name)";

	
	
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
	$edata["LookupTable"] = "public.lifebox_staff";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "lifebox_staff_details";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "lifebox_staff_details";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 2;
		$fdata["filterTotalFields"] = "attendance_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatraining_attendance["training_lead_name"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "training_lead_name";


$tables_data["public.training_attendance"]=&$tdatatraining_attendance;
$field_labels["public_training_attendance"] = &$fieldLabelstraining_attendance;
$fieldToolTips["public_training_attendance"] = &$fieldToolTipstraining_attendance;
$placeHolders["public_training_attendance"] = &$placeHolderstraining_attendance;
$page_titles["public_training_attendance"] = &$pageTitlestraining_attendance;


changeTextControlsToDate( "public.training_attendance" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.training_attendance"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.training_attendance"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.training_participation";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_participation";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_participation";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_attendance"][0] = $masterParams;
				$masterTablesData["public.training_attendance"][0]["masterKeys"] = array();
	$masterTablesData["public.training_attendance"][0]["masterKeys"][]="participation_id";
				$masterTablesData["public.training_attendance"][0]["detailKeys"] = array();
	$masterTablesData["public.training_attendance"][0]["detailKeys"][]="participation_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_attendance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ta.attendance_id,  ta.day_number,  ta.attended,  ta.attendance_date,  ta.notes,  ta.recorded_at,  ta.recorded_by,  ta.participation_id,  CONCAT(tpp.title_salutation, ' ', tpp.first_name, ' ', COALESCE(tpp.middle_name || ' ', ''), tpp.last_name) AS participant_full_name,  s.sex_name,  f.facility_name,  pr.role_name,  ts.training_id,  tc.course_name,  p.program_name,  ts.program_id,  ts.quarter,  ts.start_date,  ts.end_date,  tt.type_name AS training_type,  trapp.approach_name AS training_approach,  c.country_name AS host_country,  r.region_name AS host_region,  v.venue_name,  pt.partner_name,  CONCAT(ls.first_name, ' ', ls.last_name) AS training_lead_name";
$proto0["m_strFrom"] = "FROM \"public\".training_attendance AS ta  INNER JOIN \"public\".training_participation AS tp ON ta.participation_id = tp.participation_id  INNER JOIN \"public\".training_participants AS tpp ON tp.participant_id = tpp.participant_id  LEFT OUTER JOIN \"public\".sex AS s ON tpp.sex_id = s.sex_id  LEFT OUTER JOIN \"public\".facilities AS f ON tpp.facility_id = f.facility_id  LEFT OUTER JOIN \"public\".participant_role AS pr ON tpp.role_id = pr.role_id  INNER JOIN \"public\".training_sessions AS ts ON tp.training_id = ts.training_id  INNER JOIN \"public\".training_courses AS tc ON ts.course_id = tc.course_id  INNER JOIN \"public\".programs AS p ON ts.program_id = p.program_id  LEFT OUTER JOIN \"public\".training_types AS tt ON ts.training_type_id = tt.training_type_id  LEFT OUTER JOIN \"public\".training_approaches AS trapp ON ts.approach_id = trapp.approach_id  LEFT OUTER JOIN \"public\".countries AS c ON ts.host_country_id = c.country_id  LEFT OUTER JOIN \"public\".regions AS r ON c.region_id = r.region_id  LEFT OUTER JOIN \"public\".venues AS v ON ts.venue_id = v.venue_id  LEFT OUTER JOIN \"public\".training_partners AS tpr ON ts.training_id = tpr.training_id  LEFT OUTER JOIN \"public\".partners AS pt ON tpr.partner_id = pt.partner_id  LEFT OUTER JOIN \"public\".training_leads AS tl ON ts.training_id = tl.training_id  LEFT OUTER JOIN \"public\".lifebox_staff AS ls ON tl.staff_id = ls.staff_id";
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
	"m_strName" => "attendance_id",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto6["m_sql"] = "ta.attendance_id";
$proto6["m_srcTableName"] = "public.training_attendance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "day_number",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto8["m_sql"] = "ta.day_number";
$proto8["m_srcTableName"] = "public.training_attendance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "attended",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto10["m_sql"] = "ta.attended";
$proto10["m_srcTableName"] = "public.training_attendance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance_date",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto12["m_sql"] = "ta.attendance_date";
$proto12["m_srcTableName"] = "public.training_attendance";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto14["m_sql"] = "ta.notes";
$proto14["m_srcTableName"] = "public.training_attendance";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "recorded_at",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto16["m_sql"] = "ta.recorded_at";
$proto16["m_srcTableName"] = "public.training_attendance";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "recorded_by",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto18["m_sql"] = "ta.recorded_by";
$proto18["m_srcTableName"] = "public.training_attendance";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "participation_id",
	"m_strTable" => "ta",
	"m_srcTableName" => "public.training_attendance"
));

$proto20["m_sql"] = "ta.participation_id";
$proto20["m_srcTableName"] = "public.training_attendance";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_CUSTOM";
$proto23["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tpp.title_salutation"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tpp.first_name"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "COALESCE(tpp.middle_name || ' ', '')"
));

$proto23["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "tpp.last_name"
));

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "CONCAT(tpp.title_salutation, ' ', tpp.first_name, ' ', COALESCE(tpp.middle_name || ' ', ''), tpp.last_name)";
$proto22["m_srcTableName"] = "public.training_attendance";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "participant_full_name";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sex_name",
	"m_strTable" => "s",
	"m_srcTableName" => "public.training_attendance"
));

$proto30["m_sql"] = "s.sex_name";
$proto30["m_srcTableName"] = "public.training_attendance";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_name",
	"m_strTable" => "f",
	"m_srcTableName" => "public.training_attendance"
));

$proto32["m_sql"] = "f.facility_name";
$proto32["m_srcTableName"] = "public.training_attendance";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "role_name",
	"m_strTable" => "pr",
	"m_srcTableName" => "public.training_attendance"
));

$proto34["m_sql"] = "pr.role_name";
$proto34["m_srcTableName"] = "public.training_attendance";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "ts",
	"m_srcTableName" => "public.training_attendance"
));

$proto36["m_sql"] = "ts.training_id";
$proto36["m_srcTableName"] = "public.training_attendance";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "course_name",
	"m_strTable" => "tc",
	"m_srcTableName" => "public.training_attendance"
));

$proto38["m_sql"] = "tc.course_name";
$proto38["m_srcTableName"] = "public.training_attendance";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "program_name",
	"m_strTable" => "p",
	"m_srcTableName" => "public.training_attendance"
));

$proto40["m_sql"] = "p.program_name";
$proto40["m_srcTableName"] = "public.training_attendance";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "program_id",
	"m_strTable" => "ts",
	"m_srcTableName" => "public.training_attendance"
));

$proto42["m_sql"] = "ts.program_id";
$proto42["m_srcTableName"] = "public.training_attendance";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "quarter",
	"m_strTable" => "ts",
	"m_srcTableName" => "public.training_attendance"
));

$proto44["m_sql"] = "ts.quarter";
$proto44["m_srcTableName"] = "public.training_attendance";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "ts",
	"m_srcTableName" => "public.training_attendance"
));

$proto46["m_sql"] = "ts.start_date";
$proto46["m_srcTableName"] = "public.training_attendance";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "ts",
	"m_srcTableName" => "public.training_attendance"
));

$proto48["m_sql"] = "ts.end_date";
$proto48["m_srcTableName"] = "public.training_attendance";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "type_name",
	"m_strTable" => "tt",
	"m_srcTableName" => "public.training_attendance"
));

$proto50["m_sql"] = "tt.type_name";
$proto50["m_srcTableName"] = "public.training_attendance";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "training_type";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "approach_name",
	"m_strTable" => "trapp",
	"m_srcTableName" => "public.training_attendance"
));

$proto52["m_sql"] = "trapp.approach_name";
$proto52["m_srcTableName"] = "public.training_attendance";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "training_approach";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "c",
	"m_srcTableName" => "public.training_attendance"
));

$proto54["m_sql"] = "c.country_name";
$proto54["m_srcTableName"] = "public.training_attendance";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "host_country";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "region_name",
	"m_strTable" => "r",
	"m_srcTableName" => "public.training_attendance"
));

$proto56["m_sql"] = "r.region_name";
$proto56["m_srcTableName"] = "public.training_attendance";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "host_region";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "venue_name",
	"m_strTable" => "v",
	"m_srcTableName" => "public.training_attendance"
));

$proto58["m_sql"] = "v.venue_name";
$proto58["m_srcTableName"] = "public.training_attendance";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_name",
	"m_strTable" => "pt",
	"m_srcTableName" => "public.training_attendance"
));

$proto60["m_sql"] = "pt.partner_name";
$proto60["m_srcTableName"] = "public.training_attendance";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$proto63=array();
$proto63["m_functiontype"] = "SQLF_CUSTOM";
$proto63["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ls.first_name"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "ls.last_name"
));

$proto63["m_arguments"][]=$obj;
$proto63["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto63);

$proto62["m_sql"] = "CONCAT(ls.first_name, ' ', ls.last_name)";
$proto62["m_srcTableName"] = "public.training_attendance";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "training_lead_name";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto67=array();
$proto67["m_link"] = "SQLL_MAIN";
			$proto68=array();
$proto68["m_strName"] = "public.training_attendance";
$proto68["m_srcTableName"] = "public.training_attendance";
$proto68["m_columns"] = array();
$proto68["m_columns"][] = "attendance_id";
$proto68["m_columns"][] = "day_number";
$proto68["m_columns"][] = "attended";
$proto68["m_columns"][] = "attendance_date";
$proto68["m_columns"][] = "notes";
$proto68["m_columns"][] = "recorded_at";
$proto68["m_columns"][] = "recorded_by";
$proto68["m_columns"][] = "participation_id";
$obj = new SQLTable($proto68);

$proto67["m_table"] = $obj;
$proto67["m_sql"] = "\"public\".training_attendance AS ta";
$proto67["m_alias"] = "ta";
$proto67["m_srcTableName"] = "public.training_attendance";
$proto69=array();
$proto69["m_sql"] = "";
$proto69["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = false;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

$proto67["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto67);

$proto0["m_fromlist"][]=$obj;
												$proto71=array();
$proto71["m_link"] = "SQLL_INNERJOIN";
			$proto72=array();
$proto72["m_strName"] = "public.training_participation";
$proto72["m_srcTableName"] = "public.training_attendance";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "participation_id";
$proto72["m_columns"][] = "participant_id";
$proto72["m_columns"][] = "training_id";
$proto72["m_columns"][] = "created_at";
$proto72["m_columns"][] = "pre_test_score";
$proto72["m_columns"][] = "post_test_score";
$proto72["m_columns"][] = "ceu_points";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "INNER JOIN \"public\".training_participation AS tp ON ta.participation_id = tp.participation_id";
$proto71["m_alias"] = "tp";
$proto71["m_srcTableName"] = "public.training_attendance";
$proto73=array();
$proto73["m_sql"] = "tp.participation_id = ta.participation_id";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "participation_id",
	"m_strTable" => "tp",
	"m_srcTableName" => "public.training_attendance"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "= ta.participation_id";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
												$proto75=array();
$proto75["m_link"] = "SQLL_INNERJOIN";
			$proto76=array();
$proto76["m_strName"] = "public.training_participants";
$proto76["m_srcTableName"] = "public.training_attendance";
$proto76["m_columns"] = array();
$proto76["m_columns"][] = "participant_id";
$proto76["m_columns"][] = "first_name";
$proto76["m_columns"][] = "last_name";
$proto76["m_columns"][] = "sex_id";
$proto76["m_columns"][] = "role_id";
$proto76["m_columns"][] = "facility_id";
$proto76["m_columns"][] = "phone";
$proto76["m_columns"][] = "email";
$proto76["m_columns"][] = "country_id";
$proto76["m_columns"][] = "training_date";
$proto76["m_columns"][] = "created_at";
$proto76["m_columns"][] = "updated_at";
$proto76["m_columns"][] = "venue_id";
$proto76["m_columns"][] = "title_salutation";
$proto76["m_columns"][] = "middle_name";
$obj = new SQLTable($proto76);

$proto75["m_table"] = $obj;
$proto75["m_sql"] = "INNER JOIN \"public\".training_participants AS tpp ON tp.participant_id = tpp.participant_id";
$proto75["m_alias"] = "tpp";
$proto75["m_srcTableName"] = "public.training_attendance";
$proto77=array();
$proto77["m_sql"] = "tpp.participant_id = tp.participant_id";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "participant_id",
	"m_strTable" => "tpp",
	"m_srcTableName" => "public.training_attendance"
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "= tp.participant_id";
$proto77["m_havingmode"] = false;
$proto77["m_inBrackets"] = false;
$proto77["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto77);

$proto75["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto75);

$proto0["m_fromlist"][]=$obj;
												$proto79=array();
$proto79["m_link"] = "SQLL_LEFTJOIN";
			$proto80=array();
$proto80["m_strName"] = "public.sex";
$proto80["m_srcTableName"] = "public.training_attendance";
$proto80["m_columns"] = array();
$proto80["m_columns"][] = "sex_id";
$proto80["m_columns"][] = "sex_name";
$proto80["m_columns"][] = "description";
$proto80["m_columns"][] = "is_active";
$proto80["m_columns"][] = "created_at";
$proto80["m_columns"][] = "updated_at";
$obj = new SQLTable($proto80);

$proto79["m_table"] = $obj;
$proto79["m_sql"] = "LEFT OUTER JOIN \"public\".sex AS s ON tpp.sex_id = s.sex_id";
$proto79["m_alias"] = "s";
$proto79["m_srcTableName"] = "public.training_attendance";
$proto81=array();
$proto81["m_sql"] = "s.sex_id = tpp.sex_id";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sex_id",
	"m_strTable" => "s",
	"m_srcTableName" => "public.training_attendance"
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "= tpp.sex_id";
$proto81["m_havingmode"] = false;
$proto81["m_inBrackets"] = false;
$proto81["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto81);

$proto79["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto79);

$proto0["m_fromlist"][]=$obj;
												$proto83=array();
$proto83["m_link"] = "SQLL_LEFTJOIN";
			$proto84=array();
$proto84["m_strName"] = "public.facilities";
$proto84["m_srcTableName"] = "public.training_attendance";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "facility_id";
$proto84["m_columns"][] = "facility_name";
$proto84["m_columns"][] = "country_id";
$proto84["m_columns"][] = "facility_type";
$proto84["m_columns"][] = "address";
$proto84["m_columns"][] = "city";
$proto84["m_columns"][] = "latitude";
$proto84["m_columns"][] = "longitude";
$proto84["m_columns"][] = "is_active";
$proto84["m_columns"][] = "created_at";
$proto84["m_columns"][] = "updated_at";
$proto84["m_columns"][] = "region_id";
$obj = new SQLTable($proto84);

$proto83["m_table"] = $obj;
$proto83["m_sql"] = "LEFT OUTER JOIN \"public\".facilities AS f ON tpp.facility_id = f.facility_id";
$proto83["m_alias"] = "f";
$proto83["m_srcTableName"] = "public.training_attendance";
$proto85=array();
$proto85["m_sql"] = "f.facility_id = tpp.facility_id";
$proto85["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "f",
	"m_srcTableName" => "public.training_attendance"
));

$proto85["m_column"]=$obj;
$proto85["m_contained"] = array();
$proto85["m_strCase"] = "= tpp.facility_id";
$proto85["m_havingmode"] = false;
$proto85["m_inBrackets"] = false;
$proto85["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto85);

$proto83["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto83);

$proto0["m_fromlist"][]=$obj;
												$proto87=array();
$proto87["m_link"] = "SQLL_LEFTJOIN";
			$proto88=array();
$proto88["m_strName"] = "public.participant_role";
$proto88["m_srcTableName"] = "public.training_attendance";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "role_id";
$proto88["m_columns"][] = "role_name";
$proto88["m_columns"][] = "description";
$proto88["m_columns"][] = "is_active";
$proto88["m_columns"][] = "created_at";
$proto88["m_columns"][] = "updated_at";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_sql"] = "LEFT OUTER JOIN \"public\".participant_role AS pr ON tpp.role_id = pr.role_id";
$proto87["m_alias"] = "pr";
$proto87["m_srcTableName"] = "public.training_attendance";
$proto89=array();
$proto89["m_sql"] = "pr.role_id = tpp.role_id";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "role_id",
	"m_strTable" => "pr",
	"m_srcTableName" => "public.training_attendance"
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "= tpp.role_id";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto0["m_fromlist"][]=$obj;
												$proto91=array();
$proto91["m_link"] = "SQLL_INNERJOIN";
			$proto92=array();
$proto92["m_strName"] = "public.training_sessions";
$proto92["m_srcTableName"] = "public.training_attendance";
$proto92["m_columns"] = array();
$proto92["m_columns"][] = "training_id";
$proto92["m_columns"][] = "course_id";
$proto92["m_columns"][] = "training_type";
$proto92["m_columns"][] = "training_approach";
$proto92["m_columns"][] = "program";
$proto92["m_columns"][] = "quarter";
$proto92["m_columns"][] = "start_date";
$proto92["m_columns"][] = "end_date";
$proto92["m_columns"][] = "facility_id";
$proto92["m_columns"][] = "host_country_id";
$proto92["m_columns"][] = "ceu_points";
$proto92["m_columns"][] = "num_participants";
$proto92["m_columns"][] = "avg_pre_test_score";
$proto92["m_columns"][] = "avg_post_test_score";
$proto92["m_columns"][] = "remarks";
$proto92["m_columns"][] = "created_at";
$proto92["m_columns"][] = "updated_at";
$proto92["m_columns"][] = "training_type_id";
$proto92["m_columns"][] = "approach_id";
$proto92["m_columns"][] = "program_id";
$proto92["m_columns"][] = "venue_id";
$obj = new SQLTable($proto92);

$proto91["m_table"] = $obj;
$proto91["m_sql"] = "INNER JOIN \"public\".training_sessions AS ts ON tp.training_id = ts.training_id";
$proto91["m_alias"] = "ts";
$proto91["m_srcTableName"] = "public.training_attendance";
$proto93=array();
$proto93["m_sql"] = "ts.training_id = tp.training_id";
$proto93["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "ts",
	"m_srcTableName" => "public.training_attendance"
));

$proto93["m_column"]=$obj;
$proto93["m_contained"] = array();
$proto93["m_strCase"] = "= tp.training_id";
$proto93["m_havingmode"] = false;
$proto93["m_inBrackets"] = false;
$proto93["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto93);

$proto91["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto91);

$proto0["m_fromlist"][]=$obj;
												$proto95=array();
$proto95["m_link"] = "SQLL_INNERJOIN";
			$proto96=array();
$proto96["m_strName"] = "public.training_courses";
$proto96["m_srcTableName"] = "public.training_attendance";
$proto96["m_columns"] = array();
$proto96["m_columns"][] = "course_id";
$proto96["m_columns"][] = "course_name";
$proto96["m_columns"][] = "description";
$proto96["m_columns"][] = "duration_hours";
$proto96["m_columns"][] = "is_active";
$proto96["m_columns"][] = "created_at";
$proto96["m_columns"][] = "updated_at";
$obj = new SQLTable($proto96);

$proto95["m_table"] = $obj;
$proto95["m_sql"] = "INNER JOIN \"public\".training_courses AS tc ON ts.course_id = tc.course_id";
$proto95["m_alias"] = "tc";
$proto95["m_srcTableName"] = "public.training_attendance";
$proto97=array();
$proto97["m_sql"] = "tc.course_id = ts.course_id";
$proto97["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "course_id",
	"m_strTable" => "tc",
	"m_srcTableName" => "public.training_attendance"
));

$proto97["m_column"]=$obj;
$proto97["m_contained"] = array();
$proto97["m_strCase"] = "= ts.course_id";
$proto97["m_havingmode"] = false;
$proto97["m_inBrackets"] = false;
$proto97["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto97);

$proto95["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto95);

$proto0["m_fromlist"][]=$obj;
												$proto99=array();
$proto99["m_link"] = "SQLL_INNERJOIN";
			$proto100=array();
$proto100["m_strName"] = "public.programs";
$proto100["m_srcTableName"] = "public.training_attendance";
$proto100["m_columns"] = array();
$proto100["m_columns"][] = "program_id";
$proto100["m_columns"][] = "program_name";
$proto100["m_columns"][] = "description";
$proto100["m_columns"][] = "is_active";
$proto100["m_columns"][] = "created_at";
$proto100["m_columns"][] = "updated_at";
$obj = new SQLTable($proto100);

$proto99["m_table"] = $obj;
$proto99["m_sql"] = "INNER JOIN \"public\".programs AS p ON ts.program_id = p.program_id";
$proto99["m_alias"] = "p";
$proto99["m_srcTableName"] = "public.training_attendance";
$proto101=array();
$proto101["m_sql"] = "p.program_id = ts.program_id";
$proto101["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "program_id",
	"m_strTable" => "p",
	"m_srcTableName" => "public.training_attendance"
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
$proto101["m_strCase"] = "= ts.program_id";
$proto101["m_havingmode"] = false;
$proto101["m_inBrackets"] = false;
$proto101["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto101);

$proto99["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto99);

$proto0["m_fromlist"][]=$obj;
												$proto103=array();
$proto103["m_link"] = "SQLL_LEFTJOIN";
			$proto104=array();
$proto104["m_strName"] = "public.training_types";
$proto104["m_srcTableName"] = "public.training_attendance";
$proto104["m_columns"] = array();
$proto104["m_columns"][] = "training_type_id";
$proto104["m_columns"][] = "type_name";
$proto104["m_columns"][] = "description";
$proto104["m_columns"][] = "is_active";
$proto104["m_columns"][] = "created_at";
$proto104["m_columns"][] = "updated_at";
$obj = new SQLTable($proto104);

$proto103["m_table"] = $obj;
$proto103["m_sql"] = "LEFT OUTER JOIN \"public\".training_types AS tt ON ts.training_type_id = tt.training_type_id";
$proto103["m_alias"] = "tt";
$proto103["m_srcTableName"] = "public.training_attendance";
$proto105=array();
$proto105["m_sql"] = "tt.training_type_id = ts.training_type_id";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "training_type_id",
	"m_strTable" => "tt",
	"m_srcTableName" => "public.training_attendance"
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "= ts.training_type_id";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = false;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

$proto103["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto103);

$proto0["m_fromlist"][]=$obj;
												$proto107=array();
$proto107["m_link"] = "SQLL_LEFTJOIN";
			$proto108=array();
$proto108["m_strName"] = "public.training_approaches";
$proto108["m_srcTableName"] = "public.training_attendance";
$proto108["m_columns"] = array();
$proto108["m_columns"][] = "approach_id";
$proto108["m_columns"][] = "approach_name";
$proto108["m_columns"][] = "description";
$proto108["m_columns"][] = "is_active";
$proto108["m_columns"][] = "created_at";
$proto108["m_columns"][] = "updated_at";
$obj = new SQLTable($proto108);

$proto107["m_table"] = $obj;
$proto107["m_sql"] = "LEFT OUTER JOIN \"public\".training_approaches AS trapp ON ts.approach_id = trapp.approach_id";
$proto107["m_alias"] = "trapp";
$proto107["m_srcTableName"] = "public.training_attendance";
$proto109=array();
$proto109["m_sql"] = "trapp.approach_id = ts.approach_id";
$proto109["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "approach_id",
	"m_strTable" => "trapp",
	"m_srcTableName" => "public.training_attendance"
));

$proto109["m_column"]=$obj;
$proto109["m_contained"] = array();
$proto109["m_strCase"] = "= ts.approach_id";
$proto109["m_havingmode"] = false;
$proto109["m_inBrackets"] = false;
$proto109["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto109);

$proto107["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto107);

$proto0["m_fromlist"][]=$obj;
												$proto111=array();
$proto111["m_link"] = "SQLL_LEFTJOIN";
			$proto112=array();
$proto112["m_strName"] = "public.countries";
$proto112["m_srcTableName"] = "public.training_attendance";
$proto112["m_columns"] = array();
$proto112["m_columns"][] = "country_id";
$proto112["m_columns"][] = "country_name";
$proto112["m_columns"][] = "region_id";
$proto112["m_columns"][] = "iso_code";
$proto112["m_columns"][] = "created_at";
$proto112["m_columns"][] = "updated_at";
$obj = new SQLTable($proto112);

$proto111["m_table"] = $obj;
$proto111["m_sql"] = "LEFT OUTER JOIN \"public\".countries AS c ON ts.host_country_id = c.country_id";
$proto111["m_alias"] = "c";
$proto111["m_srcTableName"] = "public.training_attendance";
$proto113=array();
$proto113["m_sql"] = "c.country_id = ts.host_country_id";
$proto113["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "c",
	"m_srcTableName" => "public.training_attendance"
));

$proto113["m_column"]=$obj;
$proto113["m_contained"] = array();
$proto113["m_strCase"] = "= ts.host_country_id";
$proto113["m_havingmode"] = false;
$proto113["m_inBrackets"] = false;
$proto113["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto113);

$proto111["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto111);

$proto0["m_fromlist"][]=$obj;
												$proto115=array();
$proto115["m_link"] = "SQLL_LEFTJOIN";
			$proto116=array();
$proto116["m_strName"] = "public.regions";
$proto116["m_srcTableName"] = "public.training_attendance";
$proto116["m_columns"] = array();
$proto116["m_columns"][] = "region_id";
$proto116["m_columns"][] = "region_name";
$proto116["m_columns"][] = "description";
$proto116["m_columns"][] = "created_at";
$proto116["m_columns"][] = "updated_at";
$obj = new SQLTable($proto116);

$proto115["m_table"] = $obj;
$proto115["m_sql"] = "LEFT OUTER JOIN \"public\".regions AS r ON c.region_id = r.region_id";
$proto115["m_alias"] = "r";
$proto115["m_srcTableName"] = "public.training_attendance";
$proto117=array();
$proto117["m_sql"] = "r.region_id = c.region_id";
$proto117["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "region_id",
	"m_strTable" => "r",
	"m_srcTableName" => "public.training_attendance"
));

$proto117["m_column"]=$obj;
$proto117["m_contained"] = array();
$proto117["m_strCase"] = "= c.region_id";
$proto117["m_havingmode"] = false;
$proto117["m_inBrackets"] = false;
$proto117["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto117);

$proto115["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto115);

$proto0["m_fromlist"][]=$obj;
												$proto119=array();
$proto119["m_link"] = "SQLL_LEFTJOIN";
			$proto120=array();
$proto120["m_strName"] = "public.venues";
$proto120["m_srcTableName"] = "public.training_attendance";
$proto120["m_columns"] = array();
$proto120["m_columns"][] = "venue_id";
$proto120["m_columns"][] = "venue_name";
$proto120["m_columns"][] = "facility_id";
$proto120["m_columns"][] = "address_line1";
$proto120["m_columns"][] = "address_line2";
$proto120["m_columns"][] = "city";
$proto120["m_columns"][] = "state_province";
$proto120["m_columns"][] = "postal_code";
$proto120["m_columns"][] = "country_id";
$proto120["m_columns"][] = "capacity";
$proto120["m_columns"][] = "room_type";
$proto120["m_columns"][] = "amenities";
$proto120["m_columns"][] = "is_active";
$proto120["m_columns"][] = "created_at";
$proto120["m_columns"][] = "updated_at";
$obj = new SQLTable($proto120);

$proto119["m_table"] = $obj;
$proto119["m_sql"] = "LEFT OUTER JOIN \"public\".venues AS v ON ts.venue_id = v.venue_id";
$proto119["m_alias"] = "v";
$proto119["m_srcTableName"] = "public.training_attendance";
$proto121=array();
$proto121["m_sql"] = "v.venue_id = ts.venue_id";
$proto121["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "venue_id",
	"m_strTable" => "v",
	"m_srcTableName" => "public.training_attendance"
));

$proto121["m_column"]=$obj;
$proto121["m_contained"] = array();
$proto121["m_strCase"] = "= ts.venue_id";
$proto121["m_havingmode"] = false;
$proto121["m_inBrackets"] = false;
$proto121["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto121);

$proto119["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto119);

$proto0["m_fromlist"][]=$obj;
												$proto123=array();
$proto123["m_link"] = "SQLL_LEFTJOIN";
			$proto124=array();
$proto124["m_strName"] = "public.training_partners";
$proto124["m_srcTableName"] = "public.training_attendance";
$proto124["m_columns"] = array();
$proto124["m_columns"][] = "training_partner_id";
$proto124["m_columns"][] = "training_id";
$proto124["m_columns"][] = "partner_id";
$proto124["m_columns"][] = "created_at";
$obj = new SQLTable($proto124);

$proto123["m_table"] = $obj;
$proto123["m_sql"] = "LEFT OUTER JOIN \"public\".training_partners AS tpr ON ts.training_id = tpr.training_id";
$proto123["m_alias"] = "tpr";
$proto123["m_srcTableName"] = "public.training_attendance";
$proto125=array();
$proto125["m_sql"] = "tpr.training_id = ts.training_id";
$proto125["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "tpr",
	"m_srcTableName" => "public.training_attendance"
));

$proto125["m_column"]=$obj;
$proto125["m_contained"] = array();
$proto125["m_strCase"] = "= ts.training_id";
$proto125["m_havingmode"] = false;
$proto125["m_inBrackets"] = false;
$proto125["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto125);

$proto123["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto123);

$proto0["m_fromlist"][]=$obj;
												$proto127=array();
$proto127["m_link"] = "SQLL_LEFTJOIN";
			$proto128=array();
$proto128["m_strName"] = "public.partners";
$proto128["m_srcTableName"] = "public.training_attendance";
$proto128["m_columns"] = array();
$proto128["m_columns"][] = "partner_id";
$proto128["m_columns"][] = "partner_name";
$proto128["m_columns"][] = "description";
$proto128["m_columns"][] = "website";
$proto128["m_columns"][] = "contact_email";
$proto128["m_columns"][] = "is_active";
$proto128["m_columns"][] = "created_at";
$proto128["m_columns"][] = "updated_at";
$obj = new SQLTable($proto128);

$proto127["m_table"] = $obj;
$proto127["m_sql"] = "LEFT OUTER JOIN \"public\".partners AS pt ON tpr.partner_id = pt.partner_id";
$proto127["m_alias"] = "pt";
$proto127["m_srcTableName"] = "public.training_attendance";
$proto129=array();
$proto129["m_sql"] = "pt.partner_id = tpr.partner_id";
$proto129["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "pt",
	"m_srcTableName" => "public.training_attendance"
));

$proto129["m_column"]=$obj;
$proto129["m_contained"] = array();
$proto129["m_strCase"] = "= tpr.partner_id";
$proto129["m_havingmode"] = false;
$proto129["m_inBrackets"] = false;
$proto129["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto129);

$proto127["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto127);

$proto0["m_fromlist"][]=$obj;
												$proto131=array();
$proto131["m_link"] = "SQLL_LEFTJOIN";
			$proto132=array();
$proto132["m_strName"] = "public.training_leads";
$proto132["m_srcTableName"] = "public.training_attendance";
$proto132["m_columns"] = array();
$proto132["m_columns"][] = "training_lead_id";
$proto132["m_columns"][] = "training_id";
$proto132["m_columns"][] = "staff_id";
$proto132["m_columns"][] = "created_at";
$obj = new SQLTable($proto132);

$proto131["m_table"] = $obj;
$proto131["m_sql"] = "LEFT OUTER JOIN \"public\".training_leads AS tl ON ts.training_id = tl.training_id";
$proto131["m_alias"] = "tl";
$proto131["m_srcTableName"] = "public.training_attendance";
$proto133=array();
$proto133["m_sql"] = "tl.training_id = ts.training_id";
$proto133["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "tl",
	"m_srcTableName" => "public.training_attendance"
));

$proto133["m_column"]=$obj;
$proto133["m_contained"] = array();
$proto133["m_strCase"] = "= ts.training_id";
$proto133["m_havingmode"] = false;
$proto133["m_inBrackets"] = false;
$proto133["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto133);

$proto131["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto131);

$proto0["m_fromlist"][]=$obj;
												$proto135=array();
$proto135["m_link"] = "SQLL_LEFTJOIN";
			$proto136=array();
$proto136["m_strName"] = "public.lifebox_staff";
$proto136["m_srcTableName"] = "public.training_attendance";
$proto136["m_columns"] = array();
$proto136["m_columns"][] = "staff_id";
$proto136["m_columns"][] = "first_name";
$proto136["m_columns"][] = "last_name";
$proto136["m_columns"][] = "email";
$proto136["m_columns"][] = "role";
$proto136["m_columns"][] = "region_id";
$proto136["m_columns"][] = "is_active";
$proto136["m_columns"][] = "created_at";
$proto136["m_columns"][] = "updated_at";
$obj = new SQLTable($proto136);

$proto135["m_table"] = $obj;
$proto135["m_sql"] = "LEFT OUTER JOIN \"public\".lifebox_staff AS ls ON tl.staff_id = ls.staff_id";
$proto135["m_alias"] = "ls";
$proto135["m_srcTableName"] = "public.training_attendance";
$proto137=array();
$proto137["m_sql"] = "ls.staff_id = tl.staff_id";
$proto137["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "staff_id",
	"m_strTable" => "ls",
	"m_srcTableName" => "public.training_attendance"
));

$proto137["m_column"]=$obj;
$proto137["m_contained"] = array();
$proto137["m_strCase"] = "= tl.staff_id";
$proto137["m_havingmode"] = false;
$proto137["m_inBrackets"] = false;
$proto137["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto137);

$proto135["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto135);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.training_attendance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_attendance = createSqlQuery_training_attendance();


	
				;

																										

$tdatatraining_attendance[".sqlquery"] = $queryData_training_attendance;



$tdatatraining_attendance[".hasEvents"] = false;

?>