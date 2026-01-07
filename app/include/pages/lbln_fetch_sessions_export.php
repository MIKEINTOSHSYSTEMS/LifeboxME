<?php
			$optionsArray = array(
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'session_id' => array(
			'totalsType' => '' 
		),
		'session_type' => array(
			'totalsType' => '' 
		),
		'target_table' => array(
			'totalsType' => '' 
		),
		'selected_courses' => array(
			'totalsType' => '' 
		),
		'course_progress' => array(
			'totalsType' => '' 
		),
		'total_courses' => array(
			'totalsType' => '' 
		),
		'options' => array(
			'totalsType' => '' 
		),
		'status' => array(
			'totalsType' => '' 
		),
		'created_at' => array(
			'totalsType' => '' 
		),
		'updated_at' => array(
			'totalsType' => '' 
		),
		'completed_at' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'id',
			'session_id',
			'session_type',
			'target_table',
			'selected_courses',
			'course_progress',
			'total_courses',
			'options',
			'status',
			'created_at',
			'updated_at',
			'completed_at' 
		),
		'exportFields' => array( 
			'id',
			'session_id',
			'session_type',
			'target_table',
			'selected_courses',
			'course_progress',
			'total_courses',
			'options',
			'status',
			'created_at',
			'updated_at',
			'completed_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'export_field' 
			),
			'session_id' => array( 
				'export_field1' 
			),
			'session_type' => array( 
				'export_field2' 
			),
			'target_table' => array( 
				'export_field3' 
			),
			'selected_courses' => array( 
				'export_field4' 
			),
			'course_progress' => array( 
				'export_field5' 
			),
			'total_courses' => array( 
				'export_field6' 
			),
			'options' => array( 
				'export_field7' 
			),
			'status' => array( 
				'export_field8' 
			),
			'created_at' => array( 
				'export_field9' 
			),
			'updated_at' => array( 
				'export_field10' 
			),
			'completed_at' => array( 
				'export_field11' 
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
					'export_header' 
				),
				'grid' => array( 
					'export_field',
					'export_field1',
					'export_field2',
					'export_field3',
					'export_field4',
					'export_field5',
					'export_field6',
					'export_field7',
					'export_field8',
					'export_field9',
					'export_field10',
					'export_field11' 
				),
				'footer' => array( 
					'export_export',
					'export_cancel' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'export_header' => 'top',
				'export_field' => 'grid',
				'export_field1' => 'grid',
				'export_field2' => 'grid',
				'export_field3' => 'grid',
				'export_field4' => 'grid',
				'export_field5' => 'grid',
				'export_field6' => 'grid',
				'export_field7' => 'grid',
				'export_field8' => 'grid',
				'export_field9' => 'grid',
				'export_field10' => 'grid',
				'export_field11' => 'grid',
				'export_export' => 'footer',
				'export_cancel' => 'footer' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'export_header' => array( 
				'export_header' 
			),
			'export_export' => array( 
				'export_export' 
			),
			'export_cancel' => array( 
				'export_cancel' 
			),
			'export_field' => array( 
				'export_field',
				'export_field1',
				'export_field2',
				'export_field3',
				'export_field4',
				'export_field5',
				'export_field6',
				'export_field7',
				'export_field8',
				'export_field9',
				'export_field10',
				'export_field11' 
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
	),
	'export' => array(
		'format' => 2,
		'selectFields' => false,
		'delimiter' => ',',
		'selectDelimiter' => false,
		'exportFileTypes' => array(
			'excel' => true,
			'word' => true,
			'csv' => true,
			'xml' => false 
		) 
	) 
);
			$pageArray = array(
	'id' => 'export',
	'type' => 'export',
	'layoutId' => 'first',
	'disabled' => false,
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
			'modelId' => 'export-header',
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
						'export_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'export-grid',
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
						'export_field',
						'export_field1',
						'export_field2',
						'export_field3',
						'export_field4',
						'export_field5',
						'export_field6',
						'export_field7',
						'export_field8',
						'export_field9',
						'export_field10',
						'export_field11' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'footer' => array(
			'modelId' => 'export-footer',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
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
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'export_export',
						'export_cancel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'export_header' => array(
			'type' => 'export_header' 
		),
		'export_export' => array(
			'type' => 'export_export' 
		),
		'export_cancel' => array(
			'type' => 'export_cancel' 
		),
		'export_field' => array(
			'field' => 'id',
			'type' => 'export_field' 
		),
		'export_field1' => array(
			'field' => 'session_id',
			'type' => 'export_field' 
		),
		'export_field2' => array(
			'field' => 'session_type',
			'type' => 'export_field' 
		),
		'export_field3' => array(
			'field' => 'target_table',
			'type' => 'export_field' 
		),
		'export_field4' => array(
			'field' => 'selected_courses',
			'type' => 'export_field' 
		),
		'export_field5' => array(
			'field' => 'course_progress',
			'type' => 'export_field' 
		),
		'export_field6' => array(
			'field' => 'total_courses',
			'type' => 'export_field' 
		),
		'export_field7' => array(
			'field' => 'options',
			'type' => 'export_field' 
		),
		'export_field8' => array(
			'field' => 'status',
			'type' => 'export_field' 
		),
		'export_field9' => array(
			'field' => 'created_at',
			'type' => 'export_field' 
		),
		'export_field10' => array(
			'field' => 'updated_at',
			'type' => 'export_field' 
		),
		'export_field11' => array(
			'field' => 'completed_at',
			'type' => 'export_field' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	),
	'exportFormat' => 2,
	'exportDelimiter' => ',',
	'exportSelectDelimiter' => false,
	'exportSelectFields' => false 
);
		?>