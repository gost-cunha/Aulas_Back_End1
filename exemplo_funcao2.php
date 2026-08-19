<?php
    function nomeDaFuncao($paramentro1, $paramentro2) {
        $resultado = $paramentro1 + $paramentro2;
        return $resultado;
    }

    $soma = nomeDaFuncao(5, 10);
    echo "O resultado é: " . $soma;
?>