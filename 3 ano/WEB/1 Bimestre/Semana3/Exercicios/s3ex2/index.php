<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php
        $A = array(1,1,1,1,1,1);
        $B = array(3,3,3,3,3,3);
        $C = array();
        $aux = 0;

        for($i=0;$i<6;$i++){
            $C[$aux] = $A[$i];
            $aux = $aux+1;
            $C[$aux] = $B[$i];
            $aux = $aux+1;
        }
        for($i=0;$i<12;$i++){
            echo "$C[$i]";
        }
    ?>
</body>
</html>