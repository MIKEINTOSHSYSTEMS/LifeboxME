<?php
global $runnerTableSettings;
$runnerTableSettings['public.surgical_cases'] = array(
	'name' => 'public.surgical_cases',
	'shortName' => 'surgical_cases',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => 'CFAE83',
	'pageSizeSelectorRecords' => array( 
		'10',
		'20',
		'30',
		'50',
		'100',
		'500',
		'-1' 
	),
	'pageSizeSelectorGroups' => array( 
		'1',
		'3',
		'5',
		'10',
		'50',
		'100',
		'-1' 
	),
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	case_id,
	facility_id,
	country_id,
	surgery_date,
	data_type,
	data_collector_name,
	location_of_surgery,
	patient_sex,
	patient_asa_classification,
	patient_dob,
	patient_age,
	diabetes,
	hypertension,
	obese,
	malnourished,
	smoker,
	on_steroids,
	admitted_to_icu,
	hypothermic,
	preoperative_diagnosis_id,
	hours_since_injury,
	sterilizable_drill_used,
	drill_sterile_cover_used,
	holes_in_sterile_cover,
	sign_in_read_aloud,
	sign_in_completed_before_anesthesia,
	sterility_indicator_in_tray,
	sterility_indicator_color_changed,
	tray_wet_prior_to_operation,
	tray_replaced,
	gauze_count_performed,
	gauze_count_total,
	surgeon_scrubbed_hands,
	handwashing_available,
	alcohol_solution_applied,
	new_surgical_gloves_used,
	gown_sterility_indicator,
	gown_indicator_color_changed,
	gown_pack_replaced,
	gowns_or_drapes_wet,
	wet_gowns_replaced,
	holes_in_gowns,
	torn_gowns_replaced,
	holes_in_drapes,
	drapes_replaced,
	surgical_site_prep_method,
	vaginal_preparation,
	antibiotics_given,
	antibiotics_admin_location,
	antibiotics_time,
	on_scheduled_antibiotics,
	antibiotic_type,
	timeout_read_aloud,
	operation_type_announced,
	blood_loss_announced,
	estimated_blood_loss,
	time_of_incision,
	gauze_count_end_performed,
	gauze_count_end_total,
	time_dressing_applied,
	procedure_id,
	hardware_or_bioprosthetic_used,
	cesarean_indication,
	wound_closed_primarily,
	wound_classification,
	case_type,
	sign_out_read_aloud,
	sign_out_in_theatre,
	unplanned_intubation,
	urgent_tracheostomy,
	urgent_central_access,
	other_crisis_occurred,
	crisis_description,
	death_in_or,
	fetal_death,
	created_at,
	updated_at
FROM
	"public".surgical_cases',
	'keyFields' => array( 
		'case_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'case_id' => array(
			'name' => 'case_id',
			'goodName' => 'case_id',
			'strField' => 'case_id',
			'sourceSingle' => 'case_id',
			'index' => 1,
			'type' => 13,
			'sqlExpression' => 'case_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'facility_id' => array(
			'name' => 'facility_id',
			'goodName' => 'facility_id',
			'strField' => 'facility_id',
			'sourceSingle' => 'facility_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'facility_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.facilities',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'facility_id',
					'lookupDisplayField' => 'facility_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'country_id' => array(
			'name' => 'country_id',
			'goodName' => 'country_id',
			'strField' => 'country_id',
			'sourceSingle' => 'country_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'country_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.countries',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'country_id',
					'lookupDisplayField' => 'country_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'surgery_date' => array(
			'name' => 'surgery_date',
			'goodName' => 'surgery_date',
			'strField' => 'surgery_date',
			'sourceSingle' => 'surgery_date',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'surgery_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 13,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'data_type' => array(
			'name' => 'data_type',
			'goodName' => 'data_type',
			'strField' => 'data_type',
			'sourceSingle' => 'data_type',
			'index' => 5,
			'sqlExpression' => 'data_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'data_collector_name' => array(
			'name' => 'data_collector_name',
			'goodName' => 'data_collector_name',
			'strField' => 'data_collector_name',
			'sourceSingle' => 'data_collector_name',
			'index' => 6,
			'sqlExpression' => 'data_collector_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'location_of_surgery' => array(
			'name' => 'location_of_surgery',
			'goodName' => 'location_of_surgery',
			'strField' => 'location_of_surgery',
			'sourceSingle' => 'location_of_surgery',
			'index' => 7,
			'sqlExpression' => 'location_of_surgery',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'patient_sex' => array(
			'name' => 'patient_sex',
			'goodName' => 'patient_sex',
			'strField' => 'patient_sex',
			'sourceSingle' => 'patient_sex',
			'index' => 8,
			'type' => 13,
			'sqlExpression' => 'patient_sex',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'patient_asa_classification' => array(
			'name' => 'patient_asa_classification',
			'goodName' => 'patient_asa_classification',
			'strField' => 'patient_asa_classification',
			'sourceSingle' => 'patient_asa_classification',
			'index' => 9,
			'type' => 13,
			'sqlExpression' => 'patient_asa_classification',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'patient_dob' => array(
			'name' => 'patient_dob',
			'goodName' => 'patient_dob',
			'strField' => 'patient_dob',
			'sourceSingle' => 'patient_dob',
			'index' => 10,
			'type' => 7,
			'sqlExpression' => 'patient_dob',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 13,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'patient_age' => array(
			'name' => 'patient_age',
			'goodName' => 'patient_age',
			'strField' => 'patient_age',
			'sourceSingle' => 'patient_age',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'patient_age',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'diabetes' => array(
			'name' => 'diabetes',
			'goodName' => 'diabetes',
			'strField' => 'diabetes',
			'sourceSingle' => 'diabetes',
			'index' => 12,
			'type' => 11,
			'sqlExpression' => 'diabetes',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'hypertension' => array(
			'name' => 'hypertension',
			'goodName' => 'hypertension',
			'strField' => 'hypertension',
			'sourceSingle' => 'hypertension',
			'index' => 13,
			'type' => 11,
			'sqlExpression' => 'hypertension',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'obese' => array(
			'name' => 'obese',
			'goodName' => 'obese',
			'strField' => 'obese',
			'sourceSingle' => 'obese',
			'index' => 14,
			'type' => 11,
			'sqlExpression' => 'obese',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'malnourished' => array(
			'name' => 'malnourished',
			'goodName' => 'malnourished',
			'strField' => 'malnourished',
			'sourceSingle' => 'malnourished',
			'index' => 15,
			'type' => 11,
			'sqlExpression' => 'malnourished',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'smoker' => array(
			'name' => 'smoker',
			'goodName' => 'smoker',
			'strField' => 'smoker',
			'sourceSingle' => 'smoker',
			'index' => 16,
			'type' => 11,
			'sqlExpression' => 'smoker',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'on_steroids' => array(
			'name' => 'on_steroids',
			'goodName' => 'on_steroids',
			'strField' => 'on_steroids',
			'sourceSingle' => 'on_steroids',
			'index' => 17,
			'type' => 11,
			'sqlExpression' => 'on_steroids',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'admitted_to_icu' => array(
			'name' => 'admitted_to_icu',
			'goodName' => 'admitted_to_icu',
			'strField' => 'admitted_to_icu',
			'sourceSingle' => 'admitted_to_icu',
			'index' => 18,
			'type' => 11,
			'sqlExpression' => 'admitted_to_icu',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'hypothermic' => array(
			'name' => 'hypothermic',
			'goodName' => 'hypothermic',
			'strField' => 'hypothermic',
			'sourceSingle' => 'hypothermic',
			'index' => 19,
			'type' => 11,
			'sqlExpression' => 'hypothermic',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'preoperative_diagnosis_id' => array(
			'name' => 'preoperative_diagnosis_id',
			'goodName' => 'preoperative_diagnosis_id',
			'strField' => 'preoperative_diagnosis_id',
			'sourceSingle' => 'preoperative_diagnosis_id',
			'index' => 20,
			'type' => 3,
			'sqlExpression' => 'preoperative_diagnosis_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.diagnoses',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'diagnosis_id',
					'lookupDisplayField' => 'diagnosis_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'hours_since_injury' => array(
			'name' => 'hours_since_injury',
			'goodName' => 'hours_since_injury',
			'strField' => 'hours_since_injury',
			'sourceSingle' => 'hours_since_injury',
			'index' => 21,
			'type' => 3,
			'sqlExpression' => 'hours_since_injury',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sterilizable_drill_used' => array(
			'name' => 'sterilizable_drill_used',
			'goodName' => 'sterilizable_drill_used',
			'strField' => 'sterilizable_drill_used',
			'sourceSingle' => 'sterilizable_drill_used',
			'index' => 22,
			'type' => 11,
			'sqlExpression' => 'sterilizable_drill_used',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'drill_sterile_cover_used' => array(
			'name' => 'drill_sterile_cover_used',
			'goodName' => 'drill_sterile_cover_used',
			'strField' => 'drill_sterile_cover_used',
			'sourceSingle' => 'drill_sterile_cover_used',
			'index' => 23,
			'type' => 11,
			'sqlExpression' => 'drill_sterile_cover_used',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'holes_in_sterile_cover' => array(
			'name' => 'holes_in_sterile_cover',
			'goodName' => 'holes_in_sterile_cover',
			'strField' => 'holes_in_sterile_cover',
			'sourceSingle' => 'holes_in_sterile_cover',
			'index' => 24,
			'type' => 11,
			'sqlExpression' => 'holes_in_sterile_cover',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sign_in_read_aloud' => array(
			'name' => 'sign_in_read_aloud',
			'goodName' => 'sign_in_read_aloud',
			'strField' => 'sign_in_read_aloud',
			'sourceSingle' => 'sign_in_read_aloud',
			'index' => 25,
			'type' => 11,
			'sqlExpression' => 'sign_in_read_aloud',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sign_in_completed_before_anesthesia' => array(
			'name' => 'sign_in_completed_before_anesthesia',
			'goodName' => 'sign_in_completed_before_anesthesia',
			'strField' => 'sign_in_completed_before_anesthesia',
			'sourceSingle' => 'sign_in_completed_before_anesthesia',
			'index' => 26,
			'type' => 11,
			'sqlExpression' => 'sign_in_completed_before_anesthesia',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sterility_indicator_in_tray' => array(
			'name' => 'sterility_indicator_in_tray',
			'goodName' => 'sterility_indicator_in_tray',
			'strField' => 'sterility_indicator_in_tray',
			'sourceSingle' => 'sterility_indicator_in_tray',
			'index' => 27,
			'type' => 11,
			'sqlExpression' => 'sterility_indicator_in_tray',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sterility_indicator_color_changed' => array(
			'name' => 'sterility_indicator_color_changed',
			'goodName' => 'sterility_indicator_color_changed',
			'strField' => 'sterility_indicator_color_changed',
			'sourceSingle' => 'sterility_indicator_color_changed',
			'index' => 28,
			'type' => 11,
			'sqlExpression' => 'sterility_indicator_color_changed',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'tray_wet_prior_to_operation' => array(
			'name' => 'tray_wet_prior_to_operation',
			'goodName' => 'tray_wet_prior_to_operation',
			'strField' => 'tray_wet_prior_to_operation',
			'sourceSingle' => 'tray_wet_prior_to_operation',
			'index' => 29,
			'type' => 11,
			'sqlExpression' => 'tray_wet_prior_to_operation',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'tray_replaced' => array(
			'name' => 'tray_replaced',
			'goodName' => 'tray_replaced',
			'strField' => 'tray_replaced',
			'sourceSingle' => 'tray_replaced',
			'index' => 30,
			'type' => 11,
			'sqlExpression' => 'tray_replaced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gauze_count_performed' => array(
			'name' => 'gauze_count_performed',
			'goodName' => 'gauze_count_performed',
			'strField' => 'gauze_count_performed',
			'sourceSingle' => 'gauze_count_performed',
			'index' => 31,
			'type' => 11,
			'sqlExpression' => 'gauze_count_performed',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gauze_count_total' => array(
			'name' => 'gauze_count_total',
			'goodName' => 'gauze_count_total',
			'strField' => 'gauze_count_total',
			'sourceSingle' => 'gauze_count_total',
			'index' => 32,
			'type' => 3,
			'sqlExpression' => 'gauze_count_total',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'surgeon_scrubbed_hands' => array(
			'name' => 'surgeon_scrubbed_hands',
			'goodName' => 'surgeon_scrubbed_hands',
			'strField' => 'surgeon_scrubbed_hands',
			'sourceSingle' => 'surgeon_scrubbed_hands',
			'index' => 33,
			'type' => 11,
			'sqlExpression' => 'surgeon_scrubbed_hands',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'handwashing_available' => array(
			'name' => 'handwashing_available',
			'goodName' => 'handwashing_available',
			'strField' => 'handwashing_available',
			'sourceSingle' => 'handwashing_available',
			'index' => 34,
			'sqlExpression' => 'handwashing_available',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'alcohol_solution_applied' => array(
			'name' => 'alcohol_solution_applied',
			'goodName' => 'alcohol_solution_applied',
			'strField' => 'alcohol_solution_applied',
			'sourceSingle' => 'alcohol_solution_applied',
			'index' => 35,
			'type' => 11,
			'sqlExpression' => 'alcohol_solution_applied',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'new_surgical_gloves_used' => array(
			'name' => 'new_surgical_gloves_used',
			'goodName' => 'new_surgical_gloves_used',
			'strField' => 'new_surgical_gloves_used',
			'sourceSingle' => 'new_surgical_gloves_used',
			'index' => 36,
			'type' => 11,
			'sqlExpression' => 'new_surgical_gloves_used',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gown_sterility_indicator' => array(
			'name' => 'gown_sterility_indicator',
			'goodName' => 'gown_sterility_indicator',
			'strField' => 'gown_sterility_indicator',
			'sourceSingle' => 'gown_sterility_indicator',
			'index' => 37,
			'type' => 11,
			'sqlExpression' => 'gown_sterility_indicator',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gown_indicator_color_changed' => array(
			'name' => 'gown_indicator_color_changed',
			'goodName' => 'gown_indicator_color_changed',
			'strField' => 'gown_indicator_color_changed',
			'sourceSingle' => 'gown_indicator_color_changed',
			'index' => 38,
			'type' => 11,
			'sqlExpression' => 'gown_indicator_color_changed',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gown_pack_replaced' => array(
			'name' => 'gown_pack_replaced',
			'goodName' => 'gown_pack_replaced',
			'strField' => 'gown_pack_replaced',
			'sourceSingle' => 'gown_pack_replaced',
			'index' => 39,
			'type' => 11,
			'sqlExpression' => 'gown_pack_replaced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gowns_or_drapes_wet' => array(
			'name' => 'gowns_or_drapes_wet',
			'goodName' => 'gowns_or_drapes_wet',
			'strField' => 'gowns_or_drapes_wet',
			'sourceSingle' => 'gowns_or_drapes_wet',
			'index' => 40,
			'type' => 11,
			'sqlExpression' => 'gowns_or_drapes_wet',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'wet_gowns_replaced' => array(
			'name' => 'wet_gowns_replaced',
			'goodName' => 'wet_gowns_replaced',
			'strField' => 'wet_gowns_replaced',
			'sourceSingle' => 'wet_gowns_replaced',
			'index' => 41,
			'type' => 11,
			'sqlExpression' => 'wet_gowns_replaced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'holes_in_gowns' => array(
			'name' => 'holes_in_gowns',
			'goodName' => 'holes_in_gowns',
			'strField' => 'holes_in_gowns',
			'sourceSingle' => 'holes_in_gowns',
			'index' => 42,
			'type' => 11,
			'sqlExpression' => 'holes_in_gowns',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'torn_gowns_replaced' => array(
			'name' => 'torn_gowns_replaced',
			'goodName' => 'torn_gowns_replaced',
			'strField' => 'torn_gowns_replaced',
			'sourceSingle' => 'torn_gowns_replaced',
			'index' => 43,
			'type' => 11,
			'sqlExpression' => 'torn_gowns_replaced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'holes_in_drapes' => array(
			'name' => 'holes_in_drapes',
			'goodName' => 'holes_in_drapes',
			'strField' => 'holes_in_drapes',
			'sourceSingle' => 'holes_in_drapes',
			'index' => 44,
			'type' => 11,
			'sqlExpression' => 'holes_in_drapes',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'drapes_replaced' => array(
			'name' => 'drapes_replaced',
			'goodName' => 'drapes_replaced',
			'strField' => 'drapes_replaced',
			'sourceSingle' => 'drapes_replaced',
			'index' => 45,
			'type' => 11,
			'sqlExpression' => 'drapes_replaced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'surgical_site_prep_method' => array(
			'name' => 'surgical_site_prep_method',
			'goodName' => 'surgical_site_prep_method',
			'strField' => 'surgical_site_prep_method',
			'sourceSingle' => 'surgical_site_prep_method',
			'index' => 46,
			'sqlExpression' => 'surgical_site_prep_method',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'vaginal_preparation' => array(
			'name' => 'vaginal_preparation',
			'goodName' => 'vaginal_preparation',
			'strField' => 'vaginal_preparation',
			'sourceSingle' => 'vaginal_preparation',
			'index' => 47,
			'sqlExpression' => 'vaginal_preparation',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'antibiotics_given' => array(
			'name' => 'antibiotics_given',
			'goodName' => 'antibiotics_given',
			'strField' => 'antibiotics_given',
			'sourceSingle' => 'antibiotics_given',
			'index' => 48,
			'type' => 11,
			'sqlExpression' => 'antibiotics_given',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'antibiotics_admin_location' => array(
			'name' => 'antibiotics_admin_location',
			'goodName' => 'antibiotics_admin_location',
			'strField' => 'antibiotics_admin_location',
			'sourceSingle' => 'antibiotics_admin_location',
			'index' => 49,
			'sqlExpression' => 'antibiotics_admin_location',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 100,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'antibiotics_time' => array(
			'name' => 'antibiotics_time',
			'goodName' => 'antibiotics_time',
			'strField' => 'antibiotics_time',
			'sourceSingle' => 'antibiotics_time',
			'index' => 50,
			'type' => 134,
			'sqlExpression' => 'antibiotics_time',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Time',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Time',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'on_scheduled_antibiotics' => array(
			'name' => 'on_scheduled_antibiotics',
			'goodName' => 'on_scheduled_antibiotics',
			'strField' => 'on_scheduled_antibiotics',
			'sourceSingle' => 'on_scheduled_antibiotics',
			'index' => 51,
			'type' => 11,
			'sqlExpression' => 'on_scheduled_antibiotics',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'antibiotic_type' => array(
			'name' => 'antibiotic_type',
			'goodName' => 'antibiotic_type',
			'strField' => 'antibiotic_type',
			'sourceSingle' => 'antibiotic_type',
			'index' => 52,
			'sqlExpression' => 'antibiotic_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'timeout_read_aloud' => array(
			'name' => 'timeout_read_aloud',
			'goodName' => 'timeout_read_aloud',
			'strField' => 'timeout_read_aloud',
			'sourceSingle' => 'timeout_read_aloud',
			'index' => 53,
			'type' => 11,
			'sqlExpression' => 'timeout_read_aloud',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'operation_type_announced' => array(
			'name' => 'operation_type_announced',
			'goodName' => 'operation_type_announced',
			'strField' => 'operation_type_announced',
			'sourceSingle' => 'operation_type_announced',
			'index' => 54,
			'type' => 11,
			'sqlExpression' => 'operation_type_announced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'blood_loss_announced' => array(
			'name' => 'blood_loss_announced',
			'goodName' => 'blood_loss_announced',
			'strField' => 'blood_loss_announced',
			'sourceSingle' => 'blood_loss_announced',
			'index' => 55,
			'type' => 11,
			'sqlExpression' => 'blood_loss_announced',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'estimated_blood_loss' => array(
			'name' => 'estimated_blood_loss',
			'goodName' => 'estimated_blood_loss',
			'strField' => 'estimated_blood_loss',
			'sourceSingle' => 'estimated_blood_loss',
			'index' => 56,
			'type' => 3,
			'sqlExpression' => 'estimated_blood_loss',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'time_of_incision' => array(
			'name' => 'time_of_incision',
			'goodName' => 'time_of_incision',
			'strField' => 'time_of_incision',
			'sourceSingle' => 'time_of_incision',
			'index' => 57,
			'type' => 134,
			'sqlExpression' => 'time_of_incision',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Time',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Time',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gauze_count_end_performed' => array(
			'name' => 'gauze_count_end_performed',
			'goodName' => 'gauze_count_end_performed',
			'strField' => 'gauze_count_end_performed',
			'sourceSingle' => 'gauze_count_end_performed',
			'index' => 58,
			'type' => 11,
			'sqlExpression' => 'gauze_count_end_performed',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'gauze_count_end_total' => array(
			'name' => 'gauze_count_end_total',
			'goodName' => 'gauze_count_end_total',
			'strField' => 'gauze_count_end_total',
			'sourceSingle' => 'gauze_count_end_total',
			'index' => 59,
			'type' => 3,
			'sqlExpression' => 'gauze_count_end_total',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'time_dressing_applied' => array(
			'name' => 'time_dressing_applied',
			'goodName' => 'time_dressing_applied',
			'strField' => 'time_dressing_applied',
			'sourceSingle' => 'time_dressing_applied',
			'index' => 60,
			'type' => 134,
			'sqlExpression' => 'time_dressing_applied',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Time',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Time',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'procedure_id' => array(
			'name' => 'procedure_id',
			'goodName' => 'procedure_id',
			'strField' => 'procedure_id',
			'sourceSingle' => 'procedure_id',
			'index' => 61,
			'type' => 3,
			'sqlExpression' => 'procedure_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.procedures',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'procedure_id',
					'lookupDisplayField' => 'procedure_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'hardware_or_bioprosthetic_used' => array(
			'name' => 'hardware_or_bioprosthetic_used',
			'goodName' => 'hardware_or_bioprosthetic_used',
			'strField' => 'hardware_or_bioprosthetic_used',
			'sourceSingle' => 'hardware_or_bioprosthetic_used',
			'index' => 62,
			'type' => 11,
			'sqlExpression' => 'hardware_or_bioprosthetic_used',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'cesarean_indication' => array(
			'name' => 'cesarean_indication',
			'goodName' => 'cesarean_indication',
			'strField' => 'cesarean_indication',
			'sourceSingle' => 'cesarean_indication',
			'index' => 63,
			'sqlExpression' => 'cesarean_indication',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textboxMaxLenth' => 200,
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'wound_closed_primarily' => array(
			'name' => 'wound_closed_primarily',
			'goodName' => 'wound_closed_primarily',
			'strField' => 'wound_closed_primarily',
			'sourceSingle' => 'wound_closed_primarily',
			'index' => 64,
			'type' => 11,
			'sqlExpression' => 'wound_closed_primarily',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'wound_classification' => array(
			'name' => 'wound_classification',
			'goodName' => 'wound_classification',
			'strField' => 'wound_classification',
			'sourceSingle' => 'wound_classification',
			'index' => 65,
			'type' => 13,
			'sqlExpression' => 'wound_classification',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'case_type' => array(
			'name' => 'case_type',
			'goodName' => 'case_type',
			'strField' => 'case_type',
			'sourceSingle' => 'case_type',
			'index' => 66,
			'type' => 13,
			'sqlExpression' => 'case_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sign_out_read_aloud' => array(
			'name' => 'sign_out_read_aloud',
			'goodName' => 'sign_out_read_aloud',
			'strField' => 'sign_out_read_aloud',
			'sourceSingle' => 'sign_out_read_aloud',
			'index' => 67,
			'type' => 11,
			'sqlExpression' => 'sign_out_read_aloud',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'sign_out_in_theatre' => array(
			'name' => 'sign_out_in_theatre',
			'goodName' => 'sign_out_in_theatre',
			'strField' => 'sign_out_in_theatre',
			'sourceSingle' => 'sign_out_in_theatre',
			'index' => 68,
			'type' => 11,
			'sqlExpression' => 'sign_out_in_theatre',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'unplanned_intubation' => array(
			'name' => 'unplanned_intubation',
			'goodName' => 'unplanned_intubation',
			'strField' => 'unplanned_intubation',
			'sourceSingle' => 'unplanned_intubation',
			'index' => 69,
			'type' => 11,
			'sqlExpression' => 'unplanned_intubation',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'urgent_tracheostomy' => array(
			'name' => 'urgent_tracheostomy',
			'goodName' => 'urgent_tracheostomy',
			'strField' => 'urgent_tracheostomy',
			'sourceSingle' => 'urgent_tracheostomy',
			'index' => 70,
			'type' => 11,
			'sqlExpression' => 'urgent_tracheostomy',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'urgent_central_access' => array(
			'name' => 'urgent_central_access',
			'goodName' => 'urgent_central_access',
			'strField' => 'urgent_central_access',
			'sourceSingle' => 'urgent_central_access',
			'index' => 71,
			'type' => 11,
			'sqlExpression' => 'urgent_central_access',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'other_crisis_occurred' => array(
			'name' => 'other_crisis_occurred',
			'goodName' => 'other_crisis_occurred',
			'strField' => 'other_crisis_occurred',
			'sourceSingle' => 'other_crisis_occurred',
			'index' => 72,
			'type' => 11,
			'sqlExpression' => 'other_crisis_occurred',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'crisis_description' => array(
			'name' => 'crisis_description',
			'goodName' => 'crisis_description',
			'strField' => 'crisis_description',
			'sourceSingle' => 'crisis_description',
			'index' => 73,
			'type' => 201,
			'sqlExpression' => 'crisis_description',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'death_in_or' => array(
			'name' => 'death_in_or',
			'goodName' => 'death_in_or',
			'strField' => 'death_in_or',
			'sourceSingle' => 'death_in_or',
			'index' => 74,
			'type' => 11,
			'sqlExpression' => 'death_in_or',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'fetal_death' => array(
			'name' => 'fetal_death',
			'goodName' => 'fetal_death',
			'strField' => 'fetal_death',
			'sourceSingle' => 'fetal_death',
			'index' => 75,
			'type' => 11,
			'sqlExpression' => 'fetal_death',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'denyDuplicateMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Options list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 76,
			'type' => 135,
			'sqlExpression' => 'created_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'defaultValue' => 'strftime("%Y-%m-%d")',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 77,
			'type' => 135,
			'sqlExpression' => 'updated_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'autoUpdateValue' => 'strftime("%Y-%m-%d")',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'dateEditType' => 5,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.surgical_cases' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.facilities',
			'detailsKeys' => array( 
				'facility_id' 
			),
			'masterKeys' => array( 
				'facility_id' 
			) 
		),
		array(
			'table' => 'public.countries',
			'detailsKeys' => array( 
				'country_id' 
			),
			'masterKeys' => array( 
				'country_id' 
			) 
		),
		array(
			'table' => 'public.diagnoses',
			'detailsKeys' => array( 
				'preoperative_diagnosis_id' 
			),
			'masterKeys' => array( 
				'diagnosis_id' 
			) 
		),
		array(
			'table' => 'public.procedures',
			'detailsKeys' => array( 
				'procedure_id' 
			),
			'masterKeys' => array( 
				'procedure_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'public.case_antibiotics',
		'public.follow_ups',
		'public.ward_rounds' 
	),
	'query' => array(
		'sql' => 'SELECT
	case_id,
	facility_id,
	country_id,
	surgery_date,
	data_type,
	data_collector_name,
	location_of_surgery,
	patient_sex,
	patient_asa_classification,
	patient_dob,
	patient_age,
	diabetes,
	hypertension,
	obese,
	malnourished,
	smoker,
	on_steroids,
	admitted_to_icu,
	hypothermic,
	preoperative_diagnosis_id,
	hours_since_injury,
	sterilizable_drill_used,
	drill_sterile_cover_used,
	holes_in_sterile_cover,
	sign_in_read_aloud,
	sign_in_completed_before_anesthesia,
	sterility_indicator_in_tray,
	sterility_indicator_color_changed,
	tray_wet_prior_to_operation,
	tray_replaced,
	gauze_count_performed,
	gauze_count_total,
	surgeon_scrubbed_hands,
	handwashing_available,
	alcohol_solution_applied,
	new_surgical_gloves_used,
	gown_sterility_indicator,
	gown_indicator_color_changed,
	gown_pack_replaced,
	gowns_or_drapes_wet,
	wet_gowns_replaced,
	holes_in_gowns,
	torn_gowns_replaced,
	holes_in_drapes,
	drapes_replaced,
	surgical_site_prep_method,
	vaginal_preparation,
	antibiotics_given,
	antibiotics_admin_location,
	antibiotics_time,
	on_scheduled_antibiotics,
	antibiotic_type,
	timeout_read_aloud,
	operation_type_announced,
	blood_loss_announced,
	estimated_blood_loss,
	time_of_incision,
	gauze_count_end_performed,
	gauze_count_end_total,
	time_dressing_applied,
	procedure_id,
	hardware_or_bioprosthetic_used,
	cesarean_indication,
	wound_closed_primarily,
	wound_classification,
	case_type,
	sign_out_read_aloud,
	sign_out_in_theatre,
	unplanned_intubation,
	urgent_tracheostomy,
	urgent_central_access,
	other_crisis_occurred,
	crisis_description,
	death_in_or,
	fetal_death,
	created_at,
	updated_at
FROM
	"public".surgical_cases',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'case_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'case_id' 
				),
				'encrypted' => false,
				'columnName' => 'case_id' 
			),
			array(
				'sql' => 'facility_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
			),
			array(
				'sql' => 'country_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'country_id' 
				),
				'encrypted' => false,
				'columnName' => 'country_id' 
			),
			array(
				'sql' => 'surgery_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'surgery_date' 
				),
				'encrypted' => false,
				'columnName' => 'surgery_date' 
			),
			array(
				'sql' => 'data_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'data_type' 
				),
				'encrypted' => false,
				'columnName' => 'data_type' 
			),
			array(
				'sql' => 'data_collector_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'data_collector_name' 
				),
				'encrypted' => false,
				'columnName' => 'data_collector_name' 
			),
			array(
				'sql' => 'location_of_surgery',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'location_of_surgery' 
				),
				'encrypted' => false,
				'columnName' => 'location_of_surgery' 
			),
			array(
				'sql' => 'patient_sex',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'patient_sex' 
				),
				'encrypted' => false,
				'columnName' => 'patient_sex' 
			),
			array(
				'sql' => 'patient_asa_classification',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'patient_asa_classification' 
				),
				'encrypted' => false,
				'columnName' => 'patient_asa_classification' 
			),
			array(
				'sql' => 'patient_dob',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'patient_dob' 
				),
				'encrypted' => false,
				'columnName' => 'patient_dob' 
			),
			array(
				'sql' => 'patient_age',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'patient_age' 
				),
				'encrypted' => false,
				'columnName' => 'patient_age' 
			),
			array(
				'sql' => 'diabetes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'diabetes' 
				),
				'encrypted' => false,
				'columnName' => 'diabetes' 
			),
			array(
				'sql' => 'hypertension',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'hypertension' 
				),
				'encrypted' => false,
				'columnName' => 'hypertension' 
			),
			array(
				'sql' => 'obese',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'obese' 
				),
				'encrypted' => false,
				'columnName' => 'obese' 
			),
			array(
				'sql' => 'malnourished',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'malnourished' 
				),
				'encrypted' => false,
				'columnName' => 'malnourished' 
			),
			array(
				'sql' => 'smoker',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'smoker' 
				),
				'encrypted' => false,
				'columnName' => 'smoker' 
			),
			array(
				'sql' => 'on_steroids',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'on_steroids' 
				),
				'encrypted' => false,
				'columnName' => 'on_steroids' 
			),
			array(
				'sql' => 'admitted_to_icu',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'admitted_to_icu' 
				),
				'encrypted' => false,
				'columnName' => 'admitted_to_icu' 
			),
			array(
				'sql' => 'hypothermic',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'hypothermic' 
				),
				'encrypted' => false,
				'columnName' => 'hypothermic' 
			),
			array(
				'sql' => 'preoperative_diagnosis_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'preoperative_diagnosis_id' 
				),
				'encrypted' => false,
				'columnName' => 'preoperative_diagnosis_id' 
			),
			array(
				'sql' => 'hours_since_injury',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'hours_since_injury' 
				),
				'encrypted' => false,
				'columnName' => 'hours_since_injury' 
			),
			array(
				'sql' => 'sterilizable_drill_used',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sterilizable_drill_used' 
				),
				'encrypted' => false,
				'columnName' => 'sterilizable_drill_used' 
			),
			array(
				'sql' => 'drill_sterile_cover_used',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'drill_sterile_cover_used' 
				),
				'encrypted' => false,
				'columnName' => 'drill_sterile_cover_used' 
			),
			array(
				'sql' => 'holes_in_sterile_cover',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'holes_in_sterile_cover' 
				),
				'encrypted' => false,
				'columnName' => 'holes_in_sterile_cover' 
			),
			array(
				'sql' => 'sign_in_read_aloud',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sign_in_read_aloud' 
				),
				'encrypted' => false,
				'columnName' => 'sign_in_read_aloud' 
			),
			array(
				'sql' => 'sign_in_completed_before_anesthesia',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sign_in_completed_before_anesthesia' 
				),
				'encrypted' => false,
				'columnName' => 'sign_in_completed_before_anesthesia' 
			),
			array(
				'sql' => 'sterility_indicator_in_tray',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sterility_indicator_in_tray' 
				),
				'encrypted' => false,
				'columnName' => 'sterility_indicator_in_tray' 
			),
			array(
				'sql' => 'sterility_indicator_color_changed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sterility_indicator_color_changed' 
				),
				'encrypted' => false,
				'columnName' => 'sterility_indicator_color_changed' 
			),
			array(
				'sql' => 'tray_wet_prior_to_operation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'tray_wet_prior_to_operation' 
				),
				'encrypted' => false,
				'columnName' => 'tray_wet_prior_to_operation' 
			),
			array(
				'sql' => 'tray_replaced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'tray_replaced' 
				),
				'encrypted' => false,
				'columnName' => 'tray_replaced' 
			),
			array(
				'sql' => 'gauze_count_performed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gauze_count_performed' 
				),
				'encrypted' => false,
				'columnName' => 'gauze_count_performed' 
			),
			array(
				'sql' => 'gauze_count_total',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gauze_count_total' 
				),
				'encrypted' => false,
				'columnName' => 'gauze_count_total' 
			),
			array(
				'sql' => 'surgeon_scrubbed_hands',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'surgeon_scrubbed_hands' 
				),
				'encrypted' => false,
				'columnName' => 'surgeon_scrubbed_hands' 
			),
			array(
				'sql' => 'handwashing_available',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'handwashing_available' 
				),
				'encrypted' => false,
				'columnName' => 'handwashing_available' 
			),
			array(
				'sql' => 'alcohol_solution_applied',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'alcohol_solution_applied' 
				),
				'encrypted' => false,
				'columnName' => 'alcohol_solution_applied' 
			),
			array(
				'sql' => 'new_surgical_gloves_used',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'new_surgical_gloves_used' 
				),
				'encrypted' => false,
				'columnName' => 'new_surgical_gloves_used' 
			),
			array(
				'sql' => 'gown_sterility_indicator',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gown_sterility_indicator' 
				),
				'encrypted' => false,
				'columnName' => 'gown_sterility_indicator' 
			),
			array(
				'sql' => 'gown_indicator_color_changed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gown_indicator_color_changed' 
				),
				'encrypted' => false,
				'columnName' => 'gown_indicator_color_changed' 
			),
			array(
				'sql' => 'gown_pack_replaced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gown_pack_replaced' 
				),
				'encrypted' => false,
				'columnName' => 'gown_pack_replaced' 
			),
			array(
				'sql' => 'gowns_or_drapes_wet',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gowns_or_drapes_wet' 
				),
				'encrypted' => false,
				'columnName' => 'gowns_or_drapes_wet' 
			),
			array(
				'sql' => 'wet_gowns_replaced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'wet_gowns_replaced' 
				),
				'encrypted' => false,
				'columnName' => 'wet_gowns_replaced' 
			),
			array(
				'sql' => 'holes_in_gowns',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'holes_in_gowns' 
				),
				'encrypted' => false,
				'columnName' => 'holes_in_gowns' 
			),
			array(
				'sql' => 'torn_gowns_replaced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'torn_gowns_replaced' 
				),
				'encrypted' => false,
				'columnName' => 'torn_gowns_replaced' 
			),
			array(
				'sql' => 'holes_in_drapes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'holes_in_drapes' 
				),
				'encrypted' => false,
				'columnName' => 'holes_in_drapes' 
			),
			array(
				'sql' => 'drapes_replaced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'drapes_replaced' 
				),
				'encrypted' => false,
				'columnName' => 'drapes_replaced' 
			),
			array(
				'sql' => 'surgical_site_prep_method',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'surgical_site_prep_method' 
				),
				'encrypted' => false,
				'columnName' => 'surgical_site_prep_method' 
			),
			array(
				'sql' => 'vaginal_preparation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'vaginal_preparation' 
				),
				'encrypted' => false,
				'columnName' => 'vaginal_preparation' 
			),
			array(
				'sql' => 'antibiotics_given',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'antibiotics_given' 
				),
				'encrypted' => false,
				'columnName' => 'antibiotics_given' 
			),
			array(
				'sql' => 'antibiotics_admin_location',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'antibiotics_admin_location' 
				),
				'encrypted' => false,
				'columnName' => 'antibiotics_admin_location' 
			),
			array(
				'sql' => 'antibiotics_time',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'antibiotics_time' 
				),
				'encrypted' => false,
				'columnName' => 'antibiotics_time' 
			),
			array(
				'sql' => 'on_scheduled_antibiotics',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'on_scheduled_antibiotics' 
				),
				'encrypted' => false,
				'columnName' => 'on_scheduled_antibiotics' 
			),
			array(
				'sql' => 'antibiotic_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'antibiotic_type' 
				),
				'encrypted' => false,
				'columnName' => 'antibiotic_type' 
			),
			array(
				'sql' => 'timeout_read_aloud',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'timeout_read_aloud' 
				),
				'encrypted' => false,
				'columnName' => 'timeout_read_aloud' 
			),
			array(
				'sql' => 'operation_type_announced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'operation_type_announced' 
				),
				'encrypted' => false,
				'columnName' => 'operation_type_announced' 
			),
			array(
				'sql' => 'blood_loss_announced',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'blood_loss_announced' 
				),
				'encrypted' => false,
				'columnName' => 'blood_loss_announced' 
			),
			array(
				'sql' => 'estimated_blood_loss',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'estimated_blood_loss' 
				),
				'encrypted' => false,
				'columnName' => 'estimated_blood_loss' 
			),
			array(
				'sql' => 'time_of_incision',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'time_of_incision' 
				),
				'encrypted' => false,
				'columnName' => 'time_of_incision' 
			),
			array(
				'sql' => 'gauze_count_end_performed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gauze_count_end_performed' 
				),
				'encrypted' => false,
				'columnName' => 'gauze_count_end_performed' 
			),
			array(
				'sql' => 'gauze_count_end_total',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'gauze_count_end_total' 
				),
				'encrypted' => false,
				'columnName' => 'gauze_count_end_total' 
			),
			array(
				'sql' => 'time_dressing_applied',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'time_dressing_applied' 
				),
				'encrypted' => false,
				'columnName' => 'time_dressing_applied' 
			),
			array(
				'sql' => 'procedure_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'procedure_id' 
				),
				'encrypted' => false,
				'columnName' => 'procedure_id' 
			),
			array(
				'sql' => 'hardware_or_bioprosthetic_used',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'hardware_or_bioprosthetic_used' 
				),
				'encrypted' => false,
				'columnName' => 'hardware_or_bioprosthetic_used' 
			),
			array(
				'sql' => 'cesarean_indication',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'cesarean_indication' 
				),
				'encrypted' => false,
				'columnName' => 'cesarean_indication' 
			),
			array(
				'sql' => 'wound_closed_primarily',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'wound_closed_primarily' 
				),
				'encrypted' => false,
				'columnName' => 'wound_closed_primarily' 
			),
			array(
				'sql' => 'wound_classification',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'wound_classification' 
				),
				'encrypted' => false,
				'columnName' => 'wound_classification' 
			),
			array(
				'sql' => 'case_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'case_type' 
				),
				'encrypted' => false,
				'columnName' => 'case_type' 
			),
			array(
				'sql' => 'sign_out_read_aloud',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sign_out_read_aloud' 
				),
				'encrypted' => false,
				'columnName' => 'sign_out_read_aloud' 
			),
			array(
				'sql' => 'sign_out_in_theatre',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'sign_out_in_theatre' 
				),
				'encrypted' => false,
				'columnName' => 'sign_out_in_theatre' 
			),
			array(
				'sql' => 'unplanned_intubation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'unplanned_intubation' 
				),
				'encrypted' => false,
				'columnName' => 'unplanned_intubation' 
			),
			array(
				'sql' => 'urgent_tracheostomy',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'urgent_tracheostomy' 
				),
				'encrypted' => false,
				'columnName' => 'urgent_tracheostomy' 
			),
			array(
				'sql' => 'urgent_central_access',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'urgent_central_access' 
				),
				'encrypted' => false,
				'columnName' => 'urgent_central_access' 
			),
			array(
				'sql' => 'other_crisis_occurred',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'other_crisis_occurred' 
				),
				'encrypted' => false,
				'columnName' => 'other_crisis_occurred' 
			),
			array(
				'sql' => 'crisis_description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'crisis_description' 
				),
				'encrypted' => false,
				'columnName' => 'crisis_description' 
			),
			array(
				'sql' => 'death_in_or',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'death_in_or' 
				),
				'encrypted' => false,
				'columnName' => 'death_in_or' 
			),
			array(
				'sql' => 'fetal_death',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'fetal_death' 
				),
				'encrypted' => false,
				'columnName' => 'fetal_death' 
			),
			array(
				'sql' => 'created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => 'updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_cases',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".surgical_cases',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".surgical_cases',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'case_id',
						'facility_id',
						'country_id',
						'surgery_date',
						'data_type',
						'data_collector_name',
						'location_of_surgery',
						'patient_sex',
						'patient_asa_classification',
						'patient_dob',
						'patient_age',
						'diabetes',
						'hypertension',
						'obese',
						'malnourished',
						'smoker',
						'on_steroids',
						'admitted_to_icu',
						'hypothermic',
						'preoperative_diagnosis_id',
						'hours_since_injury',
						'sterilizable_drill_used',
						'drill_sterile_cover_used',
						'holes_in_sterile_cover',
						'sign_in_read_aloud',
						'sign_in_completed_before_anesthesia',
						'sterility_indicator_in_tray',
						'sterility_indicator_color_changed',
						'tray_wet_prior_to_operation',
						'tray_replaced',
						'gauze_count_performed',
						'gauze_count_total',
						'surgeon_scrubbed_hands',
						'handwashing_available',
						'alcohol_solution_applied',
						'new_surgical_gloves_used',
						'gown_sterility_indicator',
						'gown_indicator_color_changed',
						'gown_pack_replaced',
						'gowns_or_drapes_wet',
						'wet_gowns_replaced',
						'holes_in_gowns',
						'torn_gowns_replaced',
						'holes_in_drapes',
						'drapes_replaced',
						'surgical_site_prep_method',
						'vaginal_preparation',
						'antibiotics_given',
						'antibiotics_admin_location',
						'antibiotics_time',
						'on_scheduled_antibiotics',
						'antibiotic_type',
						'timeout_read_aloud',
						'operation_type_announced',
						'blood_loss_announced',
						'estimated_blood_loss',
						'time_of_incision',
						'gauze_count_end_performed',
						'gauze_count_end_total',
						'time_dressing_applied',
						'procedure_id',
						'hardware_or_bioprosthetic_used',
						'cesarean_indication',
						'wound_closed_primarily',
						'wound_classification',
						'case_type',
						'sign_out_read_aloud',
						'sign_out_in_theatre',
						'unplanned_intubation',
						'urgent_tracheostomy',
						'urgent_central_access',
						'other_crisis_occurred',
						'crisis_description',
						'death_in_or',
						'fetal_death',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.surgical_cases' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 15,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 16,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 17,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 18,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 19,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 20,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 21,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 22,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 23,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 24,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 25,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 26,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 27,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 28,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 29,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 30,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 31,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 32,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 33,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 34,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 35,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 36,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 37,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 38,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 39,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 40,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 41,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 42,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 43,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 44,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 45,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 46,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 47,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 48,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 49,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 50,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 51,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 52,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 53,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 54,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 55,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 56,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 57,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 58,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 59,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 60,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 61,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 62,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 63,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 64,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 65,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 66,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 67,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 68,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 69,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 70,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 71,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 72,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 73,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 74,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 75,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 76,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'case_id,
	facility_id,
	country_id,
	surgery_date,
	data_type,
	data_collector_name,
	location_of_surgery,
	patient_sex,
	patient_asa_classification,
	patient_dob,
	patient_age,
	diabetes,
	hypertension,
	obese,
	malnourished,
	smoker,
	on_steroids,
	admitted_to_icu,
	hypothermic,
	preoperative_diagnosis_id,
	hours_since_injury,
	sterilizable_drill_used,
	drill_sterile_cover_used,
	holes_in_sterile_cover,
	sign_in_read_aloud,
	sign_in_completed_before_anesthesia,
	sterility_indicator_in_tray,
	sterility_indicator_color_changed,
	tray_wet_prior_to_operation,
	tray_replaced,
	gauze_count_performed,
	gauze_count_total,
	surgeon_scrubbed_hands,
	handwashing_available,
	alcohol_solution_applied,
	new_surgical_gloves_used,
	gown_sterility_indicator,
	gown_indicator_color_changed,
	gown_pack_replaced,
	gowns_or_drapes_wet,
	wet_gowns_replaced,
	holes_in_gowns,
	torn_gowns_replaced,
	holes_in_drapes,
	drapes_replaced,
	surgical_site_prep_method,
	vaginal_preparation,
	antibiotics_given,
	antibiotics_admin_location,
	antibiotics_time,
	on_scheduled_antibiotics,
	antibiotic_type,
	timeout_read_aloud,
	operation_type_announced,
	blood_loss_announced,
	estimated_blood_loss,
	time_of_incision,
	gauze_count_end_performed,
	gauze_count_end_total,
	time_dressing_applied,
	procedure_id,
	hardware_or_bioprosthetic_used,
	cesarean_indication,
	wound_closed_primarily,
	wound_classification,
	case_type,
	sign_out_read_aloud,
	sign_out_in_theatre,
	unplanned_intubation,
	urgent_tracheostomy,
	urgent_central_access,
	other_crisis_occurred,
	crisis_description,
	death_in_or,
	fetal_death,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	"public".surgical_cases',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.surgical_cases',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'edit' => array( 
			'edit' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'list' => array( 
			'list' 
		),
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		),
		'view' => array( 
			'view' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'edit' => 'edit',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'case_id',
			'facility_id',
			'country_id',
			'surgery_date',
			'data_type',
			'data_collector_name',
			'location_of_surgery',
			'patient_sex',
			'patient_asa_classification',
			'patient_dob',
			'patient_age',
			'diabetes',
			'hypertension',
			'obese',
			'malnourished',
			'smoker',
			'on_steroids',
			'admitted_to_icu',
			'hypothermic',
			'preoperative_diagnosis_id',
			'hours_since_injury',
			'sterilizable_drill_used',
			'drill_sterile_cover_used',
			'holes_in_sterile_cover',
			'sign_in_read_aloud',
			'sign_in_completed_before_anesthesia',
			'sterility_indicator_in_tray',
			'sterility_indicator_color_changed',
			'tray_wet_prior_to_operation',
			'tray_replaced',
			'gauze_count_performed',
			'gauze_count_total',
			'surgeon_scrubbed_hands',
			'handwashing_available',
			'alcohol_solution_applied',
			'new_surgical_gloves_used',
			'gown_sterility_indicator',
			'gown_indicator_color_changed',
			'gown_pack_replaced',
			'gowns_or_drapes_wet',
			'wet_gowns_replaced',
			'holes_in_gowns',
			'torn_gowns_replaced',
			'holes_in_drapes',
			'drapes_replaced',
			'surgical_site_prep_method',
			'vaginal_preparation',
			'antibiotics_given',
			'antibiotics_admin_location',
			'antibiotics_time',
			'on_scheduled_antibiotics',
			'antibiotic_type',
			'timeout_read_aloud',
			'operation_type_announced',
			'blood_loss_announced',
			'estimated_blood_loss',
			'time_of_incision',
			'gauze_count_end_performed',
			'gauze_count_end_total',
			'time_dressing_applied',
			'procedure_id',
			'hardware_or_bioprosthetic_used',
			'cesarean_indication',
			'wound_closed_primarily',
			'wound_classification',
			'case_type',
			'sign_out_read_aloud',
			'sign_out_in_theatre',
			'unplanned_intubation',
			'urgent_tracheostomy',
			'urgent_central_access',
			'other_crisis_occurred',
			'crisis_description',
			'death_in_or',
			'fetal_death',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'case_id',
			'facility_id',
			'country_id',
			'surgery_date',
			'data_type',
			'data_collector_name',
			'location_of_surgery',
			'patient_sex',
			'patient_asa_classification',
			'patient_dob',
			'patient_age',
			'diabetes',
			'hypertension',
			'obese',
			'malnourished',
			'smoker',
			'on_steroids',
			'admitted_to_icu',
			'hypothermic',
			'preoperative_diagnosis_id',
			'hours_since_injury',
			'sterilizable_drill_used',
			'drill_sterile_cover_used',
			'holes_in_sterile_cover',
			'sign_in_read_aloud',
			'sign_in_completed_before_anesthesia',
			'sterility_indicator_in_tray',
			'sterility_indicator_color_changed',
			'tray_wet_prior_to_operation',
			'tray_replaced',
			'gauze_count_performed',
			'gauze_count_total',
			'surgeon_scrubbed_hands',
			'handwashing_available',
			'alcohol_solution_applied',
			'new_surgical_gloves_used',
			'gown_sterility_indicator',
			'gown_indicator_color_changed',
			'gown_pack_replaced',
			'gowns_or_drapes_wet',
			'wet_gowns_replaced',
			'holes_in_gowns',
			'torn_gowns_replaced',
			'holes_in_drapes',
			'drapes_replaced',
			'surgical_site_prep_method',
			'vaginal_preparation',
			'antibiotics_given',
			'antibiotics_admin_location',
			'antibiotics_time',
			'on_scheduled_antibiotics',
			'antibiotic_type',
			'timeout_read_aloud',
			'operation_type_announced',
			'blood_loss_announced',
			'estimated_blood_loss',
			'time_of_incision',
			'gauze_count_end_performed',
			'gauze_count_end_total',
			'time_dressing_applied',
			'procedure_id',
			'hardware_or_bioprosthetic_used',
			'cesarean_indication',
			'wound_closed_primarily',
			'wound_classification',
			'case_type',
			'sign_out_read_aloud',
			'sign_out_in_theatre',
			'unplanned_intubation',
			'urgent_tracheostomy',
			'urgent_central_access',
			'other_crisis_occurred',
			'crisis_description',
			'death_in_or',
			'fetal_death',
			'created_at',
			'updated_at' 
		) 
	),
	'connId' => 'lifebox_mesystem_at_localhost',
	'sortByFields' => array(
		'sortOrder' => array( 
			 
		) 
	),
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['public.surgical_cases'] = array(
	'tableCaption' => 'Surgical Cases',
	'fieldLabels' => array(
		'case_id' => 'Case Id',
		'facility_id' => 'Facility Id',
		'country_id' => 'Country Id',
		'surgery_date' => 'Surgery Date',
		'data_type' => 'Data Type',
		'data_collector_name' => 'Data Collector Name',
		'location_of_surgery' => 'Location Of Surgery',
		'patient_sex' => 'Patient Sex',
		'patient_asa_classification' => 'Patient Asa Classification',
		'patient_dob' => 'Patient Dob',
		'patient_age' => 'Patient Age',
		'diabetes' => 'Diabetes',
		'hypertension' => 'Hypertension',
		'obese' => 'Obese',
		'malnourished' => 'Malnourished',
		'smoker' => 'Smoker',
		'on_steroids' => 'On Steroids',
		'admitted_to_icu' => 'Admitted To Icu',
		'hypothermic' => 'Hypothermic',
		'preoperative_diagnosis_id' => 'Preoperative Diagnosis Id',
		'hours_since_injury' => 'Hours Since Injury',
		'sterilizable_drill_used' => 'Sterilizable Drill Used',
		'drill_sterile_cover_used' => 'Drill Sterile Cover Used',
		'holes_in_sterile_cover' => 'Holes In Sterile Cover',
		'sign_in_read_aloud' => 'Sign In Read Aloud',
		'sign_in_completed_before_anesthesia' => 'Sign In Completed Before Anesthesia',
		'sterility_indicator_in_tray' => 'Sterility Indicator In Tray',
		'sterility_indicator_color_changed' => 'Sterility Indicator Color Changed',
		'tray_wet_prior_to_operation' => 'Tray Wet Prior To Operation',
		'tray_replaced' => 'Tray Replaced',
		'gauze_count_performed' => 'Gauze Count Performed',
		'gauze_count_total' => 'Gauze Count Total',
		'surgeon_scrubbed_hands' => 'Surgeon Scrubbed Hands',
		'handwashing_available' => 'Handwashing Available',
		'alcohol_solution_applied' => 'Alcohol Solution Applied',
		'new_surgical_gloves_used' => 'New Surgical Gloves Used',
		'gown_sterility_indicator' => 'Gown Sterility Indicator',
		'gown_indicator_color_changed' => 'Gown Indicator Color Changed',
		'gown_pack_replaced' => 'Gown Pack Replaced',
		'gowns_or_drapes_wet' => 'Gowns Or Drapes Wet',
		'wet_gowns_replaced' => 'Wet Gowns Replaced',
		'holes_in_gowns' => 'Holes In Gowns',
		'torn_gowns_replaced' => 'Torn Gowns Replaced',
		'holes_in_drapes' => 'Holes In Drapes',
		'drapes_replaced' => 'Drapes Replaced',
		'surgical_site_prep_method' => 'Surgical Site Prep Method',
		'vaginal_preparation' => 'Vaginal Preparation',
		'antibiotics_given' => 'Antibiotics Given',
		'antibiotics_admin_location' => 'Antibiotics Admin Location',
		'antibiotics_time' => 'Antibiotics Time',
		'on_scheduled_antibiotics' => 'On Scheduled Antibiotics',
		'antibiotic_type' => 'Antibiotic Type',
		'timeout_read_aloud' => 'Timeout Read Aloud',
		'operation_type_announced' => 'Operation Type Announced',
		'blood_loss_announced' => 'Blood Loss Announced',
		'estimated_blood_loss' => 'Estimated Blood Loss',
		'time_of_incision' => 'Time Of Incision',
		'gauze_count_end_performed' => 'Gauze Count End Performed',
		'gauze_count_end_total' => 'Gauze Count End Total',
		'time_dressing_applied' => 'Time Dressing Applied',
		'procedure_id' => 'Procedure Id',
		'hardware_or_bioprosthetic_used' => 'Hardware Or Bioprosthetic Used',
		'cesarean_indication' => 'Cesarean Indication',
		'wound_closed_primarily' => 'Wound Closed Primarily',
		'wound_classification' => 'Wound Classification',
		'case_type' => 'Case Type',
		'sign_out_read_aloud' => 'Sign Out Read Aloud',
		'sign_out_in_theatre' => 'Sign Out In Theatre',
		'unplanned_intubation' => 'Unplanned Intubation',
		'urgent_tracheostomy' => 'Urgent Tracheostomy',
		'urgent_central_access' => 'Urgent Central Access',
		'other_crisis_occurred' => 'Other Crisis Occurred',
		'crisis_description' => 'Crisis Description',
		'death_in_or' => 'Death In Or',
		'fetal_death' => 'Fetal Death',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'case_id' => '',
		'facility_id' => '',
		'country_id' => '',
		'surgery_date' => '',
		'data_type' => '',
		'data_collector_name' => '',
		'location_of_surgery' => '',
		'patient_sex' => '',
		'patient_asa_classification' => '',
		'patient_dob' => '',
		'patient_age' => '',
		'diabetes' => '',
		'hypertension' => '',
		'obese' => '',
		'malnourished' => '',
		'smoker' => '',
		'on_steroids' => '',
		'admitted_to_icu' => '',
		'hypothermic' => '',
		'preoperative_diagnosis_id' => '',
		'hours_since_injury' => '',
		'sterilizable_drill_used' => '',
		'drill_sterile_cover_used' => '',
		'holes_in_sterile_cover' => '',
		'sign_in_read_aloud' => '',
		'sign_in_completed_before_anesthesia' => '',
		'sterility_indicator_in_tray' => '',
		'sterility_indicator_color_changed' => '',
		'tray_wet_prior_to_operation' => '',
		'tray_replaced' => '',
		'gauze_count_performed' => '',
		'gauze_count_total' => '',
		'surgeon_scrubbed_hands' => '',
		'handwashing_available' => '',
		'alcohol_solution_applied' => '',
		'new_surgical_gloves_used' => '',
		'gown_sterility_indicator' => '',
		'gown_indicator_color_changed' => '',
		'gown_pack_replaced' => '',
		'gowns_or_drapes_wet' => '',
		'wet_gowns_replaced' => '',
		'holes_in_gowns' => '',
		'torn_gowns_replaced' => '',
		'holes_in_drapes' => '',
		'drapes_replaced' => '',
		'surgical_site_prep_method' => '',
		'vaginal_preparation' => '',
		'antibiotics_given' => '',
		'antibiotics_admin_location' => '',
		'antibiotics_time' => '',
		'on_scheduled_antibiotics' => '',
		'antibiotic_type' => '',
		'timeout_read_aloud' => '',
		'operation_type_announced' => '',
		'blood_loss_announced' => '',
		'estimated_blood_loss' => '',
		'time_of_incision' => '',
		'gauze_count_end_performed' => '',
		'gauze_count_end_total' => '',
		'time_dressing_applied' => '',
		'procedure_id' => '',
		'hardware_or_bioprosthetic_used' => '',
		'cesarean_indication' => '',
		'wound_closed_primarily' => '',
		'wound_classification' => '',
		'case_type' => '',
		'sign_out_read_aloud' => '',
		'sign_out_in_theatre' => '',
		'unplanned_intubation' => '',
		'urgent_tracheostomy' => '',
		'urgent_central_access' => '',
		'other_crisis_occurred' => '',
		'crisis_description' => '',
		'death_in_or' => '',
		'fetal_death' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'case_id' => '',
		'facility_id' => '',
		'country_id' => '',
		'surgery_date' => '',
		'data_type' => '',
		'data_collector_name' => '',
		'location_of_surgery' => '',
		'patient_sex' => '',
		'patient_asa_classification' => '',
		'patient_dob' => '',
		'patient_age' => '',
		'diabetes' => '',
		'hypertension' => '',
		'obese' => '',
		'malnourished' => '',
		'smoker' => '',
		'on_steroids' => '',
		'admitted_to_icu' => '',
		'hypothermic' => '',
		'preoperative_diagnosis_id' => '',
		'hours_since_injury' => '',
		'sterilizable_drill_used' => '',
		'drill_sterile_cover_used' => '',
		'holes_in_sterile_cover' => '',
		'sign_in_read_aloud' => '',
		'sign_in_completed_before_anesthesia' => '',
		'sterility_indicator_in_tray' => '',
		'sterility_indicator_color_changed' => '',
		'tray_wet_prior_to_operation' => '',
		'tray_replaced' => '',
		'gauze_count_performed' => '',
		'gauze_count_total' => '',
		'surgeon_scrubbed_hands' => '',
		'handwashing_available' => '',
		'alcohol_solution_applied' => '',
		'new_surgical_gloves_used' => '',
		'gown_sterility_indicator' => '',
		'gown_indicator_color_changed' => '',
		'gown_pack_replaced' => '',
		'gowns_or_drapes_wet' => '',
		'wet_gowns_replaced' => '',
		'holes_in_gowns' => '',
		'torn_gowns_replaced' => '',
		'holes_in_drapes' => '',
		'drapes_replaced' => '',
		'surgical_site_prep_method' => '',
		'vaginal_preparation' => '',
		'antibiotics_given' => '',
		'antibiotics_admin_location' => '',
		'antibiotics_time' => '',
		'on_scheduled_antibiotics' => '',
		'antibiotic_type' => '',
		'timeout_read_aloud' => '',
		'operation_type_announced' => '',
		'blood_loss_announced' => '',
		'estimated_blood_loss' => '',
		'time_of_incision' => '',
		'gauze_count_end_performed' => '',
		'gauze_count_end_total' => '',
		'time_dressing_applied' => '',
		'procedure_id' => '',
		'hardware_or_bioprosthetic_used' => '',
		'cesarean_indication' => '',
		'wound_closed_primarily' => '',
		'wound_classification' => '',
		'case_type' => '',
		'sign_out_read_aloud' => '',
		'sign_out_in_theatre' => '',
		'unplanned_intubation' => '',
		'urgent_tracheostomy' => '',
		'urgent_central_access' => '',
		'other_crisis_occurred' => '',
		'crisis_description' => '',
		'death_in_or' => '',
		'fetal_death' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>