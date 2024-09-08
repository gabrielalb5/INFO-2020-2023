<?php
    require("../database/participante_bd.php");
    $id_participante = $_POST["id_participante"];
    RemoverParticipante($id_participante);
    header("Location:lista.php");
?>