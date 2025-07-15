<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 7</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">    Verificar se o número é perfeito (soma dos divisores = número).</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar'])) {
        $numero = (int)$_POST['numero'];

        $somaDivisores = 0;

        for ($i = 1; $i < $numero; $i++) {

            if ($numero % $i === 0) {

                $somaDivisores += $i;
            }
        }
        if ($somaDivisores === $numero) {

            echo "$numero é um número perfeito.";

        } else {
            
            echo "$numero não é um número perfeito.";
        }
    }
    ?>
</body>
</html>

