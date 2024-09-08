<?php
require("../database/produto_bd.php");

$descricao = $_POST["descricao_produto"];
$valor = $_POST["valor_produto"];
$id_categoria = $_POST["categoria_produto"];

inserirProduto($descricao, $valor, $id_categoria);
?>

<p><a href="../public/index.php">Voltar</a></p>