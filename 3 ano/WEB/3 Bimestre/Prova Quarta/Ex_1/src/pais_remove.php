<?php
    require("../database/pais_bd.php");
    $id_p = $_POST["id_p"];
    removerPais($id_p);
    header("Location:lista_paises.php");
?>