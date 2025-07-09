<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Quadrados dos Números</title>
</head>
<body>

<h2>Digite 15 números</h2>

<form method="get">

    <?php

    $i = 1;
    while ($i <= 15) {
        echo "Número $i: <input type='number' name='num$i' required><br>";
        $i++;
    }
    ?>

    <br><input type="submit" value="Calcular Quadrados">
    
</form>

<?php
if (isset($_GET['num1'])) {
    echo "<h3>Quadrados dos números informados:</h3>";
    echo "<ul>";

    $i = 1;

    while ($i <= 15) {
        $n = $_GET["num$i"];
        $q = $n * $n;
        echo "<li>Número $i: $n x $n = $q</li>";
        $i++;
    }

    echo "</ul>";
}

?>

</body>
</html>
