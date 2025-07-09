<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 30 </title>
</head>
<body>
    
</body>
</html>

<h2>Digite o número da tabuada</h2>

<form method="get">
    Número: <input type="number" name="num" required><br><br>
    <input type="submit" value="Imprimir Tabuada">
</form>

<?php

    if (isset($_GET['num'])) { 
    $num = $_GET['num'];
    echo "<h3>Tabuada de $num:</h3><ul>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<li>$num x $i = " . ($num * $i) . "</li>";
        }

    echo "</ul>";
}
?>

</body>
</html>
