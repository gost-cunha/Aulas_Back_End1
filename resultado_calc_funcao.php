<?php
$n1 = $_POST["n1"]; // Recebe o valor do campo n1 do formulário
$n2 = $_POST["n2"]; // Recebe o valor do campo n2 do formulário
$n3 = $_POST["n3"]; // Recebe o valor do campo n3 do formulário

// Verifica se os valores foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Criar uma função chamada "media" e pegando 3 parâmetros
    function media($n1, $n2, $n3)
    {
        // Retorna a média da soma de n1 + n2 + n3 que são os parâmetros
        $media = ($n1 + $n2 + $n3) / 3;
        echo "<h3>Calculo da média</h3>";
        echo "<n>A média das notas:</n><br>";
        echo "-------------------------<br>";
        echo "Nota 1: $n1<br>";
        echo "Nota 2: $n2<br>";
        echo "Nota 3: $n3<br>";
        echo "-------------------------<br>";
        echo "Média é $media";
        echo "-------------------------<br>";
    }

    // Chamar e imprimir o que retorna na função media()
    if (isset($n1) || isset($n2) || isset($n3)) {
        media($n1, $n2, $n3);
    }
} else {
    echo "Nenhuma nota foi digitada!";
}
?>