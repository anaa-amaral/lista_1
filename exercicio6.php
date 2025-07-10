<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Exibir todos os divisores de um número.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero">Exibir todos os divisores de um número.</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_divisores">Verificar</button>
   </form>

<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];

   

    if (isset($_POST['verificar_divisores'])) {
        $numero = $_POST['numero'];
        $divisores = [];

        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                $divisores[] = $i;
            }
        }

        echo "Os divisores de $numero são: " . implode(", ", $divisores); // é utilizada para converter um array em uma única string

}
  }
    ?>
</body>
</html>
 
</body>
</html>