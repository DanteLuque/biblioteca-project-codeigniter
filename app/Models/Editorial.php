<?php

namespace App\Models;
use CodeIgniter\Model;

class Editorial extends Model{
  protected $table = 'editoriales';
  protected $primaryKey = 'id';
  protected $allowedFields = ['editorial', 'telefono', 'direccion'];
}