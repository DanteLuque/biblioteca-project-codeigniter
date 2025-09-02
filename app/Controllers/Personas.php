<?php

namespace App\Controllers;
use App\Models\Persona;

class Personas extends BaseController
{
  public function index(): string
  {
    $data['header'] = view('Layouts/header');
    $data['footer'] = view('Layouts/footer');

    $persona = new Persona();
    $data['personas'] = $persona->listarFullInfo();

    return view('personas/index', $data);
  }

  public function crear(): string
  {
    $data['header'] = view('Layouts/header');
    $data['footer'] = view('Layouts/footer');

    return view('personas/crear', $data);
  }

  public function saveDB()
  {
    $personaModel = new Persona();
    $result = $personaModel->crear([
      'dni' => $this->request->getPost('dni'),
      'apellidos' => $this->request->getPost('nombres'),
      'nombres' => $this->request->getPost('apellidos'),
      'telefono' => $this->request->getPost('telefono'),
      'distrito_id' => $this->request->getPost('distrito'),
      'direccion' => $this->request->getPost('direccion'),
    ]);
    if (!$result) throw new \Exception("Error al crear usuario");

    return redirect()->to('/personas');
  }
}