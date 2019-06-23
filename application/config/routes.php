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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/*
	*this url belongs to Users Controller.

*/
$route['login']										= 'Dashboard/LoginController/Login';
$route['logout']									= 'Dashboard/LoginController/Logout';
$route['verify']									= 'Dashboard/LoginController/varify';
$route['dashboard']									= 'Dashboard/DashboardController/Index';
$route['dashboard/users']['GET']					= 'Dashboard/Users/UsersController/Index';
$route['dashboard/users/create'] 					= 'Dashboard/Users/UsersController/Create';
$route['dashboard/users/store'] 					= 'Dashboard/Users/UsersController/save';
$route['dashboard/users/edit/(:num)'] 				= 'Dashboard/Users/UsersController/Edit/$1';
$route['dashboard/users/update/(:num)'] 			= 'Dashboard/Users/UsersController/save/$1';
$route['dashboard/users/delete/(:num)'] 			= 'Dashboard/Users/UsersController/Delete/$1';


/*
	*this url belongs to Items Controller.
*/
$route['dashboard/items'] 						= 'Dashboard/Items/ItemsController/Index';
$route['dashboard/items/create'] 				= 'Dashboard/Items/ItemsController/Create';
$route['dashboard/items/store']['POST'] 		= 'Dashboard/Items/ItemsController/save';
$route['dashboard/items/edit/(:num)'] 			= 'Dashboard/Items/ItemsController/Edit/$1';
$route['dashboard/items/update/(:num)'] 		= 'Dashboard/Items/ItemsController/save/$1';
$route['dashboard/items/delete/(:num)'] 		= 'Dashboard/Items/ItemsController/Delete/$1';

/*
	*this url belongs to Reuests Controller.
*/

$route['dashboard/requests'] 					= 'Dashboard/Requests/RequestsController/Index';
$route['dashboard/requests/create'] 			= 'Dashboard/Requests/RequestsController/Create';
$route['dashboard/requests/store'] 				= 'Dashboard/Requests/RequestsController/Store';
$route['dashboard/requests/edit/(:num)'] 		= 'Dashboard/Requests/RequestsController/Edit/$1';
$route['dashboard/requests/update/(:num)'] 		= 'Dashboard/Requests/RequestsController/Update/$1';
$route['dashboard/requests/delete/(:num)'] 		= 'Dashboard/Requests/RequestsController/Delete/$1';


