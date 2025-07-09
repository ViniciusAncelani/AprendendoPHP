<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercício 29 </title>
</head>
<body>

<form method="get">
    Valor de n: <input type="number" name="n" required>
    <input type="submit" value="Calcular H">
</form>

<?php
    if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $H = 0;
    $i = 1;

        do {
            if ($i % 2 == 0) {
            $H -= 1 / $i;
        } else {
            $H += 1 / $i;
        }

        $i++;

        } while ($i <= $n);
        echo "H = $H";
}
?>

</body>
</html>