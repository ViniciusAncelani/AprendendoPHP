<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 33</title>
</head>
<body>

<h2>Digite até 10 pessoas e suas profissões (digite 'fim' para parar)</h2>

<form method="get">

    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "Nome $i: <input type='text' name='nome$i'><br>";
            echo "Profissão $i: <input type='text' name='prof$i'><br><br>";
        }
    ?>
    
    <input type="submit" value="Contar Dentistas">
</form>

<?php

    if (isset($_GET['nome1'])) {
    $cont = 0;

        for ($i = 1; $i <= 10; $i++) {
            $nome = strtolower($_GET["nome$i"]);
            $prof = strtolower($_GET["prof$i"]);
            if ($nome == "fim" || $prof == "fim") break;
            if ($prof == "dentista") $cont++;
        }

        echo "<h3>Número de dentistas: $cont</h3>";
    }
?>

</body>
</html>
