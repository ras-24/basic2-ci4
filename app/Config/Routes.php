<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/about/test', 'About::test');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');
