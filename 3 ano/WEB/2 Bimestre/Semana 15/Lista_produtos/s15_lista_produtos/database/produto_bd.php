<?php
require("conecta_bd.php");

function listarProdutos($conexao) {
  $lista_produtos = [];
  $sql = "SELECT * FROM Produto";
  
  $resultado = mysqli_query($conexao, $sql);

  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($lista_produtos, $produto);
  }

  mysqli_close($conexao);

  return $lista_produtos;
}

?>