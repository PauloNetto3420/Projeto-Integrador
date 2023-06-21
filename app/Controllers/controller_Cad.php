<?php

namespace App\Controllers;

use App\Models\model_Cad;

class controller_Cad extends BaseController
{
    
    public function cadastrar()
    {
        // Carrega o helper de formulários e validação
        helper(['form', 'url']);

        $data[] = "";

        // Verifica se os dados do formulário foram submetidos
        if ($this->request->getMethod() === 'post') {
            // Define as regras de validação para cada campo
            $rules = [
                'login' => 'required|is_unique[tbl_usuario.login]',
                'email' => 'required|valid_email|is_unique[tbl_usuario.email]',
                'senha' => 'required|min_length[6]',
                'nome' => 'required',
                'data_nasc' => 'required',
                'genero' => 'required'
            ];

            // Define as mensagens de erro personalizadas para cada regra
            $errors = [
                'login' => [
                    'required' => 'O campo Login é obrigatório.',
                    'is_unique' => 'Esse Login já está em uso.'
                ],
                'email' => [
                    'required' => 'O campo Email é obrigatório.',
                    'valid_email' => 'Insira um Email válido.',
                    'is_unique' => 'Esse Email já está em uso.'
                ],
                'senha' => [
                    'required' => 'O campo Senha é obrigatório.',
                    'min_length' => 'A senha deve ter pelo menos 6 caracteres.'
                ],
                'nome' => [
                    'required' => 'O campo Nome é obrigatório.'
                ],
                'data_nasc' => [
                    'required' => 'O campo Data de Nascimento é obrigatório.'
                ],
                'genero' => [
                    'required' => 'O campo Gênero é obrigatório.'
                ]
            ];

            // Valida os dados do formulário
            if ($this->validate($rules, $errors)) {
                // Se a validação passar, insere os dados no banco de dados
                $userModel = new model_Cad();
                $userData = [
                    'Login' => $this->request->getPost('login'),
                    'Email' => $this->request->getPost('email'),
                    'Senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
                    'Nome' => $this->request->getPost('nome'),
                    'Data_Nasc' => $this->request->getPost('data_nasc'),
                    'Genero' => $this->request->getPost('genero')
                ];
                $userModel->insert($userData);

                // Redireciona para a página de sucesso ou exibe uma mensagem
                return redirect()->to('home');
            } else {
                // Se a validação falhar, exibe os erros de validação
                $data['validation'] = $this->validator;
            }
        }

        // Carrega a view do formulário de cadastro
        echo view('view_header');
        echo view('view_cadastrar', $data);
    }
}
