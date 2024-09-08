<?php
if (!isset($_SESSION)){
    session_start();
}
require_once("conecta_bd.php");
function listarpets(){
    $lista_pets = [];
    $sql = "SELECT p.id_p, p.Nome, e.Tipo, p.Raca, p.Nascimento, p.Comentario, p.Adotado
    FROM Pet p
    JOIN Especie e WHERE e.id_e = p.id_e;";

    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,$sql);

    while($pet = mysqli_fetch_assoc($resultado)){
        array_push($lista_pets,$pet);
    }
    mysqli_close($conexao);
    return $lista_pets;
}

function removerpet($id_p){
    $sql = "DELETE FROM Pet WHERE id_p = $id_p";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado) {
        $_SESSION["msg"] = "Pet removido!";
        $_SESSION["tipo_msg"] = "alert-danger";
      } else {
        $_SESSION["msg"] = "O pet não foi removido! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
      }
    mysqli_close($conexao);
}

function cadastrarpet($id_e,$nome,$raca,$nascimento,$comentario,$adotado){
    $sql = "INSERT INTO Pet (id_e,Nome,Raca,Nascimento,Comentario,Adotado) VALUES ($id_e, '$nome', '$raca', '$nascimento', '$comentario', $adotado)";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    if ($resultado) {
        $_SESSION["msg"] = "Cadastro de {$nome} realizado!";
        $_SESSION["tipo_msg"] = "alert-success";
      } else {
        $_SESSION["msg"] = "Cadastro de {$nome} não foi realizado! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
      }
    mysqli_close($conexao);
}

function buscarpet($id_p){
    $sql = "SELECT * FROM Pet WHERE id_p = $id_p";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    $pet = mysqli_fetch_assoc($resultado);
    mysqli_close($conexao);
    return $pet;
}

function updatepet($id_p,$id_e,$nome,$raca,$nascimento,$comentario,$adotado){
    $sql = "UPDATE Pet SET id_e = $id_e, Nome = '$nome', Raca = '$raca', Nascimento = '$nascimento', Comentario = '$comentario', Adotado = $adotado WHERE id_p = $id_p";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,$sql);
    if ($resultado) {
        $_SESSION["msg"] = "O cadastro de {$nome} foi alterado!";
        $_SESSION["tipo_msg"] = "alert-warning";
      } else {
        $_SESSION["msg"] = "O cadastro de {$nome} não foi alterado! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
      }
    mysqli_close($conexao);
}
?>