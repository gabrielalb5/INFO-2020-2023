<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel ALbino">
    <title>Exercício 2</title>
</head>
<body>
    <h3>Casos de dengue</h3>
    <form action="src/ex2.php" method="post">
        <label>Cidade:</label>
        <select name="cidade" required>
            <option value="">Escolha...</option>
            <option value="1">Araraquara</option>
            <option value="2">Matão</option>
            <option value="3">São Carlos</option>
        </select>
        <br><br>
        <label>Quantidade de casos:</label>
        <input type="number" name="casos" required/>
        <br><br>
        <label>Curados:</label>
        <input type="number" name="curados" required/>
        <br><br>
        <input type="submit" value="Cadastrar">
        <br><br><a href="src/tabela.php">Relatório</a>
        <br><a href="src/fim_sessao.php">Encerrar sessão</a>
    </form>
</body>
</html>