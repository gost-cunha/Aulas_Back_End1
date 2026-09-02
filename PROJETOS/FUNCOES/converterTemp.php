<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Temperatura</title>
</head>

<body>
    <h1>Converter Temperatura</h1>
    <p>Converta temperatura entre Celsius e Fahrenheit.</p>
    <form method="POST">
        <label for="c">Temperatura (°C):</label><br>
        <input type="number" name="c" step="any" required><br>

        <button type="submit">Converter</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $c = $_POST['c'];

    echo converterTemp($c);
}
?>