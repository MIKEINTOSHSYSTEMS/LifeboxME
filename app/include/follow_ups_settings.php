<?php
$tdatafollow_ups = array();
$tdatafollow_ups[".searchableFields"] = array();
$tdatafollow_ups[".ShortName"] = "follow_ups";
$tdatafollow_ups[".OwnerID"] = "";
$tdatafollow_ups[".OriginalTable"] = "public.follow_ups";


$tdatafollow_ups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatafollow_ups[".originalPagesByType"] = $tdatafollow_ups[".pagesByType"];
$tdatafollow_ups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatafollow_ups[".originalPages"] = $tdatafollow_ups[".pages"];
$tdatafollow_ups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatafollow_ups[".originalDefaultPages"] = $tdatafollow_ups[".defaultPages"];

//	field labels
$fieldLabelsfollow_ups = array();
$fieldToolTipsfollow_ups = array();
$pageTitlesfollow_ups = array();
$placeHoldersfollow_ups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfollow_ups["English"] = array();
	$fieldToolTipsfollow_ups["English"] = array();
	$placeHoldersfollow_ups["English"] = array();
	$pageTitlesfollow_ups["English"] = array();
	$fieldLabelsfollow_ups["English"]["follow_up_id"] = "Follow Up Id";
	$fieldToolTipsfollow_ups["English"]["follow_up_id"] = "";
	$placeHoldersfollow_ups["English"]["follow_up_id"] = "";
	$fieldLabelsfollow_ups["English"]["case_id"] = "Case Id";
	$fieldToolTipsfollow_ups["English"]["case_id"] = "";
	$placeHoldersfollow_ups["English"]["case_id"] = "";
	$fieldLabelsfollow_ups["English"]["facility_id"] = "Facility Id";
	$fieldToolTipsfollow_ups["English"]["facility_id"] = "";
	$placeHoldersfollow_ups["English"]["facility_id"] = "";
	$fieldLabelsfollow_ups["English"]["phone_call_date"] = "Phone Call Date";
	$fieldToolTipsfollow_ups["English"]["phone_call_date"] = "";
	$placeHoldersfollow_ups["English"]["phone_call_date"] = "";
	$fieldLabelsfollow_ups["English"]["data_collector_name"] = "Data Collector Name";
	$fieldToolTipsfollow_ups["English"]["data_collector_name"] = "";
	$placeHoldersfollow_ups["English"]["data_collector_name"] = "";
	$fieldLabelsfollow_ups["English"]["call_successful"] = "Call Successful";
	$fieldToolTipsfollow_ups["English"]["call_successful"] = "";
	$placeHoldersfollow_ups["English"]["call_successful"] = "";
	$fieldLabelsfollow_ups["English"]["call_failure_reason"] = "Call Failure Reason";
	$fieldToolTipsfollow_ups["English"]["call_failure_reason"] = "";
	$placeHoldersfollow_ups["English"]["call_failure_reason"] = "";
	$fieldLabelsfollow_ups["English"]["patient_status"] = "Patient Status";
	$fieldToolTipsfollow_ups["English"]["patient_status"] = "";
	$placeHoldersfollow_ups["English"]["patient_status"] = "";
	$fieldLabelsfollow_ups["English"]["neonatal_death"] = "Neonatal Death";
	$fieldToolTipsfollow_ups["English"]["neonatal_death"] = "";
	$placeHoldersfollow_ups["English"]["neonatal_death"] = "";
	$fieldLabelsfollow_ups["English"]["wound_opened"] = "Wound Opened";
	$fieldToolTipsfollow_ups["English"]["wound_opened"] = "";
	$placeHoldersfollow_ups["English"]["wound_opened"] = "";
	$fieldLabelsfollow_ups["English"]["wound_drainage"] = "Wound Drainage";
	$fieldToolTipsfollow_ups["English"]["wound_drainage"] = "";
	$placeHoldersfollow_ups["English"]["wound_drainage"] = "";
	$fieldLabelsfollow_ups["English"]["drainage_type"] = "Drainage Type";
	$fieldToolTipsfollow_ups["English"]["drainage_type"] = "";
	$placeHoldersfollow_ups["English"]["drainage_type"] = "";
	$fieldLabelsfollow_ups["English"]["visited_healthcare_provider"] = "Visited Healthcare Provider";
	$fieldToolTipsfollow_ups["English"]["visited_healthcare_provider"] = "";
	$placeHoldersfollow_ups["English"]["visited_healthcare_provider"] = "";
	$fieldLabelsfollow_ups["English"]["provider_location"] = "Provider Location";
	$fieldToolTipsfollow_ups["English"]["provider_location"] = "";
	$placeHoldersfollow_ups["English"]["provider_location"] = "";
	$fieldLabelsfollow_ups["English"]["scheduled_postop_visit"] = "Scheduled Postop Visit";
	$fieldToolTipsfollow_ups["English"]["scheduled_postop_visit"] = "";
	$placeHoldersfollow_ups["English"]["scheduled_postop_visit"] = "";
	$fieldLabelsfollow_ups["English"]["attended_postop_visit"] = "Attended Postop Visit";
	$fieldToolTipsfollow_ups["English"]["attended_postop_visit"] = "";
	$placeHoldersfollow_ups["English"]["attended_postop_visit"] = "";
	$fieldLabelsfollow_ups["English"]["missed_visit_reason"] = "Missed Visit Reason";
	$fieldToolTipsfollow_ups["English"]["missed_visit_reason"] = "";
	$placeHoldersfollow_ups["English"]["missed_visit_reason"] = "";
	$fieldLabelsfollow_ups["English"]["created_at"] = "Created At";
	$fieldToolTipsfollow_ups["English"]["created_at"] = "";
	$placeHoldersfollow_ups["English"]["created_at"] = "";
	$fieldLabelsfollow_ups["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfollow_ups["English"]["updated_at"] = "";
	$placeHoldersfollow_ups["English"]["updated_at"] = "";
	if (count($fieldToolTipsfollow_ups["English"]))
		$tdatafollow_ups[".isUseToolTips"] = true;
}


	$tdatafollow_ups[".NCSearch"] = true;



