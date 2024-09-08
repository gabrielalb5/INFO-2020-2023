<?php
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $pj = $_POST["pj"];
    $fr = $_POST["fr"];

    $p1 = $p1*3;
    $p2 = $p2*4;
    $pj = $pj*5;

    $media = ($p1+$p2+$pj)/12;
    if($media>6 && $fr>=75){
        echo "Aprovado!<br>Média: {$media}<br>Frequência: {$fr}";
    }else if($fr>=75){
        header("Location:reavaliacao.php");
    }else{
        echo "Reprovado :(<br>Média: {$media}<br>Frequência: {$fr}";
    }
?>