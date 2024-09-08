<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel ALbino">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Série removida!</title>
</head>
<body>
    <?php
        require("../database/serie_bd.php");
        $nome = $_POST["nome"];
        $temporadas = $_POST["temporadas"];
        $lancamento = $_POST["lancamento"];
        inserirSerie($nome,$lancamento,$temporadas);
        echo "<center><p>A série {$nome} foi adicionada!</p></center>";
    ?>
    <center>
    <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a>
    </center>
</body>
</html>