<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contar números entre 100 e 200</title>
</head>
<body>

<h2>Digite até 10 números (digite 0 para parar)</h2>

<form method="get">

    <?php
        for ($i = 1; $i <= 10; $i++) {
        echo "Número $i: <input type='number' name='num$i'><br>";
    }

    ?>

    <br><input type="submit" value="Contar">
</form>

    <?php
        if (isset($_GET['num1'])) {
        $cont = 0;

            for ($i = 1; $i <= 10; $i++) {
                $n = $_GET["num$i"];
                if ($n == 0) break;
                if ($n >= 100 && $n <= 200) $cont++;
        }

    echo "<h3>Quantidade entre 100 e 200: $cont</h3>";

    }
?>

</body>
</html>
