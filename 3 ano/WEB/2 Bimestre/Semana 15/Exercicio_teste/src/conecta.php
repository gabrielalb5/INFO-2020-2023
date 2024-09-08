<?php
    $servidor = "localhost";
    $usuario = "web";
    $senha = "web";
    $banco = "ifsp";

    $conectado = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conectado){
        echo "Não foi possível conectar. Erro". mysqli_connect_error();
        die();
    }
    echo "🌐 Conexão realizada com sucesso!";
    mysqli_close($conectado);
?>