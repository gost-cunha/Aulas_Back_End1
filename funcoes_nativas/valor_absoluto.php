<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num = $_POST['num'];
    echo "Valor absoluto: " . abs($num); // Valor absoluto, é o quanto mais próximo ele está de 0
} else {
    echo "Erro ao gerar resultado.";
}
?>