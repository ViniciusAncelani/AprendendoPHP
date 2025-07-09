<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 4 </title>
</head>
<body>
    
<?php

$input = 0;
$i = 2;
$primo = true;
$res = "";

if(isset($_GET['campo'])) $input = $_GET['campo'];

while ($i < $input) {
    if($input % $i != 0){
        $primo = true;
    } else {
        $primo = false;
        break;
    }
    $i++;
}

    if ($primo == true) {
        echo $input . " É um número primo!";
    } else {
        echo $input . " Não é um número primo!";
    }

?>

<form method="get">
    <input type="number" name="campo" placeholder="Digite um número">
    <input type="submit" value="Enviar">
</form>

</body>
</html>