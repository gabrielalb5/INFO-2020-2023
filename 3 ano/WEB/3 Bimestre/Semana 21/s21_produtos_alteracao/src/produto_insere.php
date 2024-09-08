<?php
require("../database/produto_bd.php");

$descricao = $_POST["descricao_produto"];
$valor = $_POST["valor_produto"];
$categoria = $_POST["categoria_produto"];

inserirProduto($descricao, $valor, $categoria);

header("Location: produto_lista.php");
?>