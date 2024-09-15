<?php

$host = 'localhost';
$user = 'root';
$pass = ''; // Senha do banco de dados
$db   = 'crud_db'; // Nome do banco de dados

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die('Erro de conexão: ' . mysqli_connect_error());
}

echo 'Conexão bem-sucedida!';
mysqli_close($conn);
