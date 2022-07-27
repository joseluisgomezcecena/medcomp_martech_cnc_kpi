<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/




//forms
$route['register_production'] = 'productionforms/index';
$route['entry_form/(:any)'] = 'productionforms/create/$1';

$route['request/new'] = 'forms/create';
$route['request/sup/(:any)'] = 'forms/request/$1';


//toolcrib
$route['toolcrib/pending'] = 'toolcribs/index';
$route['toolcrib/byplant/(:any)'] = 'toolcribs/byplant/$1';
$route['toolcrib/respond/(:any)'] = 'toolcribs/respond/$1';
$route['toolcrib/deliver/(:any)'] = 'toolcribs/deliver/$1';


//engineering
$route['engineering/create'] = 'engineeringforms/create';
$route['engineering/update/(:any)'] = 'engineeringforms/update/$1'; //actualizar la revision actual.
$route['engineering/new/(:any)'] = 'engineeringforms/newrevision/$1'; //nueva revision basada en SUP recibido como parametro.
$route['engineering/index'] = 'engineeringforms/index';



//reports
$route['reports'] = 'reports/index';
$route['reports/deliveries'] = 'reports/deliveries';
$route['reports/revisions'] = 'reports/revisions';



//users
$route['users/register'] = 'users/register';
$route['users/login'] = 'users/login';
$route['users/profile'] = 'users/profile';

//pages
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
