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

Editor::inst( $db, 'ems_users' )
	->fields(
		Field::inst( 'fname' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'mname' )->validator( 'Validate::notEmpty' ),
                Field::inst( 'username' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'pass' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'email' )->validator( 'Validate::email' ),
                Field::inst( 'mobile' ),
                Field::inst( 'pass' )->validator( 'Validate::notEmpty' )
	)        
	->process( $_POST )
	->json();
