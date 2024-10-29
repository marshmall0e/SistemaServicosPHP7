<?php
// Inicia a sessão para gerenciar o estado do usuário
session_start(); 

// Se o usuário não estiver autenticado, redireciona para a página de login
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit; // Finaliza o script para garantir que nenhuma outra parte do código seja executada
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Sistema de Serviços</title>
    <link rel="stylesheet" href="../CSS/home.css">
</head>

<body>
    <header>
        <div class="home-page">
            <h1>Bem-vindo ao Sistema de Serviços</h1>
        </div>
    </header>

    <main>
        <div class="card">
            <h5 class="card-title">Cadastrar de Clientes</h5>
            <p class="card-text">Clique aqui para cadastrar um novo cliente no sistema.</p>
            <a href="cadastrar_cliente.php" class="btn">Cadastrar</a>
        </div>

        <div class="card">
            <h5 class="card-title">Cadastrar Equipamentos</h5>
            <p class="card-text">Clique aqui para cadastrar um novo equipamento no sistema.</p>
            <a href="cadastrar_equipamento.php" class="btn">Cadastrar</a>
        </div>

        <div class="card">
            <h5 class="card-title">Cadastrar Ordem de Serviço</h5>
            <p class="card-text">Clique aqui para cadastrar uma ordem de serviço no sistema.</p>
            <a href="cadastrar_os.php" class="btn">Cadastrar</a>
        </div>

        <div class="card">
            <h5 class="card-title">Listagem de Ordem de Serviço</h5>
            <p class="card-text">Clique aqui para visualizar a lista de ordens de serviço dos equipamentos.</p>
            <a href="listar_os.php" class="btn">Validar</a>
        </div>

        <div class="card">
            <a href="logout.php" class="btn">Sair</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Sistema de Serviços. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


