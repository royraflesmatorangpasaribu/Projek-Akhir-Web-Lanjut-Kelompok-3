<?php

use CodeIgniter\Router\RouteCollection;
use Myth\Auth\Config\Auth as AuthConfig;
use App\controllers\UserController;
use App\controllers\Admin;
use App\controllers\InformationController;
use App\Controllers\StudentController;
use App\Controllers\TaskController;
use App\Controllers\TaskDetailController;
use App\Controllers\TaskStudents;
use Config\Auth; 


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::dashboard_students');
$routes->get('/coba', 'Home::create_information');
$routes->get('/redirect', 'Admin::redirect');
// $routes->get('/admin', 'Admin::index');


// $routes->get('/user/create', [User::class, 'create']);
$routes->post('/admin/store', [Admin::class, 'store']);
$routes->get('/user', [UserController::class, 'index'], ['filter' => 'role:teachers']);
$routes->put('profile_teacher/(:any)/update', 'UserController::update/$1', ['filter' => 'role:teachers']);
$routes->get('profile_edit/(:any)/edit', 'UserController::edit/$1', ['filter' => 'role:teachers']);
$routes->get('/admin/create_data', [Admin::class, 'create'], ['filter' => 'role:super_admin']);
$routes->post('/updateUser', 'admin::updateUser', ['filter' => 'role:super_admin']);

$routes->get('/admin/edit', [Admin::class, 'edit'], ['filter' => 'role:super_admin']);
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


    $routes->get('/parents', 'Home::parents', ['filter' => 'role:super_admin']);
    $routes->get('/students', 'Home::students', ['filter' => 'role:super_admin']);
    $routes->get('/teacher', 'Home::teacher', ['filter' => 'role:super_admin']);
    $routes->get('/class', 'Home::class', ['filter' => 'role:super_admin']);
    $routes->post('/class/create', 'Home::store', ['filter' => 'role:super_admin']);
    $routes->get('/create_class', 'Home::create_class', ['filter' => 'role:super_admin']);
    $routes->post('/create_class', 'Home::create_class', ['filter' => 'role:super_admin']);
    $routes->get('/edit_class', 'Home::edit_class', ['filter' => 'role:super_admin']);
    $routes->post('/edit_class', 'Home::edit_class', ['filter' => 'role:super_admin']);
    $routes->post('/class/delete', 'Home::delete_class', ['filter' => 'role:super_admin']);
    $routes->get('/profile_admin', 'InformationController::profile', ['filter' => 'role:super_admin']);
    $routes->put('profile_admin/(:any)/update', 'InformationController::updatepr/$1', ['filter' => 'role:super_admin']);
    $routes->get('profile_admin/(:any)/edit', 'InformationController::edit/$1', ['filter' => 'role:super_admin']);


    $routes->get('/information', [InformationController::class, 'information'], ['filter' => 'role:super_admin']);
    $routes->get('/information/create_information', [InformationController::class, 'create_information'], ['filter' => 'role:super_admin']);
    $routes->post('information/store', [InformationController::class, 'store'], ['filter' => 'role:super_admin']);
    $routes->put('information/(:any)', [InformationController::class,'update/$1'], ['filter' => 'role:super_admin']);
    $routes->delete('/information/(:any)', [InformationController::class,'destroy/$1'], ['filter' => 'role:super_admin']);

    $routes->get('/dashboard_teacher', 'Home::dashboard_teacher', ['filter' => 'role:teachers']);
    $routes->get('/task', [TaskController::class, 'task'], ['filter' => 'role:teachers']);
    $routes->post('task/store', [TaskController::class, 'store'], ['filter' => 'role:teachers']);
    $routes->put('task/(:any)', [TaskController::class,'update'], ['filter' => 'role:teachers']);
    $routes->delete('/task/(:any)', [TaskController::class,'destroy/$1'], ['filter' => 'role:teachers']);
    
    
    $routes->get('/user/(:any)/edit', [TaskDetailController::class, 'edit'], ['filter' => 'role:teachers']);
    $routes->put('/nilai/(:any)', [TaskDetailController::class,'update'], ['filter' => 'role:teachers']);
    $routes->get('/task/detail/(:any)', [TaskDetailController::class, 'index'], ['filter' => 'role:teachers']);
    $routes->delete('/nilai/(:any)', [TaskDetailController::class,'destroy/$1'], ['filter' => 'role:teachers']);

    $routes->get('/parents_dashboard', 'Home::dashboard_parents', ['filter' => 'role:parents']);


    $routes->put('profile_students/(:any)/update', 'StudentController::update/$1', ['filter' => 'role:students']);
    $routes->get('profile_students/(:any)/edit', 'StudentController::edit/$1', ['filter' => 'role:students']);


    $routes->get('/dashboard_students', 'Home::dashboard_students', ['filter' => 'role:students']);
    $routes->get('/dashboard_students/index', 'Home::dashboard_students', ['filter' => 'role:students']);
    $routes->get('/class_students', 'Home::class_students', ['filter' => 'role:students']);
    $routes->get('/information_students', 'StudentController::information', ['filter' => 'role:students']);
    $routes->get('/profile_students', 'Home::profile_students', ['filter' => 'role:students']);
    $routes->get('/view/(:any)', 'TaskStudents::view/$1');
    $routes->get('/task_students', 'TaskStudents::index', ['filter' => 'role:students']);
    $routes->get('/task_students/index', 'TaskStudents::index', ['filter' => 'role:students']);
    $routes->get('/upload', [TaskStudents::class, 'task'], ['filter' => 'role:students']);
    $routes->post('/task/create', [TaskStudents::class, 'do_upload'], ['filter' => 'role:students']);
    $routes->get('/task_students/detail/(:any)', [TaskStudents::class, 'detail'], ['filter' => 'role:students']);
    // File: app/Config/Routes.php
    // $routes->get('view/(:segment)', 'TaskStudents::viewFile/$1', ['filter' => 'role:students']);

    $routes->get('/parents_dashboard', 'Home::dashboard_parents', ['filter' => 'role:parents']);
    $routes->get('/parents/students', 'Home::lstud', ['filter' => 'role:parents']);
    $routes->get('/parents/students/detail/(:any)', 'Home::detail_stud/$1', ['filter' => 'role:parents']);
});