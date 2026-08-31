<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>

<body>
    <h1>Fatorial</h1>
    <p>Veja o fatorial de um número.</p>
    <form method="POST">
        <label for="numero">Número:</label><br>
        <input type="number" name="numero" required><br>

        <button type="submit">Ver fatorial</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $numero = $_POST['numero'];

    echo fatorial($numero);
}
?>