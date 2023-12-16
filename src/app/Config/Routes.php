<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/enrolledCourseReview', 'EnrolledCourseReview::index');
$routes->get('/courseView', 'CourseView::index');
