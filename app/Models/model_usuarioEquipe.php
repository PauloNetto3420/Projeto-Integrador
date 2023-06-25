<?php

namespace App\Models;

use CodeIgniter\Model;

class model_usuarioEquipe extends Model
{
    protected $table = 'tbl_participacao';
    protected $allowedFields = ['Id_Usuario', 'Id_Equipe', 'Data_Entrada', 'Tipo'];

    public function updateTipo($usuarioId, $equipeId, $tipo)
{
    $builder = $this->db->table('tbl_participacao');
    $builder->set('Tipo', $tipo)
            ->where('Id_Usuario', $usuarioId)
            ->where('Id_Equipe', $equipeId)
            ->update();
}
    
    public function existeVinculoEquipe($usuarioId)
    {
        // Verifica se existe um registro na tabela 'usuario_equipe' com o 'usuario_id' fornecido
        return $this->where('Id_Usuario', $usuarioId)->countAllResults() > 0;
    }



    public function getParticipantesPorEquipe($equipeId)
    {
        $builder = $this->db->table('tbl_participacao');
        $builder->select('tbl_usuario.*, tbl_participacao.Tipo');
        $builder->join('tbl_usuario', 'tbl_usuario.Id_Usuario = tbl_participacao.Id_Usuario');
        $builder->where('tbl_participacao.Id_Equipe', $equipeId);
        $query = $builder->get();
        return $query->getResultArray();
    }
    


    public function getEquipeIdPorUsuario($usuarioId)
    {
        return $this->where('Id_Usuario', $usuarioId)->first()['Id_Equipe'] ?? null;
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
            'Tipo' => 0 // ou qualquer outro status desejado
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
        return $row ? $row->Tipo : null;
    }

    public function getJogadoresCandidatos($equipeId)
    {
        return $this->where('Id_Equipe', $equipeId)
            ->where('Tipo', 0) // Jogadores candidatos (Tipo = 0)
            ->findAll();
    }

    

}
