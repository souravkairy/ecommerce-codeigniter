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



$route['home-page'] = 'welcome';
$route['default_controller'] = 'front_end';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// $route['default_controller'] = 'front_end';
//front end route
$route['All-Products'] = 'front_end/products';
$route['product-details/(.+)'] = 'front_end/product_details/$1';
$route['product_review'] = 'front_end/product_review';
$route['add_to_cart'] = 'front_end/add_to_cart';
$route['show-cart'] = 'front_end/show_cart';
$route['update_cart'] = 'front_end/update_cart';
$route['Delete-To-Cart/(.+)'] = 'front_end/delete_to_cart/$1';




$route['Checkout'] = 'front_end/checkout';


$route['place-order'] = 'front_end/place_order';


$route['stripe_payment_dashboard'] = 'stripe_payment/stripe_payment_dashboard';



$route['Sign-Up'] = 'front_end/sign_up_form';
$route['save_customer_info'] = 'front_end/save_customer_info';
$route['customer_login'] = 'front_end/customer_login';
$route['customer_logout'] = 'front_end/customer_logout';


$route['place-order'] = 'front_end/place_order';
$route['order-now'] = 'front_end/order_now';
$route['Confirm-Message'] = 'front_end/c_m';




$route['About'] = 'front_end/about';
$route['blog'] = 'front_end/blog';
$route['Contact'] = 'front_end/contact';



//backend route
$route['admin'] = 'admin_login_auth';
$route['admin_auth'] = 'admin_login_auth/admin_auth';
$route['logout'] = 'admin_login_auth/logout';

$route['admin_dashboard'] = 'back_end';

$route['Category'] = 'back_end/category';
$route['add_category'] = 'back_end/add_category';


$route['Sub_category'] = 'back_end/sub_category';
$route['add_sub_category'] = 'back_end/add_sub_category';


$route['Brand'] = 'back_end/brand';
$route['Add_brand'] = 'back_end/add_brand';


$route['Add_product_form'] = 'back_end/add_product_form';
$route['Save-Product'] = 'back_end/save_product';
$route['Products'] = 'back_end/products';
$route['P_product'] = 'back_end/p_products';
$route['L_product'] = 'back_end/l_products';
$route['T_product'] = 'back_end/t_products';




$route['Banner-Set'] = 'back_end/Banner_set';
$route['Save-Banner'] = 'back_end/save_banner';




$route['Pending_order'] = 'back_end/pending_order';
$route['order_details/(.+)'] = 'back_end/order_details/$1';
$route['s_o_details/(.+)'] = 'back_end/s_o_details/$1';




$route['store_mail'] = 'back_end/store_mail';
$route['mail'] = 'back_end/mail';
$route['mail_view/(.+)'] = 'back_end/mail_view/$1';

