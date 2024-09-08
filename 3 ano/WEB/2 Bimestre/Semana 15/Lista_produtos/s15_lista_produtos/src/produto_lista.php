<?php
require("../database/conecta_bd.php");
require("../database/produto_bd.php");

$lista_produtos = listarProdutos($conexao);

foreach ($lista_produtos as $produto) {
  echo $produto["id_produto"] . " - ";
  echo $produto["descricao"] . " - ";
  echo $produto["valor"] . "<br>";
}

?>