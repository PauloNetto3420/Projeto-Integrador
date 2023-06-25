<?php

namespace App\Controllers;

class Home_controller extends BaseController{

    public function homepage()
    {
        // Carrega a view da página principal
        echo view('view_header').view('view_pagina_inicial').view('view_footer');
        
    }

    public function overwatch(){

        echo view('view_header') . view('view_overwatch2') . view('view_footer');
    }

    public function lol(){
        echo view('view_header') . view('view_lol') . view('view_footer');
    }

    public function rocket(){
        echo view('view_header') . view('view_rocket') . view('view_footer');
    }

    public function fortnite(){
        echo view('view_header') . view('view_fortnite') . view('view_footer');
    }

    public function sobrenos(){
        echo view('view_header') . view('view_sobre_nos') . view('view_footer');
    }
}