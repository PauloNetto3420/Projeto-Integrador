<?php

namespace App\Models;

use CodeIgniter\Model;

class model_Cad extends Model
{
    protected $table = 'tbl_usuario';
    protected $primaryKey = 'Id_Usuario';
    protected $allowedFields = ['login', 'email', 'senha', 'nome', 'data_nasc', 'genero','tipo'];

}