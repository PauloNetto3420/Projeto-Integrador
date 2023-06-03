<?php

namespace App\Models;

use CodeIgniter\Model;

class model_Cad extends Model
{
    protected $table = 'tbl_usuario';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['login', 'email', 'senha', 'nome', 'data_nasc', 'genero','tipo'];

}