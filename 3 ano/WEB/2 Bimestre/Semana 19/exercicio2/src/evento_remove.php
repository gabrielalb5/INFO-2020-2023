<?php
    require("../database/evento_bd.php");
    $id_e = $_POST["id_e"];
    RemoverEvento($id_e);
    header("Location:evento_lista.php");
?>