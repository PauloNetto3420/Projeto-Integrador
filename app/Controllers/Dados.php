<?php

namespace App\Controllers;

use App\Models\Model_DAO;
use CodeIgniter\Controller;

class Dados extends BaseController {

    public function index() {
    }

    function addUser(){
        $dao = new Model_DAO();
        $dao->addUser( $this->request->getPost('email'),
                    $this->request->getPost('login'),
                    $this->request->getPost('senha'),
                    $this->request->getPost('nome'),
                    $this->request->getPost('data_nasc'),
                    $this->request->getPost('genero'),
                    $this->request->getPost('url'),
    );

    return $this->formUser();

}

    function formUser(){
        return view('topo') .view('inserir_Usuario');
    }

    
}

