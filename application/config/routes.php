<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*
| -------------------------------------------------------------------------
| PROTECTED
| -------------------------------------------------------------------------
*/

//configuration
$route['config'] = 'configs/index';
$route['config/downtimes'] = 'configs/downtimes_index';
$route['config/downtimes/create'] = 'configs/downtimes_create';
$route['config/downtimes/edit/(:any)'] = 'configs/downtimes_edit/$1';
$route['config/downtimes/delete/(:any)'] = 'configs/downtimes_delete/$1';

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
