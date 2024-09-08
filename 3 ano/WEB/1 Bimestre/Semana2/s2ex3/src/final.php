<?php  
    echo "<h3>Resultado da Reavaliação</h3>";
    $rv = $_POST["rv"];

    if($rv>=6){
        echo "Aprovado!";
    }else{
        echo "Reprovado :(";
    }
?>