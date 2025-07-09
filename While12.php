<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 12</title>
</head>
<body>

<h2>Digite 10 números</h2>

<form method="get">

    <?php

    $i = 1;
    while ($i <= 10) {
        echo "Número $i: <input type='number' name='num$i' required><br>";
        $i++;
    }
    ?>

    <br><input type="submit" value="Calcular">
</form>

<?php
if (isset($_GET['num1'])) {
    echo "<h3>Quadrados dos números informados:</h3>";
    echo "<ul>";

    $i = 1;

    while ($i <= 10) {
        $n = $_GET["num$i"];
        $q = $n / 2;
        echo "<li>Número $i: $n / 2 = $q</li>";
        $i++;
    }
    echo "</ul>";
}

?>

</body>
</html>