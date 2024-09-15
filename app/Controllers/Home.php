<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();
        $dados = $userModel->getUsers();

        echo view('layout/header');
        echo view('layout/content', ['users' => $dados]);
        echo view('layout/footer');
        
        return '';
    }

    public function add(): string
    {

        echo view('layout/header');
        echo view('layout/add');
        echo view('layout/footer');
        
        
        return "";
    }

    

    public function addUser()
    {
        $userModel = new UserModel();
        // Captura os dados enviados no POST
        $data = [
            'name'  => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
        ];

        $userModel->save($data);

        return redirect()->to('/')->with('success', 'Usuário adicionado com sucesso!');
    }

    
    public function edit($id): string
    {
        $userModel = new UserModel();
        $data['user'] = $userModel->find($id);

        if (empty($data['user'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Usuário não encontrado');
        }

        echo view('layout/header');
        echo view('layout/edit', $data);  // Passa os dados do usuário para a view
        echo view('layout/footer');
        
        return '';
    }

    public function edituser($id)
    {
    $userModel = new UserModel();
    
    // Coletar os dados do formulário
    $data = [
        'id'    => $id, // Inclua o ID para garantir que ele será atualizado
        'name'  => $this->request->getPost('name'),
        'email' => $this->request->getPost('email'),
    ];

    // Salvar os dados atualizados
    if ($userModel->save($data)) {
        return redirect()->to('/')->with('success', 'Usuário atualizado com sucesso!');
    } else {
        return redirect()->back()->with('error', 'Erro ao atualizar o usuário.');
    }
    }

    public function deletar($id)
{
    $userModel = new UserModel();

    // Verifica se o usuário existe
    $user = $userModel->find($id);
    if ($user) {
        // Deleta o usuário passando o ID
        $userModel->delete($id);

        return redirect()->to('/')->with('success', 'Usuário deletado com sucesso!');
    } else {
        return redirect()->to('/')->with('error', 'Usuário não encontrado.');
    }
}



}
