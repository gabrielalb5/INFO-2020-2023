<?php
    function media($pv1,$pv2,$pj){
        $media = ($pv1*2+$pv2*3+$pj*4)/9;
        if($media>=6){
            $situacao = "Aprovado!";
        }else{
            $situacao = "Recuperação :(";
        }
        echo 'Média: ' .number_format($media,2). '<br>';
        echo "Sua situação é: {$situacao}<br>";
    }
?>