<?php
global $runnerTableSettings;
$runnerTableSettings['public.device_inventory_changes'] = array(
	'name' => 'public.device_inventory_changes',
	'shortName' => 'device_inventory_changes',
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
	'detailsBadgeColor' => '6B8E23',
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
	device_id,
	device_type,
	model,
	current_quantity,
	total_quantity,
	total_distributed,
	calculated_available,
	last_transaction
FROM
	"public".device_inventory_changes',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'device_id' => array(
			'name' => 'device_id',
			'goodName' => 'device_id',
			'strField' => 'device_id',
			'sourceSingle' => 'device_id',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'device_id',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'device_type' => array(
			'name' => 'device_type',
			'goodName' => 'device_type',
			'strField' => 'device_type',
			'sourceSingle' => 'device_type',
			'index' => 2,
			'sqlExpression' => 'device_type',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'model' => array(
			'name' => 'model',
			'goodName' => 'model',
			'strField' => 'model',
			'sourceSingle' => 'model',
			'index' => 3,
			'sqlExpression' => 'model',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'current_quantity' => array(
			'name' => 'current_quantity',
			'goodName' => 'current_quantity',
			'strField' => 'current_quantity',
			'sourceSingle' => 'current_quantity',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'current_quantity',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'total_quantity' => array(
			'name' => 'total_quantity',
			'goodName' => 'total_quantity',
			'strField' => 'total_quantity',
			'sourceSingle' => 'total_quantity',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'total_quantity',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'total_distributed' => array(
			'name' => 'total_distributed',
			'goodName' => 'total_distributed',
			'strField' => 'total_distributed',
			'sourceSingle' => 'total_distributed',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'total_distributed',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'calculated_available' => array(
			'name' => 'calculated_available',
			'goodName' => 'calculated_available',
			'strField' => 'calculated_available',
			'sourceSingle' => 'calculated_available',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'calculated_available',
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
			'tableName' => 'public.device_inventory_changes' 
		),
		'last_transaction' => array(
			'name' => 'last_transaction',
			'goodName' => 'last_transaction',
			'strField' => 'last_transaction',
			'sourceSingle' => 'last_transaction',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'last_transaction',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
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
					'dateEditType' => 13,
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.device_inventory_changes' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	device_id,
	device_type,
	model,
	current_quantity,
	total_quantity,
	total_distributed,
	calculated_available,
	last_transaction
FROM
	"public".device_inventory_changes',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'device_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'device_id' 
				),
				'encrypted' => false,
				'columnName' => 'device_id' 
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
					'table' => 'public.device_inventory_changes',
					'name' => 'device_type' 
				),
				'encrypted' => false,
				'columnName' => 'device_type' 
			),
			array(
				'sql' => 'model',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'model' 
				),
				'encrypted' => false,
				'columnName' => 'model' 
			),
			array(
				'sql' => 'current_quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'current_quantity' 
				),
				'encrypted' => false,
				'columnName' => 'current_quantity' 
			),
			array(
				'sql' => 'total_quantity',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'total_quantity' 
				),
				'encrypted' => false,
				'columnName' => 'total_quantity' 
			),
			array(
				'sql' => 'total_distributed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'total_distributed' 
				),
				'encrypted' => false,
				'columnName' => 'total_distributed' 
			),
			array(
				'sql' => 'calculated_available',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'calculated_available' 
				),
				'encrypted' => false,
				'columnName' => 'calculated_available' 
			),
			array(
				'sql' => 'last_transaction',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.device_inventory_changes',
					'name' => 'last_transaction' 
				),
				'encrypted' => false,
				'columnName' => 'last_transaction' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".device_inventory_changes',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".device_inventory_changes',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'device_id',
						'device_type',
						'model',
						'current_quantity',
						'total_quantity',
						'total_distributed',
						'calculated_available',
						'last_transaction' 
					),
					'name' => 'public.device_inventory_changes' 
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
		'fieldListSql' => 'device_id,
	device_type,
	model,
	current_quantity,
	total_quantity,
	total_distributed,
	calculated_available,
	last_transaction',
		'fromListSql' => 'FROM
	"public".device_inventory_changes',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.device_inventory_changes',
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
			'device_id',
			'device_type',
			'model',
			'current_quantity',
			'total_quantity',
			'total_distributed',
			'calculated_available',
			'last_transaction' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'device_id',
			'device_type',
			'model',
			'current_quantity',
			'total_quantity',
			'total_distributed',
			'calculated_available',
			'last_transaction' 
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
	$runnerTableLabels['public.device_inventory_changes'] = array(
	'tableCaption' => 'Device Inventory Changes',
	'fieldLabels' => array(
		'device_id' => 'Device Id',
		'device_type' => 'Device Type',
		'model' => 'Model',
		'current_quantity' => 'Current Quantity',
		'total_quantity' => 'Total Quantity',
		'total_distributed' => 'Total Distributed',
		'calculated_available' => 'Calculated Available',
		'last_transaction' => 'Last Transaction' 
	),
	'fieldTooltips' => array(
		'device_id' => '',
		'device_type' => '',
		'model' => '',
		'current_quantity' => '',
		'total_quantity' => '',
		'total_distributed' => '',
		'calculated_available' => '',
		'last_transaction' => '' 
	),
	'fieldPlaceholders' => array(
		'device_id' => '',
		'device_type' => '',
		'model' => '',
		'current_quantity' => '',
		'total_quantity' => '',
		'total_distributed' => '',
		'calculated_available' => '',
		'last_transaction' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>