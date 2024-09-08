<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
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
    <title>Exercício 1</title>
</head>
<body>
    <h3>Tabela de atividades</h3>
    <table border="1">
        <tr>
            <th>Dia da semana</th>
            <th>Atividade</th>
        </tr>
        <?php
        include("funcoes.php");
        imprimirAtividade();
        ?>
    </table>
    <br><a href="index.php">Cadastrar Atividade</a>
</body>
</html>