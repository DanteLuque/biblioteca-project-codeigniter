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

    public function editar($id = null)
    {
        $libro = new Libro();
        $datosLibro = $libro->where('id', $id)->first();

        if (!$datosLibro) {
            return $this->response->redirect(base_url('libros'));
        } else {
            $data['header'] = view('Layouts/header');
            $data['footer'] = view('Layouts/footer');
            $data['libro'] = $datosLibro;

            return view('libros/editar', $data);
        }

    }

    //Recibe datos desde la view y guarda en DB
    public function saveDB()
    {
        $libro = new Libro();

        $nombre = $this->request->getVar('nombre'); //name definido en los inputs

        if ($imagen = $this->request->getFile('imagen')) {
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

    public function deleteDB($id = null)
    {
        $libro = new Libro();

        $datosLibro = $libro->where('id', $id)->first();

        if ($datosLibro['imagen'] != '' && $datosLibro['imagen'] != null) {
            $rutaImagen = '../public/uploads/' . $datosLibro['imagen'];
            if (file_exists($rutaImagen))
                unlink($rutaImagen); //eliminando archivo fisico del servidor
        }

        $libro->where('id', $id)->delete($id);

        return $this->response->redirect(base_url('libros'));
    }

    public function updateDB($id = null)
    {
        $libro = new Libro();
        $datosLibro = $libro->where('id', $id)->first();
        $nombre = $this->request->getVar('nombre');

        if ($imagen = $this->request->getFile('imagen')) {
            $newNameImage = $imagen->getRandomName();
            $imagen->move('../public/uploads/', $newNameImage);

            $newData = [
                'nombre' => $nombre,
                'imagen' => $newNameImage
            ];

            if ($datosLibro['imagen'] != '' && $datosLibro['imagen'] != null) {
                $rutaImagen = '../public/uploads/' . $datosLibro['imagen'];
                if (file_exists($rutaImagen))
                    unlink($rutaImagen);
            }

            $libro->update($id, $newData);
            return $this->response->redirect(base_url('libros'));

        }
    }

}