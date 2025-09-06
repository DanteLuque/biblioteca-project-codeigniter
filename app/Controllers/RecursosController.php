<?php

namespace App\Controllers;

use App\Models\Mantenimiento\Editorial;

class RecursosController extends BaseController
{
    public function index(): string
    {
        return view('Recursos/listar');
    }

    public function crear(): string
    {
        $editorial = new Editorial();
        $data['editoriales'] = $editorial->listar();

        return view('Recursos/crear', $data);
    }

    /*
    public function saveDB(){
        $editorial = new Editorial();

        $nombre = $this->request->getVar('editorial');
        $telefono = $this->request->getVar('telefono');
        $direccion = $this->request->getVar('direccion');

        $registro = [
            'editorial' => $nombre,
            'telefono' => $telefono,
            'direccion' => $direccion
        ];

        $editorial->insert($registro);
        return $this->response->redirect(base_url('editoriales'));
    }
    */
}
