<?php
if( ProjectSettings::getProjectValue( 'phpSpreadsheet' ) ) {
	require_once getabspath("include/phpspreadsheet_int.php");
} else {
	require_once getabspath("include/import_functions_excel.php");
}
?>