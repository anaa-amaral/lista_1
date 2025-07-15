<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Receber um número e exibir a sequência de Fibonacci até esse número.</title>
</head>
<body>

   <form method="POST" action="">
        <label for="numero"> Receber um número e exibir a sequência de Fibonacci até esse número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit" name="verificar_numero">Verificar</button>
   </form>

   <?php
    
        if (isset($_POST['verificar_numero'])) {
            $numero = $_POST['numero'];
            
            $a = 0;
            $b = 1;

            echo "<p>Sequência de Fibonacci até $numero:</p>";
            echo "<p>";

            while ($a <= $numero) {
                echo "$a ";
                $proximo = $a + $b;
                $a = $b;
                $b = $proximo;
            };

            echo "</p>";
        };

?>
 
</body>
</html>