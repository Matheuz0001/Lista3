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
        <h1>Exercicio 5</h1>
        <form method="post">
            <div class="nb-3">
                <label for="mes" class="form-label">Digite um número de 1 á 12</label>
                <input type="number" name="mes" class="form-control" min="1" max="12" required>
            </div>
            <p></p>
            <button type="submit" class="btn btn-primary">Exibir mês</button>
        </form>
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mes = intval($_POST['mes']); // Converte a entrada para número inteiro
            $nomeMes = ""; // Variável para armazenar o nome do mês

            // Estrutura switch para verificar o mês
            switch ($mes) {
                case 1:
                    $nomeMes = "Janeiro";
                    break;
                case 2:
                    $nomeMes = "Fevereiro";
                    break;
                case 3:
                    $nomeMes = "Março";
                    break;
                case 4:
                    $nomeMes = "Abril";
                    break;
                case 5:
                    $nomeMes = "Maio";
                    break;
                case 6:
                    $nomeMes = "Junho";
                    break;
                case 7:
                    $nomeMes = "Julho";
                    break;
                case 8:
                    $nomeMes = "Agosto";
                    break;
                case 9:
                    $nomeMes = "Setembro";
                    break;
                case 10:
                    $nomeMes = "Outubro";
                    break;
                case 11:
                    $nomeMes = "Novembro";
                    break;
                case 12:
                    $nomeMes = "Dezembro";
                    break;
                default:
                    $nomeMes = "Número inválido! Digite um valor de 1 a 12.";
                    break;
            }

            echo "<div class='alert alert-success mt-3'>Mês correspondente: <strong>$nomeMes</strong></div>";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>