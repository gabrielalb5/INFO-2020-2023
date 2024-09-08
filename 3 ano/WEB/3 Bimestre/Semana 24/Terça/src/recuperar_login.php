<?php
require("../database/usuario_bd.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$usuario = buscarUsuario($email,$senha);
    if ($usuario == null) {
    header("Location:erro.php");
    } else {
    header("Location:principal.php");
    }
    die();
?>