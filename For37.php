<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 37 </title>
</head>
<body>

<h2>Digite até 10 números (0 para parar)</h2>

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
    echo "<h3>Números múltiplos de sua posição:</h3><ul>";
    for ($i = 1; $i <= 10; $i++) {
        $n = $_GET["num$i"];
        if ($n == 0) break;
        if ($n % $i == 0) {
            echo "<li>$n (posição $i)</li>";
        }
    }
    echo "</ul>";
}
?>

</body>
</html>
