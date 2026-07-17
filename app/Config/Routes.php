<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pegawai::index');

$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/pegawai/tambah', 'Pegawai::tambah');
$routes->post('/pegawai/simpan', 'Pegawai::simpan');
$routes->get('/pegawai/edit/(:any)', 'Pegawai::edit/$1');
$routes->post('/pegawai/update', 'Pegawai::update');

$routes->get('/pegawai/delete/(:num)', 'Pegawai::delete/$1');
