<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/superadmin', 'Home::dashboard_super_admin');
$routes->get('/parents', 'Home::parents');
$routes->get('/students', 'Home::students');
$routes->get('/teacher', 'Home::teacher');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');