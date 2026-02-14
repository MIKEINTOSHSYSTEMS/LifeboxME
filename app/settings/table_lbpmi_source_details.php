<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbpmi_source_details'] = array(
	'name' => 'public.lbpmi_source_details',
	'shortName' => 'lbpmi_source_details',
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
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.lbpmi_source_details',
	'afterAddDetail' => 'public.lbpmi_source_details',
	'detailsBadgeColor' => '3cb371',
	'sql' => 'SELECT
	detail_id,
	source_id,
	source_detail
FROM
	"public".lbpmi_source_details',
	'keyFields' => array( 
		'detail_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'detail_id' => array(
			'name' => 'detail_id',
			'goodName' => 'detail_id',
			'strField' => 'detail_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'detail_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbpmi_source_details' 
		),
		'source_id' => array(
			'name' => 'source_id',
			'goodName' => 'source_id',
			'strField' => 'source_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'source_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 2,
					'lookupTable' => 'public.lbpmi_data_sources',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'source_id',
					'lookupDisplayField' => 'data_source_name' 
				) 
			),
			'tableName' => 'public.lbpmi_source_details' 
		),
		'source_detail' => array(
			'name' => 'source_detail',
			'goodName' => 'source_detail',
			'strField' => 'source_detail',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'source_detail',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbpmi_source_details' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.lbpmi_data_sources',
			'detailsKeys' => array( 
				'source_id' 
			),
			'masterKeys' => array( 
				'source_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	detail_id,
	source_id,
	source_detail
FROM
	"public".lbpmi_source_details',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'detail_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_source_details',
					'name' => 'detail_id' 
				),
				'encrypted' => false,
				'columnName' => 'detail_id' 
			),
			array(
				'sql' => 'source_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_source_details',
					'name' => 'source_id' 
				),
				'encrypted' => false,
				'columnName' => 'source_id' 
			),
			array(
				'sql' => 'source_detail',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_source_details',
					'name' => 'source_detail' 
				),
				'encrypted' => false,
				'columnName' => 'source_detail' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbpmi_source_details',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbpmi_source_details',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'detail_id',
						'source_id',
						'source_detail' 
					),
					'name' => 'public.lbpmi_source_details' 
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
		'fieldListSql' => 'detail_id,
	source_id,
	source_detail',
		'fromListSql' => 'FROM
	"public".lbpmi_source_details',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbpmi_source_details',
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
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'detail_id',
			'source_id',
			'source_detail' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'detail_id',
			'source_id',
			'source_detail' 
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
	$runnerTableLabels['public.lbpmi_source_details'] = array(
	'tableCaption' => 'Lbpmi Source Details',
	'fieldLabels' => array(
		'detail_id' => 'Detail Id',
		'source_id' => 'Source Id',
		'source_detail' => 'Source Detail' 
	),
	'fieldTooltips' => array(
		'detail_id' => '',
		'source_id' => '',
		'source_detail' => '' 
	),
	'fieldPlaceholders' => array(
		'detail_id' => '',
		'source_id' => '',
		'source_detail' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>