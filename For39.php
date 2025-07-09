<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 39 </title>
</head>
<body>

<h2>Digite até 10 números de 4 dígitos (fora disso para parar)</h2>

<form method="get">

    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Número $i: <input type='number' name='num$i'><br>";
    }
    ?>

    <br><input type="submit" value="Verificar">
</form>

<?php
if (isset($_GET['num1'])) {
    echo "<h3>Resultados:</h3><ul>";
    for ($i = 1; $i <= 10; $i++) {
        $n = $_GET["num$i"];
        if ($n < 1000 || $n > 9999) break;
        $parte1 = intval($n / 100);
        $parte2 = $n % 100;
        $soma = $parte1 + $parte2;

        if ($soma * $soma == $n) {
            echo "<li>$n possui a característica</li>";
        } else {
            echo "<li>$n NÃO possui a característica</li>";
        }
    }
    echo "</ul>";
}
?>

</body>
</html>
