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
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login<br>E entre no sistema de serviços</h1>
            <div class="img">
            <img src="../CSS/chat-bot-animate.svg" alt="Robo animação">
            </div>
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form method="post">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" placeholder="Usuário" name="usuario" required>
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" placeholder="Senha" name="senha" required>
                    </div>
                    <button class="btn-login" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>






