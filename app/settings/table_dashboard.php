<?php
global $runnerTableSettings;
$runnerTableSettings['Dashboard'] = array(
	'name' => 'Dashboard',
	'type' => 4,
	'shortName' => 'dashboard',
	'pagesByType' => array(
		'dashboard' => array( 
			'all_in_one_training',
			'dashboard',
			'lifebox_test_center',
			'lifebox_visitors_analytics' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'all_in_one_training' => 'dashboard',
		'dashboard' => 'dashboard',
		'lifebox_test_center' => 'dashboard',
		'lifebox_visitors_analytics' => 'dashboard',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'dashboard' => 'dashboard',
		'search' => 'search' 
	),
	'detailsBadgeColor' => '2F4F4F',
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
		'dashboard' => array( 
			'all_in_one_training',
			'dashboard',
			'lifebox_test_center',
			'lifebox_visitors_analytics' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'all_in_one_training' => 'dashboard',
		'dashboard' => 'dashboard',
		'lifebox_test_center' => 'dashboard',
		'lifebox_visitors_analytics' => 'dashboard',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'dashboard' => 'dashboard',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => '',
		'searchableFields' => array( 
			 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			 
		) 
	),
	'connId' => '',
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
	$runnerTableLabels['Dashboard'] = array(
	'tableCaption' => 'Dashboard',
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