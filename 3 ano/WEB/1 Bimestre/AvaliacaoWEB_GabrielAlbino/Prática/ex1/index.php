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
    <h3>Exercício 1</h3>
    <form action="ex1.php" method="post">
        <label>Nome do estudante:</label>
        <input type="text" name="nome" required/><br><br>
        <label>Prova 1:</label>
        <input type="number" name="pv1" min="0" max="10" step="0.01" required/><br><br>
        <label>Prova 2:</label>
        <input type="number" name="pv2" min="0" max="10" step="0.01" required/><br><br>
        <label>Projeto:</label>
        <input type="number" name="pj" min="0" max="10" step="0.01" required/><br><br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>