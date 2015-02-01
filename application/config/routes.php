<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "application";
$route['404_override'] = '';


//requests using explicit id report
$route['api/v([0-9]+)/reports/id/(.*)/pictures/upload(.*)'] = 'apiv$1/pictures/id_reports/$2$3'; //post picture for a report
$route['api/v([0-9]+)/reports/id/(.*)/vote(.*)'] = 'apiv$1/vote/id/$2$3'; //vote for a report
$route['api/v([0-9]+)/reports/id/(.*)'] = 'apiv$1/reports/id/$2'; 

//requests using implicit id
$route['api/v([0-9]+)/reports/([^/]+)/pictures/upload(.*)'] = 'apiv$1/pictures/id_reports/$2$3'; //post picture for a report
$route['api/v([0-9]+)/reports/([^/]+)/vote(.*)'] = 'apiv$1/vote/id/$2$3'; //vote for a report
$route['api/v([0-9]+)/reports/([^/]+)(.*)'] = 'apiv$1/reports/id/$2$3'; //GET OR PUT a report : implicit id call
$route['api/v([0-9]+)/reports(.*)'] = 'apiv$1/reports$2';  //POST a report or GET report list [full or geo]

//$route['api/v([0-9]+)/reports.(.*)'] = 'apiv$1/reports_list.$2'; //GET list of all reports

//requests using explicit id location
$route['api/v(:num)/locations/id/(.*)'] = 'apiv$1/locations/id/$2'; //location

//requests using implicit id location
$route['api/v(:num)/locations/([^/]+)(.*)'] = 'apiv$1/locations/id/$2$3'; //location
$route['api/v(:num)/locations(.*)'] = 'apiv$1/locations$2'; //(futur POST) GET a list of location



$route['api/v(:num)/(:any)'] = 'apiv$1/$2';

/* End of file routes.php */
/* Location: ./application/config/routes.php */