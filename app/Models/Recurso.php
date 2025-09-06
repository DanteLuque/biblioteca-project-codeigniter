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

    public function listar(): array
    {
        return $this->orderBy('id', 'ASC')->findAll();
    }

    public function listarFullInfo(): array
    {
        $db = \Config\Database::connect();
        $builder = $db->table('recursos r');

        $builder->select('r.*, 
              e.editorial as nombre_editorial,
              e.nacionalidad as nacionalidad_editorial,
              sc.nombre as subcategoria,
              c.nombre as categoria');

        $builder->join('editoriales e', 'e.id = r.editorial_id', 'inner');
        $builder->join('subcategorias sc', 'sc.id = r.subcategoria_id', 'inner');
        $builder->join('categorias c', 'c.id = sc.categoria_id', 'inner');

        return $builder->get()->getResultArray();
    }


    public function crear(array $data, $imagenFile = null, $pdfFile = null): int
    {
        $data['UUID'] = Uuid::uuid4()->toString();

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
}
