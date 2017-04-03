<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'pages/view';

$route['about'] = 'pages/view/about';
$route['contacts'] = 'pages/view/contacts';
$route['projects'] = 'pages/view/projects';
$route['services'] = 'pages/view/services';
$route['search'] = 'pages/view/search';
$route['learning_facilities'] = 'pages/view/learning_facilities';
$route['school'] = 'pages/view/schools';
$route['welcome'] = 'welcome';

$route['admin'] = 'pages/back/index';
$route['grids'] = 'pages/back/grids';
$route['widgets'] = 'pages/back/widgets';
$route['forms'] = 'pages/back/forms';
$route['tables'] = 'pages/back/tables';
$route['inbox'] = 'pages/back/inbox';
$route['mail'] = 'pages/back/mail';
$route['charts'] = 'pages/back/charts';
$route['codes'] = 'pages/back/codes';
$route['media'] = 'pages/back/media';
$route['signin'] = 'pages/back/signin';
$route['signup'] = 'pages/back/signup';
$route['blankpage'] = 'pages/back/blankpage';

$route['institutions'] = 'pages/bkend/institutions';
$route['students'] = 'pages/bkend/students';
$route['users'] = 'pages/bkend/users';
$route['roles'] = 'pages/bkend/roles';
$route['institutionroles'] = 'pages/bkend/institutionroles';
$route['location'] = 'pages/bkend/location';
$route['staff'] = 'pages/bkend/staff';
$route['sroles'] = 'pages/bkend/sroles';
$route['zonereports'] = 'pages/bkend/zonereports';
$route['subcountyreports'] = 'pages/bkend/subcountyreports';
$route['countyreports'] = 'pages/bkend/countyreports';

$route['classes'] = 'pages/bkend/classes';
$route['teachers'] = 'pages/bkend/teachers';

$route['examtypes'] = 'pages/bkend/examtypes';
$route['subjects'] = 'pages/bkend/subjects';
$route['grades'] = 'pages/bkend/grades';
$route['terms'] = 'pages/bkend/terms';
$route['marks'] = 'pages/bkend/marks';
$route['studentclasses'] = 'pages/bkend/studentclasses';
$route['studentstreams'] = 'pages/bkend/studentstreams';
$route['studentsubjects'] = 'pages/bkend/studentsubjects';

$route['instimport'] = 'pages/bkend/instimport';
$route['studentimport'] = 'pages/bkend/studentimport';
$route['marksimport'] = 'pages/bkend/marksimport';
$route['facilities'] = 'pages/bkend/facilities';
$route['smtp'] = 'pages/bkend/smtp';
$route['reports'] = 'pages/bkend/reports';
$route['activate'] = 'pages/bkend/activate';
