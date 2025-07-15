<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber uma senha e verificar se ela é forte (mín. 8 caracteres, com número e letra):</title>
</head>
<body>

   <form method="POST" action="">
        <label for="senha"> Receber uma senha e verificar se ela é forte (mín. 8 caracteres, com número e letra):</label>
        <input type="pasword" id="senha" name="senha" required>
        <button type="submit" name="verificar_senha">Verificar</button>
   </form>

   <?php


        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['ver'])){
            $senha = $_POST['senha'];

            if(strlen($s) >= 8){
                if(preg_match("/[a-z]/i", $s)){ // verifica as letras
                    if(preg_match("/[0-9]/", $s)){ // verifica os numeros
                        echo "senha forte";
                    } else {
                        echo "tem que ter número";
                    }
                } else {
                    echo "tem que ter letra";
                }
            } else {
                echo "tem que ter pelo menos 8 caracteres";
            }
        }
        }
?>

    
</body>
</html>

 
</body>
</html>