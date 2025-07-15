<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
     <form method="POST" action="">
        <label for="palavra">   Verificar se uma palavra é um palíndromo:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

   <?php
   if (isset($_POST['verificar'])) {
       $palavra = $_POST['palavra'];
       $palavraInvertida = strrev($palavra);

       if ($palavra == $palavraInvertida) {
           echo "<p>A palavra '$palavra' é um palíndromo.</p>";
       } else {
           echo "<p>A palavra '$palavra' não é um palíndromo.</p>";
       }
   }
   ?>

</body>
</html>