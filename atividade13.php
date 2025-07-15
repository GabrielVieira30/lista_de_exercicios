<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>
    <form method="POST" action="">
        <label for="celsius">Converter graus Celsius para Fahrenheit:</label>
        <input type="text" id="celsius" name="celsius" required>
        <button type="submit" name="converter">Converter</button>
    </form>

   <?php
   if (isset($_POST['converter'])) {
       $celsius = $_POST['celsius'];
       $fahrenheit = ($celsius * 9/5) + 32;
       echo "<p>$celsius graus Celsius é igual a $fahrenheit graus Fahrenheit.</p>";
   }
   ?>

</body>
</html>