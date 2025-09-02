<?php

namespace App\Models;
use CodeIgniter\Model;

class Persona extends Model
{
  protected $table = 'personas';
  protected $primaryKey = 'idpersona';
  protected $allowedFields = ['dni', 'apellidos', 'nombres', 'telefono', 'distrito_id', 'direccion'];

  public function crear(array $data): int
  {
    return $this->insert($data, true);
  }

  public function listarFullInfo(): array
  {
    $db = \Config\Database::connect();
    $builder = $db->table('personas p');
    $builder->select('p.*, d.name as nombre_distrito');
    $builder->join('distritos d', 'd.id = p.distrito_id', 'inner');
    return $builder->get()->getResultArray();
  }
}