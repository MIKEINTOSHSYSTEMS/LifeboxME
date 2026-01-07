<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbln_fetch_sessions'] = array(
	'name' => 'public.lbln_fetch_sessions',
	'shortName' => 'lbln_fetch_sessions',
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
	'afterEditDetails' => 'public.lbln_fetch_sessions',
	'afterAddDetail' => 'public.lbln_fetch_sessions',
	'detailsBadgeColor' => 'd2af80',
	'displayLoading' => true,
	'sql' => 'SELECT
	id,
	session_id,
	session_type,
	target_table,
	selected_courses,
	course_progress,
	total_courses,
	options,
	status,
	created_at,
	updated_at,
	completed_at
FROM
	"public".lbln_fetch_sessions',
	'keyFields' => array( 
		'id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'id' => array(
			'name' => 'id',
			'goodName' => 'id',
			'strField' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'session_id' => array(
			'name' => 'session_id',
			'goodName' => 'session_id',
			'strField' => 'session_id',
			'index' => 2,
			'sqlExpression' => 'session_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'session_type' => array(
			'name' => 'session_type',
			'goodName' => 'session_type',
			'strField' => 'session_type',
			'index' => 3,
			'sqlExpression' => 'session_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'target_table' => array(
			'name' => 'target_table',
			'goodName' => 'target_table',
			'strField' => 'target_table',
			'index' => 4,
			'sqlExpression' => 'target_table',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'selected_courses' => array(
			'name' => 'selected_courses',
			'goodName' => 'selected_courses',
			'strField' => 'selected_courses',
			'index' => 5,
			'type' => 13,
			'sqlExpression' => 'selected_courses',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'course_progress' => array(
			'name' => 'course_progress',
			'goodName' => 'course_progress',
			'strField' => 'course_progress',
			'index' => 6,
			'type' => 13,
			'sqlExpression' => 'course_progress',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'total_courses' => array(
			'name' => 'total_courses',
			'goodName' => 'total_courses',
			'strField' => 'total_courses',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'total_courses',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'options' => array(
			'name' => 'options',
			'goodName' => 'options',
			'strField' => 'options',
			'index' => 8,
			'type' => 13,
			'sqlExpression' => 'options',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 9,
			'sqlExpression' => 'status',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'created_at',
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
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'updated_at',
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
			'tableName' => 'public.lbln_fetch_sessions' 
		),
		'completed_at' => array(
			'name' => 'completed_at',
			'goodName' => 'completed_at',
			'strField' => 'completed_at',
			'index' => 12,
			'type' => 135,
			'sqlExpression' => 'completed_at',
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
			'tableName' => 'public.lbln_fetch_sessions' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	session_id,
	session_type,
	target_table,
	selected_courses,
	course_progress,
	total_courses,
	options,
	status,
	created_at,
	updated_at,
	completed_at
FROM
	"public".lbln_fetch_sessions',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'session_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'session_id' 
				),
				'encrypted' => false,
				'columnName' => 'session_id' 
			),
			array(
				'sql' => 'session_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'session_type' 
				),
				'encrypted' => false,
				'columnName' => 'session_type' 
			),
			array(
				'sql' => 'target_table',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'target_table' 
				),
				'encrypted' => false,
				'columnName' => 'target_table' 
			),
			array(
				'sql' => 'selected_courses',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'selected_courses' 
				),
				'encrypted' => false,
				'columnName' => 'selected_courses' 
			),
			array(
				'sql' => 'course_progress',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'course_progress' 
				),
				'encrypted' => false,
				'columnName' => 'course_progress' 
			),
			array(
				'sql' => 'total_courses',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'total_courses' 
				),
				'encrypted' => false,
				'columnName' => 'total_courses' 
			),
			array(
				'sql' => 'options',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'options' 
				),
				'encrypted' => false,
				'columnName' => 'options' 
			),
			array(
				'sql' => 'status',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
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
					'table' => 'public.lbln_fetch_sessions',
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
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			),
			array(
				'sql' => 'completed_at',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_sessions',
					'name' => 'completed_at' 
				),
				'encrypted' => false,
				'columnName' => 'completed_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbln_fetch_sessions',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbln_fetch_sessions',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'session_id',
						'session_type',
						'target_table',
						'selected_courses',
						'course_progress',
						'total_courses',
						'options',
						'status',
						'created_at',
						'updated_at',
						'completed_at' 
					),
					'name' => 'public.lbln_fetch_sessions' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	session_id,
	session_type,
	target_table,
	selected_courses,
	course_progress,
	total_courses,
	options,
	status,
	created_at,
	updated_at,
	completed_at',
		'fromListSql' => 'FROM
	"public".lbln_fetch_sessions',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbln_fetch_sessions',
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
			'id',
			'session_id',
			'session_type',
			'target_table',
			'selected_courses',
			'course_progress',
			'total_courses',
			'options',
			'status',
			'created_at',
			'updated_at',
			'completed_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'session_id',
			'session_type',
			'target_table',
			'selected_courses',
			'course_progress',
			'total_courses',
			'options',
			'status',
			'created_at',
			'updated_at',
			'completed_at' 
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
	$runnerTableLabels['public.lbln_fetch_sessions'] = array(
	'tableCaption' => 'Lbln Fetch Sessions',
	'fieldLabels' => array(
		'id' => 'Id',
		'session_id' => 'Session Id',
		'session_type' => 'Session Type',
		'target_table' => 'Target Table',
		'selected_courses' => 'Selected Courses',
		'course_progress' => 'Course Progress',
		'total_courses' => 'Total Courses',
		'options' => 'Options',
		'status' => 'Status',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'completed_at' => 'Completed At' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'session_id' => '',
		'session_type' => '',
		'target_table' => '',
		'selected_courses' => '',
		'course_progress' => '',
		'total_courses' => '',
		'options' => '',
		'status' => '',
		'created_at' => '',
		'updated_at' => '',
		'completed_at' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'session_id' => '',
		'session_type' => '',
		'target_table' => '',
		'selected_courses' => '',
		'course_progress' => '',
		'total_courses' => '',
		'options' => '',
		'status' => '',
		'created_at' => '',
		'updated_at' => '',
		'completed_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>