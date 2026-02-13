<?php
			$optionsArray = array(
	'totals' => array(
		'distribution_id' => array(
			'totalsType' => '' 
		),
		'order_reference' => array(
			'totalsType' => '' 
		),
		'monthly_surgical_volume' => array(
			'totalsType' => '' 
		),
		'contact_name' => array(
			'totalsType' => '' 
		),
		'contact_email' => array(
			'totalsType' => '' 
		),
		'quantity' => array(
			'totalsType' => '' 
		),
		'notes' => array(
			'totalsType' => '' 
		),
		'device_type' => array(
			'totalsType' => '' 
		),
		'payment_method' => array(
			'totalsType' => '' 
		),
		'transaction_type' => array(
			'totalsType' => '' 
		),
		'donor' => array(
			'totalsType' => '' 
		),
		'region_name' => array(
			'totalsType' => '' 
		),
		'country_name' => array(
			'totalsType' => '' 
		),
		'facility_name' => array(
			'totalsType' => '' 
		),
		'distribution_date' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'distribution_id',
			'order_reference',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'quantity',
			'notes',
			'device_type',
			'payment_method',
			'transaction_type',
			'donor' 
		),
		'exportFields' => array( 
			'distribution_id',
			'order_reference',
			'monthly_surgical_volume',
			'contact_name',
			'contact_email',
			'quantity',
			'notes',
			'device_type',
			'payment_method',
			'transaction_type',
			'donor' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'distribution_id' => array( 
				'export_field' 
			),
			'order_reference' => array( 
				'export_field3' 
			),
			'monthly_surgical_volume' => array( 
				'export_field5' 
			),
			'contact_name' => array( 
				'export_field6' 
			),
			'contact_email' => array( 
				'export_field7' 
			),
			'quantity' => array( 
				'export_field10' 
			),
			'notes' => array( 
				'export_field11' 
			),
			'device_type' => array( 
				'export_field14' 
			),
			'payment_method' => array( 
				'export_field15' 
			),
			'transaction_type' => array( 
				'export_field16' 
			),
			'donor' => array( 
				'export_field17' 
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
					'export_field3',
					'export_field5',
					'export_field6',
					'export_field7',
					'export_field10',
					'export_field11',
					'export_field14',
					'export_field15',
					'export_field16',
					'export_field17' 
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
				'export_field3' => 'grid',
				'export_field5' => 'grid',
				'export_field6' => 'grid',
				'export_field7' => 'grid',
				'export_field10' => 'grid',
				'export_field11' => 'grid',
				'export_field14' => 'grid',
				'export_field15' => 'grid',
				'export_field16' => 'grid',
				'export_field17' => 'grid',
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
				'export_field3',
				'export_field5',
				'export_field6',
				'export_field7',
				'export_field10',
				'export_field11',
				'export_field14',
				'export_field15',
				'export_field16',
				'export_field17' 
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
						'export_field3',
						'export_field5',
						'export_field6',
						'export_field7',
						'export_field10',
						'export_field11',
						'export_field14',
						'export_field15',
						'export_field16',
						'export_field17' 
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
			'field' => 'distribution_id',
			'type' => 'export_field' 
		),
		'export_field3' => array(
			'field' => 'order_reference',
			'type' => 'export_field' 
		),
		'export_field5' => array(
			'field' => 'monthly_surgical_volume',
			'type' => 'export_field' 
		),
		'export_field6' => array(
			'field' => 'contact_name',
			'type' => 'export_field' 
		),
		'export_field7' => array(
			'field' => 'contact_email',
			'type' => 'export_field' 
		),
		'export_field10' => array(
			'field' => 'quantity',
			'type' => 'export_field' 
		),
		'export_field11' => array(
			'field' => 'notes',
			'type' => 'export_field' 
		),
		'export_field14' => array(
			'field' => 'device_type',
			'type' => 'export_field' 
		),
		'export_field15' => array(
			'field' => 'payment_method',
			'type' => 'export_field' 
		),
		'export_field16' => array(
			'field' => 'transaction_type',
			'type' => 'export_field' 
		),
		'export_field17' => array(
			'field' => 'donor',
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