<?php
function obterConexao(){
    $servidor = "localhost";
    $usuario = "web";
    $senha = "web";
    $banco = "ifsp";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

    if(!$conexao){
        echo "Não foi possível conectar. Erro". mysqli_connect_error();
        die();
    }
    return $conexao;
}

function ListarSeries(){
    $lista_series = [];
    $sql = "SELECT * FROM Serie";

    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,$sql);

    while($serie = mysqli_fetch_assoc($resultado)){
        array_push($lista_series,$serie);
    }
    mysqli_close($conexao);
    return $lista_series;
}

function removerSerie($id_s){
    $sql = "DELETE FROM Serie WHERE id_s = $id_s";
    $conexao = obterConexao();
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
}

function inserirSerie($nome,$lancamento,$temporadas){
    $sql = "INSERT INTO Serie (Nome,Lancamento,Temporadas) VALUES ('$nome', $lancamento, $temporadas)";
    $conexao = obterConexao();
    mysqli_query($conexao,$sql);
    mysqli_close($conexao);
}
?>