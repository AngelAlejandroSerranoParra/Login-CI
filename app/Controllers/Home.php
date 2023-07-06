<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
            return view('login');
        }

        public function login()
        {
            $NU = $this->request->getPost('NU');
            $CON = $this->request->getPost('CON');

            // Validar nombre de usuario y contraseña
            if ($NU == 'Alex' && $CON == '12345') {
                return redirect()->to('home/inicio');
            } else {
                return redirect()->to('/');
            }
        }

        public function inicio()
        {
            return view('inicio');
        }

    
}
