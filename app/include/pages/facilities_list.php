<?php
			$optionsArray = array(
	'list' => array(
		'inlineAdd' => true,
		'detailsAdd' => true,
		'inlineEdit' => true,
		'spreadsheetMode' => false,
		'addToBottom' => false,
		'delete' => true,
		'updateSelected' => true,
		'clickSort' => true,
		'sortDropdown' => false,
		'showHideFields' => false,
		'reorderFields' => false,
		'fieldFilter' => false,
		'hideNumberOfRecords' => false 
	),
	'allDetails' => array(
		'linkType' => 0 
	),
	'details' => array(
		'public.clean_cut_implementations' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.device_distributions' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.follow_ups' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.surgical_cases' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.training_sessions' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.ward_rounds' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.training_participants' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.venues' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.lbpmi_data_values' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		) 
	),
	'master' => array(
		'public.countries' => array(
			'preview' => true 
		) 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			'facility_name',
			'country_id',
			'facility_type',
			'region_id' 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'facility_id' => array(
			'totalsType' => '' 
		),
		'facility_name' => array(
			'totalsType' => '' 
		),
		'country_id' => array(
			'totalsType' => '' 
		),
		'facility_type' => array(
			'totalsType' => '' 
		),
		'address' => array(
			'totalsType' => '' 
		),
		'city' => array(
			'totalsType' => '' 
		),
		'latitude' => array(
			'totalsType' => '' 
		),
		'longitude' => array(
			'totalsType' => '' 
		),
		'is_active' => array(
			'totalsType' => '' 
		),
		'created_at' => array(
			'totalsType' => '' 
		),
		'updated_at' => array(
			'totalsType' => '' 
		),
		'region_id' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'facility_id',
			'facility_name',
			'region_id',
			'country_id',
			'facility_type',
			'address',
			'city',
			'latitude',
			'longitude',
			'is_active',
			'created_at',
			'updated_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'facility_id',
			'facility_name',
			'region_id',
			'country_id',
			'facility_type',
			'address',
			'city',
			'latitude',
			'longitude',
			'is_active',
			'updated_at',
			'created_at' 
		),
		'filterFields' => array( 
			'facility_name',
			'country_id',
			'facility_type',
			'region_id' 
		),
		'inlineAddFields' => array( 
			'facility_name',
			'region_id',
			'country_id',
			'facility_type',
			'address',
			'city',
			'latitude',
			'longitude',
			'is_active',
			'created_at',
			'updated_at' 
		),
		'inlineEditFields' => array( 
			'facility_name',
			'region_id',
			'country_id',
			'facility_type',
			'address',
			'city',
			'latitude',
			'longitude',
			'is_active',
			'created_at',
			'updated_at' 
		),
		'fieldItems' => array(
			'facility_id' => array( 
				'simple_grid_field',
				'simple_grid_field12' 
			),
			'facility_name' => array( 
				'simple_grid_field1',
				'simple_grid_field13' 
			),
			'region_id' => array( 
				'simple_grid_field11',
				'simple_grid_field14' 
			),
			'country_id' => array( 
				'simple_grid_field2',
				'simple_grid_field15' 
			),
			'facility_type' => array( 
				'simple_grid_field3',
				'simple_grid_field16' 
			),
			'address' => array( 
				'simple_grid_field4',
				'simple_grid_field17' 
			),
			'city' => array( 
				'simple_grid_field5',
				'simple_grid_field18' 
			),
			'latitude' => array( 
				'simple_grid_field6',
				'simple_grid_field19' 
			),
			'longitude' => array( 
				'simple_grid_field7',
				'simple_grid_field20' 
			),
			'is_active' => array( 
				'simple_grid_field8',
				'simple_grid_field21' 
			),
			'created_at' => array( 
				'simple_grid_field9',
				'simple_grid_field22' 
			),
			'updated_at' => array( 
				'simple_grid_field10',
				'simple_grid_field23' 
			) 
		),
		'hideEmptyFields' => array( 
			 
		),
		'fieldFilterFields' => array( 
			 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => true,
		'view' => true,
		'print' => true 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'add',
					'inline_add',
					'inline_save_all',
					'inline_cancel_all',
					'delete',
					'update_selected',
					'details_found',
					'page_size',
					'print_panel',
					'search_panel',
					'filter_panel' 
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
				'top' => array( 
					'master_info' 
				),
				'grid' => array( 
					'simple_grid_field12',
					'simple_grid_field',
					'simple_grid_field13',
					'simple_grid_field1',
					'simple_grid_field14',
					'simple_grid_field11',
					'simple_grid_field15',
					'simple_grid_field2',
					'simple_grid_field16',
					'simple_grid_field3',
					'simple_grid_field17',
					'simple_grid_field4',
					'simple_grid_field18',
					'simple_grid_field5',
					'simple_grid_field19',
					'simple_grid_field6',
					'simple_grid_field20',
					'simple_grid_field7',
					'simple_grid_field21',
					'simple_grid_field8',
					'simple_grid_field22',
					'simple_grid_field9',
					'simple_grid_field23',
					'simple_grid_field10',
					'details_preview',
					'details_preview1',
					'details_preview2',
					'details_preview3',
					'details_preview4',
					'details_preview5',
					'details_preview6',
					'details_preview7',
					'details_preview8',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_inline_edit',
					'grid_inline_save',
					'grid_inline_cancel',
					'grid_view',
					'grid_alldetails_link',
					'grid_details_link',
					'grid_details_link1',
					'grid_details_link2',
					'grid_details_link3',
					'grid_details_link4',
					'grid_details_link5',
					'grid_details_link6',
					'grid_details_link7',
					'grid_details_link8' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
				),
				'top' => array( 
					'mastertable_block' 
				) 
			),
			'itemForms' => array(
				'add' => 'above-grid',
				'inline_add' => 'above-grid',
				'inline_save_all' => 'above-grid',
				'inline_cancel_all' => 'above-grid',
				'delete' => 'above-grid',
				'update_selected' => 'above-grid',
				'details_found' => 'above-grid',
				'page_size' => 'above-grid',
				'print_panel' => 'above-grid',
				'search_panel' => 'above-grid',
				'filter_panel' => 'above-grid',
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
				'master_info' => 'top',
				'simple_grid_field12' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field18' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field19' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field10' => 'grid',
				'details_preview' => 'grid',
				'details_preview1' => 'grid',
				'details_preview2' => 'grid',
				'details_preview3' => 'grid',
				'details_preview4' => 'grid',
				'details_preview5' => 'grid',
				'details_preview6' => 'grid',
				'details_preview7' => 'grid',
				'details_preview8' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_inline_edit' => 'grid',
				'grid_inline_save' => 'grid',
				'grid_inline_cancel' => 'grid',
				'grid_view' => 'grid',
				'grid_alldetails_link' => 'grid',
				'grid_details_link' => 'grid',
				'grid_details_link1' => 'grid',
				'grid_details_link2' => 'grid',
				'grid_details_link3' => 'grid',
				'grid_details_link4' => 'grid',
				'grid_details_link5' => 'grid',
				'grid_details_link6' => 'grid',
				'grid_details_link7' => 'grid',
				'grid_details_link8' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field11' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview1' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview2' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview3' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview4' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview5' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview6' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview7' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview8' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'grid_checkbox_head' => array(
					'location' => 'grid',
					'cellId' => 'headcell_checkbox' 
				),
				'grid_checkbox' => array(
					'location' => 'grid',
					'cellId' => 'cell_checkbox' 
				),
				'grid_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_inline_edit' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_inline_save' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_inline_cancel' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_view' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				),
				'grid_alldetails_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link1' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link2' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link3' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link4' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link5' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link6' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link7' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link8' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				) 
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
			'details_found' => array( 
				'details_found' 
			),
			'search_panel' => array( 
				'search_panel' 
			),
			'list_options' => array( 
				'list_options' 
			),
			'show_search_panel' => array( 
				'show_search_panel' 
			),
			'hide_search_panel' => array( 
				'hide_search_panel' 
			),
			'search_panel_field' => array( 
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field10',
				'search_panel_field11' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'add' => array( 
				'add' 
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
			'export' => array( 
				'export' 
			),
			'-' => array( 
				'-',
				'-1',
				'-2',
				'-3' 
			),
			'export_selected' => array( 
				'export_selected' 
			),
			'import' => array( 
				'import' 
			),
			'delete' => array( 
				'delete' 
			),
			'delete_selected' => array( 
				'delete_selected' 
			),
			'advsearch_link' => array( 
				'advsearch_link' 
			),
			'master_info' => array( 
				'master_info' 
			),
			'print_details' => array( 
				'print_details' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'inline_save_all' => array( 
				'inline_save_all' 
			),
			'inline_cancel_all' => array( 
				'inline_cancel_all' 
			),
			'edit_selected' => array( 
				'edit_selected' 
			),
			'update_selected' => array( 
				'update_selected' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'changepassword_link' => array( 
				'changepassword_link' 
			),
			'adminarea_link' => array( 
				'adminarea_link' 
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
			'filter_panel' => array( 
				'filter_panel' 
			),
			'filter_panel_field' => array( 
				'filter_panel_field',
				'filter_panel_field1',
				'filter_panel_field2',
				'filter_panel_field3' 
			),
			'notifications' => array( 
				'notifications' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field11',
				'simple_grid_field2',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10' 
			),
			'grid_field_label' => array( 
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15',
				'simple_grid_field16',
				'simple_grid_field17',
				'simple_grid_field18',
				'simple_grid_field19',
				'simple_grid_field20',
				'simple_grid_field21',
				'simple_grid_field22',
				'simple_grid_field23' 
			),
			'details_preview' => array( 
				'details_preview',
				'details_preview1',
				'details_preview2',
				'details_preview3',
				'details_preview4',
				'details_preview5',
				'details_preview6',
				'details_preview7',
				'details_preview8' 
			),
			'grid_checkbox' => array( 
				'grid_checkbox' 
			),
			'grid_checkbox_head' => array( 
				'grid_checkbox_head' 
			),
			'grid_edit' => array( 
				'grid_edit' 
			),
			'grid_view' => array( 
				'grid_view' 
			),
			'grid_alldetails_link' => array( 
				'grid_alldetails_link' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			),
			'grid_inline_save' => array( 
				'grid_inline_save' 
			),
			'grid_inline_edit' => array( 
				'grid_inline_edit' 
			),
			'grid_details_link' => array( 
				'grid_details_link',
				'grid_details_link1',
				'grid_details_link2',
				'grid_details_link3',
				'grid_details_link4',
				'grid_details_link5',
				'grid_details_link6',
				'grid_details_link7',
				'grid_details_link8' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox_head' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_details' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'facility_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'facility_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'region_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'country_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'facility_type_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'address_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'city_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'latitude_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'longitude_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'is_active_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field10' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'created_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field11' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'updated_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'edit_column',
							'inlineedit_column',
							'inline_save',
							'inline_cancel',
							'view_column' 
						),
						'items' => array( 
							'grid_edit',
							'grid_inline_edit',
							'grid_inline_save',
							'grid_inline_cancel',
							'grid_view' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'checkbox_column' 
						),
						'items' => array( 
							'grid_checkbox' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_details' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'grid_alldetails_link',
							'grid_details_link',
							'grid_details_link1',
							'grid_details_link2',
							'grid_details_link3',
							'grid_details_link4',
							'grid_details_link5',
							'grid_details_link6',
							'grid_details_link7',
							'grid_details_link8' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'facility_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'facility_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'region_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'country_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'facility_type_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'address_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'city_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'latitude_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'longitude_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'is_active_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'created_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'updated_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_dpreview' => array(
						'cols' => array( 
							0,
							1,
							2,
							3,
							4,
							5,
							6,
							7,
							8,
							9,
							10,
							11,
							12,
							13,
							14 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview',
							'details_preview1',
							'details_preview2',
							'details_preview3',
							'details_preview4',
							'details_preview5',
							'details_preview6',
							'details_preview7',
							'details_preview8' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_checkbox' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_details' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field1' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field2' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field3' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field4' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field5' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field6' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field7' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field8' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field9' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field10' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field11' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 15,
				'height' => 4 
			) 
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
		'gridType' => 0,
		'recsPerRow' => 1,
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
		'type' => 'list',
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
	'dataGrid' => array(
		'groupFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'list',
	'type' => 'list',
	'layoutId' => 'leftbar',
	'disabled' => 0,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'list-above-grid',
			'grid' => array( 
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
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'add',
						'inline_add',
						'inline_save_all',
						'inline_cancel_all',
						'delete',
						'update_selected' 
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
						'search_panel' 
					) 
				),
				'c4' => array(
					'model' => 'c1',
					'items' => array( 
						'filter_panel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'list-below-grid',
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
			'modelId' => 'leftbar-top',
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
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_checkbox' 
						),
						array(
							'cell' => 'headcell_details' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
						),
						array(
							'cell' => 'headcell_field9' 
						),
						array(
							'cell' => 'headcell_field10' 
						),
						array(
							'cell' => 'headcell_field11' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_icons' 
						),
						array(
							'cell' => 'cell_checkbox' 
						),
						array(
							'cell' => 'cell_details' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field6' 
						),
						array(
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
						),
						array(
							'cell' => 'cell_field9' 
						),
						array(
							'cell' => 'cell_field10' 
						),
						array(
							'cell' => 'cell_field11' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 15 
						) 
					),
					'section' => 'body' 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'footcell_checkbox' 
						),
						array(
							'cell' => 'footcell_details' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field6' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						),
						array(
							'cell' => 'footcell_field9' 
						),
						array(
							'cell' => 'footcell_field10' 
						),
						array(
							'cell' => 'footcell_field11' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'facility_id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'facility_id',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'facility_name',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'facility_name',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'region_id',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'region_id',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'country_id',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'country_id',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'facility_type',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'facility_type',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'address',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'address',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field18' 
					),
					'field' => 'city',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'city',
					'columnName' => 'field' 
				),
				'footcell_field6' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field19' 
					),
					'field' => 'latitude',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'latitude',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field20' 
					),
					'field' => 'longitude',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'longitude',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field9' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field21' 
					),
					'field' => 'is_active',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'is_active',
					'columnName' => 'field' 
				),
				'footcell_field9' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field10' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field22' 
					),
					'field' => 'created_at',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'created_at',
					'columnName' => 'field' 
				),
				'footcell_field10' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field11' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field23' 
					),
					'field' => 'updated_at',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'updated_at',
					'columnName' => 'field' 
				),
				'footcell_field11' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						'details_preview',
						'details_preview1',
						'details_preview2',
						'details_preview3',
						'details_preview4',
						'details_preview5',
						'details_preview6',
						'details_preview7',
						'details_preview8' 
					) 
				),
				'headcell_checkbox' => array(
					'model' => 'headcell_checkbox',
					'items' => array( 
						'grid_checkbox_head' 
					) 
				),
				'cell_checkbox' => array(
					'model' => 'cell_checkbox',
					'items' => array( 
						'grid_checkbox' 
					) 
				),
				'footcell_checkbox' => array(
					'model' => 'footcell_checkbox',
					'items' => array( 
						 
					) 
				),
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_edit',
						'grid_inline_edit',
						'grid_inline_save',
						'grid_inline_cancel',
						'grid_view' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				),
				'headcell_details' => array(
					'model' => 'headcell_details',
					'items' => array( 
						 
					) 
				),
				'cell_details' => array(
					'model' => 'cell_details',
					'items' => array( 
						'grid_alldetails_link',
						'grid_details_link',
						'grid_details_link1',
						'grid_details_link2',
						'grid_details_link3',
						'grid_details_link4',
						'grid_details_link5',
						'grid_details_link6',
						'grid_details_link7',
						'grid_details_link8' 
					) 
				),
				'footcell_details' => array(
					'model' => 'footcell_details',
					'items' => array( 
						 
					) 
				) 
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
		'details_found' => array(
			'type' => 'details_found' 
		),
		'search_panel' => array(
			'type' => 'search_panel',
			'items' => array( 
				'search_panel_field4',
				'search_panel_field5',
				'search_panel_field11',
				'search_panel_field2',
				'search_panel_field6',
				'search_panel_field',
				'search_panel_field1',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field7',
				'search_panel_field10',
				'search_panel_field3' 
			),
			'_flexiblePanel' => true 
		),
		'list_options' => array(
			'type' => 'list_options',
			'items' => array( 
				'edit_selected',
				'export_selected',
				'delete_selected',
				'-3',
				'advsearch_link',
				'show_search_panel',
				'hide_search_panel',
				'-1',
				'export',
				'-2',
				'import' 
			) 
		),
		'show_search_panel' => array(
			'type' => 'show_search_panel' 
		),
		'hide_search_panel' => array(
			'type' => 'hide_search_panel' 
		),
		'search_panel_field' => array(
			'field' => 'address',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field1' => array(
			'field' => 'city',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field2' => array(
			'field' => 'country_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field3' => array(
			'field' => 'created_at',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field4' => array(
			'field' => 'facility_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field5' => array(
			'field' => 'facility_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field6' => array(
			'field' => 'facility_type',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field7' => array(
			'field' => 'is_active',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field8' => array(
			'field' => 'latitude',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field9' => array(
			'field' => 'longitude',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field10' => array(
			'field' => 'updated_at',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button' 
		),
		'add' => array(
			'type' => 'add' 
		),
		'print_panel' => array(
			'type' => 'print_panel',
			'items' => array( 
				'print_scope',
				'print_details',
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
		'export' => array(
			'type' => 'export' 
		),
		'-' => array(
			'type' => '-' 
		),
		'export_selected' => array(
			'type' => 'export_selected' 
		),
		'-1' => array(
			'type' => '-' 
		),
		'import' => array(
			'type' => 'import' 
		),
		'-2' => array(
			'type' => '-' 
		),
		'delete' => array(
			'type' => 'delete' 
		),
		'delete_selected' => array(
			'type' => 'delete_selected' 
		),
		'advsearch_link' => array(
			'type' => 'advsearch_link' 
		),
		'-3' => array(
			'type' => '-' 
		),
		'master_info' => array(
			'type' => 'master_info',
			'tables' => array(
				'4602' => 'true' 
			) 
		),
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'4603' => true,
				'4605' => true,
				'4609' => true,
				'4619' => true,
				'4630' => true,
				'4637' => true,
				'4659' => true,
				'4663' => true,
				'4793' => true 
			) 
		),
		'inline_add' => array(
			'type' => 'inline_add' 
		),
		'inline_save_all' => array(
			'type' => 'inline_save_all' 
		),
		'inline_cancel_all' => array(
			'type' => 'inline_cancel_all' 
		),
		'edit_selected' => array(
			'type' => 'edit_selected' 
		),
		'update_selected' => array(
			'type' => 'update_selected' 
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
		'changepassword_link' => array(
			'type' => 'changepassword_link' 
		),
		'adminarea_link' => array(
			'type' => 'adminarea_link' 
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
		'search_panel_field11' => array(
			'field' => 'region_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				'filter_panel_field',
				'filter_panel_field3',
				'filter_panel_field1',
				'filter_panel_field2' 
			) 
		),
		'filter_panel_field' => array(
			'field' => 'facility_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field1' => array(
			'field' => 'country_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field2' => array(
			'field' => 'facility_type',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field3' => array(
			'field' => 'region_id',
			'type' => 'filter_panel_field' 
		),
		'notifications' => array(
			'type' => 'notifications' 
		),
		'simple_grid_field' => array(
			'field' => 'facility_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field12' => array(
			'type' => 'grid_field_label',
			'field' => 'facility_id' 
		),
		'simple_grid_field1' => array(
			'field' => 'facility_name',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field13' => array(
			'type' => 'grid_field_label',
			'field' => 'facility_name' 
		),
		'simple_grid_field11' => array(
			'field' => 'region_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field14' => array(
			'type' => 'grid_field_label',
			'field' => 'region_id' 
		),
		'simple_grid_field2' => array(
			'field' => 'country_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field15' => array(
			'type' => 'grid_field_label',
			'field' => 'country_id' 
		),
		'simple_grid_field3' => array(
			'field' => 'facility_type',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field16' => array(
			'type' => 'grid_field_label',
			'field' => 'facility_type' 
		),
		'simple_grid_field4' => array(
			'field' => 'address',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field17' => array(
			'type' => 'grid_field_label',
			'field' => 'address' 
		),
		'simple_grid_field5' => array(
			'field' => 'city',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field18' => array(
			'type' => 'grid_field_label',
			'field' => 'city' 
		),
		'simple_grid_field6' => array(
			'field' => 'latitude',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field19' => array(
			'type' => 'grid_field_label',
			'field' => 'latitude' 
		),
		'simple_grid_field7' => array(
			'field' => 'longitude',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field20' => array(
			'type' => 'grid_field_label',
			'field' => 'longitude' 
		),
		'simple_grid_field8' => array(
			'field' => 'is_active',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field21' => array(
			'type' => 'grid_field_label',
			'field' => 'is_active' 
		),
		'simple_grid_field9' => array(
			'field' => 'created_at',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field22' => array(
			'type' => 'grid_field_label',
			'field' => 'created_at' 
		),
		'simple_grid_field10' => array(
			'field' => 'updated_at',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field23' => array(
			'type' => 'grid_field_label',
			'field' => 'updated_at' 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 4603,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview1' => array(
			'type' => 'details_preview',
			'table' => 4605,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview2' => array(
			'type' => 'details_preview',
			'table' => 4609,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview3' => array(
			'type' => 'details_preview',
			'table' => 4619,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview4' => array(
			'type' => 'details_preview',
			'table' => 4630,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview5' => array(
			'type' => 'details_preview',
			'table' => 4637,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview6' => array(
			'type' => 'details_preview',
			'table' => 4659,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview7' => array(
			'type' => 'details_preview',
			'table' => 4663,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview8' => array(
			'type' => 'details_preview',
			'table' => 4793,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'grid_checkbox' => array(
			'type' => 'grid_checkbox' 
		),
		'grid_checkbox_head' => array(
			'type' => 'grid_checkbox_head' 
		),
		'grid_edit' => array(
			'type' => 'grid_edit' 
		),
		'grid_view' => array(
			'type' => 'grid_view' 
		),
		'grid_alldetails_link' => array(
			'type' => 'grid_alldetails_link' 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
		),
		'grid_inline_save' => array(
			'type' => 'grid_inline_save' 
		),
		'grid_inline_edit' => array(
			'type' => 'grid_inline_edit' 
		),
		'grid_details_link' => array(
			'type' => 'grid_details_link',
			'table' => 4603,
			'badge' => true,
			'hideIfNone' => false,
			'showCount' => true 
		),
		'grid_details_link1' => array(
			'type' => 'grid_details_link',
			'table' => 4605,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link2' => array(
			'type' => 'grid_details_link',
			'table' => 4609,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link3' => array(
			'type' => 'grid_details_link',
			'table' => 4619,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link4' => array(
			'type' => 'grid_details_link',
			'table' => 4630,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link5' => array(
			'type' => 'grid_details_link',
			'table' => 4637,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link6' => array(
			'type' => 'grid_details_link',
			'table' => 4659,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link7' => array(
			'type' => 'grid_details_link',
			'table' => 4663,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link8' => array(
			'type' => 'grid_details_link',
			'table' => 4793,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
		) 
	),
	'dbProps' => array(
		 
	),
	'spreadsheetGrid' => false,
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