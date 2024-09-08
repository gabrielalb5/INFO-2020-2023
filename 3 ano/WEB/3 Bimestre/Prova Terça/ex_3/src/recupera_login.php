<?php
    session_start();
    require("../database/usuario_bd.php");
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $usuario = buscarUsuario($email,$senha);
    sessaoLogin($usuario);
?>