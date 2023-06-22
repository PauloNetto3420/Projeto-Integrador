<?php

namespace App\Controllers;

use App\Models\model_Cad;

class controller_jogos extends BaseController{

    public function jogo1(){
        // Carrega a view da página principal
        echo view('view_header').view('view_footer');
        
    }

}
