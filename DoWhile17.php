<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 17 </title>
</head>
<body>


<form method="get">
    Quantos números quer digitar? <input type="number" name="qtd" required>
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

        echo "<input type='submit' value='Verificar Maior'>";
        echo "</form>";

    } elseif (isset($_GET['num1'])) {
        $qtd = $_GET['qtd'];
        $maior = $_GET['num1'];
        $i = 2;
        
        do {
            $n = $_GET["num$i"];
            if ($n > $maior) {
                $maior = $n;
            }
            $i++;
        } while ($i <= $qtd);
    }

        echo "O maior número digitado é: $maior";
        ?>
    
</body>
</html>