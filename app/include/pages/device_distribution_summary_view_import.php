<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'distribution_id',
'device_type',
'order_reference',
'facility_name',
'country_name',
'region_name',
'monthly_surgical_volume',
'contact_name',
'contact_email',
'distribution_month',
'distribution_year',
'payment_method',
'quantity',
'notes' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'distribution_id' => array( 'import_field' ),
'device_type' => array( 'import_field1' ),
'order_reference' => array( 'import_field2' ),
'facility_name' => array( 'import_field3' ),
'country_name' => array( 'import_field4' ),
'region_name' => array( 'import_field5' ),
'monthly_surgical_volume' => array( 'import_field6' ),
'contact_name' => array( 'import_field7' ),
'contact_email' => array( 'import_field8' ),
'distribution_month' => array( 'import_field9' ),
'distribution_year' => array( 'import_field10' ),
'payment_method' => array( 'import_field11' ),
'quantity' => array( 'import_field12' ),
'notes' => array( 'import_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
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
'import_field13' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
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
'import_field13' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
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
'import_field13' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
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
'import_field13' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'distribution_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'device_type',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'order_reference',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'facility_name',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'country_name',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'region_name',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'monthly_surgical_volume',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'contact_name',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'contact_email',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'distribution_month',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'distribution_year',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'payment_method',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'quantity',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'notes',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>