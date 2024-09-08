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
    <h3>Exercício 1</h3>
    <p>Escreva um programa que leia um número e o armazene na sessão. Após isso, todo novo número informado pelo usuário deve ser somado ao valor anterior e o resultado armazenado na sessão novamente. O usuário também pode remover a sessão a qualquer momento, reiniciando o processo</p>
    <form action="ex1.php" method="post">
        <label>Digite um número:</label>
        <input type="number" name="n" required/>
        <input type="submit" value="Somar"/>
        <br><a href="fim_sessao.php">Encerrar sessão</a>
    </form>
</body>
</html>