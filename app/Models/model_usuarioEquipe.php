<?php

namespace App\Models;

use CodeIgniter\Model;

class model_usuarioEquipe extends Model
{
    protected $table = 'tbl_participacao';
    protected $allowedFields = ['Id_Usuario', 'Id_Equipe', 'Data_Entrada', 'Tipo'];

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
        return $this->where('id_usuario', $usuarioId)->first()['Id_Equipe'] ?? null;
    }

    public function isUsuarioInEquipe($userId)
    {
        // Verifique se o usuário está em uma equipe
        $db = db_connect();
        $query = $db->table('tbl_participacao')
            ->where('id_usuario', $userId)
            ->countAllResults();

        return ($query > 0);
    }

    public function solicitarEntradaEquipe($userId, $equipeId)
    {
        // Registre a solicitação de entrada do usuário na equipe
        $data = [
            'Id_Usuario' => $userId,
            'Id_Equipe' => $equipeId,
            'Tipo' => '0' // ou qualquer outro status desejado
        ];

        $db = db_connect();
        $db->table('tbl_participacao')->insert($data);
    }

    public function getTipoUsuario($usuarioId, $equipeId)
    {
        $row = $this->where('Id_Usuario', $usuarioId)
            ->where('Id_Equipe', $equipeId)
            ->select('Tipo')
            ->get()
            ->getFirstRow();
        return $row ? $row->Tipo : 1;
    }

    public function getJogadoresCandidatos($equipeId)
    {
        return $this->where('Id_Equipe', $equipeId)
            ->where('Tipo', 0) // Jogadores candidatos (Tipo = 0)
            ->findAll();
    }

}
