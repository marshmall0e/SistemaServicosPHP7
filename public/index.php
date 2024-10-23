<?php
// Inicia a sessão para gerenciar o estado do usuário
session_start(); 

// Se o usuário não estiver autenticado, redireciona para a página de login
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit; // Finaliza o script para garantir que nenhuma outra parte do código seja executada
}
?>

<h1>Bem-vindo ao Sistema de Serviços</h1>
<a href="cadastrar_cliente.php">Cadastrar Cliente</a>
<a href="cadastrar_equipamento.php">Cadastrar Equipamento</a>
<a href="cadastrar_os.php">Cadastrar Ordem de Serviço</a>
<a href="listar_os.php">Listar Ordens de Serviço</a>
<a href="logout.php">Sair</a>
