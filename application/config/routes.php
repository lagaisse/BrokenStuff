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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'application';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//-------------------REPORTS------------------- \\
//requests using explicit id report
$route['api/v([0-9]+)/reports/id/(.*)/pictures/upload([/.]*)(format/)*([^/]*)'] = 'apiv$1/pictures/id_reports/$2/format/$5'; //post picture for a report
$route['api/v([0-9]+)/reports/id/(.*)/vote([/.]*)(format/)*([^/]*)'] = 'apiv$1/vote/id/$2/format/$5'; //vote for a report
$route['api/v([0-9]+)/reports/id/([^/.]*)([/.]*)(format/)*([^/]*)'] = 'apiv$1/reports/id/$2/format/$5';
//requests using implicit id
$route['api/v([0-9]+)/reports/([^/.]+)/pictures/upload([/.]*)(format/)*([^/]*)'] = 'apiv$1/pictures/id_reports/$2/format/$5'; //post picture for a report
$route['api/v([0-9]+)/reports/([^/.]+)/vote([/.]*)(format/)*([^/]*)'] = 'apiv$1/vote/id/$2/format/$5'; //vote for a report
$route['api/v([0-9]+)/reports/([^/.]+)([/.]*)(format/)*([^/]*)'] = 'apiv$1/reports/id/$2/format/$5'; //GET OR PUT a report : implicit id call
$route['api/v([0-9]+)/reports([/.]*)(format/)*([^/]*)'] = 'apiv$1/reports/format/$4';  //POST a report or GET report list [full or geo]
//$route['api/v([0-9]+)/reports.(.*)'] = 'apiv$1/reports_list.$2'; //GET list of all reports

//-------------------MAP------------------- \\
//get reports in geojson format.parameters are in query
$route['api/v([0-9]+)/map([/.]*)(format/)*([^/]*)'] = 'apiv$1/reports_map/format/$4';  //get reports in geojson format

//-------------------LOCATIONS------------------- \\
//requests using explicit id location
$route['api/v([0-9]+)/locations/id/([^/.]*)([/.]*)(format/)*([^/]*)'] = 'apiv$1/locations/id/$2/format/$5'; //location
//requests using implicit id location
$route['api/v([0-9]+)/locations/([^/.]*)([/.]*)(format/)*([^/]*)'] = 'apiv$1/locations/id/$2/format/5'; //location
$route['api/v([0-9]+)/locations([/.]*)(format/)*([^/]*)'] = 'apiv$1/locations/format/$4'; //(futur POST) GET a list of location

//-------------------MIGRATION------------------- \\
$route['migrate/(.*)'] = 'migrate/$1'; //(futur POST) GET a list of location

//-------------------404------------------- \\
$route['(.*)'] = 'apiv1/erreur/'; //tout envoyer sur du erreur_get ou _post
/* End of file routes.php */
/* Location: ./application/config/routes.php */
