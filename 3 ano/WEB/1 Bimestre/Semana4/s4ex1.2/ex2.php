<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1.2</title>
</head>
<body>
    <?php
        include ("funcoes.php");
        $nome =  $_POST["nome"];
        $tipo_conta = $_POST["tipo_conta"];
        $saldo = $_POST["saldo"];
        $func = $_POST["funcionalidade"];

        switch($tipo_conta){
            case 1: $tipo_conta = "Especial";
                    $tarifa = 25;
                    break;
            case 2: $tipo_conta = "Comum";
                    $tarifa = 90;
                    break;
        }

        echo "Cliente: {$nome}<br>
        Tipo de conta: {$tipo_conta}<br>
        Saldo: R$ {$saldo}<br>
        Funcionalidade: ";
        
        switch ($func){
            case "a": echo "Saque";
                break;
            case "b": echo "Depósito";
                break;
            case "c": echo "Bônus";
                break;
            case "d": echo "Cálculo da tarifa";
                break;
        };

        if($func=="c"){
            $bonus = bonus($saldo);
            echo "<br>Bônus: {$bonus}%<br>";
        }else if($func=="d"){
            echo "<br>Tarifa: R$ {$tarifa}";
        }
    ?>
</body>
</html>