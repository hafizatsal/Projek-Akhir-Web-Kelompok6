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


// ----------------------------------ADMIN----------------------------------------------
$routes->group('admin', ['filter' => 'auth'], function ($routes) {
    $routes->add('beranda', 'Admin\Beranda::beranda');
    $routes->add('v_dashboard', 'Admin\Beranda::v_dashboard');

// DOKTER
    $routes->add('data_dokter', 'Admin\DokterController::data_dokter');
    $routes->add('tambah_dokter', 'Admin\DokterController::tambah_dokter');
    $routes->post('store', 'Admin\DokterController::store');
    $routes->add('detail/(:num)', 'Admin\DokterController::detail/$1');
    $routes->add('edit/(:num)', 'Admin\DokterController::edit_dokter/$1');
    $routes->put('update/(:num)', 'Admin\DokterController::update_dokter/$1');
    $routes->delete('delete/(:num)', 'Admin\DokterController::destroy/$1');

// JADWAL
    $routes->add('jadwal_dokter', 'Admin\JadwalController::jadwal_dokter');
    $routes->add('tambah_jadwal', 'Admin\JadwalController::tambah_jadwal');
    $routes->add('jadwal_store', 'Admin\JadwalController::jadwal_store');
    $routes->add('edit_jadwal/(:num)', 'Admin\JadwalController::edit_jadwal/$1');
    $routes->put('update_jadwal/(:num)', 'Admin\JadwalController::update_jadwal/$1');
    $routes->delete('delete_jadwal/(:num)', 'Admin\JadwalController::delete_jadwal/$1');
    $routes->delete('delete_jadwal/(:num)', 'Admin\JadwalController::destroy_jadwal/$1');

// POLI
    $routes->add('poli', 'Admin\PoliController::poli');
    $routes->add('tambah_poli', 'Admin\PoliController::tambah_poli');
    $routes->post('store_poli', 'Admin\PoliController::store');
    $routes->add('detail_poli/(:num)', 'Admin\PoliController::detail_poli/$1');
    $routes->add('edit_poli/(:num)', 'Admin\PoliController::edit_poli/$1');
    $routes->put('update_poli/(:num)', 'Admin\PoliController::update_poli/$1');
    $routes->delete('delete_poli/(:num)', 'Admin\PoliController::destroy_poli/$1');


});

// --------------------------------RESEPSIONIS-----------------------------------------
$routes->group('resepsionis', ['filter' => 'auth'], function ($routes) {
    $routes->add('beranda', 'Resepsionis\Beranda::beranda');

//DOKTER
    $routes->add('data_dokter', 'Resepsionis\DokterController::data_dokter');
    $routes->add('tambah_dokter', 'Resepsionis\DokterController::tambah_dokter');
    $routes->post('store', 'Resepsionis\DokterController::store');
    $routes->add('detail/(:num)', 'Resepsionis\DokterController::detail/$1');
    $routes->add('edit/(:num)', 'Resepsionis\DokterController::edit_dokter/$1');
    $routes->put('update/(:num)', 'Resepsionis\DokterController::update_dokter/$1');
    $routes->delete('delete/(:num)', 'Resepsionis\DokterController::destroy/$1');


// POLI
    $routes->add('poli_resepsionis', 'Resepsionis\PoliController::poli_resepsionis');
    $routes->add('tambah_poli', 'Resepsionis\PoliController::tambah_poli');
    $routes->add('tambah_poli', 'Resepsionis\PoliController::tambah_poli');
    $routes->post('store_poli', 'Resepsionis\PoliController::store');
    $routes->add('detail_poli/(:num)', 'Resepsionis\PoliController::detail_poli/$1');
    $routes->add('edit_poli/(:num)', 'Resepsionis\PoliController::edit_poli/$1');
    $routes->put('update_poli/(:num)', 'Resepsionis\PoliController::update_poli/$1');
    $routes->delete('delete_poli/(:num)', 'Resepsionis\PoliController::destroy_poli/$1'); 

// JADWAL
    $routes->add('jadwal_dokter', 'Resepsionis\JadwalController::jadwal_dokter');
    $routes->add('tambah_jadwal', 'Resepsionis\JadwalController::tambah_jadwal');
    $routes->add('jadwal_store', 'Resepsionis\JadwalController::jadwal_store');
    $routes->add('edit_jadwal/(:num)', 'Resepsionis\JadwalController::edit_jadwal/$1');
    $routes->put('update_jadwal/(:num)', 'Resepsionis\JadwalController::update_jadwal/$1');
    $routes->delete('delete_jadwal/(:num)', 'Resepsionis\JadwalController::delete_jadwal/$1');
    $routes->delete('delete_jadwal/(:num)', 'Resepsionis\JadwalController::destroy_jadwal/$1');
  
});

// --------------------------------PASIEN-----------------------------------------

$routes->group('pasien', ['filter' => 'auth'], function ($routes) {
    $routes->add('beranda', 'Pasien\Beranda::beranda');
    $routes->add('riwayat_antrian', 'Pasien\Beranda::riwayat_antrian');

});


