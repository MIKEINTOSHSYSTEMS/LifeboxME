<?php
global $runnerTableSettings;
$runnerTableSettings['public.lbpmi_indicator_groups'] = array(
	'name' => 'public.lbpmi_indicator_groups',
	'shortName' => 'lbpmi_indicator_groups',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'detailsBadgeColor' => 'CD853F',
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
	indicator_group_id,
	indicator_group_name,
	indicator_group_description,
	indicator_group_code
FROM
	"public".lbpmi_indicator_groups',
	'keyFields' => array( 
		'indicator_group_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'indicator_group_id' => array(
			'name' => 'indicator_group_id',
			'goodName' => 'indicator_group_id',
			'strField' => 'indicator_group_id',
			'sourceSingle' => 'indicator_group_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'indicator_group_id',
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
			'tableName' => 'public.lbpmi_indicator_groups' 
		),
		'indicator_group_name' => array(
			'name' => 'indicator_group_name',
			'goodName' => 'indicator_group_name',
			'strField' => 'indicator_group_name',
			'sourceSingle' => 'indicator_group_name',
			'index' => 2,
			'sqlExpression' => 'indicator_group_name',
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
			'tableName' => 'public.lbpmi_indicator_groups' 
		),
		'indicator_group_description' => array(
			'name' => 'indicator_group_description',
			'goodName' => 'indicator_group_description',
			'strField' => 'indicator_group_description',
			'sourceSingle' => 'indicator_group_description',
			'index' => 3,
			'sqlExpression' => 'indicator_group_description',
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
			'tableName' => 'public.lbpmi_indicator_groups' 
		),
		'indicator_group_code' => array(
			'name' => 'indicator_group_code',
			'goodName' => 'indicator_group_code',
			'strField' => 'indicator_group_code',
			'sourceSingle' => 'indicator_group_code',
			'index' => 4,
			'sqlExpression' => 'indicator_group_code',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Readonly',
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
			'tableName' => 'public.lbpmi_indicator_groups' 
		) 
	),
	'detailsTables' => array( 
		'public.lbpmi_indicators' 
	),
	'query' => array(
		'sql' => 'SELECT
	indicator_group_id,
	indicator_group_name,
	indicator_group_description,
	indicator_group_code
FROM
	"public".lbpmi_indicator_groups',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'indicator_group_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_indicator_groups',
					'name' => 'indicator_group_id' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_id' 
			),
			array(
				'sql' => 'indicator_group_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_indicator_groups',
					'name' => 'indicator_group_name' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_name' 
			),
			array(
				'sql' => 'indicator_group_description',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_indicator_groups',
					'name' => 'indicator_group_description' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_description' 
			),
			array(
				'sql' => 'indicator_group_code',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lbpmi_indicator_groups',
					'name' => 'indicator_group_code' 
				),
				'encrypted' => false,
				'columnName' => 'indicator_group_code' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lbpmi_indicator_groups',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lbpmi_indicator_groups',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'indicator_group_id',
						'indicator_group_name',
						'indicator_group_description',
						'indicator_group_code' 
					),
					'name' => 'public.lbpmi_indicator_groups' 
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
		'fieldListSql' => 'indicator_group_id,
	indicator_group_name,
	indicator_group_description,
	indicator_group_code',
		'fromListSql' => 'FROM
	"public".lbpmi_indicator_groups',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'hasEvents' => true,
	'originalTable' => 'public.lbpmi_indicator_groups',
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
		'masterlist' => array( 
			'masterlist' 
		),
		'masterprint' => array( 
			'masterprint' 
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
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
		'masterlist' => 'masterlist',
		'masterprint' => 'masterprint',
		'print' => 'print',
		'search' => 'search',
		'view' => 'view' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			'indicator_group_id',
			'indicator_group_name',
			'indicator_group_description',
			'indicator_group_code' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'indicator_group_id',
			'indicator_group_name',
			'indicator_group_description',
			'indicator_group_code' 
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
	$runnerTableLabels['public.lbpmi_indicator_groups'] = array(
	'tableCaption' => 'Lbpmi Indicator Groups',
	'fieldLabels' => array(
		'indicator_group_id' => 'Indicator Group Id',
		'indicator_group_name' => 'Indicator Group Name',
		'indicator_group_description' => 'Indicator Group Description',
		'indicator_group_code' => 'Indicator Group Code (Auto Generated)' 
	),
	'fieldTooltips' => array(
		'indicator_group_id' => '',
		'indicator_group_name' => '',
		'indicator_group_description' => '',
		'indicator_group_code' => '' 
	),
	'fieldPlaceholders' => array(
		'indicator_group_id' => '',
		'indicator_group_name' => '',
		'indicator_group_description' => '',
		'indicator_group_code' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>