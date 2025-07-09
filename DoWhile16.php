<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DoWhile 16 </title>
</head>
<body>

<?php

$Num = 26;
$res = 00;

do {

    $res += $Num;
    $Num+=2;

} while ($Num <= 200);

echo "A soma dos números pares entre 25 e 200 é: . $res";

?>
    
</body>
</html>