<?php
function obterConexao(){
    $servidor = "localhost";
    $usuario = "web";
    $senha = "web";
    $banco = "ifsp";
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$conexao){
        echo "<p class='text-white'>Não foi possível conectar. Erro". mysqli_connect_error();
        die();
    }
    mysqli_set_charset($conexao, "utf8");
    return $conexao;
}
?>