<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num = $_POST['num'];
    echo "Valor arredondado: " . round($num); // Valor arredondado da variável $n
} else {
    echo "Erro ao gerar resultado.";
}
?>