<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 24 </title>
</head>
<body>
    
    
    <form method="get">
        Quantos números deseja digitar? <input type="number" name="qtd" required>
    <input type="submit" value="Enviar">
</form>

<?php

    if (isset($_GET['qtd']) && !isset($_GET['num1'])) {
        $qtd = $_GET['qtd'];
        echo "<form method='get'>";
        echo "<input type='hidden' name='qtd' value='$qtd'>";
        $i = 1;

        do {
            echo "Número $i: <input type='number' name='num$i' required><br>";
            $i++;
        } while ($i <= $qtd);

        echo "<input type='submit' value='Verificar'>";
        echo "</form>";
    
    } elseif (isset($_GET['num1'])) {
        $qtd = $_GET['qtd'];
        $pares = 0;
        $impares = 0;
        $i = 1;

        do {
            $n = $_GET["num$i"];
            if ($n % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }

        $i++;
        
    } while ($i <= $qtd);
    echo "Pares: $pares<br>Ímpares: $impares";
}
?>

</body>
</html>
