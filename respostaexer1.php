<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercicio 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <h1>Exercicio 1</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      // inicia a variavel para encontrar o menor valor 
      $menor = PHP_INT_MAX;
      $posicao = 0;


      //percorre os 7 valores 
      for ($i = 1; $i <= 7; $i++) {
        $valor = isset($_POST["valor$i"]) ? intval($_POST["valor$i"]) : PHP_INT_MAX;

        if ($valor < $menor) {
          $menor = $valor;
          $posicao = $i;
        }
      }

      echo "<div class='alert alert-sucess mt-3'>";
      echo "<p><strong>Menor valor:</strong> $menor</p>";
      echo "<p><strong>Posição:</strong> $posicao</p>";
      echo "</div>";
    }
    ?>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>