<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $num = $_POST['num'];
    echo "Potência: " . pow($num, 2); // Eleva à potência
} else {
    echo "Erro ao gerar resultado.";
}
?>