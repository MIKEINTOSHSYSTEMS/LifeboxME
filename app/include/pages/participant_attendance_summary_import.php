<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'participant_id',
			'training_id',
			'first_name',
			'last_name',
			'email',
			'training_name',
			'start_date',
			'end_date',
			'total_days',
			'days_recorded',
			'days_attended',
			'attendance_percentage',
			'attendance_status',
			'pre_test_score',
			'post_test_score',
			'ceu_points' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'participant_id' => array( 
				'import_field' 
			),
			'training_id' => array( 
				'import_field1' 
			),
			'first_name' => array( 
				'import_field2' 
			),
			'last_name' => array( 
				'import_field3' 
			),
			'email' => array( 
				'import_field4' 
			),
			'training_name' => array( 
				'import_field5' 
			),
			'start_date' => array( 
				'import_field6' 
			),
			'end_date' => array( 
				'import_field7' 
			),
			'total_days' => array( 
				'import_field8' 
			),
			'days_recorded' => array( 
				'import_field9' 
			),
			'days_attended' => array( 
				'import_field10' 
			),
			'attendance_percentage' => array( 
				'import_field11' 
			),
			'attendance_status' => array( 
				'import_field12' 
			),
			'pre_test_score' => array( 
				'import_field13' 
			),
			'post_test_score' => array( 
				'import_field14' 
			),
			'ceu_points' => array( 
				'import_field15' 
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
					'import_field15' 
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
				'import_field15' => 'grid' 
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
				'import_field15' 
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
						'import_field15' 
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
			'field' => 'participant_id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'training_id',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'first_name',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'last_name',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'email',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'training_name',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'start_date',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'end_date',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'total_days',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'days_recorded',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'days_attended',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'attendance_percentage',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'attendance_status',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'pre_test_score',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'post_test_score',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'ceu_points',
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