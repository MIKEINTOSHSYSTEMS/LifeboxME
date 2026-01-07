<?php
global $runnerTableSettings;
$runnerTableSettings['public.follow_ups'] = array(
	'name' => 'public.follow_ups',
	'shortName' => 'follow_ups',
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
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => 'E07878',
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
	follow_up_id,
	case_id,
	facility_id,
	phone_call_date,
	data_collector_name,
	call_successful,
	call_failure_reason,
	patient_status,
	neonatal_death,
	wound_opened,
	wound_drainage,
	drainage_type,
	visited_healthcare_provider,
	provider_location,
	scheduled_postop_visit,
	attended_postop_visit,
	missed_visit_reason,
	created_at,
	updated_at
FROM
	"public".follow_ups',
	'keyFields' => array( 
		'follow_up_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'follow_up_id' => array(
			'name' => 'follow_up_id',
			'goodName' => 'follow_up_id',
			'strField' => 'follow_up_id',
			'sourceSingle' => 'follow_up_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'follow_up_id',
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
			'tableName' => 'public.follow_ups' 
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
			'tableName' => 'public.follow_ups' 
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
			'tableName' => 'public.follow_ups' 
		),
		'phone_call_date' => array(
			'name' => 'phone_call_date',
			'goodName' => 'phone_call_date',
			'strField' => 'phone_call_date',
			'sourceSingle' => 'phone_call_date',
			'index' => 4,
			'type' => 7,
			'sqlExpression' => 'phone_call_date',
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
			'tableName' => 'public.follow_ups' 
		),
		'data_collector_name' => array(
			'name' => 'data_collector_name',
			'goodName' => 'data_collector_name',
			'strField' => 'data_collector_name',
			'sourceSingle' => 'data_collector_name',
			'index' => 5,
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
			'tableName' => 'public.follow_ups' 
		),
		'call_successful' => array(
			'name' => 'call_successful',
			'goodName' => 'call_successful',
			'strField' => 'call_successful',
			'sourceSingle' => 'call_successful',
			'index' => 6,
			'type' => 11,
			'sqlExpression' => 'call_successful',
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
			'tableName' => 'public.follow_ups' 
		),
		'call_failure_reason' => array(
			'name' => 'call_failure_reason',
			'goodName' => 'call_failure_reason',
			'strField' => 'call_failure_reason',
			'sourceSingle' => 'call_failure_reason',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'call_failure_reason',
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
			'tableName' => 'public.follow_ups' 
		),
		'patient_status' => array(
			'name' => 'patient_status',
			'goodName' => 'patient_status',
			'strField' => 'patient_status',
			'sourceSingle' => 'patient_status',
			'index' => 8,
			'sqlExpression' => 'patient_status',
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
			'tableName' => 'public.follow_ups' 
		),
		'neonatal_death' => array(
			'name' => 'neonatal_death',
			'goodName' => 'neonatal_death',
			'strField' => 'neonatal_death',
			'sourceSingle' => 'neonatal_death',
			'index' => 9,
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
			'tableName' => 'public.follow_ups' 
		),
		'wound_opened' => array(
			'name' => 'wound_opened',
			'goodName' => 'wound_opened',
			'strField' => 'wound_opened',
			'sourceSingle' => 'wound_opened',
			'index' => 10,
			'type' => 11,
			'sqlExpression' => 'wound_opened',
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
			'tableName' => 'public.follow_ups' 
		),
		'wound_drainage' => array(
			'name' => 'wound_drainage',
			'goodName' => 'wound_drainage',
			'strField' => 'wound_drainage',
			'sourceSingle' => 'wound_drainage',
			'index' => 11,
			'type' => 11,
			'sqlExpression' => 'wound_drainage',
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
			'tableName' => 'public.follow_ups' 
		),
		'drainage_type' => array(
			'name' => 'drainage_type',
			'goodName' => 'drainage_type',
			'strField' => 'drainage_type',
			'sourceSingle' => 'drainage_type',
			'index' => 12,
			'type' => 13,
			'sqlExpression' => 'drainage_type',
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
			'tableName' => 'public.follow_ups' 
		),
		'visited_healthcare_provider' => array(
			'name' => 'visited_healthcare_provider',
			'goodName' => 'visited_healthcare_provider',
			'strField' => 'visited_healthcare_provider',
			'sourceSingle' => 'visited_healthcare_provider',
			'index' => 13,
			'type' => 11,
			'sqlExpression' => 'visited_healthcare_provider',
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
			'tableName' => 'public.follow_ups' 
		),
		'provider_location' => array(
			'name' => 'provider_location',
			'goodName' => 'provider_location',
			'strField' => 'provider_location',
			'sourceSingle' => 'provider_location',
			'index' => 14,
			'sqlExpression' => 'provider_location',
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
			'tableName' => 'public.follow_ups' 
		),
		'scheduled_postop_visit' => array(
			'name' => 'scheduled_postop_visit',
			'goodName' => 'scheduled_postop_visit',
			'strField' => 'scheduled_postop_visit',
			'sourceSingle' => 'scheduled_postop_visit',
			'index' => 15,
			'type' => 11,
			'sqlExpression' => 'scheduled_postop_visit',
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
			'tableName' => 'public.follow_ups' 
		),
		'attended_postop_visit' => array(
			'name' => 'attended_postop_visit',
			'goodName' => 'attended_postop_visit',
			'strField' => 'attended_postop_visit',
			'sourceSingle' => 'attended_postop_visit',
			'index' => 16,
			'type' => 11,
			'sqlExpression' => 'attended_postop_visit',
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
			'tableName' => 'public.follow_ups' 
		),
		'missed_visit_reason' => array(
			'name' => 'missed_visit_reason',
			'goodName' => 'missed_visit_reason',
			'strField' => 'missed_visit_reason',
			'sourceSingle' => 'missed_visit_reason',
			'index' => 17,
			'type' => 201,
			'sqlExpression' => 'missed_visit_reason',
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
			'tableName' => 'public.follow_ups' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 18,
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
			'tableName' => 'public.follow_ups' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 19,
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
			'tableName' => 'public.follow_ups' 
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
			'table' => 'public.surgical_cases',
			'detailsKeys' => array( 
				'case_id' 
			),
			'masterKeys' => array( 
				'case_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	follow_up_id,
	case_id,
	facility_id,
	phone_call_date,
	data_collector_name,
	call_successful,
	call_failure_reason,
	patient_status,
	neonatal_death,
	wound_opened,
	wound_drainage,
	drainage_type,
	visited_healthcare_provider,
	provider_location,
	scheduled_postop_visit,
	attended_postop_visit,
	missed_visit_reason,
	created_at,
	updated_at
FROM
	"public".follow_ups',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'follow_up_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'follow_up_id' 
				),
				'encrypted' => false,
				'columnName' => 'follow_up_id' 
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
					'table' => 'public.follow_ups',
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
					'table' => 'public.follow_ups',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
			),
			array(
				'sql' => 'phone_call_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'phone_call_date' 
				),
				'encrypted' => false,
				'columnName' => 'phone_call_date' 
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
					'table' => 'public.follow_ups',
					'name' => 'data_collector_name' 
				),
				'encrypted' => false,
				'columnName' => 'data_collector_name' 
			),
			array(
				'sql' => 'call_successful',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'call_successful' 
				),
				'encrypted' => false,
				'columnName' => 'call_successful' 
			),
			array(
				'sql' => 'call_failure_reason',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'call_failure_reason' 
				),
				'encrypted' => false,
				'columnName' => 'call_failure_reason' 
			),
			array(
				'sql' => 'patient_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'patient_status' 
				),
				'encrypted' => false,
				'columnName' => 'patient_status' 
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
					'table' => 'public.follow_ups',
					'name' => 'neonatal_death' 
				),
				'encrypted' => false,
				'columnName' => 'neonatal_death' 
			),
			array(
				'sql' => 'wound_opened',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'wound_opened' 
				),
				'encrypted' => false,
				'columnName' => 'wound_opened' 
			),
			array(
				'sql' => 'wound_drainage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'wound_drainage' 
				),
				'encrypted' => false,
				'columnName' => 'wound_drainage' 
			),
			array(
				'sql' => 'drainage_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'drainage_type' 
				),
				'encrypted' => false,
				'columnName' => 'drainage_type' 
			),
			array(
				'sql' => 'visited_healthcare_provider',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'visited_healthcare_provider' 
				),
				'encrypted' => false,
				'columnName' => 'visited_healthcare_provider' 
			),
			array(
				'sql' => 'provider_location',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'provider_location' 
				),
				'encrypted' => false,
				'columnName' => 'provider_location' 
			),
			array(
				'sql' => 'scheduled_postop_visit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'scheduled_postop_visit' 
				),
				'encrypted' => false,
				'columnName' => 'scheduled_postop_visit' 
			),
			array(
				'sql' => 'attended_postop_visit',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'attended_postop_visit' 
				),
				'encrypted' => false,
				'columnName' => 'attended_postop_visit' 
			),
			array(
				'sql' => 'missed_visit_reason',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.follow_ups',
					'name' => 'missed_visit_reason' 
				),
				'encrypted' => false,
				'columnName' => 'missed_visit_reason' 
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
					'table' => 'public.follow_ups',
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
					'table' => 'public.follow_ups',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".follow_ups',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".follow_ups',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'follow_up_id',
						'case_id',
						'facility_id',
						'phone_call_date',
						'data_collector_name',
						'call_successful',
						'call_failure_reason',
						'patient_status',
						'neonatal_death',
						'wound_opened',
						'wound_drainage',
						'drainage_type',
						'visited_healthcare_provider',
						'provider_location',
						'scheduled_postop_visit',
						'attended_postop_visit',
						'missed_visit_reason',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.follow_ups' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'follow_up_id,
	case_id,
	facility_id,
	phone_call_date,
	data_collector_name,
	call_successful,
	call_failure_reason,
	patient_status,
	neonatal_death,
	wound_opened,
	wound_drainage,
	drainage_type,
	visited_healthcare_provider,
	provider_location,
	scheduled_postop_visit,
	attended_postop_visit,
	missed_visit_reason,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	"public".follow_ups',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.follow_ups',
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
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'follow_up_id',
			'case_id',
			'facility_id',
			'phone_call_date',
			'data_collector_name',
			'call_successful',
			'call_failure_reason',
			'patient_status',
			'neonatal_death',
			'wound_opened',
			'wound_drainage',
			'drainage_type',
			'visited_healthcare_provider',
			'provider_location',
			'scheduled_postop_visit',
			'attended_postop_visit',
			'missed_visit_reason',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'follow_up_id',
			'case_id',
			'facility_id',
			'phone_call_date',
			'data_collector_name',
			'call_successful',
			'call_failure_reason',
			'patient_status',
			'neonatal_death',
			'wound_opened',
			'wound_drainage',
			'drainage_type',
			'visited_healthcare_provider',
			'provider_location',
			'scheduled_postop_visit',
			'attended_postop_visit',
			'missed_visit_reason',
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
	$runnerTableLabels['public.follow_ups'] = array(
	'tableCaption' => 'Follow Ups',
	'fieldLabels' => array(
		'follow_up_id' => 'Follow Up Id',
		'case_id' => 'Case Id',
		'facility_id' => 'Facility Id',
		'phone_call_date' => 'Phone Call Date',
		'data_collector_name' => 'Data Collector Name',
		'call_successful' => 'Call Successful',
		'call_failure_reason' => 'Call Failure Reason',
		'patient_status' => 'Patient Status',
		'neonatal_death' => 'Neonatal Death',
		'wound_opened' => 'Wound Opened',
		'wound_drainage' => 'Wound Drainage',
		'drainage_type' => 'Drainage Type',
		'visited_healthcare_provider' => 'Visited Healthcare Provider',
		'provider_location' => 'Provider Location',
		'scheduled_postop_visit' => 'Scheduled Postop Visit',
		'attended_postop_visit' => 'Attended Postop Visit',
		'missed_visit_reason' => 'Missed Visit Reason',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'follow_up_id' => '',
		'case_id' => '',
		'facility_id' => '',
		'phone_call_date' => '',
		'data_collector_name' => '',
		'call_successful' => '',
		'call_failure_reason' => '',
		'patient_status' => '',
		'neonatal_death' => '',
		'wound_opened' => '',
		'wound_drainage' => '',
		'drainage_type' => '',
		'visited_healthcare_provider' => '',
		'provider_location' => '',
		'scheduled_postop_visit' => '',
		'attended_postop_visit' => '',
		'missed_visit_reason' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'follow_up_id' => '',
		'case_id' => '',
		'facility_id' => '',
		'phone_call_date' => '',
		'data_collector_name' => '',
		'call_successful' => '',
		'call_failure_reason' => '',
		'patient_status' => '',
		'neonatal_death' => '',
		'wound_opened' => '',
		'wound_drainage' => '',
		'drainage_type' => '',
		'visited_healthcare_provider' => '',
		'provider_location' => '',
		'scheduled_postop_visit' => '',
		'attended_postop_visit' => '',
		'missed_visit_reason' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>