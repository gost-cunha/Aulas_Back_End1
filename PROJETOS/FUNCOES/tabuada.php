<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <h1>Tabuada</h1>
    <p>Veja a tabuada de um número de forma prática.</p>
    <form method="POST">
        <label for="num">Número:</label><br>
        <input type="number" name="num" required><br>

        <button type="submit">Ver tabuada</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num = $_POST['num'];

    for ($i = 0; $i <= 9; $i++) {
        echo tabuada($num)[$i] . '<br>';
    }
}
?>