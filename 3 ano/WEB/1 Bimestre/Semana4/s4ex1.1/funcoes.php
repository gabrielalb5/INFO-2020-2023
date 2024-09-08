<?php
    function calcular($salario){
        if($salario>4000){
            $sal_novo = $salario+($salario*0.05);
        }else if($salario>1900 && $salario<=4000){
            $sal_novo = $salario+($salario*0.1);
        }else{
            $sal_novo = $salario+($salario*0.2);
        }
        return $sal_novo;
    }
?>