<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber nome e idade e informar se a pessoa pode votar: </title>
</head>
<body>

   <form method="POST" action="">
        <label for="voto"> Receber nome e idade e informar se a pessoa pode votar: </label>
        <br>
        <label for="voto">  Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="voto">  Idade:</label>
        <input type="float" id="idade" name="idade" required>
        <button type="submit" name="verificar_voto">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_voto'])) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if ( $idade < 16){
            echo " $nome não pode votar";
        }else{
            echo " $nome pode votar";
        };

        };
    ?>
 
</body>
</html>