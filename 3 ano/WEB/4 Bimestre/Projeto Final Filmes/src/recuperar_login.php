<?php
session_start();
require("../database/user_bd.php");
$email = $_POST["email"];
$senha = $_POST["senha"];
$dados_consulta = buscarUsuario($email, $senha);
$usuario = $dados_consulta[0];
if ($usuario == null) {
  $saida = ["autenticado" => false, "msg" => $dados_consulta[1]];
} else {
    if($usuario["id_u"] == 1){
        $saida = ["autenticado_admin" => true];
    }else{
        $saida = ["autenticado" => true];
    }
  $_SESSION["usuario_logado"] = $usuario["Nome"];
}
$json = json_encode($saida);
echo $json;
?>