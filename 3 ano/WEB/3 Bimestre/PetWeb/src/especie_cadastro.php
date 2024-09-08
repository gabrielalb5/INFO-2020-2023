<?php   
    require("../database/especie_bd.php");
    $tipo = $_POST["tipo"];
    cadastrarespecie($tipo);
?>