<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
/*admin*/
$route['admin'] = 'admin/index';
$route['admin/login'] = 'user/index';
$route['admin/logout'] = 'user/logout';
$route['admin/login/validate_credentials'] = 'user/validate_credentials';

$route['admin/artikel'] = 'admin_artikel/index';
$route['admin/artikel/add'] = 'admin_artikel/add';
$route['admin/artikel/update'] = 'admin_artikel/update';
$route['admin/artikel/update/(:any)'] = 'admin_artikel/update/$1';
$route['admin/artikel/delete/(:any)'] = 'admin_artikel/delete/$1';
$route['admin/artikel/(:any)'] = 'admin_artikel/index/$1'; //$1 = page number

$route['admin/obat'] = 'admin_obat/index';
$route['admin/obat/add'] = 'admin_obat/add';
$route['admin/obat/update'] = 'admin_obat/update';
$route['admin/obat/update/(:any)'] = 'admin_obat/update/$1';
$route['admin/obat/delete/(:any)'] = 'admin_obat/delete/$1';
$route['admin/obat/(:any)'] = 'admin_obat/index/$1'; //$1 = page number

$route['admin/info'] = 'info_admin/index';
$route['admin/info/add'] = 'info_admin/add';

$route['admin/dashboard'] = 'dashboard/index';

// Keterangan Controller
$route['keterangan/(:any)'] = 'keterangan/index/$1';

$route['default_controller'] = 'Welcome';


$route['index'] = 'Welcome';

$route['keterangan/(:any)'] = 'keterangan/index/$1';

$route['artikel'] = 'detail_artikel/index/$1';
$route['home'] = 'detail_artikel/andex/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
