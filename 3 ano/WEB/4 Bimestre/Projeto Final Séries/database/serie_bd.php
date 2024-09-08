<?php
require_once("conecta_bd.php");
function ListarSeries(){
    $lista_series = [];
    $sql = "SELECT s.id_s, s.Nome, s.Temporadas, c.Descricao as 'Categoria', s.Lancamento, s.Finalizada
    FROM Serie s
    JOIN Categoria c
    WHERE c.id_c = s.id_c";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($serie = mysqli_fetch_assoc($resultado)){
        array_push($lista_series,$serie);
    }
    $stmt->close();
    $conexao->close();
    return $lista_series;
}

function removerSerie($id_s){
    $sql = "DELETE FROM Serie WHERE id_s = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_s);
    $stmt->execute();
    $stmt->close();
    $conexao->close();
}

function inserirSerie($id_c,$nome,$temporadas,$lancamento,$finalizada){
    $sql = "INSERT INTO Serie (id_c,Nome,Temporadas,Lancamento,Finalizada) VALUES (?, ?, ?, ?, ?)";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isisi", $id_c, $nome, $temporadas, $lancamento, $finalizada);
    $stmt->execute();
    $stmt->close();
    $conexao->close();
}

function buscarSerie($id_s){
    $sql = "SELECT * FROM Serie WHERE id_s = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$id_s);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $serie = mysqli_fetch_assoc($resultado);
    $stmt->close();
    $conexao->close();
    return $serie;
}

function updateSerie($id_s,$id_c,$nome,$temporadas,$lancamento,$finalizada){
    $sql = "UPDATE Serie SET id_c = ?, Nome = ?, Temporadas = ?, Lancamento = ?, Finalizada = ? WHERE id_s = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isisii",$id_c,$nome,$temporadas,$lancamento,$finalizada,$id_s);
    $stmt->execute();
    $stmt->close();
    $conexao->close();
}
?>