<?php

namespace App\Models;

use CodeIgniter\Model;

class model_partida extends Model
{
    protected $table = 'tbl_partida';
    protected $primaryKey = 'Id_Partida';
    protected $allowedFields = ['Tipo_Jogo', 'Qntd_Jogadores'];

    public function getPartidasAtivas()
    {
        // Retorna a lista de partidas ativas
        return $this->where('Qntd_Jogadores <', 5)->findAll();
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
