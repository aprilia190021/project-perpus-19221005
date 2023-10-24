<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Koleksi Buku
$routes->get('/Koleksi', 'ControllerKoleksi::index');
$routes->get('/Koleksi/form', 'ControllerKoleksi::form');
$routes->get('/Koleksi/edit/(:any)', 'ControllerKoleksi::edit/$1');
$routes->post('/Koleksi/create', 'ControllerKoleksi::create');
$routes->post('/Koleksi/hapus', 'ControllerKoleksi::hapus'); 

// Buku
$routes->get('/Buku', 'ControllerBuku::index');
$routes->get('/Buku/form', 'ControllerBuku::form');
$routes->get('/Buku/edit/(:any)', 'ControllerBuku::edit/$1');
$routes->post('/Buku/create', 'ControllerBuku::create');
$routes->post('/Buku/hapus', 'ControllerBuku::hapus');