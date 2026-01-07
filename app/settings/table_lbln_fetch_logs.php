<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbln_fetch_logs'] = array(
	'name' => 'public.lbln_fetch_logs',
	'shortName' => 'lbln_fetch_logs',
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
	'afterEditDetails' => 'public.lbln_fetch_logs',
	'afterAddDetail' => 'public.lbln_fetch_logs',
	'detailsBadgeColor' => '778899',
	'displayLoading' => true,
	'sql' => 'SELECT
	log_id,
	operation_type,
	table_name,
	items_processed,
	items_inserted,
	items_updated,
	items_skipped,
	errors,
	start_time,
	end_time,
	duration,
	status,
	message,
	"parameters"
FROM
	"public".lbln_fetch_logs
',
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
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'log_id',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'operation_type' => array(
			'name' => 'operation_type',
			'goodName' => 'operation_type',
			'strField' => 'operation_type',
			'index' => 2,
			'sqlExpression' => 'operation_type',
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
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'table_name' => array(
			'name' => 'table_name',
			'goodName' => 'table_name',
			'strField' => 'table_name',
			'index' => 3,
			'sqlExpression' => 'table_name',
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
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'items_processed' => array(
			'name' => 'items_processed',
			'goodName' => 'items_processed',
			'strField' => 'items_processed',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'items_processed',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'items_inserted' => array(
			'name' => 'items_inserted',
			'goodName' => 'items_inserted',
			'strField' => 'items_inserted',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'items_inserted',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'items_updated' => array(
			'name' => 'items_updated',
			'goodName' => 'items_updated',
			'strField' => 'items_updated',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'items_updated',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'items_skipped' => array(
			'name' => 'items_skipped',
			'goodName' => 'items_skipped',
			'strField' => 'items_skipped',
			'index' => 7,
			'type' => 3,
			'sqlExpression' => 'items_skipped',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'errors' => array(
			'name' => 'errors',
			'goodName' => 'errors',
			'strField' => 'errors',
			'index' => 8,
			'type' => 13,
			'sqlExpression' => 'errors',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'start_time' => array(
			'name' => 'start_time',
			'goodName' => 'start_time',
			'strField' => 'start_time',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'start_time',
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
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'end_time' => array(
			'name' => 'end_time',
			'goodName' => 'end_time',
			'strField' => 'end_time',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'end_time',
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
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'duration' => array(
			'name' => 'duration',
			'goodName' => 'duration',
			'strField' => 'duration',
			'index' => 11,
			'type' => 13,
			'sqlExpression' => 'duration',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'status' => array(
			'name' => 'status',
			'goodName' => 'status',
			'strField' => 'status',
			'index' => 12,
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
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'message' => array(
			'name' => 'message',
			'goodName' => 'message',
			'strField' => 'message',
			'index' => 13,
			'type' => 201,
			'sqlExpression' => 'message',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		),
		'parameters' => array(
			'name' => 'parameters',
			'goodName' => 'parameters',
			'strField' => 'parameters',
			'index' => 14,
			'type' => 13,
			'sqlExpression' => '"parameters"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lbln_fetch_logs' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	log_id,
	operation_type,
	table_name,
	items_processed,
	items_inserted,
	items_updated,
	items_skipped,
	errors,
	start_time,
	end_time,
	duration,
	status,
	message,
	"parameters"
FROM
	"public".lbln_fetch_logs
',
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
					'table' => 'public.lbln_fetch_logs',
					'name' => 'log_id' 
				),
				'encrypted' => false,
				'columnName' => 'log_id' 
			),
			array(
				'sql' => 'operation_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'operation_type' 
				),
				'encrypted' => false,
				'columnName' => 'operation_type' 
			),
			array(
				'sql' => 'table_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'table_name' 
				),
				'encrypted' => false,
				'columnName' => 'table_name' 
			),
			array(
				'sql' => 'items_processed',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'items_processed' 
				),
				'encrypted' => false,
				'columnName' => 'items_processed' 
			),
			array(
				'sql' => 'items_inserted',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'items_inserted' 
				),
				'encrypted' => false,
				'columnName' => 'items_inserted' 
			),
			array(
				'sql' => 'items_updated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'items_updated' 
				),
				'encrypted' => false,
				'columnName' => 'items_updated' 
			),
			array(
				'sql' => 'items_skipped',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'items_skipped' 
				),
				'encrypted' => false,
				'columnName' => 'items_skipped' 
			),
			array(
				'sql' => 'errors',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'errors' 
				),
				'encrypted' => false,
				'columnName' => 'errors' 
			),
			array(
				'sql' => 'start_time',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'start_time' 
				),
				'encrypted' => false,
				'columnName' => 'start_time' 
			),
			array(
				'sql' => 'end_time',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'end_time' 
				),
				'encrypted' => false,
				'columnName' => 'end_time' 
			),
			array(
				'sql' => 'duration',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'duration' 
				),
				'encrypted' => false,
				'columnName' => 'duration' 
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
					'table' => 'public.lbln_fetch_logs',
					'name' => 'status' 
				),
				'encrypted' => false,
				'columnName' => 'status' 
			),
			array(
				'sql' => 'message',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'message' 
				),
				'encrypted' => false,
				'columnName' => 'message' 
			),
			array(
				'sql' => '"parameters"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbln_fetch_logs',
					'name' => 'parameters' 
				),
				'encrypted' => false,
				'columnName' => 'parameters' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbln_fetch_logs',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbln_fetch_logs',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'log_id',
						'operation_type',
						'table_name',
						'items_processed',
						'items_inserted',
						'items_updated',
						'items_skipped',
						'errors',
						'start_time',
						'end_time',
						'duration',
						'status',
						'message',
						'parameters' 
					),
					'name' => 'public.lbln_fetch_logs' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'log_id,
	operation_type,
	table_name,
	items_processed,
	items_inserted,
	items_updated,
	items_skipped,
	errors,
	start_time,
	end_time,
	duration,
	status,
	message,
	"parameters"',
		'fromListSql' => 'FROM
	"public".lbln_fetch_logs',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lbln_fetch_logs',
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
			'log_id',
			'operation_type',
			'table_name',
			'items_processed',
			'items_inserted',
			'items_updated',
			'items_skipped',
			'errors',
			'start_time',
			'end_time',
			'duration',
			'status',
			'message',
			'parameters' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'log_id',
			'operation_type',
			'table_name',
			'items_processed',
			'items_inserted',
			'items_updated',
			'items_skipped',
			'errors',
			'start_time',
			'end_time',
			'duration',
			'status',
			'message',
			'parameters' 
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
	$runnerTableLabels['public.lbln_fetch_logs'] = array(
	'tableCaption' => 'Lbln Fetch Logs',
	'fieldLabels' => array(
		'log_id' => 'Log Id',
		'operation_type' => 'Operation Type',
		'table_name' => 'Table Name',
		'items_processed' => 'Items Processed',
		'items_inserted' => 'Items Inserted',
		'items_updated' => 'Items Updated',
		'items_skipped' => 'Items Skipped',
		'errors' => 'Errors',
		'start_time' => 'Start Time',
		'end_time' => 'End Time',
		'duration' => 'Duration',
		'status' => 'Status',
		'message' => 'Message',
		'parameters' => 'Parameters' 
	),
	'fieldTooltips' => array(
		'log_id' => '',
		'operation_type' => '',
		'table_name' => '',
		'items_processed' => '',
		'items_inserted' => '',
		'items_updated' => '',
		'items_skipped' => '',
		'errors' => '',
		'start_time' => '',
		'end_time' => '',
		'duration' => '',
		'status' => '',
		'message' => '',
		'parameters' => '' 
	),
	'fieldPlaceholders' => array(
		'log_id' => '',
		'operation_type' => '',
		'table_name' => '',
		'items_processed' => '',
		'items_inserted' => '',
		'items_updated' => '',
		'items_skipped' => '',
		'errors' => '',
		'start_time' => '',
		'end_time' => '',
		'duration' => '',
		'status' => '',
		'message' => '',
		'parameters' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>