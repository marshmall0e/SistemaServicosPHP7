<<<<<<< HEAD
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de equipamentos</title>
    <link rel="stylesheet" href="../CSS/cadastrar_equipamento.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">
</head>

<body>
    <main>
        <div class="card-login">
            <h1>Cadastro de Equipamentos</h1>
            <form method="post">
                <div class="textfield">
                    <input type="text" placeholder="Modelo" name="modelo" required>
                </div>
                <div class="textfield">
                    <input type="text" placeholder="Fabricante" name="fabricante" required>
                </div>
                <div class="textfield">
                    <input type="number" placeholder="Número de Série" name="numero" required>
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
=======
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de equipamentos</title>
    <link rel="stylesheet" href="../CSS/cadastrar_equipamento.css">
    <link rel="shortcut icon" href="https://shownet.showtecnologia.com/shownet/newapp/media/img/favicon.png">
</head>

<body>
    <main>
        <div class="card-login">
            <h1>Cadastro de Equipamentos</h1>
            <form method="post">
                <div class="textfield">
                    <input type="text" placeholder="Modelo" name="modelo" required>
                </div>
                <div class="textfield">
                    <input type="text" placeholder="Fabricante" name="fabricante" required>
                </div>
                <div class="textfield">
                    <input type="number" placeholder="Número de Série" name="numero" required>
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
>>>>>>> 8e5d7a628e4eb76d111f91e1e98246232bc01760
