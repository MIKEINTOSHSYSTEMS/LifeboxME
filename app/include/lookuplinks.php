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
		if( !isset( $lookupTableLinks["public.months"] ) ) {
			$lookupTableLinks["public.months"] = array();
		}
		if( !isset( $lookupTableLinks["public.months"]["device_distributions.distribution_month"] )) {
			$lookupTableLinks["public.months"]["device_distributions.distribution_month"] = array();
		}
		$lookupTableLinks["public.months"]["device_distributions.distribution_month"]["edit"] = array("table" => "public.device_distributions", "field" => "distribution_month", "page" => "edit");
		if( !isset( $lookupTableLinks["public.devices"] ) ) {
			$lookupTableLinks["public.devices"] = array();
		}
		if( !isset( $lookupTableLinks["public.devices"]["device_distributions.device_type"] )) {
			$lookupTableLinks["public.devices"]["device_distributions.device_type"] = array();
		}
		$lookupTableLinks["public.devices"]["device_distributions.device_type"]["edit"] = array("table" => "public.device_distributions", "field" => "device_type", "page" => "edit");
		if( !isset( $lookupTableLinks["public.payment_methods"] ) ) {
			$lookupTableLinks["public.payment_methods"] = array();
		}
		if( !isset( $lookupTableLinks["public.payment_methods"]["device_distributions.payment_method"] )) {
			$lookupTableLinks["public.payment_methods"]["device_distributions.payment_method"] = array();
		}
		$lookupTableLinks["public.payment_methods"]["device_distributions.payment_method"]["edit"] = array("table" => "public.device_distributions", "field" => "payment_method", "page" => "edit");
		if( !isset( $lookupTableLinks["public.transaction_types"] ) ) {
			$lookupTableLinks["public.transaction_types"] = array();
		}
		if( !isset( $lookupTableLinks["public.transaction_types"]["device_distributions.transaction_type"] )) {
			$lookupTableLinks["public.transaction_types"]["device_distributions.transaction_type"] = array();
		}
		$lookupTableLinks["public.transaction_types"]["device_distributions.transaction_type"]["edit"] = array("table" => "public.device_distributions", "field" => "transaction_type", "page" => "edit");
		if( !isset( $lookupTableLinks["public.donors"] ) ) {
			$lookupTableLinks["public.donors"] = array();
		}
		if( !isset( $lookupTableLinks["public.donors"]["device_distributions.donor"] )) {
			$lookupTableLinks["public.donors"]["device_distributions.donor"] = array();
		}
		$lookupTableLinks["public.donors"]["device_distributions.donor"]["edit"] = array("table" => "public.device_distributions", "field" => "donor", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["facilities.country_id"] )) {
			$lookupTableLinks["public.countries"]["facilities.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["facilities.country_id"]["edit"] = array("table" => "public.facilities", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["facilities.region_id"] )) {
			$lookupTableLinks["public.regions"]["facilities.region_id"] = array();
		}
		$lookupTableLinks["public.regions"]["facilities.region_id"]["edit"] = array("table" => "public.facilities", "field" => "region_id", "page" => "edit");
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
		if( !isset( $lookupTableLinks["public.training_types"] ) ) {
			$lookupTableLinks["public.training_types"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_types"]["training_sessions.training_type_id"] )) {
			$lookupTableLinks["public.training_types"]["training_sessions.training_type_id"] = array();
		}
		$lookupTableLinks["public.training_types"]["training_sessions.training_type_id"]["edit"] = array("table" => "public.training_sessions", "field" => "training_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_approaches"] ) ) {
			$lookupTableLinks["public.training_approaches"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_approaches"]["training_sessions.approach_id"] )) {
			$lookupTableLinks["public.training_approaches"]["training_sessions.approach_id"] = array();
		}
		$lookupTableLinks["public.training_approaches"]["training_sessions.approach_id"]["edit"] = array("table" => "public.training_sessions", "field" => "approach_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.programs"] ) ) {
			$lookupTableLinks["public.programs"] = array();
		}
		if( !isset( $lookupTableLinks["public.programs"]["training_sessions.program_id"] )) {
			$lookupTableLinks["public.programs"]["training_sessions.program_id"] = array();
		}
		$lookupTableLinks["public.programs"]["training_sessions.program_id"]["edit"] = array("table" => "public.training_sessions", "field" => "program_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.quarters"] ) ) {
			$lookupTableLinks["public.quarters"] = array();
		}
		if( !isset( $lookupTableLinks["public.quarters"]["training_sessions.quarter"] )) {
			$lookupTableLinks["public.quarters"]["training_sessions.quarter"] = array();
		}
		$lookupTableLinks["public.quarters"]["training_sessions.quarter"]["edit"] = array("table" => "public.training_sessions", "field" => "quarter", "page" => "edit");
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
		if( !isset( $lookupTableLinks["public.venues"] ) ) {
			$lookupTableLinks["public.venues"] = array();
		}
		if( !isset( $lookupTableLinks["public.venues"]["training_sessions.venue_id"] )) {
			$lookupTableLinks["public.venues"]["training_sessions.venue_id"] = array();
		}
		$lookupTableLinks["public.venues"]["training_sessions.venue_id"]["edit"] = array("table" => "public.training_sessions", "field" => "venue_id", "page" => "edit");
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
		if( !isset( $lookupTableLinks["public.devices"] ) ) {
			$lookupTableLinks["public.devices"] = array();
		}
		if( !isset( $lookupTableLinks["public.devices"]["device_distribution_summary_view.device_type"] )) {
			$lookupTableLinks["public.devices"]["device_distribution_summary_view.device_type"] = array();
		}
		$lookupTableLinks["public.devices"]["device_distribution_summary_view.device_type"]["edit"] = array("table" => "public.device_distribution_summary_view", "field" => "device_type", "page" => "edit");
		if( !isset( $lookupTableLinks["public.months"] ) ) {
			$lookupTableLinks["public.months"] = array();
		}
		if( !isset( $lookupTableLinks["public.months"]["device_distribution_summary_view.distribution_month"] )) {
			$lookupTableLinks["public.months"]["device_distribution_summary_view.distribution_month"] = array();
		}
		$lookupTableLinks["public.months"]["device_distribution_summary_view.distribution_month"]["edit"] = array("table" => "public.device_distribution_summary_view", "field" => "distribution_month", "page" => "edit");
		if( !isset( $lookupTableLinks["public.sex"] ) ) {
			$lookupTableLinks["public.sex"] = array();
		}
		if( !isset( $lookupTableLinks["public.sex"]["training_participants.sex_id"] )) {
			$lookupTableLinks["public.sex"]["training_participants.sex_id"] = array();
		}
		$lookupTableLinks["public.sex"]["training_participants.sex_id"]["edit"] = array("table" => "public.training_participants", "field" => "sex_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.participant_role"] ) ) {
			$lookupTableLinks["public.participant_role"] = array();
		}
		if( !isset( $lookupTableLinks["public.participant_role"]["training_participants.role_id"] )) {
			$lookupTableLinks["public.participant_role"]["training_participants.role_id"] = array();
		}
		$lookupTableLinks["public.participant_role"]["training_participants.role_id"]["edit"] = array("table" => "public.training_participants", "field" => "role_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["training_participants.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["training_participants.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["training_participants.facility_id"]["edit"] = array("table" => "public.training_participants", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["training_participants.country_id"] )) {
			$lookupTableLinks["public.countries"]["training_participants.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["training_participants.country_id"]["edit"] = array("table" => "public.training_participants", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.venues"] ) ) {
			$lookupTableLinks["public.venues"] = array();
		}
		if( !isset( $lookupTableLinks["public.venues"]["training_participants.venue_id"] )) {
			$lookupTableLinks["public.venues"]["training_participants.venue_id"] = array();
		}
		$lookupTableLinks["public.venues"]["training_participants.venue_id"]["edit"] = array("table" => "public.training_participants", "field" => "venue_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["venues.facility_id"] )) {
			$lookupTableLinks["public.facilities"]["venues.facility_id"] = array();
		}
		$lookupTableLinks["public.facilities"]["venues.facility_id"]["edit"] = array("table" => "public.venues", "field" => "facility_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["venues.country_id"] )) {
			$lookupTableLinks["public.countries"]["venues.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["venues.country_id"]["edit"] = array("table" => "public.venues", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_participation"] ) ) {
			$lookupTableLinks["public.training_participation"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_participation"]["training_attendance.participation_id"] )) {
			$lookupTableLinks["public.training_participation"]["training_attendance.participation_id"] = array();
		}
		$lookupTableLinks["public.training_participation"]["training_attendance.participation_id"]["edit"] = array("table" => "public.training_attendance", "field" => "participation_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_attendance"] ) ) {
			$lookupTableLinks["public.training_attendance"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_attendance"]["training_attendance.sex_name"] )) {
			$lookupTableLinks["public.training_attendance"]["training_attendance.sex_name"] = array();
		}
		$lookupTableLinks["public.training_attendance"]["training_attendance.sex_name"]["edit"] = array("table" => "public.training_attendance", "field" => "sex_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.facilities"] ) ) {
			$lookupTableLinks["public.facilities"] = array();
		}
		if( !isset( $lookupTableLinks["public.facilities"]["training_attendance.facility_name"] )) {
			$lookupTableLinks["public.facilities"]["training_attendance.facility_name"] = array();
		}
		$lookupTableLinks["public.facilities"]["training_attendance.facility_name"]["edit"] = array("table" => "public.training_attendance", "field" => "facility_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.participant_role"] ) ) {
			$lookupTableLinks["public.participant_role"] = array();
		}
		if( !isset( $lookupTableLinks["public.participant_role"]["training_attendance.role_name"] )) {
			$lookupTableLinks["public.participant_role"]["training_attendance.role_name"] = array();
		}
		$lookupTableLinks["public.participant_role"]["training_attendance.role_name"]["edit"] = array("table" => "public.training_attendance", "field" => "role_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_attendance"] ) ) {
			$lookupTableLinks["public.training_attendance"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_attendance"]["training_attendance.course_name"] )) {
			$lookupTableLinks["public.training_attendance"]["training_attendance.course_name"] = array();
		}
		$lookupTableLinks["public.training_attendance"]["training_attendance.course_name"]["edit"] = array("table" => "public.training_attendance", "field" => "course_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_attendance"] ) ) {
			$lookupTableLinks["public.training_attendance"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_attendance"]["training_attendance.program_name"] )) {
			$lookupTableLinks["public.training_attendance"]["training_attendance.program_name"] = array();
		}
		$lookupTableLinks["public.training_attendance"]["training_attendance.program_name"]["edit"] = array("table" => "public.training_attendance", "field" => "program_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_attendance"] ) ) {
			$lookupTableLinks["public.training_attendance"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_attendance"]["training_attendance.quarter"] )) {
			$lookupTableLinks["public.training_attendance"]["training_attendance.quarter"] = array();
		}
		$lookupTableLinks["public.training_attendance"]["training_attendance.quarter"]["edit"] = array("table" => "public.training_attendance", "field" => "quarter", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_types"] ) ) {
			$lookupTableLinks["public.training_types"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_types"]["training_attendance.training_type"] )) {
			$lookupTableLinks["public.training_types"]["training_attendance.training_type"] = array();
		}
		$lookupTableLinks["public.training_types"]["training_attendance.training_type"]["edit"] = array("table" => "public.training_attendance", "field" => "training_type", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_approaches"] ) ) {
			$lookupTableLinks["public.training_approaches"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_approaches"]["training_attendance.training_approach"] )) {
			$lookupTableLinks["public.training_approaches"]["training_attendance.training_approach"] = array();
		}
		$lookupTableLinks["public.training_approaches"]["training_attendance.training_approach"]["edit"] = array("table" => "public.training_attendance", "field" => "training_approach", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["training_attendance.host_country"] )) {
			$lookupTableLinks["public.countries"]["training_attendance.host_country"] = array();
		}
		$lookupTableLinks["public.countries"]["training_attendance.host_country"]["edit"] = array("table" => "public.training_attendance", "field" => "host_country", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["training_attendance.host_region"] )) {
			$lookupTableLinks["public.regions"]["training_attendance.host_region"] = array();
		}
		$lookupTableLinks["public.regions"]["training_attendance.host_region"]["edit"] = array("table" => "public.training_attendance", "field" => "host_region", "page" => "edit");
		if( !isset( $lookupTableLinks["public.venues"] ) ) {
			$lookupTableLinks["public.venues"] = array();
		}
		if( !isset( $lookupTableLinks["public.venues"]["training_attendance.venue_name"] )) {
			$lookupTableLinks["public.venues"]["training_attendance.venue_name"] = array();
		}
		$lookupTableLinks["public.venues"]["training_attendance.venue_name"]["edit"] = array("table" => "public.training_attendance", "field" => "venue_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.partners"] ) ) {
			$lookupTableLinks["public.partners"] = array();
		}
		if( !isset( $lookupTableLinks["public.partners"]["training_attendance.partner_name"] )) {
			$lookupTableLinks["public.partners"]["training_attendance.partner_name"] = array();
		}
		$lookupTableLinks["public.partners"]["training_attendance.partner_name"]["edit"] = array("table" => "public.training_attendance", "field" => "partner_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifebox_staff"] ) ) {
			$lookupTableLinks["public.lifebox_staff"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifebox_staff"]["training_attendance.training_lead_name"] )) {
			$lookupTableLinks["public.lifebox_staff"]["training_attendance.training_lead_name"] = array();
		}
		$lookupTableLinks["public.lifebox_staff"]["training_attendance.training_lead_name"]["edit"] = array("table" => "public.training_attendance", "field" => "training_lead_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_participants"] ) ) {
			$lookupTableLinks["public.training_participants"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_participants"]["participant_attendance_detail.participant_id"] )) {
			$lookupTableLinks["public.training_participants"]["participant_attendance_detail.participant_id"] = array();
		}
		$lookupTableLinks["public.training_participants"]["participant_attendance_detail.participant_id"]["edit"] = array("table" => "public.participant_attendance_detail", "field" => "participant_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["participant_attendance_detail.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["participant_attendance_detail.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["participant_attendance_detail.training_id"]["edit"] = array("table" => "public.participant_attendance_detail", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["participant_attendance_detail.training_name"] )) {
			$lookupTableLinks["public.training_sessions"]["participant_attendance_detail.training_name"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["participant_attendance_detail.training_name"]["edit"] = array("table" => "public.participant_attendance_detail", "field" => "training_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["participant_attendance_summary.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["participant_attendance_summary.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["participant_attendance_summary.training_id"]["edit"] = array("table" => "public.participant_attendance_summary", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_participants"] ) ) {
			$lookupTableLinks["public.training_participants"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_participants"]["training_participation.participant_id"] )) {
			$lookupTableLinks["public.training_participants"]["training_participation.participant_id"] = array();
		}
		$lookupTableLinks["public.training_participants"]["training_participation.participant_id"]["edit"] = array("table" => "public.training_participation", "field" => "participant_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.training_sessions"] ) ) {
			$lookupTableLinks["public.training_sessions"] = array();
		}
		if( !isset( $lookupTableLinks["public.training_sessions"]["training_participation.training_id"] )) {
			$lookupTableLinks["public.training_sessions"]["training_participation.training_id"] = array();
		}
		$lookupTableLinks["public.training_sessions"]["training_participation.training_id"]["edit"] = array("table" => "public.training_participation", "field" => "training_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.sex"] ) ) {
			$lookupTableLinks["public.sex"] = array();
		}
		if( !isset( $lookupTableLinks["public.sex"]["users.sex"] )) {
			$lookupTableLinks["public.sex"]["users.sex"] = array();
		}
		$lookupTableLinks["public.sex"]["users.sex"]["edit"] = array("table" => "public.users", "field" => "sex", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["users.region"] )) {
			$lookupTableLinks["public.regions"]["users.region"] = array();
		}
		$lookupTableLinks["public.regions"]["users.region"]["edit"] = array("table" => "public.users", "field" => "region", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["users.country"] )) {
			$lookupTableLinks["public.countries"]["users.country"] = array();
		}
		$lookupTableLinks["public.countries"]["users.country"]["edit"] = array("table" => "public.users", "field" => "country", "page" => "edit");
		if( !isset( $lookupTableLinks["public.sex"] ) ) {
			$lookupTableLinks["public.sex"] = array();
		}
		if( !isset( $lookupTableLinks["public.sex"]["admin_users.sex"] )) {
			$lookupTableLinks["public.sex"]["admin_users.sex"] = array();
		}
		$lookupTableLinks["public.sex"]["admin_users.sex"]["edit"] = array("table" => "admin_users", "field" => "sex", "page" => "edit");
		if( !isset( $lookupTableLinks["public.regions"] ) ) {
			$lookupTableLinks["public.regions"] = array();
		}
		if( !isset( $lookupTableLinks["public.regions"]["admin_users.region"] )) {
			$lookupTableLinks["public.regions"]["admin_users.region"] = array();
		}
		$lookupTableLinks["public.regions"]["admin_users.region"]["edit"] = array("table" => "admin_users", "field" => "region", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["admin_users.country"] )) {
			$lookupTableLinks["public.countries"]["admin_users.country"] = array();
		}
		$lookupTableLinks["public.countries"]["admin_users.country"]["edit"] = array("table" => "admin_users", "field" => "country", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"] ) ) {
			$lookupTableLinks["public.lifeboxme__audit"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.ip"] )) {
			$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.ip"] = array();
		}
		$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.ip"]["edit"] = array("table" => "public.lifeboxme__audit", "field" => "ip", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"] ) ) {
			$lookupTableLinks["public.lifeboxme__audit"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.user"] )) {
			$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.user"] = array();
		}
		$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.user"]["edit"] = array("table" => "public.lifeboxme__audit", "field" => "user", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"] ) ) {
			$lookupTableLinks["public.lifeboxme__audit"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.table"] )) {
			$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.table"] = array();
		}
		$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.table"]["edit"] = array("table" => "public.lifeboxme__audit", "field" => "table", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"] ) ) {
			$lookupTableLinks["public.lifeboxme__audit"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.action"] )) {
			$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.action"] = array();
		}
		$lookupTableLinks["public.lifeboxme__audit"]["lifeboxme__audit.action"]["edit"] = array("table" => "public.lifeboxme__audit", "field" => "action", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__locking"] ) ) {
			$lookupTableLinks["public.lifeboxme__locking"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.table"] )) {
			$lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.table"] = array();
		}
		$lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.table"]["edit"] = array("table" => "public.lifeboxme__locking", "field" => "table", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__locking"] ) ) {
			$lookupTableLinks["public.lifeboxme__locking"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.userid"] )) {
			$lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.userid"] = array();
		}
		$lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.userid"]["edit"] = array("table" => "public.lifeboxme__locking", "field" => "userid", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme__locking"] ) ) {
			$lookupTableLinks["public.lifeboxme__locking"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.action"] )) {
			$lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.action"] = array();
		}
		$lookupTableLinks["public.lifeboxme__locking"]["lifeboxme__locking.action"]["edit"] = array("table" => "public.lifeboxme__locking", "field" => "action", "page" => "edit");
		if( !isset( $lookupTableLinks["public.countries"] ) ) {
			$lookupTableLinks["public.countries"] = array();
		}
		if( !isset( $lookupTableLinks["public.countries"]["donors.country_id"] )) {
			$lookupTableLinks["public.countries"]["donors.country_id"] = array();
		}
		$lookupTableLinks["public.countries"]["donors.country_id"]["edit"] = array("table" => "public.donors", "field" => "country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.device_distributions"] ) ) {
			$lookupTableLinks["public.device_distributions"] = array();
		}
		if( !isset( $lookupTableLinks["public.device_distributions"]["device_distribution_log.distribution_id"] )) {
			$lookupTableLinks["public.device_distributions"]["device_distribution_log.distribution_id"] = array();
		}
		$lookupTableLinks["public.device_distributions"]["device_distribution_log.distribution_id"]["edit"] = array("table" => "public.device_distribution_log", "field" => "distribution_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.devices"] ) ) {
			$lookupTableLinks["public.devices"] = array();
		}
		if( !isset( $lookupTableLinks["public.devices"]["device_distribution_log.device_type"] )) {
			$lookupTableLinks["public.devices"]["device_distribution_log.device_type"] = array();
		}
		$lookupTableLinks["public.devices"]["device_distribution_log.device_type"]["edit"] = array("table" => "public.device_distribution_log", "field" => "device_type", "page" => "edit");
		if( !isset( $lookupTableLinks["public.device_distributions"] ) ) {
			$lookupTableLinks["public.device_distributions"] = array();
		}
		if( !isset( $lookupTableLinks["public.device_distributions"]["device_distribution_log.previous_quantity"] )) {
			$lookupTableLinks["public.device_distributions"]["device_distribution_log.previous_quantity"] = array();
		}
		$lookupTableLinks["public.device_distributions"]["device_distribution_log.previous_quantity"]["edit"] = array("table" => "public.device_distribution_log", "field" => "previous_quantity", "page" => "edit");
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_OrgUnits"] ) ) {
			$lookupTableLinks["Lifebox_DHIS2_OrgUnits"] = array();
		}
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Continent"] )) {
			$lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Continent"] = array();
		}
		$lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Continent"]["edit"] = array("table" => "Lifebox_DHIS2_OrgUnits", "field" => "Continent", "page" => "edit");
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_OrgUnits"] ) ) {
			$lookupTableLinks["Lifebox_DHIS2_OrgUnits"] = array();
		}
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Country"] )) {
			$lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Country"] = array();
		}
		$lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Country"]["edit"] = array("table" => "Lifebox_DHIS2_OrgUnits", "field" => "Country", "page" => "edit");
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_OrgUnits"] ) ) {
			$lookupTableLinks["Lifebox_DHIS2_OrgUnits"] = array();
		}
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Hospital_Facility"] )) {
			$lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Hospital_Facility"] = array();
		}
		$lookupTableLinks["Lifebox_DHIS2_OrgUnits"]["lifebox_dhis2_orgunits.Hospital_Facility"]["edit"] = array("table" => "Lifebox_DHIS2_OrgUnits", "field" => "Hospital_Facility", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.cont_id"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.cont_id"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.cont_id"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "cont_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.continent"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.continent"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.continent"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "continent", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.count_id"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.count_id"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.count_id"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "count_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.country"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.country"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.country"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "country", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.hosp_fac_id"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.hosp_fac_id"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.hosp_fac_id"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "hosp_fac_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.hospital_facility"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.hospital_facility"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.hospital_facility"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "hospital_facility", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.level"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.level"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_orgunits"]["lifeboxme_dhis2_orgunits.level"]["edit"] = array("table" => "public.lifeboxme_dhis2_orgunits", "field" => "level", "page" => "edit");
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_dataItems"] ) ) {
			$lookupTableLinks["Lifebox_DHIS2_dataItems"] = array();
		}
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_dataItems"]["lifebox_dhis2_dataitems.displayName"] )) {
			$lookupTableLinks["Lifebox_DHIS2_dataItems"]["lifebox_dhis2_dataitems.displayName"] = array();
		}
		$lookupTableLinks["Lifebox_DHIS2_dataItems"]["lifebox_dhis2_dataitems.displayName"]["edit"] = array("table" => "Lifebox_DHIS2_dataItems", "field" => "displayName", "page" => "edit");
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_dataItems"] ) ) {
			$lookupTableLinks["Lifebox_DHIS2_dataItems"] = array();
		}
		if( !isset( $lookupTableLinks["Lifebox_DHIS2_dataItems"]["lifebox_dhis2_dataitems.dimensionItemType"] )) {
			$lookupTableLinks["Lifebox_DHIS2_dataItems"]["lifebox_dhis2_dataitems.dimensionItemType"] = array();
		}
		$lookupTableLinks["Lifebox_DHIS2_dataItems"]["lifebox_dhis2_dataitems.dimensionItemType"]["edit"] = array("table" => "Lifebox_DHIS2_dataItems", "field" => "dimensionItemType", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_dataitems"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_dataitems"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_dataitems.display_name"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_dataitems.display_name"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_dataitems.display_name"]["edit"] = array("table" => "public.lifeboxme_dhis2_dataitems", "field" => "display_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_dataitems"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_dataitems"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_dataitems.dimension_item_type"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_dataitems.dimension_item_type"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_dataitems.dimension_item_type"]["edit"] = array("table" => "public.lifeboxme_dhis2_dataitems", "field" => "dimension_item_type", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_dataitems"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_dataitems"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_analytics_settings.dx"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_analytics_settings.dx"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_dataitems"]["lifeboxme_dhis2_analytics_settings.dx"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_settings", "field" => "dx", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_settings"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_settings"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_settings"]["lifeboxme_dhis2_analytics_data.setting_id"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_settings"]["lifeboxme_dhis2_analytics_data.setting_id"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_settings"]["lifeboxme_dhis2_analytics_data.setting_id"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "setting_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.dx_name"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.dx_name"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.dx_name"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "dx_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.dx_dimensiontype"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.dx_dimensiontype"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.dx_dimensiontype"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "dx_dimensiontype", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_name"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_name"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_name"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "ou_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_parent_name"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_parent_name"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_parent_name"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "ou_parent_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_level_id"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_level_id"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_level_id"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "ou_level_id", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_level_name"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_level_name"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.ou_level_name"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "ou_level_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.period_display_name"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.period_display_name"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.period_display_name"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "period_display_name", "page" => "edit");
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] ) ) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"] = array();
		}
		if( !isset( $lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.pe_relativeperiod"] )) {
			$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.pe_relativeperiod"] = array();
		}
		$lookupTableLinks["public.lifeboxme_dhis2_analytics_data"]["lifeboxme_dhis2_analytics_data.pe_relativeperiod"]["edit"] = array("table" => "public.lifeboxme_dhis2_analytics_data", "field" => "pe_relativeperiod", "page" => "edit");
}

?>