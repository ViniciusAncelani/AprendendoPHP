<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 25 </title>
</head>
<body>
    
<form method="get">

    <?php

        $i = 1;

        do {
            echo "Número $i: <input type='number' name='num$i' required><br>";
            $i++;
        } while ($i <= 15);

    ?>

    <input type="submit" value="Calcular">
</form>

<?php
    if (isset($_GET['num1'])) {
    $cont = 0;
    $i = 1;

    do {

        if ($_GET["num$i"] > 30) {
            $cont++;
        }
        $i++;
        
    } while ($i <= 15);
    echo "Quantidade de números maiores que 30: $cont";
}
?>

</body>
</html>

