<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 4</title>
</head>
<body>
    <h3>Exercício 4</h3>
    <form action="ex4.php" method="post">
        <label>Cidade:</label>
        <select name="cidade" required>
            <option value="">Escolha...</option>
            <option value="1">Araraquara</option>
            <option value="2">Matão</option>
            <option value="3">São Carlos</option>
        </select><br><br>
        <label>Casos:</label>
        <input type="number" name="casos" min="0" required/><br><br>
        <label>Recuperados:</label>
        <input type="number" name="recuperados" min="0" required/><br><br>
        <input type="submit" value="Cadastrar"/><br><br>
        <a href="relatorio.php">Dados</a><br>
        <a href="fim_sessao.php">Apagar informações</a>
</body>
</html>