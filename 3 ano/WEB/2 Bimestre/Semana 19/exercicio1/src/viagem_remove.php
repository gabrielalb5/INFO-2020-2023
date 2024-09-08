<?php
    require("../database/viagem_bd.php");
    $id_v = $_POST["id_v"];
    RemoverViagem($id_v);
    header("Location:viagem_lista.php");
?>