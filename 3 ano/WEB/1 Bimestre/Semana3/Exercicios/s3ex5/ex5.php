<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php
        $descricao = $_POST["descricao"];
        $preco = $_POST["preco"];
        $porcentagem = $_POST["porcentagem"];

        $porcentagem_dividida = $porcentagem/100;
        $novo_preco = $preco+($preco*$porcentagem_dividida);
        $diferenca = $novo_preco-$preco;

        echo "Descrição: {$descricao}<br>
        Preço atual: R$ {$preco}<br>
        Porcentagem de aumento: {$porcentagem}%<br>
        Novo preço: R$ {$novo_preco}<br>
        Diferença de valores: R$ {$diferenca}";
    ?>
</body>
</html>