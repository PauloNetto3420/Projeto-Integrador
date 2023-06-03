<?php

namespace App\Controllers;

use App\Models\model_Cad;


class controller_login extends BaseController
{
    public function login()
    {
        // Carrega o helper de formulários e validação
        helper(['form', 'url']);

        // Verifica se os dados do formulário foram submetidos
        if ($this->request->getMethod() === 'post') {
            // Define as regras de validação para cada campo
            $rules = [
                'login' => 'required',
                'senha' => 'required'
            ];

            // Define as mensagens de erro personalizadas para cada regra
            $errors = [
                'login' => [
                    'required' => 'O campo Login ou Email é obrigatório.'
                ],
                'senha' => [
                    'required' => 'O campo Senha é obrigatório.'
                ]
            ];

            // Valida os dados do formulário
            if ($this->validate($rules, $errors)) {
                // Se a validação passar, verifica as credenciais de login
                $login = $this->request->getPost('login');
                $senha = $this->request->getPost('senha');

                // Verifica se o login é um email válido
                if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
                    $userModel = new model_Cad();
                    $user = $userModel->where('email', $login)->first();
                } else {
                    $userModel = new model_Cad();
                    $user = $userModel->where('login', $login)->first();
                }

                // Verifica se o usuário existe e a senha está correta
                if ($user && password_verify($senha, $user['Senha'])) {
                    // Autenticação bem-sucedida, armazene os detalhes do usuário na sessão

                    // Obtenha uma instância da sessão
                    $session = session();

                    // Armazene os dados do usuário na sessão
                    $userData = [
                        'Id_Usuario' => $user['Id_Usuario'],
                        'Login' => $user['Login'],
                        'Nome' => $user['Nome'],
                        'Genero' => $user['Genero'],
                        'Email' => $user['Email'],
                        'Data_Nasc' => $user['Data_Nasc'],
                        // Adicione outros dados do usuário que você deseja armazenar na sessão
                    ];
                    $session->set($userData);
                    // Redireciona para a página principal ou para a página de criação/entrada de equipe
                    return redirect()->to('/home');
                } else {
                    // Credenciais inválidas, exiba uma mensagem de erro
                    $data['error'] = 'Credenciais inválidas. Verifique o login (ou email) e a senha.';
                }
            } else {
                // Se a validação falhar, exibe os erros de validação
                $data['validation'] = $this->validator;
            }
        }

        // Carrega a view do formulário de login
        echo view('view_login');
    }

    public function perfil(){
    $session = session();
    $data['usuario'] = [
        'nome' => $session->get('Nome'),
        'email' => $session->get('Email'),
        'login' => $session->get('Login'),
        'genero' => $session->get('Genero'),
        'data_nasc' => $session->get('Data_Nasc'),
        // Outros dados do perfil do usuário
    ];

    // Carrega a view do perfil do usuário
    echo view('view_perfil', $data);
}

public function atualizarPerfil()
{
    // Carrega o helper de formulários e validação
    helper(['form', 'url']);
    $data[]= "";
    // Verifica se os dados do formulário foram submetidos
    if ($this->request->getMethod() === 'post') {
        // Define as regras de validação para cada campo
        $rules = [
            'nome' => 'required',
            'email' => 'required|valid_email'
            // Outras regras de validação para os campos do perfil
        ];

        // Define as mensagens de erro personalizadas para cada regra
        $errors = [
            'nome' => [
                'required' => 'O campo Nome é obrigatório.'
            ],
            'email' => [
                'required' => 'O campo Email é obrigatório.',
                'valid_email' => 'Insira um Email válido.'
            ]
            // Mensagens de erro personalizadas para outros campos
        ];

        // Valida os dados do formulário
        if ($this->validate($rules, $errors)) {
            // Se a validação passar, atualiza os dados no banco de dados
            $session = session();
            $userModel = new model_Cad();
            $userData = [
                'nome' => $this->request->getPost('nome'),
                'email' => $this->request->getPost('email')
                // Outros campos do perfil
            ];
            // Atualize os dados do perfil no banco de dados usando o ID do usuário
            
            $userModel->update($session->get('Id_Usuario'), $userData);
            // Redireciona para a página de sucesso ou exibe uma mensagem
            return redirect()->to('perfil')->with('success', 'Informações atualizadas com sucesso.');
        } else {
            // Se a validação falhar, exibe os erros de validação
            $data['validation'] = $this->validator;
        }
    }

    // Carrega a view do formulário de edição do perfil
    echo view('view_editar_perfil', $data);
}
}