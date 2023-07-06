<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['texto'] = "Hola, este es un texto enviado desde el controlador";
        return view('Hola', $data);
    }
}
