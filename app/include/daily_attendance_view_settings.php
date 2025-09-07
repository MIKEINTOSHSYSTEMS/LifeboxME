<?php
$tdatadaily_attendance_view = array();
$tdatadaily_attendance_view[".searchableFields"] = array();
$tdatadaily_attendance_view[".ShortName"] = "daily_attendance_view";
$tdatadaily_attendance_view[".OwnerID"] = "";
$tdatadaily_attendance_view[".OriginalTable"] = "public.daily_attendance_view";


$tdatadaily_attendance_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadaily_attendance_view[".originalPagesByType"] = $tdatadaily_attendance_view[".pagesByType"];
$tdatadaily_attendance_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadaily_attendance_view[".originalPages"] = $tdatadaily_attendance_view[".pages"];
$tdatadaily_attendance_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadaily_attendance_view[".originalDefaultPages"] = $tdatadaily_attendance_view[".defaultPages"];

//	field labels
$fieldLabelsdaily_attendance_view = array();
$fieldToolTipsdaily_attendance_view = array();
$pageTitlesdaily_attendance_view = array();
$placeHoldersdaily_attendance_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaily_attendance_view["English"] = array();
	$fieldToolTipsdaily_attendance_view["English"] = array();
	$placeHoldersdaily_attendance_view["English"] = array();
	$pageTitlesdaily_attendance_view["English"] = array();
	$fieldLabelsdaily_attendance_view["English"]["training_id"] = "Training Id";
	$fieldToolTipsdaily_attendance_view["English"]["training_id"] = "";
	$placeHoldersdaily_attendance_view["English"]["training_id"] = "";
	$fieldLabelsdaily_attendance_view["English"]["training_name"] = "Training Name";
	$fieldToolTipsdaily_attendance_view["English"]["training_name"] = "";
	$placeHoldersdaily_attendance_view["English"]["training_name"] = "";
	$fieldLabelsdaily_attendance_view["English"]["start_date"] = "Start Date";
	$fieldToolTipsdaily_attendance_view["English"]["start_date"] = "";
	$placeHoldersdaily_attendance_view["English"]["start_date"] = "";
	$fieldLabelsdaily_attendance_view["English"]["end_date"] = "End Date";
	$fieldToolTipsdaily_attendance_view["English"]["end_date"] = "";
	$placeHoldersdaily_attendance_view["English"]["end_date"] = "";
	$fieldLabelsdaily_attendance_view["English"]["total_days"] = "Total Days";
	$fieldToolTipsdaily_attendance_view["English"]["total_days"] = "";
	$placeHoldersdaily_attendance_view["English"]["total_days"] = "";
	$fieldLabelsdaily_attendance_view["English"]["day_number"] = "Day Number";
	$fieldToolTipsdaily_attendance_view["English"]["day_number"] = "";
	$placeHoldersdaily_attendance_view["English"]["day_number"] = "";
	$fieldLabelsdaily_attendance_view["English"]["calendar_date"] = "Calendar Date";
	$fieldToolTipsdaily_attendance_view["English"]["calendar_date"] = "";
	$placeHoldersdaily_attendance_view["English"]["calendar_date"] = "";
	$fieldLabelsdaily_attendance_view["English"]["total_participants"] = "Total Participants";
	$fieldToolTipsdaily_attendance_view["English"]["total_participants"] = "";
	$placeHoldersdaily_attendance_view["English"]["total_participants"] = "";
	$fieldLabelsdaily_attendance_view["English"]["participants_present"] = "Participants Present";
	$fieldToolTipsdaily_attendance_view["English"]["participants_present"] = "";
	$placeHoldersdaily_attendance_view["English"]["participants_present"] = "";
	$fieldLabelsdaily_attendance_view["English"]["attendance_percentage"] = "Attendance Percentage";
	$fieldToolTipsdaily_attendance_view["English"]["attendance_percentage"] = "";
	$placeHoldersdaily_attendance_view["English"]["attendance_percentage"] = "";
	if (count($fieldToolTipsdaily_attendance_view["English"]))
		$tdatadaily_attendance_view[".isUseToolTips"] = true;
}


	$tdatadaily_attendance_view[".NCSearch"] = true;



$tdatadaily_attendance_view[".shortTableName"] = "daily_attendance_view";
$tdatadaily_attendance_view[".nSecOptions"] = 0;

$tdatadaily_attendance_view[".mainTableOwnerID"] = "";
$tdatadaily_attendance_view[".entityType"] = 0;
$tdatadaily_attendance_view[".connId"] = "lifebox_mesystem_at_localhost";


$tdatadaily_attendance_view[".strOriginalTableName"] = "public.daily_attendance_view";

	



