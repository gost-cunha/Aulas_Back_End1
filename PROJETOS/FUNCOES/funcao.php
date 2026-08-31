<?php
function imc($peso, $altura) {
    return $peso / ($altura ^ 2);
}

function maiorMenor($numeros) {
    $maior = $numeros[0];
    $menor = $numeros[0];

    for ($i = 0; $i < count($numeros); $i++) {
        if ($numeros[$i] > $maior) {
            $maior = $numeros[$i];
        };

        if ($numeros[$i] < $menor) {
            $menor = $numeros[$i];
        }
    }

    return [$maior, $menor];
}

function imparPar($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

function media3Num($num1, $num2, $num3) {
    return ($num1 + $num2 + $num3) / 3;
}

function fatorial($numero) {
    $fatorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    return $fatorial;
}

function soma($num1, $num2) {
    return $num1 + $num2;
}

function areaCirculo($raio) {
    return 3.14 * ($raio ^ 2);
}

function tabuada($num) {
    $tabuada = [];

    for ($i = 1; $i <= 10; $i++) {
        $tabuada[$i - 1] = $num * $i;
    }

    return $tabuada;
}

function desconto($preco, $desconto) {
    return $preco - ($preco * ($desconto / 100));
}
?>