<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'IndexController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//home
$route['danh-muc/(:any)']['GET'] = 'IndexController/category/$1';
$route['thuong-hieu/(:any)']['GET'] = 'IndexController/brand/$1';
$route['san-pham/(:any)']['GET'] = 'IndexController/product/$1';
$route['gio-hang']['GET'] = 'IndexController/cart';
$route['add-to-cart']['POST'] = 'IndexController/add_to_cart';
$route['update-cart-item']['POST'] = 'IndexController/update_cart_item';
$route['delete-all-cart']['GET'] = 'IndexController/delete_all_cart';
$route['delete-item/(:any)']['GET'] = 'IndexController/delete_item/$1';
$route['dang-nhap']['GET'] = 'IndexController/login';
$route['checkout']['GET'] = 'IndexController/checkout';
$route['confirm-checkout']['POST'] = 'IndexController/confirm_checkout';
$route['dang-xuat']['GET'] = 'IndexController/dang_xuat';
$route['thanks']['GET'] = 'IndexController/thanks';
//login
$route['login']['GET'] = 'LoginController/index';
$route['login-user']['POST'] = 'LoginController/login';
$route['login-customer']['POST'] = 'IndexController/login_customer';
$route['dang-ky']['POST'] = 'IndexController/dang_ky';
//Dashboard
$route['dashboard']['GET'] = 'DashboardController/index';
$route['logout']['GET'] = 'DashboardController/logout';
//brand
$route['brand/create']['GET'] = 'BrandController/create';
$route['brand/list']['GET'] = 'BrandController/index';
$route['brand/delete/(:any)']['GET'] = 'BrandController/delete/$1';
$route['brand/edit/(:any)']['GET'] = 'BrandController/edit/$1';
$route['brand/update/(:any)']['POST'] = 'BrandController/update/$1';
$route['brand/store']['POST'] = 'BrandController/store';
//category
$route['category/create']['GET'] = 'CategoryController/create';
$route['category/list']['GET'] = 'CategoryController/index';
$route['category/delete/(:any)']['GET'] = 'CategoryController/delete/$1';
$route['category/edit/(:any)']['GET'] = 'CategoryController/edit/$1';
$route['category/update/(:any)']['POST'] = 'CategoryController/update/$1';
$route['category/store']['POST'] = 'CategoryController/store';
//product
$route['product/create']['GET'] = 'ProductController/create';
$route['product/list']['GET'] = 'ProductController/index';
$route['product/delete/(:any)']['GET'] = 'ProductController/delete/$1';
$route['product/edit/(:any)']['GET'] = 'ProductController/edit/$1';
$route['product/update/(:any)']['POST'] = 'ProductController/update/$1';
$route['product/store']['POST'] = 'ProductController/store';

//order
$route['order/list']['GET'] = 'OrderController/index';