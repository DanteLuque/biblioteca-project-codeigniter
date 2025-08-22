<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');

// Libros - RENDER VIEWS
$routes->get('/libros', 'Libros::index');
$routes->get('/libros/crear', 'Libros::crear');
$routes->get('/libros/editar', 'Libros::editar');
// Libros - LOGIC
$routes->post('/libros/save_db', 'Libros::saveDB');


//Editoriales - RENDER VIEWS
$routes->get('/editoriales', 'Editoriales::index');
$routes->get('/editoriales/crear', 'Editoriales::crear');
$routes->get('/editoriales/editar', 'Editoriales::editar');

// Libros - LOGIC
$routes->post('/editoriales/save_db', 'Editoriales::saveDB');