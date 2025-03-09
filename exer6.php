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
        <h1>Exercicio 6</h1>
        <form method="post">
            <div class="mb-3">
                <label for="valor" class="form-label">Digite um valor</label>
                <input type="number" name="valor" class="form-control" required>    
                <button type="submit" class="btn btn-primary mt-3">Exibir valor</button>
            </div>
        </form>

        <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Captura o valor informado e converte para inteiro
            $numero = intval($_POST['valor']);

            // Exibe os números de 1 até o valor informado
            echo "<h2>Número de 1 até $numero:</h2>";
            echo "<div style='background: lightblue; padding: 10px;'>";

            // Loop para imprimir os números
            for ($i = 1; $i <= $numero; $i++) {
                echo "$i ";
            }

            echo "</div>";
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>
