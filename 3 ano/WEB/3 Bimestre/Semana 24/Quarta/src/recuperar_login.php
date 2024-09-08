<?php
require("../database/usuario_bd.php");
$email = $_POST["email"];
$senha_md5 = $_POST["senha"];
$usuario = buscarUsuario($email,$senha_md5);
    if ($usuario == null) {
    header("Location:erro.php");
    } else {
    //setcookie("usuario_logado", $usuario["email"]);
    setcookie("logado", $usuario["nome"], time() + 60);
    header("Location:principal.php");
    }
    die();
?>