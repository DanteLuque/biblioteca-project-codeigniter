<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;

class Cliente extends BaseModel
{
    protected $table      = 'clientes';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'UUID',
        'subcategoria_id',
        'editorial_id',
        'tipo',
        'titulo',
        'anio_publicacion',
        'isbn',
        'num_paginas',
        'ruta_portada',
        'ruta_recurso',
        'estado',
    ];

    public function crear(array $data): int
    {
        $data['UUID'] = Uuid::uuid4()->toString();
        return $this->insert($data, true);
    }

    public function obtenerPorId($id)
    {
        return $this->where('usuario_id', $id)->first();
    }
}