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
        <h1>Exercício 2</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
                
            $soma = $valor1 + $valor2;

            if ($valor1 == $valor2) { 
                $resultado = $soma * 3;
                echo "<div class='alert alert-sucess'>Os valores são iguais, sedo assim, o triplo da soma é: <strong>$resultado</strong></div>";

            } else {
                echo "<div class='  alert alert-primary'>O valor da soma é: <strong>$soma</strong></div>";  
            }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html> 