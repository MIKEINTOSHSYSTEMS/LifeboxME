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
	'master' => array(
		'public.training_participation' => array(
			'preview' => true 
		) 
	),
	'listSearch' => array(
		'alwaysOnPanelFields' => array( 
			'day_number',
			'attended',
			'attendance_date',
			'participant_full_name',
			'sex_name',
			'facility_name',
			'role_name',
			'course_name',
			'program_name',
			'quarter',
			'start_date',
			'end_date',
			'training_type',
			'training_approach',
			'host_country',
			'host_region',
			'venue_name',
			'partner_name',
			'training_lead_name' 
		),
		'searchPanel' => true,
		'fixedSearchPanel' => false,
		'simpleSearchOptions' => false,
		'searchSaving' => false 
	),
	'totals' => array(
		'attendance_id' => array(
			'totalsType' => '' 
		),
		'day_number' => array(
			'totalsType' => '' 
		),
		'attended' => array(
			'totalsType' => '' 
		),
		'attendance_date' => array(
			'totalsType' => '' 
		),
		'notes' => array(
			'totalsType' => '' 
		),
		'recorded_at' => array(
			'totalsType' => '' 
		),
		'recorded_by' => array(
			'totalsType' => '' 
		),
		'participation_id' => array(
			'totalsType' => '' 
		),
		'participant_full_name' => array(
			'totalsType' => '' 
		),
		'sex_name' => array(
			'totalsType' => '' 
		),
		'facility_name' => array(
			'totalsType' => '' 
		),
		'role_name' => array(
			'totalsType' => '' 
		),
		'training_id' => array(
			'totalsType' => '' 
		),
		'course_name' => array(
			'totalsType' => '' 
		),
		'program_name' => array(
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
		'training_type' => array(
			'totalsType' => '' 
		),
		'training_approach' => array(
			'totalsType' => '' 
		),
		'host_country' => array(
			'totalsType' => '' 
		),
		'host_region' => array(
			'totalsType' => '' 
		),
		'venue_name' => array(
			'totalsType' => '' 
		),
		'partner_name' => array(
			'totalsType' => '' 
		),
		'training_lead_name' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'attendance_id',
			'course_name',
			'training_id',
			'participant_full_name',
			'sex_name',
			'attended',
			'day_number',
			'attendance_date',
			'role_name',
			'facility_name',
			'training_lead_name',
			'training_type',
			'training_approach',
			'program_name',
			'partner_name',
			'host_region',
			'host_country',
			'venue_name',
			'quarter',
			'start_date',
			'end_date',
			'notes',
			'recorded_by',
			'recorded_at',
			'program_id',
			'participation_id' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			'course_name',
			'training_id',
			'attended',
			'day_number',
			'participant_full_name',
			'sex_name',
			'role_name',
			'facility_name',
			'training_lead_name',
			'training_type',
			'training_approach',
			'program_name',
			'partner_name',
			'host_region',
			'host_country',
			'venue_name',
			'attendance_date',
			'quarter',
			'start_date',
			'end_date',
			'notes',
			'recorded_at',
			'recorded_by',
			'program_id',
			'attendance_id',
			'participation_id' 
		),
		'filterFields' => array( 
			'day_number',
			'attended',
			'training_id',
			'sex_name',
			'facility_name',
			'role_name',
			'course_name',
			'program_name',
			'quarter',
			'start_date',
			'end_date',
			'training_type',
			'training_approach',
			'host_country',
			'host_region',
			'venue_name',
			'partner_name',
			'training_lead_name' 
		),
		'inlineAddFields' => array( 
			'attended',
			'day_number',
			'attendance_date',
			'notes',
			'recorded_by',
			'recorded_at',
			'participation_id' 
		),
		'inlineEditFields' => array( 
			'attended',
			'day_number',
			'attendance_date',
			'notes',
			'recorded_by',
			'recorded_at',
			'participation_id' 
		),
		'fieldItems' => array(
			'attendance_id' => array( 
				'simple_grid_field',
				'simple_grid_field26' 
			),
			'course_name' => array( 
				'simple_grid_field13',
				'simple_grid_field27' 
			),
			'training_id' => array( 
				'simple_grid_field12',
				'simple_grid_field28' 
			),
			'participant_full_name' => array( 
				'simple_grid_field8',
				'simple_grid_field29' 
			),
			'sex_name' => array( 
				'simple_grid_field9',
				'simple_grid_field30' 
			),
			'attended' => array( 
				'simple_grid_field3',
				'simple_grid_field31' 
			),
			'day_number' => array( 
				'simple_grid_field2',
				'simple_grid_field32' 
			),
			'attendance_date' => array( 
				'simple_grid_field4',
				'simple_grid_field33' 
			),
			'role_name' => array( 
				'simple_grid_field11',
				'simple_grid_field34' 
			),
			'facility_name' => array( 
				'simple_grid_field10',
				'simple_grid_field35' 
			),
			'training_lead_name' => array( 
				'simple_grid_field25',
				'simple_grid_field36' 
			),
			'training_type' => array( 
				'simple_grid_field19',
				'simple_grid_field37' 
			),
			'training_approach' => array( 
				'simple_grid_field20',
				'simple_grid_field38' 
			),
			'program_name' => array( 
				'simple_grid_field14',
				'simple_grid_field39' 
			),
			'partner_name' => array( 
				'simple_grid_field24',
				'simple_grid_field40' 
			),
			'host_region' => array( 
				'simple_grid_field22',
				'simple_grid_field41' 
			),
			'host_country' => array( 
				'simple_grid_field21',
				'simple_grid_field42' 
			),
			'venue_name' => array( 
				'simple_grid_field23',
				'simple_grid_field43' 
			),
			'quarter' => array( 
				'simple_grid_field16',
				'simple_grid_field44' 
			),
			'start_date' => array( 
				'simple_grid_field17',
				'simple_grid_field45' 
			),
			'end_date' => array( 
				'simple_grid_field18',
				'simple_grid_field46' 
			),
			'notes' => array( 
				'simple_grid_field5',
				'simple_grid_field47' 
			),
			'recorded_by' => array( 
				'simple_grid_field7',
				'simple_grid_field48' 
			),
			'recorded_at' => array( 
				'simple_grid_field6',
				'simple_grid_field49' 
			),
			'program_id' => array( 
				'simple_grid_field15',
				'simple_grid_field50' 
			),
			'participation_id' => array( 
				'simple_grid_field1',
				'simple_grid_field51' 
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
					'print_panel' 
				),
				'below-grid' => array( 
					'pagination' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'search_panel',
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
					'master_info',
					'filter_panel' 
				),
				'grid' => array( 
					'simple_grid_field26',
					'simple_grid_field',
					'simple_grid_field27',
					'simple_grid_field13',
					'simple_grid_field28',
					'simple_grid_field12',
					'simple_grid_field29',
					'simple_grid_field8',
					'simple_grid_field30',
					'simple_grid_field9',
					'simple_grid_field31',
					'simple_grid_field3',
					'simple_grid_field32',
					'simple_grid_field2',
					'simple_grid_field33',
					'simple_grid_field4',
					'simple_grid_field34',
					'simple_grid_field11',
					'simple_grid_field35',
					'simple_grid_field10',
					'simple_grid_field36',
					'simple_grid_field25',
					'simple_grid_field37',
					'simple_grid_field19',
					'simple_grid_field38',
					'simple_grid_field20',
					'simple_grid_field39',
					'simple_grid_field14',
					'simple_grid_field40',
					'simple_grid_field24',
					'simple_grid_field41',
					'simple_grid_field22',
					'simple_grid_field42',
					'simple_grid_field21',
					'simple_grid_field43',
					'simple_grid_field23',
					'simple_grid_field44',
					'simple_grid_field16',
					'simple_grid_field45',
					'simple_grid_field17',
					'simple_grid_field46',
					'simple_grid_field18',
					'simple_grid_field47',
					'simple_grid_field5',
					'simple_grid_field48',
					'simple_grid_field7',
					'simple_grid_field49',
					'simple_grid_field6',
					'simple_grid_field50',
					'simple_grid_field15',
					'simple_grid_field51',
					'simple_grid_field1',
					'grid_checkbox_head',
					'grid_checkbox',
					'grid_edit',
					'grid_inline_edit',
					'grid_inline_save',
					'grid_inline_cancel',
					'grid_view' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'add_link',
					'inlineadd_link',
					'saveall_link',
					'cancelall_link',
					'deleteselected_link',
					'updateselected_link',
					'details_found',
					'recsPerPage',
					'print_friendly' 
				),
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
				'pagination' => 'below-grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'search_panel' => 'left',
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
				'filter_panel' => 'top',
				'simple_grid_field26' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field27' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field28' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field29' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field30' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field31' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field32' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field33' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field34' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field35' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field36' => 'grid',
				'simple_grid_field25' => 'grid',
				'simple_grid_field37' => 'grid',
				'simple_grid_field19' => 'grid',
				'simple_grid_field38' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field39' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field40' => 'grid',
				'simple_grid_field24' => 'grid',
				'simple_grid_field41' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field42' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field43' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field44' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field45' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field46' => 'grid',
				'simple_grid_field18' => 'grid',
				'simple_grid_field47' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field48' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field49' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field50' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field51' => 'grid',
				'simple_grid_field1' => 'grid',
				'grid_checkbox_head' => 'grid',
				'grid_checkbox' => 'grid',
				'grid_edit' => 'grid',
				'grid_inline_edit' => 'grid',
				'grid_inline_save' => 'grid',
				'grid_inline_cancel' => 'grid',
				'grid_view' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field26' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field27' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field28' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field29' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field30' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field31' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field32' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field33' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field34' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field35' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field36' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field25' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field37' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field11' 
				),
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'simple_grid_field38' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field12' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'simple_grid_field39' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field13' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				),
				'simple_grid_field40' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field14' 
				),
				'simple_grid_field24' => array(
					'location' => 'grid',
					'cellId' => 'cell_field14' 
				),
				'simple_grid_field41' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				),
				'simple_grid_field42' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field16' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'cell_field16' 
				),
				'simple_grid_field43' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field17' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'cell_field17' 
				),
				'simple_grid_field44' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field18' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'cell_field18' 
				),
				'simple_grid_field45' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field19' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'cell_field19' 
				),
				'simple_grid_field46' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field20' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'cell_field20' 
				),
				'simple_grid_field47' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field21' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field21' 
				),
				'simple_grid_field48' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field22' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field22' 
				),
				'simple_grid_field49' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field23' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field23' 
				),
				'simple_grid_field50' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field24' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field24' 
				),
				'simple_grid_field51' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field25' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field25' 
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
				'search_panel_field11',
				'search_panel_field12',
				'search_panel_field13',
				'search_panel_field14',
				'search_panel_field15',
				'search_panel_field16',
				'search_panel_field17',
				'search_panel_field18',
				'search_panel_field19',
				'search_panel_field20',
				'search_panel_field21',
				'search_panel_field22',
				'search_panel_field23',
				'search_panel_field24',
				'search_panel_field25' 
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
				'filter_panel_field11',
				'filter_panel_field12',
				'filter_panel_field13',
				'filter_panel_field14',
				'filter_panel_field15',
				'filter_panel_field16',
				'filter_panel_field17' 
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
			'notifications' => array( 
				'notifications' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field13',
				'simple_grid_field12',
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field3',
				'simple_grid_field2',
				'simple_grid_field4',
				'simple_grid_field11',
				'simple_grid_field10',
				'simple_grid_field25',
				'simple_grid_field19',
				'simple_grid_field20',
				'simple_grid_field14',
				'simple_grid_field24',
				'simple_grid_field22',
				'simple_grid_field21',
				'simple_grid_field23',
				'simple_grid_field16',
				'simple_grid_field17',
				'simple_grid_field18',
				'simple_grid_field5',
				'simple_grid_field7',
				'simple_grid_field6',
				'simple_grid_field15',
				'simple_grid_field1' 
			),
			'grid_field_label' => array( 
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
				'simple_grid_field37',
				'simple_grid_field38',
				'simple_grid_field39',
				'simple_grid_field40',
				'simple_grid_field41',
				'simple_grid_field42',
				'simple_grid_field43',
				'simple_grid_field44',
				'simple_grid_field45',
				'simple_grid_field46',
				'simple_grid_field47',
				'simple_grid_field48',
				'simple_grid_field49',
				'simple_grid_field50',
				'simple_grid_field51' 
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
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			),
			'grid_inline_save' => array( 
				'grid_inline_save' 
			),
			'grid_inline_edit' => array( 
				'grid_inline_edit' 
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
					'headcell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'attendance_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field26' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'course_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field27' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'training_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field28' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'participant_full_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field29' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'sex_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field30' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'attended_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field31' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'day_number_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field32' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'attendance_date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field33' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'role_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field34' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'facility_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field35' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'training_lead_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field36' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field11' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'training_type_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field37' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field12' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'training_approach_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field38' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field13' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'program_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field39' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field14' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'partner_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field40' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'host_region_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field41' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field16' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'host_country_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field42' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field17' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'venue_name_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field43' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field18' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'quarter_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field44' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field19' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'start_date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field45' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field20' => array(
						'cols' => array( 
							22 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'end_date_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field46' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field21' => array(
						'cols' => array( 
							23 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'notes_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field47' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field22' => array(
						'cols' => array( 
							24 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'recorded_by_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field48' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field23' => array(
						'cols' => array( 
							25 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'recorded_at_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field49' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field24' => array(
						'cols' => array( 
							26 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'program_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field50' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field25' => array(
						'cols' => array( 
							27 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'participation_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field51' 
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
					'cell_field' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'attendance_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'course_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'training_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'participant_full_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'sex_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'attended_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'day_number_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'attendance_date_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'role_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'facility_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'training_lead_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field25' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'training_type_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'training_approach_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'program_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'partner_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field24' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'host_region_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field16' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'host_country_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field17' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'venue_name_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field18' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'quarter_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field19' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'start_date_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field20' => array(
						'cols' => array( 
							22 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'end_date_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field21' => array(
						'cols' => array( 
							23 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'notes_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field22' => array(
						'cols' => array( 
							24 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'recorded_by_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field23' => array(
						'cols' => array( 
							25 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'recorded_at_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field24' => array(
						'cols' => array( 
							26 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'program_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field25' => array(
						'cols' => array( 
							27 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'participation_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
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
							2 
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
							2 
						),
						'rows' => array( 
							2 
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
							3 
						),
						'rows' => array( 
							2 
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
							4 
						),
						'rows' => array( 
							2 
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
							5 
						),
						'rows' => array( 
							2 
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
							6 
						),
						'rows' => array( 
							2 
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
							7 
						),
						'rows' => array( 
							2 
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
							8 
						),
						'rows' => array( 
							2 
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
							9 
						),
						'rows' => array( 
							2 
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
							10 
						),
						'rows' => array( 
							2 
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
							11 
						),
						'rows' => array( 
							2 
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
							12 
						),
						'rows' => array( 
							2 
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
							13 
						),
						'rows' => array( 
							2 
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
							14 
						),
						'rows' => array( 
							2 
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
							15 
						),
						'rows' => array( 
							2 
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
							16 
						),
						'rows' => array( 
							2 
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
							17 
						),
						'rows' => array( 
							2 
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
							18 
						),
						'rows' => array( 
							2 
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
							19 
						),
						'rows' => array( 
							2 
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
							20 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field19' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field20' => array(
						'cols' => array( 
							22 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field21' => array(
						'cols' => array( 
							23 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field22' => array(
						'cols' => array( 
							24 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field23' => array(
						'cols' => array( 
							25 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field24' => array(
						'cols' => array( 
							26 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_field25' => array(
						'cols' => array( 
							27 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					) 
				),
				'width' => 28,
				'height' => 3 
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
						'search_panel',
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
					'section' => '',
					'cells' => array( 
						array(
							'cell' => 'c3' 
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
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'master_info' 
					) 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'filter_panel' 
					) 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						 
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
						),
						array(
							'cell' => 'headcell_field19' 
						),
						array(
							'cell' => 'headcell_field20' 
						),
						array(
							'cell' => 'headcell_field21' 
						),
						array(
							'cell' => 'headcell_field22' 
						),
						array(
							'cell' => 'headcell_field23' 
						),
						array(
							'cell' => 'headcell_field24' 
						),
						array(
							'cell' => 'headcell_field25' 
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
						),
						array(
							'cell' => 'cell_field19' 
						),
						array(
							'cell' => 'cell_field20' 
						),
						array(
							'cell' => 'cell_field21' 
						),
						array(
							'cell' => 'cell_field22' 
						),
						array(
							'cell' => 'cell_field23' 
						),
						array(
							'cell' => 'cell_field24' 
						),
						array(
							'cell' => 'cell_field25' 
						) 
					) 
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
						),
						array(
							'cell' => 'footcell_field19' 
						),
						array(
							'cell' => 'footcell_field20' 
						),
						array(
							'cell' => 'footcell_field21' 
						),
						array(
							'cell' => 'footcell_field22' 
						),
						array(
							'cell' => 'footcell_field23' 
						),
						array(
							'cell' => 'footcell_field24' 
						),
						array(
							'cell' => 'footcell_field25' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field26' 
					),
					'field' => 'attendance_id',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'attendance_id',
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
						'simple_grid_field27' 
					),
					'field' => 'course_name',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'course_name',
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
						'simple_grid_field28' 
					),
					'field' => 'training_id',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'training_id',
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
						'simple_grid_field29' 
					),
					'field' => 'participant_full_name',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'participant_full_name',
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
						'simple_grid_field30' 
					),
					'field' => 'sex_name',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'sex_name',
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
						'simple_grid_field31' 
					),
					'field' => 'attended',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'attended',
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
						'simple_grid_field32' 
					),
					'field' => 'day_number',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'day_number',
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
						'simple_grid_field33' 
					),
					'field' => 'attendance_date',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'attendance_date',
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
						'simple_grid_field34' 
					),
					'field' => 'role_name',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'role_name',
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
						'simple_grid_field35' 
					),
					'field' => 'facility_name',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'facility_name',
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
						'simple_grid_field36' 
					),
					'field' => 'training_lead_name',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field25' 
					),
					'field' => 'training_lead_name',
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
						'simple_grid_field37' 
					),
					'field' => 'training_type',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field19' 
					),
					'field' => 'training_type',
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
						'simple_grid_field38' 
					),
					'field' => 'training_approach',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field20' 
					),
					'field' => 'training_approach',
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
						'simple_grid_field39' 
					),
					'field' => 'program_name',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'program_name',
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
						'simple_grid_field40' 
					),
					'field' => 'partner_name',
					'columnName' => 'field' 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field24' 
					),
					'field' => 'partner_name',
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
						'simple_grid_field41' 
					),
					'field' => 'host_region',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field22' 
					),
					'field' => 'host_region',
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
						'simple_grid_field42' 
					),
					'field' => 'host_country',
					'columnName' => 'field' 
				),
				'cell_field16' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field21' 
					),
					'field' => 'host_country',
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
						'simple_grid_field43' 
					),
					'field' => 'venue_name',
					'columnName' => 'field' 
				),
				'cell_field17' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field23' 
					),
					'field' => 'venue_name',
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
						'simple_grid_field44' 
					),
					'field' => 'quarter',
					'columnName' => 'field' 
				),
				'cell_field18' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'quarter',
					'columnName' => 'field' 
				),
				'footcell_field18' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field19' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field45' 
					),
					'field' => 'start_date',
					'columnName' => 'field' 
				),
				'cell_field19' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'start_date',
					'columnName' => 'field' 
				),
				'footcell_field19' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field20' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field46' 
					),
					'field' => 'end_date',
					'columnName' => 'field' 
				),
				'cell_field20' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field18' 
					),
					'field' => 'end_date',
					'columnName' => 'field' 
				),
				'footcell_field20' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field21' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field47' 
					),
					'field' => 'notes',
					'columnName' => 'field' 
				),
				'cell_field21' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'notes',
					'columnName' => 'field' 
				),
				'footcell_field21' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field22' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field48' 
					),
					'field' => 'recorded_by',
					'columnName' => 'field' 
				),
				'cell_field22' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'recorded_by',
					'columnName' => 'field' 
				),
				'footcell_field22' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field23' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field49' 
					),
					'field' => 'recorded_at',
					'columnName' => 'field' 
				),
				'cell_field23' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'recorded_at',
					'columnName' => 'field' 
				),
				'footcell_field23' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field24' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field50' 
					),
					'field' => 'program_id',
					'columnName' => 'field' 
				),
				'cell_field24' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'program_id',
					'columnName' => 'field' 
				),
				'footcell_field24' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field25' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field51' 
					),
					'field' => 'participation_id',
					'columnName' => 'field' 
				),
				'cell_field25' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'participation_id',
					'columnName' => 'field' 
				),
				'footcell_field25' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
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
				'search_panel_field13',
				'search_panel_field12',
				'search_panel_field2',
				'search_panel_field3',
				'search_panel_field8',
				'search_panel_field9',
				'search_panel_field11',
				'search_panel_field10',
				'search_panel_field25',
				'search_panel_field19',
				'search_panel_field20',
				'search_panel_field14',
				'search_panel_field24',
				'search_panel_field22',
				'search_panel_field21',
				'search_panel_field23',
				'search_panel_field',
				'search_panel_field16',
				'search_panel_field17',
				'search_panel_field18',
				'search_panel_field4',
				'search_panel_field6',
				'search_panel_field7',
				'search_panel_field15',
				'search_panel_field1',
				'search_panel_field5' 
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
			'field' => 'attendance_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field1' => array(
			'field' => 'attendance_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field2' => array(
			'field' => 'attended',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field3' => array(
			'field' => 'day_number',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field4' => array(
			'field' => 'notes',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field5' => array(
			'field' => 'participation_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field6' => array(
			'field' => 'recorded_at',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field7' => array(
			'field' => 'recorded_by',
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
				'4659' => 'true',
				'4668' => 'true' 
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
		'search_panel_field8' => array(
			'field' => 'participant_full_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field9' => array(
			'field' => 'sex_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field10' => array(
			'field' => 'facility_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field11' => array(
			'field' => 'role_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field12' => array(
			'field' => 'training_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field13' => array(
			'field' => 'course_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field14' => array(
			'field' => 'program_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field15' => array(
			'field' => 'program_id',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => false 
		),
		'search_panel_field16' => array(
			'field' => 'quarter',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field17' => array(
			'field' => 'start_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field18' => array(
			'field' => 'end_date',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'filter_panel' => array(
			'type' => 'filter_panel',
			'items' => array( 
				'filter_panel_field6',
				'filter_panel_field2',
				'filter_panel_field1',
				'filter_panel_field',
				'filter_panel_field3',
				'filter_panel_field5',
				'filter_panel_field4',
				'filter_panel_field17',
				'filter_panel_field11',
				'filter_panel_field12',
				'filter_panel_field7',
				'filter_panel_field16',
				'filter_panel_field14',
				'filter_panel_field13',
				'filter_panel_field15',
				'filter_panel_field8',
				'filter_panel_field9',
				'filter_panel_field10' 
			) 
		),
		'filter_panel_field' => array(
			'field' => 'day_number',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field1' => array(
			'field' => 'attended',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field2' => array(
			'field' => 'training_id',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field3' => array(
			'field' => 'sex_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field4' => array(
			'field' => 'facility_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field5' => array(
			'field' => 'role_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field6' => array(
			'field' => 'course_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field7' => array(
			'field' => 'program_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field8' => array(
			'field' => 'quarter',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field9' => array(
			'field' => 'start_date',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field10' => array(
			'field' => 'end_date',
			'type' => 'filter_panel_field' 
		),
		'search_panel_field19' => array(
			'field' => 'training_type',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field20' => array(
			'field' => 'training_approach',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field21' => array(
			'field' => 'host_country',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field22' => array(
			'field' => 'host_region',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field23' => array(
			'field' => 'venue_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field24' => array(
			'field' => 'partner_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'search_panel_field25' => array(
			'field' => 'training_lead_name',
			'type' => 'search_panel_field',
			'required' => false,
			'alwaysOnPanel' => true 
		),
		'filter_panel_field11' => array(
			'field' => 'training_type',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field12' => array(
			'field' => 'training_approach',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field13' => array(
			'field' => 'host_country',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field14' => array(
			'field' => 'host_region',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field15' => array(
			'field' => 'venue_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field16' => array(
			'field' => 'partner_name',
			'type' => 'filter_panel_field' 
		),
		'filter_panel_field17' => array(
			'field' => 'training_lead_name',
			'type' => 'filter_panel_field' 
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
		'notifications' => array(
			'type' => 'notifications' 
		),
		'simple_grid_field' => array(
			'field' => 'attendance_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field26' => array(
			'type' => 'grid_field_label',
			'field' => 'attendance_id' 
		),
		'simple_grid_field13' => array(
			'field' => 'course_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'bold' => true,
			'group_by' => false,
			'background' => '#e7fffd' 
		),
		'simple_grid_field27' => array(
			'type' => 'grid_field_label',
			'field' => 'course_name' 
		),
		'simple_grid_field12' => array(
			'field' => 'training_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'bold' => true 
		),
		'simple_grid_field28' => array(
			'type' => 'grid_field_label',
			'field' => 'training_id' 
		),
		'simple_grid_field8' => array(
			'field' => 'participant_full_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false,
			'group_by' => false,
			'bold' => true,
			'italic' => true 
		),
		'simple_grid_field29' => array(
			'type' => 'grid_field_label',
			'field' => 'participant_full_name' 
		),
		'simple_grid_field9' => array(
			'field' => 'sex_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field30' => array(
			'type' => 'grid_field_label',
			'field' => 'sex_name' 
		),
		'simple_grid_field3' => array(
			'field' => 'attended',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field31' => array(
			'type' => 'grid_field_label',
			'field' => 'attended' 
		),
		'simple_grid_field2' => array(
			'field' => 'day_number',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field32' => array(
			'type' => 'grid_field_label',
			'field' => 'day_number' 
		),
		'simple_grid_field4' => array(
			'field' => 'attendance_date',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field33' => array(
			'type' => 'grid_field_label',
			'field' => 'attendance_date' 
		),
		'simple_grid_field11' => array(
			'field' => 'role_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field34' => array(
			'type' => 'grid_field_label',
			'field' => 'role_name' 
		),
		'simple_grid_field10' => array(
			'field' => 'facility_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field35' => array(
			'type' => 'grid_field_label',
			'field' => 'facility_name' 
		),
		'simple_grid_field25' => array(
			'field' => 'training_lead_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field36' => array(
			'type' => 'grid_field_label',
			'field' => 'training_lead_name' 
		),
		'simple_grid_field19' => array(
			'field' => 'training_type',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field37' => array(
			'type' => 'grid_field_label',
			'field' => 'training_type' 
		),
		'simple_grid_field20' => array(
			'field' => 'training_approach',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field38' => array(
			'type' => 'grid_field_label',
			'field' => 'training_approach' 
		),
		'simple_grid_field14' => array(
			'field' => 'program_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field39' => array(
			'type' => 'grid_field_label',
			'field' => 'program_name' 
		),
		'simple_grid_field24' => array(
			'field' => 'partner_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field40' => array(
			'type' => 'grid_field_label',
			'field' => 'partner_name' 
		),
		'simple_grid_field22' => array(
			'field' => 'host_region',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field41' => array(
			'type' => 'grid_field_label',
			'field' => 'host_region' 
		),
		'simple_grid_field21' => array(
			'field' => 'host_country',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field42' => array(
			'type' => 'grid_field_label',
			'field' => 'host_country' 
		),
		'simple_grid_field23' => array(
			'field' => 'venue_name',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field43' => array(
			'type' => 'grid_field_label',
			'field' => 'venue_name' 
		),
		'simple_grid_field16' => array(
			'field' => 'quarter',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field44' => array(
			'type' => 'grid_field_label',
			'field' => 'quarter' 
		),
		'simple_grid_field17' => array(
			'field' => 'start_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field45' => array(
			'type' => 'grid_field_label',
			'field' => 'start_date' 
		),
		'simple_grid_field18' => array(
			'field' => 'end_date',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field46' => array(
			'type' => 'grid_field_label',
			'field' => 'end_date' 
		),
		'simple_grid_field5' => array(
			'field' => 'notes',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field47' => array(
			'type' => 'grid_field_label',
			'field' => 'notes' 
		),
		'simple_grid_field7' => array(
			'field' => 'recorded_by',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field48' => array(
			'type' => 'grid_field_label',
			'field' => 'recorded_by' 
		),
		'simple_grid_field6' => array(
			'field' => 'recorded_at',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field49' => array(
			'type' => 'grid_field_label',
			'field' => 'recorded_at' 
		),
		'simple_grid_field15' => array(
			'field' => 'program_id',
			'type' => 'grid_field',
			'inlineAdd' => false,
			'inlineEdit' => false 
		),
		'simple_grid_field50' => array(
			'type' => 'grid_field_label',
			'field' => 'program_id' 
		),
		'simple_grid_field1' => array(
			'field' => 'participation_id',
			'type' => 'grid_field',
			'inlineAdd' => true,
			'inlineEdit' => true 
		),
		'simple_grid_field51' => array(
			'type' => 'grid_field_label',
			'field' => 'participation_id' 
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
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
		),
		'grid_inline_save' => array(
			'type' => 'grid_inline_save' 
		),
		'grid_inline_edit' => array(
			'type' => 'grid_inline_edit' 
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