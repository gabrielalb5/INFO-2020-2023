<?php
    function acertos($numeros, $loteria){
        $cont = 0;
        for($i=0;$i<6;$i++){
            for($j=0;$j<6;$j++){
                if($numeros[$i]==$loteria[$j]){
                    $cont++;
                }
            }
        }
        echo $cont;
    }
?>