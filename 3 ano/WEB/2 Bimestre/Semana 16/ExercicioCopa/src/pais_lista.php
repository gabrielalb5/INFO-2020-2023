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
    <title>Copa do Mundo 2022</title>
</head>
<body>
    <?php
    require("../database/pais_bd.php");

    $lista_paises = ListarPaises();

    echo '<h3>Lista de Países</h3>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>País</th>
                <th>Continente</th>
                <th>Idioma</th>
                <th>Moeda</th>
                <th>Posição do IDH</th>
            </tr>
            </thead>
            <tbody class="thead-light">';
    foreach ($lista_paises as $pais){
        echo '<tr><td>'.$pais["NomeP"].'</td>';
        echo '<td>'.$pais["NomeC"].'</td>';
        echo '<td>'.$pais["Idioma"].'</td>';
        echo '<td>'.$pais["Moeda"].'</td>';
        echo '<td>'.$pais["IDH"].'</td></tr>';
    }
    echo "</tbody></table>";
    ?>
</body>
</html>