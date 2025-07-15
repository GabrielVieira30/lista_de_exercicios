<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 8</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">    Contar quantos números pares existem entre 1 e o número informado.</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar">Verificar</button>
   </form>
    <?php
    if (isset($_POST['verificar'])) {
        $numero = $_POST['numero'];
        $contador = 0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $contador++;
            }
        }
        echo "<p>Existem $contador números pares entre 1 e $numero.</p>";
    }
    ?>
</body>
</html>