<?php
    session_start();
?>
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
    <form action="ex1.php" method="post">
        <label>Dia da semana:</label>
        <select name="dia" id="dia" required>
        <option value="">Escolha...</option>
        <option value="1">Domingo</option>
        <option value="2">Segunda</option>
        <option value="3">Terça</option>
        <option value="4">Quarta</option>
        <option value="5">Quinta</option>
        <option value="6">Sexta</option>
        <option value="7">Sábado</option>
        </select><br><br>
        <label>Atividade:</label>
        <input type="text" name="atv" required/><br><br>
        <input type="submit" value="Cadastrar"/>
    </form>
    <br><a href="tabela.php">Lista de atividades</a>
    <br><a href="fim_sessao.php">Encerrar sessão</a>
</body>
</html>