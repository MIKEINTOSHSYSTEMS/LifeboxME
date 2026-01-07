<?php
global $runnerTableSettings;
$runnerTableSettings['public.participant_attendance_summary'] = array(
	'name' => 'public.participant_attendance_summary',
	'shortName' => 'participant_attendance_summary',
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
	'detailsBadgeColor' => '2F4F4F',
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
	participant_id,
	training_id,
	first_name,
	last_name,
	email,
	training_name,
	start_date,
	end_date,
	total_days,
	days_recorded,
	days_attended,
	attendance_percentage,
	attendance_status,
	pre_test_score,
	post_test_score,
	ceu_points
FROM
	"public".participant_attendance_summary',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'participant_id' => array(
			'name' => 'participant_id',
			'goodName' => 'participant_id',
			'strField' => 'participant_id',
			'sourceSingle' => 'participant_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'participant_id',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'training_id' => array(
			'name' => 'training_id',
			'goodName' => 'training_id',
			'strField' => 'training_id',
			'sourceSingle' => 'training_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'training_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateAs' => 'Number',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.training_sessions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'training_id',
					'lookupDisplayField' => 'training_details',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.participant_attendance_summary' 
		),
		'first_name' => array(
			'name' => 'first_name',
			'goodName' => 'first_name',
			'strField' => 'first_name',
			'sourceSingle' => 'first_name',
			'index' => 3,
			'sqlExpression' => 'first_name',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'last_name' => array(
			'name' => 'last_name',
			'goodName' => 'last_name',
			'strField' => 'last_name',
			'sourceSingle' => 'last_name',
			'index' => 4,
			'sqlExpression' => 'last_name',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'email' => array(
			'name' => 'email',
			'goodName' => 'email',
			'strField' => 'email',
			'sourceSingle' => 'email',
			'index' => 5,
			'sqlExpression' => 'email',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Email Hyperlink',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'training_name' => array(
			'name' => 'training_name',
			'goodName' => 'training_name',
			'strField' => 'training_name',
			'sourceSingle' => 'training_name',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'training_name',
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
					'textHTML5Input' => '0',
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.participant_attendance_summary' 
		),
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'sourceSingle' => 'start_date',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => 'start_date',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'end_date' => array(
			'name' => 'end_date',
			'goodName' => 'end_date',
			'strField' => 'end_date',
			'sourceSingle' => 'end_date',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'end_date',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'total_days' => array(
			'name' => 'total_days',
			'goodName' => 'total_days',
			'strField' => 'total_days',
			'sourceSingle' => 'total_days',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'total_days',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'days_recorded' => array(
			'name' => 'days_recorded',
			'goodName' => 'days_recorded',
			'strField' => 'days_recorded',
			'sourceSingle' => 'days_recorded',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'days_recorded',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'days_attended' => array(
			'name' => 'days_attended',
			'goodName' => 'days_attended',
			'strField' => 'days_attended',
			'sourceSingle' => 'days_attended',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'days_attended',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'attendance_percentage' => array(
			'name' => 'attendance_percentage',
			'goodName' => 'attendance_percentage',
			'strField' => 'attendance_percentage',
			'sourceSingle' => 'attendance_percentage',
			'index' => 12,
			'type' => 14,
			'sqlExpression' => 'attendance_percentage',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'attendance_status' => array(
			'name' => 'attendance_status',
			'goodName' => 'attendance_status',
			'strField' => 'attendance_status',
			'sourceSingle' => 'attendance_status',
			'index' => 13,
			'type' => 201,
			'sqlExpression' => 'attendance_status',
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'pre_test_score' => array(
			'name' => 'pre_test_score',
			'goodName' => 'pre_test_score',
			'strField' => 'pre_test_score',
			'sourceSingle' => 'pre_test_score',
			'index' => 14,
			'type' => 14,
			'sqlExpression' => 'pre_test_score',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'post_test_score' => array(
			'name' => 'post_test_score',
			'goodName' => 'post_test_score',
			'strField' => 'post_test_score',
			'sourceSingle' => 'post_test_score',
			'index' => 15,
			'type' => 14,
			'sqlExpression' => 'post_test_score',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
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
			'tableName' => 'public.participant_attendance_summary' 
		),
		'ceu_points' => array(
			'name' => 'ceu_points',
			'goodName' => 'ceu_points',
			'strField' => 'ceu_points',
			'sourceSingle' => 'ceu_points',
			'index' => 16,
			'type' => 14,
			'sqlExpression' => 'ceu_points',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
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
			'tableName' => 'public.participant_attendance_summary' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	participant_id,
	training_id,
	first_name,
	last_name,
	email,
	training_name,
	start_date,
	end_date,
	total_days,
	days_recorded,
	days_attended,
	attendance_percentage,
	attendance_status,
	pre_test_score,
	post_test_score,
	ceu_points
FROM
	"public".participant_attendance_summary',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'participant_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'participant_id' 
				),
				'encrypted' => false,
				'columnName' => 'participant_id' 
			),
			array(
				'sql' => 'training_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'training_id' 
				),
				'encrypted' => false,
				'columnName' => 'training_id' 
			),
			array(
				'sql' => 'first_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'first_name' 
				),
				'encrypted' => false,
				'columnName' => 'first_name' 
			),
			array(
				'sql' => 'last_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'last_name' 
				),
				'encrypted' => false,
				'columnName' => 'last_name' 
			),
			array(
				'sql' => 'email',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'email' 
				),
				'encrypted' => false,
				'columnName' => 'email' 
			),
			array(
				'sql' => 'training_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'training_name' 
				),
				'encrypted' => false,
				'columnName' => 'training_name' 
			),
			array(
				'sql' => 'start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'start_date' 
				),
				'encrypted' => false,
				'columnName' => 'start_date' 
			),
			array(
				'sql' => 'end_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'end_date' 
				),
				'encrypted' => false,
				'columnName' => 'end_date' 
			),
			array(
				'sql' => 'total_days',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'total_days' 
				),
				'encrypted' => false,
				'columnName' => 'total_days' 
			),
			array(
				'sql' => 'days_recorded',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'days_recorded' 
				),
				'encrypted' => false,
				'columnName' => 'days_recorded' 
			),
			array(
				'sql' => 'days_attended',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'days_attended' 
				),
				'encrypted' => false,
				'columnName' => 'days_attended' 
			),
			array(
				'sql' => 'attendance_percentage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'attendance_percentage' 
				),
				'encrypted' => false,
				'columnName' => 'attendance_percentage' 
			),
			array(
				'sql' => 'attendance_status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'attendance_status' 
				),
				'encrypted' => false,
				'columnName' => 'attendance_status' 
			),
			array(
				'sql' => 'pre_test_score',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'pre_test_score' 
				),
				'encrypted' => false,
				'columnName' => 'pre_test_score' 
			),
			array(
				'sql' => 'post_test_score',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'post_test_score' 
				),
				'encrypted' => false,
				'columnName' => 'post_test_score' 
			),
			array(
				'sql' => 'ceu_points',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.participant_attendance_summary',
					'name' => 'ceu_points' 
				),
				'encrypted' => false,
				'columnName' => 'ceu_points' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".participant_attendance_summary',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".participant_attendance_summary',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'participant_id',
						'training_id',
						'first_name',
						'last_name',
						'email',
						'training_name',
						'start_date',
						'end_date',
						'total_days',
						'days_recorded',
						'days_attended',
						'attendance_percentage',
						'attendance_status',
						'pre_test_score',
						'post_test_score',
						'ceu_points' 
					),
					'name' => 'public.participant_attendance_summary' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'participant_id,
	training_id,
	first_name,
	last_name,
	email,
	training_name,
	start_date,
	end_date,
	total_days,
	days_recorded,
	days_attended,
	attendance_percentage,
	attendance_status,
	pre_test_score,
	post_test_score,
	ceu_points',
		'fromListSql' => 'FROM
	"public".participant_attendance_summary',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.participant_attendance_summary',
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
			'participant_id',
			'training_id',
			'first_name',
			'last_name',
			'email',
			'training_name',
			'start_date',
			'end_date',
			'total_days',
			'days_recorded',
			'days_attended',
			'attendance_percentage',
			'attendance_status',
			'pre_test_score',
			'post_test_score',
			'ceu_points' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'participant_id',
			'training_id',
			'first_name',
			'last_name',
			'email',
			'training_name',
			'start_date',
			'end_date',
			'total_days',
			'days_recorded',
			'days_attended',
			'attendance_percentage',
			'attendance_status',
			'pre_test_score',
			'post_test_score',
			'ceu_points' 
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
	$runnerTableLabels['public.participant_attendance_summary'] = array(
	'tableCaption' => 'Participant Attendance Summary',
	'fieldLabels' => array(
		'participant_id' => 'Participant Id',
		'training_id' => 'Training Session',
		'first_name' => 'First Name',
		'last_name' => 'Last Name',
		'email' => 'Email',
		'training_name' => 'Training Name',
		'start_date' => 'Start Date',
		'end_date' => 'End Date',
		'total_days' => 'Total Days',
		'days_recorded' => 'Days Recorded',
		'days_attended' => 'Days Attended',
		'attendance_percentage' => 'Attendance Percentage (%)',
		'attendance_status' => 'Attendance Status',
		'pre_test_score' => 'Pre Test Score',
		'post_test_score' => 'Post Test Score',
		'ceu_points' => 'Ceu Points' 
	),
	'fieldTooltips' => array(
		'participant_id' => '',
		'training_id' => '',
		'first_name' => '',
		'last_name' => '',
		'email' => '',
		'training_name' => '',
		'start_date' => '',
		'end_date' => '',
		'total_days' => '',
		'days_recorded' => '',
		'days_attended' => '',
		'attendance_percentage' => '',
		'attendance_status' => '',
		'pre_test_score' => '',
		'post_test_score' => '',
		'ceu_points' => '' 
	),
	'fieldPlaceholders' => array(
		'participant_id' => '',
		'training_id' => '',
		'first_name' => '',
		'last_name' => '',
		'email' => '',
		'training_name' => '',
		'start_date' => '',
		'end_date' => '',
		'total_days' => '',
		'days_recorded' => '',
		'days_attended' => '',
		'attendance_percentage' => '',
		'attendance_status' => '',
		'pre_test_score' => '',
		'post_test_score' => '',
		'ceu_points' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>