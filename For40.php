<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 40 </title>
</head>
<body>

<h2>Digite até 10 números</h2>

<form method="get">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Número $i: <input type='number' name='num$i'><br>";
    }
    ?>
    <br><input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['num1'])) {
    $produto = 1;
    $soma = 0;
    for ($i = 1; $i <= 10; $i++) {
        $n = $_GET["num$i"];
        if ($n % 2 == 0) {
            $soma += $n;
        } else {
            $produto *= $n;
        }
    }
    echo "<h3>Produto dos ímpares: $produto<br>Soma dos pares: $soma</h3>";
}
?>

</body>
</html>
