<?php

// Inclui o arquivo de configuração que contém informações como a conexão com o banco de dados
include '../includes/config.php';

// Inclui o arquivo com funções que contêm a lógica de cadastro de cliente
include '../includes/functions.php'; 

// Verifica se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtém os dados enviados pelo formulário através do método POST
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Chama a função cadastrarUsuarios com os dados obtidos
    if(cadastrarUsuarios($nome, $email,$senha)){
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário";
    }
}

?>

<form method="post" action="cadastrar_usuarios.php">
    Nome: <input type="text" name="nome" required>
    Email: <input type="email" name="email" required>
    Senha: <input type="password" name="senha" required>
    <button type="submit">Cadastrar Usuário</button>
</form>
