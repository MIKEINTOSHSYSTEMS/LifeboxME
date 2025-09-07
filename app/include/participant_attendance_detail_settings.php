<?php
$tdataparticipant_attendance_detail = array();
$tdataparticipant_attendance_detail[".searchableFields"] = array();
$tdataparticipant_attendance_detail[".ShortName"] = "participant_attendance_detail";
$tdataparticipant_attendance_detail[".OwnerID"] = "";
$tdataparticipant_attendance_detail[".OriginalTable"] = "public.participant_attendance_detail";


$tdataparticipant_attendance_detail[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataparticipant_attendance_detail[".originalPagesByType"] = $tdataparticipant_attendance_detail[".pagesByType"];
$tdataparticipant_attendance_detail[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataparticipant_attendance_detail[".originalPages"] = $tdataparticipant_attendance_detail[".pages"];
$tdataparticipant_attendance_detail[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataparticipant_attendance_detail[".originalDefaultPages"] = $tdataparticipant_attendance_detail[".defaultPages"];

//	field labels
$fieldLabelsparticipant_attendance_detail = array();
$fieldToolTipsparticipant_attendance_detail = array();
$pageTitlesparticipant_attendance_detail = array();
$placeHoldersparticipant_attendance_detail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsparticipant_attendance_detail["English"] = array();
	$fieldToolTipsparticipant_attendance_detail["English"] = array();
	$placeHoldersparticipant_attendance_detail["English"] = array();
	$pageTitlesparticipant_attendance_detail["English"] = array();
	$fieldLabelsparticipant_attendance_detail["English"]["participant_id"] = "Participant Id";
	$fieldToolTipsparticipant_attendance_detail["English"]["participant_id"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["participant_id"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["participant_name"] = "Participant Name";
	$fieldToolTipsparticipant_attendance_detail["English"]["participant_name"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["participant_name"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["training_id"] = "Training Id";
	$fieldToolTipsparticipant_attendance_detail["English"]["training_id"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["training_id"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["training_name"] = "Training Name";
	$fieldToolTipsparticipant_attendance_detail["English"]["training_name"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["training_name"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["day_number"] = "Day Number";
	$fieldToolTipsparticipant_attendance_detail["English"]["day_number"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["day_number"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["attendance_date"] = "Attendance Date";
	$fieldToolTipsparticipant_attendance_detail["English"]["attendance_date"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["attendance_date"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["attended"] = "Attended";
	$fieldToolTipsparticipant_attendance_detail["English"]["attended"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["attended"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["notes"] = "Notes";
	$fieldToolTipsparticipant_attendance_detail["English"]["notes"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["notes"] = "";
	$fieldLabelsparticipant_attendance_detail["English"]["recorded_at"] = "Recorded At";
	$fieldToolTipsparticipant_attendance_detail["English"]["recorded_at"] = "";
	$placeHoldersparticipant_attendance_detail["English"]["recorded_at"] = "";
	if (count($fieldToolTipsparticipant_attendance_detail["English"]))
		$tdataparticipant_attendance_detail[".isUseToolTips"] = true;
}


	$tdataparticipant_attendance_detail[".NCSearch"] = true;



$tdataparticipant_attendance_detail[".shortTableName"] = "participant_attendance_detail";
$tdataparticipant_attendance_detail[".nSecOptions"] = 0;

$tdataparticipant_attendance_detail[".mainTableOwnerID"] = "";
$tdataparticipant_attendance_detail[".entityType"] = 0;
$tdataparticipant_attendance_detail[".connId"] = "lifebox_mesystem_at_localhost";


$tdataparticipant_attendance_detail[".strOriginalTableName"] = "public.participant_attendance_detail";

	



$tdataparticipant_attendance_detail[".showAddInPopup"] = false;

$tdataparticipant_attendance_detail[".showEditInPopup"] = false;

$tdataparticipant_attendance_detail[".showViewInPopup"] = false;

$tdataparticipant_attendance_detail[".listAjax"] = false;
//	temporary
//$tdataparticipant_attendance_detail[".listAjax"] = false;

	$tdataparticipant_attendance_detail[".audit"] = true;

	$tdataparticipant_attendance_detail[".locking"] = false;


$pages = $tdataparticipant_attendance_detail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataparticipant_attendance_detail[".edit"] = true;
	$tdataparticipant_attendance_detail[".afterEditAction"] = 1;
	$tdataparticipant_attendance_detail[".closePopupAfterEdit"] = 1;
	$tdataparticipant_attendance_detail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataparticipant_attendance_detail[".add"] = true;
$tdataparticipant_attendance_detail[".afterAddAction"] = 1;
$tdataparticipant_attendance_detail[".closePopupAfterAdd"] = 1;
$tdataparticipant_attendance_detail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataparticipant_attendance_detail[".list"] = true;
}



$tdataparticipant_attendance_detail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataparticipant_attendance_detail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataparticipant_attendance_detail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataparticipant_attendance_detail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataparticipant_attendance_detail[".printFriendly"] = true;
}



$tdataparticipant_attendance_detail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataparticipant_attendance_detail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataparticipant_attendance_detail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataparticipant_attendance_detail[".isUseAjaxSuggest"] = true;





$tdataparticipant_attendance_detail[".ajaxCodeSnippetAdded"] = false;

$tdataparticipant_attendance_detail[".buttonsAdded"] = false;

$tdataparticipant_attendance_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdataparticipant_attendance_detail[".isUseTimeForSearch"] = false;


$tdataparticipant_attendance_detail[".badgeColor"] = "BC8F8F";


$tdataparticipant_attendance_detail[".allSearchFields"] = array();
$tdataparticipant_attendance_detail[".filterFields"] = array();
$tdataparticipant_attendance_detail[".requiredSearchFields"] = array();

$tdataparticipant_attendance_detail[".googleLikeFields"] = array();
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "participant_id";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "participant_name";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "training_id";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "training_name";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "day_number";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "attendance_date";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "attended";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "notes";
$tdataparticipant_attendance_detail[".googleLikeFields"][] = "recorded_at";



$tdataparticipant_attendance_detail[".tableType"] = "list";

$tdataparticipant_attendance_detail[".printerPageOrientation"] = 0;
$tdataparticipant_attendance_detail[".nPrinterPageScale"] = 100;

$tdataparticipant_attendance_detail[".nPrinterSplitRecords"] = 40;

$tdataparticipant_attendance_detail[".geocodingEnabled"] = false;










$tdataparticipant_attendance_detail[".pageSize"] = 20;

$tdataparticipant_attendance_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataparticipant_attendance_detail[".strOrderBy"] = $tstrOrderBy;

$tdataparticipant_attendance_detail[".orderindexes"] = array();


$tdataparticipant_attendance_detail[".sqlHead"] = "SELECT participant_id,  	participant_name,  	training_id,  	training_name,  	day_number,  	attendance_date,  	attended,  	notes,  	recorded_at";
$tdataparticipant_attendance_detail[".sqlFrom"] = "FROM \"public\".participant_attendance_detail";
$tdataparticipant_attendance_detail[".sqlWhereExpr"] = "";
$tdataparticipant_attendance_detail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataparticipant_attendance_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataparticipant_attendance_detail[".arrGroupsPerPage"] = $arrGPP;

$tdataparticipant_attendance_detail[".highlightSearchResults"] = true;

$tableKeysparticipant_attendance_detail = array();
$tdataparticipant_attendance_detail[".Keys"] = $tableKeysparticipant_attendance_detail;


$tdataparticipant_attendance_detail[".hideMobileList"] = array();




//	participant_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "participant_id";
	$fdata["GoodName"] = "participant_id";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","participant_id");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "participant_id";

	

	
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


	$tdataparticipant_attendance_detail["participant_id"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "participant_id";
//	participant_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "participant_name";
	$fdata["GoodName"] = "participant_name";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","participant_name");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "participant_name";

		$fdata["sourceSingle"] = "participant_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "participant_name";

	
	
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


	$tdataparticipant_attendance_detail["participant_name"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "participant_name";
//	training_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "training_id";
	$fdata["GoodName"] = "training_id";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","training_id");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"training_name", 'lookupF'=>"training_details");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "training_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "training_details";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "training_name";

	
	
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


	$tdataparticipant_attendance_detail["training_id"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "training_id";
//	training_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "training_name";
	$fdata["GoodName"] = "training_name";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","training_name");
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "training_id", "lookup" => "training_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$tdataparticipant_attendance_detail["training_name"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "training_name";
//	day_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "day_number";
	$fdata["GoodName"] = "day_number";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","day_number");
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


	$tdataparticipant_attendance_detail["day_number"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "day_number";
//	attendance_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "attendance_date";
	$fdata["GoodName"] = "attendance_date";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","attendance_date");
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


	$tdataparticipant_attendance_detail["attendance_date"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "attendance_date";
//	attended
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "attended";
	$fdata["GoodName"] = "attended";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","attended");
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


	$tdataparticipant_attendance_detail["attended"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "attended";
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","notes");
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


	$tdataparticipant_attendance_detail["notes"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "notes";
//	recorded_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "recorded_at";
	$fdata["GoodName"] = "recorded_at";
	$fdata["ownerTable"] = "public.participant_attendance_detail";
	$fdata["Label"] = GetFieldLabel("public_participant_attendance_detail","recorded_at");
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


	$tdataparticipant_attendance_detail["recorded_at"] = $fdata;
		$tdataparticipant_attendance_detail[".searchableFields"][] = "recorded_at";


$tables_data["public.participant_attendance_detail"]=&$tdataparticipant_attendance_detail;
$field_labels["public_participant_attendance_detail"] = &$fieldLabelsparticipant_attendance_detail;
$fieldToolTips["public_participant_attendance_detail"] = &$fieldToolTipsparticipant_attendance_detail;
$placeHolders["public_participant_attendance_detail"] = &$placeHoldersparticipant_attendance_detail;
$page_titles["public_participant_attendance_detail"] = &$pageTitlesparticipant_attendance_detail;


changeTextControlsToDate( "public.participant_attendance_detail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.participant_attendance_detail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.participant_attendance_detail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_participant_attendance_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "participant_id,  	participant_name,  	training_id,  	training_name,  	day_number,  	attendance_date,  	attended,  	notes,  	recorded_at";
$proto0["m_strFrom"] = "FROM \"public\".participant_attendance_detail";
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
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto6["m_sql"] = "participant_id";
$proto6["m_srcTableName"] = "public.participant_attendance_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "participant_name",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto8["m_sql"] = "participant_name";
$proto8["m_srcTableName"] = "public.participant_attendance_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "training_id",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto10["m_sql"] = "training_id";
$proto10["m_srcTableName"] = "public.participant_attendance_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "training_name",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto12["m_sql"] = "training_name";
$proto12["m_srcTableName"] = "public.participant_attendance_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "day_number",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto14["m_sql"] = "day_number";
$proto14["m_srcTableName"] = "public.participant_attendance_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "attendance_date",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto16["m_sql"] = "attendance_date";
$proto16["m_srcTableName"] = "public.participant_attendance_detail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "attended",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto18["m_sql"] = "attended";
$proto18["m_srcTableName"] = "public.participant_attendance_detail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto20["m_sql"] = "notes";
$proto20["m_srcTableName"] = "public.participant_attendance_detail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "recorded_at",
	"m_strTable" => "public.participant_attendance_detail",
	"m_srcTableName" => "public.participant_attendance_detail"
));

$proto22["m_sql"] = "recorded_at";
$proto22["m_srcTableName"] = "public.participant_attendance_detail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.participant_attendance_detail";
$proto25["m_srcTableName"] = "public.participant_attendance_detail";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "participant_id";
$proto25["m_columns"][] = "participant_name";
$proto25["m_columns"][] = "training_id";
$proto25["m_columns"][] = "training_name";
$proto25["m_columns"][] = "day_number";
$proto25["m_columns"][] = "attendance_date";
$proto25["m_columns"][] = "attended";
$proto25["m_columns"][] = "notes";
$proto25["m_columns"][] = "recorded_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".participant_attendance_detail";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.participant_attendance_detail";
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
$proto0["m_srcTableName"]="public.participant_attendance_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_participant_attendance_detail = createSqlQuery_participant_attendance_detail();


	
				;

									

$tdataparticipant_attendance_detail[".sqlquery"] = $queryData_participant_attendance_detail;



$tdataparticipant_attendance_detail[".hasEvents"] = false;

?>