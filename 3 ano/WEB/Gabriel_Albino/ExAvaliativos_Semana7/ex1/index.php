<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 1</title>
</head>
<body>
    <h3>Casos de dengue</h3>
    <form action="src/ex1.php" method="post">
        <label>Segunda:</label>
        <input type="number" name="segunda" required/></br></br>
        <label>Terça:</label>
        <input type="number" name="terca" required/></br></br>
        <label>Quarta:</label>
        <input type="number" name="quarta"required/></br></br>
        <label>Quinta:</label>
        <input type="number" name="quinta" required/></br></br>
        <label>Sexta:</label>
        <input type="number" name="sexta" required/></br></br>
        <input type="submit" value="Cadastrar"/></br></br>
        <a href="src/tabela.php">Relatório</a><br>
        <a href="src/fim_sessao.php">Encerrar sessão</a>
    </form>
</body>
</html>