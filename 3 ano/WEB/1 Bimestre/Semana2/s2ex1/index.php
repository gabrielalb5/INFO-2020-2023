<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois números</title>
</head>
<body>
    <h3>Exemplo 1 - Soma de dois números</h3>    
    <form action="src/calculadora.php" method="post">
        <label for="id_n1">Informe o número 1:</label>
        <input type="number" name="n1" id="id_n1">
        <br><br>
        <label for="id_n2">Informe o número 2:</label>
        <input type="number" name="n2" id="id_n2">
        <br><br>
        <input type="submit" value="Somar">
    </form>
</body>
</html>