<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->get('/halaman_utama', 'HalamanUtama::index');
 $routes->get('/artikel', 'Artikel::article');
 $routes->get('/menfess', 'Menfess::menfes');
 $routes->get('/confess', 'Confess::confes');
 $routes->get('/profil', 'Profil::profile');

 $routes->get('/isiartikel', 'IsiArtikel::artikel');

 $routes->get('/login', 'Login::log');
 $routes->get('/register', 'Register::regis');

// backend 
//backend admin : homepage dashboard
$routes->get('/dashboard', 'HalamanAdmin::admin');

// backend admin : user Management 
$routes->get('/user_management', 'MengelolaUser::usermanage');
$routes->get('/tambahuser', 'MengelolaUser::tambahusr');
$routes->post('/prosestambahuser', 'MengelolaUser::prosestambahusr');
$routes->get('/edituser/(:any)', 'MengelolaUser::editusr/$1');
$routes->post('/prosesedituser', 'MengelolaUser::proseseditusr');
$routes->get('/hapususer/(:any)', 'MengelolaUser::hapususr/$1');



// backend admin : artcle 
$routes->get('/article', 'MengelolaArtikel::artikeladmin');
$routes->get('/tambahartikel', 'MengelolaArtikel::tambahartik');
$routes->post('/prosestambahartikel', 'MengelolaArtikel::prosestambahartik');
$routes->get('/editartikel/(:any)', 'MengelolaArtikel::editartik/$1');
$routes->post('/proseseditartikel', 'MengelolaArtikel::proseseditartik');
$routes->get('/hapusartikel/(:any)', 'MengelolaArtikel::hapusartik/$1');
