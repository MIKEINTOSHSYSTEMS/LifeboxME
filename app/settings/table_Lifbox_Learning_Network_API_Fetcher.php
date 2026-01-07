<?php
global $runnerTableSettings;
$runnerTableSettings['Lifbox_Learning_Network_API_Fetcher'] = array(
	'name' => 'Lifbox_Learning_Network_API_Fetcher',
	'type' => 6,
	'shortName' => 'Lifbox_Learning_Network_API_Fetcher',
	'pagesByType' => array(
		'export' => array( 
			'export' 
		),
		'print' => array( 
			'print' 
		),
		'list' => array( 
			'lbln_api_tester',
			'lbln_api_fetcher' 
		) 
	),
	'pageTypes' => array(
		'export' => 'export',
		'print' => 'print',
		'lbln_api_tester' => 'list',
		'lbln_api_fetcher' => 'list' 
	),
	'defaultPages' => array(
		'export' => 'export',
		'print' => 'print',
		'list' => 'lbln_api_fetcher' 
	),
	'afterEditDetails' => 'Lifbox_Learning_Network_API_Fetcher',
	'afterAddDetail' => 'Lifbox_Learning_Network_API_Fetcher',
	'detailsBadgeColor' => '9acd32',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'originalTable' => '',
	'originalPagesByType' => array(
		'export' => array( 
			'export' 
		),
		'print' => array( 
			'print' 
		),
		'list' => array( 
			'lbln_api_tester',
			'lbln_api_fetcher' 
		) 
	),
	'originalPageTypes' => array(
		'export' => 'export',
		'print' => 'print',
		'lbln_api_tester' => 'list',
		'lbln_api_fetcher' => 'list' 
	),
	'originalDefaultPages' => array(
		'export' => 'export',
		'print' => 'print',
		'list' => 'lbln_api_fetcher' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			 
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
		'selectList' => array(
			'type' => 'selectList',
			'subtype' => 'sql',
			'enabled' => true,
			'sql' => 'SELECT
    /* =========================
       Session Information
       ========================= */
    s.id                     AS session_pk,
    s.session_id,
    s.session_type,
    s.target_table,
    s.selected_courses,
    s.course_progress,
    s.total_courses,
    s.options                AS session_options,
    s.status                 AS session_status,
    s.created_at             AS session_created_at,
    s.updated_at             AS session_updated_at,
    s.completed_at           AS session_completed_at,

    /* =========================
       Log Information
       ========================= */
    l.log_id,
    l.operation_type,
    l.table_name,
    l.items_processed,
    l.items_inserted,
    l.items_updated,
    l.items_skipped,
    l.errors,
    l.start_time             AS log_start_time,
    l.end_time               AS log_end_time,
    l.duration               AS log_duration,
    l.status                 AS log_status,
    l.message                AS log_message,
    l.parameters             AS log_parameters

FROM public.lbln_fetch_sessions s
LEFT JOIN public.lbln_fetch_logs l
    ON l.parameters->>\'session_id\' = s.session_id;',
			'payload' => array( 
				 
			),
			'payloadFormat' => 4 
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
	$runnerTableLabels['Lifbox_Learning_Network_API_Fetcher'] = array(
	'tableCaption' => 'Lifbox_Learning_Network_API_Fetcher',
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