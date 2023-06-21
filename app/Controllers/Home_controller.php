<?php

namespace App\Controllers;

class Home_controller extends BaseController{

    public function homepage()
    {
        // Carrega a view da página principal
        echo view('view_header');
        echo view('view_pagina_inicial');
    }

}