<?php

namespace App\Controllers;
use App\Models\Editorial;

class Editoriales extends BaseController
{
    public function index(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        $editorial = new Editorial();
        $data['editoriales'] = $editorial->orderBy('id', 'ASC')->findAll();

        return view('Editoriales/listar', $data);
    }

    public function crear(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        return view('Editoriales/crear', $data);
    }

    public function editar(): string
    {
        return view('Editoriales/editar');
    }

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
}