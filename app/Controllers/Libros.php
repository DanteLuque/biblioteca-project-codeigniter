<?php

namespace App\Controllers;
use App\Models\Libro;

class Libros extends BaseController
{
    public function index(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        $libro = new Libro();
        $data['libros'] = $libro->orderBy('id', 'ASC')->findAll();


        return view('libros/listar', $data);
    }

    public function crear(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        return view('libros/crear', $data);
    }

    public function editar(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        return view('libros/editar', $data);
    }

    //Recibe datos desde la view y guarda en DB
    public function saveDB(){
        $libro = new Libro();
        
        $nombre = $this->request->getVar('nombre'); //name definido en los inputs

        if($imagen = $this->request->getFile('imagen')){
            $newNameImage = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $newNameImage); //move() creará esta carpeta y archivo

            $registro = [
                'nombre' => $nombre,
                'imagen' => $newNameImage
            ];

            $libro->insert($registro);
            return $this->response->redirect(base_url('libros'));
        }
    }
}