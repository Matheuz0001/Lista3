<?php
session_start();

if(!isset($_SESSION['valores'])) {
    $_SESSION['valores'] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $valor = intval($_POST['valor'] ?? 0);
    $_SESSION['valores'][] = $valor;
    
    if (count($_SESSION['valores']) === 7) {
        header("Location: respostaexer1.php");
        exit;
    }
}
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
        <h1 class="mb-4">Exercicio 1</h1>
        <p>Digite o valor <?php echo count($_SESSION['valores']) + 1; ?></p>

        <form method="post">
            <div class="mb-3">
                <input type="number" name="valor" class="form-control" required autofocus>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        <?php if (count($_SESSION['valores']) > 0) : ?>
            <div class="mt-4 alert alert-info">
                <strong>Valores digitados até agora:</strong> <?= implode(', ', $_SESSION['valores']); ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>