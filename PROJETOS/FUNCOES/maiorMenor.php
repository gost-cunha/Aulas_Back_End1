<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior e Menor</title>
</head>

<body>
    <h1>Maior e Menor</h1>
    <p>Veja o maior e o menor número.</p>
    <form method="POST">
        <label for="num1">Número 1:</label><br>
        <input type="number" name="num1" required><br>

        <label for="num2">Número 2:</label><br>
        <input type="number" name="num2" required><br>

        <button type="submit">Checkar</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $numeros = [$num1, $num2];

    echo "Maior: " . maiorMenor($numeros)[0] . " | Menor: " . maiorMenor($numeros)[1];
}
?>