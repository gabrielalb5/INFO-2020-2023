<?php
    $servidor = "localhost";
    $usuario = "web";
    $senha = "web";
    $banco = "ifsp";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conexao){
        echo "Não foi possível conectar. Erro". mysqli_connect_error();
        die();
    }
?>