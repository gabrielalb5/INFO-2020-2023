<?php
    require("../database/pais_bd.php");
    $id_p = $_POST["id_p"];
    $nome = $_POST["nome"];
    $id_r = $_POST["id_r"];
    $capital = $_POST["capital"];
    $grupo = $_POST["grupo"];
    updatePais($id_p,$id_r,$nome,$capital,$grupo);
    header("Location:lista_paises.php");
?>