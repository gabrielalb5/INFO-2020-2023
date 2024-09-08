<?php
    session_start();
    $nome = $_SESSION["nome"];
    include("../include/cabecalho.php");  
    include("criterios_avaliacao.php");
    echo "<h3>Resultado da Reavaliação</h3>";
    $rv = $_POST["rv"];
    if(aprovado($rv)){
        echo "{$nome}, você foi aprovado!";
    }else{
        echo "{$nome}, você foi reprovado :(";
    };
    include("../include/rodape.php");  
?>