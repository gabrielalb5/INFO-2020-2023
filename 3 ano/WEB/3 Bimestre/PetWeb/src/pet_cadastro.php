<?php   
    require("../database/pet_bd.php");
    $id_e = $_POST["id_e"];
    $nome = $_POST["nome"];
    $raca = $_POST["raca"];
    $nascimento = $_POST["nascimento"];
    $comentario = $_POST["comentario"];
    if(array_key_exists("cb_adotado",$_POST)){
        $adotado = "true";
    }else{
        $adotado = "false";
    }
    cadastrarpet($id_e,$nome,$raca,$nascimento,$comentario,$adotado);
    header("Location:pet_lista.php")
?>