<?php
global $runnerTableSettings;
$runnerTableSettings['public.lifeboxme__audit'] = array(
	'name' => 'public.lifeboxme__audit',
	'shortName' => 'lifeboxme__audit',
	'pagesByType' => array(
		'export' => array( 
			'export' 
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
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'audit' => true,
	'detailsBadgeColor' => '5F9EA0',
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
	id,
	"datetime",
	ip,
	"user",
	"table",
	"action",
	description
FROM
	"public".lifeboxme__audit',
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
			'sourceSingle' => 'id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'id',
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
			'tableName' => 'public.lifeboxme__audit' 
		),
		'datetime' => array(
			'name' => 'datetime',
			'goodName' => 'datetime',
			'strField' => 'datetime',
			'sourceSingle' => 'datetime',
			'index' => 2,
			'type' => 135,
			'sqlExpression' => '"datetime"',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date',
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'required' => true,
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
			'tableName' => 'public.lifeboxme__audit' 
		),
		'ip' => array(
			'name' => 'ip',
			'goodName' => 'ip',
			'strField' => 'ip',
			'sourceSingle' => 'ip',
			'index' => 3,
			'sqlExpression' => 'ip',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme__audit',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'ip',
					'lookupDisplayField' => 'ip',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme__audit' 
		),
		'user' => array(
			'name' => 'user',
			'goodName' => 'user',
			'strField' => 'user',
			'sourceSingle' => 'user',
			'index' => 4,
			'sqlExpression' => '"user"',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme__audit',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'user',
					'lookupDisplayField' => 'user',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme__audit' 
		),
		'table' => array(
			'name' => 'table',
			'goodName' => 'table',
			'strField' => 'table',
			'sourceSingle' => 'table',
			'index' => 5,
			'sqlExpression' => '"table"',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme__audit',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'table',
					'lookupDisplayField' => 'table',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme__audit' 
		),
		'action' => array(
			'name' => 'action',
			'goodName' => 'action',
			'strField' => 'action',
			'sourceSingle' => 'action',
			'index' => 6,
			'sqlExpression' => '"action"',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme__audit',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'action',
					'lookupDisplayField' => 'action',
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.lifeboxme__audit' 
		),
		'description' => array(
			'name' => 'description',
			'goodName' => 'description',
			'strField' => 'description',
			'sourceSingle' => 'description',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'description',
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
			'tableName' => 'public.lifeboxme__audit' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	"datetime",
	ip,
	"user",
	"table",
	"action",
	description
FROM
	"public".lifeboxme__audit',
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
					'table' => 'public.lifeboxme__audit',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => '"datetime"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme__audit',
					'name' => 'datetime' 
				),
				'encrypted' => false,
				'columnName' => 'datetime' 
			),
			array(
				'sql' => 'ip',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme__audit',
					'name' => 'ip' 
				),
				'encrypted' => false,
				'columnName' => 'ip' 
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
					'table' => 'public.lifeboxme__audit',
					'name' => 'user' 
				),
				'encrypted' => false,
				'columnName' => 'user' 
			),
			array(
				'sql' => '"table"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme__audit',
					'name' => 'table' 
				),
				'encrypted' => false,
				'columnName' => 'table' 
			),
			array(
				'sql' => '"action"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme__audit',
					'name' => 'action' 
				),
				'encrypted' => false,
				'columnName' => 'action' 
			),
			array(
				'sql' => 'description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme__audit',
					'name' => 'description' 
				),
				'encrypted' => false,
				'columnName' => 'description' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme__audit',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme__audit',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'datetime',
						'ip',
						'user',
						'table',
						'action',
						'description' 
					),
					'name' => 'public.lifeboxme__audit' 
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
		'fieldListSql' => 'id,
	"datetime",
	ip,
	"user",
	"table",
	"action",
	description',
		'fromListSql' => 'FROM
	"public".lifeboxme__audit',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme__audit',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
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
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'id',
			'datetime',
			'ip',
			'user',
			'table',
			'action',
			'description' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'datetime',
			'ip',
			'user',
			'table',
			'action',
			'description' 
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
	$runnerTableLabels['public.lifeboxme__audit'] = array(
	'tableCaption' => 'Lifeboxme  Audit',
	'fieldLabels' => array(
		'id' => 'Id',
		'datetime' => 'Datetime',
		'ip' => 'Ip',
		'user' => 'User',
		'table' => 'Table',
		'action' => 'Action',
		'description' => 'Description' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'datetime' => '',
		'ip' => '',
		'user' => '',
		'table' => '',
		'action' => '',
		'description' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'datetime' => '',
		'ip' => '',
		'user' => '',
		'table' => '',
		'action' => '',
		'description' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>