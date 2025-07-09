<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> Exercício 43 </title>
</head>
<body>

<h2>Escolha a árvore onde o marciano está (1 a 100)</h2>

<form method="get">
    Posição do Marciano: <input type="number" name="marciano" min="1" max="100" required><br>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "Tentativa $i: <input type='number' name='tentativa$i' min='1' max='100'><br>";
    }
    ?>
    <br><input type="submit" value="Jogar">
</form>

<?php
if (isset($_GET['marciano'])) {
    $marciano = $_GET['marciano'];
    $acertou = false;

    for ($i = 1; $i <= 5; $i++) {
        $tent = $_GET["tentativa$i"];
        if ($tent == $marciano) {
            echo "<h3>Parabéns! Acertou na tentativa $i.</h3>";
            $acertou = true;
            break;
        } elseif ($tent < $marciano) {
            echo "<p>Tentativa $i: Mais à direita.</p>";
        } else {
            echo "<p>Tentativa $i: Mais à esquerda.</p>";
        }
    }

    if (!$acertou) {
        echo "<h3>Você perdeu! O marciano estava na árvore $marciano.</h3>";
    }
}
?>

</body>
</html>
