<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbln_course_analytics'] = array(
	'name' => 'public.lbln_course_analytics',
	'shortName' => 'lbln_course_analytics',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'view' => array( 
			'view' 
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
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.lbln_course_analytics',
	'afterAddDetail' => 'public.lbln_course_analytics',
	'detailsBadgeColor' => '3cb371',
	'displayLoading' => true,
	'sql' => 'SELECT
	data_id,
	course_id,
	course_title,
	students,
	videos,
	learning_units,
	video_time,
	avg_score_rate,
	success_rate,
	total_study_time,
	avg_time_to_finish,
	social_interactions,
	certificates_issued,
	video_viewing_time,
	fetched_at,
	analytics_date
FROM
	"public".lbln_course_analytics
',
	'keyFields' => array( 
		'data_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'data_id' => array(
			'name' => 'data_id',
			'goodName' => 'data_id',
			'strField' => 'data_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'data_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'course_id' => array(
			'name' => 'course_id',
			'goodName' => 'course_id',
			'strField' => 'course_id',
			'index' => 2,
			'sqlExpression' => 'course_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'public.lbln_courses',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'course_id',
					'lookupDisplayField' => 'course_id' 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'course_title' => array(
			'name' => 'course_title',
			'goodName' => 'course_title',
			'strField' => 'course_title',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'course_title',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'students' => array(
			'name' => 'students',
			'goodName' => 'students',
			'strField' => 'students',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'students',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'videos' => array(
			'name' => 'videos',
			'goodName' => 'videos',
			'strField' => 'videos',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'videos',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'learning_units' => array(
			'name' => 'learning_units',
			'goodName' => 'learning_units',
			'strField' => 'learning_units',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'learning_units',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'video_time' => array(
			'name' => 'video_time',
			'goodName' => 'video_time',
			'strField' => 'video_time',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'video_time',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'avg_score_rate' => array(
			'name' => 'avg_score_rate',
			'goodName' => 'avg_score_rate',
			'strField' => 'avg_score_rate',
			'index' => 8,
			'type' => 14,
			'sqlExpression' => 'avg_score_rate',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'success_rate' => array(
			'name' => 'success_rate',
			'goodName' => 'success_rate',
			'strField' => 'success_rate',
			'index' => 9,
			'type' => 14,
			'sqlExpression' => 'success_rate',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'total_study_time' => array(
			'name' => 'total_study_time',
			'goodName' => 'total_study_time',
			'strField' => 'total_study_time',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'total_study_time',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'avg_time_to_finish' => array(
			'name' => 'avg_time_to_finish',
			'goodName' => 'avg_time_to_finish',
			'strField' => 'avg_time_to_finish',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'avg_time_to_finish',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'social_interactions' => array(
			'name' => 'social_interactions',
			'goodName' => 'social_interactions',
			'strField' => 'social_interactions',
			'index' => 12,
			'type' => 3,
			'sqlExpression' => 'social_interactions',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'certificates_issued' => array(
			'name' => 'certificates_issued',
			'goodName' => 'certificates_issued',
			'strField' => 'certificates_issued',
			'index' => 13,
			'type' => 3,
			'sqlExpression' => 'certificates_issued',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'video_viewing_time' => array(
			'name' => 'video_viewing_time',
			'goodName' => 'video_viewing_time',
			'strField' => 'video_viewing_time',
			'index' => 14,
			'type' => 3,
			'sqlExpression' => 'video_viewing_time',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'fetched_at' => array(
			'name' => 'fetched_at',
			'goodName' => 'fetched_at',
			'strField' => 'fetched_at',
			'index' => 15,
			'type' => 135,
			'sqlExpression' => 'fetched_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		),
		'analytics_date' => array(
			'name' => 'analytics_date',
			'goodName' => 'analytics_date',
			'strField' => 'analytics_date',
			'index' => 16,
			'type' => 7,
			'sqlExpression' => 'analytics_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'public.lbln_course_analytics' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lbln_courses',
			'detailsKeys' => array( 
				'course_id' 
			),
			'masterKeys' => array( 
				'course_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	data_id,
	course_id,
	course_title,
	students,
	videos,
	learning_units,
	video_time,
	avg_score_rate,
	success_rate,
	total_study_time,
	avg_time_to_finish,
	social_interactions,
	certificates_issued,
	video_viewing_time,
	fetched_at,
	analytics_date
FROM
	"public".lbln_course_analytics
',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'data_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'data_id' 
				),
				'encrypted' => false,
				'columnName' => 'data_id' 
			),
			array(
				'sql' => 'course_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'course_id' 
				),
				'encrypted' => false,
				'columnName' => 'course_id' 
			),
			array(
				'sql' => 'course_title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'course_title' 
				),
				'encrypted' => false,
				'columnName' => 'course_title' 
			),
			array(
				'sql' => 'students',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'students' 
				),
				'encrypted' => false,
				'columnName' => 'students' 
			),
			array(
				'sql' => 'videos',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'videos' 
				),
				'encrypted' => false,
				'columnName' => 'videos' 
			),
			array(
				'sql' => 'learning_units',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'learning_units' 
				),
				'encrypted' => false,
				'columnName' => 'learning_units' 
			),
			array(
				'sql' => 'video_time',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'video_time' 
				),
				'encrypted' => false,
				'columnName' => 'video_time' 
			),
			array(
				'sql' => 'avg_score_rate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'avg_score_rate' 
				),
				'encrypted' => false,
				'columnName' => 'avg_score_rate' 
			),
			array(
				'sql' => 'success_rate',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'success_rate' 
				),
				'encrypted' => false,
				'columnName' => 'success_rate' 
			),
			array(
				'sql' => 'total_study_time',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'total_study_time' 
				),
				'encrypted' => false,
				'columnName' => 'total_study_time' 
			),
			array(
				'sql' => 'avg_time_to_finish',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'avg_time_to_finish' 
				),
				'encrypted' => false,
				'columnName' => 'avg_time_to_finish' 
			),
			array(
				'sql' => 'social_interactions',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'social_interactions' 
				),
				'encrypted' => false,
				'columnName' => 'social_interactions' 
			),
			array(
				'sql' => 'certificates_issued',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'certificates_issued' 
				),
				'encrypted' => false,
				'columnName' => 'certificates_issued' 
			),
			array(
				'sql' => 'video_viewing_time',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'video_viewing_time' 
				),
				'encrypted' => false,
				'columnName' => 'video_viewing_time' 
			),
			array(
				'sql' => 'fetched_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'fetched_at' 
				),
				'encrypted' => false,
				'columnName' => 'fetched_at' 
			),
			array(
				'sql' => 'analytics_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_course_analytics',
					'name' => 'analytics_date' 
				),
				'encrypted' => false,
				'columnName' => 'analytics_date' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbln_course_analytics',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbln_course_analytics',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'data_id',
						'course_id',
						'course_title',
						'students',
						'videos',
						'learning_units',
						'video_time',
						'avg_score_rate',
						'success_rate',
						'total_study_time',
						'avg_time_to_finish',
						'social_interactions',
						'certificates_issued',
						'video_viewing_time',
						'fetched_at',
						'analytics_date' 
					),
					'name' => 'public.lbln_course_analytics' 
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
		'fieldListSql' => 'data_id,
	course_id,
	course_title,
	students,
	videos,
	learning_units,
	video_time,
	avg_score_rate,
	success_rate,
	total_study_time,
	avg_time_to_finish,
	social_interactions,
	certificates_issued,
	video_viewing_time,
	fetched_at,
	analytics_date',
		'fromListSql' => 'FROM
	"public".lbln_course_analytics',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbln_course_analytics',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'view' => array( 
			'view' 
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
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'data_id',
			'course_id',
			'course_title',
			'students',
			'videos',
			'learning_units',
			'video_time',
			'avg_score_rate',
			'success_rate',
			'total_study_time',
			'avg_time_to_finish',
			'social_interactions',
			'certificates_issued',
			'video_viewing_time',
			'fetched_at',
			'analytics_date' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'data_id',
			'course_id',
			'course_title',
			'students',
			'videos',
			'learning_units',
			'video_time',
			'avg_score_rate',
			'success_rate',
			'total_study_time',
			'avg_time_to_finish',
			'social_interactions',
			'certificates_issued',
			'video_viewing_time',
			'fetched_at',
			'analytics_date' 
		) 
	),
	'connId' => 'lifebox_mesystem_at_localhost',
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
	$runnerTableLabels['public.lbln_course_analytics'] = array(
	'tableCaption' => 'Lbln Course Analytics',
	'fieldLabels' => array(
		'data_id' => 'Data Id',
		'course_id' => 'Course Id',
		'course_title' => 'Course Title',
		'students' => 'Students',
		'videos' => 'Videos',
		'learning_units' => 'Learning Units',
		'video_time' => 'Video Time',
		'avg_score_rate' => 'Avg Score Rate',
		'success_rate' => 'Success Rate',
		'total_study_time' => 'Total Study Time',
		'avg_time_to_finish' => 'Avg Time To Finish',
		'social_interactions' => 'Social Interactions',
		'certificates_issued' => 'Certificates Issued',
		'video_viewing_time' => 'Video Viewing Time',
		'fetched_at' => 'Fetched At',
		'analytics_date' => 'Analytics Date' 
	),
	'fieldTooltips' => array(
		'data_id' => '',
		'course_id' => '',
		'course_title' => '',
		'students' => '',
		'videos' => '',
		'learning_units' => '',
		'video_time' => '',
		'avg_score_rate' => '',
		'success_rate' => '',
		'total_study_time' => '',
		'avg_time_to_finish' => '',
		'social_interactions' => '',
		'certificates_issued' => '',
		'video_viewing_time' => '',
		'fetched_at' => '',
		'analytics_date' => '' 
	),
	'fieldPlaceholders' => array(
		'data_id' => '',
		'course_id' => '',
		'course_title' => '',
		'students' => '',
		'videos' => '',
		'learning_units' => '',
		'video_time' => '',
		'avg_score_rate' => '',
		'success_rate' => '',
		'total_study_time' => '',
		'avg_time_to_finish' => '',
		'social_interactions' => '',
		'certificates_issued' => '',
		'video_viewing_time' => '',
		'fetched_at' => '',
		'analytics_date' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>