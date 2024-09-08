<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1.2</title>
</head>
<body>
    <h3>Conta Bancária</h3>
    <form action="ex2.php" method="post">
        <label>Nome do cliente:</label>
        <input type="text" name="nome" required>
        <p>
            <input type="radio" name="tipo_conta" value="1" required/>1-Especial
            <input type="radio" name="tipo_conta" value="2"/>2-Comum
        </p>
        <label>Saldo:</label>
        <input type="number" name="saldo" step=".01" required>
        <p>
            <input type="radio" name="funcionalidade" value="a"/>a) Saque
            <input type="radio" name="funcionalidade" value="b"/>b) Depósito
            <input type="radio" name="funcionalidade" value="c"/>c) Bônus
            <input type="radio" name="funcionalidade" value="d"/>d) Cálculo da tarifa
        </p>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>