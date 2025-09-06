<?php

namespace App\Models\Mantenimiento;

use CodeIgniter\Model;

class Editorial extends Model
{
    protected $table      = 'editoriales';
    protected $primaryKey = 'id';
    protected $allowedFields = ['editorial', 'nacionalidad'];

    public function listar(): array
    {
        return $this->orderBy('editorial', 'ASC')->findAll();
    }
}