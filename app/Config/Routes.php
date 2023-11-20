<?php

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;
use App\controllers\User;
use App\controllers\Admin;
use App\controllers\InformationController;
use Config\Auth; 


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/redirect', 'Admin::redirect');
// $routes->get('/admin', 'Admin::index');


// $routes->get('/user/create', [User::class, 'create']);
$routes->post('/admin/store', [Admin::class, 'store']);
$routes->get('/user', [User::class, 'index']);
$routes->get('/admin/create_data', [Admin::class, 'create']);
$routes->post('/updateUser', 'admin::updateUser');

$routes->get('/admin/edit', [Admin::class, 'edit']);
// $routes->delete('/user/delete/(:any)', [Admin::class, 'destroy'], ['filter' => 'role:super_admin']);
// $routes->delete('/admin/(:any)', [Admin::class, 'destroy']);
// $routes->get('/admin/detail/(:num)', 'Admin::detail');
// $routes->delete('/admin/(:any)', [Admin::class, 'destroy']);
$routes->get('/admin', 'Admin::index', ['filter' => 'role:super_admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:super_admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:super_admin']);
$routes->get('/user/detail/(:any)', [Admin::class, 'detail'], ['filter' => 'role:super_admin']);
// $routes->group('admin', ['filter' => 'role:super_admin'], function ($routes) {
//     $routes->delete('delete/(:num)', 'Admin::destroy/$1');
// });

$routes->delete('/admin/delete/(:num)', 'Admin::destroy/$1', ['filter' => 'role:super_admin'], ['get', 'post']);

$routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');

    $routes->get('/user/create', [User::class, 'create']);
    $routes->post('/user/store', [User::class, 'store']);
    $routes->get('/user', [User::class, 'index']);

    $routes->get('/parents', 'Home::parents');
    $routes->get('/students', 'Home::students');
    $routes->get('/teacher', 'Home::teacher');
    $routes->get('/class', 'Home::class');
    $routes->get('/create_class', 'Home::create_class');
    $routes->post('/create_class', 'Home::create_class');
    $routes->get('/edit_class', 'Home::edit_class');
    $routes->post('/edit_class', 'Home::edit_class');
    $routes->post('/class/delete', 'Home::delete_class');
    $routes->get('/profile', 'Home::profile');

    $routes->get('/information', [InformationController::class, 'information']);
    $routes->post('information/store', [InformationController::class, 'store']);
    $routes->put('information/(:any)', [InformationController::class,'update/$1']);
    $routes->delete('/information/(:any)', [InformationController::class,'destroy/$1']);

}); 

$routes->get('/dashboard_teacher', 'Home::dashboard_teacher');
$routes->get('/management_courses', 'Home::management_courses');
$routes->get('/detail_courses', 'Home::detail_courses');