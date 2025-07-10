<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar positivo ou negativo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Verifica se o número é positivo, negativo ou zero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_positivo">Verificar</button>
   </form>

   <?php

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

   $numero = $_POST['numero'];
   
    if($numero > 0){
        echo 'O número é positivo!';
    } else if ($numero < 0){
        echo 'O número é negativo';
    } else{
        echo 'O número é zero';
    };
}


   ?>
 
</body>
</html>