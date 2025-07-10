<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Verificar se dois números formam um número amigo</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numeros"> Verificar se dois números formam um número amigo:</label>
        <input type="number" id="numero1" name="numero1" required>
        <button type="submit" name="verificar_amigo">Verificar</button>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_amigo">Verificar</button>
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