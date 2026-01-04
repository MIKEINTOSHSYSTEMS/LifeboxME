<?php
global $runnerTableSettings;
$runnerTableSettings['public.training_sessions'] = array(
	'name' => 'public.training_sessions',
	'shortName' => 'training_sessions',
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
	'detailsBadgeColor' => '2f4f4f',
	'pageSizeSelectorRecords' => array( 
		'10',
		'20',
		'30',
		'50',
		'100',
		'500',
		'1' 
	),
	'pageSizeSelectorGroups' => array( 
		'1',
		'3',
		'5',
		'10',
		'50',
		'100',
		'1' 
	),
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	"public".training_sessions.training_id,
	"public".training_sessions.course_id,
	"public".training_sessions.training_type_id,
	"public".training_sessions.approach_id,
	"public".training_sessions.program_id,
	"public".training_sessions.quarter,
	"public".training_sessions.start_date,
	"public".training_sessions.end_date,
	"public".training_sessions.facility_id,
	"public".training_sessions.host_country_id,
	"public".training_sessions.venue_id,
	"public".training_sessions.ceu_points,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants
        ELSE training_sessions.num_participants
    END AS num_participants,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score
        ELSE training_sessions.avg_pre_test_score
    END AS avg_pre_test_score,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score
        ELSE training_sessions.avg_post_test_score
    END AS avg_post_test_score,
	"public".training_sessions.remarks,
	CONCAT(\'Training ID: \', training_sessions.training_id, \' | \', \'Course Name: \', training_courses.course_name, \' | \', \'Program Name: \', programs.program_name, \' | \', \'Program ID: \', training_sessions.program_id, \' | \', \'Quarter: \', training_sessions.quarter, \' | \', \'Start Date: \', training_sessions.start_date, \' | \', \'End Date: \', training_sessions.end_date) AS training_details,
	"public".training_sessions.created_at,
	"public".training_sessions.updated_at
FROM
	"public".training_sessions
	INNER JOIN "public".training_courses ON "public".training_courses.course_id = "public".training_sessions.course_id
	INNER JOIN "public".programs ON "public".programs.program_id = "public".training_sessions.program_id
	LEFT OUTER JOIN "public".training_summary_view ON "public".training_summary_view.training_id = "public".training_sessions.training_id
',
	'keyFields' => array( 
		'training_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'training_id' => array(
			'name' => 'training_id',
			'goodName' => 'training_id',
			'strField' => 'training_id',
			'sourceSingle' => 'training_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => '"public".training_sessions.training_id',
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
			'tableName' => 'public.training_sessions' 
		),
		'course_id' => array(
			'name' => 'course_id',
			'goodName' => 'course_id',
			'strField' => 'course_id',
			'sourceSingle' => 'course_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.course_id',
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
					'lookupTable' => 'public.training_courses',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'course_id',
					'lookupDisplayField' => 'course_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'training_type_id' => array(
			'name' => 'training_type_id',
			'goodName' => 'training_type_id',
			'strField' => 'training_type_id',
			'sourceSingle' => 'training_type_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.training_type_id',
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
					'lookupTable' => 'public.training_types',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'training_type_id',
					'lookupDisplayField' => 'type_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'approach_id' => array(
			'name' => 'approach_id',
			'goodName' => 'approach_id',
			'strField' => 'approach_id',
			'sourceSingle' => 'approach_id',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.approach_id',
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
					'lookupTable' => 'public.training_approaches',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'approach_id',
					'lookupDisplayField' => 'approach_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'program_id' => array(
			'name' => 'program_id',
			'goodName' => 'program_id',
			'strField' => 'program_id',
			'sourceSingle' => 'program_id',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.program_id',
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
					'lookupTable' => 'public.programs',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'program_id',
					'lookupDisplayField' => 'program_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'quarter' => array(
			'name' => 'quarter',
			'goodName' => 'quarter',
			'strField' => 'quarter',
			'sourceSingle' => 'quarter',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => '"public".training_sessions.quarter',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'required' => true,
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.quarters',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'quarter_id',
					'lookupDisplayField' => 'quarter_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'sourceSingle' => 'start_date',
			'index' => 7,
			'type' => 7,
			'sqlExpression' => '"public".training_sessions.start_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
					'dateEditType' => 13,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.training_sessions' 
		),
		'end_date' => array(
			'name' => 'end_date',
			'goodName' => 'end_date',
			'strField' => 'end_date',
			'sourceSingle' => 'end_date',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => '"public".training_sessions.end_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
					'dateEditType' => 13,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.training_sessions' 
		),
		'facility_id' => array(
			'name' => 'facility_id',
			'goodName' => 'facility_id',
			'strField' => 'facility_id',
			'sourceSingle' => 'facility_id',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.facility_id',
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
					'lookupMultiselect' => true,
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
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'host_country_id' => array(
			'name' => 'host_country_id',
			'goodName' => 'host_country_id',
			'strField' => 'host_country_id',
			'sourceSingle' => 'host_country_id',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.host_country_id',
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
					'lookupMultiselect' => true,
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
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'venue_id' => array(
			'name' => 'venue_id',
			'goodName' => 'venue_id',
			'strField' => 'venue_id',
			'sourceSingle' => 'venue_id',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => '"public".training_sessions.venue_id',
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
					'lookupTable' => 'public.venues',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'venue_id',
					'lookupDisplayField' => 'venue_name',
					'lookupAllowAdd' => true,
					'lookupControlType' => 2,
					'lookupListPage' => 'list',
					'lookupAddPage' => 'add',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'training_id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.training_sessions' 
		),
		'ceu_points' => array(
			'name' => 'ceu_points',
			'goodName' => 'ceu_points',
			'strField' => 'ceu_points',
			'sourceSingle' => 'ceu_points',
			'index' => 12,
			'type' => 14,
			'sqlExpression' => '"public".training_sessions.ceu_points',
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
			'tableName' => 'public.training_sessions' 
		),
		'num_participants' => array(
			'name' => 'num_participants',
			'goodName' => 'num_participants',
			'strField' => 'num_participants',
			'sourceSingle' => 'num_participants',
			'index' => 13,
			'type' => 3,
			'sqlExpression' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants
        ELSE training_sessions.num_participants
    END',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
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
			'tableName' => '' 
		),
		'avg_pre_test_score' => array(
			'name' => 'avg_pre_test_score',
			'goodName' => 'avg_pre_test_score',
			'strField' => 'avg_pre_test_score',
			'sourceSingle' => 'avg_pre_test_score',
			'index' => 14,
			'type' => 14,
			'sqlExpression' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score
        ELSE training_sessions.avg_pre_test_score
    END',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
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
			'tableName' => '' 
		),
		'avg_post_test_score' => array(
			'name' => 'avg_post_test_score',
			'goodName' => 'avg_post_test_score',
			'strField' => 'avg_post_test_score',
			'sourceSingle' => 'avg_post_test_score',
			'index' => 15,
			'type' => 14,
			'sqlExpression' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score
        ELSE training_sessions.avg_post_test_score
    END',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
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
			'tableName' => '' 
		),
		'remarks' => array(
			'name' => 'remarks',
			'goodName' => 'remarks',
			'strField' => 'remarks',
			'sourceSingle' => 'remarks',
			'index' => 16,
			'type' => 201,
			'sqlExpression' => '"public".training_sessions.remarks',
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
			'tableName' => 'public.training_sessions' 
		),
		'training_details' => array(
			'name' => 'training_details',
			'goodName' => 'training_details',
			'strField' => 'training_details',
			'index' => 17,
			'type' => 201,
			'sqlExpression' => 'CONCAT(\'Training ID: \', training_sessions.training_id, \' | \', \'Course Name: \', training_courses.course_name, \' | \', \'Program Name: \', programs.program_name, \' | \', \'Program ID: \', training_sessions.program_id, \' | \', \'Quarter: \', training_sessions.quarter, \' | \', \'Start Date: \', training_sessions.start_date, \' | \', \'End Date: \', training_sessions.end_date)',
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
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => '' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 18,
			'type' => 135,
			'sqlExpression' => '"public".training_sessions.created_at',
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
			'tableName' => 'public.training_sessions' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 19,
			'type' => 135,
			'sqlExpression' => '"public".training_sessions.updated_at',
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
			'tableName' => 'public.training_sessions' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.training_courses',
			'detailsKeys' => array( 
				'course_id' 
			),
			'masterKeys' => array( 
				'course_id' 
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
		),
		array(
			'table' => 'public.countries',
			'detailsKeys' => array( 
				'host_country_id' 
			),
			'masterKeys' => array( 
				'country_id' 
			) 
		),
		array(
			'table' => 'public.programs',
			'detailsKeys' => array( 
				'program_id' 
			),
			'masterKeys' => array( 
				'program_id' 
			) 
		),
		array(
			'table' => 'public.training_approaches',
			'detailsKeys' => array( 
				'approach_id' 
			),
			'masterKeys' => array( 
				'approach_id' 
			) 
		),
		array(
			'table' => 'public.training_types',
			'detailsKeys' => array( 
				'training_type_id' 
			),
			'masterKeys' => array( 
				'training_type_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'public.training_languages',
		'public.training_leads',
		'public.training_partners',
		'public.training_trainers',
		'public.training_participation' 
	),
	'query' => array(
		'sql' => 'SELECT
	"public".training_sessions.training_id,
	"public".training_sessions.course_id,
	"public".training_sessions.training_type_id,
	"public".training_sessions.approach_id,
	"public".training_sessions.program_id,
	"public".training_sessions.quarter,
	"public".training_sessions.start_date,
	"public".training_sessions.end_date,
	"public".training_sessions.facility_id,
	"public".training_sessions.host_country_id,
	"public".training_sessions.venue_id,
	"public".training_sessions.ceu_points,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants
        ELSE training_sessions.num_participants
    END AS num_participants,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score
        ELSE training_sessions.avg_pre_test_score
    END AS avg_pre_test_score,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score
        ELSE training_sessions.avg_post_test_score
    END AS avg_post_test_score,
	"public".training_sessions.remarks,
	CONCAT(\'Training ID: \', training_sessions.training_id, \' | \', \'Course Name: \', training_courses.course_name, \' | \', \'Program Name: \', programs.program_name, \' | \', \'Program ID: \', training_sessions.program_id, \' | \', \'Quarter: \', training_sessions.quarter, \' | \', \'Start Date: \', training_sessions.start_date, \' | \', \'End Date: \', training_sessions.end_date) AS training_details,
	"public".training_sessions.created_at,
	"public".training_sessions.updated_at
FROM
	"public".training_sessions
	INNER JOIN "public".training_courses ON "public".training_courses.course_id = "public".training_sessions.course_id
	INNER JOIN "public".programs ON "public".programs.program_id = "public".training_sessions.program_id
	LEFT OUTER JOIN "public".training_summary_view ON "public".training_summary_view.training_id = "public".training_sessions.training_id
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => '"public".training_sessions.training_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'training_id' 
				),
				'encrypted' => false,
				'columnName' => 'training_id' 
			),
			array(
				'sql' => '"public".training_sessions.course_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'course_id' 
				),
				'encrypted' => false,
				'columnName' => 'course_id' 
			),
			array(
				'sql' => '"public".training_sessions.training_type_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'training_type_id' 
				),
				'encrypted' => false,
				'columnName' => 'training_type_id' 
			),
			array(
				'sql' => '"public".training_sessions.approach_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'approach_id' 
				),
				'encrypted' => false,
				'columnName' => 'approach_id' 
			),
			array(
				'sql' => '"public".training_sessions.program_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'program_id' 
				),
				'encrypted' => false,
				'columnName' => 'program_id' 
			),
			array(
				'sql' => '"public".training_sessions.quarter',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'quarter' 
				),
				'encrypted' => false,
				'columnName' => 'quarter' 
			),
			array(
				'sql' => '"public".training_sessions.start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'start_date' 
				),
				'encrypted' => false,
				'columnName' => 'start_date' 
			),
			array(
				'sql' => '"public".training_sessions.end_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'end_date' 
				),
				'encrypted' => false,
				'columnName' => 'end_date' 
			),
			array(
				'sql' => '"public".training_sessions.facility_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'facility_id' 
				),
				'encrypted' => false,
				'columnName' => 'facility_id' 
			),
			array(
				'sql' => '"public".training_sessions.host_country_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'host_country_id' 
				),
				'encrypted' => false,
				'columnName' => 'host_country_id' 
			),
			array(
				'sql' => '"public".training_sessions.venue_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'venue_id' 
				),
				'encrypted' => false,
				'columnName' => 'venue_id' 
			),
			array(
				'sql' => '"public".training_sessions.ceu_points',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'ceu_points' 
				),
				'encrypted' => false,
				'columnName' => 'ceu_points' 
			),
			array(
				'sql' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants
        ELSE training_sessions.num_participants
    END',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'num_participants',
				'expression' => array(
					'sql' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants
        ELSE training_sessions.num_participants
    END',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'num_participants' 
			),
			array(
				'sql' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score
        ELSE training_sessions.avg_pre_test_score
    END',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'avg_pre_test_score',
				'expression' => array(
					'sql' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score
        ELSE training_sessions.avg_pre_test_score
    END',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'avg_pre_test_score' 
			),
			array(
				'sql' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score
        ELSE training_sessions.avg_post_test_score
    END',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'avg_post_test_score',
				'expression' => array(
					'sql' => 'CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score
        ELSE training_sessions.avg_post_test_score
    END',
					'parsed' => true,
					'type' => 'NonParsedEntity' 
				),
				'encrypted' => false,
				'columnName' => 'avg_post_test_score' 
			),
			array(
				'sql' => '"public".training_sessions.remarks',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'remarks' 
				),
				'encrypted' => false,
				'columnName' => 'remarks' 
			),
			array(
				'sql' => 'CONCAT(\'Training ID: \', training_sessions.training_id, \' | \', \'Course Name: \', training_courses.course_name, \' | \', \'Program Name: \', programs.program_name, \' | \', \'Program ID: \', training_sessions.program_id, \' | \', \'Quarter: \', training_sessions.quarter, \' | \', \'Start Date: \', training_sessions.start_date, \' | \', \'End Date: \', training_sessions.end_date)',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'training_details',
				'expression' => array(
					'sql' => 'CONCAT(\'Training ID: \', training_sessions.training_id, \' | \', \'Course Name: \', training_courses.course_name, \' | \', \'Program Name: \', programs.program_name, \' | \', \'Program ID: \', training_sessions.program_id, \' | \', \'Quarter: \', training_sessions.quarter, \' | \', \'Start Date: \', training_sessions.start_date, \' | \', \'End Date: \', training_sessions.end_date)',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => '\'Training ID: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'training_sessions.training_id',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' | \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\'Course Name: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'training_courses.course_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' | \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\'Program Name: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'programs.program_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' | \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\'Program ID: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'training_sessions.program_id',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' | \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\'Quarter: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'training_sessions.quarter',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' | \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\'Start Date: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'training_sessions.start_date',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' | \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\'End Date: \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'training_sessions.end_date',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'training_details' 
			),
			array(
				'sql' => '"public".training_sessions.created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => '"public".training_sessions.updated_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.training_sessions',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".training_sessions',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_sessions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'training_id',
						'course_id',
						'training_type',
						'training_approach',
						'program',
						'quarter',
						'start_date',
						'end_date',
						'facility_id',
						'host_country_id',
						'ceu_points',
						'num_participants',
						'avg_pre_test_score',
						'avg_post_test_score',
						'remarks',
						'created_at',
						'updated_at',
						'training_type_id',
						'approach_id',
						'program_id',
						'venue_id' 
					),
					'name' => 'public.training_sessions' 
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
			),
			array(
				'sql' => 'INNER JOIN "public".training_courses ON "public".training_courses.course_id = "public".training_sessions.course_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_courses',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'course_id',
						'course_name',
						'description',
						'duration_hours',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.training_courses' 
				),
				'joinOn' => array(
					'sql' => '"public".training_courses.course_id = "public".training_sessions.course_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'public.training_courses',
						'name' => 'course_id' 
					),
					'case' => '= "public".training_sessions.course_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => '"public".training_courses.course_id = "public".training_sessions.course_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'public.training_courses',
							'name' => 'course_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'public.training_sessions',
							'name' => 'course_id' 
						) 
					) 
				),
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN "public".programs ON "public".programs.program_id = "public".training_sessions.program_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".programs',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'program_id',
						'program_name',
						'description',
						'is_active',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.programs' 
				),
				'joinOn' => array(
					'sql' => '"public".programs.program_id = "public".training_sessions.program_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'public.programs',
						'name' => 'program_id' 
					),
					'case' => '= "public".training_sessions.program_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => '"public".programs.program_id = "public".training_sessions.program_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'public.programs',
							'name' => 'program_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'public.training_sessions',
							'name' => 'program_id' 
						) 
					) 
				),
				'link' => 1 
			),
			array(
				'sql' => 'LEFT OUTER JOIN "public".training_summary_view ON "public".training_summary_view.training_id = "public".training_sessions.training_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_summary_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'training_id',
						'course_name',
						'training_type',
						'training_approach',
						'program',
						'quarter',
						'start_date',
						'end_date',
						'facility_name',
						'country_name',
						'region_name',
						'ceu_points',
						'num_participants',
						'avg_pre_test_score',
						'avg_post_test_score',
						'trainers',
						'partners',
						'languages',
						'remarks' 
					),
					'name' => 'public.training_summary_view' 
				),
				'joinOn' => array(
					'sql' => '"public".training_summary_view.training_id = "public".training_sessions.training_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'public.training_summary_view',
						'name' => 'training_id' 
					),
					'case' => '= "public".training_sessions.training_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => '"public".training_summary_view.training_id = "public".training_sessions.training_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'public.training_summary_view',
							'name' => 'training_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'public.training_sessions',
							'name' => 'training_id' 
						) 
					) 
				),
				'link' => 3 
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
		'fieldListSql' => '"public".training_sessions.training_id,
	"public".training_sessions.course_id,
	"public".training_sessions.training_type_id,
	"public".training_sessions.approach_id,
	"public".training_sessions.program_id,
	"public".training_sessions.quarter,
	"public".training_sessions.start_date,
	"public".training_sessions.end_date,
	"public".training_sessions.facility_id,
	"public".training_sessions.host_country_id,
	"public".training_sessions.venue_id,
	"public".training_sessions.ceu_points,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.num_participants
        ELSE training_sessions.num_participants
    END AS num_participants,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_pre_test_score
        ELSE training_sessions.avg_pre_test_score
    END AS avg_pre_test_score,
	CASE 
        WHEN training_summary_view.num_participants > 0 THEN training_summary_view.avg_post_test_score
        ELSE training_sessions.avg_post_test_score
    END AS avg_post_test_score,
	"public".training_sessions.remarks,
	CONCAT(\'Training ID: \', training_sessions.training_id, \' | \', \'Course Name: \', training_courses.course_name, \' | \', \'Program Name: \', programs.program_name, \' | \', \'Program ID: \', training_sessions.program_id, \' | \', \'Quarter: \', training_sessions.quarter, \' | \', \'Start Date: \', training_sessions.start_date, \' | \', \'End Date: \', training_sessions.end_date) AS training_details,
	"public".training_sessions.created_at,
	"public".training_sessions.updated_at',
		'fromListSql' => 'FROM
	"public".training_sessions
	INNER JOIN "public".training_courses ON "public".training_courses.course_id = "public".training_sessions.course_id
	INNER JOIN "public".programs ON "public".programs.program_id = "public".training_sessions.program_id
	LEFT OUTER JOIN "public".training_summary_view ON "public".training_summary_view.training_id = "public".training_sessions.training_id',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.training_sessions',
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
			'training_id',
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'quarter',
			'start_date',
			'end_date',
			'facility_id',
			'host_country_id',
			'venue_id',
			'ceu_points',
			'num_participants',
			'avg_pre_test_score',
			'avg_post_test_score',
			'remarks',
			'training_details',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'training_id',
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'quarter',
			'start_date',
			'end_date',
			'facility_id',
			'host_country_id',
			'venue_id',
			'ceu_points',
			'num_participants',
			'avg_pre_test_score',
			'avg_post_test_score',
			'remarks',
			'training_details',
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
	$runnerTableLabels['public.training_sessions'] = array(
	'tableCaption' => 'Training Sessions',
	'fieldLabels' => array(
		'training_id' => 'Training SeID',
		'course_id' => 'Course',
		'training_type_id' => 'Training Type',
		'approach_id' => 'Training Approach',
		'program_id' => 'Program',
		'quarter' => 'Quarter',
		'start_date' => 'Start Date',
		'end_date' => 'End Date',
		'facility_id' => 'Facility',
		'host_country_id' => 'Host Country',
		'venue_id' => 'Venue',
		'ceu_points' => 'Ceu Points',
		'num_participants' => 'Num Participants',
		'avg_pre_test_score' => 'Avg Pre Test Score',
		'avg_post_test_score' => 'Avg Post Test Score',
		'remarks' => 'Remarks',
		'training_details' => 'Training Details',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'training_id' => '',
		'course_id' => '',
		'training_type_id' => '',
		'approach_id' => '',
		'program_id' => '',
		'quarter' => '',
		'start_date' => '',
		'end_date' => '',
		'facility_id' => '',
		'host_country_id' => '',
		'venue_id' => '',
		'ceu_points' => '',
		'num_participants' => '',
		'avg_pre_test_score' => '',
		'avg_post_test_score' => '',
		'remarks' => '',
		'training_details' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'training_id' => '',
		'course_id' => '',
		'training_type_id' => '',
		'approach_id' => '',
		'program_id' => '',
		'quarter' => '',
		'start_date' => '',
		'end_date' => '',
		'facility_id' => '',
		'host_country_id' => '',
		'venue_id' => '',
		'ceu_points' => '',
		'num_participants' => '',
		'avg_pre_test_score' => '',
		'avg_post_test_score' => '',
		'remarks' => '',
		'training_details' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>