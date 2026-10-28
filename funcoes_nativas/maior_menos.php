<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];

    $maior_valor = max($num1, $num2, $num3, $num4, $num5); // Retorna o maior valor/número
    $menor_valor = min($num1, $num2, $num3, $num4, $num5); // Retorna o menor valor/número

    echo "Valores comparados: $num1, $num2, $num3, $num4 e $num5: <br>";
    echo "O maior valor é $maior_valor e o menor valor é $menor_valor";
} else {
    echo "Erro ao gerar resultado.";
}
?>