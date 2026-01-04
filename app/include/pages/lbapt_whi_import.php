<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'whi_id',
			'strategic_area_id',
			'key_objective',
			'kpi',
			'means_of_verification',
			'status_id',
			'planned_timeframe_q1',
			'planned_timeframe_q2',
			'planned_timeframe_q3',
			'planned_timeframe_q4',
			'achievement_q1',
			'achievement_q2',
			'achievement_q3',
			'achievement_q4',
			'notes',
			'created_at',
			'updated_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'whi_id' => array( 
				'import_field' 
			),
			'strategic_area_id' => array( 
				'import_field1' 
			),
			'key_objective' => array( 
				'import_field2' 
			),
			'kpi' => array( 
				'import_field3' 
			),
			'means_of_verification' => array( 
				'import_field4' 
			),
			'status_id' => array( 
				'import_field5' 
			),
			'planned_timeframe_q1' => array( 
				'import_field6' 
			),
			'planned_timeframe_q2' => array( 
				'import_field7' 
			),
			'planned_timeframe_q3' => array( 
				'import_field8' 
			),
			'planned_timeframe_q4' => array( 
				'import_field9' 
			),
			'achievement_q1' => array( 
				'import_field10' 
			),
			'achievement_q2' => array( 
				'import_field11' 
			),
			'achievement_q3' => array( 
				'import_field12' 
			),
			'achievement_q4' => array( 
				'import_field13' 
			),
			'notes' => array( 
				'import_field14' 
			),
			'created_at' => array( 
				'import_field15' 
			),
			'updated_at' => array( 
				'import_field16' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field',
					'import_field1',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13',
					'import_field14',
					'import_field15',
					'import_field16' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid',
				'import_field14' => 'grid',
				'import_field15' => 'grid',
				'import_field16' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field',
				'import_field1',
				'import_field2',
				'import_field3',
				'import_field4',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13',
				'import_field14',
				'import_field15',
				'import_field16' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'import-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_field',
						'import_field1',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13',
						'import_field14',
						'import_field15',
						'import_field16' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field' => array(
			'field' => 'whi_id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'strategic_area_id',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'key_objective',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'kpi',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'means_of_verification',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'status_id',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'planned_timeframe_q1',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'planned_timeframe_q2',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'planned_timeframe_q3',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'planned_timeframe_q4',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'achievement_q1',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'achievement_q2',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'achievement_q3',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'achievement_q4',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'notes',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'created_at',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'updated_at',
			'type' => 'import_field' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 14,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>