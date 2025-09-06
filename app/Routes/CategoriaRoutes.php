<?php
$routes->get('categorias', 'CategoriaController::categorias');
$routes->get('subcategorias/(:num)', 'CategoriaController::subCategorias/$1');
