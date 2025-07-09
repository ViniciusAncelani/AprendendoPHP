<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 31< /title>
</head>
<body>

<h2>Digite até 10 números (use -999 para parar)</h2>

<form method="get">

    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Número $i: <input type='number' name='num$i'><br>";
        }
    ?>

    <br><input type="submit" value="Calcular Triplo">
</form>

<?php
    if (isset($_GET['num1'])) {
    echo "<h3>Triplos:</h3><ul>";

        for ($i = 1; $i <= 10; $i++) {
            $n = $_GET["num$i"];
            if ($n == -999) break;
            echo "<li>Triplo de $n: " . ($n * 3) . "</li>";
    }

    echo "</ul>";
}

?>

</body>
</html>
