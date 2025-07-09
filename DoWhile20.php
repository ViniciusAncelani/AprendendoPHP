<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 20 </title>
</head>
<body>
    
    
    <form method="get">
        Primeiro número: <input type="number" name="a" required><br>
    Segundo número: <input type="number" name="b" required><br>
    <input type="submit" value="Gerar Série de Ricci">
</form>

<?php

if (isset($_GET['a'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    echo "Série de Ricci: $a, $b";
    $i = 3;

    do {
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
        $i++;
    } while ($i <= 20);
}

?>

</body>
</html>