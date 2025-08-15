<?php

namespace App\Models;

class Libro extends Model
{
    protected $table = 'libros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'imagen'];

    public function getLibros()
    {
        return $this->findAll();
    }

    public function getLibroById($id)
    {
        return $this->find($id);
    }

    public function createLibro($data)
    {
        return $this->insert($data);
    }

    public function updateLibro($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteLibro($id)
    {
        return $this->delete($id);
    }
}