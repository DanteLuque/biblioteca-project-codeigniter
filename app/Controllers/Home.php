<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['header'] = view('Layouts/header');
        $data['footer'] = view('Layouts/footer');

        return view('welcome', $data);
    }

    public function test(): string
    {
        return view('test');
    }
}
