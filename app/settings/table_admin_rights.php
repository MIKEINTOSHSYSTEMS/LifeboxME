<?php
global $runnerTableSettings;
$runnerTableSettings['admin_rights'] = array(
	'name' => 'admin_rights',
	'type' => 1,
	'shortName' => 'admin_rights',
	'audit' => true,
	'detailsBadgeColor' => '3CB371',
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
	"TableName",
	"GroupID",
	"AccessMask",
	"Page"
FROM "public".lifeboxme_ugrights',
	'keyFields' => array( 
		'TableName',
		'GroupID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'TableName' => array(
			'name' => 'TableName',
			'goodName' => 'TableName',
			'strField' => 'TableName',
			'sourceSingle' => 'TableName',
			'index' => 1,
			'sqlExpression' => '"TableName"',
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
			'tableName' => 'public.lifeboxme_ugrights' 
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
			'tableName' => 'public.lifeboxme_ugrights' 
		),
		'AccessMask' => array(
			'name' => 'AccessMask',
			'goodName' => 'AccessMask',
			'strField' => 'AccessMask',
			'sourceSingle' => 'AccessMask',
			'index' => 3,
			'sqlExpression' => '"AccessMask"',
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
			'tableName' => 'public.lifeboxme_ugrights' 
		),
		'Page' => array(
			'name' => 'Page',
			'goodName' => 'Page',
			'strField' => 'Page',
			'sourceSingle' => 'Page',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => '"Page"',
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
			'tableName' => 'public.lifeboxme_ugrights' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	"TableName",
	"GroupID",
	"AccessMask",
	"Page"
FROM "public".lifeboxme_ugrights',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => '"TableName"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_ugrights',
					'name' => 'TableName' 
				),
				'encrypted' => false,
				'columnName' => 'TableName' 
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
					'table' => 'public.lifeboxme_ugrights',
					'name' => 'GroupID' 
				),
				'encrypted' => false,
				'columnName' => 'GroupID' 
			),
			array(
				'sql' => '"AccessMask"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_ugrights',
					'name' => 'AccessMask' 
				),
				'encrypted' => false,
				'columnName' => 'AccessMask' 
			),
			array(
				'sql' => '"Page"',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_ugrights',
					'name' => 'Page' 
				),
				'encrypted' => false,
				'columnName' => 'Page' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme_ugrights',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme_ugrights',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'TableName',
						'GroupID',
						'AccessMask',
						'Page' 
					),
					'name' => 'public.lifeboxme_ugrights' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => '"TableName",
	"GroupID",
	"AccessMask",
	"Page"',
		'fromListSql' => 'FROM "public".lifeboxme_ugrights',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme_ugrights',
	'originalPagesByType' => array(
		 
	),
	'originalPageTypes' => array(
		 
	),
	'originalDefaultPages' => array(
		 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'TableName',
			'GroupID',
			'AccessMask',
			'Page' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'TableName',
			'GroupID',
			'AccessMask',
			'Page' 
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
	$runnerTableLabels['admin_rights'] = array(
	'tableCaption' => 'Admin Rights',
	'fieldLabels' => array(
		'TableName' => 'Table Name',
		'GroupID' => 'Group ID',
		'AccessMask' => 'Access Mask',
		'Page' => 'Page' 
	),
	'fieldTooltips' => array(
		'TableName' => '',
		'GroupID' => '',
		'AccessMask' => '',
		'Page' => '' 
	),
	'fieldPlaceholders' => array(
		'TableName' => '',
		'GroupID' => '',
		'AccessMask' => '',
		'Page' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>