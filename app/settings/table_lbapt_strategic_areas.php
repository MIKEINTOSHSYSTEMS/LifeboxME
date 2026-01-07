<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbapt_strategic_areas'] = array(
	'name' => 'public.lbapt_strategic_areas',
	'shortName' => 'lbapt_strategic_areas',
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
	'detailsBadgeColor' => 'BC8F8F',
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
	strategic_area_id,
	area_name,
	area_description,
	created_at,
	updated_at
FROM
	"public".lbapt_strategic_areas',
	'keyFields' => array( 
		'strategic_area_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'strategic_area_id' => array(
			'name' => 'strategic_area_id',
			'goodName' => 'strategic_area_id',
			'strField' => 'strategic_area_id',
			'sourceSingle' => 'strategic_area_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'strategic_area_id',
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
			'tableName' => 'public.lbapt_strategic_areas' 
		),
		'area_name' => array(
			'name' => 'area_name',
			'goodName' => 'area_name',
			'strField' => 'area_name',
			'sourceSingle' => 'area_name',
			'index' => 2,
			'sqlExpression' => 'area_name',
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
			'tableName' => 'public.lbapt_strategic_areas' 
		),
		'area_description' => array(
			'name' => 'area_description',
			'goodName' => 'area_description',
			'strField' => 'area_description',
			'sourceSingle' => 'area_description',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'area_description',
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
			'tableName' => 'public.lbapt_strategic_areas' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 4,
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
			'tableName' => 'public.lbapt_strategic_areas' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'sourceSingle' => 'updated_at',
			'index' => 5,
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
			'tableName' => 'public.lbapt_strategic_areas' 
		) 
	),
	'detailsTables' => array( 
		'public.lbapt_annual_plan_tracker',
		'public.lbapt_beginnings_fund',
		'public.lbapt_communications',
		'public.lbapt_cri',
		'public.lbapt_dashboard_summary',
		'public.lbapt_development',
		'public.lbapt_elma',
		'public.lbapt_governance',
		'public.lbapt_kpis_on_track',
		'public.lbapt_operations',
		'public.lbapt_programs',
		'public.lbapt_sample_workflow',
		'public.lbapt_finance',
		'public.lbapt_hr',
		'public.lbapt_cathedral',
		'public.lbapt_izumi',
		'public.lbapt_st',
		'public.lbapt_whi' 
	),
	'query' => array(
		'sql' => 'SELECT
	strategic_area_id,
	area_name,
	area_description,
	created_at,
	updated_at
FROM
	"public".lbapt_strategic_areas',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'strategic_area_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_strategic_areas',
					'name' => 'strategic_area_id' 
				),
				'encrypted' => false,
				'columnName' => 'strategic_area_id' 
			),
			array(
				'sql' => 'area_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_strategic_areas',
					'name' => 'area_name' 
				),
				'encrypted' => false,
				'columnName' => 'area_name' 
			),
			array(
				'sql' => 'area_description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbapt_strategic_areas',
					'name' => 'area_description' 
				),
				'encrypted' => false,
				'columnName' => 'area_description' 
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
					'table' => 'public.lbapt_strategic_areas',
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
					'table' => 'public.lbapt_strategic_areas',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbapt_strategic_areas',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbapt_strategic_areas',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'strategic_area_id',
						'area_name',
						'area_description',
						'created_at',
						'updated_at' 
					),
					'name' => 'public.lbapt_strategic_areas' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'strategic_area_id,
	area_name,
	area_description,
	created_at,
	updated_at',
		'fromListSql' => 'FROM
	"public".lbapt_strategic_areas',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbapt_strategic_areas',
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
			'strategic_area_id',
			'area_name',
			'area_description',
			'created_at',
			'updated_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'strategic_area_id',
			'area_name',
			'area_description',
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
	$runnerTableLabels['public.lbapt_strategic_areas'] = array(
	'tableCaption' => 'Lbapt Strategic Areas',
	'fieldLabels' => array(
		'strategic_area_id' => 'Strategic Area Id',
		'area_name' => 'Area Name',
		'area_description' => 'Area Description',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At' 
	),
	'fieldTooltips' => array(
		'strategic_area_id' => '',
		'area_name' => '',
		'area_description' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'fieldPlaceholders' => array(
		'strategic_area_id' => '',
		'area_name' => '',
		'area_description' => '',
		'created_at' => '',
		'updated_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>