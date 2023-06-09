<?php

namespace App\Controllers;

use App\Models\model_Cad;
use App\Models\model_equipe;
use App\Models\model_usuarioEquipe;


class controller_equipe extends BaseController
{
    public function cadastrarEquipe()
    {
        // Verifica se o usuário está logado
        /*if (!session()->get('logged_in')) {
            // Redireciona para a página de login
            return redirect()->to('login');
        }
        */
        $usuarioModel = new model_Cad();
        $equipeModel = new model_equipe();
        $usuarioEquipeModel = new model_usuarioEquipe();

        $data[]= "";
        
        // Verifica se o usuário já está vinculado a uma equipe
        $usuarioId = session()->get('Id_Usuario');
        if ($usuarioEquipeModel->existeVinculoEquipe($usuarioId)) {
            // O usuário já está em uma equipe, exibe mensagem de erro ou redireciona para outra página
            return redirect()->to('pagina_de_erro');
        }

        // Verifica se os dados do formulário foram submetidos
        if ($this->request->getMethod() === 'post') {
            // Define as regras de validação para cada campo
            $rules = [
                'nome' => 'required|is_unique[tbl_equipe.nome]',
                'descricao' => 'required',
                'contato' => 'required',
                'quantidade' => 'required'
            ];

            // Define as mensagens de erro personalizadas para cada regra
            $errors = [
                'nome' => [
                    'required' => 'O campo Nome da equipe é obrigatório.',
                    'is_unique' => 'Esse nome de equipe ja esta em uso.'
                ],
                'descricao' => [
                    'required' => 'O campo Descrição da equipe é obrigatório.'
                ],
                'contato' =>[ 
                    'required' =>'Você precisa pelo menos colocar uma forma de contato'

                ],
                'quantidade' =>[ 
                    'required' =>'Você precisa espeficar quantas pessoas sua equipe terá'

                ]

            ];

            // Valida os dados do formulário
            if ($this->validate($rules, $errors)) {
                
                // Se a validação passar, insere os dados da equipe na tabela 'equipes'
                $equipeData = [
                    'nome' => $this->request->getPost('nome'),
                    'descricao' => $this->request->getPost('descricao'),
                    'contato' => $this->request->getPost('contato'),
                    'quantidade' => $this->request->getPost('quantidade'),
                    'url_foto' => $this->request->getPost('url_foto')
                ];
                $equipeId = $equipeModel->insert($equipeData);
                
                
                // Cria o vínculo entre o usuário e a equipe na tabela 'usuario_equipe'
                $usuarioEquipeData = [
                    'id_usuario' => $usuarioId,
                    'id_equipe' => $equipeId,
                    'data_hora' => date('Y-m-d H:i:s')
                    
                ];

                
                $usuarioEquipeModel->insert($usuarioEquipeData);

                // Grava o ID da equipe na sessão do usuário
                //session()->set('id_equipe', $equipeId);
                
                // Redireciona para a página de sucesso ou exibe uma mensagem
                return redirect()->to('equipes/sucesso');
                
            } else {
                // Se a validação falhar, exibe os erros de validação
                $data['validation'] = $this->validator;
            }
        }

        // Carrega a view do formulário de cadastro da equipe
        echo view('view_cadastrar_equipe', $data);
    }

    public function homeEquipe(){
        echo view('view_hubequipes');
    }

    public function sucesso()
    {
        return view('view_sucesso_equipe');
    }

    public function perfil()
    {
        // Obtém o ID da equipe da sessão
        $equipeId = session()->get('id_equipe');

        // Crie uma instância do modelo da equipe
        $equipeModel = new model_equipe();

        // Busque os dados da equipe com base no ID
        $equipe = $equipeModel->find($equipeId);

        // Verifique se a equipe foi encontrada
        if ($equipe) {
            $participacaoModel = new model_usuarioEquipe();
            $participantes = $participacaoModel->getParticipantesPorEquipe($equipeId);
            // Carregue a view 'view_perfil_equipe' e passe os dados da equipe para a view
            echo view('view_perfilEquipe', [
                'equipe' => $equipe,
                'participantes' => $participantes
            ]);
        } else {
            // A equipe não foi encontrada, redirecione para uma página de erro ou exiba uma mensagem de erro
            return redirect()->to('pagina_de_erro');
        }
    
}
}
