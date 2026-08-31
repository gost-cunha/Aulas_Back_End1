<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Círculo</title>
</head>

<body>
    <h1>Área Círculo</h1>
    <p>Veja o calculo da área de um círculo.</p>
    <form method="POST">
        <label for="raio">Raio do círculo:</label><br>
        <input type="number" name="raio" required><br>

        <button type="submit">Ver área</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $raio = $_POST['raio'];

    echo areaCirculo($raio);
}
?>