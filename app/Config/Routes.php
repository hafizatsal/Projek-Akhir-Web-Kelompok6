<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home_pasien', 'Home::beranda_pasien');
$routes->get('/home_admin', 'Home::beranda_admin');
$routes->get('/home_resepsionis', 'Home::beranda_resepsionis');
$routes->get('/form_daftar', 'Home::form_daftar');