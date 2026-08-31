<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>

<body>
    <h1>IMC</h1>
    <p>Veja o IMC de uma pessoa.</p>
    <form method="POST">
        <label for="peso">Peso (kg):</label><br>
        <input type="number" name="peso" required><br>

        <label for="altura">Altura (metros):</label><br>
        <input type="number" name="altura" step="any" required><br>

        <button type="submit">Ver IMC</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    echo imc($peso, $altura);
}
?>