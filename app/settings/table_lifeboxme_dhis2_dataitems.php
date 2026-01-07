<?php
global $runnerTableSettings;
$runnerTableSettings['public.lifeboxme_dhis2_dataitems'] = array(
	'name' => 'public.lifeboxme_dhis2_dataitems',
	'shortName' => 'lifeboxme_dhis2_dataitems',
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
	'detailsBadgeColor' => 'DB7093',
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
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'sql' => 'SELECT
	id,
	item_id,
	display_name,
	name,
	short_name,
	display_short_name,
	dimension_item_type,
	last_updated
FROM
	"public".lifeboxme_dhis2_dataitems',
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
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'item_id' => array(
			'name' => 'item_id',
			'goodName' => 'item_id',
			'strField' => 'item_id',
			'sourceSingle' => 'item_id',
			'index' => 2,
			'sqlExpression' => 'item_id',
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
					'textboxMaxLenth' => 255,
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
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'display_name' => array(
			'name' => 'display_name',
			'goodName' => 'display_name',
			'strField' => 'display_name',
			'sourceSingle' => 'display_name',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'display_name',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'validateRegexMessage' => array(
						'text' => '',
						'type' => 0 
					),
					'textHTML5Input' => '0',
					'lookupSize' => 4,
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_dataitems',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'display_name',
					'lookupDisplayField' => 'display_name',
					'lookupUnique' => true,
					'lookupDependent' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'dimension_item_type',
							'lookupField' => 'dimension_item_type' 
						) 
					),
					'fileResizeSize' => 1920,
					'fileCreateThumbnail' => true,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotalsField' => 'id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => 'name',
			'sourceSingle' => 'name',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'name',
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
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'short_name' => array(
			'name' => 'short_name',
			'goodName' => 'short_name',
			'strField' => 'short_name',
			'sourceSingle' => 'short_name',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => 'short_name',
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
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'display_short_name' => array(
			'name' => 'display_short_name',
			'goodName' => 'display_short_name',
			'strField' => 'display_short_name',
			'sourceSingle' => 'display_short_name',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'display_short_name',
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
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'dimension_item_type' => array(
			'name' => 'dimension_item_type',
			'goodName' => 'dimension_item_type',
			'strField' => 'dimension_item_type',
			'sourceSingle' => 'dimension_item_type',
			'index' => 7,
			'sqlExpression' => 'dimension_item_type',
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textboxMaxLenth' => 50,
					'textHTML5Input' => '0',
					'lookupType' => 2,
					'lookupTable' => 'public.lifeboxme_dhis2_dataitems',
					'lookupTableConnection' => 'lifebox_mesystem_at_localhost',
					'lookupLinkField' => 'dimension_item_type',
					'lookupDisplayField' => 'dimension_item_type',
					'lookupUnique' => true,
					'lookupDependentFields' => array( 
						array(
							'masterField' => 'display_name',
							'lookupField' => 'display_name' 
						) 
					),
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list',
				'filterTotals' => 1,
				'filterTotalsField' => 'id',
				'filterMultiselect' => 1 
			),
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		),
		'last_updated' => array(
			'name' => 'last_updated',
			'goodName' => 'last_updated',
			'strField' => 'last_updated',
			'sourceSingle' => 'last_updated',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'last_updated',
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
			'tableName' => 'public.lifeboxme_dhis2_dataitems' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	id,
	item_id,
	display_name,
	name,
	short_name,
	display_short_name,
	dimension_item_type,
	last_updated
FROM
	"public".lifeboxme_dhis2_dataitems',
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
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'id' 
				),
				'encrypted' => false,
				'columnName' => 'id' 
			),
			array(
				'sql' => 'item_id',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'item_id' 
				),
				'encrypted' => false,
				'columnName' => 'item_id' 
			),
			array(
				'sql' => 'display_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'display_name' 
				),
				'encrypted' => false,
				'columnName' => 'display_name' 
			),
			array(
				'sql' => 'name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'name' 
				),
				'encrypted' => false,
				'columnName' => 'name' 
			),
			array(
				'sql' => 'short_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'short_name' 
				),
				'encrypted' => false,
				'columnName' => 'short_name' 
			),
			array(
				'sql' => 'display_short_name',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'display_short_name' 
				),
				'encrypted' => false,
				'columnName' => 'display_short_name' 
			),
			array(
				'sql' => 'dimension_item_type',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'dimension_item_type' 
				),
				'encrypted' => false,
				'columnName' => 'dimension_item_type' 
			),
			array(
				'sql' => 'last_updated',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'public.lifeboxme_dhis2_dataitems',
					'name' => 'last_updated' 
				),
				'encrypted' => false,
				'columnName' => 'last_updated' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => '"public".lifeboxme_dhis2_dataitems',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => '"public".lifeboxme_dhis2_dataitems',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'id',
						'item_id',
						'display_name',
						'name',
						'short_name',
						'display_short_name',
						'dimension_item_type',
						'last_updated' 
					),
					'name' => 'public.lifeboxme_dhis2_dataitems' 
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
		'fieldListSql' => 'id,
	item_id,
	display_name,
	name,
	short_name,
	display_short_name,
	dimension_item_type,
	last_updated',
		'fromListSql' => 'FROM
	"public".lifeboxme_dhis2_dataitems',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'public.lifeboxme_dhis2_dataitems',
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
			'item_id',
			'display_name',
			'name',
			'short_name',
			'display_short_name',
			'dimension_item_type',
			'last_updated' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'item_id',
			'display_name',
			'name',
			'short_name',
			'display_short_name',
			'dimension_item_type',
			'last_updated' 
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
	$runnerTableLabels['public.lifeboxme_dhis2_dataitems'] = array(
	'tableCaption' => 'Lifeboxme Dhis2 Dataitems',
	'fieldLabels' => array(
		'id' => 'Id',
		'item_id' => 'Item Id',
		'display_name' => 'Data Item',
		'name' => 'Name',
		'short_name' => 'Short Name',
		'display_short_name' => 'Display Short Name',
		'dimension_item_type' => 'Dimension Type',
		'last_updated' => 'Last Updated' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'item_id' => '',
		'display_name' => '',
		'name' => '',
		'short_name' => '',
		'display_short_name' => '',
		'dimension_item_type' => '',
		'last_updated' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'item_id' => '',
		'display_name' => '',
		'name' => '',
		'short_name' => '',
		'display_short_name' => '',
		'dimension_item_type' => '',
		'last_updated' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>