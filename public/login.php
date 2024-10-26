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

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/styleLogin.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">

</head>

<body>
    <main>
        <div class="tela-login">
            <h1>Login</h1>
            <form method="post">
                <input type="text" placeholder="Login" name="usuario" required>
                <br><br>
                <input type="password" placeholder="Senha" name="senha" required>
                <br><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </main>

</body>
</html>





