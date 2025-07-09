<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 41 </title>
</head>
<body>

<h2>Digite um número para calcular a raiz</h2>

<form method="get">
    Número: <input type="number" name="num" required><br><br>
    <input type="submit" value="Calcular Raiz">
</form>

<?php
if (isset($_GET['num'])) {
    $n = $_GET['num'];
    $res = $n;
    $i = 1;
    $cont = 0;

    while ($res > 0) {
        $res -= $i;
        $i += 2;
        $cont++;
    }

    echo "<h3>Raiz quadrada aproximada de $n: $cont</h3>";
}
?>

</body>
</html>
