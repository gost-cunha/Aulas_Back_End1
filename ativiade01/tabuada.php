<?php
/* Faça um código em que calcule a tabuada do número indicado em uma variável
com o nome de tabuada, aplica o laço de repetição FOR */

$tabuada = $_GET["numero"];

for ($i = 1; $i <= 10; $i++) {
    echo "$tabuada x $i = " . $tabuada * $i . "<br>";
}
?>