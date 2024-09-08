<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h3>Exercício 2</h3>
    <form action="src/mediaponderada.php" method="post">
        <label>Prova 1:</label>
        <input type="number" name="p1" min="0" max="10" required>
        <br><br>
        <label>Prova 2:</label>
        <input type="number" name="p2" min="0" max="10" required>
        <br><br>
        <label>Projeto:</label>
        <input type="number" name="pj" min="0" max="10" required>
        <br><br>
        <input type="submit" value="Média">
    </form>
</body>
</html>