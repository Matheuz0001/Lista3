<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Exercicio 7</h1>
        <form method="post">
            <div class="mb-3">
                <label for="valor" class="form-label">Digite um valor</label>
                <input type="number" name="valor" class="form-control" required>
                <button type="submit" class="btn btn-primary mt-3">Exibir valor</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = intval($_POST['valor']);

            $soma = 0;
            $contador = 1;

            while ($contador <= $numero) {
                $soma += $contador;
                $contador++;
            }

            echo "<h2>A soma dos números 1 até $numero é: $soma</h2>";
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>