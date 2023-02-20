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
$route['default_controller'] = 'website/web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['signin'] = "website/User/signin";
$route['signup'] = "website/User/signup";
$route['forgot-password'] = "website/User/forgot_password";
$route['forgotprocess'] = "website/User/forgotprocess";
$route['signupprocess'] = "website/User/signupprocess";
$route['signinprocess'] = "website/User/signinprocess";
$route['check_email_exists'] = "website/User/check_email_exists";
$route['signout'] = "website/User/sign_out";
$route['reset-password/(:any)'] = "website/User/reset_password/$1";
$route['resetpasprocess'] = "website/User/resetpasprocess";
$route['web-mobile-it'] = "website/categories/web_mobile_it";
$route['graphics-designs-arts'] = "website/categories/graphics_designs_arts";
$route['business-marketing'] = "website/categories/business_marketing";
$route['architecture-engineering'] = "website/categories/architecture_engineering";
$route['legal-service'] = "website/categories/legal_service";
$route['writing'] = "website/categories/writing";
$route['tutors'] = "website/categories/tutors";

