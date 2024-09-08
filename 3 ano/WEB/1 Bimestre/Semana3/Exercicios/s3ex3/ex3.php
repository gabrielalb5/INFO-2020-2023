<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
<?php
    $nome = $_POST["nome"];
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];

    for($i=0;$i<sizeof($nome);$i++){
        $media = ($n1[$i]+$n2[$i]+$n3[$i])/3;
        echo "{$nome[$i]}<br>Notas: {$n1[$i]} | {$n2[$i]} | {$n3[$i]}<br>Média: $media<br><br>";
    }
?>
</body>
</html>