<?php

namespace App\Models;

use CodeIgniter\Model;

class model_Cad extends Model
{
    protected $table = 'tbl_usuario';
    protected $primaryKey = 'Id_Usuario';
    protected $allowedFields = ['Login', 'Email', 'Senha', 'Nome', 'Data_Nasc', 'Genero', 'Url_Foto'];

}