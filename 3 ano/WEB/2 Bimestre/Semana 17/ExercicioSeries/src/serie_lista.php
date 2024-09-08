<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <style>
        table, td, th, h3{
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Lista de Séries</title>
</head>
<body>
    <?php
    require("../database/serie_bd.php");
    $lista_series = ListarSeries();
    ?>
        <h3>Lista de Séries</h3>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Ano de Lançamento</th>
                <th>Temporadas</th>
                <th>Remover</th>
            </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lista_series as $serie) :
                ?>
            <tr>
                <td><?= $serie["id_s"]?></td>
                <td><?= $serie["Nome"]?></td>
                <td><?= $serie["Lancamento"]?></td>
                <td><?= $serie["Temporadas"]?></td>
                <td>
                    <form action="serie_remove.php" method="post">
                        <input type="hidden" name="id_s" value="<?=$serie["id_s"]?>">
                        <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                    </form>
                </td>
            </tr>
                <?php
                endforeach
                ?>
            </tbody>
        </table>
        <center>
        <a href="../public/index.php" class="btn btn-outline-dark">Voltar</a>
        </center>
</body>
</html>