<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num = $_POST['num'];
    echo "Raiz: " . sqrt($num); // Vê a raiz quadrada da variável $n
} else {
    echo "Erro ao gerar resultado.";
}
?>