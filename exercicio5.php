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
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_amigo">Verificar</button>
   </form>

   <?php

    function somarDivisores($n){

        $soma = 0;
        for($i = 1; $i < $n; $i++){

            if($n % $i == 0){
                $soma += $i;

            };
        };
        return $soma;
    };

        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset ( $_POST [ 'verificar_amigo'])){

            $a = $_POST['numero1'];
            $b = $_POST['numero2'];


            if(somarDivisores($a) == $b && somarDivisores($b) == $a){
                echo " $a e $b são amigos";
            }else{
                echo " $a e $b não são amigos";
            };
        };


   ?>
 
</body>
</html>