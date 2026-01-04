<?php
global $runnerTableSettings;
$runnerTableSettings['public.surgical_case_summary_view'] = array(
	'name' => 'public.surgical_case_summary_view',
	'shortName' => 'surgical_case_summary_view',
	'pagesByType' => array(
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
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'audit' => true,
	'detailsBadgeColor' => '4682B4',
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
	facility_name,
	country_name,
	surgery_date,
	data_type,
	data_collector_name,
	location_of_surgery,
	patient_sex,
	patient_age,
	procedure_name,
	diagnosis_name,
	wound_classification,
	case_type,
	death_in_or,
	fetal_death,
	death_in_ward,
	neonatal_death,
	follow_up_status
FROM "public".surgical_case_summary_view',
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'facility_name' => array(
			'name' => 'facility_name',
			'goodName' => 'facility_name',
			'strField' => 'facility_name',
			'sourceSingle' => 'facility_name',
			'index' => 2,
			'sqlExpression' => 'facility_name',
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'country_name' => array(
			'name' => 'country_name',
			'goodName' => 'country_name',
			'strField' => 'country_name',
			'sourceSingle' => 'country_name',
			'index' => 3,
			'sqlExpression' => 'country_name',
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
			'tableName' => 'public.surgical_case_summary_view' 
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
			'tableName' => 'public.surgical_case_summary_view' 
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
			'tableName' => 'public.surgical_case_summary_view' 
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
			'tableName' => 'public.surgical_case_summary_view' 
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
			'tableName' => 'public.surgical_case_summary_view' 
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'patient_age' => array(
			'name' => 'patient_age',
			'goodName' => 'patient_age',
			'strField' => 'patient_age',
			'sourceSingle' => 'patient_age',
			'index' => 9,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'procedure_name' => array(
			'name' => 'procedure_name',
			'goodName' => 'procedure_name',
			'strField' => 'procedure_name',
			'sourceSingle' => 'procedure_name',
			'index' => 10,
			'sqlExpression' => 'procedure_name',
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'diagnosis_name' => array(
			'name' => 'diagnosis_name',
			'goodName' => 'diagnosis_name',
			'strField' => 'diagnosis_name',
			'sourceSingle' => 'diagnosis_name',
			'index' => 11,
			'sqlExpression' => 'diagnosis_name',
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'wound_classification' => array(
			'name' => 'wound_classification',
			'goodName' => 'wound_classification',
			'strField' => 'wound_classification',
			'sourceSingle' => 'wound_classification',
			'index' => 12,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'case_type' => array(
			'name' => 'case_type',
			'goodName' => 'case_type',
			'strField' => 'case_type',
			'sourceSingle' => 'case_type',
			'index' => 13,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'death_in_or' => array(
			'name' => 'death_in_or',
			'goodName' => 'death_in_or',
			'strField' => 'death_in_or',
			'sourceSingle' => 'death_in_or',
			'index' => 14,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'fetal_death' => array(
			'name' => 'fetal_death',
			'goodName' => 'fetal_death',
			'strField' => 'fetal_death',
			'sourceSingle' => 'fetal_death',
			'index' => 15,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'death_in_ward' => array(
			'name' => 'death_in_ward',
			'goodName' => 'death_in_ward',
			'strField' => 'death_in_ward',
			'sourceSingle' => 'death_in_ward',
			'index' => 16,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'neonatal_death' => array(
			'name' => 'neonatal_death',
			'goodName' => 'neonatal_death',
			'strField' => 'neonatal_death',
			'sourceSingle' => 'neonatal_death',
			'index' => 17,
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
			'tableName' => 'public.surgical_case_summary_view' 
		),
		'follow_up_status' => array(
			'name' => 'follow_up_status',
			'goodName' => 'follow_up_status',
			'strField' => 'follow_up_status',
			'sourceSingle' => 'follow_up_status',
			'index' => 18,
			'sqlExpression' => 'follow_up_status',
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
			'tableName' => 'public.surgical_case_summary_view' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	case_id,
	facility_name,
	country_name,
	surgery_date,
	data_type,
	data_collector_name,
	location_of_surgery,
	patient_sex,
	patient_age,
	procedure_name,
	diagnosis_name,
	wound_classification,
	case_type,
	death_in_or,
	fetal_death,
	death_in_ward,
	neonatal_death,
	follow_up_status
FROM "public".surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
					'name' => 'case_id' 
				),
				'encrypted' => false,
				'columnName' => 'case_id' 
			),
			array(
				'sql' => 'facility_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_case_summary_view',
					'name' => 'facility_name' 
				),
				'encrypted' => false,
				'columnName' => 'facility_name' 
			),
			array(
				'sql' => 'country_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_case_summary_view',
					'name' => 'country_name' 
				),
				'encrypted' => false,
				'columnName' => 'country_name' 
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
					'name' => 'patient_sex' 
				),
				'encrypted' => false,
				'columnName' => 'patient_sex' 
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
					'table' => 'public.surgical_case_summary_view',
					'name' => 'patient_age' 
				),
				'encrypted' => false,
				'columnName' => 'patient_age' 
			),
			array(
				'sql' => 'procedure_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_case_summary_view',
					'name' => 'procedure_name' 
				),
				'encrypted' => false,
				'columnName' => 'procedure_name' 
			),
			array(
				'sql' => 'diagnosis_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_case_summary_view',
					'name' => 'diagnosis_name' 
				),
				'encrypted' => false,
				'columnName' => 'diagnosis_name' 
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
					'name' => 'case_type' 
				),
				'encrypted' => false,
				'columnName' => 'case_type' 
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
					'name' => 'fetal_death' 
				),
				'encrypted' => false,
				'columnName' => 'fetal_death' 
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
					'table' => 'public.surgical_case_summary_view',
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
					'table' => 'public.surgical_case_summary_view',
					'name' => 'neonatal_death' 
				),
				'encrypted' => false,
				'columnName' => 'neonatal_death' 
			),
			array(
				'sql' => 'follow_up_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.surgical_case_summary_view',
					'name' => 'follow_up_status' 
				),
				'encrypted' => false,
				'columnName' => 'follow_up_status' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".surgical_case_summary_view',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".surgical_case_summary_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'case_id',
						'facility_name',
						'country_name',
						'surgery_date',
						'data_type',
						'data_collector_name',
						'location_of_surgery',
						'patient_sex',
						'patient_age',
						'procedure_name',
						'diagnosis_name',
						'wound_classification',
						'case_type',
						'death_in_or',
						'fetal_death',
						'death_in_ward',
						'neonatal_death',
						'follow_up_status' 
					),
					'name' => 'public.surgical_case_summary_view' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'case_id,
	facility_name,
	country_name,
	surgery_date,
	data_type,
	data_collector_name,
	location_of_surgery,
	patient_sex,
	patient_age,
	procedure_name,
	diagnosis_name,
	wound_classification,
	case_type,
	death_in_or,
	fetal_death,
	death_in_ward,
	neonatal_death,
	follow_up_status',
		'fromListSql' => 'FROM "public".surgical_case_summary_view',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.surgical_case_summary_view',
	'originalPagesByType' => array(
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
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'case_id',
			'facility_name',
			'country_name',
			'surgery_date',
			'data_type',
			'data_collector_name',
			'location_of_surgery',
			'patient_sex',
			'patient_age',
			'procedure_name',
			'diagnosis_name',
			'wound_classification',
			'case_type',
			'death_in_or',
			'fetal_death',
			'death_in_ward',
			'neonatal_death',
			'follow_up_status' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'case_id',
			'facility_name',
			'country_name',
			'surgery_date',
			'data_type',
			'data_collector_name',
			'location_of_surgery',
			'patient_sex',
			'patient_age',
			'procedure_name',
			'diagnosis_name',
			'wound_classification',
			'case_type',
			'death_in_or',
			'fetal_death',
			'death_in_ward',
			'neonatal_death',
			'follow_up_status' 
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
	$runnerTableLabels['public.surgical_case_summary_view'] = array(
	'tableCaption' => 'Surgical Case Summary View',
	'fieldLabels' => array(
		'case_id' => 'Case Id',
		'facility_name' => 'Facility Name',
		'country_name' => 'Country Name',
		'surgery_date' => 'Surgery Date',
		'data_type' => 'Data Type',
		'data_collector_name' => 'Data Collector Name',
		'location_of_surgery' => 'Location Of Surgery',
		'patient_sex' => 'Patient Sex',
		'patient_age' => 'Patient Age',
		'procedure_name' => 'Procedure Name',
		'diagnosis_name' => 'Diagnosis Name',
		'wound_classification' => 'Wound Classification',
		'case_type' => 'Case Type',
		'death_in_or' => 'Death In Or',
		'fetal_death' => 'Fetal Death',
		'death_in_ward' => 'Death In Ward',
		'neonatal_death' => 'Neonatal Death',
		'follow_up_status' => 'Follow Up Status' 
	),
	'fieldTooltips' => array(
		'case_id' => '',
		'facility_name' => '',
		'country_name' => '',
		'surgery_date' => '',
		'data_type' => '',
		'data_collector_name' => '',
		'location_of_surgery' => '',
		'patient_sex' => '',
		'patient_age' => '',
		'procedure_name' => '',
		'diagnosis_name' => '',
		'wound_classification' => '',
		'case_type' => '',
		'death_in_or' => '',
		'fetal_death' => '',
		'death_in_ward' => '',
		'neonatal_death' => '',
		'follow_up_status' => '' 
	),
	'fieldPlaceholders' => array(
		'case_id' => '',
		'facility_name' => '',
		'country_name' => '',
		'surgery_date' => '',
		'data_type' => '',
		'data_collector_name' => '',
		'location_of_surgery' => '',
		'patient_sex' => '',
		'patient_age' => '',
		'procedure_name' => '',
		'diagnosis_name' => '',
		'wound_classification' => '',
		'case_type' => '',
		'death_in_or' => '',
		'fetal_death' => '',
		'death_in_ward' => '',
		'neonatal_death' => '',
		'follow_up_status' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>