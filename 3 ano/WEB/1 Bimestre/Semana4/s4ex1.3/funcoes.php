<?php
    function valor($hre, $hrs){
        $x = 12;
        $hr_tot = $hrs-$hre;

        if($hr_tot==1){
            $valor = $x;
        }else if($hr_tot==0){
            $valor = 0;
        }else{
            $valor = $x+(($x/3)*($hr_tot-1));
        }
        return $valor;
    }
    
    function desconto($valor){
        if($valor<=20){
            $desconto = $valor-($valor*0.05); 
        }else if($valor<=50){
            $desconto = $valor-($valor*0.1); 
        }else{
            $desconto = $valor-($valor*0.2); 
        }
        return $desconto;
    }
?>