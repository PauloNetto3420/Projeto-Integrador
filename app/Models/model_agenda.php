<?php

namespace App\Models;

use CodeIgniter\Model;

class model_agenda extends Model
{
    protected $table = 'tbl_agenda';
    protected $allowedFields = ['Id_Partida', 'Id_Equipe', 'Status'];

    public function getParticipantes($idPartida)
    {
        return $this->select('tbl_usuario.nome, tbl_usuario.email')
            ->join('tbl_usuario', 'tbl_usuario.id_usuario = tbl_agenda.id_equipe')
            ->where('tbl_agenda.id_partida', $idPartida)
            ->where('tbl_agenda.status', 1)
            ->findAll();
    }

    public function findPartidaByEquipe($idPartida, $idEquipe)
    {
        return $this->where('Id_Partida', $idPartida)->where('Id_Equipe', $idEquipe)->first();
    }

}
