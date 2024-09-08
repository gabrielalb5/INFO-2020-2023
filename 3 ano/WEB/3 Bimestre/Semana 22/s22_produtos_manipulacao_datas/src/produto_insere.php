<?php
require("../database/produto_bd.php");

$descricao = $_POST["descricao_produto"];
$valor = $_POST["valor_produto"];
$data_cadastro = $_POST["data_cadastro"];
$categoria = $_POST["categoria_produto"];

inserirProduto($descricao, $valor, $data_cadastro, $categoria);

header("Location: produto_lista.php");
?>