<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			'device_type',
			'payment_method',
			'transaction_type',
			'donor',
			'region_name',
			'country_name',
			'facility_name',
			'distribution_date' 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
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
			'distribution_id',
			'region_name',
			'country_name',
			'facility_name',
			'distribution_date',
			'device_type',
			'transaction_type',
			'payment_method',
			'donor',
			'notes',
			'quantity',
			'contact_email',
			'contact_name',
			'monthly_surgical_volume',
			'order_reference' 
		),
		'filterFields' => array( 
			'device_type',
			'payment_method',
			'transaction_type',
			'donor',
			'region_name',
			'country_name',
			'distribution_date' 
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
					'details_found',
					'page_size',
					'print_panel',
					'filter_panel',
					'search_panel' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'breadcrumb',
					'simple_search',
					'list_options',
					'notifications',
					'loginform_login',
					'username_button' 
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
				),
				'top' => array( 
					 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'filter_panel' => 'above-grid',
				'search_panel' => 'above-grid',
				'pagination' => 'below-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'breadcrumb' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'notifications' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
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
				'breadcrumb' => 5,
				'expand_menu_button' => 2,
				'print_panel' => 5,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'page_size' => array( 
				'page_size' 
			),
			'details_found' => array( 
				'details_found' 
			),
			'breadcrumb' => array( 
				'breadcrumb' 
			),
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'pagination' => array( 
				'pagination' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'export_report_excel' => array( 
				'export_report_excel' 
			),
			'export_report_word' => array( 
				'export_report_word' 
			),
			'report_grid_field' => array( 
				'report_grid_field10',
				'report_grid_field15',
				'report_grid_field16',
				'report_grid_field17',
				'report_grid_field',
				'report_grid_field1' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'-' => array( 
				'-' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field3',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field10',
				'search_panel_field11',
				'search_panel_field14',
				'search_panel_field15',
				'search_panel_field16',
				'search_panel_field17',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field4',
				'search_panel_field8' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'loginform_login' => array( 
				'loginform_login' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'adminarea_link' => array( 
				'adminarea_link' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'notifications' => array( 
				'notifications' 
			),
			'print_panel' => array( 
				'print_panel' 
			),
			'print_scope' => array( 
				'print_scope' 
			),
			'print_button' => array( 
				'print_button' 
			),
			'print_records' => array( 
				'print_records' 
			),
			'report_group_field' => array( 
				'report_group_field',
				'report_group_field1',
				'report_group_field2' 
			),
			'filter_panel' => array( 
				'filter_panel' 
			),
			'filter_panel_field' => array( 
				'filter_panel_field',
				'filter_panel_field1',
				'filter_panel_field2',
				'filter_panel_field3',
				'filter_panel_field4',
				'filter_panel_field5',
				'filter_panel_field6' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 0 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				'details_found' => array(
					'tag' => 'DISPLAYING',
					'type' => 2 
				) 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => true,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'report',
		'breadcrumb' => true 
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
					'color' => array(
						'header' => '6cd9b4',
						'summary' => '7fffd4' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'country_name',
					'color' => array(
						'header' => '93b8c4',
						'summary' => 'add8e6' 
					),
					'axis' => 0 
				),
				array(
					'interval' => 0,
					'summary' => true,
					'field' => 'facility_name',
					'color' => array(
						'header' => 'bed9d9',
						'summary' => 'e0ffff' 
					),
					'axis' => 0 
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
	'id' => 'report',
	'type' => 'report',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'report-above-grid',
			'grid' => array( 
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c6' 
						),
						array(
							'cell' => 'c7' 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c',
							'colspan' => 2 
						) 
					) 
				),
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
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c4',
							'colspan' => 2 
						) 
					) 
				),
				array(
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c8' 
						),
						array(
							'cell' => 'c9' 
						) 
					) 
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
						'details_found',
						'page_size',
						'print_panel' 
					) 
				),
				'c' => array(
					'model' => 'c1',
					'items' => array( 
						'filter_panel' 
					) 
				),
				'c4' => array(
					'model' => 'c1',
					'items' => array( 
						'search_panel' 
					) 
				),
				'c6' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				),
				'c7' => array(
					'model' => 'c2',
					'items' => array( 
						 
					) 
				),
				'c8' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				),
				'c9' => array(
					'model' => 'c2',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'report-below-grid',
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
						'pagination' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-menu',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
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
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top-chart',
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
						'expand_menu_button',
						'collapse_button',
						'breadcrumb' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'list_options',
						'notifications',
						'loginform_login',
						'username_button' 
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
						'color' => array(
							'header' => '6cd9b4',
							'summary' => '7fffd4' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'country_name',
						'color' => array(
							'header' => '93b8c4',
							'summary' => 'add8e6' 
						),
						'axis' => 0 
					),
					array(
						'interval' => 0,
						'summary' => true,
						'field' => 'facility_name',
						'color' => array(
							'header' => 'bed9d9',
							'summary' => 'e0ffff' 
						),
						'axis' => 0 
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
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'page_size' => array(
			'type' => 'page_size' 
		),
		'details_found' => array(
			'type' => 'details_found' 
		),
		'breadcrumb' => array(
			'type' => 'breadcrumb' 
		),
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'pagination' => array(
			'type' => 'pagination' 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'show_search_panel',
				'hide_search_panel',
				'-',
				'export_report_excel',
				'export_report_word' 
			) 
		),
		'export_report_excel' => array(
			'type' => 'export_report_excel' 
		),
		'export_report_word' => array(
			'type' => 'export_report_word' 
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
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field4',
				'search_panel_field8',
				'search_panel_field14',
				'search_panel_field16',
				'search_panel_field15',
				'search_panel_field17',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field3' 
			),
			'_flexiblePanel' => true 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'-' => array(
			'type' => '-' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'distribution_id',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field3' => array(
			'field' => 'order_reference',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field5' => array(
			'field' => 'monthly_surgical_volume',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field6' => array(
			'field' => 'contact_name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field7' => array(
			'field' => 'contact_email',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field10' => array(
			'field' => 'quantity',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field11' => array(
			'field' => 'notes',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => false,
			'required' => false 
		),
		'search_panel_field14' => array(
			'field' => 'device_type',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field15' => array(
			'field' => 'payment_method',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field16' => array(
			'field' => 'transaction_type',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field17' => array(
			'field' => 'donor',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'adminarea_link',
				'changepassword_link' 
			) 
		),
		'loginform_login' => array(
			'type' => 'loginform_login',
			'popup' => false 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'adminarea_link' => array(
			'type' => 'adminarea_link' 
		),
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'notifications' => array(
			'type' => 'notifications' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_records',
				'print_button' 
			) 
		),
		'print_scope' => array(
			'type' => 'print_scope' 
		),
		'print_button' => array(
			'type' => 'print_button' 
		),
		'print_records' => array(
			'type' => 'print_records' 
		),
		'search_panel_field1' => array(
			'field' => 'region_name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field2' => array(
			'field' => 'country_name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field4' => array(
			'field' => 'facility_name',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
		),
		'search_panel_field8' => array(
			'field' => 'distribution_date',
			'type' => 'search_panel_field',
			'alwaysOnPanel' => true,
			'required' => false 
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
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				'filter_panel_field4',
				'filter_panel_field6',
				'filter_panel_field5',
				'filter_panel_field',
				'filter_panel_field2',
				'filter_panel_field1',
				'filter_panel_field3' 
			) 
		),
		'filter_panel_field' => array(
			'field' => 'device_type',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field1' => array(
			'field' => 'payment_method',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field2' => array(
			'field' => 'transaction_type',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field3' => array(
			'field' => 'donor',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field4' => array(
			'field' => 'region_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field5' => array(
			'field' => 'country_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field6' => array(
			'field' => 'distribution_date',
			'type' => 'filter_panel_field' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
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