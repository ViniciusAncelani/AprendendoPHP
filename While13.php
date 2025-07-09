<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> While 13 </title>
</head>
<body>
    
<?php

$base = 0;
$cima = 0;

if(isset($_GET['base'])) $base = $_GET['base'];
if(isset($_GET['cima'])) $cima = $_GET['cima'];

$res = $base ** $cima;

if ($cima > 1 && $base >= 2) {
      echo "<p> O resultado de $base elevado a $cima é: $res";
} else {
      echo "<h1> Digite um número válido";
}

?>

<form method="get">
    <input type="number" name = "base" placeholder = "Digite a base">
    <input type="number" name = "cima" placeholder = "Digite a potência">
    <input type="submit" value = "Enviar" >
</form>

</body>
</html>