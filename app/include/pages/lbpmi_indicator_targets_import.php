<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'target_id',
			'indicator_id',
			'created_at',
			'updated_at',
			'period_type',
			'period_year',
			'period_quarter',
			'period_month',
			'region_id',
			'country_id',
			'facility_id',
			'target_value',
			'is_annual_target',
			'created_by',
			'baseline_period',
			'baseline_value' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'target_id' => array( 
				'import_field' 
			),
			'indicator_id' => array( 
				'import_field1' 
			),
			'period_type' => array( 
				'import_field2' 
			),
			'period_year' => array( 
				'import_field3' 
			),
			'period_quarter' => array( 
				'import_field4' 
			),
			'period_month' => array( 
				'import_field5' 
			),
			'region_id' => array( 
				'import_field6' 
			),
			'country_id' => array( 
				'import_field7' 
			),
			'created_at' => array( 
				'import_field8' 
			),
			'updated_at' => array( 
				'import_field9' 
			),
			'facility_id' => array( 
				'import_field10' 
			),
			'target_value' => array( 
				'import_field11' 
			),
			'is_annual_target' => array( 
				'import_field12' 
			),
			'created_by' => array( 
				'import_field13' 
			),
			'baseline_period' => array( 
				'import_field14' 
			),
			'baseline_value' => array( 
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
					'import_field8',
					'import_field9',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
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
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
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
						'import_field8',
						'import_field9',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
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
			'field' => 'target_id',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'indicator_id',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'period_type',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'period_year',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'period_quarter',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'period_month',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'region_id',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'country_id',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'created_at',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'updated_at',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'facility_id',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'target_value',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'is_annual_target',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'created_by',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'baseline_period',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'baseline_value',
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