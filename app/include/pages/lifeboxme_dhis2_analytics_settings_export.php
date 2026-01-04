<?php
			$optionsArray = array(
	'totals' => array(
		'id' => array(
			'totalsType' => '' 
		),
		'name' => array(
			'totalsType' => '' 
		),
		'dx' => array(
			'totalsType' => '' 
		),
		'ou' => array(
			'totalsType' => '' 
		),
		'pe' => array(
			'totalsType' => '' 
		),
		'display_property' => array(
			'totalsType' => '' 
		),
		'include_num_den' => array(
			'totalsType' => '' 
		),
		'skip_meta' => array(
			'totalsType' => '' 
		),
		'skip_data' => array(
			'totalsType' => '' 
		),
		'paging' => array(
			'totalsType' => '' 
		),
		'page_size' => array(
			'totalsType' => '' 
		),
		'created_at' => array(
			'totalsType' => '' 
		),
		'updated_at' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'id',
			'name',
			'dx',
			'ou',
			'pe',
			'display_property',
			'include_num_den',
			'skip_meta',
			'skip_data',
			'paging',
			'page_size',
			'created_at',
			'updated_at' 
		),
		'exportFields' => array( 
			'id',
			'name',
			'dx',
			'ou',
			'pe',
			'display_property',
			'include_num_den',
			'skip_meta',
			'skip_data',
			'paging',
			'page_size',
			'created_at',
			'updated_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'id' => array( 
				'export_field' 
			),
			'name' => array( 
				'export_field1' 
			),
			'dx' => array( 
				'export_field2' 
			),
			'ou' => array( 
				'export_field3' 
			),
			'pe' => array( 
				'export_field4' 
			),
			'display_property' => array( 
				'export_field5' 
			),
			'include_num_den' => array( 
				'export_field6' 
			),
			'skip_meta' => array( 
				'export_field7' 
			),
			'skip_data' => array( 
				'export_field8' 
			),
			'paging' => array( 
				'export_field9' 
			),
			'page_size' => array( 
				'export_field10' 
			),
			'created_at' => array( 
				'export_field11' 
			),
			'updated_at' => array( 
				'export_field12' 
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
					'export_field11',
					'export_field12' 
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
				'export_field12' => 'grid',
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
				'export_field11',
				'export_field12' 
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
						'export_field11',
						'export_field12' 
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
			'field' => 'name',
			'type' => 'export_field' 
		),
		'export_field2' => array(
			'field' => 'dx',
			'type' => 'export_field' 
		),
		'export_field3' => array(
			'field' => 'ou',
			'type' => 'export_field' 
		),
		'export_field4' => array(
			'field' => 'pe',
			'type' => 'export_field' 
		),
		'export_field5' => array(
			'field' => 'display_property',
			'type' => 'export_field' 
		),
		'export_field6' => array(
			'field' => 'include_num_den',
			'type' => 'export_field' 
		),
		'export_field7' => array(
			'field' => 'skip_meta',
			'type' => 'export_field' 
		),
		'export_field8' => array(
			'field' => 'skip_data',
			'type' => 'export_field' 
		),
		'export_field9' => array(
			'field' => 'paging',
			'type' => 'export_field' 
		),
		'export_field10' => array(
			'field' => 'page_size',
			'type' => 'export_field' 
		),
		'export_field11' => array(
			'field' => 'created_at',
			'type' => 'export_field' 
		),
		'export_field12' => array(
			'field' => 'updated_at',
			'type' => 'export_field' 
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
		 
	),
	'exportFormat' => 2,
	'exportDelimiter' => ',',
	'exportSelectDelimiter' => false,
	'exportSelectFields' => false 
);
		?>