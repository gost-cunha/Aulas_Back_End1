<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impar ou Par</title>
</head>

<body>
    <h1>Impar ou Par</h1>
    <p>Veja se um número é impar ou par.</p>
    <form method="POST">
        <label for="numero">Número:</label><br>
        <input type="number" name="numero" required><br>

        <button type="submit">Checkar</button>
    </form>
</body>

</html>

<?php
require 'funcao.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $numero = $_POST['numero'];

    echo "$numero é " . imparPar($numero);
}
?>