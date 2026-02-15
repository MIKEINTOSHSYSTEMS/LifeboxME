<?php
global $runnerTableSettings;
$runnerTableSettings['public.system_notifications'] = array(
	'name' => 'public.system_notifications',
	'shortName' => 'system_notifications',
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
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'afterEditDetails' => 'public.system_notifications',
	'afterAddDetail' => 'public.system_notifications',
	'detailsBadgeColor' => '7b68ee',
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	id,
	title,
	content,
	notification_type,
	is_active,
	start_date,
	end_date,
	created_at,
	updated_at,
	created_by,
	priority,
	action_url,
	action_text
FROM
	"public".system_notifications',
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
			'tableName' => 'public.system_notifications' 
		),
		'title' => array(
			'name' => 'title',
			'goodName' => 'title',
			'strField' => 'title',
			'index' => 2,
			'sqlExpression' => 'title',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'content' => array(
			'name' => 'content',
			'goodName' => 'content',
			'strField' => 'content',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'content',
			'viewFormats' => array(
				'view' => array(
					'format' => 'HTML' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area',
					'textareaRTE' => true 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'notification_type' => array(
			'name' => 'notification_type',
			'goodName' => 'notification_type',
			'strField' => 'notification_type',
			'index' => 4,
			'sqlExpression' => 'notification_type',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'lookupType' => 0,
					'lookupValues' => array( 
						'info',
						'warning',
						'primary',
						'danger',
						'success' 
					) 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'is_active' => array(
			'name' => 'is_active',
			'goodName' => 'is_active',
			'strField' => 'is_active',
			'index' => 5,
			'type' => 11,
			'sqlExpression' => 'is_active',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Checkbox' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Checkbox' 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'start_date' => array(
			'name' => 'start_date',
			'goodName' => 'start_date',
			'strField' => 'start_date',
			'index' => 6,
			'type' => 135,
			'sqlExpression' => 'start_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11,
					'dateShowTime' => true 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'end_date' => array(
			'name' => 'end_date',
			'goodName' => 'end_date',
			'strField' => 'end_date',
			'index' => 7,
			'type' => 135,
			'sqlExpression' => 'end_date',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11,
					'dateShowTime' => true 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'created_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => 'date("Y-m-d H:i:s")',
					'dateEditType' => 11,
					'dateShowTime' => true 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'updated_at' => array(
			'name' => 'updated_at',
			'goodName' => 'updated_at',
			'strField' => 'updated_at',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'updated_at',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'autoUpdateValue' => 'date("Y-m-d H:i:s")',
					'dateEditType' => 11,
					'dateShowTime' => true 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'created_by' => array(
			'name' => 'created_by',
			'goodName' => 'created_by',
			'strField' => 'created_by',
			'index' => 10,
			'sqlExpression' => 'created_by',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
					'defaultValue' => '$_SESSION["UserName"]',
					'autoUpdateValue' => '$_SESSION["UserName"]' 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'priority' => array(
			'name' => 'priority',
			'goodName' => 'priority',
			'strField' => 'priority',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'priority',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'required' => true,
					'validateAs' => 'Number',
					'denyDuplicate' => true,
					'textInsertNull' => true,
					'textHTML5Input' => 'Number' 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'action_url' => array(
			'name' => 'action_url',
			'goodName' => 'action_url',
			'strField' => 'action_url',
			'index' => 12,
			'sqlExpression' => 'action_url',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Hyperlink' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.system_notifications' 
		),
		'action_text' => array(
			'name' => 'action_text',
			'goodName' => 'action_text',
			'strField' => 'action_text',
			'index' => 13,
			'sqlExpression' => 'action_text',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.system_notifications' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	title,
	content,
	notification_type,
	is_active,
	start_date,
	end_date,
	created_at,
	updated_at,
	created_by,
	priority,
	action_url,
	action_text
FROM
	"public".system_notifications',
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
					'table' => 'public.system_notifications',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'title',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'title' 
				),
				'encrypted' => false,
				'columnName' => 'title' 
			),
			array(
				'sql' => 'content',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'content' 
				),
				'encrypted' => false,
				'columnName' => 'content' 
			),
			array(
				'sql' => 'notification_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'notification_type' 
				),
				'encrypted' => false,
				'columnName' => 'notification_type' 
			),
			array(
				'sql' => 'is_active',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'is_active' 
				),
				'encrypted' => false,
				'columnName' => 'is_active' 
			),
			array(
				'sql' => 'start_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'start_date' 
				),
				'encrypted' => false,
				'columnName' => 'start_date' 
			),
			array(
				'sql' => 'end_date',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'end_date' 
				),
				'encrypted' => false,
				'columnName' => 'end_date' 
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
					'table' => 'public.system_notifications',
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
					'table' => 'public.system_notifications',
					'name' => 'updated_at' 
				),
				'encrypted' => false,
				'columnName' => 'updated_at' 
			),
			array(
				'sql' => 'created_by',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'created_by' 
				),
				'encrypted' => false,
				'columnName' => 'created_by' 
			),
			array(
				'sql' => 'priority',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'priority' 
				),
				'encrypted' => false,
				'columnName' => 'priority' 
			),
			array(
				'sql' => 'action_url',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'action_url' 
				),
				'encrypted' => false,
				'columnName' => 'action_url' 
			),
			array(
				'sql' => 'action_text',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.system_notifications',
					'name' => 'action_text' 
				),
				'encrypted' => false,
				'columnName' => 'action_text' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".system_notifications',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".system_notifications',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'title',
						'content',
						'notification_type',
						'is_active',
						'start_date',
						'end_date',
						'created_at',
						'updated_at',
						'created_by',
						'priority',
						'action_url',
						'action_text' 
					),
					'name' => 'public.system_notifications' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	title,
	content,
	notification_type,
	is_active,
	start_date,
	end_date,
	created_at,
	updated_at,
	created_by,
	priority,
	action_url,
	action_text',
		'fromListSql' => 'FROM
	"public".system_notifications',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.system_notifications',
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
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'edit' => 'edit',
		'view' => 'view',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'id',
			'title',
			'content',
			'notification_type',
			'is_active',
			'start_date',
			'end_date',
			'created_at',
			'updated_at',
			'created_by',
			'priority',
			'action_url',
			'action_text' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'title',
			'content',
			'notification_type',
			'is_active',
			'start_date',
			'end_date',
			'created_at',
			'updated_at',
			'created_by',
			'priority',
			'action_url',
			'action_text' 
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
	$runnerTableLabels['public.system_notifications'] = array(
	'tableCaption' => 'System Notifications',
	'fieldLabels' => array(
		'id' => 'Id',
		'title' => 'Title',
		'content' => 'Content',
		'notification_type' => 'Notification Type',
		'is_active' => 'Is Active',
		'start_date' => 'Start Date',
		'end_date' => 'End Date',
		'created_at' => 'Created At',
		'updated_at' => 'Updated At',
		'created_by' => 'Created By',
		'priority' => 'Priority',
		'action_url' => 'Action Url',
		'action_text' => 'Action Text' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'title' => '',
		'content' => '',
		'notification_type' => '',
		'is_active' => '',
		'start_date' => '',
		'end_date' => '',
		'created_at' => '',
		'updated_at' => '',
		'created_by' => '',
		'priority' => '',
		'action_url' => '',
		'action_text' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'title' => '',
		'content' => '',
		'notification_type' => '',
		'is_active' => '',
		'start_date' => '',
		'end_date' => '',
		'created_at' => '',
		'updated_at' => '',
		'created_by' => '',
		'priority' => '',
		'action_url' => '',
		'action_text' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>