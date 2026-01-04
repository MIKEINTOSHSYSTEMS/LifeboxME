<?php
global $runnerTableSettings;
$runnerTableSettings['Lifebox_DHIS2_Settings'] = array(
	'name' => 'Lifebox_DHIS2_Settings',
	'type' => 6,
	'shortName' => 'lifebox_dhis2_settings',
	'pagesByType' => array(
		'list' => array( 
			'dhis2_automated_data_fetcher_cronjob',
			'dhis2_dataitems_fetcher',
			'dhis2_orgunits_fetcher' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'print' => array( 
			'print' 
		) 
	),
	'pageTypes' => array(
		'dhis2_automated_data_fetcher_cronjob' => 'list',
		'dhis2_dataitems_fetcher' => 'list',
		'dhis2_orgunits_fetcher' => 'list',
		'export' => 'export',
		'import' => 'import',
		'print' => 'print' 
	),
	'defaultPages' => array(
		'list' => 'dhis2_orgunits_fetcher',
		'export' => 'export',
		'import' => 'import',
		'print' => 'print' 
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
	'displayLoading' => true,
	'warnLeavingEdit' => true,
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'originalTable' => '',
	'originalPagesByType' => array(
		'list' => array( 
			'dhis2_automated_data_fetcher_cronjob',
			'dhis2_dataitems_fetcher',
			'dhis2_orgunits_fetcher' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'print' => array( 
			'print' 
		) 
	),
	'originalPageTypes' => array(
		'dhis2_automated_data_fetcher_cronjob' => 'list',
		'dhis2_dataitems_fetcher' => 'list',
		'dhis2_orgunits_fetcher' => 'list',
		'export' => 'export',
		'import' => 'import',
		'print' => 'print' 
	),
	'originalDefaultPages' => array(
		'list' => 'dhis2_orgunits_fetcher',
		'export' => 'export',
		'import' => 'import',
		'print' => 'print' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			 
		),
		'searchSuggest' => false,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			 
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
		'selectList' => array(
			'sql' => 'SELECT
	id,
	lb_int_id,
	lb_int,
	cont_id,
	continent,
	count_id,
	country,
	hosp_fac_id,
	hospital_facility,
	"level",
	last_updated
FROM "public".lifeboxme_dhis2_orgunits',
			'enabled' => true,
			'subtype' => 'sql',
			'method' => '',
			'request' => '',
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
	$runnerTableLabels['Lifebox_DHIS2_Settings'] = array(
	'tableCaption' => 'Lifebox DHI S2 Settings',
	'fieldLabels' => array(
		 
	),
	'fieldTooltips' => array(
		 
	),
	'fieldPlaceholders' => array(
		 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>