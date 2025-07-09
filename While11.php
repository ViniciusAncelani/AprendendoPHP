<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 11 </title>
</head>
<body>
    
<?php

$num1 = 0;
$i = 1;
$res = 0;

if(isset($_GET['res'])) $res = $_GET['res'];

while ($i <= 100){
    $num1 += $i;
    $i++;
}

echo "<h1> A soma dos números de 1 a 100 é: $num1 </h1>";

?>

</body>
</html>