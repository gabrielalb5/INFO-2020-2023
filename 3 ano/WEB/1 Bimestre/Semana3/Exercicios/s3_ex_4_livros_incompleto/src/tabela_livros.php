<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>Livros Cadastrados</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Ano de publicação</th>
            <th>Editora</th>
        </tr>
        <?php
        include("livro_logica.php");
        imprimirLivros();
        ?>
    </table>
    <br><a href="../index.php">Cadastrar Livro</a>
</body>
</html>