$tdatafollow_ups[".shortTableName"] = "follow_ups";
$tdatafollow_ups[".nSecOptions"] = 0;

$tdatafollow_ups[".mainTableOwnerID"] = "";
$tdatafollow_ups[".entityType"] = 0;
$tdatafollow_ups[".connId"] = "lifebox_mesystem_at_localhost";


$tdatafollow_ups[".strOriginalTableName"] = "public.follow_ups";

	



$tdatafollow_ups[".showAddInPopup"] = false;

$tdatafollow_ups[".showEditInPopup"] = false;

$tdatafollow_ups[".showViewInPopup"] = false;

$tdatafollow_ups[".listAjax"] = false;
//	temporary
//$tdatafollow_ups[".listAjax"] = false;

	$tdatafollow_ups[".audit"] = true;

	$tdatafollow_ups[".locking"] = false;


$pages = $tdatafollow_ups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafollow_ups[".edit"] = true;
	$tdatafollow_ups[".afterEditAction"] = 1;
	$tdatafollow_ups[".closePopupAfterEdit"] = 1;
	$tdatafollow_ups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatafollow_ups[".add"] = true;
$tdatafollow_ups[".afterAddAction"] = 1;
$tdatafollow_ups[".closePopupAfterAdd"] = 1;
$tdatafollow_ups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatafollow_ups[".list"] = true;
}



$tdatafollow_ups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafollow_ups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafollow_ups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafollow_ups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafollow_ups[".printFriendly"] = true;
}



$tdatafollow_ups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafollow_ups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafollow_ups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafollow_ups[".isUseAjaxSuggest"] = true;





$tdatafollow_ups[".ajaxCodeSnippetAdded"] = false;

$tdatafollow_ups[".buttonsAdded"] = false;

$tdatafollow_ups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafollow_ups[".isUseTimeForSearch"] = false;


$tdatafollow_ups[".badgeColor"] = "E07878";


$tdatafollow_ups[".allSearchFields"] = array();
$tdatafollow_ups[".filterFields"] = array();
$tdatafollow_ups[".requiredSearchFields"] = array();

$tdatafollow_ups[".googleLikeFields"] = array();
$tdatafollow_ups[".googleLikeFields"][] = "follow_up_id";
$tdatafollow_ups[".googleLikeFields"][] = "case_id";
$tdatafollow_ups[".googleLikeFields"][] = "facility_id";
$tdatafollow_ups[".googleLikeFields"][] = "phone_call_date";
$tdatafollow_ups[".googleLikeFields"][] = "data_collector_name";
$tdatafollow_ups[".googleLikeFields"][] = "call_successful";
$tdatafollow_ups[".googleLikeFields"][] = "call_failure_reason";
$tdatafollow_ups[".googleLikeFields"][] = "patient_status";
$tdatafollow_ups[".googleLikeFields"][] = "neonatal_death";
$tdatafollow_ups[".googleLikeFields"][] = "wound_opened";
$tdatafollow_ups[".googleLikeFields"][] = "wound_drainage";
$tdatafollow_ups[".googleLikeFields"][] = "drainage_type";
$tdatafollow_ups[".googleLikeFields"][] = "visited_healthcare_provider";
$tdatafollow_ups[".googleLikeFields"][] = "provider_location";
$tdatafollow_ups[".googleLikeFields"][] = "scheduled_postop_visit";
$tdatafollow_ups[".googleLikeFields"][] = "attended_postop_visit";
$tdatafollow_ups[".googleLikeFields"][] = "missed_visit_reason";
$tdatafollow_ups[".googleLikeFields"][] = "created_at";
$tdatafollow_ups[".googleLikeFields"][] = "updated_at";



