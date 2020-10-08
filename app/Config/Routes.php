<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Admin');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'F_home::index');
$routes->get('/login.rm', 'Admin::index');
$routes->get('/f_destinasi.rm', 'F_destinasi::index');
$routes->get('/f_event.rm', 'F_event::index');
$routes->get('/f_peta_wisata.rm', 'F_Peta_Wisata::index');
$routes->get('/f_profile.rm', 'F_Profile::index');
// $routes->get('/f_about.rm', 'F_About::index');
$routes->get('/wisata/detail/(:segment)', 'Wisata::getDetailWisata/$1');
$routes->get('/f_wisata/detail/(:segment)', 'F_destinasi::detail/$1');
$routes->get('/f_event/detail/(:segment)', 'F_event::detailEvent/$1');

//$routes->get('/f_destinasi.fh', 'F_destinasi::getAllDestination');
//$routes->get('register', 'Admin::register');
//$routes['admin'] = 'admin/overview';

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
