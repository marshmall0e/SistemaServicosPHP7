<?php

// Inclui o arquivo de configuração, que geralmente contém a conexão com o banco de dados
include '../includes/config.php';

// Executa uma consulta SQL para selecionar os dados das ordens de serviço, clientes e equipamentos
$stmt = $pdo->query("SELECT os.id, c.nome AS cliente, e.modelo AS equipamento, os.status, os.data_criacao FROM ordens_servico os 
                     JOIN clientes c ON os.cliente_id = c.id 
                     JOIN equipamentos e ON os.equipamento_id = e.id");

// Inicia a tabela HTML para exibir os resultados
echo "<table border='1'>";
// Cria o cabeçalho da tabela
echo "<tr><th>ID</th><th>Cliente</th><th>Equipamento</th><th>Status</th><th>Data Criação</th></tr>";

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

echo "</table>";// Finaliza a tabela HTML

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Ordens de Serviços</title>
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">
</head>

<body>
  
  <footer> 
     <a href="index.php">Início</a>
  </footer>

</body>
</html>

