<?php
global $runnerTableSettings;
$runnerTableSettings['public.lifeboxme_noti'] = array(
	'name' => 'public.lifeboxme_noti',
	'shortName' => 'lifeboxme_noti',
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
	'afterEditDetails' => 'public.lifeboxme_noti',
	'afterAddDetail' => 'public.lifeboxme_noti',
	'detailsBadgeColor' => 'e8926f',
	'sql' => 'SELECT
	id,
	message,
	"user",
	provider,
	title,
	url,
	icon,
	created,
	expire,
	"type",
	"group"
FROM
	"public".lifeboxme_noti',
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
			'tableName' => 'public.lifeboxme_noti' 
		),
		'message' => array(
			'name' => 'message',
			'goodName' => 'message',
			'strField' => 'message',
			'index' => 2,
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
			'tableName' => 'public.lifeboxme_noti' 
		),
		'user' => array(
			'name' => 'user',
			'goodName' => 'user',
			'strField' => 'user',
			'index' => 3,
			'sqlExpression' => '"user"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		),
		'provider' => array(
			'name' => 'provider',
			'goodName' => 'provider',
			'strField' => 'provider',
			'index' => 4,
			'sqlExpression' => 'provider',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		),
		'title' => array(
			'name' => 'title',
			'goodName' => 'title',
			'strField' => 'title',
			'index' => 5,
			'sqlExpression' => 'title',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		),
		'url' => array(
			'name' => 'url',
			'goodName' => 'url',
			'strField' => 'url',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'url',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		),
		'icon' => array(
			'name' => 'icon',
			'goodName' => 'icon',
			'strField' => 'icon',
			'index' => 7,
			'sqlExpression' => 'icon',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		),
		'created' => array(
			'name' => 'created',
			'goodName' => 'created',
			'strField' => 'created',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'created',
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
			'tableName' => 'public.lifeboxme_noti' 
		),
		'expire' => array(
			'name' => 'expire',
			'goodName' => 'expire',
			'strField' => 'expire',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'expire',
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
			'tableName' => 'public.lifeboxme_noti' 
		),
		'type' => array(
			'name' => 'type',
			'goodName' => 'type',
			'strField' => 'type',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => '"type"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		),
		'group' => array(
			'name' => 'group',
			'goodName' => 'group',
			'strField' => 'group',
			'index' => 11,
			'sqlExpression' => '"group"',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'public.lifeboxme_noti' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	message,
	"user",
	provider,
	title,
	url,
	icon,
	created,
	expire,
	"type",
	"group"
FROM
	"public".lifeboxme_noti',
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
					'table' => 'public.lifeboxme_noti',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
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
					'table' => 'public.lifeboxme_noti',
					'name' => 'message' 
				),
				'encrypted' => false,
				'columnName' => 'message' 
			),
			array(
				'sql' => '"user"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'user' 
				),
				'encrypted' => false,
				'columnName' => 'user' 
			),
			array(
				'sql' => 'provider',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'provider' 
				),
				'encrypted' => false,
				'columnName' => 'provider' 
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
					'table' => 'public.lifeboxme_noti',
					'name' => 'title' 
				),
				'encrypted' => false,
				'columnName' => 'title' 
			),
			array(
				'sql' => 'url',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'url' 
				),
				'encrypted' => false,
				'columnName' => 'url' 
			),
			array(
				'sql' => 'icon',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'icon' 
				),
				'encrypted' => false,
				'columnName' => 'icon' 
			),
			array(
				'sql' => 'created',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'created' 
				),
				'encrypted' => false,
				'columnName' => 'created' 
			),
			array(
				'sql' => 'expire',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'expire' 
				),
				'encrypted' => false,
				'columnName' => 'expire' 
			),
			array(
				'sql' => '"type"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'type' 
				),
				'encrypted' => false,
				'columnName' => 'type' 
			),
			array(
				'sql' => '"group"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_noti',
					'name' => 'group' 
				),
				'encrypted' => false,
				'columnName' => 'group' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme_noti',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme_noti',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'message',
						'user',
						'provider',
						'title',
						'url',
						'icon',
						'created',
						'expire',
						'type',
						'group' 
					),
					'name' => 'public.lifeboxme_noti' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'id,
	message,
	"user",
	provider,
	title,
	url,
	icon,
	created,
	expire,
	"type",
	"group"',
		'fromListSql' => 'FROM
	"public".lifeboxme_noti',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme_noti',
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
			'id',
			'message',
			'user',
			'provider',
			'title',
			'url',
			'icon',
			'created',
			'expire',
			'type',
			'group' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'message',
			'user',
			'provider',
			'title',
			'url',
			'icon',
			'created',
			'expire',
			'type',
			'group' 
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
	$runnerTableLabels['public.lifeboxme_noti'] = array(
	'tableCaption' => 'Lifeboxme Noti',
	'fieldLabels' => array(
		'id' => 'Id',
		'message' => 'Message',
		'user' => 'User',
		'provider' => 'Provider',
		'title' => 'Title',
		'url' => 'Url',
		'icon' => 'Icon',
		'created' => 'Created',
		'expire' => 'Expire',
		'type' => 'Type',
		'group' => 'Group' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'message' => '',
		'user' => '',
		'provider' => '',
		'title' => '',
		'url' => '',
		'icon' => '',
		'created' => '',
		'expire' => '',
		'type' => '',
		'group' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'message' => '',
		'user' => '',
		'provider' => '',
		'title' => '',
		'url' => '',
		'icon' => '',
		'created' => '',
		'expire' => '',
		'type' => '',
		'group' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>