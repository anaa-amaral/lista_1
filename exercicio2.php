<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a tabuada de um número</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">digite o número que você deseja ver a tabuada:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="tabuada_numero">Verificar</button>
   </form>

   <?php

   if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
        $numero = $_POST['numero'];

        $res1 = $numero * 1;
        $res2 = $numero * 2;
        $res3 = $numero * 3;
        $res4 = $numero * 4;
        $res5 = $numero * 5;
        $res6 = $numero * 6;
        $res7 = $numero * 7;
        $res8 = $numero * 8;
        $res9 = $numero * 9;
        $res10 = $numero *10;

        echo  $res1;
        echo '<br><br>';
        echo  $res2;
        echo '<br><br>'; 
        echo  $res3;
        echo '<br><br>'; 
        echo  $res4;
        echo '<br><br>';  
        echo  $res5;
        echo '<br><br>'; 
        echo  $res6;
        echo '<br><br>';  
        echo  $res7;
        echo '<br><br>';  
        echo  $res8;
        echo '<br><br>';
        echo  $res9;
        echo '<br><br>';
        echo  $res10;



}


   ?>
 
</body>
</html>