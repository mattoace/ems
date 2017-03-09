<?php

include( "../../../assets/Editor/php/DataTables.php" );
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_NUMBER_INT);

use DataTables\Editor,
    DataTables\Editor\Field,
    DataTables\Editor\Format,
    DataTables\Editor\Mjoin,
    DataTables\Editor\Upload,
    DataTables\Editor\Validate;

        Editor::inst($db, 'ems_classes')
                ->fields(
                        Field::inst('id'),
                        Field::inst('class_name')->validator('Validate::notEmpty'),
                        Field::inst('description')
                )
                ->process($_POST)
                ->json();
