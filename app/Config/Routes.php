<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Portal\Inicio::index',['as' => 'inicio']);

/**   P O R T A L   **/
/* --------------------------------------------------------------------
* PORTAL
* --------------------------------------------------------------------*/
$routes->get('/Juego', 'Portal\Juego::index',['as' => 'Juego']);
$routes->get('/personajes', 'Portal\Personajes::index',['as' => 'personajes']);
$routes->get('/la_otra_cara_de_la_historia', 'Portal\Otro_lado::index',['as' => 'otro_lado']);
$routes->get('/un_día_como_hoy', 'Portal\Un_día::index',['as' => 'un_día']);
$routes->get('/un_día_como_hoy_second', 'Portal\Un_día_next::index',['as' => 'un_día_next']);

// Rutas de las Publicaciones
$routes->get('/otro_lado_1', 'Portal\El_otro_lado_de_la_historia\Otro_lado_1::index',['as' => 'otro_lado_1']);
$routes->get('/Crucigrama', 'Portal\Juegos\Crucigrama::index',['as' => 'Crucigrama']);
$routes->get('/Quiz', 'Portal\Juegos\Quiz::index',['as' => 'Quiz']);
$routes->get('/Sopa', 'Portal\Juegos\Sopa::index',['as' => 'Sopa']);
$routes->get('/Q1', 'Portal\Juegos\Q1::index',['as' => 'Q1']);
$routes->get('/Q2', 'Portal\Juegos\Q2::index',['as' => 'Q2']);
$routes->get('/Q3', 'Portal\Juegos\Q3::index',['as' => 'Q3']);
$routes->get('/un_dia_como_hoy_1', 'Portal\Un_dia_como_hoy\Un_dia_como_hoy_1::index',['as' => 'un_dia_como_hoy_1']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
