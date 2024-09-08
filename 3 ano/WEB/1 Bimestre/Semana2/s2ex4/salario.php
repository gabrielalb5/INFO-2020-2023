<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
<?php
    $hr = $_POST["hr"];
    $sal_min = 1200;
    $hr_trab = 0.05*$sal_min;
    $sal_bruto = $hr*$hr_trab;
    $imposto = 0.03*$sal_bruto;
    $sal_final = $sal_bruto-$imposto;

    echo "O salário a receber é de R$ {$sal_final}";
?>
</body>
</html>