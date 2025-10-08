<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'halaman::index');

$routes->get('/optik', 'Optik::index');
$routes->post('/optik', 'Optik::index'); // Rute untuk daftar penjualan
$routes->get('/optik/ubah/(:num)', 'Optik::ubah/$1');
$routes->put('/optik/update/(:num)', 'Optik::update/$1');
$routes->get('/optik/delete/(:num)', 'Optik::hapus/$1'); // Rute untuk menghapus penjualan