<?php

namespace App\Models;

use CodeIgniter\Model;

class model_equipe extends Model
{
    protected $table = 'tbl_equipe';
    protected $primaryKey = 'Id_Equipe';
    protected $allowedFields = ['Nome', 'Descricao', 'Contato', 'Url_Foto', 'Quantidade'];





    public function getEquipesDisponiveisParaUsuario($userId)
    {
        // Consulte o banco de dados para obter as equipes disponíveis para o usuário entrar
        $db = db_connect();
        $query = $db->table('tbl_equipe')
            ->whereNotIn('Id_Equipe', function ($builder) use ($userId) {
                $builder->select('Id_Equipe')
                    ->from('tbl_participacao')
                    ->where('Id_Usuario', $userId);
            })
            ->get();

        return $query->getResultArray();
    }
}
