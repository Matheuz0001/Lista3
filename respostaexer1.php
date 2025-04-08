<?php
session_start();
$valores = $_SESSION['valores'] ?? [];

if (count($valores) !== 7) {
  header("Location: exer1.php");
  exit;
}

$menor = min($valores);
$posicao = array_search($menor, $valores) + 1;
session_destroy(); //limpar sessão 
?>

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
    <h1 class="mb-4">Resultado</h1>
    <div class="alert alert-success">
      <p><strong>Valores digitados:</strong> <?= implode(', ', $valores); ?></p>
      <p><strong>Menor valor:</strong><?= $menor ?></p>
      <p><strong>Posição:</strong><?= $posicao ?></p>
    </div>

    <a href="exer1.php" class="btn btn-danger">Recomeçar</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>