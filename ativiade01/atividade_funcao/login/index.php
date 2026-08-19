<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="login.php" method="POST">
        <?php
        $msg = $_GET["msg"] ?? "";
        if ($msg === "erro") {
            echo "<p style='color: red;'>Usuário ou senha inválidos!</p>";
        }
        ?>

        <label for="nome">Nome:</label>
        <input type="text" name="nome">

        <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        <br>

        <button type="submit">Fazer login</button>
    </form>
</body>

</html>