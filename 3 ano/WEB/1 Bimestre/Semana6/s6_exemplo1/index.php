<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de atividades</title>
</head>
<body>
    <form action="src/cadastro_atividade.php" method="post">
        <label>Dia da semana:</label>
        <select name="dia_semana">
            <option value="domingo">Domingo</option>
            <option value="segunda">Segunda</option>
            <option value="terca">Terça</option>
        </select>
        <label>Atividade:</label>
        <input type="text" name="atividade">
        <input type="submit" value="Cadastrar Atividade">
    </form>
</body>
</html>