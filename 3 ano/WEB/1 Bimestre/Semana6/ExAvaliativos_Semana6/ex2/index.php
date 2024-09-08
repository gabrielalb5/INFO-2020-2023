<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 2</title>
</head>
<body>
    <h3>Destinos que gostaria de visitar</h3>
    <form action="src/ex2.php" method="post">
        <label>Destino:</label>
        <input type="text" name="destino" required/>
        <label>Tipo de turismo:</label>
        <select name="tipo" required>
            <option value="">Escolha...</option>
            <option value="1">Cultural</option>
            <option value="2">Ecológico</option>
            <option value="3">Esportivo</option>
            <option value="4">Lazer</option>
            <option value="5">Negócios e Eventos</option>
            <option value="6">Religioso</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
        <br><br><a href="src/tabela.php">Destinos</a>
        <br><a href="src/fim_sessao.php">Encerrar sessão</a>
    </form>
</body>
</html>