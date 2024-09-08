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
    <h3>Destinos Turísticos</h3>
    <form action="src/ex1.php" method="post">
        <label>Região:</label>
        <select name="regiao" required>
            <option value="">Escolha...</option>
            <option value="1">África</option>
            <option value="2">Américas</option>
            <option value="3">Ásia-Pacífico</option>
            <option value="4">Europa</option>
            <option value="5">Oriente Médio</option>
        </select>
        <br><br>
        <label>País:</label>
        <input type="text" name="pais" required/>
        <br><br>
        <input type="submit" value="Enviar">
        <br><br><a href="src/tabela.php">Cadastrados</a>
        <br><a href="src/fim_sessao.php">Encerrar sessão</a>
    </form>
</body>
</html>