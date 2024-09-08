<?php
    function verificar($numeros,$sorteados){
        $acertos=0;
        for($i=0;$i<6;$i++){
            for($j=0;$j<6;$j++){
                if($numeros[$i]==$sorteados[$j]){
                    $acertos++;
                }
            }
        }
        echo "<br><br>Número de acertos: {$acertos}";
    }
?>