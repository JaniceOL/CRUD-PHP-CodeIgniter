<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';  // Nome da tabela
    protected $primaryKey = 'id'; // A coluna da chave primária

    // Os campos que podem ser manipulados diretamente
    protected $allowedFields = ['name', 'email'];

    // Retorna registros como arrays
    protected $returnType = 'array';

    // Validações para o model (opcional)
    protected $validationRules = [
        'name'  => 'required|min_length[3]|max_length[255]',
        'email' => 'required|valid_email|max_length[255]',
    ];

    // Método para buscar todos os usuários
    public function getUsers()
    {
        $result = $this->findAll();  // Busca todos os registros da tabela
        if ($result === false || empty($result)) {
            log_message('error', 'Falha ao buscar usuários ou nenhum usuário encontrado.');
            return [];
        }
        return $result;
    }

    public function add($data)
    {
        
        return $this-> save($data);
    }

    // Método para adicionar usuários
   /* public function add($data)
    {
        // Valida os dados e tenta salvá-los
        if ($this->save($data)) {
            return true;
        } else {
            log_message('error', 'Falha ao adicionar usuário.');
            return false;
        }
    }*/
      
}

