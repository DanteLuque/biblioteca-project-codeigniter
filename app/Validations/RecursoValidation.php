<?php

namespace App\Validations;

class RecursoValidation
{
    public array $rules = [
        'subcategoria_id'   => 'required|is_natural_no_zero',
        'editorial_id'      => 'required|is_natural_no_zero',
        'tipo'              => 'required|in_list[FISICO,DIGITAL]',
        'titulo'            => 'required|min_length[3]|max_length[255]',
        'anio_publicacion'  => 'required|exact_length[4]|numeric',
        'isbn'              => 'required|exact_length[13]|is_unique_soft[recursos.isbn]',
        'num_paginas'       => 'required|is_natural_no_zero',
        'ruta_portada'      => 'permit_empty|is_image[ruta_portada]|max_size[ruta_portada,2048]|ext_in[ruta_portada,jpg,jpeg,png]',
        'ruta_recurso'      => 'permit_empty|max_size[ruta_recurso,10240]|ext_in[ruta_recurso,pdf]',
    ];

    public array $errors = [
        'subcategoria_id' => [
            'required' => 'Debe seleccionar una subcategoría',
        ],
        'editorial_id' => [
            'required' => 'Debe seleccionar una editorial',
        ],
        'tipo' => [
            'required' => 'El tipo es obligatorio',
            'in_list'  => 'El tipo debe ser FISICO o DIGITAL',
        ],
        'titulo' => [
            'required'   => 'El título es obligatorio',
            'min_length' => 'El título debe tener al menos 3 caracteres',
            'max_length' => 'El título no puede superar los 255 caracteres',
        ],
        'anio_publicacion' => [
            'required'     => 'Debe ingresar el año de publicación',
            'exact_length' => 'El año debe tener 4 dígitos',
            'numeric'      => 'El año debe ser numérico',
        ],
        'isbn' => [
            'required'        => 'Debe ingresar el ISBN',
            'exact_length'    => 'El ISBN debe tener 13 caracteres',
            'is_unique_soft'  => 'Este ISBN ya está registrado',
        ],
        'num_paginas' => [
            'required' => 'Debe ingresar el número de páginas',
            'is_natural_no_zero' => 'El número de páginas debe ser mayor a 0',
        ],
        'ruta_portada' => [
            'is_image'   => 'La portada debe ser una imagen válida',
            'max_size'   => 'La portada no puede superar los 2 MB',
            'ext_in'     => 'La portada debe tener formato jpg, jpeg o png',
        ],
        'ruta_recurso' => [
            'max_size' => 'El recurso no puede superar los 10 MB',
            'ext_in'   => 'El recurso debe estar en formato PDF',
        ],
    ];
}
