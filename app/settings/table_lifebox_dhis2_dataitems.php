<?php
global $runnerTableSettings;
$runnerTableSettings['Lifebox_DHIS2_dataItems'] = array(
	'name' => 'Lifebox_DHIS2_dataItems',
	'type' => 7,
	'shortName' => 'lifebox_dhis2_dataitems',
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
	'detailsBadgeColor' => '778899',
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
			'strField' => '*/id',
			'index' => 1,
			'type' => 202,
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
			'tableName' => '' 
		),
		'displayName' => array(
			'name' => 'displayName',
			'goodName' => 'displayName',
			'strField' => '*/displayName',
			'index' => 2,
			'type' => 202,
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'Lifebox_DHIS2_dataItems',
					'lookupTableConnection' => 'rest',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'displayName',
					'lookupOrderBy' => 'displayName',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
					'fileMaxNumber' => 1,
					'fileThumbnailField' => 'th',
					'timeConvention' => 1 
				) 
			),
			'filterFormat' => array(
				'format' => 'Values list' 
			),
			'tableName' => '' 
		),
		'name' => array(
			'name' => 'name',
			'goodName' => 'name',
			'strField' => '*/name',
			'index' => 3,
			'type' => 202,
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
			'tableName' => '' 
		),
		'shortName' => array(
			'name' => 'shortName',
			'goodName' => 'shortName',
			'strField' => '*/shortName',
			'index' => 4,
			'type' => 202,
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
			'tableName' => '' 
		),
		'displayShortName' => array(
			'name' => 'displayShortName',
			'goodName' => 'displayShortName',
			'strField' => '*/displayShortName',
			'index' => 5,
			'type' => 202,
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
			'tableName' => '' 
		),
		'dimensionItemType' => array(
			'name' => 'dimensionItemType',
			'goodName' => 'dimensionItemType',
			'strField' => '*/dimensionItemType',
			'index' => 6,
			'type' => 202,
			'viewFormats' => array(
				'view' => array(
					'numberFractionalDigits' => 0 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Lookup wizard',
					'textHTML5Input' => '0',
					'lookupMultiselect' => true,
					'lookupType' => 2,
					'lookupTable' => 'Lifebox_DHIS2_dataItems',
					'lookupTableConnection' => 'rest',
					'lookupLinkField' => 'id',
					'lookupDisplayField' => 'dimensionItemType',
					'lookupOrderBy' => 'dimensionItemType',
					'lookupOrderByDesc' => true,
					'lookupUnique' => true,
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
			'tableName' => '' 
		) 
	),
	'originalTable' => '',
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
			'id',
			'displayName',
			'name',
			'shortName',
			'displayShortName',
			'dimensionItemType' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'id',
			'displayName',
			'name',
			'shortName',
			'displayShortName',
			'dimensionItemType' 
		) 
	),
	'connId' => 'rest',
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
		'selectList' => array(
			'sql' => '',
			'enabled' => true,
			'subtype' => 'rest',
			'method' => 'GET',
			'request' => '/api/dhis2/indicators/dataItems.php',
			'type' => 'selectList',
			'payloadFormat' => 4,
			'rawPayload' => false,
			'payloadString' => '',
			'skipFilter' => false,
			'skipOrder' => false,
			'payload' => array( 
				 
			) 
		) 
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
	$runnerTableLabels['Lifebox_DHIS2_dataItems'] = array(
	'tableCaption' => 'Lifebox DHIS2 DataItems',
	'fieldLabels' => array(
		'id' => 'Id',
		'displayName' => 'Display Name',
		'name' => 'Name',
		'shortName' => 'Short Name',
		'displayShortName' => 'Display Short Name',
		'dimensionItemType' => 'Dimension Item Type' 
	),
	'fieldTooltips' => array(
		'id' => '',
		'displayName' => '',
		'name' => '',
		'shortName' => '',
		'displayShortName' => '',
		'dimensionItemType' => '' 
	),
	'fieldPlaceholders' => array(
		'id' => '',
		'displayName' => '',
		'name' => '',
		'shortName' => '',
		'displayShortName' => '',
		'dimensionItemType' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>