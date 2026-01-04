<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'program_id',
			'program_name',
			'description',
			'is_active',
			'created_at',
			'updated_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'program_id' => array( 
				'integrated_search_field' 
			),
			'program_name' => array( 
				'integrated_search_field1' 
			),
			'description' => array( 
				'integrated_search_field2' 
			),
			'is_active' => array( 
				'integrated_search_field3' 
			),
			'created_at' => array( 
				'integrated_search_field4' 
			),
			'updated_at' => array( 
				'integrated_search_field5' 
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
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					'search_search',
					'search_reset',
					'search_back_list',
					'search_cancel' 
				),
				'top' => array( 
					'search_header' 
				),
				'grid' => array( 
					'integrated_search_field',
					'integrated_search_field1',
					'integrated_search_field2',
					'integrated_search_field3',
					'integrated_search_field4',
					'integrated_search_field5' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'search_search' => 'below-grid',
				'search_reset' => 'below-grid',
				'search_back_list' => 'below-grid',
				'search_cancel' => 'below-grid',
				'search_header' => 'top',
				'integrated_search_field' => 'grid',
				'integrated_search_field1' => 'grid',
				'integrated_search_field2' => 'grid',
				'integrated_search_field3' => 'grid',
				'integrated_search_field4' => 'grid',
				'integrated_search_field5' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_search_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_search_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_search_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_search_field3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_search_field4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_search_field5' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'search_header' => array( 
				'search_header' 
			),
			'search_reset' => array( 
				'search_reset' 
			),
			'search_back_list' => array( 
				'search_back_list' 
			),
			'search_search' => array( 
				'search_search' 
			),
			'search_cancel' => array( 
				'search_cancel' 
			),
			'integrated_search_field' => array( 
				'integrated_search_field',
				'integrated_search_field1',
				'integrated_search_field2',
				'integrated_search_field3',
				'integrated_search_field4',
				'integrated_search_field5' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_search_field',
							'integrated_search_field1',
							'integrated_search_field2',
							'integrated_search_field3',
							'integrated_search_field4',
							'integrated_search_field5' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			) 
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
	'misc' => array(
		'type' => 'search',
		'breadcrumb' => false 
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
	'id' => 'search',
	'type' => 'search',
	'layoutId' => 'nomenu',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'search-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 2 
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
		'below-grid' => array(
			'modelId' => 'search-below-grid',
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
						'search_search',
						'search_reset',
						'search_back_list',
						'search_cancel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'search-header',
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
						'search_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-search',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_search_field',
						'integrated_search_field1',
						'integrated_search_field2',
						'integrated_search_field3',
						'integrated_search_field4',
						'integrated_search_field5' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'separateLabels' => false 
		) 
	),
	'items' => array(
		'search_header' => array(
			'type' => 'search_header' 
		),
		'search_reset' => array(
			'type' => 'search_reset' 
		),
		'search_back_list' => array(
			'type' => 'search_back_list' 
		),
		'search_search' => array(
			'type' => 'search_search' 
		),
		'search_cancel' => array(
			'type' => 'search_cancel' 
		),
		'integrated_search_field' => array(
			'field' => 'program_id',
			'type' => 'integrated_search_field',
			'orientation' => 0,
			'required' => false 
		),
		'integrated_search_field1' => array(
			'field' => 'program_name',
			'type' => 'integrated_search_field',
			'orientation' => 0,
			'required' => false 
		),
		'integrated_search_field2' => array(
			'field' => 'description',
			'type' => 'integrated_search_field',
			'orientation' => 0,
			'required' => false 
		),
		'integrated_search_field3' => array(
			'field' => 'is_active',
			'type' => 'integrated_search_field',
			'orientation' => 0,
			'required' => false 
		),
		'integrated_search_field4' => array(
			'field' => 'created_at',
			'type' => 'integrated_search_field',
			'orientation' => 0,
			'required' => false 
		),
		'integrated_search_field5' => array(
			'field' => 'updated_at',
			'type' => 'integrated_search_field',
			'orientation' => 0,
			'required' => false 
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