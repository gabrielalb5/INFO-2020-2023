<?php
    require("../database/pet_bd.php");
    $id_p = $_POST["id_p"];
    removerpet($id_p);
    header("Location:pet_lista.php");
?>