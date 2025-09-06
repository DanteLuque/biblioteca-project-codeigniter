<?php

// Editoriales - RENDER VIEWS
$routes->get('/', 'RecursosController::index');
$routes->get('/crear', 'RecursosController::crear');

// Editoriales - LOGIC
$routes->post('/save_db', 'RecursosController::saveDB');