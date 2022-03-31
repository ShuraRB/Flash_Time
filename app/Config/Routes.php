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
$routes->get('/Juegos', 'Portal\Juegos::index',['as' => 'Juegos']);
$routes->get('/personajes', 'Portal\Personajes::index',['as' => 'personajes']);
$routes->get('/la_otra_cara_de_la_historia', 'Portal\Otro_lado::index',['as' => 'otro_lado']);
$routes->get('/un_día_como_hoy', 'Portal\Un_día::index',['as' => 'un_día']);
$routes->get('/un_día_como_hoy_second', 'Portal\Un_día_next::index',['as' => 'un_día_next']);

// Rutas de las Publicaciones
$routes->get('/Crucigrama', 'Portal\Juegos\Crucigrama::index',['as' => 'Crucigrama']);
$routes->get('/Quiz', 'Portal\Juegos\Quiz::index',['as' => 'Quiz']);
$routes->get('/Sopa', 'Portal\Juegos\Sopa::index',['as' => 'Sopa']);
$routes->get('/Q1', 'Portal\Juegos\Q1::index',['as' => 'Q1']);
$routes->get('/Q2', 'Portal\Juegos\Q2::index',['as' => 'Q2']);
$routes->get('/Q3', 'Portal\Juegos\Q3::index',['as' => 'Q3']);
$routes->get('/public_one', 'Portal\publicaciones\public_one::index',['as' => 'public_one']);
$routes->get('/public_two', 'Portal\publicaciones\public_two::index',['as' => 'public_two']);
$routes->get('/public_three', 'Portal\publicaciones\public_three::index',['as' => 'public_three']);
$routes->get('/public_four', 'Portal\publicaciones\public_four::index',['as' => 'public_four']);
$routes->get('/public_five', 'Portal\publicaciones\public_five::index',['as' => 'public_five']);
$routes->get('/public_six', 'Portal\publicaciones\public_six::index',['as' => 'public_six']);
//Rutas personajes
$routes->get('/hidalgo', 'Portal\Personajes\Hidalgo::index',['as' => 'hidalgo']);
$routes->get('/morelos', 'Portal\Personajes\Morelos::index',['as' => 'morelos']);
$routes->get('/law', 'Portal\Personajes\Law::index',['as' => 'law']);
//Rutas de las publicaciones de la otra cara de la historia
$routes->get('/otro_lado_1', 'Portal\El_otro_lado_de_la_historia\Otro_lado_1::index',['as' => 'otro_lado_1']);
$routes->get('/otro_lado_2', 'Portal\El_otro_lado_de_la_historia\Otro_lado_2::index',['as' => 'otro_lado_2']);
$routes->get('/otro_lado_3', 'Portal\El_otro_lado_de_la_historia\Otro_lado_3::index',['as' => 'otro_lado_3']);
$routes->get('/otro_lado_4', 'Portal\El_otro_lado_de_la_historia\Otro_lado_4::index',['as' => 'otro_lado_4']);
$routes->get('/otro_lado_5', 'Portal\El_otro_lado_de_la_historia\Otro_lado_5::index',['as' => 'otro_lado_5']);
$routes->get('/otro_lado_6', 'Portal\El_otro_lado_de_la_historia\Otro_lado_6::index',['as' => 'otro_lado_6']);
$routes->get('/otro_lado_7', 'Portal\El_otro_lado_de_la_historia\Otro_lado_7::index',['as' => 'otro_lado_7']);
$routes->get('/otro_lado_8', 'Portal\El_otro_lado_de_la_historia\Otro_lado_8::index',['as' => 'otro_lado_8']);
$routes->get('/otro_lado_9', 'Portal\El_otro_lado_de_la_historia\Otro_lado_9::index',['as' => 'otro_lado_9']);
$routes->get('/otro_lado_10', 'Portal\El_otro_lado_de_la_historia\Otro_lado_10::index',['as' => 'otro_lado_10']);
$routes->get('/otro_lado_11', 'Portal\El_otro_lado_de_la_historia\Otro_lado_11::index',['as' => 'otro_lado_11']);
$routes->get('/otro_lado_12', 'Portal\El_otro_lado_de_la_historia\Otro_lado_12::index',['as' => 'otro_lado_12']);
$routes->get('/otro_lado_13', 'Portal\El_otro_lado_de_la_historia\Otro_lado_13::index',['as' => 'otro_lado_13']);



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
