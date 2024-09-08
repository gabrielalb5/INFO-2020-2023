<?php
function obterConexao(){
    $servidor = "localhost";
    $usuario = "web";
    $senha = "web";
    $banco = "grupo8";
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
    if(!$conexao){
        echo "Não foi possível conectar. Erro". mysqli_connect_error();
        die();
    }
    mysqli_set_charset($conexao, "utf8");
    return $conexao;
}
?>