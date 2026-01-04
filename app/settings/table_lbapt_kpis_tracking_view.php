<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbapt_kpis_tracking_view'] = array(
	'name' => 'public.lbapt_kpis_tracking_view',
	'shortName' => 'lbapt_kpis_tracking_view',
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
	'detailsBadgeColor' => '7B68EE',
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
	strategic_area,
	number_of_kpis,
	planned_timeframe_q1,
	planned_timeframe_q2,
	planned_timeframe_q3,
	planned_timeframe_q4,
	achievement_q1,
	achievement_q2,
	achievement_q3,
	achievement_q4
FROM "public".lbapt_kpis_tracking_view',
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'number_of_kpis' => array(
			'name' => 'number_of_kpis',
			'goodName' => 'number_of_kpis',
			'strField' => 'number_of_kpis',
			'sourceSingle' => 'number_of_kpis',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'number_of_kpis',
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'planned_timeframe_q1' => array(
			'name' => 'planned_timeframe_q1',
			'goodName' => 'planned_timeframe_q1',
			'strField' => 'planned_timeframe_q1',
			'sourceSingle' => 'planned_timeframe_q1',
			'index' => 3,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'planned_timeframe_q2' => array(
			'name' => 'planned_timeframe_q2',
			'goodName' => 'planned_timeframe_q2',
			'strField' => 'planned_timeframe_q2',
			'sourceSingle' => 'planned_timeframe_q2',
			'index' => 4,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'planned_timeframe_q3' => array(
			'name' => 'planned_timeframe_q3',
			'goodName' => 'planned_timeframe_q3',
			'strField' => 'planned_timeframe_q3',
			'sourceSingle' => 'planned_timeframe_q3',
			'index' => 5,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'planned_timeframe_q4' => array(
			'name' => 'planned_timeframe_q4',
			'goodName' => 'planned_timeframe_q4',
			'strField' => 'planned_timeframe_q4',
			'sourceSingle' => 'planned_timeframe_q4',
			'index' => 6,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'achievement_q1' => array(
			'name' => 'achievement_q1',
			'goodName' => 'achievement_q1',
			'strField' => 'achievement_q1',
			'sourceSingle' => 'achievement_q1',
			'index' => 7,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'achievement_q2' => array(
			'name' => 'achievement_q2',
			'goodName' => 'achievement_q2',
			'strField' => 'achievement_q2',
			'sourceSingle' => 'achievement_q2',
			'index' => 8,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'achievement_q3' => array(
			'name' => 'achievement_q3',
			'goodName' => 'achievement_q3',
			'strField' => 'achievement_q3',
			'sourceSingle' => 'achievement_q3',
			'index' => 9,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		),
		'achievement_q4' => array(
			'name' => 'achievement_q4',
			'goodName' => 'achievement_q4',
			'strField' => 'achievement_q4',
			'sourceSingle' => 'achievement_q4',
			'index' => 10,
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
			'tableName' => 'public.lbapt_kpis_tracking_view' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	strategic_area,
	number_of_kpis,
	planned_timeframe_q1,
	planned_timeframe_q2,
	planned_timeframe_q3,
	planned_timeframe_q4,
	achievement_q1,
	achievement_q2,
	achievement_q3,
	achievement_q4
FROM "public".lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
					'name' => 'strategic_area' 
				),
				'encrypted' => false,
				'columnName' => 'strategic_area' 
			),
			array(
				'sql' => 'number_of_kpis',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_kpis_tracking_view',
					'name' => 'number_of_kpis' 
				),
				'encrypted' => false,
				'columnName' => 'number_of_kpis' 
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
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
					'table' => 'public.lbapt_kpis_tracking_view',
					'name' => 'achievement_q4' 
				),
				'encrypted' => false,
				'columnName' => 'achievement_q4' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbapt_kpis_tracking_view',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbapt_kpis_tracking_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'strategic_area',
						'number_of_kpis',
						'planned_timeframe_q1',
						'planned_timeframe_q2',
						'planned_timeframe_q3',
						'planned_timeframe_q4',
						'achievement_q1',
						'achievement_q2',
						'achievement_q3',
						'achievement_q4' 
					),
					'name' => 'public.lbapt_kpis_tracking_view' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'strategic_area,
	number_of_kpis,
	planned_timeframe_q1,
	planned_timeframe_q2,
	planned_timeframe_q3,
	planned_timeframe_q4,
	achievement_q1,
	achievement_q2,
	achievement_q3,
	achievement_q4',
		'fromListSql' => 'FROM "public".lbapt_kpis_tracking_view',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbapt_kpis_tracking_view',
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
			'number_of_kpis',
			'planned_timeframe_q1',
			'planned_timeframe_q2',
			'planned_timeframe_q3',
			'planned_timeframe_q4',
			'achievement_q1',
			'achievement_q2',
			'achievement_q3',
			'achievement_q4' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'strategic_area',
			'number_of_kpis',
			'planned_timeframe_q1',
			'planned_timeframe_q2',
			'planned_timeframe_q3',
			'planned_timeframe_q4',
			'achievement_q1',
			'achievement_q2',
			'achievement_q3',
			'achievement_q4' 
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
		array(
			'title' => array(
				'text' => 'All data',
				'type' => 0 
			),
			'where' => '',
			'id' => '',
			'showCount' => false,
			'hideEmpty' => false 
		) 
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
	$runnerTableLabels['public.lbapt_kpis_tracking_view'] = array(
	'tableCaption' => 'Lbapt Kpis Tracking View',
	'fieldLabels' => array(
		'strategic_area' => 'Strategic Area',
		'number_of_kpis' => 'Number Of Kpis',
		'planned_timeframe_q1' => 'Planned Timeframe Q1',
		'planned_timeframe_q2' => 'Planned Timeframe Q2',
		'planned_timeframe_q3' => 'Planned Timeframe Q3',
		'planned_timeframe_q4' => 'Planned Timeframe Q4',
		'achievement_q1' => 'Achievement Q1',
		'achievement_q2' => 'Achievement Q2',
		'achievement_q3' => 'Achievement Q3',
		'achievement_q4' => 'Achievement Q4' 
	),
	'fieldTooltips' => array(
		'strategic_area' => '',
		'number_of_kpis' => '',
		'planned_timeframe_q1' => '',
		'planned_timeframe_q2' => '',
		'planned_timeframe_q3' => '',
		'planned_timeframe_q4' => '',
		'achievement_q1' => '',
		'achievement_q2' => '',
		'achievement_q3' => '',
		'achievement_q4' => '' 
	),
	'fieldPlaceholders' => array(
		'strategic_area' => '',
		'number_of_kpis' => '',
		'planned_timeframe_q1' => '',
		'planned_timeframe_q2' => '',
		'planned_timeframe_q3' => '',
		'planned_timeframe_q4' => '',
		'achievement_q1' => '',
		'achievement_q2' => '',
		'achievement_q3' => '',
		'achievement_q4' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>