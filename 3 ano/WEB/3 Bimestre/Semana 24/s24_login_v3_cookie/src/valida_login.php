<?php
require("../database/usuario_bd.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuario = buscarUsuario($email, $senha);

if ($usuario == null) {
  header("Location: erro.php");  
} else {
  //setcookie("usuario_logado", $usuario["email"]);
  setcookie("usuario_logado", $usuario["email"], time() + 60);
  header("Location: principal.php");
}
die();
?>