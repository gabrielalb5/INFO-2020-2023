<?php
    session_start();
    $regiao = $_POST["regiao"];
    $pais = $_POST["pais"];

    if(isset($_SESSION["lista"])){
        $lista = $_SESSION["lista"];
    }else{
        $lista = [1 => "Sem cadastro", 2 => "Sem cadastro",
                  3 => "Sem cadastro", 4 => "Sem cadastro",
                  5 => "Sem cadastro"];
    }
    $lista[$regiao] = $pais;
    $_SESSION["lista"] = $lista;
    header("Location:../index.php")
?>