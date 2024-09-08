<?php
    require("../database/filme_bd.php");
    $id_f = $_POST["id_f"];
    $titulo = $_POST["titulo"];
    $lancamento = $_POST["lancamento"];
    $id_c = $_POST["id_c"];
    $imagem = $_POST["imagem"];
    $trailer = $_POST["trailer"];
    if(array_key_exists("cb_disponivel",$_POST)){
        $disponivel = 1;
    }else{
        $disponivel = 0;
    }
    updateFilme($id_f,$titulo,$lancamento,$id_c,$imagem,$trailer,$disponivel);
    header("Location:lista_filmes_admin.php");
?>