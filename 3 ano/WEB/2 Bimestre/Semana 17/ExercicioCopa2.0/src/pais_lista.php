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
    <title>Copa do Mundo 2022</title>
</head>
<body>
    <?php
    require("../database/pais_bd.php");

    $lista_paises = ListarPaises();
    ?>
    <h3>Lista de Países</h3>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>País</th>
                <th>Continente</th>
                <th>Idioma</th>
                <th>Moeda</th>
                <th>Posição do IDH</th>
                <th>Remover</th>
            </tr>
        </thead>
        <tbody class="thead-light">
    <?php
    foreach ($lista_paises as $pais) :
    ?>
            <tr>
                <td><?= $pais["id_p"] ?></td>
                <td><?= $pais["NomeP"] ?></td>
                <td><?= $pais["NomeC"] ?></td>
                <td><?= $pais["Idioma"] ?></td>
                <td><?= $pais["Moeda"] ?></td>
                <td><?= $pais["IDH"] ?></td>
                <td>
                    <form action="pais_remove.php" method="post">
                        <input type="hidden" name="id_p" value="<?=$pais["id_p"]?>">
                        <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                    </form>
                </td>
            </tr>
    <?php
    endforeach
    ?>
        </tbody>
        </table>
</body>
</html>