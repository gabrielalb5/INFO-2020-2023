<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h3>Cadastro de livros</h3>
    <form action="cadastrar_livro.php" method="post">
        <label>Título:</label>
        <input type="text" name="titulo" required><br><br>
        <label>Autor:</label>
        <input type="text" name="autor" required><br><br>
        <label>Editora:</label>
        <input type="text" name="editora" required><br><br>
        <label>Ano de publicação:</label>
        <input type="number" name="ano" min="0" required><br><br>
        <input type="submit" value="Cadastrar" required>
    </form>
    <a href="tabela.php">Livros cadastrados</a>
</body>
</html>