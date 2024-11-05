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
        echo "<script>alert('Cliente cadastrado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar cliente!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
    <link rel="stylesheet" href="../CSS/cadastrar_cliente.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">
</head>

<body>
    <main>
        <div class="card-login">
            <h1>Cadastro de Cliente</h1>
            <form method="post">
                <div class="textfield">
                    <input type="text" placeholder="Nome" name="nome" required>
                </div>
                <div class="textfield">
                   <input type="text" placeholder="Documento" name="documento" required>
                </div>
                <div class="textfield">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <button type="submit" class="btn-login">Cadastrar</button>
            </form>
            <a href="index.php">Home</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Sistema de Serviços. Todos os direitos reservados.</p>
    </footer>

</body>
</html>


