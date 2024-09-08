<?php
    require("../database/filme_bd.php");
    $id_u = $_POST["id_u"];
    $id_f = $_POST["id_f"];
    $comentario = $_POST["comentario"];
    reviewAdd($id_u,$id_f,$comentario);
    header("Location:lista_filmes_user.php");
?>