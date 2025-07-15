<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simular um formulário de login: comparar usuário e senha com valores fixos:</title>
</head>
<body>

   <form method="POST" action="">
        <label for="login">   Simular um formulário de login: comparar usuário e senha com valores fixos:</label>
        <br>
        <label for="login">  Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="login">  Senha:</label>
        <input type="text" id="senha" name="senha" required>
        <button type="submit" name="verificar_login">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_login'])) {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        $nomec = 'Ana';
        $senhac = 1234;

        if (( $nome == $nomec) && ($senha == $senhac)){
            echo " login válido";
        }else{
            echo " login invalido";
        };

        };
    ?>
 
</body>
</html>