<?php

namespace App\Models;

use CodeIgniter\Model;

class model_partida extends Model
{
    protected $table = 'tbl_partida';
    protected $primaryKey = 'Id_Partida';
    protected $allowedFields = ['Tipo_Jogo', 'Qntd_Jogadores', 'Player_1', 'Player_2', 'Player_3', 'Player_4', 'Player_5'];

    public function getPartidasAtivasEquipe($equipeId)
{
    return $this->db->table('tbl_partida.*')
        ->join('tbl_agenda', 'tbl_agenda.id_partida = tbl_partida.id_partida')
        ->where('tbl_partida.id_equipe', $equipeId)
        ->where('tbl_partida.status', 1)
        ->get()
        ->getResultArray();
}
    public function incrementarQuantidadeJogadores($idPartida)
    {
        $this->where('Id_Partida', $idPartida)->set('Qntd_Jogadores', 'Qntd_Jogadores + 1', false)->update();
    }

    public function finalizarPartida($idPartida)
    {
        $this->where('Id_Partida', $idPartida)->set('Status', 0)->update();
    }
}
