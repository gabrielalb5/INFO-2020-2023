<?php
    session_start();
    $segunda = $_POST["segunda"];
    $terca = $_POST["terca"];
    $quarta = $_POST["quarta"];
    $quinta = $_POST["quinta"];
    $sexta = $_POST["sexta"];

    $dias = [$segunda, $terca, $quarta, $quinta, $sexta];
    $_SESSION["dias"] = $dias;
    header("Location:../index.php");
    //var_dump($dias);
?>