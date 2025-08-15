<?php

namespace App\Controllers;

class Libros extends BaseController
{
    public function index(): string
    {
        // Logic to list books would go here
        return view('libros/listar');
    }
}