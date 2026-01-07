<?php
global $runnerTableSettings;
$runnerTableSettings['public.ward_antibiotics'] = array(
	'name' => 'public.ward_antibiotics',
	'shortName' => 'ward_antibiotics',
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
	'detailsBadgeColor' => 'D2691E',
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
	ward_antibiotic_id,
	ward_round_id,
	antibiotic_id,
	created_at
FROM
	"public".ward_antibiotics',
	'keyFields' => array( 
		'ward_antibiotic_id' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ward_antibiotic_id' => array(
			'name' => 'ward_antibiotic_id',
			'goodName' => 'ward_antibiotic_id',
			'strField' => 'ward_antibiotic_id',
			'sourceSingle' => 'ward_antibiotic_id',
			'index' => 1,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'ward_antibiotic_id',
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
			'tableName' => 'public.ward_antibiotics' 
		),
		'ward_round_id' => array(
			'name' => 'ward_round_id',
			'goodName' => 'ward_round_id',
			'strField' => 'ward_round_id',
			'sourceSingle' => 'ward_round_id',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'ward_round_id',
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
					'lookupTable' => 'public.ward_rounds',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'ward_round_id',
					'lookupDisplayField' => 'data_collector_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.ward_antibiotics' 
		),
		'antibiotic_id' => array(
			'name' => 'antibiotic_id',
			'goodName' => 'antibiotic_id',
			'strField' => 'antibiotic_id',
			'sourceSingle' => 'antibiotic_id',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'antibiotic_id',
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
					'lookupTable' => 'public.antibiotics',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'antibiotic_id',
					'lookupDisplayField' => 'antibiotic_name',
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'defaultSearchOption' => 'Contains',
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => 'public.ward_antibiotics' 
		),
		'created_at' => array(
			'name' => 'created_at',
			'goodName' => 'created_at',
			'strField' => 'created_at',
			'sourceSingle' => 'created_at',
			'index' => 4,
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
			'tableName' => 'public.ward_antibiotics' 
		) 
	),
	'masterTables' => array( 
		array(
			'table' => 'public.antibiotics',
			'detailsKeys' => array( 
				'antibiotic_id' 
			),
			'masterKeys' => array( 
				'antibiotic_id' 
			) 
		),
		array(
			'table' => 'public.ward_rounds',
			'detailsKeys' => array( 
				'ward_round_id' 
			),
			'masterKeys' => array( 
				'ward_round_id' 
			) 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ward_antibiotic_id,
	ward_round_id,
	antibiotic_id,
	created_at
FROM
	"public".ward_antibiotics',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ward_antibiotic_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_antibiotics',
					'name' => 'ward_antibiotic_id' 
				),
				'encrypted' => false,
				'columnName' => 'ward_antibiotic_id' 
			),
			array(
				'sql' => 'ward_round_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_antibiotics',
					'name' => 'ward_round_id' 
				),
				'encrypted' => false,
				'columnName' => 'ward_round_id' 
			),
			array(
				'sql' => 'antibiotic_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.ward_antibiotics',
					'name' => 'antibiotic_id' 
				),
				'encrypted' => false,
				'columnName' => 'antibiotic_id' 
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
					'table' => 'public.ward_antibiotics',
					'name' => 'created_at' 
				),
				'encrypted' => false,
				'columnName' => 'created_at' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".ward_antibiotics',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".ward_antibiotics',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ward_antibiotic_id',
						'ward_round_id',
						'antibiotic_id',
						'created_at' 
					),
					'name' => 'public.ward_antibiotics' 
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
		'fieldListSql' => 'ward_antibiotic_id,
	ward_round_id,
	antibiotic_id,
	created_at',
		'fromListSql' => 'FROM
	"public".ward_antibiotics',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.ward_antibiotics',
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
			'ward_antibiotic_id',
			'ward_round_id',
			'antibiotic_id',
			'created_at' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ward_antibiotic_id',
			'ward_round_id',
			'antibiotic_id',
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
	$runnerTableLabels['public.ward_antibiotics'] = array(
	'tableCaption' => 'Ward Antibiotics',
	'fieldLabels' => array(
		'ward_antibiotic_id' => 'Ward Antibiotic Id',
		'ward_round_id' => 'Ward Round Id',
		'antibiotic_id' => 'Antibiotic Id',
		'created_at' => 'Created At' 
	),
	'fieldTooltips' => array(
		'ward_antibiotic_id' => '',
		'ward_round_id' => '',
		'antibiotic_id' => '',
		'created_at' => '' 
	),
	'fieldPlaceholders' => array(
		'ward_antibiotic_id' => '',
		'ward_round_id' => '',
		'antibiotic_id' => '',
		'created_at' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>