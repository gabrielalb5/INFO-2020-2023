<?php
    $p1 = $_POST["p1"];
    $p2 = $_POST["p2"];
    $pj = $_POST["pj"];

    $p1 = $p1*3;
    $p2 = $p2*4;
    $pj = $pj*5;

    $media = ($p1+$p2+$pj)/12;

    echo "Prova 1: {$p1} | Prova 2: {$p2} | Projeto: {$pj}<br>Média ponderada: {$media}";
?>