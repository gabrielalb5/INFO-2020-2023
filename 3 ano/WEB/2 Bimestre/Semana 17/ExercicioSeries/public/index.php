<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Exercício 2.3</title>
</head>
<body>
    <center>
    <h3>Exibir séries</h3>
    <form action="../src/serie_lista.php">
        <input class="btn btn-outline-dark" type="submit" value="Listar"></br></br>
    </form>
    <h3>Insira uma nova série</h3>
    <form action="../src/serie_insere.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required><br><br>
        <label>Temporadas:</label>
        <input type="number" name="temporadas" required min="0"><br><br>
        <label>Ano de lançamento:</label>
        <input type="number" name="lancamento" required min="0"><br><br>
        <input class="btn btn-outline-dark" type="submit" value="Cadastrar"></br></br>
    </form>
    </center>
</body>
</html>