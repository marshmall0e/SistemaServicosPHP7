<?php

// Inclui o arquivo de configuração que contém informações como a conexão com o banco de dados
include '../includes/config.php';

// Inclui o arquivo com funções que contêm a lógica de cadastro de cliente
include '../includes/functions.php';

// Verifica se o método da requisição é POST (significa que o formulário foi enviado)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
    // Obtém os dados enviados pelo formulário
    $nome = $_POST['nome'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];

    // Chama a função cadastrarCliente e verifica se foi bem-sucedida
    if (cadastrarCliente($nome, $documento, $email)) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente.";
    }
}
?>

<form method="post">
    Nome: <input type="text" name="nome" required>
    Documento: <input type="text" name="documento" required>
    Email: <input type="email" name="email" required>
    <button type="submit">Cadastrar</button>
</form>

<a href="index.php"><button>Início</button></a>