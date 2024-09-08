<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 2</title>
</head>
<body>
<?php
    $n0 = $_POST["n0"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $numeros = [$n0, $n1, $n2, $n3, $n4, $n5];
    //var_dump($numeros);
    
    $loteria = [];
    for($i=0;$i<6;$i++){
    $aleatorio = mt_rand(1, 60);
    array_push($loteria, $aleatorio);
    };
    //var_dump($loteria);

    echo 'Usuário: ';
    for($i=0;$i<6;$i++){
        echo "$numeros[$i] | ";
    }
    echo '<br>Sorteados: ';
    for($i=0;$i<6;$i++){
        echo "$loteria[$i] | ";
    }
    include ("funcoes.php");
    echo "<br>Acertos: ";
    acertos($numeros, $loteria);
?>
</body>
</html>