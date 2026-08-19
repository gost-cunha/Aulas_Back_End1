<?php
function validateUser($nome, $senha)
{
    $nome_valido = "Igor";
    $senha_valida = "123456";

    if ($nome === $nome_valido && $senha === $senha_valida) {
        return true;
    } else {
        return false;
    }
}

$nome = $_POST["nome"];
$senha = $_POST["senha"];

if (validateUser($nome, $senha)) {
    header("Location: painel.php");
    exit;
} else {
    header("Location: index.php?msg=erro");
    exit;
}
?>