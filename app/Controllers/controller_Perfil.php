<?php

namespace App\Controllers;

use App\Models\UserModel;

class controller_Perfil extends BaseController
{
    public function perfil()
    {
        // Verificar se o usuário está autenticado
        if (!logged_in()) {
            // Redirecionar para a página de login ou exibir uma mensagem de erro
            return redirect()->to('login');
        }

        // Carregar o modelo de usuário
        $userModel = new model_Cad();

        // Obter os dados do usuário atual
        $userId = user_id();
        $user = $userModel->find($userId);

        // Carregar a view do perfil e passar os dados do usuário
        return view('perfil', ['user' => $user]);
    }

    public function atualizarPerfil()
    {
        // Verificar se o usuário está autenticado
        if (!logged_in()) {
            // Redirecionar para a página de login ou exibir uma mensagem de erro
            return redirect()->to('login');
        }

        // Carregar o modelo de usuário
        $userModel = new UserModel();

        // Obter os dados do usuário atual
        $userId = user_id();
        $user = $userModel->find($userId);

        // Validar os dados do formulário
        $rules = [
            'nome' => 'required',
            'data_nasc' => 'required',
            'login' => 'required',
            'email' => 'required|valid_email',
            'genero' => 'required'
        ];

        if (!$this->validate($rules)) {
            // Se a validação falhar, exibir os erros de validação
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Atualizar os dados do usuário
        $user->nome = $this->request->getPost('nome');
        $user->data_nasc = $this->request->getPost('data_nasc');
        $user->login = $this->request->getPost('login');
        $user->email = $this->request->getPost('email');
        $user->genero = $this->request->getPost('genero');

        // Verificar se foi enviado um arquivo de foto
        $foto = $this->request->getFile('foto');
        if ($foto->isValid() && !$foto->hasMoved()) {
            // Configurar as opções de upload de foto
            $uploadOptions = [
                'path' => './public/uploads',
                'randomize' => true,
                'overwrite' => true,
                'max_size' => 1024, // tamanho máximo em kilobytes
                'allowed_types' => 'jpg|jpeg|png'
            ];

            // Realizar o upload da foto e atualizar o caminho no banco de dados
            $foto->move(WRITEPATH . 'uploads', $foto->getRandomName());
            $user->foto = $foto->getName();
        }

        // Salvar as alterações no banco de dados
        $userModel->save($user);

        // Redirecionar de volta para a página do perfil com uma mensagem de sucesso
        return redirect()->to('meu-perfil')->with('success', 'Perfil atualizado com sucesso.');
    }
}
