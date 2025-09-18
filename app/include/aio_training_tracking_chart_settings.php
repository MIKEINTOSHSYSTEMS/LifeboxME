<?php
$tdataaio_training_tracking_chart = array();
$tdataaio_training_tracking_chart[".searchableFields"] = array();
$tdataaio_training_tracking_chart[".ShortName"] = "aio_training_tracking_chart";
$tdataaio_training_tracking_chart[".OwnerID"] = "";
$tdataaio_training_tracking_chart[".OriginalTable"] = "aio_training_tracking";


$tdataaio_training_tracking_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdataaio_training_tracking_chart[".originalPagesByType"] = $tdataaio_training_tracking_chart[".pagesByType"];
$tdataaio_training_tracking_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdataaio_training_tracking_chart[".originalPages"] = $tdataaio_training_tracking_chart[".pages"];
$tdataaio_training_tracking_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdataaio_training_tracking_chart[".originalDefaultPages"] = $tdataaio_training_tracking_chart[".defaultPages"];

//	field labels
$fieldLabelsaio_training_tracking_chart = array();
$fieldToolTipsaio_training_tracking_chart = array();
$pageTitlesaio_training_tracking_chart = array();
$placeHoldersaio_training_tracking_chart = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaio_training_tracking_chart["English"] = array();
	$fieldToolTipsaio_training_tracking_chart["English"] = array();
	$placeHoldersaio_training_tracking_chart["English"] = array();
	$pageTitlesaio_training_tracking_chart["English"] = array();
	$fieldLabelsaio_training_tracking_chart["English"]["participant_id"] = "Participant Id";
	$fieldToolTipsaio_training_tracking_chart["English"]["participant_id"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["participant_id"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["title"] = "Title";
	$fieldToolTipsaio_training_tracking_chart["English"]["title"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["title"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["first_name"] = "First Name";
	$fieldToolTipsaio_training_tracking_chart["English"]["first_name"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["first_name"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsaio_training_tracking_chart["English"]["middle_name"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["middle_name"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["last_name"] = "Last Name";
	$fieldToolTipsaio_training_tracking_chart["English"]["last_name"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["last_name"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["gender"] = "Gender";
	$fieldToolTipsaio_training_tracking_chart["English"]["gender"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["gender"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["participant_role"] = "Participant Role";
	$fieldToolTipsaio_training_tracking_chart["English"]["participant_role"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["participant_role"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["country"] = "Country";
	$fieldToolTipsaio_training_tracking_chart["English"]["country"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["country"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["facility"] = "Facility";
	$fieldToolTipsaio_training_tracking_chart["English"]["facility"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["facility"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["phone"] = "Phone";
	$fieldToolTipsaio_training_tracking_chart["English"]["phone"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["phone"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["email"] = "Email";
	$fieldToolTipsaio_training_tracking_chart["English"]["email"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["email"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["training_id"] = "Training Id";
	$fieldToolTipsaio_training_tracking_chart["English"]["training_id"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["training_id"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["training_name"] = "Training Name";
	$fieldToolTipsaio_training_tracking_chart["English"]["training_name"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["training_name"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["program"] = "Program";
	$fieldToolTipsaio_training_tracking_chart["English"]["program"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["program"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["partners"] = "Partners";
	$fieldToolTipsaio_training_tracking_chart["English"]["partners"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["partners"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["training_type"] = "Training Type";
	$fieldToolTipsaio_training_tracking_chart["English"]["training_type"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["training_type"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["training_approach"] = "Training Approach";
	$fieldToolTipsaio_training_tracking_chart["English"]["training_approach"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["training_approach"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["training_language"] = "Training Language";
	$fieldToolTipsaio_training_tracking_chart["English"]["training_language"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["training_language"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["training_lead"] = "Training Lead";
	$fieldToolTipsaio_training_tracking_chart["English"]["training_lead"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["training_lead"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["quarter"] = "Quarter";
	$fieldToolTipsaio_training_tracking_chart["English"]["quarter"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["quarter"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["start_date"] = "Start Date";
	$fieldToolTipsaio_training_tracking_chart["English"]["start_date"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["start_date"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["end_date"] = "End Date";
	$fieldToolTipsaio_training_tracking_chart["English"]["end_date"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["end_date"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["total_days"] = "Total Days";
	$fieldToolTipsaio_training_tracking_chart["English"]["total_days"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["total_days"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["days_recorded"] = "Days Recorded";
	$fieldToolTipsaio_training_tracking_chart["English"]["days_recorded"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["days_recorded"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["days_attended"] = "Days Attended";
	$fieldToolTipsaio_training_tracking_chart["English"]["days_attended"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["days_attended"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["attendance_percentage"] = "Attendance Percentage";
	$fieldToolTipsaio_training_tracking_chart["English"]["attendance_percentage"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["attendance_percentage"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["attendance_status"] = "Attendance Status";
	$fieldToolTipsaio_training_tracking_chart["English"]["attendance_status"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["attendance_status"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["pre_test_score"] = "Pre Test Score";
	$fieldToolTipsaio_training_tracking_chart["English"]["pre_test_score"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["pre_test_score"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["post_test_score"] = "Post Test Score";
	$fieldToolTipsaio_training_tracking_chart["English"]["post_test_score"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["post_test_score"] = "";
	$fieldLabelsaio_training_tracking_chart["English"]["ceu_points"] = "Ceu Points";
	$fieldToolTipsaio_training_tracking_chart["English"]["ceu_points"] = "";
	$placeHoldersaio_training_tracking_chart["English"]["ceu_points"] = "";
	if (count($fieldToolTipsaio_training_tracking_chart["English"]))
		$tdataaio_training_tracking_chart[".isUseToolTips"] = true;
}


	$tdataaio_training_tracking_chart[".NCSearch"] = true;

	$tdataaio_training_tracking_chart[".ChartRefreshTime"] = 0;


$tdataaio_training_tracking_chart[".shortTableName"] = "aio_training_tracking_chart";
$tdataaio_training_tracking_chart[".nSecOptions"] = 0;

$tdataaio_training_tracking_chart[".mainTableOwnerID"] = "";
$tdataaio_training_tracking_chart[".entityType"] = 9;
$tdataaio_training_tracking_chart[".connId"] = "lifebox_mesystem_at_localhost";


$tdataaio_training_tracking_chart[".strOriginalTableName"] = "aio_training_tracking";

	



$tdataaio_training_tracking_chart[".showAddInPopup"] = false;

$tdataaio_training_tracking_chart[".showEditInPopup"] = false;

$tdataaio_training_tracking_chart[".showViewInPopup"] = false;

$tdataaio_training_tracking_chart[".listAjax"] = false;
//	temporary
//$tdataaio_training_tracking_chart[".listAjax"] = false;

	$tdataaio_training_tracking_chart[".audit"] = false;

	$tdataaio_training_tracking_chart[".locking"] = false;


$pages = $tdataaio_training_tracking_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaio_training_tracking_chart[".edit"] = true;
	$tdataaio_training_tracking_chart[".afterEditAction"] = 1;
	$tdataaio_training_tracking_chart[".closePopupAfterEdit"] = 1;
	$tdataaio_training_tracking_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaio_training_tracking_chart[".add"] = true;
$tdataaio_training_tracking_chart[".afterAddAction"] = 1;
$tdataaio_training_tracking_chart[".closePopupAfterAdd"] = 1;
$tdataaio_training_tracking_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaio_training_tracking_chart[".list"] = true;
}



$tdataaio_training_tracking_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaio_training_tracking_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaio_training_tracking_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaio_training_tracking_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaio_training_tracking_chart[".printFriendly"] = true;
}



$tdataaio_training_tracking_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaio_training_tracking_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaio_training_tracking_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaio_training_tracking_chart[".isUseAjaxSuggest"] = false;



						

$tdataaio_training_tracking_chart[".ajaxCodeSnippetAdded"] = false;

$tdataaio_training_tracking_chart[".buttonsAdded"] = false;

$tdataaio_training_tracking_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaio_training_tracking_chart[".isUseTimeForSearch"] = false;


$tdataaio_training_tracking_chart[".badgeColor"] = "e8926f";


$tdataaio_training_tracking_chart[".allSearchFields"] = array();
$tdataaio_training_tracking_chart[".filterFields"] = array();
$tdataaio_training_tracking_chart[".requiredSearchFields"] = array();

$tdataaio_training_tracking_chart[".googleLikeFields"] = array();
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "participant_id";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "title";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "first_name";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "middle_name";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "last_name";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "gender";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "participant_role";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "country";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "facility";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "phone";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "email";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "training_id";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "training_name";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "program";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "partners";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "training_type";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "training_approach";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "training_language";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "training_lead";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "quarter";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "start_date";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "end_date";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "total_days";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "days_recorded";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "days_attended";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "attendance_percentage";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "attendance_status";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "pre_test_score";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "post_test_score";
$tdataaio_training_tracking_chart[".googleLikeFields"][] = "ceu_points";



$tdataaio_training_tracking_chart[".tableType"] = "chart";

$tdataaio_training_tracking_chart[".printerPageOrientation"] = 0;
$tdataaio_training_tracking_chart[".nPrinterPageScale"] = 100;

$tdataaio_training_tracking_chart[".nPrinterSplitRecords"] = 40;

$tdataaio_training_tracking_chart[".geocodingEnabled"] = false;



// chart settings
$tdataaio_training_tracking_chart[".chartType"] = "2DColumn";
// end of chart settings

$tdataaio_training_tracking_chart[".isDisplayLoading"] = true;







$tstrOrderBy = "";
$tdataaio_training_tracking_chart[".strOrderBy"] = $tstrOrderBy;

$tdataaio_training_tracking_chart[".orderindexes"] = array();
	foreach ( my_json_decode("null") as $orderItem ) {
		$tdataaio_training_tracking_chart[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdataaio_training_tracking_chart[".sqlHead"] = "";
$tdataaio_training_tracking_chart[".sqlFrom"] = "";
$tdataaio_training_tracking_chart[".sqlWhereExpr"] = "";
$tdataaio_training_tracking_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaio_training_tracking_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaio_training_tracking_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataaio_training_tracking_chart[".highlightSearchResults"] = true;

$tableKeysaio_training_tracking_chart = array();
$tdataaio_training_tracking_chart[".Keys"] = $tableKeysaio_training_tracking_chart;


$tdataaio_training_tracking_chart[".hideMobileList"] = array();




//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","participant_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "participant_id";

	
	
		$fdata["FullName"] = "participant_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["participant_id"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "participant_id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

	
	
		$fdata["FullName"] = "title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["title"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "title";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","first_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "first_name";

	
	
		$fdata["FullName"] = "first_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["first_name"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "first_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","middle_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "middle_name";

	
	
		$fdata["FullName"] = "middle_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["middle_name"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "middle_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","last_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_name";

	
	
		$fdata["FullName"] = "last_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["last_name"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "last_name";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gender";

	
	
		$fdata["FullName"] = "gender";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "aio_training_tracking";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "gender";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "gender";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["gender"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "gender";
//	participant_role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "participant_role";
	$fdata["GoodName"] = "participant_role";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","participant_role");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "participant_role";

	
	
		$fdata["FullName"] = "participant_role";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["participant_role"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "participant_role";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","country");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "country";

	
	
		$fdata["FullName"] = "country";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "aio_training_tracking";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "country";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "country";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["country"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "country";
//	facility
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "facility";
	$fdata["GoodName"] = "facility";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","facility");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "facility";

	
	
		$fdata["FullName"] = "facility";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["facility"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "facility";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone";

	
	
		$fdata["FullName"] = "phone";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["phone"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "phone";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
	
		$fdata["FullName"] = "email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["email"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "email";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","training_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "training_id";

	
	
		$fdata["FullName"] = "training_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["training_id"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "training_id";
//	training_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "training_name";
	$fdata["GoodName"] = "training_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","training_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "training_name";

	
	
		$fdata["FullName"] = "training_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "aio_training_tracking";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "training_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "training_name";

	

	
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["training_name"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "training_name";
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","program");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "program";

	
	
		$fdata["FullName"] = "program";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["program"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "program";
//	partners
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "partners";
	$fdata["GoodName"] = "partners";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","partners");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "partners";

	
	
		$fdata["FullName"] = "partners";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["partners"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "partners";
//	training_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "training_type";
	$fdata["GoodName"] = "training_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","training_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "training_type";

	
	
		$fdata["FullName"] = "training_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["training_type"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "training_type";
//	training_approach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "training_approach";
	$fdata["GoodName"] = "training_approach";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","training_approach");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "training_approach";

	
	
		$fdata["FullName"] = "training_approach";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["training_approach"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "training_approach";
//	training_language
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "training_language";
	$fdata["GoodName"] = "training_language";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","training_language");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "training_language";

	
	
		$fdata["FullName"] = "training_language";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["training_language"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "training_language";
//	training_lead
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "training_lead";
	$fdata["GoodName"] = "training_lead";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","training_lead");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "training_lead";

	
	
		$fdata["FullName"] = "training_lead";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["training_lead"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "training_lead";
//	quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "quarter";
	$fdata["GoodName"] = "quarter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","quarter");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "quarter";

	
	
		$fdata["FullName"] = "quarter";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["quarter"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "quarter";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","start_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "start_date";

	
	
		$fdata["FullName"] = "start_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["start_date"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","end_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "end_date";

	
	
		$fdata["FullName"] = "end_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["end_date"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "end_date";
//	total_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total_days";
	$fdata["GoodName"] = "total_days";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","total_days");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "total_days";

	
	
		$fdata["FullName"] = "total_days";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["total_days"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "total_days";
//	days_recorded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "days_recorded";
	$fdata["GoodName"] = "days_recorded";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","days_recorded");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "days_recorded";

	
	
		$fdata["FullName"] = "days_recorded";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["days_recorded"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "days_recorded";
//	days_attended
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "days_attended";
	$fdata["GoodName"] = "days_attended";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","days_attended");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "days_attended";

	
	
		$fdata["FullName"] = "days_attended";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["days_attended"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "days_attended";
//	attendance_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "attendance_percentage";
	$fdata["GoodName"] = "attendance_percentage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","attendance_percentage");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "attendance_percentage";

	
	
		$fdata["FullName"] = "attendance_percentage";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["attendance_percentage"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "attendance_percentage";
//	attendance_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "attendance_status";
	$fdata["GoodName"] = "attendance_status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","attendance_status");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "attendance_status";

	
	
		$fdata["FullName"] = "attendance_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["attendance_status"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "attendance_status";
//	pre_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "pre_test_score";
	$fdata["GoodName"] = "pre_test_score";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","pre_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "pre_test_score";

	
	
		$fdata["FullName"] = "pre_test_score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["pre_test_score"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "pre_test_score";
//	post_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "post_test_score";
	$fdata["GoodName"] = "post_test_score";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","post_test_score");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "post_test_score";

	
	
		$fdata["FullName"] = "post_test_score";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["post_test_score"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "post_test_score";
//	ceu_points
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ceu_points";
	$fdata["GoodName"] = "ceu_points";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking_Chart","ceu_points");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ceu_points";

	
	
		$fdata["FullName"] = "ceu_points";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdataaio_training_tracking_chart["ceu_points"] = $fdata;
		$tdataaio_training_tracking_chart[".searchableFields"][] = "ceu_points";

$tdataaio_training_tracking_chart[".groupChart"] = true;
$tdataaio_training_tracking_chart[".chartLabelInterval"] = 0;
$tdataaio_training_tracking_chart[".chartLabelField"] = "training_name";
$tdataaio_training_tracking_chart[".chartSeries"] = array();
$tdataaio_training_tracking_chart[".chartSeries"][] = array(
	"field" => "post_test_score",
	"total" => "AVG"
);
$tdataaio_training_tracking_chart[".chartSeries"][] = array(
	"field" => "pre_test_score",
	"total" => "AVG"
);
	$tdataaio_training_tracking_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">aio_training_tracking Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">post_test_score</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="1">
			<attr value="name">pre_test_score</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">training_name</attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="head">'.xmlencode("AIO Training Tracking Chart").'</attr>
<attr value="foot">'.xmlencode("Training").'</attr>
<attr value="y_axis_label">'.xmlencode("Score").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdataaio_training_tracking_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">participant_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","participant_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">title</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","title")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">first_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","first_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="3">
		<attr value="name">middle_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","middle_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="4">
		<attr value="name">last_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","last_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="5">
		<attr value="name">gender</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","gender")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="6">
		<attr value="name">participant_role</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","participant_role")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="7">
		<attr value="name">country</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","country")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="8">
		<attr value="name">facility</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","facility")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="9">
		<attr value="name">phone</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","phone")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="10">
		<attr value="name">email</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","email")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="11">
		<attr value="name">training_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","training_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="12">
		<attr value="name">training_name</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","training_name")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="13">
		<attr value="name">program</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","program")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="14">
		<attr value="name">partners</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","partners")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="15">
		<attr value="name">training_type</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","training_type")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="16">
		<attr value="name">training_approach</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","training_approach")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="17">
		<attr value="name">training_language</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","training_language")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="18">
		<attr value="name">training_lead</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","training_lead")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="19">
		<attr value="name">quarter</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","quarter")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="20">
		<attr value="name">start_date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","start_date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="21">
		<attr value="name">end_date</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","end_date")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="22">
		<attr value="name">total_days</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","total_days")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="23">
		<attr value="name">days_recorded</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","days_recorded")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="24">
		<attr value="name">days_attended</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","days_attended")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="25">
		<attr value="name">attendance_percentage</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","attendance_percentage")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="26">
		<attr value="name">attendance_status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","attendance_status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="27">
		<attr value="name">pre_test_score</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","pre_test_score")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="28">
		<attr value="name">post_test_score</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","post_test_score")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdataaio_training_tracking_chart[".chartXml"] .= '<attr value="29">
		<attr value="name">ceu_points</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("aio_training_tracking_Chart","ceu_points")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdataaio_training_tracking_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">aio_training_tracking Chart</attr>
<attr value="short_table_name">aio_training_tracking_chart</attr>
</attr>

</chart>';

$tables_data["aio_training_tracking Chart"]=&$tdataaio_training_tracking_chart;
$field_labels["aio_training_tracking_Chart"] = &$fieldLabelsaio_training_tracking_chart;
$fieldToolTips["aio_training_tracking_Chart"] = &$fieldToolTipsaio_training_tracking_chart;
$placeHolders["aio_training_tracking_Chart"] = &$placeHoldersaio_training_tracking_chart;
$page_titles["aio_training_tracking_Chart"] = &$pageTitlesaio_training_tracking_chart;


changeTextControlsToDate( "aio_training_tracking Chart" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aio_training_tracking Chart"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aio_training_tracking Chart"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="aio_training_tracking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="aio_training_tracking";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "aio_training_tracking";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["aio_training_tracking Chart"][0] = $masterParams;
				$masterTablesData["aio_training_tracking Chart"][0]["masterKeys"] = array();
	$masterTablesData["aio_training_tracking Chart"][0]["masterKeys"][]="participant_id";
				$masterTablesData["aio_training_tracking Chart"][0]["detailKeys"] = array();
	$masterTablesData["aio_training_tracking Chart"][0]["detailKeys"][]="participant_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/aio_training_tracking_chart_ops.php" ) );



	
				;

																														

$tdataaio_training_tracking_chart[".sqlquery"] = $queryData_aio_training_tracking_chart;



$tdataaio_training_tracking_chart[".hasEvents"] = false;

?>