<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 42 </title>
</head>
<body>

<h2>Digite o tempo e a distância</h2>

<form method="get">
    Tempo (segundos): <input type="number" name="tempo" required><br>
    Distância (km): <input type="number" step="0.01" name="distancia" required><br><br>
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['tempo'])) {
    $tempo = $_GET['tempo'];
    $distancia = $_GET['distancia'];
    $valor = ($tempo * 0.02) + ($distancia * 1);
    echo "<h3>Valor a pagar: R$ " . number_format($valor, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>
