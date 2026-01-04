<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'details' => array(
		'public.case_antibiotics' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'public.follow_ups' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		),
		'public.ward_rounds' => array(
			'displayPreview' => 2,
			'previewPageId' => '' 
		) 
	),
	'master' => array(
		'public.facilities' => array(
			'preview' => false 
		),
		'public.countries' => array(
			'preview' => false 
		),
		'public.diagnoses' => array(
			'preview' => false 
		),
		'public.procedures' => array(
			'preview' => false 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'case_id' => array( 
				'integrated_edit_field' 
			),
			'facility_id' => array( 
				'integrated_edit_field1' 
			),
			'country_id' => array( 
				'integrated_edit_field2' 
			),
			'surgery_date' => array( 
				'integrated_edit_field3' 
			),
			'data_type' => array( 
				'integrated_edit_field4' 
			),
			'data_collector_name' => array( 
				'integrated_edit_field5' 
			),
			'location_of_surgery' => array( 
				'integrated_edit_field6' 
			),
			'patient_sex' => array( 
				'integrated_edit_field7' 
			),
			'patient_asa_classification' => array( 
				'integrated_edit_field8' 
			),
			'patient_dob' => array( 
				'integrated_edit_field9' 
			),
			'patient_age' => array( 
				'integrated_edit_field10' 
			),
			'diabetes' => array( 
				'integrated_edit_field11' 
			),
			'hypertension' => array( 
				'integrated_edit_field12' 
			),
			'obese' => array( 
				'integrated_edit_field13' 
			),
			'malnourished' => array( 
				'integrated_edit_field14' 
			),
			'smoker' => array( 
				'integrated_edit_field15' 
			),
			'on_steroids' => array( 
				'integrated_edit_field16' 
			),
			'admitted_to_icu' => array( 
				'integrated_edit_field17' 
			),
			'hypothermic' => array( 
				'integrated_edit_field18' 
			),
			'preoperative_diagnosis_id' => array( 
				'integrated_edit_field19' 
			),
			'hours_since_injury' => array( 
				'integrated_edit_field20' 
			),
			'sterilizable_drill_used' => array( 
				'integrated_edit_field21' 
			),
			'drill_sterile_cover_used' => array( 
				'integrated_edit_field22' 
			),
			'holes_in_sterile_cover' => array( 
				'integrated_edit_field23' 
			),
			'sign_in_read_aloud' => array( 
				'integrated_edit_field24' 
			),
			'sign_in_completed_before_anesthesia' => array( 
				'integrated_edit_field25' 
			),
			'sterility_indicator_in_tray' => array( 
				'integrated_edit_field26' 
			),
			'sterility_indicator_color_changed' => array( 
				'integrated_edit_field27' 
			),
			'tray_wet_prior_to_operation' => array( 
				'integrated_edit_field28' 
			),
			'tray_replaced' => array( 
				'integrated_edit_field29' 
			),
			'gauze_count_performed' => array( 
				'integrated_edit_field30' 
			),
			'gauze_count_total' => array( 
				'integrated_edit_field31' 
			),
			'surgeon_scrubbed_hands' => array( 
				'integrated_edit_field32' 
			),
			'handwashing_available' => array( 
				'integrated_edit_field33' 
			),
			'alcohol_solution_applied' => array( 
				'integrated_edit_field34' 
			),
			'new_surgical_gloves_used' => array( 
				'integrated_edit_field35' 
			),
			'gown_sterility_indicator' => array( 
				'integrated_edit_field36' 
			),
			'gown_indicator_color_changed' => array( 
				'integrated_edit_field37' 
			),
			'gown_pack_replaced' => array( 
				'integrated_edit_field38' 
			),
			'gowns_or_drapes_wet' => array( 
				'integrated_edit_field39' 
			),
			'wet_gowns_replaced' => array( 
				'integrated_edit_field40' 
			),
			'holes_in_gowns' => array( 
				'integrated_edit_field41' 
			),
			'torn_gowns_replaced' => array( 
				'integrated_edit_field42' 
			),
			'holes_in_drapes' => array( 
				'integrated_edit_field43' 
			),
			'drapes_replaced' => array( 
				'integrated_edit_field44' 
			),
			'surgical_site_prep_method' => array( 
				'integrated_edit_field45' 
			),
			'vaginal_preparation' => array( 
				'integrated_edit_field46' 
			),
			'antibiotics_given' => array( 
				'integrated_edit_field47' 
			),
			'antibiotics_admin_location' => array( 
				'integrated_edit_field48' 
			),
			'antibiotics_time' => array( 
				'integrated_edit_field49' 
			),
			'on_scheduled_antibiotics' => array( 
				'integrated_edit_field50' 
			),
			'antibiotic_type' => array( 
				'integrated_edit_field51' 
			),
			'timeout_read_aloud' => array( 
				'integrated_edit_field52' 
			),
			'operation_type_announced' => array( 
				'integrated_edit_field53' 
			),
			'blood_loss_announced' => array( 
				'integrated_edit_field54' 
			),
			'estimated_blood_loss' => array( 
				'integrated_edit_field55' 
			),
			'time_of_incision' => array( 
				'integrated_edit_field56' 
			),
			'gauze_count_end_performed' => array( 
				'integrated_edit_field57' 
			),
			'gauze_count_end_total' => array( 
				'integrated_edit_field58' 
			),
			'time_dressing_applied' => array( 
				'integrated_edit_field59' 
			),
			'procedure_id' => array( 
				'integrated_edit_field60' 
			),
			'hardware_or_bioprosthetic_used' => array( 
				'integrated_edit_field61' 
			),
			'cesarean_indication' => array( 
				'integrated_edit_field62' 
			),
			'wound_closed_primarily' => array( 
				'integrated_edit_field63' 
			),
			'wound_classification' => array( 
				'integrated_edit_field64' 
			),
			'case_type' => array( 
				'integrated_edit_field65' 
			),
			'sign_out_read_aloud' => array( 
				'integrated_edit_field66' 
			),
			'sign_out_in_theatre' => array( 
				'integrated_edit_field67' 
			),
			'unplanned_intubation' => array( 
				'integrated_edit_field68' 
			),
			'urgent_tracheostomy' => array( 
				'integrated_edit_field69' 
			),
			'urgent_central_access' => array( 
				'integrated_edit_field70' 
			),
			'other_crisis_occurred' => array( 
				'integrated_edit_field71' 
			),
			'crisis_description' => array( 
				'integrated_edit_field72' 
			),
			'death_in_or' => array( 
				'integrated_edit_field73' 
			),
			'fetal_death' => array( 
				'integrated_edit_field74' 
			),
			'created_at' => array( 
				'integrated_edit_field75' 
			),
			'updated_at' => array( 
				'integrated_edit_field76' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					'view_back_list',
					'view_close',
					'hamburger' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'loginform_login',
					'username_button' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'integrated_edit_field',
					'integrated_edit_field1',
					'integrated_edit_field2',
					'integrated_edit_field3',
					'integrated_edit_field4',
					'integrated_edit_field5',
					'integrated_edit_field6',
					'integrated_edit_field7',
					'integrated_edit_field8',
					'integrated_edit_field9',
					'integrated_edit_field10',
					'integrated_edit_field11',
					'integrated_edit_field12',
					'integrated_edit_field13',
					'integrated_edit_field14',
					'integrated_edit_field15',
					'integrated_edit_field16',
					'integrated_edit_field17',
					'integrated_edit_field18',
					'integrated_edit_field19',
					'integrated_edit_field20',
					'integrated_edit_field21',
					'integrated_edit_field22',
					'integrated_edit_field23',
					'integrated_edit_field24',
					'integrated_edit_field25',
					'integrated_edit_field26',
					'integrated_edit_field27',
					'integrated_edit_field28',
					'integrated_edit_field29',
					'integrated_edit_field30',
					'integrated_edit_field31',
					'integrated_edit_field32',
					'integrated_edit_field33',
					'integrated_edit_field34',
					'integrated_edit_field35',
					'integrated_edit_field36',
					'integrated_edit_field37',
					'integrated_edit_field38',
					'integrated_edit_field39',
					'integrated_edit_field40',
					'integrated_edit_field41',
					'integrated_edit_field42',
					'integrated_edit_field43',
					'integrated_edit_field44',
					'integrated_edit_field45',
					'integrated_edit_field46',
					'integrated_edit_field47',
					'integrated_edit_field48',
					'integrated_edit_field49',
					'integrated_edit_field50',
					'integrated_edit_field51',
					'integrated_edit_field52',
					'integrated_edit_field53',
					'integrated_edit_field54',
					'integrated_edit_field55',
					'integrated_edit_field56',
					'integrated_edit_field57',
					'integrated_edit_field58',
					'integrated_edit_field59',
					'integrated_edit_field60',
					'integrated_edit_field61',
					'integrated_edit_field62',
					'integrated_edit_field63',
					'integrated_edit_field64',
					'integrated_edit_field65',
					'integrated_edit_field66',
					'integrated_edit_field67',
					'integrated_edit_field68',
					'integrated_edit_field69',
					'integrated_edit_field70',
					'integrated_edit_field71',
					'integrated_edit_field72',
					'integrated_edit_field73',
					'integrated_edit_field74',
					'integrated_edit_field75',
					'integrated_edit_field76' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'view_back_list' => 'below-grid',
				'view_close' => 'below-grid',
				'hamburger' => 'below-grid',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'view_header' => 'top',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field7' => 'grid',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field11' => 'grid',
				'integrated_edit_field12' => 'grid',
				'integrated_edit_field13' => 'grid',
				'integrated_edit_field14' => 'grid',
				'integrated_edit_field15' => 'grid',
				'integrated_edit_field16' => 'grid',
				'integrated_edit_field17' => 'grid',
				'integrated_edit_field18' => 'grid',
				'integrated_edit_field19' => 'grid',
				'integrated_edit_field20' => 'grid',
				'integrated_edit_field21' => 'grid',
				'integrated_edit_field22' => 'grid',
				'integrated_edit_field23' => 'grid',
				'integrated_edit_field24' => 'grid',
				'integrated_edit_field25' => 'grid',
				'integrated_edit_field26' => 'grid',
				'integrated_edit_field27' => 'grid',
				'integrated_edit_field28' => 'grid',
				'integrated_edit_field29' => 'grid',
				'integrated_edit_field30' => 'grid',
				'integrated_edit_field31' => 'grid',
				'integrated_edit_field32' => 'grid',
				'integrated_edit_field33' => 'grid',
				'integrated_edit_field34' => 'grid',
				'integrated_edit_field35' => 'grid',
				'integrated_edit_field36' => 'grid',
				'integrated_edit_field37' => 'grid',
				'integrated_edit_field38' => 'grid',
				'integrated_edit_field39' => 'grid',
				'integrated_edit_field40' => 'grid',
				'integrated_edit_field41' => 'grid',
				'integrated_edit_field42' => 'grid',
				'integrated_edit_field43' => 'grid',
				'integrated_edit_field44' => 'grid',
				'integrated_edit_field45' => 'grid',
				'integrated_edit_field46' => 'grid',
				'integrated_edit_field47' => 'grid',
				'integrated_edit_field48' => 'grid',
				'integrated_edit_field49' => 'grid',
				'integrated_edit_field50' => 'grid',
				'integrated_edit_field51' => 'grid',
				'integrated_edit_field52' => 'grid',
				'integrated_edit_field53' => 'grid',
				'integrated_edit_field54' => 'grid',
				'integrated_edit_field55' => 'grid',
				'integrated_edit_field56' => 'grid',
				'integrated_edit_field57' => 'grid',
				'integrated_edit_field58' => 'grid',
				'integrated_edit_field59' => 'grid',
				'integrated_edit_field60' => 'grid',
				'integrated_edit_field61' => 'grid',
				'integrated_edit_field62' => 'grid',
				'integrated_edit_field63' => 'grid',
				'integrated_edit_field64' => 'grid',
				'integrated_edit_field65' => 'grid',
				'integrated_edit_field66' => 'grid',
				'integrated_edit_field67' => 'grid',
				'integrated_edit_field68' => 'grid',
				'integrated_edit_field69' => 'grid',
				'integrated_edit_field70' => 'grid',
				'integrated_edit_field71' => 'grid',
				'integrated_edit_field72' => 'grid',
				'integrated_edit_field73' => 'grid',
				'integrated_edit_field74' => 'grid',
				'integrated_edit_field75' => 'grid',
				'integrated_edit_field76' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field7' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field11' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field12' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field13' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field14' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field15' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field16' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field17' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field18' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field19' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field20' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field21' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field22' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field23' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field24' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field25' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field26' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field27' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field28' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field29' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field30' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field31' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field32' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field33' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field34' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field35' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field36' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field37' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field38' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field39' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field40' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field41' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field42' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field43' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field44' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field45' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field46' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field47' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field48' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field49' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field50' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field51' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field52' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field53' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field54' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field55' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field56' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field57' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field58' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field59' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field60' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field61' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field62' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field63' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field64' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field65' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field66' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field67' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field68' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field69' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field70' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field71' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field72' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field73' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field74' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field75' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field76' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				) 
			),
			'itemVisiblity' => array(
				'expand_menu_button' => 2,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'view_header' => array( 
				'view_header' 
			),
			'view_back_list' => array( 
				'view_back_list' 
			),
			'view_close' => array( 
				'view_close' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'view_edit' => array( 
				'view_edit' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field7',
				'integrated_edit_field8',
				'integrated_edit_field9',
				'integrated_edit_field10',
				'integrated_edit_field11',
				'integrated_edit_field12',
				'integrated_edit_field13',
				'integrated_edit_field14',
				'integrated_edit_field15',
				'integrated_edit_field16',
				'integrated_edit_field17',
				'integrated_edit_field18',
				'integrated_edit_field19',
				'integrated_edit_field20',
				'integrated_edit_field21',
				'integrated_edit_field22',
				'integrated_edit_field23',
				'integrated_edit_field24',
				'integrated_edit_field25',
				'integrated_edit_field26',
				'integrated_edit_field27',
				'integrated_edit_field28',
				'integrated_edit_field29',
				'integrated_edit_field30',
				'integrated_edit_field31',
				'integrated_edit_field32',
				'integrated_edit_field33',
				'integrated_edit_field34',
				'integrated_edit_field35',
				'integrated_edit_field36',
				'integrated_edit_field37',
				'integrated_edit_field38',
				'integrated_edit_field39',
				'integrated_edit_field40',
				'integrated_edit_field41',
				'integrated_edit_field42',
				'integrated_edit_field43',
				'integrated_edit_field44',
				'integrated_edit_field45',
				'integrated_edit_field46',
				'integrated_edit_field47',
				'integrated_edit_field48',
				'integrated_edit_field49',
				'integrated_edit_field50',
				'integrated_edit_field51',
				'integrated_edit_field52',
				'integrated_edit_field53',
				'integrated_edit_field54',
				'integrated_edit_field55',
				'integrated_edit_field56',
				'integrated_edit_field57',
				'integrated_edit_field58',
				'integrated_edit_field59',
				'integrated_edit_field60',
				'integrated_edit_field61',
				'integrated_edit_field62',
				'integrated_edit_field63',
				'integrated_edit_field64',
				'integrated_edit_field65',
				'integrated_edit_field66',
				'integrated_edit_field67',
				'integrated_edit_field68',
				'integrated_edit_field69',
				'integrated_edit_field70',
				'integrated_edit_field71',
				'integrated_edit_field72',
				'integrated_edit_field73',
				'integrated_edit_field74',
				'integrated_edit_field75',
				'integrated_edit_field76' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'adminarea_link' => array( 
				'adminarea_link' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field',
							'integrated_edit_field1',
							'integrated_edit_field2',
							'integrated_edit_field3',
							'integrated_edit_field4',
							'integrated_edit_field5',
							'integrated_edit_field6',
							'integrated_edit_field7',
							'integrated_edit_field8',
							'integrated_edit_field9',
							'integrated_edit_field10',
							'integrated_edit_field11',
							'integrated_edit_field12',
							'integrated_edit_field13',
							'integrated_edit_field14',
							'integrated_edit_field15',
							'integrated_edit_field16',
							'integrated_edit_field17',
							'integrated_edit_field18',
							'integrated_edit_field19',
							'integrated_edit_field20',
							'integrated_edit_field21',
							'integrated_edit_field22',
							'integrated_edit_field23',
							'integrated_edit_field24',
							'integrated_edit_field25',
							'integrated_edit_field26',
							'integrated_edit_field27',
							'integrated_edit_field28',
							'integrated_edit_field29',
							'integrated_edit_field30',
							'integrated_edit_field31',
							'integrated_edit_field32',
							'integrated_edit_field33',
							'integrated_edit_field34',
							'integrated_edit_field35',
							'integrated_edit_field36',
							'integrated_edit_field37',
							'integrated_edit_field38',
							'integrated_edit_field39',
							'integrated_edit_field40',
							'integrated_edit_field41',
							'integrated_edit_field42',
							'integrated_edit_field43',
							'integrated_edit_field44',
							'integrated_edit_field45',
							'integrated_edit_field46',
							'integrated_edit_field47',
							'integrated_edit_field48',
							'integrated_edit_field49',
							'integrated_edit_field50',
							'integrated_edit_field51',
							'integrated_edit_field52',
							'integrated_edit_field53',
							'integrated_edit_field54',
							'integrated_edit_field55',
							'integrated_edit_field56',
							'integrated_edit_field57',
							'integrated_edit_field58',
							'integrated_edit_field59',
							'integrated_edit_field60',
							'integrated_edit_field61',
							'integrated_edit_field62',
							'integrated_edit_field63',
							'integrated_edit_field64',
							'integrated_edit_field65',
							'integrated_edit_field66',
							'integrated_edit_field67',
							'integrated_edit_field68',
							'integrated_edit_field69',
							'integrated_edit_field70',
							'integrated_edit_field71',
							'integrated_edit_field72',
							'integrated_edit_field73',
							'integrated_edit_field74',
							'integrated_edit_field75',
							'integrated_edit_field76' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'view',
		'breadcrumb' => false,
		'nextPrev' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'view',
	'type' => 'view',
	'layoutId' => 'leftbar',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'view-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 2 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'view-below-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_back_list',
						'view_close' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'hamburger' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'expand_menu_button',
						'collapse_button' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'loginform_login',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'view-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'view_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field',
						'integrated_edit_field1',
						'integrated_edit_field2',
						'integrated_edit_field3',
						'integrated_edit_field4',
						'integrated_edit_field5',
						'integrated_edit_field6',
						'integrated_edit_field7',
						'integrated_edit_field8',
						'integrated_edit_field9',
						'integrated_edit_field10',
						'integrated_edit_field11',
						'integrated_edit_field12',
						'integrated_edit_field13',
						'integrated_edit_field14',
						'integrated_edit_field15',
						'integrated_edit_field16',
						'integrated_edit_field17',
						'integrated_edit_field18',
						'integrated_edit_field19',
						'integrated_edit_field20',
						'integrated_edit_field21',
						'integrated_edit_field22',
						'integrated_edit_field23',
						'integrated_edit_field24',
						'integrated_edit_field25',
						'integrated_edit_field26',
						'integrated_edit_field27',
						'integrated_edit_field28',
						'integrated_edit_field29',
						'integrated_edit_field30',
						'integrated_edit_field31',
						'integrated_edit_field32',
						'integrated_edit_field33',
						'integrated_edit_field34',
						'integrated_edit_field35',
						'integrated_edit_field36',
						'integrated_edit_field37',
						'integrated_edit_field38',
						'integrated_edit_field39',
						'integrated_edit_field40',
						'integrated_edit_field41',
						'integrated_edit_field42',
						'integrated_edit_field43',
						'integrated_edit_field44',
						'integrated_edit_field45',
						'integrated_edit_field46',
						'integrated_edit_field47',
						'integrated_edit_field48',
						'integrated_edit_field49',
						'integrated_edit_field50',
						'integrated_edit_field51',
						'integrated_edit_field52',
						'integrated_edit_field53',
						'integrated_edit_field54',
						'integrated_edit_field55',
						'integrated_edit_field56',
						'integrated_edit_field57',
						'integrated_edit_field58',
						'integrated_edit_field59',
						'integrated_edit_field60',
						'integrated_edit_field61',
						'integrated_edit_field62',
						'integrated_edit_field63',
						'integrated_edit_field64',
						'integrated_edit_field65',
						'integrated_edit_field66',
						'integrated_edit_field67',
						'integrated_edit_field68',
						'integrated_edit_field69',
						'integrated_edit_field70',
						'integrated_edit_field71',
						'integrated_edit_field72',
						'integrated_edit_field73',
						'integrated_edit_field74',
						'integrated_edit_field75',
						'integrated_edit_field76' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		) 
	),
	'items' => array(
		'view_header' => array(
			'type' => 'view_header' 
		),
		'view_back_list' => array(
			'type' => 'view_back_list' 
		),
		'view_close' => array(
			'type' => 'view_close' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'view_edit' 
			) 
		),
		'view_edit' => array(
			'type' => 'view_edit' 
		),
		'integrated_edit_field' => array(
			'field' => 'case_id',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field1' => array(
			'field' => 'facility_id',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field2' => array(
			'field' => 'country_id',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'surgery_date',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field4' => array(
			'field' => 'data_type',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field5' => array(
			'field' => 'data_collector_name',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field6' => array(
			'field' => 'location_of_surgery',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field7' => array(
			'field' => 'patient_sex',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field8' => array(
			'field' => 'patient_asa_classification',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field9' => array(
			'field' => 'patient_dob',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field10' => array(
			'field' => 'patient_age',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field11' => array(
			'field' => 'diabetes',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field12' => array(
			'field' => 'hypertension',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field13' => array(
			'field' => 'obese',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field14' => array(
			'field' => 'malnourished',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field15' => array(
			'field' => 'smoker',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field16' => array(
			'field' => 'on_steroids',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field17' => array(
			'field' => 'admitted_to_icu',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field18' => array(
			'field' => 'hypothermic',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field19' => array(
			'field' => 'preoperative_diagnosis_id',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field20' => array(
			'field' => 'hours_since_injury',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field21' => array(
			'field' => 'sterilizable_drill_used',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field22' => array(
			'field' => 'drill_sterile_cover_used',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field23' => array(
			'field' => 'holes_in_sterile_cover',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field24' => array(
			'field' => 'sign_in_read_aloud',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field25' => array(
			'field' => 'sign_in_completed_before_anesthesia',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field26' => array(
			'field' => 'sterility_indicator_in_tray',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field27' => array(
			'field' => 'sterility_indicator_color_changed',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field28' => array(
			'field' => 'tray_wet_prior_to_operation',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field29' => array(
			'field' => 'tray_replaced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field30' => array(
			'field' => 'gauze_count_performed',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field31' => array(
			'field' => 'gauze_count_total',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field32' => array(
			'field' => 'surgeon_scrubbed_hands',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field33' => array(
			'field' => 'handwashing_available',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field34' => array(
			'field' => 'alcohol_solution_applied',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field35' => array(
			'field' => 'new_surgical_gloves_used',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field36' => array(
			'field' => 'gown_sterility_indicator',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field37' => array(
			'field' => 'gown_indicator_color_changed',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field38' => array(
			'field' => 'gown_pack_replaced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field39' => array(
			'field' => 'gowns_or_drapes_wet',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field40' => array(
			'field' => 'wet_gowns_replaced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field41' => array(
			'field' => 'holes_in_gowns',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field42' => array(
			'field' => 'torn_gowns_replaced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field43' => array(
			'field' => 'holes_in_drapes',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field44' => array(
			'field' => 'drapes_replaced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field45' => array(
			'field' => 'surgical_site_prep_method',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field46' => array(
			'field' => 'vaginal_preparation',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field47' => array(
			'field' => 'antibiotics_given',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field48' => array(
			'field' => 'antibiotics_admin_location',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field49' => array(
			'field' => 'antibiotics_time',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field50' => array(
			'field' => 'on_scheduled_antibiotics',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field51' => array(
			'field' => 'antibiotic_type',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field52' => array(
			'field' => 'timeout_read_aloud',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field53' => array(
			'field' => 'operation_type_announced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field54' => array(
			'field' => 'blood_loss_announced',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field55' => array(
			'field' => 'estimated_blood_loss',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field56' => array(
			'field' => 'time_of_incision',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field57' => array(
			'field' => 'gauze_count_end_performed',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field58' => array(
			'field' => 'gauze_count_end_total',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field59' => array(
			'field' => 'time_dressing_applied',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field60' => array(
			'field' => 'procedure_id',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field61' => array(
			'field' => 'hardware_or_bioprosthetic_used',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field62' => array(
			'field' => 'cesarean_indication',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field63' => array(
			'field' => 'wound_closed_primarily',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field64' => array(
			'field' => 'wound_classification',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field65' => array(
			'field' => 'case_type',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field66' => array(
			'field' => 'sign_out_read_aloud',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field67' => array(
			'field' => 'sign_out_in_theatre',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field68' => array(
			'field' => 'unplanned_intubation',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field69' => array(
			'field' => 'urgent_tracheostomy',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field70' => array(
			'field' => 'urgent_central_access',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field71' => array(
			'field' => 'other_crisis_occurred',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field72' => array(
			'field' => 'crisis_description',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field73' => array(
			'field' => 'death_in_or',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field74' => array(
			'field' => 'fetal_death',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field75' => array(
			'field' => 'created_at',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field76' => array(
			'field' => 'updated_at',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'adminarea_link',
				'changepassword_link' 
			) 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'adminarea_link' => array(
			'type' => 'adminarea_link' 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 14,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>