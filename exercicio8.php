<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contar quantos números pares existem entre 1 e o número informado.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero"> Contar quantos números pares existem entre 1 e o número informado:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
   </form>

   <?php

       if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar_numero'])) {
        $numero = $_POST['numero'];
        $pares = [];

        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $pares[] = $i;
            }
        }

        echo "Os números pares de 1 a $numero são: " . implode(", ", $pares);
    }


   ?>
 
</body>
</html>