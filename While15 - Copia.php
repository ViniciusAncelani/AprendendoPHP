<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> While 15 </title>
</head>

<?php

    $number = 0;
    if(isset($_GET['Number'])) $number = $_GET['Number'];
    
    $add = 0;
    $add2 = $add;

    if(isset($_GET['Add'])) $number = $_GET['Add'];
    
    $i = 0;

    while ($add <= $number) {
        $add += $add2;
    if ($add > $number) {
        break;
    }

    echo $add . ",";

}


?>

<body>
    <form method="get">
        <input type="number" name="Number" placeholder = "Digite a limite">
        <input type="number" name="Add" placeholder = "Digite a razão">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>