<?php
    echo "<h3>Exercício 1</h3>";
    $nome = $_POST["nome"];
    $pv1 = $_POST["pv1"];
    $pv2 = $_POST["pv2"];
    $pj = $_POST["pj"];

    echo "Estudante: {$nome}<br>";
    //echo "Prova 1: {$pv1}<br>";
    //echo "Prova 2: {$pv2}<br>";
    //echo "Projeto: {$pj}<br>";

    include("funcoes.php");
    media($pv1,$pv2,$pj);

    echo '<br><a href="index.php">Voltar</a>';
?>