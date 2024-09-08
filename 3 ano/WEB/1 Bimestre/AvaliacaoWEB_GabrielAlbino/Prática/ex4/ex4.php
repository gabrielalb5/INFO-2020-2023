<?php
    session_start();
    $cidade = $_POST["cidade"];
    $casos = $_POST["casos"];
    $rec = $_POST["recuperados"];
    $lista = [$cidade,$casos,$rec];

    $_SESSION["recuperados"] = $rec;
    
    if(!isset($_SESSION["lista"])){
        $dados = [];
        array_push($dados,$lista);
        $_SESSION["lista"] = $dados;
    }else{
        $dados = $_SESSION["lista"];
        array_push($dados,$lista);
        $_SESSION["lista"] = $dados;
    }

    header("Location:relatorio.php");
?>