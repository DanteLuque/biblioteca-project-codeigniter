<?php

namespace App\Models\Mantenimiento;

use CodeIgniter\Model;

class Categoria extends Model
{
    protected $table      = 'categorias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre'];

    public function listar(): array
    {
        return $this->orderBy('nombre', 'ASC')->findAll();
    }
}