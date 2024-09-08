<?php
require_once("conecta_bd.php");
function ListarSeries(){
    $lista_series = [];
    $sql = "SELECT s.id_s, s.Nome, s.Lancamento, s.Temporadas, c.Descricao as 'Categoria'
    FROM Serie s
    JOIN Categoria c
    WHERE c.id_c = s.id_c";

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

function inserirSerie($id_c,$nome,$lancamento,$temporadas){
    $sql = "INSERT INTO Serie (id_c,Nome,Lancamento,Temporadas) VALUES ($id_c, '$nome', $lancamento, $temporadas)";
    $conexao = obterConexao();
    mysqli_query($conexao,$sql);
    mysqli_close($conexao);
}

function buscarSerie($id_s) {
    $sql = "SELECT * FROM Serie WHERE id_s = $id_s";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    $serie = mysqli_fetch_assoc($resultado);
    mysqli_close($conexao);
    return $serie;
}

function updateSerie($id_s,$id_c,$nome,$lancamento,$temporadas){
    $sql = "UPDATE Serie SET id_c = $id_c, Nome = '$nome', Lancamento = $lancamento, Temporadas = $temporadas WHERE id_s = $id_s";
    $conexao = obterConexao();
    mysqli_query($conexao,$sql);
    mysqli_close($conexao);
}
?>