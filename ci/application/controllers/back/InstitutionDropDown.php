<?php
include( "../../../assets/Editor/php/DataTables.php" );
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;
Editor::inst( $db, 'ems_institution' )
	->fields(		
		Field::inst( 'id' ),
		Field::inst( 'institution_name' )
	)->where( 'type', $id )
	->process( $_POST )
	->json();
