<?php
    require("../database/filme_bd.php");
    $id_f = $_POST["id_f"];
    deleteFilme($id_f);
    header("Location:lista_filmes_admin.php");
?>