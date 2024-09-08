<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1.3</title>
</head>
<body>
    <h3>Estacionamento</h3>
    <form action="src/gerencia_estacionamento.php" method="post">
        <label>Descrição:</label>
        <input type="text" name="carro" required/><br><br>
        <label>Placa:</label>
        <input type="text" name="placa" required/><br><br>
        <label>Horário de entrada:</label>
        <input type="number" name="entrada" required/><br><br>        
        <label>Horário de saída:</label>
        <input type="text" name="saida" required/><br><br>
        <input type="submit" value="Enviar"/><br><br>
    </form>
</body>
</html>