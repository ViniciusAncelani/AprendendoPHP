<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> While 15 </title>
</head>

<body>
    <form method="get">
        <input type="number" name="Number" placeholder = "Digite a limite">
        <input type="number" name="Add" placeholder = "Digite a razão">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

    $number = 0;
    if(ISSET($_GET['Number'])) $number = $_GET['Number'];
    
    $add = 0;
    if(ISSET($_GET['Add'])) $add = $_GET['Add'];
    $add2 = $add;

    while ($add <= $number) {
        echo $add . ","; 
        $add += $add2;
    if ($add > $number) {
        break;
    }

}


?>
