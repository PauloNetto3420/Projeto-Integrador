<?php

namespace App\Controllers;

use App\Models\model_Cad;
use App\Models\model_equipe;
use App\Models\model_usuarioEquipe;


class controller_equipe extends BaseController
{
    public function cadastrarEquipe()
    {
        
        if (!session()->get('Id_Usuario')) {
            // Redireciona para a página de login
            return redirect()->to('login');
        }
        
        $usuarioModel = new model_Cad();
        $equipeModel = new model_equipe();
        $usuarioEquipeModel = new model_usuarioEquipe();

        $data[] = "";

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
                'Nome' => 'required|is_unique[tbl_equipe.nome]',
                'Descricao' => 'required',
                'Contato' => 'required',
                'Quantidade' => 'required',
                'Foto' => 'uploaded[Foto]|max_size[Foto,2048]|is_image[Foto]'
            ];

            // Define as mensagens de erro personalizadas para cada regra
            $errors = [
                'Nome' => [
                    'required' => 'O campo Nome da equipe é obrigatório.',
                    'is_unique' => 'Esse nome de equipe ja esta em uso.'
                ],
                'Descricao' => [
                    'required' => 'O campo Descrição da equipe é obrigatório.'
                ],
                'Contato' => [
                    'required' => 'Você precisa pelo menos colocar uma forma de contato'

                ],
                'Quantidade' => [
                    'required' => 'Você precisa espeficar quantas pessoas sua equipe terá'

                ],

                'Foto' => [
                    'uploaded' => 'Falha no upload da foto da equipe.',
                    'max_size' => 'A foto da equipe deve ter no máximo 2MB.',
                    'is_image' => 'A foto da equipe deve ser um arquivo de imagem válido.'
                ]

            ];

            // Valida os dados do formulário
            if ($this->validate($rules, $errors)) {
                $equipeModel = new model_equipe();
                $foto = $this->request->getFile('Foto');

                // Move a foto para o diretório de destino
                $newName = $foto->getRandomName();
                $foto->move(ROOTPATH . 'public/uploads', $newName);

                // Se a validação passar, insere os dados da equipe na tabela 'equipes'
                $equipeData = [
                    'Nome' => $this->request->getPost('Nome'),
                    'Descricao' => $this->request->getPost('Descricao'),
                    'Contato' => $this->request->getPost('Contato'),
                    'Quantidade' => $this->request->getPost('Quantidade'),
                    'Url_Foto' => $newName,
                ];
                $equipeId = $equipeModel->insert($equipeData);


                // Cria o vínculo entre o usuário e a equipe na tabela 'usuario_equipe'
                $usuarioEquipeData = [
                    'Id_Usuario' => $usuarioId,
                    'Id_Equipe' => $equipeId,
                    'Tipo' => 1,
                    'Data_Hora' => date('Y-m-d H:i:s')

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

    public function homeEquipe()
    {
        echo view('view_hubequipes');
    }

    public function sucesso()
    {
        return view('view_sucesso_equipe');
    }

    public function perfil()
    {
        // Obtém o ID da equipe da sessão
        $equipeId = session()->get('Id_Equipe');

        // Crie uma instância do modelo da equipe
        $equipeModel = new model_equipe();

        // Busque os dados da equipe com base no ID
        $equipe = $equipeModel->find($equipeId);

        // Verifique se a equipe foi encontrada
        if ($equipe) {
            $participacaoModel = new model_usuarioEquipe();
            $participantes = $participacaoModel->getParticipantesPorEquipe($equipeId);
            $Tipo = session()->get('Tipo');
            // Carregue a view 'view_perfil_equipe' e passe os dados da equipe para a view
            echo view('view_perfilEquipe', [
                'equipe' => $equipe,
                'participantes' => $participantes,
                'Tipo' => $Tipo
            ]);
        } else {
            // A equipe não foi encontrada, redirecione para uma página de erro ou exiba uma mensagem de erro
            return redirect()->to('pagina_de_erro');
        }
    }

    public function pesquisarEquipes()
    {
        // Obtenha o ID do usuário logado a partir da sessão
        $userId = session()->get('Id_Usuario');

        // Consulte o banco de dados para obter as equipes disponíveis para o usuário entrar
        $equipeModel = new model_equipe();
        $equipes = $equipeModel->getEquipesDisponiveisParaUsuario($userId);

        // Carregue a view responsável por exibir as equipes disponíveis
        echo view('view_pesquisarEquipes', ['equipes' => $equipes]);
    }

    public function gerenciarEquipe()
    {
        $equipeModel = new model_equipe();
        $usuarioEquipeModel = new model_usuarioEquipe();

        // Verifica se o usuário está logado
        if (!session()->get('Id_Usuario')) {
            // Redireciona para a página de login
            return redirect()->to('login');
        }

        $usuarioId = session()->get('Id_Usuario');
        $equipeId = session()->get('Id_Equipe');

        // Verifica se o usuário é o capitão da equipe
        $Tipo = $usuarioEquipeModel->getTipoUsuario($usuarioId, $equipeId);
        if ($Tipo != 1) {
            // Redireciona para outra página, pois apenas o capitão tem acesso
            return redirect()->to('outra_pagina');
        }

        // Obtém a equipe e a lista de jogadores candidatos
        $equipe = $equipeModel->find($equipeId);
        $jogadoresCandidatos = $usuarioEquipeModel->getJogadoresCandidatos($equipeId);

        // Carrega a view de gerenciamento da equipe
        return view('view_gerenciar_equipe', [
            'equipe' => $equipe,
            'jogadoresCandidatos' => $jogadoresCandidatos
        ]);
    }
    

    
}
