<?php

// Definindo as configurações de conexão com o banco de dados

$host = 'localhost';
$db = 'sistema_servicos';
$user = 'root';
$pass = '';

try {

// Tentativa de criar uma nova conexão PDO com os parâmetros fornecidos

    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// Configurando o modo de erro para exceções
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Se ocorrer um erro na conexão, capturamos a exceção e mostramos uma mensagem
    echo "Erro na conexão: " . $e->getMessage();
}
?>
