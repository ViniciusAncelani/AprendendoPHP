<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercíco 19 </title>
</head>
<body>
    
</body>
</html>

<form method="get">
    Primeiro número: <input type="number" name="a" required><br>
    Segundo número: <input type="number" name="b" required><br>
    <input type="submit" value="Multiplicar">
</form>

<?php

if (isset($_GET['a'])) {
    $a = $_GET['a'];
    $b = $_GET['b'];
    $resultado = 0;
    $i = 0;
    $limite = abs($b);

    do {
        $resultado += $a;
        $i++;
    } while ($i < $limite);

    if ($b < 0) {
        $resultado = -$resultado;
    }
    echo "Resultado: $resultado";
}

?>