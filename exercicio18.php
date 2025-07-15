<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Receber 3 números e informar qual é o maior: </title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero"> Receber 3 números e informar qual é o maior: </label>
        <br>
        <label for="nu1"> Numero 1:</label>
        <input type="number" id="nu1" name="nu1" required>
        <label for="nu2"> Numero 2:</label>
        <input type="number" id="nu2" name="nu2" required>
        <label for="nu3"> Numero 3:</label>
        <input type="number" id="nu3" name="nu3" required>
        <br>
        <button type="submit" name="verificar_numeros">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_numeros'])) { 
        $nu1 = $_POST['nu1'];
        $nu2 = $_POST['nu2'];
        $nu3 = $_POST['nu3'];

        if (( $nu1 > $nu2 ) && ( $nu1 > $nu3 )){
            echo " o primeiro é o maior";
        }else if (( $nu2 > $nu1 ) && ( $nu2 > $nu3 )){
            echo " o segundo é o maior";
        }else{
             echo " o terceiro é o maior";
        };

        };
    ?>
 
</body>
</html>