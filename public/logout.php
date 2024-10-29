<?php
// Inicia a sessão ou retoma uma sessão existente
session_start();

// Destrói todas as variáveis de sessão e encerra a sessão
session_destroy();

// Redireciona o usuário para a página de login
header('Location: login.php');

// Encerra a execução do script para garantir que nada mais seja executado
exit;
?>
