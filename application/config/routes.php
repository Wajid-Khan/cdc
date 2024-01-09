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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['home']         = 'Home';
$route['about-cdc']    = 'home/about_cdc';
$route['experts'] 	   = 'home/experts';
$route['expert/(:any)'] = 'home/expert/$1';
$route['testimonials'] = 'home/testimonials';
$route['gallery']      = 'home/gallery';
$route['careers']      = 'home/careers';
$route['centers']      = 'home/centers';
$route['blogs']        = 'home/blogs';
$route['blog/(:any)']        = 'home/blog/$1';
$route['blog/single-blog']        = 'home/single_blog';
$route['contact-us']   = 'home/contact_us';

/*** Services Routes ***/
$route['behavioural-therapy-hyderabad'] = 'home/behaviour_therapy_hyderabad';
$route['speech-therapy-hyderabad']      = 'home/speech_therapy_hyderabad';
$route['special-education']        		= 'home/special_education';
$route['best-parent-training']        	= 'home/best_parent_training';
$route['psychotherapy-and-counselling'] = 'home/psychotherapy_and_counselling';
$route['yoga-therapy']        			= 'home/yoga_therapy';
$route['postural-and-mobility-therapy'] = 'home/postural_and_mobility_therapy';
$route['early-intervention-services']   = 'home/early_intervention_services';
$route['cognitive-behavioural-therapy'] = 'home/cognitive_behavioural_therapy';
$route['occupational-therapy-hyderabad'] = 'home/occupational_therapy_hyderabad';
$route['group-teaching']        		= 'home/group_teaching';
$route['teachers-training']        		= 'home/teachers_training';
$route['certified-courses']        		= 'home/certified_courses';
$route['hydrotherapy']        			= 'home/hydrotherapy';
$route['best-developmental-pediatrician-in-hyderabad'] = 'home/best_developmental_pediatrician_in_hyderabad';
$route['autism-therapy-in-hyderabad']   = 'home/autism_therapy';
/*** Services Routes ***/


$route['editor'] 				     = 'home/editor';
$route['home/contact_enquiry'] 		 = 'home/contact_enquiry';
$route['appointment'] 		 = 'home/appointment';


/*Admin routes*/
$route['admin/login'] = 'admin/Login';
/*Admin routes*/




