<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 23</title>
</head>
<body>
    
    
<form method="get">
        
    <?php

    $i = 1;

    do {
        echo "Número $i: <input type='number' name='num$i' required><br>";
        $i++;
    } while ($i <= 10);
    
    ?>
    
    <input type="submit" value="Calcular Média">
</form>

<?php

if (isset($_GET['num1'])) {
    $soma = 0;
    $i = 1;

    do {
        $soma += $_GET["num$i"];
        $i++;
    } while ($i <= 10);

    $media = $soma / 10;
    echo "Média: $media";
}
?>

</body>
</html>