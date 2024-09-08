<?php
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
  mysqli_query($conexao, $sql);
  mysqli_close($conexao);
}

function removerProduto($id_produto) {
  $sql = "DELETE FROM Produto WHERE id_produto = $id_produto";
  $conexao = obterConexao();
  mysqli_query($conexao, $sql);
  mysqli_close($conexao);
}

?>