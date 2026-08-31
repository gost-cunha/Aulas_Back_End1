<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média 3 números</title>
</head>

<body>
    <h1>Média 3 números</h1>
    <p>Veja a média de 3 números.</p>
    <form method="POST">
        <label for="num1">Número 1:</label><br>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label><br>
        <input type="number" name="num2" required><br>

        <label for="num3">Número 3:</label><br>
        <input type="number" name="num3" required><br>

        <button type="submit">Ver média</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    echo media3Num($num1, $num2, $num3);
}
?>