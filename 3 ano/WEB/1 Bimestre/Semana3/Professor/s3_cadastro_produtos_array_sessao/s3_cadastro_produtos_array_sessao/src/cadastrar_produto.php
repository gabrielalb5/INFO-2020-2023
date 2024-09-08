<?php
  include("produto_logica.php");

  $descricao = $_POST["descricao"];
  $preco = $_POST["preco"];
  $estoque = $_POST["estoque"];

  inserirProduto($descricao, $preco, $estoque);
  
  header("Location: ../index.php");
?>