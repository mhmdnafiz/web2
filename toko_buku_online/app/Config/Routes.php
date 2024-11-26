<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/search', 'HOME::search');
$routes->get('/chart', 'HOME::cart');
$routes->get('/chekout', 'HOME::chekot');
$routes->get('/submit', 'HOME::submit');