<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbapt_dashboard_summary_view'] = array(
	'name' => 'public.lbapt_dashboard_summary_view',
	'shortName' => 'lbapt_dashboard_summary_view',
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
	'detailsBadgeColor' => 'CD853F',
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
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	strategic_area,
	total_activities,
	completed,
	in_progress,
	not_started,
	on_track_percentage
FROM "public".lbapt_dashboard_summary_view',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'strategic_area' => array(
			'name' => 'strategic_area',
			'goodName' => 'strategic_area',
			'strField' => 'strategic_area',
			'sourceSingle' => 'strategic_area',
			'index' => 1,
			'sqlExpression' => 'strategic_area',
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
			'tableName' => 'public.lbapt_dashboard_summary_view' 
		),
		'total_activities' => array(
			'name' => 'total_activities',
			'goodName' => 'total_activities',
			'strField' => 'total_activities',
			'sourceSingle' => 'total_activities',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'total_activities',
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
			'tableName' => 'public.lbapt_dashboard_summary_view' 
		),
		'completed' => array(
			'name' => 'completed',
			'goodName' => 'completed',
			'strField' => 'completed',
			'sourceSingle' => 'completed',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'completed',
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
			'tableName' => 'public.lbapt_dashboard_summary_view' 
		),
		'in_progress' => array(
			'name' => 'in_progress',
			'goodName' => 'in_progress',
			'strField' => 'in_progress',
			'sourceSingle' => 'in_progress',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'in_progress',
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
			'tableName' => 'public.lbapt_dashboard_summary_view' 
		),
		'not_started' => array(
			'name' => 'not_started',
			'goodName' => 'not_started',
			'strField' => 'not_started',
			'sourceSingle' => 'not_started',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'not_started',
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
			'tableName' => 'public.lbapt_dashboard_summary_view' 
		),
		'on_track_percentage' => array(
			'name' => 'on_track_percentage',
			'goodName' => 'on_track_percentage',
			'strField' => 'on_track_percentage',
			'sourceSingle' => 'on_track_percentage',
			'index' => 6,
			'type' => 14,
			'sqlExpression' => 'on_track_percentage',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'validateAs' => 'Number',
					'textHTML5Input' => '1',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotalsField' => 'total_activities' 
			),
			'tableName' => 'public.lbapt_dashboard_summary_view' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	strategic_area,
	total_activities,
	completed,
	in_progress,
	not_started,
	on_track_percentage
FROM "public".lbapt_dashboard_summary_view',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'strategic_area',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_dashboard_summary_view',
					'name' => 'strategic_area' 
				),
				'encrypted' => false,
				'columnName' => 'strategic_area' 
			),
			array(
				'sql' => 'total_activities',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_dashboard_summary_view',
					'name' => 'total_activities' 
				),
				'encrypted' => false,
				'columnName' => 'total_activities' 
			),
			array(
				'sql' => 'completed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_dashboard_summary_view',
					'name' => 'completed' 
				),
				'encrypted' => false,
				'columnName' => 'completed' 
			),
			array(
				'sql' => 'in_progress',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_dashboard_summary_view',
					'name' => 'in_progress' 
				),
				'encrypted' => false,
				'columnName' => 'in_progress' 
			),
			array(
				'sql' => 'not_started',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_dashboard_summary_view',
					'name' => 'not_started' 
				),
				'encrypted' => false,
				'columnName' => 'not_started' 
			),
			array(
				'sql' => 'on_track_percentage',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_dashboard_summary_view',
					'name' => 'on_track_percentage' 
				),
				'encrypted' => false,
				'columnName' => 'on_track_percentage' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbapt_dashboard_summary_view',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbapt_dashboard_summary_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'strategic_area',
						'total_activities',
						'completed',
						'in_progress',
						'not_started',
						'on_track_percentage' 
					),
					'name' => 'public.lbapt_dashboard_summary_view' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'strategic_area,
	total_activities,
	completed,
	in_progress,
	not_started,
	on_track_percentage',
		'fromListSql' => 'FROM "public".lbapt_dashboard_summary_view',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbapt_dashboard_summary_view',
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
			'strategic_area',
			'total_activities',
			'completed',
			'in_progress',
			'not_started',
			'on_track_percentage' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'strategic_area',
			'total_activities',
			'completed',
			'in_progress',
			'not_started',
			'on_track_percentage' 
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
	$runnerTableLabels['public.lbapt_dashboard_summary_view'] = array(
	'tableCaption' => 'Lbapt Dashboard Summary View',
	'fieldLabels' => array(
		'strategic_area' => 'Strategic Area',
		'total_activities' => 'Total Activities',
		'completed' => 'Completed',
		'in_progress' => 'In Progress',
		'not_started' => 'Not Started',
		'on_track_percentage' => 'On Track Percentage' 
	),
	'fieldTooltips' => array(
		'strategic_area' => '',
		'total_activities' => '',
		'completed' => '',
		'in_progress' => '',
		'not_started' => '',
		'on_track_percentage' => '' 
	),
	'fieldPlaceholders' => array(
		'strategic_area' => '',
		'total_activities' => '',
		'completed' => '',
		'in_progress' => '',
		'not_started' => '',
		'on_track_percentage' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>