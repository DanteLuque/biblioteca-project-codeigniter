<?php

namespace App\Controllers;

use App\Models\Mantenimiento\Editorial;
use App\Models\Recurso;

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

    public function saveDB()
    {
        helper('validation');
        $errors = [];
        $errors = array_merge($errors, runValidation('recurso', $this->request));
        if (!empty($errors)) return redirect()->back()->withInput()->with('errors', $errors);

        try {
            $recursoModel = new Recurso();
            $data = $this->request->getPost();
            $imagenFile = $this->request->getFile('ruta_portada');
            $pdfFile    = $this->request->getFile('ruta_recurso');

            $recursoModel->crear($data, $imagenFile, $pdfFile);

            return redirect()->to('/')->with('success', 'Recurso registrado con éxito');
        } catch (\Throwable $e) {
            return redirect()->back()->withInput()->with('error', 'Hubo un error: ' . $e->getMessage());
        }
    }
}
