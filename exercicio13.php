<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter graus Celsius para Fahrenheit:</title>
</head>
<body>

   <form method="POST" action="">
        <label for="grau"> Converter graus Celsius para Fahrenheit:</label>
        <input type="float" id="grau" name="grau" required>
        <button type="submit" name="verificar_grau">Verificar</button>
   </form>

   <?php

        if (isset($_POST['verificar_grau'])) {
        $temperaturacelcius = $_POST['grau'];

        $temperatuf = ($temperaturacelcius * 1.8) + 32;

        echo "$temperatuf ";
        };

    ?>
 
</body>
</html>