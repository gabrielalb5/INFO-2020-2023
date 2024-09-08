<?php
session_start();
require("../database/usuario_bd.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = buscarUsuario($email, $senha);

if ($usuario == null) {
  header("Location: erro.php");  
} else {
  $_SESSION["usuario_logado"] = $usuario["email"];
  header("Location: principal.php");
}
die();
?>