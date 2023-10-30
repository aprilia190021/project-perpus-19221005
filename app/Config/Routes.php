<?php

use App\Controllers\ControllerPengguna;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Pengguna
$routes->get('/Pengguna', 'PenggunaController::index');
$routes->get('/Pengguna/form', 'PenggunaController::form');
$routes->get('/Pengguna/edit/(:num)', 'PenggunaController::create');
$routes->post('/Pengguna/create', 'Penggunacontroller::create');
$routes->post('/Pengguna/hapus', 'PenggunaController::hapus');

// Anggota
$routes->get('/Anggota', 'AnggotaController::index');
$routes->get('/Anggota/form', 'AnggotaController::form');
$routes->get('/Anggota/edit/(:num)', 'AnggotaController::create');
$routes->post('/Anggota/create', 'AnggotaController::create');
$routes->post('/Anggota/hapus', 'AnggotaController::hapus');