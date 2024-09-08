<?php
     function menor($aleatorios, $n){
        $menor = 0;
        for($i=0;$i<8;$i++){
            if($i==0){
                $menor = $aleatorios[$i];
                $menor_p = $i;
            }if($aleatorios[$i]<$menor){
                $menor = $aleatorios[$i];
                $menor_p = $i;
            }
        }
        echo "<br><br>Menor número do vetor: {$menor}";
        $aleatorios[$menor_p] = $n;
        echo "<br><br>Novo vetor: ";
        for($i=0;$i<8;$i++){
            echo "{$aleatorios[$i]} | ";
        }
    }
?>