<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
| -------------------------------------------------------------------------
| PROTECTED
| -------------------------------------------------------------------------
*/

//configuration
$route['config'] = 'configs/index';

//protected production forms.
$route['register_production/edit/(:any)'] = 'adminproductionforms/edit/$1';
$route['register_production/delete/(:any)'] = 'adminproductionforms/delete/$1';

//protected downtime forms.
$route['register_downtime/edit/(:any)'] = 'admindowntimeforms/edit/$1';
$route['register_downtime/delete/(:any)'] = 'admindowntimeforms/delete/$1';



$route['config/downtimes'] = 'configs/downtimes_index';
$route['config/downtimes/create'] = 'configs/downtimes_create';
$route['config/downtimes/edit/(:any)'] = 'configs/downtimes_edit/$1';
$route['config/downtimes/delete/(:any)'] = 'configs/downtimes_delete/$1';

$route['config/parts'] = 'configs/parts_index';
$route['config/parts/create'] = 'configs/parts_create';
$route['config/parts/edit/(:any)'] = 'configs/parts_edit/$1';
$route['config/parts/delete/(:any)'] = 'configs/parts_delete/$1';



/*
| -------------------------------------------------------------------------
| PUBLIC
| -------------------------------------------------------------------------
*/


//production forms
$route['register_production'] = 'productionforms/index';
$route['entry_form/(:any)'] = 'productionforms/create/$1';

//downtime forms
$route['register_downtime'] = 'downtimeforms/index';
$route['downtime_form/(:any)'] = 'downtimeforms/create/$1';


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
