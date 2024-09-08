<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1.1</title>
</head>
<body>
    <?php
        include ("funcoes.php");
        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $ano = $_POST["ano"];
        
        echo "Funcionário(a): {$nome}<br>
        Ano de contrtação: {$ano}<br>
        Salário atual: R$ {$salario}<br>";
        $sal_novo = calcular($salario);
        echo "Novo salário: R$ {$sal_novo}";
    ?>
</body>
</html>