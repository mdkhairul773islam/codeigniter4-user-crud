<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'UserController::test');
$routes->get('users', 'UserController::index');
$routes->get('users/create', 'UserController::create');
$routes->post('users/store', 'UserController::store');
$routes->get('users/edit/(:num)', 'UserController::edit/$1');
//$routes->post('users/update/(:num)', 'UserController::update/$1');
$routes->post('users/update', 'UserController::update');
$routes->get('users/delete/(:num)', 'UserController::delete/$1');