<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::login');
$routes->get('/register', 'Register::index');
$routes->post('/register', 'Register::register');
$routes->get('/logout', 'Login::logout');

$routes->get('/mycourses', 'MyCourses::index');
$routes->get('/courses', 'Courses::index');
$routes->get('/courses/(:num)', 'Courses::detail/$1');



// API WKWKWKWKWK
$routes->get('/api/courseparticipants', 'APIController::course_participants');
$routes->get('/api/providerparticipants', 'APIController::provider_participants');
$routes->get('/api/courserating', 'APIController::course_rating');
$routes->get('/api/providerrating', 'APIController::provider_rating');
$routes->get('/api/review', 'APIController::review');
$routes->get('/api/review/(:num)', 'APIController::courseReview/$1');
$routes->get('/api/payment', 'APIController::payment');
$routes->get('/api/payment/(:num)', 'APIController::coursePayment/$1');
$routes->get('/api/enrollment', 'APIController::enrollment');
$routes->get('/api/thismonthenrollment', 'APIController::thisMonthEnrollment');
$routes->get('/api/providerparticipantsthismonth', 'APIController::provider_participants_this_month');
