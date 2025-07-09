<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 22 </title>
</head>
<body>
    
    
    <form method="get">
        
    <?php

        $i = 1;

        do {
        echo "Número $i: <input type='number' name='num$i' required><br>";
        $i++;

        } while ($i <= 20);
    ?>

        <input type="submit" value="Calcular Soma">
    </form>

<?php

if (isset($_GET['num1'])) {
    $soma = 0;
    $i = 1;
    
    do {
        $n = $_GET["num$i"];
        if ($n * $n < 225) {
            $soma += $n;
        }
        $i++;
    } while ($i <= 20);

    echo "Soma: $soma";
}

?>

</body>
</html>