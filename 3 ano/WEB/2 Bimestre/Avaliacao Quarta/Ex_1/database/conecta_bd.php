<?php
function obterConexao(){
    $servidor = "localhost";
    $usuario = "web";
    $senha = "web";
    $banco = "ifsp";
    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conexao){
        echo "Não foi possível conectar-se ao banco. Erro: ". mysqli_connect_error();
    }else{
        return $conexao;
    }
}
?>