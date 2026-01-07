<?php
global $runnerTableSettings;
$runnerTableSettings['public.device_distribution_log'] = array(
	'name' => 'public.device_distribution_log',
	'shortName' => 'device_distribution_log',
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
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => '4169E1',
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
	log_id,
	distribution_id,
	device_type,
	previous_quantity,
	distributed_quantity,
	new_quantity,
	performed_by,
	created_at
FROM
	"public".device_distribution_log',
	'keyFields' => array( 
		'log_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'log_id' => array(
			'name' => 'log_id',
			'goodName' => 'log_id',
			'strField' => 'log_id',
			'sourceSingle' => 'log_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'log_id',
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
			'tableName' => 'public.device_distribution_log' 
		),
		'distribution_id' => array(
			'name' => 'distribution_id',
			'goodName' => 'distribution_id',
			'strField' => 'distribution_id',
			'sourceSingle' => 'distribution_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'distribution_id',
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
					'lookupTable' => 'public.device_distributions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'distribution_id',
					'lookupDisplayField' => 'order_reference',
					'lookupAutofillEdit' => true,
					'lookupAutofillFields' => array( 
						array(
							'masterField' => 'device_type',
							'lookupField' => 'device_type' 
						),
						array(
							'masterField' => 'previous_quantity',
							'lookupField' => 'quantity' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distribution_log' 
		),
		'device_type' => array(
			'name' => 'device_type',
			'goodName' => 'device_type',
			'strField' => 'device_type',
			'sourceSingle' => 'device_type',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'device_type',
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
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.devices',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'device_id',
					'lookupDisplayField' => 'device_type',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distribution_log' 
		),
		'previous_quantity' => array(
			'name' => 'previous_quantity',
			'goodName' => 'previous_quantity',
			'strField' => 'previous_quantity',
			'sourceSingle' => 'previous_quantity',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'previous_quantity',
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
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.device_distributions',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'distribution_id',
					'lookupDisplayField' => 'quantity',
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'distribution_id',
							'lookupField' => 'distribution_id' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_distribution_log' 
		),
		'distributed_quantity' => array(
			'name' => 'distributed_quantity',
			'goodName' => 'distributed_quantity',
			'strField' => 'distributed_quantity',
			'sourceSingle' => 'distributed_quantity',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'distributed_quantity',
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
			'tableName' => 'public.device_distribution_log' 
		),
		'new_quantity' => array(
			'name' => 'new_quantity',
			'goodName' => 'new_quantity',
			'strField' => 'new_quantity',
			'sourceSingle' => 'new_quantity',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'new_quantity',
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
			'tableName' => 'public.device_distribution_log' 
		),
		'performed_by' => array(
			'name' => 'performed_by',
			'goodName' => 'performed_by',
			'strField' => 'performed_by',
			'sourceSingle' => 'performed_by',
			'index' => 7,
			'sqlExpression' => 'performed_by',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'defaultValue' => '$_SESSION["UserID"]',
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
			'tableName' => 'public.device_distribution_log' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 8,
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
			'tableName' => 'public.device_distribution_log' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.device_distributions',
			'detailsKeys' => array( 
				'distribution_id' 
			),
			'masterKeys' => array( 
				'distribution_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	log_id,
	distribution_id,
	device_type,
	previous_quantity,
	distributed_quantity,
	new_quantity,
	performed_by,
	created_at
FROM
	"public".device_distribution_log',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'log_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'log_id' 
				),
				'encrypted' => false,
				'columnName' => 'log_id' 
			),
			array(
				'sql' => 'distribution_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'distribution_id' 
				),
				'encrypted' => false,
				'columnName' => 'distribution_id' 
			),
			array(
				'sql' => 'device_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'device_type' 
				),
				'encrypted' => false,
				'columnName' => 'device_type' 
			),
			array(
				'sql' => 'previous_quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'previous_quantity' 
				),
				'encrypted' => false,
				'columnName' => 'previous_quantity' 
			),
			array(
				'sql' => 'distributed_quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'distributed_quantity' 
				),
				'encrypted' => false,
				'columnName' => 'distributed_quantity' 
			),
			array(
				'sql' => 'new_quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'new_quantity' 
				),
				'encrypted' => false,
				'columnName' => 'new_quantity' 
			),
			array(
				'sql' => 'performed_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_distribution_log',
					'name' => 'performed_by' 
				),
				'encrypted' => false,
				'columnName' => 'performed_by' 
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
					'table' => 'public.device_distribution_log',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".device_distribution_log',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".device_distribution_log',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'log_id',
						'distribution_id',
						'device_type',
						'previous_quantity',
						'distributed_quantity',
						'new_quantity',
						'performed_by',
						'created_at' 
					),
					'name' => 'public.device_distribution_log' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'log_id,
	distribution_id,
	device_type,
	previous_quantity,
	distributed_quantity,
	new_quantity,
	performed_by,
	created_at',
		'fromListSql' => 'FROM
	"public".device_distribution_log',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.device_distribution_log',
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
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'log_id',
			'distribution_id',
			'device_type',
			'previous_quantity',
			'distributed_quantity',
			'new_quantity',
			'performed_by',
			'created_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'log_id',
			'distribution_id',
			'device_type',
			'previous_quantity',
			'distributed_quantity',
			'new_quantity',
			'performed_by',
			'created_at' 
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
	$runnerTableLabels['public.device_distribution_log'] = array(
	'tableCaption' => 'Device Distribution Log',
	'fieldLabels' => array(
		'log_id' => 'Log Id',
		'distribution_id' => 'Distribution Id',
		'device_type' => 'Device Type',
		'previous_quantity' => 'Previous Quantity',
		'distributed_quantity' => 'Distributed Quantity',
		'new_quantity' => 'New Quantity',
		'performed_by' => 'Performed By',
		'created_at' => 'Created At' 
	),
	'fieldTooltips' => array(
		'log_id' => '',
		'distribution_id' => '',
		'device_type' => '',
		'previous_quantity' => '',
		'distributed_quantity' => '',
		'new_quantity' => '',
		'performed_by' => '',
		'created_at' => '' 
	),
	'fieldPlaceholders' => array(
		'log_id' => '',
		'distribution_id' => '',
		'device_type' => '',
		'previous_quantity' => '',
		'distributed_quantity' => '',
		'new_quantity' => '',
		'performed_by' => '',
		'created_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>