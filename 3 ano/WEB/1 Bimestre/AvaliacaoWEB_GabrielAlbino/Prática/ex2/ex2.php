<?php
    echo "<h3>Exercício 2</h3>";
    $n = $_POST["numero"];
    $aleatorios = [];
    for($i=0;$i<8;$i++){
        $item = mt_rand(1,100);
        array_push($aleatorios,$item);
    }
    echo "Vetor inicial: ";
    for($i=0;$i<8;$i++){
        echo "{$aleatorios[$i]} | ";
    }
    include("funcoes.php");
    menor($aleatorios,$n);
    echo '<br><br><a href="index.php">Voltar</a>';
?>