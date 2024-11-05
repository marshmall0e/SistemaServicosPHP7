
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
        echo "<script>alert('Ordem de serviço cadastrada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar Ordem de Serviço');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Ordem de Serviços</title>
    <link rel="stylesheet" href="../CSS/cadastrar_os.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">
</head>
<body>

<body>
    <main>
        <div class="card-login">
            <h1>Cadastro de O.S.</h1>
            <form method="post">
                <div class="textfield">
                    <input type="number" placeholder="Cliente ID" name="cliente_id" required>
                </div>
                <div class="textfield">
                    <input type="number" placeholder="ID/Série" name="equipamento_id" required>
                </div>
                <div class="textfield">
                    <input type="text" placeholder="Status" name="status" required>
                    <button type="submit" class="btn-login">Cadastrar O.S.</button>
                </div>
            </form>
            <a href="index.php">Home</a>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Sistema de Serviços. Todos os direitos reservados.</p>
    </footer>

</body>
</html>


