<?php

namespace App\Models;

use CodeIgniter\Model;

class model_agenda extends Model
{
    protected $table = 'tbl_agenda';
    protected $allowedFields = ['Id_Partida', 'Id_Equipe', 'Status'];
}
