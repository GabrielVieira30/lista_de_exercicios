<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Execicio 1</title>
</head>
<body>


     <form method="POST" action="">
        <label for="numero_primo">Verifica se é um número par ou impar :</label>
        <input type="number" id="numero_primo" name="numero_primo" required>
        <button type="submit" name="verificar_primo">Verificar</button>
   </form>

   <?php
   
   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['verificar_primo'])){
        $numero = $_POST['numero_primo'];
        $ehPrimo = true;
        if($numero % 2 == 0){
            echo 'é um número par';
        }else{
            echo 'é um número impar';
                }
            };

   };

   ?>
   
</body>
</html>