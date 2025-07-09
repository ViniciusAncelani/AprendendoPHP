<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 2 </title>
</head>
<body>

<?php

$input = 0;
$conta = 1;
$fatorial = 1;

if(isset($_GET['put'])) $input = $_GET['put'];

while($conta <= $input){ 
    $fatorial *= $conta;
    $conta++;
}

echo "<p> O Fatorial do número inserido é: $fatorial </p>"

?>

<form method="get">
    <input type="number" name="put" required>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
