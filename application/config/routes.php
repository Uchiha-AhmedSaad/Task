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
$route['dashboard']							= 'Dashboard/DashboardController';
$route['dashboard/users']['GET']			= 'Dashboard/Users/UsersController/Index';
$route['dashboard/users/create'] 			= 'Dashboard/Users/UsersController/Create';
$route['dashboard/users/store'] 			= 'Dashboard/Users/UsersController/Store';
$route['dashboard/users/edit'] 				= 'Dashboard/Users/UsersController/Edit';
$route['dashboard/users/update'] 			= 'Dashboard/Users/UsersController/Update';
$route['dashboard/users/delete'] 			= 'Dashboard/Users/UsersController/Delete';


/*
	*this url belongs to Items Controller.
*/
$route['dashboard/items'] 					= 'Dashboard/Items/ItemsController/Index';
$route['dashboard/items/create'] 			= 'Dashboard/Items/ItemsController/Create';
$route['dashboard/items/store'] 			= 'Dashboard/Items/ItemsController/Store';
$route['dashboard/items/edit'] 				= 'Dashboard/Items/ItemsController/Edit';
$route['dashboard/items/update'] 			= 'Dashboard/Items/ItemsController/Update';
$route['dashboard/items/delete'] 			= 'Dashboard/Items/ItemsController/Delete';

/*
	*this url belongs to Reuests Controller.
*/

$route['dashboard/requests'] 					= 'Dashboard/Requests/RequestsController/Index';
$route['dashboard/requests/create'] 			= 'Dashboard/Requests/RequestsController/Create';
$route['dashboard/requests/store'] 				= 'Dashboard/Requests/RequestsController/Store';
$route['dashboard/requests/edit'] 				= 'Dashboard/Requests/RequestsController/Edit';
$route['dashboard/requests/update'] 			= 'Dashboard/Requests/RequestsController/Update';
$route['dashboard/requests/delete'] 			= 'Dashboard/Requests/RequestsController/Delete';


