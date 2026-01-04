<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'data_element_id',
			'data_element_name',
			'data_element_description',
			'created_at',
			'updated_at',
			'data_element_code',
			'value_type',
			'aggregation_type',
			'domain_type',
			'category_combo_id',
			'is_active',
			'created_by' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'data_element_id' => array( 
				'import_field' 
			),
			'data_element_name' => array( 
				'import_field1' 
			),
			'data_element_description' => array( 
				'import_field2' 
			),
			'created_at' => array( 
				'import_field3' 
			),
			'updated_at' => array( 
				'import_field4' 
			),
			'data_element_code' => array( 
				'import_field5' 
			),
			'value_type' => array( 
				'import_field6' 
			),
			'aggregation_type' => array( 
				'import_field7' 
			),
			'domain_type' => array( 
				'import_field8' 
			),
			'category_combo_id' => array( 
				'import_field9' 
			),
			'is_active' => array( 
				'import_field10' 
			),
			'created_by' => array( 
				'import_field11' 
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
					'import_field11' 
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
				'import_field11' => 'grid' 
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
				'import_field11' 
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
						'import_field11' 
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
			'field' => 'data_element_id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'data_element_name',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'data_element_description',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'created_at',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'updated_at',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'data_element_code',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'value_type',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'aggregation_type',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'domain_type',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'category_combo_id',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'is_active',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'created_by',
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