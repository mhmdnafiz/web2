<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//public
$routes->get('/', 'Home::index');
$routes->get('/search', 'HOME::search');
$routes->get('/chart', 'HOME::cart');
$routes->get('/chekout', 'HOME::chekot');
$routes->get('/submit', 'HOME::submit');

service('auth')->routes($routes);

//admin
$routes->group('admin',['filter' =>['group:admin']], function($routes){
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('daftar-buku', 'AdminController::daftarBuku');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('pelanggan', 'AdminController::pelanggan');
});