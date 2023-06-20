<?php

namespace App\Models;

use CodeIgniter\Model;

class model_partida extends Model
{
    protected $table = 'tbl_partida';
    protected $primaryKey = 'Id_Partida';
    protected $allowedFields = ['Tipo_Jogo', 'Qntd_Jogadores'];
}
