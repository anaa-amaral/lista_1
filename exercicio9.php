<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber um número e exibir a sequência de Fibonacci até esse número.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero"> Receber um número e exibir a sequência de Fibonacci até esse número.</label>
        <input type="number" id="numero" name="numero" required>
        <input type="number" id="numero2" name="numero2" required>
        <button type="submit" name="verificar_numero">Verificar</button>
   </form>

   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verificar_numero'])) {
        $numero = $_POST['numero'];
        $numero2 = $_POST['numero2'];

        if ($numero > $numero2) {
            list($numero1, $numero2) = array($numero2, $numero1); //lista para atribuir valores
        }

        $soma = 0;
        for ($i = $numero + 1; $i < $numero2; $i++) {
            if ($i != $numero && $i != $numero2) { //diferente de !=
                $soma += $i;//adição
            }
        }

        echo "A soma de todos os números entre $numero e $numero2,  é: " . $soma;
    }
  
    ?>
 
</body>
</html>