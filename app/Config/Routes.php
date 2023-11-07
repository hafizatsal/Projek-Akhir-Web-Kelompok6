<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home_pasien', 'Home::beranda_pasien');
$routes->get('/home_admin', 'Home::beranda_admin');
$routes->get('/home_resepsionis', 'Home::beranda_resepsionis');
$routes->get('/form_daftar', 'Home::form_daftar');

$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user', [UserController::class, 'index']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

$routes->get('user/(:any)', [UserController::class, 'show']);
