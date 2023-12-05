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
$routes->get('/home_pasien/daftar', [UserController::class,'daftar']);
$routes->post('/home_pasien/pasien_daftar', [UserController::class,'pasien_daftar']);
$routes->get('/jadwal_dokter', 'Home::jadwal');
$routes->get('/informasi', 'Home::informasi');


$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user', [UserController::class, 'index']);
$routes->post('/user', [UserController::class, 'index']);
$routes->get('/user/(:any)/edit', [UserController::class, 'edit']);
$routes->put('/user/(:any)', [UserController::class, 'update']);
$routes->delete('/user/(:any)', [UserController::class, 'destroy']);

$routes->get('user/(:any)', [UserController::class, 'show']);

$routes->add('puskesmas', [UserController::class, 'puskesmas']);

$routes->group('puskesmas', function($routes) {
    $routes->add('login', 'UserController::login');
});

$routes->add('/logout', [UserController::class, 'logout']);
$routes->add('/lupapassword', [UserController::class, 'lupapassword']);
$routes->add('/resetpassword', [UserController::class, 'resetpassword']);

$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->add('beranda', 'Admin\Beranda::beranda');
    $routes->add('v_dashboard', 'Admin\Beranda::v_dashboard');
    $routes->add('data_dokter', 'DokterController::data_dokter');
    $routes->add('tambah_dokter', 'DokterController::tambah_dokter');
    $routes->post('store', 'DokterController::store');
    $routes->put('update/(:num)', 'DokterController::update_dokter/$1');
    $routes->delete('delete/(:num)', 'DokterController::destroy/$1');

    $routes->add('jadwal_dokter', 'JadwalController::jadwal_dokter');
    $routes->add('jadwal_store', 'JadwalController::jadwal_store');
    $routes->put('update_jadwal/(:num)', 'JadwalController::update_jadwal/$1');
    $routes->delete('delete_jadwal/(:num)', 'JadwalController::delete_jadwal/$1');


});

$routes->group('resepsionis', ['filter' => 'auth'], function ($routes) {
    $routes->add('beranda', 'Resepsionis\Beranda::beranda');
    $routes->add('jadwal_praktek', 'Resepsionis\Beranda::jadwal_praktek');

   
});

$routes->group('pasien', ['filter' => 'auth'], function ($routes) {
    $routes->add('beranda', 'Pasien\Beranda::beranda');
    $routes->add('riwayat_antrian', 'Pasien\Beranda::riwayat_antrian');

});


