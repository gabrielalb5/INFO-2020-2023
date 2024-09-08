<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <form action="ex5.php" method="post">
        <label>Descrição</label>
        <input type="text" name="descricao" required><br><br>
        <label>Preço atual:</label>
        <input type="number" name="preco" min="0" step=".01" required><br><br>
        <label>Porcentagem (%) de aumento:</label>
        <input type="number" name="porcentagem" step=".01" min="0" required><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>