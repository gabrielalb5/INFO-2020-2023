<?php
    function somar($valor1, $valor2){
       return $valor1 + $valor2; 
    }

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $resultado = somar($n1, $n2);
    echo "Soma de {$n1} e {$n2} é: {$resultado}";
?>