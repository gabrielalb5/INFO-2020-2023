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
        table,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>Relatório</title>
</head>
<body>
    <h3>Relatório casos de dengue</h3>
    <table>
        <tr>
            <th>Cidade</th>
            <th>Casos</th>
            <th>Recuperados</th>
        </tr>
        <?php
            include("funcoes.php");
            imprimir();
        ?>
    </table>
    <?php
        if(isset($_SESSION["lista"])){
            soma();
        }
    ?>
    <a href="index.php">Cadastrar mais casos</a>
</body>
</html>