$tdatadaily_attendance_view[".showAddInPopup"] = false;

$tdatadaily_attendance_view[".showEditInPopup"] = false;

$tdatadaily_attendance_view[".showViewInPopup"] = false;

$tdatadaily_attendance_view[".listAjax"] = false;
//	temporary
//$tdatadaily_attendance_view[".listAjax"] = false;

	$tdatadaily_attendance_view[".audit"] = true;

	$tdatadaily_attendance_view[".locking"] = false;


$pages = $tdatadaily_attendance_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadaily_attendance_view[".edit"] = true;
	$tdatadaily_attendance_view[".afterEditAction"] = 1;
	$tdatadaily_attendance_view[".closePopupAfterEdit"] = 1;
	$tdatadaily_attendance_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadaily_attendance_view[".add"] = true;
$tdatadaily_attendance_view[".afterAddAction"] = 1;
$tdatadaily_attendance_view[".closePopupAfterAdd"] = 1;
$tdatadaily_attendance_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadaily_attendance_view[".list"] = true;
}



$tdatadaily_attendance_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadaily_attendance_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadaily_attendance_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadaily_attendance_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadaily_attendance_view[".printFriendly"] = true;
}



$tdatadaily_attendance_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadaily_attendance_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadaily_attendance_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadaily_attendance_view[".isUseAjaxSuggest"] = true;





$tdatadaily_attendance_view[".ajaxCodeSnippetAdded"] = false;

$tdatadaily_attendance_view[".buttonsAdded"] = false;

$tdatadaily_attendance_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaily_attendance_view[".isUseTimeForSearch"] = false;


$tdatadaily_attendance_view[".badgeColor"] = "E07878";


$tdatadaily_attendance_view[".allSearchFields"] = array();
$tdatadaily_attendance_view[".filterFields"] = array();
$tdatadaily_attendance_view[".requiredSearchFields"] = array();

$tdatadaily_attendance_view[".googleLikeFields"] = array();
$tdatadaily_attendance_view[".googleLikeFields"][] = "training_id";
$tdatadaily_attendance_view[".googleLikeFields"][] = "training_name";
$tdatadaily_attendance_view[".googleLikeFields"][] = "start_date";
$tdatadaily_attendance_view[".googleLikeFields"][] = "end_date";
$tdatadaily_attendance_view[".googleLikeFields"][] = "total_days";
$tdatadaily_attendance_view[".googleLikeFields"][] = "day_number";
$tdatadaily_attendance_view[".googleLikeFields"][] = "calendar_date";
$tdatadaily_attendance_view[".googleLikeFields"][] = "total_participants";
$tdatadaily_attendance_view[".googleLikeFields"][] = "participants_present";
$tdatadaily_attendance_view[".googleLikeFields"][] = "attendance_percentage";



$tdatadaily_attendance_view[".tableType"] = "list";

$tdatadaily_attendance_view[".printerPageOrientation"] = 0;
$tdatadaily_attendance_view[".nPrinterPageScale"] = 100;

$tdatadaily_attendance_view[".nPrinterSplitRecords"] = 40;

$tdatadaily_attendance_view[".geocodingEnabled"] = false;










$tdatadaily_attendance_view[".pageSize"] = 20;

$tdatadaily_attendance_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadaily_attendance_view[".strOrderBy"] = $tstrOrderBy;

$tdatadaily_attendance_view[".orderindexes"] = array();


$tdatadaily_attendance_view[".sqlHead"] = "SELECT training_id,  	training_name,  	start_date,  	end_date,  	total_days,  	day_number,  	calendar_date,  	total_participants,  	participants_present,  	attendance_percentage";
$tdatadaily_attendance_view[".sqlFrom"] = "FROM \"public\".daily_attendance_view";
$tdatadaily_attendance_view[".sqlWhereExpr"] = "";
$tdatadaily_attendance_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaily_attendance_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaily_attendance_view[".arrGroupsPerPage"] = $arrGPP;

$tdatadaily_attendance_view[".highlightSearchResults"] = true;

$tableKeysdaily_attendance_view = array();
$tdatadaily_attendance_view[".Keys"] = $tableKeysdaily_attendance_view;


$tdatadaily_attendance_view[".hideMobileList"] = array();




