<?php
function imparPar($numero)
{
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["num"];

    if (isset($numero)) {
        echo "O número $numero é " . imparPar($numero);
    }
}
?>