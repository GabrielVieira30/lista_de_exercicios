<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 10</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numero">Receber um número e exibir a sequência de Fibonacci até esse número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="contar">Mostrar sequência</button>
    </form>

   <?php
   if (isset($_POST['contar'])) {
       $numero = $_POST['numero'];
       $a = 0;
       $b = 1;

       echo "<p>Sequência de Fibonacci até $numero:</p>";
       while ($a <= $numero) {
           echo "$a ";
           $temp = $a;
           $a = $b;
           $b = $temp + $b;
       }
   }
   ?>

</body>
</html>