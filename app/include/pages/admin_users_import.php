<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'ID',
			'username',
			'password',
			'email',
			'fullname',
			'groupid',
			'active',
			'ext_security_id',
			'reset_token',
			'reset_date',
			'first_name',
			'middle_name',
			'last_name',
			'sex',
			'designation_role',
			'region',
			'country',
			'phone',
			'prefix_title' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'ID' => array( 
				'import_field' 
			),
			'username' => array( 
				'import_field1' 
			),
			'password' => array( 
				'import_field2' 
			),
			'email' => array( 
				'import_field3' 
			),
			'fullname' => array( 
				'import_field4' 
			),
			'groupid' => array( 
				'import_field5' 
			),
			'active' => array( 
				'import_field6' 
			),
			'ext_security_id' => array( 
				'import_field7' 
			),
			'reset_token' => array( 
				'import_field8' 
			),
			'reset_date' => array( 
				'import_field9' 
			),
			'first_name' => array( 
				'import_field10' 
			),
			'middle_name' => array( 
				'import_field11' 
			),
			'last_name' => array( 
				'import_field12' 
			),
			'sex' => array( 
				'import_field13' 
			),
			'designation_role' => array( 
				'import_field14' 
			),
			'region' => array( 
				'import_field15' 
			),
			'country' => array( 
				'import_field16' 
			),
			'phone' => array( 
				'import_field17' 
			),
			'prefix_title' => array( 
				'import_field18' 
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
					'import_field15',
					'import_field16',
					'import_field17',
					'import_field18' 
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
				'import_field15' => 'grid',
				'import_field16' => 'grid',
				'import_field17' => 'grid',
				'import_field18' => 'grid' 
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
				'import_field15',
				'import_field16',
				'import_field17',
				'import_field18' 
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
						'import_field15',
						'import_field16',
						'import_field17',
						'import_field18' 
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
			'field' => 'ID',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'username',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'password',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'email',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'fullname',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'groupid',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'active',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'ext_security_id',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'reset_token',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'reset_date',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'first_name',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'middle_name',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'last_name',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'sex',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'designation_role',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'region',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'country',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'phone',
			'type' => 'import_field' 
		),
		'import_field18' => array(
			'field' => 'prefix_title',
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