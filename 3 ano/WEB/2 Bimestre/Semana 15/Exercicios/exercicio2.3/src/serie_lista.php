<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <style>
        table, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>Lista de Séries</title>
</head>
<body>
    
</body>
</html>
<?php
require("../database/conexao_bd.php");
require("../database/serie_bd.php");

$lista_series = ListarSeries($conexao);

echo "<h3>Lista de Séries</h3>
    <table>
        <thead>
        <tr>
            <th>Código Série</th>
            <th>Nome</th>
            <th>Ano de Lançamento</th>
            <th>Temporadas</th>
        </tr>
        </thead>
        <tbody>";
foreach ($lista_series as $serie){
    echo '<tr><td>'.$serie["id_s"].'</td>';
    echo '<td>'.$serie["Nome"].'</td>';
    echo '<td>'.$serie["Lancamento"].'</td>';
    echo '<td>'.$serie["Temporadas"].'</td></td>';
}
echo "</tbody></table>";
?>