$tdatafollow_ups[".tableType"] = "list";

$tdatafollow_ups[".printerPageOrientation"] = 0;
$tdatafollow_ups[".nPrinterPageScale"] = 100;

$tdatafollow_ups[".nPrinterSplitRecords"] = 40;

$tdatafollow_ups[".geocodingEnabled"] = false;










$tdatafollow_ups[".pageSize"] = 20;

$tdatafollow_ups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatafollow_ups[".strOrderBy"] = $tstrOrderBy;

$tdatafollow_ups[".orderindexes"] = array();


$tdatafollow_ups[".sqlHead"] = "SELECT follow_up_id,  	case_id,  	facility_id,  	phone_call_date,  	data_collector_name,  	call_successful,  	call_failure_reason,  	patient_status,  	neonatal_death,  	wound_opened,  	wound_drainage,  	drainage_type,  	visited_healthcare_provider,  	provider_location,  	scheduled_postop_visit,  	attended_postop_visit,  	missed_visit_reason,  	created_at,  	updated_at";
$tdatafollow_ups[".sqlFrom"] = "FROM \"public\".follow_ups";
$tdatafollow_ups[".sqlWhereExpr"] = "";
$tdatafollow_ups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafollow_ups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafollow_ups[".arrGroupsPerPage"] = $arrGPP;

$tdatafollow_ups[".highlightSearchResults"] = true;

$tableKeysfollow_ups = array();
$tableKeysfollow_ups[] = "follow_up_id";
$tdatafollow_ups[".Keys"] = $tableKeysfollow_ups;


$tdatafollow_ups[".hideMobileList"] = array();




