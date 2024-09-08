<?php
    require("../database/serie_bd.php");
    $id_s = $_POST["id_s"];
    $id_c = $_POST["id_c"];
    $nome = $_POST["nome"];
    $temporada = $_POST["temporada"];
    $lancamento = $_POST["lancamento"];
    if(array_key_exists("cb_finalizada",$_POST)){
        $finalizada = 1;
    }else{
        $finalizada = 0;
    }
    updateSerie($id_s,$id_c,$nome,$temporada,$lancamento,$finalizada);
    header("Location:serie_lista.php");
?>