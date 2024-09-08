<?php
    echo "<h3>Exercício 3</h3>";
    //guardando digitados
    $numeros = [];
    for($i=1;$i<=6;$i++){
        $item = $_POST["n{$i}"];
        array_push($numeros,$item);
    }
    //var_dump($numeros);

    //criando sorteados
    $sorteados = [];
    for($i=0;$i<6;$i++){
        $num_s = mt_rand(1,60);
        array_push($sorteados,$num_s);
    }

    //mostrando os valores
    echo "Meus palpites: ";
    for($i=0;$i<6;$i++){
        echo "{$numeros[$i]} | ";
    }
    echo "<br>Sorteados: ";
    for($i=0;$i<6;$i++){
        echo "{$sorteados[$i]} | ";
    }

    //var_dump($sorteados);
    include("funcoes.php");
    verificar($numeros,$sorteados);

    echo '<br><br><a href="index.php">Voltar</a>';
?>