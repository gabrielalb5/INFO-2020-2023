<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1.1</title>
</head>
<body>
    <h3>Aumento Salarial</h3>
    <form action="ex1.php" method="post">
        <label>Nome:</label>
        <input type="name" name="nome" required><br>
        <label>Salário:</label>
        <input type="number" name="salario" min="0" required><br>
        <label>Ano de contratação:</label>
        <input type="number" name="ano" min="0" max="2022" required><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>