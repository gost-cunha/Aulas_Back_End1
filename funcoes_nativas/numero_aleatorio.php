<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $numMin = $_POST['numMin'];
    $numMax = $_POST['numMax'];
    if ($numMin <= $numMax) {
        echo "O número aleatório é: " . rand($numMin, $numMax); // Gera um número aleatório
    } else {
        echo "Erro ao gerar resultado. Motivo: Número mínimo não pode ser maior que o máximo e nem o máximo menor que o mínimo.";
    }
} else {
    echo "Erro ao gerar resultado.";
}
?>