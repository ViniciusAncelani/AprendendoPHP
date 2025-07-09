<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 38 </title>
</head>
<body>

<h2>Digite o Dividendo e o Divisor</h2>

<form method="get">
    Dividendo: <input type="number" name="dividendo" required><br>
    Divisor: <input type="number" name="divisor" required><br><br>
    <input type="submit" value="Dividir">
</form>

<?php
if (isset($_GET['dividendo']) && $_GET['divisor'] > 0) {
    $a = $_GET['dividendo'];
    $b = $_GET['divisor'];
    $q = 0;

    for (; $a >= $b; $q++) {
        $a -= $b;
    }

    echo "<h3>Quociente: $q<br>Resto: $a</h3>";
}
?>

</body>
</html>
