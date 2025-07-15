<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 9</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Receber dois números e exibir a soma de todos os números entre eles:</label>
        <input type="number" id="numero" name="numero" required>
          <input type="number" id="numero" name="numero2" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>

   
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar'])) {
        $numero1 = (int)$_POST['numero'];
        $numero2 = (int)$_POST['numero2'];
        $soma = 0;
        if ($numero1 < $numero2) {
            for ($i = $numero1 + 1; $i < $numero2; $i++) {
                $soma += $i;
            }
        } else {
            for ($i = $numero2 + 1; $i < $numero1; $i++) {
                $soma += $i;
            }   
        }
        echo "A soma de todos os números entre $numero1 e $numero2 é $soma.";
    }
   
    ?>
</body>
</html>