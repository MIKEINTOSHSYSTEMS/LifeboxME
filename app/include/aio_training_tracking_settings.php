<?php
$tdataaio_training_tracking = array();
$tdataaio_training_tracking[".searchableFields"] = array();
$tdataaio_training_tracking[".ShortName"] = "aio_training_tracking";
$tdataaio_training_tracking[".OwnerID"] = "";
$tdataaio_training_tracking[".OriginalTable"] = "aio_training_tracking";


$tdataaio_training_tracking[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataaio_training_tracking[".originalPagesByType"] = $tdataaio_training_tracking[".pagesByType"];
$tdataaio_training_tracking[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataaio_training_tracking[".originalPages"] = $tdataaio_training_tracking[".pages"];
$tdataaio_training_tracking[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataaio_training_tracking[".originalDefaultPages"] = $tdataaio_training_tracking[".defaultPages"];

//	field labels
$fieldLabelsaio_training_tracking = array();
$fieldToolTipsaio_training_tracking = array();
$pageTitlesaio_training_tracking = array();
$placeHoldersaio_training_tracking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaio_training_tracking["English"] = array();
	$fieldToolTipsaio_training_tracking["English"] = array();
	$placeHoldersaio_training_tracking["English"] = array();
	$pageTitlesaio_training_tracking["English"] = array();
	$fieldLabelsaio_training_tracking["English"]["participant_id"] = "P.ID";
	$fieldToolTipsaio_training_tracking["English"]["participant_id"] = "";
	$placeHoldersaio_training_tracking["English"]["participant_id"] = "";
	$fieldLabelsaio_training_tracking["English"]["title"] = "Title";
	$fieldToolTipsaio_training_tracking["English"]["title"] = "";
	$placeHoldersaio_training_tracking["English"]["title"] = "";
	$fieldLabelsaio_training_tracking["English"]["first_name"] = "First Name";
	$fieldToolTipsaio_training_tracking["English"]["first_name"] = "";
	$placeHoldersaio_training_tracking["English"]["first_name"] = "";
	$fieldLabelsaio_training_tracking["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsaio_training_tracking["English"]["middle_name"] = "";
	$placeHoldersaio_training_tracking["English"]["middle_name"] = "";
	$fieldLabelsaio_training_tracking["English"]["last_name"] = "Last Name";
	$fieldToolTipsaio_training_tracking["English"]["last_name"] = "";
	$placeHoldersaio_training_tracking["English"]["last_name"] = "";
	$fieldLabelsaio_training_tracking["English"]["gender"] = "Gender";
	$fieldToolTipsaio_training_tracking["English"]["gender"] = "";
	$placeHoldersaio_training_tracking["English"]["gender"] = "";
	$fieldLabelsaio_training_tracking["English"]["participant_role"] = "Role";
	$fieldToolTipsaio_training_tracking["English"]["participant_role"] = "";
	$placeHoldersaio_training_tracking["English"]["participant_role"] = "";
	$fieldLabelsaio_training_tracking["English"]["country"] = "Country";
	$fieldToolTipsaio_training_tracking["English"]["country"] = "";
	$placeHoldersaio_training_tracking["English"]["country"] = "";
	$fieldLabelsaio_training_tracking["English"]["facility"] = "Facility";
	$fieldToolTipsaio_training_tracking["English"]["facility"] = "";
	$placeHoldersaio_training_tracking["English"]["facility"] = "";
	$fieldLabelsaio_training_tracking["English"]["phone"] = "Phone";
	$fieldToolTipsaio_training_tracking["English"]["phone"] = "";
	$placeHoldersaio_training_tracking["English"]["phone"] = "";
	$fieldLabelsaio_training_tracking["English"]["email"] = "Email";
	$fieldToolTipsaio_training_tracking["English"]["email"] = "";
	$placeHoldersaio_training_tracking["English"]["email"] = "";
	$fieldLabelsaio_training_tracking["English"]["training_id"] = "Session#";
	$fieldToolTipsaio_training_tracking["English"]["training_id"] = "";
	$placeHoldersaio_training_tracking["English"]["training_id"] = "";
	$fieldLabelsaio_training_tracking["English"]["training_name"] = "Training Name";
	$fieldToolTipsaio_training_tracking["English"]["training_name"] = "";
	$placeHoldersaio_training_tracking["English"]["training_name"] = "";
	$fieldLabelsaio_training_tracking["English"]["program"] = "Program";
	$fieldToolTipsaio_training_tracking["English"]["program"] = "";
	$placeHoldersaio_training_tracking["English"]["program"] = "";
	$fieldLabelsaio_training_tracking["English"]["partners"] = "Partners";
	$fieldToolTipsaio_training_tracking["English"]["partners"] = "";
	$placeHoldersaio_training_tracking["English"]["partners"] = "";
	$fieldLabelsaio_training_tracking["English"]["training_type"] = "Training Type";
	$fieldToolTipsaio_training_tracking["English"]["training_type"] = "";
	$placeHoldersaio_training_tracking["English"]["training_type"] = "";
	$fieldLabelsaio_training_tracking["English"]["training_approach"] = "Training Approach";
	$fieldToolTipsaio_training_tracking["English"]["training_approach"] = "";
	$placeHoldersaio_training_tracking["English"]["training_approach"] = "";
	$fieldLabelsaio_training_tracking["English"]["training_language"] = "Training Language";
	$fieldToolTipsaio_training_tracking["English"]["training_language"] = "";
	$placeHoldersaio_training_tracking["English"]["training_language"] = "";
	$fieldLabelsaio_training_tracking["English"]["start_date"] = "Start Date";
	$fieldToolTipsaio_training_tracking["English"]["start_date"] = "";
	$placeHoldersaio_training_tracking["English"]["start_date"] = "";
	$fieldLabelsaio_training_tracking["English"]["end_date"] = "End Date";
	$fieldToolTipsaio_training_tracking["English"]["end_date"] = "";
	$placeHoldersaio_training_tracking["English"]["end_date"] = "";
	$fieldLabelsaio_training_tracking["English"]["total_days"] = "Total Days";
	$fieldToolTipsaio_training_tracking["English"]["total_days"] = "";
	$placeHoldersaio_training_tracking["English"]["total_days"] = "";
	$fieldLabelsaio_training_tracking["English"]["days_recorded"] = "Days Recorded";
	$fieldToolTipsaio_training_tracking["English"]["days_recorded"] = "";
	$placeHoldersaio_training_tracking["English"]["days_recorded"] = "";
	$fieldLabelsaio_training_tracking["English"]["days_attended"] = "Days Attended";
	$fieldToolTipsaio_training_tracking["English"]["days_attended"] = "";
	$placeHoldersaio_training_tracking["English"]["days_attended"] = "";
	$fieldLabelsaio_training_tracking["English"]["attendance_percentage"] = "Attendance %";
	$fieldToolTipsaio_training_tracking["English"]["attendance_percentage"] = "";
	$placeHoldersaio_training_tracking["English"]["attendance_percentage"] = "";
	$fieldLabelsaio_training_tracking["English"]["attendance_status"] = "Attendance Status";
	$fieldToolTipsaio_training_tracking["English"]["attendance_status"] = "";
	$placeHoldersaio_training_tracking["English"]["attendance_status"] = "";
	$fieldLabelsaio_training_tracking["English"]["pre_test_score"] = "Pre Test Score";
	$fieldToolTipsaio_training_tracking["English"]["pre_test_score"] = "";
	$placeHoldersaio_training_tracking["English"]["pre_test_score"] = "";
	$fieldLabelsaio_training_tracking["English"]["post_test_score"] = "Post Test Score";
	$fieldToolTipsaio_training_tracking["English"]["post_test_score"] = "";
	$placeHoldersaio_training_tracking["English"]["post_test_score"] = "";
	$fieldLabelsaio_training_tracking["English"]["ceu_points"] = "Ceu Points";
	$fieldToolTipsaio_training_tracking["English"]["ceu_points"] = "";
	$placeHoldersaio_training_tracking["English"]["ceu_points"] = "";
	$fieldLabelsaio_training_tracking["English"]["training_lead"] = "Training Lead";
	$fieldToolTipsaio_training_tracking["English"]["training_lead"] = "";
	$placeHoldersaio_training_tracking["English"]["training_lead"] = "";
	$fieldLabelsaio_training_tracking["English"]["quarter"] = "Quarter";
	$fieldToolTipsaio_training_tracking["English"]["quarter"] = "";
	$placeHoldersaio_training_tracking["English"]["quarter"] = "";
	if (count($fieldToolTipsaio_training_tracking["English"]))
		$tdataaio_training_tracking[".isUseToolTips"] = true;
}


	$tdataaio_training_tracking[".NCSearch"] = true;



$tdataaio_training_tracking[".shortTableName"] = "aio_training_tracking";
$tdataaio_training_tracking[".nSecOptions"] = 0;

$tdataaio_training_tracking[".mainTableOwnerID"] = "";
$tdataaio_training_tracking[".entityType"] = 6;
$tdataaio_training_tracking[".connId"] = "lifebox_mesystem_at_localhost";


$tdataaio_training_tracking[".strOriginalTableName"] = "aio_training_tracking";

	



$tdataaio_training_tracking[".showAddInPopup"] = false;

$tdataaio_training_tracking[".showEditInPopup"] = false;

$tdataaio_training_tracking[".showViewInPopup"] = false;

$tdataaio_training_tracking[".listAjax"] = false;
//	temporary
//$tdataaio_training_tracking[".listAjax"] = false;

	$tdataaio_training_tracking[".audit"] = false;

	$tdataaio_training_tracking[".locking"] = false;


$pages = $tdataaio_training_tracking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaio_training_tracking[".edit"] = true;
	$tdataaio_training_tracking[".afterEditAction"] = 1;
	$tdataaio_training_tracking[".closePopupAfterEdit"] = 1;
	$tdataaio_training_tracking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaio_training_tracking[".add"] = true;
$tdataaio_training_tracking[".afterAddAction"] = 1;
$tdataaio_training_tracking[".closePopupAfterAdd"] = 1;
$tdataaio_training_tracking[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaio_training_tracking[".list"] = true;
}



$tdataaio_training_tracking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaio_training_tracking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaio_training_tracking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaio_training_tracking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaio_training_tracking[".printFriendly"] = true;
}



$tdataaio_training_tracking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaio_training_tracking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaio_training_tracking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaio_training_tracking[".isUseAjaxSuggest"] = true;





$tdataaio_training_tracking[".ajaxCodeSnippetAdded"] = false;

$tdataaio_training_tracking[".buttonsAdded"] = false;

$tdataaio_training_tracking[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaio_training_tracking[".isUseTimeForSearch"] = false;


$tdataaio_training_tracking[".badgeColor"] = "e8926f";


$tdataaio_training_tracking[".allSearchFields"] = array();
$tdataaio_training_tracking[".filterFields"] = array();
$tdataaio_training_tracking[".requiredSearchFields"] = array();

$tdataaio_training_tracking[".googleLikeFields"] = array();
$tdataaio_training_tracking[".googleLikeFields"][] = "participant_id";
$tdataaio_training_tracking[".googleLikeFields"][] = "title";
$tdataaio_training_tracking[".googleLikeFields"][] = "first_name";
$tdataaio_training_tracking[".googleLikeFields"][] = "middle_name";
$tdataaio_training_tracking[".googleLikeFields"][] = "last_name";
$tdataaio_training_tracking[".googleLikeFields"][] = "gender";
$tdataaio_training_tracking[".googleLikeFields"][] = "participant_role";
$tdataaio_training_tracking[".googleLikeFields"][] = "country";
$tdataaio_training_tracking[".googleLikeFields"][] = "facility";
$tdataaio_training_tracking[".googleLikeFields"][] = "phone";
$tdataaio_training_tracking[".googleLikeFields"][] = "email";
$tdataaio_training_tracking[".googleLikeFields"][] = "training_id";
$tdataaio_training_tracking[".googleLikeFields"][] = "training_name";
$tdataaio_training_tracking[".googleLikeFields"][] = "program";
$tdataaio_training_tracking[".googleLikeFields"][] = "partners";
$tdataaio_training_tracking[".googleLikeFields"][] = "training_type";
$tdataaio_training_tracking[".googleLikeFields"][] = "training_approach";
$tdataaio_training_tracking[".googleLikeFields"][] = "training_language";
$tdataaio_training_tracking[".googleLikeFields"][] = "training_lead";
$tdataaio_training_tracking[".googleLikeFields"][] = "quarter";
$tdataaio_training_tracking[".googleLikeFields"][] = "start_date";
$tdataaio_training_tracking[".googleLikeFields"][] = "end_date";
$tdataaio_training_tracking[".googleLikeFields"][] = "total_days";
$tdataaio_training_tracking[".googleLikeFields"][] = "days_recorded";
$tdataaio_training_tracking[".googleLikeFields"][] = "days_attended";
$tdataaio_training_tracking[".googleLikeFields"][] = "attendance_percentage";
$tdataaio_training_tracking[".googleLikeFields"][] = "attendance_status";
$tdataaio_training_tracking[".googleLikeFields"][] = "pre_test_score";
$tdataaio_training_tracking[".googleLikeFields"][] = "post_test_score";
$tdataaio_training_tracking[".googleLikeFields"][] = "ceu_points";




$tdataaio_training_tracking[".printerPageOrientation"] = 0;
$tdataaio_training_tracking[".nPrinterPageScale"] = 100;

$tdataaio_training_tracking[".nPrinterSplitRecords"] = 40;

$tdataaio_training_tracking[".geocodingEnabled"] = false;




$tdataaio_training_tracking[".isDisplayLoading"] = true;






$tdataaio_training_tracking[".pageSize"] = 20;

$tdataaio_training_tracking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaio_training_tracking[".strOrderBy"] = $tstrOrderBy;

$tdataaio_training_tracking[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdataaio_training_tracking[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdataaio_training_tracking[".sqlHead"] = "";
$tdataaio_training_tracking[".sqlFrom"] = "";
$tdataaio_training_tracking[".sqlWhereExpr"] = "";
$tdataaio_training_tracking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaio_training_tracking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaio_training_tracking[".arrGroupsPerPage"] = $arrGPP;

$tdataaio_training_tracking[".highlightSearchResults"] = true;

$tableKeysaio_training_tracking = array();
$tdataaio_training_tracking[".Keys"] = $tableKeysaio_training_tracking;


$tdataaio_training_tracking[".hideMobileList"] = array();




//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","participant_id");
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


	$tdataaio_training_tracking["participant_id"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "participant_id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","title");
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


	$tdataaio_training_tracking["title"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "title";
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","first_name");
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


	$tdataaio_training_tracking["first_name"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "first_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","middle_name");
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


	$tdataaio_training_tracking["middle_name"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "middle_name";
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","last_name");
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


	$tdataaio_training_tracking["last_name"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "last_name";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","gender");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataaio_training_tracking["gender"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "gender";
//	participant_role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "participant_role";
	$fdata["GoodName"] = "participant_role";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","participant_role");
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


	$tdataaio_training_tracking["participant_role"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "participant_role";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","country");
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

	$fdata["ViewFormats"]["view"] = $vdata;
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


	$tdataaio_training_tracking["country"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "country";
//	facility
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "facility";
	$fdata["GoodName"] = "facility";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","facility");
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


	$tdataaio_training_tracking["facility"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "facility";
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","phone");
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


	$tdataaio_training_tracking["phone"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "phone";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

	
	
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


	$tdataaio_training_tracking["email"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "email";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","training_id");
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


	$tdataaio_training_tracking["training_id"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "training_id";
//	training_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "training_name";
	$fdata["GoodName"] = "training_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","training_name");
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


	$tdataaio_training_tracking["training_name"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "training_name";
//	program
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "program";
	$fdata["GoodName"] = "program";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","program");
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


	$tdataaio_training_tracking["program"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "program";
//	partners
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "partners";
	$fdata["GoodName"] = "partners";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","partners");
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


	$tdataaio_training_tracking["partners"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "partners";
//	training_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "training_type";
	$fdata["GoodName"] = "training_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","training_type");
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


	$tdataaio_training_tracking["training_type"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "training_type";
//	training_approach
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "training_approach";
	$fdata["GoodName"] = "training_approach";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","training_approach");
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


	$tdataaio_training_tracking["training_approach"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "training_approach";
//	training_language
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "training_language";
	$fdata["GoodName"] = "training_language";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","training_language");
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


	$tdataaio_training_tracking["training_language"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "training_language";
//	training_lead
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "training_lead";
	$fdata["GoodName"] = "training_lead";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","training_lead");
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


	$tdataaio_training_tracking["training_lead"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "training_lead";
//	quarter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "quarter";
	$fdata["GoodName"] = "quarter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","quarter");
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


	$tdataaio_training_tracking["quarter"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "quarter";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","start_date");
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


	$tdataaio_training_tracking["start_date"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","end_date");
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


	$tdataaio_training_tracking["end_date"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "end_date";
//	total_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total_days";
	$fdata["GoodName"] = "total_days";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","total_days");
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


	$tdataaio_training_tracking["total_days"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "total_days";
//	days_recorded
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "days_recorded";
	$fdata["GoodName"] = "days_recorded";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","days_recorded");
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


	$tdataaio_training_tracking["days_recorded"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "days_recorded";
//	days_attended
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "days_attended";
	$fdata["GoodName"] = "days_attended";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","days_attended");
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


	$tdataaio_training_tracking["days_attended"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "days_attended";
//	attendance_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "attendance_percentage";
	$fdata["GoodName"] = "attendance_percentage";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","attendance_percentage");
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


	$tdataaio_training_tracking["attendance_percentage"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "attendance_percentage";
//	attendance_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "attendance_status";
	$fdata["GoodName"] = "attendance_status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","attendance_status");
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


	$tdataaio_training_tracking["attendance_status"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "attendance_status";
//	pre_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "pre_test_score";
	$fdata["GoodName"] = "pre_test_score";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","pre_test_score");
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


	$tdataaio_training_tracking["pre_test_score"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "pre_test_score";
//	post_test_score
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "post_test_score";
	$fdata["GoodName"] = "post_test_score";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","post_test_score");
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


	$tdataaio_training_tracking["post_test_score"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "post_test_score";
//	ceu_points
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ceu_points";
	$fdata["GoodName"] = "ceu_points";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("aio_training_tracking","ceu_points");
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


	$tdataaio_training_tracking["ceu_points"] = $fdata;
		$tdataaio_training_tracking[".searchableFields"][] = "ceu_points";


$tables_data["aio_training_tracking"]=&$tdataaio_training_tracking;
$field_labels["aio_training_tracking"] = &$fieldLabelsaio_training_tracking;
$fieldToolTips["aio_training_tracking"] = &$fieldToolTipsaio_training_tracking;
$placeHolders["aio_training_tracking"] = &$placeHoldersaio_training_tracking;
$page_titles["aio_training_tracking"] = &$pageTitlesaio_training_tracking;


changeTextControlsToDate( "aio_training_tracking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["aio_training_tracking"] = array();
//	aio_training_tracking Chart
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="aio_training_tracking Chart";
		$detailsParam["dOriginalTable"] = "aio_training_tracking";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "aio_training_tracking_chart";
	$detailsParam["dCaptionTable"] = GetTableCaption("aio_training_tracking_Chart");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["aio_training_tracking"][$dIndex] = $detailsParam;

	
		$detailsTablesData["aio_training_tracking"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["aio_training_tracking"][$dIndex]["masterKeys"][]="participant_id";

				$detailsTablesData["aio_training_tracking"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["aio_training_tracking"][$dIndex]["detailKeys"][]="participant_id";
//	aio_training_tracking Chart by sex
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="aio_training_tracking Chart by sex";
		$detailsParam["dOriginalTable"] = "aio_training_tracking";



			$detailsParam["dType"]=PAGE_CHART;

		$detailsParam["dShortTable"] = "aio_training_tracking_chart_by_sex";
	$detailsParam["dCaptionTable"] = GetTableCaption("aio_training_tracking_Chart_by_sex");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["aio_training_tracking"][$dIndex] = $detailsParam;

	
		$detailsTablesData["aio_training_tracking"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["aio_training_tracking"][$dIndex]["masterKeys"][]="participant_id";

				$detailsTablesData["aio_training_tracking"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["aio_training_tracking"][$dIndex]["detailKeys"][]="participant_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["aio_training_tracking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/aio_training_tracking_ops.php" ) );



	
				;

																														

$tdataaio_training_tracking[".sqlquery"] = $queryData_aio_training_tracking;



$tdataaio_training_tracking[".hasEvents"] = false;

?>