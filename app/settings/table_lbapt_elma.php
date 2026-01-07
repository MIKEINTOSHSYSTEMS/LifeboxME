<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbapt_elma'] = array(
	'name' => 'public.lbapt_elma',
	'shortName' => 'lbapt_elma',
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
	'detailsBadgeColor' => 'EDCA00',
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
	elma_id,
	strategic_area_id,
	key_objective,
	kpi,
	means_of_verification,
	status_id,
	planned_timeframe_q1,
	planned_timeframe_q2,
	planned_timeframe_q3,
	planned_timeframe_q4,
	achievement_q1,
	achievement_q2,
	achievement_q3,
	achievement_q4,
	notes,
	created_at,
	updated_at
FROM
	"public".lbapt_elma',
	'keyFields' => array( 
		'elma_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'elma_id' => array(
			'name' => 'elma_id',
			'goodName' => 'elma_id',
			'strField' => 'elma_id',
			'sourceSingle' => 'elma_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'elma_id',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'strategic_area_id' => array(
			'name' => 'strategic_area_id',
			'goodName' => 'strategic_area_id',
			'strField' => 'strategic_area_id',
			'sourceSingle' => 'strategic_area_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'strategic_area_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
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
					'lookupType' => 2,
					'lookupTable' => 'public.lbapt_strategic_areas',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'strategic_area_id',
					'lookupDisplayField' => 'area_name',
					'lookupWhere' => 'strategic_area_id = 6',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbapt_elma' 
		),
		'key_objective' => array(
			'name' => 'key_objective',
			'goodName' => 'key_objective',
			'strField' => 'key_objective',
			'sourceSingle' => 'key_objective',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'key_objective',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lbapt_annual_plan_tracker',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'key_objective',
					'lookupDisplayField' => 'key_objective',
					'lookupAllowAdd' => true,
					'lookupAddPage' => 'add',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'strategic_area_id',
							'lookupField' => 'strategic_area_id' 
						) 
					),
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbapt_elma' 
		),
		'kpi' => array(
			'name' => 'kpi',
			'goodName' => 'kpi',
			'strField' => 'kpi',
			'sourceSingle' => 'kpi',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'kpi',
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
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lbapt_annual_plan_tracker',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'kpi',
					'lookupDisplayField' => 'kpi',
					'lookupAllowAdd' => true,
					'lookupAddPage' => 'add',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'key_objective',
							'lookupField' => 'key_objective' 
						) 
					),
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbapt_elma' 
		),
		'means_of_verification' => array(
			'name' => 'means_of_verification',
			'goodName' => 'means_of_verification',
			'strField' => 'means_of_verification',
			'sourceSingle' => 'means_of_verification',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => 'means_of_verification',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'status_id' => array(
			'name' => 'status_id',
			'goodName' => 'status_id',
			'strField' => 'status_id',
			'sourceSingle' => 'status_id',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'status_id',
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
					'lookupTable' => 'public.lbapt_status',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'status_id',
					'lookupDisplayField' => 'status_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lbapt_elma' 
		),
		'planned_timeframe_q1' => array(
			'name' => 'planned_timeframe_q1',
			'goodName' => 'planned_timeframe_q1',
			'strField' => 'planned_timeframe_q1',
			'sourceSingle' => 'planned_timeframe_q1',
			'index' => 7,
			'type' => 11,
			'sqlExpression' => 'planned_timeframe_q1',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'planned_timeframe_q2' => array(
			'name' => 'planned_timeframe_q2',
			'goodName' => 'planned_timeframe_q2',
			'strField' => 'planned_timeframe_q2',
			'sourceSingle' => 'planned_timeframe_q2',
			'index' => 8,
			'type' => 11,
			'sqlExpression' => 'planned_timeframe_q2',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'planned_timeframe_q3' => array(
			'name' => 'planned_timeframe_q3',
			'goodName' => 'planned_timeframe_q3',
			'strField' => 'planned_timeframe_q3',
			'sourceSingle' => 'planned_timeframe_q3',
			'index' => 9,
			'type' => 11,
			'sqlExpression' => 'planned_timeframe_q3',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'planned_timeframe_q4' => array(
			'name' => 'planned_timeframe_q4',
			'goodName' => 'planned_timeframe_q4',
			'strField' => 'planned_timeframe_q4',
			'sourceSingle' => 'planned_timeframe_q4',
			'index' => 10,
			'type' => 11,
			'sqlExpression' => 'planned_timeframe_q4',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'achievement_q1' => array(
			'name' => 'achievement_q1',
			'goodName' => 'achievement_q1',
			'strField' => 'achievement_q1',
			'sourceSingle' => 'achievement_q1',
			'index' => 11,
			'type' => 11,
			'sqlExpression' => 'achievement_q1',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'achievement_q2' => array(
			'name' => 'achievement_q2',
			'goodName' => 'achievement_q2',
			'strField' => 'achievement_q2',
			'sourceSingle' => 'achievement_q2',
			'index' => 12,
			'type' => 11,
			'sqlExpression' => 'achievement_q2',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'achievement_q3' => array(
			'name' => 'achievement_q3',
			'goodName' => 'achievement_q3',
			'strField' => 'achievement_q3',
			'sourceSingle' => 'achievement_q3',
			'index' => 13,
			'type' => 11,
			'sqlExpression' => 'achievement_q3',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'achievement_q4' => array(
			'name' => 'achievement_q4',
			'goodName' => 'achievement_q4',
			'strField' => 'achievement_q4',
			'sourceSingle' => 'achievement_q4',
			'index' => 14,
			'type' => 11,
			'sqlExpression' => 'achievement_q4',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'notes' => array(
			'name' => 'notes',
			'goodName' => 'notes',
			'strField' => 'notes',
			'sourceSingle' => 'notes',
			'index' => 15,
			'type' => 201,
			'sqlExpression' => 'notes',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 16,
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
					'defaultValue' => 'strftime("%Y-%m-%d %H:%M:%S")',
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
			'tableName' => 'public.lbapt_elma' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 17,
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
					'autoUpdateValue' => 'strftime("%Y-%m-%d %H:%M:%S")',
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
			'tableName' => 'public.lbapt_elma' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lbapt_status',
			'detailsKeys' => array( 
				'status_id' 
			),
			'masterKeys' => array( 
				'status_id' 
			) 
		),
		array(
			'table' => 'public.lbapt_strategic_areas',
			'detailsKeys' => array( 
				'strategic_area_id' 
			),
			'masterKeys' => array( 
				'strategic_area_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	elma_id,
	strategic_area_id,
	key_objective,
	kpi,
	means_of_verification,
	status_id,
	planned_timeframe_q1,
	planned_timeframe_q2,
	planned_timeframe_q3,
	planned_timeframe_q4,
	achievement_q1,
	achievement_q2,
	achievement_q3,
	achievement_q4,
	notes,
	created_at,
	updated_at
FROM
	"public".lbapt_elma',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'elma_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'elma_id' 
				),
				'encrypted' => false,
				'columnName' => 'elma_id' 
			),
			array(
				'sql' => 'strategic_area_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'strategic_area_id' 
				),
				'encrypted' => false,
				'columnName' => 'strategic_area_id' 
			),
			array(
				'sql' => 'key_objective',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'key_objective' 
				),
				'encrypted' => false,
				'columnName' => 'key_objective' 
			),
			array(
				'sql' => 'kpi',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'kpi' 
				),
				'encrypted' => false,
				'columnName' => 'kpi' 
			),
			array(
				'sql' => 'means_of_verification',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'means_of_verification' 
				),
				'encrypted' => false,
				'columnName' => 'means_of_verification' 
			),
			array(
				'sql' => 'status_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'status_id' 
				),
				'encrypted' => false,
				'columnName' => 'status_id' 
			),
			array(
				'sql' => 'planned_timeframe_q1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'planned_timeframe_q1' 
				),
				'encrypted' => false,
				'columnName' => 'planned_timeframe_q1' 
			),
			array(
				'sql' => 'planned_timeframe_q2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'planned_timeframe_q2' 
				),
				'encrypted' => false,
				'columnName' => 'planned_timeframe_q2' 
			),
			array(
				'sql' => 'planned_timeframe_q3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'planned_timeframe_q3' 
				),
				'encrypted' => false,
				'columnName' => 'planned_timeframe_q3' 
			),
			array(
				'sql' => 'planned_timeframe_q4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'planned_timeframe_q4' 
				),
				'encrypted' => false,
				'columnName' => 'planned_timeframe_q4' 
			),
			array(
				'sql' => 'achievement_q1',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'achievement_q1' 
				),
				'encrypted' => false,
				'columnName' => 'achievement_q1' 
			),
			array(
				'sql' => 'achievement_q2',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'achievement_q2' 
				),
				'encrypted' => false,
				'columnName' => 'achievement_q2' 
			),
			array(
				'sql' => 'achievement_q3',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'achievement_q3' 
				),
				'encrypted' => false,
				'columnName' => 'achievement_q3' 
			),
			array(
				'sql' => 'achievement_q4',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'achievement_q4' 
				),
				'encrypted' => false,
				'columnName' => 'achievement_q4' 
			),
			array(
				'sql' => 'notes',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_elma',
					'name' => 'notes' 
				),
				'encrypted' => false,
				'columnName' => 'notes' 
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
					'table' => 'public.lbapt_elma',
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
					'table' => 'public.lbapt_elma',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbapt_elma',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbapt_elma',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'elma_id',
						'strategic_area_id',
						'key_objective',
						'kpi',
						'means_of_verification',
						'status_id',
						'planned_timeframe_q1',
						'planned_timeframe_q2',
						'planned_timeframe_q3',
						'planned_timeframe_q4',
						'achievement_q1',
						'achievement_q2',
						'achievement_q3',
						'achievement_q4',
						'notes',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.lbapt_elma' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'elma_id,
	strategic_area_id,
	key_objective,
	kpi,
	means_of_verification,
	status_id,
	planned_timeframe_q1,
	planned_timeframe_q2,
	planned_timeframe_q3,
	planned_timeframe_q4,
	achievement_q1,
	achievement_q2,
	achievement_q3,
	achievement_q4,
	notes,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	"public".lbapt_elma',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbapt_elma',
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
			'elma_id',
			'strategic_area_id',
			'key_objective',
			'kpi',
			'means_of_verification',
			'status_id',
			'planned_timeframe_q1',
			'planned_timeframe_q2',
			'planned_timeframe_q3',
			'planned_timeframe_q4',
			'achievement_q1',
			'achievement_q2',
			'achievement_q3',
			'achievement_q4',
			'notes',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'elma_id',
			'strategic_area_id',
			'key_objective',
			'kpi',
			'means_of_verification',
			'status_id',
			'planned_timeframe_q1',
			'planned_timeframe_q2',
			'planned_timeframe_q3',
			'planned_timeframe_q4',
			'achievement_q1',
			'achievement_q2',
			'achievement_q3',
			'achievement_q4',
			'notes',
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
	$runnerTableLabels['public.lbapt_elma'] = array(
	'tableCaption' => 'Lbapt Elma',
	'fieldLabels' => array(
		'elma_id' => 'ELMA ID',
		'strategic_area_id' => 'Strategic Area',
		'key_objective' => 'Key Objective',
		'kpi' => 'KPI',
		'means_of_verification' => 'Means Of Verification',
		'status_id' => 'Status',
		'planned_timeframe_q1' => 'Planned Timeframe Q1',
		'planned_timeframe_q2' => 'Planned Timeframe Q2',
		'planned_timeframe_q3' => 'Planned Timeframe Q3',
		'planned_timeframe_q4' => 'Planned Timeframe Q4',
		'achievement_q1' => 'Achievement Q1',
		'achievement_q2' => 'Achievement Q2',
		'achievement_q3' => 'Achievement Q3',
		'achievement_q4' => 'Achievement Q4',
		'notes' => 'Notes',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'elma_id' => '',
		'strategic_area_id' => '',
		'key_objective' => '',
		'kpi' => '',
		'means_of_verification' => '',
		'status_id' => '',
		'planned_timeframe_q1' => '',
		'planned_timeframe_q2' => '',
		'planned_timeframe_q3' => '',
		'planned_timeframe_q4' => '',
		'achievement_q1' => '',
		'achievement_q2' => '',
		'achievement_q3' => '',
		'achievement_q4' => '',
		'notes' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'elma_id' => '',
		'strategic_area_id' => '',
		'key_objective' => '',
		'kpi' => '',
		'means_of_verification' => '',
		'status_id' => '',
		'planned_timeframe_q1' => '',
		'planned_timeframe_q2' => '',
		'planned_timeframe_q3' => '',
		'planned_timeframe_q4' => '',
		'achievement_q1' => '',
		'achievement_q2' => '',
		'achievement_q3' => '',
		'achievement_q4' => '',
		'notes' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>