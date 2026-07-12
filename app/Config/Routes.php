<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Pegawai::index');

$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/pegawai/tambah', 'Pegawai::tambah');
$routes->post('/pegawai/simpan', 'Pegawai::simpan');
