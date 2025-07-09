<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Execício 5 </title>
</head>
<body>
    
<?php

$input = 0;
$i = 2;
$j = 2;
$primo = false;
$num = 0;

if(isset($_GET['campo'])) $input = $_GET['campo'];

echo "<h1> Sequencia de números primos </h1>";

/* Verifica se o número é primo e imprimi ele: */
while ($i < $input) {
    if($input % $i != 0){
        $primo = true;
    } else {
        $primo = false;
    }
  $i++;
}

?>

<form method="get">
    <input type="number" name="campo" placeholder = "Digite o último número de uma sequência">
    <input type="submit" value="Enviar">
</form>

</body>
</html>
