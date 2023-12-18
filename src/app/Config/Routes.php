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
$routes->get('/courses', 'Courses::index');
$routes->get('/courses/(:num)', 'Courses::detail/$1');

$routes->get('/enrolledCourseReview', 'EnrolledCourseReview::index');
$routes->get('/courseView', 'CourseView::index');
$routes->post('/enrolledCourseReview/createReview', 'EnrolledCourseReview::createReview');
$routes->get('/courseReviewAPI', 'CourseReviewAPI::getAll');

