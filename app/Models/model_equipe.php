<?php

namespace App\Models;

use CodeIgniter\Model;

class model_equipe extends Model
{
    protected $table = 'tbl_equipe';
    protected $primaryKey = 'id_equipe';
    protected $allowedFields = ['nome', 'descricao', 'contato', 'foto','quantidade'];
}