//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","training_id");
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


	$tdatadaily_attendance_view["training_id"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "training_id";
//	training_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "training_name";
	$fdata["GoodName"] = "training_name";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","training_name");
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


	$tdatadaily_attendance_view["training_name"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "training_name";
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","start_date");
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


	$tdatadaily_attendance_view["start_date"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "start_date";
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","end_date");
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


	$tdatadaily_attendance_view["end_date"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "end_date";
//	total_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total_days";
	$fdata["GoodName"] = "total_days";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","total_days");
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


	$tdatadaily_attendance_view["total_days"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "total_days";
//	day_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "day_number";
	$fdata["GoodName"] = "day_number";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","day_number");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "day_number";

		$fdata["sourceSingle"] = "day_number";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "day_number";

	
	
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


	$tdatadaily_attendance_view["day_number"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "day_number";
//	calendar_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calendar_date";
	$fdata["GoodName"] = "calendar_date";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","calendar_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "calendar_date";

		$fdata["sourceSingle"] = "calendar_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calendar_date";

	
	
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


	$tdatadaily_attendance_view["calendar_date"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "calendar_date";
//	total_participants
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "total_participants";
	$fdata["GoodName"] = "total_participants";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","total_participants");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "total_participants";

		$fdata["sourceSingle"] = "total_participants";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_participants";

	
	
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


	$tdatadaily_attendance_view["total_participants"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "total_participants";
//	participants_present
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "participants_present";
	$fdata["GoodName"] = "participants_present";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","participants_present");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "participants_present";

		$fdata["sourceSingle"] = "participants_present";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participants_present";

	
	
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


	$tdatadaily_attendance_view["participants_present"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "participants_present";
//	attendance_percentage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "attendance_percentage";
	$fdata["GoodName"] = "attendance_percentage";
	$fdata["ownerTable"] = "public.daily_attendance_view";
	$fdata["Label"] = GetFieldLabel("public_daily_attendance_view","attendance_percentage");
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


	$tdatadaily_attendance_view["attendance_percentage"] = $fdata;
		$tdatadaily_attendance_view[".searchableFields"][] = "attendance_percentage";


$tables_data["public.daily_attendance_view"]=&$tdatadaily_attendance_view;
$field_labels["public_daily_attendance_view"] = &$fieldLabelsdaily_attendance_view;
$fieldToolTips["public_daily_attendance_view"] = &$fieldToolTipsdaily_attendance_view;
$placeHolders["public_daily_attendance_view"] = &$placeHoldersdaily_attendance_view;
$page_titles["public_daily_attendance_view"] = &$pageTitlesdaily_attendance_view;


changeTextControlsToDate( "public.daily_attendance_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.daily_attendance_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.daily_attendance_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_daily_attendance_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "training_id,  	training_name,  	start_date,  	end_date,  	total_days,  	day_number,  	calendar_date,  	total_participants,  	participants_present,  	attendance_percentage";
$proto0["m_strFrom"] = "FROM \"public\".daily_attendance_view";
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
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto6["m_sql"] = "training_id";
$proto6["m_srcTableName"] = "public.daily_attendance_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "training_name",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto8["m_sql"] = "training_name";
$proto8["m_srcTableName"] = "public.daily_attendance_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto10["m_sql"] = "start_date";
$proto10["m_srcTableName"] = "public.daily_attendance_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto12["m_sql"] = "end_date";
$proto12["m_srcTableName"] = "public.daily_attendance_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total_days",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto14["m_sql"] = "total_days";
$proto14["m_srcTableName"] = "public.daily_attendance_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "day_number",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto16["m_sql"] = "day_number";
$proto16["m_srcTableName"] = "public.daily_attendance_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "calendar_date",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto18["m_sql"] = "calendar_date";
$proto18["m_srcTableName"] = "public.daily_attendance_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "total_participants",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto20["m_sql"] = "total_participants";
$proto20["m_srcTableName"] = "public.daily_attendance_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "participants_present",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto22["m_sql"] = "participants_present";
$proto22["m_srcTableName"] = "public.daily_attendance_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance_percentage",
	"m_strTable" => "public.daily_attendance_view",
	"m_srcTableName" => "public.daily_attendance_view"
));

$proto24["m_sql"] = "attendance_percentage";
$proto24["m_srcTableName"] = "public.daily_attendance_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.daily_attendance_view";
$proto27["m_srcTableName"] = "public.daily_attendance_view";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "training_id";
$proto27["m_columns"][] = "training_name";
$proto27["m_columns"][] = "start_date";
$proto27["m_columns"][] = "end_date";
$proto27["m_columns"][] = "total_days";
$proto27["m_columns"][] = "day_number";
$proto27["m_columns"][] = "calendar_date";
$proto27["m_columns"][] = "total_participants";
$proto27["m_columns"][] = "participants_present";
$proto27["m_columns"][] = "attendance_percentage";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".daily_attendance_view";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.daily_attendance_view";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.daily_attendance_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daily_attendance_view = createSqlQuery_daily_attendance_view();


	
				;

										

$tdatadaily_attendance_view[".sqlquery"] = $queryData_daily_attendance_view;



$tdatadaily_attendance_view[".hasEvents"] = false;

?>