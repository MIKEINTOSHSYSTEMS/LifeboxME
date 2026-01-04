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
		'public.training_languages' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.training_leads' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.training_partners' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.training_trainers' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list',
			'showCount' => true,
			'hideEmptyChild' => false,
			'hideEmptyPreview' => false,
			'showProceedLink' => true,
			'printDetails' => true 
		),
		'public.training_participation' => array(
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
		'public.training_courses' => array(
			'preview' => true 
		),
		'public.facilities' => array(
			'preview' => true 
		),
		'public.countries' => array(
			'preview' => true 
		),
		'public.programs' => array(
			'preview' => true 
		),
		'public.training_approaches' => array(
			'preview' => true 
		),
		'public.training_types' => array(
			'preview' => true 
		) 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'quarter',
			'facility_id',
			'host_country_id',
			'venue_id' 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'training_id' => array(
			'totalsType' => '' 
		),
		'course_id' => array(
			'totalsType' => '' 
		),
		'training_type_id' => array(
			'totalsType' => '' 
		),
		'approach_id' => array(
			'totalsType' => '' 
		),
		'program_id' => array(
			'totalsType' => '' 
		),
		'quarter' => array(
			'totalsType' => '' 
		),
		'start_date' => array(
			'totalsType' => '' 
		),
		'end_date' => array(
			'totalsType' => '' 
		),
		'facility_id' => array(
			'totalsType' => '' 
		),
		'host_country_id' => array(
			'totalsType' => '' 
		),
		'venue_id' => array(
			'totalsType' => '' 
		),
		'ceu_points' => array(
			'totalsType' => '' 
		),
		'num_participants' => array(
			'totalsType' => '' 
		),
		'avg_pre_test_score' => array(
			'totalsType' => '' 
		),
		'avg_post_test_score' => array(
			'totalsType' => '' 
		),
		'remarks' => array(
			'totalsType' => '' 
		),
		'training_details' => array(
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
			'training_id',
			'training_details',
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'facility_id',
			'venue_id',
			'host_country_id',
			'quarter',
			'start_date',
			'end_date',
			'ceu_points',
			'num_participants',
			'avg_pre_test_score',
			'avg_post_test_score',
			'remarks',
			'created_at',
			'updated_at' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'training_details',
			'training_id',
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'facility_id',
			'venue_id',
			'host_country_id',
			'quarter',
			'start_date',
			'end_date',
			'ceu_points',
			'num_participants',
			'avg_pre_test_score',
			'avg_post_test_score',
			'remarks',
			'updated_at',
			'created_at' 
		),
		'filterFields' => array( 
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'quarter',
			'facility_id',
			'host_country_id',
			'venue_id' 
		),
		'inlineAddFields' => array( 
			'training_details',
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'facility_id',
			'venue_id',
			'host_country_id',
			'quarter',
			'start_date',
			'end_date',
			'ceu_points',
			'num_participants',
			'avg_pre_test_score',
			'avg_post_test_score',
			'remarks',
			'created_at',
			'updated_at' 
		),
		'inlineEditFields' => array( 
			'course_id',
			'training_type_id',
			'approach_id',
			'program_id',
			'facility_id',
			'venue_id',
			'host_country_id',
			'quarter',
			'start_date',
			'end_date',
			'ceu_points',
			'num_participants',
			'avg_pre_test_score',
			'avg_post_test_score',
			'remarks',
			'created_at',
			'updated_at' 
		),
		'fieldItems' => array(
			'training_id' => array( 
				'simple_grid_field',
				'simple_grid_field4' 
			),
			'training_details' => array( 
				'simple_grid_field2',
				'simple_grid_field20' 
			),
			'course_id' => array( 
				'simple_grid_field1',
				'simple_grid_field21' 
			),
			'training_type_id' => array( 
				'simple_grid_field17',
				'simple_grid_field22' 
			),
			'approach_id' => array( 
				'simple_grid_field18',
				'simple_grid_field23' 
			),
			'program_id' => array( 
				'simple_grid_field19',
				'simple_grid_field24' 
			),
			'facility_id' => array( 
				'simple_grid_field8',
				'simple_grid_field25' 
			),
			'venue_id' => array( 
				'simple_grid_field3',
				'simple_grid_field26' 
			),
			'host_country_id' => array( 
				'simple_grid_field9',
				'simple_grid_field27' 
			),
			'quarter' => array( 
				'simple_grid_field5',
				'simple_grid_field28' 
			),
			'start_date' => array( 
				'simple_grid_field6',
				'simple_grid_field29' 
			),
			'end_date' => array( 
				'simple_grid_field7',
				'simple_grid_field30' 
			),
			'ceu_points' => array( 
				'simple_grid_field10',
				'simple_grid_field31' 
			),
			'num_participants' => array( 
				'simple_grid_field11',
				'simple_grid_field32' 
			),
			'avg_pre_test_score' => array( 
				'simple_grid_field12',
				'simple_grid_field33' 
			),
			'avg_post_test_score' => array( 
				'simple_grid_field13',
				'simple_grid_field34' 
			),
			'remarks' => array( 
				'simple_grid_field14',
				'simple_grid_field35' 
			),
			'created_at' => array( 
				'simple_grid_field15',
				'simple_grid_field36' 
			),
			'updated_at' => array( 
				'simple_grid_field16',
				'simple_grid_field37' 
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
					'loginform_login',
					'username_button' 
				),
				'top' => array( 
					'master_info',
					'search_panel' 
				),
				'grid' => array( 
					'simple_grid_field4',
					'simple_grid_field',
					'simple_grid_field20',
					'simple_grid_field2',
					'simple_grid_field21',
					'simple_grid_field1',
					'simple_grid_field22',
					'simple_grid_field17',
					'simple_grid_field23',
					'simple_grid_field18',
					'simple_grid_field24',
					'simple_grid_field19',
					'simple_grid_field25',
					'simple_grid_field8',
					'simple_grid_field26',
					'simple_grid_field3',
					'simple_grid_field27',
					'simple_grid_field9',
					'simple_grid_field28',
					'simple_grid_field5',
					'simple_grid_field29',
					'simple_grid_field6',
					'simple_grid_field30',
					'simple_grid_field7',
					'simple_grid_field31',
					'simple_grid_field10',
					'simple_grid_field32',
					'simple_grid_field11',
					'simple_grid_field33',
					'simple_grid_field12',
					'simple_grid_field34',
					'simple_grid_field13',
					'simple_grid_field35',
					'simple_grid_field14',
					'simple_grid_field36',
					'simple_grid_field15',
					'simple_grid_field37',
					'simple_grid_field16',
					'details_preview4',
					'details_preview5',
					'details_preview3',
					'details_preview1',
					'details_preview',
					'details_preview2',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_inline_edit',
					'grid_inline_save',
					'grid_inline_cancel',
					'grid_view',
					'grid_alldetails_link',
					'grid_details_link4',
					'grid_details_link5',
					'grid_details_link3',
					'grid_details_link1',
					'grid_details_link',
					'grid_details_link2' 
				) 
			),
			'formXtTags' => array(
				'below-grid' => array( 
					'pagination' 
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
				'loginform_login' => 'supertop',
				'username_button' => 'supertop',
				'master_info' => 'top',
				'search_panel' => 'top',
				'simple_grid_field4' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field18' => 'grid',
				'simple_grid_field24' => 'grid',
				'simple_grid_field19' => 'grid',
				'simple_grid_field25' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field26' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field27' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field28' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field29' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field30' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field31' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field32' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field33' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field34' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field35' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field36' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field37' => 'grid',
				'simple_grid_field16' => 'grid',
				'details_preview4' => 'grid',
				'details_preview5' => 'grid',
				'details_preview3' => 'grid',
				'details_preview1' => 'grid',
				'details_preview' => 'grid',
				'details_preview2' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_inline_edit' => 'grid',
				'grid_inline_save' => 'grid',
				'grid_inline_cancel' => 'grid',
				'grid_view' => 'grid',
				'grid_alldetails_link' => 'grid',
				'grid_details_link4' => 'grid',
				'grid_details_link5' => 'grid',
				'grid_details_link3' => 'grid',
				'grid_details_link1' => 'grid',
				'grid_details_link' => 'grid',
				'grid_details_link2' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field24' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field25' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field26' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field27' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field28' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field29' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field30' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field11' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'simple_grid_field31' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field12' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'simple_grid_field32' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field13' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				),
				'simple_grid_field33' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field14' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field14' 
				),
				'simple_grid_field34' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				),
				'simple_grid_field35' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field16' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_field16' 
				),
				'simple_grid_field36' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field17' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field17' 
				),
				'simple_grid_field37' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field18' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'cell_field18' 
				),
				'details_preview4' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview5' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview3' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview1' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview' => array(
					'location' => 'grid',
					'cellId' => 'cell_dpreview' 
				),
				'details_preview2' => array(
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
				'grid_details_link4' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link5' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link3' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link1' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link' => array(
					'location' => 'grid',
					'cellId' => 'cell_details' 
				),
				'grid_details_link2' => array(
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
				'search_panel_field10',
				'search_panel_field11',
				'search_panel_field12',
				'search_panel_field14',
				'search_panel_field16',
				'search_panel_field17',
				'search_panel_field18',
				'search_panel_field19',
				'search_panel_field9',
				'search_panel_field13' 
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
			'update_selected' => array( 
				'update_selected' 
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
				'filter_panel_field3',
				'filter_panel_field4',
				'filter_panel_field5',
				'filter_panel_field6',
				'filter_panel_field7' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field2',
				'simple_grid_field1',
				'simple_grid_field17',
				'simple_grid_field18',
				'simple_grid_field19',
				'simple_grid_field8',
				'simple_grid_field3',
				'simple_grid_field9',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15',
				'simple_grid_field16' 
			),
			'grid_field_label' => array( 
				'simple_grid_field4',
				'simple_grid_field20',
				'simple_grid_field21',
				'simple_grid_field22',
				'simple_grid_field23',
				'simple_grid_field24',
				'simple_grid_field25',
				'simple_grid_field26',
				'simple_grid_field27',
				'simple_grid_field28',
				'simple_grid_field29',
				'simple_grid_field30',
				'simple_grid_field31',
				'simple_grid_field32',
				'simple_grid_field33',
				'simple_grid_field34',
				'simple_grid_field35',
				'simple_grid_field36',
				'simple_grid_field37' 
			),
			'details_preview' => array( 
				'details_preview4',
				'details_preview5',
				'details_preview3',
				'details_preview1',
				'details_preview',
				'details_preview2' 
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
				'grid_details_link4',
				'grid_details_link5',
				'grid_details_link3',
				'grid_details_link1',
				'grid_details_link',
				'grid_details_link2' 
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
							'training_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
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
							'training_details_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
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
							'course_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
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
							'training_type_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
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
							'approach_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
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
							'program_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field24' 
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
							'facility_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field25' 
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
							'venue_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field26' 
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
							'host_country_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field27' 
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
							'quarter_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field28' 
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
							'start_date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field29' 
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
							'end_date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field30' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field12' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'ceu_points_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field31' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field13' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'num_participants_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field32' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field14' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'avg_pre_test_score_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field33' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'avg_post_test_score_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field34' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field16' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'remarks_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field35' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field17' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'created_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field36' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field18' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'updated_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field37' 
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
							'grid_details_link4',
							'grid_details_link5',
							'grid_details_link3',
							'grid_details_link1',
							'grid_details_link',
							'grid_details_link2' 
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
							'training_id_fieldcolumn' 
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
							'training_details_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
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
							'course_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
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
							'training_type_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
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
							'approach_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
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
							'program_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
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
							'facility_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
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
							'venue_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
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
							'host_country_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
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
							'quarter_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
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
							'start_date_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
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
							'end_date_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'ceu_points_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'num_participants_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'avg_pre_test_score_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'avg_post_test_score_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field16' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'remarks_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field17' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'created_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field18' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'updated_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
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
							14,
							15,
							16,
							17,
							18,
							19,
							20,
							21 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview4',
							'details_preview5',
							'details_preview3',
							'details_preview1',
							'details_preview',
							'details_preview2' 
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
					),
					'footcell_field12' => array(
						'cols' => array( 
							15 
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
					'footcell_field13' => array(
						'cols' => array( 
							16 
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
					'footcell_field14' => array(
						'cols' => array( 
							17 
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
					'footcell_field15' => array(
						'cols' => array( 
							18 
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
					'footcell_field16' => array(
						'cols' => array( 
							19 
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
					'footcell_field17' => array(
						'cols' => array( 
							20 
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
					'footcell_field18' => array(
						'cols' => array( 
							21 
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
				'width' => 22,
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
		'hasNotifications' => false,
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
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c' 
						) 
					) 
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
						'master_info' 
					) 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'search_panel' 
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
						),
						array(
							'cell' => 'headcell_field12' 
						),
						array(
							'cell' => 'headcell_field13' 
						),
						array(
							'cell' => 'headcell_field14' 
						),
						array(
							'cell' => 'headcell_field15' 
						),
						array(
							'cell' => 'headcell_field16' 
						),
						array(
							'cell' => 'headcell_field17' 
						),
						array(
							'cell' => 'headcell_field18' 
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
						),
						array(
							'cell' => 'cell_field12' 
						),
						array(
							'cell' => 'cell_field13' 
						),
						array(
							'cell' => 'cell_field14' 
						),
						array(
							'cell' => 'cell_field15' 
						),
						array(
							'cell' => 'cell_field16' 
						),
						array(
							'cell' => 'cell_field17' 
						),
						array(
							'cell' => 'cell_field18' 
						) 
					) 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'cell_dpreview',
							'colspan' => 22 
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
						),
						array(
							'cell' => 'footcell_field12' 
						),
						array(
							'cell' => 'footcell_field13' 
						),
						array(
							'cell' => 'footcell_field14' 
						),
						array(
							'cell' => 'footcell_field15' 
						),
						array(
							'cell' => 'footcell_field16' 
						),
						array(
							'cell' => 'footcell_field17' 
						),
						array(
							'cell' => 'footcell_field18' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'training_id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'training_id',
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
						'simple_grid_field20' 
					),
					'field' => 'training_details',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'training_details',
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
						'simple_grid_field21' 
					),
					'field' => 'course_id',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'course_id',
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
						'simple_grid_field22' 
					),
					'field' => 'training_type_id',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'training_type_id',
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
						'simple_grid_field23' 
					),
					'field' => 'approach_id',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field18' 
					),
					'field' => 'approach_id',
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
						'simple_grid_field24' 
					),
					'field' => 'program_id',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field19' 
					),
					'field' => 'program_id',
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
						'simple_grid_field25' 
					),
					'field' => 'facility_id',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'facility_id',
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
						'simple_grid_field26' 
					),
					'field' => 'venue_id',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'venue_id',
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
						'simple_grid_field27' 
					),
					'field' => 'host_country_id',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'host_country_id',
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
						'simple_grid_field28' 
					),
					'field' => 'quarter',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'quarter',
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
						'simple_grid_field29' 
					),
					'field' => 'start_date',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'start_date',
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
						'simple_grid_field30' 
					),
					'field' => 'end_date',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'end_date',
					'columnName' => 'field' 
				),
				'footcell_field11' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field12' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field31' 
					),
					'field' => 'ceu_points',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'ceu_points',
					'columnName' => 'field' 
				),
				'footcell_field12' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field13' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field32' 
					),
					'field' => 'num_participants',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'num_participants',
					'columnName' => 'field' 
				),
				'footcell_field13' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field14' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field33' 
					),
					'field' => 'avg_pre_test_score',
					'columnName' => 'field' 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'avg_pre_test_score',
					'columnName' => 'field' 
				),
				'footcell_field14' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field15' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field34' 
					),
					'field' => 'avg_post_test_score',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'avg_post_test_score',
					'columnName' => 'field' 
				),
				'footcell_field15' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field16' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field35' 
					),
					'field' => 'remarks',
					'columnName' => 'field' 
				),
				'cell_field16' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'remarks',
					'columnName' => 'field' 
				),
				'footcell_field16' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field17' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field36' 
					),
					'field' => 'created_at',
					'columnName' => 'field' 
				),
				'cell_field17' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'created_at',
					'columnName' => 'field' 
				),
				'footcell_field17' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field18' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field37' 
					),
					'field' => 'updated_at',
					'columnName' => 'field' 
				),
				'cell_field18' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'updated_at',
					'columnName' => 'field' 
				),
				'footcell_field18' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'cell_dpreview' => array(
					'model' => 'cell_dpreview',
					'items' => array( 
						'details_preview4',
						'details_preview5',
						'details_preview3',
						'details_preview1',
						'details_preview',
						'details_preview2' 
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
						'grid_details_link4',
						'grid_details_link5',
						'grid_details_link3',
						'grid_details_link1',
						'grid_details_link',
						'grid_details_link2' 
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
				'search_panel_field9',
				'search_panel_field14',
				'search_panel_field3',
				'search_panel_field17',
				'search_panel_field18',
				'search_panel_field19',
				'search_panel_field6',
				'search_panel_field13',
				'search_panel_field7',
				'search_panel_field10',
				'search_panel_field12',
				'search_panel_field5',
				'search_panel_field2',
				'search_panel_field8',
				'search_panel_field1',
				'search_panel_field',
				'search_panel_field11',
				'search_panel_field16',
				'search_panel_field4' 
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
			'field' => 'avg_post_test_score',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field1' => array(
			'field' => 'avg_pre_test_score',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field2' => array(
			'field' => 'ceu_points',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field3' => array(
			'field' => 'course_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field4' => array(
			'field' => 'created_at',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field5' => array(
			'field' => 'end_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field6' => array(
			'field' => 'facility_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field7' => array(
			'field' => 'host_country_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field8' => array(
			'field' => 'num_participants',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field10' => array(
			'field' => 'quarter',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field11' => array(
			'field' => 'remarks',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field12' => array(
			'field' => 'start_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field14' => array(
			'field' => 'training_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field16' => array(
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
				'4602' => 'true',
				'4608' => 'true',
				'4624' => 'true',
				'4647' => 'true',
				'4648' => 'true',
				'4649' => 'true' 
			) 
		),
		'print_details' => array(
			'type' => 'print_details',
			'tables' => array(
				'4625' => true,
				'4627' => true,
				'4631' => true,
				'4633' => true,
				'4659' => true,
				'4668' => true 
			) 
		),
		'search_panel_field17' => array(
			'field' => 'training_type_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field18' => array(
			'field' => 'approach_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field19' => array(
			'field' => 'program_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'update_selected' => array(
			'type' => 'update_selected' 
		),
		'search_panel_field9' => array(
			'field' => 'training_details',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field13' => array(
			'field' => 'venue_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
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
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				'filter_panel_field',
				'filter_panel_field1',
				'filter_panel_field2',
				'filter_panel_field3',
				'filter_panel_field5',
				'filter_panel_field7',
				'filter_panel_field6',
				'filter_panel_field4' 
			) 
		),
		'filter_panel_field' => array(
			'field' => 'course_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field1' => array(
			'field' => 'training_type_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field2' => array(
			'field' => 'approach_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field3' => array(
			'field' => 'program_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field4' => array(
			'field' => 'quarter',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field5' => array(
			'field' => 'facility_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field6' => array(
			'field' => 'host_country_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field7' => array(
			'field' => 'venue_id',
			'type' => 'filter_panel_field' 
		),
		'simple_grid_field' => array(
			'field' => 'training_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field4' => array(
			'type' => 'grid_field_label',
			'field' => 'training_id' 
		),
		'simple_grid_field2' => array(
			'field' => 'training_details',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => false 
		),
		'simple_grid_field20' => array(
			'type' => 'grid_field_label',
			'field' => 'training_details' 
		),
		'simple_grid_field1' => array(
			'field' => 'course_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field21' => array(
			'type' => 'grid_field_label',
			'field' => 'course_id' 
		),
		'simple_grid_field17' => array(
			'field' => 'training_type_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field22' => array(
			'type' => 'grid_field_label',
			'field' => 'training_type_id' 
		),
		'simple_grid_field18' => array(
			'field' => 'approach_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field23' => array(
			'type' => 'grid_field_label',
			'field' => 'approach_id' 
		),
		'simple_grid_field19' => array(
			'field' => 'program_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field24' => array(
			'type' => 'grid_field_label',
			'field' => 'program_id' 
		),
		'simple_grid_field8' => array(
			'field' => 'facility_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field25' => array(
			'type' => 'grid_field_label',
			'field' => 'facility_id' 
		),
		'simple_grid_field3' => array(
			'field' => 'venue_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field26' => array(
			'type' => 'grid_field_label',
			'field' => 'venue_id' 
		),
		'simple_grid_field9' => array(
			'field' => 'host_country_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field27' => array(
			'type' => 'grid_field_label',
			'field' => 'host_country_id' 
		),
		'simple_grid_field5' => array(
			'field' => 'quarter',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field28' => array(
			'type' => 'grid_field_label',
			'field' => 'quarter' 
		),
		'simple_grid_field6' => array(
			'field' => 'start_date',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field29' => array(
			'type' => 'grid_field_label',
			'field' => 'start_date' 
		),
		'simple_grid_field7' => array(
			'field' => 'end_date',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field30' => array(
			'type' => 'grid_field_label',
			'field' => 'end_date' 
		),
		'simple_grid_field10' => array(
			'field' => 'ceu_points',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field31' => array(
			'type' => 'grid_field_label',
			'field' => 'ceu_points' 
		),
		'simple_grid_field11' => array(
			'field' => 'num_participants',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field32' => array(
			'type' => 'grid_field_label',
			'field' => 'num_participants' 
		),
		'simple_grid_field12' => array(
			'field' => 'avg_pre_test_score',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field33' => array(
			'type' => 'grid_field_label',
			'field' => 'avg_pre_test_score' 
		),
		'simple_grid_field13' => array(
			'field' => 'avg_post_test_score',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field34' => array(
			'type' => 'grid_field_label',
			'field' => 'avg_post_test_score' 
		),
		'simple_grid_field14' => array(
			'field' => 'remarks',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field35' => array(
			'type' => 'grid_field_label',
			'field' => 'remarks' 
		),
		'simple_grid_field15' => array(
			'field' => 'created_at',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field36' => array(
			'type' => 'grid_field_label',
			'field' => 'created_at' 
		),
		'simple_grid_field16' => array(
			'field' => 'updated_at',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field37' => array(
			'type' => 'grid_field_label',
			'field' => 'updated_at' 
		),
		'details_preview4' => array(
			'type' => 'details_preview',
			'table' => 4659,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview5' => array(
			'type' => 'details_preview',
			'table' => 4668,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview3' => array(
			'type' => 'details_preview',
			'table' => 4633,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview1' => array(
			'type' => 'details_preview',
			'table' => 4627,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 4625,
			'items' => array( 
				 
			),
			'popup' => false,
			'proceedLink' => true,
			'hideEmptyPreview' => false,
			'pageId' => 'list' 
		),
		'details_preview2' => array(
			'type' => 'details_preview',
			'table' => 4631,
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
		'grid_details_link4' => array(
			'type' => 'grid_details_link',
			'table' => 4659,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link5' => array(
			'type' => 'grid_details_link',
			'table' => 4668,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link3' => array(
			'type' => 'grid_details_link',
			'table' => 4633,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link1' => array(
			'type' => 'grid_details_link',
			'table' => 4627,
			'badge' => true,
			'showCount' => true,
			'hideIfNone' => false 
		),
		'grid_details_link' => array(
			'type' => 'grid_details_link',
			'table' => 4625,
			'badge' => true,
			'hideIfNone' => false,
			'showCount' => true 
		),
		'grid_details_link2' => array(
			'type' => 'grid_details_link',
			'table' => 4631,
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