<?php
$tdatasurgical_cases = array();
$tdatasurgical_cases[".searchableFields"] = array();
$tdatasurgical_cases[".ShortName"] = "surgical_cases";
$tdatasurgical_cases[".OwnerID"] = "";
$tdatasurgical_cases[".OriginalTable"] = "public.surgical_cases";


$tdatasurgical_cases[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasurgical_cases[".originalPagesByType"] = $tdatasurgical_cases[".pagesByType"];
$tdatasurgical_cases[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasurgical_cases[".originalPages"] = $tdatasurgical_cases[".pages"];
$tdatasurgical_cases[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasurgical_cases[".originalDefaultPages"] = $tdatasurgical_cases[".defaultPages"];

//	field labels
$fieldLabelssurgical_cases = array();
$fieldToolTipssurgical_cases = array();
$pageTitlessurgical_cases = array();
$placeHolderssurgical_cases = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssurgical_cases["English"] = array();
	$fieldToolTipssurgical_cases["English"] = array();
	$placeHolderssurgical_cases["English"] = array();
	$pageTitlessurgical_cases["English"] = array();
	$fieldLabelssurgical_cases["English"]["case_id"] = "Case Id";
	$fieldToolTipssurgical_cases["English"]["case_id"] = "";
	$placeHolderssurgical_cases["English"]["case_id"] = "";
	$fieldLabelssurgical_cases["English"]["facility_id"] = "Facility Id";
	$fieldToolTipssurgical_cases["English"]["facility_id"] = "";
	$placeHolderssurgical_cases["English"]["facility_id"] = "";
	$fieldLabelssurgical_cases["English"]["country_id"] = "Country Id";
	$fieldToolTipssurgical_cases["English"]["country_id"] = "";
	$placeHolderssurgical_cases["English"]["country_id"] = "";
	$fieldLabelssurgical_cases["English"]["surgery_date"] = "Surgery Date";
	$fieldToolTipssurgical_cases["English"]["surgery_date"] = "";
	$placeHolderssurgical_cases["English"]["surgery_date"] = "";
	$fieldLabelssurgical_cases["English"]["data_type"] = "Data Type";
	$fieldToolTipssurgical_cases["English"]["data_type"] = "";
	$placeHolderssurgical_cases["English"]["data_type"] = "";
	$fieldLabelssurgical_cases["English"]["data_collector_name"] = "Data Collector Name";
	$fieldToolTipssurgical_cases["English"]["data_collector_name"] = "";
	$placeHolderssurgical_cases["English"]["data_collector_name"] = "";
	$fieldLabelssurgical_cases["English"]["location_of_surgery"] = "Location Of Surgery";
	$fieldToolTipssurgical_cases["English"]["location_of_surgery"] = "";
	$placeHolderssurgical_cases["English"]["location_of_surgery"] = "";
	$fieldLabelssurgical_cases["English"]["patient_sex"] = "Patient Sex";
	$fieldToolTipssurgical_cases["English"]["patient_sex"] = "";
	$placeHolderssurgical_cases["English"]["patient_sex"] = "";
	$fieldLabelssurgical_cases["English"]["patient_asa_classification"] = "Patient Asa Classification";
	$fieldToolTipssurgical_cases["English"]["patient_asa_classification"] = "";
	$placeHolderssurgical_cases["English"]["patient_asa_classification"] = "";
	$fieldLabelssurgical_cases["English"]["patient_dob"] = "Patient Dob";
	$fieldToolTipssurgical_cases["English"]["patient_dob"] = "";
	$placeHolderssurgical_cases["English"]["patient_dob"] = "";
	$fieldLabelssurgical_cases["English"]["patient_age"] = "Patient Age";
	$fieldToolTipssurgical_cases["English"]["patient_age"] = "";
	$placeHolderssurgical_cases["English"]["patient_age"] = "";
	$fieldLabelssurgical_cases["English"]["diabetes"] = "Diabetes";
	$fieldToolTipssurgical_cases["English"]["diabetes"] = "";
	$placeHolderssurgical_cases["English"]["diabetes"] = "";
	$fieldLabelssurgical_cases["English"]["hypertension"] = "Hypertension";
	$fieldToolTipssurgical_cases["English"]["hypertension"] = "";
	$placeHolderssurgical_cases["English"]["hypertension"] = "";
	$fieldLabelssurgical_cases["English"]["obese"] = "Obese";
	$fieldToolTipssurgical_cases["English"]["obese"] = "";
	$placeHolderssurgical_cases["English"]["obese"] = "";
	$fieldLabelssurgical_cases["English"]["malnourished"] = "Malnourished";
	$fieldToolTipssurgical_cases["English"]["malnourished"] = "";
	$placeHolderssurgical_cases["English"]["malnourished"] = "";
	$fieldLabelssurgical_cases["English"]["smoker"] = "Smoker";
	$fieldToolTipssurgical_cases["English"]["smoker"] = "";
	$placeHolderssurgical_cases["English"]["smoker"] = "";
	$fieldLabelssurgical_cases["English"]["on_steroids"] = "On Steroids";
	$fieldToolTipssurgical_cases["English"]["on_steroids"] = "";
	$placeHolderssurgical_cases["English"]["on_steroids"] = "";
	$fieldLabelssurgical_cases["English"]["admitted_to_icu"] = "Admitted To Icu";
	$fieldToolTipssurgical_cases["English"]["admitted_to_icu"] = "";
	$placeHolderssurgical_cases["English"]["admitted_to_icu"] = "";
	$fieldLabelssurgical_cases["English"]["hypothermic"] = "Hypothermic";
	$fieldToolTipssurgical_cases["English"]["hypothermic"] = "";
	$placeHolderssurgical_cases["English"]["hypothermic"] = "";
	$fieldLabelssurgical_cases["English"]["preoperative_diagnosis_id"] = "Preoperative Diagnosis Id";
	$fieldToolTipssurgical_cases["English"]["preoperative_diagnosis_id"] = "";
	$placeHolderssurgical_cases["English"]["preoperative_diagnosis_id"] = "";
	$fieldLabelssurgical_cases["English"]["hours_since_injury"] = "Hours Since Injury";
	$fieldToolTipssurgical_cases["English"]["hours_since_injury"] = "";
	$placeHolderssurgical_cases["English"]["hours_since_injury"] = "";
	$fieldLabelssurgical_cases["English"]["sterilizable_drill_used"] = "Sterilizable Drill Used";
	$fieldToolTipssurgical_cases["English"]["sterilizable_drill_used"] = "";
	$placeHolderssurgical_cases["English"]["sterilizable_drill_used"] = "";
	$fieldLabelssurgical_cases["English"]["drill_sterile_cover_used"] = "Drill Sterile Cover Used";
	$fieldToolTipssurgical_cases["English"]["drill_sterile_cover_used"] = "";
	$placeHolderssurgical_cases["English"]["drill_sterile_cover_used"] = "";
	$fieldLabelssurgical_cases["English"]["holes_in_sterile_cover"] = "Holes In Sterile Cover";
	$fieldToolTipssurgical_cases["English"]["holes_in_sterile_cover"] = "";
	$placeHolderssurgical_cases["English"]["holes_in_sterile_cover"] = "";
	$fieldLabelssurgical_cases["English"]["sign_in_read_aloud"] = "Sign In Read Aloud";
	$fieldToolTipssurgical_cases["English"]["sign_in_read_aloud"] = "";
	$placeHolderssurgical_cases["English"]["sign_in_read_aloud"] = "";
	$fieldLabelssurgical_cases["English"]["sign_in_completed_before_anesthesia"] = "Sign In Completed Before Anesthesia";
	$fieldToolTipssurgical_cases["English"]["sign_in_completed_before_anesthesia"] = "";
	$placeHolderssurgical_cases["English"]["sign_in_completed_before_anesthesia"] = "";
	$fieldLabelssurgical_cases["English"]["sterility_indicator_in_tray"] = "Sterility Indicator In Tray";
	$fieldToolTipssurgical_cases["English"]["sterility_indicator_in_tray"] = "";
	$placeHolderssurgical_cases["English"]["sterility_indicator_in_tray"] = "";
	$fieldLabelssurgical_cases["English"]["sterility_indicator_color_changed"] = "Sterility Indicator Color Changed";
	$fieldToolTipssurgical_cases["English"]["sterility_indicator_color_changed"] = "";
	$placeHolderssurgical_cases["English"]["sterility_indicator_color_changed"] = "";
	$fieldLabelssurgical_cases["English"]["tray_wet_prior_to_operation"] = "Tray Wet Prior To Operation";
	$fieldToolTipssurgical_cases["English"]["tray_wet_prior_to_operation"] = "";
	$placeHolderssurgical_cases["English"]["tray_wet_prior_to_operation"] = "";
	$fieldLabelssurgical_cases["English"]["tray_replaced"] = "Tray Replaced";
	$fieldToolTipssurgical_cases["English"]["tray_replaced"] = "";
	$placeHolderssurgical_cases["English"]["tray_replaced"] = "";
	$fieldLabelssurgical_cases["English"]["gauze_count_performed"] = "Gauze Count Performed";
	$fieldToolTipssurgical_cases["English"]["gauze_count_performed"] = "";
	$placeHolderssurgical_cases["English"]["gauze_count_performed"] = "";
	$fieldLabelssurgical_cases["English"]["gauze_count_total"] = "Gauze Count Total";
	$fieldToolTipssurgical_cases["English"]["gauze_count_total"] = "";
	$placeHolderssurgical_cases["English"]["gauze_count_total"] = "";
	$fieldLabelssurgical_cases["English"]["surgeon_scrubbed_hands"] = "Surgeon Scrubbed Hands";
	$fieldToolTipssurgical_cases["English"]["surgeon_scrubbed_hands"] = "";
	$placeHolderssurgical_cases["English"]["surgeon_scrubbed_hands"] = "";
	$fieldLabelssurgical_cases["English"]["handwashing_available"] = "Handwashing Available";
	$fieldToolTipssurgical_cases["English"]["handwashing_available"] = "";
	$placeHolderssurgical_cases["English"]["handwashing_available"] = "";
	$fieldLabelssurgical_cases["English"]["alcohol_solution_applied"] = "Alcohol Solution Applied";
	$fieldToolTipssurgical_cases["English"]["alcohol_solution_applied"] = "";
	$placeHolderssurgical_cases["English"]["alcohol_solution_applied"] = "";
	$fieldLabelssurgical_cases["English"]["new_surgical_gloves_used"] = "New Surgical Gloves Used";
	$fieldToolTipssurgical_cases["English"]["new_surgical_gloves_used"] = "";
	$placeHolderssurgical_cases["English"]["new_surgical_gloves_used"] = "";
	$fieldLabelssurgical_cases["English"]["gown_sterility_indicator"] = "Gown Sterility Indicator";
	$fieldToolTipssurgical_cases["English"]["gown_sterility_indicator"] = "";
	$placeHolderssurgical_cases["English"]["gown_sterility_indicator"] = "";
	$fieldLabelssurgical_cases["English"]["gown_indicator_color_changed"] = "Gown Indicator Color Changed";
	$fieldToolTipssurgical_cases["English"]["gown_indicator_color_changed"] = "";
	$placeHolderssurgical_cases["English"]["gown_indicator_color_changed"] = "";
	$fieldLabelssurgical_cases["English"]["gown_pack_replaced"] = "Gown Pack Replaced";
	$fieldToolTipssurgical_cases["English"]["gown_pack_replaced"] = "";
	$placeHolderssurgical_cases["English"]["gown_pack_replaced"] = "";
	$fieldLabelssurgical_cases["English"]["gowns_or_drapes_wet"] = "Gowns Or Drapes Wet";
	$fieldToolTipssurgical_cases["English"]["gowns_or_drapes_wet"] = "";
	$placeHolderssurgical_cases["English"]["gowns_or_drapes_wet"] = "";
	$fieldLabelssurgical_cases["English"]["wet_gowns_replaced"] = "Wet Gowns Replaced";
	$fieldToolTipssurgical_cases["English"]["wet_gowns_replaced"] = "";
	$placeHolderssurgical_cases["English"]["wet_gowns_replaced"] = "";
	$fieldLabelssurgical_cases["English"]["holes_in_gowns"] = "Holes In Gowns";
	$fieldToolTipssurgical_cases["English"]["holes_in_gowns"] = "";
	$placeHolderssurgical_cases["English"]["holes_in_gowns"] = "";
	$fieldLabelssurgical_cases["English"]["torn_gowns_replaced"] = "Torn Gowns Replaced";
	$fieldToolTipssurgical_cases["English"]["torn_gowns_replaced"] = "";
	$placeHolderssurgical_cases["English"]["torn_gowns_replaced"] = "";
	$fieldLabelssurgical_cases["English"]["holes_in_drapes"] = "Holes In Drapes";
	$fieldToolTipssurgical_cases["English"]["holes_in_drapes"] = "";
	$placeHolderssurgical_cases["English"]["holes_in_drapes"] = "";
	$fieldLabelssurgical_cases["English"]["drapes_replaced"] = "Drapes Replaced";
	$fieldToolTipssurgical_cases["English"]["drapes_replaced"] = "";
	$placeHolderssurgical_cases["English"]["drapes_replaced"] = "";
	$fieldLabelssurgical_cases["English"]["surgical_site_prep_method"] = "Surgical Site Prep Method";
	$fieldToolTipssurgical_cases["English"]["surgical_site_prep_method"] = "";
	$placeHolderssurgical_cases["English"]["surgical_site_prep_method"] = "";
	$fieldLabelssurgical_cases["English"]["vaginal_preparation"] = "Vaginal Preparation";
	$fieldToolTipssurgical_cases["English"]["vaginal_preparation"] = "";
	$placeHolderssurgical_cases["English"]["vaginal_preparation"] = "";
	$fieldLabelssurgical_cases["English"]["antibiotics_given"] = "Antibiotics Given";
	$fieldToolTipssurgical_cases["English"]["antibiotics_given"] = "";
	$placeHolderssurgical_cases["English"]["antibiotics_given"] = "";
	$fieldLabelssurgical_cases["English"]["antibiotics_admin_location"] = "Antibiotics Admin Location";
	$fieldToolTipssurgical_cases["English"]["antibiotics_admin_location"] = "";
	$placeHolderssurgical_cases["English"]["antibiotics_admin_location"] = "";
	$fieldLabelssurgical_cases["English"]["antibiotics_time"] = "Antibiotics Time";
	$fieldToolTipssurgical_cases["English"]["antibiotics_time"] = "";
	$placeHolderssurgical_cases["English"]["antibiotics_time"] = "";
	$fieldLabelssurgical_cases["English"]["on_scheduled_antibiotics"] = "On Scheduled Antibiotics";
	$fieldToolTipssurgical_cases["English"]["on_scheduled_antibiotics"] = "";
	$placeHolderssurgical_cases["English"]["on_scheduled_antibiotics"] = "";
	$fieldLabelssurgical_cases["English"]["antibiotic_type"] = "Antibiotic Type";
	$fieldToolTipssurgical_cases["English"]["antibiotic_type"] = "";
	$placeHolderssurgical_cases["English"]["antibiotic_type"] = "";
	$fieldLabelssurgical_cases["English"]["timeout_read_aloud"] = "Timeout Read Aloud";
	$fieldToolTipssurgical_cases["English"]["timeout_read_aloud"] = "";
	$placeHolderssurgical_cases["English"]["timeout_read_aloud"] = "";
	$fieldLabelssurgical_cases["English"]["operation_type_announced"] = "Operation Type Announced";
	$fieldToolTipssurgical_cases["English"]["operation_type_announced"] = "";
	$placeHolderssurgical_cases["English"]["operation_type_announced"] = "";
	$fieldLabelssurgical_cases["English"]["blood_loss_announced"] = "Blood Loss Announced";
	$fieldToolTipssurgical_cases["English"]["blood_loss_announced"] = "";
	$placeHolderssurgical_cases["English"]["blood_loss_announced"] = "";
	$fieldLabelssurgical_cases["English"]["estimated_blood_loss"] = "Estimated Blood Loss";
	$fieldToolTipssurgical_cases["English"]["estimated_blood_loss"] = "";
	$placeHolderssurgical_cases["English"]["estimated_blood_loss"] = "";
	$fieldLabelssurgical_cases["English"]["time_of_incision"] = "Time Of Incision";
	$fieldToolTipssurgical_cases["English"]["time_of_incision"] = "";
	$placeHolderssurgical_cases["English"]["time_of_incision"] = "";
	$fieldLabelssurgical_cases["English"]["gauze_count_end_performed"] = "Gauze Count End Performed";
	$fieldToolTipssurgical_cases["English"]["gauze_count_end_performed"] = "";
	$placeHolderssurgical_cases["English"]["gauze_count_end_performed"] = "";
	$fieldLabelssurgical_cases["English"]["gauze_count_end_total"] = "Gauze Count End Total";
	$fieldToolTipssurgical_cases["English"]["gauze_count_end_total"] = "";
	$placeHolderssurgical_cases["English"]["gauze_count_end_total"] = "";
	$fieldLabelssurgical_cases["English"]["time_dressing_applied"] = "Time Dressing Applied";
	$fieldToolTipssurgical_cases["English"]["time_dressing_applied"] = "";
	$placeHolderssurgical_cases["English"]["time_dressing_applied"] = "";
	$fieldLabelssurgical_cases["English"]["procedure_id"] = "Procedure Id";
	$fieldToolTipssurgical_cases["English"]["procedure_id"] = "";
	$placeHolderssurgical_cases["English"]["procedure_id"] = "";
	$fieldLabelssurgical_cases["English"]["hardware_or_bioprosthetic_used"] = "Hardware Or Bioprosthetic Used";
	$fieldToolTipssurgical_cases["English"]["hardware_or_bioprosthetic_used"] = "";
	$placeHolderssurgical_cases["English"]["hardware_or_bioprosthetic_used"] = "";
	$fieldLabelssurgical_cases["English"]["cesarean_indication"] = "Cesarean Indication";
	$fieldToolTipssurgical_cases["English"]["cesarean_indication"] = "";
	$placeHolderssurgical_cases["English"]["cesarean_indication"] = "";
	$fieldLabelssurgical_cases["English"]["wound_closed_primarily"] = "Wound Closed Primarily";
	$fieldToolTipssurgical_cases["English"]["wound_closed_primarily"] = "";
	$placeHolderssurgical_cases["English"]["wound_closed_primarily"] = "";
	$fieldLabelssurgical_cases["English"]["wound_classification"] = "Wound Classification";
	$fieldToolTipssurgical_cases["English"]["wound_classification"] = "";
	$placeHolderssurgical_cases["English"]["wound_classification"] = "";
	$fieldLabelssurgical_cases["English"]["case_type"] = "Case Type";
	$fieldToolTipssurgical_cases["English"]["case_type"] = "";
	$placeHolderssurgical_cases["English"]["case_type"] = "";
	$fieldLabelssurgical_cases["English"]["sign_out_read_aloud"] = "Sign Out Read Aloud";
	$fieldToolTipssurgical_cases["English"]["sign_out_read_aloud"] = "";
	$placeHolderssurgical_cases["English"]["sign_out_read_aloud"] = "";
	$fieldLabelssurgical_cases["English"]["sign_out_in_theatre"] = "Sign Out In Theatre";
	$fieldToolTipssurgical_cases["English"]["sign_out_in_theatre"] = "";
	$placeHolderssurgical_cases["English"]["sign_out_in_theatre"] = "";
	$fieldLabelssurgical_cases["English"]["unplanned_intubation"] = "Unplanned Intubation";
	$fieldToolTipssurgical_cases["English"]["unplanned_intubation"] = "";
	$placeHolderssurgical_cases["English"]["unplanned_intubation"] = "";
	$fieldLabelssurgical_cases["English"]["urgent_tracheostomy"] = "Urgent Tracheostomy";
	$fieldToolTipssurgical_cases["English"]["urgent_tracheostomy"] = "";
	$placeHolderssurgical_cases["English"]["urgent_tracheostomy"] = "";
	$fieldLabelssurgical_cases["English"]["urgent_central_access"] = "Urgent Central Access";
	$fieldToolTipssurgical_cases["English"]["urgent_central_access"] = "";
	$placeHolderssurgical_cases["English"]["urgent_central_access"] = "";
	$fieldLabelssurgical_cases["English"]["other_crisis_occurred"] = "Other Crisis Occurred";
	$fieldToolTipssurgical_cases["English"]["other_crisis_occurred"] = "";
	$placeHolderssurgical_cases["English"]["other_crisis_occurred"] = "";
	$fieldLabelssurgical_cases["English"]["crisis_description"] = "Crisis Description";
	$fieldToolTipssurgical_cases["English"]["crisis_description"] = "";
	$placeHolderssurgical_cases["English"]["crisis_description"] = "";
	$fieldLabelssurgical_cases["English"]["death_in_or"] = "Death In Or";
	$fieldToolTipssurgical_cases["English"]["death_in_or"] = "";
	$placeHolderssurgical_cases["English"]["death_in_or"] = "";
	$fieldLabelssurgical_cases["English"]["fetal_death"] = "Fetal Death";
	$fieldToolTipssurgical_cases["English"]["fetal_death"] = "";
	$placeHolderssurgical_cases["English"]["fetal_death"] = "";
	$fieldLabelssurgical_cases["English"]["created_at"] = "Created At";
	$fieldToolTipssurgical_cases["English"]["created_at"] = "";
	$placeHolderssurgical_cases["English"]["created_at"] = "";
	$fieldLabelssurgical_cases["English"]["updated_at"] = "Updated At";
	$fieldToolTipssurgical_cases["English"]["updated_at"] = "";
	$placeHolderssurgical_cases["English"]["updated_at"] = "";
	if (count($fieldToolTipssurgical_cases["English"]))
		$tdatasurgical_cases[".isUseToolTips"] = true;
}


	$tdatasurgical_cases[".NCSearch"] = true;



$tdatasurgical_cases[".shortTableName"] = "surgical_cases";
$tdatasurgical_cases[".nSecOptions"] = 0;

$tdatasurgical_cases[".mainTableOwnerID"] = "";
$tdatasurgical_cases[".entityType"] = 0;
$tdatasurgical_cases[".connId"] = "lifebox_mesystem_at_localhost";


$tdatasurgical_cases[".strOriginalTableName"] = "public.surgical_cases";

	



$tdatasurgical_cases[".showAddInPopup"] = false;

$tdatasurgical_cases[".showEditInPopup"] = false;

$tdatasurgical_cases[".showViewInPopup"] = false;

$tdatasurgical_cases[".listAjax"] = false;
//	temporary
//$tdatasurgical_cases[".listAjax"] = false;

	$tdatasurgical_cases[".audit"] = true;

	$tdatasurgical_cases[".locking"] = false;


$pages = $tdatasurgical_cases[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasurgical_cases[".edit"] = true;
	$tdatasurgical_cases[".afterEditAction"] = 1;
	$tdatasurgical_cases[".closePopupAfterEdit"] = 1;
	$tdatasurgical_cases[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasurgical_cases[".add"] = true;
$tdatasurgical_cases[".afterAddAction"] = 1;
$tdatasurgical_cases[".closePopupAfterAdd"] = 1;
$tdatasurgical_cases[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasurgical_cases[".list"] = true;
}



$tdatasurgical_cases[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasurgical_cases[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasurgical_cases[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasurgical_cases[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasurgical_cases[".printFriendly"] = true;
}



$tdatasurgical_cases[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasurgical_cases[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasurgical_cases[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasurgical_cases[".isUseAjaxSuggest"] = true;





$tdatasurgical_cases[".ajaxCodeSnippetAdded"] = false;

$tdatasurgical_cases[".buttonsAdded"] = false;

$tdatasurgical_cases[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurgical_cases[".isUseTimeForSearch"] = false;


$tdatasurgical_cases[".badgeColor"] = "CFAE83";


$tdatasurgical_cases[".allSearchFields"] = array();
$tdatasurgical_cases[".filterFields"] = array();
$tdatasurgical_cases[".requiredSearchFields"] = array();

$tdatasurgical_cases[".googleLikeFields"] = array();
$tdatasurgical_cases[".googleLikeFields"][] = "case_id";
$tdatasurgical_cases[".googleLikeFields"][] = "facility_id";
$tdatasurgical_cases[".googleLikeFields"][] = "country_id";
$tdatasurgical_cases[".googleLikeFields"][] = "surgery_date";
$tdatasurgical_cases[".googleLikeFields"][] = "data_type";
$tdatasurgical_cases[".googleLikeFields"][] = "data_collector_name";
$tdatasurgical_cases[".googleLikeFields"][] = "location_of_surgery";
$tdatasurgical_cases[".googleLikeFields"][] = "patient_sex";
$tdatasurgical_cases[".googleLikeFields"][] = "patient_asa_classification";
$tdatasurgical_cases[".googleLikeFields"][] = "patient_dob";
$tdatasurgical_cases[".googleLikeFields"][] = "patient_age";
$tdatasurgical_cases[".googleLikeFields"][] = "diabetes";
$tdatasurgical_cases[".googleLikeFields"][] = "hypertension";
$tdatasurgical_cases[".googleLikeFields"][] = "obese";
$tdatasurgical_cases[".googleLikeFields"][] = "malnourished";
$tdatasurgical_cases[".googleLikeFields"][] = "smoker";
$tdatasurgical_cases[".googleLikeFields"][] = "on_steroids";
$tdatasurgical_cases[".googleLikeFields"][] = "admitted_to_icu";
$tdatasurgical_cases[".googleLikeFields"][] = "hypothermic";
$tdatasurgical_cases[".googleLikeFields"][] = "preoperative_diagnosis_id";
$tdatasurgical_cases[".googleLikeFields"][] = "hours_since_injury";
$tdatasurgical_cases[".googleLikeFields"][] = "sterilizable_drill_used";
$tdatasurgical_cases[".googleLikeFields"][] = "drill_sterile_cover_used";
$tdatasurgical_cases[".googleLikeFields"][] = "holes_in_sterile_cover";
$tdatasurgical_cases[".googleLikeFields"][] = "sign_in_read_aloud";
$tdatasurgical_cases[".googleLikeFields"][] = "sign_in_completed_before_anesthesia";
$tdatasurgical_cases[".googleLikeFields"][] = "sterility_indicator_in_tray";
$tdatasurgical_cases[".googleLikeFields"][] = "sterility_indicator_color_changed";
$tdatasurgical_cases[".googleLikeFields"][] = "tray_wet_prior_to_operation";
$tdatasurgical_cases[".googleLikeFields"][] = "tray_replaced";
$tdatasurgical_cases[".googleLikeFields"][] = "gauze_count_performed";
$tdatasurgical_cases[".googleLikeFields"][] = "gauze_count_total";
$tdatasurgical_cases[".googleLikeFields"][] = "surgeon_scrubbed_hands";
$tdatasurgical_cases[".googleLikeFields"][] = "handwashing_available";
$tdatasurgical_cases[".googleLikeFields"][] = "alcohol_solution_applied";
$tdatasurgical_cases[".googleLikeFields"][] = "new_surgical_gloves_used";
$tdatasurgical_cases[".googleLikeFields"][] = "gown_sterility_indicator";
$tdatasurgical_cases[".googleLikeFields"][] = "gown_indicator_color_changed";
$tdatasurgical_cases[".googleLikeFields"][] = "gown_pack_replaced";
$tdatasurgical_cases[".googleLikeFields"][] = "gowns_or_drapes_wet";
$tdatasurgical_cases[".googleLikeFields"][] = "wet_gowns_replaced";
$tdatasurgical_cases[".googleLikeFields"][] = "holes_in_gowns";
$tdatasurgical_cases[".googleLikeFields"][] = "torn_gowns_replaced";
$tdatasurgical_cases[".googleLikeFields"][] = "holes_in_drapes";
$tdatasurgical_cases[".googleLikeFields"][] = "drapes_replaced";
$tdatasurgical_cases[".googleLikeFields"][] = "surgical_site_prep_method";
$tdatasurgical_cases[".googleLikeFields"][] = "vaginal_preparation";
$tdatasurgical_cases[".googleLikeFields"][] = "antibiotics_given";
$tdatasurgical_cases[".googleLikeFields"][] = "antibiotics_admin_location";
$tdatasurgical_cases[".googleLikeFields"][] = "antibiotics_time";
$tdatasurgical_cases[".googleLikeFields"][] = "on_scheduled_antibiotics";
$tdatasurgical_cases[".googleLikeFields"][] = "antibiotic_type";
$tdatasurgical_cases[".googleLikeFields"][] = "timeout_read_aloud";
$tdatasurgical_cases[".googleLikeFields"][] = "operation_type_announced";
$tdatasurgical_cases[".googleLikeFields"][] = "blood_loss_announced";
$tdatasurgical_cases[".googleLikeFields"][] = "estimated_blood_loss";
$tdatasurgical_cases[".googleLikeFields"][] = "time_of_incision";
$tdatasurgical_cases[".googleLikeFields"][] = "gauze_count_end_performed";
$tdatasurgical_cases[".googleLikeFields"][] = "gauze_count_end_total";
$tdatasurgical_cases[".googleLikeFields"][] = "time_dressing_applied";
$tdatasurgical_cases[".googleLikeFields"][] = "procedure_id";
$tdatasurgical_cases[".googleLikeFields"][] = "hardware_or_bioprosthetic_used";
$tdatasurgical_cases[".googleLikeFields"][] = "cesarean_indication";
$tdatasurgical_cases[".googleLikeFields"][] = "wound_closed_primarily";
$tdatasurgical_cases[".googleLikeFields"][] = "wound_classification";
$tdatasurgical_cases[".googleLikeFields"][] = "case_type";
$tdatasurgical_cases[".googleLikeFields"][] = "sign_out_read_aloud";
$tdatasurgical_cases[".googleLikeFields"][] = "sign_out_in_theatre";
$tdatasurgical_cases[".googleLikeFields"][] = "unplanned_intubation";
$tdatasurgical_cases[".googleLikeFields"][] = "urgent_tracheostomy";
$tdatasurgical_cases[".googleLikeFields"][] = "urgent_central_access";
$tdatasurgical_cases[".googleLikeFields"][] = "other_crisis_occurred";
$tdatasurgical_cases[".googleLikeFields"][] = "crisis_description";
$tdatasurgical_cases[".googleLikeFields"][] = "death_in_or";
$tdatasurgical_cases[".googleLikeFields"][] = "fetal_death";
$tdatasurgical_cases[".googleLikeFields"][] = "created_at";
$tdatasurgical_cases[".googleLikeFields"][] = "updated_at";



$tdatasurgical_cases[".tableType"] = "list";

$tdatasurgical_cases[".printerPageOrientation"] = 0;
$tdatasurgical_cases[".nPrinterPageScale"] = 100;

$tdatasurgical_cases[".nPrinterSplitRecords"] = 40;

$tdatasurgical_cases[".geocodingEnabled"] = false;










$tdatasurgical_cases[".pageSize"] = 20;

$tdatasurgical_cases[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasurgical_cases[".strOrderBy"] = $tstrOrderBy;

$tdatasurgical_cases[".orderindexes"] = array();


$tdatasurgical_cases[".sqlHead"] = "SELECT case_id,  	facility_id,  	country_id,  	surgery_date,  	data_type,  	data_collector_name,  	location_of_surgery,  	patient_sex,  	patient_asa_classification,  	patient_dob,  	patient_age,  	diabetes,  	hypertension,  	obese,  	malnourished,  	smoker,  	on_steroids,  	admitted_to_icu,  	hypothermic,  	preoperative_diagnosis_id,  	hours_since_injury,  	sterilizable_drill_used,  	drill_sterile_cover_used,  	holes_in_sterile_cover,  	sign_in_read_aloud,  	sign_in_completed_before_anesthesia,  	sterility_indicator_in_tray,  	sterility_indicator_color_changed,  	tray_wet_prior_to_operation,  	tray_replaced,  	gauze_count_performed,  	gauze_count_total,  	surgeon_scrubbed_hands,  	handwashing_available,  	alcohol_solution_applied,  	new_surgical_gloves_used,  	gown_sterility_indicator,  	gown_indicator_color_changed,  	gown_pack_replaced,  	gowns_or_drapes_wet,  	wet_gowns_replaced,  	holes_in_gowns,  	torn_gowns_replaced,  	holes_in_drapes,  	drapes_replaced,  	surgical_site_prep_method,  	vaginal_preparation,  	antibiotics_given,  	antibiotics_admin_location,  	antibiotics_time,  	on_scheduled_antibiotics,  	antibiotic_type,  	timeout_read_aloud,  	operation_type_announced,  	blood_loss_announced,  	estimated_blood_loss,  	time_of_incision,  	gauze_count_end_performed,  	gauze_count_end_total,  	time_dressing_applied,  	procedure_id,  	hardware_or_bioprosthetic_used,  	cesarean_indication,  	wound_closed_primarily,  	wound_classification,  	case_type,  	sign_out_read_aloud,  	sign_out_in_theatre,  	unplanned_intubation,  	urgent_tracheostomy,  	urgent_central_access,  	other_crisis_occurred,  	crisis_description,  	death_in_or,  	fetal_death,  	created_at,  	updated_at";
$tdatasurgical_cases[".sqlFrom"] = "FROM \"public\".surgical_cases";
$tdatasurgical_cases[".sqlWhereExpr"] = "";
$tdatasurgical_cases[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurgical_cases[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurgical_cases[".arrGroupsPerPage"] = $arrGPP;

$tdatasurgical_cases[".highlightSearchResults"] = true;

$tableKeyssurgical_cases = array();
$tableKeyssurgical_cases[] = "case_id";
$tdatasurgical_cases[".Keys"] = $tableKeyssurgical_cases;


$tdatasurgical_cases[".hideMobileList"] = array();




//	case_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "case_id";
	$fdata["GoodName"] = "case_id";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","case_id");
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


	$tdatasurgical_cases["case_id"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "case_id";
//	facility_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "facility_id";
	$fdata["GoodName"] = "facility_id";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","facility_id");
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


	$tdatasurgical_cases["facility_id"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "facility_id";
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "country_id";

		$fdata["sourceSingle"] = "country_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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


	$tdatasurgical_cases["country_id"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "country_id";
//	surgery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "surgery_date";
	$fdata["GoodName"] = "surgery_date";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","surgery_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "surgery_date";

		$fdata["sourceSingle"] = "surgery_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surgery_date";

	
	
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


	$tdatasurgical_cases["surgery_date"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "surgery_date";
//	data_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "data_type";
	$fdata["GoodName"] = "data_type";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","data_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "data_type";

		$fdata["sourceSingle"] = "data_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_type";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasurgical_cases["data_type"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "data_type";
//	data_collector_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "data_collector_name";
	$fdata["GoodName"] = "data_collector_name";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","data_collector_name");
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


	$tdatasurgical_cases["data_collector_name"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "data_collector_name";
//	location_of_surgery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "location_of_surgery";
	$fdata["GoodName"] = "location_of_surgery";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","location_of_surgery");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "location_of_surgery";

		$fdata["sourceSingle"] = "location_of_surgery";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "location_of_surgery";

	
	
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


	$tdatasurgical_cases["location_of_surgery"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "location_of_surgery";
//	patient_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "patient_sex";
	$fdata["GoodName"] = "patient_sex";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","patient_sex");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "patient_sex";

		$fdata["sourceSingle"] = "patient_sex";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_sex";

	
	
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


	$tdatasurgical_cases["patient_sex"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "patient_sex";
//	patient_asa_classification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "patient_asa_classification";
	$fdata["GoodName"] = "patient_asa_classification";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","patient_asa_classification");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "patient_asa_classification";

		$fdata["sourceSingle"] = "patient_asa_classification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_asa_classification";

	
	
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


	$tdatasurgical_cases["patient_asa_classification"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "patient_asa_classification";
//	patient_dob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "patient_dob";
	$fdata["GoodName"] = "patient_dob";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","patient_dob");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "patient_dob";

		$fdata["sourceSingle"] = "patient_dob";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_dob";

	
	
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


	$tdatasurgical_cases["patient_dob"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "patient_dob";
//	patient_age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "patient_age";
	$fdata["GoodName"] = "patient_age";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","patient_age");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "patient_age";

		$fdata["sourceSingle"] = "patient_age";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "patient_age";

	
	
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


	$tdatasurgical_cases["patient_age"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "patient_age";
//	diabetes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "diabetes";
	$fdata["GoodName"] = "diabetes";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","diabetes");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "diabetes";

		$fdata["sourceSingle"] = "diabetes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diabetes";

	
	
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


	$tdatasurgical_cases["diabetes"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "diabetes";
//	hypertension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "hypertension";
	$fdata["GoodName"] = "hypertension";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","hypertension");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "hypertension";

		$fdata["sourceSingle"] = "hypertension";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hypertension";

	
	
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


	$tdatasurgical_cases["hypertension"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "hypertension";
//	obese
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "obese";
	$fdata["GoodName"] = "obese";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","obese");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "obese";

		$fdata["sourceSingle"] = "obese";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obese";

	
	
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


	$tdatasurgical_cases["obese"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "obese";
//	malnourished
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "malnourished";
	$fdata["GoodName"] = "malnourished";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","malnourished");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "malnourished";

		$fdata["sourceSingle"] = "malnourished";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "malnourished";

	
	
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


	$tdatasurgical_cases["malnourished"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "malnourished";
//	smoker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "smoker";
	$fdata["GoodName"] = "smoker";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","smoker");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "smoker";

		$fdata["sourceSingle"] = "smoker";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "smoker";

	
	
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


	$tdatasurgical_cases["smoker"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "smoker";
//	on_steroids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "on_steroids";
	$fdata["GoodName"] = "on_steroids";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","on_steroids");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "on_steroids";

		$fdata["sourceSingle"] = "on_steroids";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "on_steroids";

	
	
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


	$tdatasurgical_cases["on_steroids"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "on_steroids";
//	admitted_to_icu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "admitted_to_icu";
	$fdata["GoodName"] = "admitted_to_icu";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","admitted_to_icu");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "admitted_to_icu";

		$fdata["sourceSingle"] = "admitted_to_icu";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "admitted_to_icu";

	
	
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


	$tdatasurgical_cases["admitted_to_icu"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "admitted_to_icu";
//	hypothermic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "hypothermic";
	$fdata["GoodName"] = "hypothermic";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","hypothermic");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "hypothermic";

		$fdata["sourceSingle"] = "hypothermic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hypothermic";

	
	
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


	$tdatasurgical_cases["hypothermic"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "hypothermic";
//	preoperative_diagnosis_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "preoperative_diagnosis_id";
	$fdata["GoodName"] = "preoperative_diagnosis_id";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","preoperative_diagnosis_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "preoperative_diagnosis_id";

		$fdata["sourceSingle"] = "preoperative_diagnosis_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "preoperative_diagnosis_id";

	
	
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
	$edata["LookupTable"] = "public.diagnoses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "diagnosis_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "diagnosis_name";

	

	
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


	$tdatasurgical_cases["preoperative_diagnosis_id"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "preoperative_diagnosis_id";
//	hours_since_injury
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "hours_since_injury";
	$fdata["GoodName"] = "hours_since_injury";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","hours_since_injury");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "hours_since_injury";

		$fdata["sourceSingle"] = "hours_since_injury";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hours_since_injury";

	
	
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


	$tdatasurgical_cases["hours_since_injury"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "hours_since_injury";
//	sterilizable_drill_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sterilizable_drill_used";
	$fdata["GoodName"] = "sterilizable_drill_used";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sterilizable_drill_used");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sterilizable_drill_used";

		$fdata["sourceSingle"] = "sterilizable_drill_used";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sterilizable_drill_used";

	
	
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


	$tdatasurgical_cases["sterilizable_drill_used"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sterilizable_drill_used";
//	drill_sterile_cover_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "drill_sterile_cover_used";
	$fdata["GoodName"] = "drill_sterile_cover_used";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","drill_sterile_cover_used");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "drill_sterile_cover_used";

		$fdata["sourceSingle"] = "drill_sterile_cover_used";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "drill_sterile_cover_used";

	
	
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


	$tdatasurgical_cases["drill_sterile_cover_used"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "drill_sterile_cover_used";
//	holes_in_sterile_cover
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "holes_in_sterile_cover";
	$fdata["GoodName"] = "holes_in_sterile_cover";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","holes_in_sterile_cover");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "holes_in_sterile_cover";

		$fdata["sourceSingle"] = "holes_in_sterile_cover";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "holes_in_sterile_cover";

	
	
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


	$tdatasurgical_cases["holes_in_sterile_cover"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "holes_in_sterile_cover";
//	sign_in_read_aloud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sign_in_read_aloud";
	$fdata["GoodName"] = "sign_in_read_aloud";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sign_in_read_aloud");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sign_in_read_aloud";

		$fdata["sourceSingle"] = "sign_in_read_aloud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_in_read_aloud";

	
	
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


	$tdatasurgical_cases["sign_in_read_aloud"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sign_in_read_aloud";
//	sign_in_completed_before_anesthesia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "sign_in_completed_before_anesthesia";
	$fdata["GoodName"] = "sign_in_completed_before_anesthesia";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sign_in_completed_before_anesthesia");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sign_in_completed_before_anesthesia";

		$fdata["sourceSingle"] = "sign_in_completed_before_anesthesia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_in_completed_before_anesthesia";

	
	
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


	$tdatasurgical_cases["sign_in_completed_before_anesthesia"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sign_in_completed_before_anesthesia";
//	sterility_indicator_in_tray
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "sterility_indicator_in_tray";
	$fdata["GoodName"] = "sterility_indicator_in_tray";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sterility_indicator_in_tray");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sterility_indicator_in_tray";

		$fdata["sourceSingle"] = "sterility_indicator_in_tray";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sterility_indicator_in_tray";

	
	
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


	$tdatasurgical_cases["sterility_indicator_in_tray"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sterility_indicator_in_tray";
//	sterility_indicator_color_changed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sterility_indicator_color_changed";
	$fdata["GoodName"] = "sterility_indicator_color_changed";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sterility_indicator_color_changed");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sterility_indicator_color_changed";

		$fdata["sourceSingle"] = "sterility_indicator_color_changed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sterility_indicator_color_changed";

	
	
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


	$tdatasurgical_cases["sterility_indicator_color_changed"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sterility_indicator_color_changed";
//	tray_wet_prior_to_operation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "tray_wet_prior_to_operation";
	$fdata["GoodName"] = "tray_wet_prior_to_operation";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","tray_wet_prior_to_operation");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "tray_wet_prior_to_operation";

		$fdata["sourceSingle"] = "tray_wet_prior_to_operation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tray_wet_prior_to_operation";

	
	
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


	$tdatasurgical_cases["tray_wet_prior_to_operation"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "tray_wet_prior_to_operation";
//	tray_replaced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "tray_replaced";
	$fdata["GoodName"] = "tray_replaced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","tray_replaced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "tray_replaced";

		$fdata["sourceSingle"] = "tray_replaced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tray_replaced";

	
	
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


	$tdatasurgical_cases["tray_replaced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "tray_replaced";
//	gauze_count_performed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "gauze_count_performed";
	$fdata["GoodName"] = "gauze_count_performed";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gauze_count_performed");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "gauze_count_performed";

		$fdata["sourceSingle"] = "gauze_count_performed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gauze_count_performed";

	
	
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


	$tdatasurgical_cases["gauze_count_performed"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gauze_count_performed";
//	gauze_count_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "gauze_count_total";
	$fdata["GoodName"] = "gauze_count_total";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gauze_count_total");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "gauze_count_total";

		$fdata["sourceSingle"] = "gauze_count_total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gauze_count_total";

	
	
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


	$tdatasurgical_cases["gauze_count_total"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gauze_count_total";
//	surgeon_scrubbed_hands
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "surgeon_scrubbed_hands";
	$fdata["GoodName"] = "surgeon_scrubbed_hands";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","surgeon_scrubbed_hands");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "surgeon_scrubbed_hands";

		$fdata["sourceSingle"] = "surgeon_scrubbed_hands";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surgeon_scrubbed_hands";

	
	
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


	$tdatasurgical_cases["surgeon_scrubbed_hands"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "surgeon_scrubbed_hands";
//	handwashing_available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "handwashing_available";
	$fdata["GoodName"] = "handwashing_available";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","handwashing_available");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "handwashing_available";

		$fdata["sourceSingle"] = "handwashing_available";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "handwashing_available";

	
	
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


	$tdatasurgical_cases["handwashing_available"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "handwashing_available";
//	alcohol_solution_applied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "alcohol_solution_applied";
	$fdata["GoodName"] = "alcohol_solution_applied";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","alcohol_solution_applied");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "alcohol_solution_applied";

		$fdata["sourceSingle"] = "alcohol_solution_applied";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alcohol_solution_applied";

	
	
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


	$tdatasurgical_cases["alcohol_solution_applied"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "alcohol_solution_applied";
//	new_surgical_gloves_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "new_surgical_gloves_used";
	$fdata["GoodName"] = "new_surgical_gloves_used";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","new_surgical_gloves_used");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "new_surgical_gloves_used";

		$fdata["sourceSingle"] = "new_surgical_gloves_used";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "new_surgical_gloves_used";

	
	
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


	$tdatasurgical_cases["new_surgical_gloves_used"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "new_surgical_gloves_used";
//	gown_sterility_indicator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "gown_sterility_indicator";
	$fdata["GoodName"] = "gown_sterility_indicator";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gown_sterility_indicator");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "gown_sterility_indicator";

		$fdata["sourceSingle"] = "gown_sterility_indicator";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gown_sterility_indicator";

	
	
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


	$tdatasurgical_cases["gown_sterility_indicator"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gown_sterility_indicator";
//	gown_indicator_color_changed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "gown_indicator_color_changed";
	$fdata["GoodName"] = "gown_indicator_color_changed";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gown_indicator_color_changed");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "gown_indicator_color_changed";

		$fdata["sourceSingle"] = "gown_indicator_color_changed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gown_indicator_color_changed";

	
	
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


	$tdatasurgical_cases["gown_indicator_color_changed"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gown_indicator_color_changed";
//	gown_pack_replaced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "gown_pack_replaced";
	$fdata["GoodName"] = "gown_pack_replaced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gown_pack_replaced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "gown_pack_replaced";

		$fdata["sourceSingle"] = "gown_pack_replaced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gown_pack_replaced";

	
	
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


	$tdatasurgical_cases["gown_pack_replaced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gown_pack_replaced";
//	gowns_or_drapes_wet
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "gowns_or_drapes_wet";
	$fdata["GoodName"] = "gowns_or_drapes_wet";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gowns_or_drapes_wet");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "gowns_or_drapes_wet";

		$fdata["sourceSingle"] = "gowns_or_drapes_wet";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gowns_or_drapes_wet";

	
	
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


	$tdatasurgical_cases["gowns_or_drapes_wet"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gowns_or_drapes_wet";
//	wet_gowns_replaced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "wet_gowns_replaced";
	$fdata["GoodName"] = "wet_gowns_replaced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","wet_gowns_replaced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "wet_gowns_replaced";

		$fdata["sourceSingle"] = "wet_gowns_replaced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wet_gowns_replaced";

	
	
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


	$tdatasurgical_cases["wet_gowns_replaced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "wet_gowns_replaced";
//	holes_in_gowns
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "holes_in_gowns";
	$fdata["GoodName"] = "holes_in_gowns";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","holes_in_gowns");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "holes_in_gowns";

		$fdata["sourceSingle"] = "holes_in_gowns";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "holes_in_gowns";

	
	
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


	$tdatasurgical_cases["holes_in_gowns"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "holes_in_gowns";
//	torn_gowns_replaced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "torn_gowns_replaced";
	$fdata["GoodName"] = "torn_gowns_replaced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","torn_gowns_replaced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "torn_gowns_replaced";

		$fdata["sourceSingle"] = "torn_gowns_replaced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "torn_gowns_replaced";

	
	
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


	$tdatasurgical_cases["torn_gowns_replaced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "torn_gowns_replaced";
//	holes_in_drapes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "holes_in_drapes";
	$fdata["GoodName"] = "holes_in_drapes";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","holes_in_drapes");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "holes_in_drapes";

		$fdata["sourceSingle"] = "holes_in_drapes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "holes_in_drapes";

	
	
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


	$tdatasurgical_cases["holes_in_drapes"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "holes_in_drapes";
//	drapes_replaced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "drapes_replaced";
	$fdata["GoodName"] = "drapes_replaced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","drapes_replaced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "drapes_replaced";

		$fdata["sourceSingle"] = "drapes_replaced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "drapes_replaced";

	
	
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


	$tdatasurgical_cases["drapes_replaced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "drapes_replaced";
//	surgical_site_prep_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "surgical_site_prep_method";
	$fdata["GoodName"] = "surgical_site_prep_method";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","surgical_site_prep_method");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "surgical_site_prep_method";

		$fdata["sourceSingle"] = "surgical_site_prep_method";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surgical_site_prep_method";

	
	
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


	$tdatasurgical_cases["surgical_site_prep_method"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "surgical_site_prep_method";
//	vaginal_preparation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "vaginal_preparation";
	$fdata["GoodName"] = "vaginal_preparation";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","vaginal_preparation");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vaginal_preparation";

		$fdata["sourceSingle"] = "vaginal_preparation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vaginal_preparation";

	
	
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


	$tdatasurgical_cases["vaginal_preparation"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "vaginal_preparation";
//	antibiotics_given
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "antibiotics_given";
	$fdata["GoodName"] = "antibiotics_given";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","antibiotics_given");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "antibiotics_given";

		$fdata["sourceSingle"] = "antibiotics_given";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotics_given";

	
	
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


	$tdatasurgical_cases["antibiotics_given"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "antibiotics_given";
//	antibiotics_admin_location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "antibiotics_admin_location";
	$fdata["GoodName"] = "antibiotics_admin_location";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","antibiotics_admin_location");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "antibiotics_admin_location";

		$fdata["sourceSingle"] = "antibiotics_admin_location";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotics_admin_location";

	
	
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


	$tdatasurgical_cases["antibiotics_admin_location"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "antibiotics_admin_location";
//	antibiotics_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "antibiotics_time";
	$fdata["GoodName"] = "antibiotics_time";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","antibiotics_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "antibiotics_time";

		$fdata["sourceSingle"] = "antibiotics_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotics_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatasurgical_cases["antibiotics_time"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "antibiotics_time";
//	on_scheduled_antibiotics
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "on_scheduled_antibiotics";
	$fdata["GoodName"] = "on_scheduled_antibiotics";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","on_scheduled_antibiotics");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "on_scheduled_antibiotics";

		$fdata["sourceSingle"] = "on_scheduled_antibiotics";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "on_scheduled_antibiotics";

	
	
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


	$tdatasurgical_cases["on_scheduled_antibiotics"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "on_scheduled_antibiotics";
//	antibiotic_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "antibiotic_type";
	$fdata["GoodName"] = "antibiotic_type";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","antibiotic_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "antibiotic_type";

		$fdata["sourceSingle"] = "antibiotic_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "antibiotic_type";

	
	
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


	$tdatasurgical_cases["antibiotic_type"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "antibiotic_type";
//	timeout_read_aloud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "timeout_read_aloud";
	$fdata["GoodName"] = "timeout_read_aloud";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","timeout_read_aloud");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "timeout_read_aloud";

		$fdata["sourceSingle"] = "timeout_read_aloud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "timeout_read_aloud";

	
	
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


	$tdatasurgical_cases["timeout_read_aloud"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "timeout_read_aloud";
//	operation_type_announced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "operation_type_announced";
	$fdata["GoodName"] = "operation_type_announced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","operation_type_announced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "operation_type_announced";

		$fdata["sourceSingle"] = "operation_type_announced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "operation_type_announced";

	
	
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


	$tdatasurgical_cases["operation_type_announced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "operation_type_announced";
//	blood_loss_announced
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "blood_loss_announced";
	$fdata["GoodName"] = "blood_loss_announced";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","blood_loss_announced");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "blood_loss_announced";

		$fdata["sourceSingle"] = "blood_loss_announced";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "blood_loss_announced";

	
	
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


	$tdatasurgical_cases["blood_loss_announced"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "blood_loss_announced";
//	estimated_blood_loss
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "estimated_blood_loss";
	$fdata["GoodName"] = "estimated_blood_loss";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","estimated_blood_loss");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estimated_blood_loss";

		$fdata["sourceSingle"] = "estimated_blood_loss";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estimated_blood_loss";

	
	
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


	$tdatasurgical_cases["estimated_blood_loss"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "estimated_blood_loss";
//	time_of_incision
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "time_of_incision";
	$fdata["GoodName"] = "time_of_incision";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","time_of_incision");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "time_of_incision";

		$fdata["sourceSingle"] = "time_of_incision";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_of_incision";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatasurgical_cases["time_of_incision"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "time_of_incision";
//	gauze_count_end_performed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "gauze_count_end_performed";
	$fdata["GoodName"] = "gauze_count_end_performed";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gauze_count_end_performed");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "gauze_count_end_performed";

		$fdata["sourceSingle"] = "gauze_count_end_performed";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gauze_count_end_performed";

	
	
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


	$tdatasurgical_cases["gauze_count_end_performed"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gauze_count_end_performed";
//	gauze_count_end_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "gauze_count_end_total";
	$fdata["GoodName"] = "gauze_count_end_total";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","gauze_count_end_total");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "gauze_count_end_total";

		$fdata["sourceSingle"] = "gauze_count_end_total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gauze_count_end_total";

	
	
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


	$tdatasurgical_cases["gauze_count_end_total"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "gauze_count_end_total";
//	time_dressing_applied
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "time_dressing_applied";
	$fdata["GoodName"] = "time_dressing_applied";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","time_dressing_applied");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "time_dressing_applied";

		$fdata["sourceSingle"] = "time_dressing_applied";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "time_dressing_applied";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatasurgical_cases["time_dressing_applied"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "time_dressing_applied";
//	procedure_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "procedure_id";
	$fdata["GoodName"] = "procedure_id";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","procedure_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "procedure_id";

		$fdata["sourceSingle"] = "procedure_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedure_id";

	
	
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
	$edata["LookupTable"] = "public.procedures";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "procedure_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "procedure_name";

	

	
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


	$tdatasurgical_cases["procedure_id"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "procedure_id";
//	hardware_or_bioprosthetic_used
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "hardware_or_bioprosthetic_used";
	$fdata["GoodName"] = "hardware_or_bioprosthetic_used";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","hardware_or_bioprosthetic_used");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "hardware_or_bioprosthetic_used";

		$fdata["sourceSingle"] = "hardware_or_bioprosthetic_used";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hardware_or_bioprosthetic_used";

	
	
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


	$tdatasurgical_cases["hardware_or_bioprosthetic_used"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "hardware_or_bioprosthetic_used";
//	cesarean_indication
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "cesarean_indication";
	$fdata["GoodName"] = "cesarean_indication";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","cesarean_indication");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cesarean_indication";

		$fdata["sourceSingle"] = "cesarean_indication";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cesarean_indication";

	
	
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


	$tdatasurgical_cases["cesarean_indication"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "cesarean_indication";
//	wound_closed_primarily
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "wound_closed_primarily";
	$fdata["GoodName"] = "wound_closed_primarily";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","wound_closed_primarily");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "wound_closed_primarily";

		$fdata["sourceSingle"] = "wound_closed_primarily";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_closed_primarily";

	
	
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


	$tdatasurgical_cases["wound_closed_primarily"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "wound_closed_primarily";
//	wound_classification
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "wound_classification";
	$fdata["GoodName"] = "wound_classification";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","wound_classification");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "wound_classification";

		$fdata["sourceSingle"] = "wound_classification";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wound_classification";

	
	
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


	$tdatasurgical_cases["wound_classification"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "wound_classification";
//	case_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "case_type";
	$fdata["GoodName"] = "case_type";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","case_type");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "case_type";

		$fdata["sourceSingle"] = "case_type";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "case_type";

	
	
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


	$tdatasurgical_cases["case_type"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "case_type";
//	sign_out_read_aloud
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "sign_out_read_aloud";
	$fdata["GoodName"] = "sign_out_read_aloud";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sign_out_read_aloud");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sign_out_read_aloud";

		$fdata["sourceSingle"] = "sign_out_read_aloud";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_out_read_aloud";

	
	
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


	$tdatasurgical_cases["sign_out_read_aloud"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sign_out_read_aloud";
//	sign_out_in_theatre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "sign_out_in_theatre";
	$fdata["GoodName"] = "sign_out_in_theatre";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","sign_out_in_theatre");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "sign_out_in_theatre";

		$fdata["sourceSingle"] = "sign_out_in_theatre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_out_in_theatre";

	
	
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


	$tdatasurgical_cases["sign_out_in_theatre"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "sign_out_in_theatre";
//	unplanned_intubation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "unplanned_intubation";
	$fdata["GoodName"] = "unplanned_intubation";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","unplanned_intubation");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "unplanned_intubation";

		$fdata["sourceSingle"] = "unplanned_intubation";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unplanned_intubation";

	
	
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


	$tdatasurgical_cases["unplanned_intubation"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "unplanned_intubation";
//	urgent_tracheostomy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "urgent_tracheostomy";
	$fdata["GoodName"] = "urgent_tracheostomy";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","urgent_tracheostomy");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "urgent_tracheostomy";

		$fdata["sourceSingle"] = "urgent_tracheostomy";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "urgent_tracheostomy";

	
	
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


	$tdatasurgical_cases["urgent_tracheostomy"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "urgent_tracheostomy";
//	urgent_central_access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "urgent_central_access";
	$fdata["GoodName"] = "urgent_central_access";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","urgent_central_access");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "urgent_central_access";

		$fdata["sourceSingle"] = "urgent_central_access";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "urgent_central_access";

	
	
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


	$tdatasurgical_cases["urgent_central_access"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "urgent_central_access";
//	other_crisis_occurred
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "other_crisis_occurred";
	$fdata["GoodName"] = "other_crisis_occurred";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","other_crisis_occurred");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "other_crisis_occurred";

		$fdata["sourceSingle"] = "other_crisis_occurred";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "other_crisis_occurred";

	
	
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


	$tdatasurgical_cases["other_crisis_occurred"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "other_crisis_occurred";
//	crisis_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "crisis_description";
	$fdata["GoodName"] = "crisis_description";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","crisis_description");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "crisis_description";

		$fdata["sourceSingle"] = "crisis_description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "crisis_description";

	
	
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


	$tdatasurgical_cases["crisis_description"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "crisis_description";
//	death_in_or
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "death_in_or";
	$fdata["GoodName"] = "death_in_or";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","death_in_or");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "death_in_or";

		$fdata["sourceSingle"] = "death_in_or";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "death_in_or";

	
	
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


	$tdatasurgical_cases["death_in_or"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "death_in_or";
//	fetal_death
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "fetal_death";
	$fdata["GoodName"] = "fetal_death";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","fetal_death");
	$fdata["FieldType"] = 11;


	
	
			

		$fdata["strField"] = "fetal_death";

		$fdata["sourceSingle"] = "fetal_death";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fetal_death";

	
	
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


	$tdatasurgical_cases["fetal_death"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "fetal_death";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","created_at");
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


	$tdatasurgical_cases["created_at"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "created_at";
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "public.surgical_cases";
	$fdata["Label"] = GetFieldLabel("public_surgical_cases","updated_at");
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


	$tdatasurgical_cases["updated_at"] = $fdata;
		$tdatasurgical_cases[".searchableFields"][] = "updated_at";


$tables_data["public.surgical_cases"]=&$tdatasurgical_cases;
$field_labels["public_surgical_cases"] = &$fieldLabelssurgical_cases;
$fieldToolTips["public_surgical_cases"] = &$fieldToolTipssurgical_cases;
$placeHolders["public_surgical_cases"] = &$placeHolderssurgical_cases;
$page_titles["public_surgical_cases"] = &$pageTitlessurgical_cases;


changeTextControlsToDate( "public.surgical_cases" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.surgical_cases"] = array();
//	public.case_antibiotics
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.case_antibiotics";
		$detailsParam["dOriginalTable"] = "public.case_antibiotics";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "case_antibiotics";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_case_antibiotics");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.surgical_cases"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.surgical_cases"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.surgical_cases"][$dIndex]["masterKeys"][]="case_id";

				$detailsTablesData["public.surgical_cases"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.surgical_cases"][$dIndex]["detailKeys"][]="case_id";
//	public.follow_ups
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.follow_ups";
		$detailsParam["dOriginalTable"] = "public.follow_ups";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "follow_ups";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_follow_ups");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.surgical_cases"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.surgical_cases"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.surgical_cases"][$dIndex]["masterKeys"][]="case_id";

				$detailsTablesData["public.surgical_cases"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.surgical_cases"][$dIndex]["detailKeys"][]="case_id";
//	public.ward_rounds
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ward_rounds";
		$detailsParam["dOriginalTable"] = "public.ward_rounds";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ward_rounds";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ward_rounds");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.surgical_cases"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.surgical_cases"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.surgical_cases"][$dIndex]["masterKeys"][]="case_id";

				$detailsTablesData["public.surgical_cases"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.surgical_cases"][$dIndex]["detailKeys"][]="case_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.surgical_cases"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.facilities";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.facilities";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "facilities";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.surgical_cases"][0] = $masterParams;
				$masterTablesData["public.surgical_cases"][0]["masterKeys"] = array();
	$masterTablesData["public.surgical_cases"][0]["masterKeys"][]="facility_id";
				$masterTablesData["public.surgical_cases"][0]["detailKeys"] = array();
	$masterTablesData["public.surgical_cases"][0]["detailKeys"][]="facility_id";
		
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
					$masterTablesData["public.surgical_cases"][1] = $masterParams;
				$masterTablesData["public.surgical_cases"][1]["masterKeys"] = array();
	$masterTablesData["public.surgical_cases"][1]["masterKeys"][]="country_id";
				$masterTablesData["public.surgical_cases"][1]["detailKeys"] = array();
	$masterTablesData["public.surgical_cases"][1]["detailKeys"][]="country_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.diagnoses";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.diagnoses";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "diagnoses";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.surgical_cases"][2] = $masterParams;
				$masterTablesData["public.surgical_cases"][2]["masterKeys"] = array();
	$masterTablesData["public.surgical_cases"][2]["masterKeys"][]="diagnosis_id";
				$masterTablesData["public.surgical_cases"][2]["detailKeys"] = array();
	$masterTablesData["public.surgical_cases"][2]["detailKeys"][]="preoperative_diagnosis_id";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.procedures";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.procedures";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "procedures";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.surgical_cases"][3] = $masterParams;
				$masterTablesData["public.surgical_cases"][3]["masterKeys"] = array();
	$masterTablesData["public.surgical_cases"][3]["masterKeys"][]="procedure_id";
				$masterTablesData["public.surgical_cases"][3]["detailKeys"] = array();
	$masterTablesData["public.surgical_cases"][3]["detailKeys"][]="procedure_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_surgical_cases()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "case_id,  	facility_id,  	country_id,  	surgery_date,  	data_type,  	data_collector_name,  	location_of_surgery,  	patient_sex,  	patient_asa_classification,  	patient_dob,  	patient_age,  	diabetes,  	hypertension,  	obese,  	malnourished,  	smoker,  	on_steroids,  	admitted_to_icu,  	hypothermic,  	preoperative_diagnosis_id,  	hours_since_injury,  	sterilizable_drill_used,  	drill_sterile_cover_used,  	holes_in_sterile_cover,  	sign_in_read_aloud,  	sign_in_completed_before_anesthesia,  	sterility_indicator_in_tray,  	sterility_indicator_color_changed,  	tray_wet_prior_to_operation,  	tray_replaced,  	gauze_count_performed,  	gauze_count_total,  	surgeon_scrubbed_hands,  	handwashing_available,  	alcohol_solution_applied,  	new_surgical_gloves_used,  	gown_sterility_indicator,  	gown_indicator_color_changed,  	gown_pack_replaced,  	gowns_or_drapes_wet,  	wet_gowns_replaced,  	holes_in_gowns,  	torn_gowns_replaced,  	holes_in_drapes,  	drapes_replaced,  	surgical_site_prep_method,  	vaginal_preparation,  	antibiotics_given,  	antibiotics_admin_location,  	antibiotics_time,  	on_scheduled_antibiotics,  	antibiotic_type,  	timeout_read_aloud,  	operation_type_announced,  	blood_loss_announced,  	estimated_blood_loss,  	time_of_incision,  	gauze_count_end_performed,  	gauze_count_end_total,  	time_dressing_applied,  	procedure_id,  	hardware_or_bioprosthetic_used,  	cesarean_indication,  	wound_closed_primarily,  	wound_classification,  	case_type,  	sign_out_read_aloud,  	sign_out_in_theatre,  	unplanned_intubation,  	urgent_tracheostomy,  	urgent_central_access,  	other_crisis_occurred,  	crisis_description,  	death_in_or,  	fetal_death,  	created_at,  	updated_at";
$proto0["m_strFrom"] = "FROM \"public\".surgical_cases";
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
	"m_strName" => "case_id",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto6["m_sql"] = "case_id";
$proto6["m_srcTableName"] = "public.surgical_cases";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "facility_id",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto8["m_sql"] = "facility_id";
$proto8["m_srcTableName"] = "public.surgical_cases";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto10["m_sql"] = "country_id";
$proto10["m_srcTableName"] = "public.surgical_cases";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "surgery_date",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto12["m_sql"] = "surgery_date";
$proto12["m_srcTableName"] = "public.surgical_cases";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "data_type",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto14["m_sql"] = "data_type";
$proto14["m_srcTableName"] = "public.surgical_cases";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "data_collector_name",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto16["m_sql"] = "data_collector_name";
$proto16["m_srcTableName"] = "public.surgical_cases";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "location_of_surgery",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto18["m_sql"] = "location_of_surgery";
$proto18["m_srcTableName"] = "public.surgical_cases";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_sex",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto20["m_sql"] = "patient_sex";
$proto20["m_srcTableName"] = "public.surgical_cases";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_asa_classification",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto22["m_sql"] = "patient_asa_classification";
$proto22["m_srcTableName"] = "public.surgical_cases";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_dob",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto24["m_sql"] = "patient_dob";
$proto24["m_srcTableName"] = "public.surgical_cases";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "patient_age",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto26["m_sql"] = "patient_age";
$proto26["m_srcTableName"] = "public.surgical_cases";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "diabetes",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto28["m_sql"] = "diabetes";
$proto28["m_srcTableName"] = "public.surgical_cases";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "hypertension",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto30["m_sql"] = "hypertension";
$proto30["m_srcTableName"] = "public.surgical_cases";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "obese",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto32["m_sql"] = "obese";
$proto32["m_srcTableName"] = "public.surgical_cases";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "malnourished",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto34["m_sql"] = "malnourished";
$proto34["m_srcTableName"] = "public.surgical_cases";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "smoker",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto36["m_sql"] = "smoker";
$proto36["m_srcTableName"] = "public.surgical_cases";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "on_steroids",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto38["m_sql"] = "on_steroids";
$proto38["m_srcTableName"] = "public.surgical_cases";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "admitted_to_icu",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto40["m_sql"] = "admitted_to_icu";
$proto40["m_srcTableName"] = "public.surgical_cases";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "hypothermic",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto42["m_sql"] = "hypothermic";
$proto42["m_srcTableName"] = "public.surgical_cases";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "preoperative_diagnosis_id",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto44["m_sql"] = "preoperative_diagnosis_id";
$proto44["m_srcTableName"] = "public.surgical_cases";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "hours_since_injury",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto46["m_sql"] = "hours_since_injury";
$proto46["m_srcTableName"] = "public.surgical_cases";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "sterilizable_drill_used",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto48["m_sql"] = "sterilizable_drill_used";
$proto48["m_srcTableName"] = "public.surgical_cases";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "drill_sterile_cover_used",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto50["m_sql"] = "drill_sterile_cover_used";
$proto50["m_srcTableName"] = "public.surgical_cases";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "holes_in_sterile_cover",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto52["m_sql"] = "holes_in_sterile_cover";
$proto52["m_srcTableName"] = "public.surgical_cases";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_in_read_aloud",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto54["m_sql"] = "sign_in_read_aloud";
$proto54["m_srcTableName"] = "public.surgical_cases";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_in_completed_before_anesthesia",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto56["m_sql"] = "sign_in_completed_before_anesthesia";
$proto56["m_srcTableName"] = "public.surgical_cases";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "sterility_indicator_in_tray",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto58["m_sql"] = "sterility_indicator_in_tray";
$proto58["m_srcTableName"] = "public.surgical_cases";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sterility_indicator_color_changed",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto60["m_sql"] = "sterility_indicator_color_changed";
$proto60["m_srcTableName"] = "public.surgical_cases";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "tray_wet_prior_to_operation",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto62["m_sql"] = "tray_wet_prior_to_operation";
$proto62["m_srcTableName"] = "public.surgical_cases";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "tray_replaced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto64["m_sql"] = "tray_replaced";
$proto64["m_srcTableName"] = "public.surgical_cases";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "gauze_count_performed",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto66["m_sql"] = "gauze_count_performed";
$proto66["m_srcTableName"] = "public.surgical_cases";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "gauze_count_total",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto68["m_sql"] = "gauze_count_total";
$proto68["m_srcTableName"] = "public.surgical_cases";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "surgeon_scrubbed_hands",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto70["m_sql"] = "surgeon_scrubbed_hands";
$proto70["m_srcTableName"] = "public.surgical_cases";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "handwashing_available",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto72["m_sql"] = "handwashing_available";
$proto72["m_srcTableName"] = "public.surgical_cases";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "alcohol_solution_applied",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto74["m_sql"] = "alcohol_solution_applied";
$proto74["m_srcTableName"] = "public.surgical_cases";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "new_surgical_gloves_used",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto76["m_sql"] = "new_surgical_gloves_used";
$proto76["m_srcTableName"] = "public.surgical_cases";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "gown_sterility_indicator",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto78["m_sql"] = "gown_sterility_indicator";
$proto78["m_srcTableName"] = "public.surgical_cases";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "gown_indicator_color_changed",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto80["m_sql"] = "gown_indicator_color_changed";
$proto80["m_srcTableName"] = "public.surgical_cases";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "gown_pack_replaced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto82["m_sql"] = "gown_pack_replaced";
$proto82["m_srcTableName"] = "public.surgical_cases";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "gowns_or_drapes_wet",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto84["m_sql"] = "gowns_or_drapes_wet";
$proto84["m_srcTableName"] = "public.surgical_cases";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "wet_gowns_replaced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto86["m_sql"] = "wet_gowns_replaced";
$proto86["m_srcTableName"] = "public.surgical_cases";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "holes_in_gowns",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto88["m_sql"] = "holes_in_gowns";
$proto88["m_srcTableName"] = "public.surgical_cases";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "torn_gowns_replaced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto90["m_sql"] = "torn_gowns_replaced";
$proto90["m_srcTableName"] = "public.surgical_cases";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "holes_in_drapes",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto92["m_sql"] = "holes_in_drapes";
$proto92["m_srcTableName"] = "public.surgical_cases";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "drapes_replaced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto94["m_sql"] = "drapes_replaced";
$proto94["m_srcTableName"] = "public.surgical_cases";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "surgical_site_prep_method",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto96["m_sql"] = "surgical_site_prep_method";
$proto96["m_srcTableName"] = "public.surgical_cases";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "vaginal_preparation",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto98["m_sql"] = "vaginal_preparation";
$proto98["m_srcTableName"] = "public.surgical_cases";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotics_given",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto100["m_sql"] = "antibiotics_given";
$proto100["m_srcTableName"] = "public.surgical_cases";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotics_admin_location",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto102["m_sql"] = "antibiotics_admin_location";
$proto102["m_srcTableName"] = "public.surgical_cases";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotics_time",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto104["m_sql"] = "antibiotics_time";
$proto104["m_srcTableName"] = "public.surgical_cases";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "on_scheduled_antibiotics",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto106["m_sql"] = "on_scheduled_antibiotics";
$proto106["m_srcTableName"] = "public.surgical_cases";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "antibiotic_type",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto108["m_sql"] = "antibiotic_type";
$proto108["m_srcTableName"] = "public.surgical_cases";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "timeout_read_aloud",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto110["m_sql"] = "timeout_read_aloud";
$proto110["m_srcTableName"] = "public.surgical_cases";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "operation_type_announced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto112["m_sql"] = "operation_type_announced";
$proto112["m_srcTableName"] = "public.surgical_cases";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "blood_loss_announced",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto114["m_sql"] = "blood_loss_announced";
$proto114["m_srcTableName"] = "public.surgical_cases";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "estimated_blood_loss",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto116["m_sql"] = "estimated_blood_loss";
$proto116["m_srcTableName"] = "public.surgical_cases";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "time_of_incision",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto118["m_sql"] = "time_of_incision";
$proto118["m_srcTableName"] = "public.surgical_cases";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "gauze_count_end_performed",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto120["m_sql"] = "gauze_count_end_performed";
$proto120["m_srcTableName"] = "public.surgical_cases";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "gauze_count_end_total",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto122["m_sql"] = "gauze_count_end_total";
$proto122["m_srcTableName"] = "public.surgical_cases";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "time_dressing_applied",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto124["m_sql"] = "time_dressing_applied";
$proto124["m_srcTableName"] = "public.surgical_cases";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "procedure_id",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto126["m_sql"] = "procedure_id";
$proto126["m_srcTableName"] = "public.surgical_cases";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "hardware_or_bioprosthetic_used",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto128["m_sql"] = "hardware_or_bioprosthetic_used";
$proto128["m_srcTableName"] = "public.surgical_cases";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "cesarean_indication",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto130["m_sql"] = "cesarean_indication";
$proto130["m_srcTableName"] = "public.surgical_cases";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_closed_primarily",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto132["m_sql"] = "wound_closed_primarily";
$proto132["m_srcTableName"] = "public.surgical_cases";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "wound_classification",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto134["m_sql"] = "wound_classification";
$proto134["m_srcTableName"] = "public.surgical_cases";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "case_type",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto136["m_sql"] = "case_type";
$proto136["m_srcTableName"] = "public.surgical_cases";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_out_read_aloud",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto138["m_sql"] = "sign_out_read_aloud";
$proto138["m_srcTableName"] = "public.surgical_cases";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_out_in_theatre",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto140["m_sql"] = "sign_out_in_theatre";
$proto140["m_srcTableName"] = "public.surgical_cases";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "unplanned_intubation",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto142["m_sql"] = "unplanned_intubation";
$proto142["m_srcTableName"] = "public.surgical_cases";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_tracheostomy",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto144["m_sql"] = "urgent_tracheostomy";
$proto144["m_srcTableName"] = "public.surgical_cases";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "urgent_central_access",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto146["m_sql"] = "urgent_central_access";
$proto146["m_srcTableName"] = "public.surgical_cases";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "other_crisis_occurred",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto148["m_sql"] = "other_crisis_occurred";
$proto148["m_srcTableName"] = "public.surgical_cases";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "crisis_description",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto150["m_sql"] = "crisis_description";
$proto150["m_srcTableName"] = "public.surgical_cases";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "death_in_or",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto152["m_sql"] = "death_in_or";
$proto152["m_srcTableName"] = "public.surgical_cases";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "fetal_death",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto154["m_sql"] = "fetal_death";
$proto154["m_srcTableName"] = "public.surgical_cases";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto156["m_sql"] = "created_at";
$proto156["m_srcTableName"] = "public.surgical_cases";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "public.surgical_cases",
	"m_srcTableName" => "public.surgical_cases"
));

$proto158["m_sql"] = "updated_at";
$proto158["m_srcTableName"] = "public.surgical_cases";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto160=array();
$proto160["m_link"] = "SQLL_MAIN";
			$proto161=array();
$proto161["m_strName"] = "public.surgical_cases";
$proto161["m_srcTableName"] = "public.surgical_cases";
$proto161["m_columns"] = array();
$proto161["m_columns"][] = "case_id";
$proto161["m_columns"][] = "facility_id";
$proto161["m_columns"][] = "country_id";
$proto161["m_columns"][] = "surgery_date";
$proto161["m_columns"][] = "data_type";
$proto161["m_columns"][] = "data_collector_name";
$proto161["m_columns"][] = "location_of_surgery";
$proto161["m_columns"][] = "patient_sex";
$proto161["m_columns"][] = "patient_asa_classification";
$proto161["m_columns"][] = "patient_dob";
$proto161["m_columns"][] = "patient_age";
$proto161["m_columns"][] = "diabetes";
$proto161["m_columns"][] = "hypertension";
$proto161["m_columns"][] = "obese";
$proto161["m_columns"][] = "malnourished";
$proto161["m_columns"][] = "smoker";
$proto161["m_columns"][] = "on_steroids";
$proto161["m_columns"][] = "admitted_to_icu";
$proto161["m_columns"][] = "hypothermic";
$proto161["m_columns"][] = "preoperative_diagnosis_id";
$proto161["m_columns"][] = "hours_since_injury";
$proto161["m_columns"][] = "sterilizable_drill_used";
$proto161["m_columns"][] = "drill_sterile_cover_used";
$proto161["m_columns"][] = "holes_in_sterile_cover";
$proto161["m_columns"][] = "sign_in_read_aloud";
$proto161["m_columns"][] = "sign_in_completed_before_anesthesia";
$proto161["m_columns"][] = "sterility_indicator_in_tray";
$proto161["m_columns"][] = "sterility_indicator_color_changed";
$proto161["m_columns"][] = "tray_wet_prior_to_operation";
$proto161["m_columns"][] = "tray_replaced";
$proto161["m_columns"][] = "gauze_count_performed";
$proto161["m_columns"][] = "gauze_count_total";
$proto161["m_columns"][] = "surgeon_scrubbed_hands";
$proto161["m_columns"][] = "handwashing_available";
$proto161["m_columns"][] = "alcohol_solution_applied";
$proto161["m_columns"][] = "new_surgical_gloves_used";
$proto161["m_columns"][] = "gown_sterility_indicator";
$proto161["m_columns"][] = "gown_indicator_color_changed";
$proto161["m_columns"][] = "gown_pack_replaced";
$proto161["m_columns"][] = "gowns_or_drapes_wet";
$proto161["m_columns"][] = "wet_gowns_replaced";
$proto161["m_columns"][] = "holes_in_gowns";
$proto161["m_columns"][] = "torn_gowns_replaced";
$proto161["m_columns"][] = "holes_in_drapes";
$proto161["m_columns"][] = "drapes_replaced";
$proto161["m_columns"][] = "surgical_site_prep_method";
$proto161["m_columns"][] = "vaginal_preparation";
$proto161["m_columns"][] = "antibiotics_given";
$proto161["m_columns"][] = "antibiotics_admin_location";
$proto161["m_columns"][] = "antibiotics_time";
$proto161["m_columns"][] = "on_scheduled_antibiotics";
$proto161["m_columns"][] = "antibiotic_type";
$proto161["m_columns"][] = "timeout_read_aloud";
$proto161["m_columns"][] = "operation_type_announced";
$proto161["m_columns"][] = "blood_loss_announced";
$proto161["m_columns"][] = "estimated_blood_loss";
$proto161["m_columns"][] = "time_of_incision";
$proto161["m_columns"][] = "gauze_count_end_performed";
$proto161["m_columns"][] = "gauze_count_end_total";
$proto161["m_columns"][] = "time_dressing_applied";
$proto161["m_columns"][] = "procedure_id";
$proto161["m_columns"][] = "hardware_or_bioprosthetic_used";
$proto161["m_columns"][] = "cesarean_indication";
$proto161["m_columns"][] = "wound_closed_primarily";
$proto161["m_columns"][] = "wound_classification";
$proto161["m_columns"][] = "case_type";
$proto161["m_columns"][] = "sign_out_read_aloud";
$proto161["m_columns"][] = "sign_out_in_theatre";
$proto161["m_columns"][] = "unplanned_intubation";
$proto161["m_columns"][] = "urgent_tracheostomy";
$proto161["m_columns"][] = "urgent_central_access";
$proto161["m_columns"][] = "other_crisis_occurred";
$proto161["m_columns"][] = "crisis_description";
$proto161["m_columns"][] = "death_in_or";
$proto161["m_columns"][] = "fetal_death";
$proto161["m_columns"][] = "created_at";
$proto161["m_columns"][] = "updated_at";
$obj = new SQLTable($proto161);

$proto160["m_table"] = $obj;
$proto160["m_sql"] = "\"public\".surgical_cases";
$proto160["m_alias"] = "";
$proto160["m_srcTableName"] = "public.surgical_cases";
$proto162=array();
$proto162["m_sql"] = "";
$proto162["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto162["m_column"]=$obj;
$proto162["m_contained"] = array();
$proto162["m_strCase"] = "";
$proto162["m_havingmode"] = false;
$proto162["m_inBrackets"] = false;
$proto162["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto162);

$proto160["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto160);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.surgical_cases";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surgical_cases = createSqlQuery_surgical_cases();


	
				;

																																																																													

$tdatasurgical_cases[".sqlquery"] = $queryData_surgical_cases;



$tdatasurgical_cases[".hasEvents"] = false;

?>