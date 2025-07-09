<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 35 </title>
</head>
<body>

<h2>Digite até 10 números (número <= 0 para parar)</h2>

<form method="get">
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "Número $i: <input type='number' name='num$i'><br>";
    }
    ?>
    <br><input type="submit" value="Verificar">
</form>

<?php
if (isset($_GET['num1'])) {
    echo "<h3>Resultados:</h3><ul>";
    for ($i = 1; $i <= 10; $i++) {
        $n = $_GET["num$i"];
        if ($n <= 0) break;
        $raiz = sqrt($n);
        if ($raiz == floor($raiz)) {
            echo "<li>$n é quadrado perfeito</li>";
        } else {
            echo "<li>$n NÃO é quadrado perfeito</li>";
        }
    }
    echo "</ul>";
}
?>

</body>
</html>
