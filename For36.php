<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercíco 36 </title>
</head>
<body>

<h2>Digite um número para verificar se é triangular</h2>

<form method="get">
    Número: <input type="number" name="num" required><br><br>
    <input type="submit" value="Verificar">
</form>

<?php
if (isset($_GET['num'])) {
    $n = $_GET['num'];
    $triangular = false;

    for ($i = 1; $i * ($i + 1) * ($i + 2) <= $n; $i++) {
        if ($i * ($i + 1) * ($i + 2) == $n) {
            $triangular = true;
            break;
        }
    }

    if ($triangular) {
        echo "<h3>$n é um número triangular!</h3>";
    } else {
        echo "<h3>$n NÃO é um número triangular.</h3>";
    }
}
?>

</body>
</html>
