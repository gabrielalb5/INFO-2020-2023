<?php
    require("../database/serie_bd.php");
    $id_s = $_POST["id_s"];
    removerSerie($id_s);
    header("Location:serie_lista.php");
?>