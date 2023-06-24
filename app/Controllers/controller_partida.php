<?php

namespace App\Controllers;

use App\Models\model_agenda;
use App\Models\model_Cad;
use App\Models\model_partida;


class controller_partida extends BaseController

{

    function viewP()
    {

        echo view('view_criar_partida');
    }

    public function listarPartidas()
    {
        $partidaModel = new model_partida();
        $partidas = $partidaModel->getPartidasDisponiveis();

        return view('view_listar_partidas', ['partidas' => $partidas]);
    }

    public function entrarPartida($idPartida)
    {
        $partidaModel = new model_partida();
        $partida = $partidaModel->find($idPartida);

        if (!$partida) {
            return redirect()->back()->with('error', 'Partida não encontrada.');
        }

        $equipePartidaModel = new model_agenda();
        $equipePartida = $equipePartidaModel->findPartidaByEquipe($idPartida, session()->get('Id_Equipe'));

        if ($equipePartida) {
            return redirect()->back()->with('error', 'Sua equipe já está participando dessa partida.');
        }

        $partidaModel->incrementarQuantidadeJogadores($idPartida);

        $data = [
            'Id_Equipe' => session()->get('Id_Equipe'),
            'Id_Partida' => $idPartida,
            'Status' => 1
        ];

        $equipePartidaModel->insert($data);

        return redirect()->to('/partida/visualizar/' . $idPartida);
    }

    public function visualizarPartida($idPartida)
    {
        $partidaModel = new model_partida();
        $partida = $partidaModel->find($idPartida);

        if (!$partida) {
            return redirect()->back()->with('error', 'Partida não encontrada.');
        }

        $equipePartidaModel = new model_agenda();
        $participantes = $equipePartidaModel->getParticipantes($idPartida);

        return view('view_visualizar_partida', ['partida' => $partida, 'participantes' => $participantes]);
    }

    public function finalizarPartida($idPartida)
    {
        $partidaModel = new model_partida();
        $partida = $partidaModel->find($idPartida);

        if (!$partida) {
            return redirect()->back()->with('error', 'Partida não encontrada.');
        }

        if ($partida['id_equipe'] != $this->session->get('Id_Equipe')) {
            return redirect()->back()->with('error', 'Você não tem permissão para finalizar essa partida.');
        }

        $partidaModel->finalizarPartida($idPartida);

        return redirect()->back()->with('success', 'Partida finalizada com sucesso.');
    }

    protected function getEquipeId()
    {
        // Verifique se o ID da equipe está presente na sessão
        if (session()->has('Id_Equipe')) {
            return session()->get('Id_Equipe');
        }

        // Caso contrário, redirecione para a página de erro ou faça o tratamento adequado
        return redirect()->to('pagina_de_erro');
    }
    public function ver()
    {
        echo view('view_visualizar_Partida');
    }

}