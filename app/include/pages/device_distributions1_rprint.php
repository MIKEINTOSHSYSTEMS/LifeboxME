<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => true,
		'orientation' => 'portrait',
		'scale' => 100 
	),
	'fields' => array(
		'gridFields' => array( 
			'quantity',
			'payment_method',
			'transaction_type',
			'donor',
			'device_type',
			'distribution_date' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'quantity' => array( 
				'report_grid_field10' 
			),
			'payment_method' => array( 
				'report_grid_field15' 
			),
			'transaction_type' => array( 
				'report_grid_field16' 
			),
			'donor' => array( 
				'report_grid_field17' 
			),
			'region_name' => array( 
				'report_group_field' 
			),
			'country_name' => array( 
				'report_group_field1' 
			),
			'facility_name' => array( 
				'report_group_field2' 
			),
			'device_type' => array( 
				'report_grid_field' 
			),
			'distribution_date' => array( 
				'report_grid_field1' 
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
					'print_pages' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'print_header',
					'print_subheader',
					'print_pdf' 
				),
				'grid' => array( 
					'report_group_field',
					'report_group_field1',
					'report_group_field2',
					'report_grid_field10',
					'report_grid_field15',
					'report_grid_field16',
					'report_grid_field17',
					'report_grid_field',
					'report_grid_field1' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'print_pages' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'print_pages' => 'above-grid',
				'print_header' => 'top',
				'print_subheader' => 'top',
				'print_pdf' => 'top',
				'report_group_field' => 'grid',
				'report_group_field1' => 'grid',
				'report_group_field2' => 'grid',
				'report_grid_field10' => 'grid',
				'report_grid_field15' => 'grid',
				'report_grid_field16' => 'grid',
				'report_grid_field17' => 'grid',
				'report_grid_field' => 'grid',
				'report_grid_field1' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'print_header' => array( 
				'print_header' 
			),
			'print_subheader' => array( 
				'print_subheader' 
			),
			'print_pages' => array( 
				'print_pages' 
			),
			'report_grid_field' => array( 
				'report_grid_field10',
				'report_grid_field15',
				'report_grid_field16',
				'report_grid_field17',
				'report_grid_field',
				'report_grid_field1' 
			),
			'report_group_field' => array( 
				'report_group_field',
				'report_group_field1',
				'report_group_field2' 
			),
			'print_pdf' => array( 
				'print_pdf' 
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
				'print_pages' => array(
					'tag' => 'PRINT_PAGES',
					'type' => 2 
				) 
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
		'type' => 'rprint',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'newreport' => array(
		'reportInfo' => array(
			'groupFields' => array( 
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'region_name',
					'axis' => 0,
					'color' => array(
						'header' => '6cd9b4',
						'summary' => '7fffd4' 
					) 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'country_name',
					'axis' => 0,
					'color' => array(
						'header' => '93b8c4',
						'summary' => 'add8e6' 
					) 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'facility_name',
					'axis' => 0,
					'color' => array(
						'header' => 'bed9d9',
						'summary' => 'e0ffff' 
					) 
				) 
			),
			'fields' => array( 
				array(
					'field' => 'quantity',
					'grid' => true,
					'min' => true,
					'max' => true,
					'sum' => true,
					'avg' => true 
				),
				array(
					'field' => 'payment_method',
					'grid' => true,
					'min' => false,
					'max' => false,
					'sum' => false,
					'avg' => false 
				),
				array(
					'field' => 'transaction_type',
					'grid' => true,
					'min' => false,
					'max' => false,
					'sum' => false,
					'avg' => false 
				),
				array(
					'field' => 'donor',
					'grid' => true,
					'min' => false,
					'max' => false,
					'sum' => false,
					'avg' => false 
				),
				array(
					'field' => 'device_type',
					'grid' => true,
					'min' => false,
					'max' => false,
					'avg' => false,
					'sum' => false 
				),
				array(
					'field' => 'distribution_date',
					'grid' => true,
					'min' => false,
					'max' => false,
					'avg' => false,
					'sum' => false 
				) 
			),
			'showData' => true,
			'pageSummary' => false,
			'globalSummary' => false,
			'crosstab' => false,
			'layout' => 'block' 
		) 
	) 
);
			$pageArray = array(
	'id' => 'rprint',
	'type' => 'rprint',
	'layoutId' => 'basic',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'print-above-grid',
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
						'print_pages' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'print-below-grid',
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
			'modelId' => 'print-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'print_header',
						'print_subheader' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'print_pdf' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'report-grid',
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
						'report_group_field',
						'report_group_field1',
						'report_group_field2' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'report_grid_field10',
						'report_grid_field15',
						'report_grid_field16',
						'report_grid_field17',
						'report_grid_field',
						'report_grid_field1' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1,
			'reportInfo' => array(
				'groupFields' => array( 
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'region_name',
						'axis' => 0,
						'color' => array(
							'header' => '6cd9b4',
							'summary' => '7fffd4' 
						) 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'country_name',
						'axis' => 0,
						'color' => array(
							'header' => '93b8c4',
							'summary' => 'add8e6' 
						) 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'facility_name',
						'axis' => 0,
						'color' => array(
							'header' => 'bed9d9',
							'summary' => 'e0ffff' 
						) 
					) 
				),
				'fields' => array( 
					array(
						'field' => 'quantity',
						'grid' => true,
						'min' => true,
						'max' => true,
						'sum' => true,
						'avg' => true 
					),
					array(
						'field' => 'payment_method',
						'grid' => true,
						'min' => false,
						'max' => false,
						'sum' => false,
						'avg' => false 
					),
					array(
						'field' => 'transaction_type',
						'grid' => true,
						'min' => false,
						'max' => false,
						'sum' => false,
						'avg' => false 
					),
					array(
						'field' => 'donor',
						'grid' => true,
						'min' => false,
						'max' => false,
						'sum' => false,
						'avg' => false 
					),
					array(
						'field' => 'device_type',
						'grid' => true,
						'min' => false,
						'max' => false,
						'avg' => false,
						'sum' => false 
					),
					array(
						'field' => 'distribution_date',
						'grid' => true,
						'min' => false,
						'max' => false,
						'avg' => false,
						'sum' => false 
					) 
				),
				'showData' => true,
				'pageSummary' => false,
				'globalSummary' => false,
				'crosstab' => false,
				'layout' => 'block' 
			) 
		) 
	),
	'items' => array(
		'print_header' => array(
			'type' => 'print_header' 
		),
		'print_subheader' => array(
			'type' => 'print_subheader' 
		),
		'print_pages' => array(
			'type' => 'print_pages' 
		),
		'report_grid_field10' => array(
			'field' => 'quantity',
			'type' => 'report_grid_field',
			'reportAvg' => true,
			'reportMin' => true,
			'reportMax' => true,
			'reportSum' => true 
		),
		'report_grid_field15' => array(
			'field' => 'payment_method',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'report_grid_field16' => array(
			'field' => 'transaction_type',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'report_grid_field17' => array(
			'field' => 'donor',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'report_group_field' => array(
			'field' => 'region_name',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field1' => array(
			'field' => 'country_name',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_group_field2' => array(
			'field' => 'facility_name',
			'type' => 'report_group_field',
			'summary' => true,
			'axis' => 0,
			'interval' => 0 
		),
		'report_grid_field' => array(
			'field' => 'device_type',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'report_grid_field1' => array(
			'field' => 'distribution_date',
			'type' => 'report_grid_field',
			'reportAvg' => false,
			'reportMin' => false,
			'reportMax' => false,
			'reportSum' => false 
		),
		'print_pdf' => array(
			'type' => 'print_pdf',
			'targetPages' => array( 
				 
			),
			'splitModes' => array( 
				 
			),
			'scopes' => array( 
				 
			) 
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
		 
	) 
);
		?>