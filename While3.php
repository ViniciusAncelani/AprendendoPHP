<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 3 </title>
</head>
<body>
    
<?php

$input = 0;
$numbers = 1;
$conta = 1;
$res = "";

if(isset($_GET['campo'])) $input = $_GET['campo'];

while($numbers <= $input){
    $numbers += $conta;
    $conta++;
    $res = $numbers;
    echo $res . ",";
}
?>

<form method="get">
    <input type="number" name="campo" placeholder="Digite o último número da série de Fibonacci">
    <input type="submit" value="Enviar">
</form>

</body>
</html>