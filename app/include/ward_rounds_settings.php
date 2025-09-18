<?php
$tdataward_rounds = array();
$tdataward_rounds[".searchableFields"] = array();
$tdataward_rounds[".ShortName"] = "ward_rounds";
$tdataward_rounds[".OwnerID"] = "";
$tdataward_rounds[".OriginalTable"] = "public.ward_rounds";


$tdataward_rounds[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataward_rounds[".originalPagesByType"] = $tdataward_rounds[".pagesByType"];
$tdataward_rounds[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataward_rounds[".originalPages"] = $tdataward_rounds[".pages"];
$tdataward_rounds[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataward_rounds[".originalDefaultPages"] = $tdataward_rounds[".defaultPages"];

//	field labels
$fieldLabelsward_rounds = array();
$fieldToolTipsward_rounds = array();
$pageTitlesward_rounds = array();
$placeHoldersward_rounds = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsward_rounds["English"] = array();
	$fieldToolTipsward_rounds["English"] = array();
	$placeHoldersward_rounds["English"] = array();
	$pageTitlesward_rounds["English"] = array();
	$fieldLabelsward_rounds["English"]["ward_round_id"] = "Ward Round Id";
	$fieldToolTipsward_rounds["English"]["ward_round_id"] = "";
	$placeHoldersward_rounds["English"]["ward_round_id"] = "";
	$fieldLabelsward_rounds["English"]["case_id"] = "Case Id";
	$fieldToolTipsward_rounds["English"]["case_id"] = "";
	$placeHoldersward_rounds["English"]["case_id"] = "";
	$fieldLabelsward_rounds["English"]["facility_id"] = "Facility Id";
	$fieldToolTipsward_rounds["English"]["facility_id"] = "";
	$placeHoldersward_rounds["English"]["facility_id"] = "";
	$fieldLabelsward_rounds["English"]["admission_date"] = "Admission Date";
	$fieldToolTipsward_rounds["English"]["admission_date"] = "";
	$placeHoldersward_rounds["English"]["admission_date"] = "";
	$fieldLabelsward_rounds["English"]["rounding_date"] = "Rounding Date";
	$fieldToolTipsward_rounds["English"]["rounding_date"] = "";
	$placeHoldersward_rounds["English"]["rounding_date"] = "";
	$fieldLabelsward_rounds["English"]["data_collector_name"] = "Data Collector Name";
	$fieldToolTipsward_rounds["English"]["data_collector_name"] = "";
	$placeHoldersward_rounds["English"]["data_collector_name"] = "";
	$fieldLabelsward_rounds["English"]["ward_name"] = "Ward Name";
	$fieldToolTipsward_rounds["English"]["ward_name"] = "";
	$placeHoldersward_rounds["English"]["ward_name"] = "";
	$fieldLabelsward_rounds["English"]["ward_transfer"] = "Ward Transfer";
	$fieldToolTipsward_rounds["English"]["ward_transfer"] = "";
	$placeHoldersward_rounds["English"]["ward_transfer"] = "";
	$fieldLabelsward_rounds["English"]["postop_day"] = "Postop Day";
	$fieldToolTipsward_rounds["English"]["postop_day"] = "";
	$placeHoldersward_rounds["English"]["postop_day"] = "";
	$fieldLabelsward_rounds["English"]["dressing_not_removed"] = "Dressing Not Removed";
	$fieldToolTipsward_rounds["English"]["dressing_not_removed"] = "";
	$placeHoldersward_rounds["English"]["dressing_not_removed"] = "";
	$fieldLabelsward_rounds["English"]["wound_clean_and_healthy"] = "Wound Clean And Healthy";
	$fieldToolTipsward_rounds["English"]["wound_clean_and_healthy"] = "";
	$placeHoldersward_rounds["English"]["wound_clean_and_healthy"] = "";
	$fieldLabelsward_rounds["English"]["stitches_removed_or_wound_opened"] = "Stitches Removed Or Wound Opened";
	$fieldToolTipsward_rounds["English"]["stitches_removed_or_wound_opened"] = "";
	$placeHoldersward_rounds["English"]["stitches_removed_or_wound_opened"] = "";
	$fieldLabelsward_rounds["English"]["wound_opened_spontaneously"] = "Wound Opened Spontaneously";
	$fieldToolTipsward_rounds["English"]["wound_opened_spontaneously"] = "";
	$placeHoldersward_rounds["English"]["wound_opened_spontaneously"] = "";
	$fieldLabelsward_rounds["English"]["pus_draining"] = "Pus Draining";
	$fieldToolTipsward_rounds["English"]["pus_draining"] = "";
	$placeHoldersward_rounds["English"]["pus_draining"] = "";
	$fieldLabelsward_rounds["English"]["abscess_present"] = "Abscess Present";
	$fieldToolTipsward_rounds["English"]["abscess_present"] = "";
	$placeHoldersward_rounds["English"]["abscess_present"] = "";
	$fieldLabelsward_rounds["English"]["redness_around_wound"] = "Redness Around Wound";
	$fieldToolTipsward_rounds["English"]["redness_around_wound"] = "";
	$placeHoldersward_rounds["English"]["redness_around_wound"] = "";
	$fieldLabelsward_rounds["English"]["bleeding"] = "Bleeding";
	$fieldToolTipsward_rounds["English"]["bleeding"] = "";
	$placeHoldersward_rounds["English"]["bleeding"] = "";
	$fieldLabelsward_rounds["English"]["new_dressing"] = "New Dressing";
	$fieldToolTipsward_rounds["English"]["new_dressing"] = "";
	$placeHoldersward_rounds["English"]["new_dressing"] = "";
	$fieldLabelsward_rounds["English"]["new_dressing_type"] = "New Dressing Type";
	$fieldToolTipsward_rounds["English"]["new_dressing_type"] = "";
	$placeHoldersward_rounds["English"]["new_dressing_type"] = "";
	$fieldLabelsward_rounds["English"]["fever"] = "Fever";
	$fieldToolTipsward_rounds["English"]["fever"] = "";
	$placeHoldersward_rounds["English"]["fever"] = "";
	$fieldLabelsward_rounds["English"]["on_antibiotics"] = "On Antibiotics";
	$fieldToolTipsward_rounds["English"]["on_antibiotics"] = "";
	$placeHoldersward_rounds["English"]["on_antibiotics"] = "";
	$fieldLabelsward_rounds["English"]["antibiotics_prescribed"] = "Antibiotics Prescribed";
	$fieldToolTipsward_rounds["English"]["antibiotics_prescribed"] = "";
	$placeHoldersward_rounds["English"]["antibiotics_prescribed"] = "";
	$fieldLabelsward_rounds["English"]["ssi_diagnosed_on_reoperation"] = "Ssi Diagnosed On Reoperation";
	$fieldToolTipsward_rounds["English"]["ssi_diagnosed_on_reoperation"] = "";
	$placeHoldersward_rounds["English"]["ssi_diagnosed_on_reoperation"] = "";
	$fieldLabelsward_rounds["English"]["returned_to_or"] = "Returned To Or";
	$fieldToolTipsward_rounds["English"]["returned_to_or"] = "";
	$placeHoldersward_rounds["English"]["returned_to_or"] = "";
	$fieldLabelsward_rounds["English"]["return_or_procedure"] = "Return Or Procedure";
	$fieldToolTipsward_rounds["English"]["return_or_procedure"] = "";
	$placeHoldersward_rounds["English"]["return_or_procedure"] = "";
	$fieldLabelsward_rounds["English"]["disposition"] = "Disposition";
	$fieldToolTipsward_rounds["English"]["disposition"] = "";
	$placeHoldersward_rounds["English"]["disposition"] = "";
	$fieldLabelsward_rounds["English"]["planned_reoperation"] = "Planned Reoperation";
	$fieldToolTipsward_rounds["English"]["planned_reoperation"] = "";
	$placeHoldersward_rounds["English"]["planned_reoperation"] = "";
	$fieldLabelsward_rounds["English"]["other_complications"] = "Other Complications";
	$fieldToolTipsward_rounds["English"]["other_complications"] = "";
	$placeHoldersward_rounds["English"]["other_complications"] = "";
	$fieldLabelsward_rounds["English"]["endometritis"] = "Endometritis";
	$fieldToolTipsward_rounds["English"]["endometritis"] = "";
	$placeHoldersward_rounds["English"]["endometritis"] = "";
	$fieldLabelsward_rounds["English"]["urinary_tract_infection"] = "Urinary Tract Infection";
	$fieldToolTipsward_rounds["English"]["urinary_tract_infection"] = "";
	$placeHoldersward_rounds["English"]["urinary_tract_infection"] = "";
	$fieldLabelsward_rounds["English"]["pneumonia"] = "Pneumonia";
	$fieldToolTipsward_rounds["English"]["pneumonia"] = "";
	$placeHoldersward_rounds["English"]["pneumonia"] = "";
	$fieldLabelsward_rounds["English"]["other_complication_description"] = "Other Complication Description";
	$fieldToolTipsward_rounds["English"]["other_complication_description"] = "";
	$placeHoldersward_rounds["English"]["other_complication_description"] = "";
	$fieldLabelsward_rounds["English"]["eschar"] = "Eschar";
	$fieldToolTipsward_rounds["English"]["eschar"] = "";
	$placeHoldersward_rounds["English"]["eschar"] = "";
	$fieldLabelsward_rounds["English"]["discharged_today"] = "Discharged Today";
	$fieldToolTipsward_rounds["English"]["discharged_today"] = "";
	$placeHoldersward_rounds["English"]["discharged_today"] = "";
	$fieldLabelsward_rounds["English"]["discharge_date"] = "Discharge Date";
	$fieldToolTipsward_rounds["English"]["discharge_date"] = "";
	$placeHoldersward_rounds["English"]["discharge_date"] = "";
	$fieldLabelsward_rounds["English"]["death_in_ward"] = "Death In Ward";
	$fieldToolTipsward_rounds["English"]["death_in_ward"] = "";
	$placeHoldersward_rounds["English"]["death_in_ward"] = "";
	$fieldLabelsward_rounds["English"]["neonatal_death"] = "Neonatal Death";
	$fieldToolTipsward_rounds["English"]["neonatal_death"] = "";
	$placeHoldersward_rounds["English"]["neonatal_death"] = "";
	$fieldLabelsward_rounds["English"]["created_at"] = "Created At";
	$fieldToolTipsward_rounds["English"]["created_at"] = "";
	$placeHoldersward_rounds["English"]["created_at"] = "";
	$fieldLabelsward_rounds["English"]["updated_at"] = "Updated At";
	$fieldToolTipsward_rounds["English"]["updated_at"] = "";
	$placeHoldersward_rounds["English"]["updated_at"] = "";
	if (count($fieldToolTipsward_rounds["English"]))
		$tdataward_rounds[".isUseToolTips"] = true;
}


	$tdataward_rounds[".NCSearch"] = true;



$tdataward_rounds[".shortTableName"] = "ward_rounds";
$tdataward_rounds[".nSecOptions"] = 0;

$tdataward_rounds[".mainTableOwnerID"] = "";
$tdataward_rounds[".entityType"] = 0;
$tdataward_rounds[".connId"] = "lifebox_mesystem_at_localhost";


$tdataward_rounds[".strOriginalTableName"] = "public.ward_rounds";

	



$tdataward_rounds[".showAddInPopup"] = false;

$tdataward_rounds[".showEditInPopup"] = false;

$tdataward_rounds[".showViewInPopup"] = false;

$tdataward_rounds[".listAjax"] = false;
//	temporary
//$tdataward_rounds[".listAjax"] = false;

	$tdataward_rounds[".audit"] = true;

	$tdataward_rounds[".locking"] = false;


$pages = $tdataward_rounds[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataward_rounds[".edit"] = true;
	$tdataward_rounds[".afterEditAction"] = 1;
	$tdataward_rounds[".closePopupAfterEdit"] = 1;
	$tdataward_rounds[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataward_rounds[".add"] = true;
$tdataward_rounds[".afterAddAction"] = 1;
$tdataward_rounds[".closePopupAfterAdd"] = 1;
$tdataward_rounds[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataward_rounds[".list"] = true;
}



$tdataward_rounds[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataward_rounds[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataward_rounds[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataward_rounds[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataward_rounds[".printFriendly"] = true;
}



$tdataward_rounds[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataward_rounds[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataward_rounds[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataward_rounds[".isUseAjaxSuggest"] = true;



									

$tdataward_rounds[".ajaxCodeSnippetAdded"] = false;

$tdataward_rounds[".buttonsAdded"] = false;

$tdataward_rounds[".addPageEvents"] = false;

// use timepicker for search panel
$tdataward_rounds[".isUseTimeForSearch"] = false;


$tdataward_rounds[".badgeColor"] = "DB7093";


$tdataward_rounds[".allSearchFields"] = array();
$tdataward_rounds[".filterFields"] = array();
$tdataward_rounds[".requiredSearchFields"] = array();

$tdataward_rounds[".googleLikeFields"] = array();
$tdataward_rounds[".googleLikeFields"][] = "ward_round_id";
$tdataward_rounds[".googleLikeFields"][] = "case_id";
$tdataward_rounds[".googleLikeFields"][] = "facility_id";
$tdataward_rounds[".googleLikeFields"][] = "admission_date";
$tdataward_rounds[".googleLikeFields"][] = "rounding_date";
$tdataward_rounds[".googleLikeFields"][] = "data_collector_name";
$tdataward_rounds[".googleLikeFields"][] = "ward_name";
$tdataward_rounds[".googleLikeFields"][] = "ward_transfer";
$tdataward_rounds[".googleLikeFields"][] = "postop_day";
$tdataward_rounds[".googleLikeFields"][] = "dressing_not_removed";
$tdataward_rounds[".googleLikeFields"][] = "wound_clean_and_healthy";
$tdataward_rounds[".googleLikeFields"][] = "stitches_removed_or_wound_opened";
$tdataward_rounds[".googleLikeFields"][] = "wound_opened_spontaneously";
$tdataward_rounds[".googleLikeFields"][] = "pus_draining";
$tdataward_rounds[".googleLikeFields"][] = "abscess_present";
$tdataward_rounds[".googleLikeFields"][] = "redness_around_wound";
$tdataward_rounds[".googleLikeFields"][] = "bleeding";
$tdataward_rounds[".googleLikeFields"][] = "new_dressing";
$tdataward_rounds[".googleLikeFields"][] = "new_dressing_type";
$tdataward_rounds[".googleLikeFields"][] = "fever";
$tdataward_rounds[".googleLikeFields"][] = "on_antibiotics";
$tdataward_rounds[".googleLikeFields"][] = "antibiotics_prescribed";
$tdataward_rounds[".googleLikeFields"][] = "ssi_diagnosed_on_reoperation";
$tdataward_rounds[".googleLikeFields"][] = "returned_to_or";
$tdataward_rounds[".googleLikeFields"][] = "return_or_procedure";
$tdataward_rounds[".googleLikeFields"][] = "disposition";
$tdataward_rounds[".googleLikeFields"][] = "planned_reoperation";
$tdataward_rounds[".googleLikeFields"][] = "other_complications";
$tdataward_rounds[".googleLikeFields"][] = "endometritis";
$tdataward_rounds[".googleLikeFields"][] = "urinary_tract_infection";
$tdataward_rounds[".googleLikeFields"][] = "pneumonia";
$tdataward_rounds[".googleLikeFields"][] = "other_complication_description";
$tdataward_rounds[".googleLikeFields"][] = "eschar";
$tdataward_rounds[".googleLikeFields"][] = "discharged_today";
$tdataward_rounds[".googleLikeFields"][] = "discharge_date";
$tdataward_rounds[".googleLikeFields"][] = "death_in_ward";
$tdataward_rounds[".googleLikeFields"][] = "neonatal_death";
$tdataward_rounds[".googleLikeFields"][] = "created_at";
$tdataward_rounds[".googleLikeFields"][] = "updated_at";



$tdataward_rounds[".tableType"] = "list";

$tdataward_rounds[".printerPageOrientation"] = 0;
$tdataward_rounds[".nPrinterPageScale"] = 100;

$tdataward_rounds[".nPrinterSplitRecords"] = 40;

$tdataward_rounds[".geocodingEnabled"] = false;










$tdataward_rounds[".pageSize"] = 20;

$tdataward_rounds[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataward_rounds[".strOrderBy"] = $tstrOrderBy;

$tdataward_rounds[".orderindexes"] = array();


$tdataward_rounds[".sqlHead"] = "SELECT ward_round_id,  	case_id,  	facility_id,  	admission_date,  	rounding_date,  	data_collector_name,  	ward_name,  	ward_transfer,  	postop_day,  	dressing_not_removed,  	wound_clean_and_healthy,  	stitches_removed_or_wound_opened,  	wound_opened_spontaneously,  	pus_draining,  	abscess_present,  	redness_around_wound,  	bleeding,  	new_dressing,  	new_dressing_type,  	fever,  	on_antibiotics,  	antibiotics_prescribed,  	ssi_diagnosed_on_reoperation,  	returned_to_or,  	return_or_procedure,  	disposition,  	planned_reoperation,  	other_complications,  	endometritis,  	urinary_tract_infection,  	pneumonia,  	other_complication_description,  	eschar,  	discharged_today,  	discharge_date,  	death_in_ward,  	neonatal_death,  	created_at,  	updated_at";
$tdataward_rounds[".sqlFrom"] = "FROM \"public\".ward_rounds";
$tdataward_rounds[".sqlWhereExpr"] = "";
$tdataward_rounds[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataward_rounds[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataward_rounds[".arrGroupsPerPage"] = $arrGPP;

$tdataward_rounds[".highlightSearchResults"] = true;

$tableKeysward_rounds = array();
$tableKeysward_rounds[] = "ward_round_id";
$tdataward_rounds[".Keys"] = $tableKeysward_rounds;


$tdataward_rounds[".hideMobileList"] = array();




//	ward_round_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ward_round_id";
	$fdata["GoodName"] = "ward_round_id";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","ward_round_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ward_round_id";

		$fdata["sourceSingle"] = "ward_round_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ward_round_id";

	
	
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


	$tdataward_rounds["ward_round_id"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "ward_round_id";
//	case_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "case_id";
	$fdata["GoodName"] = "case_id";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","case_id");
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


	$tdataward_rounds["case_id"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "case_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","facility_id");
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


	$tdataward_rounds["facility_id"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "facility_id";
//	admission_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "admission_date";
	$fdata["GoodName"] = "admission_date";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","admission_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "admission_date";

		$fdata["sourceSingle"] = "admission_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "admission_date";

	
	
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


	$tdataward_rounds["admission_date"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "admission_date";
//	rounding_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rounding_date";
	$fdata["GoodName"] = "rounding_date";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","rounding_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "rounding_date";

		$fdata["sourceSingle"] = "rounding_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rounding_date";

	
	
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


	$tdataward_rounds["rounding_date"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "rounding_date";
//	data_collector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data_collector_name";
	$fdata["GoodName"] = "data_collector_name";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","data_collector_name");
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


	$tdataward_rounds["data_collector_name"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "data_collector_name";
//	ward_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ward_name";
	$fdata["GoodName"] = "ward_name";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","ward_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ward_name";

		$fdata["sourceSingle"] = "ward_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ward_name";

	
	
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


	$tdataward_rounds["ward_name"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "ward_name";
//	ward_transfer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ward_transfer";
	$fdata["GoodName"] = "ward_transfer";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","ward_transfer");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "ward_transfer";

		$fdata["sourceSingle"] = "ward_transfer";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ward_transfer";

	
	
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


	$tdataward_rounds["ward_transfer"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "ward_transfer";
//	postop_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "postop_day";
	$fdata["GoodName"] = "postop_day";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","postop_day");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "postop_day";

		$fdata["sourceSingle"] = "postop_day";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "postop_day";

	
	
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


	$tdataward_rounds["postop_day"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "postop_day";
//	dressing_not_removed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dressing_not_removed";
	$fdata["GoodName"] = "dressing_not_removed";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","dressing_not_removed");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "dressing_not_removed";

		$fdata["sourceSingle"] = "dressing_not_removed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dressing_not_removed";

	
	
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


	$tdataward_rounds["dressing_not_removed"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "dressing_not_removed";
//	wound_clean_and_healthy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "wound_clean_and_healthy";
	$fdata["GoodName"] = "wound_clean_and_healthy";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","wound_clean_and_healthy");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "wound_clean_and_healthy";

		$fdata["sourceSingle"] = "wound_clean_and_healthy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_clean_and_healthy";

	
	
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


	$tdataward_rounds["wound_clean_and_healthy"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "wound_clean_and_healthy";
//	stitches_removed_or_wound_opened
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "stitches_removed_or_wound_opened";
	$fdata["GoodName"] = "stitches_removed_or_wound_opened";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","stitches_removed_or_wound_opened");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "stitches_removed_or_wound_opened";

		$fdata["sourceSingle"] = "stitches_removed_or_wound_opened";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "stitches_removed_or_wound_opened";

	
	
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


	$tdataward_rounds["stitches_removed_or_wound_opened"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "stitches_removed_or_wound_opened";
//	wound_opened_spontaneously
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "wound_opened_spontaneously";
	$fdata["GoodName"] = "wound_opened_spontaneously";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","wound_opened_spontaneously");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "wound_opened_spontaneously";

		$fdata["sourceSingle"] = "wound_opened_spontaneously";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_opened_spontaneously";

	
	
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


	$tdataward_rounds["wound_opened_spontaneously"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "wound_opened_spontaneously";
//	pus_draining
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pus_draining";
	$fdata["GoodName"] = "pus_draining";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","pus_draining");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "pus_draining";

		$fdata["sourceSingle"] = "pus_draining";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pus_draining";

	
	
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


	$tdataward_rounds["pus_draining"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "pus_draining";
//	abscess_present
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "abscess_present";
	$fdata["GoodName"] = "abscess_present";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","abscess_present");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "abscess_present";

		$fdata["sourceSingle"] = "abscess_present";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "abscess_present";

	
	
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


	$tdataward_rounds["abscess_present"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "abscess_present";
//	redness_around_wound
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "redness_around_wound";
	$fdata["GoodName"] = "redness_around_wound";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","redness_around_wound");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "redness_around_wound";

		$fdata["sourceSingle"] = "redness_around_wound";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "redness_around_wound";

	
	
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


	$tdataward_rounds["redness_around_wound"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "redness_around_wound";
//	bleeding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "bleeding";
	$fdata["GoodName"] = "bleeding";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","bleeding");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "bleeding";

		$fdata["sourceSingle"] = "bleeding";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bleeding";

	
	
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


	$tdataward_rounds["bleeding"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "bleeding";
//	new_dressing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "new_dressing";
	$fdata["GoodName"] = "new_dressing";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","new_dressing");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "new_dressing";

		$fdata["sourceSingle"] = "new_dressing";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "new_dressing";

	
	
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


	$tdataward_rounds["new_dressing"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "new_dressing";
//	new_dressing_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "new_dressing_type";
	$fdata["GoodName"] = "new_dressing_type";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","new_dressing_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "new_dressing_type";

		$fdata["sourceSingle"] = "new_dressing_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "new_dressing_type";

	
	
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


	$tdataward_rounds["new_dressing_type"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "new_dressing_type";
//	fever
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fever";
	$fdata["GoodName"] = "fever";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","fever");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "fever";

		$fdata["sourceSingle"] = "fever";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fever";

	
	
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


	$tdataward_rounds["fever"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "fever";
//	on_antibiotics
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "on_antibiotics";
	$fdata["GoodName"] = "on_antibiotics";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","on_antibiotics");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "on_antibiotics";

		$fdata["sourceSingle"] = "on_antibiotics";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "on_antibiotics";

	
	
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


	$tdataward_rounds["on_antibiotics"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "on_antibiotics";
//	antibiotics_prescribed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "antibiotics_prescribed";
	$fdata["GoodName"] = "antibiotics_prescribed";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","antibiotics_prescribed");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "antibiotics_prescribed";

		$fdata["sourceSingle"] = "antibiotics_prescribed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotics_prescribed";

	
	
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


	$tdataward_rounds["antibiotics_prescribed"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "antibiotics_prescribed";
//	ssi_diagnosed_on_reoperation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "ssi_diagnosed_on_reoperation";
	$fdata["GoodName"] = "ssi_diagnosed_on_reoperation";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","ssi_diagnosed_on_reoperation");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "ssi_diagnosed_on_reoperation";

		$fdata["sourceSingle"] = "ssi_diagnosed_on_reoperation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ssi_diagnosed_on_reoperation";

	
	
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


	$tdataward_rounds["ssi_diagnosed_on_reoperation"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "ssi_diagnosed_on_reoperation";
//	returned_to_or
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "returned_to_or";
	$fdata["GoodName"] = "returned_to_or";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","returned_to_or");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "returned_to_or";

		$fdata["sourceSingle"] = "returned_to_or";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "returned_to_or";

	
	
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


	$tdataward_rounds["returned_to_or"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "returned_to_or";
//	return_or_procedure
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "return_or_procedure";
	$fdata["GoodName"] = "return_or_procedure";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","return_or_procedure");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "return_or_procedure";

		$fdata["sourceSingle"] = "return_or_procedure";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "return_or_procedure";

	
	
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


	$tdataward_rounds["return_or_procedure"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "return_or_procedure";
//	disposition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "disposition";
	$fdata["GoodName"] = "disposition";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","disposition");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "disposition";

		$fdata["sourceSingle"] = "disposition";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disposition";

	
	
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


	$tdataward_rounds["disposition"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "disposition";
//	planned_reoperation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "planned_reoperation";
	$fdata["GoodName"] = "planned_reoperation";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","planned_reoperation");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "planned_reoperation";

		$fdata["sourceSingle"] = "planned_reoperation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "planned_reoperation";

	
	
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


	$tdataward_rounds["planned_reoperation"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "planned_reoperation";
//	other_complications
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "other_complications";
	$fdata["GoodName"] = "other_complications";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","other_complications");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "other_complications";

		$fdata["sourceSingle"] = "other_complications";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "other_complications";

	
	
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


	$tdataward_rounds["other_complications"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "other_complications";
//	endometritis
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "endometritis";
	$fdata["GoodName"] = "endometritis";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","endometritis");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "endometritis";

		$fdata["sourceSingle"] = "endometritis";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endometritis";

	
	
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


	$tdataward_rounds["endometritis"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "endometritis";
//	urinary_tract_infection
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "urinary_tract_infection";
	$fdata["GoodName"] = "urinary_tract_infection";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","urinary_tract_infection");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "urinary_tract_infection";

		$fdata["sourceSingle"] = "urinary_tract_infection";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "urinary_tract_infection";

	
	
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


	$tdataward_rounds["urinary_tract_infection"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "urinary_tract_infection";
//	pneumonia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "pneumonia";
	$fdata["GoodName"] = "pneumonia";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","pneumonia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "pneumonia";

		$fdata["sourceSingle"] = "pneumonia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pneumonia";

	
	
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


	$tdataward_rounds["pneumonia"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "pneumonia";
//	other_complication_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "other_complication_description";
	$fdata["GoodName"] = "other_complication_description";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","other_complication_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "other_complication_description";

		$fdata["sourceSingle"] = "other_complication_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "other_complication_description";

	
	
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


	$tdataward_rounds["other_complication_description"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "other_complication_description";
//	eschar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "eschar";
	$fdata["GoodName"] = "eschar";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","eschar");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "eschar";

		$fdata["sourceSingle"] = "eschar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eschar";

	
	
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


	$tdataward_rounds["eschar"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "eschar";
//	discharged_today
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "discharged_today";
	$fdata["GoodName"] = "discharged_today";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","discharged_today");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "discharged_today";

		$fdata["sourceSingle"] = "discharged_today";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discharged_today";

	
	
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


	$tdataward_rounds["discharged_today"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "discharged_today";
//	discharge_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "discharge_date";
	$fdata["GoodName"] = "discharge_date";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","discharge_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "discharge_date";

		$fdata["sourceSingle"] = "discharge_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discharge_date";

	
	
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


	$tdataward_rounds["discharge_date"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "discharge_date";
//	death_in_ward
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "death_in_ward";
	$fdata["GoodName"] = "death_in_ward";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","death_in_ward");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "death_in_ward";

		$fdata["sourceSingle"] = "death_in_ward";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "death_in_ward";

	
	
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


	$tdataward_rounds["death_in_ward"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "death_in_ward";
//	neonatal_death
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "neonatal_death";
	$fdata["GoodName"] = "neonatal_death";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","neonatal_death");
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


	$tdataward_rounds["neonatal_death"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "neonatal_death";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","created_at");
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


	$tdataward_rounds["created_at"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.ward_rounds";
	$fdata["Label"] = GetFieldLabel("public_ward_rounds","updated_at");
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


	$tdataward_rounds["updated_at"] = $fdata;
		$tdataward_rounds[".searchableFields"][] = "updated_at";


$tables_data["public.ward_rounds"]=&$tdataward_rounds;
$field_labels["public_ward_rounds"] = &$fieldLabelsward_rounds;
$fieldToolTips["public_ward_rounds"] = &$fieldToolTipsward_rounds;
$placeHolders["public_ward_rounds"] = &$placeHoldersward_rounds;
$page_titles["public_ward_rounds"] = &$pageTitlesward_rounds;


changeTextControlsToDate( "public.ward_rounds" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ward_rounds"] = array();
//	public.ward_antibiotics
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ward_antibiotics";
		$detailsParam["dOriginalTable"] = "public.ward_antibiotics";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ward_antibiotics";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ward_antibiotics");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.ward_rounds"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.ward_rounds"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.ward_rounds"][$dIndex]["masterKeys"][]="ward_round_id";

				$detailsTablesData["public.ward_rounds"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.ward_rounds"][$dIndex]["detailKeys"][]="ward_round_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ward_rounds"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.surgical_cases";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.surgical_cases";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "surgical_cases";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ward_rounds"][0] = $masterParams;
				$masterTablesData["public.ward_rounds"][0]["masterKeys"] = array();
	$masterTablesData["public.ward_rounds"][0]["masterKeys"][]="case_id";
				$masterTablesData["public.ward_rounds"][0]["detailKeys"] = array();
	$masterTablesData["public.ward_rounds"][0]["detailKeys"][]="case_id";
		
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
					$masterTablesData["public.ward_rounds"][1] = $masterParams;
				$masterTablesData["public.ward_rounds"][1]["masterKeys"] = array();
	$masterTablesData["public.ward_rounds"][1]["masterKeys"][]="facility_id";
				$masterTablesData["public.ward_rounds"][1]["detailKeys"] = array();
	$masterTablesData["public.ward_rounds"][1]["detailKeys"][]="facility_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ward_rounds()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ward_round_id,  	case_id,  	facility_id,  	admission_date,  	rounding_date,  	data_collector_name,  	ward_name,  	ward_transfer,  	postop_day,  	dressing_not_removed,  	wound_clean_and_healthy,  	stitches_removed_or_wound_opened,  	wound_opened_spontaneously,  	pus_draining,  	abscess_present,  	redness_around_wound,  	bleeding,  	new_dressing,  	new_dressing_type,  	fever,  	on_antibiotics,  	antibiotics_prescribed,  	ssi_diagnosed_on_reoperation,  	returned_to_or,  	return_or_procedure,  	disposition,  	planned_reoperation,  	other_complications,  	endometritis,  	urinary_tract_infection,  	pneumonia,  	other_complication_description,  	eschar,  	discharged_today,  	discharge_date,  	death_in_ward,  	neonatal_death,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".ward_rounds";
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
	"m_strName" => "ward_round_id",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto6["m_sql"] = "ward_round_id";
$proto6["m_srcTableName"] = "public.ward_rounds";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "case_id",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto8["m_sql"] = "case_id";
$proto8["m_srcTableName"] = "public.ward_rounds";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto10["m_sql"] = "facility_id";
$proto10["m_srcTableName"] = "public.ward_rounds";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "admission_date",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto12["m_sql"] = "admission_date";
$proto12["m_srcTableName"] = "public.ward_rounds";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rounding_date",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto14["m_sql"] = "rounding_date";
$proto14["m_srcTableName"] = "public.ward_rounds";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "data_collector_name",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto16["m_sql"] = "data_collector_name";
$proto16["m_srcTableName"] = "public.ward_rounds";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ward_name",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto18["m_sql"] = "ward_name";
$proto18["m_srcTableName"] = "public.ward_rounds";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ward_transfer",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto20["m_sql"] = "ward_transfer";
$proto20["m_srcTableName"] = "public.ward_rounds";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "postop_day",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto22["m_sql"] = "postop_day";
$proto22["m_srcTableName"] = "public.ward_rounds";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dressing_not_removed",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto24["m_sql"] = "dressing_not_removed";
$proto24["m_srcTableName"] = "public.ward_rounds";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_clean_and_healthy",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto26["m_sql"] = "wound_clean_and_healthy";
$proto26["m_srcTableName"] = "public.ward_rounds";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "stitches_removed_or_wound_opened",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto28["m_sql"] = "stitches_removed_or_wound_opened";
$proto28["m_srcTableName"] = "public.ward_rounds";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_opened_spontaneously",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto30["m_sql"] = "wound_opened_spontaneously";
$proto30["m_srcTableName"] = "public.ward_rounds";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pus_draining",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto32["m_sql"] = "pus_draining";
$proto32["m_srcTableName"] = "public.ward_rounds";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "abscess_present",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto34["m_sql"] = "abscess_present";
$proto34["m_srcTableName"] = "public.ward_rounds";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "redness_around_wound",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto36["m_sql"] = "redness_around_wound";
$proto36["m_srcTableName"] = "public.ward_rounds";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "bleeding",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto38["m_sql"] = "bleeding";
$proto38["m_srcTableName"] = "public.ward_rounds";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "new_dressing",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto40["m_sql"] = "new_dressing";
$proto40["m_srcTableName"] = "public.ward_rounds";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "new_dressing_type",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto42["m_sql"] = "new_dressing_type";
$proto42["m_srcTableName"] = "public.ward_rounds";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fever",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto44["m_sql"] = "fever";
$proto44["m_srcTableName"] = "public.ward_rounds";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "on_antibiotics",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto46["m_sql"] = "on_antibiotics";
$proto46["m_srcTableName"] = "public.ward_rounds";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotics_prescribed",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto48["m_sql"] = "antibiotics_prescribed";
$proto48["m_srcTableName"] = "public.ward_rounds";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "ssi_diagnosed_on_reoperation",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto50["m_sql"] = "ssi_diagnosed_on_reoperation";
$proto50["m_srcTableName"] = "public.ward_rounds";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "returned_to_or",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto52["m_sql"] = "returned_to_or";
$proto52["m_srcTableName"] = "public.ward_rounds";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "return_or_procedure",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto54["m_sql"] = "return_or_procedure";
$proto54["m_srcTableName"] = "public.ward_rounds";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "disposition",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto56["m_sql"] = "disposition";
$proto56["m_srcTableName"] = "public.ward_rounds";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "planned_reoperation",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto58["m_sql"] = "planned_reoperation";
$proto58["m_srcTableName"] = "public.ward_rounds";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "other_complications",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto60["m_sql"] = "other_complications";
$proto60["m_srcTableName"] = "public.ward_rounds";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "endometritis",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto62["m_sql"] = "endometritis";
$proto62["m_srcTableName"] = "public.ward_rounds";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "urinary_tract_infection",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto64["m_sql"] = "urinary_tract_infection";
$proto64["m_srcTableName"] = "public.ward_rounds";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "pneumonia",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto66["m_sql"] = "pneumonia";
$proto66["m_srcTableName"] = "public.ward_rounds";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "other_complication_description",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto68["m_sql"] = "other_complication_description";
$proto68["m_srcTableName"] = "public.ward_rounds";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "eschar",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto70["m_sql"] = "eschar";
$proto70["m_srcTableName"] = "public.ward_rounds";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "discharged_today",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto72["m_sql"] = "discharged_today";
$proto72["m_srcTableName"] = "public.ward_rounds";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "discharge_date",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto74["m_sql"] = "discharge_date";
$proto74["m_srcTableName"] = "public.ward_rounds";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "death_in_ward",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto76["m_sql"] = "death_in_ward";
$proto76["m_srcTableName"] = "public.ward_rounds";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "neonatal_death",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto78["m_sql"] = "neonatal_death";
$proto78["m_srcTableName"] = "public.ward_rounds";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto80["m_sql"] = "created_at";
$proto80["m_srcTableName"] = "public.ward_rounds";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.ward_rounds",
	"m_srcTableName" => "public.ward_rounds"
));

$proto82["m_sql"] = "updated_at";
$proto82["m_srcTableName"] = "public.ward_rounds";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "public.ward_rounds";
$proto85["m_srcTableName"] = "public.ward_rounds";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "ward_round_id";
$proto85["m_columns"][] = "case_id";
$proto85["m_columns"][] = "facility_id";
$proto85["m_columns"][] = "admission_date";
$proto85["m_columns"][] = "rounding_date";
$proto85["m_columns"][] = "data_collector_name";
$proto85["m_columns"][] = "ward_name";
$proto85["m_columns"][] = "ward_transfer";
$proto85["m_columns"][] = "postop_day";
$proto85["m_columns"][] = "dressing_not_removed";
$proto85["m_columns"][] = "wound_clean_and_healthy";
$proto85["m_columns"][] = "stitches_removed_or_wound_opened";
$proto85["m_columns"][] = "wound_opened_spontaneously";
$proto85["m_columns"][] = "pus_draining";
$proto85["m_columns"][] = "abscess_present";
$proto85["m_columns"][] = "redness_around_wound";
$proto85["m_columns"][] = "bleeding";
$proto85["m_columns"][] = "new_dressing";
$proto85["m_columns"][] = "new_dressing_type";
$proto85["m_columns"][] = "fever";
$proto85["m_columns"][] = "on_antibiotics";
$proto85["m_columns"][] = "antibiotics_prescribed";
$proto85["m_columns"][] = "ssi_diagnosed_on_reoperation";
$proto85["m_columns"][] = "returned_to_or";
$proto85["m_columns"][] = "return_or_procedure";
$proto85["m_columns"][] = "disposition";
$proto85["m_columns"][] = "planned_reoperation";
$proto85["m_columns"][] = "other_complications";
$proto85["m_columns"][] = "endometritis";
$proto85["m_columns"][] = "urinary_tract_infection";
$proto85["m_columns"][] = "pneumonia";
$proto85["m_columns"][] = "other_complication_description";
$proto85["m_columns"][] = "eschar";
$proto85["m_columns"][] = "discharged_today";
$proto85["m_columns"][] = "discharge_date";
$proto85["m_columns"][] = "death_in_ward";
$proto85["m_columns"][] = "neonatal_death";
$proto85["m_columns"][] = "created_at";
$proto85["m_columns"][] = "updated_at";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "\"public\".ward_rounds";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "public.ward_rounds";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.ward_rounds";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ward_rounds = createSqlQuery_ward_rounds();


	
				;

																																							

$tdataward_rounds[".sqlquery"] = $queryData_ward_rounds;



$tdataward_rounds[".hasEvents"] = false;

?>