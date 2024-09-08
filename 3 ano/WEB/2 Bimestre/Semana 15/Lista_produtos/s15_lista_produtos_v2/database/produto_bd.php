<?php

function obterConexao() {
  $servidor = "localhost";
  $usuario = "web";
  $senha = "web";
  $banco = "shoppingvirtual";
  
  $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
  
  if (!$conexao) {
    echo "Não foi possível conectar ao banco de dados! Erro: " . mysqli_connect_error();
    die();  
  }
  
  return $conexao;
}

function listarProdutos() {
  $lista_produtos = [];
  $sql = "SELECT * FROM Produto";
  
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);

  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($lista_produtos, $produto);
  }

  mysqli_close($conexao);

  return $lista_produtos;
}

?>