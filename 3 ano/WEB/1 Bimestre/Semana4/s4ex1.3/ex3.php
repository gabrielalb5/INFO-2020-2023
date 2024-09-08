<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1.3</title>
</head>
<body>
    <?php
        include("funcoes.php");
        $desc = $_POST["desc"];
        $placa = $_POST["placa"];
        $hre = $_POST["hre"];
        $hrs = $_POST["hrs"];
        $valor = valor($hre,$hrs);
        $desconto = desconto($valor);

        echo "<p>
        Tipo do carro: {$desc}<br>
        Placa: {$placa}<br>
        Hora da Entrada: {$hre}<br>
        Hora da Saída: {$hrs}<br>
        Valor Pago: R$ {$desconto} (sem desconto: R$ {$valor})<br>
        </p>";
    ?>
</body>
</html>