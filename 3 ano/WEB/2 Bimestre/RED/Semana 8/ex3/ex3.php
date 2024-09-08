<?php
    include("funcoes.php");
    $n = $_POST["n"];
    $vetor = [];
    for($i=0;$i<5;$i++){
        $n_vet = mt_rand(1,100);
        array_push($vetor,$n_vet); 
    }
    //var_dump($vetor);
    echo "Vetor: ";
    for($i=0;$i<5;$i++){
        echo "$vetor[$i] | ";
    }
    menor($vetor,$n);
?>