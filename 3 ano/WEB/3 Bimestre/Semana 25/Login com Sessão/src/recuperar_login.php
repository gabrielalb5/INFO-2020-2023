<?php
session_start();
require("../database/usuario_bd.php");
$email = $_POST["email"];
$senha_md5 = $_POST["senha"];
$usuario = buscarUsuario($email,$senha_md5);
    if ($usuario == null) {
    header("Location:erro.php");
    } else {
    $_SESSION["logado"] = $usuario["nome"];
    header("Location:principal.php");
    }
    die();
?>