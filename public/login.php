<?php

// Inicia a sessão, permitindo o uso de variáveis de sessão
session_start();
// Verifica se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura os dados enviados pelo formulário de login
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se o usuário e a senha são iguais aos valores esperados (exemplo simples)
    if ($usuario === 'admin' && $senha === 'senha') { 
        // Se os dados estiverem corretos, define uma variável de sessão para indicar que o usuário está logado
        $_SESSION['loggedin'] = true;
        header('Location: index.php');// Redireciona o usuário para a página inicial (index.php)
        exit;// Encerra o script para garantir que nada mais seja executado
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>

<form method="post">
    Usuário: <input type="text" name="usuario" required>
    Senha: <input type="password" name="senha" required>
    <button type="submit">Login</button>
</form>

<a href="cadastrar_usuarios.php"><button>Criar Cadastro</button></a>
