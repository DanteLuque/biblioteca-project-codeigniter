<?php

namespace App\Models;

use Ramsey\Uuid\Uuid;

class Recurso extends BaseModel
{
    protected $table      = 'recursos';
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


    public function crear(array $data, $imagenFile = null, $pdfFile = null): int
    {
        $data['UUID'] = Uuid::uuid4()->toString();
        $data['estado'] = true;

        if ($imagenFile && $imagenFile->isValid() && !$imagenFile->hasMoved()) {
            $newName = $imagenFile->getRandomName();
            $imagenFile->move(FCPATH . 'uploads/portadas/', $newName);
            $data['ruta_portada'] = 'uploads/portadas/' . $newName;
        }

        if ($pdfFile && $pdfFile->isValid() && !$pdfFile->hasMoved()) {
            $newName = $pdfFile->getRandomName();
            $pdfFile->move(FCPATH . 'uploads/recursos/', $newName);
            $data['ruta_recurso'] = 'uploads/recursos/' . $newName;
        }

        return $this->insert($data, true);
    }

    public function obtenerPorId($id)
    {
        return $this->where('id', $id)->first();
    }
}
