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

/* forms routes */
$route['man_crush_monday_card'] = 'forms/man_crush_monday_card';
$route['motivational_tuesday_card'] = 'forms/motivational_tuesday_card';
$route['woman_crush_wednesday_card'] = 'forms/woman_crush_wednesday_card';
$route['throwback_thursday_card'] = 'forms/throwback_thursday_card';
$route['forgiveness_friday_card'] = 'forms/forgiveness_friday_card';
$route['midnight_dirty_talks_card'] = 'forms/midnight_dirty_talks_card';

$route['submit_man_crush_monday_order'] = 'forms/submit_man_crush_monday_order';
$route['submit_motivational_tuesday_order'] = 'forms/submit_motivational_tuesday_order';
$route['submit_woman_crush_wednesday_order'] = 'forms/submit_woman_crush_wednesday_order';
$route['submit_throwback_thursday_order'] = 'forms/submit_throwback_thursday_order';
$route['submit_forgiveness_friday_order'] = 'forms/submit_forgiveness_friday_order';
$route['submit_midnight_dirty_talks_order'] = 'forms/submit_midnight_dirty_talks_order';
/* end of form routes */ 

/* Navigation routes*/
$route['home_page'] = 'home/home_page';

/*End of navigation routes */

/* Home Routes */
// $route['awesome_meetups'] ='meetups/awesome_meetups_people';
/* End of home routes */

/* User routes*/
// $route['login'] = 'users/login';
// $route['logout'] = 'users/logout';
// $route['register'] = 'users/register';
/* End of user routes */

/* Admin routes */
$route['awesome_cards_admin_login_area'] = 'awesome_admin/login';
$route['awesome_cards_admin_logout'] = 'awesome_admin/logout';
$route['awesome_cards_admin_registration_area'] = 'awesome_admin_register';
$route['awesome_cards_admin_dashboard'] = 'awesome_admin/dashboard';
$route['awesome_cards_admin_processed_orders'] = 'awesome_admin/processed_orders';
$route['awesome_admin_process_order'] = 'awesome_admin/process_order';
$route['awesome_admin_reverse_order'] = 'awesome_admin/reverse_order';
$route['awesome_cards_admin_registered_users'] = 'awesome_admin/registered_users';
$route['awesome_cards_admin_customer_messages'] = 'awesome_admin/customer_messages';

$route['default_controller'] = 'home/home_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
