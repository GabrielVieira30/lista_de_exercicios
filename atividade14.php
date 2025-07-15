<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <form method="POST" action="">
        <label for="ano">Verificar se um ano é bissexto:</label>
        <input type="text" id="ano" name="ano" required>
        <button type="submit" name="converter">Verificar</button>
    </form>
    <?php
   if (isset($_POST['converter'])) {
       $ano = $_POST['ano'];

       if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
           echo "<p>O ano $ano é bissexto.</p>";
       } else {
           echo "<p>O ano $ano não é bissexto.</p>";
       }
   }
   ?>
</body>
</html>