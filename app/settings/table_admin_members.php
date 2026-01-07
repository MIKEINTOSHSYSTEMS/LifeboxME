<?php
global $runnerTableSettings;
$runnerTableSettings['admin_members'] = array(
	'name' => 'admin_members',
	'type' => 1,
	'shortName' => 'admin_members',
	'pagesByType' => array(
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'search' => 'search' 
	),
	'defaultPages' => array(
		'search' => 'search' 
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
	"UserName",
	"GroupID",
	"Provider"
FROM
	"public".lifeboxme_ugmembers',
	'keyFields' => array( 
		'UserName',
		'GroupID',
		'Provider' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'UserName' => array(
			'name' => 'UserName',
			'goodName' => 'UserName',
			'strField' => 'UserName',
			'sourceSingle' => 'UserName',
			'index' => 1,
			'sqlExpression' => '"UserName"',
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
			'tableName' => 'public.lifeboxme_ugmembers' 
		),
		'GroupID' => array(
			'name' => 'GroupID',
			'goodName' => 'GroupID',
			'strField' => 'GroupID',
			'sourceSingle' => 'GroupID',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => '"GroupID"',
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
			'tableName' => 'public.lifeboxme_ugmembers' 
		),
		'Provider' => array(
			'name' => 'Provider',
			'goodName' => 'Provider',
			'strField' => 'Provider',
			'sourceSingle' => 'Provider',
			'index' => 3,
			'sqlExpression' => '"Provider"',
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
			'tableName' => 'public.lifeboxme_ugmembers' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	"UserName",
	"GroupID",
	"Provider"
FROM
	"public".lifeboxme_ugmembers',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => '"UserName"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_ugmembers',
					'name' => 'UserName' 
				),
				'encrypted' => false,
				'columnName' => 'UserName' 
			),
			array(
				'sql' => '"GroupID"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_ugmembers',
					'name' => 'GroupID' 
				),
				'encrypted' => false,
				'columnName' => 'GroupID' 
			),
			array(
				'sql' => '"Provider"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_ugmembers',
					'name' => 'Provider' 
				),
				'encrypted' => false,
				'columnName' => 'Provider' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme_ugmembers',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme_ugmembers',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'UserName',
						'GroupID',
						'Provider' 
					),
					'name' => 'public.lifeboxme_ugmembers' 
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
		'fieldListSql' => '"UserName",
	"GroupID",
	"Provider"',
		'fromListSql' => 'FROM
	"public".lifeboxme_ugmembers',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme_ugmembers',
	'originalPagesByType' => array(
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'UserName',
			'GroupID',
			'Provider' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'UserName',
			'GroupID',
			'Provider' 
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
	$runnerTableLabels['admin_members'] = array(
	'tableCaption' => 'Admin Members',
	'fieldLabels' => array(
		'UserName' => 'User Name',
		'GroupID' => 'Group ID',
		'Provider' => 'Provider' 
	),
	'fieldTooltips' => array(
		'UserName' => '',
		'GroupID' => '',
		'Provider' => '' 
	),
	'fieldPlaceholders' => array(
		'UserName' => '',
		'GroupID' => '',
		'Provider' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>