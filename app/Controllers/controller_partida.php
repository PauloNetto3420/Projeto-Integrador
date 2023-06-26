<?php

namespace App\Controllers;

use App\Models\model_agenda;
use App\Models\model_Cad;
use App\Models\model_partida;


class controller_partida extends BaseController

{

    function ver()
    {

        echo view('view_header').view('view_criar_partida').view('view_footer');

    }

    public function criarPartida()
    {
        // Verifica se o usuário está logado
        if (!session()->get('Id_Usuario')) {
            // Redireciona para a página de login
            return redirect()->to('login');
        }

        // Obtém os dados da partida enviados pelo formulário
        $tipoJogo = $this->request->getPost('Tipo_Jogo');

        // Cria um código aleatório para a partida

        // Define a quantidade inicial de jogadores como zero
        $quantidadeJogadores = 0;

        // Insere a nova partida no banco de dados
        $partidaModel = new model_partida();
        $partidaId = $partidaModel->insert([
            'Tipo_Jogo' => $tipoJogo,
            'Qntd_Jogadores' => $quantidadeJogadores
        ]);

        // Cria a relação entre a equipe e a partida
        $partidaEquipeModel = new model_agenda();
        $partidaEquipeModel->insert([
            'Id_Equipe' => session()->get('Id_Equipe'),
            'Id_Partida' => $partidaId,
            'Status' => 1 // Define o status como ativo (1)
        ]);

        // Redireciona de volta para a página de partidas
        return redirect()->to('partidas/listar');
    }


    public function listarPartidas()
    {
        // Obtém o ID da equipe do usuário
        $equipeId = session()->get('Id_Equipe');

        // Obtém as partidas ativas da equipe do usuário
        $partidaEquipeModel = new model_agenda();
        $partidas = $partidaEquipeModel->getPartidasAtivasEquipe($equipeId);

        // Carrega a view header
        $header = view('view_header');

        // Carrega a view footer
        $footer = view('view_footer');

        // Carrega a view da lista de partidas, estendendo com header e footer
        $content = view('view_listar_partidas', ['partidas' => $partidas]);

        // Retorna a view completa, com header, content e footer
        return $header . $content . $footer;
    }



    public function entrarPartida($idPartida)
    {
        // Verifica se o usuário está logado
        if (!session()->get('Id_Usuario')) {
            // Redireciona para a página de login
            return redirect()->to('login');
        }

        // Obtém a partida pelo ID
        $partidaModel = new model_partida();
        $partida = $partidaModel->find($idPartida);

        // Verifica se a partida existe e tem vagas disponíveis
        if ($partida && $partida['Qntd_Jogadores'] < 5) {
            // Incrementa a quantidade de jogadores da partida
            $partidaModel->update($idPartida, ['Qntd_Jogadores' => $partida['Qntd_Jogadores'] + 1]);

            // Redireciona para a página de sucesso ou outra ação desejada
            return redirect()->to('/partidas/visualizar/' . $idPartida);
        } else {
            // Redireciona para a página de erro ou outra ação desejada
            return redirect()->to('partidas/listar');
        }
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

        // Gerar código aleatório de 15 caracteres
        $codigo = $this->generateRandomCode(25);

        // Passar o header e o footer para a view
        $header = view('view_header');
        $content = view('view_visualizar_partida', [
            'partida' => $partida,
            'participantes' => $participantes,
            'codigo' => $codigo
        ]);
        $footer = view('view_footer');

        return view('view_header') . view('view_visualizar_partida', ['partida' => $partida,'participantes' => $participantes, 'codigo' => $codigo]). view('view_footer');
    
    }

    private function generateRandomCode($length)
    {
        $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
        $str = '';

        $max = mb_strlen($keyspace, '8bit') - 1;
        for ($i = 0; $i < $length; ++$i) {
            $index = random_int(0, $max);
            $str .= $keyspace[$index];
        }

        return $str;
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
}
