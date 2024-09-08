<?php
require("../database/produto_bd.php");

$id_produto = $_POST["id_produto"];
$descricao = $_POST["descricao_produto"];
$valor = $_POST["valor_produto"];
$categoria = $_POST["categoria_produto"];

alterarProduto($id_produto, $descricao, $valor, $categoria);

header("Location: produto_lista.php");
?>