//	follow_up_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "follow_up_id";
	$fdata["GoodName"] = "follow_up_id";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","follow_up_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "follow_up_id";

		$fdata["sourceSingle"] = "follow_up_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "follow_up_id";

	
	
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


	$tdatafollow_ups["follow_up_id"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "follow_up_id";
//	case_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "case_id";
	$fdata["GoodName"] = "case_id";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","case_id");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "case_id";

		$fdata["sourceSingle"] = "case_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case_id";

	
	
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
	$edata["LookupTable"] = "public.surgical_cases";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "case_id";
	$edata["LinkFieldType"] = 13;
	$edata["DisplayField"] = "case_id";

	

	
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


	$tdatafollow_ups["case_id"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "case_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","facility_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "facility_id";

		$fdata["sourceSingle"] = "facility_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "facility_id";

	
	
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


	$tdatafollow_ups["facility_id"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "facility_id";
//	phone_call_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "phone_call_date";
	$fdata["GoodName"] = "phone_call_date";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","phone_call_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "phone_call_date";

		$fdata["sourceSingle"] = "phone_call_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_call_date";

	
	
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


	$tdatafollow_ups["phone_call_date"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "phone_call_date";
//	data_collector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "data_collector_name";
	$fdata["GoodName"] = "data_collector_name";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","data_collector_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_collector_name";

		$fdata["sourceSingle"] = "data_collector_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_collector_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatafollow_ups["data_collector_name"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "data_collector_name";
//	call_successful
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "call_successful";
	$fdata["GoodName"] = "call_successful";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","call_successful");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "call_successful";

		$fdata["sourceSingle"] = "call_successful";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "call_successful";

	
	
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


	$tdatafollow_ups["call_successful"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "call_successful";
//	call_failure_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "call_failure_reason";
	$fdata["GoodName"] = "call_failure_reason";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","call_failure_reason");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "call_failure_reason";

		$fdata["sourceSingle"] = "call_failure_reason";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "call_failure_reason";

	
	
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


	$tdatafollow_ups["call_failure_reason"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "call_failure_reason";
//	patient_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "patient_status";
	$fdata["GoodName"] = "patient_status";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","patient_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "patient_status";

		$fdata["sourceSingle"] = "patient_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_status";

	
	
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


	$tdatafollow_ups["patient_status"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "patient_status";
//	neonatal_death
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "neonatal_death";
	$fdata["GoodName"] = "neonatal_death";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","neonatal_death");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "neonatal_death";

		$fdata["sourceSingle"] = "neonatal_death";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "neonatal_death";

	
	
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


	$tdatafollow_ups["neonatal_death"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "neonatal_death";
//	wound_opened
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "wound_opened";
	$fdata["GoodName"] = "wound_opened";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","wound_opened");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "wound_opened";

		$fdata["sourceSingle"] = "wound_opened";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_opened";

	
	
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


	$tdatafollow_ups["wound_opened"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "wound_opened";
//	wound_drainage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "wound_drainage";
	$fdata["GoodName"] = "wound_drainage";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","wound_drainage");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "wound_drainage";

		$fdata["sourceSingle"] = "wound_drainage";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_drainage";

	
	
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


	$tdatafollow_ups["wound_drainage"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "wound_drainage";
//	drainage_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "drainage_type";
	$fdata["GoodName"] = "drainage_type";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","drainage_type");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "drainage_type";

		$fdata["sourceSingle"] = "drainage_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "drainage_type";

	
	
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


	$tdatafollow_ups["drainage_type"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "drainage_type";
//	visited_healthcare_provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "visited_healthcare_provider";
	$fdata["GoodName"] = "visited_healthcare_provider";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","visited_healthcare_provider");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "visited_healthcare_provider";

		$fdata["sourceSingle"] = "visited_healthcare_provider";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "visited_healthcare_provider";

	
	
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


	$tdatafollow_ups["visited_healthcare_provider"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "visited_healthcare_provider";
//	provider_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "provider_location";
	$fdata["GoodName"] = "provider_location";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","provider_location");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider_location";

		$fdata["sourceSingle"] = "provider_location";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "provider_location";

	
	
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


	$tdatafollow_ups["provider_location"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "provider_location";
//	scheduled_postop_visit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "scheduled_postop_visit";
	$fdata["GoodName"] = "scheduled_postop_visit";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","scheduled_postop_visit");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "scheduled_postop_visit";

		$fdata["sourceSingle"] = "scheduled_postop_visit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "scheduled_postop_visit";

	
	
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


	$tdatafollow_ups["scheduled_postop_visit"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "scheduled_postop_visit";
//	attended_postop_visit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "attended_postop_visit";
	$fdata["GoodName"] = "attended_postop_visit";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","attended_postop_visit");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "attended_postop_visit";

		$fdata["sourceSingle"] = "attended_postop_visit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "attended_postop_visit";

	
	
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


	$tdatafollow_ups["attended_postop_visit"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "attended_postop_visit";
//	missed_visit_reason
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "missed_visit_reason";
	$fdata["GoodName"] = "missed_visit_reason";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","missed_visit_reason");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "missed_visit_reason";

		$fdata["sourceSingle"] = "missed_visit_reason";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "missed_visit_reason";

	
	
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


	$tdatafollow_ups["missed_visit_reason"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "missed_visit_reason";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
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


	$tdatafollow_ups["created_at"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.follow_ups";
	$fdata["Label"] = GetFieldLabel("public_follow_ups","updated_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "updated_at";

		$fdata["sourceSingle"] = "updated_at";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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


	$tdatafollow_ups["updated_at"] = $fdata;
		$tdatafollow_ups[".searchableFields"][] = "updated_at";


$tables_data["public.follow_ups"]=&$tdatafollow_ups;
$field_labels["public_follow_ups"] = &$fieldLabelsfollow_ups;
$fieldToolTips["public_follow_ups"] = &$fieldToolTipsfollow_ups;
$placeHolders["public_follow_ups"] = &$placeHoldersfollow_ups;
$page_titles["public_follow_ups"] = &$pageTitlesfollow_ups;


changeTextControlsToDate( "public.follow_ups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.follow_ups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.follow_ups"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.follow_ups"][0] = $masterParams;
				$masterTablesData["public.follow_ups"][0]["masterKeys"] = array();
	$masterTablesData["public.follow_ups"][0]["masterKeys"][]="facility_id";
				$masterTablesData["public.follow_ups"][0]["detailKeys"] = array();
	$masterTablesData["public.follow_ups"][0]["detailKeys"][]="facility_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.surgical_cases";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.surgical_cases";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "surgical_cases";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.follow_ups"][1] = $masterParams;
				$masterTablesData["public.follow_ups"][1]["masterKeys"] = array();
	$masterTablesData["public.follow_ups"][1]["masterKeys"][]="case_id";
				$masterTablesData["public.follow_ups"][1]["detailKeys"] = array();
	$masterTablesData["public.follow_ups"][1]["detailKeys"][]="case_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_follow_ups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "follow_up_id,  	case_id,  	facility_id,  	phone_call_date,  	data_collector_name,  	call_successful,  	call_failure_reason,  	patient_status,  	neonatal_death,  	wound_opened,  	wound_drainage,  	drainage_type,  	visited_healthcare_provider,  	provider_location,  	scheduled_postop_visit,  	attended_postop_visit,  	missed_visit_reason,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".follow_ups";
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
	"m_strName" => "follow_up_id",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto6["m_sql"] = "follow_up_id";
$proto6["m_srcTableName"] = "public.follow_ups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "case_id",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto8["m_sql"] = "case_id";
$proto8["m_srcTableName"] = "public.follow_ups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto10["m_sql"] = "facility_id";
$proto10["m_srcTableName"] = "public.follow_ups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_call_date",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto12["m_sql"] = "phone_call_date";
$proto12["m_srcTableName"] = "public.follow_ups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "data_collector_name",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto14["m_sql"] = "data_collector_name";
$proto14["m_srcTableName"] = "public.follow_ups";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "call_successful",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto16["m_sql"] = "call_successful";
$proto16["m_srcTableName"] = "public.follow_ups";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "call_failure_reason",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto18["m_sql"] = "call_failure_reason";
$proto18["m_srcTableName"] = "public.follow_ups";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_status",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto20["m_sql"] = "patient_status";
$proto20["m_srcTableName"] = "public.follow_ups";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "neonatal_death",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto22["m_sql"] = "neonatal_death";
$proto22["m_srcTableName"] = "public.follow_ups";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_opened",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto24["m_sql"] = "wound_opened";
$proto24["m_srcTableName"] = "public.follow_ups";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_drainage",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto26["m_sql"] = "wound_drainage";
$proto26["m_srcTableName"] = "public.follow_ups";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "drainage_type",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto28["m_sql"] = "drainage_type";
$proto28["m_srcTableName"] = "public.follow_ups";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "visited_healthcare_provider",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto30["m_sql"] = "visited_healthcare_provider";
$proto30["m_srcTableName"] = "public.follow_ups";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "provider_location",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto32["m_sql"] = "provider_location";
$proto32["m_srcTableName"] = "public.follow_ups";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "scheduled_postop_visit",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto34["m_sql"] = "scheduled_postop_visit";
$proto34["m_srcTableName"] = "public.follow_ups";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "attended_postop_visit",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto36["m_sql"] = "attended_postop_visit";
$proto36["m_srcTableName"] = "public.follow_ups";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "missed_visit_reason",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto38["m_sql"] = "missed_visit_reason";
$proto38["m_srcTableName"] = "public.follow_ups";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto40["m_sql"] = "created_at";
$proto40["m_srcTableName"] = "public.follow_ups";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.follow_ups",
	"m_srcTableName" => "public.follow_ups"
));

$proto42["m_sql"] = "updated_at";
$proto42["m_srcTableName"] = "public.follow_ups";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "public.follow_ups";
$proto45["m_srcTableName"] = "public.follow_ups";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "follow_up_id";
$proto45["m_columns"][] = "case_id";
$proto45["m_columns"][] = "facility_id";
$proto45["m_columns"][] = "phone_call_date";
$proto45["m_columns"][] = "data_collector_name";
$proto45["m_columns"][] = "call_successful";
$proto45["m_columns"][] = "call_failure_reason";
$proto45["m_columns"][] = "patient_status";
$proto45["m_columns"][] = "neonatal_death";
$proto45["m_columns"][] = "wound_opened";
$proto45["m_columns"][] = "wound_drainage";
$proto45["m_columns"][] = "drainage_type";
$proto45["m_columns"][] = "visited_healthcare_provider";
$proto45["m_columns"][] = "provider_location";
$proto45["m_columns"][] = "scheduled_postop_visit";
$proto45["m_columns"][] = "attended_postop_visit";
$proto45["m_columns"][] = "missed_visit_reason";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "updated_at";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "\"public\".follow_ups";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "public.follow_ups";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.follow_ups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_follow_ups = createSqlQuery_follow_ups();


	
				;

																			

$tdatafollow_ups[".sqlquery"] = $queryData_follow_ups;



$tdatafollow_ups[".hasEvents"] = false;

?>