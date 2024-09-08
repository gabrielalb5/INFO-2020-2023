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
    <title>Lista de Estudantes</title>
</head>
<body>
    
</body>
</html>
<?php
require("../database/estudante_bd.php");

$lista_estudantes = ListarEstudantes();

echo "<h3>Lista de Estudantes</h3>
    <table>
        <thead>
        <tr>
            <th>Estudante</th>
            <th>Nascimento</th>
            <th>Curso</th>
        </tr>
        </thead>
        <tbody>";
foreach ($lista_estudantes as $estudante){
    echo '<tr><td>'.$estudante["Nome_e"].'</td>';
    echo '<td>'.$estudante["Nascimento"].'</td>';
    echo '<td>'.$estudante["Nome_c"].'</td></td>';
}
echo "</tbody></table>";
?>