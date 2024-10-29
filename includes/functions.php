<?php

// Inicia a sessão. Isso é importante para gerenciar informações do usuário ao longo do site.

session_start();

// Função para cadastrar um cliente
function cadastrarCliente($nome, $documento, $email) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO clientes (nome, documento, email) VALUES (?, ?, ?)");
    return $stmt->execute([$nome, $documento, $email]);
}

// Função para cadastrar um equipamento
function cadastrarEquipamento($modelo, $fabricante, $numero_serie) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO equipamentos (modelo, fabricante, numero_serie) VALUES (?, ?, ?)");
    return $stmt->execute([$modelo, $fabricante, $numero_serie]);
}

// Função para cadastrar uma ordem de serviço
function cadastrarOrdemServico($cliente_id, $equipamento_id, $status) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO ordens_servico (cliente_id, equipamento_id, status) VALUES (?, ?, ?)");
    return $stmt->execute([$cliente_id, $equipamento_id, $status]);
}
?>
