<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel ALbino">
    <title>Exercício 4</title>
</head>
<body>
    <h3>Exercício 4</h3>
    <p>Escreva um programa que leia o nome do estudante, a nota de uma prova e de um exercício. Para obtenção da média, considere peso 3 (três) para a prova e peso 1 (um) para o exercício. Após o cálculo da média, imprima o nome do estudante, sua média e situação (aprovado para média igual ou superior a 6 (seis) ou recuperação para média inferior a 6 (seis)). Todos os cadastros devem ser armazenados em um array.</p>
    <form action="ex4.php" method="post">
        <label>Nome:</label>
        <input type="text" name="nome" required/>
        <br><br><label>Nota da prova:</label>
        <input type="number" name="pv" min="0" max="10" step="0.01" required/>
        <br><br><label>Nota do exercício:</label>
        <input type="number" name="ex" min="0" max="10" step="0.01" required/>
        <input type="submit" value="Enviar"/>
    </form>
    <br><a href="fim_sessao.php">Encerrar sessão</a>
    <br><a href="tabela.php">Boletim</a>
</body>
</html>