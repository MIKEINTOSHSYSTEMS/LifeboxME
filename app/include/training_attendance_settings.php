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
	$fieldLabelstraining_attendance["English"]["attendance_id"] = "Attendance Id";
	$fieldToolTipstraining_attendance["English"]["attendance_id"] = "";
	$placeHolderstraining_attendance["English"]["attendance_id"] = "";
	$fieldLabelstraining_attendance["English"]["participant_id"] = "Training Participant";
	$fieldToolTipstraining_attendance["English"]["participant_id"] = "";
	$placeHolderstraining_attendance["English"]["participant_id"] = "";
	$fieldLabelstraining_attendance["English"]["day_number"] = "Day Number";
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


$tdatatraining_attendance[".badgeColor"] = "E67349";


$tdatatraining_attendance[".allSearchFields"] = array();
$tdatatraining_attendance[".filterFields"] = array();
$tdatatraining_attendance[".requiredSearchFields"] = array();

$tdatatraining_attendance[".googleLikeFields"] = array();
$tdatatraining_attendance[".googleLikeFields"][] = "attendance_id";
$tdatatraining_attendance[".googleLikeFields"][] = "participant_id";
$tdatatraining_attendance[".googleLikeFields"][] = "day_number";
$tdatatraining_attendance[".googleLikeFields"][] = "attended";
$tdatatraining_attendance[".googleLikeFields"][] = "attendance_date";
$tdatatraining_attendance[".googleLikeFields"][] = "notes";
$tdatatraining_attendance[".googleLikeFields"][] = "recorded_at";
$tdatatraining_attendance[".googleLikeFields"][] = "recorded_by";



$tdatatraining_attendance[".tableType"] = "list";

$tdatatraining_attendance[".printerPageOrientation"] = 0;
$tdatatraining_attendance[".nPrinterPageScale"] = 100;

$tdatatraining_attendance[".nPrinterSplitRecords"] = 40;

$tdatatraining_attendance[".geocodingEnabled"] = false;










$tdatatraining_attendance[".pageSize"] = 20;

$tdatatraining_attendance[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatraining_attendance[".strOrderBy"] = $tstrOrderBy;

$tdatatraining_attendance[".orderindexes"] = array();


$tdatatraining_attendance[".sqlHead"] = "SELECT attendance_id,  	participant_id,  	day_number,  	attended,  	attendance_date,  	notes,  	recorded_at,  	recorded_by";
$tdatatraining_attendance[".sqlFrom"] = "FROM \"public\".training_attendance";
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
	$fdata["FullName"] = "attendance_id";

	
	
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
//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","participant_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.training_participants";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "participant_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "first_name";

	

	
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


	$tdatatraining_attendance["participant_id"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "participant_id";
//	day_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "day_number";
	$fdata["GoodName"] = "day_number";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","day_number");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.participant_attendance_summary";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "participant_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "total_days";

	

	
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


	$tdatatraining_attendance["day_number"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "day_number";
//	attended
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "attended";
	$fdata["GoodName"] = "attended";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","attended");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "attended";

		$fdata["sourceSingle"] = "attended";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attended";

	
	
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
	$fdata["filterTotals"] = 0;
				$fdata["filterFormat"] = "Options list";
		$fdata["showCollapsed"] = false;

	
	
	
		$fdata["filterCheckedMessageType"] = "Text";
	$fdata["filterCheckedMessageText"] = "Checked";
	$fdata["filterUncheckedMessageType"] = "Text";
	$fdata["filterUncheckedMessageText"] = "Unchecked";

//end of Filters settings


	$tdatatraining_attendance["attended"] = $fdata;
		$tdatatraining_attendance[".searchableFields"][] = "attended";
//	attendance_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "attendance_date";
	$fdata["GoodName"] = "attendance_date";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","attendance_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "attendance_date";

		$fdata["sourceSingle"] = "attendance_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attendance_date";

	
	
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
	$fdata["Index"] = 6;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","notes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "notes";

		$fdata["sourceSingle"] = "notes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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
	$fdata["Index"] = 7;
	$fdata["strName"] = "recorded_at";
	$fdata["GoodName"] = "recorded_at";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","recorded_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "recorded_at";

		$fdata["sourceSingle"] = "recorded_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recorded_at";

	
	
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
	$fdata["Index"] = 8;
	$fdata["strName"] = "recorded_by";
	$fdata["GoodName"] = "recorded_by";
	$fdata["ownerTable"] = "public.training_attendance";
	$fdata["Label"] = GetFieldLabel("public_training_attendance","recorded_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "recorded_by";

		$fdata["sourceSingle"] = "recorded_by";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recorded_by";

	
	
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
			$strOriginalDetailsTable="public.training_participants";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.training_participants";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "training_participants";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.training_attendance"][0] = $masterParams;
				$masterTablesData["public.training_attendance"][0]["masterKeys"] = array();
	$masterTablesData["public.training_attendance"][0]["masterKeys"][]="participant_id";
				$masterTablesData["public.training_attendance"][0]["detailKeys"] = array();
	$masterTablesData["public.training_attendance"][0]["detailKeys"][]="participant_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_training_attendance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "attendance_id,  	participant_id,  	day_number,  	attended,  	attendance_date,  	notes,  	recorded_at,  	recorded_by";
$proto0["m_strFrom"] = "FROM \"public\".training_attendance";
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
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto6["m_sql"] = "attendance_id";
$proto6["m_srcTableName"] = "public.training_attendance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "participant_id",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto8["m_sql"] = "participant_id";
$proto8["m_srcTableName"] = "public.training_attendance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "day_number",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto10["m_sql"] = "day_number";
$proto10["m_srcTableName"] = "public.training_attendance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "attended",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto12["m_sql"] = "attended";
$proto12["m_srcTableName"] = "public.training_attendance";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance_date",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto14["m_sql"] = "attendance_date";
$proto14["m_srcTableName"] = "public.training_attendance";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto16["m_sql"] = "notes";
$proto16["m_srcTableName"] = "public.training_attendance";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "recorded_at",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto18["m_sql"] = "recorded_at";
$proto18["m_srcTableName"] = "public.training_attendance";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "recorded_by",
	"m_strTable" => "public.training_attendance",
	"m_srcTableName" => "public.training_attendance"
));

$proto20["m_sql"] = "recorded_by";
$proto20["m_srcTableName"] = "public.training_attendance";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "public.training_attendance";
$proto23["m_srcTableName"] = "public.training_attendance";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "attendance_id";
$proto23["m_columns"][] = "participant_id";
$proto23["m_columns"][] = "day_number";
$proto23["m_columns"][] = "attended";
$proto23["m_columns"][] = "attendance_date";
$proto23["m_columns"][] = "notes";
$proto23["m_columns"][] = "recorded_at";
$proto23["m_columns"][] = "recorded_by";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "\"public\".training_attendance";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "public.training_attendance";
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
$proto0["m_srcTableName"]="public.training_attendance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_training_attendance = createSqlQuery_training_attendance();


	
		;

								

$tdatatraining_attendance[".sqlquery"] = $queryData_training_attendance;



$tdatatraining_attendance[".hasEvents"] = false;

?>