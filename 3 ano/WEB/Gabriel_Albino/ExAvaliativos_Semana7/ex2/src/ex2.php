<?php
    session_start();
    $cidade = $_POST["cidade"];
    $casos = $_POST["casos"];
    $curados = $_POST["curados"];

    $lista = [$cidade, $casos, $curados];
    $_SESSION["lista"] = $lista;
    header("Location:../index.php");
    //var_dump($lista);
?>