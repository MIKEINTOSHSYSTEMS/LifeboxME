<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["public.surgical_cases"] ) ) {
			$lookupTableLinks["public.surgical_cases"] = array();
		}
		if( !isset( $lookupTableLinks["public.surgical_cases"]["case_antibiotics.case_id"] )) {
			$lookupTableLinks["public.surgical_cases"]["case_antibiotics.case_id"] = array();
		}
		$lookupTableLinks["public.surgical_cases"]["case_antibiotics.case_id"]["edit"] = array("table" => "public.case_antibiotics", "field" => "case_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.antibiotics"] ) ) {
			$lookupTableLinks["public.antibiotics"] = array();
		}
		if( !isset( $lookupTableLinks["public.antibiotics"]["case_antibiotics.antibiotic_id"] )) {
			$lookupTableLinks["public.antibiotics"]["case_antibiotics.antibiotic_id"] = array();
		}
		$lookupTableLinks["public.antibiotics"]["case_antibiotics.antibiotic_id"]["edit"] = array("table" => "public.case_antibiotics", "field" => "antibiotic_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["clean_cut_implementations.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["clean_cut_implementations.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["clean_cut_implementations.facility_id"]["edit"] = array("table" => "public.clean_cut_implementations", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["clean_cut_implementations.country_id"] )) {
			$lookupTableLinks["public.countries"]["clean_cut_implementations.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["clean_cut_implementations.country_id"]["edit"] = array("table" => "public.clean_cut_implementations", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["countries.region_id"] )) {
			$lookupTableLinks["public.regions"]["countries.region_id"] = array();
		}
		$lookupTableLinks["public.regions"]["countries.region_id"]["edit"] = array("table" => "public.countries", "field" => "region_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["device_distributions.region_id"] )) {
			$lookupTableLinks["public.regions"]["device_distributions.region_id"] = array();
		}
		$lookupTableLinks["public.regions"]["device_distributions.region_id"]["edit"] = array("table" => "public.device_distributions", "field" => "region_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["device_distributions.country_id"] )) {
			$lookupTableLinks["public.countries"]["device_distributions.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["device_distributions.country_id"]["edit"] = array("table" => "public.device_distributions", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["device_distributions.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["device_distributions.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["device_distributions.facility_id"]["edit"] = array("table" => "public.device_distributions", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["facilities.country_id"] )) {
			$lookupTableLinks["public.countries"]["facilities.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["facilities.country_id"]["edit"] = array("table" => "public.facilities", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.surgical_cases"] ) ) {
			$lookupTableLinks["public.surgical_cases"] = array();
		}
		if( !isset( $lookupTableLinks["public.surgical_cases"]["follow_ups.case_id"] )) {
			$lookupTableLinks["public.surgical_cases"]["follow_ups.case_id"] = array();
		}
		$lookupTableLinks["public.surgical_cases"]["follow_ups.case_id"]["edit"] = array("table" => "public.follow_ups", "field" => "case_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["follow_ups.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["follow_ups.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["follow_ups.facility_id"]["edit"] = array("table" => "public.follow_ups", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["lifebox_staff.region_id"] )) {
			$lookupTableLinks["public.regions"]["lifebox_staff.region_id"] = array();
		}
		$lookupTableLinks["public.regions"]["lifebox_staff.region_id"]["edit"] = array("table" => "public.lifebox_staff", "field" => "region_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["surgical_cases.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["surgical_cases.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["surgical_cases.facility_id"]["edit"] = array("table" => "public.surgical_cases", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["surgical_cases.country_id"] )) {
			$lookupTableLinks["public.countries"]["surgical_cases.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["surgical_cases.country_id"]["edit"] = array("table" => "public.surgical_cases", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.diagnoses"] ) ) {
			$lookupTableLinks["public.diagnoses"] = array();
		}
		if( !isset( $lookupTableLinks["public.diagnoses"]["surgical_cases.preoperative_diagnosis_id"] )) {
			$lookupTableLinks["public.diagnoses"]["surgical_cases.preoperative_diagnosis_id"] = array();
		}
		$lookupTableLinks["public.diagnoses"]["surgical_cases.preoperative_diagnosis_id"]["edit"] = array("table" => "public.surgical_cases", "field" => "preoperative_diagnosis_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.procedures"] ) ) {
			$lookupTableLinks["public.procedures"] = array();
		}
		if( !isset( $lookupTableLinks["public.procedures"]["surgical_cases.procedure_id"] )) {
			$lookupTableLinks["public.procedures"]["surgical_cases.procedure_id"] = array();
		}
		$lookupTableLinks["public.procedures"]["surgical_cases.procedure_id"]["edit"] = array("table" => "public.surgical_cases", "field" => "procedure_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["training_languages.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["training_languages.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["training_languages.training_id"]["edit"] = array("table" => "public.training_languages", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.languages"] ) ) {
			$lookupTableLinks["public.languages"] = array();
		}
		if( !isset( $lookupTableLinks["public.languages"]["training_languages.language_id"] )) {
			$lookupTableLinks["public.languages"]["training_languages.language_id"] = array();
		}
		$lookupTableLinks["public.languages"]["training_languages.language_id"]["edit"] = array("table" => "public.training_languages", "field" => "language_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["training_leads.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["training_leads.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["training_leads.training_id"]["edit"] = array("table" => "public.training_leads", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifebox_staff"] ) ) {
			$lookupTableLinks["public.lifebox_staff"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifebox_staff"]["training_leads.staff_id"] )) {
			$lookupTableLinks["public.lifebox_staff"]["training_leads.staff_id"] = array();
		}
		$lookupTableLinks["public.lifebox_staff"]["training_leads.staff_id"]["edit"] = array("table" => "public.training_leads", "field" => "staff_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["training_partners.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["training_partners.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["training_partners.training_id"]["edit"] = array("table" => "public.training_partners", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.partners"] ) ) {
			$lookupTableLinks["public.partners"] = array();
		}
		if( !isset( $lookupTableLinks["public.partners"]["training_partners.partner_id"] )) {
			$lookupTableLinks["public.partners"]["training_partners.partner_id"] = array();
		}
		$lookupTableLinks["public.partners"]["training_partners.partner_id"]["edit"] = array("table" => "public.training_partners", "field" => "partner_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_courses"] ) ) {
			$lookupTableLinks["public.training_courses"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_courses"]["training_sessions.course_id"] )) {
			$lookupTableLinks["public.training_courses"]["training_sessions.course_id"] = array();
		}
		$lookupTableLinks["public.training_courses"]["training_sessions.course_id"]["edit"] = array("table" => "public.training_sessions", "field" => "course_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["training_sessions.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["training_sessions.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["training_sessions.facility_id"]["edit"] = array("table" => "public.training_sessions", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["training_sessions.host_country_id"] )) {
			$lookupTableLinks["public.countries"]["training_sessions.host_country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["training_sessions.host_country_id"]["edit"] = array("table" => "public.training_sessions", "field" => "host_country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["training_trainers.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["training_trainers.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["training_trainers.training_id"]["edit"] = array("table" => "public.training_trainers", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.trainers"] ) ) {
			$lookupTableLinks["public.trainers"] = array();
		}
		if( !isset( $lookupTableLinks["public.trainers"]["training_trainers.trainer_id"] )) {
			$lookupTableLinks["public.trainers"]["training_trainers.trainer_id"] = array();
		}
		$lookupTableLinks["public.trainers"]["training_trainers.trainer_id"]["edit"] = array("table" => "public.training_trainers", "field" => "trainer_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.ward_rounds"] ) ) {
			$lookupTableLinks["public.ward_rounds"] = array();
		}
		if( !isset( $lookupTableLinks["public.ward_rounds"]["ward_antibiotics.ward_round_id"] )) {
			$lookupTableLinks["public.ward_rounds"]["ward_antibiotics.ward_round_id"] = array();
		}
		$lookupTableLinks["public.ward_rounds"]["ward_antibiotics.ward_round_id"]["edit"] = array("table" => "public.ward_antibiotics", "field" => "ward_round_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.antibiotics"] ) ) {
			$lookupTableLinks["public.antibiotics"] = array();
		}
		if( !isset( $lookupTableLinks["public.antibiotics"]["ward_antibiotics.antibiotic_id"] )) {
			$lookupTableLinks["public.antibiotics"]["ward_antibiotics.antibiotic_id"] = array();
		}
		$lookupTableLinks["public.antibiotics"]["ward_antibiotics.antibiotic_id"]["edit"] = array("table" => "public.ward_antibiotics", "field" => "antibiotic_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.surgical_cases"] ) ) {
			$lookupTableLinks["public.surgical_cases"] = array();
		}
		if( !isset( $lookupTableLinks["public.surgical_cases"]["ward_rounds.case_id"] )) {
			$lookupTableLinks["public.surgical_cases"]["ward_rounds.case_id"] = array();
		}
		$lookupTableLinks["public.surgical_cases"]["ward_rounds.case_id"]["edit"] = array("table" => "public.ward_rounds", "field" => "case_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["ward_rounds.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["ward_rounds.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["ward_rounds.facility_id"]["edit"] = array("table" => "public.ward_rounds", "field" => "facility_id", "page" => "edit");
}

?>