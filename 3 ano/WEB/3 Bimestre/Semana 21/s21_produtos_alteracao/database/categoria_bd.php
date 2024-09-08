<?php
require_once("conecta_bd.php");

function listarCategorias() {
  $lista_categorias = [];
  $sql = "SELECT * FROM Categoria";
  
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);

  while ($categoria = mysqli_fetch_assoc($resultado)) {
    array_push($lista_categorias, $categoria);
  }

  mysqli_close($conexao);

  return $lista_categorias;
}

?>