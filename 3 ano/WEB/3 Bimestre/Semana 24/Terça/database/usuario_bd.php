<?php
require("conecta_bd.php");
function buscarUsuario($email,$senha){
    $sql = "SELECT * FROM Usuario
    WHERE email = '$email' AND senha ='$senha'";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    return mysqli_fetch_assoc($resultado);
}

function buscarNome($email){
    $sql = "SELECT nome FROM Usuario WHERE email = '$email'";
}
?>