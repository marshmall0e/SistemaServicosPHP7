<?php
// Inclui o arquivo de configuração, que geralmente contém a conexão com o banco de dados
include '../includes/config.php';

// Verificação de conexão com o banco de dados
if (!$pdo) {
    die("Erro na conexão com o banco de dados: " . $pdo->errorInfo());
}

// Executa uma consulta SQL para selecionar os dados das ordens de serviço, clientes e equipamentos
$stmt = $pdo->query("SELECT os.id, c.nome AS cliente, e.modelo AS equipamento, os.status, os.data_criacao 
                     FROM ordens_servico os
                     JOIN clientes c ON os.cliente_id = c.id 
                     JOIN equipamentos e ON os.equipamento_id = e.id");

// Verificar se a consulta foi bem-sucedida
if (!$stmt) {
    die("Erro na consulta SQL: " . implode(", ", $pdo->errorInfo()));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Ordens de Serviço</title>
    <link rel="stylesheet" href="../CSS/listar_os.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">
</head>

<body>

    <section class="content">
        <h1>Listagem de Ordens de Serviço</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Equipamento</th>
                    <th>Status</th>
                    <th>Data Criação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Loop para buscar e exibir cada linha de resultado da consulta
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['cliente']}</td>
                                <td>{$row['equipamento']}</td>
                                <td>{$row['status']}</td>
                                <td>{$row['data_criacao']}</td>
                              </tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="index.php" class="btn-sair">Sair</a>
    </section>
</body>
</html>
