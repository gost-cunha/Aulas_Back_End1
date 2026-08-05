<?php
echo "<h1>Resultado</h1>";

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$resultado = $num1 + $num2;

echo "$num1 + $num2 = " . $resultado;
?>