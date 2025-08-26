<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');

// Libros - RENDER VIEWS
$routes->get('/libros', 'Libros::index');
$routes->get('/libros/buscar', 'Libros::buscar');
$routes->get('/libros/buscar', 'Libros::buscar');
$routes->post('/public/api/buscarlibro', 'Libros::buscarLibroDB');
$routes->get('/libros/crear', 'Libros::crear');
$routes->get('/libros/editar/(:num)', 'Libros::editar/$1');
// Libros - LOGIC
$routes->post('/libros/save_db', 'Libros::saveDB');
$routes->get('/libros/eliminar_db/(:num)', 'Libros::deleteDB/$1');
$routes->post('/libros/update_db/(:num)', 'Libros::updateDB/$1');


//Editoriales - RENDER VIEWS
$routes->get('/editoriales', 'Editoriales::index');
$routes->get('/editoriales/crear', 'Editoriales::crear');
$routes->get('/editoriales/editar', 'Editoriales::editar');
// Libros - LOGIC
$routes->post('/editoriales/save_db', 'Editoriales::saveDB');