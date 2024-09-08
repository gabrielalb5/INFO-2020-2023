<?php
require_once("conecta_bd.php");
function buscarUsuario($email,$senha_md5){
    $senha = md5($senha_md5);
    $sql = "SELECT * FROM Usuario
    WHERE email = '$email' AND senha ='$senha'";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    return mysqli_fetch_assoc($resultado);
}

function cadastrarUsuario($nome,$email,$senha){
    $senha_md5 = md5($senha);
    $sql = "INSERT INTO Usuario(nome,email,senha) VALUES ('$nome','$email','$senha_md5');";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,$sql);
    mysqli_close($conexao);
}
?>