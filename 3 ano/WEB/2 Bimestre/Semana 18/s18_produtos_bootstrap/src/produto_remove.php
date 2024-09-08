<?php
require("../database/produto_bd.php");

$id_produto = $_POST["id_produto"];
removerProduto($id_produto);

header("Location: produto_lista.php");
?>