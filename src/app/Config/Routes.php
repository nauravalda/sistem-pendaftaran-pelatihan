<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/register', 'Register::index');
$routes->post('/register', 'Register::register');
$routes->get('/logout', 'Login::logout');

$routes->get('/mycourses', 'MyCourses::index');
