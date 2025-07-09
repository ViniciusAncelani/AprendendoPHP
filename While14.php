<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> While 14</title>
</head>
<body>

<form method="get">

    <?php

    $i = 1;
    $n = "";
    $age = "";

    while ($i <= 5) {
        echo "Nome: <input type='text' name='Nome' required><br>";
        echo "Idade: <input type='number' name='Idade' required><br>";
        echo "Sexo: <input type='text' name='Sexo' required><br>";
        $i++;
    }

    ?>

    <br><input type="submit" value="Enviar">
    
</form>

<?php

if (isset($_GET['Nome'])) {
    echo "<h3> Nome dos homens maiores de 21 anos: </h3>";
    echo "<ul>";

    $i = 1;

    while ($i <= 5) {
        if ($age > 21){
            echo "<li>$n é um Homem maior de 21 anos</li>";
        }
        $i++;
    }

    echo "</ul>";
}

?>

</body>
</html>