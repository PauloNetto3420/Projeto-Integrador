<?php

namespace App\Controllers;

use App\Models\model_agenda;
use App\Models\model_partida;


class controller_partida extends BaseController

{

    function viewP(){

        echo view('view_header').view('view_criar_partida').view('view_footer');

    }

    public function criar() {
    // Obtenha os dados enviados pelo formulário
    $jogo = $this->request->getPost('Tipo_Jogo');
    $quantidadeJogadores = $this->request->getPost('Qntd_Jogadores');

    // Crie uma instância do Model de partidas
    $partidaModel = new model_partida();

    // Insira a partida no banco de dados
    $partidaData = [
        'Tipo_Jogo' => $jogo,
        'Qntd_Jogadores' => $quantidadeJogadores
    ];
    $partidaId = $partidaModel->insert($partidaData);

    // Obtenha o ID da equipe
    $equipeId = $this->getEquipeId();

    // Crie uma instância do Model de agenda
    $agendaModel = new model_agenda();

    // Insira o registro na tabela de agenda
    $agendaData = [
        'Id_Partida' => $partidaId,
        'Id_Equipe' => $equipeId,
        'Status' => 1 // Status aberto (1)
    ];
    $agendaModel->insert($agendaData);

    // Redirecione para uma página de sucesso ou exiba uma mensagem de sucesso
    return redirect()->to(base_url('public/partida/sucesso'));

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
