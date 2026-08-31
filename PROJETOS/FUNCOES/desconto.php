<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desconto</title>
</head>

<body>
    <h1>Desconto</h1>
    <p>Veja um desconto aplicado em % para um preço/valor.</p>
    <form method="POST">
        <label for="preco">Preço:</label><br>
        <input type="number" name="preco" required><br>

        <label for="desconto">Desconto (%):</label><br>
        <input type="number" name="desconto" min="0" max="100" required><br>

        <button type="submit">Aplicar desconto</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $preco = $_POST['preco'];
    $desconto = $_POST['desconto'];

    echo desconto($preco, $desconto);
}
?>