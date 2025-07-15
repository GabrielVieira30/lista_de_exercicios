<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <form method="POST" action="">
        <label for="palavra">   Receber uma string e exibir a quantidade de vogais:</label>
        <input type="text" id="palavra" name="palavra" required>
        <button type="submit" name="verificar">Verificar</button>
    </form>

   <?php
   if (isset($_POST['verificar'])) {
       $palavra = $_POST['palavra'];
       $vogais = preg_match_all('/[aeiou]/i', $palavra, $matches);
       echo "<p>A quantidade de vogais na string '$palavra' é $vogais.</p>";
   }
   ?>

</body>
</html>