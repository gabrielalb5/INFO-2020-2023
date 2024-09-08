<?php   
    require("../database/serie_bd.php");
    $id_s = $_POST["id_s"];
    $id_c = $_POST["id_c"];
    $nome = $_POST["nome"];
    $temporadas = $_POST["temporadas"];
    $lancamento = $_POST["lancamento"];
    if(array_key_exists("cb_finalizada",$_POST)){
        $finalizada = 1;
    }else{
        $finalizada = 0;
    }
    updateSerie($id_s,$id_c,$nome,$temporadas,$lancamento,$finalizada);
    header("Location:serie_lista.php");
?>