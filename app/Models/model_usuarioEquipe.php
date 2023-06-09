<?php

namespace App\Models;

use CodeIgniter\Model;

class model_usuarioEquipe extends Model
{
    protected $table = 'tbl_participacao';
    protected $allowedFields = ['id_usuario', 'id_equipe', 'data_entrada'];
    public function existeVinculoEquipe($usuarioId)
    {
        // Verifica se existe um registro na tabela 'usuario_equipe' com o 'usuario_id' fornecido
        return $this->where('id_usuario', $usuarioId)->countAllResults() > 0;
    }

    

    public function getParticipantesPorEquipe($equipeId)
    {
    // Consulta para obter os participantes da equipe com base no ID da equipe
    $this->select('tbl_usuario.*')
        ->join('tbl_usuario', 'tbl_usuario.id_usuario = tbl_participacao.id_usuario')
        ->where('tbl_participacao.id_equipe', $equipeId);

    return $this->findAll();
    }


    public function getEquipeIdPorUsuario($usuarioId)
    {
        return $this->where('id_usuario', $usuarioId)->first()['id_equipe'] ?? null;
    }

}
