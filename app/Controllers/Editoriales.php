<?php

namespace App\Controllers;

class Editoriales extends BaseController
{
    public function index(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        return view('Editoriales/listar', $data);
    }

    public function crear(): string
    {
        return view('Editoriales/crear');
    }

    public function editar(): string
    {
        return view('Editoriales/editar');
    }
}