<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once("conecta_bd.php");

function buscarProduto($id_produto) {
  $sql = "SELECT * FROM Produto WHERE id_produto = $id_produto";
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);
  $produto = mysqli_fetch_assoc($resultado);
  mysqli_close($conexao);
  return $produto;
}

function listarProdutos() {
  $lista_produtos = [];
  $sql = "SELECT p.id_produto, p.descricao, p.valor, c.descricao as descricao_categoria
          FROM Produto p
          INNER JOIN Categoria c
          ON p.id_categoria = c.id_categoria";
  
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);

  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($lista_produtos, $produto);
  }

  mysqli_close($conexao);

  return $lista_produtos;
}

function inserirProduto($descricao, $valor, $categoria) {
  $conexao = obterConexao();
  $sql = "INSERT INTO Produto (descricao, valor, id_categoria) 
                       VALUES ('$descricao', $valor, $categoria)";
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $_SESSION["msg"] = "O produto {$descricao} foi adicionado!";
  } else {
    $_SESSION["msg"] = "O produto {$descricao} não foi adicionado! Erro: " . mysqli_error($conexao);
  }
  mysqli_close($conexao);
}

function alterarProduto($id_produto, $descricao, $valor, $categoria) {
  $conexao = obterConexao();
  $sql = "UPDATE Produto 
          SET descricao = '$descricao', valor = $valor, id_categoria = $categoria
          WHERE id_produto = $id_produto";
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $_SESSION["msg"] = "O produto {$descricao} foi alterado!";
  } else {
    $_SESSION["msg"] = "O produto {$descricao} não foi alterado! Erro: " . mysqli_error($conexao);
  }  
  mysqli_close($conexao);
}

function removerProduto($id_produto) {
  $sql = "DELETE FROM Produto WHERE id_produto = $id_produto";
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $_SESSION["msg"] = "O produto foi removido!";
  } else {
    $_SESSION["msg"] = "O produto não foi removido! Erro: " . mysqli_error($conexao);
  }
  mysqli_close($conexao);
}

?>