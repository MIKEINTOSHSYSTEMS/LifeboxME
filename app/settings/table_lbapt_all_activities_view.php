<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbapt_all_activities_view'] = array(
	'name' => 'public.lbapt_all_activities_view',
	'shortName' => 'lbapt_all_activities_view',
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
	'detailsBadgeColor' => '1E90FF',
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
	key_objective,
	activity,
	kpi,
	status,
	created_at,
	updated_at
FROM
	"public".lbapt_all_activities_view',
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
			'type' => 201,
			'sqlExpression' => 'strategic_area',
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
					'lookupTable' => 'public.lbapt_strategic_areas',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'area_name',
					'lookupDisplayField' => 'area_name',
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'strategic_area',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbapt_all_activities_view' 
		),
		'key_objective' => array(
			'name' => 'key_objective',
			'goodName' => 'key_objective',
			'strField' => 'key_objective',
			'sourceSingle' => 'key_objective',
			'index' => 2,
			'type' => 201,
			'sqlExpression' => 'key_objective',
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
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'strategic_area',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbapt_all_activities_view' 
		),
		'activity' => array(
			'name' => 'activity',
			'goodName' => 'activity',
			'strField' => 'activity',
			'sourceSingle' => 'activity',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'activity',
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
			'tableName' => 'public.lbapt_all_activities_view' 
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
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'strategic_area',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbapt_all_activities_view' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'sourceSingle' => 'status',
			'index' => 5,
			'sqlExpression' => 'status',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lbapt_status',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'status_name',
					'lookupDisplayField' => 'status_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'strategic_area',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lbapt_all_activities_view' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 6,
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
			'tableName' => 'public.lbapt_all_activities_view' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 7,
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
			'tableName' => 'public.lbapt_all_activities_view' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	strategic_area,
	key_objective,
	activity,
	kpi,
	status,
	created_at,
	updated_at
FROM
	"public".lbapt_all_activities_view',
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
					'table' => 'public.lbapt_all_activities_view',
					'name' => 'strategic_area' 
				),
				'encrypted' => false,
				'columnName' => 'strategic_area' 
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
					'table' => 'public.lbapt_all_activities_view',
					'name' => 'key_objective' 
				),
				'encrypted' => false,
				'columnName' => 'key_objective' 
			),
			array(
				'sql' => 'activity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_all_activities_view',
					'name' => 'activity' 
				),
				'encrypted' => false,
				'columnName' => 'activity' 
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
					'table' => 'public.lbapt_all_activities_view',
					'name' => 'kpi' 
				),
				'encrypted' => false,
				'columnName' => 'kpi' 
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
					'table' => 'public.lbapt_all_activities_view',
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
					'table' => 'public.lbapt_all_activities_view',
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
					'table' => 'public.lbapt_all_activities_view',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbapt_all_activities_view',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbapt_all_activities_view',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'strategic_area',
						'key_objective',
						'activity',
						'kpi',
						'status',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.lbapt_all_activities_view' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'strategic_area,
	key_objective,
	activity,
	kpi,
	status,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	"public".lbapt_all_activities_view',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'public.lbapt_all_activities_view',
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
			'key_objective',
			'activity',
			'kpi',
			'status',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'strategic_area',
			'key_objective',
			'activity',
			'kpi',
			'status',
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
	$runnerTableLabels['public.lbapt_all_activities_view'] = array(
	'tableCaption' => 'Lbapt All Activities View',
	'fieldLabels' => array(
		'strategic_area' => 'Strategic Area',
		'key_objective' => 'Key Objective',
		'activity' => 'Activity',
		'kpi' => 'KPI',
		'status' => 'Status',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'strategic_area' => '',
		'key_objective' => '',
		'activity' => '',
		'kpi' => '',
		'status' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'strategic_area' => '',
		'key_objective' => '',
		'activity' => '',
		'kpi' => '',
		'status' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>