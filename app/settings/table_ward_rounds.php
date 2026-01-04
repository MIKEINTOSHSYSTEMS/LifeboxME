<?php
global $runnerTableSettings;
$runnerTableSettings['public.ward_rounds'] = array(
	'name' => 'public.ward_rounds',
	'shortName' => 'ward_rounds',
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
	'detailsBadgeColor' => 'DB7093',
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
	ward_round_id,
	case_id,
	facility_id,
	admission_date,
	rounding_date,
	data_collector_name,
	ward_name,
	ward_transfer,
	postop_day,
	dressing_not_removed,
	wound_clean_and_healthy,
	stitches_removed_or_wound_opened,
	wound_opened_spontaneously,
	pus_draining,
	abscess_present,
	redness_around_wound,
	bleeding,
	new_dressing,
	new_dressing_type,
	fever,
	on_antibiotics,
	antibiotics_prescribed,
	ssi_diagnosed_on_reoperation,
	returned_to_or,
	return_or_procedure,
	disposition,
	planned_reoperation,
	other_complications,
	endometritis,
	urinary_tract_infection,
	pneumonia,
	other_complication_description,
	eschar,
	discharged_today,
	discharge_date,
	death_in_ward,
	neonatal_death,
	created_at,
	updated_at
FROM "public".ward_rounds',
	'keyFields' => array( 
		'ward_round_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ward_round_id' => array(
			'name' => 'ward_round_id',
			'goodName' => 'ward_round_id',
			'strField' => 'ward_round_id',
			'sourceSingle' => 'ward_round_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ward_round_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
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
			'tableName' => 'public.ward_rounds' 
		),
		'case_id' => array(
			'name' => 'case_id',
			'goodName' => 'case_id',
			'strField' => 'case_id',
			'sourceSingle' => 'case_id',
			'index' => 2,
			'type' => 13,
			'sqlExpression' => 'case_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupTable' => 'public.surgical_cases',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'case_id',
					'lookupDisplayField' => 'case_id',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.ward_rounds' 
		),
		'facility_id' => array(
			'name' => 'facility_id',
			'goodName' => 'facility_id',
			'strField' => 'facility_id',
			'sourceSingle' => 'facility_id',
			'index' => 3,
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
			'tableName' => 'public.ward_rounds' 
		),
		'admission_date' => array(
			'name' => 'admission_date',
			'goodName' => 'admission_date',
			'strField' => 'admission_date',
			'sourceSingle' => 'admission_date',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'admission_date',
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
			'tableName' => 'public.ward_rounds' 
		),
		'rounding_date' => array(
			'name' => 'rounding_date',
			'goodName' => 'rounding_date',
			'strField' => 'rounding_date',
			'sourceSingle' => 'rounding_date',
			'index' => 5,
			'type' => 7,
			'sqlExpression' => 'rounding_date',
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
			'tableName' => 'public.ward_rounds' 
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
			'tableName' => 'public.ward_rounds' 
		),
		'ward_name' => array(
			'name' => 'ward_name',
			'goodName' => 'ward_name',
			'strField' => 'ward_name',
			'sourceSingle' => 'ward_name',
			'index' => 7,
			'sqlExpression' => 'ward_name',
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
			'tableName' => 'public.ward_rounds' 
		),
		'ward_transfer' => array(
			'name' => 'ward_transfer',
			'goodName' => 'ward_transfer',
			'strField' => 'ward_transfer',
			'sourceSingle' => 'ward_transfer',
			'index' => 8,
			'type' => 11,
			'sqlExpression' => 'ward_transfer',
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
			'tableName' => 'public.ward_rounds' 
		),
		'postop_day' => array(
			'name' => 'postop_day',
			'goodName' => 'postop_day',
			'strField' => 'postop_day',
			'sourceSingle' => 'postop_day',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'postop_day',
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
			'tableName' => 'public.ward_rounds' 
		),
		'dressing_not_removed' => array(
			'name' => 'dressing_not_removed',
			'goodName' => 'dressing_not_removed',
			'strField' => 'dressing_not_removed',
			'sourceSingle' => 'dressing_not_removed',
			'index' => 10,
			'type' => 11,
			'sqlExpression' => 'dressing_not_removed',
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
			'tableName' => 'public.ward_rounds' 
		),
		'wound_clean_and_healthy' => array(
			'name' => 'wound_clean_and_healthy',
			'goodName' => 'wound_clean_and_healthy',
			'strField' => 'wound_clean_and_healthy',
			'sourceSingle' => 'wound_clean_and_healthy',
			'index' => 11,
			'type' => 11,
			'sqlExpression' => 'wound_clean_and_healthy',
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
			'tableName' => 'public.ward_rounds' 
		),
		'stitches_removed_or_wound_opened' => array(
			'name' => 'stitches_removed_or_wound_opened',
			'goodName' => 'stitches_removed_or_wound_opened',
			'strField' => 'stitches_removed_or_wound_opened',
			'sourceSingle' => 'stitches_removed_or_wound_opened',
			'index' => 12,
			'type' => 11,
			'sqlExpression' => 'stitches_removed_or_wound_opened',
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
			'tableName' => 'public.ward_rounds' 
		),
		'wound_opened_spontaneously' => array(
			'name' => 'wound_opened_spontaneously',
			'goodName' => 'wound_opened_spontaneously',
			'strField' => 'wound_opened_spontaneously',
			'sourceSingle' => 'wound_opened_spontaneously',
			'index' => 13,
			'type' => 11,
			'sqlExpression' => 'wound_opened_spontaneously',
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
			'tableName' => 'public.ward_rounds' 
		),
		'pus_draining' => array(
			'name' => 'pus_draining',
			'goodName' => 'pus_draining',
			'strField' => 'pus_draining',
			'sourceSingle' => 'pus_draining',
			'index' => 14,
			'type' => 11,
			'sqlExpression' => 'pus_draining',
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
			'tableName' => 'public.ward_rounds' 
		),
		'abscess_present' => array(
			'name' => 'abscess_present',
			'goodName' => 'abscess_present',
			'strField' => 'abscess_present',
			'sourceSingle' => 'abscess_present',
			'index' => 15,
			'type' => 11,
			'sqlExpression' => 'abscess_present',
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
			'tableName' => 'public.ward_rounds' 
		),
		'redness_around_wound' => array(
			'name' => 'redness_around_wound',
			'goodName' => 'redness_around_wound',
			'strField' => 'redness_around_wound',
			'sourceSingle' => 'redness_around_wound',
			'index' => 16,
			'type' => 11,
			'sqlExpression' => 'redness_around_wound',
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
			'tableName' => 'public.ward_rounds' 
		),
		'bleeding' => array(
			'name' => 'bleeding',
			'goodName' => 'bleeding',
			'strField' => 'bleeding',
			'sourceSingle' => 'bleeding',
			'index' => 17,
			'type' => 11,
			'sqlExpression' => 'bleeding',
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
			'tableName' => 'public.ward_rounds' 
		),
		'new_dressing' => array(
			'name' => 'new_dressing',
			'goodName' => 'new_dressing',
			'strField' => 'new_dressing',
			'sourceSingle' => 'new_dressing',
			'index' => 18,
			'type' => 11,
			'sqlExpression' => 'new_dressing',
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
			'tableName' => 'public.ward_rounds' 
		),
		'new_dressing_type' => array(
			'name' => 'new_dressing_type',
			'goodName' => 'new_dressing_type',
			'strField' => 'new_dressing_type',
			'sourceSingle' => 'new_dressing_type',
			'index' => 19,
			'sqlExpression' => 'new_dressing_type',
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
			'tableName' => 'public.ward_rounds' 
		),
		'fever' => array(
			'name' => 'fever',
			'goodName' => 'fever',
			'strField' => 'fever',
			'sourceSingle' => 'fever',
			'index' => 20,
			'type' => 11,
			'sqlExpression' => 'fever',
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
			'tableName' => 'public.ward_rounds' 
		),
		'on_antibiotics' => array(
			'name' => 'on_antibiotics',
			'goodName' => 'on_antibiotics',
			'strField' => 'on_antibiotics',
			'sourceSingle' => 'on_antibiotics',
			'index' => 21,
			'type' => 11,
			'sqlExpression' => 'on_antibiotics',
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
			'tableName' => 'public.ward_rounds' 
		),
		'antibiotics_prescribed' => array(
			'name' => 'antibiotics_prescribed',
			'goodName' => 'antibiotics_prescribed',
			'strField' => 'antibiotics_prescribed',
			'sourceSingle' => 'antibiotics_prescribed',
			'index' => 22,
			'type' => 11,
			'sqlExpression' => 'antibiotics_prescribed',
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
			'tableName' => 'public.ward_rounds' 
		),
		'ssi_diagnosed_on_reoperation' => array(
			'name' => 'ssi_diagnosed_on_reoperation',
			'goodName' => 'ssi_diagnosed_on_reoperation',
			'strField' => 'ssi_diagnosed_on_reoperation',
			'sourceSingle' => 'ssi_diagnosed_on_reoperation',
			'index' => 23,
			'type' => 11,
			'sqlExpression' => 'ssi_diagnosed_on_reoperation',
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
			'tableName' => 'public.ward_rounds' 
		),
		'returned_to_or' => array(
			'name' => 'returned_to_or',
			'goodName' => 'returned_to_or',
			'strField' => 'returned_to_or',
			'sourceSingle' => 'returned_to_or',
			'index' => 24,
			'type' => 11,
			'sqlExpression' => 'returned_to_or',
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
			'tableName' => 'public.ward_rounds' 
		),
		'return_or_procedure' => array(
			'name' => 'return_or_procedure',
			'goodName' => 'return_or_procedure',
			'strField' => 'return_or_procedure',
			'sourceSingle' => 'return_or_procedure',
			'index' => 25,
			'sqlExpression' => 'return_or_procedure',
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
			'tableName' => 'public.ward_rounds' 
		),
		'disposition' => array(
			'name' => 'disposition',
			'goodName' => 'disposition',
			'strField' => 'disposition',
			'sourceSingle' => 'disposition',
			'index' => 26,
			'type' => 13,
			'sqlExpression' => 'disposition',
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
			'tableName' => 'public.ward_rounds' 
		),
		'planned_reoperation' => array(
			'name' => 'planned_reoperation',
			'goodName' => 'planned_reoperation',
			'strField' => 'planned_reoperation',
			'sourceSingle' => 'planned_reoperation',
			'index' => 27,
			'type' => 11,
			'sqlExpression' => 'planned_reoperation',
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
			'tableName' => 'public.ward_rounds' 
		),
		'other_complications' => array(
			'name' => 'other_complications',
			'goodName' => 'other_complications',
			'strField' => 'other_complications',
			'sourceSingle' => 'other_complications',
			'index' => 28,
			'type' => 11,
			'sqlExpression' => 'other_complications',
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
			'tableName' => 'public.ward_rounds' 
		),
		'endometritis' => array(
			'name' => 'endometritis',
			'goodName' => 'endometritis',
			'strField' => 'endometritis',
			'sourceSingle' => 'endometritis',
			'index' => 29,
			'type' => 11,
			'sqlExpression' => 'endometritis',
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
			'tableName' => 'public.ward_rounds' 
		),
		'urinary_tract_infection' => array(
			'name' => 'urinary_tract_infection',
			'goodName' => 'urinary_tract_infection',
			'strField' => 'urinary_tract_infection',
			'sourceSingle' => 'urinary_tract_infection',
			'index' => 30,
			'type' => 11,
			'sqlExpression' => 'urinary_tract_infection',
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
			'tableName' => 'public.ward_rounds' 
		),
		'pneumonia' => array(
			'name' => 'pneumonia',
			'goodName' => 'pneumonia',
			'strField' => 'pneumonia',
			'sourceSingle' => 'pneumonia',
			'index' => 31,
			'type' => 11,
			'sqlExpression' => 'pneumonia',
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
			'tableName' => 'public.ward_rounds' 
		),
		'other_complication_description' => array(
			'name' => 'other_complication_description',
			'goodName' => 'other_complication_description',
			'strField' => 'other_complication_description',
			'sourceSingle' => 'other_complication_description',
			'index' => 32,
			'type' => 201,
			'sqlExpression' => 'other_complication_description',
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
			'tableName' => 'public.ward_rounds' 
		),
		'eschar' => array(
			'name' => 'eschar',
			'goodName' => 'eschar',
			'strField' => 'eschar',
			'sourceSingle' => 'eschar',
			'index' => 33,
			'type' => 11,
			'sqlExpression' => 'eschar',
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
			'tableName' => 'public.ward_rounds' 
		),
		'discharged_today' => array(
			'name' => 'discharged_today',
			'goodName' => 'discharged_today',
			'strField' => 'discharged_today',
			'sourceSingle' => 'discharged_today',
			'index' => 34,
			'type' => 11,
			'sqlExpression' => 'discharged_today',
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
			'tableName' => 'public.ward_rounds' 
		),
		'discharge_date' => array(
			'name' => 'discharge_date',
			'goodName' => 'discharge_date',
			'strField' => 'discharge_date',
			'sourceSingle' => 'discharge_date',
			'index' => 35,
			'type' => 7,
			'sqlExpression' => 'discharge_date',
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
			'tableName' => 'public.ward_rounds' 
		),
		'death_in_ward' => array(
			'name' => 'death_in_ward',
			'goodName' => 'death_in_ward',
			'strField' => 'death_in_ward',
			'sourceSingle' => 'death_in_ward',
			'index' => 36,
			'type' => 11,
			'sqlExpression' => 'death_in_ward',
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
			'tableName' => 'public.ward_rounds' 
		),
		'neonatal_death' => array(
			'name' => 'neonatal_death',
			'goodName' => 'neonatal_death',
			'strField' => 'neonatal_death',
			'sourceSingle' => 'neonatal_death',
			'index' => 37,
			'type' => 11,
			'sqlExpression' => 'neonatal_death',
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
			'tableName' => 'public.ward_rounds' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 38,
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
			'tableName' => 'public.ward_rounds' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 39,
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
			'tableName' => 'public.ward_rounds' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.surgical_cases',
			'detailsKeys' => array( 
				'case_id' 
			),
			'masterKeys' => array( 
				'case_id' 
			) 
		),
		array(
			'table' => 'public.facilities',
			'detailsKeys' => array( 
				'facility_id' 
			),
			'masterKeys' => array( 
				'facility_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'public.ward_antibiotics' 
	),
	'query' => array(
		'sql' => 'SELECT
	ward_round_id,
	case_id,
	facility_id,
	admission_date,
	rounding_date,
	data_collector_name,
	ward_name,
	ward_transfer,
	postop_day,
	dressing_not_removed,
	wound_clean_and_healthy,
	stitches_removed_or_wound_opened,
	wound_opened_spontaneously,
	pus_draining,
	abscess_present,
	redness_around_wound,
	bleeding,
	new_dressing,
	new_dressing_type,
	fever,
	on_antibiotics,
	antibiotics_prescribed,
	ssi_diagnosed_on_reoperation,
	returned_to_or,
	return_or_procedure,
	disposition,
	planned_reoperation,
	other_complications,
	endometritis,
	urinary_tract_infection,
	pneumonia,
	other_complication_description,
	eschar,
	discharged_today,
	discharge_date,
	death_in_ward,
	neonatal_death,
	created_at,
	updated_at
FROM "public".ward_rounds',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ward_round_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'ward_round_id' 
				),
				'encrypted' => false,
				'columnName' => 'ward_round_id' 
			),
			array(
				'sql' => 'case_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
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
					'table' => 'public.ward_rounds',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
			),
			array(
				'sql' => 'admission_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'admission_date' 
				),
				'encrypted' => false,
				'columnName' => 'admission_date' 
			),
			array(
				'sql' => 'rounding_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'rounding_date' 
				),
				'encrypted' => false,
				'columnName' => 'rounding_date' 
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
					'table' => 'public.ward_rounds',
					'name' => 'data_collector_name' 
				),
				'encrypted' => false,
				'columnName' => 'data_collector_name' 
			),
			array(
				'sql' => 'ward_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'ward_name' 
				),
				'encrypted' => false,
				'columnName' => 'ward_name' 
			),
			array(
				'sql' => 'ward_transfer',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'ward_transfer' 
				),
				'encrypted' => false,
				'columnName' => 'ward_transfer' 
			),
			array(
				'sql' => 'postop_day',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'postop_day' 
				),
				'encrypted' => false,
				'columnName' => 'postop_day' 
			),
			array(
				'sql' => 'dressing_not_removed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'dressing_not_removed' 
				),
				'encrypted' => false,
				'columnName' => 'dressing_not_removed' 
			),
			array(
				'sql' => 'wound_clean_and_healthy',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'wound_clean_and_healthy' 
				),
				'encrypted' => false,
				'columnName' => 'wound_clean_and_healthy' 
			),
			array(
				'sql' => 'stitches_removed_or_wound_opened',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'stitches_removed_or_wound_opened' 
				),
				'encrypted' => false,
				'columnName' => 'stitches_removed_or_wound_opened' 
			),
			array(
				'sql' => 'wound_opened_spontaneously',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'wound_opened_spontaneously' 
				),
				'encrypted' => false,
				'columnName' => 'wound_opened_spontaneously' 
			),
			array(
				'sql' => 'pus_draining',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'pus_draining' 
				),
				'encrypted' => false,
				'columnName' => 'pus_draining' 
			),
			array(
				'sql' => 'abscess_present',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'abscess_present' 
				),
				'encrypted' => false,
				'columnName' => 'abscess_present' 
			),
			array(
				'sql' => 'redness_around_wound',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'redness_around_wound' 
				),
				'encrypted' => false,
				'columnName' => 'redness_around_wound' 
			),
			array(
				'sql' => 'bleeding',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'bleeding' 
				),
				'encrypted' => false,
				'columnName' => 'bleeding' 
			),
			array(
				'sql' => 'new_dressing',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'new_dressing' 
				),
				'encrypted' => false,
				'columnName' => 'new_dressing' 
			),
			array(
				'sql' => 'new_dressing_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'new_dressing_type' 
				),
				'encrypted' => false,
				'columnName' => 'new_dressing_type' 
			),
			array(
				'sql' => 'fever',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'fever' 
				),
				'encrypted' => false,
				'columnName' => 'fever' 
			),
			array(
				'sql' => 'on_antibiotics',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'on_antibiotics' 
				),
				'encrypted' => false,
				'columnName' => 'on_antibiotics' 
			),
			array(
				'sql' => 'antibiotics_prescribed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'antibiotics_prescribed' 
				),
				'encrypted' => false,
				'columnName' => 'antibiotics_prescribed' 
			),
			array(
				'sql' => 'ssi_diagnosed_on_reoperation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'ssi_diagnosed_on_reoperation' 
				),
				'encrypted' => false,
				'columnName' => 'ssi_diagnosed_on_reoperation' 
			),
			array(
				'sql' => 'returned_to_or',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'returned_to_or' 
				),
				'encrypted' => false,
				'columnName' => 'returned_to_or' 
			),
			array(
				'sql' => 'return_or_procedure',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'return_or_procedure' 
				),
				'encrypted' => false,
				'columnName' => 'return_or_procedure' 
			),
			array(
				'sql' => 'disposition',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'disposition' 
				),
				'encrypted' => false,
				'columnName' => 'disposition' 
			),
			array(
				'sql' => 'planned_reoperation',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'planned_reoperation' 
				),
				'encrypted' => false,
				'columnName' => 'planned_reoperation' 
			),
			array(
				'sql' => 'other_complications',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'other_complications' 
				),
				'encrypted' => false,
				'columnName' => 'other_complications' 
			),
			array(
				'sql' => 'endometritis',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'endometritis' 
				),
				'encrypted' => false,
				'columnName' => 'endometritis' 
			),
			array(
				'sql' => 'urinary_tract_infection',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'urinary_tract_infection' 
				),
				'encrypted' => false,
				'columnName' => 'urinary_tract_infection' 
			),
			array(
				'sql' => 'pneumonia',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'pneumonia' 
				),
				'encrypted' => false,
				'columnName' => 'pneumonia' 
			),
			array(
				'sql' => 'other_complication_description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'other_complication_description' 
				),
				'encrypted' => false,
				'columnName' => 'other_complication_description' 
			),
			array(
				'sql' => 'eschar',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'eschar' 
				),
				'encrypted' => false,
				'columnName' => 'eschar' 
			),
			array(
				'sql' => 'discharged_today',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'discharged_today' 
				),
				'encrypted' => false,
				'columnName' => 'discharged_today' 
			),
			array(
				'sql' => 'discharge_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'discharge_date' 
				),
				'encrypted' => false,
				'columnName' => 'discharge_date' 
			),
			array(
				'sql' => 'death_in_ward',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'death_in_ward' 
				),
				'encrypted' => false,
				'columnName' => 'death_in_ward' 
			),
			array(
				'sql' => 'neonatal_death',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_rounds',
					'name' => 'neonatal_death' 
				),
				'encrypted' => false,
				'columnName' => 'neonatal_death' 
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
					'table' => 'public.ward_rounds',
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
					'table' => 'public.ward_rounds',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".ward_rounds',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".ward_rounds',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ward_round_id',
						'case_id',
						'facility_id',
						'admission_date',
						'rounding_date',
						'data_collector_name',
						'ward_name',
						'ward_transfer',
						'postop_day',
						'dressing_not_removed',
						'wound_clean_and_healthy',
						'stitches_removed_or_wound_opened',
						'wound_opened_spontaneously',
						'pus_draining',
						'abscess_present',
						'redness_around_wound',
						'bleeding',
						'new_dressing',
						'new_dressing_type',
						'fever',
						'on_antibiotics',
						'antibiotics_prescribed',
						'ssi_diagnosed_on_reoperation',
						'returned_to_or',
						'return_or_procedure',
						'disposition',
						'planned_reoperation',
						'other_complications',
						'endometritis',
						'urinary_tract_infection',
						'pneumonia',
						'other_complication_description',
						'eschar',
						'discharged_today',
						'discharge_date',
						'death_in_ward',
						'neonatal_death',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.ward_rounds' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ward_round_id,
	case_id,
	facility_id,
	admission_date,
	rounding_date,
	data_collector_name,
	ward_name,
	ward_transfer,
	postop_day,
	dressing_not_removed,
	wound_clean_and_healthy,
	stitches_removed_or_wound_opened,
	wound_opened_spontaneously,
	pus_draining,
	abscess_present,
	redness_around_wound,
	bleeding,
	new_dressing,
	new_dressing_type,
	fever,
	on_antibiotics,
	antibiotics_prescribed,
	ssi_diagnosed_on_reoperation,
	returned_to_or,
	return_or_procedure,
	disposition,
	planned_reoperation,
	other_complications,
	endometritis,
	urinary_tract_infection,
	pneumonia,
	other_complication_description,
	eschar,
	discharged_today,
	discharge_date,
	death_in_ward,
	neonatal_death,
	created_at,
	updated_at',
		'fromListSql' => 'FROM "public".ward_rounds',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.ward_rounds',
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
			'ward_round_id',
			'case_id',
			'facility_id',
			'admission_date',
			'rounding_date',
			'data_collector_name',
			'ward_name',
			'ward_transfer',
			'postop_day',
			'dressing_not_removed',
			'wound_clean_and_healthy',
			'stitches_removed_or_wound_opened',
			'wound_opened_spontaneously',
			'pus_draining',
			'abscess_present',
			'redness_around_wound',
			'bleeding',
			'new_dressing',
			'new_dressing_type',
			'fever',
			'on_antibiotics',
			'antibiotics_prescribed',
			'ssi_diagnosed_on_reoperation',
			'returned_to_or',
			'return_or_procedure',
			'disposition',
			'planned_reoperation',
			'other_complications',
			'endometritis',
			'urinary_tract_infection',
			'pneumonia',
			'other_complication_description',
			'eschar',
			'discharged_today',
			'discharge_date',
			'death_in_ward',
			'neonatal_death',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ward_round_id',
			'case_id',
			'facility_id',
			'admission_date',
			'rounding_date',
			'data_collector_name',
			'ward_name',
			'ward_transfer',
			'postop_day',
			'dressing_not_removed',
			'wound_clean_and_healthy',
			'stitches_removed_or_wound_opened',
			'wound_opened_spontaneously',
			'pus_draining',
			'abscess_present',
			'redness_around_wound',
			'bleeding',
			'new_dressing',
			'new_dressing_type',
			'fever',
			'on_antibiotics',
			'antibiotics_prescribed',
			'ssi_diagnosed_on_reoperation',
			'returned_to_or',
			'return_or_procedure',
			'disposition',
			'planned_reoperation',
			'other_complications',
			'endometritis',
			'urinary_tract_infection',
			'pneumonia',
			'other_complication_description',
			'eschar',
			'discharged_today',
			'discharge_date',
			'death_in_ward',
			'neonatal_death',
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
	$runnerTableLabels['public.ward_rounds'] = array(
	'tableCaption' => 'Ward Rounds',
	'fieldLabels' => array(
		'ward_round_id' => 'Ward Round Id',
		'case_id' => 'Case Id',
		'facility_id' => 'Facility Id',
		'admission_date' => 'Admission Date',
		'rounding_date' => 'Rounding Date',
		'data_collector_name' => 'Data Collector Name',
		'ward_name' => 'Ward Name',
		'ward_transfer' => 'Ward Transfer',
		'postop_day' => 'Postop Day',
		'dressing_not_removed' => 'Dressing Not Removed',
		'wound_clean_and_healthy' => 'Wound Clean And Healthy',
		'stitches_removed_or_wound_opened' => 'Stitches Removed Or Wound Opened',
		'wound_opened_spontaneously' => 'Wound Opened Spontaneously',
		'pus_draining' => 'Pus Draining',
		'abscess_present' => 'Abscess Present',
		'redness_around_wound' => 'Redness Around Wound',
		'bleeding' => 'Bleeding',
		'new_dressing' => 'New Dressing',
		'new_dressing_type' => 'New Dressing Type',
		'fever' => 'Fever',
		'on_antibiotics' => 'On Antibiotics',
		'antibiotics_prescribed' => 'Antibiotics Prescribed',
		'ssi_diagnosed_on_reoperation' => 'Ssi Diagnosed On Reoperation',
		'returned_to_or' => 'Returned To Or',
		'return_or_procedure' => 'Return Or Procedure',
		'disposition' => 'Disposition',
		'planned_reoperation' => 'Planned Reoperation',
		'other_complications' => 'Other Complications',
		'endometritis' => 'Endometritis',
		'urinary_tract_infection' => 'Urinary Tract Infection',
		'pneumonia' => 'Pneumonia',
		'other_complication_description' => 'Other Complication Description',
		'eschar' => 'Eschar',
		'discharged_today' => 'Discharged Today',
		'discharge_date' => 'Discharge Date',
		'death_in_ward' => 'Death In Ward',
		'neonatal_death' => 'Neonatal Death',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'ward_round_id' => '',
		'case_id' => '',
		'facility_id' => '',
		'admission_date' => '',
		'rounding_date' => '',
		'data_collector_name' => '',
		'ward_name' => '',
		'ward_transfer' => '',
		'postop_day' => '',
		'dressing_not_removed' => '',
		'wound_clean_and_healthy' => '',
		'stitches_removed_or_wound_opened' => '',
		'wound_opened_spontaneously' => '',
		'pus_draining' => '',
		'abscess_present' => '',
		'redness_around_wound' => '',
		'bleeding' => '',
		'new_dressing' => '',
		'new_dressing_type' => '',
		'fever' => '',
		'on_antibiotics' => '',
		'antibiotics_prescribed' => '',
		'ssi_diagnosed_on_reoperation' => '',
		'returned_to_or' => '',
		'return_or_procedure' => '',
		'disposition' => '',
		'planned_reoperation' => '',
		'other_complications' => '',
		'endometritis' => '',
		'urinary_tract_infection' => '',
		'pneumonia' => '',
		'other_complication_description' => '',
		'eschar' => '',
		'discharged_today' => '',
		'discharge_date' => '',
		'death_in_ward' => '',
		'neonatal_death' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'ward_round_id' => '',
		'case_id' => '',
		'facility_id' => '',
		'admission_date' => '',
		'rounding_date' => '',
		'data_collector_name' => '',
		'ward_name' => '',
		'ward_transfer' => '',
		'postop_day' => '',
		'dressing_not_removed' => '',
		'wound_clean_and_healthy' => '',
		'stitches_removed_or_wound_opened' => '',
		'wound_opened_spontaneously' => '',
		'pus_draining' => '',
		'abscess_present' => '',
		'redness_around_wound' => '',
		'bleeding' => '',
		'new_dressing' => '',
		'new_dressing_type' => '',
		'fever' => '',
		'on_antibiotics' => '',
		'antibiotics_prescribed' => '',
		'ssi_diagnosed_on_reoperation' => '',
		'returned_to_or' => '',
		'return_or_procedure' => '',
		'disposition' => '',
		'planned_reoperation' => '',
		'other_complications' => '',
		'endometritis' => '',
		'urinary_tract_infection' => '',
		'pneumonia' => '',
		'other_complication_description' => '',
		'eschar' => '',
		'discharged_today' => '',
		'discharge_date' => '',
		'death_in_ward' => '',
		'neonatal_death' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>