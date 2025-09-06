<?php

namespace App\Models\Mantenimiento;

use CodeIgniter\Model;

class SubCategoria extends Model
{
    protected $table      = 'subcategorias';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'categoria_id'];

    public function listarPorCategoria(int $categoriaId): array
    {
        return $this->where('categoria_id', $categoriaId)
            ->orderBy('nombre', 'ASC')
            ->findAll();
    }
}