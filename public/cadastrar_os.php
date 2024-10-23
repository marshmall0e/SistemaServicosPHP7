<?php
include '../includes/config.php';
include '../includes/functions.php';

// Verifica se o método da requisição é POST (significa que o formulário foi enviado)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtém os dados enviados pelo formulário
    $cliente_id = $_POST['cliente_id'];
    $equipamento_id = $_POST['equipamento_id'];
    $status = $_POST['status'];

    // Chama a função cadastrarOrdemServico e verifica se foi bem-sucedida
    if (cadastrarOrdemServico($cliente_id, $equipamento_id, $status)) {
        echo "Ordem de Serviço cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar Ordem de Serviço.";
    }
}
?>

<form method="post">
    Cliente ID: <input type="number" name="cliente_id" required>
    Equipamento ID: <input type="number" name="equipamento_id" required>
    Status: <input type="text" name="status" required>
    <button type="submit">Cadastrar Ordem de Serviço</button>
</form>

<a href="index.php">Início</a>