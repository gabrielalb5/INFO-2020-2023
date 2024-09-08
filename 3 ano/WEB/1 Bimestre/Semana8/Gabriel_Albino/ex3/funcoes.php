<?php
    function menor($vetor,$n){
        $menor = 0;
        for($i=0;$i<5;$i++){
            if($i==0){
                $menor=$vetor[$i];
            }
            if($vetor[$i]<=$menor){
                $menor= $vetor[$i];
                $menor_pos = $i;
            }
        }
        echo "<br>O menor número é: {$menor}";
        $vetor[$menor_pos] = $n;
        echo "<br>Novo vetor: ";
        for($i=0;$i<5;$i++){
            echo "$vetor[$i] | ";
        }
    }
?>