<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>População</title>
</head>
<body>

<h2>População de Países</h2>

<form method="get">
    <input type="submit" value="Calcular anos para A ultrapassar B">
</form>

<?php
if ($_GET) {
    $a = 5000000;
    $b = 7000000;
    for ($anos = 0; $a <= $b; $anos++) {
        $a += $a * 0.03;
        $b += $b * 0.02;
    }
    echo "<h3>País A ultrapassa B em $anos anos</h3>";
}
?>

</body>
</html>
