<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about', 'Home::about');
$routes->post('/sendmail', [Home::class, 'mail']);

// admin links
$routes->get("admin", 'Admin::messages');
$routes->get("admin/login", 'Admin::loginView');
$routes->post("admin/submitLogin", 'Admin::login');
$routes->get("admin/forgot", 'Admin::forgotPassword');
$routes->post("admin/forgotPassword", 'Admin::forgotPasswordSubmit');
$routes->get("admin/mail/(:num)", 'Admin::getMessage/$1');
$routes->get("admin/media", 'Admin::getAllMedia');
$routes->post("admin/media", 'Admin::addMedia');
$routes->get("admin/deletemedia/(:num)", 'Admin::deleteMedia/$1');
$routes->get("admin/user", 'Admin::getAllUSers');
$routes->get("admin/deleteuser/(:num)", 'Admin::deleteUser/$1');
$routes->post("admin/register", 'Admin::register');
$routes->get("admin/profile", 'Admin::profile');
$routes->post("admin/changePassword", 'Admin::changePassword');
$routes->get("admin/logout", 'Admin::logout');

$routes->get("auth/reset_password/(:any)", "Admin::forgotPasswordCheck/$1");
$routes->post("auth/reset_password/(:any)", "Admin::resetPassword/$1");





