<?php
// Inclui o arquivo de configuração que contém informações como a conexão com o banco de dados
include '../includes/config.php';

// Inclui o arquivo com funções que contêm a lógica de cadastro de equipamentos
include '../includes/functions.php';

// Verifica se o método da requisição é POST (significa que o formulário foi enviado)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Obtém os dados enviados pelo formulário
    $modelo = $_POST['modelo'];
    $fabricante = $_POST['fabricante'];
    $numero_serie = $_POST['numero_serie'];

    // Chama a função cadastrarEquipamento e verifica se foi bem-sucedida
    if (cadastrarEquipamento($modelo, $fabricante, $numero_serie)) {
        echo "Equipamento cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar equipamento.";
    }
}
?>

<form method="post">
    Modelo: <input type="text" name="modelo" required>
    Fabricante: <input type="text" name="fabricante" required>
    Número de Série: <input type="text" name="numero_serie" required>
    <button type="submit">Cadastrar</button>
</form>

<a href="index.php">Início</a>