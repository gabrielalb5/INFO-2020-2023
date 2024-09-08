<?php
    require("../database/user_bd.php");
    $id_u = $_POST["id_u"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    updateUsuario($id_u,$nome,$email,$senha);
    header("Location:../src/perfil_user.php");        
?>