<?php
global $runnerTableSettings;
$runnerTableSettings['public.training_participation'] = array(
	'name' => 'public.training_participation',
	'shortName' => 'training_participation',
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
	'detailsBadgeColor' => 'D2AF80',
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
	'orderInfo' => array( 
		array(
			'index' => 0,
			'dir' => 'ASC',
			'field' => '' 
		),
		array(
			'index' => 0,
			'dir' => 'ASC',
			'field' => '' 
		) 
	),
	'sql' => 'SELECT
    tp.participation_id,
    tp.participant_id,
    tp.training_id,
    tp.created_at,
    tp.pre_test_score,
    tp.post_test_score,
    tp.ceu_points,
    CONCAT(
        tpp.title_salutation, \' \',
        tpp.first_name, \' \',
        COALESCE(tpp.middle_name || \' \', \'\'),
        tpp.last_name,
        \' - \',
        tc.course_name,
        \' - Session # \',
        ts.training_id,
        \' (\',
        TO_CHAR(ts.start_date, \'DD Mon YYYY\'),
        \' to \',
        TO_CHAR(ts.end_date, \'DD Mon YYYY\'),
        \') EnrollmentPID \',
        tp.participation_id
    ) AS participant_display
FROM "public".training_participation tp
INNER JOIN "public".training_participants tpp 
    ON tp.participant_id = tpp.participant_id
INNER JOIN "public".training_sessions ts 
    ON tp.training_id = ts.training_id
INNER JOIN "public".training_courses tc 
    ON ts.course_id = tc.course_id
ORDER BY tpp.first_name, tpp.last_name;',
	'keyFields' => array( 
		'participation_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'participation_id' => array(
			'name' => 'participation_id',
			'goodName' => 'participation_id',
			'strField' => 'participation_id',
			'sourceSingle' => 'participation_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'tp.participation_id',
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
			'tableName' => 'public.training_participation' 
		),
		'participant_id' => array(
			'name' => 'participant_id',
			'goodName' => 'participant_id',
			'strField' => 'participant_id',
			'sourceSingle' => 'participant_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'tp.participant_id',
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
					'lookupTable' => 'public.training_participants',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'participant_id',
					'lookupDisplayField' => 'title_salutation || \' \' || first_name || \' \' || middle_name || \' \' || last_name || \' - \' || email || \' - \' || phone',
					'lookupCustomDisplay' => true,
					'lookupOrderBy' => 'first_name',
					'lookupAllowAdd' => true,
					'lookupAllowEdit' => true,
					'lookupControlType' => 2,
					'lookupWhere' => 'NULLIF(TRIM(first_name), \'\') IS NOT NULL',
					'lookupListPage' => 'list',
					'lookupAddPage' => 'add',
					'lookupEditPage' => 'edit',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.training_participation' 
		),
		'training_id' => array(
			'name' => 'training_id',
			'goodName' => 'training_id',
			'strField' => 'training_id',
			'sourceSingle' => 'training_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'tp.training_id',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0,
					'textShowFirstN' => 170 
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
			'tableName' => 'public.training_participation' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 4,
			'type' => 135,
			'sqlExpression' => 'tp.created_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'date("Y-m-d H:i:s")',
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
			'tableName' => 'public.training_participation' 
		),
		'pre_test_score' => array(
			'name' => 'pre_test_score',
			'goodName' => 'pre_test_score',
			'strField' => 'pre_test_score',
			'sourceSingle' => 'pre_test_score',
			'index' => 5,
			'type' => 14,
			'sqlExpression' => 'tp.pre_test_score',
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
			'tableName' => 'public.training_participation' 
		),
		'post_test_score' => array(
			'name' => 'post_test_score',
			'goodName' => 'post_test_score',
			'strField' => 'post_test_score',
			'sourceSingle' => 'post_test_score',
			'index' => 6,
			'type' => 14,
			'sqlExpression' => 'tp.post_test_score',
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
			'tableName' => 'public.training_participation' 
		),
		'ceu_points' => array(
			'name' => 'ceu_points',
			'goodName' => 'ceu_points',
			'strField' => 'ceu_points',
			'sourceSingle' => 'ceu_points',
			'index' => 7,
			'type' => 14,
			'sqlExpression' => 'tp.ceu_points',
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
			'tableName' => 'public.training_participation' 
		),
		'participant_display' => array(
			'name' => 'participant_display',
			'goodName' => 'participant_display',
			'strField' => 'participant_display',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'CONCAT(
        tpp.title_salutation, \' \',
        tpp.first_name, \' \',
        COALESCE(tpp.middle_name || \' \', \'\'),
        tpp.last_name,
        \' - \',
        tc.course_name,
        \' - Session # \',
        ts.training_id,
        \' (\',
        TO_CHAR(ts.start_date, \'DD Mon YYYY\'),
        \' to \',
        TO_CHAR(ts.end_date, \'DD Mon YYYY\'),
        \') EnrollmentPID \',
        tp.participation_id
    )',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => '' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.training_participants',
			'detailsKeys' => array( 
				'participant_id' 
			),
			'masterKeys' => array( 
				'participant_id' 
			) 
		),
		array(
			'table' => 'public.training_sessions',
			'detailsKeys' => array( 
				'training_id' 
			),
			'masterKeys' => array( 
				'training_id' 
			) 
		) 
	),
	'detailsTables' => array( 
		'public.training_attendance' 
	),
	'query' => array(
		'sql' => 'SELECT
    tp.participation_id,
    tp.participant_id,
    tp.training_id,
    tp.created_at,
    tp.pre_test_score,
    tp.post_test_score,
    tp.ceu_points,
    CONCAT(
        tpp.title_salutation, \' \',
        tpp.first_name, \' \',
        COALESCE(tpp.middle_name || \' \', \'\'),
        tpp.last_name,
        \' - \',
        tc.course_name,
        \' - Session # \',
        ts.training_id,
        \' (\',
        TO_CHAR(ts.start_date, \'DD Mon YYYY\'),
        \' to \',
        TO_CHAR(ts.end_date, \'DD Mon YYYY\'),
        \') EnrollmentPID \',
        tp.participation_id
    ) AS participant_display
FROM "public".training_participation tp
INNER JOIN "public".training_participants tpp 
    ON tp.participant_id = tpp.participant_id
INNER JOIN "public".training_sessions ts 
    ON tp.training_id = ts.training_id
INNER JOIN "public".training_courses tc 
    ON ts.course_id = tc.course_id
ORDER BY tpp.first_name, tpp.last_name;',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'tp.participation_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'participation_id' 
				),
				'encrypted' => false,
				'columnName' => 'participation_id' 
			),
			array(
				'sql' => 'tp.participant_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'participant_id' 
				),
				'encrypted' => false,
				'columnName' => 'participant_id' 
			),
			array(
				'sql' => 'tp.training_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'training_id' 
				),
				'encrypted' => false,
				'columnName' => 'training_id' 
			),
			array(
				'sql' => 'tp.created_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			),
			array(
				'sql' => 'tp.pre_test_score',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'pre_test_score' 
				),
				'encrypted' => false,
				'columnName' => 'pre_test_score' 
			),
			array(
				'sql' => 'tp.post_test_score',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'post_test_score' 
				),
				'encrypted' => false,
				'columnName' => 'post_test_score' 
			),
			array(
				'sql' => 'tp.ceu_points',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tp',
					'name' => 'ceu_points' 
				),
				'encrypted' => false,
				'columnName' => 'ceu_points' 
			),
			array(
				'sql' => 'CONCAT(
        tpp.title_salutation, \' \',
        tpp.first_name, \' \',
        COALESCE(tpp.middle_name || \' \', \'\'),
        tpp.last_name,
        \' - \',
        tc.course_name,
        \' - Session # \',
        ts.training_id,
        \' (\',
        TO_CHAR(ts.start_date, \'DD Mon YYYY\'),
        \' to \',
        TO_CHAR(ts.end_date, \'DD Mon YYYY\'),
        \') EnrollmentPID \',
        tp.participation_id
    )',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => 'participant_display',
				'expression' => array(
					'sql' => 'CONCAT(
        tpp.title_salutation, \' \',
        tpp.first_name, \' \',
        COALESCE(tpp.middle_name || \' \', \'\'),
        tpp.last_name,
        \' - \',
        tc.course_name,
        \' - Session # \',
        ts.training_id,
        \' (\',
        TO_CHAR(ts.start_date, \'DD Mon YYYY\'),
        \' to \',
        TO_CHAR(ts.end_date, \'DD Mon YYYY\'),
        \') EnrollmentPID \',
        tp.participation_id
    )',
					'parsed' => true,
					'type' => 'FunctionCall',
					'arguments' => array( 
						array(
							'sql' => 'tpp.title_salutation',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'tpp.first_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'COALESCE(tpp.middle_name || \' \', \'\')',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'tpp.last_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' - \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'tc.course_name',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' - Session # \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'ts.training_id',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' (\'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'TO_CHAR(ts.start_date, \'DD Mon YYYY\')',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\' to \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'TO_CHAR(ts.end_date, \'DD Mon YYYY\')',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => '\') EnrollmentPID \'',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						),
						array(
							'sql' => 'tp.participation_id',
							'parsed' => true,
							'type' => 'NonParsedEntity' 
						) 
					),
					'functionName' => 'CONCAT',
					'functionType' => 5 
				),
				'encrypted' => false,
				'columnName' => 'participant_display' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".training_participation tp',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_participation',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'participation_id',
						'participant_id',
						'training_id',
						'created_at',
						'pre_test_score',
						'post_test_score',
						'ceu_points' 
					),
					'name' => 'public.training_participation' 
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
				'alias' => 'tp',
				'link' => 0 
			),
			array(
				'sql' => 'INNER JOIN "public".training_participants tpp 
    ON tp.participant_id = tpp.participant_id',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".training_participants',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'participant_id',
						'first_name',
						'last_name',
						'sex_id',
						'role_id',
						'facility_id',
						'phone',
						'email',
						'country_id',
						'training_date',
						'created_at',
						'updated_at',
						'venue_id',
						'title_salutation',
						'middle_name' 
					),
					'name' => 'public.training_participants' 
				),
				'joinOn' => array(
					'sql' => 'tpp.participant_id = tp.participant_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tpp',
						'name' => 'participant_id' 
					),
					'case' => '= tp.participant_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tp.participant_id = tpp.participant_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tpp',
							'name' => 'participant_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tp',
							'name' => 'participant_id' 
						) 
					) 
				),
				'alias' => 'tpp',
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN "public".training_sessions ts 
    ON tp.training_id = ts.training_id',
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
					'sql' => 'ts.training_id = tp.training_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'ts',
						'name' => 'training_id' 
					),
					'case' => '= tp.training_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'tp.training_id = ts.training_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'training_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tp',
							'name' => 'training_id' 
						) 
					) 
				),
				'alias' => 'ts',
				'link' => 1 
			),
			array(
				'sql' => 'INNER JOIN "public".training_courses tc 
    ON ts.course_id = tc.course_id',
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
					'sql' => 'tc.course_id = ts.course_id',
					'parsed' => true,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => array(
						'sql' => '',
						'parsed' => true,
						'type' => 'SQLField',
						'table' => 'tc',
						'name' => 'course_id' 
					),
					'case' => '= ts.course_id',
					'useAlias' => false 
				),
				'joinList' => array(
					'sql' => 'ts.course_id = tc.course_id',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'tc',
							'name' => 'course_id' 
						) 
					),
					'field2' => array( 
						array(
							'sql' => '',
							'parsed' => true,
							'type' => 'SQLField',
							'table' => 'ts',
							'name' => 'course_id' 
						) 
					) 
				),
				'alias' => 'tc',
				'link' => 1 
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
			array(
				'sql' => 'tpp.first_name',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tpp',
					'name' => 'first_name' 
				),
				'asc' => true,
				'columnNumber' => 0 
			),
			array(
				'sql' => 'tpp.last_name',
				'parsed' => true,
				'type' => 'OrderByListItem',
				'column' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'tpp',
					'name' => 'last_name' 
				),
				'asc' => true,
				'columnNumber' => 0 
			) 
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
				'fieldIndex' => -1,
				'orderByIndex' => 0,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => -1,
				'orderByIndex' => 1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'tp.participation_id,
    tp.participant_id,
    tp.training_id,
    tp.created_at,
    tp.pre_test_score,
    tp.post_test_score,
    tp.ceu_points,
    CONCAT(
        tpp.title_salutation, \' \',
        tpp.first_name, \' \',
        COALESCE(tpp.middle_name || \' \', \'\'),
        tpp.last_name,
        \' - \',
        tc.course_name,
        \' - Session # \',
        ts.training_id,
        \' (\',
        TO_CHAR(ts.start_date, \'DD Mon YYYY\'),
        \' to \',
        TO_CHAR(ts.end_date, \'DD Mon YYYY\'),
        \') EnrollmentPID \',
        tp.participation_id
    ) AS participant_display',
		'fromListSql' => 'FROM "public".training_participation tp
INNER JOIN "public".training_participants tpp 
    ON tp.participant_id = tpp.participant_id
INNER JOIN "public".training_sessions ts 
    ON tp.training_id = ts.training_id
INNER JOIN "public".training_courses tc 
    ON ts.course_id = tc.course_id',
		'orderBySql' => 'ORDER BY tpp.first_name, tpp.last_name',
		'tailSql' => '' 
	),
	'originalTable' => 'public.training_participation',
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
			'participation_id',
			'participant_id',
			'training_id',
			'created_at',
			'pre_test_score',
			'post_test_score',
			'ceu_points',
			'participant_display' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'participation_id',
			'participant_id',
			'training_id',
			'created_at',
			'pre_test_score',
			'post_test_score',
			'ceu_points',
			'participant_display' 
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
	$runnerTableLabels['public.training_participation'] = array(
	'tableCaption' => 'Training Participation',
	'fieldLabels' => array(
		'participation_id' => 'PID',
		'participant_id' => 'Training Participant',
		'training_id' => 'Training Session',
		'created_at' => 'Enrolled at',
		'pre_test_score' => 'Pre Test Score',
		'post_test_score' => 'Post Test Score',
		'ceu_points' => 'CEU Points',
		'participant_display' => 'Participant Display' 
	),
	'fieldTooltips' => array(
		'participation_id' => '',
		'participant_id' => '',
		'training_id' => '',
		'created_at' => '',
		'pre_test_score' => '',
		'post_test_score' => '',
		'ceu_points' => '',
		'participant_display' => '' 
	),
	'fieldPlaceholders' => array(
		'participation_id' => '',
		'participant_id' => '',
		'training_id' => '',
		'created_at' => '',
		'pre_test_score' => '',
		'post_test_score' => '',
		'ceu_points' => '',
		'participant_display' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>