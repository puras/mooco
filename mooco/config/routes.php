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

$route['default_controller'] = "home";
$route['404_override'] = '';

$route['manage'] = 'manage/home/index';

map_resources('manage/article');
map_resources('manage/page');
map_resources('manage/link');
map_resources('manage/menu');
map_resources('manage/guest_book');
map_resources('manage/article_category');
map_resources('manage/page_category');
map_resources('manage/link_category');
map_resources('manage/user');
map_resources('manage/usergroup');
map_resources('manage/template');

$route['manage/site_info'] = 'manage/site_info/index';
$route['manage/site_seo'] = 'manage/site_seo/index';

$route['manage/login'] = 'manage/user/login';
$route['manage/logout'] = 'manage/user/logout';



/* End of file routes.php */
/* Location: ./application/config/routes.php */