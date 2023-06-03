<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipeModel extends Model
{
    protected $table = 'tbl.equipe';
    protected $primaryKey = 'id_equipe';
    protected $allowedFields = ['nome', 'descricao', 'contato', 'foto','quantidade'];
}
