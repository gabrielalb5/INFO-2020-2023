<?php
    require("../database/pais_bd.php");
    $nome = $_POST["nome"];
    $id_r = $_POST["id_r"];
    $capital = $_POST["capital"];
    $grupo = $_POST["grupo"];
    inserirPais($nome,$id_r,$capital,$grupo);
    header("Location:lista_paises.php");
?>