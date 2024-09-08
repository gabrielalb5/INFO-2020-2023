<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <?php
        $nome = $_POST["nome"];
        $salario = $_POST["salario"];
        $ano = $_POST["ano"];

        echo "Funcionário(a): {$nome}<br>Ano de contrtação: {$ano}<br>Salário atual: R$ {$salario}<br>";
        if($salario>4000){
            $sal_novo = $salario+($salario*0.05);
        }else if($salario>1900 && $salario<=4000){
            $sal_novo = $salario+($salario*0.1);
        }else{
            $sal_novo = $salario+($salario*0.2);
        }
        echo "Novo salário: R$ {$sal_novo}";
    ?>
</body>
</html>