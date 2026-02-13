<?php
			$optionsArray = array(
	'master' => array(
		'aio_training_tracking' => array(
			'preview' => true 
		) 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			'gender',
			'participant_role',
			'country',
			'facility',
			'training_name',
			'program',
			'partners',
			'training_type',
			'training_approach',
			'training_language',
			'training_lead',
			'quarter',
			'attendance_status' 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'attendance_percentage',
			'training_type',
			'training_name',
			'training_lead',
			'training_language',
			'training_id',
			'training_approach',
			'total_days',
			'title',
			'start_date',
			'quarter',
			'program',
			'pre_test_score',
			'post_test_score',
			'phone',
			'partners',
			'participant_role',
			'participant_id',
			'middle_name',
			'last_name',
			'gender',
			'first_name',
			'facility',
			'end_date',
			'email',
			'days_recorded',
			'days_attended',
			'country',
			'ceu_points',
			'attendance_status' 
		),
		'filterFields' => array( 
			'gender',
			'participant_role',
			'country',
			'facility',
			'training_name',
			'program',
			'partners',
			'training_type',
			'training_approach',
			'training_language',
			'training_lead',
			'quarter' 
		),
		'fieldItems' => array(
			 
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
					'search_panel' 
				),
				'below-grid' => array( 
					 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu',
					'filter_panel' 
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
					'chart' 
				),
				'top' => array( 
					'master_info' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'mastertable_block' 
				) 
			),
			'itemForms' => array(
				'search_panel' => 'above-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'filter_panel' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'breadcrumb' => 'supertop',
				'simple_search' => 'supertop',
				'list_options' => 'supertop',
				'notifications' => 'supertop',
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'chart' => 'grid',
				'master_info' => 'top' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'breadcrumb' => 5,
				'expand_menu_button' => 2,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
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
			'search_panel_field' => array( 
				'search_panel_field28',
				'search_panel_field27',
				'search_panel_field26',
				'search_panel_field25',
				'search_panel_field24',
				'search_panel_field23',
				'search_panel_field22',
				'search_panel_field21',
				'search_panel_field20',
				'search_panel_field19',
				'search_panel_field18',
				'search_panel_field17',
				'search_panel_field16',
				'search_panel_field15',
				'search_panel_field14',
				'search_panel_field13',
				'search_panel_field12',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field9',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1',
				'search_panel_field',
				'search_panel_field29' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
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
			'chart' => array( 
				'chart' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
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
				'filter_panel_field6',
				'filter_panel_field7',
				'filter_panel_field8',
				'filter_panel_field9',
				'filter_panel_field10',
				'filter_panel_field11' 
			),
			'master_info' => array( 
				'master_info' 
			),
			'notifications' => array( 
				'notifications' 
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
		'hasCharts' => true 
	),
	'chart' => array(
		'chartCount' => 1 
	),
	'misc' => array(
		'type' => 'chart',
		'breadcrumb' => true 
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
	'id' => 'chart',
	'type' => 'chart',
	'layoutId' => 'leftbar',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
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
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					) 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'search_panel' 
					) 
				),
				'c' => array(
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
			'modelId' => 'empty-above-grid',
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
						'menu',
						'filter_panel' 
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
			'modelId' => 'chart-grid',
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
						'chart' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'list-sidebar-top',
			'grid' => array( 
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
						'master_info' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
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
		'search_panel_field28' => array(
			'field' => 'training_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'advsearch_link',
				'show_search_panel',
				'hide_search_panel' 
			) 
		),
		'search_panel_field27' => array(
			'field' => 'training_lead',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field26' => array(
			'field' => 'training_language',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field25' => array(
			'field' => 'training_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field24' => array(
			'field' => 'training_approach',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field23' => array(
			'field' => 'total_days',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field22' => array(
			'field' => 'title',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field21' => array(
			'field' => 'start_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field20' => array(
			'field' => 'quarter',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field19' => array(
			'field' => 'program',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field18' => array(
			'field' => 'pre_test_score',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field17' => array(
			'field' => 'post_test_score',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field16' => array(
			'field' => 'phone',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field15' => array(
			'field' => 'partners',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field14' => array(
			'field' => 'participant_role',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field13' => array(
			'field' => 'participant_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field12' => array(
			'field' => 'middle_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field11' => array(
			'field' => 'last_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field10' => array(
			'field' => 'gender',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field9' => array(
			'field' => 'first_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field8' => array(
			'field' => 'facility',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field7' => array(
			'field' => 'end_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field6' => array(
			'field' => 'email',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field5' => array(
			'field' => 'days_recorded',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field4' => array(
			'field' => 'days_attended',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field3' => array(
			'field' => 'country',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field2' => array(
			'field' => 'ceu_points',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field1' => array(
			'field' => 'attendance_status',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field' => array(
			'field' => 'attendance_percentage',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field',
				'search_panel_field29',
				'search_panel_field28',
				'search_panel_field27',
				'search_panel_field26',
				'search_panel_field25',
				'search_panel_field24',
				'search_panel_field23',
				'search_panel_field22',
				'search_panel_field21',
				'search_panel_field20',
				'search_panel_field19',
				'search_panel_field18',
				'search_panel_field17',
				'search_panel_field16',
				'search_panel_field15',
				'search_panel_field14',
				'search_panel_field13',
				'search_panel_field12',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field9',
				'search_panel_field8',
				'search_panel_field7',
				'search_panel_field6',
				'search_panel_field5',
				'search_panel_field4',
				'search_panel_field3',
				'search_panel_field2',
				'search_panel_field1' 
			),
			'_flexiblePanel' => true 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
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
		'chart' => array(
			'type' => 'chart',
			'table' => 4717,
			'icon' => array(
				'glyph' => 'signal' 
			) 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'search_panel_field29' => array(
			'field' => 'training_type',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				'filter_panel_field',
				'filter_panel_field11',
				'filter_panel_field10',
				'filter_panel_field9',
				'filter_panel_field8',
				'filter_panel_field7',
				'filter_panel_field6',
				'filter_panel_field5',
				'filter_panel_field4',
				'filter_panel_field3',
				'filter_panel_field2',
				'filter_panel_field1' 
			) 
		),
		'filter_panel_field' => array(
			'field' => 'gender',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field1' => array(
			'field' => 'participant_role',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field2' => array(
			'field' => 'country',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field3' => array(
			'field' => 'facility',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field4' => array(
			'field' => 'training_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field5' => array(
			'field' => 'program',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field6' => array(
			'field' => 'partners',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field7' => array(
			'field' => 'training_type',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field8' => array(
			'field' => 'training_approach',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field9' => array(
			'field' => 'training_language',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field10' => array(
			'field' => 'training_lead',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field11' => array(
			'field' => 'quarter',
			'type' => 'filter_panel_field' 
		),
		'master_info' => array(
			'type' => 'master_info',
			'tables' => array(
				'4700' => 'true' 
			) 
		),
		'notifications' => array(
			'type' => 'notifications' 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
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