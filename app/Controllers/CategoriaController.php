<?php

namespace App\Controllers;

use App\Models\Mantenimiento\Categoria;
use App\Models\Mantenimiento\SubCategoria;

class CategoriaController extends BaseController
{
    public function categorias()
    {
        $model = new Categoria();
        return $this->response->setJSON($model->listar());
    }

    public function subCategorias($categoriaId)
    {
        $model = new SubCategoria();
        return $this->response->setJSON($model->listarPorCategoria((int)$categoriaId));
    }
}
