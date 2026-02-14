<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbpmi_data_sources'] = array(
	'name' => 'public.lbpmi_data_sources',
	'shortName' => 'lbpmi_data_sources',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.lbpmi_data_sources',
	'afterAddDetail' => 'public.lbpmi_data_sources',
	'detailsBadgeColor' => 'b22222',
	'sql' => 'SELECT
	source_id,
	data_source_name,
	data_source_description
FROM
	"public".lbpmi_data_sources',
	'keyFields' => array( 
		'source_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'source_id' => array(
			'name' => 'source_id',
			'goodName' => 'source_id',
			'strField' => 'source_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'source_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbpmi_data_sources' 
		),
		'data_source_name' => array(
			'name' => 'data_source_name',
			'goodName' => 'data_source_name',
			'strField' => 'data_source_name',
			'index' => 2,
			'sqlExpression' => 'data_source_name',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbpmi_data_sources' 
		),
		'data_source_description' => array(
			'name' => 'data_source_description',
			'goodName' => 'data_source_description',
			'strField' => 'data_source_description',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'data_source_description',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbpmi_data_sources' 
		) 
	),
	'detailsTables' => array( 
		'public.lbpmi_source_details' 
	),
	'query' => array(
		'sql' => 'SELECT
	source_id,
	data_source_name,
	data_source_description
FROM
	"public".lbpmi_data_sources',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'source_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_sources',
					'name' => 'source_id' 
				),
				'encrypted' => false,
				'columnName' => 'source_id' 
			),
			array(
				'sql' => 'data_source_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_sources',
					'name' => 'data_source_name' 
				),
				'encrypted' => false,
				'columnName' => 'data_source_name' 
			),
			array(
				'sql' => 'data_source_description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_data_sources',
					'name' => 'data_source_description' 
				),
				'encrypted' => false,
				'columnName' => 'data_source_description' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbpmi_data_sources',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbpmi_data_sources',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'source_id',
						'data_source_name',
						'data_source_description' 
					),
					'name' => 'public.lbpmi_data_sources' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'source_id,
	data_source_name,
	data_source_description',
		'fromListSql' => 'FROM
	"public".lbpmi_data_sources',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbpmi_data_sources',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'source_id',
			'data_source_name',
			'data_source_description' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'source_id',
			'data_source_name',
			'data_source_description' 
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
	$runnerTableLabels['public.lbpmi_data_sources'] = array(
	'tableCaption' => 'Lbpmi Data Sources',
	'fieldLabels' => array(
		'source_id' => 'Source Id',
		'data_source_name' => 'Data Source Name',
		'data_source_description' => 'Data Source Description' 
	),
	'fieldTooltips' => array(
		'source_id' => '',
		'data_source_name' => '',
		'data_source_description' => '' 
	),
	'fieldPlaceholders' => array(
		'source_id' => '',
		'data_source_name' => '',
		'data_source_description' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>