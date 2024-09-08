<?php
if(!isset($_SESSION)){
    session_start();
}
require_once("conecta_bd.php");

function ListarSeries(){
    $lista = [];
    $sql = "SELECT s.id_s, s.Nome, c.Descricao,  s.Temporada, s.Lancamento, s.Finalizada
    FROM Serie s
    JOIN Categoria c 
    WHERE s.id_c = c.id_c";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado=$stmt->get_result();
    while($serie = mysqli_fetch_assoc($resultado)){
        array_push($lista,$serie);
    }
    $stmt->close();
    $conexao->close();
    return $lista;
}

function removerSerie($id_s){
    $sql="DELETE FROM Serie WHERE id_s = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$id_s);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = "Série removida.";
        $_SESSION["tipo_msg"] = "alert-danger";
    }else{
        $_SESSION["msg"] = "Não foi possível remover a série.";
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}

function inserirSerie($id_c,$nome,$temporada,$lancamento,$finalizada){
    $sql="INSERT INTO Serie (id_c,Nome,Temporada,Lancamento,Finalizada) VALUES (?,?,?,?,?)";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isisi",$id_c,$nome,$temporada,$lancamento,$finalizada);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = "A série '{$nome}' foi cadastrada com sucesso!";
        $_SESSION["tipo_msg"] = "alert-success";
    }else{
        $_SESSION["msg"] = "Não foi possível cadastrar a série.";
        $_SESSION["tipo_msg"] = "alert-danger";
    }
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
    $stmt->close();
    $conexao->close();
    return mysqli_fetch_assoc($resultado);
}

function updateSerie($id_s,$id_c,$nome,$temporada,$lancamento,$finalizada){
    $sql="UPDATE Serie SET id_c = ?, Nome = ?, Temporada = ?, Lancamento = ?, Finalizada = ? WHERE id_s = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("isisii",$id_c,$nome,$temporada,$lancamento,$finalizada,$id_s);
    $stmt->execute();
    if($stmt->affected_rows>0){
        $_SESSION["msg"] = "A série '{$nome}' foi alterada!";
        $_SESSION["tipo_msg"] = "alert-warning";
    }else{
        $_SESSION["msg"] = "Não foi possível alterar a série.";
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}
?>